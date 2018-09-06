<?php
namespace App\Api;

/**
 * 微信相关接口
 * @desc 微信相关接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Wechat extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getOpenId' => [
      
        'code' => 'code|string|true||获取用户微信openid'
      
      ],

      'getMiniMsgList' => [
      
        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|10|每页条数'
      
      ]
    
    ]);
  
  }

  /**
   * 获取微信openid
   * @desc 获取微信openid
   *
   * @return
   */
  public function getOpenId() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);
  
  }

  /**
   * 查询小程序模版消息列表
   * @desc 查询小程序模版消息列表
   *
   * @return
   */
  public function getMiniMsgList() {
  
    return $this->dm->getMiniMsgList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 设置消息为已读
   * @desc 设置消息为已读
   *
   * @return
   */
  public function setMessageViewed() {
  
    return $this->dm->setMessageViewed($this->retriveRuleParams(__FUNCTION__));
  
  }

}


