<?php
namespace App\Api;

/**
 * 七牛云存储接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-07
 */
class Qiniu extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getAccessToken' => [
      
        'bucket' => 'bucket|string|true||存储空间'
      
      ]
    
    ]);
  
  }

  /**
   * 获取访问令牌
   * @desc 获取七牛云的访问令牌
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 
   * @return string data.token 访问令牌
   * @return string data.expire_time 操作影响数据行数
   * @return string msg 错误提示
   */
  public function getAccessToken() {

    return $this->dm->getAccessToken($this->retriveRuleParams(__FUNCTION__));  
  
  }


}
