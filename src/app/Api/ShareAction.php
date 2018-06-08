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
      
      ]
    
    ]); 
  
  }


  /**
   * 创建分享动作
   * @desc 创建分享动作
   *
   * @param int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

}
