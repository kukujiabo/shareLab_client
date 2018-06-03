<?php
namespace App\Api;

/**
 * 用户喜欢的视频接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class VideoFavorite extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addUserFavorVideo' => [
      
        'video_id' => 'video_id|int|true||视频id'
      
      ],

      'cancelUserFavorVideo' => [
      
        'video_id' => 'video_id|int|true||视频id' 
      
      ]
    
    ]);
  
  }

  /**
   * 添加用户喜欢的视频
   * @desc 添加用户喜欢的视频
   *
   * @return int num
   */
  public function addUserFavorVideo() {
  
    return $this->dm->addUserFavorVideo($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 取消用户喜欢的视频
   * @desc 添加用户喜欢的视频
   * 
   * @return int num
   */
  public function cancelUserFavorVideo() {
  
    return $this->dm->cancelUserFavorVideo($this->retriveRuleParams(__FUNCTION__));
  
  }

}
