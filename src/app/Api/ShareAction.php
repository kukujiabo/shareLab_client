<?php
namespace App\Api;

/**
 * 分享动作接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class ShareAction extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'share_code' => 'share_code|string|true||分享码',
        'type' => 'type|int|true||分享类型：1.分享怎平，2.分享小程序',
        'relat_id' => 'relat_id|int|true||分享id'
      
      ],

      'getGift' => [
      
        'share_code' => 'share_code|string|true||分享编码',
        'form_id' => 'form_id|string|true||formId'
      
      ],

      'getDetail' => [
      
        'id' => 'id|int|false||分享id',
        'share_code' => 'share_code|string|false||分享编码'
      
      ],

      'checkShareAction' => [
      
        'share_code' => 'share_code|string|false||分享编码'
      
      ]
    
    ]); 
  
  }


  /**
   * 创建分享动作
   * @desc 创建分享动作
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 领取分享赠品
   * @desc 领取分享赠品
   *
   * @return int id
   */
  public function getGift() {
  
    return $this->dm->getGift($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询赠品详情
   * @desc 查询赠品详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 校验分享动作
   * @desc 校验分享动作
   *
   * @return
   */
  public function checkShareAction() {
  
    return $this->dm->checkShareAction($this->retriveRuleParams(__FUNCTION__));
  
  }

}
