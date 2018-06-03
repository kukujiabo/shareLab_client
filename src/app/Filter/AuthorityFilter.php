<?php
namespace App\Filter;

use PhalApi\Filter;
use PhalApi\Exception;
use App\Library\RedisClient;

class AuthorityFilter implements Filter {

    CONST WRONG_REQUEST = 500001;

    CONST EXPIRE_SESSION = 500002;

    /**
     * 请求权限校验
     */
    public function check() {

      if (\PhalApi\DI()->config->get('app.env') == 'pro') {

        /**
         * 白名单请求放行
         */
        if (in_array(\PhalApi\DI()->request->get('service'), \PhalApi\DI()->config->get('wt.service_whitelist'))) {
        
          return;
        
        }

        /**
         * 正式环境下要对请求的头部信息进行校验
         * 获取请求的所有头部信息
         */

        $headers = getallheaders();

        if (!$headers['CX-TOKEN'] || strlen($headers['CX-TOKEN']) != 64) {
        
          /**
           * CX-TOKEN 不存在时，请求为无效请求
           */

          throw new Exception('错误的请求！', AuthorityFilter::WRONG_REQUEST);
        
        } else { 
          /**
           * CX-TOKEN 存在时，校验该令牌是否有效
           */
        
          $auth = RedisClient::get('member_auth', $headers['CX-TOKEN'], true);

          if ( !$auth )  {
          
            throw new Exception('会话已失效，请重新登录！', AuthorityFilter::EXPIRE_SESSION);
          
          } else {

            /**
             * 校验通过，刷新token有效时间
             */
          
            $auth['session_time'] = time();

            RedisClient::set('member_auth', $headers['CX-TOKEN'], $auth);
          
          }
        
        }

      }

    }

}
