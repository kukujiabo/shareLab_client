<?php
namespace App\Domain;

use App\Library\RedisClient;

class ShopDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getDetail($params) {

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.Shop.GetDetail', $params);
  
  }

}
