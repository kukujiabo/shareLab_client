<?php
namespace App\Api;

/**
 * 微信相关接口
 * @desc 微信相关接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Wechat extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getOpenId' => [
      
        'code' => 'code|string|true||获取用户微信openid'
      
      ]
    
    ]);
  
  }

  /**
   * 获取微信openid
   * @desc 获取微信openid
   *
   */
  public function getOpenId() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);
  
  }

}


