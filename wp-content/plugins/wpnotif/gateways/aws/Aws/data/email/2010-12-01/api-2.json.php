<?php
// This file was auto-generated from sdk-root/src/data/email/2010-12-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2010-12-01',
		'endpointPrefix'      => 'email',
		'protocol'            => 'query',
		'serviceAbbreviation' => 'Amazon SES',
		'serviceFullName'     => 'Amazon Simple Email Service',
		'serviceId'           => 'SES',
		'signatureVersion'    => 'v4',
		'signingName'         => 'ses',
		'uid'                 => 'email-2010-12-01',
		'xmlNamespace'        => 'http://ses.amazonaws.com/doc/2010-12-01/',
	],
	'operations' => [
		'CloneReceiptRuleSet'                            => [
			'name'   => 'CloneReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CloneReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'CloneReceiptRuleSetResponse',
				'resultWrapper' => 'CloneReceiptRuleSetResult',
			],
			'errors' => [
				[ 'shape' => 'RuleSetDoesNotExistException', ],
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateConfigurationSet'                         => [
			'name'   => 'CreateConfigurationSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateConfigurationSetRequest', ],
			'output' => [
				'shape'         => 'CreateConfigurationSetResponse',
				'resultWrapper' => 'CreateConfigurationSetResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetAlreadyExistsException', ],
				[ 'shape' => 'InvalidConfigurationSetException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateConfigurationSetEventDestination'         => [
			'name'   => 'CreateConfigurationSetEventDestination',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateConfigurationSetEventDestinationRequest', ],
			'output' => [
				'shape'         => 'CreateConfigurationSetEventDestinationResponse',
				'resultWrapper' => 'CreateConfigurationSetEventDestinationResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'EventDestinationAlreadyExistsException', ],
				[ 'shape' => 'InvalidCloudWatchDestinationException', ],
				[ 'shape' => 'InvalidFirehoseDestinationException', ],
				[ 'shape' => 'InvalidSNSDestinationException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateConfigurationSetTrackingOptions'          => [
			'name'   => 'CreateConfigurationSetTrackingOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateConfigurationSetTrackingOptionsRequest', ],
			'output' => [
				'shape'         => 'CreateConfigurationSetTrackingOptionsResponse',
				'resultWrapper' => 'CreateConfigurationSetTrackingOptionsResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'TrackingOptionsAlreadyExistsException', ],
				[ 'shape' => 'InvalidTrackingOptionsException', ],
			],
		],
		'CreateCustomVerificationEmailTemplate'          => [
			'name'   => 'CreateCustomVerificationEmailTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCustomVerificationEmailTemplateRequest', ],
			'errors' => [
				[ 'shape' => 'CustomVerificationEmailTemplateAlreadyExistsException', ],
				[ 'shape' => 'FromEmailAddressNotVerifiedException', ],
				[ 'shape' => 'CustomVerificationEmailInvalidContentException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateReceiptFilter'                            => [
			'name'   => 'CreateReceiptFilter',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateReceiptFilterRequest', ],
			'output' => [
				'shape'         => 'CreateReceiptFilterResponse',
				'resultWrapper' => 'CreateReceiptFilterResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'AlreadyExistsException', ],
			],
		],
		'CreateReceiptRule'                              => [
			'name'   => 'CreateReceiptRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateReceiptRuleRequest', ],
			'output' => [
				'shape'         => 'CreateReceiptRuleResponse',
				'resultWrapper' => 'CreateReceiptRuleResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidSnsTopicException', ],
				[ 'shape' => 'InvalidS3ConfigurationException', ],
				[ 'shape' => 'InvalidLambdaFunctionException', ],
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'RuleDoesNotExistException', ],
				[ 'shape' => 'RuleSetDoesNotExistException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateReceiptRuleSet'                           => [
			'name'   => 'CreateReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'CreateReceiptRuleSetResponse',
				'resultWrapper' => 'CreateReceiptRuleSetResult',
			],
			'errors' => [
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'CreateTemplate'                                 => [
			'name'   => 'CreateTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTemplateRequest', ],
			'output' => [
				'shape'         => 'CreateTemplateResponse',
				'resultWrapper' => 'CreateTemplateResult',
			],
			'errors' => [
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'InvalidTemplateException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'DeleteConfigurationSet'                         => [
			'name'   => 'DeleteConfigurationSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigurationSetRequest', ],
			'output' => [
				'shape'         => 'DeleteConfigurationSetResponse',
				'resultWrapper' => 'DeleteConfigurationSetResult',
			],
			'errors' => [ [ 'shape' => 'ConfigurationSetDoesNotExistException', ], ],
		],
		'DeleteConfigurationSetEventDestination'         => [
			'name'   => 'DeleteConfigurationSetEventDestination',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigurationSetEventDestinationRequest', ],
			'output' => [
				'shape'         => 'DeleteConfigurationSetEventDestinationResponse',
				'resultWrapper' => 'DeleteConfigurationSetEventDestinationResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'EventDestinationDoesNotExistException', ],
			],
		],
		'DeleteConfigurationSetTrackingOptions'          => [
			'name'   => 'DeleteConfigurationSetTrackingOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigurationSetTrackingOptionsRequest', ],
			'output' => [
				'shape'         => 'DeleteConfigurationSetTrackingOptionsResponse',
				'resultWrapper' => 'DeleteConfigurationSetTrackingOptionsResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'TrackingOptionsDoesNotExistException', ],
			],
		],
		'DeleteCustomVerificationEmailTemplate'          => [
			'name'  => 'DeleteCustomVerificationEmailTemplate',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteCustomVerificationEmailTemplateRequest', ],
		],
		'DeleteIdentity'                                 => [
			'name'   => 'DeleteIdentity',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteIdentityRequest', ],
			'output' => [
				'shape'         => 'DeleteIdentityResponse',
				'resultWrapper' => 'DeleteIdentityResult',
			],
		],
		'DeleteIdentityPolicy'                           => [
			'name'   => 'DeleteIdentityPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteIdentityPolicyRequest', ],
			'output' => [
				'shape'         => 'DeleteIdentityPolicyResponse',
				'resultWrapper' => 'DeleteIdentityPolicyResult',
			],
		],
		'DeleteReceiptFilter'                            => [
			'name'   => 'DeleteReceiptFilter',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteReceiptFilterRequest', ],
			'output' => [
				'shape'         => 'DeleteReceiptFilterResponse',
				'resultWrapper' => 'DeleteReceiptFilterResult',
			],
		],
		'DeleteReceiptRule'                              => [
			'name'   => 'DeleteReceiptRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteReceiptRuleRequest', ],
			'output' => [
				'shape'         => 'DeleteReceiptRuleResponse',
				'resultWrapper' => 'DeleteReceiptRuleResult',
			],
			'errors' => [ [ 'shape' => 'RuleSetDoesNotExistException', ], ],
		],
		'DeleteReceiptRuleSet'                           => [
			'name'   => 'DeleteReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'DeleteReceiptRuleSetResponse',
				'resultWrapper' => 'DeleteReceiptRuleSetResult',
			],
			'errors' => [ [ 'shape' => 'CannotDeleteException', ], ],
		],
		'DeleteTemplate'                                 => [
			'name'   => 'DeleteTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTemplateRequest', ],
			'output' => [
				'shape'         => 'DeleteTemplateResponse',
				'resultWrapper' => 'DeleteTemplateResult',
			],
		],
		'DeleteVerifiedEmailAddress'                     => [
			'name'  => 'DeleteVerifiedEmailAddress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVerifiedEmailAddressRequest', ],
		],
		'DescribeActiveReceiptRuleSet'                   => [
			'name'   => 'DescribeActiveReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeActiveReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'DescribeActiveReceiptRuleSetResponse',
				'resultWrapper' => 'DescribeActiveReceiptRuleSetResult',
			],
		],
		'DescribeConfigurationSet'                       => [
			'name'   => 'DescribeConfigurationSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigurationSetRequest', ],
			'output' => [
				'shape'         => 'DescribeConfigurationSetResponse',
				'resultWrapper' => 'DescribeConfigurationSetResult',
			],
			'errors' => [ [ 'shape' => 'ConfigurationSetDoesNotExistException', ], ],
		],
		'DescribeReceiptRule'                            => [
			'name'   => 'DescribeReceiptRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReceiptRuleRequest', ],
			'output' => [
				'shape'         => 'DescribeReceiptRuleResponse',
				'resultWrapper' => 'DescribeReceiptRuleResult',
			],
			'errors' => [
				[ 'shape' => 'RuleDoesNotExistException', ],
				[ 'shape' => 'RuleSetDoesNotExistException', ],
			],
		],
		'DescribeReceiptRuleSet'                         => [
			'name'   => 'DescribeReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'DescribeReceiptRuleSetResponse',
				'resultWrapper' => 'DescribeReceiptRuleSetResult',
			],
			'errors' => [ [ 'shape' => 'RuleSetDoesNotExistException', ], ],
		],
		'GetAccountSendingEnabled'                       => [
			'name'   => 'GetAccountSendingEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetAccountSendingEnabledResponse',
				'resultWrapper' => 'GetAccountSendingEnabledResult',
			],
		],
		'GetCustomVerificationEmailTemplate'             => [
			'name'   => 'GetCustomVerificationEmailTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetCustomVerificationEmailTemplateRequest', ],
			'output' => [
				'shape'         => 'GetCustomVerificationEmailTemplateResponse',
				'resultWrapper' => 'GetCustomVerificationEmailTemplateResult',
			],
			'errors' => [ [ 'shape' => 'CustomVerificationEmailTemplateDoesNotExistException', ], ],
		],
		'GetIdentityDkimAttributes'                      => [
			'name'   => 'GetIdentityDkimAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetIdentityDkimAttributesRequest', ],
			'output' => [
				'shape'         => 'GetIdentityDkimAttributesResponse',
				'resultWrapper' => 'GetIdentityDkimAttributesResult',
			],
		],
		'GetIdentityMailFromDomainAttributes'            => [
			'name'   => 'GetIdentityMailFromDomainAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetIdentityMailFromDomainAttributesRequest', ],
			'output' => [
				'shape'         => 'GetIdentityMailFromDomainAttributesResponse',
				'resultWrapper' => 'GetIdentityMailFromDomainAttributesResult',
			],
		],
		'GetIdentityNotificationAttributes'              => [
			'name'   => 'GetIdentityNotificationAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetIdentityNotificationAttributesRequest', ],
			'output' => [
				'shape'         => 'GetIdentityNotificationAttributesResponse',
				'resultWrapper' => 'GetIdentityNotificationAttributesResult',
			],
		],
		'GetIdentityPolicies'                            => [
			'name'   => 'GetIdentityPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetIdentityPoliciesRequest', ],
			'output' => [
				'shape'         => 'GetIdentityPoliciesResponse',
				'resultWrapper' => 'GetIdentityPoliciesResult',
			],
		],
		'GetIdentityVerificationAttributes'              => [
			'name'   => 'GetIdentityVerificationAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetIdentityVerificationAttributesRequest', ],
			'output' => [
				'shape'         => 'GetIdentityVerificationAttributesResponse',
				'resultWrapper' => 'GetIdentityVerificationAttributesResult',
			],
		],
		'GetSendQuota'                                   => [
			'name'   => 'GetSendQuota',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetSendQuotaResponse',
				'resultWrapper' => 'GetSendQuotaResult',
			],
		],
		'GetSendStatistics'                              => [
			'name'   => 'GetSendStatistics',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetSendStatisticsResponse',
				'resultWrapper' => 'GetSendStatisticsResult',
			],
		],
		'GetTemplate'                                    => [
			'name'   => 'GetTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetTemplateRequest', ],
			'output' => [
				'shape'         => 'GetTemplateResponse',
				'resultWrapper' => 'GetTemplateResult',
			],
			'errors' => [ [ 'shape' => 'TemplateDoesNotExistException', ], ],
		],
		'ListConfigurationSets'                          => [
			'name'   => 'ListConfigurationSets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListConfigurationSetsRequest', ],
			'output' => [
				'shape'         => 'ListConfigurationSetsResponse',
				'resultWrapper' => 'ListConfigurationSetsResult',
			],
		],
		'ListCustomVerificationEmailTemplates'           => [
			'name'   => 'ListCustomVerificationEmailTemplates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListCustomVerificationEmailTemplatesRequest', ],
			'output' => [
				'shape'         => 'ListCustomVerificationEmailTemplatesResponse',
				'resultWrapper' => 'ListCustomVerificationEmailTemplatesResult',
			],
		],
		'ListIdentities'                                 => [
			'name'   => 'ListIdentities',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListIdentitiesRequest', ],
			'output' => [
				'shape'         => 'ListIdentitiesResponse',
				'resultWrapper' => 'ListIdentitiesResult',
			],
		],
		'ListIdentityPolicies'                           => [
			'name'   => 'ListIdentityPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListIdentityPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListIdentityPoliciesResponse',
				'resultWrapper' => 'ListIdentityPoliciesResult',
			],
		],
		'ListReceiptFilters'                             => [
			'name'   => 'ListReceiptFilters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListReceiptFiltersRequest', ],
			'output' => [
				'shape'         => 'ListReceiptFiltersResponse',
				'resultWrapper' => 'ListReceiptFiltersResult',
			],
		],
		'ListReceiptRuleSets'                            => [
			'name'   => 'ListReceiptRuleSets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListReceiptRuleSetsRequest', ],
			'output' => [
				'shape'         => 'ListReceiptRuleSetsResponse',
				'resultWrapper' => 'ListReceiptRuleSetsResult',
			],
		],
		'ListTemplates'                                  => [
			'name'   => 'ListTemplates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTemplatesRequest', ],
			'output' => [
				'shape'         => 'ListTemplatesResponse',
				'resultWrapper' => 'ListTemplatesResult',
			],
		],
		'ListVerifiedEmailAddresses'                     => [
			'name'   => 'ListVerifiedEmailAddresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'ListVerifiedEmailAddressesResponse',
				'resultWrapper' => 'ListVerifiedEmailAddressesResult',
			],
		],
		'PutConfigurationSetDeliveryOptions'             => [
			'name'   => 'PutConfigurationSetDeliveryOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutConfigurationSetDeliveryOptionsRequest', ],
			'output' => [
				'shape'         => 'PutConfigurationSetDeliveryOptionsResponse',
				'resultWrapper' => 'PutConfigurationSetDeliveryOptionsResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'InvalidDeliveryOptionsException', ],
			],
		],
		'PutIdentityPolicy'                              => [
			'name'   => 'PutIdentityPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutIdentityPolicyRequest', ],
			'output' => [
				'shape'         => 'PutIdentityPolicyResponse',
				'resultWrapper' => 'PutIdentityPolicyResult',
			],
			'errors' => [ [ 'shape' => 'InvalidPolicyException', ], ],
		],
		'ReorderReceiptRuleSet'                          => [
			'name'   => 'ReorderReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReorderReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'ReorderReceiptRuleSetResponse',
				'resultWrapper' => 'ReorderReceiptRuleSetResult',
			],
			'errors' => [
				[ 'shape' => 'RuleSetDoesNotExistException', ],
				[ 'shape' => 'RuleDoesNotExistException', ],
			],
		],
		'SendBounce'                                     => [
			'name'   => 'SendBounce',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendBounceRequest', ],
			'output' => [
				'shape'         => 'SendBounceResponse',
				'resultWrapper' => 'SendBounceResult',
			],
			'errors' => [ [ 'shape' => 'MessageRejected', ], ],
		],
		'SendBulkTemplatedEmail'                         => [
			'name'   => 'SendBulkTemplatedEmail',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendBulkTemplatedEmailRequest', ],
			'output' => [
				'shape'         => 'SendBulkTemplatedEmailResponse',
				'resultWrapper' => 'SendBulkTemplatedEmailResult',
			],
			'errors' => [
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'TemplateDoesNotExistException', ],
				[ 'shape' => 'ConfigurationSetSendingPausedException', ],
				[ 'shape' => 'AccountSendingPausedException', ],
			],
		],
		'SendCustomVerificationEmail'                    => [
			'name'   => 'SendCustomVerificationEmail',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendCustomVerificationEmailRequest', ],
			'output' => [
				'shape'         => 'SendCustomVerificationEmailResponse',
				'resultWrapper' => 'SendCustomVerificationEmailResult',
			],
			'errors' => [
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'CustomVerificationEmailTemplateDoesNotExistException', ],
				[ 'shape' => 'FromEmailAddressNotVerifiedException', ],
				[ 'shape' => 'ProductionAccessNotGrantedException', ],
			],
		],
		'SendEmail'                                      => [
			'name'   => 'SendEmail',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendEmailRequest', ],
			'output' => [
				'shape'         => 'SendEmailResponse',
				'resultWrapper' => 'SendEmailResult',
			],
			'errors' => [
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'ConfigurationSetSendingPausedException', ],
				[ 'shape' => 'AccountSendingPausedException', ],
			],
		],
		'SendRawEmail'                                   => [
			'name'   => 'SendRawEmail',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendRawEmailRequest', ],
			'output' => [
				'shape'         => 'SendRawEmailResponse',
				'resultWrapper' => 'SendRawEmailResult',
			],
			'errors' => [
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'ConfigurationSetSendingPausedException', ],
				[ 'shape' => 'AccountSendingPausedException', ],
			],
		],
		'SendTemplatedEmail'                             => [
			'name'   => 'SendTemplatedEmail',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SendTemplatedEmailRequest', ],
			'output' => [
				'shape'         => 'SendTemplatedEmailResponse',
				'resultWrapper' => 'SendTemplatedEmailResult',
			],
			'errors' => [
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'TemplateDoesNotExistException', ],
				[ 'shape' => 'ConfigurationSetSendingPausedException', ],
				[ 'shape' => 'AccountSendingPausedException', ],
			],
		],
		'SetActiveReceiptRuleSet'                        => [
			'name'   => 'SetActiveReceiptRuleSet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetActiveReceiptRuleSetRequest', ],
			'output' => [
				'shape'         => 'SetActiveReceiptRuleSetResponse',
				'resultWrapper' => 'SetActiveReceiptRuleSetResult',
			],
			'errors' => [ [ 'shape' => 'RuleSetDoesNotExistException', ], ],
		],
		'SetIdentityDkimEnabled'                         => [
			'name'   => 'SetIdentityDkimEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIdentityDkimEnabledRequest', ],
			'output' => [
				'shape'         => 'SetIdentityDkimEnabledResponse',
				'resultWrapper' => 'SetIdentityDkimEnabledResult',
			],
		],
		'SetIdentityFeedbackForwardingEnabled'           => [
			'name'   => 'SetIdentityFeedbackForwardingEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIdentityFeedbackForwardingEnabledRequest', ],
			'output' => [
				'shape'         => 'SetIdentityFeedbackForwardingEnabledResponse',
				'resultWrapper' => 'SetIdentityFeedbackForwardingEnabledResult',
			],
		],
		'SetIdentityHeadersInNotificationsEnabled'       => [
			'name'   => 'SetIdentityHeadersInNotificationsEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIdentityHeadersInNotificationsEnabledRequest', ],
			'output' => [
				'shape'         => 'SetIdentityHeadersInNotificationsEnabledResponse',
				'resultWrapper' => 'SetIdentityHeadersInNotificationsEnabledResult',
			],
		],
		'SetIdentityMailFromDomain'                      => [
			'name'   => 'SetIdentityMailFromDomain',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIdentityMailFromDomainRequest', ],
			'output' => [
				'shape'         => 'SetIdentityMailFromDomainResponse',
				'resultWrapper' => 'SetIdentityMailFromDomainResult',
			],
		],
		'SetIdentityNotificationTopic'                   => [
			'name'   => 'SetIdentityNotificationTopic',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetIdentityNotificationTopicRequest', ],
			'output' => [
				'shape'         => 'SetIdentityNotificationTopicResponse',
				'resultWrapper' => 'SetIdentityNotificationTopicResult',
			],
		],
		'SetReceiptRulePosition'                         => [
			'name'   => 'SetReceiptRulePosition',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetReceiptRulePositionRequest', ],
			'output' => [
				'shape'         => 'SetReceiptRulePositionResponse',
				'resultWrapper' => 'SetReceiptRulePositionResult',
			],
			'errors' => [
				[ 'shape' => 'RuleSetDoesNotExistException', ],
				[ 'shape' => 'RuleDoesNotExistException', ],
			],
		],
		'TestRenderTemplate'                             => [
			'name'   => 'TestRenderTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TestRenderTemplateRequest', ],
			'output' => [
				'shape'         => 'TestRenderTemplateResponse',
				'resultWrapper' => 'TestRenderTemplateResult',
			],
			'errors' => [
				[ 'shape' => 'TemplateDoesNotExistException', ],
				[ 'shape' => 'InvalidRenderingParameterException', ],
				[ 'shape' => 'MissingRenderingAttributeException', ],
			],
		],
		'UpdateAccountSendingEnabled'                    => [
			'name'  => 'UpdateAccountSendingEnabled',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'UpdateAccountSendingEnabledRequest', ],
		],
		'UpdateConfigurationSetEventDestination'         => [
			'name'   => 'UpdateConfigurationSetEventDestination',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateConfigurationSetEventDestinationRequest', ],
			'output' => [
				'shape'         => 'UpdateConfigurationSetEventDestinationResponse',
				'resultWrapper' => 'UpdateConfigurationSetEventDestinationResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'EventDestinationDoesNotExistException', ],
				[ 'shape' => 'InvalidCloudWatchDestinationException', ],
				[ 'shape' => 'InvalidFirehoseDestinationException', ],
				[ 'shape' => 'InvalidSNSDestinationException', ],
			],
		],
		'UpdateConfigurationSetReputationMetricsEnabled' => [
			'name'   => 'UpdateConfigurationSetReputationMetricsEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateConfigurationSetReputationMetricsEnabledRequest', ],
			'errors' => [ [ 'shape' => 'ConfigurationSetDoesNotExistException', ], ],
		],
		'UpdateConfigurationSetSendingEnabled'           => [
			'name'   => 'UpdateConfigurationSetSendingEnabled',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateConfigurationSetSendingEnabledRequest', ],
			'errors' => [ [ 'shape' => 'ConfigurationSetDoesNotExistException', ], ],
		],
		'UpdateConfigurationSetTrackingOptions'          => [
			'name'   => 'UpdateConfigurationSetTrackingOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateConfigurationSetTrackingOptionsRequest', ],
			'output' => [
				'shape'         => 'UpdateConfigurationSetTrackingOptionsResponse',
				'resultWrapper' => 'UpdateConfigurationSetTrackingOptionsResult',
			],
			'errors' => [
				[ 'shape' => 'ConfigurationSetDoesNotExistException', ],
				[ 'shape' => 'TrackingOptionsDoesNotExistException', ],
				[ 'shape' => 'InvalidTrackingOptionsException', ],
			],
		],
		'UpdateCustomVerificationEmailTemplate'          => [
			'name'   => 'UpdateCustomVerificationEmailTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateCustomVerificationEmailTemplateRequest', ],
			'errors' => [
				[ 'shape' => 'CustomVerificationEmailTemplateDoesNotExistException', ],
				[ 'shape' => 'FromEmailAddressNotVerifiedException', ],
				[ 'shape' => 'CustomVerificationEmailInvalidContentException', ],
			],
		],
		'UpdateReceiptRule'                              => [
			'name'   => 'UpdateReceiptRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateReceiptRuleRequest', ],
			'output' => [
				'shape'         => 'UpdateReceiptRuleResponse',
				'resultWrapper' => 'UpdateReceiptRuleResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidSnsTopicException', ],
				[ 'shape' => 'InvalidS3ConfigurationException', ],
				[ 'shape' => 'InvalidLambdaFunctionException', ],
				[ 'shape' => 'RuleSetDoesNotExistException', ],
				[ 'shape' => 'RuleDoesNotExistException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'UpdateTemplate'                                 => [
			'name'   => 'UpdateTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateTemplateRequest', ],
			'output' => [
				'shape'         => 'UpdateTemplateResponse',
				'resultWrapper' => 'UpdateTemplateResult',
			],
			'errors' => [
				[ 'shape' => 'TemplateDoesNotExistException', ],
				[ 'shape' => 'InvalidTemplateException', ],
			],
		],
		'VerifyDomainDkim'                               => [
			'name'   => 'VerifyDomainDkim',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'VerifyDomainDkimRequest', ],
			'output' => [
				'shape'         => 'VerifyDomainDkimResponse',
				'resultWrapper' => 'VerifyDomainDkimResult',
			],
		],
		'VerifyDomainIdentity'                           => [
			'name'   => 'VerifyDomainIdentity',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'VerifyDomainIdentityRequest', ],
			'output' => [
				'shape'         => 'VerifyDomainIdentityResponse',
				'resultWrapper' => 'VerifyDomainIdentityResult',
			],
		],
		'VerifyEmailAddress'                             => [
			'name'  => 'VerifyEmailAddress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'VerifyEmailAddressRequest', ],
		],
		'VerifyEmailIdentity'                            => [
			'name'   => 'VerifyEmailIdentity',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'VerifyEmailIdentityRequest', ],
			'output' => [
				'shape'         => 'VerifyEmailIdentityResponse',
				'resultWrapper' => 'VerifyEmailIdentityResult',
			],
		],
	],
	'shapes'     => [
		'AccountSendingPausedException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AccountSendingPausedException',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AddHeaderAction'                                       => [
			'type'     => 'structure',
			'required' => [ 'HeaderName', 'HeaderValue', ],
			'members'  => [
				'HeaderName'  => [ 'shape' => 'HeaderName', ],
				'HeaderValue' => [ 'shape' => 'HeaderValue', ],
			],
		],
		'Address'                                               => [ 'type' => 'string', ],
		'AddressList'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Address', ],
		],
		'AlreadyExistsException'                                => [
			'type'      => 'structure',
			'members'   => [ 'Name' => [ 'shape' => 'RuleOrRuleSetName', ], ],
			'error'     => [
				'code'           => 'AlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AmazonResourceName'                                    => [ 'type' => 'string', ],
		'ArrivalDate'                                           => [ 'type' => 'timestamp', ],
		'BehaviorOnMXFailure'                                   => [
			'type' => 'string',
			'enum' => [ 'UseDefaultValue', 'RejectMessage', ],
		],
		'Body'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Text' => [ 'shape' => 'Content', ],
				'Html' => [ 'shape' => 'Content', ],
			],
		],
		'BounceAction'                                          => [
			'type'     => 'structure',
			'required' => [ 'SmtpReplyCode', 'Message', 'Sender', ],
			'members'  => [
				'TopicArn'      => [ 'shape' => 'AmazonResourceName', ],
				'SmtpReplyCode' => [ 'shape' => 'BounceSmtpReplyCode', ],
				'StatusCode'    => [ 'shape' => 'BounceStatusCode', ],
				'Message'       => [ 'shape' => 'BounceMessage', ],
				'Sender'        => [ 'shape' => 'Address', ],
			],
		],
		'BounceMessage'                                         => [ 'type' => 'string', ],
		'BounceSmtpReplyCode'                                   => [ 'type' => 'string', ],
		'BounceStatusCode'                                      => [ 'type' => 'string', ],
		'BounceType'                                            => [
			'type' => 'string',
			'enum' => [
				'DoesNotExist',
				'MessageTooLarge',
				'ExceededQuota',
				'ContentRejected',
				'Undefined',
				'TemporaryFailure',
			],
		],
		'BouncedRecipientInfo'                                  => [
			'type'     => 'structure',
			'required' => [ 'Recipient', ],
			'members'  => [
				'Recipient'          => [ 'shape' => 'Address', ],
				'RecipientArn'       => [ 'shape' => 'AmazonResourceName', ],
				'BounceType'         => [ 'shape' => 'BounceType', ],
				'RecipientDsnFields' => [ 'shape' => 'RecipientDsnFields', ],
			],
		],
		'BouncedRecipientInfoList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BouncedRecipientInfo', ],
		],
		'BulkEmailDestination'                                  => [
			'type'     => 'structure',
			'required' => [ 'Destination', ],
			'members'  => [
				'Destination'             => [ 'shape' => 'Destination', ],
				'ReplacementTags'         => [ 'shape' => 'MessageTagList', ],
				'ReplacementTemplateData' => [ 'shape' => 'TemplateData', ],
			],
		],
		'BulkEmailDestinationList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BulkEmailDestination', ],
		],
		'BulkEmailDestinationStatus'                            => [
			'type'    => 'structure',
			'members' => [
				'Status'    => [ 'shape' => 'BulkEmailStatus', ],
				'Error'     => [ 'shape' => 'Error', ],
				'MessageId' => [ 'shape' => 'MessageId', ],
			],
		],
		'BulkEmailDestinationStatusList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BulkEmailDestinationStatus', ],
		],
		'BulkEmailStatus'                                       => [
			'type' => 'string',
			'enum' => [
				'Success',
				'MessageRejected',
				'MailFromDomainNotVerified',
				'ConfigurationSetDoesNotExist',
				'TemplateDoesNotExist',
				'AccountSuspended',
				'AccountThrottled',
				'AccountDailyQuotaExceeded',
				'InvalidSendingPoolName',
				'AccountSendingPaused',
				'ConfigurationSetSendingPaused',
				'InvalidParameterValue',
				'TransientFailure',
				'Failed',
			],
		],
		'CannotDeleteException'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Name' => [ 'shape' => 'RuleOrRuleSetName', ], ],
			'error'     => [
				'code'           => 'CannotDelete',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Charset'                                               => [ 'type' => 'string', ],
		'Cidr'                                                  => [ 'type' => 'string', ],
		'CloneReceiptRuleSetRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'OriginalRuleSetName', ],
			'members'  => [
				'RuleSetName'         => [ 'shape' => 'ReceiptRuleSetName', ],
				'OriginalRuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
			],
		],
		'CloneReceiptRuleSetResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'CloudWatchDestination'                                 => [
			'type'     => 'structure',
			'required' => [ 'DimensionConfigurations', ],
			'members'  => [ 'DimensionConfigurations' => [ 'shape' => 'CloudWatchDimensionConfigurations', ], ],
		],
		'CloudWatchDimensionConfiguration'                      => [
			'type'     => 'structure',
			'required' => [
				'DimensionName',
				'DimensionValueSource',
				'DefaultDimensionValue',
			],
			'members'  => [
				'DimensionName'         => [ 'shape' => 'DimensionName', ],
				'DimensionValueSource'  => [ 'shape' => 'DimensionValueSource', ],
				'DefaultDimensionValue' => [ 'shape' => 'DefaultDimensionValue', ],
			],
		],
		'CloudWatchDimensionConfigurations'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CloudWatchDimensionConfiguration', ],
		],
		'ConfigurationSet'                                      => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [ 'Name' => [ 'shape' => 'ConfigurationSetName', ], ],
		],
		'ConfigurationSetAlreadyExistsException'                => [
			'type'      => 'structure',
			'members'   => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
			'error'     => [
				'code'           => 'ConfigurationSetAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ConfigurationSetAttribute'                             => [
			'type' => 'string',
			'enum' => [
				'eventDestinations',
				'trackingOptions',
				'deliveryOptions',
				'reputationOptions',
			],
		],
		'ConfigurationSetAttributeList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationSetAttribute', ],
		],
		'ConfigurationSetDoesNotExistException'                 => [
			'type'      => 'structure',
			'members'   => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
			'error'     => [
				'code'           => 'ConfigurationSetDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ConfigurationSetName'                                  => [ 'type' => 'string', ],
		'ConfigurationSetSendingPausedException'                => [
			'type'      => 'structure',
			'members'   => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
			'error'     => [
				'code'           => 'ConfigurationSetSendingPausedException',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ConfigurationSets'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationSet', ],
		],
		'Content'                                               => [
			'type'     => 'structure',
			'required' => [ 'Data', ],
			'members'  => [
				'Data'    => [ 'shape' => 'MessageData', ],
				'Charset' => [ 'shape' => 'Charset', ],
			],
		],
		'Counter'                                               => [ 'type' => 'long', ],
		'CreateConfigurationSetEventDestinationRequest'         => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestination',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestination'     => [ 'shape' => 'EventDestination', ],
			],
		],
		'CreateConfigurationSetEventDestinationResponse'        => [ 'type' => 'structure', 'members' => [], ],
		'CreateConfigurationSetRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSet', ],
			'members'  => [ 'ConfigurationSet' => [ 'shape' => 'ConfigurationSet', ], ],
		],
		'CreateConfigurationSetResponse'                        => [ 'type' => 'structure', 'members' => [], ],
		'CreateConfigurationSetTrackingOptionsRequest'          => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'TrackingOptions',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'TrackingOptions'      => [ 'shape' => 'TrackingOptions', ],
			],
		],
		'CreateConfigurationSetTrackingOptionsResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'CreateCustomVerificationEmailTemplateRequest'          => [
			'type'     => 'structure',
			'required' => [
				'TemplateName',
				'FromEmailAddress',
				'TemplateSubject',
				'TemplateContent',
				'SuccessRedirectionURL',
				'FailureRedirectionURL',
			],
			'members'  => [
				'TemplateName'          => [ 'shape' => 'TemplateName', ],
				'FromEmailAddress'      => [ 'shape' => 'FromAddress', ],
				'TemplateSubject'       => [ 'shape' => 'Subject', ],
				'TemplateContent'       => [ 'shape' => 'TemplateContent', ],
				'SuccessRedirectionURL' => [ 'shape' => 'SuccessRedirectionURL', ],
				'FailureRedirectionURL' => [ 'shape' => 'FailureRedirectionURL', ],
			],
		],
		'CreateReceiptFilterRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'Filter', ],
			'members'  => [ 'Filter' => [ 'shape' => 'ReceiptFilter', ], ],
		],
		'CreateReceiptFilterResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'CreateReceiptRuleRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'Rule', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'After'       => [ 'shape' => 'ReceiptRuleName', ],
				'Rule'        => [ 'shape' => 'ReceiptRule', ],
			],
		],
		'CreateReceiptRuleResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'CreateReceiptRuleSetRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', ],
			'members'  => [ 'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ], ],
		],
		'CreateReceiptRuleSetResponse'                          => [ 'type' => 'structure', 'members' => [], ],
		'CreateTemplateRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'Template', ],
			'members'  => [ 'Template' => [ 'shape' => 'Template', ], ],
		],
		'CreateTemplateResponse'                                => [ 'type' => 'structure', 'members' => [], ],
		'CustomMailFromStatus'                                  => [
			'type' => 'string',
			'enum' => [
				'Pending',
				'Success',
				'Failed',
				'TemporaryFailure',
			],
		],
		'CustomRedirectDomain'                                  => [ 'type' => 'string', ],
		'CustomVerificationEmailInvalidContentException'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CustomVerificationEmailInvalidContent',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CustomVerificationEmailTemplate'                       => [
			'type'    => 'structure',
			'members' => [
				'TemplateName'          => [ 'shape' => 'TemplateName', ],
				'FromEmailAddress'      => [ 'shape' => 'FromAddress', ],
				'TemplateSubject'       => [ 'shape' => 'Subject', ],
				'SuccessRedirectionURL' => [ 'shape' => 'SuccessRedirectionURL', ],
				'FailureRedirectionURL' => [ 'shape' => 'FailureRedirectionURL', ],
			],
		],
		'CustomVerificationEmailTemplateAlreadyExistsException' => [
			'type'      => 'structure',
			'members'   => [ 'CustomVerificationEmailTemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'CustomVerificationEmailTemplateAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CustomVerificationEmailTemplateDoesNotExistException'  => [
			'type'      => 'structure',
			'members'   => [ 'CustomVerificationEmailTemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'CustomVerificationEmailTemplateDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CustomVerificationEmailTemplates'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CustomVerificationEmailTemplate', ],
		],
		'DefaultDimensionValue'                                 => [ 'type' => 'string', ],
		'DeleteConfigurationSetEventDestinationRequest'         => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestinationName',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
		],
		'DeleteConfigurationSetEventDestinationResponse'        => [ 'type' => 'structure', 'members' => [], ],
		'DeleteConfigurationSetRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
		],
		'DeleteConfigurationSetResponse'                        => [ 'type' => 'structure', 'members' => [], ],
		'DeleteConfigurationSetTrackingOptionsRequest'          => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
		],
		'DeleteConfigurationSetTrackingOptionsResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'DeleteCustomVerificationEmailTemplateRequest'          => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
		],
		'DeleteIdentityPolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'Identity', 'PolicyName', ],
			'members'  => [
				'Identity'   => [ 'shape' => 'Identity', ],
				'PolicyName' => [ 'shape' => 'PolicyName', ],
			],
		],
		'DeleteIdentityPolicyResponse'                          => [ 'type' => 'structure', 'members' => [], ],
		'DeleteIdentityRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'Identity', ],
			'members'  => [ 'Identity' => [ 'shape' => 'Identity', ], ],
		],
		'DeleteIdentityResponse'                                => [ 'type' => 'structure', 'members' => [], ],
		'DeleteReceiptFilterRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'FilterName', ],
			'members'  => [ 'FilterName' => [ 'shape' => 'ReceiptFilterName', ], ],
		],
		'DeleteReceiptFilterResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'DeleteReceiptRuleRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'RuleName', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'RuleName'    => [ 'shape' => 'ReceiptRuleName', ],
			],
		],
		'DeleteReceiptRuleResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteReceiptRuleSetRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', ],
			'members'  => [ 'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ], ],
		],
		'DeleteReceiptRuleSetResponse'                          => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTemplateRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
		],
		'DeleteTemplateResponse'                                => [ 'type' => 'structure', 'members' => [], ],
		'DeleteVerifiedEmailAddressRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'EmailAddress', ],
			'members'  => [ 'EmailAddress' => [ 'shape' => 'Address', ], ],
		],
		'DeliveryOptions'                                       => [
			'type'    => 'structure',
			'members' => [ 'TlsPolicy' => [ 'shape' => 'TlsPolicy', ], ],
		],
		'DescribeActiveReceiptRuleSetRequest'                   => [ 'type' => 'structure', 'members' => [], ],
		'DescribeActiveReceiptRuleSetResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'Metadata' => [ 'shape' => 'ReceiptRuleSetMetadata', ],
				'Rules'    => [ 'shape' => 'ReceiptRulesList', ],
			],
		],
		'DescribeConfigurationSetRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName'           => [ 'shape' => 'ConfigurationSetName', ],
				'ConfigurationSetAttributeNames' => [ 'shape' => 'ConfigurationSetAttributeList', ],
			],
		],
		'DescribeConfigurationSetResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationSet'  => [ 'shape' => 'ConfigurationSet', ],
				'EventDestinations' => [ 'shape' => 'EventDestinations', ],
				'TrackingOptions'   => [ 'shape' => 'TrackingOptions', ],
				'DeliveryOptions'   => [ 'shape' => 'DeliveryOptions', ],
				'ReputationOptions' => [ 'shape' => 'ReputationOptions', ],
			],
		],
		'DescribeReceiptRuleRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'RuleName', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'RuleName'    => [ 'shape' => 'ReceiptRuleName', ],
			],
		],
		'DescribeReceiptRuleResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'Rule' => [ 'shape' => 'ReceiptRule', ], ],
		],
		'DescribeReceiptRuleSetRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', ],
			'members'  => [ 'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ], ],
		],
		'DescribeReceiptRuleSetResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'Metadata' => [ 'shape' => 'ReceiptRuleSetMetadata', ],
				'Rules'    => [ 'shape' => 'ReceiptRulesList', ],
			],
		],
		'Destination'                                           => [
			'type'    => 'structure',
			'members' => [
				'ToAddresses'  => [ 'shape' => 'AddressList', ],
				'CcAddresses'  => [ 'shape' => 'AddressList', ],
				'BccAddresses' => [ 'shape' => 'AddressList', ],
			],
		],
		'DiagnosticCode'                                        => [ 'type' => 'string', ],
		'DimensionName'                                         => [ 'type' => 'string', ],
		'DimensionValueSource'                                  => [
			'type' => 'string',
			'enum' => [
				'messageTag',
				'emailHeader',
				'linkTag',
			],
		],
		'DkimAttributes'                                        => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Identity', ],
			'value' => [ 'shape' => 'IdentityDkimAttributes', ],
		],
		'Domain'                                                => [ 'type' => 'string', ],
		'DsnAction'                                             => [
			'type' => 'string',
			'enum' => [
				'failed',
				'delayed',
				'delivered',
				'relayed',
				'expanded',
			],
		],
		'DsnStatus'                                             => [ 'type' => 'string', ],
		'Enabled'                                               => [ 'type' => 'boolean', ],
		'Error'                                                 => [ 'type' => 'string', ],
		'EventDestination'                                      => [
			'type'     => 'structure',
			'required' => [ 'Name', 'MatchingEventTypes', ],
			'members'  => [
				'Name'                       => [ 'shape' => 'EventDestinationName', ],
				'Enabled'                    => [ 'shape' => 'Enabled', ],
				'MatchingEventTypes'         => [ 'shape' => 'EventTypes', ],
				'KinesisFirehoseDestination' => [ 'shape' => 'KinesisFirehoseDestination', ],
				'CloudWatchDestination'      => [ 'shape' => 'CloudWatchDestination', ],
				'SNSDestination'             => [ 'shape' => 'SNSDestination', ],
			],
		],
		'EventDestinationAlreadyExistsException'                => [
			'type'      => 'structure',
			'members'   => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
			'error'     => [
				'code'           => 'EventDestinationAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EventDestinationDoesNotExistException'                 => [
			'type'      => 'structure',
			'members'   => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
			'error'     => [
				'code'           => 'EventDestinationDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EventDestinationName'                                  => [ 'type' => 'string', ],
		'EventDestinations'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EventDestination', ],
		],
		'EventType'                                             => [
			'type' => 'string',
			'enum' => [
				'send',
				'reject',
				'bounce',
				'complaint',
				'delivery',
				'open',
				'click',
				'renderingFailure',
			],
		],
		'EventTypes'                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EventType', ],
		],
		'Explanation'                                           => [ 'type' => 'string', ],
		'ExtensionField'                                        => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Value', ],
			'members'  => [
				'Name'  => [ 'shape' => 'ExtensionFieldName', ],
				'Value' => [ 'shape' => 'ExtensionFieldValue', ],
			],
		],
		'ExtensionFieldList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ExtensionField', ],
		],
		'ExtensionFieldName'                                    => [ 'type' => 'string', ],
		'ExtensionFieldValue'                                   => [ 'type' => 'string', ],
		'FailureRedirectionURL'                                 => [ 'type' => 'string', ],
		'FromAddress'                                           => [ 'type' => 'string', ],
		'FromEmailAddressNotVerifiedException'                  => [
			'type'      => 'structure',
			'members'   => [ 'FromEmailAddress' => [ 'shape' => 'FromAddress', ], ],
			'error'     => [
				'code'           => 'FromEmailAddressNotVerified',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'GetAccountSendingEnabledResponse'                      => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'Enabled', ], ],
		],
		'GetCustomVerificationEmailTemplateRequest'             => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
		],
		'GetCustomVerificationEmailTemplateResponse'            => [
			'type'    => 'structure',
			'members' => [
				'TemplateName'          => [ 'shape' => 'TemplateName', ],
				'FromEmailAddress'      => [ 'shape' => 'FromAddress', ],
				'TemplateSubject'       => [ 'shape' => 'Subject', ],
				'TemplateContent'       => [ 'shape' => 'TemplateContent', ],
				'SuccessRedirectionURL' => [ 'shape' => 'SuccessRedirectionURL', ],
				'FailureRedirectionURL' => [ 'shape' => 'FailureRedirectionURL', ],
			],
		],
		'GetIdentityDkimAttributesRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Identities', ],
			'members'  => [ 'Identities' => [ 'shape' => 'IdentityList', ], ],
		],
		'GetIdentityDkimAttributesResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'DkimAttributes', ],
			'members'  => [ 'DkimAttributes' => [ 'shape' => 'DkimAttributes', ], ],
		],
		'GetIdentityMailFromDomainAttributesRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Identities', ],
			'members'  => [ 'Identities' => [ 'shape' => 'IdentityList', ], ],
		],
		'GetIdentityMailFromDomainAttributesResponse'           => [
			'type'     => 'structure',
			'required' => [ 'MailFromDomainAttributes', ],
			'members'  => [ 'MailFromDomainAttributes' => [ 'shape' => 'MailFromDomainAttributes', ], ],
		],
		'GetIdentityNotificationAttributesRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Identities', ],
			'members'  => [ 'Identities' => [ 'shape' => 'IdentityList', ], ],
		],
		'GetIdentityNotificationAttributesResponse'             => [
			'type'     => 'structure',
			'required' => [ 'NotificationAttributes', ],
			'members'  => [ 'NotificationAttributes' => [ 'shape' => 'NotificationAttributes', ], ],
		],
		'GetIdentityPoliciesRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'Identity', 'PolicyNames', ],
			'members'  => [
				'Identity'    => [ 'shape' => 'Identity', ],
				'PolicyNames' => [ 'shape' => 'PolicyNameList', ],
			],
		],
		'GetIdentityPoliciesResponse'                           => [
			'type'     => 'structure',
			'required' => [ 'Policies', ],
			'members'  => [ 'Policies' => [ 'shape' => 'PolicyMap', ], ],
		],
		'GetIdentityVerificationAttributesRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Identities', ],
			'members'  => [ 'Identities' => [ 'shape' => 'IdentityList', ], ],
		],
		'GetIdentityVerificationAttributesResponse'             => [
			'type'     => 'structure',
			'required' => [ 'VerificationAttributes', ],
			'members'  => [ 'VerificationAttributes' => [ 'shape' => 'VerificationAttributes', ], ],
		],
		'GetSendQuotaResponse'                                  => [
			'type'    => 'structure',
			'members' => [
				'Max24HourSend'   => [ 'shape' => 'Max24HourSend', ],
				'MaxSendRate'     => [ 'shape' => 'MaxSendRate', ],
				'SentLast24Hours' => [ 'shape' => 'SentLast24Hours', ],
			],
		],
		'GetSendStatisticsResponse'                             => [
			'type'    => 'structure',
			'members' => [ 'SendDataPoints' => [ 'shape' => 'SendDataPointList', ], ],
		],
		'GetTemplateRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
		],
		'GetTemplateResponse'                                   => [
			'type'    => 'structure',
			'members' => [ 'Template' => [ 'shape' => 'Template', ], ],
		],
		'HeaderName'                                            => [ 'type' => 'string', ],
		'HeaderValue'                                           => [ 'type' => 'string', ],
		'HtmlPart'                                              => [ 'type' => 'string', ],
		'Identity'                                              => [ 'type' => 'string', ],
		'IdentityDkimAttributes'                                => [
			'type'     => 'structure',
			'required' => [
				'DkimEnabled',
				'DkimVerificationStatus',
			],
			'members'  => [
				'DkimEnabled'            => [ 'shape' => 'Enabled', ],
				'DkimVerificationStatus' => [ 'shape' => 'VerificationStatus', ],
				'DkimTokens'             => [ 'shape' => 'VerificationTokenList', ],
			],
		],
		'IdentityList'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Identity', ],
		],
		'IdentityMailFromDomainAttributes'                      => [
			'type'     => 'structure',
			'required' => [
				'MailFromDomain',
				'MailFromDomainStatus',
				'BehaviorOnMXFailure',
			],
			'members'  => [
				'MailFromDomain'       => [ 'shape' => 'MailFromDomainName', ],
				'MailFromDomainStatus' => [ 'shape' => 'CustomMailFromStatus', ],
				'BehaviorOnMXFailure'  => [ 'shape' => 'BehaviorOnMXFailure', ],
			],
		],
		'IdentityNotificationAttributes'                        => [
			'type'     => 'structure',
			'required' => [
				'BounceTopic',
				'ComplaintTopic',
				'DeliveryTopic',
				'ForwardingEnabled',
			],
			'members'  => [
				'BounceTopic'                            => [ 'shape' => 'NotificationTopic', ],
				'ComplaintTopic'                         => [ 'shape' => 'NotificationTopic', ],
				'DeliveryTopic'                          => [ 'shape' => 'NotificationTopic', ],
				'ForwardingEnabled'                      => [ 'shape' => 'Enabled', ],
				'HeadersInBounceNotificationsEnabled'    => [ 'shape' => 'Enabled', ],
				'HeadersInComplaintNotificationsEnabled' => [ 'shape' => 'Enabled', ],
				'HeadersInDeliveryNotificationsEnabled'  => [ 'shape' => 'Enabled', ],
			],
		],
		'IdentityType'                                          => [
			'type' => 'string',
			'enum' => [ 'EmailAddress', 'Domain', ],
		],
		'IdentityVerificationAttributes'                        => [
			'type'     => 'structure',
			'required' => [ 'VerificationStatus', ],
			'members'  => [
				'VerificationStatus' => [ 'shape' => 'VerificationStatus', ],
				'VerificationToken'  => [ 'shape' => 'VerificationToken', ],
			],
		],
		'InvalidCloudWatchDestinationException'                 => [
			'type'      => 'structure',
			'members'   => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
			'error'     => [
				'code'           => 'InvalidCloudWatchDestination',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidConfigurationSetException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidConfigurationSet',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDeliveryOptionsException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDeliveryOptions',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidFirehoseDestinationException'                   => [
			'type'      => 'structure',
			'members'   => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
			'error'     => [
				'code'           => 'InvalidFirehoseDestination',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidLambdaFunctionException'                        => [
			'type'      => 'structure',
			'members'   => [ 'FunctionArn' => [ 'shape' => 'AmazonResourceName', ], ],
			'error'     => [
				'code'           => 'InvalidLambdaFunction',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidPolicyException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidPolicy',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidRenderingParameterException'                    => [
			'type'      => 'structure',
			'members'   => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'InvalidRenderingParameter',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidS3ConfigurationException'                       => [
			'type'      => 'structure',
			'members'   => [ 'Bucket' => [ 'shape' => 'S3BucketName', ], ],
			'error'     => [
				'code'           => 'InvalidS3Configuration',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSNSDestinationException'                        => [
			'type'      => 'structure',
			'members'   => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
			],
			'error'     => [
				'code'           => 'InvalidSNSDestination',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSnsTopicException'                              => [
			'type'      => 'structure',
			'members'   => [ 'Topic' => [ 'shape' => 'AmazonResourceName', ], ],
			'error'     => [
				'code'           => 'InvalidSnsTopic',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidTemplateException'                              => [
			'type'      => 'structure',
			'members'   => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'InvalidTemplate',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidTrackingOptionsException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidTrackingOptions',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvocationType'                                        => [
			'type' => 'string',
			'enum' => [ 'Event', 'RequestResponse', ],
		],
		'KinesisFirehoseDestination'                            => [
			'type'     => 'structure',
			'required' => [
				'IAMRoleARN',
				'DeliveryStreamARN',
			],
			'members'  => [
				'IAMRoleARN'        => [ 'shape' => 'AmazonResourceName', ],
				'DeliveryStreamARN' => [ 'shape' => 'AmazonResourceName', ],
			],
		],
		'LambdaAction'                                          => [
			'type'     => 'structure',
			'required' => [ 'FunctionArn', ],
			'members'  => [
				'TopicArn'       => [ 'shape' => 'AmazonResourceName', ],
				'FunctionArn'    => [ 'shape' => 'AmazonResourceName', ],
				'InvocationType' => [ 'shape' => 'InvocationType', ],
			],
		],
		'LastAttemptDate'                                       => [ 'type' => 'timestamp', ],
		'LastFreshStart'                                        => [ 'type' => 'timestamp', ],
		'LimitExceededException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'LimitExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ListConfigurationSetsRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [ 'shape' => 'NextToken', ],
				'MaxItems'  => [ 'shape' => 'MaxItems', ],
			],
		],
		'ListConfigurationSetsResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationSets' => [ 'shape' => 'ConfigurationSets', ],
				'NextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'ListCustomVerificationEmailTemplatesRequest'           => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [ 'shape' => 'NextToken', ],
				'MaxResults' => [ 'shape' => 'MaxResults', ],
			],
		],
		'ListCustomVerificationEmailTemplatesResponse'          => [
			'type'    => 'structure',
			'members' => [
				'CustomVerificationEmailTemplates' => [ 'shape' => 'CustomVerificationEmailTemplates', ],
				'NextToken'                        => [ 'shape' => 'NextToken', ],
			],
		],
		'ListIdentitiesRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'IdentityType' => [ 'shape' => 'IdentityType', ],
				'NextToken'    => [ 'shape' => 'NextToken', ],
				'MaxItems'     => [ 'shape' => 'MaxItems', ],
			],
		],
		'ListIdentitiesResponse'                                => [
			'type'     => 'structure',
			'required' => [ 'Identities', ],
			'members'  => [
				'Identities' => [ 'shape' => 'IdentityList', ],
				'NextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListIdentityPoliciesRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'Identity', ],
			'members'  => [ 'Identity' => [ 'shape' => 'Identity', ], ],
		],
		'ListIdentityPoliciesResponse'                          => [
			'type'     => 'structure',
			'required' => [ 'PolicyNames', ],
			'members'  => [ 'PolicyNames' => [ 'shape' => 'PolicyNameList', ], ],
		],
		'ListReceiptFiltersRequest'                             => [ 'type' => 'structure', 'members' => [], ],
		'ListReceiptFiltersResponse'                            => [
			'type'    => 'structure',
			'members' => [ 'Filters' => [ 'shape' => 'ReceiptFilterList', ], ],
		],
		'ListReceiptRuleSetsRequest'                            => [
			'type'    => 'structure',
			'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], ],
		],
		'ListReceiptRuleSetsResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'RuleSets'  => [ 'shape' => 'ReceiptRuleSetsLists', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTemplatesRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [ 'shape' => 'NextToken', ],
				'MaxItems'  => [ 'shape' => 'MaxItems', ],
			],
		],
		'ListTemplatesResponse'                                 => [
			'type'    => 'structure',
			'members' => [
				'TemplatesMetadata' => [ 'shape' => 'TemplateMetadataList', ],
				'NextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'ListVerifiedEmailAddressesResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'VerifiedEmailAddresses' => [ 'shape' => 'AddressList', ], ],
		],
		'MailFromDomainAttributes'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Identity', ],
			'value' => [ 'shape' => 'IdentityMailFromDomainAttributes', ],
		],
		'MailFromDomainName'                                    => [ 'type' => 'string', ],
		'MailFromDomainNotVerifiedException'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'MailFromDomainNotVerifiedException',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Max24HourSend'                                         => [ 'type' => 'double', ],
		'MaxItems'                                              => [ 'type' => 'integer', ],
		'MaxResults'                                            => [
			'type' => 'integer',
			'box'  => true,
			'max'  => 50,
			'min'  => 1,
		],
		'MaxSendRate'                                           => [ 'type' => 'double', ],
		'Message'                                               => [
			'type'     => 'structure',
			'required' => [ 'Subject', 'Body', ],
			'members'  => [
				'Subject' => [ 'shape' => 'Content', ],
				'Body'    => [ 'shape' => 'Body', ],
			],
		],
		'MessageData'                                           => [ 'type' => 'string', ],
		'MessageDsn'                                            => [
			'type'     => 'structure',
			'required' => [ 'ReportingMta', ],
			'members'  => [
				'ReportingMta'    => [ 'shape' => 'ReportingMta', ],
				'ArrivalDate'     => [ 'shape' => 'ArrivalDate', ],
				'ExtensionFields' => [ 'shape' => 'ExtensionFieldList', ],
			],
		],
		'MessageId'                                             => [ 'type' => 'string', ],
		'MessageRejected'                                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'MessageRejected',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'MessageTag'                                            => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Value', ],
			'members'  => [
				'Name'  => [ 'shape' => 'MessageTagName', ],
				'Value' => [ 'shape' => 'MessageTagValue', ],
			],
		],
		'MessageTagList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MessageTag', ],
		],
		'MessageTagName'                                        => [ 'type' => 'string', ],
		'MessageTagValue'                                       => [ 'type' => 'string', ],
		'MissingRenderingAttributeException'                    => [
			'type'      => 'structure',
			'members'   => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'MissingRenderingAttribute',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NextToken'                                             => [ 'type' => 'string', ],
		'NotificationAttributes'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Identity', ],
			'value' => [ 'shape' => 'IdentityNotificationAttributes', ],
		],
		'NotificationTopic'                                     => [ 'type' => 'string', ],
		'NotificationType'                                      => [
			'type' => 'string',
			'enum' => [ 'Bounce', 'Complaint', 'Delivery', ],
		],
		'Policy'                                                => [ 'type' => 'string', 'min' => 1, ],
		'PolicyMap'                                             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'PolicyName', ],
			'value' => [ 'shape' => 'Policy', ],
		],
		'PolicyName'                                            => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'PolicyNameList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyName', ],
		],
		'ProductionAccessNotGrantedException'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ProductionAccessNotGranted',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'PutConfigurationSetDeliveryOptionsRequest'             => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'DeliveryOptions'      => [ 'shape' => 'DeliveryOptions', ],
			],
		],
		'PutConfigurationSetDeliveryOptionsResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'PutIdentityPolicyRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'Identity',
				'PolicyName',
				'Policy',
			],
			'members'  => [
				'Identity'   => [ 'shape' => 'Identity', ],
				'PolicyName' => [ 'shape' => 'PolicyName', ],
				'Policy'     => [ 'shape' => 'Policy', ],
			],
		],
		'PutIdentityPolicyResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'RawMessage'                                            => [
			'type'     => 'structure',
			'required' => [ 'Data', ],
			'members'  => [ 'Data' => [ 'shape' => 'RawMessageData', ], ],
		],
		'RawMessageData'                                        => [ 'type' => 'blob', ],
		'ReceiptAction'                                         => [
			'type'    => 'structure',
			'members' => [
				'S3Action'        => [ 'shape' => 'S3Action', ],
				'BounceAction'    => [ 'shape' => 'BounceAction', ],
				'WorkmailAction'  => [ 'shape' => 'WorkmailAction', ],
				'LambdaAction'    => [ 'shape' => 'LambdaAction', ],
				'StopAction'      => [ 'shape' => 'StopAction', ],
				'AddHeaderAction' => [ 'shape' => 'AddHeaderAction', ],
				'SNSAction'       => [ 'shape' => 'SNSAction', ],
			],
		],
		'ReceiptActionsList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReceiptAction', ],
		],
		'ReceiptFilter'                                         => [
			'type'     => 'structure',
			'required' => [ 'Name', 'IpFilter', ],
			'members'  => [
				'Name'     => [ 'shape' => 'ReceiptFilterName', ],
				'IpFilter' => [ 'shape' => 'ReceiptIpFilter', ],
			],
		],
		'ReceiptFilterList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReceiptFilter', ],
		],
		'ReceiptFilterName'                                     => [ 'type' => 'string', ],
		'ReceiptFilterPolicy'                                   => [
			'type' => 'string',
			'enum' => [ 'Block', 'Allow', ],
		],
		'ReceiptIpFilter'                                       => [
			'type'     => 'structure',
			'required' => [ 'Policy', 'Cidr', ],
			'members'  => [
				'Policy' => [ 'shape' => 'ReceiptFilterPolicy', ],
				'Cidr'   => [ 'shape' => 'Cidr', ],
			],
		],
		'ReceiptRule'                                           => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'Name'        => [ 'shape' => 'ReceiptRuleName', ],
				'Enabled'     => [ 'shape' => 'Enabled', ],
				'TlsPolicy'   => [ 'shape' => 'TlsPolicy', ],
				'Recipients'  => [ 'shape' => 'RecipientsList', ],
				'Actions'     => [ 'shape' => 'ReceiptActionsList', ],
				'ScanEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'ReceiptRuleName'                                       => [ 'type' => 'string', ],
		'ReceiptRuleNamesList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReceiptRuleName', ],
		],
		'ReceiptRuleSetMetadata'                                => [
			'type'    => 'structure',
			'members' => [
				'Name'             => [ 'shape' => 'ReceiptRuleSetName', ],
				'CreatedTimestamp' => [ 'shape' => 'Timestamp', ],
			],
		],
		'ReceiptRuleSetName'                                    => [ 'type' => 'string', ],
		'ReceiptRuleSetsLists'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReceiptRuleSetMetadata', ],
		],
		'ReceiptRulesList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReceiptRule', ],
		],
		'Recipient'                                             => [ 'type' => 'string', ],
		'RecipientDsnFields'                                    => [
			'type'     => 'structure',
			'required' => [ 'Action', 'Status', ],
			'members'  => [
				'FinalRecipient'  => [ 'shape' => 'Address', ],
				'Action'          => [ 'shape' => 'DsnAction', ],
				'RemoteMta'       => [ 'shape' => 'RemoteMta', ],
				'Status'          => [ 'shape' => 'DsnStatus', ],
				'DiagnosticCode'  => [ 'shape' => 'DiagnosticCode', ],
				'LastAttemptDate' => [ 'shape' => 'LastAttemptDate', ],
				'ExtensionFields' => [ 'shape' => 'ExtensionFieldList', ],
			],
		],
		'RecipientsList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Recipient', ],
		],
		'RemoteMta'                                             => [ 'type' => 'string', ],
		'RenderedTemplate'                                      => [ 'type' => 'string', ],
		'ReorderReceiptRuleSetRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'RuleNames', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'RuleNames'   => [ 'shape' => 'ReceiptRuleNamesList', ],
			],
		],
		'ReorderReceiptRuleSetResponse'                         => [ 'type' => 'structure', 'members' => [], ],
		'ReportingMta'                                          => [ 'type' => 'string', ],
		'ReputationOptions'                                     => [
			'type'    => 'structure',
			'members' => [
				'SendingEnabled'           => [ 'shape' => 'Enabled', ],
				'ReputationMetricsEnabled' => [ 'shape' => 'Enabled', ],
				'LastFreshStart'           => [ 'shape' => 'LastFreshStart', ],
			],
		],
		'RuleDoesNotExistException'                             => [
			'type'      => 'structure',
			'members'   => [ 'Name' => [ 'shape' => 'RuleOrRuleSetName', ], ],
			'error'     => [
				'code'           => 'RuleDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'RuleOrRuleSetName'                                     => [ 'type' => 'string', ],
		'RuleSetDoesNotExistException'                          => [
			'type'      => 'structure',
			'members'   => [ 'Name' => [ 'shape' => 'RuleOrRuleSetName', ], ],
			'error'     => [
				'code'           => 'RuleSetDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'S3Action'                                              => [
			'type'     => 'structure',
			'required' => [ 'BucketName', ],
			'members'  => [
				'TopicArn'        => [ 'shape' => 'AmazonResourceName', ],
				'BucketName'      => [ 'shape' => 'S3BucketName', ],
				'ObjectKeyPrefix' => [ 'shape' => 'S3KeyPrefix', ],
				'KmsKeyArn'       => [ 'shape' => 'AmazonResourceName', ],
			],
		],
		'S3BucketName'                                          => [ 'type' => 'string', ],
		'S3KeyPrefix'                                           => [ 'type' => 'string', ],
		'SNSAction'                                             => [
			'type'     => 'structure',
			'required' => [ 'TopicArn', ],
			'members'  => [
				'TopicArn' => [ 'shape' => 'AmazonResourceName', ],
				'Encoding' => [ 'shape' => 'SNSActionEncoding', ],
			],
		],
		'SNSActionEncoding'                                     => [
			'type' => 'string',
			'enum' => [ 'UTF-8', 'Base64', ],
		],
		'SNSDestination'                                        => [
			'type'     => 'structure',
			'required' => [ 'TopicARN', ],
			'members'  => [ 'TopicARN' => [ 'shape' => 'AmazonResourceName', ], ],
		],
		'SendBounceRequest'                                     => [
			'type'     => 'structure',
			'required' => [
				'OriginalMessageId',
				'BounceSender',
				'BouncedRecipientInfoList',
			],
			'members'  => [
				'OriginalMessageId'        => [ 'shape' => 'MessageId', ],
				'BounceSender'             => [ 'shape' => 'Address', ],
				'Explanation'              => [ 'shape' => 'Explanation', ],
				'MessageDsn'               => [ 'shape' => 'MessageDsn', ],
				'BouncedRecipientInfoList' => [ 'shape' => 'BouncedRecipientInfoList', ],
				'BounceSenderArn'          => [ 'shape' => 'AmazonResourceName', ],
			],
		],
		'SendBounceResponse'                                    => [
			'type'    => 'structure',
			'members' => [ 'MessageId' => [ 'shape' => 'MessageId', ], ],
		],
		'SendBulkTemplatedEmailRequest'                         => [
			'type'     => 'structure',
			'required' => [
				'Source',
				'Template',
				'Destinations',
			],
			'members'  => [
				'Source'               => [ 'shape' => 'Address', ],
				'SourceArn'            => [ 'shape' => 'AmazonResourceName', ],
				'ReplyToAddresses'     => [ 'shape' => 'AddressList', ],
				'ReturnPath'           => [ 'shape' => 'Address', ],
				'ReturnPathArn'        => [ 'shape' => 'AmazonResourceName', ],
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'DefaultTags'          => [ 'shape' => 'MessageTagList', ],
				'Template'             => [ 'shape' => 'TemplateName', ],
				'TemplateArn'          => [ 'shape' => 'AmazonResourceName', ],
				'DefaultTemplateData'  => [ 'shape' => 'TemplateData', ],
				'Destinations'         => [ 'shape' => 'BulkEmailDestinationList', ],
			],
		],
		'SendBulkTemplatedEmailResponse'                        => [
			'type'     => 'structure',
			'required' => [ 'Status', ],
			'members'  => [ 'Status' => [ 'shape' => 'BulkEmailDestinationStatusList', ], ],
		],
		'SendCustomVerificationEmailRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'EmailAddress', 'TemplateName', ],
			'members'  => [
				'EmailAddress'         => [ 'shape' => 'Address', ],
				'TemplateName'         => [ 'shape' => 'TemplateName', ],
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
			],
		],
		'SendCustomVerificationEmailResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'MessageId' => [ 'shape' => 'MessageId', ], ],
		],
		'SendDataPoint'                                         => [
			'type'    => 'structure',
			'members' => [
				'Timestamp'        => [ 'shape' => 'Timestamp', ],
				'DeliveryAttempts' => [ 'shape' => 'Counter', ],
				'Bounces'          => [ 'shape' => 'Counter', ],
				'Complaints'       => [ 'shape' => 'Counter', ],
				'Rejects'          => [ 'shape' => 'Counter', ],
			],
		],
		'SendDataPointList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SendDataPoint', ],
		],
		'SendEmailRequest'                                      => [
			'type'     => 'structure',
			'required' => [
				'Source',
				'Destination',
				'Message',
			],
			'members'  => [
				'Source'               => [ 'shape' => 'Address', ],
				'Destination'          => [ 'shape' => 'Destination', ],
				'Message'              => [ 'shape' => 'Message', ],
				'ReplyToAddresses'     => [ 'shape' => 'AddressList', ],
				'ReturnPath'           => [ 'shape' => 'Address', ],
				'SourceArn'            => [ 'shape' => 'AmazonResourceName', ],
				'ReturnPathArn'        => [ 'shape' => 'AmazonResourceName', ],
				'Tags'                 => [ 'shape' => 'MessageTagList', ],
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
			],
		],
		'SendEmailResponse'                                     => [
			'type'     => 'structure',
			'required' => [ 'MessageId', ],
			'members'  => [ 'MessageId' => [ 'shape' => 'MessageId', ], ],
		],
		'SendRawEmailRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'RawMessage', ],
			'members'  => [
				'Source'               => [ 'shape' => 'Address', ],
				'Destinations'         => [ 'shape' => 'AddressList', ],
				'RawMessage'           => [ 'shape' => 'RawMessage', ],
				'FromArn'              => [ 'shape' => 'AmazonResourceName', ],
				'SourceArn'            => [ 'shape' => 'AmazonResourceName', ],
				'ReturnPathArn'        => [ 'shape' => 'AmazonResourceName', ],
				'Tags'                 => [ 'shape' => 'MessageTagList', ],
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
			],
		],
		'SendRawEmailResponse'                                  => [
			'type'     => 'structure',
			'required' => [ 'MessageId', ],
			'members'  => [ 'MessageId' => [ 'shape' => 'MessageId', ], ],
		],
		'SendTemplatedEmailRequest'                             => [
			'type'     => 'structure',
			'required' => [
				'Source',
				'Destination',
				'Template',
				'TemplateData',
			],
			'members'  => [
				'Source'               => [ 'shape' => 'Address', ],
				'Destination'          => [ 'shape' => 'Destination', ],
				'ReplyToAddresses'     => [ 'shape' => 'AddressList', ],
				'ReturnPath'           => [ 'shape' => 'Address', ],
				'SourceArn'            => [ 'shape' => 'AmazonResourceName', ],
				'ReturnPathArn'        => [ 'shape' => 'AmazonResourceName', ],
				'Tags'                 => [ 'shape' => 'MessageTagList', ],
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'Template'             => [ 'shape' => 'TemplateName', ],
				'TemplateArn'          => [ 'shape' => 'AmazonResourceName', ],
				'TemplateData'         => [ 'shape' => 'TemplateData', ],
			],
		],
		'SendTemplatedEmailResponse'                            => [
			'type'     => 'structure',
			'required' => [ 'MessageId', ],
			'members'  => [ 'MessageId' => [ 'shape' => 'MessageId', ], ],
		],
		'SentLast24Hours'                                       => [ 'type' => 'double', ],
		'SetActiveReceiptRuleSetRequest'                        => [
			'type'    => 'structure',
			'members' => [ 'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ], ],
		],
		'SetActiveReceiptRuleSetResponse'                       => [ 'type' => 'structure', 'members' => [], ],
		'SetIdentityDkimEnabledRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Identity', 'DkimEnabled', ],
			'members'  => [
				'Identity'    => [ 'shape' => 'Identity', ],
				'DkimEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'SetIdentityDkimEnabledResponse'                        => [ 'type' => 'structure', 'members' => [], ],
		'SetIdentityFeedbackForwardingEnabledRequest'           => [
			'type'     => 'structure',
			'required' => [ 'Identity', 'ForwardingEnabled', ],
			'members'  => [
				'Identity'          => [ 'shape' => 'Identity', ],
				'ForwardingEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'SetIdentityFeedbackForwardingEnabledResponse'          => [ 'type' => 'structure', 'members' => [], ],
		'SetIdentityHeadersInNotificationsEnabledRequest'       => [
			'type'     => 'structure',
			'required' => [
				'Identity',
				'NotificationType',
				'Enabled',
			],
			'members'  => [
				'Identity'         => [ 'shape' => 'Identity', ],
				'NotificationType' => [ 'shape' => 'NotificationType', ],
				'Enabled'          => [ 'shape' => 'Enabled', ],
			],
		],
		'SetIdentityHeadersInNotificationsEnabledResponse'      => [ 'type' => 'structure', 'members' => [], ],
		'SetIdentityMailFromDomainRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Identity', ],
			'members'  => [
				'Identity'            => [ 'shape' => 'Identity', ],
				'MailFromDomain'      => [ 'shape' => 'MailFromDomainName', ],
				'BehaviorOnMXFailure' => [ 'shape' => 'BehaviorOnMXFailure', ],
			],
		],
		'SetIdentityMailFromDomainResponse'                     => [ 'type' => 'structure', 'members' => [], ],
		'SetIdentityNotificationTopicRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Identity', 'NotificationType', ],
			'members'  => [
				'Identity'         => [ 'shape' => 'Identity', ],
				'NotificationType' => [ 'shape' => 'NotificationType', ],
				'SnsTopic'         => [ 'shape' => 'NotificationTopic', ],
			],
		],
		'SetIdentityNotificationTopicResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'SetReceiptRulePositionRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'RuleName', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'RuleName'    => [ 'shape' => 'ReceiptRuleName', ],
				'After'       => [ 'shape' => 'ReceiptRuleName', ],
			],
		],
		'SetReceiptRulePositionResponse'                        => [ 'type' => 'structure', 'members' => [], ],
		'StopAction'                                            => [
			'type'     => 'structure',
			'required' => [ 'Scope', ],
			'members'  => [
				'Scope'    => [ 'shape' => 'StopScope', ],
				'TopicArn' => [ 'shape' => 'AmazonResourceName', ],
			],
		],
		'StopScope'                                             => [ 'type' => 'string', 'enum' => [ 'RuleSet', ], ],
		'Subject'                                               => [ 'type' => 'string', ],
		'SubjectPart'                                           => [ 'type' => 'string', ],
		'SuccessRedirectionURL'                                 => [ 'type' => 'string', ],
		'Template'                                              => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [
				'TemplateName' => [ 'shape' => 'TemplateName', ],
				'SubjectPart'  => [ 'shape' => 'SubjectPart', ],
				'TextPart'     => [ 'shape' => 'TextPart', ],
				'HtmlPart'     => [ 'shape' => 'HtmlPart', ],
			],
		],
		'TemplateContent'                                       => [ 'type' => 'string', ],
		'TemplateData'                                          => [ 'type' => 'string', 'max' => 262144, ],
		'TemplateDoesNotExistException'                         => [
			'type'      => 'structure',
			'members'   => [ 'TemplateName' => [ 'shape' => 'TemplateName', ], ],
			'error'     => [
				'code'           => 'TemplateDoesNotExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TemplateMetadata'                                      => [
			'type'    => 'structure',
			'members' => [
				'Name'             => [ 'shape' => 'TemplateName', ],
				'CreatedTimestamp' => [ 'shape' => 'Timestamp', ],
			],
		],
		'TemplateMetadataList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TemplateMetadata', ],
		],
		'TemplateName'                                          => [ 'type' => 'string', ],
		'TestRenderTemplateRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', 'TemplateData', ],
			'members'  => [
				'TemplateName' => [ 'shape' => 'TemplateName', ],
				'TemplateData' => [ 'shape' => 'TemplateData', ],
			],
		],
		'TestRenderTemplateResponse'                            => [
			'type'    => 'structure',
			'members' => [ 'RenderedTemplate' => [ 'shape' => 'RenderedTemplate', ], ],
		],
		'TextPart'                                              => [ 'type' => 'string', ],
		'Timestamp'                                             => [ 'type' => 'timestamp', ],
		'TlsPolicy'                                             => [
			'type' => 'string',
			'enum' => [ 'Require', 'Optional', ],
		],
		'TrackingOptions'                                       => [
			'type'    => 'structure',
			'members' => [ 'CustomRedirectDomain' => [ 'shape' => 'CustomRedirectDomain', ], ],
		],
		'TrackingOptionsAlreadyExistsException'                 => [
			'type'      => 'structure',
			'members'   => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
			'error'     => [
				'code'           => 'TrackingOptionsAlreadyExistsException',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TrackingOptionsDoesNotExistException'                  => [
			'type'      => 'structure',
			'members'   => [ 'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ], ],
			'error'     => [
				'code'           => 'TrackingOptionsDoesNotExistException',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UpdateAccountSendingEnabledRequest'                    => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'Enabled', ], ],
		],
		'UpdateConfigurationSetEventDestinationRequest'         => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestination',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'EventDestination'     => [ 'shape' => 'EventDestination', ],
			],
		],
		'UpdateConfigurationSetEventDestinationResponse'        => [ 'type' => 'structure', 'members' => [], ],
		'UpdateConfigurationSetReputationMetricsEnabledRequest' => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'Enabled',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'Enabled'              => [ 'shape' => 'Enabled', ],
			],
		],
		'UpdateConfigurationSetSendingEnabledRequest'           => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'Enabled',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'Enabled'              => [ 'shape' => 'Enabled', ],
			],
		],
		'UpdateConfigurationSetTrackingOptionsRequest'          => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'TrackingOptions',
			],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'TrackingOptions'      => [ 'shape' => 'TrackingOptions', ],
			],
		],
		'UpdateConfigurationSetTrackingOptionsResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'UpdateCustomVerificationEmailTemplateRequest'          => [
			'type'     => 'structure',
			'required' => [ 'TemplateName', ],
			'members'  => [
				'TemplateName'          => [ 'shape' => 'TemplateName', ],
				'FromEmailAddress'      => [ 'shape' => 'FromAddress', ],
				'TemplateSubject'       => [ 'shape' => 'Subject', ],
				'TemplateContent'       => [ 'shape' => 'TemplateContent', ],
				'SuccessRedirectionURL' => [ 'shape' => 'SuccessRedirectionURL', ],
				'FailureRedirectionURL' => [ 'shape' => 'FailureRedirectionURL', ],
			],
		],
		'UpdateReceiptRuleRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'RuleSetName', 'Rule', ],
			'members'  => [
				'RuleSetName' => [ 'shape' => 'ReceiptRuleSetName', ],
				'Rule'        => [ 'shape' => 'ReceiptRule', ],
			],
		],
		'UpdateReceiptRuleResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'UpdateTemplateRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'Template', ],
			'members'  => [ 'Template' => [ 'shape' => 'Template', ], ],
		],
		'UpdateTemplateResponse'                                => [ 'type' => 'structure', 'members' => [], ],
		'VerificationAttributes'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Identity', ],
			'value' => [ 'shape' => 'IdentityVerificationAttributes', ],
		],
		'VerificationStatus'                                    => [
			'type' => 'string',
			'enum' => [
				'Pending',
				'Success',
				'Failed',
				'TemporaryFailure',
				'NotStarted',
			],
		],
		'VerificationToken'                                     => [ 'type' => 'string', ],
		'VerificationTokenList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'VerificationToken', ],
		],
		'VerifyDomainDkimRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Domain', ],
			'members'  => [ 'Domain' => [ 'shape' => 'Domain', ], ],
		],
		'VerifyDomainDkimResponse'                              => [
			'type'     => 'structure',
			'required' => [ 'DkimTokens', ],
			'members'  => [ 'DkimTokens' => [ 'shape' => 'VerificationTokenList', ], ],
		],
		'VerifyDomainIdentityRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'Domain', ],
			'members'  => [ 'Domain' => [ 'shape' => 'Domain', ], ],
		],
		'VerifyDomainIdentityResponse'                          => [
			'type'     => 'structure',
			'required' => [ 'VerificationToken', ],
			'members'  => [ 'VerificationToken' => [ 'shape' => 'VerificationToken', ], ],
		],
		'VerifyEmailAddressRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'EmailAddress', ],
			'members'  => [ 'EmailAddress' => [ 'shape' => 'Address', ], ],
		],
		'VerifyEmailIdentityRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'EmailAddress', ],
			'members'  => [ 'EmailAddress' => [ 'shape' => 'Address', ], ],
		],
		'VerifyEmailIdentityResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'WorkmailAction'                                        => [
			'type'     => 'structure',
			'required' => [ 'OrganizationArn', ],
			'members'  => [
				'TopicArn'        => [ 'shape' => 'AmazonResourceName', ],
				'OrganizationArn' => [ 'shape' => 'AmazonResourceName', ],
			],
		],
	],
];
