<?php
namespace App\Domain;

class BusinessApplyDm {

  public function create($params) {
  
    return \App\request('App.BusinessApply.Create', $params);
  
  } 

}
