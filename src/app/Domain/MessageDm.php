<?php
namespace App\Domain;

/**
 * 短信服务
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-08
 */
class MessageDm {

  /**
   * 发送验证短信
   *
   */
  public function sendVerifyMessage($params) {
  
    return \App\request('App.MobileVerifyCode.SendVerifyCode', $params);
  
  }

  /**
   * 校验验证码
   *
   */
  public function checkVerifyCode($params) {
  
    return \App\request('App.MobileVerifyCode.CheckVerifyCode', $params);
  
  }

}
