<?php
namespace App\Domain;

use App\Library\RedisClient;

class WechatDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getMiniMsgList($params) {
  
    return \App\request('App.WechatTemplateMessage.GetMiniMsgList', $params);
  
  }

}
