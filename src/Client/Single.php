<?php
/**
 * Created by PhpStorm.
 * User: Mr.Zhou
 * Date: 2018/10/23
 * Time: 上午10:22
 */

namespace GeTui\Client;
use GeTui\Api;

class Single extends Entity
{
    public function __construct(array $config, Api $api)
    {
        parent::__construct($config, $api);
    }

    /**
     * 推送服务
     * @return bool|mixed
     * @throws \GeTui\ApiException
     */
    public function push()
    {
        $res = $this->buildRequestData();
        $this->alias && $res['alias'] = $this->alias;
        $this->cid && $res['cid'] = $this->cid;
        $this->reset();
        return $this->api->pushSingle($res);
    }
}