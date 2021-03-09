<?php
// This file was auto-generated from sdk-root/src/data/s3control/2018-08-20/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-08-20',
		'endpointPrefix'   => 's3-control',
		'protocol'         => 'rest-xml',
		'serviceFullName'  => 'AWS S3 Control',
		'serviceId'        => 'S3 Control',
		'signatureVersion' => 's3v4',
		'signingName'      => 's3',
		'uid'              => 's3control-2018-08-20',
	],
	'operations' => [
		'CreateJob'               => [
			'name'   => 'CreateJob',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v20180820/jobs', ],
			'input'  => [
				'shape'        => 'CreateJobRequest',
				'locationName' => 'CreateJobRequest',
				'xmlNamespace' => [ 'uri' => 'http://awss3control.amazonaws.com/doc/2018-08-20/', ],
			],
			'output' => [ 'shape' => 'CreateJobResult', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'IdempotencyException', ],
				[ 'shape' => 'InternalServiceException', ],
			],
		],
		'DeletePublicAccessBlock' => [
			'name'  => 'DeletePublicAccessBlock',
			'http'  => [
				'method'     => 'DELETE',
				'requestUri' => '/v20180820/configuration/publicAccessBlock',
			],
			'input' => [ 'shape' => 'DeletePublicAccessBlockRequest', ],
		],
		'DescribeJob'             => [
			'name'   => 'DescribeJob',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v20180820/jobs/{id}', ],
			'input'  => [ 'shape' => 'DescribeJobRequest', ],
			'output' => [ 'shape' => 'DescribeJobResult', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'InternalServiceException', ],
			],
		],
		'GetPublicAccessBlock'    => [
			'name'   => 'GetPublicAccessBlock',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v20180820/configuration/publicAccessBlock',
			],
			'input'  => [ 'shape' => 'GetPublicAccessBlockRequest', ],
			'output' => [ 'shape' => 'GetPublicAccessBlockOutput', ],
			'errors' => [ [ 'shape' => 'NoSuchPublicAccessBlockConfiguration', ], ],
		],
		'ListJobs'                => [
			'name'   => 'ListJobs',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v20180820/jobs', ],
			'input'  => [ 'shape' => 'ListJobsRequest', ],
			'output' => [ 'shape' => 'ListJobsResult', ],
			'errors' => [
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InternalServiceException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'PutPublicAccessBlock'    => [
			'name'  => 'PutPublicAccessBlock',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/v20180820/configuration/publicAccessBlock',
			],
			'input' => [ 'shape' => 'PutPublicAccessBlockRequest', ],
		],
		'UpdateJobPriority'       => [
			'name'   => 'UpdateJobPriority',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v20180820/jobs/{id}/priority',
			],
			'input'  => [ 'shape' => 'UpdateJobPriorityRequest', ],
			'output' => [ 'shape' => 'UpdateJobPriorityResult', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'InternalServiceException', ],
			],
		],
		'UpdateJobStatus'         => [
			'name'   => 'UpdateJobStatus',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v20180820/jobs/{id}/status',
			],
			'input'  => [ 'shape' => 'UpdateJobStatusRequest', ],
			'output' => [ 'shape' => 'UpdateJobStatusResult', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'JobStatusException', ],
				[ 'shape' => 'InternalServiceException', ],
			],
		],
	],
	'shapes'     => [
		'AccountId'                                   => [ 'type' => 'string', 'max' => 64, ],
		'BadRequestException'                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'Boolean'                                     => [ 'type' => 'boolean', ],
		'ConfirmationRequired'                        => [ 'type' => 'boolean', ],
		'CreateJobRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'Operation',
				'Report',
				'ClientRequestToken',
				'Manifest',
				'Priority',
				'RoleArn',
			],
			'members'  => [
				'AccountId'            => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
				'ConfirmationRequired' => [
					'shape' => 'ConfirmationRequired',
					'box'   => true,
				],
				'Operation'            => [ 'shape' => 'JobOperation', ],
				'Report'               => [ 'shape' => 'JobReport', ],
				'ClientRequestToken'   => [
					'shape'            => 'NonEmptyMaxLength64String',
					'idempotencyToken' => true,
				],
				'Manifest'             => [ 'shape' => 'JobManifest', ],
				'Description'          => [ 'shape' => 'NonEmptyMaxLength256String', ],
				'Priority'             => [
					'shape' => 'JobPriority',
					'box'   => true,
				],
				'RoleArn'              => [ 'shape' => 'IAMRoleArn', ],
			],
		],
		'CreateJobResult'                             => [
			'type'    => 'structure',
			'members' => [ 'JobId' => [ 'shape' => 'JobId', ], ],
		],
		'DeletePublicAccessBlockRequest'              => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
			],
		],
		'DescribeJobRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'JobId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
				'JobId'     => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'id',
				],
			],
		],
		'DescribeJobResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Job' => [ 'shape' => 'JobDescriptor', ], ],
		],
		'ExceptionMessage'                            => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'GetPublicAccessBlockOutput'                  => [
			'type'    => 'structure',
			'members' => [ 'PublicAccessBlockConfiguration' => [ 'shape' => 'PublicAccessBlockConfiguration', ], ],
			'payload' => 'PublicAccessBlockConfiguration',
		],
		'GetPublicAccessBlockRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
			],
		],
		'IAMRoleArn'                                  => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'IdempotencyException'                        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'InternalServiceException'                    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'InvalidNextTokenException'                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'InvalidRequestException'                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'JobArn'                                      => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'JobCreationTime'                             => [ 'type' => 'timestamp', ],
		'JobDescriptor'                               => [
			'type'    => 'structure',
			'members' => [
				'JobId'                => [ 'shape' => 'JobId', ],
				'ConfirmationRequired' => [ 'shape' => 'ConfirmationRequired', 'box' => true, ],
				'Description'          => [ 'shape' => 'NonEmptyMaxLength256String', 'box' => true, ],
				'JobArn'               => [ 'shape' => 'JobArn', 'box' => true, ],
				'Status'               => [ 'shape' => 'JobStatus', ],
				'Manifest'             => [ 'shape' => 'JobManifest', 'box' => true, ],
				'Operation'            => [ 'shape' => 'JobOperation', 'box' => true, ],
				'Priority'             => [ 'shape' => 'JobPriority', ],
				'ProgressSummary'      => [ 'shape' => 'JobProgressSummary', 'box' => true, ],
				'StatusUpdateReason'   => [ 'shape' => 'JobStatusUpdateReason', 'box' => true, ],
				'FailureReasons'       => [ 'shape' => 'JobFailureList', 'box' => true, ],
				'Report'               => [ 'shape' => 'JobReport', 'box' => true, ],
				'CreationTime'         => [ 'shape' => 'JobCreationTime', ],
				'TerminationDate'      => [ 'shape' => 'JobTerminationDate', 'box' => true, ],
				'RoleArn'              => [ 'shape' => 'IAMRoleArn', 'box' => true, ],
				'SuspendedDate'        => [ 'shape' => 'SuspendedDate', 'box' => true, ],
				'SuspendedCause'       => [ 'shape' => 'SuspendedCause', 'box' => true, ],
			],
		],
		'JobFailure'                                  => [
			'type'    => 'structure',
			'members' => [
				'FailureCode'   => [ 'shape' => 'JobFailureCode', ],
				'FailureReason' => [ 'shape' => 'JobFailureReason', ],
			],
		],
		'JobFailureCode'                              => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'JobFailureList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobFailure', ],
		],
		'JobFailureReason'                            => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'JobId'                                       => [ 'type' => 'string', 'max' => 36, 'min' => 5, ],
		'JobListDescriptor'                           => [
			'type'    => 'structure',
			'members' => [
				'JobId'           => [ 'shape' => 'JobId', ],
				'Description'     => [ 'shape' => 'NonEmptyMaxLength256String', ],
				'Operation'       => [ 'shape' => 'OperationName', ],
				'Priority'        => [ 'shape' => 'JobPriority', ],
				'Status'          => [ 'shape' => 'JobStatus', ],
				'CreationTime'    => [ 'shape' => 'JobCreationTime', ],
				'TerminationDate' => [ 'shape' => 'JobTerminationDate', ],
				'ProgressSummary' => [ 'shape' => 'JobProgressSummary', ],
			],
		],
		'JobListDescriptorList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobListDescriptor', ],
		],
		'JobManifest'                                 => [
			'type'     => 'structure',
			'required' => [ 'Spec', 'Location', ],
			'members'  => [
				'Spec'     => [ 'shape' => 'JobManifestSpec', ],
				'Location' => [ 'shape' => 'JobManifestLocation', ],
			],
		],
		'JobManifestFieldList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobManifestFieldName', ],
		],
		'JobManifestFieldName'                        => [
			'type' => 'string',
			'enum' => [ 'Ignore', 'Bucket', 'Key', 'VersionId', ],
		],
		'JobManifestFormat'                           => [
			'type' => 'string',
			'enum' => [
				'S3BatchOperations_CSV_20180820',
				'S3InventoryReport_CSV_20161130',
			],
		],
		'JobManifestLocation'                         => [
			'type'     => 'structure',
			'required' => [ 'ObjectArn', 'ETag', ],
			'members'  => [
				'ObjectArn'       => [ 'shape' => 'S3KeyArnString', ],
				'ObjectVersionId' => [
					'shape' => 'S3ObjectVersionId',
					'box'   => true,
				],
				'ETag'            => [ 'shape' => 'NonEmptyMaxLength1024String', ],
			],
		],
		'JobManifestSpec'                             => [
			'type'     => 'structure',
			'required' => [ 'Format', ],
			'members'  => [
				'Format' => [ 'shape' => 'JobManifestFormat', ],
				'Fields' => [
					'shape' => 'JobManifestFieldList',
					'box'   => true,
				],
			],
		],
		'JobNumberOfTasksFailed'                      => [ 'type' => 'long', 'min' => 0, ],
		'JobNumberOfTasksSucceeded'                   => [ 'type' => 'long', 'min' => 0, ],
		'JobOperation'                                => [
			'type'    => 'structure',
			'members' => [
				'LambdaInvoke'            => [
					'shape' => 'LambdaInvokeOperation',
					'box'   => true,
				],
				'S3PutObjectCopy'         => [
					'shape' => 'S3CopyObjectOperation',
					'box'   => true,
				],
				'S3PutObjectAcl'          => [
					'shape' => 'S3SetObjectAclOperation',
					'box'   => true,
				],
				'S3PutObjectTagging'      => [
					'shape' => 'S3SetObjectTaggingOperation',
					'box'   => true,
				],
				'S3InitiateRestoreObject' => [
					'shape' => 'S3InitiateRestoreObjectOperation',
					'box'   => true,
				],
			],
		],
		'JobPriority'                                 => [ 'type' => 'integer', 'max' => 2147483647, 'min' => 0, ],
		'JobProgressSummary'                          => [
			'type'    => 'structure',
			'members' => [
				'TotalNumberOfTasks'     => [
					'shape' => 'JobTotalNumberOfTasks',
					'box'   => true,
				],
				'NumberOfTasksSucceeded' => [
					'shape' => 'JobNumberOfTasksSucceeded',
					'box'   => true,
				],
				'NumberOfTasksFailed'    => [
					'shape' => 'JobNumberOfTasksFailed',
					'box'   => true,
				],
			],
		],
		'JobReport'                                   => [
			'type'     => 'structure',
			'required' => [ 'Enabled', ],
			'members'  => [
				'Bucket'      => [
					'shape' => 'S3BucketArnString',
					'box'   => true,
				],
				'Format'      => [
					'shape' => 'JobReportFormat',
					'box'   => true,
				],
				'Enabled'     => [ 'shape' => 'Boolean', ],
				'Prefix'      => [
					'shape' => 'ReportPrefixString',
					'box'   => true,
				],
				'ReportScope' => [
					'shape' => 'JobReportScope',
					'box'   => true,
				],
			],
		],
		'JobReportFormat'                             => [ 'type' => 'string', 'enum' => [ 'Report_CSV_20180820', ], ],
		'JobReportScope'                              => [
			'type' => 'string',
			'enum' => [ 'AllTasks', 'FailedTasksOnly', ],
		],
		'JobStatus'                                   => [
			'type' => 'string',
			'enum' => [
				'Active',
				'Cancelled',
				'Cancelling',
				'Complete',
				'Completing',
				'Failed',
				'Failing',
				'New',
				'Paused',
				'Pausing',
				'Preparing',
				'Ready',
				'Suspended',
			],
		],
		'JobStatusException'                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'JobStatusList'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'JobStatus', ], ],
		'JobStatusUpdateReason'                       => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'JobTerminationDate'                          => [ 'type' => 'timestamp', ],
		'JobTotalNumberOfTasks'                       => [ 'type' => 'long', 'min' => 0, ],
		'KmsKeyArnString'                             => [ 'type' => 'string', 'max' => 2000, 'min' => 1, ],
		'LambdaInvokeOperation'                       => [
			'type'    => 'structure',
			'members' => [ 'FunctionArn' => [ 'shape' => 'NonEmptyMaxLength1024String', ], ],
		],
		'ListJobsRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'AccountId', ],
			'members'  => [
				'AccountId'   => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
				'JobStatuses' => [
					'shape'        => 'JobStatusList',
					'location'     => 'querystring',
					'locationName' => 'jobStatuses',
				],
				'NextToken'   => [
					'shape'        => 'NonEmptyMaxLength1024String',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'  => [
					'shape'        => 'MaxResults',
					'box'          => true,
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListJobsResult'                              => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'Jobs'      => [ 'shape' => 'JobListDescriptorList', ],
			],
		],
		'MaxLength1024String'                         => [ 'type' => 'string', 'max' => 1024, ],
		'MaxResults'                                  => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'NoSuchPublicAccessBlockConfiguration'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'NoSuchPublicAccessBlockConfigurationMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchPublicAccessBlockConfigurationMessage' => [ 'type' => 'string', ],
		'NonEmptyMaxLength1024String'                 => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'NonEmptyMaxLength2048String'                 => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'NonEmptyMaxLength256String'                  => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'NonEmptyMaxLength64String'                   => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'NotFoundException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'OperationName'                               => [
			'type' => 'string',
			'enum' => [
				'LambdaInvoke',
				'S3PutObjectCopy',
				'S3PutObjectAcl',
				'S3PutObjectTagging',
				'S3InitiateRestoreObject',
			],
		],
		'PublicAccessBlockConfiguration'              => [
			'type'    => 'structure',
			'members' => [
				'BlockPublicAcls'       => [
					'shape'        => 'Setting',
					'locationName' => 'BlockPublicAcls',
				],
				'IgnorePublicAcls'      => [
					'shape'        => 'Setting',
					'locationName' => 'IgnorePublicAcls',
				],
				'BlockPublicPolicy'     => [
					'shape'        => 'Setting',
					'locationName' => 'BlockPublicPolicy',
				],
				'RestrictPublicBuckets' => [
					'shape'        => 'Setting',
					'locationName' => 'RestrictPublicBuckets',
				],
			],
		],
		'PutPublicAccessBlockRequest'                 => [
			'type'     => 'structure',
			'required' => [
				'PublicAccessBlockConfiguration',
				'AccountId',
			],
			'members'  => [
				'PublicAccessBlockConfiguration' => [
					'shape'        => 'PublicAccessBlockConfiguration',
					'locationName' => 'PublicAccessBlockConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://awss3control.amazonaws.com/doc/2018-08-20/', ],
				],
				'AccountId'                      => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
			],
			'payload'  => 'PublicAccessBlockConfiguration',
		],
		'ReportPrefixString'                          => [ 'type' => 'string', 'max' => 512, 'min' => 1, ],
		'RequestedJobStatus'                          => [ 'type' => 'string', 'enum' => [ 'Cancelled', 'Ready', ], ],
		'S3AccessControlList'                         => [
			'type'     => 'structure',
			'required' => [ 'Owner', ],
			'members'  => [
				'Owner'  => [ 'shape' => 'S3ObjectOwner', ],
				'Grants' => [ 'shape' => 'S3GrantList', ],
			],
		],
		'S3AccessControlPolicy'                       => [
			'type'    => 'structure',
			'members' => [
				'AccessControlList'       => [
					'shape' => 'S3AccessControlList',
					'box'   => true,
				],
				'CannedAccessControlList' => [
					'shape' => 'S3CannedAccessControlList',
					'box'   => true,
				],
			],
		],
		'S3BucketArnString'                           => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'S3CannedAccessControlList'                   => [
			'type' => 'string',
			'enum' => [
				'private',
				'public-read',
				'public-read-write',
				'aws-exec-read',
				'authenticated-read',
				'bucket-owner-read',
				'bucket-owner-full-control',
			],
		],
		'S3ContentLength'                             => [ 'type' => 'long', 'min' => 0, ],
		'S3CopyObjectOperation'                       => [
			'type'    => 'structure',
			'members' => [
				'TargetResource'            => [ 'shape' => 'S3BucketArnString', ],
				'CannedAccessControlList'   => [ 'shape' => 'S3CannedAccessControlList', 'box' => true, ],
				'AccessControlGrants'       => [ 'shape' => 'S3GrantList', 'box' => true, ],
				'MetadataDirective'         => [ 'shape' => 'S3MetadataDirective', ],
				'ModifiedSinceConstraint'   => [ 'shape' => 'TimeStamp', ],
				'NewObjectMetadata'         => [ 'shape' => 'S3ObjectMetadata', ],
				'NewObjectTagging'          => [ 'shape' => 'S3TagSet', ],
				'RedirectLocation'          => [ 'shape' => 'NonEmptyMaxLength2048String', ],
				'RequesterPays'             => [ 'shape' => 'Boolean', ],
				'StorageClass'              => [ 'shape' => 'S3StorageClass', ],
				'UnModifiedSinceConstraint' => [ 'shape' => 'TimeStamp', ],
				'SSEAwsKmsKeyId'            => [ 'shape' => 'KmsKeyArnString', ],
				'TargetKeyPrefix'           => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'ObjectLockLegalHoldStatus' => [ 'shape' => 'S3ObjectLockLegalHoldStatus', ],
				'ObjectLockMode'            => [ 'shape' => 'S3ObjectLockMode', ],
				'ObjectLockRetainUntilDate' => [ 'shape' => 'TimeStamp', ],
			],
		],
		'S3ExpirationInDays'                          => [ 'type' => 'integer', 'min' => 0, ],
		'S3GlacierJobTier'                            => [ 'type' => 'string', 'enum' => [ 'BULK', 'STANDARD', ], ],
		'S3Grant'                                     => [
			'type'    => 'structure',
			'members' => [
				'Grantee'    => [ 'shape' => 'S3Grantee', ],
				'Permission' => [ 'shape' => 'S3Permission', ],
			],
		],
		'S3GrantList'                                 => [ 'type' => 'list', 'member' => [ 'shape' => 'S3Grant', ], ],
		'S3Grantee'                                   => [
			'type'    => 'structure',
			'members' => [
				'TypeIdentifier' => [ 'shape' => 'S3GranteeTypeIdentifier', ],
				'Identifier'     => [
					'shape' => 'NonEmptyMaxLength1024String',
					'box'   => true,
				],
				'DisplayName'    => [ 'shape' => 'NonEmptyMaxLength1024String', ],
			],
		],
		'S3GranteeTypeIdentifier'                     => [
			'type' => 'string',
			'enum' => [ 'id', 'emailAddress', 'uri', ],
		],
		'S3InitiateRestoreObjectOperation'            => [
			'type'    => 'structure',
			'members' => [
				'ExpirationInDays' => [ 'shape' => 'S3ExpirationInDays', ],
				'GlacierJobTier'   => [ 'shape' => 'S3GlacierJobTier', ],
			],
		],
		'S3KeyArnString'                              => [ 'type' => 'string', 'max' => 2000, 'min' => 1, ],
		'S3MetadataDirective'                         => [ 'type' => 'string', 'enum' => [ 'COPY', 'REPLACE', ], ],
		'S3ObjectLockLegalHoldStatus'                 => [ 'type' => 'string', 'enum' => [ 'OFF', 'ON', ], ],
		'S3ObjectLockMode'                            => [
			'type' => 'string',
			'enum' => [ 'COMPLIANCE', 'GOVERNANCE', ],
		],
		'S3ObjectMetadata'                            => [
			'type'    => 'structure',
			'members' => [
				'CacheControl'       => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'ContentDisposition' => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'ContentEncoding'    => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'ContentLanguage'    => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'UserMetadata'       => [ 'shape' => 'S3UserMetadata', ],
				'ContentLength'      => [
					'shape' => 'S3ContentLength',
					'box'   => true,
				],
				'ContentMD5'         => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'ContentType'        => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'HttpExpiresDate'    => [ 'shape' => 'TimeStamp', ],
				'RequesterCharged'   => [ 'shape' => 'Boolean', ],
				'SSEAlgorithm'       => [ 'shape' => 'S3SSEAlgorithm', ],
			],
		],
		'S3ObjectOwner'                               => [
			'type'    => 'structure',
			'members' => [
				'ID'          => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'DisplayName' => [ 'shape' => 'NonEmptyMaxLength1024String', ],
			],
		],
		'S3ObjectVersionId'                           => [ 'type' => 'string', 'max' => 2000, 'min' => 1, ],
		'S3Permission'                                => [
			'type' => 'string',
			'enum' => [
				'FULL_CONTROL',
				'READ',
				'WRITE',
				'READ_ACP',
				'WRITE_ACP',
			],
		],
		'S3SSEAlgorithm'                              => [ 'type' => 'string', 'enum' => [ 'AES256', 'KMS', ], ],
		'S3SetObjectAclOperation'                     => [
			'type'    => 'structure',
			'members' => [ 'AccessControlPolicy' => [ 'shape' => 'S3AccessControlPolicy', ], ],
		],
		'S3SetObjectTaggingOperation'                 => [
			'type'    => 'structure',
			'members' => [ 'TagSet' => [ 'shape' => 'S3TagSet', ], ],
		],
		'S3StorageClass'                              => [
			'type' => 'string',
			'enum' => [
				'STANDARD',
				'STANDARD_IA',
				'ONEZONE_IA',
				'GLACIER',
				'INTELLIGENT_TIERING',
				'DEEP_ARCHIVE',
			],
		],
		'S3Tag'                                       => [
			'type'     => 'structure',
			'required' => [ 'Key', 'Value', ],
			'members'  => [
				'Key'   => [ 'shape' => 'NonEmptyMaxLength1024String', ],
				'Value' => [ 'shape' => 'MaxLength1024String', ],
			],
		],
		'S3TagSet'                                    => [ 'type' => 'list', 'member' => [ 'shape' => 'S3Tag', ], ],
		'S3UserMetadata'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'NonEmptyMaxLength1024String', ],
			'value' => [ 'shape' => 'MaxLength1024String', ],
			'max'   => 8192,
		],
		'Setting'                                     => [ 'type' => 'boolean', ],
		'SuspendedCause'                              => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'SuspendedDate'                               => [ 'type' => 'timestamp', ],
		'TimeStamp'                                   => [ 'type' => 'timestamp', ],
		'TooManyRequestsException'                    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ],
			'exception' => true,
		],
		'UpdateJobPriorityRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'AccountId', 'JobId', 'Priority', ],
			'members'  => [
				'AccountId' => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
				'JobId'     => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'id',
				],
				'Priority'  => [
					'shape'        => 'JobPriority',
					'location'     => 'querystring',
					'locationName' => 'priority',
				],
			],
		],
		'UpdateJobPriorityResult'                     => [
			'type'     => 'structure',
			'required' => [ 'JobId', 'Priority', ],
			'members'  => [
				'JobId'    => [ 'shape' => 'JobId', ],
				'Priority' => [ 'shape' => 'JobPriority', ],
			],
		],
		'UpdateJobStatusRequest'                      => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'JobId',
				'RequestedJobStatus',
			],
			'members'  => [
				'AccountId'          => [
					'shape'        => 'AccountId',
					'location'     => 'header',
					'locationName' => 'x-amz-account-id',
				],
				'JobId'              => [
					'shape'        => 'JobId',
					'location'     => 'uri',
					'locationName' => 'id',
				],
				'RequestedJobStatus' => [
					'shape'        => 'RequestedJobStatus',
					'location'     => 'querystring',
					'locationName' => 'requestedJobStatus',
				],
				'StatusUpdateReason' => [
					'shape'        => 'JobStatusUpdateReason',
					'location'     => 'querystring',
					'locationName' => 'statusUpdateReason',
				],
			],
		],
		'UpdateJobStatusResult'                       => [
			'type'    => 'structure',
			'members' => [
				'JobId'              => [ 'shape' => 'JobId', ],
				'Status'             => [ 'shape' => 'JobStatus', ],
				'StatusUpdateReason' => [ 'shape' => 'JobStatusUpdateReason', ],
			],
		],
	],
];
