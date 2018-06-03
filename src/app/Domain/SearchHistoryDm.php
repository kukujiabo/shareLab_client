<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 查询搜索历史
 */
class SearchHistoryDm {

  protected $_member; 

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;

  }

  /**
   * 添加用户搜索历史
   */
  public function addMemberSearchHistory($params) {
  
    return \App\request('App.SearchHistory.AddMemberSearchHistory', $params); 
  
  }

  /**
   * 获取用户搜索历史
   */
  public function getMemberSearchHistory($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.SearchHistory.GetMemberSearchHistory', $params);
  
  }

  public function remove($params) {
  
    return \App\request('App.SearchHistory.Remove', $params);
  
  }

  public function removeAll($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.SearchHistory.RemoveAll', $params);
  
  }


}
