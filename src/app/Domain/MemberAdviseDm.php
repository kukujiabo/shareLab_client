<?php
namespace App\Domain;

use App\Library\RedisClient;

class MemberAdviseDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function create($params) {
  
    return \App\request('App.MemberAdvise.Create', $params);
  
  }

}
