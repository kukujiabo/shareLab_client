<?php
namespace App;

use PhalApi\Exception;
use App\Library\ApiRequest;

/**
 * 请求接口
 * @param string $service 接口名称
 * @param array $params 请求参数
 * @return array 
 */
function request($service, $params) {

    $obj = ApiRequest::request($service, $params);

    return $obj->getData();

}
