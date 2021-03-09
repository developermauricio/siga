<?php
// This file was auto-generated from sdk-root/src/data/elasticloadbalancingv2/2015-12-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2015-12-01',
		'endpointPrefix'      => 'elasticloadbalancing',
		'protocol'            => 'query',
		'serviceAbbreviation' => 'Elastic Load Balancing v2',
		'serviceFullName'     => 'Elastic Load Balancing',
		'serviceId'           => 'Elastic Load Balancing v2',
		'signatureVersion'    => 'v4',
		'uid'                 => 'elasticloadbalancingv2-2015-12-01',
		'xmlNamespace'        => 'http://elasticloadbalancing.amazonaws.com/doc/2015-12-01/',
	],
	'operations' => [
		'AddListenerCertificates'        => [
			'name'   => 'AddListenerCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddListenerCertificatesInput', ],
			'output' => [
				'shape'         => 'AddListenerCertificatesOutput',
				'resultWrapper' => 'AddListenerCertificatesResult',
			],
			'errors' => [
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'TooManyCertificatesException', ],
				[ 'shape' => 'CertificateNotFoundException', ],
			],
		],
		'AddTags'                        => [
			'name'   => 'AddTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddTagsInput', ],
			'output' => [ 'shape' => 'AddTagsOutput', 'resultWrapper' => 'AddTagsResult', ],
			'errors' => [
				[ 'shape' => 'DuplicateTagKeysException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
			],
		],
		'CreateListener'                 => [
			'name'   => 'CreateListener',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateListenerInput', ],
			'output' => [
				'shape'         => 'CreateListenerOutput',
				'resultWrapper' => 'CreateListenerResult',
			],
			'errors' => [
				[ 'shape' => 'DuplicateListenerException', ],
				[ 'shape' => 'TooManyListenersException', ],
				[ 'shape' => 'TooManyCertificatesException', ],
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'TargetGroupAssociationLimitException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'IncompatibleProtocolsException', ],
				[ 'shape' => 'SSLPolicyNotFoundException', ],
				[ 'shape' => 'CertificateNotFoundException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
				[ 'shape' => 'TooManyRegistrationsForTargetIdException', ],
				[ 'shape' => 'TooManyTargetsException', ],
				[ 'shape' => 'TooManyActionsException', ],
				[ 'shape' => 'InvalidLoadBalancerActionException', ],
			],
		],
		'CreateLoadBalancer'             => [
			'name'   => 'CreateLoadBalancer',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLoadBalancerInput', ],
			'output' => [
				'shape'         => 'CreateLoadBalancerOutput',
				'resultWrapper' => 'CreateLoadBalancerResult',
			],
			'errors' => [
				[ 'shape' => 'DuplicateLoadBalancerNameException', ],
				[ 'shape' => 'TooManyLoadBalancersException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'SubnetNotFoundException', ],
				[ 'shape' => 'InvalidSubnetException', ],
				[ 'shape' => 'InvalidSecurityGroupException', ],
				[ 'shape' => 'InvalidSchemeException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'DuplicateTagKeysException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'AllocationIdNotFoundException', ],
				[ 'shape' => 'AvailabilityZoneNotSupportedException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
			],
		],
		'CreateRule'                     => [
			'name'   => 'CreateRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateRuleInput', ],
			'output' => [
				'shape'         => 'CreateRuleOutput',
				'resultWrapper' => 'CreateRuleResult',
			],
			'errors' => [
				[ 'shape' => 'PriorityInUseException', ],
				[ 'shape' => 'TooManyTargetGroupsException', ],
				[ 'shape' => 'TooManyRulesException', ],
				[ 'shape' => 'TargetGroupAssociationLimitException', ],
				[ 'shape' => 'IncompatibleProtocolsException', ],
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'TooManyRegistrationsForTargetIdException', ],
				[ 'shape' => 'TooManyTargetsException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
				[ 'shape' => 'TooManyActionsException', ],
				[ 'shape' => 'InvalidLoadBalancerActionException', ],
			],
		],
		'CreateTargetGroup'              => [
			'name'   => 'CreateTargetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTargetGroupInput', ],
			'output' => [
				'shape'         => 'CreateTargetGroupOutput',
				'resultWrapper' => 'CreateTargetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DuplicateTargetGroupNameException', ],
				[ 'shape' => 'TooManyTargetGroupsException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
			],
		],
		'DeleteListener'                 => [
			'name'   => 'DeleteListener',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteListenerInput', ],
			'output' => [
				'shape'         => 'DeleteListenerOutput',
				'resultWrapper' => 'DeleteListenerResult',
			],
			'errors' => [ [ 'shape' => 'ListenerNotFoundException', ], ],
		],
		'DeleteLoadBalancer'             => [
			'name'   => 'DeleteLoadBalancer',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLoadBalancerInput', ],
			'output' => [
				'shape'         => 'DeleteLoadBalancerOutput',
				'resultWrapper' => 'DeleteLoadBalancerResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
				[ 'shape' => 'ResourceInUseException', ],
			],
		],
		'DeleteRule'                     => [
			'name'   => 'DeleteRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRuleInput', ],
			'output' => [
				'shape'         => 'DeleteRuleOutput',
				'resultWrapper' => 'DeleteRuleResult',
			],
			'errors' => [
				[ 'shape' => 'RuleNotFoundException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
			],
		],
		'DeleteTargetGroup'              => [
			'name'   => 'DeleteTargetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTargetGroupInput', ],
			'output' => [
				'shape'         => 'DeleteTargetGroupOutput',
				'resultWrapper' => 'DeleteTargetGroupResult',
			],
			'errors' => [ [ 'shape' => 'ResourceInUseException', ], ],
		],
		'DeregisterTargets'              => [
			'name'   => 'DeregisterTargets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeregisterTargetsInput', ],
			'output' => [
				'shape'         => 'DeregisterTargetsOutput',
				'resultWrapper' => 'DeregisterTargetsResult',
			],
			'errors' => [
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'InvalidTargetException', ],
			],
		],
		'DescribeAccountLimits'          => [
			'name'   => 'DescribeAccountLimits',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAccountLimitsInput', ],
			'output' => [
				'shape'         => 'DescribeAccountLimitsOutput',
				'resultWrapper' => 'DescribeAccountLimitsResult',
			],
		],
		'DescribeListenerCertificates'   => [
			'name'   => 'DescribeListenerCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeListenerCertificatesInput', ],
			'output' => [
				'shape'         => 'DescribeListenerCertificatesOutput',
				'resultWrapper' => 'DescribeListenerCertificatesResult',
			],
			'errors' => [ [ 'shape' => 'ListenerNotFoundException', ], ],
		],
		'DescribeListeners'              => [
			'name'   => 'DescribeListeners',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeListenersInput', ],
			'output' => [
				'shape'         => 'DescribeListenersOutput',
				'resultWrapper' => 'DescribeListenersResult',
			],
			'errors' => [
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
			],
		],
		'DescribeLoadBalancerAttributes' => [
			'name'   => 'DescribeLoadBalancerAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLoadBalancerAttributesInput', ],
			'output' => [
				'shape'         => 'DescribeLoadBalancerAttributesOutput',
				'resultWrapper' => 'DescribeLoadBalancerAttributesResult',
			],
			'errors' => [ [ 'shape' => 'LoadBalancerNotFoundException', ], ],
		],
		'DescribeLoadBalancers'          => [
			'name'   => 'DescribeLoadBalancers',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLoadBalancersInput', ],
			'output' => [
				'shape'         => 'DescribeLoadBalancersOutput',
				'resultWrapper' => 'DescribeLoadBalancersResult',
			],
			'errors' => [ [ 'shape' => 'LoadBalancerNotFoundException', ], ],
		],
		'DescribeRules'                  => [
			'name'   => 'DescribeRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRulesInput', ],
			'output' => [
				'shape'         => 'DescribeRulesOutput',
				'resultWrapper' => 'DescribeRulesResult',
			],
			'errors' => [
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'RuleNotFoundException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
			],
		],
		'DescribeSSLPolicies'            => [
			'name'   => 'DescribeSSLPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSSLPoliciesInput', ],
			'output' => [
				'shape'         => 'DescribeSSLPoliciesOutput',
				'resultWrapper' => 'DescribeSSLPoliciesResult',
			],
			'errors' => [ [ 'shape' => 'SSLPolicyNotFoundException', ], ],
		],
		'DescribeTags'                   => [
			'name'   => 'DescribeTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTagsInput', ],
			'output' => [
				'shape'         => 'DescribeTagsOutput',
				'resultWrapper' => 'DescribeTagsResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'RuleNotFoundException', ],
			],
		],
		'DescribeTargetGroupAttributes'  => [
			'name'   => 'DescribeTargetGroupAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTargetGroupAttributesInput', ],
			'output' => [
				'shape'         => 'DescribeTargetGroupAttributesOutput',
				'resultWrapper' => 'DescribeTargetGroupAttributesResult',
			],
			'errors' => [ [ 'shape' => 'TargetGroupNotFoundException', ], ],
		],
		'DescribeTargetGroups'           => [
			'name'   => 'DescribeTargetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTargetGroupsInput', ],
			'output' => [
				'shape'         => 'DescribeTargetGroupsOutput',
				'resultWrapper' => 'DescribeTargetGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
			],
		],
		'DescribeTargetHealth'           => [
			'name'   => 'DescribeTargetHealth',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTargetHealthInput', ],
			'output' => [
				'shape'         => 'DescribeTargetHealthOutput',
				'resultWrapper' => 'DescribeTargetHealthResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidTargetException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'HealthUnavailableException', ],
			],
		],
		'ModifyListener'                 => [
			'name'   => 'ModifyListener',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyListenerInput', ],
			'output' => [
				'shape'         => 'ModifyListenerOutput',
				'resultWrapper' => 'ModifyListenerResult',
			],
			'errors' => [
				[ 'shape' => 'DuplicateListenerException', ],
				[ 'shape' => 'TooManyListenersException', ],
				[ 'shape' => 'TooManyCertificatesException', ],
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'TargetGroupAssociationLimitException', ],
				[ 'shape' => 'IncompatibleProtocolsException', ],
				[ 'shape' => 'SSLPolicyNotFoundException', ],
				[ 'shape' => 'CertificateNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
				[ 'shape' => 'TooManyRegistrationsForTargetIdException', ],
				[ 'shape' => 'TooManyTargetsException', ],
				[ 'shape' => 'TooManyActionsException', ],
				[ 'shape' => 'InvalidLoadBalancerActionException', ],
			],
		],
		'ModifyLoadBalancerAttributes'   => [
			'name'   => 'ModifyLoadBalancerAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyLoadBalancerAttributesInput', ],
			'output' => [
				'shape'         => 'ModifyLoadBalancerAttributesOutput',
				'resultWrapper' => 'ModifyLoadBalancerAttributesResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
			],
		],
		'ModifyRule'                     => [
			'name'   => 'ModifyRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyRuleInput', ],
			'output' => [
				'shape'         => 'ModifyRuleOutput',
				'resultWrapper' => 'ModifyRuleResult',
			],
			'errors' => [
				[ 'shape' => 'TargetGroupAssociationLimitException', ],
				[ 'shape' => 'IncompatibleProtocolsException', ],
				[ 'shape' => 'RuleNotFoundException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
				[ 'shape' => 'TooManyRegistrationsForTargetIdException', ],
				[ 'shape' => 'TooManyTargetsException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'UnsupportedProtocolException', ],
				[ 'shape' => 'TooManyActionsException', ],
				[ 'shape' => 'InvalidLoadBalancerActionException', ],
			],
		],
		'ModifyTargetGroup'              => [
			'name'   => 'ModifyTargetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTargetGroupInput', ],
			'output' => [
				'shape'         => 'ModifyTargetGroupOutput',
				'resultWrapper' => 'ModifyTargetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
			],
		],
		'ModifyTargetGroupAttributes'    => [
			'name'   => 'ModifyTargetGroupAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTargetGroupAttributesInput', ],
			'output' => [
				'shape'         => 'ModifyTargetGroupAttributesOutput',
				'resultWrapper' => 'ModifyTargetGroupAttributesResult',
			],
			'errors' => [
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
			],
		],
		'RegisterTargets'                => [
			'name'   => 'RegisterTargets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RegisterTargetsInput', ],
			'output' => [
				'shape'         => 'RegisterTargetsOutput',
				'resultWrapper' => 'RegisterTargetsResult',
			],
			'errors' => [
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'TooManyTargetsException', ],
				[ 'shape' => 'InvalidTargetException', ],
				[ 'shape' => 'TooManyRegistrationsForTargetIdException', ],
			],
		],
		'RemoveListenerCertificates'     => [
			'name'   => 'RemoveListenerCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveListenerCertificatesInput', ],
			'output' => [
				'shape'         => 'RemoveListenerCertificatesOutput',
				'resultWrapper' => 'RemoveListenerCertificatesResult',
			],
			'errors' => [
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
			],
		],
		'RemoveTags'                     => [
			'name'   => 'RemoveTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveTagsInput', ],
			'output' => [
				'shape'         => 'RemoveTagsOutput',
				'resultWrapper' => 'RemoveTagsResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'TargetGroupNotFoundException', ],
				[ 'shape' => 'ListenerNotFoundException', ],
				[ 'shape' => 'RuleNotFoundException', ],
				[ 'shape' => 'TooManyTagsException', ],
			],
		],
		'SetIpAddressType'               => [
			'name'   => 'SetIpAddressType',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIpAddressTypeInput', ],
			'output' => [
				'shape'         => 'SetIpAddressTypeOutput',
				'resultWrapper' => 'SetIpAddressTypeResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'InvalidSubnetException', ],
			],
		],
		'SetRulePriorities'              => [
			'name'   => 'SetRulePriorities',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetRulePrioritiesInput', ],
			'output' => [
				'shape'         => 'SetRulePrioritiesOutput',
				'resultWrapper' => 'SetRulePrioritiesResult',
			],
			'errors' => [
				[ 'shape' => 'RuleNotFoundException', ],
				[ 'shape' => 'PriorityInUseException', ],
				[ 'shape' => 'OperationNotPermittedException', ],
			],
		],
		'SetSecurityGroups'              => [
			'name'   => 'SetSecurityGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetSecurityGroupsInput', ],
			'output' => [
				'shape'         => 'SetSecurityGroupsOutput',
				'resultWrapper' => 'SetSecurityGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'InvalidSecurityGroupException', ],
			],
		],
		'SetSubnets'                     => [
			'name'   => 'SetSubnets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetSubnetsInput', ],
			'output' => [
				'shape'         => 'SetSubnetsOutput',
				'resultWrapper' => 'SetSubnetsResult',
			],
			'errors' => [
				[ 'shape' => 'LoadBalancerNotFoundException', ],
				[ 'shape' => 'InvalidConfigurationRequestException', ],
				[ 'shape' => 'SubnetNotFoundException', ],
				[ 'shape' => 'InvalidSubnetException', ],
				[ 'shape' => 'AllocationIdNotFoundException', ],
				[ 'shape' => 'AvailabilityZoneNotSupportedException', ],
			],
		],
	],
	'shapes'     => [
		'Action'                                                    => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [
				'Type'                      => [ 'shape' => 'ActionTypeEnum', ],
				'TargetGroupArn'            => [ 'shape' => 'TargetGroupArn', ],
				'AuthenticateOidcConfig'    => [ 'shape' => 'AuthenticateOidcActionConfig', ],
				'AuthenticateCognitoConfig' => [ 'shape' => 'AuthenticateCognitoActionConfig', ],
				'Order'                     => [ 'shape' => 'ActionOrder', ],
				'RedirectConfig'            => [ 'shape' => 'RedirectActionConfig', ],
				'FixedResponseConfig'       => [ 'shape' => 'FixedResponseActionConfig', ],
			],
		],
		'ActionOrder'                                               => [
			'type' => 'integer',
			'max'  => 50000,
			'min'  => 1,
		],
		'ActionTypeEnum'                                            => [
			'type' => 'string',
			'enum' => [
				'forward',
				'authenticate-oidc',
				'authenticate-cognito',
				'redirect',
				'fixed-response',
			],
		],
		'Actions'                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Action', ],
		],
		'AddListenerCertificatesInput'                              => [
			'type'     => 'structure',
			'required' => [ 'ListenerArn', 'Certificates', ],
			'members'  => [
				'ListenerArn'  => [ 'shape' => 'ListenerArn', ],
				'Certificates' => [ 'shape' => 'CertificateList', ],
			],
		],
		'AddListenerCertificatesOutput'                             => [
			'type'    => 'structure',
			'members' => [ 'Certificates' => [ 'shape' => 'CertificateList', ], ],
		],
		'AddTagsInput'                                              => [
			'type'     => 'structure',
			'required' => [ 'ResourceArns', 'Tags', ],
			'members'  => [
				'ResourceArns' => [ 'shape' => 'ResourceArns', ],
				'Tags'         => [ 'shape' => 'TagList', ],
			],
		],
		'AddTagsOutput'                                             => [ 'type' => 'structure', 'members' => [], ],
		'AllocationId'                                              => [ 'type' => 'string', ],
		'AllocationIdNotFoundException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AllocationIdNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthenticateCognitoActionAuthenticationRequestExtraParams' => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AuthenticateCognitoActionAuthenticationRequestParamName', ],
			'value' => [ 'shape' => 'AuthenticateCognitoActionAuthenticationRequestParamValue', ],
		],
		'AuthenticateCognitoActionAuthenticationRequestParamName'   => [ 'type' => 'string', ],
		'AuthenticateCognitoActionAuthenticationRequestParamValue'  => [ 'type' => 'string', ],
		'AuthenticateCognitoActionConditionalBehaviorEnum'          => [
			'type' => 'string',
			'enum' => [ 'deny', 'allow', 'authenticate', ],
		],
		'AuthenticateCognitoActionConfig'                           => [
			'type'     => 'structure',
			'required' => [
				'UserPoolArn',
				'UserPoolClientId',
				'UserPoolDomain',
			],
			'members'  => [
				'UserPoolArn'                      => [ 'shape' => 'AuthenticateCognitoActionUserPoolArn', ],
				'UserPoolClientId'                 => [ 'shape' => 'AuthenticateCognitoActionUserPoolClientId', ],
				'UserPoolDomain'                   => [ 'shape' => 'AuthenticateCognitoActionUserPoolDomain', ],
				'SessionCookieName'                => [ 'shape' => 'AuthenticateCognitoActionSessionCookieName', ],
				'Scope'                            => [ 'shape' => 'AuthenticateCognitoActionScope', ],
				'SessionTimeout'                   => [ 'shape' => 'AuthenticateCognitoActionSessionTimeout', ],
				'AuthenticationRequestExtraParams' => [ 'shape' => 'AuthenticateCognitoActionAuthenticationRequestExtraParams', ],
				'OnUnauthenticatedRequest'         => [ 'shape' => 'AuthenticateCognitoActionConditionalBehaviorEnum', ],
			],
		],
		'AuthenticateCognitoActionScope'                            => [ 'type' => 'string', ],
		'AuthenticateCognitoActionSessionCookieName'                => [ 'type' => 'string', ],
		'AuthenticateCognitoActionSessionTimeout'                   => [ 'type' => 'long', ],
		'AuthenticateCognitoActionUserPoolArn'                      => [ 'type' => 'string', ],
		'AuthenticateCognitoActionUserPoolClientId'                 => [ 'type' => 'string', ],
		'AuthenticateCognitoActionUserPoolDomain'                   => [ 'type' => 'string', ],
		'AuthenticateOidcActionAuthenticationRequestExtraParams'    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AuthenticateOidcActionAuthenticationRequestParamName', ],
			'value' => [ 'shape' => 'AuthenticateOidcActionAuthenticationRequestParamValue', ],
		],
		'AuthenticateOidcActionAuthenticationRequestParamName'      => [ 'type' => 'string', ],
		'AuthenticateOidcActionAuthenticationRequestParamValue'     => [ 'type' => 'string', ],
		'AuthenticateOidcActionAuthorizationEndpoint'               => [ 'type' => 'string', ],
		'AuthenticateOidcActionClientId'                            => [ 'type' => 'string', ],
		'AuthenticateOidcActionClientSecret'                        => [ 'type' => 'string', ],
		'AuthenticateOidcActionConditionalBehaviorEnum'             => [
			'type' => 'string',
			'enum' => [ 'deny', 'allow', 'authenticate', ],
		],
		'AuthenticateOidcActionConfig'                              => [
			'type'     => 'structure',
			'required' => [ 'Issuer', 'AuthorizationEndpoint', 'TokenEndpoint', 'UserInfoEndpoint', 'ClientId', ],
			'members'  => [
				'Issuer'                           => [ 'shape' => 'AuthenticateOidcActionIssuer', ],
				'AuthorizationEndpoint'            => [ 'shape' => 'AuthenticateOidcActionAuthorizationEndpoint', ],
				'TokenEndpoint'                    => [ 'shape' => 'AuthenticateOidcActionTokenEndpoint', ],
				'UserInfoEndpoint'                 => [ 'shape' => 'AuthenticateOidcActionUserInfoEndpoint', ],
				'ClientId'                         => [ 'shape' => 'AuthenticateOidcActionClientId', ],
				'ClientSecret'                     => [ 'shape' => 'AuthenticateOidcActionClientSecret', ],
				'SessionCookieName'                => [ 'shape' => 'AuthenticateOidcActionSessionCookieName', ],
				'Scope'                            => [ 'shape' => 'AuthenticateOidcActionScope', ],
				'SessionTimeout'                   => [ 'shape' => 'AuthenticateOidcActionSessionTimeout', ],
				'AuthenticationRequestExtraParams' => [ 'shape' => 'AuthenticateOidcActionAuthenticationRequestExtraParams', ],
				'OnUnauthenticatedRequest'         => [ 'shape' => 'AuthenticateOidcActionConditionalBehaviorEnum', ],
				'UseExistingClientSecret'          => [ 'shape' => 'AuthenticateOidcActionUseExistingClientSecret', ],
			],
		],
		'AuthenticateOidcActionIssuer'                              => [ 'type' => 'string', ],
		'AuthenticateOidcActionScope'                               => [ 'type' => 'string', ],
		'AuthenticateOidcActionSessionCookieName'                   => [ 'type' => 'string', ],
		'AuthenticateOidcActionSessionTimeout'                      => [ 'type' => 'long', ],
		'AuthenticateOidcActionTokenEndpoint'                       => [ 'type' => 'string', ],
		'AuthenticateOidcActionUseExistingClientSecret'             => [ 'type' => 'boolean', ],
		'AuthenticateOidcActionUserInfoEndpoint'                    => [ 'type' => 'string', ],
		'AvailabilityZone'                                          => [
			'type'    => 'structure',
			'members' => [
				'ZoneName'              => [ 'shape' => 'ZoneName', ],
				'SubnetId'              => [ 'shape' => 'SubnetId', ],
				'LoadBalancerAddresses' => [ 'shape' => 'LoadBalancerAddresses', ],
			],
		],
		'AvailabilityZoneNotSupportedException'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AvailabilityZoneNotSupported',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AvailabilityZones'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AvailabilityZone', ],
		],
		'CanonicalHostedZoneId'                                     => [ 'type' => 'string', ],
		'Certificate'                                               => [
			'type'    => 'structure',
			'members' => [
				'CertificateArn' => [ 'shape' => 'CertificateArn', ],
				'IsDefault'      => [ 'shape' => 'Default', ],
			],
		],
		'CertificateArn'                                            => [ 'type' => 'string', ],
		'CertificateList'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Certificate', ],
		],
		'CertificateNotFoundException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CertificateNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Cipher'                                                    => [
			'type'    => 'structure',
			'members' => [
				'Name'     => [ 'shape' => 'CipherName', ],
				'Priority' => [ 'shape' => 'CipherPriority', ],
			],
		],
		'CipherName'                                                => [ 'type' => 'string', ],
		'CipherPriority'                                            => [ 'type' => 'integer', ],
		'Ciphers'                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Cipher', ],
		],
		'ConditionFieldName'                                        => [ 'type' => 'string', 'max' => 64, ],
		'CreateListenerInput'                                       => [
			'type'     => 'structure',
			'required' => [
				'LoadBalancerArn',
				'Protocol',
				'Port',
				'DefaultActions',
			],
			'members'  => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'Protocol'        => [ 'shape' => 'ProtocolEnum', ],
				'Port'            => [ 'shape' => 'Port', ],
				'SslPolicy'       => [ 'shape' => 'SslPolicyName', ],
				'Certificates'    => [ 'shape' => 'CertificateList', ],
				'DefaultActions'  => [ 'shape' => 'Actions', ],
			],
		],
		'CreateListenerOutput'                                      => [
			'type'    => 'structure',
			'members' => [ 'Listeners' => [ 'shape' => 'Listeners', ], ],
		],
		'CreateLoadBalancerInput'                                   => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'Name'           => [ 'shape' => 'LoadBalancerName', ],
				'Subnets'        => [ 'shape' => 'Subnets', ],
				'SubnetMappings' => [ 'shape' => 'SubnetMappings', ],
				'SecurityGroups' => [ 'shape' => 'SecurityGroups', ],
				'Scheme'         => [ 'shape' => 'LoadBalancerSchemeEnum', ],
				'Tags'           => [ 'shape' => 'TagList', ],
				'Type'           => [ 'shape' => 'LoadBalancerTypeEnum', ],
				'IpAddressType'  => [ 'shape' => 'IpAddressType', ],
			],
		],
		'CreateLoadBalancerOutput'                                  => [
			'type'    => 'structure',
			'members' => [ 'LoadBalancers' => [ 'shape' => 'LoadBalancers', ], ],
		],
		'CreateRuleInput'                                           => [
			'type'     => 'structure',
			'required' => [
				'ListenerArn',
				'Conditions',
				'Priority',
				'Actions',
			],
			'members'  => [
				'ListenerArn' => [ 'shape' => 'ListenerArn', ],
				'Conditions'  => [ 'shape' => 'RuleConditionList', ],
				'Priority'    => [ 'shape' => 'RulePriority', ],
				'Actions'     => [ 'shape' => 'Actions', ],
			],
		],
		'CreateRuleOutput'                                          => [
			'type'    => 'structure',
			'members' => [ 'Rules' => [ 'shape' => 'Rules', ], ],
		],
		'CreateTargetGroupInput'                                    => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'Name'                       => [ 'shape' => 'TargetGroupName', ],
				'Protocol'                   => [ 'shape' => 'ProtocolEnum', ],
				'Port'                       => [ 'shape' => 'Port', ],
				'VpcId'                      => [ 'shape' => 'VpcId', ],
				'HealthCheckProtocol'        => [ 'shape' => 'ProtocolEnum', ],
				'HealthCheckPort'            => [ 'shape' => 'HealthCheckPort', ],
				'HealthCheckEnabled'         => [ 'shape' => 'HealthCheckEnabled', ],
				'HealthCheckPath'            => [ 'shape' => 'Path', ],
				'HealthCheckIntervalSeconds' => [ 'shape' => 'HealthCheckIntervalSeconds', ],
				'HealthCheckTimeoutSeconds'  => [ 'shape' => 'HealthCheckTimeoutSeconds', ],
				'HealthyThresholdCount'      => [ 'shape' => 'HealthCheckThresholdCount', ],
				'UnhealthyThresholdCount'    => [ 'shape' => 'HealthCheckThresholdCount', ],
				'Matcher'                    => [ 'shape' => 'Matcher', ],
				'TargetType'                 => [ 'shape' => 'TargetTypeEnum', ],
			],
		],
		'CreateTargetGroupOutput'                                   => [
			'type'    => 'structure',
			'members' => [ 'TargetGroups' => [ 'shape' => 'TargetGroups', ], ],
		],
		'CreatedTime'                                               => [ 'type' => 'timestamp', ],
		'DNSName'                                                   => [ 'type' => 'string', ],
		'Default'                                                   => [ 'type' => 'boolean', ],
		'DeleteListenerInput'                                       => [
			'type'     => 'structure',
			'required' => [ 'ListenerArn', ],
			'members'  => [ 'ListenerArn' => [ 'shape' => 'ListenerArn', ], ],
		],
		'DeleteListenerOutput'                                      => [ 'type' => 'structure', 'members' => [], ],
		'DeleteLoadBalancerInput'                                   => [
			'type'     => 'structure',
			'required' => [ 'LoadBalancerArn', ],
			'members'  => [ 'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ], ],
		],
		'DeleteLoadBalancerOutput'                                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteRuleInput'                                           => [
			'type'     => 'structure',
			'required' => [ 'RuleArn', ],
			'members'  => [ 'RuleArn' => [ 'shape' => 'RuleArn', ], ],
		],
		'DeleteRuleOutput'                                          => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTargetGroupInput'                                    => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', ],
			'members'  => [ 'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ], ],
		],
		'DeleteTargetGroupOutput'                                   => [ 'type' => 'structure', 'members' => [], ],
		'DeregisterTargetsInput'                                    => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', 'Targets', ],
			'members'  => [
				'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ],
				'Targets'        => [ 'shape' => 'TargetDescriptions', ],
			],
		],
		'DeregisterTargetsOutput'                                   => [ 'type' => 'structure', 'members' => [], ],
		'DescribeAccountLimitsInput'                                => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [ 'shape' => 'Marker', ],
				'PageSize' => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeAccountLimitsOutput'                               => [
			'type'    => 'structure',
			'members' => [
				'Limits'     => [ 'shape' => 'Limits', ],
				'NextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeListenerCertificatesInput'                         => [
			'type'     => 'structure',
			'required' => [ 'ListenerArn', ],
			'members'  => [
				'ListenerArn' => [ 'shape' => 'ListenerArn', ],
				'Marker'      => [ 'shape' => 'Marker', ],
				'PageSize'    => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeListenerCertificatesOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'Certificates' => [ 'shape' => 'CertificateList', ],
				'NextMarker'   => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeListenersInput'                                    => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'ListenerArns'    => [ 'shape' => 'ListenerArns', ],
				'Marker'          => [ 'shape' => 'Marker', ],
				'PageSize'        => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeListenersOutput'                                   => [
			'type'    => 'structure',
			'members' => [
				'Listeners'  => [ 'shape' => 'Listeners', ],
				'NextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeLoadBalancerAttributesInput'                       => [
			'type'     => 'structure',
			'required' => [ 'LoadBalancerArn', ],
			'members'  => [ 'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ], ],
		],
		'DescribeLoadBalancerAttributesOutput'                      => [
			'type'    => 'structure',
			'members' => [ 'Attributes' => [ 'shape' => 'LoadBalancerAttributes', ], ],
		],
		'DescribeLoadBalancersInput'                                => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerArns' => [ 'shape' => 'LoadBalancerArns', ],
				'Names'            => [ 'shape' => 'LoadBalancerNames', ],
				'Marker'           => [ 'shape' => 'Marker', ],
				'PageSize'         => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeLoadBalancersOutput'                               => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancers' => [ 'shape' => 'LoadBalancers', ],
				'NextMarker'    => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeRulesInput'                                        => [
			'type'    => 'structure',
			'members' => [
				'ListenerArn' => [ 'shape' => 'ListenerArn', ],
				'RuleArns'    => [ 'shape' => 'RuleArns', ],
				'Marker'      => [ 'shape' => 'Marker', ],
				'PageSize'    => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeRulesOutput'                                       => [
			'type'    => 'structure',
			'members' => [
				'Rules'      => [ 'shape' => 'Rules', ],
				'NextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeSSLPoliciesInput'                                  => [
			'type'    => 'structure',
			'members' => [
				'Names'    => [ 'shape' => 'SslPolicyNames', ],
				'Marker'   => [ 'shape' => 'Marker', ],
				'PageSize' => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeSSLPoliciesOutput'                                 => [
			'type'    => 'structure',
			'members' => [
				'SslPolicies' => [ 'shape' => 'SslPolicies', ],
				'NextMarker'  => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeTagsInput'                                         => [
			'type'     => 'structure',
			'required' => [ 'ResourceArns', ],
			'members'  => [ 'ResourceArns' => [ 'shape' => 'ResourceArns', ], ],
		],
		'DescribeTagsOutput'                                        => [
			'type'    => 'structure',
			'members' => [ 'TagDescriptions' => [ 'shape' => 'TagDescriptions', ], ],
		],
		'DescribeTargetGroupAttributesInput'                        => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', ],
			'members'  => [ 'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ], ],
		],
		'DescribeTargetGroupAttributesOutput'                       => [
			'type'    => 'structure',
			'members' => [ 'Attributes' => [ 'shape' => 'TargetGroupAttributes', ], ],
		],
		'DescribeTargetGroupsInput'                                 => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'TargetGroupArns' => [ 'shape' => 'TargetGroupArns', ],
				'Names'           => [ 'shape' => 'TargetGroupNames', ],
				'Marker'          => [ 'shape' => 'Marker', ],
				'PageSize'        => [ 'shape' => 'PageSize', ],
			],
		],
		'DescribeTargetGroupsOutput'                                => [
			'type'    => 'structure',
			'members' => [
				'TargetGroups' => [ 'shape' => 'TargetGroups', ],
				'NextMarker'   => [ 'shape' => 'Marker', ],
			],
		],
		'DescribeTargetHealthInput'                                 => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', ],
			'members'  => [
				'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ],
				'Targets'        => [ 'shape' => 'TargetDescriptions', ],
			],
		],
		'DescribeTargetHealthOutput'                                => [
			'type'    => 'structure',
			'members' => [ 'TargetHealthDescriptions' => [ 'shape' => 'TargetHealthDescriptions', ], ],
		],
		'Description'                                               => [ 'type' => 'string', ],
		'DuplicateListenerException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DuplicateListener',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DuplicateLoadBalancerNameException'                        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DuplicateLoadBalancerName',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DuplicateTagKeysException'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DuplicateTagKeys',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DuplicateTargetGroupNameException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DuplicateTargetGroupName',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'FixedResponseActionConfig'                                 => [
			'type'     => 'structure',
			'required' => [ 'StatusCode', ],
			'members'  => [
				'MessageBody' => [ 'shape' => 'FixedResponseActionMessage', ],
				'StatusCode'  => [ 'shape' => 'FixedResponseActionStatusCode', ],
				'ContentType' => [ 'shape' => 'FixedResponseActionContentType', ],
			],
		],
		'FixedResponseActionContentType'                            => [ 'type' => 'string', 'max' => 32, 'min' => 0, ],
		'FixedResponseActionMessage'                                => [
			'type' => 'string',
			'max'  => 1024,
			'min'  => 0,
		],
		'FixedResponseActionStatusCode'                             => [
			'type'    => 'string',
			'pattern' => '^(2|4|5)\\d\\d$',
		],
		'HealthCheckEnabled'                                        => [ 'type' => 'boolean', ],
		'HealthCheckIntervalSeconds'                                => [
			'type' => 'integer',
			'max'  => 300,
			'min'  => 5,
		],
		'HealthCheckPort'                                           => [ 'type' => 'string', ],
		'HealthCheckThresholdCount'                                 => [
			'type' => 'integer',
			'max'  => 10,
			'min'  => 2,
		],
		'HealthCheckTimeoutSeconds'                                 => [
			'type' => 'integer',
			'max'  => 120,
			'min'  => 2,
		],
		'HealthUnavailableException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HealthUnavailable',
				'httpStatusCode' => 500,
			],
			'exception' => true,
		],
		'HostHeaderConditionConfig'                                 => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'ListOfString', ], ],
		],
		'HttpCode'                                                  => [ 'type' => 'string', ],
		'HttpHeaderConditionConfig'                                 => [
			'type'    => 'structure',
			'members' => [
				'HttpHeaderName' => [ 'shape' => 'HttpHeaderConditionName', ],
				'Values'         => [ 'shape' => 'ListOfString', ],
			],
		],
		'HttpHeaderConditionName'                                   => [ 'type' => 'string', ],
		'HttpRequestMethodConditionConfig'                          => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'ListOfString', ], ],
		],
		'IncompatibleProtocolsException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'IncompatibleProtocols',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidConfigurationRequestException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidConfigurationRequest',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidLoadBalancerActionException'                        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidLoadBalancerAction',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSchemeException'                                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidScheme',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSecurityGroupException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSecurityGroup',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSubnetException'                                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSubnet',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidTargetException'                                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidTarget',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'IpAddress'                                                 => [ 'type' => 'string', ],
		'IpAddressType'                                             => [
			'type' => 'string',
			'enum' => [ 'ipv4', 'dualstack', ],
		],
		'IsDefault'                                                 => [ 'type' => 'boolean', ],
		'Limit'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Name' => [ 'shape' => 'Name', ],
				'Max'  => [ 'shape' => 'Max', ],
			],
		],
		'Limits'                                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Limit', ],
		],
		'ListOfString'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringValue', ],
		],
		'Listener'                                                  => [
			'type'    => 'structure',
			'members' => [
				'ListenerArn'     => [ 'shape' => 'ListenerArn', ],
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'Port'            => [ 'shape' => 'Port', ],
				'Protocol'        => [ 'shape' => 'ProtocolEnum', ],
				'Certificates'    => [ 'shape' => 'CertificateList', ],
				'SslPolicy'       => [ 'shape' => 'SslPolicyName', ],
				'DefaultActions'  => [ 'shape' => 'Actions', ],
			],
		],
		'ListenerArn'                                               => [ 'type' => 'string', ],
		'ListenerArns'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ListenerArn', ],
		],
		'ListenerNotFoundException'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ListenerNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Listeners'                                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Listener', ],
		],
		'LoadBalancer'                                              => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerArn'       => [ 'shape' => 'LoadBalancerArn', ],
				'DNSName'               => [ 'shape' => 'DNSName', ],
				'CanonicalHostedZoneId' => [ 'shape' => 'CanonicalHostedZoneId', ],
				'CreatedTime'           => [ 'shape' => 'CreatedTime', ],
				'LoadBalancerName'      => [ 'shape' => 'LoadBalancerName', ],
				'Scheme'                => [ 'shape' => 'LoadBalancerSchemeEnum', ],
				'VpcId'                 => [ 'shape' => 'VpcId', ],
				'State'                 => [ 'shape' => 'LoadBalancerState', ],
				'Type'                  => [ 'shape' => 'LoadBalancerTypeEnum', ],
				'AvailabilityZones'     => [ 'shape' => 'AvailabilityZones', ],
				'SecurityGroups'        => [ 'shape' => 'SecurityGroups', ],
				'IpAddressType'         => [ 'shape' => 'IpAddressType', ],
			],
		],
		'LoadBalancerAddress'                                       => [
			'type'    => 'structure',
			'members' => [
				'IpAddress'    => [ 'shape' => 'IpAddress', ],
				'AllocationId' => [ 'shape' => 'AllocationId', ],
			],
		],
		'LoadBalancerAddresses'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerAddress', ],
		],
		'LoadBalancerArn'                                           => [ 'type' => 'string', ],
		'LoadBalancerArns'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerArn', ],
		],
		'LoadBalancerAttribute'                                     => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'LoadBalancerAttributeKey', ],
				'Value' => [ 'shape' => 'LoadBalancerAttributeValue', ],
			],
		],
		'LoadBalancerAttributeKey'                                  => [
			'type'    => 'string',
			'max'     => 256,
			'pattern' => '^[a-zA-Z0-9._]+$',
		],
		'LoadBalancerAttributeValue'                                => [ 'type' => 'string', 'max' => 1024, ],
		'LoadBalancerAttributes'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerAttribute', ],
			'max'    => 20,
		],
		'LoadBalancerName'                                          => [ 'type' => 'string', ],
		'LoadBalancerNames'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerName', ],
		],
		'LoadBalancerNotFoundException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'LoadBalancerNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LoadBalancerSchemeEnum'                                    => [
			'type' => 'string',
			'enum' => [ 'internet-facing', 'internal', ],
		],
		'LoadBalancerState'                                         => [
			'type'    => 'structure',
			'members' => [
				'Code'   => [ 'shape' => 'LoadBalancerStateEnum', ],
				'Reason' => [ 'shape' => 'StateReason', ],
			],
		],
		'LoadBalancerStateEnum'                                     => [
			'type' => 'string',
			'enum' => [
				'active',
				'provisioning',
				'active_impaired',
				'failed',
			],
		],
		'LoadBalancerTypeEnum'                                      => [
			'type' => 'string',
			'enum' => [ 'application', 'network', ],
		],
		'LoadBalancers'                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancer', ],
		],
		'Marker'                                                    => [ 'type' => 'string', ],
		'Matcher'                                                   => [
			'type'     => 'structure',
			'required' => [ 'HttpCode', ],
			'members'  => [ 'HttpCode' => [ 'shape' => 'HttpCode', ], ],
		],
		'Max'                                                       => [ 'type' => 'string', ],
		'ModifyListenerInput'                                       => [
			'type'     => 'structure',
			'required' => [ 'ListenerArn', ],
			'members'  => [
				'ListenerArn'    => [ 'shape' => 'ListenerArn', ],
				'Port'           => [ 'shape' => 'Port', ],
				'Protocol'       => [ 'shape' => 'ProtocolEnum', ],
				'SslPolicy'      => [ 'shape' => 'SslPolicyName', ],
				'Certificates'   => [ 'shape' => 'CertificateList', ],
				'DefaultActions' => [ 'shape' => 'Actions', ],
			],
		],
		'ModifyListenerOutput'                                      => [
			'type'    => 'structure',
			'members' => [ 'Listeners' => [ 'shape' => 'Listeners', ], ],
		],
		'ModifyLoadBalancerAttributesInput'                         => [
			'type'     => 'structure',
			'required' => [
				'LoadBalancerArn',
				'Attributes',
			],
			'members'  => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'Attributes'      => [ 'shape' => 'LoadBalancerAttributes', ],
			],
		],
		'ModifyLoadBalancerAttributesOutput'                        => [
			'type'    => 'structure',
			'members' => [ 'Attributes' => [ 'shape' => 'LoadBalancerAttributes', ], ],
		],
		'ModifyRuleInput'                                           => [
			'type'     => 'structure',
			'required' => [ 'RuleArn', ],
			'members'  => [
				'RuleArn'    => [ 'shape' => 'RuleArn', ],
				'Conditions' => [ 'shape' => 'RuleConditionList', ],
				'Actions'    => [ 'shape' => 'Actions', ],
			],
		],
		'ModifyRuleOutput'                                          => [
			'type'    => 'structure',
			'members' => [ 'Rules' => [ 'shape' => 'Rules', ], ],
		],
		'ModifyTargetGroupAttributesInput'                          => [
			'type'     => 'structure',
			'required' => [
				'TargetGroupArn',
				'Attributes',
			],
			'members'  => [
				'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ],
				'Attributes'     => [ 'shape' => 'TargetGroupAttributes', ],
			],
		],
		'ModifyTargetGroupAttributesOutput'                         => [
			'type'    => 'structure',
			'members' => [ 'Attributes' => [ 'shape' => 'TargetGroupAttributes', ], ],
		],
		'ModifyTargetGroupInput'                                    => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', ],
			'members'  => [
				'TargetGroupArn'             => [ 'shape' => 'TargetGroupArn', ],
				'HealthCheckProtocol'        => [ 'shape' => 'ProtocolEnum', ],
				'HealthCheckPort'            => [ 'shape' => 'HealthCheckPort', ],
				'HealthCheckPath'            => [ 'shape' => 'Path', ],
				'HealthCheckEnabled'         => [ 'shape' => 'HealthCheckEnabled', ],
				'HealthCheckIntervalSeconds' => [ 'shape' => 'HealthCheckIntervalSeconds', ],
				'HealthCheckTimeoutSeconds'  => [ 'shape' => 'HealthCheckTimeoutSeconds', ],
				'HealthyThresholdCount'      => [ 'shape' => 'HealthCheckThresholdCount', ],
				'UnhealthyThresholdCount'    => [ 'shape' => 'HealthCheckThresholdCount', ],
				'Matcher'                    => [ 'shape' => 'Matcher', ],
			],
		],
		'ModifyTargetGroupOutput'                                   => [
			'type'    => 'structure',
			'members' => [ 'TargetGroups' => [ 'shape' => 'TargetGroups', ], ],
		],
		'Name'                                                      => [ 'type' => 'string', ],
		'OperationNotPermittedException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'OperationNotPermitted',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'PageSize'                                                  => [
			'type' => 'integer',
			'max'  => 400,
			'min'  => 1,
		],
		'Path'                                                      => [
			'type' => 'string',
			'max'  => 1024,
			'min'  => 1,
		],
		'PathPatternConditionConfig'                                => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'ListOfString', ], ],
		],
		'Port'                                                      => [
			'type' => 'integer',
			'max'  => 65535,
			'min'  => 1,
		],
		'PriorityInUseException'                                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'PriorityInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ProtocolEnum'                                              => [
			'type' => 'string',
			'enum' => [
				'HTTP',
				'HTTPS',
				'TCP',
				'TLS',
				'UDP',
				'TCP_UDP',
			],
		],
		'QueryStringConditionConfig'                                => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'QueryStringKeyValuePairList', ], ],
		],
		'QueryStringKeyValuePair'                                   => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'StringValue', ],
				'Value' => [ 'shape' => 'StringValue', ],
			],
		],
		'QueryStringKeyValuePairList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'QueryStringKeyValuePair', ],
		],
		'RedirectActionConfig'                                      => [
			'type'     => 'structure',
			'required' => [ 'StatusCode', ],
			'members'  => [
				'Protocol'   => [ 'shape' => 'RedirectActionProtocol', ],
				'Port'       => [ 'shape' => 'RedirectActionPort', ],
				'Host'       => [ 'shape' => 'RedirectActionHost', ],
				'Path'       => [ 'shape' => 'RedirectActionPath', ],
				'Query'      => [ 'shape' => 'RedirectActionQuery', ],
				'StatusCode' => [ 'shape' => 'RedirectActionStatusCodeEnum', ],
			],
		],
		'RedirectActionHost'                                        => [
			'type' => 'string',
			'max'  => 128,
			'min'  => 1,
		],
		'RedirectActionPath'                                        => [
			'type' => 'string',
			'max'  => 128,
			'min'  => 1,
		],
		'RedirectActionPort'                                        => [ 'type' => 'string', ],
		'RedirectActionProtocol'                                    => [
			'type'    => 'string',
			'pattern' => '^(HTTPS?|#\\{protocol\\})$',
		],
		'RedirectActionQuery'                                       => [
			'type' => 'string',
			'max'  => 128,
			'min'  => 0,
		],
		'RedirectActionStatusCodeEnum'                              => [
			'type' => 'string',
			'enum' => [ 'HTTP_301', 'HTTP_302', ],
		],
		'RegisterTargetsInput'                                      => [
			'type'     => 'structure',
			'required' => [ 'TargetGroupArn', 'Targets', ],
			'members'  => [
				'TargetGroupArn' => [ 'shape' => 'TargetGroupArn', ],
				'Targets'        => [ 'shape' => 'TargetDescriptions', ],
			],
		],
		'RegisterTargetsOutput'                                     => [ 'type' => 'structure', 'members' => [], ],
		'RemoveListenerCertificatesInput'                           => [
			'type'     => 'structure',
			'required' => [
				'ListenerArn',
				'Certificates',
			],
			'members'  => [
				'ListenerArn'  => [ 'shape' => 'ListenerArn', ],
				'Certificates' => [ 'shape' => 'CertificateList', ],
			],
		],
		'RemoveListenerCertificatesOutput'                          => [ 'type' => 'structure', 'members' => [], ],
		'RemoveTagsInput'                                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceArns', 'TagKeys', ],
			'members'  => [
				'ResourceArns' => [ 'shape' => 'ResourceArns', ],
				'TagKeys'      => [ 'shape' => 'TagKeys', ],
			],
		],
		'RemoveTagsOutput'                                          => [ 'type' => 'structure', 'members' => [], ],
		'ResourceArn'                                               => [ 'type' => 'string', ],
		'ResourceArns'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceArn', ],
		],
		'ResourceInUseException'                                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ResourceInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Rule'                                                      => [
			'type'    => 'structure',
			'members' => [
				'RuleArn'    => [ 'shape' => 'RuleArn', ],
				'Priority'   => [ 'shape' => 'String', ],
				'Conditions' => [ 'shape' => 'RuleConditionList', ],
				'Actions'    => [ 'shape' => 'Actions', ],
				'IsDefault'  => [ 'shape' => 'IsDefault', ],
			],
		],
		'RuleArn'                                                   => [ 'type' => 'string', ],
		'RuleArns'                                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RuleArn', ],
		],
		'RuleCondition'                                             => [
			'type'    => 'structure',
			'members' => [
				'Field'                   => [ 'shape' => 'ConditionFieldName', ],
				'Values'                  => [ 'shape' => 'ListOfString', ],
				'HostHeaderConfig'        => [ 'shape' => 'HostHeaderConditionConfig', ],
				'PathPatternConfig'       => [ 'shape' => 'PathPatternConditionConfig', ],
				'HttpHeaderConfig'        => [ 'shape' => 'HttpHeaderConditionConfig', ],
				'QueryStringConfig'       => [ 'shape' => 'QueryStringConditionConfig', ],
				'HttpRequestMethodConfig' => [ 'shape' => 'HttpRequestMethodConditionConfig', ],
				'SourceIpConfig'          => [ 'shape' => 'SourceIpConditionConfig', ],
			],
		],
		'RuleConditionList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RuleCondition', ],
		],
		'RuleNotFoundException'                                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'RuleNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'RulePriority'                                              => [
			'type' => 'integer',
			'max'  => 50000,
			'min'  => 1,
		],
		'RulePriorityList'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RulePriorityPair', ],
		],
		'RulePriorityPair'                                          => [
			'type'    => 'structure',
			'members' => [
				'RuleArn'  => [ 'shape' => 'RuleArn', ],
				'Priority' => [ 'shape' => 'RulePriority', ],
			],
		],
		'Rules'                                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Rule', ],
		],
		'SSLPolicyNotFoundException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SSLPolicyNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SecurityGroupId'                                           => [ 'type' => 'string', ],
		'SecurityGroups'                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityGroupId', ],
		],
		'SetIpAddressTypeInput'                                     => [
			'type'     => 'structure',
			'required' => [
				'LoadBalancerArn',
				'IpAddressType',
			],
			'members'  => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'IpAddressType'   => [ 'shape' => 'IpAddressType', ],
			],
		],
		'SetIpAddressTypeOutput'                                    => [
			'type'    => 'structure',
			'members' => [ 'IpAddressType' => [ 'shape' => 'IpAddressType', ], ],
		],
		'SetRulePrioritiesInput'                                    => [
			'type'     => 'structure',
			'required' => [ 'RulePriorities', ],
			'members'  => [ 'RulePriorities' => [ 'shape' => 'RulePriorityList', ], ],
		],
		'SetRulePrioritiesOutput'                                   => [
			'type'    => 'structure',
			'members' => [ 'Rules' => [ 'shape' => 'Rules', ], ],
		],
		'SetSecurityGroupsInput'                                    => [
			'type'     => 'structure',
			'required' => [
				'LoadBalancerArn',
				'SecurityGroups',
			],
			'members'  => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'SecurityGroups'  => [ 'shape' => 'SecurityGroups', ],
			],
		],
		'SetSecurityGroupsOutput'                                   => [
			'type'    => 'structure',
			'members' => [ 'SecurityGroupIds' => [ 'shape' => 'SecurityGroups', ], ],
		],
		'SetSubnetsInput'                                           => [
			'type'     => 'structure',
			'required' => [ 'LoadBalancerArn', ],
			'members'  => [
				'LoadBalancerArn' => [ 'shape' => 'LoadBalancerArn', ],
				'Subnets'         => [ 'shape' => 'Subnets', ],
				'SubnetMappings'  => [ 'shape' => 'SubnetMappings', ],
			],
		],
		'SetSubnetsOutput'                                          => [
			'type'    => 'structure',
			'members' => [ 'AvailabilityZones' => [ 'shape' => 'AvailabilityZones', ], ],
		],
		'SourceIpConditionConfig'                                   => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'ListOfString', ], ],
		],
		'SslPolicies'                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SslPolicy', ],
		],
		'SslPolicy'                                                 => [
			'type'    => 'structure',
			'members' => [
				'SslProtocols' => [ 'shape' => 'SslProtocols', ],
				'Ciphers'      => [ 'shape' => 'Ciphers', ],
				'Name'         => [ 'shape' => 'SslPolicyName', ],
			],
		],
		'SslPolicyName'                                             => [ 'type' => 'string', ],
		'SslPolicyNames'                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SslPolicyName', ],
		],
		'SslProtocol'                                               => [ 'type' => 'string', ],
		'SslProtocols'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SslProtocol', ],
		],
		'StateReason'                                               => [ 'type' => 'string', ],
		'String'                                                    => [ 'type' => 'string', ],
		'StringValue'                                               => [ 'type' => 'string', ],
		'SubnetId'                                                  => [ 'type' => 'string', ],
		'SubnetMapping'                                             => [
			'type'    => 'structure',
			'members' => [
				'SubnetId'     => [ 'shape' => 'SubnetId', ],
				'AllocationId' => [ 'shape' => 'AllocationId', ],
			],
		],
		'SubnetMappings'                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SubnetMapping', ],
		],
		'SubnetNotFoundException'                                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubnetNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Subnets'                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SubnetId', ],
		],
		'Tag'                                                       => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagDescription'                                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn' => [ 'shape' => 'ResourceArn', ],
				'Tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagDescriptions'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagDescription', ],
		],
		'TagKey'                                                    => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'TagKeys'                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
		],
		'TagList'                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'min'    => 1,
		],
		'TagValue'                                                  => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'TargetDescription'                                         => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'               => [ 'shape' => 'TargetId', ],
				'Port'             => [ 'shape' => 'Port', ],
				'AvailabilityZone' => [ 'shape' => 'ZoneName', ],
			],
		],
		'TargetDescriptions'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetDescription', ],
		],
		'TargetGroup'                                               => [
			'type'    => 'structure',
			'members' => [
				'TargetGroupArn'             => [ 'shape' => 'TargetGroupArn', ],
				'TargetGroupName'            => [ 'shape' => 'TargetGroupName', ],
				'Protocol'                   => [ 'shape' => 'ProtocolEnum', ],
				'Port'                       => [ 'shape' => 'Port', ],
				'VpcId'                      => [ 'shape' => 'VpcId', ],
				'HealthCheckProtocol'        => [ 'shape' => 'ProtocolEnum', ],
				'HealthCheckPort'            => [ 'shape' => 'HealthCheckPort', ],
				'HealthCheckEnabled'         => [ 'shape' => 'HealthCheckEnabled', ],
				'HealthCheckIntervalSeconds' => [ 'shape' => 'HealthCheckIntervalSeconds', ],
				'HealthCheckTimeoutSeconds'  => [ 'shape' => 'HealthCheckTimeoutSeconds', ],
				'HealthyThresholdCount'      => [ 'shape' => 'HealthCheckThresholdCount', ],
				'UnhealthyThresholdCount'    => [ 'shape' => 'HealthCheckThresholdCount', ],
				'HealthCheckPath'            => [ 'shape' => 'Path', ],
				'Matcher'                    => [ 'shape' => 'Matcher', ],
				'LoadBalancerArns'           => [ 'shape' => 'LoadBalancerArns', ],
				'TargetType'                 => [ 'shape' => 'TargetTypeEnum', ],
			],
		],
		'TargetGroupArn'                                            => [ 'type' => 'string', ],
		'TargetGroupArns'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetGroupArn', ],
		],
		'TargetGroupAssociationLimitException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TargetGroupAssociationLimit',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TargetGroupAttribute'                                      => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TargetGroupAttributeKey', ],
				'Value' => [ 'shape' => 'TargetGroupAttributeValue', ],
			],
		],
		'TargetGroupAttributeKey'                                   => [
			'type'    => 'string',
			'max'     => 256,
			'pattern' => '^[a-zA-Z0-9._]+$',
		],
		'TargetGroupAttributeValue'                                 => [ 'type' => 'string', ],
		'TargetGroupAttributes'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetGroupAttribute', ],
		],
		'TargetGroupName'                                           => [ 'type' => 'string', ],
		'TargetGroupNames'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetGroupName', ],
		],
		'TargetGroupNotFoundException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TargetGroupNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TargetGroups'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetGroup', ],
		],
		'TargetHealth'                                              => [
			'type'    => 'structure',
			'members' => [
				'State'       => [ 'shape' => 'TargetHealthStateEnum', ],
				'Reason'      => [ 'shape' => 'TargetHealthReasonEnum', ],
				'Description' => [ 'shape' => 'Description', ],
			],
		],
		'TargetHealthDescription'                                   => [
			'type'    => 'structure',
			'members' => [
				'Target'          => [ 'shape' => 'TargetDescription', ],
				'HealthCheckPort' => [ 'shape' => 'HealthCheckPort', ],
				'TargetHealth'    => [ 'shape' => 'TargetHealth', ],
			],
		],
		'TargetHealthDescriptions'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetHealthDescription', ],
		],
		'TargetHealthReasonEnum'                                    => [
			'type' => 'string',
			'enum' => [
				'Elb.RegistrationInProgress',
				'Elb.InitialHealthChecking',
				'Target.ResponseCodeMismatch',
				'Target.Timeout',
				'Target.FailedHealthChecks',
				'Target.NotRegistered',
				'Target.NotInUse',
				'Target.DeregistrationInProgress',
				'Target.InvalidState',
				'Target.IpUnusable',
				'Target.HealthCheckDisabled',
				'Elb.InternalError',
			],
		],
		'TargetHealthStateEnum'                                     => [
			'type' => 'string',
			'enum' => [
				'initial',
				'healthy',
				'unhealthy',
				'unused',
				'draining',
				'unavailable',
			],
		],
		'TargetId'                                                  => [ 'type' => 'string', ],
		'TargetTypeEnum'                                            => [
			'type' => 'string',
			'enum' => [ 'instance', 'ip', 'lambda', ],
		],
		'TooManyActionsException'                                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyActions',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyCertificatesException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyCertificates',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyListenersException'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyListeners',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyLoadBalancersException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyLoadBalancers',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyRegistrationsForTargetIdException'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyRegistrationsForTargetId',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyRulesException'                                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyRules',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyTagsException'                                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyTags',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyTargetGroupsException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyTargetGroups',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TooManyTargetsException'                                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TooManyTargets',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UnsupportedProtocolException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'UnsupportedProtocol',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'VpcId'                                                     => [ 'type' => 'string', ],
		'ZoneName'                                                  => [ 'type' => 'string', ],
	],
];
