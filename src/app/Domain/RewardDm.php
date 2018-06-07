<?php
namespace App\Domain;

class RewardDm {

  public function rewardShopUnionList($data) {
  
    return \App\request('App.Reward.GetDetail', $data);
  
  }

  public function getDetail($data) {
  
    return \App\request('App.Reward.RewardShopUnionList', $data);
  
  }

}
