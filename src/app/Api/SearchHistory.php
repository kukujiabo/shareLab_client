<?php
namespace App\Api;

/**
 * 搜索记录历史接口
 * @desc 搜索记录历史
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class SearchHistory extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addMemberSearchHistory' => [
      
        'uid' => 'uid|int|true||用户id',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'getMemberSearchHistory' => [
      
      ],

      'remove' => [
      
        'uid' => 'uid|int|true||删除历史查询'
      
      ],

      'removeAll' => [
      
      ]
    
    ]);
  
  }
  
  /**
   * 添加用户搜索历史
   * @desc 添加用户搜索历史
   *
   * @return int id
   */
  public function addMemberSearchHistory() {
  
    return $this->dm->addMemberSearchHistory($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取用户查询历史列表
   * @desc 获取用户查询历史列表
   *
   * @return array list
   */
  public function getMemberSearchHistory() {

    return $this->dm->getMemberSearchHistory($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除历史
   * @desc 删除历史
   *
   * @return int id
   */
  public function remove() {
  
    return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 清空历史
   * @desc 清空历史
   *
   * @return int num
   */
  public function removeAll() {
  
    return $this->dm->removeAll($this->retriveRuleParams(__FUNCTION__));
  
  }

}
