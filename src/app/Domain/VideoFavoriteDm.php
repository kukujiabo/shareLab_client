<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 喜欢的视频处理域
 */
class VideoFavoriteDm {

  protected $_member;

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('member_auth', $requestHeader['CX-TOKEN']);

    $this->_member = $auth;
  
  }

  public function addUserFavorVideo($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.VideoFavorite.AddUserFavorVideo', $params);
  
  }

  public function cancelUserFavorVideo($params) {

    $params['uid'] = $this->_member->id;
  
    return \App\request('App.VideoFavorite.CancelUserFavorVideo', $params);
  
  }

}
