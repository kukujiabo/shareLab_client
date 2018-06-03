<?php
namespace App\Api;

/**
 * 视频接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-23
 */
class Video extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addVideo' => [
      
        'out_id' => 'out_id|string|true||第三方平台id',

        'member_id' => 'member_id|int|true||用户id',

        'category_id' => 'category_id|string|true||分类id',

        'cover' => 'string|string|true||视频封面',

        'album_id' => 'album_id|int|true||相册id',

        'title' => 'title|string|true||视频标题',

        'brief' => 'brief|string|true||视频简介',

        'url' => 'url|string|true||视频链接地址',

        'status' => 'status|int|true||视频状态'
      
      ],

      'editVideo' => [
      
        'id' => 'id|int|true||视频id',

        'out_id' => 'out_id|int|false||第三方平台id',

        'category_id' => 'category_id|int|false||分类id',

        'cover' => 'cover|string|false||视频封面',

        'album_id' => 'album_id|int|false||专辑id',

        'title' => 'title|string|false||视频标题',

        'brief' => 'brief|string|false||视频简介',

        'url' => 'url|string|false||视频链接地址',

        'status' => 'status|int|false||视频状态'
      
      ],

      'listQuery' => [
      
        'out_id' => 'out_id|string|false||第三方品台视频id',

        'member_id' => 'member_id|int|false||用户id',

        'category_id' => 'category_id|int|false||分类id',

        'album_id' => 'album_id|int|false||相册id',

        'keyword' => 'keyword|string|false||关键字',

        'status' => 'status|int|false||视频状态',

        'times' => 'times|string|false||视频时间戳',

        'created_at' => 'created_at|string|false||视频创建时间',

        'order' => 'order|int|false|id desc|排序',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|分页数量',
      
      ],

      'detail' => [

        'id' => 'id|int|true||视频id'

      ],

      'getUserCollectVideos' => [
      
        'order' => 'order|string|false||排序',

        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getUserFavoriteVideos' => [
      
        'order' => 'order|string|false||排序',

        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页条数'
      
      ]
    
    ]);
  
  }

  /**
   * 添加视频
   * @desc 添加视频接口
   *
   * @return int id
   */
  public function addVideo() {
  
    return $this->dm->addVideo($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 编辑视频
   * @desc 编辑视频
   *
   * @return int num
   */
  public function editVideo() {
  
    return $this->dm->editVideo($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询视频列表
   * @decs 查询视频列表
   * 
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 视频详情
   * @desc 视频详情
   *
   * @return
   */
  public function detail() {
  
    return $this->dm->detail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取用户收藏的视频
   * @desc 获取用户收藏的视频
   *
   * @return list
   */
  public function getUserCollectVideos() {
  
    return $this->dm->getUserCollectVideos($this->retriveRuleParams(__FUNCTION__)); 

  }

  /**
   * 获取用户喜欢的视频
   * @desc 获取用户喜欢的视频
   *
   * @return list
   */
  public function getUserFavoriteVideos() {
  
    return $this->dm->getUserFavoriteVideos($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
