<?php
namespace App\Domain;

/**
 * 七牛云接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-08
 */
class QiniuDm {

  /**
   * 获取访问令牌
   */
  public function getAccessToken($data) {
  
    return \App\request('App.Qiniu.GetAccessToken', $data);
  
  }

}
