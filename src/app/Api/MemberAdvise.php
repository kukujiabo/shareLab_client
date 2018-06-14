<?php
namespace App\Api;

/**
 * 会员反馈接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class MemberAdvise extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [
      
        'advise' => 'advise|string|true||反馈内容'
      
      ]
    
    ]);
  
  }

  /**
   * 新建反馈内容
   * @desc 新建反馈内容
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

}
