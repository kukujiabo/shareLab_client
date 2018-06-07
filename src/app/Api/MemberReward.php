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


}
