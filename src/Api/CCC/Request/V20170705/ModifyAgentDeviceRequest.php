<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace AliyunOpenApi\Api\CCC\Request\V20170705;

use AliyunOpenApi\Core\RpcAcsRequest;

class ModifyAgentDeviceRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("CCC", "2017-07-05", "ModifyAgentDevice", "ccc", "openAPI");
        $this->setMethod("POST");
    }

    private $isLogin;

    private $instanceId;

    private $agentDeviceId;


    public function getIsLogin()
    {
        return $this->isLogin;
    }

    public function setIsLogin($isLogin)
    {
        $this->isLogin                    = $isLogin;
        $this->queryParameters["IsLogin"] = $isLogin;
    }

    public function getInstanceId()
    {
        return $this->instanceId;
    }

    public function setInstanceId($instanceId)
    {
        $this->instanceId                    = $instanceId;
        $this->queryParameters["InstanceId"] = $instanceId;
    }

    public function getAgentDeviceId()
    {
        return $this->agentDeviceId;
    }

    public function setAgentDeviceId($agentDeviceId)
    {
        $this->agentDeviceId                    = $agentDeviceId;
        $this->queryParameters["AgentDeviceId"] = $agentDeviceId;
    }

}