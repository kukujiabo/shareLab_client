<?php
namespace App\Api;

/**
 * 短信相关接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-13
 */
class Message extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'sendVerifyMessage' => [
      
        'mobile' => 'mobile|string|true||手机号'
      
      ],

      'checkVerifyCode' => [
      
        'mobile' => 'mobile|string|true||手机号',

        'code' => 'code|string|true||验证码'
      
      ]
    
    
    ]);
  
  }

  /**
   * 发送验证码
   * @desc 发送验证码
   *
   * @return boolean true/false
   */
  public function sendVerifyMessage() {
  
    return $this->dm->sendVerifyMessage($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 校验验证码
   * @desc 校验验证码
   *
   * @return boolean
   */
  public function checkVerifyCode() {
  
    return $this->dm->checkVerifyCode($this->retriveRuleParams(__FUNCTION__));
  
  }

}
