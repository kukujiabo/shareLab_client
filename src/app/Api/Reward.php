<?php
namespace App\Api;

/**
 * 赠品接口
 * @desc 赠品接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-06-07
 */
class Reward extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getDetail' => [
      
        'id' => 'id|int|true||赠品id'
      
      ],

      'keywordList' => [
      
        'keywords' => 'keywords|string|true||关键字',
        'in_date' => 'in_date|int|true||是否在有效期内',
        'order' => 'order|string|false||排序',
        'lat' => 'lat|string|false||纬度',
        'lng' => 'lng|string|false||经度',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|10|每页条数'
      
      ],

      'rewardShopUnionList' => [
      
        'reward_name' => 'reward_name|string|false||赠品名称',
        'shop_name' => 'shop_name|string|false||门店名称',
        'shop_id' => 'shop_id|int|false||门店id',
        'in_date' => 'in_date|int|false|0|是否在有效期内',
        'fields' => 'fields|string|false|*|字段',
        'lat' => 'lat|string|false||纬度',
        'lng' => 'lng|string|false||经度',
        'order' => 'order|string|false|created_at desc|排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'rewardShopUnionDetail' => [
      
        'reward_id' => 'reward_id|int|true||赠品id'
      
      ]
    
    ]);
  
  }

  /**
   * 赠品门店联合列表
   * @desc 赠品门店联合列表
   *
   * @return array list
   */
  public function rewardShopUnionList() {
  
    return $this->dm->rewardShopUnionList($this->retriveRuleParams(__FUNCTION__));
  
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
   * 关键字查询
   * @desc 关键字查询
   *
   * @return array list
   */
  public function keywordList() {
  
    return $this->dm->keywordList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 门店赠品管理数据详情接口
   * @desc 门店赠品管理数据详情接口
   *
   * @return array data
   */
  public function rewardShopUnionDetail() {
  
    return $this->dm->rewardShopUnionDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

}
