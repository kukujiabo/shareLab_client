<?php
namespace App\Api;

/**
 * 视频收藏接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class VideoCollection extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addUserCollection' => [
      
        'video_id' => 'video_id|int|true||视频id'
      
      ],

      'cancelUserCollection' => [
      
        'video_id' => 'video_id|int|true||视频id'
      
      ],

      'getUserCollectionIds' => [

        'order' => 'order|string|false||排序',
      
        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|每页数量',
      
      ]
    
    ]);
  
  }

  /**
   * 添加用户收藏视频
   * @desc 添加用户收藏视频
   *
   * @return boolean
   */
  public function addUserCollection() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);

    return $this->dm->addUserCollection($params);
  
  }

  /**
   * 用户取消收藏视频
   * @desc 用户取消收藏视频
   *
   * @return boolean
   */
  public function cancelUserCollection() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);

    return $this->dm->cancelUserCollection($params);
  
  }

  /**
   * 获取用户收藏的video id
   * @desc 获取用户收藏的video id
   *
   * @return
   */
  public function getUserCollectionIds() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);
  
    return $this->dm->getUserCollectionIds($params);
  
  }

}
