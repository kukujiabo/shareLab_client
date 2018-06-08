<?php
namespace App\Domain;

use App\Library\RedisClient;

class RewardDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  public function rewardShopUnionList($data) {

    $data['member_id'] = $this->_member->id;
  
    return \App\request('App.Reward.RewardShopUnionList', $data);
  
  }

  public function getDetail($data) {

    $data['member_id'] = $this->_member->id;
  
    return \App\request('App.Reward.GetDetail', $data);
  
  }

}
