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
        'type' => 'type|int|true||赠品类型'
      
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


}
