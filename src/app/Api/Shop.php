<?php
namespace App\Api;

/**
 * 门店接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Shop extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getDetail' => [
      
        'id' => 'id|int|true||门店id',
      
      ],

      'focusShop' => [
      
        'shop_id' => 'shop_id|int|true||门店id'
      
      ],

      'cancelFocus' => [
      
        'id' => 'id|int|true||关注id'
      
      ]
    
    
    ]);
  
  }

  /**
   * 查询门店详情
   * @desc 查询门店详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 关注店铺
   * @desc 关注店铺
   *
   * @return int id
   */
  public function focusShop() {
  
    return $this->dm->focusShop($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 取消关注
   * @desc 取消关注
   *
   * @return int num
   */
  public function cancelFocus() {
  
    return $this->dm->cancelFocus($this->retriveRuleParams(__FUNCTION__));
  
  }

}
