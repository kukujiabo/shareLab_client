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
      
        'id' => 'id|int|true||门店id'
      
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

}
