<?php
/**
 * Created by PhpStorm.
 * User: Manlin
 * Date: 2019/7/30
 * Time: 上午1:03
 */
namespace EasySwoole\Consul\Request\Agent;

use EasySwoole\Spl\SplBean;

class Service extends SplBean
{
    /**
     * @var string
     */
    protected $service_id;

    /**
     * @return null|string
     */
    public function getServiceId(): ?string
    {
        return $this->service_id;
    }

    /**
     * @param string $service_id
     */
    public function setServiceId(string $service_id): void
    {
        $this->service_id = $service_id;
    }
}