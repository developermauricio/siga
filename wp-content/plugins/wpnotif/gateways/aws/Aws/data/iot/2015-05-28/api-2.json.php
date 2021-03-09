<?php
// This file was auto-generated from sdk-root/src/data/iot/2015-05-28/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2015-05-28',
		'endpointPrefix'   => 'iot',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'AWS IoT',
		'serviceId'        => 'IoT',
		'signatureVersion' => 'v4',
		'signingName'      => 'execute-api',
		'uid'              => 'iot-2015-05-28',
	],
	'operations' => [
		'AcceptCertificateTransfer'         => [
			'name'   => 'AcceptCertificateTransfer',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/accept-certificate-transfer/{certificateId}',
			],
			'input'  => [ 'shape' => 'AcceptCertificateTransferRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TransferAlreadyCompletedException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'AddThingToBillingGroup'            => [
			'name'   => 'AddThingToBillingGroup',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/billing-groups/addThingToBillingGroup',
			],
			'input'  => [ 'shape' => 'AddThingToBillingGroupRequest', ],
			'output' => [ 'shape' => 'AddThingToBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'AddThingToThingGroup'              => [
			'name'   => 'AddThingToThingGroup',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/thing-groups/addThingToThingGroup',
			],
			'input'  => [ 'shape' => 'AddThingToThingGroupRequest', ],
			'output' => [ 'shape' => 'AddThingToThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'AssociateTargetsWithJob'           => [
			'name'   => 'AssociateTargetsWithJob',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/jobs/{jobId}/targets', ],
			'input'  => [ 'shape' => 'AssociateTargetsWithJobRequest', ],
			'output' => [ 'shape' => 'AssociateTargetsWithJobResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'AttachPolicy'                      => [
			'name'   => 'AttachPolicy',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/target-policies/{policyName}',
			],
			'input'  => [ 'shape' => 'AttachPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'AttachPrincipalPolicy'             => [
			'name'       => 'AttachPrincipalPolicy',
			'http'       => [
				'method'     => 'PUT',
				'requestUri' => '/principal-policies/{policyName}',
			],
			'input'      => [ 'shape' => 'AttachPrincipalPolicyRequest', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
			'deprecated' => true,
		],
		'AttachSecurityProfile'             => [
			'name'   => 'AttachSecurityProfile',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/security-profiles/{securityProfileName}/targets',
			],
			'input'  => [ 'shape' => 'AttachSecurityProfileRequest', ],
			'output' => [ 'shape' => 'AttachSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'AttachThingPrincipal'              => [
			'name'   => 'AttachThingPrincipal',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/things/{thingName}/principals',
			],
			'input'  => [ 'shape' => 'AttachThingPrincipalRequest', ],
			'output' => [ 'shape' => 'AttachThingPrincipalResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CancelAuditTask'                   => [
			'name'   => 'CancelAuditTask',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/audit/tasks/{taskId}/cancel',
			],
			'input'  => [ 'shape' => 'CancelAuditTaskRequest', ],
			'output' => [ 'shape' => 'CancelAuditTaskResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CancelCertificateTransfer'         => [
			'name'   => 'CancelCertificateTransfer',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/cancel-certificate-transfer/{certificateId}',
			],
			'input'  => [ 'shape' => 'CancelCertificateTransferRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TransferAlreadyCompletedException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CancelJob'                         => [
			'name'   => 'CancelJob',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/jobs/{jobId}/cancel', ],
			'input'  => [ 'shape' => 'CancelJobRequest', ],
			'output' => [ 'shape' => 'CancelJobResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'CancelJobExecution'                => [
			'name'   => 'CancelJobExecution',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/things/{thingName}/jobs/{jobId}/cancel',
			],
			'input'  => [ 'shape' => 'CancelJobExecutionRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidStateTransitionException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'VersionConflictException', ],
			],
		],
		'ClearDefaultAuthorizer'            => [
			'name'   => 'ClearDefaultAuthorizer',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/default-authorizer', ],
			'input'  => [ 'shape' => 'ClearDefaultAuthorizerRequest', ],
			'output' => [ 'shape' => 'ClearDefaultAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateAuthorizer'                  => [
			'name'   => 'CreateAuthorizer',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/authorizer/{authorizerName}',
			],
			'input'  => [ 'shape' => 'CreateAuthorizerRequest', ],
			'output' => [ 'shape' => 'CreateAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateBillingGroup'                => [
			'name'   => 'CreateBillingGroup',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/billing-groups/{billingGroupName}',
			],
			'input'  => [ 'shape' => 'CreateBillingGroupRequest', ],
			'output' => [ 'shape' => 'CreateBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateCertificateFromCsr'          => [
			'name'   => 'CreateCertificateFromCsr',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/certificates', ],
			'input'  => [ 'shape' => 'CreateCertificateFromCsrRequest', ],
			'output' => [ 'shape' => 'CreateCertificateFromCsrResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateDynamicThingGroup'           => [
			'name'   => 'CreateDynamicThingGroup',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/dynamic-thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'CreateDynamicThingGroupRequest', ],
			'output' => [ 'shape' => 'CreateDynamicThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'InvalidQueryException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateJob'                         => [
			'name'   => 'CreateJob',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/jobs/{jobId}', ],
			'input'  => [ 'shape' => 'CreateJobRequest', ],
			'output' => [ 'shape' => 'CreateJobResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'CreateKeysAndCertificate'          => [
			'name'   => 'CreateKeysAndCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/keys-and-certificate', ],
			'input'  => [ 'shape' => 'CreateKeysAndCertificateRequest', ],
			'output' => [ 'shape' => 'CreateKeysAndCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateOTAUpdate'                   => [
			'name'   => 'CreateOTAUpdate',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/otaUpdates/{otaUpdateId}',
			],
			'input'  => [ 'shape' => 'CreateOTAUpdateRequest', ],
			'output' => [ 'shape' => 'CreateOTAUpdateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'CreatePolicy'                      => [
			'name'   => 'CreatePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/policies/{policyName}', ],
			'input'  => [ 'shape' => 'CreatePolicyRequest', ],
			'output' => [ 'shape' => 'CreatePolicyResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'MalformedPolicyException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreatePolicyVersion'               => [
			'name'   => 'CreatePolicyVersion',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/policies/{policyName}/version',
			],
			'input'  => [ 'shape' => 'CreatePolicyVersionRequest', ],
			'output' => [ 'shape' => 'CreatePolicyVersionResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'MalformedPolicyException', ],
				[ 'shape' => 'VersionsLimitExceededException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateRoleAlias'                   => [
			'name'   => 'CreateRoleAlias',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/role-aliases/{roleAlias}',
			],
			'input'  => [ 'shape' => 'CreateRoleAliasRequest', ],
			'output' => [ 'shape' => 'CreateRoleAliasResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateScheduledAudit'              => [
			'name'   => 'CreateScheduledAudit',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/audit/scheduledaudits/{scheduledAuditName}',
			],
			'input'  => [ 'shape' => 'CreateScheduledAuditRequest', ],
			'output' => [ 'shape' => 'CreateScheduledAuditResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateSecurityProfile'             => [
			'name'   => 'CreateSecurityProfile',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/security-profiles/{securityProfileName}',
			],
			'input'  => [ 'shape' => 'CreateSecurityProfileRequest', ],
			'output' => [ 'shape' => 'CreateSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateStream'                      => [
			'name'   => 'CreateStream',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/streams/{streamId}', ],
			'input'  => [ 'shape' => 'CreateStreamRequest', ],
			'output' => [ 'shape' => 'CreateStreamResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateThing'                       => [
			'name'   => 'CreateThing',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/things/{thingName}', ],
			'input'  => [ 'shape' => 'CreateThingRequest', ],
			'output' => [ 'shape' => 'CreateThingResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'CreateThingGroup'                  => [
			'name'   => 'CreateThingGroup',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'CreateThingGroupRequest', ],
			'output' => [ 'shape' => 'CreateThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateThingType'                   => [
			'name'   => 'CreateThingType',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/thing-types/{thingTypeName}',
			],
			'input'  => [ 'shape' => 'CreateThingTypeRequest', ],
			'output' => [ 'shape' => 'CreateThingTypeResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
			],
		],
		'CreateTopicRule'                   => [
			'name'   => 'CreateTopicRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/rules/{ruleName}', ],
			'input'  => [ 'shape' => 'CreateTopicRuleRequest', ],
			'errors' => [
				[ 'shape' => 'SqlParseException', ],
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
			],
		],
		'DeleteAccountAuditConfiguration'   => [
			'name'   => 'DeleteAccountAuditConfiguration',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/audit/configuration',
			],
			'input'  => [ 'shape' => 'DeleteAccountAuditConfigurationRequest', ],
			'output' => [ 'shape' => 'DeleteAccountAuditConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteAuthorizer'                  => [
			'name'   => 'DeleteAuthorizer',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/authorizer/{authorizerName}',
			],
			'input'  => [ 'shape' => 'DeleteAuthorizerRequest', ],
			'output' => [ 'shape' => 'DeleteAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteBillingGroup'                => [
			'name'   => 'DeleteBillingGroup',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/billing-groups/{billingGroupName}',
			],
			'input'  => [ 'shape' => 'DeleteBillingGroupRequest', ],
			'output' => [ 'shape' => 'DeleteBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteCACertificate'               => [
			'name'   => 'DeleteCACertificate',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/cacertificate/{caCertificateId}',
			],
			'input'  => [ 'shape' => 'DeleteCACertificateRequest', ],
			'output' => [ 'shape' => 'DeleteCACertificateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'CertificateStateException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DeleteCertificate'                 => [
			'name'   => 'DeleteCertificate',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/certificates/{certificateId}',
			],
			'input'  => [ 'shape' => 'DeleteCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'CertificateStateException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DeleteDynamicThingGroup'           => [
			'name'   => 'DeleteDynamicThingGroup',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/dynamic-thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'DeleteDynamicThingGroupRequest', ],
			'output' => [ 'shape' => 'DeleteDynamicThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteJob'                         => [
			'name'   => 'DeleteJob',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/jobs/{jobId}', ],
			'input'  => [ 'shape' => 'DeleteJobRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidStateTransitionException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DeleteJobExecution'                => [
			'name'   => 'DeleteJobExecution',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/things/{thingName}/jobs/{jobId}/executionNumber/{executionNumber}',
			],
			'input'  => [ 'shape' => 'DeleteJobExecutionRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidStateTransitionException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DeleteOTAUpdate'                   => [
			'name'   => 'DeleteOTAUpdate',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/otaUpdates/{otaUpdateId}',
			],
			'input'  => [ 'shape' => 'DeleteOTAUpdateRequest', ],
			'output' => [ 'shape' => 'DeleteOTAUpdateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'VersionConflictException', ],
			],
		],
		'DeletePolicy'                      => [
			'name'   => 'DeletePolicy',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/policies/{policyName}',
			],
			'input'  => [ 'shape' => 'DeletePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeletePolicyVersion'               => [
			'name'   => 'DeletePolicyVersion',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/policies/{policyName}/version/{policyVersionId}',
			],
			'input'  => [ 'shape' => 'DeletePolicyVersionRequest', ],
			'errors' => [
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteRegistrationCode'            => [
			'name'   => 'DeleteRegistrationCode',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/registrationcode',
			],
			'input'  => [ 'shape' => 'DeleteRegistrationCodeRequest', ],
			'output' => [ 'shape' => 'DeleteRegistrationCodeResponse', ],
			'errors' => [
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteRoleAlias'                   => [
			'name'   => 'DeleteRoleAlias',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/role-aliases/{roleAlias}',
			],
			'input'  => [ 'shape' => 'DeleteRoleAliasRequest', ],
			'output' => [ 'shape' => 'DeleteRoleAliasResponse', ],
			'errors' => [
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DeleteScheduledAudit'              => [
			'name'   => 'DeleteScheduledAudit',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/audit/scheduledaudits/{scheduledAuditName}',
			],
			'input'  => [ 'shape' => 'DeleteScheduledAuditRequest', ],
			'output' => [ 'shape' => 'DeleteScheduledAuditResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteSecurityProfile'             => [
			'name'   => 'DeleteSecurityProfile',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/security-profiles/{securityProfileName}',
			],
			'input'  => [ 'shape' => 'DeleteSecurityProfileRequest', ],
			'output' => [ 'shape' => 'DeleteSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'VersionConflictException', ],
			],
		],
		'DeleteStream'                      => [
			'name'   => 'DeleteStream',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/streams/{streamId}',
			],
			'input'  => [ 'shape' => 'DeleteStreamRequest', ],
			'output' => [ 'shape' => 'DeleteStreamResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteThing'                       => [
			'name'   => 'DeleteThing',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/things/{thingName}',
			],
			'input'  => [ 'shape' => 'DeleteThingRequest', ],
			'output' => [ 'shape' => 'DeleteThingResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteThingGroup'                  => [
			'name'   => 'DeleteThingGroup',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'DeleteThingGroupRequest', ],
			'output' => [ 'shape' => 'DeleteThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteThingType'                   => [
			'name'   => 'DeleteThingType',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/thing-types/{thingTypeName}',
			],
			'input'  => [ 'shape' => 'DeleteThingTypeRequest', ],
			'output' => [ 'shape' => 'DeleteThingTypeResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteTopicRule'                   => [
			'name'   => 'DeleteTopicRule',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/rules/{ruleName}',
			],
			'input'  => [ 'shape' => 'DeleteTopicRuleRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
			],
		],
		'DeleteV2LoggingLevel'              => [
			'name'   => 'DeleteV2LoggingLevel',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/v2LoggingLevel', ],
			'input'  => [ 'shape' => 'DeleteV2LoggingLevelRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DeprecateThingType'                => [
			'name'   => 'DeprecateThingType',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/thing-types/{thingTypeName}/deprecate',
			],
			'input'  => [ 'shape' => 'DeprecateThingTypeRequest', ],
			'output' => [ 'shape' => 'DeprecateThingTypeResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeAccountAuditConfiguration' => [
			'name'   => 'DescribeAccountAuditConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/audit/configuration',
			],
			'input'  => [ 'shape' => 'DescribeAccountAuditConfigurationRequest', ],
			'output' => [ 'shape' => 'DescribeAccountAuditConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeAuditTask'                 => [
			'name'   => 'DescribeAuditTask',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/audit/tasks/{taskId}',
			],
			'input'  => [ 'shape' => 'DescribeAuditTaskRequest', ],
			'output' => [ 'shape' => 'DescribeAuditTaskResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeAuthorizer'                => [
			'name'   => 'DescribeAuthorizer',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/authorizer/{authorizerName}',
			],
			'input'  => [ 'shape' => 'DescribeAuthorizerRequest', ],
			'output' => [ 'shape' => 'DescribeAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeBillingGroup'              => [
			'name'   => 'DescribeBillingGroup',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/billing-groups/{billingGroupName}',
			],
			'input'  => [ 'shape' => 'DescribeBillingGroupRequest', ],
			'output' => [ 'shape' => 'DescribeBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeCACertificate'             => [
			'name'   => 'DescribeCACertificate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/cacertificate/{caCertificateId}',
			],
			'input'  => [ 'shape' => 'DescribeCACertificateRequest', ],
			'output' => [ 'shape' => 'DescribeCACertificateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeCertificate'               => [
			'name'   => 'DescribeCertificate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/certificates/{certificateId}',
			],
			'input'  => [ 'shape' => 'DescribeCertificateRequest', ],
			'output' => [ 'shape' => 'DescribeCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeDefaultAuthorizer'         => [
			'name'   => 'DescribeDefaultAuthorizer',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/default-authorizer',
			],
			'input'  => [ 'shape' => 'DescribeDefaultAuthorizerRequest', ],
			'output' => [ 'shape' => 'DescribeDefaultAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeEndpoint'                  => [
			'name'   => 'DescribeEndpoint',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/endpoint', ],
			'input'  => [ 'shape' => 'DescribeEndpointRequest', ],
			'output' => [ 'shape' => 'DescribeEndpointResponse', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DescribeEventConfigurations'       => [
			'name'   => 'DescribeEventConfigurations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/event-configurations',
			],
			'input'  => [ 'shape' => 'DescribeEventConfigurationsRequest', ],
			'output' => [ 'shape' => 'DescribeEventConfigurationsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'DescribeIndex'                     => [
			'name'   => 'DescribeIndex',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/indices/{indexName}',
			],
			'input'  => [ 'shape' => 'DescribeIndexRequest', ],
			'output' => [ 'shape' => 'DescribeIndexResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeJob'                       => [
			'name'   => 'DescribeJob',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/jobs/{jobId}', ],
			'input'  => [ 'shape' => 'DescribeJobRequest', ],
			'output' => [ 'shape' => 'DescribeJobResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DescribeJobExecution'              => [
			'name'   => 'DescribeJobExecution',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/things/{thingName}/jobs/{jobId}',
			],
			'input'  => [ 'shape' => 'DescribeJobExecutionRequest', ],
			'output' => [ 'shape' => 'DescribeJobExecutionResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DescribeRoleAlias'                 => [
			'name'   => 'DescribeRoleAlias',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/role-aliases/{roleAlias}',
			],
			'input'  => [ 'shape' => 'DescribeRoleAliasRequest', ],
			'output' => [ 'shape' => 'DescribeRoleAliasResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeScheduledAudit'            => [
			'name'   => 'DescribeScheduledAudit',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/audit/scheduledaudits/{scheduledAuditName}',
			],
			'input'  => [ 'shape' => 'DescribeScheduledAuditRequest', ],
			'output' => [ 'shape' => 'DescribeScheduledAuditResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeSecurityProfile'           => [
			'name'   => 'DescribeSecurityProfile',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/security-profiles/{securityProfileName}',
			],
			'input'  => [ 'shape' => 'DescribeSecurityProfileRequest', ],
			'output' => [ 'shape' => 'DescribeSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeStream'                    => [
			'name'   => 'DescribeStream',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/streams/{streamId}',
			],
			'input'  => [ 'shape' => 'DescribeStreamRequest', ],
			'output' => [ 'shape' => 'DescribeStreamResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeThing'                     => [
			'name'   => 'DescribeThing',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/things/{thingName}',
			],
			'input'  => [ 'shape' => 'DescribeThingRequest', ],
			'output' => [ 'shape' => 'DescribeThingResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DescribeThingGroup'                => [
			'name'   => 'DescribeThingGroup',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'DescribeThingGroupRequest', ],
			'output' => [ 'shape' => 'DescribeThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeThingRegistrationTask'     => [
			'name'   => 'DescribeThingRegistrationTask',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-registration-tasks/{taskId}',
			],
			'input'  => [ 'shape' => 'DescribeThingRegistrationTaskRequest', ],
			'output' => [ 'shape' => 'DescribeThingRegistrationTaskResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeThingType'                 => [
			'name'   => 'DescribeThingType',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-types/{thingTypeName}',
			],
			'input'  => [ 'shape' => 'DescribeThingTypeRequest', ],
			'output' => [ 'shape' => 'DescribeThingTypeResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DetachPolicy'                      => [
			'name'   => 'DetachPolicy',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/target-policies/{policyName}',
			],
			'input'  => [ 'shape' => 'DetachPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'DetachPrincipalPolicy'             => [
			'name'       => 'DetachPrincipalPolicy',
			'http'       => [
				'method'     => 'DELETE',
				'requestUri' => '/principal-policies/{policyName}',
			],
			'input'      => [ 'shape' => 'DetachPrincipalPolicyRequest', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
			'deprecated' => true,
		],
		'DetachSecurityProfile'             => [
			'name'   => 'DetachSecurityProfile',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/security-profiles/{securityProfileName}/targets',
			],
			'input'  => [ 'shape' => 'DetachSecurityProfileRequest', ],
			'output' => [ 'shape' => 'DetachSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DetachThingPrincipal'              => [
			'name'   => 'DetachThingPrincipal',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/things/{thingName}/principals',
			],
			'input'  => [ 'shape' => 'DetachThingPrincipalRequest', ],
			'output' => [ 'shape' => 'DetachThingPrincipalResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DisableTopicRule'                  => [
			'name'   => 'DisableTopicRule',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/rules/{ruleName}/disable',
			],
			'input'  => [ 'shape' => 'DisableTopicRuleRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
			],
		],
		'EnableTopicRule'                   => [
			'name'   => 'EnableTopicRule',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/rules/{ruleName}/enable',
			],
			'input'  => [ 'shape' => 'EnableTopicRuleRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
			],
		],
		'GetEffectivePolicies'              => [
			'name'   => 'GetEffectivePolicies',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/effective-policies',
			],
			'input'  => [ 'shape' => 'GetEffectivePoliciesRequest', ],
			'output' => [ 'shape' => 'GetEffectivePoliciesResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'GetIndexingConfiguration'          => [
			'name'   => 'GetIndexingConfiguration',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/indexing/config', ],
			'input'  => [ 'shape' => 'GetIndexingConfigurationRequest', ],
			'output' => [ 'shape' => 'GetIndexingConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetJobDocument'                    => [
			'name'   => 'GetJobDocument',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/jobs/{jobId}/job-document',
			],
			'input'  => [ 'shape' => 'GetJobDocumentRequest', ],
			'output' => [ 'shape' => 'GetJobDocumentResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'GetLoggingOptions'                 => [
			'name'   => 'GetLoggingOptions',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/loggingOptions', ],
			'input'  => [ 'shape' => 'GetLoggingOptionsRequest', ],
			'output' => [ 'shape' => 'GetLoggingOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'GetOTAUpdate'                      => [
			'name'   => 'GetOTAUpdate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/otaUpdates/{otaUpdateId}',
			],
			'input'  => [ 'shape' => 'GetOTAUpdateRequest', ],
			'output' => [ 'shape' => 'GetOTAUpdateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetPolicy'                         => [
			'name'   => 'GetPolicy',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/policies/{policyName}',
			],
			'input'  => [ 'shape' => 'GetPolicyRequest', ],
			'output' => [ 'shape' => 'GetPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetPolicyVersion'                  => [
			'name'   => 'GetPolicyVersion',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/policies/{policyName}/version/{policyVersionId}',
			],
			'input'  => [ 'shape' => 'GetPolicyVersionRequest', ],
			'output' => [ 'shape' => 'GetPolicyVersionResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetRegistrationCode'               => [
			'name'   => 'GetRegistrationCode',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/registrationcode',
			],
			'input'  => [ 'shape' => 'GetRegistrationCodeRequest', ],
			'output' => [ 'shape' => 'GetRegistrationCodeResponse', ],
			'errors' => [
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'GetStatistics'                     => [
			'name'   => 'GetStatistics',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/indices/statistics',
			],
			'input'  => [ 'shape' => 'GetStatisticsRequest', ],
			'output' => [ 'shape' => 'GetStatisticsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidQueryException', ],
				[ 'shape' => 'InvalidAggregationException', ],
				[ 'shape' => 'IndexNotReadyException', ],
			],
		],
		'GetTopicRule'                      => [
			'name'   => 'GetTopicRule',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/rules/{ruleName}',
			],
			'input'  => [ 'shape' => 'GetTopicRuleRequest', ],
			'output' => [ 'shape' => 'GetTopicRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
			],
		],
		'GetV2LoggingOptions'               => [
			'name'   => 'GetV2LoggingOptions',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v2LoggingOptions',
			],
			'input'  => [ 'shape' => 'GetV2LoggingOptionsRequest', ],
			'output' => [ 'shape' => 'GetV2LoggingOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'NotConfiguredException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListActiveViolations'              => [
			'name'   => 'ListActiveViolations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/active-violations',
			],
			'input'  => [ 'shape' => 'ListActiveViolationsRequest', ],
			'output' => [ 'shape' => 'ListActiveViolationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListAttachedPolicies'              => [
			'name'   => 'ListAttachedPolicies',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/attached-policies/{target}',
			],
			'input'  => [ 'shape' => 'ListAttachedPoliciesRequest', ],
			'output' => [ 'shape' => 'ListAttachedPoliciesResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'ListAuditFindings'                 => [
			'name'   => 'ListAuditFindings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/audit/findings', ],
			'input'  => [ 'shape' => 'ListAuditFindingsRequest', ],
			'output' => [ 'shape' => 'ListAuditFindingsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListAuditTasks'                    => [
			'name'   => 'ListAuditTasks',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/audit/tasks', ],
			'input'  => [ 'shape' => 'ListAuditTasksRequest', ],
			'output' => [ 'shape' => 'ListAuditTasksResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListAuthorizers'                   => [
			'name'   => 'ListAuthorizers',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/authorizers/', ],
			'input'  => [ 'shape' => 'ListAuthorizersRequest', ],
			'output' => [ 'shape' => 'ListAuthorizersResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListBillingGroups'                 => [
			'name'   => 'ListBillingGroups',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/billing-groups', ],
			'input'  => [ 'shape' => 'ListBillingGroupsRequest', ],
			'output' => [ 'shape' => 'ListBillingGroupsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListCACertificates'                => [
			'name'   => 'ListCACertificates',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/cacertificates', ],
			'input'  => [ 'shape' => 'ListCACertificatesRequest', ],
			'output' => [ 'shape' => 'ListCACertificatesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListCertificates'                  => [
			'name'   => 'ListCertificates',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/certificates', ],
			'input'  => [ 'shape' => 'ListCertificatesRequest', ],
			'output' => [ 'shape' => 'ListCertificatesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListCertificatesByCA'              => [
			'name'   => 'ListCertificatesByCA',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/certificates-by-ca/{caCertificateId}',
			],
			'input'  => [ 'shape' => 'ListCertificatesByCARequest', ],
			'output' => [ 'shape' => 'ListCertificatesByCAResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListIndices'                       => [
			'name'   => 'ListIndices',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/indices', ],
			'input'  => [ 'shape' => 'ListIndicesRequest', ],
			'output' => [ 'shape' => 'ListIndicesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListJobExecutionsForJob'           => [
			'name'   => 'ListJobExecutionsForJob',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/jobs/{jobId}/things',
			],
			'input'  => [ 'shape' => 'ListJobExecutionsForJobRequest', ],
			'output' => [ 'shape' => 'ListJobExecutionsForJobResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListJobExecutionsForThing'         => [
			'name'   => 'ListJobExecutionsForThing',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/things/{thingName}/jobs',
			],
			'input'  => [ 'shape' => 'ListJobExecutionsForThingRequest', ],
			'output' => [ 'shape' => 'ListJobExecutionsForThingResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListJobs'                          => [
			'name'   => 'ListJobs',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/jobs', ],
			'input'  => [ 'shape' => 'ListJobsRequest', ],
			'output' => [ 'shape' => 'ListJobsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListOTAUpdates'                    => [
			'name'   => 'ListOTAUpdates',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/otaUpdates', ],
			'input'  => [ 'shape' => 'ListOTAUpdatesRequest', ],
			'output' => [ 'shape' => 'ListOTAUpdatesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListOutgoingCertificates'          => [
			'name'   => 'ListOutgoingCertificates',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/certificates-out-going',
			],
			'input'  => [ 'shape' => 'ListOutgoingCertificatesRequest', ],
			'output' => [ 'shape' => 'ListOutgoingCertificatesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListPolicies'                      => [
			'name'   => 'ListPolicies',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/policies', ],
			'input'  => [ 'shape' => 'ListPoliciesRequest', ],
			'output' => [ 'shape' => 'ListPoliciesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListPolicyPrincipals'              => [
			'name'       => 'ListPolicyPrincipals',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/policy-principals',
			],
			'input'      => [ 'shape' => 'ListPolicyPrincipalsRequest', ],
			'output'     => [ 'shape' => 'ListPolicyPrincipalsResponse', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
			'deprecated' => true,
		],
		'ListPolicyVersions'                => [
			'name'   => 'ListPolicyVersions',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/policies/{policyName}/version',
			],
			'input'  => [ 'shape' => 'ListPolicyVersionsRequest', ],
			'output' => [ 'shape' => 'ListPolicyVersionsResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListPrincipalPolicies'             => [
			'name'       => 'ListPrincipalPolicies',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/principal-policies',
			],
			'input'      => [ 'shape' => 'ListPrincipalPoliciesRequest', ],
			'output'     => [ 'shape' => 'ListPrincipalPoliciesResponse', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
			'deprecated' => true,
		],
		'ListPrincipalThings'               => [
			'name'   => 'ListPrincipalThings',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/principals/things',
			],
			'input'  => [ 'shape' => 'ListPrincipalThingsRequest', ],
			'output' => [ 'shape' => 'ListPrincipalThingsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListRoleAliases'                   => [
			'name'   => 'ListRoleAliases',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/role-aliases', ],
			'input'  => [ 'shape' => 'ListRoleAliasesRequest', ],
			'output' => [ 'shape' => 'ListRoleAliasesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListScheduledAudits'               => [
			'name'   => 'ListScheduledAudits',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/audit/scheduledaudits',
			],
			'input'  => [ 'shape' => 'ListScheduledAuditsRequest', ],
			'output' => [ 'shape' => 'ListScheduledAuditsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListSecurityProfiles'              => [
			'name'   => 'ListSecurityProfiles',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/security-profiles',
			],
			'input'  => [ 'shape' => 'ListSecurityProfilesRequest', ],
			'output' => [ 'shape' => 'ListSecurityProfilesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListSecurityProfilesForTarget'     => [
			'name'   => 'ListSecurityProfilesForTarget',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/security-profiles-for-target',
			],
			'input'  => [ 'shape' => 'ListSecurityProfilesForTargetRequest', ],
			'output' => [ 'shape' => 'ListSecurityProfilesForTargetResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListStreams'                       => [
			'name'   => 'ListStreams',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/streams', ],
			'input'  => [ 'shape' => 'ListStreamsRequest', ],
			'output' => [ 'shape' => 'ListStreamsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListTagsForResource'               => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/tags', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListTargetsForPolicy'              => [
			'name'   => 'ListTargetsForPolicy',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/policy-targets/{policyName}',
			],
			'input'  => [ 'shape' => 'ListTargetsForPolicyRequest', ],
			'output' => [ 'shape' => 'ListTargetsForPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'ListTargetsForSecurityProfile'     => [
			'name'   => 'ListTargetsForSecurityProfile',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/security-profiles/{securityProfileName}/targets',
			],
			'input'  => [ 'shape' => 'ListTargetsForSecurityProfileRequest', ],
			'output' => [ 'shape' => 'ListTargetsForSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListThingGroups'                   => [
			'name'   => 'ListThingGroups',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/thing-groups', ],
			'input'  => [ 'shape' => 'ListThingGroupsRequest', ],
			'output' => [ 'shape' => 'ListThingGroupsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListThingGroupsForThing'           => [
			'name'   => 'ListThingGroupsForThing',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/things/{thingName}/thing-groups',
			],
			'input'  => [ 'shape' => 'ListThingGroupsForThingRequest', ],
			'output' => [ 'shape' => 'ListThingGroupsForThingResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListThingPrincipals'               => [
			'name'   => 'ListThingPrincipals',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/things/{thingName}/principals',
			],
			'input'  => [ 'shape' => 'ListThingPrincipalsRequest', ],
			'output' => [ 'shape' => 'ListThingPrincipalsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListThingRegistrationTaskReports'  => [
			'name'   => 'ListThingRegistrationTaskReports',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-registration-tasks/{taskId}/reports',
			],
			'input'  => [ 'shape' => 'ListThingRegistrationTaskReportsRequest', ],
			'output' => [ 'shape' => 'ListThingRegistrationTaskReportsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListThingRegistrationTasks'        => [
			'name'   => 'ListThingRegistrationTasks',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-registration-tasks',
			],
			'input'  => [ 'shape' => 'ListThingRegistrationTasksRequest', ],
			'output' => [ 'shape' => 'ListThingRegistrationTasksResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListThingTypes'                    => [
			'name'   => 'ListThingTypes',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/thing-types', ],
			'input'  => [ 'shape' => 'ListThingTypesRequest', ],
			'output' => [ 'shape' => 'ListThingTypesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListThings'                        => [
			'name'   => 'ListThings',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/things', ],
			'input'  => [ 'shape' => 'ListThingsRequest', ],
			'output' => [ 'shape' => 'ListThingsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListThingsInBillingGroup'          => [
			'name'   => 'ListThingsInBillingGroup',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/billing-groups/{billingGroupName}/things',
			],
			'input'  => [ 'shape' => 'ListThingsInBillingGroupRequest', ],
			'output' => [ 'shape' => 'ListThingsInBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListThingsInThingGroup'            => [
			'name'   => 'ListThingsInThingGroup',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/thing-groups/{thingGroupName}/things',
			],
			'input'  => [ 'shape' => 'ListThingsInThingGroupRequest', ],
			'output' => [ 'shape' => 'ListThingsInThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListTopicRules'                    => [
			'name'   => 'ListTopicRules',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/rules', ],
			'input'  => [ 'shape' => 'ListTopicRulesRequest', ],
			'output' => [ 'shape' => 'ListTopicRulesResponse', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListV2LoggingLevels'               => [
			'name'   => 'ListV2LoggingLevels',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v2LoggingLevel', ],
			'input'  => [ 'shape' => 'ListV2LoggingLevelsRequest', ],
			'output' => [ 'shape' => 'ListV2LoggingLevelsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'NotConfiguredException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'ListViolationEvents'               => [
			'name'   => 'ListViolationEvents',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/violation-events',
			],
			'input'  => [ 'shape' => 'ListViolationEventsRequest', ],
			'output' => [ 'shape' => 'ListViolationEventsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'RegisterCACertificate'             => [
			'name'   => 'RegisterCACertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/cacertificate', ],
			'input'  => [ 'shape' => 'RegisterCACertificateRequest', ],
			'output' => [ 'shape' => 'RegisterCACertificateResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'RegistrationCodeValidationException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'CertificateValidationException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'RegisterCertificate'               => [
			'name'   => 'RegisterCertificate',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/certificate/register',
			],
			'input'  => [ 'shape' => 'RegisterCertificateRequest', ],
			'output' => [ 'shape' => 'RegisterCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceAlreadyExistsException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'CertificateValidationException', ],
				[ 'shape' => 'CertificateStateException', ],
				[ 'shape' => 'CertificateConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'RegisterThing'                     => [
			'name'   => 'RegisterThing',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/things', ],
			'input'  => [ 'shape' => 'RegisterThingRequest', ],
			'output' => [ 'shape' => 'RegisterThingResponse', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
				[ 'shape' => 'ResourceRegistrationFailureException', ],
			],
		],
		'RejectCertificateTransfer'         => [
			'name'   => 'RejectCertificateTransfer',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/reject-certificate-transfer/{certificateId}',
			],
			'input'  => [ 'shape' => 'RejectCertificateTransferRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TransferAlreadyCompletedException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'RemoveThingFromBillingGroup'       => [
			'name'   => 'RemoveThingFromBillingGroup',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/billing-groups/removeThingFromBillingGroup',
			],
			'input'  => [ 'shape' => 'RemoveThingFromBillingGroupRequest', ],
			'output' => [ 'shape' => 'RemoveThingFromBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'RemoveThingFromThingGroup'         => [
			'name'   => 'RemoveThingFromThingGroup',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/thing-groups/removeThingFromThingGroup',
			],
			'input'  => [ 'shape' => 'RemoveThingFromThingGroupRequest', ],
			'output' => [ 'shape' => 'RemoveThingFromThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ReplaceTopicRule'                  => [
			'name'   => 'ReplaceTopicRule',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/rules/{ruleName}',
			],
			'input'  => [ 'shape' => 'ReplaceTopicRuleRequest', ],
			'errors' => [
				[ 'shape' => 'SqlParseException', ],
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ConflictingResourceUpdateException', ],
			],
		],
		'SearchIndex'                       => [
			'name'   => 'SearchIndex',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/indices/search', ],
			'input'  => [ 'shape' => 'SearchIndexRequest', ],
			'output' => [ 'shape' => 'SearchIndexResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidQueryException', ],
				[ 'shape' => 'IndexNotReadyException', ],
			],
		],
		'SetDefaultAuthorizer'              => [
			'name'   => 'SetDefaultAuthorizer',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/default-authorizer',
			],
			'input'  => [ 'shape' => 'SetDefaultAuthorizerRequest', ],
			'output' => [ 'shape' => 'SetDefaultAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceAlreadyExistsException', ],
			],
		],
		'SetDefaultPolicyVersion'           => [
			'name'   => 'SetDefaultPolicyVersion',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/policies/{policyName}/version/{policyVersionId}',
			],
			'input'  => [ 'shape' => 'SetDefaultPolicyVersionRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'SetLoggingOptions'                 => [
			'name'   => 'SetLoggingOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/loggingOptions', ],
			'input'  => [ 'shape' => 'SetLoggingOptionsRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'SetV2LoggingLevel'                 => [
			'name'   => 'SetV2LoggingLevel',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v2LoggingLevel', ],
			'input'  => [ 'shape' => 'SetV2LoggingLevelRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'NotConfiguredException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'SetV2LoggingOptions'               => [
			'name'   => 'SetV2LoggingOptions',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v2LoggingOptions',
			],
			'input'  => [ 'shape' => 'SetV2LoggingOptionsRequest', ],
			'errors' => [
				[ 'shape' => 'InternalException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'StartOnDemandAuditTask'            => [
			'name'   => 'StartOnDemandAuditTask',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/audit/tasks', ],
			'input'  => [ 'shape' => 'StartOnDemandAuditTaskRequest', ],
			'output' => [ 'shape' => 'StartOnDemandAuditTaskResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'StartThingRegistrationTask'        => [
			'name'   => 'StartThingRegistrationTask',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/thing-registration-tasks',
			],
			'input'  => [ 'shape' => 'StartThingRegistrationTaskRequest', ],
			'output' => [ 'shape' => 'StartThingRegistrationTaskResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'StopThingRegistrationTask'         => [
			'name'   => 'StopThingRegistrationTask',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/thing-registration-tasks/{taskId}/cancel',
			],
			'input'  => [ 'shape' => 'StopThingRegistrationTaskRequest', ],
			'output' => [ 'shape' => 'StopThingRegistrationTaskResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'TagResource'                       => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/tags', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'TestAuthorization'                 => [
			'name'   => 'TestAuthorization',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/test-authorization',
			],
			'input'  => [ 'shape' => 'TestAuthorizationRequest', ],
			'output' => [ 'shape' => 'TestAuthorizationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'TestInvokeAuthorizer'              => [
			'name'   => 'TestInvokeAuthorizer',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/authorizer/{authorizerName}/test',
			],
			'input'  => [ 'shape' => 'TestInvokeAuthorizerRequest', ],
			'output' => [ 'shape' => 'TestInvokeAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'InvalidResponseException', ],
			],
		],
		'TransferCertificate'               => [
			'name'   => 'TransferCertificate',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/transfer-certificate/{certificateId}',
			],
			'input'  => [ 'shape' => 'TransferCertificateRequest', ],
			'output' => [ 'shape' => 'TransferCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'CertificateStateException', ],
				[ 'shape' => 'TransferConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UntagResource'                     => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/untag', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'UpdateAccountAuditConfiguration'   => [
			'name'   => 'UpdateAccountAuditConfiguration',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/audit/configuration',
			],
			'input'  => [ 'shape' => 'UpdateAccountAuditConfigurationRequest', ],
			'output' => [ 'shape' => 'UpdateAccountAuditConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateAuthorizer'                  => [
			'name'   => 'UpdateAuthorizer',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/authorizer/{authorizerName}',
			],
			'input'  => [ 'shape' => 'UpdateAuthorizerRequest', ],
			'output' => [ 'shape' => 'UpdateAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateBillingGroup'                => [
			'name'   => 'UpdateBillingGroup',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/billing-groups/{billingGroupName}',
			],
			'input'  => [ 'shape' => 'UpdateBillingGroupRequest', ],
			'output' => [ 'shape' => 'UpdateBillingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'UpdateCACertificate'               => [
			'name'   => 'UpdateCACertificate',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/cacertificate/{caCertificateId}',
			],
			'input'  => [ 'shape' => 'UpdateCACertificateRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateCertificate'                 => [
			'name'   => 'UpdateCertificate',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/certificates/{certificateId}',
			],
			'input'  => [ 'shape' => 'UpdateCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'CertificateStateException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateDynamicThingGroup'           => [
			'name'   => 'UpdateDynamicThingGroup',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/dynamic-thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'UpdateDynamicThingGroupRequest', ],
			'output' => [ 'shape' => 'UpdateDynamicThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidQueryException', ],
			],
		],
		'UpdateEventConfigurations'         => [
			'name'   => 'UpdateEventConfigurations',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/event-configurations',
			],
			'input'  => [ 'shape' => 'UpdateEventConfigurationsRequest', ],
			'output' => [ 'shape' => 'UpdateEventConfigurationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'UpdateIndexingConfiguration'       => [
			'name'   => 'UpdateIndexingConfiguration',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/indexing/config',
			],
			'input'  => [ 'shape' => 'UpdateIndexingConfigurationRequest', ],
			'output' => [ 'shape' => 'UpdateIndexingConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateJob'                         => [
			'name'   => 'UpdateJob',
			'http'   => [ 'method' => 'PATCH', 'requestUri' => '/jobs/{jobId}', ],
			'input'  => [ 'shape' => 'UpdateJobRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'UpdateRoleAlias'                   => [
			'name'   => 'UpdateRoleAlias',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/role-aliases/{roleAlias}',
			],
			'input'  => [ 'shape' => 'UpdateRoleAliasRequest', ],
			'output' => [ 'shape' => 'UpdateRoleAliasResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateScheduledAudit'              => [
			'name'   => 'UpdateScheduledAudit',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/audit/scheduledaudits/{scheduledAuditName}',
			],
			'input'  => [ 'shape' => 'UpdateScheduledAuditRequest', ],
			'output' => [ 'shape' => 'UpdateScheduledAuditResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateSecurityProfile'             => [
			'name'   => 'UpdateSecurityProfile',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/security-profiles/{securityProfileName}',
			],
			'input'  => [ 'shape' => 'UpdateSecurityProfileRequest', ],
			'output' => [ 'shape' => 'UpdateSecurityProfileResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateStream'                      => [
			'name'   => 'UpdateStream',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/streams/{streamId}',
			],
			'input'  => [ 'shape' => 'UpdateStreamRequest', ],
			'output' => [ 'shape' => 'UpdateStreamResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateThing'                       => [
			'name'   => 'UpdateThing',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/things/{thingName}',
			],
			'input'  => [ 'shape' => 'UpdateThingRequest', ],
			'output' => [ 'shape' => 'UpdateThingResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'UpdateThingGroup'                  => [
			'name'   => 'UpdateThingGroup',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/thing-groups/{thingGroupName}',
			],
			'input'  => [ 'shape' => 'UpdateThingGroupRequest', ],
			'output' => [ 'shape' => 'UpdateThingGroupResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'VersionConflictException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'UpdateThingGroupsForThing'         => [
			'name'   => 'UpdateThingGroupsForThing',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/thing-groups/updateThingGroupsForThing',
			],
			'input'  => [ 'shape' => 'UpdateThingGroupsForThingRequest', ],
			'output' => [ 'shape' => 'UpdateThingGroupsForThingResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ValidateSecurityProfileBehaviors'  => [
			'name'   => 'ValidateSecurityProfileBehaviors',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/security-profile-behaviors/validate',
			],
			'input'  => [ 'shape' => 'ValidateSecurityProfileBehaviorsRequest', ],
			'output' => [ 'shape' => 'ValidateSecurityProfileBehaviorsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ThrottlingException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
	],
	'shapes'     => [
		'AbortAction'                               => [ 'type' => 'string', 'enum' => [ 'CANCEL', ], ],
		'AbortConfig'                               => [
			'type'     => 'structure',
			'required' => [ 'criteriaList', ],
			'members'  => [ 'criteriaList' => [ 'shape' => 'AbortCriteriaList', ], ],
		],
		'AbortCriteria'                             => [
			'type'     => 'structure',
			'required' => [
				'failureType',
				'action',
				'thresholdPercentage',
				'minNumberOfExecutedThings',
			],
			'members'  => [
				'failureType'               => [ 'shape' => 'JobExecutionFailureType', ],
				'action'                    => [ 'shape' => 'AbortAction', ],
				'thresholdPercentage'       => [ 'shape' => 'AbortThresholdPercentage', ],
				'minNumberOfExecutedThings' => [ 'shape' => 'MinimumNumberOfExecutedThings', ],
			],
		],
		'AbortCriteriaList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AbortCriteria', ],
			'min'    => 1,
		],
		'AbortThresholdPercentage'                  => [ 'type' => 'double', 'max' => 100, ],
		'AcceptCertificateTransferRequest'          => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
				'setAsActive'   => [
					'shape'        => 'SetAsActive',
					'location'     => 'querystring',
					'locationName' => 'setAsActive',
				],
			],
		],
		'Action'                                    => [
			'type'    => 'structure',
			'members' => [
				'dynamoDB'         => [ 'shape' => 'DynamoDBAction', ],
				'dynamoDBv2'       => [ 'shape' => 'DynamoDBv2Action', ],
				'lambda'           => [ 'shape' => 'LambdaAction', ],
				'sns'              => [ 'shape' => 'SnsAction', ],
				'sqs'              => [ 'shape' => 'SqsAction', ],
				'kinesis'          => [ 'shape' => 'KinesisAction', ],
				'republish'        => [ 'shape' => 'RepublishAction', ],
				's3'               => [ 'shape' => 'S3Action', ],
				'firehose'         => [ 'shape' => 'FirehoseAction', ],
				'cloudwatchMetric' => [ 'shape' => 'CloudwatchMetricAction', ],
				'cloudwatchAlarm'  => [ 'shape' => 'CloudwatchAlarmAction', ],
				'elasticsearch'    => [ 'shape' => 'ElasticsearchAction', ],
				'salesforce'       => [ 'shape' => 'SalesforceAction', ],
				'iotAnalytics'     => [ 'shape' => 'IotAnalyticsAction', ],
				'iotEvents'        => [ 'shape' => 'IotEventsAction', ],
				'stepFunctions'    => [ 'shape' => 'StepFunctionsAction', ],
			],
		],
		'ActionList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Action', ],
			'max'    => 10,
			'min'    => 0,
		],
		'ActionType'                                => [
			'type' => 'string',
			'enum' => [ 'PUBLISH', 'SUBSCRIBE', 'RECEIVE', 'CONNECT', ],
		],
		'ActiveViolation'                           => [
			'type'    => 'structure',
			'members' => [
				'violationId'         => [ 'shape' => 'ViolationId', ],
				'thingName'           => [ 'shape' => 'ThingName', ],
				'securityProfileName' => [ 'shape' => 'SecurityProfileName', ],
				'behavior'            => [ 'shape' => 'Behavior', ],
				'lastViolationValue'  => [ 'shape' => 'MetricValue', ],
				'lastViolationTime'   => [ 'shape' => 'Timestamp', ],
				'violationStartTime'  => [ 'shape' => 'Timestamp', ],
			],
		],
		'ActiveViolations'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActiveViolation', ],
		],
		'AddThingToBillingGroupRequest'             => [
			'type'    => 'structure',
			'members' => [
				'billingGroupName' => [ 'shape' => 'BillingGroupName', ],
				'billingGroupArn'  => [ 'shape' => 'BillingGroupArn', ],
				'thingName'        => [ 'shape' => 'ThingName', ],
				'thingArn'         => [ 'shape' => 'ThingArn', ],
			],
		],
		'AddThingToBillingGroupResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'AddThingToThingGroupRequest'               => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName'        => [ 'shape' => 'ThingGroupName', ],
				'thingGroupArn'         => [ 'shape' => 'ThingGroupArn', ],
				'thingName'             => [ 'shape' => 'ThingName', ],
				'thingArn'              => [ 'shape' => 'ThingArn', ],
				'overrideDynamicGroups' => [ 'shape' => 'OverrideDynamicGroups', ],
			],
		],
		'AddThingToThingGroupResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'AdditionalMetricsToRetainList'             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BehaviorMetric', ],
		],
		'AdditionalParameterMap'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeKey', ],
			'value' => [ 'shape' => 'Value', ],
		],
		'AggregationField'                          => [ 'type' => 'string', 'min' => 1, ],
		'AlarmName'                                 => [ 'type' => 'string', ],
		'AlertTarget'                               => [
			'type'     => 'structure',
			'required' => [ 'alertTargetArn', 'roleArn', ],
			'members'  => [
				'alertTargetArn' => [ 'shape' => 'AlertTargetArn', ],
				'roleArn'        => [ 'shape' => 'RoleArn', ],
			],
		],
		'AlertTargetArn'                            => [ 'type' => 'string', ],
		'AlertTargetType'                           => [ 'type' => 'string', 'enum' => [ 'SNS', ], ],
		'AlertTargets'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AlertTargetType', ],
			'value' => [ 'shape' => 'AlertTarget', ],
		],
		'AllowAutoRegistration'                     => [ 'type' => 'boolean', ],
		'Allowed'                                   => [
			'type'    => 'structure',
			'members' => [ 'policies' => [ 'shape' => 'Policies', ], ],
		],
		'ApproximateSecondsBeforeTimedOut'          => [ 'type' => 'long', ],
		'AscendingOrder'                            => [ 'type' => 'boolean', ],
		'AssociateTargetsWithJobRequest'            => [
			'type'     => 'structure',
			'required' => [ 'targets', 'jobId', ],
			'members'  => [
				'targets' => [ 'shape' => 'JobTargets', ],
				'jobId'   => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'comment' => [ 'shape' => 'Comment', ],
			],
		],
		'AssociateTargetsWithJobResponse'           => [
			'type'    => 'structure',
			'members' => [
				'jobArn'      => [ 'shape' => 'JobArn', ],
				'jobId'       => [ 'shape' => 'JobId', ],
				'description' => [ 'shape' => 'JobDescription', ],
			],
		],
		'AttachPolicyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'target', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'target'     => [ 'shape' => 'PolicyTarget', ],
			],
		],
		'AttachPrincipalPolicyRequest'              => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'principal', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'principal'  => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-iot-principal',
				],
			],
		],
		'AttachSecurityProfileRequest'              => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', 'securityProfileTargetArn', ],
			'members'  => [
				'securityProfileName'      => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'securityProfileTargetArn' => [
					'shape'        => 'SecurityProfileTargetArn',
					'location'     => 'querystring',
					'locationName' => 'securityProfileTargetArn',
				],
			],
		],
		'AttachSecurityProfileResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'AttachThingPrincipalRequest'               => [
			'type'     => 'structure',
			'required' => [ 'thingName', 'principal', ],
			'members'  => [
				'thingName' => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'principal' => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-principal',
				],
			],
		],
		'AttachThingPrincipalResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'AttributeKey'                              => [ 'type' => 'string', ],
		'AttributeName'                             => [
			'type'    => 'string',
			'max'     => 128,
			'pattern' => '[a-zA-Z0-9_.,@/:#-]+',
		],
		'AttributePayload'                          => [
			'type'    => 'structure',
			'members' => [
				'attributes' => [ 'shape' => 'Attributes', ],
				'merge'      => [ 'shape' => 'Flag', ],
			],
		],
		'AttributeValue'                            => [
			'type'    => 'string',
			'max'     => 800,
			'pattern' => '[a-zA-Z0-9_.,@/:#-]*',
		],
		'Attributes'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'AttributesMap'                             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeKey', ],
			'value' => [ 'shape' => 'Value', ],
		],
		'AuditCheckConfiguration'                   => [
			'type'    => 'structure',
			'members' => [ 'enabled' => [ 'shape' => 'Enabled', ], ],
		],
		'AuditCheckConfigurations'                  => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AuditCheckName', ],
			'value' => [ 'shape' => 'AuditCheckConfiguration', ],
		],
		'AuditCheckDetails'                         => [
			'type'    => 'structure',
			'members' => [
				'checkRunStatus'             => [ 'shape' => 'AuditCheckRunStatus', ],
				'checkCompliant'             => [ 'shape' => 'CheckCompliant', ],
				'totalResourcesCount'        => [ 'shape' => 'TotalResourcesCount', ],
				'nonCompliantResourcesCount' => [ 'shape' => 'NonCompliantResourcesCount', ],
				'errorCode'                  => [ 'shape' => 'ErrorCode', ],
				'message'                    => [ 'shape' => 'ErrorMessage', ],
			],
		],
		'AuditCheckName'                            => [ 'type' => 'string', ],
		'AuditCheckRunStatus'                       => [
			'type' => 'string',
			'enum' => [
				'IN_PROGRESS',
				'WAITING_FOR_DATA_COLLECTION',
				'CANCELED',
				'COMPLETED_COMPLIANT',
				'COMPLETED_NON_COMPLIANT',
				'FAILED',
			],
		],
		'AuditDetails'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AuditCheckName', ],
			'value' => [ 'shape' => 'AuditCheckDetails', ],
		],
		'AuditFinding'                              => [
			'type'    => 'structure',
			'members' => [
				'taskId'                     => [ 'shape' => 'AuditTaskId', ],
				'checkName'                  => [ 'shape' => 'AuditCheckName', ],
				'taskStartTime'              => [ 'shape' => 'Timestamp', ],
				'findingTime'                => [ 'shape' => 'Timestamp', ],
				'severity'                   => [ 'shape' => 'AuditFindingSeverity', ],
				'nonCompliantResource'       => [ 'shape' => 'NonCompliantResource', ],
				'relatedResources'           => [ 'shape' => 'RelatedResources', ],
				'reasonForNonCompliance'     => [ 'shape' => 'ReasonForNonCompliance', ],
				'reasonForNonComplianceCode' => [ 'shape' => 'ReasonForNonComplianceCode', ],
			],
		],
		'AuditFindingSeverity'                      => [
			'type' => 'string',
			'enum' => [ 'CRITICAL', 'HIGH', 'MEDIUM', 'LOW', ],
		],
		'AuditFindings'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AuditFinding', ],
		],
		'AuditFrequency'                            => [
			'type' => 'string',
			'enum' => [ 'DAILY', 'WEEKLY', 'BIWEEKLY', 'MONTHLY', ],
		],
		'AuditNotificationTarget'                   => [
			'type'    => 'structure',
			'members' => [
				'targetArn' => [ 'shape' => 'TargetArn', ],
				'roleArn'   => [ 'shape' => 'RoleArn', ],
				'enabled'   => [ 'shape' => 'Enabled', ],
			],
		],
		'AuditNotificationTargetConfigurations'     => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AuditNotificationType', ],
			'value' => [ 'shape' => 'AuditNotificationTarget', ],
		],
		'AuditNotificationType'                     => [ 'type' => 'string', 'enum' => [ 'SNS', ], ],
		'AuditTaskId'                               => [
			'type'    => 'string',
			'max'     => 40,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9\\-]+',
		],
		'AuditTaskMetadata'                         => [
			'type'    => 'structure',
			'members' => [
				'taskId'     => [ 'shape' => 'AuditTaskId', ],
				'taskStatus' => [ 'shape' => 'AuditTaskStatus', ],
				'taskType'   => [ 'shape' => 'AuditTaskType', ],
			],
		],
		'AuditTaskMetadataList'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AuditTaskMetadata', ],
		],
		'AuditTaskStatus'                           => [
			'type' => 'string',
			'enum' => [ 'IN_PROGRESS', 'COMPLETED', 'FAILED', 'CANCELED', ],
		],
		'AuditTaskType'                             => [
			'type' => 'string',
			'enum' => [ 'ON_DEMAND_AUDIT_TASK', 'SCHEDULED_AUDIT_TASK', ],
		],
		'AuthDecision'                              => [
			'type' => 'string',
			'enum' => [ 'ALLOWED', 'EXPLICIT_DENY', 'IMPLICIT_DENY', ],
		],
		'AuthInfo'                                  => [
			'type'    => 'structure',
			'members' => [
				'actionType' => [ 'shape' => 'ActionType', ],
				'resources'  => [ 'shape' => 'Resources', ],
			],
		],
		'AuthInfos'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AuthInfo', ],
			'max'    => 10,
			'min'    => 1,
		],
		'AuthResult'                                => [
			'type'    => 'structure',
			'members' => [
				'authInfo'             => [ 'shape' => 'AuthInfo', ],
				'allowed'              => [ 'shape' => 'Allowed', ],
				'denied'               => [ 'shape' => 'Denied', ],
				'authDecision'         => [ 'shape' => 'AuthDecision', ],
				'missingContextValues' => [ 'shape' => 'MissingContextValues', ],
			],
		],
		'AuthResults'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthResult', ], ],
		'AuthorizerArn'                             => [ 'type' => 'string', ],
		'AuthorizerDescription'                     => [
			'type'    => 'structure',
			'members' => [
				'authorizerName'         => [ 'shape' => 'AuthorizerName', ],
				'authorizerArn'          => [ 'shape' => 'AuthorizerArn', ],
				'authorizerFunctionArn'  => [ 'shape' => 'AuthorizerFunctionArn', ],
				'tokenKeyName'           => [ 'shape' => 'TokenKeyName', ],
				'tokenSigningPublicKeys' => [ 'shape' => 'PublicKeyMap', ],
				'status'                 => [ 'shape' => 'AuthorizerStatus', ],
				'creationDate'           => [ 'shape' => 'DateType', ],
				'lastModifiedDate'       => [ 'shape' => 'DateType', ],
			],
		],
		'AuthorizerFunctionArn'                     => [ 'type' => 'string', ],
		'AuthorizerName'                            => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w=,@-]+',
		],
		'AuthorizerStatus'                          => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', ], ],
		'AuthorizerSummary'                         => [
			'type'    => 'structure',
			'members' => [
				'authorizerName' => [ 'shape' => 'AuthorizerName', ],
				'authorizerArn'  => [ 'shape' => 'AuthorizerArn', ],
			],
		],
		'Authorizers'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AuthorizerSummary', ],
		],
		'AutoRegistrationStatus'                    => [ 'type' => 'string', 'enum' => [ 'ENABLE', 'DISABLE', ], ],
		'AwsAccountId'                              => [
			'type'    => 'string',
			'max'     => 12,
			'min'     => 12,
			'pattern' => '[0-9]+',
		],
		'AwsArn'                                    => [ 'type' => 'string', ],
		'AwsIotJobArn'                              => [ 'type' => 'string', ],
		'AwsIotJobId'                               => [ 'type' => 'string', ],
		'AwsIotSqlVersion'                          => [ 'type' => 'string', ],
		'AwsJobExecutionsRolloutConfig'             => [
			'type'    => 'structure',
			'members' => [ 'maximumPerMinute' => [ 'shape' => 'MaximumPerMinute', ], ],
		],
		'Behavior'                                  => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [
				'name'     => [ 'shape' => 'BehaviorName', ],
				'metric'   => [ 'shape' => 'BehaviorMetric', ],
				'criteria' => [ 'shape' => 'BehaviorCriteria', ],
			],
		],
		'BehaviorCriteria'                          => [
			'type'    => 'structure',
			'members' => [
				'comparisonOperator'           => [ 'shape' => 'ComparisonOperator', ],
				'value'                        => [ 'shape' => 'MetricValue', ],
				'durationSeconds'              => [ 'shape' => 'DurationSeconds', ],
				'consecutiveDatapointsToAlarm' => [ 'shape' => 'ConsecutiveDatapointsToAlarm', ],
				'consecutiveDatapointsToClear' => [ 'shape' => 'ConsecutiveDatapointsToClear', ],
				'statisticalThreshold'         => [ 'shape' => 'StatisticalThreshold', ],
			],
		],
		'BehaviorMetric'                            => [ 'type' => 'string', ],
		'BehaviorName'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'Behaviors'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Behavior', ],
			'max'    => 100,
		],
		'BillingGroupArn'                           => [ 'type' => 'string', ],
		'BillingGroupDescription'                   => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[\\p{Graph}\\x20]*',
		],
		'BillingGroupId'                            => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9\\-]+',
		],
		'BillingGroupMetadata'                      => [
			'type'    => 'structure',
			'members' => [ 'creationDate' => [ 'shape' => 'CreationDate', ], ],
		],
		'BillingGroupName'                          => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'BillingGroupNameAndArnList'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GroupNameAndArn', ],
		],
		'BillingGroupProperties'                    => [
			'type'    => 'structure',
			'members' => [ 'billingGroupDescription' => [ 'shape' => 'BillingGroupDescription', ], ],
		],
		'Boolean'                                   => [ 'type' => 'boolean', ],
		'BucketName'                                => [ 'type' => 'string', ],
		'CACertificate'                             => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
				'status'         => [ 'shape' => 'CACertificateStatus', ],
				'creationDate'   => [ 'shape' => 'DateType', ],
			],
		],
		'CACertificateDescription'                  => [
			'type'    => 'structure',
			'members' => [
				'certificateArn'         => [ 'shape' => 'CertificateArn', ],
				'certificateId'          => [ 'shape' => 'CertificateId', ],
				'status'                 => [ 'shape' => 'CACertificateStatus', ],
				'certificatePem'         => [ 'shape' => 'CertificatePem', ],
				'ownedBy'                => [ 'shape' => 'AwsAccountId', ],
				'creationDate'           => [ 'shape' => 'DateType', ],
				'autoRegistrationStatus' => [ 'shape' => 'AutoRegistrationStatus', ],
				'lastModifiedDate'       => [ 'shape' => 'DateType', ],
				'customerVersion'        => [ 'shape' => 'CustomerVersion', ],
				'generationId'           => [ 'shape' => 'GenerationId', ],
				'validity'               => [ 'shape' => 'CertificateValidity', ],
			],
		],
		'CACertificateStatus'                       => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', ], ],
		'CACertificates'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CACertificate', ],
		],
		'CancelAuditTaskRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'taskId', ],
			'members'  => [
				'taskId' => [
					'shape'        => 'AuditTaskId',
					'location'     => 'uri',
					'locationName' => 'taskId',
				],
			],
		],
		'CancelAuditTaskResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'CancelCertificateTransferRequest'          => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
			],
		],
		'CancelJobExecutionRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'thingName', ],
			'members'  => [
				'jobId'           => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'thingName'       => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'force'           => [
					'shape'        => 'ForceFlag',
					'location'     => 'querystring',
					'locationName' => 'force',
				],
				'expectedVersion' => [ 'shape' => 'ExpectedVersion', ],
				'statusDetails'   => [ 'shape' => 'DetailsMap', ],
			],
		],
		'CancelJobRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId'      => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'reasonCode' => [ 'shape' => 'ReasonCode', ],
				'comment'    => [ 'shape' => 'Comment', ],
				'force'      => [
					'shape'        => 'ForceFlag',
					'location'     => 'querystring',
					'locationName' => 'force',
				],
			],
		],
		'CancelJobResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'jobArn'      => [ 'shape' => 'JobArn', ],
				'jobId'       => [ 'shape' => 'JobId', ],
				'description' => [ 'shape' => 'JobDescription', ],
			],
		],
		'CanceledChecksCount'                       => [ 'type' => 'integer', ],
		'CanceledThings'                            => [ 'type' => 'integer', ],
		'CannedAccessControlList'                   => [
			'type' => 'string',
			'enum' => [
				'private',
				'public-read',
				'public-read-write',
				'aws-exec-read',
				'authenticated-read',
				'bucket-owner-read',
				'bucket-owner-full-control',
				'log-delivery-write',
			],
		],
		'Certificate'                               => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
				'status'         => [ 'shape' => 'CertificateStatus', ],
				'creationDate'   => [ 'shape' => 'DateType', ],
			],
		],
		'CertificateArn'                            => [ 'type' => 'string', ],
		'CertificateConflictException'              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CertificateDescription'                    => [
			'type'    => 'structure',
			'members' => [
				'certificateArn'   => [ 'shape' => 'CertificateArn', ],
				'certificateId'    => [ 'shape' => 'CertificateId', ],
				'caCertificateId'  => [ 'shape' => 'CertificateId', ],
				'status'           => [ 'shape' => 'CertificateStatus', ],
				'certificatePem'   => [ 'shape' => 'CertificatePem', ],
				'ownedBy'          => [ 'shape' => 'AwsAccountId', ],
				'previousOwnedBy'  => [ 'shape' => 'AwsAccountId', ],
				'creationDate'     => [ 'shape' => 'DateType', ],
				'lastModifiedDate' => [ 'shape' => 'DateType', ],
				'customerVersion'  => [ 'shape' => 'CustomerVersion', ],
				'transferData'     => [ 'shape' => 'TransferData', ],
				'generationId'     => [ 'shape' => 'GenerationId', ],
				'validity'         => [ 'shape' => 'CertificateValidity', ],
			],
		],
		'CertificateId'                             => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 64,
			'pattern' => '(0x)?[a-fA-F0-9]+',
		],
		'CertificateName'                           => [ 'type' => 'string', ],
		'CertificatePathOnDevice'                   => [ 'type' => 'string', ],
		'CertificatePem'                            => [ 'type' => 'string', 'max' => 65536, 'min' => 1, ],
		'CertificateSigningRequest'                 => [ 'type' => 'string', 'min' => 1, ],
		'CertificateStateException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 406, ],
			'exception' => true,
		],
		'CertificateStatus'                         => [
			'type' => 'string',
			'enum' => [
				'ACTIVE',
				'INACTIVE',
				'REVOKED',
				'PENDING_TRANSFER',
				'REGISTER_INACTIVE',
				'PENDING_ACTIVATION',
			],
		],
		'CertificateValidationException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'CertificateValidity'                       => [
			'type'    => 'structure',
			'members' => [
				'notBefore' => [ 'shape' => 'DateType', ],
				'notAfter'  => [ 'shape' => 'DateType', ],
			],
		],
		'Certificates'                              => [ 'type' => 'list', 'member' => [ 'shape' => 'Certificate', ], ],
		'ChannelName'                               => [ 'type' => 'string', ],
		'CheckCompliant'                            => [ 'type' => 'boolean', ],
		'Cidr'                                      => [
			'type'    => 'string',
			'max'     => 43,
			'min'     => 2,
			'pattern' => '[a-fA-F0-9:\\.\\/]+',
		],
		'Cidrs'                                     => [ 'type' => 'list', 'member' => [ 'shape' => 'Cidr', ], ],
		'ClearDefaultAuthorizerRequest'             => [ 'type' => 'structure', 'members' => [], ],
		'ClearDefaultAuthorizerResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'ClientId'                                  => [ 'type' => 'string', ],
		'CloudwatchAlarmAction'                     => [
			'type'     => 'structure',
			'required' => [
				'roleArn',
				'alarmName',
				'stateReason',
				'stateValue',
			],
			'members'  => [
				'roleArn'     => [ 'shape' => 'AwsArn', ],
				'alarmName'   => [ 'shape' => 'AlarmName', ],
				'stateReason' => [ 'shape' => 'StateReason', ],
				'stateValue'  => [ 'shape' => 'StateValue', ],
			],
		],
		'CloudwatchMetricAction'                    => [
			'type'     => 'structure',
			'required' => [
				'roleArn',
				'metricNamespace',
				'metricName',
				'metricValue',
				'metricUnit',
			],
			'members'  => [
				'roleArn'         => [ 'shape' => 'AwsArn', ],
				'metricNamespace' => [ 'shape' => 'String', ],
				'metricName'      => [ 'shape' => 'String', ],
				'metricValue'     => [ 'shape' => 'String', ],
				'metricUnit'      => [ 'shape' => 'String', ],
				'metricTimestamp' => [ 'shape' => 'String', ],
			],
		],
		'Code'                                      => [ 'type' => 'string', ],
		'CodeSigning'                               => [
			'type'    => 'structure',
			'members' => [
				'awsSignerJobId'           => [ 'shape' => 'SigningJobId', ],
				'startSigningJobParameter' => [ 'shape' => 'StartSigningJobParameter', ],
				'customCodeSigning'        => [ 'shape' => 'CustomCodeSigning', ],
			],
		],
		'CodeSigningCertificateChain'               => [
			'type'    => 'structure',
			'members' => [
				'certificateName' => [ 'shape' => 'CertificateName', ],
				'inlineDocument'  => [ 'shape' => 'InlineDocument', ],
			],
		],
		'CodeSigningSignature'                      => [
			'type'    => 'structure',
			'members' => [ 'inlineDocument' => [ 'shape' => 'Signature', ], ],
		],
		'CognitoIdentityPoolId'                     => [ 'type' => 'string', ],
		'Comment'                                   => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[^\\p{C}]+',
		],
		'ComparisonOperator'                        => [
			'type' => 'string',
			'enum' => [
				'less-than',
				'less-than-equals',
				'greater-than',
				'greater-than-equals',
				'in-cidr-set',
				'not-in-cidr-set',
				'in-port-set',
				'not-in-port-set',
			],
		],
		'CompliantChecksCount'                      => [ 'type' => 'integer', ],
		'Configuration'                             => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'Enabled', ], ],
		],
		'ConflictingResourceUpdateException'        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'ConnectivityTimestamp'                     => [ 'type' => 'long', ],
		'ConsecutiveDatapointsToAlarm'              => [ 'type' => 'integer', 'max' => 10, 'min' => 1, ],
		'ConsecutiveDatapointsToClear'              => [ 'type' => 'integer', 'max' => 10, 'min' => 1, ],
		'Count'                                     => [ 'type' => 'integer', ],
		'CreateAuthorizerRequest'                   => [
			'type'     => 'structure',
			'required' => [
				'authorizerName',
				'authorizerFunctionArn',
				'tokenKeyName',
				'tokenSigningPublicKeys',
			],
			'members'  => [
				'authorizerName'         => [
					'shape'        => 'AuthorizerName',
					'location'     => 'uri',
					'locationName' => 'authorizerName',
				],
				'authorizerFunctionArn'  => [ 'shape' => 'AuthorizerFunctionArn', ],
				'tokenKeyName'           => [ 'shape' => 'TokenKeyName', ],
				'tokenSigningPublicKeys' => [ 'shape' => 'PublicKeyMap', ],
				'status'                 => [ 'shape' => 'AuthorizerStatus', ],
			],
		],
		'CreateAuthorizerResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'authorizerName' => [ 'shape' => 'AuthorizerName', ],
				'authorizerArn'  => [ 'shape' => 'AuthorizerArn', ],
			],
		],
		'CreateBillingGroupRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'billingGroupName', ],
			'members'  => [
				'billingGroupName'       => [
					'shape'        => 'BillingGroupName',
					'location'     => 'uri',
					'locationName' => 'billingGroupName',
				],
				'billingGroupProperties' => [ 'shape' => 'BillingGroupProperties', ],
				'tags'                   => [ 'shape' => 'TagList', ],
			],
		],
		'CreateBillingGroupResponse'                => [
			'type'    => 'structure',
			'members' => [
				'billingGroupName' => [ 'shape' => 'BillingGroupName', ],
				'billingGroupArn'  => [ 'shape' => 'BillingGroupArn', ],
				'billingGroupId'   => [ 'shape' => 'BillingGroupId', ],
			],
		],
		'CreateCertificateFromCsrRequest'           => [
			'type'     => 'structure',
			'required' => [ 'certificateSigningRequest', ],
			'members'  => [
				'certificateSigningRequest' => [ 'shape' => 'CertificateSigningRequest', ],
				'setAsActive'               => [
					'shape'        => 'SetAsActive',
					'location'     => 'querystring',
					'locationName' => 'setAsActive',
				],
			],
		],
		'CreateCertificateFromCsrResponse'          => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
				'certificatePem' => [ 'shape' => 'CertificatePem', ],
			],
		],
		'CreateDynamicThingGroupRequest'            => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', 'queryString', ],
			'members'  => [
				'thingGroupName'       => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'thingGroupProperties' => [ 'shape' => 'ThingGroupProperties', ],
				'indexName'            => [ 'shape' => 'IndexName', ],
				'queryString'          => [ 'shape' => 'QueryString', ],
				'queryVersion'         => [ 'shape' => 'QueryVersion', ],
				'tags'                 => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDynamicThingGroupResponse'           => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName' => [ 'shape' => 'ThingGroupName', ],
				'thingGroupArn'  => [ 'shape' => 'ThingGroupArn', ],
				'thingGroupId'   => [ 'shape' => 'ThingGroupId', ],
				'indexName'      => [ 'shape' => 'IndexName', ],
				'queryString'    => [ 'shape' => 'QueryString', ],
				'queryVersion'   => [ 'shape' => 'QueryVersion', ],
			],
		],
		'CreateJobRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'targets', ],
			'members'  => [
				'jobId'                      => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'targets'                    => [ 'shape' => 'JobTargets', ],
				'documentSource'             => [ 'shape' => 'JobDocumentSource', ],
				'document'                   => [ 'shape' => 'JobDocument', ],
				'description'                => [ 'shape' => 'JobDescription', ],
				'presignedUrlConfig'         => [ 'shape' => 'PresignedUrlConfig', ],
				'targetSelection'            => [ 'shape' => 'TargetSelection', ],
				'jobExecutionsRolloutConfig' => [ 'shape' => 'JobExecutionsRolloutConfig', ],
				'abortConfig'                => [ 'shape' => 'AbortConfig', ],
				'timeoutConfig'              => [ 'shape' => 'TimeoutConfig', ],
				'tags'                       => [ 'shape' => 'TagList', ],
			],
		],
		'CreateJobResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'jobArn'      => [ 'shape' => 'JobArn', ],
				'jobId'       => [ 'shape' => 'JobId', ],
				'description' => [ 'shape' => 'JobDescription', ],
			],
		],
		'CreateKeysAndCertificateRequest'           => [
			'type'    => 'structure',
			'members' => [
				'setAsActive' => [
					'shape'        => 'SetAsActive',
					'location'     => 'querystring',
					'locationName' => 'setAsActive',
				],
			],
		],
		'CreateKeysAndCertificateResponse'          => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
				'certificatePem' => [ 'shape' => 'CertificatePem', ],
				'keyPair'        => [ 'shape' => 'KeyPair', ],
			],
		],
		'CreateOTAUpdateRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'otaUpdateId', 'targets', 'files', 'roleArn', ],
			'members'  => [
				'otaUpdateId'                   => [
					'shape'        => 'OTAUpdateId',
					'location'     => 'uri',
					'locationName' => 'otaUpdateId',
				],
				'description'                   => [ 'shape' => 'OTAUpdateDescription', ],
				'targets'                       => [ 'shape' => 'Targets', ],
				'targetSelection'               => [ 'shape' => 'TargetSelection', ],
				'awsJobExecutionsRolloutConfig' => [ 'shape' => 'AwsJobExecutionsRolloutConfig', ],
				'files'                         => [ 'shape' => 'OTAUpdateFiles', ],
				'roleArn'                       => [ 'shape' => 'RoleArn', ],
				'additionalParameters'          => [ 'shape' => 'AdditionalParameterMap', ],
				'tags'                          => [ 'shape' => 'TagList', ],
			],
		],
		'CreateOTAUpdateResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'otaUpdateId'     => [ 'shape' => 'OTAUpdateId', ],
				'awsIotJobId'     => [ 'shape' => 'AwsIotJobId', ],
				'otaUpdateArn'    => [ 'shape' => 'OTAUpdateArn', ],
				'awsIotJobArn'    => [ 'shape' => 'AwsIotJobArn', ],
				'otaUpdateStatus' => [ 'shape' => 'OTAUpdateStatus', ],
			],
		],
		'CreatePolicyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'policyDocument', ],
			'members'  => [
				'policyName'     => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'policyDocument' => [ 'shape' => 'PolicyDocument', ],
			],
		],
		'CreatePolicyResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'policyName'      => [ 'shape' => 'PolicyName', ],
				'policyArn'       => [ 'shape' => 'PolicyArn', ],
				'policyDocument'  => [ 'shape' => 'PolicyDocument', ],
				'policyVersionId' => [ 'shape' => 'PolicyVersionId', ],
			],
		],
		'CreatePolicyVersionRequest'                => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'policyDocument', ],
			'members'  => [
				'policyName'     => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'policyDocument' => [ 'shape' => 'PolicyDocument', ],
				'setAsDefault'   => [
					'shape'        => 'SetAsDefault',
					'location'     => 'querystring',
					'locationName' => 'setAsDefault',
				],
			],
		],
		'CreatePolicyVersionResponse'               => [
			'type'    => 'structure',
			'members' => [
				'policyArn'        => [ 'shape' => 'PolicyArn', ],
				'policyDocument'   => [ 'shape' => 'PolicyDocument', ],
				'policyVersionId'  => [ 'shape' => 'PolicyVersionId', ],
				'isDefaultVersion' => [ 'shape' => 'IsDefaultVersion', ],
			],
		],
		'CreateRoleAliasRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'roleAlias', 'roleArn', ],
			'members'  => [
				'roleAlias'                 => [
					'shape'        => 'RoleAlias',
					'location'     => 'uri',
					'locationName' => 'roleAlias',
				],
				'roleArn'                   => [ 'shape' => 'RoleArn', ],
				'credentialDurationSeconds' => [ 'shape' => 'CredentialDurationSeconds', ],
			],
		],
		'CreateRoleAliasResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'roleAlias'    => [ 'shape' => 'RoleAlias', ],
				'roleAliasArn' => [ 'shape' => 'RoleAliasArn', ],
			],
		],
		'CreateScheduledAuditRequest'               => [
			'type'     => 'structure',
			'required' => [
				'frequency',
				'targetCheckNames',
				'scheduledAuditName',
			],
			'members'  => [
				'frequency'          => [ 'shape' => 'AuditFrequency', ],
				'dayOfMonth'         => [ 'shape' => 'DayOfMonth', ],
				'dayOfWeek'          => [ 'shape' => 'DayOfWeek', ],
				'targetCheckNames'   => [ 'shape' => 'TargetAuditCheckNames', ],
				'tags'               => [ 'shape' => 'TagList', ],
				'scheduledAuditName' => [
					'shape'        => 'ScheduledAuditName',
					'location'     => 'uri',
					'locationName' => 'scheduledAuditName',
				],
			],
		],
		'CreateScheduledAuditResponse'              => [
			'type'    => 'structure',
			'members' => [ 'scheduledAuditArn' => [ 'shape' => 'ScheduledAuditArn', ], ],
		],
		'CreateSecurityProfileRequest'              => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', ],
			'members'  => [
				'securityProfileName'        => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'securityProfileDescription' => [ 'shape' => 'SecurityProfileDescription', ],
				'behaviors'                  => [ 'shape' => 'Behaviors', ],
				'alertTargets'               => [ 'shape' => 'AlertTargets', ],
				'additionalMetricsToRetain'  => [ 'shape' => 'AdditionalMetricsToRetainList', ],
				'tags'                       => [ 'shape' => 'TagList', ],
			],
		],
		'CreateSecurityProfileResponse'             => [
			'type'    => 'structure',
			'members' => [
				'securityProfileName' => [ 'shape' => 'SecurityProfileName', ],
				'securityProfileArn'  => [ 'shape' => 'SecurityProfileArn', ],
			],
		],
		'CreateStreamRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'streamId', 'files', 'roleArn', ],
			'members'  => [
				'streamId'    => [
					'shape'        => 'StreamId',
					'location'     => 'uri',
					'locationName' => 'streamId',
				],
				'description' => [ 'shape' => 'StreamDescription', ],
				'files'       => [ 'shape' => 'StreamFiles', ],
				'roleArn'     => [ 'shape' => 'RoleArn', ],
				'tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'CreateStreamResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'streamId'      => [ 'shape' => 'StreamId', ],
				'streamArn'     => [ 'shape' => 'StreamArn', ],
				'description'   => [ 'shape' => 'StreamDescription', ],
				'streamVersion' => [ 'shape' => 'StreamVersion', ],
			],
		],
		'CreateThingGroupRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', ],
			'members'  => [
				'thingGroupName'       => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'parentGroupName'      => [ 'shape' => 'ThingGroupName', ],
				'thingGroupProperties' => [ 'shape' => 'ThingGroupProperties', ],
				'tags'                 => [ 'shape' => 'TagList', ],
			],
		],
		'CreateThingGroupResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName' => [ 'shape' => 'ThingGroupName', ],
				'thingGroupArn'  => [ 'shape' => 'ThingGroupArn', ],
				'thingGroupId'   => [ 'shape' => 'ThingGroupId', ],
			],
		],
		'CreateThingRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName'        => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'thingTypeName'    => [ 'shape' => 'ThingTypeName', ],
				'attributePayload' => [ 'shape' => 'AttributePayload', ],
				'billingGroupName' => [ 'shape' => 'BillingGroupName', ],
			],
		],
		'CreateThingResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'thingName' => [ 'shape' => 'ThingName', ],
				'thingArn'  => [ 'shape' => 'ThingArn', ],
				'thingId'   => [ 'shape' => 'ThingId', ],
			],
		],
		'CreateThingTypeRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'thingTypeName', ],
			'members'  => [
				'thingTypeName'       => [
					'shape'        => 'ThingTypeName',
					'location'     => 'uri',
					'locationName' => 'thingTypeName',
				],
				'thingTypeProperties' => [ 'shape' => 'ThingTypeProperties', ],
				'tags'                => [ 'shape' => 'TagList', ],
			],
		],
		'CreateThingTypeResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'thingTypeName' => [ 'shape' => 'ThingTypeName', ],
				'thingTypeArn'  => [ 'shape' => 'ThingTypeArn', ],
				'thingTypeId'   => [ 'shape' => 'ThingTypeId', ],
			],
		],
		'CreateTopicRuleRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ruleName', 'topicRulePayload', ],
			'members'  => [
				'ruleName'         => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
				'topicRulePayload' => [ 'shape' => 'TopicRulePayload', ],
				'tags'             => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging',
				],
			],
			'payload'  => 'topicRulePayload',
		],
		'CreatedAtDate'                             => [ 'type' => 'timestamp', ],
		'CreationDate'                              => [ 'type' => 'timestamp', ],
		'CredentialDurationSeconds'                 => [ 'type' => 'integer', 'max' => 3600, 'min' => 900, ],
		'CustomCodeSigning'                         => [
			'type'    => 'structure',
			'members' => [
				'signature'          => [ 'shape' => 'CodeSigningSignature', ],
				'certificateChain'   => [ 'shape' => 'CodeSigningCertificateChain', ],
				'hashAlgorithm'      => [ 'shape' => 'HashAlgorithm', ],
				'signatureAlgorithm' => [ 'shape' => 'SignatureAlgorithm', ],
			],
		],
		'CustomerVersion'                           => [ 'type' => 'integer', 'min' => 1, ],
		'DateType'                                  => [ 'type' => 'timestamp', ],
		'DayOfMonth'                                => [
			'type'    => 'string',
			'pattern' => '^([1-9]|[12][0-9]|3[01])$|^LAST$',
		],
		'DayOfWeek'                                 => [
			'type' => 'string',
			'enum' => [ 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', ],
		],
		'DeleteAccountAuditConfigurationRequest'    => [
			'type'    => 'structure',
			'members' => [
				'deleteScheduledAudits' => [
					'shape'        => 'DeleteScheduledAudits',
					'location'     => 'querystring',
					'locationName' => 'deleteScheduledAudits',
				],
			],
		],
		'DeleteAccountAuditConfigurationResponse'   => [ 'type' => 'structure', 'members' => [], ],
		'DeleteAdditionalMetricsToRetain'           => [ 'type' => 'boolean', ],
		'DeleteAlertTargets'                        => [ 'type' => 'boolean', ],
		'DeleteAuthorizerRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'authorizerName', ],
			'members'  => [
				'authorizerName' => [
					'shape'        => 'AuthorizerName',
					'location'     => 'uri',
					'locationName' => 'authorizerName',
				],
			],
		],
		'DeleteAuthorizerResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteBehaviors'                           => [ 'type' => 'boolean', ],
		'DeleteBillingGroupRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'billingGroupName', ],
			'members'  => [
				'billingGroupName' => [
					'shape'        => 'BillingGroupName',
					'location'     => 'uri',
					'locationName' => 'billingGroupName',
				],
				'expectedVersion'  => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'DeleteBillingGroupResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'DeleteCACertificateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'caCertificateId',
				],
			],
		],
		'DeleteCACertificateResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'DeleteCertificateRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
				'forceDelete'   => [
					'shape'        => 'ForceDelete',
					'location'     => 'querystring',
					'locationName' => 'forceDelete',
				],
			],
		],
		'DeleteConflictException'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'DeleteDynamicThingGroupRequest'            => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', ],
			'members'  => [
				'thingGroupName'  => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'expectedVersion' => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'DeleteDynamicThingGroupResponse'           => [ 'type' => 'structure', 'members' => [], ],
		'DeleteJobExecutionRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'thingName', 'executionNumber', ],
			'members'  => [
				'jobId'           => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'thingName'       => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'executionNumber' => [
					'shape'        => 'ExecutionNumber',
					'location'     => 'uri',
					'locationName' => 'executionNumber',
				],
				'force'           => [
					'shape'        => 'ForceFlag',
					'location'     => 'querystring',
					'locationName' => 'force',
				],
			],
		],
		'DeleteJobRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId' => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'force' => [
					'shape'        => 'ForceFlag',
					'location'     => 'querystring',
					'locationName' => 'force',
				],
			],
		],
		'DeleteOTAUpdateRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'otaUpdateId', ],
			'members'  => [
				'otaUpdateId'       => [
					'shape'        => 'OTAUpdateId',
					'location'     => 'uri',
					'locationName' => 'otaUpdateId',
				],
				'deleteStream'      => [
					'shape'        => 'DeleteStream',
					'location'     => 'querystring',
					'locationName' => 'deleteStream',
				],
				'forceDeleteAWSJob' => [
					'shape'        => 'ForceDeleteAWSJob',
					'location'     => 'querystring',
					'locationName' => 'forceDeleteAWSJob',
				],
			],
		],
		'DeleteOTAUpdateResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'DeletePolicyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'policyName', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
			],
		],
		'DeletePolicyVersionRequest'                => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'policyVersionId', ],
			'members'  => [
				'policyName'      => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'policyVersionId' => [
					'shape'        => 'PolicyVersionId',
					'location'     => 'uri',
					'locationName' => 'policyVersionId',
				],
			],
		],
		'DeleteRegistrationCodeRequest'             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteRegistrationCodeResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'DeleteRoleAliasRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'roleAlias', ],
			'members'  => [
				'roleAlias' => [
					'shape'        => 'RoleAlias',
					'location'     => 'uri',
					'locationName' => 'roleAlias',
				],
			],
		],
		'DeleteRoleAliasResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'DeleteScheduledAuditRequest'               => [
			'type'     => 'structure',
			'required' => [ 'scheduledAuditName', ],
			'members'  => [
				'scheduledAuditName' => [
					'shape'        => 'ScheduledAuditName',
					'location'     => 'uri',
					'locationName' => 'scheduledAuditName',
				],
			],
		],
		'DeleteScheduledAuditResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'DeleteScheduledAudits'                     => [ 'type' => 'boolean', ],
		'DeleteSecurityProfileRequest'              => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', ],
			'members'  => [
				'securityProfileName' => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'expectedVersion'     => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'DeleteSecurityProfileResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteStream'                              => [ 'type' => 'boolean', ],
		'DeleteStreamRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'streamId', ],
			'members'  => [
				'streamId' => [
					'shape'        => 'StreamId',
					'location'     => 'uri',
					'locationName' => 'streamId',
				],
			],
		],
		'DeleteStreamResponse'                      => [ 'type' => 'structure', 'members' => [], ],
		'DeleteThingGroupRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', ],
			'members'  => [
				'thingGroupName'  => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'expectedVersion' => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'DeleteThingGroupResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteThingRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName'       => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'expectedVersion' => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'DeleteThingResponse'                       => [ 'type' => 'structure', 'members' => [], ],
		'DeleteThingTypeRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'thingTypeName', ],
			'members'  => [
				'thingTypeName' => [
					'shape'        => 'ThingTypeName',
					'location'     => 'uri',
					'locationName' => 'thingTypeName',
				],
			],
		],
		'DeleteThingTypeResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTopicRuleRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ruleName', ],
			'members'  => [
				'ruleName' => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
			],
		],
		'DeleteV2LoggingLevelRequest'               => [
			'type'     => 'structure',
			'required' => [ 'targetType', 'targetName', ],
			'members'  => [
				'targetType' => [
					'shape'        => 'LogTargetType',
					'location'     => 'querystring',
					'locationName' => 'targetType',
				],
				'targetName' => [
					'shape'        => 'LogTargetName',
					'location'     => 'querystring',
					'locationName' => 'targetName',
				],
			],
		],
		'DeliveryStreamName'                        => [ 'type' => 'string', ],
		'Denied'                                    => [
			'type'    => 'structure',
			'members' => [
				'implicitDeny' => [ 'shape' => 'ImplicitDeny', ],
				'explicitDeny' => [ 'shape' => 'ExplicitDeny', ],
			],
		],
		'DeprecateThingTypeRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'thingTypeName', ],
			'members'  => [
				'thingTypeName' => [
					'shape'        => 'ThingTypeName',
					'location'     => 'uri',
					'locationName' => 'thingTypeName',
				],
				'undoDeprecate' => [ 'shape' => 'UndoDeprecate', ],
			],
		],
		'DeprecateThingTypeResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'DeprecationDate'                           => [ 'type' => 'timestamp', ],
		'DescribeAccountAuditConfigurationRequest'  => [ 'type' => 'structure', 'members' => [], ],
		'DescribeAccountAuditConfigurationResponse' => [
			'type'    => 'structure',
			'members' => [
				'roleArn'                               => [ 'shape' => 'RoleArn', ],
				'auditNotificationTargetConfigurations' => [ 'shape' => 'AuditNotificationTargetConfigurations', ],
				'auditCheckConfigurations'              => [ 'shape' => 'AuditCheckConfigurations', ],
			],
		],
		'DescribeAuditTaskRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'taskId', ],
			'members'  => [
				'taskId' => [
					'shape'        => 'AuditTaskId',
					'location'     => 'uri',
					'locationName' => 'taskId',
				],
			],
		],
		'DescribeAuditTaskResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'taskStatus'         => [ 'shape' => 'AuditTaskStatus', ],
				'taskType'           => [ 'shape' => 'AuditTaskType', ],
				'taskStartTime'      => [ 'shape' => 'Timestamp', ],
				'taskStatistics'     => [ 'shape' => 'TaskStatistics', ],
				'scheduledAuditName' => [ 'shape' => 'ScheduledAuditName', ],
				'auditDetails'       => [ 'shape' => 'AuditDetails', ],
			],
		],
		'DescribeAuthorizerRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'authorizerName', ],
			'members'  => [
				'authorizerName' => [
					'shape'        => 'AuthorizerName',
					'location'     => 'uri',
					'locationName' => 'authorizerName',
				],
			],
		],
		'DescribeAuthorizerResponse'                => [
			'type'    => 'structure',
			'members' => [ 'authorizerDescription' => [ 'shape' => 'AuthorizerDescription', ], ],
		],
		'DescribeBillingGroupRequest'               => [
			'type'     => 'structure',
			'required' => [ 'billingGroupName', ],
			'members'  => [
				'billingGroupName' => [
					'shape'        => 'BillingGroupName',
					'location'     => 'uri',
					'locationName' => 'billingGroupName',
				],
			],
		],
		'DescribeBillingGroupResponse'              => [
			'type'    => 'structure',
			'members' => [
				'billingGroupName'       => [ 'shape' => 'BillingGroupName', ],
				'billingGroupId'         => [ 'shape' => 'BillingGroupId', ],
				'billingGroupArn'        => [ 'shape' => 'BillingGroupArn', ],
				'version'                => [ 'shape' => 'Version', ],
				'billingGroupProperties' => [ 'shape' => 'BillingGroupProperties', ],
				'billingGroupMetadata'   => [ 'shape' => 'BillingGroupMetadata', ],
			],
		],
		'DescribeCACertificateRequest'              => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'caCertificateId',
				],
			],
		],
		'DescribeCACertificateResponse'             => [
			'type'    => 'structure',
			'members' => [
				'certificateDescription' => [ 'shape' => 'CACertificateDescription', ],
				'registrationConfig'     => [ 'shape' => 'RegistrationConfig', ],
			],
		],
		'DescribeCertificateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
			],
		],
		'DescribeCertificateResponse'               => [
			'type'    => 'structure',
			'members' => [ 'certificateDescription' => [ 'shape' => 'CertificateDescription', ], ],
		],
		'DescribeDefaultAuthorizerRequest'          => [ 'type' => 'structure', 'members' => [], ],
		'DescribeDefaultAuthorizerResponse'         => [
			'type'    => 'structure',
			'members' => [ 'authorizerDescription' => [ 'shape' => 'AuthorizerDescription', ], ],
		],
		'DescribeEndpointRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'endpointType' => [
					'shape'        => 'EndpointType',
					'location'     => 'querystring',
					'locationName' => 'endpointType',
				],
			],
		],
		'DescribeEndpointResponse'                  => [
			'type'    => 'structure',
			'members' => [ 'endpointAddress' => [ 'shape' => 'EndpointAddress', ], ],
		],
		'DescribeEventConfigurationsRequest'        => [ 'type' => 'structure', 'members' => [], ],
		'DescribeEventConfigurationsResponse'       => [
			'type'    => 'structure',
			'members' => [
				'eventConfigurations' => [ 'shape' => 'EventConfigurations', ],
				'creationDate'        => [ 'shape' => 'CreationDate', ],
				'lastModifiedDate'    => [ 'shape' => 'LastModifiedDate', ],
			],
		],
		'DescribeIndexRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'indexName', ],
			'members'  => [
				'indexName' => [
					'shape'        => 'IndexName',
					'location'     => 'uri',
					'locationName' => 'indexName',
				],
			],
		],
		'DescribeIndexResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'indexName'   => [ 'shape' => 'IndexName', ],
				'indexStatus' => [ 'shape' => 'IndexStatus', ],
				'schema'      => [ 'shape' => 'IndexSchema', ],
			],
		],
		'DescribeJobExecutionRequest'               => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'thingName', ],
			'members'  => [
				'jobId'           => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'thingName'       => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'executionNumber' => [
					'shape'        => 'ExecutionNumber',
					'location'     => 'querystring',
					'locationName' => 'executionNumber',
				],
			],
		],
		'DescribeJobExecutionResponse'              => [
			'type'    => 'structure',
			'members' => [ 'execution' => [ 'shape' => 'JobExecution', ], ],
		],
		'DescribeJobRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId' => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
			],
		],
		'DescribeJobResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'documentSource' => [ 'shape' => 'JobDocumentSource', ],
				'job'            => [ 'shape' => 'Job', ],
			],
		],
		'DescribeRoleAliasRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'roleAlias', ],
			'members'  => [
				'roleAlias' => [
					'shape'        => 'RoleAlias',
					'location'     => 'uri',
					'locationName' => 'roleAlias',
				],
			],
		],
		'DescribeRoleAliasResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'roleAliasDescription' => [ 'shape' => 'RoleAliasDescription', ], ],
		],
		'DescribeScheduledAuditRequest'             => [
			'type'     => 'structure',
			'required' => [ 'scheduledAuditName', ],
			'members'  => [
				'scheduledAuditName' => [
					'shape'        => 'ScheduledAuditName',
					'location'     => 'uri',
					'locationName' => 'scheduledAuditName',
				],
			],
		],
		'DescribeScheduledAuditResponse'            => [
			'type'    => 'structure',
			'members' => [
				'frequency'          => [ 'shape' => 'AuditFrequency', ],
				'dayOfMonth'         => [ 'shape' => 'DayOfMonth', ],
				'dayOfWeek'          => [ 'shape' => 'DayOfWeek', ],
				'targetCheckNames'   => [ 'shape' => 'TargetAuditCheckNames', ],
				'scheduledAuditName' => [ 'shape' => 'ScheduledAuditName', ],
				'scheduledAuditArn'  => [ 'shape' => 'ScheduledAuditArn', ],
			],
		],
		'DescribeSecurityProfileRequest'            => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', ],
			'members'  => [
				'securityProfileName' => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
			],
		],
		'DescribeSecurityProfileResponse'           => [
			'type'    => 'structure',
			'members' => [
				'securityProfileName'        => [ 'shape' => 'SecurityProfileName', ],
				'securityProfileArn'         => [ 'shape' => 'SecurityProfileArn', ],
				'securityProfileDescription' => [ 'shape' => 'SecurityProfileDescription', ],
				'behaviors'                  => [ 'shape' => 'Behaviors', ],
				'alertTargets'               => [ 'shape' => 'AlertTargets', ],
				'additionalMetricsToRetain'  => [ 'shape' => 'AdditionalMetricsToRetainList', ],
				'version'                    => [ 'shape' => 'Version', ],
				'creationDate'               => [ 'shape' => 'Timestamp', ],
				'lastModifiedDate'           => [ 'shape' => 'Timestamp', ],
			],
		],
		'DescribeStreamRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'streamId', ],
			'members'  => [
				'streamId' => [
					'shape'        => 'StreamId',
					'location'     => 'uri',
					'locationName' => 'streamId',
				],
			],
		],
		'DescribeStreamResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'streamInfo' => [ 'shape' => 'StreamInfo', ], ],
		],
		'DescribeThingGroupRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', ],
			'members'  => [
				'thingGroupName' => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
			],
		],
		'DescribeThingGroupResponse'                => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName'       => [ 'shape' => 'ThingGroupName', ],
				'thingGroupId'         => [ 'shape' => 'ThingGroupId', ],
				'thingGroupArn'        => [ 'shape' => 'ThingGroupArn', ],
				'version'              => [ 'shape' => 'Version', ],
				'thingGroupProperties' => [ 'shape' => 'ThingGroupProperties', ],
				'thingGroupMetadata'   => [ 'shape' => 'ThingGroupMetadata', ],
				'indexName'            => [ 'shape' => 'IndexName', ],
				'queryString'          => [ 'shape' => 'QueryString', ],
				'queryVersion'         => [ 'shape' => 'QueryVersion', ],
				'status'               => [ 'shape' => 'DynamicGroupStatus', ],
			],
		],
		'DescribeThingRegistrationTaskRequest'      => [
			'type'     => 'structure',
			'required' => [ 'taskId', ],
			'members'  => [
				'taskId' => [
					'shape'        => 'TaskId',
					'location'     => 'uri',
					'locationName' => 'taskId',
				],
			],
		],
		'DescribeThingRegistrationTaskResponse'     => [
			'type'    => 'structure',
			'members' => [
				'taskId'             => [ 'shape' => 'TaskId', ],
				'creationDate'       => [ 'shape' => 'CreationDate', ],
				'lastModifiedDate'   => [ 'shape' => 'LastModifiedDate', ],
				'templateBody'       => [ 'shape' => 'TemplateBody', ],
				'inputFileBucket'    => [ 'shape' => 'RegistryS3BucketName', ],
				'inputFileKey'       => [ 'shape' => 'RegistryS3KeyName', ],
				'roleArn'            => [ 'shape' => 'RoleArn', ],
				'status'             => [ 'shape' => 'Status', ],
				'message'            => [ 'shape' => 'ErrorMessage', ],
				'successCount'       => [ 'shape' => 'Count', ],
				'failureCount'       => [ 'shape' => 'Count', ],
				'percentageProgress' => [ 'shape' => 'Percentage', ],
			],
		],
		'DescribeThingRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName' => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
			],
		],
		'DescribeThingResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'defaultClientId'  => [ 'shape' => 'ClientId', ],
				'thingName'        => [ 'shape' => 'ThingName', ],
				'thingId'          => [ 'shape' => 'ThingId', ],
				'thingArn'         => [ 'shape' => 'ThingArn', ],
				'thingTypeName'    => [ 'shape' => 'ThingTypeName', ],
				'attributes'       => [ 'shape' => 'Attributes', ],
				'version'          => [ 'shape' => 'Version', ],
				'billingGroupName' => [ 'shape' => 'BillingGroupName', ],
			],
		],
		'DescribeThingTypeRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'thingTypeName', ],
			'members'  => [
				'thingTypeName' => [
					'shape'        => 'ThingTypeName',
					'location'     => 'uri',
					'locationName' => 'thingTypeName',
				],
			],
		],
		'DescribeThingTypeResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'thingTypeName'       => [ 'shape' => 'ThingTypeName', ],
				'thingTypeId'         => [ 'shape' => 'ThingTypeId', ],
				'thingTypeArn'        => [ 'shape' => 'ThingTypeArn', ],
				'thingTypeProperties' => [ 'shape' => 'ThingTypeProperties', ],
				'thingTypeMetadata'   => [ 'shape' => 'ThingTypeMetadata', ],
			],
		],
		'Description'                               => [ 'type' => 'string', ],
		'Destination'                               => [
			'type'    => 'structure',
			'members' => [ 's3Destination' => [ 'shape' => 'S3Destination', ], ],
		],
		'DetachPolicyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'target', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'target'     => [ 'shape' => 'PolicyTarget', ],
			],
		],
		'DetachPrincipalPolicyRequest'              => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'principal', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'principal'  => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-iot-principal',
				],
			],
		],
		'DetachSecurityProfileRequest'              => [
			'type'     => 'structure',
			'required' => [
				'securityProfileName',
				'securityProfileTargetArn',
			],
			'members'  => [
				'securityProfileName'      => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'securityProfileTargetArn' => [
					'shape'        => 'SecurityProfileTargetArn',
					'location'     => 'querystring',
					'locationName' => 'securityProfileTargetArn',
				],
			],
		],
		'DetachSecurityProfileResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'DetachThingPrincipalRequest'               => [
			'type'     => 'structure',
			'required' => [ 'thingName', 'principal', ],
			'members'  => [
				'thingName' => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'principal' => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-principal',
				],
			],
		],
		'DetachThingPrincipalResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'DetailsKey'                                => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'DetailsMap'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'DetailsKey', ],
			'value' => [ 'shape' => 'DetailsValue', ],
		],
		'DetailsValue'                              => [
			'type'    => 'string',
			'max'     => 1024,
			'min'     => 1,
			'pattern' => '[^\\p{C}]*+',
		],
		'DisableAllLogs'                            => [ 'type' => 'boolean', ],
		'DisableTopicRuleRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ruleName', ],
			'members'  => [
				'ruleName' => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
			],
		],
		'DurationSeconds'                           => [ 'type' => 'integer', ],
		'DynamicGroupStatus'                        => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'BUILDING', 'REBUILDING', ],
		],
		'DynamoDBAction'                            => [
			'type'     => 'structure',
			'required' => [
				'tableName',
				'roleArn',
				'hashKeyField',
				'hashKeyValue',
			],
			'members'  => [
				'tableName'     => [ 'shape' => 'TableName', ],
				'roleArn'       => [ 'shape' => 'AwsArn', ],
				'operation'     => [ 'shape' => 'DynamoOperation', ],
				'hashKeyField'  => [ 'shape' => 'HashKeyField', ],
				'hashKeyValue'  => [ 'shape' => 'HashKeyValue', ],
				'hashKeyType'   => [ 'shape' => 'DynamoKeyType', ],
				'rangeKeyField' => [ 'shape' => 'RangeKeyField', ],
				'rangeKeyValue' => [ 'shape' => 'RangeKeyValue', ],
				'rangeKeyType'  => [ 'shape' => 'DynamoKeyType', ],
				'payloadField'  => [ 'shape' => 'PayloadField', ],
			],
		],
		'DynamoDBv2Action'                          => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'putItem', ],
			'members'  => [
				'roleArn' => [ 'shape' => 'AwsArn', ],
				'putItem' => [ 'shape' => 'PutItemInput', ],
			],
		],
		'DynamoKeyType'                             => [ 'type' => 'string', 'enum' => [ 'STRING', 'NUMBER', ], ],
		'DynamoOperation'                           => [ 'type' => 'string', ],
		'EffectivePolicies'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EffectivePolicy', ],
		],
		'EffectivePolicy'                           => [
			'type'    => 'structure',
			'members' => [
				'policyName'     => [ 'shape' => 'PolicyName', ],
				'policyArn'      => [ 'shape' => 'PolicyArn', ],
				'policyDocument' => [ 'shape' => 'PolicyDocument', ],
			],
		],
		'ElasticsearchAction'                       => [
			'type'     => 'structure',
			'required' => [
				'roleArn',
				'endpoint',
				'index',
				'type',
				'id',
			],
			'members'  => [
				'roleArn'  => [ 'shape' => 'AwsArn', ],
				'endpoint' => [ 'shape' => 'ElasticsearchEndpoint', ],
				'index'    => [ 'shape' => 'ElasticsearchIndex', ],
				'type'     => [ 'shape' => 'ElasticsearchType', ],
				'id'       => [ 'shape' => 'ElasticsearchId', ],
			],
		],
		'ElasticsearchEndpoint'                     => [ 'type' => 'string', 'pattern' => 'https?://.*', ],
		'ElasticsearchId'                           => [ 'type' => 'string', ],
		'ElasticsearchIndex'                        => [ 'type' => 'string', ],
		'ElasticsearchType'                         => [ 'type' => 'string', ],
		'EnableTopicRuleRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ruleName', ],
			'members'  => [
				'ruleName' => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
			],
		],
		'Enabled'                                   => [ 'type' => 'boolean', ],
		'EndpointAddress'                           => [ 'type' => 'string', ],
		'EndpointType'                              => [ 'type' => 'string', ],
		'ErrorCode'                                 => [ 'type' => 'string', ],
		'ErrorInfo'                                 => [
			'type'    => 'structure',
			'members' => [
				'code'    => [ 'shape' => 'Code', ],
				'message' => [ 'shape' => 'OTAUpdateErrorMessage', ],
			],
		],
		'ErrorMessage'                              => [ 'type' => 'string', 'max' => 2048, ],
		'EvaluationStatistic'                       => [
			'type'    => 'string',
			'pattern' => '(p0|p0\\.1|p0\\.01|p1|p10|p50|p90|p99|p99\\.9|p99\\.99|p100)',
		],
		'EventConfigurations'                       => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'EventType', ],
			'value' => [ 'shape' => 'Configuration', ],
		],
		'EventType'                                 => [
			'type' => 'string',
			'enum' => [
				'THING',
				'THING_GROUP',
				'THING_TYPE',
				'THING_GROUP_MEMBERSHIP',
				'THING_GROUP_HIERARCHY',
				'THING_TYPE_ASSOCIATION',
				'JOB',
				'JOB_EXECUTION',
				'POLICY',
				'CERTIFICATE',
				'CA_CERTIFICATE',
			],
		],
		'ExecutionNamePrefix'                       => [ 'type' => 'string', ],
		'ExecutionNumber'                           => [ 'type' => 'long', ],
		'ExpectedVersion'                           => [ 'type' => 'long', ],
		'ExpiresInSec'                              => [ 'type' => 'long', 'max' => 3600, 'min' => 60, ],
		'ExplicitDeny'                              => [
			'type'    => 'structure',
			'members' => [ 'policies' => [ 'shape' => 'Policies', ], ],
		],
		'ExponentialRolloutRate'                    => [
			'type'     => 'structure',
			'required' => [
				'baseRatePerMinute',
				'incrementFactor',
				'rateIncreaseCriteria',
			],
			'members'  => [
				'baseRatePerMinute'    => [ 'shape' => 'RolloutRatePerMinute', ],
				'incrementFactor'      => [ 'shape' => 'IncrementFactor', ],
				'rateIncreaseCriteria' => [ 'shape' => 'RateIncreaseCriteria', ],
			],
		],
		'FailedChecksCount'                         => [ 'type' => 'integer', ],
		'FailedThings'                              => [ 'type' => 'integer', ],
		'FileId'                                    => [ 'type' => 'integer', 'max' => 255, 'min' => 0, ],
		'FileLocation'                              => [
			'type'    => 'structure',
			'members' => [
				'stream'     => [ 'shape' => 'Stream', ],
				's3Location' => [ 'shape' => 'S3Location', ],
			],
		],
		'FileName'                                  => [ 'type' => 'string', ],
		'FirehoseAction'                            => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'deliveryStreamName', ],
			'members'  => [
				'roleArn'            => [ 'shape' => 'AwsArn', ],
				'deliveryStreamName' => [ 'shape' => 'DeliveryStreamName', ],
				'separator'          => [ 'shape' => 'FirehoseSeparator', ],
			],
		],
		'FirehoseSeparator'                         => [ 'type' => 'string', 'pattern' => '([\\n\\t])|(\\r\\n)|(,)', ],
		'Flag'                                      => [ 'type' => 'boolean', ],
		'ForceDelete'                               => [ 'type' => 'boolean', ],
		'ForceDeleteAWSJob'                         => [ 'type' => 'boolean', ],
		'ForceFlag'                                 => [ 'type' => 'boolean', ],
		'Forced'                                    => [ 'type' => 'boolean', ],
		'FunctionArn'                               => [ 'type' => 'string', ],
		'GEMaxResults'                              => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ],
		'GenerationId'                              => [ 'type' => 'string', ],
		'GetEffectivePoliciesRequest'               => [
			'type'    => 'structure',
			'members' => [
				'principal'             => [ 'shape' => 'Principal', ],
				'cognitoIdentityPoolId' => [ 'shape' => 'CognitoIdentityPoolId', ],
				'thingName'             => [
					'shape'        => 'ThingName',
					'location'     => 'querystring',
					'locationName' => 'thingName',
				],
			],
		],
		'GetEffectivePoliciesResponse'              => [
			'type'    => 'structure',
			'members' => [ 'effectivePolicies' => [ 'shape' => 'EffectivePolicies', ], ],
		],
		'GetIndexingConfigurationRequest'           => [ 'type' => 'structure', 'members' => [], ],
		'GetIndexingConfigurationResponse'          => [
			'type'    => 'structure',
			'members' => [
				'thingIndexingConfiguration'      => [ 'shape' => 'ThingIndexingConfiguration', ],
				'thingGroupIndexingConfiguration' => [ 'shape' => 'ThingGroupIndexingConfiguration', ],
			],
		],
		'GetJobDocumentRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId' => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
			],
		],
		'GetJobDocumentResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'document' => [ 'shape' => 'JobDocument', ], ],
		],
		'GetLoggingOptionsRequest'                  => [ 'type' => 'structure', 'members' => [], ],
		'GetLoggingOptionsResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'roleArn'  => [ 'shape' => 'AwsArn', ],
				'logLevel' => [ 'shape' => 'LogLevel', ],
			],
		],
		'GetOTAUpdateRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'otaUpdateId', ],
			'members'  => [
				'otaUpdateId' => [
					'shape'        => 'OTAUpdateId',
					'location'     => 'uri',
					'locationName' => 'otaUpdateId',
				],
			],
		],
		'GetOTAUpdateResponse'                      => [
			'type'    => 'structure',
			'members' => [ 'otaUpdateInfo' => [ 'shape' => 'OTAUpdateInfo', ], ],
		],
		'GetPolicyRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'policyName', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
			],
		],
		'GetPolicyResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'policyName'       => [ 'shape' => 'PolicyName', ],
				'policyArn'        => [ 'shape' => 'PolicyArn', ],
				'policyDocument'   => [ 'shape' => 'PolicyDocument', ],
				'defaultVersionId' => [ 'shape' => 'PolicyVersionId', ],
				'creationDate'     => [ 'shape' => 'DateType', ],
				'lastModifiedDate' => [ 'shape' => 'DateType', ],
				'generationId'     => [ 'shape' => 'GenerationId', ],
			],
		],
		'GetPolicyVersionRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'policyVersionId', ],
			'members'  => [
				'policyName'      => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'policyVersionId' => [
					'shape'        => 'PolicyVersionId',
					'location'     => 'uri',
					'locationName' => 'policyVersionId',
				],
			],
		],
		'GetPolicyVersionResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'policyArn'        => [ 'shape' => 'PolicyArn', ],
				'policyName'       => [ 'shape' => 'PolicyName', ],
				'policyDocument'   => [ 'shape' => 'PolicyDocument', ],
				'policyVersionId'  => [ 'shape' => 'PolicyVersionId', ],
				'isDefaultVersion' => [ 'shape' => 'IsDefaultVersion', ],
				'creationDate'     => [ 'shape' => 'DateType', ],
				'lastModifiedDate' => [ 'shape' => 'DateType', ],
				'generationId'     => [ 'shape' => 'GenerationId', ],
			],
		],
		'GetRegistrationCodeRequest'                => [ 'type' => 'structure', 'members' => [], ],
		'GetRegistrationCodeResponse'               => [
			'type'    => 'structure',
			'members' => [ 'registrationCode' => [ 'shape' => 'RegistrationCode', ], ],
		],
		'GetStatisticsRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'queryString', ],
			'members'  => [
				'indexName'        => [ 'shape' => 'IndexName', ],
				'queryString'      => [ 'shape' => 'QueryString', ],
				'aggregationField' => [ 'shape' => 'AggregationField', ],
				'queryVersion'     => [ 'shape' => 'QueryVersion', ],
			],
		],
		'GetStatisticsResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'statistics' => [ 'shape' => 'Statistics', ], ],
		],
		'GetTopicRuleRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ruleName', ],
			'members'  => [
				'ruleName' => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
			],
		],
		'GetTopicRuleResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'ruleArn' => [ 'shape' => 'RuleArn', ],
				'rule'    => [ 'shape' => 'TopicRule', ],
			],
		],
		'GetV2LoggingOptionsRequest'                => [ 'type' => 'structure', 'members' => [], ],
		'GetV2LoggingOptionsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'roleArn'         => [ 'shape' => 'AwsArn', ],
				'defaultLogLevel' => [ 'shape' => 'LogLevel', ],
				'disableAllLogs'  => [ 'shape' => 'DisableAllLogs', ],
			],
		],
		'GroupNameAndArn'                           => [
			'type'    => 'structure',
			'members' => [
				'groupName' => [ 'shape' => 'ThingGroupName', ],
				'groupArn'  => [ 'shape' => 'ThingGroupArn', ],
			],
		],
		'HashAlgorithm'                             => [ 'type' => 'string', ],
		'HashKeyField'                              => [ 'type' => 'string', ],
		'HashKeyValue'                              => [ 'type' => 'string', ],
		'ImplicitDeny'                              => [
			'type'    => 'structure',
			'members' => [ 'policies' => [ 'shape' => 'Policies', ], ],
		],
		'InProgressChecksCount'                     => [ 'type' => 'integer', ],
		'InProgressThings'                          => [ 'type' => 'integer', ],
		'InProgressTimeoutInMinutes'                => [ 'type' => 'long', ],
		'IncrementFactor'                           => [ 'type' => 'double', 'max' => 5, 'min' => 1, ],
		'IndexName'                                 => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'IndexNamesList'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexName', ], ],
		'IndexNotReadyException'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'IndexSchema'                               => [ 'type' => 'string', ],
		'IndexStatus'                               => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'BUILDING', 'REBUILDING', ],
		],
		'InlineDocument'                            => [ 'type' => 'string', ],
		'InputName'                                 => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'InternalException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
		],
		'InternalFailureException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
		],
		'InvalidAggregationException'               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidQueryException'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidRequestException'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidResponseException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidStateTransitionException'           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'IotAnalyticsAction'                        => [
			'type'    => 'structure',
			'members' => [
				'channelArn'  => [ 'shape' => 'AwsArn', ],
				'channelName' => [ 'shape' => 'ChannelName', ],
				'roleArn'     => [ 'shape' => 'AwsArn', ],
			],
		],
		'IotEventsAction'                           => [
			'type'     => 'structure',
			'required' => [ 'inputName', 'roleArn', ],
			'members'  => [
				'inputName' => [ 'shape' => 'InputName', ],
				'messageId' => [ 'shape' => 'MessageId', ],
				'roleArn'   => [ 'shape' => 'AwsArn', ],
			],
		],
		'IsAuthenticated'                           => [ 'type' => 'boolean', ],
		'IsDefaultVersion'                          => [ 'type' => 'boolean', ],
		'IsDisabled'                                => [ 'type' => 'boolean', ],
		'Job'                                       => [
			'type'    => 'structure',
			'members' => [
				'jobArn'                     => [ 'shape' => 'JobArn', ],
				'jobId'                      => [ 'shape' => 'JobId', ],
				'targetSelection'            => [ 'shape' => 'TargetSelection', ],
				'status'                     => [ 'shape' => 'JobStatus', ],
				'forceCanceled'              => [ 'shape' => 'Forced', ],
				'reasonCode'                 => [ 'shape' => 'ReasonCode', ],
				'comment'                    => [ 'shape' => 'Comment', ],
				'targets'                    => [ 'shape' => 'JobTargets', ],
				'description'                => [ 'shape' => 'JobDescription', ],
				'presignedUrlConfig'         => [ 'shape' => 'PresignedUrlConfig', ],
				'jobExecutionsRolloutConfig' => [ 'shape' => 'JobExecutionsRolloutConfig', ],
				'abortConfig'                => [ 'shape' => 'AbortConfig', ],
				'createdAt'                  => [ 'shape' => 'DateType', ],
				'lastUpdatedAt'              => [ 'shape' => 'DateType', ],
				'completedAt'                => [ 'shape' => 'DateType', ],
				'jobProcessDetails'          => [ 'shape' => 'JobProcessDetails', ],
				'timeoutConfig'              => [ 'shape' => 'TimeoutConfig', ],
			],
		],
		'JobArn'                                    => [ 'type' => 'string', ],
		'JobDescription'                            => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[^\\p{C}]+',
		],
		'JobDocument'                               => [ 'type' => 'string', 'max' => 32768, ],
		'JobDocumentSource'                         => [ 'type' => 'string', 'max' => 1350, 'min' => 1, ],
		'JobExecution'                              => [
			'type'    => 'structure',
			'members' => [
				'jobId'                            => [ 'shape' => 'JobId', ],
				'status'                           => [ 'shape' => 'JobExecutionStatus', ],
				'forceCanceled'                    => [ 'shape' => 'Forced', ],
				'statusDetails'                    => [ 'shape' => 'JobExecutionStatusDetails', ],
				'thingArn'                         => [ 'shape' => 'ThingArn', ],
				'queuedAt'                         => [ 'shape' => 'DateType', ],
				'startedAt'                        => [ 'shape' => 'DateType', ],
				'lastUpdatedAt'                    => [ 'shape' => 'DateType', ],
				'executionNumber'                  => [ 'shape' => 'ExecutionNumber', ],
				'versionNumber'                    => [ 'shape' => 'VersionNumber', ],
				'approximateSecondsBeforeTimedOut' => [ 'shape' => 'ApproximateSecondsBeforeTimedOut', ],
			],
		],
		'JobExecutionFailureType'                   => [
			'type' => 'string',
			'enum' => [ 'FAILED', 'REJECTED', 'TIMED_OUT', 'ALL', ],
		],
		'JobExecutionStatus'                        => [
			'type' => 'string',
			'enum' => [
				'QUEUED',
				'IN_PROGRESS',
				'SUCCEEDED',
				'FAILED',
				'TIMED_OUT',
				'REJECTED',
				'REMOVED',
				'CANCELED',
			],
		],
		'JobExecutionStatusDetails'                 => [
			'type'    => 'structure',
			'members' => [ 'detailsMap' => [ 'shape' => 'DetailsMap', ], ],
		],
		'JobExecutionSummary'                       => [
			'type'    => 'structure',
			'members' => [
				'status'          => [ 'shape' => 'JobExecutionStatus', ],
				'queuedAt'        => [ 'shape' => 'DateType', ],
				'startedAt'       => [ 'shape' => 'DateType', ],
				'lastUpdatedAt'   => [ 'shape' => 'DateType', ],
				'executionNumber' => [ 'shape' => 'ExecutionNumber', ],
			],
		],
		'JobExecutionSummaryForJob'                 => [
			'type'    => 'structure',
			'members' => [
				'thingArn'            => [ 'shape' => 'ThingArn', ],
				'jobExecutionSummary' => [ 'shape' => 'JobExecutionSummary', ],
			],
		],
		'JobExecutionSummaryForJobList'             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobExecutionSummaryForJob', ],
		],
		'JobExecutionSummaryForThing'               => [
			'type'    => 'structure',
			'members' => [
				'jobId'               => [ 'shape' => 'JobId', ],
				'jobExecutionSummary' => [ 'shape' => 'JobExecutionSummary', ],
			],
		],
		'JobExecutionSummaryForThingList'           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobExecutionSummaryForThing', ],
		],
		'JobExecutionsRolloutConfig'                => [
			'type'    => 'structure',
			'members' => [
				'maximumPerMinute' => [ 'shape' => 'MaxJobExecutionsPerMin', ],
				'exponentialRate'  => [ 'shape' => 'ExponentialRolloutRate', ],
			],
		],
		'JobId'                                     => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'JobProcessDetails'                         => [
			'type'    => 'structure',
			'members' => [
				'processingTargets'        => [ 'shape' => 'ProcessingTargetNameList', ],
				'numberOfCanceledThings'   => [ 'shape' => 'CanceledThings', ],
				'numberOfSucceededThings'  => [ 'shape' => 'SucceededThings', ],
				'numberOfFailedThings'     => [ 'shape' => 'FailedThings', ],
				'numberOfRejectedThings'   => [ 'shape' => 'RejectedThings', ],
				'numberOfQueuedThings'     => [ 'shape' => 'QueuedThings', ],
				'numberOfInProgressThings' => [ 'shape' => 'InProgressThings', ],
				'numberOfRemovedThings'    => [ 'shape' => 'RemovedThings', ],
				'numberOfTimedOutThings'   => [ 'shape' => 'TimedOutThings', ],
			],
		],
		'JobStatus'                                 => [
			'type' => 'string',
			'enum' => [
				'IN_PROGRESS',
				'CANCELED',
				'COMPLETED',
				'DELETION_IN_PROGRESS',
			],
		],
		'JobSummary'                                => [
			'type'    => 'structure',
			'members' => [
				'jobArn'          => [ 'shape' => 'JobArn', ],
				'jobId'           => [ 'shape' => 'JobId', ],
				'thingGroupId'    => [ 'shape' => 'ThingGroupId', ],
				'targetSelection' => [ 'shape' => 'TargetSelection', ],
				'status'          => [ 'shape' => 'JobStatus', ],
				'createdAt'       => [ 'shape' => 'DateType', ],
				'lastUpdatedAt'   => [ 'shape' => 'DateType', ],
				'completedAt'     => [ 'shape' => 'DateType', ],
			],
		],
		'JobSummaryList'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'JobSummary', ], ],
		'JobTargets'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TargetArn', ],
			'min'    => 1,
		],
		'JsonDocument'                              => [ 'type' => 'string', ],
		'Key'                                       => [ 'type' => 'string', ],
		'KeyName'                                   => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'KeyPair'                                   => [
			'type'    => 'structure',
			'members' => [
				'PublicKey'  => [ 'shape' => 'PublicKey', ],
				'PrivateKey' => [ 'shape' => 'PrivateKey', ],
			],
		],
		'KeyValue'                                  => [ 'type' => 'string', 'max' => 5120, ],
		'KinesisAction'                             => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'streamName', ],
			'members'  => [
				'roleArn'      => [ 'shape' => 'AwsArn', ],
				'streamName'   => [ 'shape' => 'StreamName', ],
				'partitionKey' => [ 'shape' => 'PartitionKey', ],
			],
		],
		'LambdaAction'                              => [
			'type'     => 'structure',
			'required' => [ 'functionArn', ],
			'members'  => [ 'functionArn' => [ 'shape' => 'FunctionArn', ], ],
		],
		'LaserMaxResults'                           => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ],
		'LastModifiedDate'                          => [ 'type' => 'timestamp', ],
		'LimitExceededException'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 410, ],
			'exception' => true,
		],
		'ListActiveViolationsRequest'               => [
			'type'    => 'structure',
			'members' => [
				'thingName'           => [
					'shape'        => 'ThingName',
					'location'     => 'querystring',
					'locationName' => 'thingName',
				],
				'securityProfileName' => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'querystring',
					'locationName' => 'securityProfileName',
				],
				'nextToken'           => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'          => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListActiveViolationsResponse'              => [
			'type'    => 'structure',
			'members' => [
				'activeViolations' => [ 'shape' => 'ActiveViolations', ],
				'nextToken'        => [ 'shape' => 'NextToken', ],
			],
		],
		'ListAttachedPoliciesRequest'               => [
			'type'     => 'structure',
			'required' => [ 'target', ],
			'members'  => [
				'target'    => [
					'shape'        => 'PolicyTarget',
					'location'     => 'uri',
					'locationName' => 'target',
				],
				'recursive' => [
					'shape'        => 'Recursive',
					'location'     => 'querystring',
					'locationName' => 'recursive',
				],
				'marker'    => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'pageSize'  => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
			],
		],
		'ListAttachedPoliciesResponse'              => [
			'type'    => 'structure',
			'members' => [
				'policies'   => [ 'shape' => 'Policies', ],
				'nextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'ListAuditFindingsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'taskId'             => [ 'shape' => 'AuditTaskId', ],
				'checkName'          => [ 'shape' => 'AuditCheckName', ],
				'resourceIdentifier' => [ 'shape' => 'ResourceIdentifier', ],
				'maxResults'         => [ 'shape' => 'MaxResults', ],
				'nextToken'          => [ 'shape' => 'NextToken', ],
				'startTime'          => [ 'shape' => 'Timestamp', ],
				'endTime'            => [ 'shape' => 'Timestamp', ],
			],
		],
		'ListAuditFindingsResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'findings'  => [ 'shape' => 'AuditFindings', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListAuditTasksRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'startTime', 'endTime', ],
			'members'  => [
				'startTime'  => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'startTime',
				],
				'endTime'    => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'endTime',
				],
				'taskType'   => [
					'shape'        => 'AuditTaskType',
					'location'     => 'querystring',
					'locationName' => 'taskType',
				],
				'taskStatus' => [
					'shape'        => 'AuditTaskStatus',
					'location'     => 'querystring',
					'locationName' => 'taskStatus',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListAuditTasksResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'tasks'     => [ 'shape' => 'AuditTaskMetadataList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListAuthorizersRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
				'status'         => [
					'shape'        => 'AuthorizerStatus',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
			],
		],
		'ListAuthorizersResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'authorizers' => [ 'shape' => 'Authorizers', ],
				'nextMarker'  => [ 'shape' => 'Marker', ],
			],
		],
		'ListBillingGroupsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'nextToken'        => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'       => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'namePrefixFilter' => [
					'shape'        => 'BillingGroupName',
					'location'     => 'querystring',
					'locationName' => 'namePrefixFilter',
				],
			],
		],
		'ListBillingGroupsResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'billingGroups' => [ 'shape' => 'BillingGroupNameAndArnList', ],
				'nextToken'     => [ 'shape' => 'NextToken', ],
			],
		],
		'ListCACertificatesRequest'                 => [
			'type'    => 'structure',
			'members' => [
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListCACertificatesResponse'                => [
			'type'    => 'structure',
			'members' => [
				'certificates' => [ 'shape' => 'CACertificates', ],
				'nextMarker'   => [ 'shape' => 'Marker', ],
			],
		],
		'ListCertificatesByCARequest'               => [
			'type'     => 'structure',
			'required' => [ 'caCertificateId', ],
			'members'  => [
				'caCertificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'caCertificateId',
				],
				'pageSize'        => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'          => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder'  => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListCertificatesByCAResponse'              => [
			'type'    => 'structure',
			'members' => [
				'certificates' => [ 'shape' => 'Certificates', ],
				'nextMarker'   => [ 'shape' => 'Marker', ],
			],
		],
		'ListCertificatesRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListCertificatesResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'certificates' => [ 'shape' => 'Certificates', ],
				'nextMarker'   => [ 'shape' => 'Marker', ],
			],
		],
		'ListIndicesRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'QueryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListIndicesResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'indexNames' => [ 'shape' => 'IndexNamesList', ],
				'nextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListJobExecutionsForJobRequest'            => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId'      => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'status'     => [
					'shape'        => 'JobExecutionStatus',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
				'maxResults' => [
					'shape'        => 'LaserMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListJobExecutionsForJobResponse'           => [
			'type'    => 'structure',
			'members' => [
				'executionSummaries' => [ 'shape' => 'JobExecutionSummaryForJobList', ],
				'nextToken'          => [ 'shape' => 'NextToken', ],
			],
		],
		'ListJobExecutionsForThingRequest'          => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName'  => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'status'     => [
					'shape'        => 'JobExecutionStatus',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
				'maxResults' => [
					'shape'        => 'LaserMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListJobExecutionsForThingResponse'         => [
			'type'    => 'structure',
			'members' => [
				'executionSummaries' => [ 'shape' => 'JobExecutionSummaryForThingList', ],
				'nextToken'          => [ 'shape' => 'NextToken', ],
			],
		],
		'ListJobsRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'status'          => [
					'shape'        => 'JobStatus',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
				'targetSelection' => [
					'shape'        => 'TargetSelection',
					'location'     => 'querystring',
					'locationName' => 'targetSelection',
				],
				'maxResults'      => [
					'shape'        => 'LaserMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'       => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'thingGroupName'  => [
					'shape'        => 'ThingGroupName',
					'location'     => 'querystring',
					'locationName' => 'thingGroupName',
				],
				'thingGroupId'    => [
					'shape'        => 'ThingGroupId',
					'location'     => 'querystring',
					'locationName' => 'thingGroupId',
				],
			],
		],
		'ListJobsResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'jobs'      => [ 'shape' => 'JobSummaryList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListOTAUpdatesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'maxResults'      => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'       => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'otaUpdateStatus' => [
					'shape'        => 'OTAUpdateStatus',
					'location'     => 'querystring',
					'locationName' => 'otaUpdateStatus',
				],
			],
		],
		'ListOTAUpdatesResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'otaUpdates' => [ 'shape' => 'OTAUpdatesSummary', ],
				'nextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListOutgoingCertificatesRequest'           => [
			'type'    => 'structure',
			'members' => [
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListOutgoingCertificatesResponse'          => [
			'type'    => 'structure',
			'members' => [
				'outgoingCertificates' => [ 'shape' => 'OutgoingCertificates', ],
				'nextMarker'           => [ 'shape' => 'Marker', ],
			],
		],
		'ListPoliciesRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListPoliciesResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'policies'   => [ 'shape' => 'Policies', ],
				'nextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'ListPolicyPrincipalsRequest'               => [
			'type'     => 'structure',
			'required' => [ 'policyName', ],
			'members'  => [
				'policyName'     => [
					'shape'        => 'PolicyName',
					'location'     => 'header',
					'locationName' => 'x-amzn-iot-policy',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListPolicyPrincipalsResponse'              => [
			'type'    => 'structure',
			'members' => [
				'principals' => [ 'shape' => 'Principals', ],
				'nextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'ListPolicyVersionsRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'policyName', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
			],
		],
		'ListPolicyVersionsResponse'                => [
			'type'    => 'structure',
			'members' => [ 'policyVersions' => [ 'shape' => 'PolicyVersions', ], ],
		],
		'ListPrincipalPoliciesRequest'              => [
			'type'     => 'structure',
			'required' => [ 'principal', ],
			'members'  => [
				'principal'      => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-iot-principal',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListPrincipalPoliciesResponse'             => [
			'type'    => 'structure',
			'members' => [
				'policies'   => [ 'shape' => 'Policies', ],
				'nextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'ListPrincipalThingsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'principal', ],
			'members'  => [
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'principal'  => [
					'shape'        => 'Principal',
					'location'     => 'header',
					'locationName' => 'x-amzn-principal',
				],
			],
		],
		'ListPrincipalThingsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'things'    => [ 'shape' => 'ThingNameList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListRoleAliasesRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'pageSize'       => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
				'marker'         => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListRoleAliasesResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'roleAliases' => [ 'shape' => 'RoleAliases', ],
				'nextMarker'  => [ 'shape' => 'Marker', ],
			],
		],
		'ListScheduledAuditsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListScheduledAuditsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'scheduledAudits' => [ 'shape' => 'ScheduledAuditMetadataList', ],
				'nextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'ListSecurityProfilesForTargetRequest'      => [
			'type'     => 'structure',
			'required' => [ 'securityProfileTargetArn', ],
			'members'  => [
				'nextToken'                => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'               => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'recursive'                => [
					'shape'        => 'Recursive',
					'location'     => 'querystring',
					'locationName' => 'recursive',
				],
				'securityProfileTargetArn' => [
					'shape'        => 'SecurityProfileTargetArn',
					'location'     => 'querystring',
					'locationName' => 'securityProfileTargetArn',
				],
			],
		],
		'ListSecurityProfilesForTargetResponse'     => [
			'type'    => 'structure',
			'members' => [
				'securityProfileTargetMappings' => [ 'shape' => 'SecurityProfileTargetMappings', ],
				'nextToken'                     => [ 'shape' => 'NextToken', ],
			],
		],
		'ListSecurityProfilesRequest'               => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListSecurityProfilesResponse'              => [
			'type'    => 'structure',
			'members' => [
				'securityProfileIdentifiers' => [ 'shape' => 'SecurityProfileIdentifiers', ],
				'nextToken'                  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListStreamsRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'maxResults'     => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'      => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'ascendingOrder' => [
					'shape'        => 'AscendingOrder',
					'location'     => 'querystring',
					'locationName' => 'isAscendingOrder',
				],
			],
		],
		'ListStreamsResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'streams'   => [ 'shape' => 'StreamsSummary', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTagsForResourceRequest'                => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'ResourceArn',
					'location'     => 'querystring',
					'locationName' => 'resourceArn',
				],
				'nextToken'   => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListTagsForResourceResponse'               => [
			'type'    => 'structure',
			'members' => [
				'tags'      => [ 'shape' => 'TagList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTargetsForPolicyRequest'               => [
			'type'     => 'structure',
			'required' => [ 'policyName', ],
			'members'  => [
				'policyName' => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'marker'     => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'pageSize'   => [
					'shape'        => 'PageSize',
					'location'     => 'querystring',
					'locationName' => 'pageSize',
				],
			],
		],
		'ListTargetsForPolicyResponse'              => [
			'type'    => 'structure',
			'members' => [
				'targets'    => [ 'shape' => 'PolicyTargets', ],
				'nextMarker' => [ 'shape' => 'Marker', ],
			],
		],
		'ListTargetsForSecurityProfileRequest'      => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', ],
			'members'  => [
				'securityProfileName' => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'nextToken'           => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'          => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListTargetsForSecurityProfileResponse'     => [
			'type'    => 'structure',
			'members' => [
				'securityProfileTargets' => [ 'shape' => 'SecurityProfileTargets', ],
				'nextToken'              => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingGroupsForThingRequest'            => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName'  => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListThingGroupsForThingResponse'           => [
			'type'    => 'structure',
			'members' => [
				'thingGroups' => [ 'shape' => 'ThingGroupNameAndArnList', ],
				'nextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingGroupsRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'nextToken'        => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'       => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'parentGroup'      => [
					'shape'        => 'ThingGroupName',
					'location'     => 'querystring',
					'locationName' => 'parentGroup',
				],
				'namePrefixFilter' => [
					'shape'        => 'ThingGroupName',
					'location'     => 'querystring',
					'locationName' => 'namePrefixFilter',
				],
				'recursive'        => [
					'shape'        => 'RecursiveWithoutDefault',
					'location'     => 'querystring',
					'locationName' => 'recursive',
				],
			],
		],
		'ListThingGroupsResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'thingGroups' => [ 'shape' => 'ThingGroupNameAndArnList', ],
				'nextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingPrincipalsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName' => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
			],
		],
		'ListThingPrincipalsResponse'               => [
			'type'    => 'structure',
			'members' => [ 'principals' => [ 'shape' => 'Principals', ], ],
		],
		'ListThingRegistrationTaskReportsRequest'   => [
			'type'     => 'structure',
			'required' => [ 'taskId', 'reportType', ],
			'members'  => [
				'taskId'     => [
					'shape'        => 'TaskId',
					'location'     => 'uri',
					'locationName' => 'taskId',
				],
				'reportType' => [
					'shape'        => 'ReportType',
					'location'     => 'querystring',
					'locationName' => 'reportType',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListThingRegistrationTaskReportsResponse'  => [
			'type'    => 'structure',
			'members' => [
				'resourceLinks' => [ 'shape' => 'S3FileUrlList', ],
				'reportType'    => [ 'shape' => 'ReportType', ],
				'nextToken'     => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingRegistrationTasksRequest'         => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'status'     => [
					'shape'        => 'Status',
					'location'     => 'querystring',
					'locationName' => 'status',
				],
			],
		],
		'ListThingRegistrationTasksResponse'        => [
			'type'    => 'structure',
			'members' => [
				'taskIds'   => [ 'shape' => 'TaskIdList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingTypesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'nextToken'     => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'    => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'thingTypeName' => [
					'shape'        => 'ThingTypeName',
					'location'     => 'querystring',
					'locationName' => 'thingTypeName',
				],
			],
		],
		'ListThingTypesResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'thingTypes' => [ 'shape' => 'ThingTypeList', ],
				'nextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingsInBillingGroupRequest'           => [
			'type'     => 'structure',
			'required' => [ 'billingGroupName', ],
			'members'  => [
				'billingGroupName' => [
					'shape'        => 'BillingGroupName',
					'location'     => 'uri',
					'locationName' => 'billingGroupName',
				],
				'nextToken'        => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'       => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListThingsInBillingGroupResponse'          => [
			'type'    => 'structure',
			'members' => [
				'things'    => [ 'shape' => 'ThingNameList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingsInThingGroupRequest'             => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', ],
			'members'  => [
				'thingGroupName' => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'recursive'      => [
					'shape'        => 'Recursive',
					'location'     => 'querystring',
					'locationName' => 'recursive',
				],
				'nextToken'      => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'     => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListThingsInThingGroupResponse'            => [
			'type'    => 'structure',
			'members' => [
				'things'    => [ 'shape' => 'ThingNameList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListThingsRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'nextToken'      => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'     => [
					'shape'        => 'RegistryMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'attributeName'  => [
					'shape'        => 'AttributeName',
					'location'     => 'querystring',
					'locationName' => 'attributeName',
				],
				'attributeValue' => [
					'shape'        => 'AttributeValue',
					'location'     => 'querystring',
					'locationName' => 'attributeValue',
				],
				'thingTypeName'  => [
					'shape'        => 'ThingTypeName',
					'location'     => 'querystring',
					'locationName' => 'thingTypeName',
				],
			],
		],
		'ListThingsResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'things'    => [ 'shape' => 'ThingAttributeList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTopicRulesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'topic'        => [
					'shape'        => 'Topic',
					'location'     => 'querystring',
					'locationName' => 'topic',
				],
				'maxResults'   => [
					'shape'        => 'GEMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'    => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'ruleDisabled' => [
					'shape'        => 'IsDisabled',
					'location'     => 'querystring',
					'locationName' => 'ruleDisabled',
				],
			],
		],
		'ListTopicRulesResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'rules'     => [ 'shape' => 'TopicRuleList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListV2LoggingLevelsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'targetType' => [
					'shape'        => 'LogTargetType',
					'location'     => 'querystring',
					'locationName' => 'targetType',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'SkyfallMaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListV2LoggingLevelsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'logTargetConfigurations' => [ 'shape' => 'LogTargetConfigurations', ],
				'nextToken'               => [ 'shape' => 'NextToken', ],
			],
		],
		'ListViolationEventsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'startTime', 'endTime', ],
			'members'  => [
				'startTime'           => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'startTime',
				],
				'endTime'             => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'endTime',
				],
				'thingName'           => [
					'shape'        => 'ThingName',
					'location'     => 'querystring',
					'locationName' => 'thingName',
				],
				'securityProfileName' => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'querystring',
					'locationName' => 'securityProfileName',
				],
				'nextToken'           => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults'          => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListViolationEventsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'violationEvents' => [ 'shape' => 'ViolationEvents', ],
				'nextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'LogLevel'                                  => [
			'type' => 'string',
			'enum' => [ 'DEBUG', 'INFO', 'ERROR', 'WARN', 'DISABLED', ],
		],
		'LogTarget'                                 => [
			'type'     => 'structure',
			'required' => [ 'targetType', ],
			'members'  => [
				'targetType' => [ 'shape' => 'LogTargetType', ],
				'targetName' => [ 'shape' => 'LogTargetName', ],
			],
		],
		'LogTargetConfiguration'                    => [
			'type'    => 'structure',
			'members' => [
				'logTarget' => [ 'shape' => 'LogTarget', ],
				'logLevel'  => [ 'shape' => 'LogLevel', ],
			],
		],
		'LogTargetConfigurations'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LogTargetConfiguration', ],
		],
		'LogTargetName'                             => [ 'type' => 'string', ],
		'LogTargetType'                             => [ 'type' => 'string', 'enum' => [ 'DEFAULT', 'THING_GROUP', ], ],
		'LoggingOptionsPayload'                     => [
			'type'     => 'structure',
			'required' => [ 'roleArn', ],
			'members'  => [
				'roleArn'  => [ 'shape' => 'AwsArn', ],
				'logLevel' => [ 'shape' => 'LogLevel', ],
			],
		],
		'MalformedPolicyException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Marker'                                    => [ 'type' => 'string', 'pattern' => '[A-Za-z0-9+/]+={0,2}', ],
		'MaxJobExecutionsPerMin'                    => [ 'type' => 'integer', 'min' => 1, ],
		'MaxResults'                                => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ],
		'MaximumPerMinute'                          => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'Message'                                   => [ 'type' => 'string', 'max' => 128, ],
		'MessageFormat'                             => [ 'type' => 'string', 'enum' => [ 'RAW', 'JSON', ], ],
		'MessageId'                                 => [ 'type' => 'string', 'max' => 128, ],
		'MetricValue'                               => [
			'type'    => 'structure',
			'members' => [
				'count' => [ 'shape' => 'UnsignedLong', ],
				'cidrs' => [ 'shape' => 'Cidrs', ],
				'ports' => [ 'shape' => 'Ports', ],
			],
		],
		'MinimumNumberOfExecutedThings'             => [ 'type' => 'integer', 'min' => 1, ],
		'MissingContextValue'                       => [ 'type' => 'string', ],
		'MissingContextValues'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MissingContextValue', ],
		],
		'NextToken'                                 => [ 'type' => 'string', ],
		'NonCompliantChecksCount'                   => [ 'type' => 'integer', ],
		'NonCompliantResource'                      => [
			'type'    => 'structure',
			'members' => [
				'resourceType'       => [ 'shape' => 'ResourceType', ],
				'resourceIdentifier' => [ 'shape' => 'ResourceIdentifier', ],
				'additionalInfo'     => [ 'shape' => 'StringMap', ],
			],
		],
		'NonCompliantResourcesCount'                => [ 'type' => 'long', ],
		'NotConfiguredException'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NumberOfThings'                            => [ 'type' => 'integer', 'min' => 1, ],
		'OTAUpdateArn'                              => [ 'type' => 'string', ],
		'OTAUpdateDescription'                      => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[^\\p{C}]+',
		],
		'OTAUpdateErrorMessage'                     => [ 'type' => 'string', ],
		'OTAUpdateFile'                             => [
			'type'    => 'structure',
			'members' => [
				'fileName'     => [ 'shape' => 'FileName', ],
				'fileVersion'  => [ 'shape' => 'OTAUpdateFileVersion', ],
				'fileLocation' => [ 'shape' => 'FileLocation', ],
				'codeSigning'  => [ 'shape' => 'CodeSigning', ],
				'attributes'   => [ 'shape' => 'AttributesMap', ],
			],
		],
		'OTAUpdateFileVersion'                      => [ 'type' => 'string', ],
		'OTAUpdateFiles'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OTAUpdateFile', ],
			'max'    => 50,
			'min'    => 1,
		],
		'OTAUpdateId'                               => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'OTAUpdateInfo'                             => [
			'type'    => 'structure',
			'members' => [
				'otaUpdateId'                   => [ 'shape' => 'OTAUpdateId', ],
				'otaUpdateArn'                  => [ 'shape' => 'OTAUpdateArn', ],
				'creationDate'                  => [ 'shape' => 'DateType', ],
				'lastModifiedDate'              => [ 'shape' => 'DateType', ],
				'description'                   => [ 'shape' => 'OTAUpdateDescription', ],
				'targets'                       => [ 'shape' => 'Targets', ],
				'awsJobExecutionsRolloutConfig' => [ 'shape' => 'AwsJobExecutionsRolloutConfig', ],
				'targetSelection'               => [ 'shape' => 'TargetSelection', ],
				'otaUpdateFiles'                => [ 'shape' => 'OTAUpdateFiles', ],
				'otaUpdateStatus'               => [ 'shape' => 'OTAUpdateStatus', ],
				'awsIotJobId'                   => [ 'shape' => 'AwsIotJobId', ],
				'awsIotJobArn'                  => [ 'shape' => 'AwsIotJobArn', ],
				'errorInfo'                     => [ 'shape' => 'ErrorInfo', ],
				'additionalParameters'          => [ 'shape' => 'AdditionalParameterMap', ],
			],
		],
		'OTAUpdateStatus'                           => [
			'type' => 'string',
			'enum' => [
				'CREATE_PENDING',
				'CREATE_IN_PROGRESS',
				'CREATE_COMPLETE',
				'CREATE_FAILED',
			],
		],
		'OTAUpdateSummary'                          => [
			'type'    => 'structure',
			'members' => [
				'otaUpdateId'  => [ 'shape' => 'OTAUpdateId', ],
				'otaUpdateArn' => [ 'shape' => 'OTAUpdateArn', ],
				'creationDate' => [ 'shape' => 'DateType', ],
			],
		],
		'OTAUpdatesSummary'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OTAUpdateSummary', ],
		],
		'OptionalVersion'                           => [ 'type' => 'long', ],
		'OutgoingCertificate'                       => [
			'type'    => 'structure',
			'members' => [
				'certificateArn'  => [ 'shape' => 'CertificateArn', ],
				'certificateId'   => [ 'shape' => 'CertificateId', ],
				'transferredTo'   => [ 'shape' => 'AwsAccountId', ],
				'transferDate'    => [ 'shape' => 'DateType', ],
				'transferMessage' => [ 'shape' => 'Message', ],
				'creationDate'    => [ 'shape' => 'DateType', ],
			],
		],
		'OutgoingCertificates'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutgoingCertificate', ],
		],
		'OverrideDynamicGroups'                     => [ 'type' => 'boolean', ],
		'PageSize'                                  => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ],
		'Parameter'                                 => [ 'type' => 'string', ],
		'Parameters'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Parameter', ],
			'value' => [ 'shape' => 'Value', ],
		],
		'PartitionKey'                              => [ 'type' => 'string', ],
		'PayloadField'                              => [ 'type' => 'string', ],
		'Percentage'                                => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ],
		'Platform'                                  => [ 'type' => 'string', ],
		'Policies'                                  => [ 'type' => 'list', 'member' => [ 'shape' => 'Policy', ], ],
		'Policy'                                    => [
			'type'    => 'structure',
			'members' => [
				'policyName' => [ 'shape' => 'PolicyName', ],
				'policyArn'  => [ 'shape' => 'PolicyArn', ],
			],
		],
		'PolicyArn'                                 => [ 'type' => 'string', ],
		'PolicyDocument'                            => [ 'type' => 'string', ],
		'PolicyDocuments'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyDocument', ],
		],
		'PolicyName'                                => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'PolicyNames'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'PolicyName', ], ],
		'PolicyTarget'                              => [ 'type' => 'string', ],
		'PolicyTargets'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyTarget', ],
		],
		'PolicyVersion'                             => [
			'type'    => 'structure',
			'members' => [
				'versionId'        => [ 'shape' => 'PolicyVersionId', ],
				'isDefaultVersion' => [ 'shape' => 'IsDefaultVersion', ],
				'createDate'       => [ 'shape' => 'DateType', ],
			],
		],
		'PolicyVersionId'                           => [ 'type' => 'string', 'pattern' => '[0-9]+', ],
		'PolicyVersionIdentifier'                   => [
			'type'    => 'structure',
			'members' => [
				'policyName'      => [ 'shape' => 'PolicyName', ],
				'policyVersionId' => [ 'shape' => 'PolicyVersionId', ],
			],
		],
		'PolicyVersions'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyVersion', ],
		],
		'Port'                                      => [ 'type' => 'integer', 'max' => 65535, 'min' => 0, ],
		'Ports'                                     => [ 'type' => 'list', 'member' => [ 'shape' => 'Port', ], ],
		'Prefix'                                    => [ 'type' => 'string', ],
		'PresignedUrlConfig'                        => [
			'type'    => 'structure',
			'members' => [
				'roleArn'      => [ 'shape' => 'RoleArn', ],
				'expiresInSec' => [ 'shape' => 'ExpiresInSec', ],
			],
		],
		'Principal'                                 => [ 'type' => 'string', ],
		'PrincipalArn'                              => [ 'type' => 'string', ],
		'PrincipalId'                               => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9]+',
		],
		'Principals'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PrincipalArn', ],
		],
		'PrivateKey'                                => [ 'type' => 'string', 'min' => 1, 'sensitive' => true, ],
		'ProcessingTargetName'                      => [ 'type' => 'string', ],
		'ProcessingTargetNameList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ProcessingTargetName', ],
		],
		'PublicKey'                                 => [ 'type' => 'string', 'min' => 1, ],
		'PublicKeyMap'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'KeyName', ],
			'value' => [ 'shape' => 'KeyValue', ],
		],
		'PutItemInput'                              => [
			'type'     => 'structure',
			'required' => [ 'tableName', ],
			'members'  => [ 'tableName' => [ 'shape' => 'TableName', ], ],
		],
		'QueryMaxResults'                           => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ],
		'QueryString'                               => [ 'type' => 'string', 'min' => 1, ],
		'QueryVersion'                              => [ 'type' => 'string', ],
		'QueueUrl'                                  => [ 'type' => 'string', ],
		'QueuedThings'                              => [ 'type' => 'integer', ],
		'RangeKeyField'                             => [ 'type' => 'string', ],
		'RangeKeyValue'                             => [ 'type' => 'string', ],
		'RateIncreaseCriteria'                      => [
			'type'    => 'structure',
			'members' => [
				'numberOfNotifiedThings'  => [ 'shape' => 'NumberOfThings', ],
				'numberOfSucceededThings' => [ 'shape' => 'NumberOfThings', ],
			],
		],
		'ReasonCode'                                => [
			'type'    => 'string',
			'max'     => 128,
			'pattern' => '[\\p{Upper}\\p{Digit}_]+',
		],
		'ReasonForNonCompliance'                    => [ 'type' => 'string', ],
		'ReasonForNonComplianceCode'                => [ 'type' => 'string', ],
		'Recursive'                                 => [ 'type' => 'boolean', ],
		'RecursiveWithoutDefault'                   => [ 'type' => 'boolean', ],
		'RegisterCACertificateRequest'              => [
			'type'     => 'structure',
			'required' => [ 'caCertificate', 'verificationCertificate', ],
			'members'  => [
				'caCertificate'           => [ 'shape' => 'CertificatePem', ],
				'verificationCertificate' => [ 'shape' => 'CertificatePem', ],
				'setAsActive'             => [
					'shape'        => 'SetAsActive',
					'location'     => 'querystring',
					'locationName' => 'setAsActive',
				],
				'allowAutoRegistration'   => [
					'shape'        => 'AllowAutoRegistration',
					'location'     => 'querystring',
					'locationName' => 'allowAutoRegistration',
				],
				'registrationConfig'      => [ 'shape' => 'RegistrationConfig', ],
			],
		],
		'RegisterCACertificateResponse'             => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
			],
		],
		'RegisterCertificateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'certificatePem', ],
			'members'  => [
				'certificatePem'   => [ 'shape' => 'CertificatePem', ],
				'caCertificatePem' => [ 'shape' => 'CertificatePem', ],
				'setAsActive'      => [
					'shape'        => 'SetAsActiveFlag',
					'deprecated'   => true,
					'location'     => 'querystring',
					'locationName' => 'setAsActive',
				],
				'status'           => [ 'shape' => 'CertificateStatus', ],
			],
		],
		'RegisterCertificateResponse'               => [
			'type'    => 'structure',
			'members' => [
				'certificateArn' => [ 'shape' => 'CertificateArn', ],
				'certificateId'  => [ 'shape' => 'CertificateId', ],
			],
		],
		'RegisterThingRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'templateBody', ],
			'members'  => [
				'templateBody' => [ 'shape' => 'TemplateBody', ],
				'parameters'   => [ 'shape' => 'Parameters', ],
			],
		],
		'RegisterThingResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'certificatePem' => [ 'shape' => 'CertificatePem', ],
				'resourceArns'   => [ 'shape' => 'ResourceArns', ],
			],
		],
		'RegistrationCode'                          => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 64,
			'pattern' => '(0x)?[a-fA-F0-9]+',
		],
		'RegistrationCodeValidationException'       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'RegistrationConfig'                        => [
			'type'    => 'structure',
			'members' => [
				'templateBody' => [ 'shape' => 'TemplateBody', ],
				'roleArn'      => [ 'shape' => 'RoleArn', ],
			],
		],
		'RegistryMaxResults'                        => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ],
		'RegistryS3BucketName'                      => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9._-]+',
		],
		'RegistryS3KeyName'                         => [
			'type'    => 'string',
			'max'     => 1024,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9!_.*\'()-\\/]+',
		],
		'RejectCertificateTransferRequest'          => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
				'rejectReason'  => [ 'shape' => 'Message', ],
			],
		],
		'RejectedThings'                            => [ 'type' => 'integer', ],
		'RelatedResource'                           => [
			'type'    => 'structure',
			'members' => [
				'resourceType'       => [ 'shape' => 'ResourceType', ],
				'resourceIdentifier' => [ 'shape' => 'ResourceIdentifier', ],
				'additionalInfo'     => [ 'shape' => 'StringMap', ],
			],
		],
		'RelatedResources'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RelatedResource', ],
		],
		'RemoveAutoRegistration'                    => [ 'type' => 'boolean', ],
		'RemoveThingFromBillingGroupRequest'        => [
			'type'    => 'structure',
			'members' => [
				'billingGroupName' => [ 'shape' => 'BillingGroupName', ],
				'billingGroupArn'  => [ 'shape' => 'BillingGroupArn', ],
				'thingName'        => [ 'shape' => 'ThingName', ],
				'thingArn'         => [ 'shape' => 'ThingArn', ],
			],
		],
		'RemoveThingFromBillingGroupResponse'       => [ 'type' => 'structure', 'members' => [], ],
		'RemoveThingFromThingGroupRequest'          => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName' => [ 'shape' => 'ThingGroupName', ],
				'thingGroupArn'  => [ 'shape' => 'ThingGroupArn', ],
				'thingName'      => [ 'shape' => 'ThingName', ],
				'thingArn'       => [ 'shape' => 'ThingArn', ],
			],
		],
		'RemoveThingFromThingGroupResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'RemoveThingType'                           => [ 'type' => 'boolean', ],
		'RemovedThings'                             => [ 'type' => 'integer', ],
		'ReplaceTopicRuleRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ruleName', 'topicRulePayload', ],
			'members'  => [
				'ruleName'         => [
					'shape'        => 'RuleName',
					'location'     => 'uri',
					'locationName' => 'ruleName',
				],
				'topicRulePayload' => [ 'shape' => 'TopicRulePayload', ],
			],
			'payload'  => 'topicRulePayload',
		],
		'ReportType'                                => [ 'type' => 'string', 'enum' => [ 'ERRORS', 'RESULTS', ], ],
		'RepublishAction'                           => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'topic', ],
			'members'  => [
				'roleArn' => [ 'shape' => 'AwsArn', ],
				'topic'   => [ 'shape' => 'TopicPattern', ],
			],
		],
		'Resource'                                  => [ 'type' => 'string', ],
		'ResourceAlreadyExistsException'            => [
			'type'      => 'structure',
			'members'   => [
				'message'     => [ 'shape' => 'errorMessage', ],
				'resourceId'  => [ 'shape' => 'resourceId', ],
				'resourceArn' => [ 'shape' => 'resourceArn', ],
			],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'ResourceArn'                               => [ 'type' => 'string', ],
		'ResourceArns'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'ResourceLogicalId', ],
			'value' => [ 'shape' => 'ResourceArn', ],
		],
		'ResourceIdentifier'                        => [
			'type'    => 'structure',
			'members' => [
				'deviceCertificateId'     => [ 'shape' => 'CertificateId', ],
				'caCertificateId'         => [ 'shape' => 'CertificateId', ],
				'cognitoIdentityPoolId'   => [ 'shape' => 'CognitoIdentityPoolId', ],
				'clientId'                => [ 'shape' => 'ClientId', ],
				'policyVersionIdentifier' => [ 'shape' => 'PolicyVersionIdentifier', ],
				'account'                 => [ 'shape' => 'AwsAccountId', ],
			],
		],
		'ResourceLogicalId'                         => [ 'type' => 'string', ],
		'ResourceNotFoundException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'ResourceRegistrationFailureException'      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ResourceType'                              => [
			'type' => 'string',
			'enum' => [
				'DEVICE_CERTIFICATE',
				'CA_CERTIFICATE',
				'IOT_POLICY',
				'COGNITO_IDENTITY_POOL',
				'CLIENT_ID',
				'ACCOUNT_SETTINGS',
			],
		],
		'Resources'                                 => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
		'RoleAlias'                                 => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w=,@-]+',
		],
		'RoleAliasArn'                              => [ 'type' => 'string', ],
		'RoleAliasDescription'                      => [
			'type'    => 'structure',
			'members' => [
				'roleAlias'                 => [ 'shape' => 'RoleAlias', ],
				'roleAliasArn'              => [ 'shape' => 'RoleAliasArn', ],
				'roleArn'                   => [ 'shape' => 'RoleArn', ],
				'owner'                     => [ 'shape' => 'AwsAccountId', ],
				'credentialDurationSeconds' => [ 'shape' => 'CredentialDurationSeconds', ],
				'creationDate'              => [ 'shape' => 'DateType', ],
				'lastModifiedDate'          => [ 'shape' => 'DateType', ],
			],
		],
		'RoleAliases'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleAlias', ], ],
		'RoleArn'                                   => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ],
		'RolloutRatePerMinute'                      => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'RuleArn'                                   => [ 'type' => 'string', ],
		'RuleName'                                  => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^[a-zA-Z0-9_]+$',
		],
		'S3Action'                                  => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'bucketName', 'key', ],
			'members'  => [
				'roleArn'    => [ 'shape' => 'AwsArn', ],
				'bucketName' => [ 'shape' => 'BucketName', ],
				'key'        => [ 'shape' => 'Key', ],
				'cannedAcl'  => [ 'shape' => 'CannedAccessControlList', ],
			],
		],
		'S3Bucket'                                  => [ 'type' => 'string', 'min' => 1, ],
		'S3Destination'                             => [
			'type'    => 'structure',
			'members' => [
				'bucket' => [ 'shape' => 'S3Bucket', ],
				'prefix' => [ 'shape' => 'Prefix', ],
			],
		],
		'S3FileUrl'                                 => [ 'type' => 'string', 'max' => 65535, ],
		'S3FileUrlList'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'S3FileUrl', ], ],
		'S3Key'                                     => [ 'type' => 'string', 'min' => 1, ],
		'S3Location'                                => [
			'type'    => 'structure',
			'members' => [
				'bucket'  => [ 'shape' => 'S3Bucket', ],
				'key'     => [ 'shape' => 'S3Key', ],
				'version' => [ 'shape' => 'S3Version', ],
			],
		],
		'S3Version'                                 => [ 'type' => 'string', ],
		'SQL'                                       => [ 'type' => 'string', ],
		'SalesforceAction'                          => [
			'type'     => 'structure',
			'required' => [ 'token', 'url', ],
			'members'  => [
				'token' => [ 'shape' => 'SalesforceToken', ],
				'url'   => [ 'shape' => 'SalesforceEndpoint', ],
			],
		],
		'SalesforceEndpoint'                        => [
			'type'    => 'string',
			'max'     => 2000,
			'pattern' => 'https://ingestion-[a-zA-Z0-9]{1,12}\\.[a-zA-Z0-9]+\\.((sfdc-matrix\\.net)|(sfdcnow\\.com))/streams/\\w{1,20}/\\w{1,20}/event',
		],
		'SalesforceToken'                           => [ 'type' => 'string', 'min' => 40, ],
		'ScheduledAuditArn'                         => [ 'type' => 'string', ],
		'ScheduledAuditMetadata'                    => [
			'type'    => 'structure',
			'members' => [
				'scheduledAuditName' => [ 'shape' => 'ScheduledAuditName', ],
				'scheduledAuditArn'  => [ 'shape' => 'ScheduledAuditArn', ],
				'frequency'          => [ 'shape' => 'AuditFrequency', ],
				'dayOfMonth'         => [ 'shape' => 'DayOfMonth', ],
				'dayOfWeek'          => [ 'shape' => 'DayOfWeek', ],
			],
		],
		'ScheduledAuditMetadataList'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ScheduledAuditMetadata', ],
		],
		'ScheduledAuditName'                        => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'SearchIndexRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'queryString', ],
			'members'  => [
				'indexName'    => [ 'shape' => 'IndexName', ],
				'queryString'  => [ 'shape' => 'QueryString', ],
				'nextToken'    => [ 'shape' => 'NextToken', ],
				'maxResults'   => [ 'shape' => 'QueryMaxResults', ],
				'queryVersion' => [ 'shape' => 'QueryVersion', ],
			],
		],
		'SearchIndexResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'nextToken'   => [ 'shape' => 'NextToken', ],
				'things'      => [ 'shape' => 'ThingDocumentList', ],
				'thingGroups' => [ 'shape' => 'ThingGroupDocumentList', ],
			],
		],
		'SearchableAttributes'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AttributeName', ],
		],
		'Seconds'                                   => [ 'type' => 'integer', ],
		'SecurityProfileArn'                        => [ 'type' => 'string', ],
		'SecurityProfileDescription'                => [
			'type'    => 'string',
			'max'     => 1000,
			'pattern' => '[\\p{Graph}\\x20]*',
		],
		'SecurityProfileIdentifier'                 => [
			'type'     => 'structure',
			'required' => [ 'name', 'arn', ],
			'members'  => [
				'name' => [ 'shape' => 'SecurityProfileName', ],
				'arn'  => [ 'shape' => 'SecurityProfileArn', ],
			],
		],
		'SecurityProfileIdentifiers'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityProfileIdentifier', ],
		],
		'SecurityProfileName'                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'SecurityProfileTarget'                     => [
			'type'     => 'structure',
			'required' => [ 'arn', ],
			'members'  => [ 'arn' => [ 'shape' => 'SecurityProfileTargetArn', ], ],
		],
		'SecurityProfileTargetArn'                  => [ 'type' => 'string', ],
		'SecurityProfileTargetMapping'              => [
			'type'    => 'structure',
			'members' => [
				'securityProfileIdentifier' => [ 'shape' => 'SecurityProfileIdentifier', ],
				'target'                    => [ 'shape' => 'SecurityProfileTarget', ],
			],
		],
		'SecurityProfileTargetMappings'             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityProfileTargetMapping', ],
		],
		'SecurityProfileTargets'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityProfileTarget', ],
		],
		'ServiceUnavailableException'               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'fault'     => true,
		],
		'SetAsActive'                               => [ 'type' => 'boolean', ],
		'SetAsActiveFlag'                           => [ 'type' => 'boolean', ],
		'SetAsDefault'                              => [ 'type' => 'boolean', ],
		'SetDefaultAuthorizerRequest'               => [
			'type'     => 'structure',
			'required' => [ 'authorizerName', ],
			'members'  => [ 'authorizerName' => [ 'shape' => 'AuthorizerName', ], ],
		],
		'SetDefaultAuthorizerResponse'              => [
			'type'    => 'structure',
			'members' => [
				'authorizerName' => [ 'shape' => 'AuthorizerName', ],
				'authorizerArn'  => [ 'shape' => 'AuthorizerArn', ],
			],
		],
		'SetDefaultPolicyVersionRequest'            => [
			'type'     => 'structure',
			'required' => [ 'policyName', 'policyVersionId', ],
			'members'  => [
				'policyName'      => [
					'shape'        => 'PolicyName',
					'location'     => 'uri',
					'locationName' => 'policyName',
				],
				'policyVersionId' => [
					'shape'        => 'PolicyVersionId',
					'location'     => 'uri',
					'locationName' => 'policyVersionId',
				],
			],
		],
		'SetLoggingOptionsRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'loggingOptionsPayload', ],
			'members'  => [ 'loggingOptionsPayload' => [ 'shape' => 'LoggingOptionsPayload', ], ],
			'payload'  => 'loggingOptionsPayload',
		],
		'SetV2LoggingLevelRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'logTarget', 'logLevel', ],
			'members'  => [
				'logTarget' => [ 'shape' => 'LogTarget', ],
				'logLevel'  => [ 'shape' => 'LogLevel', ],
			],
		],
		'SetV2LoggingOptionsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'roleArn'         => [ 'shape' => 'AwsArn', ],
				'defaultLogLevel' => [ 'shape' => 'LogLevel', ],
				'disableAllLogs'  => [ 'shape' => 'DisableAllLogs', ],
			],
		],
		'Signature'                                 => [ 'type' => 'blob', ],
		'SignatureAlgorithm'                        => [ 'type' => 'string', ],
		'SigningJobId'                              => [ 'type' => 'string', ],
		'SigningProfileName'                        => [ 'type' => 'string', ],
		'SigningProfileParameter'                   => [
			'type'    => 'structure',
			'members' => [
				'certificateArn'          => [ 'shape' => 'CertificateArn', ],
				'platform'                => [ 'shape' => 'Platform', ],
				'certificatePathOnDevice' => [ 'shape' => 'CertificatePathOnDevice', ],
			],
		],
		'SkyfallMaxResults'                         => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ],
		'SnsAction'                                 => [
			'type'     => 'structure',
			'required' => [ 'targetArn', 'roleArn', ],
			'members'  => [
				'targetArn'     => [ 'shape' => 'AwsArn', ],
				'roleArn'       => [ 'shape' => 'AwsArn', ],
				'messageFormat' => [ 'shape' => 'MessageFormat', ],
			],
		],
		'SqlParseException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'SqsAction'                                 => [
			'type'     => 'structure',
			'required' => [ 'roleArn', 'queueUrl', ],
			'members'  => [
				'roleArn'   => [ 'shape' => 'AwsArn', ],
				'queueUrl'  => [ 'shape' => 'QueueUrl', ],
				'useBase64' => [ 'shape' => 'UseBase64', ],
			],
		],
		'StartOnDemandAuditTaskRequest'             => [
			'type'     => 'structure',
			'required' => [ 'targetCheckNames', ],
			'members'  => [ 'targetCheckNames' => [ 'shape' => 'TargetAuditCheckNames', ], ],
		],
		'StartOnDemandAuditTaskResponse'            => [
			'type'    => 'structure',
			'members' => [ 'taskId' => [ 'shape' => 'AuditTaskId', ], ],
		],
		'StartSigningJobParameter'                  => [
			'type'    => 'structure',
			'members' => [
				'signingProfileParameter' => [ 'shape' => 'SigningProfileParameter', ],
				'signingProfileName'      => [ 'shape' => 'SigningProfileName', ],
				'destination'             => [ 'shape' => 'Destination', ],
			],
		],
		'StartThingRegistrationTaskRequest'         => [
			'type'     => 'structure',
			'required' => [
				'templateBody',
				'inputFileBucket',
				'inputFileKey',
				'roleArn',
			],
			'members'  => [
				'templateBody'    => [ 'shape' => 'TemplateBody', ],
				'inputFileBucket' => [ 'shape' => 'RegistryS3BucketName', ],
				'inputFileKey'    => [ 'shape' => 'RegistryS3KeyName', ],
				'roleArn'         => [ 'shape' => 'RoleArn', ],
			],
		],
		'StartThingRegistrationTaskResponse'        => [
			'type'    => 'structure',
			'members' => [ 'taskId' => [ 'shape' => 'TaskId', ], ],
		],
		'StateMachineName'                          => [ 'type' => 'string', ],
		'StateReason'                               => [ 'type' => 'string', ],
		'StateValue'                                => [ 'type' => 'string', ],
		'StatisticalThreshold'                      => [
			'type'    => 'structure',
			'members' => [ 'statistic' => [ 'shape' => 'EvaluationStatistic', ], ],
		],
		'Statistics'                                => [
			'type'    => 'structure',
			'members' => [ 'count' => [ 'shape' => 'Count', ], ],
		],
		'Status'                                    => [
			'type' => 'string',
			'enum' => [
				'InProgress',
				'Completed',
				'Failed',
				'Cancelled',
				'Cancelling',
			],
		],
		'StepFunctionsAction'                       => [
			'type'     => 'structure',
			'required' => [ 'stateMachineName', 'roleArn', ],
			'members'  => [
				'executionNamePrefix' => [ 'shape' => 'ExecutionNamePrefix', ],
				'stateMachineName'    => [ 'shape' => 'StateMachineName', ],
				'roleArn'             => [ 'shape' => 'AwsArn', ],
			],
		],
		'StopThingRegistrationTaskRequest'          => [
			'type'     => 'structure',
			'required' => [ 'taskId', ],
			'members'  => [
				'taskId' => [
					'shape'        => 'TaskId',
					'location'     => 'uri',
					'locationName' => 'taskId',
				],
			],
		],
		'StopThingRegistrationTaskResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'Stream'                                    => [
			'type'    => 'structure',
			'members' => [
				'streamId' => [ 'shape' => 'StreamId', ],
				'fileId'   => [ 'shape' => 'FileId', ],
			],
		],
		'StreamArn'                                 => [ 'type' => 'string', ],
		'StreamDescription'                         => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[^\\p{C}]+',
		],
		'StreamFile'                                => [
			'type'    => 'structure',
			'members' => [
				'fileId'     => [ 'shape' => 'FileId', ],
				's3Location' => [ 'shape' => 'S3Location', ],
			],
		],
		'StreamFiles'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StreamFile', ],
			'max'    => 50,
			'min'    => 1,
		],
		'StreamId'                                  => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'StreamInfo'                                => [
			'type'    => 'structure',
			'members' => [
				'streamId'      => [ 'shape' => 'StreamId', ],
				'streamArn'     => [ 'shape' => 'StreamArn', ],
				'streamVersion' => [ 'shape' => 'StreamVersion', ],
				'description'   => [ 'shape' => 'StreamDescription', ],
				'files'         => [ 'shape' => 'StreamFiles', ],
				'createdAt'     => [ 'shape' => 'DateType', ],
				'lastUpdatedAt' => [ 'shape' => 'DateType', ],
				'roleArn'       => [ 'shape' => 'RoleArn', ],
			],
		],
		'StreamName'                                => [ 'type' => 'string', ],
		'StreamSummary'                             => [
			'type'    => 'structure',
			'members' => [
				'streamId'      => [ 'shape' => 'StreamId', ],
				'streamArn'     => [ 'shape' => 'StreamArn', ],
				'streamVersion' => [ 'shape' => 'StreamVersion', ],
				'description'   => [ 'shape' => 'StreamDescription', ],
			],
		],
		'StreamVersion'                             => [ 'type' => 'integer', 'max' => 65535, 'min' => 0, ],
		'StreamsSummary'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StreamSummary', ],
		],
		'String'                                    => [ 'type' => 'string', ],
		'StringMap'                                 => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'String', ],
		],
		'SucceededThings'                           => [ 'type' => 'integer', ],
		'TableName'                                 => [ 'type' => 'string', ],
		'Tag'                                       => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                    => [ 'type' => 'string', ],
		'TagKeyList'                                => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ],
		'TagList'                                   => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagResourceRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tags', ],
			'members'  => [
				'resourceArn' => [ 'shape' => 'ResourceArn', ],
				'tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagResourceResponse'                       => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                  => [ 'type' => 'string', ],
		'Target'                                    => [ 'type' => 'string', ],
		'TargetArn'                                 => [ 'type' => 'string', ],
		'TargetAuditCheckNames'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AuditCheckName', ],
		],
		'TargetSelection'                           => [ 'type' => 'string', 'enum' => [ 'CONTINUOUS', 'SNAPSHOT', ], ],
		'Targets'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Target', ],
			'min'    => 1,
		],
		'TaskId'                                    => [ 'type' => 'string', 'max' => 40, ],
		'TaskIdList'                                => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskId', ], ],
		'TaskStatistics'                            => [
			'type'    => 'structure',
			'members' => [
				'totalChecks'                    => [ 'shape' => 'TotalChecksCount', ],
				'inProgressChecks'               => [ 'shape' => 'InProgressChecksCount', ],
				'waitingForDataCollectionChecks' => [ 'shape' => 'WaitingForDataCollectionChecksCount', ],
				'compliantChecks'                => [ 'shape' => 'CompliantChecksCount', ],
				'nonCompliantChecks'             => [ 'shape' => 'NonCompliantChecksCount', ],
				'failedChecks'                   => [ 'shape' => 'FailedChecksCount', ],
				'canceledChecks'                 => [ 'shape' => 'CanceledChecksCount', ],
			],
		],
		'TemplateBody'                              => [ 'type' => 'string', ],
		'TestAuthorizationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'authInfos', ],
			'members'  => [
				'principal'             => [ 'shape' => 'Principal', ],
				'cognitoIdentityPoolId' => [ 'shape' => 'CognitoIdentityPoolId', ],
				'authInfos'             => [ 'shape' => 'AuthInfos', ],
				'clientId'              => [
					'shape'        => 'ClientId',
					'location'     => 'querystring',
					'locationName' => 'clientId',
				],
				'policyNamesToAdd'      => [ 'shape' => 'PolicyNames', ],
				'policyNamesToSkip'     => [ 'shape' => 'PolicyNames', ],
			],
		],
		'TestAuthorizationResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'authResults' => [ 'shape' => 'AuthResults', ], ],
		],
		'TestInvokeAuthorizerRequest'               => [
			'type'     => 'structure',
			'required' => [ 'authorizerName', 'token', 'tokenSignature', ],
			'members'  => [
				'authorizerName' => [
					'shape'        => 'AuthorizerName',
					'location'     => 'uri',
					'locationName' => 'authorizerName',
				],
				'token'          => [ 'shape' => 'Token', ],
				'tokenSignature' => [ 'shape' => 'TokenSignature', ],
			],
		],
		'TestInvokeAuthorizerResponse'              => [
			'type'    => 'structure',
			'members' => [
				'isAuthenticated'          => [ 'shape' => 'IsAuthenticated', ],
				'principalId'              => [ 'shape' => 'PrincipalId', ],
				'policyDocuments'          => [ 'shape' => 'PolicyDocuments', ],
				'refreshAfterInSeconds'    => [ 'shape' => 'Seconds', ],
				'disconnectAfterInSeconds' => [ 'shape' => 'Seconds', ],
			],
		],
		'ThingArn'                                  => [ 'type' => 'string', ],
		'ThingAttribute'                            => [
			'type'    => 'structure',
			'members' => [
				'thingName'     => [ 'shape' => 'ThingName', ],
				'thingTypeName' => [ 'shape' => 'ThingTypeName', ],
				'thingArn'      => [ 'shape' => 'ThingArn', ],
				'attributes'    => [ 'shape' => 'Attributes', ],
				'version'       => [ 'shape' => 'Version', ],
			],
		],
		'ThingAttributeList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingAttribute', ],
		],
		'ThingConnectivity'                         => [
			'type'    => 'structure',
			'members' => [
				'connected' => [ 'shape' => 'Boolean', ],
				'timestamp' => [ 'shape' => 'ConnectivityTimestamp', ],
			],
		],
		'ThingConnectivityIndexingMode'             => [ 'type' => 'string', 'enum' => [ 'OFF', 'STATUS', ], ],
		'ThingDocument'                             => [
			'type'    => 'structure',
			'members' => [
				'thingName'       => [ 'shape' => 'ThingName', ],
				'thingId'         => [ 'shape' => 'ThingId', ],
				'thingTypeName'   => [ 'shape' => 'ThingTypeName', ],
				'thingGroupNames' => [ 'shape' => 'ThingGroupNameList', ],
				'attributes'      => [ 'shape' => 'Attributes', ],
				'shadow'          => [ 'shape' => 'JsonDocument', ],
				'connectivity'    => [ 'shape' => 'ThingConnectivity', ],
			],
		],
		'ThingDocumentList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingDocument', ],
		],
		'ThingGroupArn'                             => [ 'type' => 'string', ],
		'ThingGroupDescription'                     => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[\\p{Graph}\\x20]*',
		],
		'ThingGroupDocument'                        => [
			'type'    => 'structure',
			'members' => [
				'thingGroupName'        => [ 'shape' => 'ThingGroupName', ],
				'thingGroupId'          => [ 'shape' => 'ThingGroupId', ],
				'thingGroupDescription' => [ 'shape' => 'ThingGroupDescription', ],
				'attributes'            => [ 'shape' => 'Attributes', ],
				'parentGroupNames'      => [ 'shape' => 'ThingGroupNameList', ],
			],
		],
		'ThingGroupDocumentList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingGroupDocument', ],
		],
		'ThingGroupId'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9\\-]+',
		],
		'ThingGroupIndexingConfiguration'           => [
			'type'     => 'structure',
			'required' => [ 'thingGroupIndexingMode', ],
			'members'  => [ 'thingGroupIndexingMode' => [ 'shape' => 'ThingGroupIndexingMode', ], ],
		],
		'ThingGroupIndexingMode'                    => [ 'type' => 'string', 'enum' => [ 'OFF', 'ON', ], ],
		'ThingGroupList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingGroupName', ],
		],
		'ThingGroupMetadata'                        => [
			'type'    => 'structure',
			'members' => [
				'parentGroupName'         => [ 'shape' => 'ThingGroupName', ],
				'rootToParentThingGroups' => [ 'shape' => 'ThingGroupNameAndArnList', ],
				'creationDate'            => [ 'shape' => 'CreationDate', ],
			],
		],
		'ThingGroupName'                            => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'ThingGroupNameAndArnList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GroupNameAndArn', ],
		],
		'ThingGroupNameList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingGroupName', ],
		],
		'ThingGroupProperties'                      => [
			'type'    => 'structure',
			'members' => [
				'thingGroupDescription' => [ 'shape' => 'ThingGroupDescription', ],
				'attributePayload'      => [ 'shape' => 'AttributePayload', ],
			],
		],
		'ThingId'                                   => [ 'type' => 'string', ],
		'ThingIndexingConfiguration'                => [
			'type'     => 'structure',
			'required' => [ 'thingIndexingMode', ],
			'members'  => [
				'thingIndexingMode'             => [ 'shape' => 'ThingIndexingMode', ],
				'thingConnectivityIndexingMode' => [ 'shape' => 'ThingConnectivityIndexingMode', ],
			],
		],
		'ThingIndexingMode'                         => [
			'type' => 'string',
			'enum' => [ 'OFF', 'REGISTRY', 'REGISTRY_AND_SHADOW', ],
		],
		'ThingName'                                 => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'ThingNameList'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'ThingName', ], ],
		'ThingTypeArn'                              => [ 'type' => 'string', ],
		'ThingTypeDefinition'                       => [
			'type'    => 'structure',
			'members' => [
				'thingTypeName'       => [ 'shape' => 'ThingTypeName', ],
				'thingTypeArn'        => [ 'shape' => 'ThingTypeArn', ],
				'thingTypeProperties' => [ 'shape' => 'ThingTypeProperties', ],
				'thingTypeMetadata'   => [ 'shape' => 'ThingTypeMetadata', ],
			],
		],
		'ThingTypeDescription'                      => [
			'type'    => 'string',
			'max'     => 2028,
			'pattern' => '[\\p{Graph}\\x20]*',
		],
		'ThingTypeId'                               => [ 'type' => 'string', ],
		'ThingTypeList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThingTypeDefinition', ],
		],
		'ThingTypeMetadata'                         => [
			'type'    => 'structure',
			'members' => [
				'deprecated'      => [ 'shape' => 'Boolean', ],
				'deprecationDate' => [ 'shape' => 'DeprecationDate', ],
				'creationDate'    => [ 'shape' => 'CreationDate', ],
			],
		],
		'ThingTypeName'                             => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9:_-]+',
		],
		'ThingTypeProperties'                       => [
			'type'    => 'structure',
			'members' => [
				'thingTypeDescription' => [ 'shape' => 'ThingTypeDescription', ],
				'searchableAttributes' => [ 'shape' => 'SearchableAttributes', ],
			],
		],
		'ThrottlingException'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'TimedOutThings'                            => [ 'type' => 'integer', ],
		'TimeoutConfig'                             => [
			'type'    => 'structure',
			'members' => [ 'inProgressTimeoutInMinutes' => [ 'shape' => 'InProgressTimeoutInMinutes', ], ],
		],
		'Timestamp'                                 => [ 'type' => 'timestamp', ],
		'Token'                                     => [ 'type' => 'string', 'max' => 6144, 'min' => 1, ],
		'TokenKeyName'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'TokenSignature'                            => [
			'type'    => 'string',
			'max'     => 2560,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9+/]+={0,2}',
		],
		'Topic'                                     => [ 'type' => 'string', ],
		'TopicPattern'                              => [ 'type' => 'string', ],
		'TopicRule'                                 => [
			'type'    => 'structure',
			'members' => [
				'ruleName'         => [ 'shape' => 'RuleName', ],
				'sql'              => [ 'shape' => 'SQL', ],
				'description'      => [ 'shape' => 'Description', ],
				'createdAt'        => [ 'shape' => 'CreatedAtDate', ],
				'actions'          => [ 'shape' => 'ActionList', ],
				'ruleDisabled'     => [ 'shape' => 'IsDisabled', ],
				'awsIotSqlVersion' => [ 'shape' => 'AwsIotSqlVersion', ],
				'errorAction'      => [ 'shape' => 'Action', ],
			],
		],
		'TopicRuleList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TopicRuleListItem', ],
		],
		'TopicRuleListItem'                         => [
			'type'    => 'structure',
			'members' => [
				'ruleArn'      => [ 'shape' => 'RuleArn', ],
				'ruleName'     => [ 'shape' => 'RuleName', ],
				'topicPattern' => [ 'shape' => 'TopicPattern', ],
				'createdAt'    => [ 'shape' => 'CreatedAtDate', ],
				'ruleDisabled' => [ 'shape' => 'IsDisabled', ],
			],
		],
		'TopicRulePayload'                          => [
			'type'     => 'structure',
			'required' => [ 'sql', 'actions', ],
			'members'  => [
				'sql'              => [ 'shape' => 'SQL', ],
				'description'      => [ 'shape' => 'Description', ],
				'actions'          => [ 'shape' => 'ActionList', ],
				'ruleDisabled'     => [ 'shape' => 'IsDisabled', ],
				'awsIotSqlVersion' => [ 'shape' => 'AwsIotSqlVersion', ],
				'errorAction'      => [ 'shape' => 'Action', ],
			],
		],
		'TotalChecksCount'                          => [ 'type' => 'integer', ],
		'TotalResourcesCount'                       => [ 'type' => 'long', ],
		'TransferAlreadyCompletedException'         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 410, ],
			'exception' => true,
		],
		'TransferCertificateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'certificateId', 'targetAwsAccount', ],
			'members'  => [
				'certificateId'    => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
				'targetAwsAccount' => [
					'shape'        => 'AwsAccountId',
					'location'     => 'querystring',
					'locationName' => 'targetAwsAccount',
				],
				'transferMessage'  => [ 'shape' => 'Message', ],
			],
		],
		'TransferCertificateResponse'               => [
			'type'    => 'structure',
			'members' => [ 'transferredCertificateArn' => [ 'shape' => 'CertificateArn', ], ],
		],
		'TransferConflictException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'TransferData'                              => [
			'type'    => 'structure',
			'members' => [
				'transferMessage' => [ 'shape' => 'Message', ],
				'rejectReason'    => [ 'shape' => 'Message', ],
				'transferDate'    => [ 'shape' => 'DateType', ],
				'acceptDate'      => [ 'shape' => 'DateType', ],
				'rejectDate'      => [ 'shape' => 'DateType', ],
			],
		],
		'UnauthorizedException'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UndoDeprecate'                             => [ 'type' => 'boolean', ],
		'UnsignedLong'                              => [ 'type' => 'long', 'min' => 0, ],
		'UntagResourceRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tagKeys', ],
			'members'  => [
				'resourceArn' => [ 'shape' => 'ResourceArn', ],
				'tagKeys'     => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UntagResourceResponse'                     => [ 'type' => 'structure', 'members' => [], ],
		'UpdateAccountAuditConfigurationRequest'    => [
			'type'    => 'structure',
			'members' => [
				'roleArn'                               => [ 'shape' => 'RoleArn', ],
				'auditNotificationTargetConfigurations' => [ 'shape' => 'AuditNotificationTargetConfigurations', ],
				'auditCheckConfigurations'              => [ 'shape' => 'AuditCheckConfigurations', ],
			],
		],
		'UpdateAccountAuditConfigurationResponse'   => [ 'type' => 'structure', 'members' => [], ],
		'UpdateAuthorizerRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'authorizerName', ],
			'members'  => [
				'authorizerName'         => [
					'shape'        => 'AuthorizerName',
					'location'     => 'uri',
					'locationName' => 'authorizerName',
				],
				'authorizerFunctionArn'  => [ 'shape' => 'AuthorizerFunctionArn', ],
				'tokenKeyName'           => [ 'shape' => 'TokenKeyName', ],
				'tokenSigningPublicKeys' => [ 'shape' => 'PublicKeyMap', ],
				'status'                 => [ 'shape' => 'AuthorizerStatus', ],
			],
		],
		'UpdateAuthorizerResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'authorizerName' => [ 'shape' => 'AuthorizerName', ],
				'authorizerArn'  => [ 'shape' => 'AuthorizerArn', ],
			],
		],
		'UpdateBillingGroupRequest'                 => [
			'type'     => 'structure',
			'required' => [
				'billingGroupName',
				'billingGroupProperties',
			],
			'members'  => [
				'billingGroupName'       => [
					'shape'        => 'BillingGroupName',
					'location'     => 'uri',
					'locationName' => 'billingGroupName',
				],
				'billingGroupProperties' => [ 'shape' => 'BillingGroupProperties', ],
				'expectedVersion'        => [ 'shape' => 'OptionalVersion', ],
			],
		],
		'UpdateBillingGroupResponse'                => [
			'type'    => 'structure',
			'members' => [ 'version' => [ 'shape' => 'Version', ], ],
		],
		'UpdateCACertificateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'certificateId', ],
			'members'  => [
				'certificateId'             => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'caCertificateId',
				],
				'newStatus'                 => [
					'shape'        => 'CACertificateStatus',
					'location'     => 'querystring',
					'locationName' => 'newStatus',
				],
				'newAutoRegistrationStatus' => [
					'shape'        => 'AutoRegistrationStatus',
					'location'     => 'querystring',
					'locationName' => 'newAutoRegistrationStatus',
				],
				'registrationConfig'        => [ 'shape' => 'RegistrationConfig', ],
				'removeAutoRegistration'    => [ 'shape' => 'RemoveAutoRegistration', ],
			],
		],
		'UpdateCertificateRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'certificateId', 'newStatus', ],
			'members'  => [
				'certificateId' => [
					'shape'        => 'CertificateId',
					'location'     => 'uri',
					'locationName' => 'certificateId',
				],
				'newStatus'     => [
					'shape'        => 'CertificateStatus',
					'location'     => 'querystring',
					'locationName' => 'newStatus',
				],
			],
		],
		'UpdateDynamicThingGroupRequest'            => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', 'thingGroupProperties', ],
			'members'  => [
				'thingGroupName'       => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'thingGroupProperties' => [ 'shape' => 'ThingGroupProperties', ],
				'expectedVersion'      => [ 'shape' => 'OptionalVersion', ],
				'indexName'            => [ 'shape' => 'IndexName', ],
				'queryString'          => [ 'shape' => 'QueryString', ],
				'queryVersion'         => [ 'shape' => 'QueryVersion', ],
			],
		],
		'UpdateDynamicThingGroupResponse'           => [
			'type'    => 'structure',
			'members' => [ 'version' => [ 'shape' => 'Version', ], ],
		],
		'UpdateEventConfigurationsRequest'          => [
			'type'    => 'structure',
			'members' => [ 'eventConfigurations' => [ 'shape' => 'EventConfigurations', ], ],
		],
		'UpdateEventConfigurationsResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'UpdateIndexingConfigurationRequest'        => [
			'type'    => 'structure',
			'members' => [
				'thingIndexingConfiguration'      => [ 'shape' => 'ThingIndexingConfiguration', ],
				'thingGroupIndexingConfiguration' => [ 'shape' => 'ThingGroupIndexingConfiguration', ],
			],
		],
		'UpdateIndexingConfigurationResponse'       => [ 'type' => 'structure', 'members' => [], ],
		'UpdateJobRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId'                      => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'jobId',
				],
				'description'                => [ 'shape' => 'JobDescription', ],
				'presignedUrlConfig'         => [ 'shape' => 'PresignedUrlConfig', ],
				'jobExecutionsRolloutConfig' => [ 'shape' => 'JobExecutionsRolloutConfig', ],
				'abortConfig'                => [ 'shape' => 'AbortConfig', ],
				'timeoutConfig'              => [ 'shape' => 'TimeoutConfig', ],
			],
		],
		'UpdateRoleAliasRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'roleAlias', ],
			'members'  => [
				'roleAlias'                 => [
					'shape'        => 'RoleAlias',
					'location'     => 'uri',
					'locationName' => 'roleAlias',
				],
				'roleArn'                   => [ 'shape' => 'RoleArn', ],
				'credentialDurationSeconds' => [ 'shape' => 'CredentialDurationSeconds', ],
			],
		],
		'UpdateRoleAliasResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'roleAlias'    => [ 'shape' => 'RoleAlias', ],
				'roleAliasArn' => [ 'shape' => 'RoleAliasArn', ],
			],
		],
		'UpdateScheduledAuditRequest'               => [
			'type'     => 'structure',
			'required' => [ 'scheduledAuditName', ],
			'members'  => [
				'frequency'          => [ 'shape' => 'AuditFrequency', ],
				'dayOfMonth'         => [ 'shape' => 'DayOfMonth', ],
				'dayOfWeek'          => [ 'shape' => 'DayOfWeek', ],
				'targetCheckNames'   => [ 'shape' => 'TargetAuditCheckNames', ],
				'scheduledAuditName' => [
					'shape'        => 'ScheduledAuditName',
					'location'     => 'uri',
					'locationName' => 'scheduledAuditName',
				],
			],
		],
		'UpdateScheduledAuditResponse'              => [
			'type'    => 'structure',
			'members' => [ 'scheduledAuditArn' => [ 'shape' => 'ScheduledAuditArn', ], ],
		],
		'UpdateSecurityProfileRequest'              => [
			'type'     => 'structure',
			'required' => [ 'securityProfileName', ],
			'members'  => [
				'securityProfileName'             => [
					'shape'        => 'SecurityProfileName',
					'location'     => 'uri',
					'locationName' => 'securityProfileName',
				],
				'securityProfileDescription'      => [ 'shape' => 'SecurityProfileDescription', ],
				'behaviors'                       => [ 'shape' => 'Behaviors', ],
				'alertTargets'                    => [ 'shape' => 'AlertTargets', ],
				'additionalMetricsToRetain'       => [ 'shape' => 'AdditionalMetricsToRetainList', ],
				'deleteBehaviors'                 => [ 'shape' => 'DeleteBehaviors', ],
				'deleteAlertTargets'              => [ 'shape' => 'DeleteAlertTargets', ],
				'deleteAdditionalMetricsToRetain' => [ 'shape' => 'DeleteAdditionalMetricsToRetain', ],
				'expectedVersion'                 => [
					'shape'        => 'OptionalVersion',
					'location'     => 'querystring',
					'locationName' => 'expectedVersion',
				],
			],
		],
		'UpdateSecurityProfileResponse'             => [
			'type'    => 'structure',
			'members' => [
				'securityProfileName'        => [ 'shape' => 'SecurityProfileName', ],
				'securityProfileArn'         => [ 'shape' => 'SecurityProfileArn', ],
				'securityProfileDescription' => [ 'shape' => 'SecurityProfileDescription', ],
				'behaviors'                  => [ 'shape' => 'Behaviors', ],
				'alertTargets'               => [ 'shape' => 'AlertTargets', ],
				'additionalMetricsToRetain'  => [ 'shape' => 'AdditionalMetricsToRetainList', ],
				'version'                    => [ 'shape' => 'Version', ],
				'creationDate'               => [ 'shape' => 'Timestamp', ],
				'lastModifiedDate'           => [ 'shape' => 'Timestamp', ],
			],
		],
		'UpdateStreamRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'streamId', ],
			'members'  => [
				'streamId'    => [
					'shape'        => 'StreamId',
					'location'     => 'uri',
					'locationName' => 'streamId',
				],
				'description' => [ 'shape' => 'StreamDescription', ],
				'files'       => [ 'shape' => 'StreamFiles', ],
				'roleArn'     => [ 'shape' => 'RoleArn', ],
			],
		],
		'UpdateStreamResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'streamId'      => [ 'shape' => 'StreamId', ],
				'streamArn'     => [ 'shape' => 'StreamArn', ],
				'description'   => [ 'shape' => 'StreamDescription', ],
				'streamVersion' => [ 'shape' => 'StreamVersion', ],
			],
		],
		'UpdateThingGroupRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'thingGroupName', 'thingGroupProperties', ],
			'members'  => [
				'thingGroupName'       => [
					'shape'        => 'ThingGroupName',
					'location'     => 'uri',
					'locationName' => 'thingGroupName',
				],
				'thingGroupProperties' => [ 'shape' => 'ThingGroupProperties', ],
				'expectedVersion'      => [ 'shape' => 'OptionalVersion', ],
			],
		],
		'UpdateThingGroupResponse'                  => [
			'type'    => 'structure',
			'members' => [ 'version' => [ 'shape' => 'Version', ], ],
		],
		'UpdateThingGroupsForThingRequest'          => [
			'type'    => 'structure',
			'members' => [
				'thingName'             => [ 'shape' => 'ThingName', ],
				'thingGroupsToAdd'      => [ 'shape' => 'ThingGroupList', ],
				'thingGroupsToRemove'   => [ 'shape' => 'ThingGroupList', ],
				'overrideDynamicGroups' => [ 'shape' => 'OverrideDynamicGroups', ],
			],
		],
		'UpdateThingGroupsForThingResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'UpdateThingRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'thingName', ],
			'members'  => [
				'thingName'        => [
					'shape'        => 'ThingName',
					'location'     => 'uri',
					'locationName' => 'thingName',
				],
				'thingTypeName'    => [ 'shape' => 'ThingTypeName', ],
				'attributePayload' => [ 'shape' => 'AttributePayload', ],
				'expectedVersion'  => [ 'shape' => 'OptionalVersion', ],
				'removeThingType'  => [ 'shape' => 'RemoveThingType', ],
			],
		],
		'UpdateThingResponse'                       => [ 'type' => 'structure', 'members' => [], ],
		'UseBase64'                                 => [ 'type' => 'boolean', ],
		'Valid'                                     => [ 'type' => 'boolean', ],
		'ValidateSecurityProfileBehaviorsRequest'   => [
			'type'     => 'structure',
			'required' => [ 'behaviors', ],
			'members'  => [ 'behaviors' => [ 'shape' => 'Behaviors', ], ],
		],
		'ValidateSecurityProfileBehaviorsResponse'  => [
			'type'    => 'structure',
			'members' => [
				'valid'            => [ 'shape' => 'Valid', ],
				'validationErrors' => [ 'shape' => 'ValidationErrors', ],
			],
		],
		'ValidationError'                           => [
			'type'    => 'structure',
			'members' => [ 'errorMessage' => [ 'shape' => 'ErrorMessage', ], ],
		],
		'ValidationErrors'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ValidationError', ],
		],
		'Value'                                     => [ 'type' => 'string', ],
		'Version'                                   => [ 'type' => 'long', ],
		'VersionConflictException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'VersionNumber'                             => [ 'type' => 'long', ],
		'VersionsLimitExceededException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'errorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'ViolationEvent'                            => [
			'type'    => 'structure',
			'members' => [
				'violationId'         => [ 'shape' => 'ViolationId', ],
				'thingName'           => [ 'shape' => 'ThingName', ],
				'securityProfileName' => [ 'shape' => 'SecurityProfileName', ],
				'behavior'            => [ 'shape' => 'Behavior', ],
				'metricValue'         => [ 'shape' => 'MetricValue', ],
				'violationEventType'  => [ 'shape' => 'ViolationEventType', ],
				'violationEventTime'  => [ 'shape' => 'Timestamp', ],
			],
		],
		'ViolationEventType'                        => [
			'type' => 'string',
			'enum' => [
				'in-alarm',
				'alarm-cleared',
				'alarm-invalidated',
			],
		],
		'ViolationEvents'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ViolationEvent', ],
		],
		'ViolationId'                               => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9\\-]+',
		],
		'WaitingForDataCollectionChecksCount'       => [ 'type' => 'integer', ],
		'errorMessage'                              => [ 'type' => 'string', ],
		'resourceArn'                               => [ 'type' => 'string', ],
		'resourceId'                                => [ 'type' => 'string', ],
	],
];
