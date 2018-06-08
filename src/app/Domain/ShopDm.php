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

  public function focusShop($params) {
  
    $params['member_id'] = $this->_member->id;

    return \App\request('App.MemberFavoriteShop.Create', $params);
  
  }

  public function cancelFocus($params) {
  
    return \App\request('App.MemberFavoriteShop.CancelFocus', $params);
  
  }

  public function getFocusUnionList($params) {

    if ($params['member_id'] === 0) {
    
      $params['member_id'] = $this->_member->id;
    
    }
  
    return \App\request('App.MemberFavoriteShop.GetUnionInfoList', $params);
  
  }

  public function getFocusCount($params) {

    $params['focus'] = 1;
  
    return \App\request('App.MemberFavoriteShop.GetFocusCount', $params);
  
  }

}
