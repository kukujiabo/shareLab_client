<?php
namespace App\Api;

/**
 * 会员赠品接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class MemberReward extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'getInsList' => [
      
        'order' => 'order|string|false|num desc|排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'create' => [
      
        'reward_id' => 'reward_id|int|true||赠品id',
        'reference' => 'reference|int|true||赠品来源',
        'origin' => 'origin|int|true||是否原始赠品',
        'type' => 'type|int|true||赠品类型'
      
      ],

      'listQuery' => [
      
        'member' => 'member|int|false|1|是否需要关联会员',
        'reward_id' => 'reward_id|int|false||赠品id',
        'member_name' => 'member_name|string|false||会员名称',
        'reward_name' => 'reward_name|string|false||赠品名称',
        'checked' => 'checked|int|false||核销状态',
        'reference' => 'reference|int|false||赠送人id',
        'type' => 'type|int|false||赠品类型',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||赠品排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'myReferenceList' => [
      
        'checked' => 'checked|int|false||是否已使用',
        'type' => 'type|int|false||赠品类型',
        'fields' => 'fields|string|false||字段',
        'order' => 'order|string|false||赠品排序',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'checkout' => [
      
        'reward_id' => 'reward_id|int|true||赠品id',
        'code' => 'code|string|true||核销码'
      
      ],

      'getOriginReward' => [

        'reward_id' => 'reward_id|int|true||赠品id'
        
      ]
    
    ]); 
  
  }

  /**
   * 查询会员赠品计数实例
   * @desc 查询会员赠品计数实例
   *
   * @return array list
   */
  public function getInsList() {
  
    return $this->dm->getInsList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 领取赠品
   * @desc 领取赠品
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询赠品列表
   * @desc 查询赠品列表
   *
   * @return array data
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询我送出的赠品列表
   * @desc 查询我送出的赠品列表
   *
   * @return array data
   */
  public function myReferenceList() {
  
    return $this->dm->myReferenceList($this->retriveRuleParams(__FUNCTION__)); 

  }

  /**
   * 核销
   * @desc 核销
   *
   * @return array data
   */
  public function checkout() {
  
    return $this->dm->checkout($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取用户原始赠品
   * @desc 获取用户原始赠品
   *
   * @return array data
   */
  public function getOriginReward() {
  
    return $this->dm->getOriginReward($this->retriveRuleParams(__FUNCTION__));
  
  }

}
