<?php
namespace App\Domain;

use App\Library\RedisClient;

class VideoCollectionDm {

  protected $_member;

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;
  
  }

  /**
   * 添加用户收藏
   */
  public function addUserCollection($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.VideoCollection.AddUserCollection', $params);
  
  }

  /**
   * 取消用户收藏
   */
  public function cancelUserCollection($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.VideoCollection.CancelUserCollection', $params);
  
  }

  /**
   *
   */
  public function getUserCollectionIds($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.VideoCollection.GetUserCollectionIds', $params);
  
  }

}
