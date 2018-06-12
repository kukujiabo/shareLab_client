<?php
namespace App\Domain;

use App\Library\RedisClient;

class MemberRewardDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function getInsList() {

    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.MemberReward.GetInsList', $params);
  
  }

  public function create($params) {
  
    $params['member_id'] = $this->_member->id;
  
    return \App\request('App.MemberReward.Create', $params);
  
  }

  public function listQuery($params) {

    if ($params['member']) {
    
      $params['member_id'] = $this->_member->id;
    
    }
  
    return \App\request('App.MemberReward.GetList', $params);
  
  }

  public function myReferenceList($params) {
  
    $params['reference'] = $this->_member->id;

    return \App\request('App.MemberReward.GetList', $params);
  
  }

  public function checkout() {
  
    $params['member_id'] = $this->_member->id;

    return \App\request('App.MemberReward.Checkout', $params);
  
  }

}
