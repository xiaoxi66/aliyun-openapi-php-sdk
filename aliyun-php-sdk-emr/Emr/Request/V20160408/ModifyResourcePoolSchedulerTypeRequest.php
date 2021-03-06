<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyResourcePoolSchedulerType
 *
 * @method string getResourceOwnerId()
 * @method string getSchedulerType()
 * @method string getClusterId()
 */
class ModifyResourcePoolSchedulerTypeRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'ModifyResourcePoolSchedulerType',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $schedulerType
     *
     * @return $this
     */
    public function setSchedulerType($schedulerType)
    {
        $this->requestParameters['SchedulerType'] = $schedulerType;
        $this->queryParameters['SchedulerType'] = $schedulerType;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
