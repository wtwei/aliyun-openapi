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
namespace Ram\Request\V20150501;

use AliyunOpenApi\Core\RpcAcsRequest;

class AttachPolicyToGroupRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ram", "2015-05-01", "AttachPolicyToGroup");
		$this->setProtocol("https");
		$this->setMethod("POST");
	}

	private  $policyType;

	private  $policyName;

	private  $groupName;

	public function getPolicyType() {
		return $this->policyType;
	}

	public function setPolicyType($policyType) {
		$this->policyType = $policyType;
		$this->queryParameters["PolicyType"]=$policyType;
	}

	public function getPolicyName() {
		return $this->policyName;
	}

	public function setPolicyName($policyName) {
		$this->policyName = $policyName;
		$this->queryParameters["PolicyName"]=$policyName;
	}

	public function getGroupName() {
		return $this->groupName;
	}

	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->queryParameters["GroupName"]=$groupName;
	}
	
}