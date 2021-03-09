<?php
// This file was auto-generated from sdk-root/src/data/ec2/2016-11-15/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2016-11-15',
		'endpointPrefix'      => 'ec2',
		'protocol'            => 'ec2',
		'serviceAbbreviation' => 'Amazon EC2',
		'serviceFullName'     => 'Amazon Elastic Compute Cloud',
		'serviceId'           => 'EC2',
		'signatureVersion'    => 'v4',
		'uid'                 => 'ec2-2016-11-15',
		'xmlNamespace'        => 'http://ec2.amazonaws.com/doc/2016-11-15',
	],
	'operations' => [
		'AcceptReservedInstancesExchangeQuote'           => [
			'name'   => 'AcceptReservedInstancesExchangeQuote',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcceptReservedInstancesExchangeQuoteRequest', ],
			'output' => [ 'shape' => 'AcceptReservedInstancesExchangeQuoteResult', ],
		],
		'AcceptTransitGatewayVpcAttachment'              => [
			'name'   => 'AcceptTransitGatewayVpcAttachment',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcceptTransitGatewayVpcAttachmentRequest', ],
			'output' => [ 'shape' => 'AcceptTransitGatewayVpcAttachmentResult', ],
		],
		'AcceptVpcEndpointConnections'                   => [
			'name'   => 'AcceptVpcEndpointConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcceptVpcEndpointConnectionsRequest', ],
			'output' => [ 'shape' => 'AcceptVpcEndpointConnectionsResult', ],
		],
		'AcceptVpcPeeringConnection'                     => [
			'name'   => 'AcceptVpcPeeringConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcceptVpcPeeringConnectionRequest', ],
			'output' => [ 'shape' => 'AcceptVpcPeeringConnectionResult', ],
		],
		'AdvertiseByoipCidr'                             => [
			'name'   => 'AdvertiseByoipCidr',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AdvertiseByoipCidrRequest', ],
			'output' => [ 'shape' => 'AdvertiseByoipCidrResult', ],
		],
		'AllocateAddress'                                => [
			'name'   => 'AllocateAddress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AllocateAddressRequest', ],
			'output' => [ 'shape' => 'AllocateAddressResult', ],
		],
		'AllocateHosts'                                  => [
			'name'   => 'AllocateHosts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AllocateHostsRequest', ],
			'output' => [ 'shape' => 'AllocateHostsResult', ],
		],
		'ApplySecurityGroupsToClientVpnTargetNetwork'    => [
			'name'   => 'ApplySecurityGroupsToClientVpnTargetNetwork',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ApplySecurityGroupsToClientVpnTargetNetworkRequest', ],
			'output' => [ 'shape' => 'ApplySecurityGroupsToClientVpnTargetNetworkResult', ],
		],
		'AssignIpv6Addresses'                            => [
			'name'   => 'AssignIpv6Addresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssignIpv6AddressesRequest', ],
			'output' => [ 'shape' => 'AssignIpv6AddressesResult', ],
		],
		'AssignPrivateIpAddresses'                       => [
			'name'   => 'AssignPrivateIpAddresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssignPrivateIpAddressesRequest', ],
			'output' => [ 'shape' => 'AssignPrivateIpAddressesResult', ],
		],
		'AssociateAddress'                               => [
			'name'   => 'AssociateAddress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateAddressRequest', ],
			'output' => [ 'shape' => 'AssociateAddressResult', ],
		],
		'AssociateClientVpnTargetNetwork'                => [
			'name'   => 'AssociateClientVpnTargetNetwork',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateClientVpnTargetNetworkRequest', ],
			'output' => [ 'shape' => 'AssociateClientVpnTargetNetworkResult', ],
		],
		'AssociateDhcpOptions'                           => [
			'name'  => 'AssociateDhcpOptions',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'AssociateDhcpOptionsRequest', ],
		],
		'AssociateIamInstanceProfile'                    => [
			'name'   => 'AssociateIamInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateIamInstanceProfileRequest', ],
			'output' => [ 'shape' => 'AssociateIamInstanceProfileResult', ],
		],
		'AssociateRouteTable'                            => [
			'name'   => 'AssociateRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateRouteTableRequest', ],
			'output' => [ 'shape' => 'AssociateRouteTableResult', ],
		],
		'AssociateSubnetCidrBlock'                       => [
			'name'   => 'AssociateSubnetCidrBlock',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateSubnetCidrBlockRequest', ],
			'output' => [ 'shape' => 'AssociateSubnetCidrBlockResult', ],
		],
		'AssociateTransitGatewayRouteTable'              => [
			'name'   => 'AssociateTransitGatewayRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateTransitGatewayRouteTableRequest', ],
			'output' => [ 'shape' => 'AssociateTransitGatewayRouteTableResult', ],
		],
		'AssociateVpcCidrBlock'                          => [
			'name'   => 'AssociateVpcCidrBlock',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AssociateVpcCidrBlockRequest', ],
			'output' => [ 'shape' => 'AssociateVpcCidrBlockResult', ],
		],
		'AttachClassicLinkVpc'                           => [
			'name'   => 'AttachClassicLinkVpc',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachClassicLinkVpcRequest', ],
			'output' => [ 'shape' => 'AttachClassicLinkVpcResult', ],
		],
		'AttachInternetGateway'                          => [
			'name'  => 'AttachInternetGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'AttachInternetGatewayRequest', ],
		],
		'AttachNetworkInterface'                         => [
			'name'   => 'AttachNetworkInterface',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachNetworkInterfaceRequest', ],
			'output' => [ 'shape' => 'AttachNetworkInterfaceResult', ],
		],
		'AttachVolume'                                   => [
			'name'   => 'AttachVolume',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachVolumeRequest', ],
			'output' => [ 'shape' => 'VolumeAttachment', ],
		],
		'AttachVpnGateway'                               => [
			'name'   => 'AttachVpnGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachVpnGatewayRequest', ],
			'output' => [ 'shape' => 'AttachVpnGatewayResult', ],
		],
		'AuthorizeClientVpnIngress'                      => [
			'name'   => 'AuthorizeClientVpnIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AuthorizeClientVpnIngressRequest', ],
			'output' => [ 'shape' => 'AuthorizeClientVpnIngressResult', ],
		],
		'AuthorizeSecurityGroupEgress'                   => [
			'name'  => 'AuthorizeSecurityGroupEgress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'AuthorizeSecurityGroupEgressRequest', ],
		],
		'AuthorizeSecurityGroupIngress'                  => [
			'name'  => 'AuthorizeSecurityGroupIngress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'AuthorizeSecurityGroupIngressRequest', ],
		],
		'BundleInstance'                                 => [
			'name'   => 'BundleInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BundleInstanceRequest', ],
			'output' => [ 'shape' => 'BundleInstanceResult', ],
		],
		'CancelBundleTask'                               => [
			'name'   => 'CancelBundleTask',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelBundleTaskRequest', ],
			'output' => [ 'shape' => 'CancelBundleTaskResult', ],
		],
		'CancelCapacityReservation'                      => [
			'name'   => 'CancelCapacityReservation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelCapacityReservationRequest', ],
			'output' => [ 'shape' => 'CancelCapacityReservationResult', ],
		],
		'CancelConversionTask'                           => [
			'name'  => 'CancelConversionTask',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CancelConversionRequest', ],
		],
		'CancelExportTask'                               => [
			'name'  => 'CancelExportTask',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CancelExportTaskRequest', ],
		],
		'CancelImportTask'                               => [
			'name'   => 'CancelImportTask',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelImportTaskRequest', ],
			'output' => [ 'shape' => 'CancelImportTaskResult', ],
		],
		'CancelReservedInstancesListing'                 => [
			'name'   => 'CancelReservedInstancesListing',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelReservedInstancesListingRequest', ],
			'output' => [ 'shape' => 'CancelReservedInstancesListingResult', ],
		],
		'CancelSpotFleetRequests'                        => [
			'name'   => 'CancelSpotFleetRequests',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelSpotFleetRequestsRequest', ],
			'output' => [ 'shape' => 'CancelSpotFleetRequestsResponse', ],
		],
		'CancelSpotInstanceRequests'                     => [
			'name'   => 'CancelSpotInstanceRequests',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelSpotInstanceRequestsRequest', ],
			'output' => [ 'shape' => 'CancelSpotInstanceRequestsResult', ],
		],
		'ConfirmProductInstance'                         => [
			'name'   => 'ConfirmProductInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ConfirmProductInstanceRequest', ],
			'output' => [ 'shape' => 'ConfirmProductInstanceResult', ],
		],
		'CopyFpgaImage'                                  => [
			'name'   => 'CopyFpgaImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopyFpgaImageRequest', ],
			'output' => [ 'shape' => 'CopyFpgaImageResult', ],
		],
		'CopyImage'                                      => [
			'name'   => 'CopyImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopyImageRequest', ],
			'output' => [ 'shape' => 'CopyImageResult', ],
		],
		'CopySnapshot'                                   => [
			'name'   => 'CopySnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopySnapshotRequest', ],
			'output' => [ 'shape' => 'CopySnapshotResult', ],
		],
		'CreateCapacityReservation'                      => [
			'name'   => 'CreateCapacityReservation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCapacityReservationRequest', ],
			'output' => [ 'shape' => 'CreateCapacityReservationResult', ],
		],
		'CreateClientVpnEndpoint'                        => [
			'name'   => 'CreateClientVpnEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClientVpnEndpointRequest', ],
			'output' => [ 'shape' => 'CreateClientVpnEndpointResult', ],
		],
		'CreateClientVpnRoute'                           => [
			'name'   => 'CreateClientVpnRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClientVpnRouteRequest', ],
			'output' => [ 'shape' => 'CreateClientVpnRouteResult', ],
		],
		'CreateCustomerGateway'                          => [
			'name'   => 'CreateCustomerGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCustomerGatewayRequest', ],
			'output' => [ 'shape' => 'CreateCustomerGatewayResult', ],
		],
		'CreateDefaultSubnet'                            => [
			'name'   => 'CreateDefaultSubnet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDefaultSubnetRequest', ],
			'output' => [ 'shape' => 'CreateDefaultSubnetResult', ],
		],
		'CreateDefaultVpc'                               => [
			'name'   => 'CreateDefaultVpc',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDefaultVpcRequest', ],
			'output' => [ 'shape' => 'CreateDefaultVpcResult', ],
		],
		'CreateDhcpOptions'                              => [
			'name'   => 'CreateDhcpOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDhcpOptionsRequest', ],
			'output' => [ 'shape' => 'CreateDhcpOptionsResult', ],
		],
		'CreateEgressOnlyInternetGateway'                => [
			'name'   => 'CreateEgressOnlyInternetGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateEgressOnlyInternetGatewayRequest', ],
			'output' => [ 'shape' => 'CreateEgressOnlyInternetGatewayResult', ],
		],
		'CreateFleet'                                    => [
			'name'   => 'CreateFleet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateFleetRequest', ],
			'output' => [ 'shape' => 'CreateFleetResult', ],
		],
		'CreateFlowLogs'                                 => [
			'name'   => 'CreateFlowLogs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateFlowLogsRequest', ],
			'output' => [ 'shape' => 'CreateFlowLogsResult', ],
		],
		'CreateFpgaImage'                                => [
			'name'   => 'CreateFpgaImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateFpgaImageRequest', ],
			'output' => [ 'shape' => 'CreateFpgaImageResult', ],
		],
		'CreateImage'                                    => [
			'name'   => 'CreateImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateImageRequest', ],
			'output' => [ 'shape' => 'CreateImageResult', ],
		],
		'CreateInstanceExportTask'                       => [
			'name'   => 'CreateInstanceExportTask',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateInstanceExportTaskRequest', ],
			'output' => [ 'shape' => 'CreateInstanceExportTaskResult', ],
		],
		'CreateInternetGateway'                          => [
			'name'   => 'CreateInternetGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateInternetGatewayRequest', ],
			'output' => [ 'shape' => 'CreateInternetGatewayResult', ],
		],
		'CreateKeyPair'                                  => [
			'name'   => 'CreateKeyPair',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateKeyPairRequest', ],
			'output' => [ 'shape' => 'KeyPair', ],
		],
		'CreateLaunchTemplate'                           => [
			'name'   => 'CreateLaunchTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLaunchTemplateRequest', ],
			'output' => [ 'shape' => 'CreateLaunchTemplateResult', ],
		],
		'CreateLaunchTemplateVersion'                    => [
			'name'   => 'CreateLaunchTemplateVersion',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLaunchTemplateVersionRequest', ],
			'output' => [ 'shape' => 'CreateLaunchTemplateVersionResult', ],
		],
		'CreateNatGateway'                               => [
			'name'   => 'CreateNatGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateNatGatewayRequest', ],
			'output' => [ 'shape' => 'CreateNatGatewayResult', ],
		],
		'CreateNetworkAcl'                               => [
			'name'   => 'CreateNetworkAcl',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateNetworkAclRequest', ],
			'output' => [ 'shape' => 'CreateNetworkAclResult', ],
		],
		'CreateNetworkAclEntry'                          => [
			'name'  => 'CreateNetworkAclEntry',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CreateNetworkAclEntryRequest', ],
		],
		'CreateNetworkInterface'                         => [
			'name'   => 'CreateNetworkInterface',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateNetworkInterfaceRequest', ],
			'output' => [ 'shape' => 'CreateNetworkInterfaceResult', ],
		],
		'CreateNetworkInterfacePermission'               => [
			'name'   => 'CreateNetworkInterfacePermission',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateNetworkInterfacePermissionRequest', ],
			'output' => [ 'shape' => 'CreateNetworkInterfacePermissionResult', ],
		],
		'CreatePlacementGroup'                           => [
			'name'  => 'CreatePlacementGroup',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CreatePlacementGroupRequest', ],
		],
		'CreateReservedInstancesListing'                 => [
			'name'   => 'CreateReservedInstancesListing',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateReservedInstancesListingRequest', ],
			'output' => [ 'shape' => 'CreateReservedInstancesListingResult', ],
		],
		'CreateRoute'                                    => [
			'name'   => 'CreateRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateRouteRequest', ],
			'output' => [ 'shape' => 'CreateRouteResult', ],
		],
		'CreateRouteTable'                               => [
			'name'   => 'CreateRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateRouteTableRequest', ],
			'output' => [ 'shape' => 'CreateRouteTableResult', ],
		],
		'CreateSecurityGroup'                            => [
			'name'   => 'CreateSecurityGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSecurityGroupRequest', ],
			'output' => [ 'shape' => 'CreateSecurityGroupResult', ],
		],
		'CreateSnapshot'                                 => [
			'name'   => 'CreateSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSnapshotRequest', ],
			'output' => [ 'shape' => 'Snapshot', ],
		],
		'CreateSnapshots'                                => [
			'name'   => 'CreateSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSnapshotsRequest', ],
			'output' => [ 'shape' => 'CreateSnapshotsResult', ],
		],
		'CreateSpotDatafeedSubscription'                 => [
			'name'   => 'CreateSpotDatafeedSubscription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSpotDatafeedSubscriptionRequest', ],
			'output' => [ 'shape' => 'CreateSpotDatafeedSubscriptionResult', ],
		],
		'CreateSubnet'                                   => [
			'name'   => 'CreateSubnet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSubnetRequest', ],
			'output' => [ 'shape' => 'CreateSubnetResult', ],
		],
		'CreateTags'                                     => [
			'name'  => 'CreateTags',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CreateTagsRequest', ],
		],
		'CreateTrafficMirrorFilter'                      => [
			'name'   => 'CreateTrafficMirrorFilter',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTrafficMirrorFilterRequest', ],
			'output' => [ 'shape' => 'CreateTrafficMirrorFilterResult', ],
		],
		'CreateTrafficMirrorFilterRule'                  => [
			'name'   => 'CreateTrafficMirrorFilterRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTrafficMirrorFilterRuleRequest', ],
			'output' => [ 'shape' => 'CreateTrafficMirrorFilterRuleResult', ],
		],
		'CreateTrafficMirrorSession'                     => [
			'name'   => 'CreateTrafficMirrorSession',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTrafficMirrorSessionRequest', ],
			'output' => [ 'shape' => 'CreateTrafficMirrorSessionResult', ],
		],
		'CreateTrafficMirrorTarget'                      => [
			'name'   => 'CreateTrafficMirrorTarget',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTrafficMirrorTargetRequest', ],
			'output' => [ 'shape' => 'CreateTrafficMirrorTargetResult', ],
		],
		'CreateTransitGateway'                           => [
			'name'   => 'CreateTransitGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTransitGatewayRequest', ],
			'output' => [ 'shape' => 'CreateTransitGatewayResult', ],
		],
		'CreateTransitGatewayRoute'                      => [
			'name'   => 'CreateTransitGatewayRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTransitGatewayRouteRequest', ],
			'output' => [ 'shape' => 'CreateTransitGatewayRouteResult', ],
		],
		'CreateTransitGatewayRouteTable'                 => [
			'name'   => 'CreateTransitGatewayRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTransitGatewayRouteTableRequest', ],
			'output' => [ 'shape' => 'CreateTransitGatewayRouteTableResult', ],
		],
		'CreateTransitGatewayVpcAttachment'              => [
			'name'   => 'CreateTransitGatewayVpcAttachment',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTransitGatewayVpcAttachmentRequest', ],
			'output' => [ 'shape' => 'CreateTransitGatewayVpcAttachmentResult', ],
		],
		'CreateVolume'                                   => [
			'name'   => 'CreateVolume',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVolumeRequest', ],
			'output' => [ 'shape' => 'Volume', ],
		],
		'CreateVpc'                                      => [
			'name'   => 'CreateVpc',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpcRequest', ],
			'output' => [ 'shape' => 'CreateVpcResult', ],
		],
		'CreateVpcEndpoint'                              => [
			'name'   => 'CreateVpcEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpcEndpointRequest', ],
			'output' => [ 'shape' => 'CreateVpcEndpointResult', ],
		],
		'CreateVpcEndpointConnectionNotification'        => [
			'name'   => 'CreateVpcEndpointConnectionNotification',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpcEndpointConnectionNotificationRequest', ],
			'output' => [ 'shape' => 'CreateVpcEndpointConnectionNotificationResult', ],
		],
		'CreateVpcEndpointServiceConfiguration'          => [
			'name'   => 'CreateVpcEndpointServiceConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpcEndpointServiceConfigurationRequest', ],
			'output' => [ 'shape' => 'CreateVpcEndpointServiceConfigurationResult', ],
		],
		'CreateVpcPeeringConnection'                     => [
			'name'   => 'CreateVpcPeeringConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpcPeeringConnectionRequest', ],
			'output' => [ 'shape' => 'CreateVpcPeeringConnectionResult', ],
		],
		'CreateVpnConnection'                            => [
			'name'   => 'CreateVpnConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpnConnectionRequest', ],
			'output' => [ 'shape' => 'CreateVpnConnectionResult', ],
		],
		'CreateVpnConnectionRoute'                       => [
			'name'  => 'CreateVpnConnectionRoute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'CreateVpnConnectionRouteRequest', ],
		],
		'CreateVpnGateway'                               => [
			'name'   => 'CreateVpnGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVpnGatewayRequest', ],
			'output' => [ 'shape' => 'CreateVpnGatewayResult', ],
		],
		'DeleteClientVpnEndpoint'                        => [
			'name'   => 'DeleteClientVpnEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClientVpnEndpointRequest', ],
			'output' => [ 'shape' => 'DeleteClientVpnEndpointResult', ],
		],
		'DeleteClientVpnRoute'                           => [
			'name'   => 'DeleteClientVpnRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClientVpnRouteRequest', ],
			'output' => [ 'shape' => 'DeleteClientVpnRouteResult', ],
		],
		'DeleteCustomerGateway'                          => [
			'name'  => 'DeleteCustomerGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteCustomerGatewayRequest', ],
		],
		'DeleteDhcpOptions'                              => [
			'name'  => 'DeleteDhcpOptions',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteDhcpOptionsRequest', ],
		],
		'DeleteEgressOnlyInternetGateway'                => [
			'name'   => 'DeleteEgressOnlyInternetGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteEgressOnlyInternetGatewayRequest', ],
			'output' => [ 'shape' => 'DeleteEgressOnlyInternetGatewayResult', ],
		],
		'DeleteFleets'                                   => [
			'name'   => 'DeleteFleets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteFleetsRequest', ],
			'output' => [ 'shape' => 'DeleteFleetsResult', ],
		],
		'DeleteFlowLogs'                                 => [
			'name'   => 'DeleteFlowLogs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteFlowLogsRequest', ],
			'output' => [ 'shape' => 'DeleteFlowLogsResult', ],
		],
		'DeleteFpgaImage'                                => [
			'name'   => 'DeleteFpgaImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteFpgaImageRequest', ],
			'output' => [ 'shape' => 'DeleteFpgaImageResult', ],
		],
		'DeleteInternetGateway'                          => [
			'name'  => 'DeleteInternetGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteInternetGatewayRequest', ],
		],
		'DeleteKeyPair'                                  => [
			'name'  => 'DeleteKeyPair',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteKeyPairRequest', ],
		],
		'DeleteLaunchTemplate'                           => [
			'name'   => 'DeleteLaunchTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLaunchTemplateRequest', ],
			'output' => [ 'shape' => 'DeleteLaunchTemplateResult', ],
		],
		'DeleteLaunchTemplateVersions'                   => [
			'name'   => 'DeleteLaunchTemplateVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLaunchTemplateVersionsRequest', ],
			'output' => [ 'shape' => 'DeleteLaunchTemplateVersionsResult', ],
		],
		'DeleteNatGateway'                               => [
			'name'   => 'DeleteNatGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteNatGatewayRequest', ],
			'output' => [ 'shape' => 'DeleteNatGatewayResult', ],
		],
		'DeleteNetworkAcl'                               => [
			'name'  => 'DeleteNetworkAcl',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteNetworkAclRequest', ],
		],
		'DeleteNetworkAclEntry'                          => [
			'name'  => 'DeleteNetworkAclEntry',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteNetworkAclEntryRequest', ],
		],
		'DeleteNetworkInterface'                         => [
			'name'  => 'DeleteNetworkInterface',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteNetworkInterfaceRequest', ],
		],
		'DeleteNetworkInterfacePermission'               => [
			'name'   => 'DeleteNetworkInterfacePermission',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteNetworkInterfacePermissionRequest', ],
			'output' => [ 'shape' => 'DeleteNetworkInterfacePermissionResult', ],
		],
		'DeletePlacementGroup'                           => [
			'name'  => 'DeletePlacementGroup',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeletePlacementGroupRequest', ],
		],
		'DeleteRoute'                                    => [
			'name'  => 'DeleteRoute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteRouteRequest', ],
		],
		'DeleteRouteTable'                               => [
			'name'  => 'DeleteRouteTable',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteRouteTableRequest', ],
		],
		'DeleteSecurityGroup'                            => [
			'name'  => 'DeleteSecurityGroup',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteSecurityGroupRequest', ],
		],
		'DeleteSnapshot'                                 => [
			'name'  => 'DeleteSnapshot',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteSnapshotRequest', ],
		],
		'DeleteSpotDatafeedSubscription'                 => [
			'name'  => 'DeleteSpotDatafeedSubscription',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteSpotDatafeedSubscriptionRequest', ],
		],
		'DeleteSubnet'                                   => [
			'name'  => 'DeleteSubnet',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteSubnetRequest', ],
		],
		'DeleteTags'                                     => [
			'name'  => 'DeleteTags',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteTagsRequest', ],
		],
		'DeleteTrafficMirrorFilter'                      => [
			'name'   => 'DeleteTrafficMirrorFilter',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTrafficMirrorFilterRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficMirrorFilterResult', ],
		],
		'DeleteTrafficMirrorFilterRule'                  => [
			'name'   => 'DeleteTrafficMirrorFilterRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTrafficMirrorFilterRuleRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficMirrorFilterRuleResult', ],
		],
		'DeleteTrafficMirrorSession'                     => [
			'name'   => 'DeleteTrafficMirrorSession',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTrafficMirrorSessionRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficMirrorSessionResult', ],
		],
		'DeleteTrafficMirrorTarget'                      => [
			'name'   => 'DeleteTrafficMirrorTarget',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTrafficMirrorTargetRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficMirrorTargetResult', ],
		],
		'DeleteTransitGateway'                           => [
			'name'   => 'DeleteTransitGateway',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTransitGatewayRequest', ],
			'output' => [ 'shape' => 'DeleteTransitGatewayResult', ],
		],
		'DeleteTransitGatewayRoute'                      => [
			'name'   => 'DeleteTransitGatewayRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTransitGatewayRouteRequest', ],
			'output' => [ 'shape' => 'DeleteTransitGatewayRouteResult', ],
		],
		'DeleteTransitGatewayRouteTable'                 => [
			'name'   => 'DeleteTransitGatewayRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTransitGatewayRouteTableRequest', ],
			'output' => [ 'shape' => 'DeleteTransitGatewayRouteTableResult', ],
		],
		'DeleteTransitGatewayVpcAttachment'              => [
			'name'   => 'DeleteTransitGatewayVpcAttachment',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTransitGatewayVpcAttachmentRequest', ],
			'output' => [ 'shape' => 'DeleteTransitGatewayVpcAttachmentResult', ],
		],
		'DeleteVolume'                                   => [
			'name'  => 'DeleteVolume',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVolumeRequest', ],
		],
		'DeleteVpc'                                      => [
			'name'  => 'DeleteVpc',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVpcRequest', ],
		],
		'DeleteVpcEndpointConnectionNotifications'       => [
			'name'   => 'DeleteVpcEndpointConnectionNotifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteVpcEndpointConnectionNotificationsRequest', ],
			'output' => [ 'shape' => 'DeleteVpcEndpointConnectionNotificationsResult', ],
		],
		'DeleteVpcEndpointServiceConfigurations'         => [
			'name'   => 'DeleteVpcEndpointServiceConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteVpcEndpointServiceConfigurationsRequest', ],
			'output' => [ 'shape' => 'DeleteVpcEndpointServiceConfigurationsResult', ],
		],
		'DeleteVpcEndpoints'                             => [
			'name'   => 'DeleteVpcEndpoints',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteVpcEndpointsRequest', ],
			'output' => [ 'shape' => 'DeleteVpcEndpointsResult', ],
		],
		'DeleteVpcPeeringConnection'                     => [
			'name'   => 'DeleteVpcPeeringConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteVpcPeeringConnectionRequest', ],
			'output' => [ 'shape' => 'DeleteVpcPeeringConnectionResult', ],
		],
		'DeleteVpnConnection'                            => [
			'name'  => 'DeleteVpnConnection',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVpnConnectionRequest', ],
		],
		'DeleteVpnConnectionRoute'                       => [
			'name'  => 'DeleteVpnConnectionRoute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVpnConnectionRouteRequest', ],
		],
		'DeleteVpnGateway'                               => [
			'name'  => 'DeleteVpnGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeleteVpnGatewayRequest', ],
		],
		'DeprovisionByoipCidr'                           => [
			'name'   => 'DeprovisionByoipCidr',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeprovisionByoipCidrRequest', ],
			'output' => [ 'shape' => 'DeprovisionByoipCidrResult', ],
		],
		'DeregisterImage'                                => [
			'name'  => 'DeregisterImage',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DeregisterImageRequest', ],
		],
		'DescribeAccountAttributes'                      => [
			'name'   => 'DescribeAccountAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAccountAttributesRequest', ],
			'output' => [ 'shape' => 'DescribeAccountAttributesResult', ],
		],
		'DescribeAddresses'                              => [
			'name'   => 'DescribeAddresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAddressesRequest', ],
			'output' => [ 'shape' => 'DescribeAddressesResult', ],
		],
		'DescribeAggregateIdFormat'                      => [
			'name'   => 'DescribeAggregateIdFormat',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAggregateIdFormatRequest', ],
			'output' => [ 'shape' => 'DescribeAggregateIdFormatResult', ],
		],
		'DescribeAvailabilityZones'                      => [
			'name'   => 'DescribeAvailabilityZones',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAvailabilityZonesRequest', ],
			'output' => [ 'shape' => 'DescribeAvailabilityZonesResult', ],
		],
		'DescribeBundleTasks'                            => [
			'name'   => 'DescribeBundleTasks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeBundleTasksRequest', ],
			'output' => [ 'shape' => 'DescribeBundleTasksResult', ],
		],
		'DescribeByoipCidrs'                             => [
			'name'   => 'DescribeByoipCidrs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeByoipCidrsRequest', ],
			'output' => [ 'shape' => 'DescribeByoipCidrsResult', ],
		],
		'DescribeCapacityReservations'                   => [
			'name'   => 'DescribeCapacityReservations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCapacityReservationsRequest', ],
			'output' => [ 'shape' => 'DescribeCapacityReservationsResult', ],
		],
		'DescribeClassicLinkInstances'                   => [
			'name'   => 'DescribeClassicLinkInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClassicLinkInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeClassicLinkInstancesResult', ],
		],
		'DescribeClientVpnAuthorizationRules'            => [
			'name'   => 'DescribeClientVpnAuthorizationRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClientVpnAuthorizationRulesRequest', ],
			'output' => [ 'shape' => 'DescribeClientVpnAuthorizationRulesResult', ],
		],
		'DescribeClientVpnConnections'                   => [
			'name'   => 'DescribeClientVpnConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClientVpnConnectionsRequest', ],
			'output' => [ 'shape' => 'DescribeClientVpnConnectionsResult', ],
		],
		'DescribeClientVpnEndpoints'                     => [
			'name'   => 'DescribeClientVpnEndpoints',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClientVpnEndpointsRequest', ],
			'output' => [ 'shape' => 'DescribeClientVpnEndpointsResult', ],
		],
		'DescribeClientVpnRoutes'                        => [
			'name'   => 'DescribeClientVpnRoutes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClientVpnRoutesRequest', ],
			'output' => [ 'shape' => 'DescribeClientVpnRoutesResult', ],
		],
		'DescribeClientVpnTargetNetworks'                => [
			'name'   => 'DescribeClientVpnTargetNetworks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClientVpnTargetNetworksRequest', ],
			'output' => [ 'shape' => 'DescribeClientVpnTargetNetworksResult', ],
		],
		'DescribeConversionTasks'                        => [
			'name'   => 'DescribeConversionTasks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConversionTasksRequest', ],
			'output' => [ 'shape' => 'DescribeConversionTasksResult', ],
		],
		'DescribeCustomerGateways'                       => [
			'name'   => 'DescribeCustomerGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCustomerGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeCustomerGatewaysResult', ],
		],
		'DescribeDhcpOptions'                            => [
			'name'   => 'DescribeDhcpOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDhcpOptionsRequest', ],
			'output' => [ 'shape' => 'DescribeDhcpOptionsResult', ],
		],
		'DescribeEgressOnlyInternetGateways'             => [
			'name'   => 'DescribeEgressOnlyInternetGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEgressOnlyInternetGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeEgressOnlyInternetGatewaysResult', ],
		],
		'DescribeElasticGpus'                            => [
			'name'   => 'DescribeElasticGpus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeElasticGpusRequest', ],
			'output' => [ 'shape' => 'DescribeElasticGpusResult', ],
		],
		'DescribeExportTasks'                            => [
			'name'   => 'DescribeExportTasks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeExportTasksRequest', ],
			'output' => [ 'shape' => 'DescribeExportTasksResult', ],
		],
		'DescribeFleetHistory'                           => [
			'name'   => 'DescribeFleetHistory',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFleetHistoryRequest', ],
			'output' => [ 'shape' => 'DescribeFleetHistoryResult', ],
		],
		'DescribeFleetInstances'                         => [
			'name'   => 'DescribeFleetInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFleetInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeFleetInstancesResult', ],
		],
		'DescribeFleets'                                 => [
			'name'   => 'DescribeFleets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFleetsRequest', ],
			'output' => [ 'shape' => 'DescribeFleetsResult', ],
		],
		'DescribeFlowLogs'                               => [
			'name'   => 'DescribeFlowLogs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFlowLogsRequest', ],
			'output' => [ 'shape' => 'DescribeFlowLogsResult', ],
		],
		'DescribeFpgaImageAttribute'                     => [
			'name'   => 'DescribeFpgaImageAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFpgaImageAttributeRequest', ],
			'output' => [ 'shape' => 'DescribeFpgaImageAttributeResult', ],
		],
		'DescribeFpgaImages'                             => [
			'name'   => 'DescribeFpgaImages',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeFpgaImagesRequest', ],
			'output' => [ 'shape' => 'DescribeFpgaImagesResult', ],
		],
		'DescribeHostReservationOfferings'               => [
			'name'   => 'DescribeHostReservationOfferings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeHostReservationOfferingsRequest', ],
			'output' => [ 'shape' => 'DescribeHostReservationOfferingsResult', ],
		],
		'DescribeHostReservations'                       => [
			'name'   => 'DescribeHostReservations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeHostReservationsRequest', ],
			'output' => [ 'shape' => 'DescribeHostReservationsResult', ],
		],
		'DescribeHosts'                                  => [
			'name'   => 'DescribeHosts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeHostsRequest', ],
			'output' => [ 'shape' => 'DescribeHostsResult', ],
		],
		'DescribeIamInstanceProfileAssociations'         => [
			'name'   => 'DescribeIamInstanceProfileAssociations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeIamInstanceProfileAssociationsRequest', ],
			'output' => [ 'shape' => 'DescribeIamInstanceProfileAssociationsResult', ],
		],
		'DescribeIdFormat'                               => [
			'name'   => 'DescribeIdFormat',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeIdFormatRequest', ],
			'output' => [ 'shape' => 'DescribeIdFormatResult', ],
		],
		'DescribeIdentityIdFormat'                       => [
			'name'   => 'DescribeIdentityIdFormat',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeIdentityIdFormatRequest', ],
			'output' => [ 'shape' => 'DescribeIdentityIdFormatResult', ],
		],
		'DescribeImageAttribute'                         => [
			'name'   => 'DescribeImageAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeImageAttributeRequest', ],
			'output' => [ 'shape' => 'ImageAttribute', ],
		],
		'DescribeImages'                                 => [
			'name'   => 'DescribeImages',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeImagesRequest', ],
			'output' => [ 'shape' => 'DescribeImagesResult', ],
		],
		'DescribeImportImageTasks'                       => [
			'name'   => 'DescribeImportImageTasks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeImportImageTasksRequest', ],
			'output' => [ 'shape' => 'DescribeImportImageTasksResult', ],
		],
		'DescribeImportSnapshotTasks'                    => [
			'name'   => 'DescribeImportSnapshotTasks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeImportSnapshotTasksRequest', ],
			'output' => [ 'shape' => 'DescribeImportSnapshotTasksResult', ],
		],
		'DescribeInstanceAttribute'                      => [
			'name'   => 'DescribeInstanceAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeInstanceAttributeRequest', ],
			'output' => [ 'shape' => 'InstanceAttribute', ],
		],
		'DescribeInstanceCreditSpecifications'           => [
			'name'   => 'DescribeInstanceCreditSpecifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeInstanceCreditSpecificationsRequest', ],
			'output' => [ 'shape' => 'DescribeInstanceCreditSpecificationsResult', ],
		],
		'DescribeInstanceStatus'                         => [
			'name'   => 'DescribeInstanceStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeInstanceStatusRequest', ],
			'output' => [ 'shape' => 'DescribeInstanceStatusResult', ],
		],
		'DescribeInstances'                              => [
			'name'   => 'DescribeInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeInstancesResult', ],
		],
		'DescribeInternetGateways'                       => [
			'name'   => 'DescribeInternetGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeInternetGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeInternetGatewaysResult', ],
		],
		'DescribeKeyPairs'                               => [
			'name'   => 'DescribeKeyPairs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeKeyPairsRequest', ],
			'output' => [ 'shape' => 'DescribeKeyPairsResult', ],
		],
		'DescribeLaunchTemplateVersions'                 => [
			'name'   => 'DescribeLaunchTemplateVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLaunchTemplateVersionsRequest', ],
			'output' => [ 'shape' => 'DescribeLaunchTemplateVersionsResult', ],
		],
		'DescribeLaunchTemplates'                        => [
			'name'   => 'DescribeLaunchTemplates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLaunchTemplatesRequest', ],
			'output' => [ 'shape' => 'DescribeLaunchTemplatesResult', ],
		],
		'DescribeMovingAddresses'                        => [
			'name'   => 'DescribeMovingAddresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeMovingAddressesRequest', ],
			'output' => [ 'shape' => 'DescribeMovingAddressesResult', ],
		],
		'DescribeNatGateways'                            => [
			'name'   => 'DescribeNatGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNatGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeNatGatewaysResult', ],
		],
		'DescribeNetworkAcls'                            => [
			'name'   => 'DescribeNetworkAcls',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNetworkAclsRequest', ],
			'output' => [ 'shape' => 'DescribeNetworkAclsResult', ],
		],
		'DescribeNetworkInterfaceAttribute'              => [
			'name'   => 'DescribeNetworkInterfaceAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNetworkInterfaceAttributeRequest', ],
			'output' => [ 'shape' => 'DescribeNetworkInterfaceAttributeResult', ],
		],
		'DescribeNetworkInterfacePermissions'            => [
			'name'   => 'DescribeNetworkInterfacePermissions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNetworkInterfacePermissionsRequest', ],
			'output' => [ 'shape' => 'DescribeNetworkInterfacePermissionsResult', ],
		],
		'DescribeNetworkInterfaces'                      => [
			'name'   => 'DescribeNetworkInterfaces',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNetworkInterfacesRequest', ],
			'output' => [ 'shape' => 'DescribeNetworkInterfacesResult', ],
		],
		'DescribePlacementGroups'                        => [
			'name'   => 'DescribePlacementGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePlacementGroupsRequest', ],
			'output' => [ 'shape' => 'DescribePlacementGroupsResult', ],
		],
		'DescribePrefixLists'                            => [
			'name'   => 'DescribePrefixLists',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePrefixListsRequest', ],
			'output' => [ 'shape' => 'DescribePrefixListsResult', ],
		],
		'DescribePrincipalIdFormat'                      => [
			'name'   => 'DescribePrincipalIdFormat',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePrincipalIdFormatRequest', ],
			'output' => [ 'shape' => 'DescribePrincipalIdFormatResult', ],
		],
		'DescribePublicIpv4Pools'                        => [
			'name'   => 'DescribePublicIpv4Pools',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePublicIpv4PoolsRequest', ],
			'output' => [ 'shape' => 'DescribePublicIpv4PoolsResult', ],
		],
		'DescribeRegions'                                => [
			'name'   => 'DescribeRegions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRegionsRequest', ],
			'output' => [ 'shape' => 'DescribeRegionsResult', ],
		],
		'DescribeReservedInstances'                      => [
			'name'   => 'DescribeReservedInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeReservedInstancesResult', ],
		],
		'DescribeReservedInstancesListings'              => [
			'name'   => 'DescribeReservedInstancesListings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedInstancesListingsRequest', ],
			'output' => [ 'shape' => 'DescribeReservedInstancesListingsResult', ],
		],
		'DescribeReservedInstancesModifications'         => [
			'name'   => 'DescribeReservedInstancesModifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedInstancesModificationsRequest', ],
			'output' => [ 'shape' => 'DescribeReservedInstancesModificationsResult', ],
		],
		'DescribeReservedInstancesOfferings'             => [
			'name'   => 'DescribeReservedInstancesOfferings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedInstancesOfferingsRequest', ],
			'output' => [ 'shape' => 'DescribeReservedInstancesOfferingsResult', ],
		],
		'DescribeRouteTables'                            => [
			'name'   => 'DescribeRouteTables',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRouteTablesRequest', ],
			'output' => [ 'shape' => 'DescribeRouteTablesResult', ],
		],
		'DescribeScheduledInstanceAvailability'          => [
			'name'   => 'DescribeScheduledInstanceAvailability',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeScheduledInstanceAvailabilityRequest', ],
			'output' => [ 'shape' => 'DescribeScheduledInstanceAvailabilityResult', ],
		],
		'DescribeScheduledInstances'                     => [
			'name'   => 'DescribeScheduledInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeScheduledInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeScheduledInstancesResult', ],
		],
		'DescribeSecurityGroupReferences'                => [
			'name'   => 'DescribeSecurityGroupReferences',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSecurityGroupReferencesRequest', ],
			'output' => [ 'shape' => 'DescribeSecurityGroupReferencesResult', ],
		],
		'DescribeSecurityGroups'                         => [
			'name'   => 'DescribeSecurityGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSecurityGroupsRequest', ],
			'output' => [ 'shape' => 'DescribeSecurityGroupsResult', ],
		],
		'DescribeSnapshotAttribute'                      => [
			'name'   => 'DescribeSnapshotAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSnapshotAttributeRequest', ],
			'output' => [ 'shape' => 'DescribeSnapshotAttributeResult', ],
		],
		'DescribeSnapshots'                              => [
			'name'   => 'DescribeSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSnapshotsRequest', ],
			'output' => [ 'shape' => 'DescribeSnapshotsResult', ],
		],
		'DescribeSpotDatafeedSubscription'               => [
			'name'   => 'DescribeSpotDatafeedSubscription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotDatafeedSubscriptionRequest', ],
			'output' => [ 'shape' => 'DescribeSpotDatafeedSubscriptionResult', ],
		],
		'DescribeSpotFleetInstances'                     => [
			'name'   => 'DescribeSpotFleetInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotFleetInstancesRequest', ],
			'output' => [ 'shape' => 'DescribeSpotFleetInstancesResponse', ],
		],
		'DescribeSpotFleetRequestHistory'                => [
			'name'   => 'DescribeSpotFleetRequestHistory',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotFleetRequestHistoryRequest', ],
			'output' => [ 'shape' => 'DescribeSpotFleetRequestHistoryResponse', ],
		],
		'DescribeSpotFleetRequests'                      => [
			'name'   => 'DescribeSpotFleetRequests',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotFleetRequestsRequest', ],
			'output' => [ 'shape' => 'DescribeSpotFleetRequestsResponse', ],
		],
		'DescribeSpotInstanceRequests'                   => [
			'name'   => 'DescribeSpotInstanceRequests',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotInstanceRequestsRequest', ],
			'output' => [ 'shape' => 'DescribeSpotInstanceRequestsResult', ],
		],
		'DescribeSpotPriceHistory'                       => [
			'name'   => 'DescribeSpotPriceHistory',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSpotPriceHistoryRequest', ],
			'output' => [ 'shape' => 'DescribeSpotPriceHistoryResult', ],
		],
		'DescribeStaleSecurityGroups'                    => [
			'name'   => 'DescribeStaleSecurityGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeStaleSecurityGroupsRequest', ],
			'output' => [ 'shape' => 'DescribeStaleSecurityGroupsResult', ],
		],
		'DescribeSubnets'                                => [
			'name'   => 'DescribeSubnets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSubnetsRequest', ],
			'output' => [ 'shape' => 'DescribeSubnetsResult', ],
		],
		'DescribeTags'                                   => [
			'name'   => 'DescribeTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTagsRequest', ],
			'output' => [ 'shape' => 'DescribeTagsResult', ],
		],
		'DescribeTrafficMirrorFilters'                   => [
			'name'   => 'DescribeTrafficMirrorFilters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTrafficMirrorFiltersRequest', ],
			'output' => [ 'shape' => 'DescribeTrafficMirrorFiltersResult', ],
		],
		'DescribeTrafficMirrorSessions'                  => [
			'name'   => 'DescribeTrafficMirrorSessions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTrafficMirrorSessionsRequest', ],
			'output' => [ 'shape' => 'DescribeTrafficMirrorSessionsResult', ],
		],
		'DescribeTrafficMirrorTargets'                   => [
			'name'   => 'DescribeTrafficMirrorTargets',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTrafficMirrorTargetsRequest', ],
			'output' => [ 'shape' => 'DescribeTrafficMirrorTargetsResult', ],
		],
		'DescribeTransitGatewayAttachments'              => [
			'name'   => 'DescribeTransitGatewayAttachments',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTransitGatewayAttachmentsRequest', ],
			'output' => [ 'shape' => 'DescribeTransitGatewayAttachmentsResult', ],
		],
		'DescribeTransitGatewayRouteTables'              => [
			'name'   => 'DescribeTransitGatewayRouteTables',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTransitGatewayRouteTablesRequest', ],
			'output' => [ 'shape' => 'DescribeTransitGatewayRouteTablesResult', ],
		],
		'DescribeTransitGatewayVpcAttachments'           => [
			'name'   => 'DescribeTransitGatewayVpcAttachments',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTransitGatewayVpcAttachmentsRequest', ],
			'output' => [ 'shape' => 'DescribeTransitGatewayVpcAttachmentsResult', ],
		],
		'DescribeTransitGateways'                        => [
			'name'   => 'DescribeTransitGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTransitGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeTransitGatewaysResult', ],
		],
		'DescribeVolumeAttribute'                        => [
			'name'   => 'DescribeVolumeAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVolumeAttributeRequest', ],
			'output' => [ 'shape' => 'DescribeVolumeAttributeResult', ],
		],
		'DescribeVolumeStatus'                           => [
			'name'   => 'DescribeVolumeStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVolumeStatusRequest', ],
			'output' => [ 'shape' => 'DescribeVolumeStatusResult', ],
		],
		'DescribeVolumes'                                => [
			'name'   => 'DescribeVolumes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVolumesRequest', ],
			'output' => [ 'shape' => 'DescribeVolumesResult', ],
		],
		'DescribeVolumesModifications'                   => [
			'name'   => 'DescribeVolumesModifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVolumesModificationsRequest', ],
			'output' => [ 'shape' => 'DescribeVolumesModificationsResult', ],
		],
		'DescribeVpcAttribute'                           => [
			'name'   => 'DescribeVpcAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcAttributeRequest', ],
			'output' => [ 'shape' => 'DescribeVpcAttributeResult', ],
		],
		'DescribeVpcClassicLink'                         => [
			'name'   => 'DescribeVpcClassicLink',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcClassicLinkRequest', ],
			'output' => [ 'shape' => 'DescribeVpcClassicLinkResult', ],
		],
		'DescribeVpcClassicLinkDnsSupport'               => [
			'name'   => 'DescribeVpcClassicLinkDnsSupport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcClassicLinkDnsSupportRequest', ],
			'output' => [ 'shape' => 'DescribeVpcClassicLinkDnsSupportResult', ],
		],
		'DescribeVpcEndpointConnectionNotifications'     => [
			'name'   => 'DescribeVpcEndpointConnectionNotifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointConnectionNotificationsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointConnectionNotificationsResult', ],
		],
		'DescribeVpcEndpointConnections'                 => [
			'name'   => 'DescribeVpcEndpointConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointConnectionsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointConnectionsResult', ],
		],
		'DescribeVpcEndpointServiceConfigurations'       => [
			'name'   => 'DescribeVpcEndpointServiceConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointServiceConfigurationsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointServiceConfigurationsResult', ],
		],
		'DescribeVpcEndpointServicePermissions'          => [
			'name'   => 'DescribeVpcEndpointServicePermissions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointServicePermissionsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointServicePermissionsResult', ],
		],
		'DescribeVpcEndpointServices'                    => [
			'name'   => 'DescribeVpcEndpointServices',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointServicesRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointServicesResult', ],
		],
		'DescribeVpcEndpoints'                           => [
			'name'   => 'DescribeVpcEndpoints',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcEndpointsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcEndpointsResult', ],
		],
		'DescribeVpcPeeringConnections'                  => [
			'name'   => 'DescribeVpcPeeringConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcPeeringConnectionsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcPeeringConnectionsResult', ],
		],
		'DescribeVpcs'                                   => [
			'name'   => 'DescribeVpcs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpcsRequest', ],
			'output' => [ 'shape' => 'DescribeVpcsResult', ],
		],
		'DescribeVpnConnections'                         => [
			'name'   => 'DescribeVpnConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpnConnectionsRequest', ],
			'output' => [ 'shape' => 'DescribeVpnConnectionsResult', ],
		],
		'DescribeVpnGateways'                            => [
			'name'   => 'DescribeVpnGateways',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeVpnGatewaysRequest', ],
			'output' => [ 'shape' => 'DescribeVpnGatewaysResult', ],
		],
		'DetachClassicLinkVpc'                           => [
			'name'   => 'DetachClassicLinkVpc',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachClassicLinkVpcRequest', ],
			'output' => [ 'shape' => 'DetachClassicLinkVpcResult', ],
		],
		'DetachInternetGateway'                          => [
			'name'  => 'DetachInternetGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DetachInternetGatewayRequest', ],
		],
		'DetachNetworkInterface'                         => [
			'name'  => 'DetachNetworkInterface',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DetachNetworkInterfaceRequest', ],
		],
		'DetachVolume'                                   => [
			'name'   => 'DetachVolume',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachVolumeRequest', ],
			'output' => [ 'shape' => 'VolumeAttachment', ],
		],
		'DetachVpnGateway'                               => [
			'name'  => 'DetachVpnGateway',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DetachVpnGatewayRequest', ],
		],
		'DisableEbsEncryptionByDefault'                  => [
			'name'   => 'DisableEbsEncryptionByDefault',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableEbsEncryptionByDefaultRequest', ],
			'output' => [ 'shape' => 'DisableEbsEncryptionByDefaultResult', ],
		],
		'DisableTransitGatewayRouteTablePropagation'     => [
			'name'   => 'DisableTransitGatewayRouteTablePropagation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableTransitGatewayRouteTablePropagationRequest', ],
			'output' => [ 'shape' => 'DisableTransitGatewayRouteTablePropagationResult', ],
		],
		'DisableVgwRoutePropagation'                     => [
			'name'  => 'DisableVgwRoutePropagation',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DisableVgwRoutePropagationRequest', ],
		],
		'DisableVpcClassicLink'                          => [
			'name'   => 'DisableVpcClassicLink',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableVpcClassicLinkRequest', ],
			'output' => [ 'shape' => 'DisableVpcClassicLinkResult', ],
		],
		'DisableVpcClassicLinkDnsSupport'                => [
			'name'   => 'DisableVpcClassicLinkDnsSupport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableVpcClassicLinkDnsSupportRequest', ],
			'output' => [ 'shape' => 'DisableVpcClassicLinkDnsSupportResult', ],
		],
		'DisassociateAddress'                            => [
			'name'  => 'DisassociateAddress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DisassociateAddressRequest', ],
		],
		'DisassociateClientVpnTargetNetwork'             => [
			'name'   => 'DisassociateClientVpnTargetNetwork',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateClientVpnTargetNetworkRequest', ],
			'output' => [ 'shape' => 'DisassociateClientVpnTargetNetworkResult', ],
		],
		'DisassociateIamInstanceProfile'                 => [
			'name'   => 'DisassociateIamInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateIamInstanceProfileRequest', ],
			'output' => [ 'shape' => 'DisassociateIamInstanceProfileResult', ],
		],
		'DisassociateRouteTable'                         => [
			'name'  => 'DisassociateRouteTable',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'DisassociateRouteTableRequest', ],
		],
		'DisassociateSubnetCidrBlock'                    => [
			'name'   => 'DisassociateSubnetCidrBlock',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateSubnetCidrBlockRequest', ],
			'output' => [ 'shape' => 'DisassociateSubnetCidrBlockResult', ],
		],
		'DisassociateTransitGatewayRouteTable'           => [
			'name'   => 'DisassociateTransitGatewayRouteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateTransitGatewayRouteTableRequest', ],
			'output' => [ 'shape' => 'DisassociateTransitGatewayRouteTableResult', ],
		],
		'DisassociateVpcCidrBlock'                       => [
			'name'   => 'DisassociateVpcCidrBlock',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisassociateVpcCidrBlockRequest', ],
			'output' => [ 'shape' => 'DisassociateVpcCidrBlockResult', ],
		],
		'EnableEbsEncryptionByDefault'                   => [
			'name'   => 'EnableEbsEncryptionByDefault',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableEbsEncryptionByDefaultRequest', ],
			'output' => [ 'shape' => 'EnableEbsEncryptionByDefaultResult', ],
		],
		'EnableTransitGatewayRouteTablePropagation'      => [
			'name'   => 'EnableTransitGatewayRouteTablePropagation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableTransitGatewayRouteTablePropagationRequest', ],
			'output' => [ 'shape' => 'EnableTransitGatewayRouteTablePropagationResult', ],
		],
		'EnableVgwRoutePropagation'                      => [
			'name'  => 'EnableVgwRoutePropagation',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'EnableVgwRoutePropagationRequest', ],
		],
		'EnableVolumeIO'                                 => [
			'name'  => 'EnableVolumeIO',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'EnableVolumeIORequest', ],
		],
		'EnableVpcClassicLink'                           => [
			'name'   => 'EnableVpcClassicLink',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableVpcClassicLinkRequest', ],
			'output' => [ 'shape' => 'EnableVpcClassicLinkResult', ],
		],
		'EnableVpcClassicLinkDnsSupport'                 => [
			'name'   => 'EnableVpcClassicLinkDnsSupport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableVpcClassicLinkDnsSupportRequest', ],
			'output' => [ 'shape' => 'EnableVpcClassicLinkDnsSupportResult', ],
		],
		'ExportClientVpnClientCertificateRevocationList' => [
			'name'   => 'ExportClientVpnClientCertificateRevocationList',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ExportClientVpnClientCertificateRevocationListRequest', ],
			'output' => [ 'shape' => 'ExportClientVpnClientCertificateRevocationListResult', ],
		],
		'ExportClientVpnClientConfiguration'             => [
			'name'   => 'ExportClientVpnClientConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ExportClientVpnClientConfigurationRequest', ],
			'output' => [ 'shape' => 'ExportClientVpnClientConfigurationResult', ],
		],
		'ExportTransitGatewayRoutes'                     => [
			'name'   => 'ExportTransitGatewayRoutes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ExportTransitGatewayRoutesRequest', ],
			'output' => [ 'shape' => 'ExportTransitGatewayRoutesResult', ],
		],
		'GetConsoleOutput'                               => [
			'name'   => 'GetConsoleOutput',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetConsoleOutputRequest', ],
			'output' => [ 'shape' => 'GetConsoleOutputResult', ],
		],
		'GetConsoleScreenshot'                           => [
			'name'   => 'GetConsoleScreenshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetConsoleScreenshotRequest', ],
			'output' => [ 'shape' => 'GetConsoleScreenshotResult', ],
		],
		'GetEbsDefaultKmsKeyId'                          => [
			'name'   => 'GetEbsDefaultKmsKeyId',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetEbsDefaultKmsKeyIdRequest', ],
			'output' => [ 'shape' => 'GetEbsDefaultKmsKeyIdResult', ],
		],
		'GetEbsEncryptionByDefault'                      => [
			'name'   => 'GetEbsEncryptionByDefault',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetEbsEncryptionByDefaultRequest', ],
			'output' => [ 'shape' => 'GetEbsEncryptionByDefaultResult', ],
		],
		'GetHostReservationPurchasePreview'              => [
			'name'   => 'GetHostReservationPurchasePreview',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetHostReservationPurchasePreviewRequest', ],
			'output' => [ 'shape' => 'GetHostReservationPurchasePreviewResult', ],
		],
		'GetLaunchTemplateData'                          => [
			'name'   => 'GetLaunchTemplateData',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetLaunchTemplateDataRequest', ],
			'output' => [ 'shape' => 'GetLaunchTemplateDataResult', ],
		],
		'GetPasswordData'                                => [
			'name'   => 'GetPasswordData',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPasswordDataRequest', ],
			'output' => [ 'shape' => 'GetPasswordDataResult', ],
		],
		'GetReservedInstancesExchangeQuote'              => [
			'name'   => 'GetReservedInstancesExchangeQuote',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetReservedInstancesExchangeQuoteRequest', ],
			'output' => [ 'shape' => 'GetReservedInstancesExchangeQuoteResult', ],
		],
		'GetTransitGatewayAttachmentPropagations'        => [
			'name'   => 'GetTransitGatewayAttachmentPropagations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetTransitGatewayAttachmentPropagationsRequest', ],
			'output' => [ 'shape' => 'GetTransitGatewayAttachmentPropagationsResult', ],
		],
		'GetTransitGatewayRouteTableAssociations'        => [
			'name'   => 'GetTransitGatewayRouteTableAssociations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetTransitGatewayRouteTableAssociationsRequest', ],
			'output' => [ 'shape' => 'GetTransitGatewayRouteTableAssociationsResult', ],
		],
		'GetTransitGatewayRouteTablePropagations'        => [
			'name'   => 'GetTransitGatewayRouteTablePropagations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetTransitGatewayRouteTablePropagationsRequest', ],
			'output' => [ 'shape' => 'GetTransitGatewayRouteTablePropagationsResult', ],
		],
		'ImportClientVpnClientCertificateRevocationList' => [
			'name'   => 'ImportClientVpnClientCertificateRevocationList',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportClientVpnClientCertificateRevocationListRequest', ],
			'output' => [ 'shape' => 'ImportClientVpnClientCertificateRevocationListResult', ],
		],
		'ImportImage'                                    => [
			'name'   => 'ImportImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportImageRequest', ],
			'output' => [ 'shape' => 'ImportImageResult', ],
		],
		'ImportInstance'                                 => [
			'name'   => 'ImportInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportInstanceRequest', ],
			'output' => [ 'shape' => 'ImportInstanceResult', ],
		],
		'ImportKeyPair'                                  => [
			'name'   => 'ImportKeyPair',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportKeyPairRequest', ],
			'output' => [ 'shape' => 'ImportKeyPairResult', ],
		],
		'ImportSnapshot'                                 => [
			'name'   => 'ImportSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportSnapshotRequest', ],
			'output' => [ 'shape' => 'ImportSnapshotResult', ],
		],
		'ImportVolume'                                   => [
			'name'   => 'ImportVolume',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ImportVolumeRequest', ],
			'output' => [ 'shape' => 'ImportVolumeResult', ],
		],
		'ModifyCapacityReservation'                      => [
			'name'   => 'ModifyCapacityReservation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyCapacityReservationRequest', ],
			'output' => [ 'shape' => 'ModifyCapacityReservationResult', ],
		],
		'ModifyClientVpnEndpoint'                        => [
			'name'   => 'ModifyClientVpnEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClientVpnEndpointRequest', ],
			'output' => [ 'shape' => 'ModifyClientVpnEndpointResult', ],
		],
		'ModifyEbsDefaultKmsKeyId'                       => [
			'name'   => 'ModifyEbsDefaultKmsKeyId',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyEbsDefaultKmsKeyIdRequest', ],
			'output' => [ 'shape' => 'ModifyEbsDefaultKmsKeyIdResult', ],
		],
		'ModifyFleet'                                    => [
			'name'   => 'ModifyFleet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyFleetRequest', ],
			'output' => [ 'shape' => 'ModifyFleetResult', ],
		],
		'ModifyFpgaImageAttribute'                       => [
			'name'   => 'ModifyFpgaImageAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyFpgaImageAttributeRequest', ],
			'output' => [ 'shape' => 'ModifyFpgaImageAttributeResult', ],
		],
		'ModifyHosts'                                    => [
			'name'   => 'ModifyHosts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyHostsRequest', ],
			'output' => [ 'shape' => 'ModifyHostsResult', ],
		],
		'ModifyIdFormat'                                 => [
			'name'  => 'ModifyIdFormat',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyIdFormatRequest', ],
		],
		'ModifyIdentityIdFormat'                         => [
			'name'  => 'ModifyIdentityIdFormat',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyIdentityIdFormatRequest', ],
		],
		'ModifyImageAttribute'                           => [
			'name'  => 'ModifyImageAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyImageAttributeRequest', ],
		],
		'ModifyInstanceAttribute'                        => [
			'name'  => 'ModifyInstanceAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyInstanceAttributeRequest', ],
		],
		'ModifyInstanceCapacityReservationAttributes'    => [
			'name'   => 'ModifyInstanceCapacityReservationAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyInstanceCapacityReservationAttributesRequest', ],
			'output' => [ 'shape' => 'ModifyInstanceCapacityReservationAttributesResult', ],
		],
		'ModifyInstanceCreditSpecification'              => [
			'name'   => 'ModifyInstanceCreditSpecification',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyInstanceCreditSpecificationRequest', ],
			'output' => [ 'shape' => 'ModifyInstanceCreditSpecificationResult', ],
		],
		'ModifyInstanceEventStartTime'                   => [
			'name'   => 'ModifyInstanceEventStartTime',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyInstanceEventStartTimeRequest', ],
			'output' => [ 'shape' => 'ModifyInstanceEventStartTimeResult', ],
		],
		'ModifyInstancePlacement'                        => [
			'name'   => 'ModifyInstancePlacement',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyInstancePlacementRequest', ],
			'output' => [ 'shape' => 'ModifyInstancePlacementResult', ],
		],
		'ModifyLaunchTemplate'                           => [
			'name'   => 'ModifyLaunchTemplate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyLaunchTemplateRequest', ],
			'output' => [ 'shape' => 'ModifyLaunchTemplateResult', ],
		],
		'ModifyNetworkInterfaceAttribute'                => [
			'name'  => 'ModifyNetworkInterfaceAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyNetworkInterfaceAttributeRequest', ],
		],
		'ModifyReservedInstances'                        => [
			'name'   => 'ModifyReservedInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyReservedInstancesRequest', ],
			'output' => [ 'shape' => 'ModifyReservedInstancesResult', ],
		],
		'ModifySnapshotAttribute'                        => [
			'name'  => 'ModifySnapshotAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifySnapshotAttributeRequest', ],
		],
		'ModifySpotFleetRequest'                         => [
			'name'   => 'ModifySpotFleetRequest',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifySpotFleetRequestRequest', ],
			'output' => [ 'shape' => 'ModifySpotFleetRequestResponse', ],
		],
		'ModifySubnetAttribute'                          => [
			'name'  => 'ModifySubnetAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifySubnetAttributeRequest', ],
		],
		'ModifyTrafficMirrorFilterNetworkServices'       => [
			'name'   => 'ModifyTrafficMirrorFilterNetworkServices',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTrafficMirrorFilterNetworkServicesRequest', ],
			'output' => [ 'shape' => 'ModifyTrafficMirrorFilterNetworkServicesResult', ],
		],
		'ModifyTrafficMirrorFilterRule'                  => [
			'name'   => 'ModifyTrafficMirrorFilterRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTrafficMirrorFilterRuleRequest', ],
			'output' => [ 'shape' => 'ModifyTrafficMirrorFilterRuleResult', ],
		],
		'ModifyTrafficMirrorSession'                     => [
			'name'   => 'ModifyTrafficMirrorSession',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTrafficMirrorSessionRequest', ],
			'output' => [ 'shape' => 'ModifyTrafficMirrorSessionResult', ],
		],
		'ModifyTransitGatewayVpcAttachment'              => [
			'name'   => 'ModifyTransitGatewayVpcAttachment',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyTransitGatewayVpcAttachmentRequest', ],
			'output' => [ 'shape' => 'ModifyTransitGatewayVpcAttachmentResult', ],
		],
		'ModifyVolume'                                   => [
			'name'   => 'ModifyVolume',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVolumeRequest', ],
			'output' => [ 'shape' => 'ModifyVolumeResult', ],
		],
		'ModifyVolumeAttribute'                          => [
			'name'  => 'ModifyVolumeAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyVolumeAttributeRequest', ],
		],
		'ModifyVpcAttribute'                             => [
			'name'  => 'ModifyVpcAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ModifyVpcAttributeRequest', ],
		],
		'ModifyVpcEndpoint'                              => [
			'name'   => 'ModifyVpcEndpoint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcEndpointRequest', ],
			'output' => [ 'shape' => 'ModifyVpcEndpointResult', ],
		],
		'ModifyVpcEndpointConnectionNotification'        => [
			'name'   => 'ModifyVpcEndpointConnectionNotification',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcEndpointConnectionNotificationRequest', ],
			'output' => [ 'shape' => 'ModifyVpcEndpointConnectionNotificationResult', ],
		],
		'ModifyVpcEndpointServiceConfiguration'          => [
			'name'   => 'ModifyVpcEndpointServiceConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcEndpointServiceConfigurationRequest', ],
			'output' => [ 'shape' => 'ModifyVpcEndpointServiceConfigurationResult', ],
		],
		'ModifyVpcEndpointServicePermissions'            => [
			'name'   => 'ModifyVpcEndpointServicePermissions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcEndpointServicePermissionsRequest', ],
			'output' => [ 'shape' => 'ModifyVpcEndpointServicePermissionsResult', ],
		],
		'ModifyVpcPeeringConnectionOptions'              => [
			'name'   => 'ModifyVpcPeeringConnectionOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcPeeringConnectionOptionsRequest', ],
			'output' => [ 'shape' => 'ModifyVpcPeeringConnectionOptionsResult', ],
		],
		'ModifyVpcTenancy'                               => [
			'name'   => 'ModifyVpcTenancy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpcTenancyRequest', ],
			'output' => [ 'shape' => 'ModifyVpcTenancyResult', ],
		],
		'ModifyVpnConnection'                            => [
			'name'   => 'ModifyVpnConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyVpnConnectionRequest', ],
			'output' => [ 'shape' => 'ModifyVpnConnectionResult', ],
		],
		'MonitorInstances'                               => [
			'name'   => 'MonitorInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'MonitorInstancesRequest', ],
			'output' => [ 'shape' => 'MonitorInstancesResult', ],
		],
		'MoveAddressToVpc'                               => [
			'name'   => 'MoveAddressToVpc',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'MoveAddressToVpcRequest', ],
			'output' => [ 'shape' => 'MoveAddressToVpcResult', ],
		],
		'ProvisionByoipCidr'                             => [
			'name'   => 'ProvisionByoipCidr',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ProvisionByoipCidrRequest', ],
			'output' => [ 'shape' => 'ProvisionByoipCidrResult', ],
		],
		'PurchaseHostReservation'                        => [
			'name'   => 'PurchaseHostReservation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PurchaseHostReservationRequest', ],
			'output' => [ 'shape' => 'PurchaseHostReservationResult', ],
		],
		'PurchaseReservedInstancesOffering'              => [
			'name'   => 'PurchaseReservedInstancesOffering',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PurchaseReservedInstancesOfferingRequest', ],
			'output' => [ 'shape' => 'PurchaseReservedInstancesOfferingResult', ],
		],
		'PurchaseScheduledInstances'                     => [
			'name'   => 'PurchaseScheduledInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PurchaseScheduledInstancesRequest', ],
			'output' => [ 'shape' => 'PurchaseScheduledInstancesResult', ],
		],
		'RebootInstances'                                => [
			'name'  => 'RebootInstances',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'RebootInstancesRequest', ],
		],
		'RegisterImage'                                  => [
			'name'   => 'RegisterImage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RegisterImageRequest', ],
			'output' => [ 'shape' => 'RegisterImageResult', ],
		],
		'RejectTransitGatewayVpcAttachment'              => [
			'name'   => 'RejectTransitGatewayVpcAttachment',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RejectTransitGatewayVpcAttachmentRequest', ],
			'output' => [ 'shape' => 'RejectTransitGatewayVpcAttachmentResult', ],
		],
		'RejectVpcEndpointConnections'                   => [
			'name'   => 'RejectVpcEndpointConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RejectVpcEndpointConnectionsRequest', ],
			'output' => [ 'shape' => 'RejectVpcEndpointConnectionsResult', ],
		],
		'RejectVpcPeeringConnection'                     => [
			'name'   => 'RejectVpcPeeringConnection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RejectVpcPeeringConnectionRequest', ],
			'output' => [ 'shape' => 'RejectVpcPeeringConnectionResult', ],
		],
		'ReleaseAddress'                                 => [
			'name'  => 'ReleaseAddress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ReleaseAddressRequest', ],
		],
		'ReleaseHosts'                                   => [
			'name'   => 'ReleaseHosts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReleaseHostsRequest', ],
			'output' => [ 'shape' => 'ReleaseHostsResult', ],
		],
		'ReplaceIamInstanceProfileAssociation'           => [
			'name'   => 'ReplaceIamInstanceProfileAssociation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReplaceIamInstanceProfileAssociationRequest', ],
			'output' => [ 'shape' => 'ReplaceIamInstanceProfileAssociationResult', ],
		],
		'ReplaceNetworkAclAssociation'                   => [
			'name'   => 'ReplaceNetworkAclAssociation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReplaceNetworkAclAssociationRequest', ],
			'output' => [ 'shape' => 'ReplaceNetworkAclAssociationResult', ],
		],
		'ReplaceNetworkAclEntry'                         => [
			'name'  => 'ReplaceNetworkAclEntry',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ReplaceNetworkAclEntryRequest', ],
		],
		'ReplaceRoute'                                   => [
			'name'  => 'ReplaceRoute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ReplaceRouteRequest', ],
		],
		'ReplaceRouteTableAssociation'                   => [
			'name'   => 'ReplaceRouteTableAssociation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReplaceRouteTableAssociationRequest', ],
			'output' => [ 'shape' => 'ReplaceRouteTableAssociationResult', ],
		],
		'ReplaceTransitGatewayRoute'                     => [
			'name'   => 'ReplaceTransitGatewayRoute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ReplaceTransitGatewayRouteRequest', ],
			'output' => [ 'shape' => 'ReplaceTransitGatewayRouteResult', ],
		],
		'ReportInstanceStatus'                           => [
			'name'  => 'ReportInstanceStatus',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ReportInstanceStatusRequest', ],
		],
		'RequestSpotFleet'                               => [
			'name'   => 'RequestSpotFleet',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RequestSpotFleetRequest', ],
			'output' => [ 'shape' => 'RequestSpotFleetResponse', ],
		],
		'RequestSpotInstances'                           => [
			'name'   => 'RequestSpotInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RequestSpotInstancesRequest', ],
			'output' => [ 'shape' => 'RequestSpotInstancesResult', ],
		],
		'ResetEbsDefaultKmsKeyId'                        => [
			'name'   => 'ResetEbsDefaultKmsKeyId',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetEbsDefaultKmsKeyIdRequest', ],
			'output' => [ 'shape' => 'ResetEbsDefaultKmsKeyIdResult', ],
		],
		'ResetFpgaImageAttribute'                        => [
			'name'   => 'ResetFpgaImageAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetFpgaImageAttributeRequest', ],
			'output' => [ 'shape' => 'ResetFpgaImageAttributeResult', ],
		],
		'ResetImageAttribute'                            => [
			'name'  => 'ResetImageAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ResetImageAttributeRequest', ],
		],
		'ResetInstanceAttribute'                         => [
			'name'  => 'ResetInstanceAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ResetInstanceAttributeRequest', ],
		],
		'ResetNetworkInterfaceAttribute'                 => [
			'name'  => 'ResetNetworkInterfaceAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ResetNetworkInterfaceAttributeRequest', ],
		],
		'ResetSnapshotAttribute'                         => [
			'name'  => 'ResetSnapshotAttribute',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'ResetSnapshotAttributeRequest', ],
		],
		'RestoreAddressToClassic'                        => [
			'name'   => 'RestoreAddressToClassic',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RestoreAddressToClassicRequest', ],
			'output' => [ 'shape' => 'RestoreAddressToClassicResult', ],
		],
		'RevokeClientVpnIngress'                         => [
			'name'   => 'RevokeClientVpnIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RevokeClientVpnIngressRequest', ],
			'output' => [ 'shape' => 'RevokeClientVpnIngressResult', ],
		],
		'RevokeSecurityGroupEgress'                      => [
			'name'  => 'RevokeSecurityGroupEgress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'RevokeSecurityGroupEgressRequest', ],
		],
		'RevokeSecurityGroupIngress'                     => [
			'name'  => 'RevokeSecurityGroupIngress',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'RevokeSecurityGroupIngressRequest', ],
		],
		'RunInstances'                                   => [
			'name'   => 'RunInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RunInstancesRequest', ],
			'output' => [ 'shape' => 'Reservation', ],
		],
		'RunScheduledInstances'                          => [
			'name'   => 'RunScheduledInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RunScheduledInstancesRequest', ],
			'output' => [ 'shape' => 'RunScheduledInstancesResult', ],
		],
		'SearchTransitGatewayRoutes'                     => [
			'name'   => 'SearchTransitGatewayRoutes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SearchTransitGatewayRoutesRequest', ],
			'output' => [ 'shape' => 'SearchTransitGatewayRoutesResult', ],
		],
		'StartInstances'                                 => [
			'name'   => 'StartInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartInstancesRequest', ],
			'output' => [ 'shape' => 'StartInstancesResult', ],
		],
		'StopInstances'                                  => [
			'name'   => 'StopInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StopInstancesRequest', ],
			'output' => [ 'shape' => 'StopInstancesResult', ],
		],
		'TerminateClientVpnConnections'                  => [
			'name'   => 'TerminateClientVpnConnections',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TerminateClientVpnConnectionsRequest', ],
			'output' => [ 'shape' => 'TerminateClientVpnConnectionsResult', ],
		],
		'TerminateInstances'                             => [
			'name'   => 'TerminateInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TerminateInstancesRequest', ],
			'output' => [ 'shape' => 'TerminateInstancesResult', ],
		],
		'UnassignIpv6Addresses'                          => [
			'name'   => 'UnassignIpv6Addresses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UnassignIpv6AddressesRequest', ],
			'output' => [ 'shape' => 'UnassignIpv6AddressesResult', ],
		],
		'UnassignPrivateIpAddresses'                     => [
			'name'  => 'UnassignPrivateIpAddresses',
			'http'  => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input' => [ 'shape' => 'UnassignPrivateIpAddressesRequest', ],
		],
		'UnmonitorInstances'                             => [
			'name'   => 'UnmonitorInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UnmonitorInstancesRequest', ],
			'output' => [ 'shape' => 'UnmonitorInstancesResult', ],
		],
		'UpdateSecurityGroupRuleDescriptionsEgress'      => [
			'name'   => 'UpdateSecurityGroupRuleDescriptionsEgress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateSecurityGroupRuleDescriptionsEgressRequest', ],
			'output' => [ 'shape' => 'UpdateSecurityGroupRuleDescriptionsEgressResult', ],
		],
		'UpdateSecurityGroupRuleDescriptionsIngress'     => [
			'name'   => 'UpdateSecurityGroupRuleDescriptionsIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateSecurityGroupRuleDescriptionsIngressRequest', ],
			'output' => [ 'shape' => 'UpdateSecurityGroupRuleDescriptionsIngressResult', ],
		],
		'WithdrawByoipCidr'                              => [
			'name'   => 'WithdrawByoipCidr',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'WithdrawByoipCidrRequest', ],
			'output' => [ 'shape' => 'WithdrawByoipCidrResult', ],
		],
	],
	'shapes'     => [
		'AcceptReservedInstancesExchangeQuoteRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ReservedInstanceIds', ],
			'members'  => [
				'DryRun'               => [ 'shape' => 'Boolean', ],
				'ReservedInstanceIds'  => [
					'shape'        => 'ReservedInstanceIdSet',
					'locationName' => 'ReservedInstanceId',
				],
				'TargetConfigurations' => [
					'shape'        => 'TargetConfigurationRequestSet',
					'locationName' => 'TargetConfiguration',
				],
			],
		],
		'AcceptReservedInstancesExchangeQuoteResult'                     => [
			'type'    => 'structure',
			'members' => [
				'ExchangeId' => [
					'shape'        => 'String',
					'locationName' => 'exchangeId',
				],
			],
		],
		'AcceptTransitGatewayVpcAttachmentRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayAttachmentId', ],
			'members'  => [
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'AcceptTransitGatewayVpcAttachmentResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachment' => [
					'shape'        => 'TransitGatewayVpcAttachment',
					'locationName' => 'transitGatewayVpcAttachment',
				],
			],
		],
		'AcceptVpcEndpointConnectionsRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ServiceId', 'VpcEndpointIds', ],
			'members'  => [
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'ServiceId'      => [ 'shape' => 'String', ],
				'VpcEndpointIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'VpcEndpointId',
				],
			],
		],
		'AcceptVpcEndpointConnectionsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'AcceptVpcPeeringConnectionRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'AcceptVpcPeeringConnectionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'VpcPeeringConnection' => [
					'shape'        => 'VpcPeeringConnection',
					'locationName' => 'vpcPeeringConnection',
				],
			],
		],
		'AccountAttribute'                                               => [
			'type'    => 'structure',
			'members' => [
				'AttributeName'   => [
					'shape'        => 'String',
					'locationName' => 'attributeName',
				],
				'AttributeValues' => [
					'shape'        => 'AccountAttributeValueList',
					'locationName' => 'attributeValueSet',
				],
			],
		],
		'AccountAttributeList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AccountAttribute',
				'locationName' => 'item',
			],
		],
		'AccountAttributeName'                                           => [
			'type' => 'string',
			'enum' => [ 'supported-platforms', 'default-vpc', ],
		],
		'AccountAttributeNameStringList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AccountAttributeName',
				'locationName' => 'attributeName',
			],
		],
		'AccountAttributeValue'                                          => [
			'type'    => 'structure',
			'members' => [
				'AttributeValue' => [
					'shape'        => 'String',
					'locationName' => 'attributeValue',
				],
			],
		],
		'AccountAttributeValueList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AccountAttributeValue',
				'locationName' => 'item',
			],
		],
		'ActiveInstance'                                                 => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'            => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'InstanceType'          => [
					'shape'        => 'String',
					'locationName' => 'instanceType',
				],
				'SpotInstanceRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotInstanceRequestId',
				],
				'InstanceHealth'        => [
					'shape'        => 'InstanceHealthStatus',
					'locationName' => 'instanceHealth',
				],
			],
		],
		'ActiveInstanceSet'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ActiveInstance',
				'locationName' => 'item',
			],
		],
		'ActivityStatus'                                                 => [
			'type' => 'string',
			'enum' => [
				'error',
				'pending_fulfillment',
				'pending_termination',
				'fulfilled',
			],
		],
		'Address'                                                        => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'              => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'PublicIp'                => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
				'AllocationId'            => [
					'shape'        => 'String',
					'locationName' => 'allocationId',
				],
				'AssociationId'           => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'Domain'                  => [
					'shape'        => 'DomainType',
					'locationName' => 'domain',
				],
				'NetworkInterfaceId'      => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'NetworkInterfaceOwnerId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceOwnerId',
				],
				'PrivateIpAddress'        => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
				'Tags'                    => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'PublicIpv4Pool'          => [
					'shape'        => 'String',
					'locationName' => 'publicIpv4Pool',
				],
			],
		],
		'AddressList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Address',
				'locationName' => 'item',
			],
		],
		'AdvertiseByoipCidrRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'Cidr', ],
			'members'  => [
				'Cidr'   => [ 'shape' => 'String', ],
				'DryRun' => [ 'shape' => 'Boolean', ],
			],
		],
		'AdvertiseByoipCidrResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'ByoipCidr' => [
					'shape'        => 'ByoipCidr',
					'locationName' => 'byoipCidr',
				],
			],
		],
		'Affinity'                                                       => [
			'type' => 'string',
			'enum' => [ 'default', 'host', ],
		],
		'AllocateAddressRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'Domain'         => [ 'shape' => 'DomainType', ],
				'Address'        => [ 'shape' => 'String', ],
				'PublicIpv4Pool' => [ 'shape' => 'String', ],
				'DryRun'         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'AllocateAddressResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'PublicIp'       => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
				'AllocationId'   => [
					'shape'        => 'String',
					'locationName' => 'allocationId',
				],
				'PublicIpv4Pool' => [
					'shape'        => 'String',
					'locationName' => 'publicIpv4Pool',
				],
				'Domain'         => [
					'shape'        => 'DomainType',
					'locationName' => 'domain',
				],
			],
		],
		'AllocateHostsRequest'                                           => [
			'type'     => 'structure',
			'required' => [
				'AvailabilityZone',
				'InstanceType',
				'Quantity',
			],
			'members'  => [
				'AutoPlacement'     => [
					'shape'        => 'AutoPlacement',
					'locationName' => 'autoPlacement',
				],
				'AvailabilityZone'  => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'ClientToken'       => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'InstanceType'      => [
					'shape'        => 'String',
					'locationName' => 'instanceType',
				],
				'Quantity'          => [
					'shape'        => 'Integer',
					'locationName' => 'quantity',
				],
				'TagSpecifications' => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'HostRecovery'      => [ 'shape' => 'HostRecovery', ],
			],
		],
		'AllocateHostsResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'HostIds' => [
					'shape'        => 'ResponseHostIdList',
					'locationName' => 'hostIdSet',
				],
			],
		],
		'AllocationIdList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AllocationId',
			],
		],
		'AllocationState'                                                => [
			'type' => 'string',
			'enum' => [
				'available',
				'under-assessment',
				'permanent-failure',
				'released',
				'released-permanent-failure',
				'pending',
			],
		],
		'AllocationStrategy'                                             => [
			'type' => 'string',
			'enum' => [ 'lowestPrice', 'diversified', ],
		],
		'AllowedPrincipal'                                               => [
			'type'    => 'structure',
			'members' => [
				'PrincipalType' => [
					'shape'        => 'PrincipalType',
					'locationName' => 'principalType',
				],
				'Principal'     => [
					'shape'        => 'String',
					'locationName' => 'principal',
				],
			],
		],
		'AllowedPrincipalSet'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AllowedPrincipal',
				'locationName' => 'item',
			],
		],
		'ApplySecurityGroupsToClientVpnTargetNetworkRequest'             => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'VpcId',
				'SecurityGroupIds',
			],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'VpcId'               => [ 'shape' => 'String', ],
				'SecurityGroupIds'    => [
					'shape'        => 'ClientVpnSecurityGroupIdSet',
					'locationName' => 'SecurityGroupId',
				],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'ApplySecurityGroupsToClientVpnTargetNetworkResult'              => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroupIds' => [
					'shape'        => 'ClientVpnSecurityGroupIdSet',
					'locationName' => 'securityGroupIds',
				],
			],
		],
		'ArchitectureValues'                                             => [
			'type' => 'string',
			'enum' => [ 'i386', 'x86_64', 'arm64', ],
		],
		'AssignIpv6AddressesRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'Ipv6AddressCount'   => [
					'shape'        => 'Integer',
					'locationName' => 'ipv6AddressCount',
				],
				'Ipv6Addresses'      => [
					'shape'        => 'Ipv6AddressList',
					'locationName' => 'ipv6Addresses',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'AssignIpv6AddressesResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'AssignedIpv6Addresses' => [
					'shape'        => 'Ipv6AddressList',
					'locationName' => 'assignedIpv6Addresses',
				],
				'NetworkInterfaceId'    => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'AssignPrivateIpAddressesRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'AllowReassignment'              => [
					'shape'        => 'Boolean',
					'locationName' => 'allowReassignment',
				],
				'NetworkInterfaceId'             => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'PrivateIpAddresses'             => [
					'shape'        => 'PrivateIpAddressStringList',
					'locationName' => 'privateIpAddress',
				],
				'SecondaryPrivateIpAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'secondaryPrivateIpAddressCount',
				],
			],
		],
		'AssignPrivateIpAddressesResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfaceId'         => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'AssignedPrivateIpAddresses' => [
					'shape'        => 'AssignedPrivateIpAddressList',
					'locationName' => 'assignedPrivateIpAddressesSet',
				],
			],
		],
		'AssignedPrivateIpAddress'                                       => [
			'type'    => 'structure',
			'members' => [
				'PrivateIpAddress' => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'AssignedPrivateIpAddressList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AssignedPrivateIpAddress',
				'locationName' => 'item',
			],
		],
		'AssociateAddressRequest'                                        => [
			'type'    => 'structure',
			'members' => [
				'AllocationId'       => [ 'shape' => 'String', ],
				'InstanceId'         => [ 'shape' => 'String', ],
				'PublicIp'           => [ 'shape' => 'String', ],
				'AllowReassociation' => [
					'shape'        => 'Boolean',
					'locationName' => 'allowReassociation',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'PrivateIpAddress'   => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'AssociateAddressResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
			],
		],
		'AssociateClientVpnTargetNetworkRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', 'SubnetId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'SubnetId'            => [ 'shape' => 'String', ],
				'ClientToken'         => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'AssociateClientVpnTargetNetworkResult'                          => [
			'type'    => 'structure',
			'members' => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'Status'        => [
					'shape'        => 'AssociationStatus',
					'locationName' => 'status',
				],
			],
		],
		'AssociateDhcpOptionsRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'DhcpOptionsId', 'VpcId', ],
			'members'  => [
				'DhcpOptionsId' => [ 'shape' => 'String', ],
				'VpcId'         => [ 'shape' => 'String', ],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'AssociateIamInstanceProfileRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'IamInstanceProfile', 'InstanceId', ],
			'members'  => [
				'IamInstanceProfile' => [ 'shape' => 'IamInstanceProfileSpecification', ],
				'InstanceId'         => [ 'shape' => 'String', ],
			],
		],
		'AssociateIamInstanceProfileResult'                              => [
			'type'    => 'structure',
			'members' => [
				'IamInstanceProfileAssociation' => [
					'shape'        => 'IamInstanceProfileAssociation',
					'locationName' => 'iamInstanceProfileAssociation',
				],
			],
		],
		'AssociateRouteTableRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'RouteTableId', 'SubnetId', ],
			'members'  => [
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'RouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
				'SubnetId'     => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'AssociateRouteTableResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
			],
		],
		'AssociateSubnetCidrBlockRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'Ipv6CidrBlock', 'SubnetId', ],
			'members'  => [
				'Ipv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'SubnetId'      => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'AssociateSubnetCidrBlockResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'Ipv6CidrBlockAssociation' => [
					'shape'        => 'SubnetIpv6CidrBlockAssociation',
					'locationName' => 'ipv6CidrBlockAssociation',
				],
				'SubnetId'                 => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'AssociateTransitGatewayRouteTableRequest'                       => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'TransitGatewayAttachmentId',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'AssociateTransitGatewayRouteTableResult'                        => [
			'type'    => 'structure',
			'members' => [
				'Association' => [
					'shape'        => 'TransitGatewayAssociation',
					'locationName' => 'association',
				],
			],
		],
		'AssociateVpcCidrBlockRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'AmazonProvidedIpv6CidrBlock' => [
					'shape'        => 'Boolean',
					'locationName' => 'amazonProvidedIpv6CidrBlock',
				],
				'CidrBlock'                   => [ 'shape' => 'String', ],
				'VpcId'                       => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'AssociateVpcCidrBlockResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'Ipv6CidrBlockAssociation' => [
					'shape'        => 'VpcIpv6CidrBlockAssociation',
					'locationName' => 'ipv6CidrBlockAssociation',
				],
				'CidrBlockAssociation'     => [
					'shape'        => 'VpcCidrBlockAssociation',
					'locationName' => 'cidrBlockAssociation',
				],
				'VpcId'                    => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'AssociatedNetworkType'                                          => [
			'type' => 'string',
			'enum' => [ 'vpc', ],
		],
		'AssociatedTargetNetwork'                                        => [
			'type'    => 'structure',
			'members' => [
				'NetworkId'   => [
					'shape'        => 'String',
					'locationName' => 'networkId',
				],
				'NetworkType' => [
					'shape'        => 'AssociatedNetworkType',
					'locationName' => 'networkType',
				],
			],
		],
		'AssociatedTargetNetworkSet'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AssociatedTargetNetwork',
				'locationName' => 'item',
			],
		],
		'AssociationIdList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AssociationId',
			],
		],
		'AssociationStatus'                                              => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'AssociationStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'AssociationStatusCode'                                          => [
			'type' => 'string',
			'enum' => [
				'associating',
				'associated',
				'association-failed',
				'disassociating',
				'disassociated',
			],
		],
		'AttachClassicLinkVpcRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'Groups', 'InstanceId', 'VpcId', ],
			'members'  => [
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Groups'     => [
					'shape'        => 'GroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'VpcId'      => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'AttachClassicLinkVpcResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'AttachInternetGatewayRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'InternetGatewayId', 'VpcId', ],
			'members'  => [
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'internetGatewayId',
				],
				'VpcId'             => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'AttachNetworkInterfaceRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'DeviceIndex',
				'InstanceId',
				'NetworkInterfaceId',
			],
			'members'  => [
				'DeviceIndex'        => [
					'shape'        => 'Integer',
					'locationName' => 'deviceIndex',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceId'         => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'AttachNetworkInterfaceResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'AttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'attachmentId',
				],
			],
		],
		'AttachVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'Device', 'InstanceId', 'VolumeId', ],
			'members'  => [
				'Device'     => [ 'shape' => 'String', ],
				'InstanceId' => [ 'shape' => 'String', ],
				'VolumeId'   => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'AttachVpnGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'VpcId', 'VpnGatewayId', ],
			'members'  => [
				'VpcId'        => [ 'shape' => 'String', ],
				'VpnGatewayId' => [ 'shape' => 'String', ],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'AttachVpnGatewayResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'VpcAttachment' => [
					'shape'        => 'VpcAttachment',
					'locationName' => 'attachment',
				],
			],
		],
		'AttachmentStatus'                                               => [
			'type' => 'string',
			'enum' => [
				'attaching',
				'attached',
				'detaching',
				'detached',
			],
		],
		'AttributeBooleanValue'                                          => [
			'type'    => 'structure',
			'members' => [
				'Value' => [
					'shape'        => 'Boolean',
					'locationName' => 'value',
				],
			],
		],
		'AttributeValue'                                                 => [
			'type'    => 'structure',
			'members' => [
				'Value' => [
					'shape'        => 'String',
					'locationName' => 'value',
				],
			],
		],
		'AuthorizationRule'                                              => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId' => [
					'shape'        => 'String',
					'locationName' => 'clientVpnEndpointId',
				],
				'Description'         => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'GroupId'             => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'AccessAll'           => [
					'shape'        => 'Boolean',
					'locationName' => 'accessAll',
				],
				'DestinationCidr'     => [
					'shape'        => 'String',
					'locationName' => 'destinationCidr',
				],
				'Status'              => [
					'shape'        => 'ClientVpnAuthorizationRuleStatus',
					'locationName' => 'status',
				],
			],
		],
		'AuthorizationRuleSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AuthorizationRule',
				'locationName' => 'item',
			],
		],
		'AuthorizeClientVpnIngressRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'TargetNetworkCidr',
			],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'TargetNetworkCidr'   => [ 'shape' => 'String', ],
				'AccessGroupId'       => [ 'shape' => 'String', ],
				'AuthorizeAllGroups'  => [ 'shape' => 'Boolean', ],
				'Description'         => [ 'shape' => 'String', ],
				'ClientToken'         => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'AuthorizeClientVpnIngressResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ClientVpnAuthorizationRuleStatus',
					'locationName' => 'status',
				],
			],
		],
		'AuthorizeSecurityGroupEgressRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'GroupId', ],
			'members'  => [
				'DryRun'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'GroupId'                    => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'IpPermissions'              => [
					'shape'        => 'IpPermissionList',
					'locationName' => 'ipPermissions',
				],
				'CidrIp'                     => [
					'shape'        => 'String',
					'locationName' => 'cidrIp',
				],
				'FromPort'                   => [
					'shape'        => 'Integer',
					'locationName' => 'fromPort',
				],
				'IpProtocol'                 => [
					'shape'        => 'String',
					'locationName' => 'ipProtocol',
				],
				'ToPort'                     => [
					'shape'        => 'Integer',
					'locationName' => 'toPort',
				],
				'SourceSecurityGroupName'    => [
					'shape'        => 'String',
					'locationName' => 'sourceSecurityGroupName',
				],
				'SourceSecurityGroupOwnerId' => [
					'shape'        => 'String',
					'locationName' => 'sourceSecurityGroupOwnerId',
				],
			],
		],
		'AuthorizeSecurityGroupIngressRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'CidrIp'                     => [ 'shape' => 'String', ],
				'FromPort'                   => [ 'shape' => 'Integer', ],
				'GroupId'                    => [ 'shape' => 'String', ],
				'GroupName'                  => [ 'shape' => 'String', ],
				'IpPermissions'              => [ 'shape' => 'IpPermissionList', ],
				'IpProtocol'                 => [ 'shape' => 'String', ],
				'SourceSecurityGroupName'    => [ 'shape' => 'String', ],
				'SourceSecurityGroupOwnerId' => [ 'shape' => 'String', ],
				'ToPort'                     => [ 'shape' => 'Integer', ],
				'DryRun'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'AutoAcceptSharedAttachmentsValue'                               => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'AutoPlacement'                                                  => [
			'type' => 'string',
			'enum' => [ 'on', 'off', ],
		],
		'AvailabilityZone'                                               => [
			'type'    => 'structure',
			'members' => [
				'State'      => [
					'shape'        => 'AvailabilityZoneState',
					'locationName' => 'zoneState',
				],
				'Messages'   => [
					'shape'        => 'AvailabilityZoneMessageList',
					'locationName' => 'messageSet',
				],
				'RegionName' => [
					'shape'        => 'String',
					'locationName' => 'regionName',
				],
				'ZoneName'   => [
					'shape'        => 'String',
					'locationName' => 'zoneName',
				],
				'ZoneId'     => [
					'shape'        => 'String',
					'locationName' => 'zoneId',
				],
			],
		],
		'AvailabilityZoneList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AvailabilityZone',
				'locationName' => 'item',
			],
		],
		'AvailabilityZoneMessage'                                        => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'AvailabilityZoneMessageList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AvailabilityZoneMessage',
				'locationName' => 'item',
			],
		],
		'AvailabilityZoneState'                                          => [
			'type' => 'string',
			'enum' => [
				'available',
				'information',
				'impaired',
				'unavailable',
			],
		],
		'AvailableCapacity'                                              => [
			'type'    => 'structure',
			'members' => [
				'AvailableInstanceCapacity' => [
					'shape'        => 'AvailableInstanceCapacityList',
					'locationName' => 'availableInstanceCapacity',
				],
				'AvailableVCpus'            => [
					'shape'        => 'Integer',
					'locationName' => 'availableVCpus',
				],
			],
		],
		'AvailableInstanceCapacityList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceCapacity',
				'locationName' => 'item',
			],
		],
		'BatchState'                                                     => [
			'type' => 'string',
			'enum' => [
				'submitted',
				'active',
				'cancelled',
				'failed',
				'cancelled_running',
				'cancelled_terminating',
				'modifying',
			],
		],
		'BillingProductList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'Blob'                                                           => [ 'type' => 'blob', ],
		'BlobAttributeValue'                                             => [
			'type'    => 'structure',
			'members' => [
				'Value' => [
					'shape'        => 'Blob',
					'locationName' => 'value',
				],
			],
		],
		'BlockDeviceMapping'                                             => [
			'type'    => 'structure',
			'members' => [
				'DeviceName'  => [
					'shape'        => 'String',
					'locationName' => 'deviceName',
				],
				'VirtualName' => [
					'shape'        => 'String',
					'locationName' => 'virtualName',
				],
				'Ebs'         => [
					'shape'        => 'EbsBlockDevice',
					'locationName' => 'ebs',
				],
				'NoDevice'    => [
					'shape'        => 'String',
					'locationName' => 'noDevice',
				],
			],
		],
		'BlockDeviceMappingList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'BlockDeviceMapping',
				'locationName' => 'item',
			],
		],
		'BlockDeviceMappingRequestList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'BlockDeviceMapping',
				'locationName' => 'BlockDeviceMapping',
			],
		],
		'Boolean'                                                        => [ 'type' => 'boolean', ],
		'BundleIdStringList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'BundleId',
			],
		],
		'BundleInstanceRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', 'Storage', ],
			'members'  => [
				'InstanceId' => [ 'shape' => 'String', ],
				'Storage'    => [ 'shape' => 'Storage', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'BundleInstanceResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'BundleTask' => [
					'shape'        => 'BundleTask',
					'locationName' => 'bundleInstanceTask',
				],
			],
		],
		'BundleTask'                                                     => [
			'type'    => 'structure',
			'members' => [
				'BundleId'        => [
					'shape'        => 'String',
					'locationName' => 'bundleId',
				],
				'BundleTaskError' => [
					'shape'        => 'BundleTaskError',
					'locationName' => 'error',
				],
				'InstanceId'      => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Progress'        => [
					'shape'        => 'String',
					'locationName' => 'progress',
				],
				'StartTime'       => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
				'State'           => [
					'shape'        => 'BundleTaskState',
					'locationName' => 'state',
				],
				'Storage'         => [
					'shape'        => 'Storage',
					'locationName' => 'storage',
				],
				'UpdateTime'      => [
					'shape'        => 'DateTime',
					'locationName' => 'updateTime',
				],
			],
		],
		'BundleTaskError'                                                => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'BundleTaskList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'BundleTask',
				'locationName' => 'item',
			],
		],
		'BundleTaskState'                                                => [
			'type' => 'string',
			'enum' => [
				'pending',
				'waiting-for-shutdown',
				'bundling',
				'storing',
				'cancelling',
				'complete',
				'failed',
			],
		],
		'ByoipCidr'                                                      => [
			'type'    => 'structure',
			'members' => [
				'Cidr'          => [
					'shape'        => 'String',
					'locationName' => 'cidr',
				],
				'Description'   => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'State'         => [
					'shape'        => 'ByoipCidrState',
					'locationName' => 'state',
				],
			],
		],
		'ByoipCidrSet'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ByoipCidr',
				'locationName' => 'item',
			],
		],
		'ByoipCidrState'                                                 => [
			'type' => 'string',
			'enum' => [
				'advertised',
				'deprovisioned',
				'failed-deprovision',
				'failed-provision',
				'pending-deprovision',
				'pending-provision',
				'provisioned',
			],
		],
		'CancelBatchErrorCode'                                           => [
			'type' => 'string',
			'enum' => [
				'fleetRequestIdDoesNotExist',
				'fleetRequestIdMalformed',
				'fleetRequestNotInCancellableState',
				'unexpectedError',
			],
		],
		'CancelBundleTaskRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'BundleId', ],
			'members'  => [
				'BundleId' => [ 'shape' => 'String', ],
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CancelBundleTaskResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'BundleTask' => [
					'shape'        => 'BundleTask',
					'locationName' => 'bundleInstanceTask',
				],
			],
		],
		'CancelCapacityReservationRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'CapacityReservationId', ],
			'members'  => [
				'CapacityReservationId' => [ 'shape' => 'String', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'CancelCapacityReservationResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'CancelConversionRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'ConversionTaskId', ],
			'members'  => [
				'ConversionTaskId' => [
					'shape'        => 'String',
					'locationName' => 'conversionTaskId',
				],
				'DryRun'           => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'ReasonMessage'    => [
					'shape'        => 'String',
					'locationName' => 'reasonMessage',
				],
			],
		],
		'CancelExportTaskRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'ExportTaskId', ],
			'members'  => [
				'ExportTaskId' => [
					'shape'        => 'String',
					'locationName' => 'exportTaskId',
				],
			],
		],
		'CancelImportTaskRequest'                                        => [
			'type'    => 'structure',
			'members' => [
				'CancelReason' => [ 'shape' => 'String', ],
				'DryRun'       => [ 'shape' => 'Boolean', ],
				'ImportTaskId' => [ 'shape' => 'String', ],
			],
		],
		'CancelImportTaskResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'ImportTaskId'  => [
					'shape'        => 'String',
					'locationName' => 'importTaskId',
				],
				'PreviousState' => [
					'shape'        => 'String',
					'locationName' => 'previousState',
				],
				'State'         => [
					'shape'        => 'String',
					'locationName' => 'state',
				],
			],
		],
		'CancelReservedInstancesListingRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'ReservedInstancesListingId', ],
			'members'  => [
				'ReservedInstancesListingId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesListingId',
				],
			],
		],
		'CancelReservedInstancesListingResult'                           => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesListings' => [
					'shape'        => 'ReservedInstancesListingList',
					'locationName' => 'reservedInstancesListingsSet',
				],
			],
		],
		'CancelSpotFleetRequestsError'                                   => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'CancelBatchErrorCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'CancelSpotFleetRequestsErrorItem'                               => [
			'type'    => 'structure',
			'members' => [
				'Error'              => [
					'shape'        => 'CancelSpotFleetRequestsError',
					'locationName' => 'error',
				],
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'CancelSpotFleetRequestsErrorSet'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CancelSpotFleetRequestsErrorItem',
				'locationName' => 'item',
			],
		],
		'CancelSpotFleetRequestsRequest'                                 => [
			'type'     => 'structure',
			'required' => [
				'SpotFleetRequestIds',
				'TerminateInstances',
			],
			'members'  => [
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'SpotFleetRequestIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'spotFleetRequestId',
				],
				'TerminateInstances'  => [
					'shape'        => 'Boolean',
					'locationName' => 'terminateInstances',
				],
			],
		],
		'CancelSpotFleetRequestsResponse'                                => [
			'type'    => 'structure',
			'members' => [
				'SuccessfulFleetRequests'   => [
					'shape'        => 'CancelSpotFleetRequestsSuccessSet',
					'locationName' => 'successfulFleetRequestSet',
				],
				'UnsuccessfulFleetRequests' => [
					'shape'        => 'CancelSpotFleetRequestsErrorSet',
					'locationName' => 'unsuccessfulFleetRequestSet',
				],
			],
		],
		'CancelSpotFleetRequestsSuccessItem'                             => [
			'type'    => 'structure',
			'members' => [
				'CurrentSpotFleetRequestState'  => [
					'shape'        => 'BatchState',
					'locationName' => 'currentSpotFleetRequestState',
				],
				'PreviousSpotFleetRequestState' => [
					'shape'        => 'BatchState',
					'locationName' => 'previousSpotFleetRequestState',
				],
				'SpotFleetRequestId'            => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'CancelSpotFleetRequestsSuccessSet'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CancelSpotFleetRequestsSuccessItem',
				'locationName' => 'item',
			],
		],
		'CancelSpotInstanceRequestState'                                 => [
			'type' => 'string',
			'enum' => [
				'active',
				'open',
				'closed',
				'cancelled',
				'completed',
			],
		],
		'CancelSpotInstanceRequestsRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'SpotInstanceRequestIds', ],
			'members'  => [
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'SpotInstanceRequestIds' => [
					'shape'        => 'SpotInstanceRequestIdList',
					'locationName' => 'SpotInstanceRequestId',
				],
			],
		],
		'CancelSpotInstanceRequestsResult'                               => [
			'type'    => 'structure',
			'members' => [
				'CancelledSpotInstanceRequests' => [
					'shape'        => 'CancelledSpotInstanceRequestList',
					'locationName' => 'spotInstanceRequestSet',
				],
			],
		],
		'CancelledSpotInstanceRequest'                                   => [
			'type'    => 'structure',
			'members' => [
				'SpotInstanceRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotInstanceRequestId',
				],
				'State'                 => [
					'shape'        => 'CancelSpotInstanceRequestState',
					'locationName' => 'state',
				],
			],
		],
		'CancelledSpotInstanceRequestList'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CancelledSpotInstanceRequest',
				'locationName' => 'item',
			],
		],
		'CapacityReservation'                                            => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationId'  => [ 'shape' => 'String', 'locationName' => 'capacityReservationId', ],
				'InstanceType'           => [ 'shape' => 'String', 'locationName' => 'instanceType', ],
				'InstancePlatform'       => [
					'shape'        => 'CapacityReservationInstancePlatform',
					'locationName' => 'instancePlatform',
				],
				'AvailabilityZone'       => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'Tenancy'                => [ 'shape' => 'CapacityReservationTenancy', 'locationName' => 'tenancy', ],
				'TotalInstanceCount'     => [ 'shape' => 'Integer', 'locationName' => 'totalInstanceCount', ],
				'AvailableInstanceCount' => [ 'shape' => 'Integer', 'locationName' => 'availableInstanceCount', ],
				'EbsOptimized'           => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'EphemeralStorage'       => [ 'shape' => 'Boolean', 'locationName' => 'ephemeralStorage', ],
				'State'                  => [ 'shape' => 'CapacityReservationState', 'locationName' => 'state', ],
				'EndDate'                => [ 'shape' => 'DateTime', 'locationName' => 'endDate', ],
				'EndDateType'            => [ 'shape' => 'EndDateType', 'locationName' => 'endDateType', ],
				'InstanceMatchCriteria'  => [
					'shape'        => 'InstanceMatchCriteria',
					'locationName' => 'instanceMatchCriteria',
				],
				'CreateDate'             => [ 'shape' => 'DateTime', 'locationName' => 'createDate', ],
				'Tags'                   => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'CapacityReservationIdSet'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'CapacityReservationInstancePlatform'                            => [
			'type' => 'string',
			'enum' => [
				'Linux/UNIX',
				'Red Hat Enterprise Linux',
				'SUSE Linux',
				'Windows',
				'Windows with SQL Server',
				'Windows with SQL Server Enterprise',
				'Windows with SQL Server Standard',
				'Windows with SQL Server Web',
				'Linux with SQL Server Standard',
				'Linux with SQL Server Web',
				'Linux with SQL Server Enterprise',
			],
		],
		'CapacityReservationPreference'                                  => [
			'type' => 'string',
			'enum' => [ 'open', 'none', ],
		],
		'CapacityReservationSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CapacityReservation',
				'locationName' => 'item',
			],
		],
		'CapacityReservationSpecification'                               => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationPreference' => [ 'shape' => 'CapacityReservationPreference', ],
				'CapacityReservationTarget'     => [ 'shape' => 'CapacityReservationTarget', ],
			],
		],
		'CapacityReservationSpecificationResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationPreference' => [
					'shape'        => 'CapacityReservationPreference',
					'locationName' => 'capacityReservationPreference',
				],
				'CapacityReservationTarget'     => [
					'shape'        => 'CapacityReservationTargetResponse',
					'locationName' => 'capacityReservationTarget',
				],
			],
		],
		'CapacityReservationState'                                       => [
			'type' => 'string',
			'enum' => [
				'active',
				'expired',
				'cancelled',
				'pending',
				'failed',
			],
		],
		'CapacityReservationTarget'                                      => [
			'type'    => 'structure',
			'members' => [ 'CapacityReservationId' => [ 'shape' => 'String', ], ],
		],
		'CapacityReservationTargetResponse'                              => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationId' => [
					'shape'        => 'String',
					'locationName' => 'capacityReservationId',
				],
			],
		],
		'CapacityReservationTenancy'                                     => [
			'type' => 'string',
			'enum' => [ 'default', 'dedicated', ],
		],
		'CertificateAuthentication'                                      => [
			'type'    => 'structure',
			'members' => [
				'ClientRootCertificateChain' => [
					'shape'        => 'String',
					'locationName' => 'clientRootCertificateChain',
				],
			],
		],
		'CertificateAuthenticationRequest'                               => [
			'type'    => 'structure',
			'members' => [ 'ClientRootCertificateChainArn' => [ 'shape' => 'String', ], ],
		],
		'CidrAuthorizationContext'                                       => [
			'type'     => 'structure',
			'required' => [ 'Message', 'Signature', ],
			'members'  => [
				'Message'   => [ 'shape' => 'String', ],
				'Signature' => [ 'shape' => 'String', ],
			],
		],
		'CidrBlock'                                                      => [
			'type'    => 'structure',
			'members' => [
				'CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
			],
		],
		'CidrBlockSet'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CidrBlock',
				'locationName' => 'item',
			],
		],
		'ClassicLinkDnsSupport'                                          => [
			'type'    => 'structure',
			'members' => [
				'ClassicLinkDnsSupported' => [
					'shape'        => 'Boolean',
					'locationName' => 'classicLinkDnsSupported',
				],
				'VpcId'                   => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'ClassicLinkDnsSupportList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClassicLinkDnsSupport',
				'locationName' => 'item',
			],
		],
		'ClassicLinkInstance'                                            => [
			'type'    => 'structure',
			'members' => [
				'Groups'     => [
					'shape'        => 'GroupIdentifierList',
					'locationName' => 'groupSet',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Tags'       => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcId'      => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'ClassicLinkInstanceList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClassicLinkInstance',
				'locationName' => 'item',
			],
		],
		'ClassicLoadBalancer'                                            => [
			'type'    => 'structure',
			'members' => [
				'Name' => [
					'shape'        => 'String',
					'locationName' => 'name',
				],
			],
		],
		'ClassicLoadBalancers'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClassicLoadBalancer',
				'locationName' => 'item',
			],
			'max'    => 5,
			'min'    => 1,
		],
		'ClassicLoadBalancersConfig'                                     => [
			'type'    => 'structure',
			'members' => [
				'ClassicLoadBalancers' => [
					'shape'        => 'ClassicLoadBalancers',
					'locationName' => 'classicLoadBalancers',
				],
			],
		],
		'ClientCertificateRevocationListStatus'                          => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'ClientCertificateRevocationListStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ClientCertificateRevocationListStatusCode'                      => [
			'type' => 'string',
			'enum' => [ 'pending', 'active', ],
		],
		'ClientData'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Comment'     => [ 'shape' => 'String', ],
				'UploadEnd'   => [ 'shape' => 'DateTime', ],
				'UploadSize'  => [ 'shape' => 'Double', ],
				'UploadStart' => [ 'shape' => 'DateTime', ],
			],
		],
		'ClientVpnAuthentication'                                        => [
			'type'    => 'structure',
			'members' => [
				'Type'                 => [
					'shape'        => 'ClientVpnAuthenticationType',
					'locationName' => 'type',
				],
				'ActiveDirectory'      => [
					'shape'        => 'DirectoryServiceAuthentication',
					'locationName' => 'activeDirectory',
				],
				'MutualAuthentication' => [
					'shape'        => 'CertificateAuthentication',
					'locationName' => 'mutualAuthentication',
				],
			],
		],
		'ClientVpnAuthenticationList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClientVpnAuthentication',
				'locationName' => 'item',
			],
		],
		'ClientVpnAuthenticationRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'Type'                 => [ 'shape' => 'ClientVpnAuthenticationType', ],
				'ActiveDirectory'      => [ 'shape' => 'DirectoryServiceAuthenticationRequest', ],
				'MutualAuthentication' => [ 'shape' => 'CertificateAuthenticationRequest', ],
			],
		],
		'ClientVpnAuthenticationRequestList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ClientVpnAuthenticationRequest', ],
		],
		'ClientVpnAuthenticationType'                                    => [
			'type' => 'string',
			'enum' => [
				'certificate-authentication',
				'directory-service-authentication',
			],
		],
		'ClientVpnAuthorizationRuleStatus'                               => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'ClientVpnAuthorizationRuleStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ClientVpnAuthorizationRuleStatusCode'                           => [
			'type' => 'string',
			'enum' => [
				'authorizing',
				'active',
				'failed',
				'revoking',
			],
		],
		'ClientVpnConnection'                                            => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId'       => [ 'shape' => 'String', 'locationName' => 'clientVpnEndpointId', ],
				'Timestamp'                 => [ 'shape' => 'String', 'locationName' => 'timestamp', ],
				'ConnectionId'              => [ 'shape' => 'String', 'locationName' => 'connectionId', ],
				'Username'                  => [ 'shape' => 'String', 'locationName' => 'username', ],
				'ConnectionEstablishedTime' => [ 'shape' => 'String', 'locationName' => 'connectionEstablishedTime', ],
				'IngressBytes'              => [ 'shape' => 'String', 'locationName' => 'ingressBytes', ],
				'EgressBytes'               => [ 'shape' => 'String', 'locationName' => 'egressBytes', ],
				'IngressPackets'            => [ 'shape' => 'String', 'locationName' => 'ingressPackets', ],
				'EgressPackets'             => [ 'shape' => 'String', 'locationName' => 'egressPackets', ],
				'ClientIp'                  => [ 'shape' => 'String', 'locationName' => 'clientIp', ],
				'CommonName'                => [ 'shape' => 'String', 'locationName' => 'commonName', ],
				'Status'                    => [ 'shape' => 'ClientVpnConnectionStatus', 'locationName' => 'status', ],
				'ConnectionEndTime'         => [ 'shape' => 'String', 'locationName' => 'connectionEndTime', ],
			],
		],
		'ClientVpnConnectionSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClientVpnConnection',
				'locationName' => 'item',
			],
		],
		'ClientVpnConnectionStatus'                                      => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'ClientVpnConnectionStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ClientVpnConnectionStatusCode'                                  => [
			'type' => 'string',
			'enum' => [
				'active',
				'failed-to-terminate',
				'terminating',
				'terminated',
			],
		],
		'ClientVpnEndpoint'                                              => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId'      => [ 'shape' => 'String', 'locationName' => 'clientVpnEndpointId', ],
				'Description'              => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Status'                   => [ 'shape' => 'ClientVpnEndpointStatus', 'locationName' => 'status', ],
				'CreationTime'             => [ 'shape' => 'String', 'locationName' => 'creationTime', ],
				'DeletionTime'             => [ 'shape' => 'String', 'locationName' => 'deletionTime', ],
				'DnsName'                  => [ 'shape' => 'String', 'locationName' => 'dnsName', ],
				'ClientCidrBlock'          => [ 'shape' => 'String', 'locationName' => 'clientCidrBlock', ],
				'DnsServers'               => [ 'shape' => 'ValueStringList', 'locationName' => 'dnsServer', ],
				'SplitTunnel'              => [ 'shape' => 'Boolean', 'locationName' => 'splitTunnel', ],
				'VpnProtocol'              => [ 'shape' => 'VpnProtocol', 'locationName' => 'vpnProtocol', ],
				'TransportProtocol'        => [
					'shape'        => 'TransportProtocol',
					'locationName' => 'transportProtocol',
				],
				'AssociatedTargetNetworks' => [
					'shape'             => 'AssociatedTargetNetworkSet',
					'deprecated'        => true,
					'deprecatedMessage' => 'This property is deprecated. To view the target networks associated with a Client VPN endpoint, call DescribeClientVpnTargetNetworks and inspect the clientVpnTargetNetworks response element.',
					'locationName'      => 'associatedTargetNetwork',
				],
				'ServerCertificateArn'     => [ 'shape' => 'String', 'locationName' => 'serverCertificateArn', ],
				'AuthenticationOptions'    => [
					'shape'        => 'ClientVpnAuthenticationList',
					'locationName' => 'authenticationOptions',
				],
				'ConnectionLogOptions'     => [
					'shape'        => 'ConnectionLogResponseOptions',
					'locationName' => 'connectionLogOptions',
				],
				'Tags'                     => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'ClientVpnEndpointStatus'                                        => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'ClientVpnEndpointStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ClientVpnEndpointStatusCode'                                    => [
			'type' => 'string',
			'enum' => [
				'pending-associate',
				'available',
				'deleting',
				'deleted',
			],
		],
		'ClientVpnRoute'                                                 => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId' => [
					'shape'        => 'String',
					'locationName' => 'clientVpnEndpointId',
				],
				'DestinationCidr'     => [
					'shape'        => 'String',
					'locationName' => 'destinationCidr',
				],
				'TargetSubnet'        => [
					'shape'        => 'String',
					'locationName' => 'targetSubnet',
				],
				'Type'                => [
					'shape'        => 'String',
					'locationName' => 'type',
				],
				'Origin'              => [
					'shape'        => 'String',
					'locationName' => 'origin',
				],
				'Status'              => [
					'shape'        => 'ClientVpnRouteStatus',
					'locationName' => 'status',
				],
				'Description'         => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
			],
		],
		'ClientVpnRouteSet'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClientVpnRoute',
				'locationName' => 'item',
			],
		],
		'ClientVpnRouteStatus'                                           => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'ClientVpnRouteStatusCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ClientVpnRouteStatusCode'                                       => [
			'type' => 'string',
			'enum' => [
				'creating',
				'active',
				'failed',
				'deleting',
			],
		],
		'ClientVpnSecurityGroupIdSet'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ConfirmProductInstanceRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', 'ProductCode', ],
			'members'  => [
				'InstanceId'  => [ 'shape' => 'String', ],
				'ProductCode' => [ 'shape' => 'String', ],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ConfirmProductInstanceResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'OwnerId' => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Return'  => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ConnectionLogOptions'                                           => [
			'type'    => 'structure',
			'members' => [
				'Enabled'             => [ 'shape' => 'Boolean', ],
				'CloudwatchLogGroup'  => [ 'shape' => 'String', ],
				'CloudwatchLogStream' => [ 'shape' => 'String', ],
			],
		],
		'ConnectionLogResponseOptions'                                   => [
			'type'    => 'structure',
			'members' => [
				'Enabled'             => [ 'shape' => 'Boolean', ],
				'CloudwatchLogGroup'  => [ 'shape' => 'String', ],
				'CloudwatchLogStream' => [ 'shape' => 'String', ],
			],
		],
		'ConnectionNotification'                                         => [
			'type'    => 'structure',
			'members' => [
				'ConnectionNotificationId'    => [
					'shape'        => 'String',
					'locationName' => 'connectionNotificationId',
				],
				'ServiceId'                   => [
					'shape'        => 'String',
					'locationName' => 'serviceId',
				],
				'VpcEndpointId'               => [
					'shape'        => 'String',
					'locationName' => 'vpcEndpointId',
				],
				'ConnectionNotificationType'  => [
					'shape'        => 'ConnectionNotificationType',
					'locationName' => 'connectionNotificationType',
				],
				'ConnectionNotificationArn'   => [
					'shape'        => 'String',
					'locationName' => 'connectionNotificationArn',
				],
				'ConnectionEvents'            => [
					'shape'        => 'ValueStringList',
					'locationName' => 'connectionEvents',
				],
				'ConnectionNotificationState' => [
					'shape'        => 'ConnectionNotificationState',
					'locationName' => 'connectionNotificationState',
				],
			],
		],
		'ConnectionNotificationSet'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ConnectionNotification',
				'locationName' => 'item',
			],
		],
		'ConnectionNotificationState'                                    => [
			'type' => 'string',
			'enum' => [ 'Enabled', 'Disabled', ],
		],
		'ConnectionNotificationType'                                     => [
			'type' => 'string',
			'enum' => [ 'Topic', ],
		],
		'ContainerFormat'                                                => [
			'type' => 'string',
			'enum' => [ 'ova', ],
		],
		'ConversionIdStringList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ConversionTask'                                                 => [
			'type'    => 'structure',
			'members' => [
				'ConversionTaskId' => [
					'shape'        => 'String',
					'locationName' => 'conversionTaskId',
				],
				'ExpirationTime'   => [
					'shape'        => 'String',
					'locationName' => 'expirationTime',
				],
				'ImportInstance'   => [
					'shape'        => 'ImportInstanceTaskDetails',
					'locationName' => 'importInstance',
				],
				'ImportVolume'     => [
					'shape'        => 'ImportVolumeTaskDetails',
					'locationName' => 'importVolume',
				],
				'State'            => [
					'shape'        => 'ConversionTaskState',
					'locationName' => 'state',
				],
				'StatusMessage'    => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'Tags'             => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'ConversionTaskState'                                            => [
			'type' => 'string',
			'enum' => [
				'active',
				'cancelling',
				'cancelled',
				'completed',
			],
		],
		'CopyFpgaImageRequest'                                           => [
			'type'     => 'structure',
			'required' => [
				'SourceFpgaImageId',
				'SourceRegion',
			],
			'members'  => [
				'DryRun'            => [ 'shape' => 'Boolean', ],
				'SourceFpgaImageId' => [ 'shape' => 'String', ],
				'Description'       => [ 'shape' => 'String', ],
				'Name'              => [ 'shape' => 'String', ],
				'SourceRegion'      => [ 'shape' => 'String', ],
				'ClientToken'       => [ 'shape' => 'String', ],
			],
		],
		'CopyFpgaImageResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageId' => [
					'shape'        => 'String',
					'locationName' => 'fpgaImageId',
				],
			],
		],
		'CopyImageRequest'                                               => [
			'type'     => 'structure',
			'required' => [
				'Name',
				'SourceImageId',
				'SourceRegion',
			],
			'members'  => [
				'ClientToken'   => [ 'shape' => 'String', ],
				'Description'   => [ 'shape' => 'String', ],
				'Encrypted'     => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'KmsKeyId'      => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
				'Name'          => [ 'shape' => 'String', ],
				'SourceImageId' => [ 'shape' => 'String', ],
				'SourceRegion'  => [ 'shape' => 'String', ],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CopyImageResult'                                                => [
			'type'    => 'structure',
			'members' => [
				'ImageId' => [
					'shape'        => 'String',
					'locationName' => 'imageId',
				],
			],
		],
		'CopySnapshotRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'SourceRegion', 'SourceSnapshotId', ],
			'members'  => [
				'Description'       => [ 'shape' => 'String', ],
				'DestinationRegion' => [
					'shape'        => 'String',
					'locationName' => 'destinationRegion',
				],
				'Encrypted'         => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'KmsKeyId'          => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
				'PresignedUrl'      => [
					'shape'        => 'String',
					'locationName' => 'presignedUrl',
				],
				'SourceRegion'      => [ 'shape' => 'String', ],
				'SourceSnapshotId'  => [ 'shape' => 'String', ],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CopySnapshotResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'SnapshotId' => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
			],
		],
		'CopyTagsFromSource'                                             => [
			'type' => 'string',
			'enum' => [ 'volume', ],
		],
		'CpuOptions'                                                     => [
			'type'    => 'structure',
			'members' => [
				'CoreCount'      => [
					'shape'        => 'Integer',
					'locationName' => 'coreCount',
				],
				'ThreadsPerCore' => [
					'shape'        => 'Integer',
					'locationName' => 'threadsPerCore',
				],
			],
		],
		'CpuOptionsRequest'                                              => [
			'type'    => 'structure',
			'members' => [
				'CoreCount'      => [ 'shape' => 'Integer', ],
				'ThreadsPerCore' => [ 'shape' => 'Integer', ],
			],
		],
		'CreateCapacityReservationRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'InstanceType',
				'InstancePlatform',
				'AvailabilityZone',
				'InstanceCount',
			],
			'members'  => [
				'ClientToken'           => [ 'shape' => 'String', ],
				'InstanceType'          => [ 'shape' => 'String', ],
				'InstancePlatform'      => [ 'shape' => 'CapacityReservationInstancePlatform', ],
				'AvailabilityZone'      => [ 'shape' => 'String', ],
				'Tenancy'               => [ 'shape' => 'CapacityReservationTenancy', ],
				'InstanceCount'         => [ 'shape' => 'Integer', ],
				'EbsOptimized'          => [ 'shape' => 'Boolean', ],
				'EphemeralStorage'      => [ 'shape' => 'Boolean', ],
				'EndDate'               => [ 'shape' => 'DateTime', ],
				'EndDateType'           => [ 'shape' => 'EndDateType', ],
				'InstanceMatchCriteria' => [ 'shape' => 'InstanceMatchCriteria', ],
				'TagSpecifications'     => [ 'shape' => 'TagSpecificationList', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateCapacityReservationResult'                                => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservation' => [
					'shape'        => 'CapacityReservation',
					'locationName' => 'capacityReservation',
				],
			],
		],
		'CreateClientVpnEndpointRequest'                                 => [
			'type'     => 'structure',
			'required' => [
				'ClientCidrBlock',
				'ServerCertificateArn',
				'AuthenticationOptions',
				'ConnectionLogOptions',
			],
			'members'  => [
				'ClientCidrBlock'       => [ 'shape' => 'String', ],
				'ServerCertificateArn'  => [ 'shape' => 'String', ],
				'AuthenticationOptions' => [
					'shape'        => 'ClientVpnAuthenticationRequestList',
					'locationName' => 'Authentication',
				],
				'ConnectionLogOptions'  => [ 'shape' => 'ConnectionLogOptions', ],
				'DnsServers'            => [ 'shape' => 'ValueStringList', ],
				'TransportProtocol'     => [ 'shape' => 'TransportProtocol', ],
				'Description'           => [ 'shape' => 'String', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
				'ClientToken'           => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'TagSpecifications'     => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
			],
		],
		'CreateClientVpnEndpointResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId' => [
					'shape'        => 'String',
					'locationName' => 'clientVpnEndpointId',
				],
				'Status'              => [
					'shape'        => 'ClientVpnEndpointStatus',
					'locationName' => 'status',
				],
				'DnsName'             => [
					'shape'        => 'String',
					'locationName' => 'dnsName',
				],
			],
		],
		'CreateClientVpnRouteRequest'                                    => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'DestinationCidrBlock',
				'TargetVpcSubnetId',
			],
			'members'  => [
				'ClientVpnEndpointId'  => [ 'shape' => 'String', ],
				'DestinationCidrBlock' => [ 'shape' => 'String', ],
				'TargetVpcSubnetId'    => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'ClientToken'          => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'DryRun'               => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateClientVpnRouteResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ClientVpnRouteStatus',
					'locationName' => 'status',
				],
			],
		],
		'CreateCustomerGatewayRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'BgpAsn', 'PublicIp', 'Type', ],
			'members'  => [
				'BgpAsn'   => [ 'shape' => 'Integer', ],
				'PublicIp' => [
					'shape'        => 'String',
					'locationName' => 'IpAddress',
				],
				'Type'     => [ 'shape' => 'GatewayType', ],
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateCustomerGatewayResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'CustomerGateway' => [
					'shape'        => 'CustomerGateway',
					'locationName' => 'customerGateway',
				],
			],
		],
		'CreateDefaultSubnetRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'AvailabilityZone', ],
			'members'  => [
				'AvailabilityZone' => [ 'shape' => 'String', ],
				'DryRun'           => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateDefaultSubnetResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'Subnet' => [
					'shape'        => 'Subnet',
					'locationName' => 'subnet',
				],
			],
		],
		'CreateDefaultVpcRequest'                                        => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'CreateDefaultVpcResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'Vpc' => [
					'shape'        => 'Vpc',
					'locationName' => 'vpc',
				],
			],
		],
		'CreateDhcpOptionsRequest'                                       => [
			'type'     => 'structure',
			'required' => [ 'DhcpConfigurations', ],
			'members'  => [
				'DhcpConfigurations' => [
					'shape'        => 'NewDhcpConfigurationList',
					'locationName' => 'dhcpConfiguration',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateDhcpOptionsResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'DhcpOptions' => [
					'shape'        => 'DhcpOptions',
					'locationName' => 'dhcpOptions',
				],
			],
		],
		'CreateEgressOnlyInternetGatewayRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'ClientToken' => [ 'shape' => 'String', ],
				'DryRun'      => [ 'shape' => 'Boolean', ],
				'VpcId'       => [ 'shape' => 'String', ],
			],
		],
		'CreateEgressOnlyInternetGatewayResult'                          => [
			'type'    => 'structure',
			'members' => [
				'ClientToken'               => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'EgressOnlyInternetGateway' => [
					'shape'        => 'EgressOnlyInternetGateway',
					'locationName' => 'egressOnlyInternetGateway',
				],
			],
		],
		'CreateFleetError'                                               => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateAndOverrides' => [
					'shape'        => 'LaunchTemplateAndOverridesResponse',
					'locationName' => 'launchTemplateAndOverrides',
				],
				'Lifecycle'                  => [
					'shape'        => 'InstanceLifecycle',
					'locationName' => 'lifecycle',
				],
				'ErrorCode'                  => [
					'shape'        => 'String',
					'locationName' => 'errorCode',
				],
				'ErrorMessage'               => [
					'shape'        => 'String',
					'locationName' => 'errorMessage',
				],
			],
		],
		'CreateFleetErrorsSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CreateFleetError',
				'locationName' => 'item',
			],
		],
		'CreateFleetInstance'                                            => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateAndOverrides' => [
					'shape'        => 'LaunchTemplateAndOverridesResponse',
					'locationName' => 'launchTemplateAndOverrides',
				],
				'Lifecycle'                  => [
					'shape'        => 'InstanceLifecycle',
					'locationName' => 'lifecycle',
				],
				'InstanceIds'                => [
					'shape'        => 'InstanceIdsSet',
					'locationName' => 'instanceIds',
				],
				'InstanceType'               => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'Platform'                   => [
					'shape'        => 'PlatformValues',
					'locationName' => 'platform',
				],
			],
		],
		'CreateFleetInstancesSet'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CreateFleetInstance',
				'locationName' => 'item',
			],
		],
		'CreateFleetRequest'                                             => [
			'type'     => 'structure',
			'required' => [
				'LaunchTemplateConfigs',
				'TargetCapacitySpecification',
			],
			'members'  => [
				'DryRun'                           => [ 'shape' => 'Boolean', ],
				'ClientToken'                      => [ 'shape' => 'String', ],
				'SpotOptions'                      => [ 'shape' => 'SpotOptionsRequest', ],
				'OnDemandOptions'                  => [ 'shape' => 'OnDemandOptionsRequest', ],
				'ExcessCapacityTerminationPolicy'  => [ 'shape' => 'FleetExcessCapacityTerminationPolicy', ],
				'LaunchTemplateConfigs'            => [ 'shape' => 'FleetLaunchTemplateConfigListRequest', ],
				'TargetCapacitySpecification'      => [ 'shape' => 'TargetCapacitySpecificationRequest', ],
				'TerminateInstancesWithExpiration' => [ 'shape' => 'Boolean', ],
				'Type'                             => [ 'shape' => 'FleetType', ],
				'ValidFrom'                        => [ 'shape' => 'DateTime', ],
				'ValidUntil'                       => [ 'shape' => 'DateTime', ],
				'ReplaceUnhealthyInstances'        => [ 'shape' => 'Boolean', ],
				'TagSpecifications'                => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
			],
		],
		'CreateFleetResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'FleetId'   => [
					'shape'        => 'FleetIdentifier',
					'locationName' => 'fleetId',
				],
				'Errors'    => [
					'shape'        => 'CreateFleetErrorsSet',
					'locationName' => 'errorSet',
				],
				'Instances' => [
					'shape'        => 'CreateFleetInstancesSet',
					'locationName' => 'fleetInstanceSet',
				],
			],
		],
		'CreateFlowLogsRequest'                                          => [
			'type'     => 'structure',
			'required' => [
				'ResourceIds',
				'ResourceType',
				'TrafficType',
			],
			'members'  => [
				'DryRun'                   => [ 'shape' => 'Boolean', ],
				'ClientToken'              => [ 'shape' => 'String', ],
				'DeliverLogsPermissionArn' => [ 'shape' => 'String', ],
				'LogGroupName'             => [ 'shape' => 'String', ],
				'ResourceIds'              => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ResourceId',
				],
				'ResourceType'             => [ 'shape' => 'FlowLogsResourceType', ],
				'TrafficType'              => [ 'shape' => 'TrafficType', ],
				'LogDestinationType'       => [ 'shape' => 'LogDestinationType', ],
				'LogDestination'           => [ 'shape' => 'String', ],
			],
		],
		'CreateFlowLogsResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'ClientToken'  => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'FlowLogIds'   => [
					'shape'        => 'ValueStringList',
					'locationName' => 'flowLogIdSet',
				],
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'CreateFpgaImageRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'InputStorageLocation', ],
			'members'  => [
				'DryRun'               => [ 'shape' => 'Boolean', ],
				'InputStorageLocation' => [ 'shape' => 'StorageLocation', ],
				'LogsStorageLocation'  => [ 'shape' => 'StorageLocation', ],
				'Description'          => [ 'shape' => 'String', ],
				'Name'                 => [ 'shape' => 'String', ],
				'ClientToken'          => [ 'shape' => 'String', ],
			],
		],
		'CreateFpgaImageResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageId'       => [
					'shape'        => 'String',
					'locationName' => 'fpgaImageId',
				],
				'FpgaImageGlobalId' => [
					'shape'        => 'String',
					'locationName' => 'fpgaImageGlobalId',
				],
			],
		],
		'CreateImageRequest'                                             => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', 'Name', ],
			'members'  => [
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingRequestList',
					'locationName' => 'blockDeviceMapping',
				],
				'Description'         => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceId'          => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Name'                => [
					'shape'        => 'String',
					'locationName' => 'name',
				],
				'NoReboot'            => [
					'shape'        => 'Boolean',
					'locationName' => 'noReboot',
				],
			],
		],
		'CreateImageResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'ImageId' => [
					'shape'        => 'String',
					'locationName' => 'imageId',
				],
			],
		],
		'CreateInstanceExportTaskRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'Description'       => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'ExportToS3Task'    => [
					'shape'        => 'ExportToS3TaskSpecification',
					'locationName' => 'exportToS3',
				],
				'InstanceId'        => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'TargetEnvironment' => [
					'shape'        => 'ExportEnvironment',
					'locationName' => 'targetEnvironment',
				],
			],
		],
		'CreateInstanceExportTaskResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'ExportTask' => [
					'shape'        => 'ExportTask',
					'locationName' => 'exportTask',
				],
			],
		],
		'CreateInternetGatewayRequest'                                   => [
			'type'    => 'structure',
			'members' => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateInternetGatewayResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'InternetGateway' => [
					'shape'        => 'InternetGateway',
					'locationName' => 'internetGateway',
				],
			],
		],
		'CreateKeyPairRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'KeyName', ],
			'members'  => [
				'KeyName' => [ 'shape' => 'String', ],
				'DryRun'  => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateLaunchTemplateRequest'                                    => [
			'type'     => 'structure',
			'required' => [
				'LaunchTemplateName',
				'LaunchTemplateData',
			],
			'members'  => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'ClientToken'        => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'VersionDescription' => [ 'shape' => 'VersionDescription', ],
				'LaunchTemplateData' => [ 'shape' => 'RequestLaunchTemplateData', ],
			],
		],
		'CreateLaunchTemplateResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplate' => [
					'shape'        => 'LaunchTemplate',
					'locationName' => 'launchTemplate',
				],
			],
		],
		'CreateLaunchTemplateVersionRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'LaunchTemplateData', ],
			'members'  => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'ClientToken'        => [ 'shape' => 'String', ],
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'SourceVersion'      => [ 'shape' => 'String', ],
				'VersionDescription' => [ 'shape' => 'VersionDescription', ],
				'LaunchTemplateData' => [ 'shape' => 'RequestLaunchTemplateData', ],
			],
		],
		'CreateLaunchTemplateVersionResult'                              => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateVersion' => [
					'shape'        => 'LaunchTemplateVersion',
					'locationName' => 'launchTemplateVersion',
				],
			],
		],
		'CreateNatGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'AllocationId', 'SubnetId', ],
			'members'  => [
				'AllocationId' => [ 'shape' => 'String', ],
				'ClientToken'  => [ 'shape' => 'String', ],
				'SubnetId'     => [ 'shape' => 'String', ],
			],
		],
		'CreateNatGatewayResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'ClientToken' => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'NatGateway'  => [
					'shape'        => 'NatGateway',
					'locationName' => 'natGateway',
				],
			],
		],
		'CreateNetworkAclEntryRequest'                                   => [
			'type'     => 'structure',
			'required' => [
				'Egress',
				'NetworkAclId',
				'Protocol',
				'RuleAction',
				'RuleNumber',
			],
			'members'  => [
				'CidrBlock'     => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Egress'        => [
					'shape'        => 'Boolean',
					'locationName' => 'egress',
				],
				'IcmpTypeCode'  => [
					'shape'        => 'IcmpTypeCode',
					'locationName' => 'Icmp',
				],
				'Ipv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'NetworkAclId'  => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
				'PortRange'     => [
					'shape'        => 'PortRange',
					'locationName' => 'portRange',
				],
				'Protocol'      => [
					'shape'        => 'String',
					'locationName' => 'protocol',
				],
				'RuleAction'    => [
					'shape'        => 'RuleAction',
					'locationName' => 'ruleAction',
				],
				'RuleNumber'    => [
					'shape'        => 'Integer',
					'locationName' => 'ruleNumber',
				],
			],
		],
		'CreateNetworkAclRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcId'  => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'CreateNetworkAclResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'NetworkAcl' => [
					'shape'        => 'NetworkAcl',
					'locationName' => 'networkAcl',
				],
			],
		],
		'CreateNetworkInterfacePermissionRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', 'Permission', ],
			'members'  => [
				'NetworkInterfaceId' => [ 'shape' => 'String', ],
				'AwsAccountId'       => [ 'shape' => 'String', ],
				'AwsService'         => [ 'shape' => 'String', ],
				'Permission'         => [ 'shape' => 'InterfacePermissionType', ],
				'DryRun'             => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateNetworkInterfacePermissionResult'                         => [
			'type'    => 'structure',
			'members' => [
				'InterfacePermission' => [
					'shape'        => 'NetworkInterfacePermission',
					'locationName' => 'interfacePermission',
				],
			],
		],
		'CreateNetworkInterfaceRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'SubnetId', ],
			'members'  => [
				'Description'                    => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DryRun'                         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Groups'                         => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'Ipv6AddressCount'               => [
					'shape'        => 'Integer',
					'locationName' => 'ipv6AddressCount',
				],
				'Ipv6Addresses'                  => [
					'shape'        => 'InstanceIpv6AddressList',
					'locationName' => 'ipv6Addresses',
				],
				'PrivateIpAddress'               => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
				'PrivateIpAddresses'             => [
					'shape'        => 'PrivateIpAddressSpecificationList',
					'locationName' => 'privateIpAddresses',
				],
				'SecondaryPrivateIpAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'secondaryPrivateIpAddressCount',
				],
				'InterfaceType'                  => [ 'shape' => 'NetworkInterfaceCreationType', ],
				'SubnetId'                       => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'CreateNetworkInterfaceResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterface' => [
					'shape'        => 'NetworkInterface',
					'locationName' => 'networkInterface',
				],
			],
		],
		'CreatePlacementGroupRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'DryRun'         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'GroupName'      => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'Strategy'       => [
					'shape'        => 'PlacementStrategy',
					'locationName' => 'strategy',
				],
				'PartitionCount' => [ 'shape' => 'Integer', ],
			],
		],
		'CreateReservedInstancesListingRequest'                          => [
			'type'     => 'structure',
			'required' => [
				'ClientToken',
				'InstanceCount',
				'PriceSchedules',
				'ReservedInstancesId',
			],
			'members'  => [
				'ClientToken'         => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'InstanceCount'       => [
					'shape'        => 'Integer',
					'locationName' => 'instanceCount',
				],
				'PriceSchedules'      => [
					'shape'        => 'PriceScheduleSpecificationList',
					'locationName' => 'priceSchedules',
				],
				'ReservedInstancesId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
			],
		],
		'CreateReservedInstancesListingResult'                           => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesListings' => [
					'shape'        => 'ReservedInstancesListingList',
					'locationName' => 'reservedInstancesListingsSet',
				],
			],
		],
		'CreateRouteRequest'                                             => [
			'type'     => 'structure',
			'required' => [ 'RouteTableId', ],
			'members'  => [
				'DestinationCidrBlock'        => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'DestinationIpv6CidrBlock'    => [
					'shape'        => 'String',
					'locationName' => 'destinationIpv6CidrBlock',
				],
				'DryRun'                      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'EgressOnlyInternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'egressOnlyInternetGatewayId',
				],
				'GatewayId'                   => [
					'shape'        => 'String',
					'locationName' => 'gatewayId',
				],
				'InstanceId'                  => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'NatGatewayId'                => [
					'shape'        => 'String',
					'locationName' => 'natGatewayId',
				],
				'TransitGatewayId'            => [ 'shape' => 'String', ],
				'NetworkInterfaceId'          => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'RouteTableId'                => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
				'VpcPeeringConnectionId'      => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'CreateRouteResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'CreateRouteTableRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcId'  => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'CreateRouteTableResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'RouteTable' => [
					'shape'        => 'RouteTable',
					'locationName' => 'routeTable',
				],
			],
		],
		'CreateSecurityGroupRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'Description', 'GroupName', ],
			'members'  => [
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'GroupDescription',
				],
				'GroupName'   => [ 'shape' => 'String', ],
				'VpcId'       => [ 'shape' => 'String', ],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateSecurityGroupResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'GroupId' => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
			],
		],
		'CreateSnapshotRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'Description'       => [ 'shape' => 'String', ],
				'VolumeId'          => [ 'shape' => 'String', ],
				'TagSpecifications' => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateSnapshotsRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'InstanceSpecification', ],
			'members'  => [
				'Description'           => [ 'shape' => 'String', ],
				'InstanceSpecification' => [ 'shape' => 'InstanceSpecification', ],
				'TagSpecifications'     => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'                => [ 'shape' => 'Boolean', ],
				'CopyTagsFromSource'    => [ 'shape' => 'CopyTagsFromSource', ],
			],
		],
		'CreateSnapshotsResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'Snapshots' => [
					'shape'        => 'SnapshotSet',
					'locationName' => 'snapshotSet',
				],
			],
		],
		'CreateSpotDatafeedSubscriptionRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'String',
					'locationName' => 'bucket',
				],
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Prefix' => [
					'shape'        => 'String',
					'locationName' => 'prefix',
				],
			],
		],
		'CreateSpotDatafeedSubscriptionResult'                           => [
			'type'    => 'structure',
			'members' => [
				'SpotDatafeedSubscription' => [
					'shape'        => 'SpotDatafeedSubscription',
					'locationName' => 'spotDatafeedSubscription',
				],
			],
		],
		'CreateSubnetRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'CidrBlock', 'VpcId', ],
			'members'  => [
				'AvailabilityZone'   => [ 'shape' => 'String', ],
				'AvailabilityZoneId' => [ 'shape' => 'String', ],
				'CidrBlock'          => [ 'shape' => 'String', ],
				'Ipv6CidrBlock'      => [ 'shape' => 'String', ],
				'VpcId'              => [ 'shape' => 'String', ],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateSubnetResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'Subnet' => [
					'shape'        => 'Subnet',
					'locationName' => 'subnet',
				],
			],
		],
		'CreateTagsRequest'                                              => [
			'type'     => 'structure',
			'required' => [ 'Resources', 'Tags', ],
			'members'  => [
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Resources' => [
					'shape'        => 'ResourceIdList',
					'locationName' => 'ResourceId',
				],
				'Tags'      => [
					'shape'        => 'TagList',
					'locationName' => 'Tag',
				],
			],
		],
		'CreateTrafficMirrorFilterRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Description'       => [ 'shape' => 'String', ],
				'TagSpecifications' => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'            => [ 'shape' => 'Boolean', ],
				'ClientToken'       => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
			],
		],
		'CreateTrafficMirrorFilterResult'                                => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilter' => [
					'shape'        => 'TrafficMirrorFilter',
					'locationName' => 'trafficMirrorFilter',
				],
				'ClientToken'         => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateTrafficMirrorFilterRuleRequest'                           => [
			'type'     => 'structure',
			'required' => [
				'TrafficMirrorFilterId',
				'TrafficDirection',
				'RuleNumber',
				'RuleAction',
				'DestinationCidrBlock',
				'SourceCidrBlock',
			],
			'members'  => [
				'TrafficMirrorFilterId' => [ 'shape' => 'String', ],
				'TrafficDirection'      => [ 'shape' => 'TrafficDirection', ],
				'RuleNumber'            => [ 'shape' => 'Integer', ],
				'RuleAction'            => [ 'shape' => 'TrafficMirrorRuleAction', ],
				'DestinationPortRange'  => [ 'shape' => 'TrafficMirrorPortRangeRequest', ],
				'SourcePortRange'       => [ 'shape' => 'TrafficMirrorPortRangeRequest', ],
				'Protocol'              => [ 'shape' => 'Integer', ],
				'DestinationCidrBlock'  => [ 'shape' => 'String', ],
				'SourceCidrBlock'       => [ 'shape' => 'String', ],
				'Description'           => [ 'shape' => 'String', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
				'ClientToken'           => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
			],
		],
		'CreateTrafficMirrorFilterRuleResult'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterRule' => [
					'shape'        => 'TrafficMirrorFilterRule',
					'locationName' => 'trafficMirrorFilterRule',
				],
				'ClientToken'             => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateTrafficMirrorSessionRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'NetworkInterfaceId',
				'TrafficMirrorTargetId',
				'TrafficMirrorFilterId',
				'SessionNumber',
			],
			'members'  => [
				'NetworkInterfaceId'    => [ 'shape' => 'String', ],
				'TrafficMirrorTargetId' => [ 'shape' => 'String', ],
				'TrafficMirrorFilterId' => [ 'shape' => 'String', ],
				'PacketLength'          => [ 'shape' => 'Integer', ],
				'SessionNumber'         => [ 'shape' => 'Integer', ],
				'VirtualNetworkId'      => [ 'shape' => 'Integer', ],
				'Description'           => [ 'shape' => 'String', ],
				'TagSpecifications'     => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'                => [ 'shape' => 'Boolean', ],
				'ClientToken'           => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
			],
		],
		'CreateTrafficMirrorSessionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSession' => [
					'shape'        => 'TrafficMirrorSession',
					'locationName' => 'trafficMirrorSession',
				],
				'ClientToken'          => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateTrafficMirrorTargetRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfaceId'     => [ 'shape' => 'String', ],
				'NetworkLoadBalancerArn' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
				'TagSpecifications'      => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
				'ClientToken'            => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
			],
		],
		'CreateTrafficMirrorTargetResult'                                => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorTarget' => [
					'shape'        => 'TrafficMirrorTarget',
					'locationName' => 'trafficMirrorTarget',
				],
				'ClientToken'         => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateTransitGatewayRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'Description'       => [ 'shape' => 'String', ],
				'Options'           => [ 'shape' => 'TransitGatewayRequestOptions', ],
				'TagSpecifications' => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'DryRun'            => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateTransitGatewayResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'TransitGateway' => [
					'shape'        => 'TransitGateway',
					'locationName' => 'transitGateway',
				],
			],
		],
		'CreateTransitGatewayRouteRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'DestinationCidrBlock',
				'TransitGatewayRouteTableId',
			],
			'members'  => [
				'DestinationCidrBlock'       => [ 'shape' => 'String', ],
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'Blackhole'                  => [ 'shape' => 'Boolean', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateTransitGatewayRouteResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Route' => [
					'shape'        => 'TransitGatewayRoute',
					'locationName' => 'route',
				],
			],
		],
		'CreateTransitGatewayRouteTableRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayId', ],
			'members'  => [
				'TransitGatewayId'  => [ 'shape' => 'String', ],
				'TagSpecifications' => [ 'shape' => 'TagSpecificationList', ],
				'DryRun'            => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateTransitGatewayRouteTableResult'                           => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTable' => [
					'shape'        => 'TransitGatewayRouteTable',
					'locationName' => 'transitGatewayRouteTable',
				],
			],
		],
		'CreateTransitGatewayVpcAttachmentRequest'                       => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayId',
				'VpcId',
				'SubnetIds',
			],
			'members'  => [
				'TransitGatewayId'  => [ 'shape' => 'String', ],
				'VpcId'             => [ 'shape' => 'String', ],
				'SubnetIds'         => [ 'shape' => 'ValueStringList', ],
				'Options'           => [ 'shape' => 'CreateTransitGatewayVpcAttachmentRequestOptions', ],
				'TagSpecifications' => [ 'shape' => 'TagSpecificationList', ],
				'DryRun'            => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateTransitGatewayVpcAttachmentRequestOptions'                => [
			'type'    => 'structure',
			'members' => [
				'DnsSupport'  => [ 'shape' => 'DnsSupportValue', ],
				'Ipv6Support' => [ 'shape' => 'Ipv6SupportValue', ],
			],
		],
		'CreateTransitGatewayVpcAttachmentResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachment' => [
					'shape'        => 'TransitGatewayVpcAttachment',
					'locationName' => 'transitGatewayVpcAttachment',
				],
			],
		],
		'CreateVolumePermission'                                         => [
			'type'    => 'structure',
			'members' => [
				'Group'  => [
					'shape'        => 'PermissionGroup',
					'locationName' => 'group',
				],
				'UserId' => [
					'shape'        => 'String',
					'locationName' => 'userId',
				],
			],
		],
		'CreateVolumePermissionList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CreateVolumePermission',
				'locationName' => 'item',
			],
		],
		'CreateVolumePermissionModifications'                            => [
			'type'    => 'structure',
			'members' => [
				'Add'    => [ 'shape' => 'CreateVolumePermissionList', ],
				'Remove' => [ 'shape' => 'CreateVolumePermissionList', ],
			],
		],
		'CreateVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'AvailabilityZone', ],
			'members'  => [
				'AvailabilityZone'  => [ 'shape' => 'String', ],
				'Encrypted'         => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'Iops'              => [ 'shape' => 'Integer', ],
				'KmsKeyId'          => [ 'shape' => 'String', ],
				'Size'              => [ 'shape' => 'Integer', ],
				'SnapshotId'        => [ 'shape' => 'String', ],
				'VolumeType'        => [ 'shape' => 'VolumeType', ],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'TagSpecifications' => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
			],
		],
		'CreateVpcEndpointConnectionNotificationRequest'                 => [
			'type'     => 'structure',
			'required' => [
				'ConnectionNotificationArn',
				'ConnectionEvents',
			],
			'members'  => [
				'DryRun'                    => [ 'shape' => 'Boolean', ],
				'ServiceId'                 => [ 'shape' => 'String', ],
				'VpcEndpointId'             => [ 'shape' => 'String', ],
				'ConnectionNotificationArn' => [ 'shape' => 'String', ],
				'ConnectionEvents'          => [ 'shape' => 'ValueStringList', ],
				'ClientToken'               => [ 'shape' => 'String', ],
			],
		],
		'CreateVpcEndpointConnectionNotificationResult'                  => [
			'type'    => 'structure',
			'members' => [
				'ConnectionNotification' => [
					'shape'        => 'ConnectionNotification',
					'locationName' => 'connectionNotification',
				],
				'ClientToken'            => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateVpcEndpointRequest'                                       => [
			'type'     => 'structure',
			'required' => [ 'VpcId', 'ServiceName', ],
			'members'  => [
				'DryRun'            => [ 'shape' => 'Boolean', ],
				'VpcEndpointType'   => [ 'shape' => 'VpcEndpointType', ],
				'VpcId'             => [ 'shape' => 'String', ],
				'ServiceName'       => [ 'shape' => 'String', ],
				'PolicyDocument'    => [ 'shape' => 'String', ],
				'RouteTableIds'     => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RouteTableId',
				],
				'SubnetIds'         => [
					'shape'        => 'ValueStringList',
					'locationName' => 'SubnetId',
				],
				'SecurityGroupIds'  => [
					'shape'        => 'ValueStringList',
					'locationName' => 'SecurityGroupId',
				],
				'ClientToken'       => [ 'shape' => 'String', ],
				'PrivateDnsEnabled' => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateVpcEndpointResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'VpcEndpoint' => [
					'shape'        => 'VpcEndpoint',
					'locationName' => 'vpcEndpoint',
				],
				'ClientToken' => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateVpcEndpointServiceConfigurationRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'NetworkLoadBalancerArns', ],
			'members'  => [
				'DryRun'                  => [ 'shape' => 'Boolean', ],
				'AcceptanceRequired'      => [ 'shape' => 'Boolean', ],
				'NetworkLoadBalancerArns' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'NetworkLoadBalancerArn',
				],
				'ClientToken'             => [ 'shape' => 'String', ],
			],
		],
		'CreateVpcEndpointServiceConfigurationResult'                    => [
			'type'    => 'structure',
			'members' => [
				'ServiceConfiguration' => [
					'shape'        => 'ServiceConfiguration',
					'locationName' => 'serviceConfiguration',
				],
				'ClientToken'          => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
			],
		],
		'CreateVpcPeeringConnectionRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'PeerOwnerId' => [
					'shape'        => 'String',
					'locationName' => 'peerOwnerId',
				],
				'PeerVpcId'   => [
					'shape'        => 'String',
					'locationName' => 'peerVpcId',
				],
				'VpcId'       => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'PeerRegion'  => [ 'shape' => 'String', ],
			],
		],
		'CreateVpcPeeringConnectionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'VpcPeeringConnection' => [
					'shape'        => 'VpcPeeringConnection',
					'locationName' => 'vpcPeeringConnection',
				],
			],
		],
		'CreateVpcRequest'                                               => [
			'type'     => 'structure',
			'required' => [ 'CidrBlock', ],
			'members'  => [
				'CidrBlock'                   => [ 'shape' => 'String', ],
				'AmazonProvidedIpv6CidrBlock' => [
					'shape'        => 'Boolean',
					'locationName' => 'amazonProvidedIpv6CidrBlock',
				],
				'DryRun'                      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceTenancy'             => [
					'shape'        => 'Tenancy',
					'locationName' => 'instanceTenancy',
				],
			],
		],
		'CreateVpcResult'                                                => [
			'type'    => 'structure',
			'members' => [
				'Vpc' => [
					'shape'        => 'Vpc',
					'locationName' => 'vpc',
				],
			],
		],
		'CreateVpnConnectionRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'CustomerGatewayId', 'Type', ],
			'members'  => [
				'CustomerGatewayId' => [ 'shape' => 'String', ],
				'Type'              => [ 'shape' => 'String', ],
				'VpnGatewayId'      => [ 'shape' => 'String', ],
				'TransitGatewayId'  => [ 'shape' => 'String', ],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Options'           => [
					'shape'        => 'VpnConnectionOptionsSpecification',
					'locationName' => 'options',
				],
			],
		],
		'CreateVpnConnectionResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'VpnConnection' => [
					'shape'        => 'VpnConnection',
					'locationName' => 'vpnConnection',
				],
			],
		],
		'CreateVpnConnectionRouteRequest'                                => [
			'type'     => 'structure',
			'required' => [
				'DestinationCidrBlock',
				'VpnConnectionId',
			],
			'members'  => [
				'DestinationCidrBlock' => [ 'shape' => 'String', ],
				'VpnConnectionId'      => [ 'shape' => 'String', ],
			],
		],
		'CreateVpnGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [
				'AvailabilityZone' => [ 'shape' => 'String', ],
				'Type'             => [ 'shape' => 'GatewayType', ],
				'AmazonSideAsn'    => [ 'shape' => 'Long', ],
				'DryRun'           => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'CreateVpnGatewayResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'VpnGateway' => [
					'shape'        => 'VpnGateway',
					'locationName' => 'vpnGateway',
				],
			],
		],
		'CreditSpecification'                                            => [
			'type'    => 'structure',
			'members' => [
				'CpuCredits' => [
					'shape'        => 'String',
					'locationName' => 'cpuCredits',
				],
			],
		],
		'CreditSpecificationRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'CpuCredits', ],
			'members'  => [ 'CpuCredits' => [ 'shape' => 'String', ], ],
		],
		'CurrencyCodeValues'                                             => [
			'type' => 'string',
			'enum' => [ 'USD', ],
		],
		'CustomerGateway'                                                => [
			'type'    => 'structure',
			'members' => [
				'BgpAsn'            => [
					'shape'        => 'String',
					'locationName' => 'bgpAsn',
				],
				'CustomerGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'customerGatewayId',
				],
				'IpAddress'         => [
					'shape'        => 'String',
					'locationName' => 'ipAddress',
				],
				'State'             => [
					'shape'        => 'String',
					'locationName' => 'state',
				],
				'Type'              => [
					'shape'        => 'String',
					'locationName' => 'type',
				],
				'Tags'              => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'CustomerGatewayIdStringList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'CustomerGatewayId',
			],
		],
		'CustomerGatewayList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CustomerGateway',
				'locationName' => 'item',
			],
		],
		'DatafeedSubscriptionState'                                      => [
			'type' => 'string',
			'enum' => [ 'Active', 'Inactive', ],
		],
		'DateTime'                                                       => [ 'type' => 'timestamp', ],
		'DefaultRouteTableAssociationValue'                              => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'DefaultRouteTablePropagationValue'                              => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'DefaultTargetCapacityType'                                      => [
			'type' => 'string',
			'enum' => [ 'spot', 'on-demand', ],
		],
		'DeleteClientVpnEndpointRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteClientVpnEndpointResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ClientVpnEndpointStatus',
					'locationName' => 'status',
				],
			],
		],
		'DeleteClientVpnRouteRequest'                                    => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'DestinationCidrBlock',
			],
			'members'  => [
				'ClientVpnEndpointId'  => [ 'shape' => 'String', ],
				'TargetVpcSubnetId'    => [ 'shape' => 'String', ],
				'DestinationCidrBlock' => [ 'shape' => 'String', ],
				'DryRun'               => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteClientVpnRouteResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ClientVpnRouteStatus',
					'locationName' => 'status',
				],
			],
		],
		'DeleteCustomerGatewayRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'CustomerGatewayId', ],
			'members'  => [
				'CustomerGatewayId' => [ 'shape' => 'String', ],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteDhcpOptionsRequest'                                       => [
			'type'     => 'structure',
			'required' => [ 'DhcpOptionsId', ],
			'members'  => [
				'DhcpOptionsId' => [ 'shape' => 'String', ],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteEgressOnlyInternetGatewayRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'EgressOnlyInternetGatewayId', ],
			'members'  => [
				'DryRun'                      => [ 'shape' => 'Boolean', ],
				'EgressOnlyInternetGatewayId' => [ 'shape' => 'EgressOnlyInternetGatewayId', ],
			],
		],
		'DeleteEgressOnlyInternetGatewayResult'                          => [
			'type'    => 'structure',
			'members' => [
				'ReturnCode' => [
					'shape'        => 'Boolean',
					'locationName' => 'returnCode',
				],
			],
		],
		'DeleteFleetError'                                               => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'DeleteFleetErrorCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'DeleteFleetErrorCode'                                           => [
			'type' => 'string',
			'enum' => [
				'fleetIdDoesNotExist',
				'fleetIdMalformed',
				'fleetNotInDeletableState',
				'unexpectedError',
			],
		],
		'DeleteFleetErrorItem'                                           => [
			'type'    => 'structure',
			'members' => [
				'Error'   => [
					'shape'        => 'DeleteFleetError',
					'locationName' => 'error',
				],
				'FleetId' => [
					'shape'        => 'FleetIdentifier',
					'locationName' => 'fleetId',
				],
			],
		],
		'DeleteFleetErrorSet'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeleteFleetErrorItem',
				'locationName' => 'item',
			],
		],
		'DeleteFleetSuccessItem'                                         => [
			'type'    => 'structure',
			'members' => [
				'CurrentFleetState'  => [
					'shape'        => 'FleetStateCode',
					'locationName' => 'currentFleetState',
				],
				'PreviousFleetState' => [
					'shape'        => 'FleetStateCode',
					'locationName' => 'previousFleetState',
				],
				'FleetId'            => [
					'shape'        => 'FleetIdentifier',
					'locationName' => 'fleetId',
				],
			],
		],
		'DeleteFleetSuccessSet'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeleteFleetSuccessItem',
				'locationName' => 'item',
			],
		],
		'DeleteFleetsRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'FleetIds', 'TerminateInstances', ],
			'members'  => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'FleetIds'           => [
					'shape'        => 'FleetIdSet',
					'locationName' => 'FleetId',
				],
				'TerminateInstances' => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteFleetsResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'SuccessfulFleetDeletions'   => [
					'shape'        => 'DeleteFleetSuccessSet',
					'locationName' => 'successfulFleetDeletionSet',
				],
				'UnsuccessfulFleetDeletions' => [
					'shape'        => 'DeleteFleetErrorSet',
					'locationName' => 'unsuccessfulFleetDeletionSet',
				],
			],
		],
		'DeleteFlowLogsRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'FlowLogIds', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'FlowLogIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'FlowLogId',
				],
			],
		],
		'DeleteFlowLogsResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'DeleteFpgaImageRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'FpgaImageId', ],
			'members'  => [
				'DryRun'      => [ 'shape' => 'Boolean', ],
				'FpgaImageId' => [ 'shape' => 'String', ],
			],
		],
		'DeleteFpgaImageResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DeleteInternetGatewayRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'InternetGatewayId', ],
			'members'  => [
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'internetGatewayId',
				],
			],
		],
		'DeleteKeyPairRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'KeyName', ],
			'members'  => [
				'KeyName' => [ 'shape' => 'String', ],
				'DryRun'  => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteLaunchTemplateRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
			],
		],
		'DeleteLaunchTemplateResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplate' => [
					'shape'        => 'LaunchTemplate',
					'locationName' => 'launchTemplate',
				],
			],
		],
		'DeleteLaunchTemplateVersionsRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'Versions', ],
			'members'  => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'Versions'           => [
					'shape'        => 'VersionStringList',
					'locationName' => 'LaunchTemplateVersion',
				],
			],
		],
		'DeleteLaunchTemplateVersionsResponseErrorItem'                  => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateId',
				],
				'LaunchTemplateName' => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateName',
				],
				'VersionNumber'      => [
					'shape'        => 'Long',
					'locationName' => 'versionNumber',
				],
				'ResponseError'      => [
					'shape'        => 'ResponseError',
					'locationName' => 'responseError',
				],
			],
		],
		'DeleteLaunchTemplateVersionsResponseErrorSet'                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeleteLaunchTemplateVersionsResponseErrorItem',
				'locationName' => 'item',
			],
		],
		'DeleteLaunchTemplateVersionsResponseSuccessItem'                => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateId',
				],
				'LaunchTemplateName' => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateName',
				],
				'VersionNumber'      => [
					'shape'        => 'Long',
					'locationName' => 'versionNumber',
				],
			],
		],
		'DeleteLaunchTemplateVersionsResponseSuccessSet'                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeleteLaunchTemplateVersionsResponseSuccessItem',
				'locationName' => 'item',
			],
		],
		'DeleteLaunchTemplateVersionsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'SuccessfullyDeletedLaunchTemplateVersions'   => [
					'shape'        => 'DeleteLaunchTemplateVersionsResponseSuccessSet',
					'locationName' => 'successfullyDeletedLaunchTemplateVersionSet',
				],
				'UnsuccessfullyDeletedLaunchTemplateVersions' => [
					'shape'        => 'DeleteLaunchTemplateVersionsResponseErrorSet',
					'locationName' => 'unsuccessfullyDeletedLaunchTemplateVersionSet',
				],
			],
		],
		'DeleteNatGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'NatGatewayId', ],
			'members'  => [ 'NatGatewayId' => [ 'shape' => 'String', ], ],
		],
		'DeleteNatGatewayResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'NatGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'natGatewayId',
				],
			],
		],
		'DeleteNetworkAclEntryRequest'                                   => [
			'type'     => 'structure',
			'required' => [
				'Egress',
				'NetworkAclId',
				'RuleNumber',
			],
			'members'  => [
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Egress'       => [
					'shape'        => 'Boolean',
					'locationName' => 'egress',
				],
				'NetworkAclId' => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
				'RuleNumber'   => [
					'shape'        => 'Integer',
					'locationName' => 'ruleNumber',
				],
			],
		],
		'DeleteNetworkAclRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'NetworkAclId', ],
			'members'  => [
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkAclId' => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
			],
		],
		'DeleteNetworkInterfacePermissionRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfacePermissionId', ],
			'members'  => [
				'NetworkInterfacePermissionId' => [ 'shape' => 'String', ],
				'Force'                        => [ 'shape' => 'Boolean', ],
				'DryRun'                       => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteNetworkInterfacePermissionResult'                         => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DeleteNetworkInterfaceRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'DeletePlacementGroupRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'GroupName' => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
			],
		],
		'DeleteRouteRequest'                                             => [
			'type'     => 'structure',
			'required' => [ 'RouteTableId', ],
			'members'  => [
				'DestinationCidrBlock'     => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'DestinationIpv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'destinationIpv6CidrBlock',
				],
				'DryRun'                   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'RouteTableId'             => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
			],
		],
		'DeleteRouteTableRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'RouteTableId', ],
			'members'  => [
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'RouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
			],
		],
		'DeleteSecurityGroupRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'GroupId'   => [ 'shape' => 'String', ],
				'GroupName' => [ 'shape' => 'String', ],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteSnapshotRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'SnapshotId', ],
			'members'  => [
				'SnapshotId' => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteSpotDatafeedSubscriptionRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteSubnetRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'SubnetId', ],
			'members'  => [
				'SubnetId' => [ 'shape' => 'String', ],
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteTagsRequest'                                              => [
			'type'     => 'structure',
			'required' => [ 'Resources', ],
			'members'  => [
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Resources' => [
					'shape'        => 'ResourceIdList',
					'locationName' => 'resourceId',
				],
				'Tags'      => [
					'shape'        => 'TagList',
					'locationName' => 'tag',
				],
			],
		],
		'DeleteTrafficMirrorFilterRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorFilterId', ],
			'members'  => [
				'TrafficMirrorFilterId' => [ 'shape' => 'String', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTrafficMirrorFilterResult'                                => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterId',
				],
			],
		],
		'DeleteTrafficMirrorFilterRuleRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorFilterRuleId', ],
			'members'  => [
				'TrafficMirrorFilterRuleId' => [ 'shape' => 'String', ],
				'DryRun'                    => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTrafficMirrorFilterRuleResult'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterRuleId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterRuleId',
				],
			],
		],
		'DeleteTrafficMirrorSessionRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorSessionId', ],
			'members'  => [
				'TrafficMirrorSessionId' => [ 'shape' => 'String', ],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTrafficMirrorSessionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSessionId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorSessionId',
				],
			],
		],
		'DeleteTrafficMirrorTargetRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorTargetId', ],
			'members'  => [
				'TrafficMirrorTargetId' => [ 'shape' => 'String', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTrafficMirrorTargetResult'                                => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorTargetId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorTargetId',
				],
			],
		],
		'DeleteTransitGatewayRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayId', ],
			'members'  => [
				'TransitGatewayId' => [ 'shape' => 'String', ],
				'DryRun'           => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTransitGatewayResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'TransitGateway' => [
					'shape'        => 'TransitGateway',
					'locationName' => 'transitGateway',
				],
			],
		],
		'DeleteTransitGatewayRouteRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'DestinationCidrBlock',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'DestinationCidrBlock'       => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTransitGatewayRouteResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Route' => [
					'shape'        => 'TransitGatewayRoute',
					'locationName' => 'route',
				],
			],
		],
		'DeleteTransitGatewayRouteTableRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayRouteTableId', ],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTransitGatewayRouteTableResult'                           => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTable' => [
					'shape'        => 'TransitGatewayRouteTable',
					'locationName' => 'transitGatewayRouteTable',
				],
			],
		],
		'DeleteTransitGatewayVpcAttachmentRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayAttachmentId', ],
			'members'  => [
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'DeleteTransitGatewayVpcAttachmentResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachment' => [
					'shape'        => 'TransitGatewayVpcAttachment',
					'locationName' => 'transitGatewayVpcAttachment',
				],
			],
		],
		'DeleteVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'VolumeId' => [ 'shape' => 'String', ],
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteVpcEndpointConnectionNotificationsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'ConnectionNotificationIds', ],
			'members'  => [
				'DryRun'                    => [ 'shape' => 'Boolean', ],
				'ConnectionNotificationIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ConnectionNotificationId',
				],
			],
		],
		'DeleteVpcEndpointConnectionNotificationsResult'                 => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'DeleteVpcEndpointServiceConfigurationsRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'ServiceIds', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'ServiceIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ServiceId',
				],
			],
		],
		'DeleteVpcEndpointServiceConfigurationsResult'                   => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'DeleteVpcEndpointsRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'VpcEndpointIds', ],
			'members'  => [
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'VpcEndpointIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'VpcEndpointId',
				],
			],
		],
		'DeleteVpcEndpointsResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'DeleteVpcPeeringConnectionRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'VpcPeeringConnectionId', ],
			'members'  => [
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'DeleteVpcPeeringConnectionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DeleteVpcRequest'                                               => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'VpcId'  => [ 'shape' => 'String', ],
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteVpnConnectionRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'VpnConnectionId', ],
			'members'  => [
				'VpnConnectionId' => [ 'shape' => 'String', ],
				'DryRun'          => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeleteVpnConnectionRouteRequest'                                => [
			'type'     => 'structure',
			'required' => [
				'DestinationCidrBlock',
				'VpnConnectionId',
			],
			'members'  => [
				'DestinationCidrBlock' => [ 'shape' => 'String', ],
				'VpnConnectionId'      => [ 'shape' => 'String', ],
			],
		],
		'DeleteVpnGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'VpnGatewayId', ],
			'members'  => [
				'VpnGatewayId' => [ 'shape' => 'String', ],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeprovisionByoipCidrRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'Cidr', ],
			'members'  => [
				'Cidr'   => [ 'shape' => 'String', ],
				'DryRun' => [ 'shape' => 'Boolean', ],
			],
		],
		'DeprovisionByoipCidrResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'ByoipCidr' => [
					'shape'        => 'ByoipCidr',
					'locationName' => 'byoipCidr',
				],
			],
		],
		'DeregisterImageRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'ImageId', ],
			'members'  => [
				'ImageId' => [ 'shape' => 'String', ],
				'DryRun'  => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeAccountAttributesRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'AttributeNames' => [
					'shape'        => 'AccountAttributeNameStringList',
					'locationName' => 'attributeName',
				],
				'DryRun'         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeAccountAttributesResult'                                => [
			'type'    => 'structure',
			'members' => [
				'AccountAttributes' => [
					'shape'        => 'AccountAttributeList',
					'locationName' => 'accountAttributeSet',
				],
			],
		],
		'DescribeAddressesRequest'                                       => [
			'type'    => 'structure',
			'members' => [
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'PublicIps'     => [
					'shape'        => 'PublicIpStringList',
					'locationName' => 'PublicIp',
				],
				'AllocationIds' => [
					'shape'        => 'AllocationIdList',
					'locationName' => 'AllocationId',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeAddressesResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'Addresses' => [
					'shape'        => 'AddressList',
					'locationName' => 'addressesSet',
				],
			],
		],
		'DescribeAggregateIdFormatRequest'                               => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'DescribeAggregateIdFormatResult'                                => [
			'type'    => 'structure',
			'members' => [
				'UseLongIdsAggregated' => [
					'shape'        => 'Boolean',
					'locationName' => 'useLongIdsAggregated',
				],
				'Statuses'             => [
					'shape'        => 'IdFormatList',
					'locationName' => 'statusSet',
				],
			],
		],
		'DescribeAvailabilityZonesRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Filters'   => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'ZoneNames' => [
					'shape'        => 'ZoneNameStringList',
					'locationName' => 'ZoneName',
				],
				'ZoneIds'   => [
					'shape'        => 'ZoneIdStringList',
					'locationName' => 'ZoneId',
				],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeAvailabilityZonesResult'                                => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZones' => [
					'shape'        => 'AvailabilityZoneList',
					'locationName' => 'availabilityZoneInfo',
				],
			],
		],
		'DescribeBundleTasksRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'BundleIds' => [
					'shape'        => 'BundleIdStringList',
					'locationName' => 'BundleId',
				],
				'Filters'   => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeBundleTasksResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'BundleTasks' => [
					'shape'        => 'BundleTaskList',
					'locationName' => 'bundleInstanceTasksSet',
				],
			],
		],
		'DescribeByoipCidrsMaxResults'                                   => [
			'type' => 'integer',
			'max'  => 100,
			'min'  => 1,
		],
		'DescribeByoipCidrsRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'MaxResults', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'MaxResults' => [ 'shape' => 'DescribeByoipCidrsMaxResults', ],
				'NextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeByoipCidrsResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'ByoipCidrs' => [
					'shape'        => 'ByoipCidrSet',
					'locationName' => 'byoipCidrSet',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeCapacityReservationsMaxResults'                         => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 1,
		],
		'DescribeCapacityReservationsRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationIds' => [
					'shape'        => 'CapacityReservationIdSet',
					'locationName' => 'CapacityReservationId',
				],
				'NextToken'              => [ 'shape' => 'String', ],
				'MaxResults'             => [ 'shape' => 'DescribeCapacityReservationsMaxResults', ],
				'Filters'                => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeCapacityReservationsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'CapacityReservations' => [
					'shape'        => 'CapacityReservationSet',
					'locationName' => 'capacityReservationSet',
				],
			],
		],
		'DescribeClassicLinkInstancesMaxResults'                         => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClassicLinkInstancesRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Filters'     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'MaxResults'  => [
					'shape'        => 'DescribeClassicLinkInstancesMaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClassicLinkInstancesResult'                             => [
			'type'    => 'structure',
			'members' => [
				'Instances' => [
					'shape'        => 'ClassicLinkInstanceList',
					'locationName' => 'instancesSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClientVpnAuthorizationRulesMaxResults'                  => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClientVpnAuthorizationRulesRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'          => [ 'shape' => 'DescribeClientVpnAuthorizationRulesMaxResults', ],
			],
		],
		'DescribeClientVpnAuthorizationRulesResult'                      => [
			'type'    => 'structure',
			'members' => [
				'AuthorizationRules' => [
					'shape'        => 'AuthorizationRuleSet',
					'locationName' => 'authorizationRule',
				],
				'NextToken'          => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClientVpnConnectionsMaxResults'                         => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClientVpnConnectionsRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'MaxResults'          => [ 'shape' => 'DescribeClientVpnConnectionsMaxResults', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeClientVpnConnectionsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'Connections' => [
					'shape'        => 'ClientVpnConnectionSet',
					'locationName' => 'connections',
				],
				'NextToken'   => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClientVpnEndpointMaxResults'                            => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClientVpnEndpointsRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ClientVpnEndpointId',
				],
				'MaxResults'           => [ 'shape' => 'DescribeClientVpnEndpointMaxResults', ],
				'NextToken'            => [ 'shape' => 'NextToken', ],
				'Filters'              => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'               => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeClientVpnEndpointsResult'                               => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpoints' => [
					'shape'        => 'EndpointSet',
					'locationName' => 'clientVpnEndpoint',
				],
				'NextToken'          => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClientVpnRoutesMaxResults'                              => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClientVpnRoutesRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'          => [ 'shape' => 'DescribeClientVpnRoutesMaxResults', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeClientVpnRoutesResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'Routes'    => [
					'shape'        => 'ClientVpnRouteSet',
					'locationName' => 'routes',
				],
				'NextToken' => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeClientVpnTargetNetworksMaxResults'                      => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeClientVpnTargetNetworksRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'AssociationIds'      => [ 'shape' => 'ValueStringList', ],
				'MaxResults'          => [ 'shape' => 'DescribeClientVpnTargetNetworksMaxResults', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeClientVpnTargetNetworksResult'                          => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnTargetNetworks' => [
					'shape'        => 'TargetNetworkSet',
					'locationName' => 'clientVpnTargetNetworks',
				],
				'NextToken'               => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeConversionTaskList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ConversionTask',
				'locationName' => 'item',
			],
		],
		'DescribeConversionTasksRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'ConversionTaskIds' => [
					'shape'        => 'ConversionIdStringList',
					'locationName' => 'conversionTaskId',
				],
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeConversionTasksResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'ConversionTasks' => [
					'shape'        => 'DescribeConversionTaskList',
					'locationName' => 'conversionTasks',
				],
			],
		],
		'DescribeCustomerGatewaysRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'CustomerGatewayIds' => [
					'shape'        => 'CustomerGatewayIdStringList',
					'locationName' => 'CustomerGatewayId',
				],
				'Filters'            => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeCustomerGatewaysResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'CustomerGateways' => [
					'shape'        => 'CustomerGatewayList',
					'locationName' => 'customerGatewaySet',
				],
			],
		],
		'DescribeDhcpOptionsMaxResults'                                  => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeDhcpOptionsRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'DhcpOptionsIds' => [
					'shape'        => 'DhcpOptionsIdStringList',
					'locationName' => 'DhcpOptionsId',
				],
				'Filters'        => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NextToken'      => [ 'shape' => 'String', ],
				'MaxResults'     => [ 'shape' => 'DescribeDhcpOptionsMaxResults', ],
			],
		],
		'DescribeDhcpOptionsResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'DhcpOptions' => [
					'shape'        => 'DhcpOptionsList',
					'locationName' => 'dhcpOptionsSet',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeEgressOnlyInternetGatewaysMaxResults'                   => [
			'type' => 'integer',
			'max'  => 255,
			'min'  => 5,
		],
		'DescribeEgressOnlyInternetGatewaysRequest'                      => [
			'type'    => 'structure',
			'members' => [
				'DryRun'                       => [ 'shape' => 'Boolean', ],
				'EgressOnlyInternetGatewayIds' => [
					'shape'        => 'EgressOnlyInternetGatewayIdList',
					'locationName' => 'EgressOnlyInternetGatewayId',
				],
				'MaxResults'                   => [ 'shape' => 'DescribeEgressOnlyInternetGatewaysMaxResults', ],
				'NextToken'                    => [ 'shape' => 'String', ],
			],
		],
		'DescribeEgressOnlyInternetGatewaysResult'                       => [
			'type'    => 'structure',
			'members' => [
				'EgressOnlyInternetGateways' => [
					'shape'        => 'EgressOnlyInternetGatewayList',
					'locationName' => 'egressOnlyInternetGatewaySet',
				],
				'NextToken'                  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeElasticGpusMaxResults'                                  => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 10,
		],
		'DescribeElasticGpusRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'ElasticGpuIds' => [
					'shape'        => 'ElasticGpuIdSet',
					'locationName' => 'ElasticGpuId',
				],
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'    => [ 'shape' => 'DescribeElasticGpusMaxResults', ],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'DescribeElasticGpusResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'ElasticGpuSet' => [
					'shape'        => 'ElasticGpuSet',
					'locationName' => 'elasticGpuSet',
				],
				'MaxResults'    => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'     => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeExportTasksRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'ExportTaskIds' => [
					'shape'        => 'ExportTaskIdStringList',
					'locationName' => 'exportTaskId',
				],
			],
		],
		'DescribeExportTasksResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'ExportTasks' => [
					'shape'        => 'ExportTaskList',
					'locationName' => 'exportTaskSet',
				],
			],
		],
		'DescribeFleetError'                                             => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateAndOverrides' => [
					'shape'        => 'LaunchTemplateAndOverridesResponse',
					'locationName' => 'launchTemplateAndOverrides',
				],
				'Lifecycle'                  => [
					'shape'        => 'InstanceLifecycle',
					'locationName' => 'lifecycle',
				],
				'ErrorCode'                  => [
					'shape'        => 'String',
					'locationName' => 'errorCode',
				],
				'ErrorMessage'               => [
					'shape'        => 'String',
					'locationName' => 'errorMessage',
				],
			],
		],
		'DescribeFleetHistoryRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'FleetId', 'StartTime', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'EventType'  => [ 'shape' => 'FleetEventType', ],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
				'FleetId'    => [ 'shape' => 'FleetIdentifier', ],
				'StartTime'  => [ 'shape' => 'DateTime', ],
			],
		],
		'DescribeFleetHistoryResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'HistoryRecords'    => [
					'shape'        => 'HistoryRecordSet',
					'locationName' => 'historyRecordSet',
				],
				'LastEvaluatedTime' => [
					'shape'        => 'DateTime',
					'locationName' => 'lastEvaluatedTime',
				],
				'NextToken'         => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'FleetId'           => [
					'shape'        => 'FleetIdentifier',
					'locationName' => 'fleetId',
				],
				'StartTime'         => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
			],
		],
		'DescribeFleetInstancesRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'FleetId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
				'FleetId'    => [ 'shape' => 'FleetIdentifier', ],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
			],
		],
		'DescribeFleetInstancesResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'ActiveInstances' => [
					'shape'        => 'ActiveInstanceSet',
					'locationName' => 'activeInstanceSet',
				],
				'NextToken'       => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'FleetId'         => [
					'shape'        => 'FleetIdentifier',
					'locationName' => 'fleetId',
				],
			],
		],
		'DescribeFleetsErrorSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DescribeFleetError',
				'locationName' => 'item',
			],
		],
		'DescribeFleetsInstances'                                        => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateAndOverrides' => [
					'shape'        => 'LaunchTemplateAndOverridesResponse',
					'locationName' => 'launchTemplateAndOverrides',
				],
				'Lifecycle'                  => [
					'shape'        => 'InstanceLifecycle',
					'locationName' => 'lifecycle',
				],
				'InstanceIds'                => [
					'shape'        => 'InstanceIdsSet',
					'locationName' => 'instanceIds',
				],
				'InstanceType'               => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'Platform'                   => [
					'shape'        => 'PlatformValues',
					'locationName' => 'platform',
				],
			],
		],
		'DescribeFleetsInstancesSet'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DescribeFleetsInstances',
				'locationName' => 'item',
			],
		],
		'DescribeFleetsRequest'                                          => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
				'FleetIds'   => [
					'shape'        => 'FleetIdSet',
					'locationName' => 'FleetId',
				],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
			],
		],
		'DescribeFleetsResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'Fleets'    => [
					'shape'        => 'FleetSet',
					'locationName' => 'fleetSet',
				],
			],
		],
		'DescribeFlowLogsRequest'                                        => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'Filter'     => [ 'shape' => 'FilterList', ],
				'FlowLogIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'FlowLogId',
				],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DescribeFlowLogsResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'FlowLogs'  => [
					'shape'        => 'FlowLogSet',
					'locationName' => 'flowLogSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeFpgaImageAttributeRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'FpgaImageId', 'Attribute', ],
			'members'  => [
				'DryRun'      => [ 'shape' => 'Boolean', ],
				'FpgaImageId' => [ 'shape' => 'String', ],
				'Attribute'   => [ 'shape' => 'FpgaImageAttributeName', ],
			],
		],
		'DescribeFpgaImageAttributeResult'                               => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageAttribute' => [
					'shape'        => 'FpgaImageAttribute',
					'locationName' => 'fpgaImageAttribute',
				],
			],
		],
		'DescribeFpgaImagesMaxResults'                                   => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeFpgaImagesRequest'                                      => [
			'type'    => 'structure',
			'members' => [
				'DryRun'       => [ 'shape' => 'Boolean', ],
				'FpgaImageIds' => [
					'shape'        => 'FpgaImageIdList',
					'locationName' => 'FpgaImageId',
				],
				'Owners'       => [
					'shape'        => 'OwnerStringList',
					'locationName' => 'Owner',
				],
				'Filters'      => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'NextToken'    => [ 'shape' => 'NextToken', ],
				'MaxResults'   => [ 'shape' => 'DescribeFpgaImagesMaxResults', ],
			],
		],
		'DescribeFpgaImagesResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'FpgaImages' => [
					'shape'        => 'FpgaImageList',
					'locationName' => 'fpgaImageSet',
				],
				'NextToken'  => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeHostReservationOfferingsRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'Filter'      => [ 'shape' => 'FilterList', ],
				'MaxDuration' => [ 'shape' => 'Integer', ],
				'MaxResults'  => [ 'shape' => 'DescribeHostReservationsMaxResults', ],
				'MinDuration' => [ 'shape' => 'Integer', ],
				'NextToken'   => [ 'shape' => 'String', ],
				'OfferingId'  => [ 'shape' => 'String', ],
			],
		],
		'DescribeHostReservationOfferingsResult'                         => [
			'type'    => 'structure',
			'members' => [
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'OfferingSet' => [
					'shape'        => 'HostOfferingSet',
					'locationName' => 'offeringSet',
				],
			],
		],
		'DescribeHostReservationsMaxResults'                             => [
			'type' => 'integer',
			'max'  => 500,
			'min'  => 5,
		],
		'DescribeHostReservationsRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'Filter'               => [ 'shape' => 'FilterList', ],
				'HostReservationIdSet' => [ 'shape' => 'HostReservationIdSet', ],
				'MaxResults'           => [ 'shape' => 'Integer', ],
				'NextToken'            => [ 'shape' => 'String', ],
			],
		],
		'DescribeHostReservationsResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'HostReservationSet' => [
					'shape'        => 'HostReservationSet',
					'locationName' => 'hostReservationSet',
				],
				'NextToken'          => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeHostsRequest'                                           => [
			'type'    => 'structure',
			'members' => [
				'Filter'     => [
					'shape'        => 'FilterList',
					'locationName' => 'filter',
				],
				'HostIds'    => [
					'shape'        => 'RequestHostIdList',
					'locationName' => 'hostId',
				],
				'MaxResults' => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeHostsResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'Hosts'     => [
					'shape'        => 'HostList',
					'locationName' => 'hostSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeIamInstanceProfileAssociationsMaxResults'               => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeIamInstanceProfileAssociationsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'AssociationIds' => [
					'shape'        => 'AssociationIdList',
					'locationName' => 'AssociationId',
				],
				'Filters'        => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'     => [ 'shape' => 'DescribeIamInstanceProfileAssociationsMaxResults', ],
				'NextToken'      => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeIamInstanceProfileAssociationsResult'                   => [
			'type'    => 'structure',
			'members' => [
				'IamInstanceProfileAssociations' => [
					'shape'        => 'IamInstanceProfileAssociationSet',
					'locationName' => 'iamInstanceProfileAssociationSet',
				],
				'NextToken'                      => [
					'shape'        => 'NextToken',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeIdFormatRequest'                                        => [
			'type'    => 'structure',
			'members' => [ 'Resource' => [ 'shape' => 'String', ], ],
		],
		'DescribeIdFormatResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'Statuses' => [
					'shape'        => 'IdFormatList',
					'locationName' => 'statusSet',
				],
			],
		],
		'DescribeIdentityIdFormatRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'PrincipalArn', ],
			'members'  => [
				'PrincipalArn' => [
					'shape'        => 'String',
					'locationName' => 'principalArn',
				],
				'Resource'     => [
					'shape'        => 'String',
					'locationName' => 'resource',
				],
			],
		],
		'DescribeIdentityIdFormatResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'Statuses' => [
					'shape'        => 'IdFormatList',
					'locationName' => 'statusSet',
				],
			],
		],
		'DescribeImageAttributeRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'ImageId', ],
			'members'  => [
				'Attribute' => [ 'shape' => 'ImageAttributeName', ],
				'ImageId'   => [ 'shape' => 'String', ],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeImagesRequest'                                          => [
			'type'    => 'structure',
			'members' => [
				'ExecutableUsers' => [
					'shape'        => 'ExecutableByStringList',
					'locationName' => 'ExecutableBy',
				],
				'Filters'         => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'ImageIds'        => [
					'shape'        => 'ImageIdStringList',
					'locationName' => 'ImageId',
				],
				'Owners'          => [
					'shape'        => 'OwnerStringList',
					'locationName' => 'Owner',
				],
				'DryRun'          => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeImagesResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'Images' => [
					'shape'        => 'ImageList',
					'locationName' => 'imagesSet',
				],
			],
		],
		'DescribeImportImageTasksRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'Filters'       => [ 'shape' => 'FilterList', ],
				'ImportTaskIds' => [
					'shape'        => 'ImportTaskIdList',
					'locationName' => 'ImportTaskId',
				],
				'MaxResults'    => [ 'shape' => 'Integer', ],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'DescribeImportImageTasksResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'ImportImageTasks' => [
					'shape'        => 'ImportImageTaskList',
					'locationName' => 'importImageTaskSet',
				],
				'NextToken'        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeImportSnapshotTasksRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'Filters'       => [ 'shape' => 'FilterList', ],
				'ImportTaskIds' => [
					'shape'        => 'ImportTaskIdList',
					'locationName' => 'ImportTaskId',
				],
				'MaxResults'    => [ 'shape' => 'Integer', ],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'DescribeImportSnapshotTasksResult'                              => [
			'type'    => 'structure',
			'members' => [
				'ImportSnapshotTasks' => [
					'shape'        => 'ImportSnapshotTaskList',
					'locationName' => 'importSnapshotTaskSet',
				],
				'NextToken'           => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeInstanceAttributeRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'InstanceId', ],
			'members'  => [
				'Attribute'  => [
					'shape'        => 'InstanceAttributeName',
					'locationName' => 'attribute',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'DescribeInstanceCreditSpecificationsMaxResults'                 => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeInstanceCreditSpecificationsRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'DryRun'      => [ 'shape' => 'Boolean', ],
				'Filters'     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'MaxResults'  => [ 'shape' => 'DescribeInstanceCreditSpecificationsMaxResults', ],
				'NextToken'   => [ 'shape' => 'String', ],
			],
		],
		'DescribeInstanceCreditSpecificationsResult'                     => [
			'type'    => 'structure',
			'members' => [
				'InstanceCreditSpecifications' => [
					'shape'        => 'InstanceCreditSpecificationList',
					'locationName' => 'instanceCreditSpecificationSet',
				],
				'NextToken'                    => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeInstanceStatusRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'InstanceIds'         => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'MaxResults'          => [ 'shape' => 'Integer', ],
				'NextToken'           => [ 'shape' => 'String', ],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'IncludeAllInstances' => [
					'shape'        => 'Boolean',
					'locationName' => 'includeAllInstances',
				],
			],
		],
		'DescribeInstanceStatusResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'InstanceStatuses' => [
					'shape'        => 'InstanceStatusList',
					'locationName' => 'instanceStatusSet',
				],
				'NextToken'        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeInstancesRequest'                                       => [
			'type'    => 'structure',
			'members' => [
				'Filters'     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'MaxResults'  => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeInstancesResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'Reservations' => [
					'shape'        => 'ReservationList',
					'locationName' => 'reservationSet',
				],
				'NextToken'    => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeInternetGatewaysMaxResults'                             => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeInternetGatewaysRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'Filters'            => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InternetGatewayIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'internetGatewayId',
				],
				'NextToken'          => [ 'shape' => 'String', ],
				'MaxResults'         => [ 'shape' => 'DescribeInternetGatewaysMaxResults', ],
			],
		],
		'DescribeInternetGatewaysResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'InternetGateways' => [
					'shape'        => 'InternetGatewayList',
					'locationName' => 'internetGatewaySet',
				],
				'NextToken'        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeKeyPairsRequest'                                        => [
			'type'    => 'structure',
			'members' => [
				'Filters'  => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'KeyNames' => [
					'shape'        => 'KeyNameStringList',
					'locationName' => 'KeyName',
				],
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeKeyPairsResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'KeyPairs' => [
					'shape'        => 'KeyPairList',
					'locationName' => 'keySet',
				],
			],
		],
		'DescribeLaunchTemplateVersionsRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'Versions'           => [
					'shape'        => 'VersionStringList',
					'locationName' => 'LaunchTemplateVersion',
				],
				'MinVersion'         => [ 'shape' => 'String', ],
				'MaxVersion'         => [ 'shape' => 'String', ],
				'NextToken'          => [ 'shape' => 'String', ],
				'MaxResults'         => [ 'shape' => 'Integer', ],
				'Filters'            => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
			],
		],
		'DescribeLaunchTemplateVersionsResult'                           => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateVersions' => [
					'shape'        => 'LaunchTemplateVersionSet',
					'locationName' => 'launchTemplateVersionSet',
				],
				'NextToken'              => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeLaunchTemplatesMaxResults'                              => [
			'type' => 'integer',
			'max'  => 200,
			'min'  => 1,
		],
		'DescribeLaunchTemplatesRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'DryRun'              => [ 'shape' => 'Boolean', ],
				'LaunchTemplateIds'   => [
					'shape'        => 'ValueStringList',
					'locationName' => 'LaunchTemplateId',
				],
				'LaunchTemplateNames' => [
					'shape'        => 'LaunchTemplateNameStringList',
					'locationName' => 'LaunchTemplateName',
				],
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'NextToken'           => [ 'shape' => 'String', ],
				'MaxResults'          => [ 'shape' => 'DescribeLaunchTemplatesMaxResults', ],
			],
		],
		'DescribeLaunchTemplatesResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplates' => [
					'shape'        => 'LaunchTemplateSet',
					'locationName' => 'launchTemplates',
				],
				'NextToken'       => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeMovingAddressesMaxResults'                              => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeMovingAddressesRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'filter',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'MaxResults' => [
					'shape'        => 'DescribeMovingAddressesMaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'PublicIps'  => [
					'shape'        => 'ValueStringList',
					'locationName' => 'publicIp',
				],
			],
		],
		'DescribeMovingAddressesResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'MovingAddressStatuses' => [
					'shape'        => 'MovingAddressStatusSet',
					'locationName' => 'movingAddressStatusSet',
				],
				'NextToken'             => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeNatGatewaysMaxResults'                                  => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeNatGatewaysRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'Filter'        => [ 'shape' => 'FilterList', ],
				'MaxResults'    => [ 'shape' => 'DescribeNatGatewaysMaxResults', ],
				'NatGatewayIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'NatGatewayId',
				],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'DescribeNatGatewaysResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'NatGateways' => [
					'shape'        => 'NatGatewayList',
					'locationName' => 'natGatewaySet',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeNetworkAclsMaxResults'                                  => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeNetworkAclsRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkAclIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'NetworkAclId',
				],
				'NextToken'     => [ 'shape' => 'String', ],
				'MaxResults'    => [ 'shape' => 'DescribeNetworkAclsMaxResults', ],
			],
		],
		'DescribeNetworkAclsResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'NetworkAcls' => [
					'shape'        => 'NetworkAclList',
					'locationName' => 'networkAclSet',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeNetworkInterfaceAttributeRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'Attribute'          => [
					'shape'        => 'NetworkInterfaceAttribute',
					'locationName' => 'attribute',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'DescribeNetworkInterfaceAttributeResult'                        => [
			'type'    => 'structure',
			'members' => [
				'Attachment'         => [
					'shape'        => 'NetworkInterfaceAttachment',
					'locationName' => 'attachment',
				],
				'Description'        => [
					'shape'        => 'AttributeValue',
					'locationName' => 'description',
				],
				'Groups'             => [
					'shape'        => 'GroupIdentifierList',
					'locationName' => 'groupSet',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'SourceDestCheck'    => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'sourceDestCheck',
				],
			],
		],
		'DescribeNetworkInterfacePermissionsMaxResults'                  => [
			'type' => 'integer',
			'max'  => 255,
			'min'  => 5,
		],
		'DescribeNetworkInterfacePermissionsRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfacePermissionIds' => [
					'shape'        => 'NetworkInterfacePermissionIdList',
					'locationName' => 'NetworkInterfacePermissionId',
				],
				'Filters'                       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'NextToken'                     => [ 'shape' => 'String', ],
				'MaxResults'                    => [ 'shape' => 'DescribeNetworkInterfacePermissionsMaxResults', ],
			],
		],
		'DescribeNetworkInterfacePermissionsResult'                      => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfacePermissions' => [
					'shape'        => 'NetworkInterfacePermissionList',
					'locationName' => 'networkInterfacePermissions',
				],
				'NextToken'                   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeNetworkInterfacesMaxResults'                            => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeNetworkInterfacesRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'filter',
				],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkInterfaceIds' => [
					'shape'        => 'NetworkInterfaceIdList',
					'locationName' => 'NetworkInterfaceId',
				],
				'NextToken'           => [ 'shape' => 'String', ],
				'MaxResults'          => [ 'shape' => 'DescribeNetworkInterfacesMaxResults', ],
			],
		],
		'DescribeNetworkInterfacesResult'                                => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfaces' => [
					'shape'        => 'NetworkInterfaceList',
					'locationName' => 'networkInterfaceSet',
				],
				'NextToken'         => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribePlacementGroupsRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'GroupNames' => [
					'shape'        => 'PlacementGroupStringList',
					'locationName' => 'groupName',
				],
			],
		],
		'DescribePlacementGroupsResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'PlacementGroups' => [
					'shape'        => 'PlacementGroupList',
					'locationName' => 'placementGroupSet',
				],
			],
		],
		'DescribePrefixListsRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'    => [ 'shape' => 'Integer', ],
				'NextToken'     => [ 'shape' => 'String', ],
				'PrefixListIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'PrefixListId',
				],
			],
		],
		'DescribePrefixListsResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'PrefixLists' => [
					'shape'        => 'PrefixListSet',
					'locationName' => 'prefixListSet',
				],
			],
		],
		'DescribePrincipalIdFormatMaxResults'                            => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 1,
		],
		'DescribePrincipalIdFormatRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'Resources'  => [
					'shape'        => 'ResourceList',
					'locationName' => 'Resource',
				],
				'MaxResults' => [ 'shape' => 'DescribePrincipalIdFormatMaxResults', ],
				'NextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DescribePrincipalIdFormatResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Principals' => [
					'shape'        => 'PrincipalIdFormatList',
					'locationName' => 'principalSet',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribePublicIpv4PoolsRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'PoolIds'    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'PoolId',
				],
				'NextToken'  => [ 'shape' => 'NextToken', ],
				'MaxResults' => [ 'shape' => 'PoolMaxResults', ],
			],
		],
		'DescribePublicIpv4PoolsResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'PublicIpv4Pools' => [
					'shape'        => 'PublicIpv4PoolSet',
					'locationName' => 'publicIpv4PoolSet',
				],
				'NextToken'       => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeRegionsRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'Filters'     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'RegionNames' => [
					'shape'        => 'RegionNameStringList',
					'locationName' => 'RegionName',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeRegionsResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'Regions' => [
					'shape'        => 'RegionList',
					'locationName' => 'regionInfo',
				],
			],
		],
		'DescribeReservedInstancesListingsRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'ReservedInstancesId'        => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
				'ReservedInstancesListingId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesListingId',
				],
			],
		],
		'DescribeReservedInstancesListingsResult'                        => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesListings' => [
					'shape'        => 'ReservedInstancesListingList',
					'locationName' => 'reservedInstancesListingsSet',
				],
			],
		],
		'DescribeReservedInstancesModificationsRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'Filters'                          => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'ReservedInstancesModificationIds' => [
					'shape'        => 'ReservedInstancesModificationIdStringList',
					'locationName' => 'ReservedInstancesModificationId',
				],
				'NextToken'                        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeReservedInstancesModificationsResult'                   => [
			'type'    => 'structure',
			'members' => [
				'NextToken'                      => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'ReservedInstancesModifications' => [
					'shape'        => 'ReservedInstancesModificationList',
					'locationName' => 'reservedInstancesModificationsSet',
				],
			],
		],
		'DescribeReservedInstancesOfferingsRequest'                      => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'             => [ 'shape' => 'String', ],
				'Filters'                      => [ 'shape' => 'FilterList', 'locationName' => 'Filter', ],
				'IncludeMarketplace'           => [ 'shape' => 'Boolean', ],
				'InstanceType'                 => [ 'shape' => 'InstanceType', ],
				'MaxDuration'                  => [ 'shape' => 'Long', ],
				'MaxInstanceCount'             => [ 'shape' => 'Integer', ],
				'MinDuration'                  => [ 'shape' => 'Long', ],
				'OfferingClass'                => [ 'shape' => 'OfferingClassType', ],
				'ProductDescription'           => [ 'shape' => 'RIProductDescription', ],
				'ReservedInstancesOfferingIds' => [
					'shape'        => 'ReservedInstancesOfferingIdStringList',
					'locationName' => 'ReservedInstancesOfferingId',
				],
				'DryRun'                       => [ 'shape' => 'Boolean', 'locationName' => 'dryRun', ],
				'InstanceTenancy'              => [
					'shape'        => 'Tenancy',
					'locationName' => 'instanceTenancy',
				],
				'MaxResults'                   => [ 'shape' => 'Integer', 'locationName' => 'maxResults', ],
				'NextToken'                    => [ 'shape' => 'String', 'locationName' => 'nextToken', ],
				'OfferingType'                 => [
					'shape'        => 'OfferingTypeValues',
					'locationName' => 'offeringType',
				],
			],
		],
		'DescribeReservedInstancesOfferingsResult'                       => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesOfferings' => [
					'shape'        => 'ReservedInstancesOfferingList',
					'locationName' => 'reservedInstancesOfferingsSet',
				],
				'NextToken'                  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeReservedInstancesRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Filters'              => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'OfferingClass'        => [ 'shape' => 'OfferingClassType', ],
				'ReservedInstancesIds' => [
					'shape'        => 'ReservedInstancesIdStringList',
					'locationName' => 'ReservedInstancesId',
				],
				'DryRun'               => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'OfferingType'         => [
					'shape'        => 'OfferingTypeValues',
					'locationName' => 'offeringType',
				],
			],
		],
		'DescribeReservedInstancesResult'                                => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstances' => [
					'shape'        => 'ReservedInstancesList',
					'locationName' => 'reservedInstancesSet',
				],
			],
		],
		'DescribeRouteTablesMaxResults'                                  => [
			'type' => 'integer',
			'max'  => 100,
			'min'  => 5,
		],
		'DescribeRouteTablesRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'RouteTableIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RouteTableId',
				],
				'NextToken'     => [ 'shape' => 'String', ],
				'MaxResults'    => [ 'shape' => 'DescribeRouteTablesMaxResults', ],
			],
		],
		'DescribeRouteTablesResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'RouteTables' => [
					'shape'        => 'RouteTableList',
					'locationName' => 'routeTableSet',
				],
				'NextToken'   => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeScheduledInstanceAvailabilityMaxResults'                => [
			'type' => 'integer',
			'max'  => 300,
			'min'  => 5,
		],
		'DescribeScheduledInstanceAvailabilityRequest'                   => [
			'type'     => 'structure',
			'required' => [
				'FirstSlotStartTimeRange',
				'Recurrence',
			],
			'members'  => [
				'DryRun'                  => [ 'shape' => 'Boolean', ],
				'Filters'                 => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'FirstSlotStartTimeRange' => [ 'shape' => 'SlotDateTimeRangeRequest', ],
				'MaxResults'              => [ 'shape' => 'DescribeScheduledInstanceAvailabilityMaxResults', ],
				'MaxSlotDurationInHours'  => [ 'shape' => 'Integer', ],
				'MinSlotDurationInHours'  => [ 'shape' => 'Integer', ],
				'NextToken'               => [ 'shape' => 'String', ],
				'Recurrence'              => [ 'shape' => 'ScheduledInstanceRecurrenceRequest', ],
			],
		],
		'DescribeScheduledInstanceAvailabilityResult'                    => [
			'type'    => 'structure',
			'members' => [
				'NextToken'                        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'ScheduledInstanceAvailabilitySet' => [
					'shape'        => 'ScheduledInstanceAvailabilitySet',
					'locationName' => 'scheduledInstanceAvailabilitySet',
				],
			],
		],
		'DescribeScheduledInstancesRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'DryRun'               => [ 'shape' => 'Boolean', ],
				'Filters'              => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'           => [ 'shape' => 'Integer', ],
				'NextToken'            => [ 'shape' => 'String', ],
				'ScheduledInstanceIds' => [
					'shape'        => 'ScheduledInstanceIdRequestSet',
					'locationName' => 'ScheduledInstanceId',
				],
				'SlotStartTimeRange'   => [ 'shape' => 'SlotStartTimeRangeRequest', ],
			],
		],
		'DescribeScheduledInstancesResult'                               => [
			'type'    => 'structure',
			'members' => [
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'ScheduledInstanceSet' => [
					'shape'        => 'ScheduledInstanceSet',
					'locationName' => 'scheduledInstanceSet',
				],
			],
		],
		'DescribeSecurityGroupReferencesRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'GroupId', ],
			'members'  => [
				'DryRun'  => [ 'shape' => 'Boolean', ],
				'GroupId' => [ 'shape' => 'GroupIds', ],
			],
		],
		'DescribeSecurityGroupReferencesResult'                          => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroupReferenceSet' => [
					'shape'        => 'SecurityGroupReferences',
					'locationName' => 'securityGroupReferenceSet',
				],
			],
		],
		'DescribeSecurityGroupsMaxResults'                               => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeSecurityGroupsRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'GroupIds'   => [
					'shape'        => 'GroupIdStringList',
					'locationName' => 'GroupId',
				],
				'GroupNames' => [
					'shape'        => 'GroupNameStringList',
					'locationName' => 'GroupName',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NextToken'  => [ 'shape' => 'String', ],
				'MaxResults' => [ 'shape' => 'DescribeSecurityGroupsMaxResults', ],
			],
		],
		'DescribeSecurityGroupsResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroups' => [
					'shape'        => 'SecurityGroupList',
					'locationName' => 'securityGroupInfo',
				],
				'NextToken'      => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeSnapshotAttributeRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'SnapshotId', ],
			'members'  => [
				'Attribute'  => [ 'shape' => 'SnapshotAttributeName', ],
				'SnapshotId' => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeSnapshotAttributeResult'                                => [
			'type'    => 'structure',
			'members' => [
				'CreateVolumePermissions' => [
					'shape'        => 'CreateVolumePermissionList',
					'locationName' => 'createVolumePermission',
				],
				'ProductCodes'            => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
				'SnapshotId'              => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
			],
		],
		'DescribeSnapshotsRequest'                                       => [
			'type'    => 'structure',
			'members' => [
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'          => [ 'shape' => 'Integer', ],
				'NextToken'           => [ 'shape' => 'String', ],
				'OwnerIds'            => [
					'shape'        => 'OwnerStringList',
					'locationName' => 'Owner',
				],
				'RestorableByUserIds' => [
					'shape'        => 'RestorableByStringList',
					'locationName' => 'RestorableBy',
				],
				'SnapshotIds'         => [
					'shape'        => 'SnapshotIdStringList',
					'locationName' => 'SnapshotId',
				],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeSnapshotsResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'Snapshots' => [
					'shape'        => 'SnapshotList',
					'locationName' => 'snapshotSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeSpotDatafeedSubscriptionRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeSpotDatafeedSubscriptionResult'                         => [
			'type'    => 'structure',
			'members' => [
				'SpotDatafeedSubscription' => [
					'shape'        => 'SpotDatafeedSubscription',
					'locationName' => 'spotDatafeedSubscription',
				],
			],
		],
		'DescribeSpotFleetInstancesMaxResults'                           => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 1,
		],
		'DescribeSpotFleetInstancesRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'SpotFleetRequestId', ],
			'members'  => [
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'MaxResults'         => [
					'shape'        => 'DescribeSpotFleetInstancesMaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'          => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'DescribeSpotFleetInstancesResponse'                             => [
			'type'    => 'structure',
			'members' => [
				'ActiveInstances'    => [
					'shape'        => 'ActiveInstanceSet',
					'locationName' => 'activeInstanceSet',
				],
				'NextToken'          => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'DescribeSpotFleetRequestHistoryMaxResults'                      => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 1,
		],
		'DescribeSpotFleetRequestHistoryRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'SpotFleetRequestId', 'StartTime', ],
			'members'  => [
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'EventType'          => [
					'shape'        => 'EventType',
					'locationName' => 'eventType',
				],
				'MaxResults'         => [
					'shape'        => 'DescribeSpotFleetRequestHistoryMaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'          => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
				'StartTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
			],
		],
		'DescribeSpotFleetRequestHistoryResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'HistoryRecords'     => [
					'shape'        => 'HistoryRecords',
					'locationName' => 'historyRecordSet',
				],
				'LastEvaluatedTime'  => [
					'shape'        => 'DateTime',
					'locationName' => 'lastEvaluatedTime',
				],
				'NextToken'          => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
				'StartTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
			],
		],
		'DescribeSpotFleetRequestsRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'MaxResults'          => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'           => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'DescribeSpotFleetRequestsResponse'                              => [
			'type'    => 'structure',
			'members' => [
				'NextToken'               => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotFleetRequestConfigs' => [
					'shape'        => 'SpotFleetRequestConfigSet',
					'locationName' => 'spotFleetRequestConfigSet',
				],
			],
		],
		'DescribeSpotInstanceRequestsRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Filters'                => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'SpotInstanceRequestIds' => [
					'shape'        => 'SpotInstanceRequestIdList',
					'locationName' => 'SpotInstanceRequestId',
				],
				'NextToken'              => [ 'shape' => 'String', ],
				'MaxResults'             => [ 'shape' => 'Integer', ],
			],
		],
		'DescribeSpotInstanceRequestsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'SpotInstanceRequests' => [
					'shape'        => 'SpotInstanceRequestList',
					'locationName' => 'spotInstanceRequestSet',
				],
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeSpotPriceHistoryRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'Filters'             => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'AvailabilityZone'    => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'EndTime'             => [
					'shape'        => 'DateTime',
					'locationName' => 'endTime',
				],
				'InstanceTypes'       => [
					'shape'        => 'InstanceTypeList',
					'locationName' => 'InstanceType',
				],
				'MaxResults'          => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'           => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'ProductDescriptions' => [
					'shape'        => 'ProductDescriptionList',
					'locationName' => 'ProductDescription',
				],
				'StartTime'           => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
			],
		],
		'DescribeSpotPriceHistoryResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'NextToken'        => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'SpotPriceHistory' => [
					'shape'        => 'SpotPriceHistoryList',
					'locationName' => 'spotPriceHistorySet',
				],
			],
		],
		'DescribeStaleSecurityGroupsMaxResults'                          => [
			'type' => 'integer',
			'max'  => 255,
			'min'  => 5,
		],
		'DescribeStaleSecurityGroupsNextToken'                           => [
			'type' => 'string',
			'max'  => 1024,
			'min'  => 1,
		],
		'DescribeStaleSecurityGroupsRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'MaxResults' => [ 'shape' => 'DescribeStaleSecurityGroupsMaxResults', ],
				'NextToken'  => [ 'shape' => 'DescribeStaleSecurityGroupsNextToken', ],
				'VpcId'      => [ 'shape' => 'String', ],
			],
		],
		'DescribeStaleSecurityGroupsResult'                              => [
			'type'    => 'structure',
			'members' => [
				'NextToken'             => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'StaleSecurityGroupSet' => [
					'shape'        => 'StaleSecurityGroupSet',
					'locationName' => 'staleSecurityGroupSet',
				],
			],
		],
		'DescribeSubnetsMaxResults'                                      => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeSubnetsRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'SubnetIds'  => [
					'shape'        => 'SubnetIdStringList',
					'locationName' => 'SubnetId',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NextToken'  => [ 'shape' => 'String', ],
				'MaxResults' => [ 'shape' => 'DescribeSubnetsMaxResults', ],
			],
		],
		'DescribeSubnetsResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'Subnets'   => [
					'shape'        => 'SubnetList',
					'locationName' => 'subnetSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTagsRequest'                                            => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults' => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTagsResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'Tags'      => [
					'shape'        => 'TagDescriptionList',
					'locationName' => 'tagSet',
				],
			],
		],
		'DescribeTrafficMirrorFiltersRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'TrafficMirrorFilterId',
				],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
				'Filters'                => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'             => [ 'shape' => 'TrafficMirroringMaxResults', ],
				'NextToken'              => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeTrafficMirrorFiltersResult'                             => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilters' => [
					'shape'        => 'TrafficMirrorFilterSet',
					'locationName' => 'trafficMirrorFilterSet',
				],
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTrafficMirrorSessionsRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSessionIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'TrafficMirrorSessionId',
				],
				'DryRun'                  => [ 'shape' => 'Boolean', ],
				'Filters'                 => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'              => [ 'shape' => 'TrafficMirroringMaxResults', ],
				'NextToken'               => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeTrafficMirrorSessionsResult'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSessions' => [
					'shape'        => 'TrafficMirrorSessionSet',
					'locationName' => 'trafficMirrorSessionSet',
				],
				'NextToken'             => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTrafficMirrorTargetsRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorTargetIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'TrafficMirrorTargetId',
				],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
				'Filters'                => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'             => [ 'shape' => 'TrafficMirroringMaxResults', ],
				'NextToken'              => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeTrafficMirrorTargetsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorTargets' => [
					'shape'        => 'TrafficMirrorTargetSet',
					'locationName' => 'trafficMirrorTargetSet',
				],
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTransitGatewayAttachmentsRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentIds' => [ 'shape' => 'TransitGatewayAttachmentIdStringList', ],
				'Filters'                     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                  => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                   => [ 'shape' => 'String', ],
				'DryRun'                      => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeTransitGatewayAttachmentsResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachments' => [
					'shape'        => 'TransitGatewayAttachmentList',
					'locationName' => 'transitGatewayAttachments',
				],
				'NextToken'                 => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTransitGatewayRouteTablesRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTableIds' => [ 'shape' => 'TransitGatewayRouteTableIdStringList', ],
				'Filters'                     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                  => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                   => [ 'shape' => 'String', ],
				'DryRun'                      => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeTransitGatewayRouteTablesResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTables' => [
					'shape'        => 'TransitGatewayRouteTableList',
					'locationName' => 'transitGatewayRouteTables',
				],
				'NextToken'                 => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTransitGatewayVpcAttachmentsRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentIds' => [ 'shape' => 'TransitGatewayAttachmentIdStringList', ],
				'Filters'                     => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                  => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                   => [ 'shape' => 'String', ],
				'DryRun'                      => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeTransitGatewayVpcAttachmentsResult'                     => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachments' => [
					'shape'        => 'TransitGatewayVpcAttachmentList',
					'locationName' => 'transitGatewayVpcAttachments',
				],
				'NextToken'                    => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeTransitGatewaysRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayIds' => [ 'shape' => 'TransitGatewayIdStringList', ],
				'Filters'           => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'        => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'         => [ 'shape' => 'String', ],
				'DryRun'            => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeTransitGatewaysResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'TransitGateways' => [
					'shape'        => 'TransitGatewayList',
					'locationName' => 'transitGatewaySet',
				],
				'NextToken'       => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVolumeAttributeRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'VolumeId', ],
			'members'  => [
				'Attribute' => [ 'shape' => 'VolumeAttributeName', ],
				'VolumeId'  => [ 'shape' => 'String', ],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeVolumeAttributeResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'AutoEnableIO' => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'autoEnableIO',
				],
				'ProductCodes' => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
				'VolumeId'     => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
			],
		],
		'DescribeVolumeStatusRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
				'VolumeIds'  => [
					'shape'        => 'VolumeIdStringList',
					'locationName' => 'VolumeId',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeVolumeStatusResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'NextToken'      => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
				'VolumeStatuses' => [
					'shape'        => 'VolumeStatusList',
					'locationName' => 'volumeStatusSet',
				],
			],
		],
		'DescribeVolumesModificationsRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'VolumeIds'  => [
					'shape'        => 'VolumeIdStringList',
					'locationName' => 'VolumeId',
				],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'NextToken'  => [ 'shape' => 'String', ],
				'MaxResults' => [ 'shape' => 'Integer', ],
			],
		],
		'DescribeVolumesModificationsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'VolumesModifications' => [
					'shape'        => 'VolumeModificationList',
					'locationName' => 'volumeModificationSet',
				],
				'NextToken'            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVolumesRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'VolumeIds'  => [
					'shape'        => 'VolumeIdStringList',
					'locationName' => 'VolumeId',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'MaxResults' => [
					'shape'        => 'Integer',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVolumesResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'Volumes'   => [
					'shape'        => 'VolumeList',
					'locationName' => 'volumeSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcAttributeRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'VpcId', ],
			'members'  => [
				'Attribute' => [ 'shape' => 'VpcAttributeName', ],
				'VpcId'     => [ 'shape' => 'String', ],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeVpcAttributeResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'VpcId'              => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'EnableDnsHostnames' => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'enableDnsHostnames',
				],
				'EnableDnsSupport'   => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'enableDnsSupport',
				],
			],
		],
		'DescribeVpcClassicLinkDnsSupportMaxResults'                     => [
			'type' => 'integer',
			'max'  => 255,
			'min'  => 5,
		],
		'DescribeVpcClassicLinkDnsSupportNextToken'                      => [
			'type' => 'string',
			'max'  => 1024,
			'min'  => 1,
		],
		'DescribeVpcClassicLinkDnsSupportRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'DescribeVpcClassicLinkDnsSupportMaxResults',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'DescribeVpcClassicLinkDnsSupportNextToken',
					'locationName' => 'nextToken',
				],
				'VpcIds'     => [ 'shape' => 'VpcClassicLinkIdList', ],
			],
		],
		'DescribeVpcClassicLinkDnsSupportResult'                         => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'DescribeVpcClassicLinkDnsSupportNextToken',
					'locationName' => 'nextToken',
				],
				'Vpcs'      => [
					'shape'        => 'ClassicLinkDnsSupportList',
					'locationName' => 'vpcs',
				],
			],
		],
		'DescribeVpcClassicLinkRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'Filters' => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'  => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcIds'  => [
					'shape'        => 'VpcClassicLinkIdList',
					'locationName' => 'VpcId',
				],
			],
		],
		'DescribeVpcClassicLinkResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'Vpcs' => [
					'shape'        => 'VpcClassicLinkList',
					'locationName' => 'vpcSet',
				],
			],
		],
		'DescribeVpcEndpointConnectionNotificationsRequest'              => [
			'type'    => 'structure',
			'members' => [
				'DryRun'                   => [ 'shape' => 'Boolean', ],
				'ConnectionNotificationId' => [ 'shape' => 'String', ],
				'Filters'                  => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'               => [ 'shape' => 'Integer', ],
				'NextToken'                => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointConnectionNotificationsResult'               => [
			'type'    => 'structure',
			'members' => [
				'ConnectionNotificationSet' => [
					'shape'        => 'ConnectionNotificationSet',
					'locationName' => 'connectionNotificationSet',
				],
				'NextToken'                 => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcEndpointConnectionsRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointConnectionsResult'                           => [
			'type'    => 'structure',
			'members' => [
				'VpcEndpointConnections' => [
					'shape'        => 'VpcEndpointConnectionSet',
					'locationName' => 'vpcEndpointConnectionSet',
				],
				'NextToken'              => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcEndpointServiceConfigurationsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'ServiceIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ServiceId',
				],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointServiceConfigurationsResult'                 => [
			'type'    => 'structure',
			'members' => [
				'ServiceConfigurations' => [
					'shape'        => 'ServiceConfigurationSet',
					'locationName' => 'serviceConfigurationSet',
				],
				'NextToken'             => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcEndpointServicePermissionsRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ServiceId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'ServiceId'  => [ 'shape' => 'String', ],
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults' => [ 'shape' => 'Integer', ],
				'NextToken'  => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointServicePermissionsResult'                    => [
			'type'    => 'structure',
			'members' => [
				'AllowedPrincipals' => [
					'shape'        => 'AllowedPrincipalSet',
					'locationName' => 'allowedPrincipals',
				],
				'NextToken'         => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcEndpointServicesRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'DryRun'       => [ 'shape' => 'Boolean', ],
				'ServiceNames' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'ServiceName',
				],
				'Filters'      => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'   => [ 'shape' => 'Integer', ],
				'NextToken'    => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointServicesResult'                              => [
			'type'    => 'structure',
			'members' => [
				'ServiceNames'   => [
					'shape'        => 'ValueStringList',
					'locationName' => 'serviceNameSet',
				],
				'ServiceDetails' => [
					'shape'        => 'ServiceDetailSet',
					'locationName' => 'serviceDetailSet',
				],
				'NextToken'      => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcEndpointsRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'VpcEndpointIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'VpcEndpointId',
				],
				'Filters'        => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'     => [ 'shape' => 'Integer', ],
				'NextToken'      => [ 'shape' => 'String', ],
			],
		],
		'DescribeVpcEndpointsResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'VpcEndpoints' => [
					'shape'        => 'VpcEndpointSet',
					'locationName' => 'vpcEndpointSet',
				],
				'NextToken'    => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcPeeringConnectionsMaxResults'                        => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeVpcPeeringConnectionsRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'Filters'                 => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'DryRun'                  => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcPeeringConnectionIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'VpcPeeringConnectionId',
				],
				'NextToken'               => [ 'shape' => 'String', ],
				'MaxResults'              => [ 'shape' => 'DescribeVpcPeeringConnectionsMaxResults', ],
			],
		],
		'DescribeVpcPeeringConnectionsResult'                            => [
			'type'    => 'structure',
			'members' => [
				'VpcPeeringConnections' => [
					'shape'        => 'VpcPeeringConnectionList',
					'locationName' => 'vpcPeeringConnectionSet',
				],
				'NextToken'             => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpcsMaxResults'                                         => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'DescribeVpcsRequest'                                            => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'VpcIds'     => [
					'shape'        => 'VpcIdStringList',
					'locationName' => 'VpcId',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NextToken'  => [ 'shape' => 'String', ],
				'MaxResults' => [ 'shape' => 'DescribeVpcsMaxResults', ],
			],
		],
		'DescribeVpcsResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'Vpcs'      => [
					'shape'        => 'VpcList',
					'locationName' => 'vpcSet',
				],
				'NextToken' => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeVpnConnectionsRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'Filters'          => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'VpnConnectionIds' => [
					'shape'        => 'VpnConnectionIdStringList',
					'locationName' => 'VpnConnectionId',
				],
				'DryRun'           => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeVpnConnectionsResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'VpnConnections' => [
					'shape'        => 'VpnConnectionList',
					'locationName' => 'vpnConnectionSet',
				],
			],
		],
		'DescribeVpnGatewaysRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'Filters'       => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'VpnGatewayIds' => [
					'shape'        => 'VpnGatewayIdStringList',
					'locationName' => 'VpnGatewayId',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DescribeVpnGatewaysResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'VpnGateways' => [
					'shape'        => 'VpnGatewayList',
					'locationName' => 'vpnGatewaySet',
				],
			],
		],
		'DetachClassicLinkVpcRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', 'VpcId', ],
			'members'  => [
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'VpcId'      => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'DetachClassicLinkVpcResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DetachInternetGatewayRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'InternetGatewayId', 'VpcId', ],
			'members'  => [
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'internetGatewayId',
				],
				'VpcId'             => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'DetachNetworkInterfaceRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'AttachmentId', ],
			'members'  => [
				'AttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'attachmentId',
				],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Force'        => [
					'shape'        => 'Boolean',
					'locationName' => 'force',
				],
			],
		],
		'DetachVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'Device'     => [ 'shape' => 'String', ],
				'Force'      => [ 'shape' => 'Boolean', ],
				'InstanceId' => [ 'shape' => 'String', ],
				'VolumeId'   => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DetachVpnGatewayRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'VpcId', 'VpnGatewayId', ],
			'members'  => [
				'VpcId'        => [ 'shape' => 'String', ],
				'VpnGatewayId' => [ 'shape' => 'String', ],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DeviceType'                                                     => [
			'type' => 'string',
			'enum' => [ 'ebs', 'instance-store', ],
		],
		'DhcpConfiguration'                                              => [
			'type'    => 'structure',
			'members' => [
				'Key'    => [
					'shape'        => 'String',
					'locationName' => 'key',
				],
				'Values' => [
					'shape'        => 'DhcpConfigurationValueList',
					'locationName' => 'valueSet',
				],
			],
		],
		'DhcpConfigurationList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DhcpConfiguration',
				'locationName' => 'item',
			],
		],
		'DhcpConfigurationValueList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AttributeValue',
				'locationName' => 'item',
			],
		],
		'DhcpOptions'                                                    => [
			'type'    => 'structure',
			'members' => [
				'DhcpConfigurations' => [
					'shape'        => 'DhcpConfigurationList',
					'locationName' => 'dhcpConfigurationSet',
				],
				'DhcpOptionsId'      => [
					'shape'        => 'String',
					'locationName' => 'dhcpOptionsId',
				],
				'OwnerId'            => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Tags'               => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'DhcpOptionsIdStringList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'DhcpOptionsId',
			],
		],
		'DhcpOptionsList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DhcpOptions',
				'locationName' => 'item',
			],
		],
		'DirectoryServiceAuthentication'                                 => [
			'type'    => 'structure',
			'members' => [
				'DirectoryId' => [
					'shape'        => 'String',
					'locationName' => 'directoryId',
				],
			],
		],
		'DirectoryServiceAuthenticationRequest'                          => [
			'type'    => 'structure',
			'members' => [ 'DirectoryId' => [ 'shape' => 'String', ], ],
		],
		'DisableEbsEncryptionByDefaultRequest'                           => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'DisableEbsEncryptionByDefaultResult'                            => [
			'type'    => 'structure',
			'members' => [
				'EbsEncryptionByDefault' => [
					'shape'        => 'Boolean',
					'locationName' => 'ebsEncryptionByDefault',
				],
			],
		],
		'DisableTransitGatewayRouteTablePropagationRequest'              => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'TransitGatewayAttachmentId',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'DisableTransitGatewayRouteTablePropagationResult'               => [
			'type'    => 'structure',
			'members' => [
				'Propagation' => [
					'shape'        => 'TransitGatewayPropagation',
					'locationName' => 'propagation',
				],
			],
		],
		'DisableVgwRoutePropagationRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'GatewayId', 'RouteTableId', ],
			'members'  => [
				'GatewayId'    => [ 'shape' => 'String', ],
				'RouteTableId' => [ 'shape' => 'String', ],
			],
		],
		'DisableVpcClassicLinkDnsSupportRequest'                         => [
			'type'    => 'structure',
			'members' => [ 'VpcId' => [ 'shape' => 'String', ], ],
		],
		'DisableVpcClassicLinkDnsSupportResult'                          => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DisableVpcClassicLinkRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcId'  => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'DisableVpcClassicLinkResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'DisassociateAddressRequest'                                     => [
			'type'    => 'structure',
			'members' => [
				'AssociationId' => [ 'shape' => 'String', ],
				'PublicIp'      => [ 'shape' => 'String', ],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DisassociateClientVpnTargetNetworkRequest'                      => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'AssociationId',
			],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'AssociationId'       => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'DisassociateClientVpnTargetNetworkResult'                       => [
			'type'    => 'structure',
			'members' => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'Status'        => [
					'shape'        => 'AssociationStatus',
					'locationName' => 'status',
				],
			],
		],
		'DisassociateIamInstanceProfileRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'AssociationId', ],
			'members'  => [ 'AssociationId' => [ 'shape' => 'String', ], ],
		],
		'DisassociateIamInstanceProfileResult'                           => [
			'type'    => 'structure',
			'members' => [
				'IamInstanceProfileAssociation' => [
					'shape'        => 'IamInstanceProfileAssociation',
					'locationName' => 'iamInstanceProfileAssociation',
				],
			],
		],
		'DisassociateRouteTableRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'AssociationId', ],
			'members'  => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'DisassociateSubnetCidrBlockRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'AssociationId', ],
			'members'  => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
			],
		],
		'DisassociateSubnetCidrBlockResult'                              => [
			'type'    => 'structure',
			'members' => [
				'Ipv6CidrBlockAssociation' => [
					'shape'        => 'SubnetIpv6CidrBlockAssociation',
					'locationName' => 'ipv6CidrBlockAssociation',
				],
				'SubnetId'                 => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'DisassociateTransitGatewayRouteTableRequest'                    => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'TransitGatewayAttachmentId',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'DisassociateTransitGatewayRouteTableResult'                     => [
			'type'    => 'structure',
			'members' => [
				'Association' => [
					'shape'        => 'TransitGatewayAssociation',
					'locationName' => 'association',
				],
			],
		],
		'DisassociateVpcCidrBlockRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'AssociationId', ],
			'members'  => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
			],
		],
		'DisassociateVpcCidrBlockResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'Ipv6CidrBlockAssociation' => [
					'shape'        => 'VpcIpv6CidrBlockAssociation',
					'locationName' => 'ipv6CidrBlockAssociation',
				],
				'CidrBlockAssociation'     => [
					'shape'        => 'VpcCidrBlockAssociation',
					'locationName' => 'cidrBlockAssociation',
				],
				'VpcId'                    => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'DiskImage'                                                      => [
			'type'    => 'structure',
			'members' => [
				'Description' => [ 'shape' => 'String', ],
				'Image'       => [ 'shape' => 'DiskImageDetail', ],
				'Volume'      => [ 'shape' => 'VolumeDetail', ],
			],
		],
		'DiskImageDescription'                                           => [
			'type'    => 'structure',
			'members' => [
				'Checksum'          => [
					'shape'        => 'String',
					'locationName' => 'checksum',
				],
				'Format'            => [
					'shape'        => 'DiskImageFormat',
					'locationName' => 'format',
				],
				'ImportManifestUrl' => [
					'shape'        => 'String',
					'locationName' => 'importManifestUrl',
				],
				'Size'              => [
					'shape'        => 'Long',
					'locationName' => 'size',
				],
			],
		],
		'DiskImageDetail'                                                => [
			'type'     => 'structure',
			'required' => [
				'Bytes',
				'Format',
				'ImportManifestUrl',
			],
			'members'  => [
				'Bytes'             => [
					'shape'        => 'Long',
					'locationName' => 'bytes',
				],
				'Format'            => [
					'shape'        => 'DiskImageFormat',
					'locationName' => 'format',
				],
				'ImportManifestUrl' => [
					'shape'        => 'String',
					'locationName' => 'importManifestUrl',
				],
			],
		],
		'DiskImageFormat'                                                => [
			'type' => 'string',
			'enum' => [ 'VMDK', 'RAW', 'VHD', ],
		],
		'DiskImageList'                                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DiskImage', ],
		],
		'DiskImageVolumeDescription'                                     => [
			'type'    => 'structure',
			'members' => [
				'Id'   => [
					'shape'        => 'String',
					'locationName' => 'id',
				],
				'Size' => [
					'shape'        => 'Long',
					'locationName' => 'size',
				],
			],
		],
		'DnsEntry'                                                       => [
			'type'    => 'structure',
			'members' => [
				'DnsName'      => [
					'shape'        => 'String',
					'locationName' => 'dnsName',
				],
				'HostedZoneId' => [
					'shape'        => 'String',
					'locationName' => 'hostedZoneId',
				],
			],
		],
		'DnsEntrySet'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DnsEntry',
				'locationName' => 'item',
			],
		],
		'DnsServersOptionsModifyStructure'                               => [
			'type'    => 'structure',
			'members' => [
				'CustomDnsServers' => [ 'shape' => 'ValueStringList', ],
				'Enabled'          => [ 'shape' => 'Boolean', ],
			],
		],
		'DnsSupportValue'                                                => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'DomainType'                                                     => [
			'type' => 'string',
			'enum' => [ 'vpc', 'standard', ],
		],
		'Double'                                                         => [ 'type' => 'double', ],
		'EbsBlockDevice'                                                 => [
			'type'    => 'structure',
			'members' => [
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'Iops'                => [
					'shape'        => 'Integer',
					'locationName' => 'iops',
				],
				'SnapshotId'          => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
				'VolumeSize'          => [
					'shape'        => 'Integer',
					'locationName' => 'volumeSize',
				],
				'VolumeType'          => [
					'shape'        => 'VolumeType',
					'locationName' => 'volumeType',
				],
				'Encrypted'           => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'KmsKeyId'            => [ 'shape' => 'String', ],
			],
		],
		'EbsInstanceBlockDevice'                                         => [
			'type'    => 'structure',
			'members' => [
				'AttachTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'attachTime',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'Status'              => [
					'shape'        => 'AttachmentStatus',
					'locationName' => 'status',
				],
				'VolumeId'            => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
			],
		],
		'EbsInstanceBlockDeviceSpecification'                            => [
			'type'    => 'structure',
			'members' => [
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'VolumeId'            => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
			],
		],
		'EgressOnlyInternetGateway'                                      => [
			'type'    => 'structure',
			'members' => [
				'Attachments'                 => [
					'shape'        => 'InternetGatewayAttachmentList',
					'locationName' => 'attachmentSet',
				],
				'EgressOnlyInternetGatewayId' => [
					'shape'        => 'EgressOnlyInternetGatewayId',
					'locationName' => 'egressOnlyInternetGatewayId',
				],
			],
		],
		'EgressOnlyInternetGatewayId'                                    => [ 'type' => 'string', ],
		'EgressOnlyInternetGatewayIdList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EgressOnlyInternetGatewayId',
				'locationName' => 'item',
			],
		],
		'EgressOnlyInternetGatewayList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EgressOnlyInternetGateway',
				'locationName' => 'item',
			],
		],
		'ElasticGpuAssociation'                                          => [
			'type'    => 'structure',
			'members' => [
				'ElasticGpuId'               => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuId',
				],
				'ElasticGpuAssociationId'    => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuAssociationId',
				],
				'ElasticGpuAssociationState' => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuAssociationState',
				],
				'ElasticGpuAssociationTime'  => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuAssociationTime',
				],
			],
		],
		'ElasticGpuAssociationList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticGpuAssociation',
				'locationName' => 'item',
			],
		],
		'ElasticGpuHealth'                                               => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ElasticGpuStatus',
					'locationName' => 'status',
				],
			],
		],
		'ElasticGpuIdSet'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ElasticGpuSet'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticGpus',
				'locationName' => 'item',
			],
		],
		'ElasticGpuSpecification'                                        => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [ 'Type' => [ 'shape' => 'String', ], ],
		],
		'ElasticGpuSpecificationList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticGpuSpecification',
				'locationName' => 'ElasticGpuSpecification',
			],
		],
		'ElasticGpuSpecificationResponse'                                => [
			'type'    => 'structure',
			'members' => [
				'Type' => [
					'shape'        => 'String',
					'locationName' => 'type',
				],
			],
		],
		'ElasticGpuSpecificationResponseList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticGpuSpecificationResponse',
				'locationName' => 'item',
			],
		],
		'ElasticGpuSpecifications'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticGpuSpecification',
				'locationName' => 'item',
			],
		],
		'ElasticGpuState'                                                => [
			'type' => 'string',
			'enum' => [ 'ATTACHED', ],
		],
		'ElasticGpuStatus'                                               => [
			'type' => 'string',
			'enum' => [ 'OK', 'IMPAIRED', ],
		],
		'ElasticGpus'                                                    => [
			'type'    => 'structure',
			'members' => [
				'ElasticGpuId'     => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuId',
				],
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'ElasticGpuType'   => [
					'shape'        => 'String',
					'locationName' => 'elasticGpuType',
				],
				'ElasticGpuHealth' => [
					'shape'        => 'ElasticGpuHealth',
					'locationName' => 'elasticGpuHealth',
				],
				'ElasticGpuState'  => [
					'shape'        => 'ElasticGpuState',
					'locationName' => 'elasticGpuState',
				],
				'InstanceId'       => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'ElasticInferenceAccelerator'                                    => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [ 'Type' => [ 'shape' => 'String', ], ],
		],
		'ElasticInferenceAcceleratorAssociation'                         => [
			'type'    => 'structure',
			'members' => [
				'ElasticInferenceAcceleratorArn'              => [
					'shape'        => 'String',
					'locationName' => 'elasticInferenceAcceleratorArn',
				],
				'ElasticInferenceAcceleratorAssociationId'    => [
					'shape'        => 'String',
					'locationName' => 'elasticInferenceAcceleratorAssociationId',
				],
				'ElasticInferenceAcceleratorAssociationState' => [
					'shape'        => 'String',
					'locationName' => 'elasticInferenceAcceleratorAssociationState',
				],
				'ElasticInferenceAcceleratorAssociationTime'  => [
					'shape'        => 'DateTime',
					'locationName' => 'elasticInferenceAcceleratorAssociationTime',
				],
			],
		],
		'ElasticInferenceAcceleratorAssociationList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticInferenceAcceleratorAssociation',
				'locationName' => 'item',
			],
		],
		'ElasticInferenceAccelerators'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ElasticInferenceAccelerator',
				'locationName' => 'item',
			],
		],
		'EnableEbsEncryptionByDefaultRequest'                            => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'EnableEbsEncryptionByDefaultResult'                             => [
			'type'    => 'structure',
			'members' => [
				'EbsEncryptionByDefault' => [
					'shape'        => 'Boolean',
					'locationName' => 'ebsEncryptionByDefault',
				],
			],
		],
		'EnableTransitGatewayRouteTablePropagationRequest'               => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'TransitGatewayAttachmentId',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'EnableTransitGatewayRouteTablePropagationResult'                => [
			'type'    => 'structure',
			'members' => [
				'Propagation' => [
					'shape'        => 'TransitGatewayPropagation',
					'locationName' => 'propagation',
				],
			],
		],
		'EnableVgwRoutePropagationRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'GatewayId', 'RouteTableId', ],
			'members'  => [
				'GatewayId'    => [ 'shape' => 'String', ],
				'RouteTableId' => [ 'shape' => 'String', ],
			],
		],
		'EnableVolumeIORequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VolumeId' => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
			],
		],
		'EnableVpcClassicLinkDnsSupportRequest'                          => [
			'type'    => 'structure',
			'members' => [ 'VpcId' => [ 'shape' => 'String', ], ],
		],
		'EnableVpcClassicLinkDnsSupportResult'                           => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'EnableVpcClassicLinkRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'DryRun' => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcId'  => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'EnableVpcClassicLinkResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'EndDateType'                                                    => [
			'type' => 'string',
			'enum' => [ 'unlimited', 'limited', ],
		],
		'EndpointSet'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClientVpnEndpoint',
				'locationName' => 'item',
			],
		],
		'EventCode'                                                      => [
			'type' => 'string',
			'enum' => [
				'instance-reboot',
				'system-reboot',
				'system-maintenance',
				'instance-retirement',
				'instance-stop',
			],
		],
		'EventInformation'                                               => [
			'type'    => 'structure',
			'members' => [
				'EventDescription' => [
					'shape'        => 'String',
					'locationName' => 'eventDescription',
				],
				'EventSubType'     => [
					'shape'        => 'String',
					'locationName' => 'eventSubType',
				],
				'InstanceId'       => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'EventType'                                                      => [
			'type' => 'string',
			'enum' => [
				'instanceChange',
				'fleetRequestChange',
				'error',
				'information',
			],
		],
		'ExcessCapacityTerminationPolicy'                                => [
			'type' => 'string',
			'enum' => [ 'noTermination', 'default', ],
		],
		'ExecutableByStringList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ExecutableBy',
			],
		],
		'ExportClientVpnClientCertificateRevocationListRequest'          => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'ExportClientVpnClientCertificateRevocationListResult'           => [
			'type'    => 'structure',
			'members' => [
				'CertificateRevocationList' => [
					'shape'        => 'String',
					'locationName' => 'certificateRevocationList',
				],
				'Status'                    => [
					'shape'        => 'ClientCertificateRevocationListStatus',
					'locationName' => 'status',
				],
			],
		],
		'ExportClientVpnClientConfigurationRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'ExportClientVpnClientConfigurationResult'                       => [
			'type'    => 'structure',
			'members' => [
				'ClientConfiguration' => [
					'shape'        => 'String',
					'locationName' => 'clientConfiguration',
				],
			],
		],
		'ExportEnvironment'                                              => [
			'type' => 'string',
			'enum' => [ 'citrix', 'vmware', 'microsoft', ],
		],
		'ExportTask'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Description'           => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'ExportTaskId'          => [
					'shape'        => 'String',
					'locationName' => 'exportTaskId',
				],
				'ExportToS3Task'        => [
					'shape'        => 'ExportToS3Task',
					'locationName' => 'exportToS3',
				],
				'InstanceExportDetails' => [
					'shape'        => 'InstanceExportDetails',
					'locationName' => 'instanceExport',
				],
				'State'                 => [
					'shape'        => 'ExportTaskState',
					'locationName' => 'state',
				],
				'StatusMessage'         => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
			],
		],
		'ExportTaskIdStringList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ExportTaskId',
			],
		],
		'ExportTaskList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ExportTask',
				'locationName' => 'item',
			],
		],
		'ExportTaskState'                                                => [
			'type' => 'string',
			'enum' => [
				'active',
				'cancelling',
				'cancelled',
				'completed',
			],
		],
		'ExportToS3Task'                                                 => [
			'type'    => 'structure',
			'members' => [
				'ContainerFormat' => [
					'shape'        => 'ContainerFormat',
					'locationName' => 'containerFormat',
				],
				'DiskImageFormat' => [
					'shape'        => 'DiskImageFormat',
					'locationName' => 'diskImageFormat',
				],
				'S3Bucket'        => [
					'shape'        => 'String',
					'locationName' => 's3Bucket',
				],
				'S3Key'           => [
					'shape'        => 'String',
					'locationName' => 's3Key',
				],
			],
		],
		'ExportToS3TaskSpecification'                                    => [
			'type'    => 'structure',
			'members' => [
				'ContainerFormat' => [
					'shape'        => 'ContainerFormat',
					'locationName' => 'containerFormat',
				],
				'DiskImageFormat' => [
					'shape'        => 'DiskImageFormat',
					'locationName' => 'diskImageFormat',
				],
				'S3Bucket'        => [
					'shape'        => 'String',
					'locationName' => 's3Bucket',
				],
				'S3Prefix'        => [
					'shape'        => 'String',
					'locationName' => 's3Prefix',
				],
			],
		],
		'ExportTransitGatewayRoutesRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'S3Bucket',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'S3Bucket'                   => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'ExportTransitGatewayRoutesResult'                               => [
			'type'    => 'structure',
			'members' => [
				'S3Location' => [
					'shape'        => 'String',
					'locationName' => 's3Location',
				],
			],
		],
		'Filter'                                                         => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [ 'shape' => 'String', ],
				'Values' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'Value',
				],
			],
		],
		'FilterList'                                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Filter',
				'locationName' => 'Filter',
			],
		],
		'FleetActivityStatus'                                            => [
			'type' => 'string',
			'enum' => [
				'error',
				'pending-fulfillment',
				'pending-termination',
				'fulfilled',
			],
		],
		'FleetData'                                                      => [
			'type'    => 'structure',
			'members' => [
				'ActivityStatus'                   => [
					'shape'        => 'FleetActivityStatus',
					'locationName' => 'activityStatus',
				],
				'CreateTime'                       => [ 'shape' => 'DateTime', 'locationName' => 'createTime', ],
				'FleetId'                          => [ 'shape' => 'FleetIdentifier', 'locationName' => 'fleetId', ],
				'FleetState'                       => [ 'shape' => 'FleetStateCode', 'locationName' => 'fleetState', ],
				'ClientToken'                      => [ 'shape' => 'String', 'locationName' => 'clientToken', ],
				'ExcessCapacityTerminationPolicy'  => [
					'shape'        => 'FleetExcessCapacityTerminationPolicy',
					'locationName' => 'excessCapacityTerminationPolicy',
				],
				'FulfilledCapacity'                => [ 'shape' => 'Double', 'locationName' => 'fulfilledCapacity', ],
				'FulfilledOnDemandCapacity'        => [
					'shape'        => 'Double',
					'locationName' => 'fulfilledOnDemandCapacity',
				],
				'LaunchTemplateConfigs'            => [
					'shape'        => 'FleetLaunchTemplateConfigList',
					'locationName' => 'launchTemplateConfigs',
				],
				'TargetCapacitySpecification'      => [
					'shape'        => 'TargetCapacitySpecification',
					'locationName' => 'targetCapacitySpecification',
				],
				'TerminateInstancesWithExpiration' => [
					'shape'        => 'Boolean',
					'locationName' => 'terminateInstancesWithExpiration',
				],
				'Type'                             => [ 'shape' => 'FleetType', 'locationName' => 'type', ],
				'ValidFrom'                        => [ 'shape' => 'DateTime', 'locationName' => 'validFrom', ],
				'ValidUntil'                       => [ 'shape' => 'DateTime', 'locationName' => 'validUntil', ],
				'ReplaceUnhealthyInstances'        => [
					'shape'        => 'Boolean',
					'locationName' => 'replaceUnhealthyInstances',
				],
				'SpotOptions'                      => [ 'shape' => 'SpotOptions', 'locationName' => 'spotOptions', ],
				'OnDemandOptions'                  => [
					'shape'        => 'OnDemandOptions',
					'locationName' => 'onDemandOptions',
				],
				'Tags'                             => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'Errors'                           => [
					'shape'        => 'DescribeFleetsErrorSet',
					'locationName' => 'errorSet',
				],
				'Instances'                        => [
					'shape'        => 'DescribeFleetsInstancesSet',
					'locationName' => 'fleetInstanceSet',
				],
			],
		],
		'FleetEventType'                                                 => [
			'type' => 'string',
			'enum' => [
				'instance-change',
				'fleet-change',
				'service-error',
			],
		],
		'FleetExcessCapacityTerminationPolicy'                           => [
			'type' => 'string',
			'enum' => [ 'no-termination', 'termination', ],
		],
		'FleetIdSet'                                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FleetIdentifier', ],
		],
		'FleetIdentifier'                                                => [ 'type' => 'string', ],
		'FleetLaunchTemplateConfig'                                      => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateSpecification' => [
					'shape'        => 'FleetLaunchTemplateSpecification',
					'locationName' => 'launchTemplateSpecification',
				],
				'Overrides'                   => [
					'shape'        => 'FleetLaunchTemplateOverridesList',
					'locationName' => 'overrides',
				],
			],
		],
		'FleetLaunchTemplateConfigList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FleetLaunchTemplateConfig',
				'locationName' => 'item',
			],
		],
		'FleetLaunchTemplateConfigListRequest'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FleetLaunchTemplateConfigRequest',
				'locationName' => 'item',
			],
			'max'    => 50,
		],
		'FleetLaunchTemplateConfigRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateSpecification' => [ 'shape' => 'FleetLaunchTemplateSpecificationRequest', ],
				'Overrides'                   => [ 'shape' => 'FleetLaunchTemplateOverridesListRequest', ],
			],
		],
		'FleetLaunchTemplateOverrides'                                   => [
			'type'    => 'structure',
			'members' => [
				'InstanceType'     => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'MaxPrice'         => [
					'shape'        => 'String',
					'locationName' => 'maxPrice',
				],
				'SubnetId'         => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'WeightedCapacity' => [
					'shape'        => 'Double',
					'locationName' => 'weightedCapacity',
				],
				'Priority'         => [
					'shape'        => 'Double',
					'locationName' => 'priority',
				],
				'Placement'        => [
					'shape'        => 'PlacementResponse',
					'locationName' => 'placement',
				],
			],
		],
		'FleetLaunchTemplateOverridesList'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FleetLaunchTemplateOverrides',
				'locationName' => 'item',
			],
		],
		'FleetLaunchTemplateOverridesListRequest'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FleetLaunchTemplateOverridesRequest',
				'locationName' => 'item',
			],
			'max'    => 50,
		],
		'FleetLaunchTemplateOverridesRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'InstanceType'     => [ 'shape' => 'InstanceType', ],
				'MaxPrice'         => [ 'shape' => 'String', ],
				'SubnetId'         => [ 'shape' => 'String', ],
				'AvailabilityZone' => [ 'shape' => 'String', ],
				'WeightedCapacity' => [ 'shape' => 'Double', ],
				'Priority'         => [ 'shape' => 'Double', ],
				'Placement'        => [ 'shape' => 'Placement', ],
			],
		],
		'FleetLaunchTemplateSpecification'                               => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateId',
				],
				'LaunchTemplateName' => [
					'shape'        => 'LaunchTemplateName',
					'locationName' => 'launchTemplateName',
				],
				'Version'            => [
					'shape'        => 'String',
					'locationName' => 'version',
				],
			],
		],
		'FleetLaunchTemplateSpecificationRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'Version'            => [ 'shape' => 'String', ],
			],
		],
		'FleetOnDemandAllocationStrategy'                                => [
			'type' => 'string',
			'enum' => [ 'lowest-price', 'prioritized', ],
		],
		'FleetSet'                                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FleetData',
				'locationName' => 'item',
			],
		],
		'FleetStateCode'                                                 => [
			'type' => 'string',
			'enum' => [
				'submitted',
				'active',
				'deleted',
				'failed',
				'deleted-running',
				'deleted-terminating',
				'modifying',
			],
		],
		'FleetType'                                                      => [
			'type' => 'string',
			'enum' => [ 'request', 'maintain', 'instant', ],
		],
		'Float'                                                          => [ 'type' => 'float', ],
		'FlowLog'                                                        => [
			'type'    => 'structure',
			'members' => [
				'CreationTime'             => [
					'shape'        => 'DateTime',
					'locationName' => 'creationTime',
				],
				'DeliverLogsErrorMessage'  => [
					'shape'        => 'String',
					'locationName' => 'deliverLogsErrorMessage',
				],
				'DeliverLogsPermissionArn' => [
					'shape'        => 'String',
					'locationName' => 'deliverLogsPermissionArn',
				],
				'DeliverLogsStatus'        => [
					'shape'        => 'String',
					'locationName' => 'deliverLogsStatus',
				],
				'FlowLogId'                => [
					'shape'        => 'String',
					'locationName' => 'flowLogId',
				],
				'FlowLogStatus'            => [
					'shape'        => 'String',
					'locationName' => 'flowLogStatus',
				],
				'LogGroupName'             => [
					'shape'        => 'String',
					'locationName' => 'logGroupName',
				],
				'ResourceId'               => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'TrafficType'              => [
					'shape'        => 'TrafficType',
					'locationName' => 'trafficType',
				],
				'LogDestinationType'       => [
					'shape'        => 'LogDestinationType',
					'locationName' => 'logDestinationType',
				],
				'LogDestination'           => [
					'shape'        => 'String',
					'locationName' => 'logDestination',
				],
			],
		],
		'FlowLogSet'                                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FlowLog',
				'locationName' => 'item',
			],
		],
		'FlowLogsResourceType'                                           => [
			'type' => 'string',
			'enum' => [ 'VPC', 'Subnet', 'NetworkInterface', ],
		],
		'FpgaImage'                                                      => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageId'          => [ 'shape' => 'String', 'locationName' => 'fpgaImageId', ],
				'FpgaImageGlobalId'    => [ 'shape' => 'String', 'locationName' => 'fpgaImageGlobalId', ],
				'Name'                 => [ 'shape' => 'String', 'locationName' => 'name', ],
				'Description'          => [ 'shape' => 'String', 'locationName' => 'description', ],
				'ShellVersion'         => [ 'shape' => 'String', 'locationName' => 'shellVersion', ],
				'PciId'                => [ 'shape' => 'PciId', 'locationName' => 'pciId', ],
				'State'                => [ 'shape' => 'FpgaImageState', 'locationName' => 'state', ],
				'CreateTime'           => [ 'shape' => 'DateTime', 'locationName' => 'createTime', ],
				'UpdateTime'           => [ 'shape' => 'DateTime', 'locationName' => 'updateTime', ],
				'OwnerId'              => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
				'OwnerAlias'           => [ 'shape' => 'String', 'locationName' => 'ownerAlias', ],
				'ProductCodes'         => [ 'shape' => 'ProductCodeList', 'locationName' => 'productCodes', ],
				'Tags'                 => [ 'shape' => 'TagList', 'locationName' => 'tags', ],
				'Public'               => [ 'shape' => 'Boolean', 'locationName' => 'public', ],
				'DataRetentionSupport' => [ 'shape' => 'Boolean', 'locationName' => 'dataRetentionSupport', ],
			],
		],
		'FpgaImageAttribute'                                             => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageId'     => [
					'shape'        => 'String',
					'locationName' => 'fpgaImageId',
				],
				'Name'            => [
					'shape'        => 'String',
					'locationName' => 'name',
				],
				'Description'     => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'LoadPermissions' => [
					'shape'        => 'LoadPermissionList',
					'locationName' => 'loadPermissions',
				],
				'ProductCodes'    => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
			],
		],
		'FpgaImageAttributeName'                                         => [
			'type' => 'string',
			'enum' => [
				'description',
				'name',
				'loadPermission',
				'productCodes',
			],
		],
		'FpgaImageIdList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'FpgaImageList'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FpgaImage',
				'locationName' => 'item',
			],
		],
		'FpgaImageState'                                                 => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'FpgaImageStateCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'FpgaImageStateCode'                                             => [
			'type' => 'string',
			'enum' => [
				'pending',
				'failed',
				'available',
				'unavailable',
			],
		],
		'GatewayType'                                                    => [
			'type' => 'string',
			'enum' => [ 'ipsec.1', ],
		],
		'GetConsoleOutputRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'InstanceId' => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Latest'     => [ 'shape' => 'Boolean', ],
			],
		],
		'GetConsoleOutputResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Output'     => [
					'shape'        => 'String',
					'locationName' => 'output',
				],
				'Timestamp'  => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'GetConsoleScreenshotRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'InstanceId' => [ 'shape' => 'String', ],
				'WakeUp'     => [ 'shape' => 'Boolean', ],
			],
		],
		'GetConsoleScreenshotResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'ImageData'  => [
					'shape'        => 'String',
					'locationName' => 'imageData',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'GetEbsDefaultKmsKeyIdRequest'                                   => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'GetEbsDefaultKmsKeyIdResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'KmsKeyId' => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
			],
		],
		'GetEbsEncryptionByDefaultRequest'                               => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'GetEbsEncryptionByDefaultResult'                                => [
			'type'    => 'structure',
			'members' => [
				'EbsEncryptionByDefault' => [
					'shape'        => 'Boolean',
					'locationName' => 'ebsEncryptionByDefault',
				],
			],
		],
		'GetHostReservationPurchasePreviewRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'HostIdSet', 'OfferingId', ],
			'members'  => [
				'HostIdSet'  => [ 'shape' => 'RequestHostIdSet', ],
				'OfferingId' => [ 'shape' => 'String', ],
			],
		],
		'GetHostReservationPurchasePreviewResult'                        => [
			'type'    => 'structure',
			'members' => [
				'CurrencyCode'      => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Purchase'          => [
					'shape'        => 'PurchaseSet',
					'locationName' => 'purchase',
				],
				'TotalHourlyPrice'  => [
					'shape'        => 'String',
					'locationName' => 'totalHourlyPrice',
				],
				'TotalUpfrontPrice' => [
					'shape'        => 'String',
					'locationName' => 'totalUpfrontPrice',
				],
			],
		],
		'GetLaunchTemplateDataRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'InstanceId' => [ 'shape' => 'String', ],
			],
		],
		'GetLaunchTemplateDataResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateData' => [
					'shape'        => 'ResponseLaunchTemplateData',
					'locationName' => 'launchTemplateData',
				],
			],
		],
		'GetPasswordDataRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'InstanceId' => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'GetPasswordDataResult'                                          => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'   => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'PasswordData' => [
					'shape'        => 'String',
					'locationName' => 'passwordData',
				],
				'Timestamp'    => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'GetReservedInstancesExchangeQuoteRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ReservedInstanceIds', ],
			'members'  => [
				'DryRun'               => [ 'shape' => 'Boolean', ],
				'ReservedInstanceIds'  => [
					'shape'        => 'ReservedInstanceIdSet',
					'locationName' => 'ReservedInstanceId',
				],
				'TargetConfigurations' => [
					'shape'        => 'TargetConfigurationRequestSet',
					'locationName' => 'TargetConfiguration',
				],
			],
		],
		'GetReservedInstancesExchangeQuoteResult'                        => [
			'type'    => 'structure',
			'members' => [
				'CurrencyCode'                        => [
					'shape'        => 'String',
					'locationName' => 'currencyCode',
				],
				'IsValidExchange'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'isValidExchange',
				],
				'OutputReservedInstancesWillExpireAt' => [
					'shape'        => 'DateTime',
					'locationName' => 'outputReservedInstancesWillExpireAt',
				],
				'PaymentDue'                          => [
					'shape'        => 'String',
					'locationName' => 'paymentDue',
				],
				'ReservedInstanceValueRollup'         => [
					'shape'        => 'ReservationValue',
					'locationName' => 'reservedInstanceValueRollup',
				],
				'ReservedInstanceValueSet'            => [
					'shape'        => 'ReservedInstanceReservationValueSet',
					'locationName' => 'reservedInstanceValueSet',
				],
				'TargetConfigurationValueRollup'      => [
					'shape'        => 'ReservationValue',
					'locationName' => 'targetConfigurationValueRollup',
				],
				'TargetConfigurationValueSet'         => [
					'shape'        => 'TargetReservationValueSet',
					'locationName' => 'targetConfigurationValueSet',
				],
				'ValidationFailureReason'             => [
					'shape'        => 'String',
					'locationName' => 'validationFailureReason',
				],
			],
		],
		'GetTransitGatewayAttachmentPropagationsRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayAttachmentId', ],
			'members'  => [
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                 => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                  => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'GetTransitGatewayAttachmentPropagationsResult'                  => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentPropagations' => [
					'shape'        => 'TransitGatewayAttachmentPropagationList',
					'locationName' => 'transitGatewayAttachmentPropagations',
				],
				'NextToken'                            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'GetTransitGatewayRouteTableAssociationsRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayRouteTableId', ],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                 => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                  => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'GetTransitGatewayRouteTableAssociationsResult'                  => [
			'type'    => 'structure',
			'members' => [
				'Associations' => [
					'shape'        => 'TransitGatewayRouteTableAssociationList',
					'locationName' => 'associations',
				],
				'NextToken'    => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'GetTransitGatewayRouteTablePropagationsRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayRouteTableId', ],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                 => [ 'shape' => 'TransitGatewayMaxResults', ],
				'NextToken'                  => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'GetTransitGatewayRouteTablePropagationsResult'                  => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTablePropagations' => [
					'shape'        => 'TransitGatewayRouteTablePropagationList',
					'locationName' => 'transitGatewayRouteTablePropagations',
				],
				'NextToken'                            => [
					'shape'        => 'String',
					'locationName' => 'nextToken',
				],
			],
		],
		'GroupIdStringList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'groupId',
			],
		],
		'GroupIdentifier'                                                => [
			'type'    => 'structure',
			'members' => [
				'GroupName' => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'GroupId'   => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
			],
		],
		'GroupIdentifierList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'GroupIdentifier',
				'locationName' => 'item',
			],
		],
		'GroupIdentifierSet'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SecurityGroupIdentifier',
				'locationName' => 'item',
			],
		],
		'GroupIds'                                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'GroupNameStringList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'GroupName',
			],
		],
		'HibernationOptions'                                             => [
			'type'    => 'structure',
			'members' => [
				'Configured' => [
					'shape'        => 'Boolean',
					'locationName' => 'configured',
				],
			],
		],
		'HibernationOptionsRequest'                                      => [
			'type'    => 'structure',
			'members' => [ 'Configured' => [ 'shape' => 'Boolean', ], ],
		],
		'HistoryRecord'                                                  => [
			'type'    => 'structure',
			'members' => [
				'EventInformation' => [
					'shape'        => 'EventInformation',
					'locationName' => 'eventInformation',
				],
				'EventType'        => [
					'shape'        => 'EventType',
					'locationName' => 'eventType',
				],
				'Timestamp'        => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'HistoryRecordEntry'                                             => [
			'type'    => 'structure',
			'members' => [
				'EventInformation' => [
					'shape'        => 'EventInformation',
					'locationName' => 'eventInformation',
				],
				'EventType'        => [
					'shape'        => 'FleetEventType',
					'locationName' => 'eventType',
				],
				'Timestamp'        => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'HistoryRecordSet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HistoryRecordEntry',
				'locationName' => 'item',
			],
		],
		'HistoryRecords'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HistoryRecord',
				'locationName' => 'item',
			],
		],
		'Host'                                                           => [
			'type'    => 'structure',
			'members' => [
				'AutoPlacement'     => [ 'shape' => 'AutoPlacement', 'locationName' => 'autoPlacement', ],
				'AvailabilityZone'  => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'AvailableCapacity' => [ 'shape' => 'AvailableCapacity', 'locationName' => 'availableCapacity', ],
				'ClientToken'       => [ 'shape' => 'String', 'locationName' => 'clientToken', ],
				'HostId'            => [ 'shape' => 'String', 'locationName' => 'hostId', ],
				'HostProperties'    => [ 'shape' => 'HostProperties', 'locationName' => 'hostProperties', ],
				'HostReservationId' => [ 'shape' => 'String', 'locationName' => 'hostReservationId', ],
				'Instances'         => [ 'shape' => 'HostInstanceList', 'locationName' => 'instances', ],
				'State'             => [ 'shape' => 'AllocationState', 'locationName' => 'state', ],
				'AllocationTime'    => [ 'shape' => 'DateTime', 'locationName' => 'allocationTime', ],
				'ReleaseTime'       => [ 'shape' => 'DateTime', 'locationName' => 'releaseTime', ],
				'Tags'              => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'HostRecovery'      => [ 'shape' => 'HostRecovery', 'locationName' => 'hostRecovery', ],
			],
		],
		'HostInstance'                                                   => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'   => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'InstanceType' => [
					'shape'        => 'String',
					'locationName' => 'instanceType',
				],
			],
		],
		'HostInstanceList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HostInstance',
				'locationName' => 'item',
			],
		],
		'HostList'                                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Host',
				'locationName' => 'item',
			],
		],
		'HostOffering'                                                   => [
			'type'    => 'structure',
			'members' => [
				'CurrencyCode'   => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Duration'       => [
					'shape'        => 'Integer',
					'locationName' => 'duration',
				],
				'HourlyPrice'    => [
					'shape'        => 'String',
					'locationName' => 'hourlyPrice',
				],
				'InstanceFamily' => [
					'shape'        => 'String',
					'locationName' => 'instanceFamily',
				],
				'OfferingId'     => [
					'shape'        => 'String',
					'locationName' => 'offeringId',
				],
				'PaymentOption'  => [
					'shape'        => 'PaymentOption',
					'locationName' => 'paymentOption',
				],
				'UpfrontPrice'   => [
					'shape'        => 'String',
					'locationName' => 'upfrontPrice',
				],
			],
		],
		'HostOfferingSet'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HostOffering',
				'locationName' => 'item',
			],
		],
		'HostProperties'                                                 => [
			'type'    => 'structure',
			'members' => [
				'Cores'        => [
					'shape'        => 'Integer',
					'locationName' => 'cores',
				],
				'InstanceType' => [
					'shape'        => 'String',
					'locationName' => 'instanceType',
				],
				'Sockets'      => [
					'shape'        => 'Integer',
					'locationName' => 'sockets',
				],
				'TotalVCpus'   => [
					'shape'        => 'Integer',
					'locationName' => 'totalVCpus',
				],
			],
		],
		'HostRecovery'                                                   => [
			'type' => 'string',
			'enum' => [ 'on', 'off', ],
		],
		'HostReservation'                                                => [
			'type'    => 'structure',
			'members' => [
				'Count'             => [ 'shape' => 'Integer', 'locationName' => 'count', ],
				'CurrencyCode'      => [ 'shape' => 'CurrencyCodeValues', 'locationName' => 'currencyCode', ],
				'Duration'          => [ 'shape' => 'Integer', 'locationName' => 'duration', ],
				'End'               => [ 'shape' => 'DateTime', 'locationName' => 'end', ],
				'HostIdSet'         => [ 'shape' => 'ResponseHostIdSet', 'locationName' => 'hostIdSet', ],
				'HostReservationId' => [ 'shape' => 'String', 'locationName' => 'hostReservationId', ],
				'HourlyPrice'       => [ 'shape' => 'String', 'locationName' => 'hourlyPrice', ],
				'InstanceFamily'    => [ 'shape' => 'String', 'locationName' => 'instanceFamily', ],
				'OfferingId'        => [ 'shape' => 'String', 'locationName' => 'offeringId', ],
				'PaymentOption'     => [ 'shape' => 'PaymentOption', 'locationName' => 'paymentOption', ],
				'Start'             => [ 'shape' => 'DateTime', 'locationName' => 'start', ],
				'State'             => [ 'shape' => 'ReservationState', 'locationName' => 'state', ],
				'UpfrontPrice'      => [ 'shape' => 'String', 'locationName' => 'upfrontPrice', ],
				'Tags'              => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'HostReservationIdSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'HostReservationSet'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HostReservation',
				'locationName' => 'item',
			],
		],
		'HostTenancy'                                                    => [
			'type' => 'string',
			'enum' => [ 'dedicated', 'host', ],
		],
		'HypervisorType'                                                 => [
			'type' => 'string',
			'enum' => [ 'ovm', 'xen', ],
		],
		'IamInstanceProfile'                                             => [
			'type'    => 'structure',
			'members' => [
				'Arn' => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
				'Id'  => [
					'shape'        => 'String',
					'locationName' => 'id',
				],
			],
		],
		'IamInstanceProfileAssociation'                                  => [
			'type'    => 'structure',
			'members' => [
				'AssociationId'      => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'InstanceId'         => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'IamInstanceProfile' => [
					'shape'        => 'IamInstanceProfile',
					'locationName' => 'iamInstanceProfile',
				],
				'State'              => [
					'shape'        => 'IamInstanceProfileAssociationState',
					'locationName' => 'state',
				],
				'Timestamp'          => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'IamInstanceProfileAssociationSet'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'IamInstanceProfileAssociation',
				'locationName' => 'item',
			],
		],
		'IamInstanceProfileAssociationState'                             => [
			'type' => 'string',
			'enum' => [
				'associating',
				'associated',
				'disassociating',
				'disassociated',
			],
		],
		'IamInstanceProfileSpecification'                                => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
				'Name' => [
					'shape'        => 'String',
					'locationName' => 'name',
				],
			],
		],
		'IcmpTypeCode'                                                   => [
			'type'    => 'structure',
			'members' => [
				'Code' => [
					'shape'        => 'Integer',
					'locationName' => 'code',
				],
				'Type' => [
					'shape'        => 'Integer',
					'locationName' => 'type',
				],
			],
		],
		'IdFormat'                                                       => [
			'type'    => 'structure',
			'members' => [
				'Deadline'   => [
					'shape'        => 'DateTime',
					'locationName' => 'deadline',
				],
				'Resource'   => [
					'shape'        => 'String',
					'locationName' => 'resource',
				],
				'UseLongIds' => [
					'shape'        => 'Boolean',
					'locationName' => 'useLongIds',
				],
			],
		],
		'IdFormatList'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'IdFormat',
				'locationName' => 'item',
			],
		],
		'Image'                                                          => [
			'type'    => 'structure',
			'members' => [
				'Architecture'        => [ 'shape' => 'ArchitectureValues', 'locationName' => 'architecture', ],
				'CreationDate'        => [ 'shape' => 'String', 'locationName' => 'creationDate', ],
				'ImageId'             => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'ImageLocation'       => [ 'shape' => 'String', 'locationName' => 'imageLocation', ],
				'ImageType'           => [ 'shape' => 'ImageTypeValues', 'locationName' => 'imageType', ],
				'Public'              => [ 'shape' => 'Boolean', 'locationName' => 'isPublic', ],
				'KernelId'            => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'OwnerId'             => [ 'shape' => 'String', 'locationName' => 'imageOwnerId', ],
				'Platform'            => [ 'shape' => 'PlatformValues', 'locationName' => 'platform', ],
				'ProductCodes'        => [ 'shape' => 'ProductCodeList', 'locationName' => 'productCodes', ],
				'RamdiskId'           => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'State'               => [ 'shape' => 'ImageState', 'locationName' => 'imageState', ],
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'Description'         => [ 'shape' => 'String', 'locationName' => 'description', ],
				'EnaSupport'          => [ 'shape' => 'Boolean', 'locationName' => 'enaSupport', ],
				'Hypervisor'          => [ 'shape' => 'HypervisorType', 'locationName' => 'hypervisor', ],
				'ImageOwnerAlias'     => [ 'shape' => 'String', 'locationName' => 'imageOwnerAlias', ],
				'Name'                => [ 'shape' => 'String', 'locationName' => 'name', ],
				'RootDeviceName'      => [ 'shape' => 'String', 'locationName' => 'rootDeviceName', ],
				'RootDeviceType'      => [ 'shape' => 'DeviceType', 'locationName' => 'rootDeviceType', ],
				'SriovNetSupport'     => [ 'shape' => 'String', 'locationName' => 'sriovNetSupport', ],
				'StateReason'         => [ 'shape' => 'StateReason', 'locationName' => 'stateReason', ],
				'Tags'                => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'VirtualizationType'  => [ 'shape' => 'VirtualizationType', 'locationName' => 'virtualizationType', ],
			],
		],
		'ImageAttribute'                                                 => [
			'type'    => 'structure',
			'members' => [
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'ImageId'             => [
					'shape'        => 'String',
					'locationName' => 'imageId',
				],
				'LaunchPermissions'   => [
					'shape'        => 'LaunchPermissionList',
					'locationName' => 'launchPermission',
				],
				'ProductCodes'        => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
				'Description'         => [
					'shape'        => 'AttributeValue',
					'locationName' => 'description',
				],
				'KernelId'            => [
					'shape'        => 'AttributeValue',
					'locationName' => 'kernel',
				],
				'RamdiskId'           => [
					'shape'        => 'AttributeValue',
					'locationName' => 'ramdisk',
				],
				'SriovNetSupport'     => [
					'shape'        => 'AttributeValue',
					'locationName' => 'sriovNetSupport',
				],
			],
		],
		'ImageAttributeName'                                             => [
			'type' => 'string',
			'enum' => [
				'description',
				'kernel',
				'ramdisk',
				'launchPermission',
				'productCodes',
				'blockDeviceMapping',
				'sriovNetSupport',
			],
		],
		'ImageDiskContainer'                                             => [
			'type'    => 'structure',
			'members' => [
				'Description' => [ 'shape' => 'String', ],
				'DeviceName'  => [ 'shape' => 'String', ],
				'Format'      => [ 'shape' => 'String', ],
				'SnapshotId'  => [ 'shape' => 'String', ],
				'Url'         => [ 'shape' => 'String', ],
				'UserBucket'  => [ 'shape' => 'UserBucket', ],
			],
		],
		'ImageDiskContainerList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ImageDiskContainer',
				'locationName' => 'item',
			],
		],
		'ImageIdStringList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ImageId',
			],
		],
		'ImageList'                                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Image',
				'locationName' => 'item',
			],
		],
		'ImageState'                                                     => [
			'type' => 'string',
			'enum' => [
				'pending',
				'available',
				'invalid',
				'deregistered',
				'transient',
				'failed',
				'error',
			],
		],
		'ImageTypeValues'                                                => [
			'type' => 'string',
			'enum' => [ 'machine', 'kernel', 'ramdisk', ],
		],
		'ImportClientVpnClientCertificateRevocationListRequest'          => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'CertificateRevocationList',
			],
			'members'  => [
				'ClientVpnEndpointId'       => [ 'shape' => 'String', ],
				'CertificateRevocationList' => [ 'shape' => 'String', ],
				'DryRun'                    => [ 'shape' => 'Boolean', ],
			],
		],
		'ImportClientVpnClientCertificateRevocationListResult'           => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ImportImageRequest'                                             => [
			'type'    => 'structure',
			'members' => [
				'Architecture'   => [ 'shape' => 'String', ],
				'ClientData'     => [ 'shape' => 'ClientData', ],
				'ClientToken'    => [ 'shape' => 'String', ],
				'Description'    => [ 'shape' => 'String', ],
				'DiskContainers' => [
					'shape'        => 'ImageDiskContainerList',
					'locationName' => 'DiskContainer',
				],
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'Encrypted'      => [ 'shape' => 'Boolean', ],
				'Hypervisor'     => [ 'shape' => 'String', ],
				'KmsKeyId'       => [ 'shape' => 'String', ],
				'LicenseType'    => [ 'shape' => 'String', ],
				'Platform'       => [ 'shape' => 'String', ],
				'RoleName'       => [ 'shape' => 'String', ],
			],
		],
		'ImportImageResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'Architecture'    => [ 'shape' => 'String', 'locationName' => 'architecture', ],
				'Description'     => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Encrypted'       => [ 'shape' => 'Boolean', 'locationName' => 'encrypted', ],
				'Hypervisor'      => [ 'shape' => 'String', 'locationName' => 'hypervisor', ],
				'ImageId'         => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'ImportTaskId'    => [ 'shape' => 'String', 'locationName' => 'importTaskId', ],
				'KmsKeyId'        => [ 'shape' => 'String', 'locationName' => 'kmsKeyId', ],
				'LicenseType'     => [ 'shape' => 'String', 'locationName' => 'licenseType', ],
				'Platform'        => [ 'shape' => 'String', 'locationName' => 'platform', ],
				'Progress'        => [ 'shape' => 'String', 'locationName' => 'progress', ],
				'SnapshotDetails' => [
					'shape'        => 'SnapshotDetailList',
					'locationName' => 'snapshotDetailSet',
				],
				'Status'          => [ 'shape' => 'String', 'locationName' => 'status', ],
				'StatusMessage'   => [ 'shape' => 'String', 'locationName' => 'statusMessage', ],
			],
		],
		'ImportImageTask'                                                => [
			'type'    => 'structure',
			'members' => [
				'Architecture'    => [ 'shape' => 'String', 'locationName' => 'architecture', ],
				'Description'     => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Encrypted'       => [ 'shape' => 'Boolean', 'locationName' => 'encrypted', ],
				'Hypervisor'      => [ 'shape' => 'String', 'locationName' => 'hypervisor', ],
				'ImageId'         => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'ImportTaskId'    => [ 'shape' => 'String', 'locationName' => 'importTaskId', ],
				'KmsKeyId'        => [ 'shape' => 'String', 'locationName' => 'kmsKeyId', ],
				'LicenseType'     => [ 'shape' => 'String', 'locationName' => 'licenseType', ],
				'Platform'        => [ 'shape' => 'String', 'locationName' => 'platform', ],
				'Progress'        => [ 'shape' => 'String', 'locationName' => 'progress', ],
				'SnapshotDetails' => [
					'shape'        => 'SnapshotDetailList',
					'locationName' => 'snapshotDetailSet',
				],
				'Status'          => [ 'shape' => 'String', 'locationName' => 'status', ],
				'StatusMessage'   => [ 'shape' => 'String', 'locationName' => 'statusMessage', ],
			],
		],
		'ImportImageTaskList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ImportImageTask',
				'locationName' => 'item',
			],
		],
		'ImportInstanceLaunchSpecification'                              => [
			'type'    => 'structure',
			'members' => [
				'AdditionalInfo'                    => [
					'shape'        => 'String',
					'locationName' => 'additionalInfo',
				],
				'Architecture'                      => [
					'shape'        => 'ArchitectureValues',
					'locationName' => 'architecture',
				],
				'GroupIds'                          => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'GroupId',
				],
				'GroupNames'                        => [
					'shape'        => 'SecurityGroupStringList',
					'locationName' => 'GroupName',
				],
				'InstanceInitiatedShutdownBehavior' => [
					'shape'        => 'ShutdownBehavior',
					'locationName' => 'instanceInitiatedShutdownBehavior',
				],
				'InstanceType'                      => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'Monitoring'                        => [
					'shape'        => 'Boolean',
					'locationName' => 'monitoring',
				],
				'Placement'                         => [
					'shape'        => 'Placement',
					'locationName' => 'placement',
				],
				'PrivateIpAddress'                  => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
				'SubnetId'                          => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
				'UserData'                          => [
					'shape'        => 'UserData',
					'locationName' => 'userData',
				],
			],
		],
		'ImportInstanceRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'Platform', ],
			'members'  => [
				'Description'         => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DiskImages'          => [
					'shape'        => 'DiskImageList',
					'locationName' => 'diskImage',
				],
				'DryRun'              => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'LaunchSpecification' => [
					'shape'        => 'ImportInstanceLaunchSpecification',
					'locationName' => 'launchSpecification',
				],
				'Platform'            => [
					'shape'        => 'PlatformValues',
					'locationName' => 'platform',
				],
			],
		],
		'ImportInstanceResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'ConversionTask' => [
					'shape'        => 'ConversionTask',
					'locationName' => 'conversionTask',
				],
			],
		],
		'ImportInstanceTaskDetails'                                      => [
			'type'    => 'structure',
			'members' => [
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'InstanceId'  => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Platform'    => [
					'shape'        => 'PlatformValues',
					'locationName' => 'platform',
				],
				'Volumes'     => [
					'shape'        => 'ImportInstanceVolumeDetailSet',
					'locationName' => 'volumes',
				],
			],
		],
		'ImportInstanceVolumeDetailItem'                                 => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'BytesConverted'   => [
					'shape'        => 'Long',
					'locationName' => 'bytesConverted',
				],
				'Description'      => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'Image'            => [
					'shape'        => 'DiskImageDescription',
					'locationName' => 'image',
				],
				'Status'           => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
				'StatusMessage'    => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'Volume'           => [
					'shape'        => 'DiskImageVolumeDescription',
					'locationName' => 'volume',
				],
			],
		],
		'ImportInstanceVolumeDetailSet'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ImportInstanceVolumeDetailItem',
				'locationName' => 'item',
			],
		],
		'ImportKeyPairRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'KeyName', 'PublicKeyMaterial', ],
			'members'  => [
				'DryRun'            => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'KeyName'           => [
					'shape'        => 'String',
					'locationName' => 'keyName',
				],
				'PublicKeyMaterial' => [
					'shape'        => 'Blob',
					'locationName' => 'publicKeyMaterial',
				],
			],
		],
		'ImportKeyPairResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'KeyFingerprint' => [
					'shape'        => 'String',
					'locationName' => 'keyFingerprint',
				],
				'KeyName'        => [
					'shape'        => 'String',
					'locationName' => 'keyName',
				],
			],
		],
		'ImportSnapshotRequest'                                          => [
			'type'    => 'structure',
			'members' => [
				'ClientData'    => [ 'shape' => 'ClientData', ],
				'ClientToken'   => [ 'shape' => 'String', ],
				'Description'   => [ 'shape' => 'String', ],
				'DiskContainer' => [ 'shape' => 'SnapshotDiskContainer', ],
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'Encrypted'     => [ 'shape' => 'Boolean', ],
				'KmsKeyId'      => [ 'shape' => 'String', ],
				'RoleName'      => [ 'shape' => 'String', ],
			],
		],
		'ImportSnapshotResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'Description'        => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'ImportTaskId'       => [
					'shape'        => 'String',
					'locationName' => 'importTaskId',
				],
				'SnapshotTaskDetail' => [
					'shape'        => 'SnapshotTaskDetail',
					'locationName' => 'snapshotTaskDetail',
				],
			],
		],
		'ImportSnapshotTask'                                             => [
			'type'    => 'structure',
			'members' => [
				'Description'        => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'ImportTaskId'       => [
					'shape'        => 'String',
					'locationName' => 'importTaskId',
				],
				'SnapshotTaskDetail' => [
					'shape'        => 'SnapshotTaskDetail',
					'locationName' => 'snapshotTaskDetail',
				],
			],
		],
		'ImportSnapshotTaskList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ImportSnapshotTask',
				'locationName' => 'item',
			],
		],
		'ImportTaskIdList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ImportTaskId',
			],
		],
		'ImportVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [
				'AvailabilityZone',
				'Image',
				'Volume',
			],
			'members'  => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'Description'      => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DryRun'           => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Image'            => [
					'shape'        => 'DiskImageDetail',
					'locationName' => 'image',
				],
				'Volume'           => [
					'shape'        => 'VolumeDetail',
					'locationName' => 'volume',
				],
			],
		],
		'ImportVolumeResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'ConversionTask' => [
					'shape'        => 'ConversionTask',
					'locationName' => 'conversionTask',
				],
			],
		],
		'ImportVolumeTaskDetails'                                        => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'BytesConverted'   => [
					'shape'        => 'Long',
					'locationName' => 'bytesConverted',
				],
				'Description'      => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'Image'            => [
					'shape'        => 'DiskImageDescription',
					'locationName' => 'image',
				],
				'Volume'           => [
					'shape'        => 'DiskImageVolumeDescription',
					'locationName' => 'volume',
				],
			],
		],
		'Instance'                                                       => [
			'type'    => 'structure',
			'members' => [
				'AmiLaunchIndex'                          => [
					'shape'        => 'Integer',
					'locationName' => 'amiLaunchIndex',
				],
				'ImageId'                                 => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceId'                              => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'InstanceType'                            => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'KernelId'                                => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'KeyName'                                 => [ 'shape' => 'String', 'locationName' => 'keyName', ],
				'LaunchTime'                              => [ 'shape' => 'DateTime', 'locationName' => 'launchTime', ],
				'Monitoring'                              => [
					'shape'        => 'Monitoring',
					'locationName' => 'monitoring',
				],
				'Placement'                               => [ 'shape' => 'Placement', 'locationName' => 'placement', ],
				'Platform'                                => [
					'shape'        => 'PlatformValues',
					'locationName' => 'platform',
				],
				'PrivateDnsName'                          => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'PrivateIpAddress'                        => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
				'ProductCodes'                            => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
				'PublicDnsName'                           => [ 'shape' => 'String', 'locationName' => 'dnsName', ],
				'PublicIpAddress'                         => [ 'shape' => 'String', 'locationName' => 'ipAddress', ],
				'RamdiskId'                               => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'State'                                   => [
					'shape'        => 'InstanceState',
					'locationName' => 'instanceState',
				],
				'StateTransitionReason'                   => [ 'shape' => 'String', 'locationName' => 'reason', ],
				'SubnetId'                                => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'VpcId'                                   => [ 'shape' => 'String', 'locationName' => 'vpcId', ],
				'Architecture'                            => [
					'shape'        => 'ArchitectureValues',
					'locationName' => 'architecture',
				],
				'BlockDeviceMappings'                     => [
					'shape'        => 'InstanceBlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'ClientToken'                             => [ 'shape' => 'String', 'locationName' => 'clientToken', ],
				'EbsOptimized'                            => [
					'shape'        => 'Boolean',
					'locationName' => 'ebsOptimized',
				],
				'EnaSupport'                              => [ 'shape' => 'Boolean', 'locationName' => 'enaSupport', ],
				'Hypervisor'                              => [
					'shape'        => 'HypervisorType',
					'locationName' => 'hypervisor',
				],
				'IamInstanceProfile'                      => [
					'shape'        => 'IamInstanceProfile',
					'locationName' => 'iamInstanceProfile',
				],
				'InstanceLifecycle'                       => [
					'shape'        => 'InstanceLifecycleType',
					'locationName' => 'instanceLifecycle',
				],
				'ElasticGpuAssociations'                  => [
					'shape'        => 'ElasticGpuAssociationList',
					'locationName' => 'elasticGpuAssociationSet',
				],
				'ElasticInferenceAcceleratorAssociations' => [
					'shape'        => 'ElasticInferenceAcceleratorAssociationList',
					'locationName' => 'elasticInferenceAcceleratorAssociationSet',
				],
				'NetworkInterfaces'                       => [
					'shape'        => 'InstanceNetworkInterfaceList',
					'locationName' => 'networkInterfaceSet',
				],
				'RootDeviceName'                          => [
					'shape'        => 'String',
					'locationName' => 'rootDeviceName',
				],
				'RootDeviceType'                          => [
					'shape'        => 'DeviceType',
					'locationName' => 'rootDeviceType',
				],
				'SecurityGroups'                          => [
					'shape'        => 'GroupIdentifierList',
					'locationName' => 'groupSet',
				],
				'SourceDestCheck'                         => [
					'shape'        => 'Boolean',
					'locationName' => 'sourceDestCheck',
				],
				'SpotInstanceRequestId'                   => [
					'shape'        => 'String',
					'locationName' => 'spotInstanceRequestId',
				],
				'SriovNetSupport'                         => [
					'shape'        => 'String',
					'locationName' => 'sriovNetSupport',
				],
				'StateReason'                             => [
					'shape'        => 'StateReason',
					'locationName' => 'stateReason',
				],
				'Tags'                                    => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'VirtualizationType'                      => [
					'shape'        => 'VirtualizationType',
					'locationName' => 'virtualizationType',
				],
				'CpuOptions'                              => [
					'shape'        => 'CpuOptions',
					'locationName' => 'cpuOptions',
				],
				'CapacityReservationId'                   => [
					'shape'        => 'String',
					'locationName' => 'capacityReservationId',
				],
				'CapacityReservationSpecification'        => [
					'shape'        => 'CapacityReservationSpecificationResponse',
					'locationName' => 'capacityReservationSpecification',
				],
				'HibernationOptions'                      => [
					'shape'        => 'HibernationOptions',
					'locationName' => 'hibernationOptions',
				],
				'Licenses'                                => [
					'shape'        => 'LicenseList',
					'locationName' => 'licenseSet',
				],
			],
		],
		'InstanceAttribute'                                              => [
			'type'    => 'structure',
			'members' => [
				'Groups'                            => [
					'shape'        => 'GroupIdentifierList',
					'locationName' => 'groupSet',
				],
				'BlockDeviceMappings'               => [
					'shape'        => 'InstanceBlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'DisableApiTermination'             => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'disableApiTermination',
				],
				'EnaSupport'                        => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'enaSupport',
				],
				'EbsOptimized'                      => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'ebsOptimized',
				],
				'InstanceId'                        => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'InstanceInitiatedShutdownBehavior' => [
					'shape'        => 'AttributeValue',
					'locationName' => 'instanceInitiatedShutdownBehavior',
				],
				'InstanceType'                      => [
					'shape'        => 'AttributeValue',
					'locationName' => 'instanceType',
				],
				'KernelId'                          => [ 'shape' => 'AttributeValue', 'locationName' => 'kernel', ],
				'ProductCodes'                      => [
					'shape'        => 'ProductCodeList',
					'locationName' => 'productCodes',
				],
				'RamdiskId'                         => [ 'shape' => 'AttributeValue', 'locationName' => 'ramdisk', ],
				'RootDeviceName'                    => [
					'shape'        => 'AttributeValue',
					'locationName' => 'rootDeviceName',
				],
				'SourceDestCheck'                   => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'sourceDestCheck',
				],
				'SriovNetSupport'                   => [
					'shape'        => 'AttributeValue',
					'locationName' => 'sriovNetSupport',
				],
				'UserData'                          => [ 'shape' => 'AttributeValue', 'locationName' => 'userData', ],
			],
		],
		'InstanceAttributeName'                                          => [
			'type' => 'string',
			'enum' => [
				'instanceType',
				'kernel',
				'ramdisk',
				'userData',
				'disableApiTermination',
				'instanceInitiatedShutdownBehavior',
				'rootDeviceName',
				'blockDeviceMapping',
				'productCodes',
				'sourceDestCheck',
				'groupSet',
				'ebsOptimized',
				'sriovNetSupport',
				'enaSupport',
			],
		],
		'InstanceBlockDeviceMapping'                                     => [
			'type'    => 'structure',
			'members' => [
				'DeviceName' => [
					'shape'        => 'String',
					'locationName' => 'deviceName',
				],
				'Ebs'        => [
					'shape'        => 'EbsInstanceBlockDevice',
					'locationName' => 'ebs',
				],
			],
		],
		'InstanceBlockDeviceMappingList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceBlockDeviceMapping',
				'locationName' => 'item',
			],
		],
		'InstanceBlockDeviceMappingSpecification'                        => [
			'type'    => 'structure',
			'members' => [
				'DeviceName'  => [
					'shape'        => 'String',
					'locationName' => 'deviceName',
				],
				'Ebs'         => [
					'shape'        => 'EbsInstanceBlockDeviceSpecification',
					'locationName' => 'ebs',
				],
				'NoDevice'    => [
					'shape'        => 'String',
					'locationName' => 'noDevice',
				],
				'VirtualName' => [
					'shape'        => 'String',
					'locationName' => 'virtualName',
				],
			],
		],
		'InstanceBlockDeviceMappingSpecificationList'                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceBlockDeviceMappingSpecification',
				'locationName' => 'item',
			],
		],
		'InstanceCapacity'                                               => [
			'type'    => 'structure',
			'members' => [
				'AvailableCapacity' => [
					'shape'        => 'Integer',
					'locationName' => 'availableCapacity',
				],
				'InstanceType'      => [
					'shape'        => 'String',
					'locationName' => 'instanceType',
				],
				'TotalCapacity'     => [
					'shape'        => 'Integer',
					'locationName' => 'totalCapacity',
				],
			],
		],
		'InstanceCount'                                                  => [
			'type'    => 'structure',
			'members' => [
				'InstanceCount' => [
					'shape'        => 'Integer',
					'locationName' => 'instanceCount',
				],
				'State'         => [
					'shape'        => 'ListingState',
					'locationName' => 'state',
				],
			],
		],
		'InstanceCountList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceCount',
				'locationName' => 'item',
			],
		],
		'InstanceCreditSpecification'                                    => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'CpuCredits' => [
					'shape'        => 'String',
					'locationName' => 'cpuCredits',
				],
			],
		],
		'InstanceCreditSpecificationList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceCreditSpecification',
				'locationName' => 'item',
			],
		],
		'InstanceCreditSpecificationListRequest'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceCreditSpecificationRequest',
				'locationName' => 'item',
			],
		],
		'InstanceCreditSpecificationRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [ 'shape' => 'String', ],
				'CpuCredits' => [ 'shape' => 'String', ],
			],
		],
		'InstanceEventId'                                                => [ 'type' => 'string', ],
		'InstanceExportDetails'                                          => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'        => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'TargetEnvironment' => [
					'shape'        => 'ExportEnvironment',
					'locationName' => 'targetEnvironment',
				],
			],
		],
		'InstanceHealthStatus'                                           => [
			'type' => 'string',
			'enum' => [ 'healthy', 'unhealthy', ],
		],
		'InstanceId'                                                     => [ 'type' => 'string', ],
		'InstanceIdSet'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'InstanceIdStringList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'InstanceId',
			],
		],
		'InstanceIdsSet'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceId',
				'locationName' => 'item',
			],
		],
		'InstanceInterruptionBehavior'                                   => [
			'type' => 'string',
			'enum' => [ 'hibernate', 'stop', 'terminate', ],
		],
		'InstanceIpv6Address'                                            => [
			'type'    => 'structure',
			'members' => [
				'Ipv6Address' => [
					'shape'        => 'String',
					'locationName' => 'ipv6Address',
				],
			],
		],
		'InstanceIpv6AddressList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceIpv6Address',
				'locationName' => 'item',
			],
		],
		'InstanceIpv6AddressListRequest'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceIpv6AddressRequest',
				'locationName' => 'InstanceIpv6Address',
			],
		],
		'InstanceIpv6AddressRequest'                                     => [
			'type'    => 'structure',
			'members' => [ 'Ipv6Address' => [ 'shape' => 'String', ], ],
		],
		'InstanceLifecycle'                                              => [
			'type' => 'string',
			'enum' => [ 'spot', 'on-demand', ],
		],
		'InstanceLifecycleType'                                          => [
			'type' => 'string',
			'enum' => [ 'spot', 'scheduled', ],
		],
		'InstanceList'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Instance',
				'locationName' => 'item',
			],
		],
		'InstanceMarketOptionsRequest'                                   => [
			'type'    => 'structure',
			'members' => [
				'MarketType'  => [ 'shape' => 'MarketType', ],
				'SpotOptions' => [ 'shape' => 'SpotMarketOptions', ],
			],
		],
		'InstanceMatchCriteria'                                          => [
			'type' => 'string',
			'enum' => [ 'open', 'targeted', ],
		],
		'InstanceMonitoring'                                             => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Monitoring' => [
					'shape'        => 'Monitoring',
					'locationName' => 'monitoring',
				],
			],
		],
		'InstanceMonitoringList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceMonitoring',
				'locationName' => 'item',
			],
		],
		'InstanceNetworkInterface'                                       => [
			'type'    => 'structure',
			'members' => [
				'Association'        => [
					'shape'        => 'InstanceNetworkInterfaceAssociation',
					'locationName' => 'association',
				],
				'Attachment'         => [
					'shape'        => 'InstanceNetworkInterfaceAttachment',
					'locationName' => 'attachment',
				],
				'Description'        => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Groups'             => [ 'shape' => 'GroupIdentifierList', 'locationName' => 'groupSet', ],
				'Ipv6Addresses'      => [ 'shape' => 'InstanceIpv6AddressList', 'locationName' => 'ipv6AddressesSet', ],
				'MacAddress'         => [ 'shape' => 'String', 'locationName' => 'macAddress', ],
				'NetworkInterfaceId' => [ 'shape' => 'String', 'locationName' => 'networkInterfaceId', ],
				'OwnerId'            => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
				'PrivateDnsName'     => [ 'shape' => 'String', 'locationName' => 'privateDnsName', ],
				'PrivateIpAddress'   => [ 'shape' => 'String', 'locationName' => 'privateIpAddress', ],
				'PrivateIpAddresses' => [
					'shape'        => 'InstancePrivateIpAddressList',
					'locationName' => 'privateIpAddressesSet',
				],
				'SourceDestCheck'    => [ 'shape' => 'Boolean', 'locationName' => 'sourceDestCheck', ],
				'Status'             => [ 'shape' => 'NetworkInterfaceStatus', 'locationName' => 'status', ],
				'SubnetId'           => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'VpcId'              => [ 'shape' => 'String', 'locationName' => 'vpcId', ],
				'InterfaceType'      => [ 'shape' => 'String', 'locationName' => 'interfaceType', ],
			],
		],
		'InstanceNetworkInterfaceAssociation'                            => [
			'type'    => 'structure',
			'members' => [
				'IpOwnerId'     => [
					'shape'        => 'String',
					'locationName' => 'ipOwnerId',
				],
				'PublicDnsName' => [
					'shape'        => 'String',
					'locationName' => 'publicDnsName',
				],
				'PublicIp'      => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'InstanceNetworkInterfaceAttachment'                             => [
			'type'    => 'structure',
			'members' => [
				'AttachTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'attachTime',
				],
				'AttachmentId'        => [
					'shape'        => 'String',
					'locationName' => 'attachmentId',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'DeviceIndex'         => [
					'shape'        => 'Integer',
					'locationName' => 'deviceIndex',
				],
				'Status'              => [
					'shape'        => 'AttachmentStatus',
					'locationName' => 'status',
				],
			],
		],
		'InstanceNetworkInterfaceList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceNetworkInterface',
				'locationName' => 'item',
			],
		],
		'InstanceNetworkInterfaceSpecification'                          => [
			'type'    => 'structure',
			'members' => [
				'AssociatePublicIpAddress'       => [
					'shape'        => 'Boolean',
					'locationName' => 'associatePublicIpAddress',
				],
				'DeleteOnTermination'            => [ 'shape' => 'Boolean', 'locationName' => 'deleteOnTermination', ],
				'Description'                    => [ 'shape' => 'String', 'locationName' => 'description', ],
				'DeviceIndex'                    => [ 'shape' => 'Integer', 'locationName' => 'deviceIndex', ],
				'Groups'                         => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'Ipv6AddressCount'               => [ 'shape' => 'Integer', 'locationName' => 'ipv6AddressCount', ],
				'Ipv6Addresses'                  => [
					'shape'        => 'InstanceIpv6AddressList',
					'locationName' => 'ipv6AddressesSet',
					'queryName'    => 'Ipv6Addresses',
				],
				'NetworkInterfaceId'             => [ 'shape' => 'String', 'locationName' => 'networkInterfaceId', ],
				'PrivateIpAddress'               => [ 'shape' => 'String', 'locationName' => 'privateIpAddress', ],
				'PrivateIpAddresses'             => [
					'shape'        => 'PrivateIpAddressSpecificationList',
					'locationName' => 'privateIpAddressesSet',
					'queryName'    => 'PrivateIpAddresses',
				],
				'SecondaryPrivateIpAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'secondaryPrivateIpAddressCount',
				],
				'SubnetId'                       => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'InterfaceType'                  => [ 'shape' => 'String', ],
			],
		],
		'InstanceNetworkInterfaceSpecificationList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceNetworkInterfaceSpecification',
				'locationName' => 'item',
			],
		],
		'InstancePrivateIpAddress'                                       => [
			'type'    => 'structure',
			'members' => [
				'Association'      => [
					'shape'        => 'InstanceNetworkInterfaceAssociation',
					'locationName' => 'association',
				],
				'Primary'          => [
					'shape'        => 'Boolean',
					'locationName' => 'primary',
				],
				'PrivateDnsName'   => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'PrivateIpAddress' => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'InstancePrivateIpAddressList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstancePrivateIpAddress',
				'locationName' => 'item',
			],
		],
		'InstanceSpecification'                                          => [
			'type'    => 'structure',
			'members' => [
				'InstanceId'        => [ 'shape' => 'String', ],
				'ExcludeBootVolume' => [ 'shape' => 'Boolean', ],
			],
		],
		'InstanceState'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Code' => [
					'shape'        => 'Integer',
					'locationName' => 'code',
				],
				'Name' => [
					'shape'        => 'InstanceStateName',
					'locationName' => 'name',
				],
			],
		],
		'InstanceStateChange'                                            => [
			'type'    => 'structure',
			'members' => [
				'CurrentState'  => [
					'shape'        => 'InstanceState',
					'locationName' => 'currentState',
				],
				'InstanceId'    => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'PreviousState' => [
					'shape'        => 'InstanceState',
					'locationName' => 'previousState',
				],
			],
		],
		'InstanceStateChangeList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceStateChange',
				'locationName' => 'item',
			],
		],
		'InstanceStateName'                                              => [
			'type' => 'string',
			'enum' => [
				'pending',
				'running',
				'shutting-down',
				'terminated',
				'stopping',
				'stopped',
			],
		],
		'InstanceStatus'                                                 => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'Events'           => [
					'shape'        => 'InstanceStatusEventList',
					'locationName' => 'eventsSet',
				],
				'InstanceId'       => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'InstanceState'    => [
					'shape'        => 'InstanceState',
					'locationName' => 'instanceState',
				],
				'InstanceStatus'   => [
					'shape'        => 'InstanceStatusSummary',
					'locationName' => 'instanceStatus',
				],
				'SystemStatus'     => [
					'shape'        => 'InstanceStatusSummary',
					'locationName' => 'systemStatus',
				],
			],
		],
		'InstanceStatusDetails'                                          => [
			'type'    => 'structure',
			'members' => [
				'ImpairedSince' => [
					'shape'        => 'DateTime',
					'locationName' => 'impairedSince',
				],
				'Name'          => [
					'shape'        => 'StatusName',
					'locationName' => 'name',
				],
				'Status'        => [
					'shape'        => 'StatusType',
					'locationName' => 'status',
				],
			],
		],
		'InstanceStatusDetailsList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceStatusDetails',
				'locationName' => 'item',
			],
		],
		'InstanceStatusEvent'                                            => [
			'type'    => 'structure',
			'members' => [
				'InstanceEventId'   => [
					'shape'        => 'InstanceEventId',
					'locationName' => 'instanceEventId',
				],
				'Code'              => [
					'shape'        => 'EventCode',
					'locationName' => 'code',
				],
				'Description'       => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'NotAfter'          => [
					'shape'        => 'DateTime',
					'locationName' => 'notAfter',
				],
				'NotBefore'         => [
					'shape'        => 'DateTime',
					'locationName' => 'notBefore',
				],
				'NotBeforeDeadline' => [
					'shape'        => 'DateTime',
					'locationName' => 'notBeforeDeadline',
				],
			],
		],
		'InstanceStatusEventList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceStatusEvent',
				'locationName' => 'item',
			],
		],
		'InstanceStatusList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InstanceStatus',
				'locationName' => 'item',
			],
		],
		'InstanceStatusSummary'                                          => [
			'type'    => 'structure',
			'members' => [
				'Details' => [
					'shape'        => 'InstanceStatusDetailsList',
					'locationName' => 'details',
				],
				'Status'  => [
					'shape'        => 'SummaryStatus',
					'locationName' => 'status',
				],
			],
		],
		'InstanceType'                                                   => [
			'type' => 'string',
			'enum' => [
				't1.micro',
				't2.nano',
				't2.micro',
				't2.small',
				't2.medium',
				't2.large',
				't2.xlarge',
				't2.2xlarge',
				't3.nano',
				't3.micro',
				't3.small',
				't3.medium',
				't3.large',
				't3.xlarge',
				't3.2xlarge',
				't3a.nano',
				't3a.micro',
				't3a.small',
				't3a.medium',
				't3a.large',
				't3a.xlarge',
				't3a.2xlarge',
				'm1.small',
				'm1.medium',
				'm1.large',
				'm1.xlarge',
				'm3.medium',
				'm3.large',
				'm3.xlarge',
				'm3.2xlarge',
				'm4.large',
				'm4.xlarge',
				'm4.2xlarge',
				'm4.4xlarge',
				'm4.10xlarge',
				'm4.16xlarge',
				'm2.xlarge',
				'm2.2xlarge',
				'm2.4xlarge',
				'cr1.8xlarge',
				'r3.large',
				'r3.xlarge',
				'r3.2xlarge',
				'r3.4xlarge',
				'r3.8xlarge',
				'r4.large',
				'r4.xlarge',
				'r4.2xlarge',
				'r4.4xlarge',
				'r4.8xlarge',
				'r4.16xlarge',
				'r5.large',
				'r5.xlarge',
				'r5.2xlarge',
				'r5.4xlarge',
				'r5.8xlarge',
				'r5.12xlarge',
				'r5.16xlarge',
				'r5.24xlarge',
				'r5.metal',
				'r5a.large',
				'r5a.xlarge',
				'r5a.2xlarge',
				'r5a.4xlarge',
				'r5a.8xlarge',
				'r5a.12xlarge',
				'r5a.16xlarge',
				'r5a.24xlarge',
				'r5d.large',
				'r5d.xlarge',
				'r5d.2xlarge',
				'r5d.4xlarge',
				'r5d.8xlarge',
				'r5d.12xlarge',
				'r5d.16xlarge',
				'r5d.24xlarge',
				'r5d.metal',
				'r5ad.large',
				'r5ad.xlarge',
				'r5ad.2xlarge',
				'r5ad.4xlarge',
				'r5ad.8xlarge',
				'r5ad.12xlarge',
				'r5ad.16xlarge',
				'r5ad.24xlarge',
				'x1.16xlarge',
				'x1.32xlarge',
				'x1e.xlarge',
				'x1e.2xlarge',
				'x1e.4xlarge',
				'x1e.8xlarge',
				'x1e.16xlarge',
				'x1e.32xlarge',
				'i2.xlarge',
				'i2.2xlarge',
				'i2.4xlarge',
				'i2.8xlarge',
				'i3.large',
				'i3.xlarge',
				'i3.2xlarge',
				'i3.4xlarge',
				'i3.8xlarge',
				'i3.16xlarge',
				'i3.metal',
				'i3en.large',
				'i3en.xlarge',
				'i3en.2xlarge',
				'i3en.3xlarge',
				'i3en.6xlarge',
				'i3en.12xlarge',
				'i3en.24xlarge',
				'hi1.4xlarge',
				'hs1.8xlarge',
				'c1.medium',
				'c1.xlarge',
				'c3.large',
				'c3.xlarge',
				'c3.2xlarge',
				'c3.4xlarge',
				'c3.8xlarge',
				'c4.large',
				'c4.xlarge',
				'c4.2xlarge',
				'c4.4xlarge',
				'c4.8xlarge',
				'c5.large',
				'c5.xlarge',
				'c5.2xlarge',
				'c5.4xlarge',
				'c5.9xlarge',
				'c5.12xlarge',
				'c5.18xlarge',
				'c5.24xlarge',
				'c5.metal',
				'c5d.large',
				'c5d.xlarge',
				'c5d.2xlarge',
				'c5d.4xlarge',
				'c5d.9xlarge',
				'c5d.18xlarge',
				'c5n.large',
				'c5n.xlarge',
				'c5n.2xlarge',
				'c5n.4xlarge',
				'c5n.9xlarge',
				'c5n.18xlarge',
				'cc1.4xlarge',
				'cc2.8xlarge',
				'g2.2xlarge',
				'g2.8xlarge',
				'g3.4xlarge',
				'g3.8xlarge',
				'g3.16xlarge',
				'g3s.xlarge',
				'cg1.4xlarge',
				'p2.xlarge',
				'p2.8xlarge',
				'p2.16xlarge',
				'p3.2xlarge',
				'p3.8xlarge',
				'p3.16xlarge',
				'p3dn.24xlarge',
				'd2.xlarge',
				'd2.2xlarge',
				'd2.4xlarge',
				'd2.8xlarge',
				'f1.2xlarge',
				'f1.4xlarge',
				'f1.16xlarge',
				'm5.large',
				'm5.xlarge',
				'm5.2xlarge',
				'm5.4xlarge',
				'm5.8xlarge',
				'm5.12xlarge',
				'm5.16xlarge',
				'm5.24xlarge',
				'm5.metal',
				'm5a.large',
				'm5a.xlarge',
				'm5a.2xlarge',
				'm5a.4xlarge',
				'm5a.8xlarge',
				'm5a.12xlarge',
				'm5a.16xlarge',
				'm5a.24xlarge',
				'm5d.large',
				'm5d.xlarge',
				'm5d.2xlarge',
				'm5d.4xlarge',
				'm5d.8xlarge',
				'm5d.12xlarge',
				'm5d.16xlarge',
				'm5d.24xlarge',
				'm5d.metal',
				'm5ad.large',
				'm5ad.xlarge',
				'm5ad.2xlarge',
				'm5ad.4xlarge',
				'm5ad.8xlarge',
				'm5ad.12xlarge',
				'm5ad.16xlarge',
				'm5ad.24xlarge',
				'h1.2xlarge',
				'h1.4xlarge',
				'h1.8xlarge',
				'h1.16xlarge',
				'z1d.large',
				'z1d.xlarge',
				'z1d.2xlarge',
				'z1d.3xlarge',
				'z1d.6xlarge',
				'z1d.12xlarge',
				'z1d.metal',
				'u-6tb1.metal',
				'u-9tb1.metal',
				'u-12tb1.metal',
				'a1.medium',
				'a1.large',
				'a1.xlarge',
				'a1.2xlarge',
				'a1.4xlarge',
			],
		],
		'InstanceTypeList'                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InstanceType', ],
		],
		'Integer'                                                        => [ 'type' => 'integer', ],
		'InterfacePermissionType'                                        => [
			'type' => 'string',
			'enum' => [ 'INSTANCE-ATTACH', 'EIP-ASSOCIATE', ],
		],
		'InternetGateway'                                                => [
			'type'    => 'structure',
			'members' => [
				'Attachments'       => [
					'shape'        => 'InternetGatewayAttachmentList',
					'locationName' => 'attachmentSet',
				],
				'InternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'internetGatewayId',
				],
				'OwnerId'           => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Tags'              => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'InternetGatewayAttachment'                                      => [
			'type'    => 'structure',
			'members' => [
				'State' => [
					'shape'        => 'AttachmentStatus',
					'locationName' => 'state',
				],
				'VpcId' => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'InternetGatewayAttachmentList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InternetGatewayAttachment',
				'locationName' => 'item',
			],
		],
		'InternetGatewayList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InternetGateway',
				'locationName' => 'item',
			],
		],
		'IpPermission'                                                   => [
			'type'    => 'structure',
			'members' => [
				'FromPort'         => [
					'shape'        => 'Integer',
					'locationName' => 'fromPort',
				],
				'IpProtocol'       => [
					'shape'        => 'String',
					'locationName' => 'ipProtocol',
				],
				'IpRanges'         => [
					'shape'        => 'IpRangeList',
					'locationName' => 'ipRanges',
				],
				'Ipv6Ranges'       => [
					'shape'        => 'Ipv6RangeList',
					'locationName' => 'ipv6Ranges',
				],
				'PrefixListIds'    => [
					'shape'        => 'PrefixListIdList',
					'locationName' => 'prefixListIds',
				],
				'ToPort'           => [
					'shape'        => 'Integer',
					'locationName' => 'toPort',
				],
				'UserIdGroupPairs' => [
					'shape'        => 'UserIdGroupPairList',
					'locationName' => 'groups',
				],
			],
		],
		'IpPermissionList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'IpPermission',
				'locationName' => 'item',
			],
		],
		'IpRange'                                                        => [
			'type'    => 'structure',
			'members' => [
				'CidrIp'      => [
					'shape'        => 'String',
					'locationName' => 'cidrIp',
				],
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
			],
		],
		'IpRangeList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'IpRange',
				'locationName' => 'item',
			],
		],
		'IpRanges'                                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'Ipv6Address'                                                    => [ 'type' => 'string', ],
		'Ipv6AddressList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'Ipv6CidrBlock'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Ipv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
			],
		],
		'Ipv6CidrBlockSet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Ipv6CidrBlock',
				'locationName' => 'item',
			],
		],
		'Ipv6Range'                                                      => [
			'type'    => 'structure',
			'members' => [
				'CidrIpv6'    => [
					'shape'        => 'String',
					'locationName' => 'cidrIpv6',
				],
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
			],
		],
		'Ipv6RangeList'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Ipv6Range',
				'locationName' => 'item',
			],
		],
		'Ipv6SupportValue'                                               => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'KeyNameStringList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'KeyName',
			],
		],
		'KeyPair'                                                        => [
			'type'    => 'structure',
			'members' => [
				'KeyFingerprint' => [
					'shape'        => 'String',
					'locationName' => 'keyFingerprint',
				],
				'KeyMaterial'    => [
					'shape'        => 'String',
					'locationName' => 'keyMaterial',
				],
				'KeyName'        => [
					'shape'        => 'String',
					'locationName' => 'keyName',
				],
			],
		],
		'KeyPairInfo'                                                    => [
			'type'    => 'structure',
			'members' => [
				'KeyFingerprint' => [
					'shape'        => 'String',
					'locationName' => 'keyFingerprint',
				],
				'KeyName'        => [
					'shape'        => 'String',
					'locationName' => 'keyName',
				],
			],
		],
		'KeyPairList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'KeyPairInfo',
				'locationName' => 'item',
			],
		],
		'LaunchPermission'                                               => [
			'type'    => 'structure',
			'members' => [
				'Group'  => [
					'shape'        => 'PermissionGroup',
					'locationName' => 'group',
				],
				'UserId' => [
					'shape'        => 'String',
					'locationName' => 'userId',
				],
			],
		],
		'LaunchPermissionList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchPermission',
				'locationName' => 'item',
			],
		],
		'LaunchPermissionModifications'                                  => [
			'type'    => 'structure',
			'members' => [
				'Add'    => [ 'shape' => 'LaunchPermissionList', ],
				'Remove' => [ 'shape' => 'LaunchPermissionList', ],
			],
		],
		'LaunchSpecification'                                            => [
			'type'    => 'structure',
			'members' => [
				'UserData'            => [ 'shape' => 'String', 'locationName' => 'userData', ],
				'SecurityGroups'      => [ 'shape' => 'GroupIdentifierList', 'locationName' => 'groupSet', ],
				'AddressingType'      => [ 'shape' => 'String', 'locationName' => 'addressingType', ],
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'EbsOptimized'        => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'IamInstanceProfile'  => [
					'shape'        => 'IamInstanceProfileSpecification',
					'locationName' => 'iamInstanceProfile',
				],
				'ImageId'             => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceType'        => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'KernelId'            => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'KeyName'             => [ 'shape' => 'String', 'locationName' => 'keyName', ],
				'NetworkInterfaces'   => [
					'shape'        => 'InstanceNetworkInterfaceSpecificationList',
					'locationName' => 'networkInterfaceSet',
				],
				'Placement'           => [ 'shape' => 'SpotPlacement', 'locationName' => 'placement', ],
				'RamdiskId'           => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'SubnetId'            => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'Monitoring'          => [
					'shape'        => 'RunInstancesMonitoringEnabled',
					'locationName' => 'monitoring',
				],
			],
		],
		'LaunchSpecsList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SpotFleetLaunchSpecification',
				'locationName' => 'item',
			],
		],
		'LaunchTemplate'                                                 => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'     => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateId',
				],
				'LaunchTemplateName'   => [
					'shape'        => 'LaunchTemplateName',
					'locationName' => 'launchTemplateName',
				],
				'CreateTime'           => [
					'shape'        => 'DateTime',
					'locationName' => 'createTime',
				],
				'CreatedBy'            => [
					'shape'        => 'String',
					'locationName' => 'createdBy',
				],
				'DefaultVersionNumber' => [
					'shape'        => 'Long',
					'locationName' => 'defaultVersionNumber',
				],
				'LatestVersionNumber'  => [
					'shape'        => 'Long',
					'locationName' => 'latestVersionNumber',
				],
				'Tags'                 => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'LaunchTemplateAndOverridesResponse'                             => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateSpecification' => [
					'shape'        => 'FleetLaunchTemplateSpecification',
					'locationName' => 'launchTemplateSpecification',
				],
				'Overrides'                   => [
					'shape'        => 'FleetLaunchTemplateOverrides',
					'locationName' => 'overrides',
				],
			],
		],
		'LaunchTemplateBlockDeviceMapping'                               => [
			'type'    => 'structure',
			'members' => [
				'DeviceName'  => [
					'shape'        => 'String',
					'locationName' => 'deviceName',
				],
				'VirtualName' => [
					'shape'        => 'String',
					'locationName' => 'virtualName',
				],
				'Ebs'         => [
					'shape'        => 'LaunchTemplateEbsBlockDevice',
					'locationName' => 'ebs',
				],
				'NoDevice'    => [
					'shape'        => 'String',
					'locationName' => 'noDevice',
				],
			],
		],
		'LaunchTemplateBlockDeviceMappingList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateBlockDeviceMapping',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateBlockDeviceMappingRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'DeviceName'  => [ 'shape' => 'String', ],
				'VirtualName' => [ 'shape' => 'String', ],
				'Ebs'         => [ 'shape' => 'LaunchTemplateEbsBlockDeviceRequest', ],
				'NoDevice'    => [ 'shape' => 'String', ],
			],
		],
		'LaunchTemplateBlockDeviceMappingRequestList'                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateBlockDeviceMappingRequest',
				'locationName' => 'BlockDeviceMapping',
			],
		],
		'LaunchTemplateCapacityReservationSpecificationRequest'          => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationPreference' => [ 'shape' => 'CapacityReservationPreference', ],
				'CapacityReservationTarget'     => [ 'shape' => 'CapacityReservationTarget', ],
			],
		],
		'LaunchTemplateCapacityReservationSpecificationResponse'         => [
			'type'    => 'structure',
			'members' => [
				'CapacityReservationPreference' => [
					'shape'        => 'CapacityReservationPreference',
					'locationName' => 'capacityReservationPreference',
				],
				'CapacityReservationTarget'     => [
					'shape'        => 'CapacityReservationTargetResponse',
					'locationName' => 'capacityReservationTarget',
				],
			],
		],
		'LaunchTemplateConfig'                                           => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateSpecification' => [
					'shape'        => 'FleetLaunchTemplateSpecification',
					'locationName' => 'launchTemplateSpecification',
				],
				'Overrides'                   => [
					'shape'        => 'LaunchTemplateOverridesList',
					'locationName' => 'overrides',
				],
			],
		],
		'LaunchTemplateConfigList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateConfig',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateCpuOptions'                                       => [
			'type'    => 'structure',
			'members' => [
				'CoreCount'      => [
					'shape'        => 'Integer',
					'locationName' => 'coreCount',
				],
				'ThreadsPerCore' => [
					'shape'        => 'Integer',
					'locationName' => 'threadsPerCore',
				],
			],
		],
		'LaunchTemplateCpuOptionsRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'CoreCount'      => [ 'shape' => 'Integer', ],
				'ThreadsPerCore' => [ 'shape' => 'Integer', ],
			],
		],
		'LaunchTemplateEbsBlockDevice'                                   => [
			'type'    => 'structure',
			'members' => [
				'Encrypted'           => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'Iops'                => [
					'shape'        => 'Integer',
					'locationName' => 'iops',
				],
				'KmsKeyId'            => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
				'SnapshotId'          => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
				'VolumeSize'          => [
					'shape'        => 'Integer',
					'locationName' => 'volumeSize',
				],
				'VolumeType'          => [
					'shape'        => 'VolumeType',
					'locationName' => 'volumeType',
				],
			],
		],
		'LaunchTemplateEbsBlockDeviceRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Encrypted'           => [ 'shape' => 'Boolean', ],
				'DeleteOnTermination' => [ 'shape' => 'Boolean', ],
				'Iops'                => [ 'shape' => 'Integer', ],
				'KmsKeyId'            => [ 'shape' => 'String', ],
				'SnapshotId'          => [ 'shape' => 'String', ],
				'VolumeSize'          => [ 'shape' => 'Integer', ],
				'VolumeType'          => [ 'shape' => 'VolumeType', ],
			],
		],
		'LaunchTemplateElasticInferenceAccelerator'                      => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [ 'Type' => [ 'shape' => 'String', ], ],
		],
		'LaunchTemplateElasticInferenceAcceleratorList'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateElasticInferenceAccelerator',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateElasticInferenceAcceleratorResponse'              => [
			'type'    => 'structure',
			'members' => [
				'Type' => [
					'shape'        => 'String',
					'locationName' => 'type',
				],
			],
		],
		'LaunchTemplateElasticInferenceAcceleratorResponseList'          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateElasticInferenceAcceleratorResponse',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateErrorCode'                                        => [
			'type' => 'string',
			'enum' => [
				'launchTemplateIdDoesNotExist',
				'launchTemplateIdMalformed',
				'launchTemplateNameDoesNotExist',
				'launchTemplateNameMalformed',
				'launchTemplateVersionDoesNotExist',
				'unexpectedError',
			],
		],
		'LaunchTemplateHibernationOptions'                               => [
			'type'    => 'structure',
			'members' => [
				'Configured' => [
					'shape'        => 'Boolean',
					'locationName' => 'configured',
				],
			],
		],
		'LaunchTemplateHibernationOptionsRequest'                        => [
			'type'    => 'structure',
			'members' => [ 'Configured' => [ 'shape' => 'Boolean', ], ],
		],
		'LaunchTemplateIamInstanceProfileSpecification'                  => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
				'Name' => [
					'shape'        => 'String',
					'locationName' => 'name',
				],
			],
		],
		'LaunchTemplateIamInstanceProfileSpecificationRequest'           => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [ 'shape' => 'String', ],
				'Name' => [ 'shape' => 'String', ],
			],
		],
		'LaunchTemplateInstanceMarketOptions'                            => [
			'type'    => 'structure',
			'members' => [
				'MarketType'  => [
					'shape'        => 'MarketType',
					'locationName' => 'marketType',
				],
				'SpotOptions' => [
					'shape'        => 'LaunchTemplateSpotMarketOptions',
					'locationName' => 'spotOptions',
				],
			],
		],
		'LaunchTemplateInstanceMarketOptionsRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'MarketType'  => [ 'shape' => 'MarketType', ],
				'SpotOptions' => [ 'shape' => 'LaunchTemplateSpotMarketOptionsRequest', ],
			],
		],
		'LaunchTemplateInstanceNetworkInterfaceSpecification'            => [
			'type'    => 'structure',
			'members' => [
				'AssociatePublicIpAddress'       => [
					'shape'        => 'Boolean',
					'locationName' => 'associatePublicIpAddress',
				],
				'DeleteOnTermination'            => [ 'shape' => 'Boolean', 'locationName' => 'deleteOnTermination', ],
				'Description'                    => [ 'shape' => 'String', 'locationName' => 'description', ],
				'DeviceIndex'                    => [ 'shape' => 'Integer', 'locationName' => 'deviceIndex', ],
				'Groups'                         => [ 'shape' => 'GroupIdStringList', 'locationName' => 'groupSet', ],
				'InterfaceType'                  => [ 'shape' => 'String', 'locationName' => 'interfaceType', ],
				'Ipv6AddressCount'               => [ 'shape' => 'Integer', 'locationName' => 'ipv6AddressCount', ],
				'Ipv6Addresses'                  => [
					'shape'        => 'InstanceIpv6AddressList',
					'locationName' => 'ipv6AddressesSet',
				],
				'NetworkInterfaceId'             => [ 'shape' => 'String', 'locationName' => 'networkInterfaceId', ],
				'PrivateIpAddress'               => [ 'shape' => 'String', 'locationName' => 'privateIpAddress', ],
				'PrivateIpAddresses'             => [
					'shape'        => 'PrivateIpAddressSpecificationList',
					'locationName' => 'privateIpAddressesSet',
				],
				'SecondaryPrivateIpAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'secondaryPrivateIpAddressCount',
				],
				'SubnetId'                       => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
			],
		],
		'LaunchTemplateInstanceNetworkInterfaceSpecificationList'        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateInstanceNetworkInterfaceSpecification',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateInstanceNetworkInterfaceSpecificationRequest'     => [
			'type'    => 'structure',
			'members' => [
				'AssociatePublicIpAddress'       => [ 'shape' => 'Boolean', ],
				'DeleteOnTermination'            => [ 'shape' => 'Boolean', ],
				'Description'                    => [ 'shape' => 'String', ],
				'DeviceIndex'                    => [ 'shape' => 'Integer', ],
				'Groups'                         => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'InterfaceType'                  => [ 'shape' => 'String', ],
				'Ipv6AddressCount'               => [ 'shape' => 'Integer', ],
				'Ipv6Addresses'                  => [ 'shape' => 'InstanceIpv6AddressListRequest', ],
				'NetworkInterfaceId'             => [ 'shape' => 'String', ],
				'PrivateIpAddress'               => [ 'shape' => 'String', ],
				'PrivateIpAddresses'             => [ 'shape' => 'PrivateIpAddressSpecificationList', ],
				'SecondaryPrivateIpAddressCount' => [ 'shape' => 'Integer', ],
				'SubnetId'                       => [ 'shape' => 'String', ],
			],
		],
		'LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList' => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateInstanceNetworkInterfaceSpecificationRequest',
				'locationName' => 'InstanceNetworkInterfaceSpecification',
			],
		],
		'LaunchTemplateLicenseConfiguration'                             => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationArn' => [
					'shape'        => 'String',
					'locationName' => 'licenseConfigurationArn',
				],
			],
		],
		'LaunchTemplateLicenseConfigurationRequest'                      => [
			'type'    => 'structure',
			'members' => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'LaunchTemplateLicenseList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateLicenseConfiguration',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateLicenseSpecificationListRequest'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateLicenseConfigurationRequest',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateName'                                             => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9\\(\\)\\.\\-/_]+',
		],
		'LaunchTemplateNameStringList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateName',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateOverrides'                                        => [
			'type'    => 'structure',
			'members' => [
				'InstanceType'     => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'SpotPrice'        => [
					'shape'        => 'String',
					'locationName' => 'spotPrice',
				],
				'SubnetId'         => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'WeightedCapacity' => [
					'shape'        => 'Double',
					'locationName' => 'weightedCapacity',
				],
				'Priority'         => [
					'shape'        => 'Double',
					'locationName' => 'priority',
				],
			],
		],
		'LaunchTemplateOverridesList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateOverrides',
				'locationName' => 'item',
			],
		],
		'LaunchTemplatePlacement'                                        => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'Affinity'         => [
					'shape'        => 'String',
					'locationName' => 'affinity',
				],
				'GroupName'        => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'HostId'           => [
					'shape'        => 'String',
					'locationName' => 'hostId',
				],
				'Tenancy'          => [
					'shape'        => 'Tenancy',
					'locationName' => 'tenancy',
				],
				'SpreadDomain'     => [
					'shape'        => 'String',
					'locationName' => 'spreadDomain',
				],
			],
		],
		'LaunchTemplatePlacementRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [ 'shape' => 'String', ],
				'Affinity'         => [ 'shape' => 'String', ],
				'GroupName'        => [ 'shape' => 'String', ],
				'HostId'           => [ 'shape' => 'String', ],
				'Tenancy'          => [ 'shape' => 'Tenancy', ],
				'SpreadDomain'     => [ 'shape' => 'String', ],
			],
		],
		'LaunchTemplateSet'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplate',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateSpecification'                                    => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'String', ],
				'Version'            => [ 'shape' => 'String', ],
			],
		],
		'LaunchTemplateSpotMarketOptions'                                => [
			'type'    => 'structure',
			'members' => [
				'MaxPrice'                     => [
					'shape'        => 'String',
					'locationName' => 'maxPrice',
				],
				'SpotInstanceType'             => [
					'shape'        => 'SpotInstanceType',
					'locationName' => 'spotInstanceType',
				],
				'BlockDurationMinutes'         => [
					'shape'        => 'Integer',
					'locationName' => 'blockDurationMinutes',
				],
				'ValidUntil'                   => [
					'shape'        => 'DateTime',
					'locationName' => 'validUntil',
				],
				'InstanceInterruptionBehavior' => [
					'shape'        => 'InstanceInterruptionBehavior',
					'locationName' => 'instanceInterruptionBehavior',
				],
			],
		],
		'LaunchTemplateSpotMarketOptionsRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'MaxPrice'                     => [ 'shape' => 'String', ],
				'SpotInstanceType'             => [ 'shape' => 'SpotInstanceType', ],
				'BlockDurationMinutes'         => [ 'shape' => 'Integer', ],
				'ValidUntil'                   => [ 'shape' => 'DateTime', ],
				'InstanceInterruptionBehavior' => [ 'shape' => 'InstanceInterruptionBehavior', ],
			],
		],
		'LaunchTemplateTagSpecification'                                 => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [
					'shape'        => 'ResourceType',
					'locationName' => 'resourceType',
				],
				'Tags'         => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'LaunchTemplateTagSpecificationList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateTagSpecification',
				'locationName' => 'item',
			],
		],
		'LaunchTemplateTagSpecificationRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [ 'shape' => 'ResourceType', ],
				'Tags'         => [
					'shape'        => 'TagList',
					'locationName' => 'Tag',
				],
			],
		],
		'LaunchTemplateTagSpecificationRequestList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateTagSpecificationRequest',
				'locationName' => 'LaunchTemplateTagSpecificationRequest',
			],
		],
		'LaunchTemplateVersion'                                          => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [
					'shape'        => 'String',
					'locationName' => 'launchTemplateId',
				],
				'LaunchTemplateName' => [
					'shape'        => 'LaunchTemplateName',
					'locationName' => 'launchTemplateName',
				],
				'VersionNumber'      => [
					'shape'        => 'Long',
					'locationName' => 'versionNumber',
				],
				'VersionDescription' => [
					'shape'        => 'VersionDescription',
					'locationName' => 'versionDescription',
				],
				'CreateTime'         => [
					'shape'        => 'DateTime',
					'locationName' => 'createTime',
				],
				'CreatedBy'          => [
					'shape'        => 'String',
					'locationName' => 'createdBy',
				],
				'DefaultVersion'     => [
					'shape'        => 'Boolean',
					'locationName' => 'defaultVersion',
				],
				'LaunchTemplateData' => [
					'shape'        => 'ResponseLaunchTemplateData',
					'locationName' => 'launchTemplateData',
				],
			],
		],
		'LaunchTemplateVersionSet'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LaunchTemplateVersion',
				'locationName' => 'item',
			],
		],
		'LaunchTemplatesMonitoring'                                      => [
			'type'    => 'structure',
			'members' => [
				'Enabled' => [
					'shape'        => 'Boolean',
					'locationName' => 'enabled',
				],
			],
		],
		'LaunchTemplatesMonitoringRequest'                               => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'Boolean', ], ],
		],
		'LicenseConfiguration'                                           => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationArn' => [
					'shape'        => 'String',
					'locationName' => 'licenseConfigurationArn',
				],
			],
		],
		'LicenseConfigurationRequest'                                    => [
			'type'    => 'structure',
			'members' => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'LicenseList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LicenseConfiguration',
				'locationName' => 'item',
			],
		],
		'LicenseSpecificationListRequest'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LicenseConfigurationRequest',
				'locationName' => 'item',
			],
		],
		'ListingState'                                                   => [
			'type' => 'string',
			'enum' => [
				'available',
				'sold',
				'cancelled',
				'pending',
			],
		],
		'ListingStatus'                                                  => [
			'type' => 'string',
			'enum' => [
				'active',
				'pending',
				'cancelled',
				'closed',
			],
		],
		'LoadBalancersConfig'                                            => [
			'type'    => 'structure',
			'members' => [
				'ClassicLoadBalancersConfig' => [
					'shape'        => 'ClassicLoadBalancersConfig',
					'locationName' => 'classicLoadBalancersConfig',
				],
				'TargetGroupsConfig'         => [
					'shape'        => 'TargetGroupsConfig',
					'locationName' => 'targetGroupsConfig',
				],
			],
		],
		'LoadPermission'                                                 => [
			'type'    => 'structure',
			'members' => [
				'UserId' => [
					'shape'        => 'String',
					'locationName' => 'userId',
				],
				'Group'  => [
					'shape'        => 'PermissionGroup',
					'locationName' => 'group',
				],
			],
		],
		'LoadPermissionList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LoadPermission',
				'locationName' => 'item',
			],
		],
		'LoadPermissionListRequest'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LoadPermissionRequest',
				'locationName' => 'item',
			],
		],
		'LoadPermissionModifications'                                    => [
			'type'    => 'structure',
			'members' => [
				'Add'    => [ 'shape' => 'LoadPermissionListRequest', ],
				'Remove' => [ 'shape' => 'LoadPermissionListRequest', ],
			],
		],
		'LoadPermissionRequest'                                          => [
			'type'    => 'structure',
			'members' => [
				'Group'  => [ 'shape' => 'PermissionGroup', ],
				'UserId' => [ 'shape' => 'String', ],
			],
		],
		'LogDestinationType'                                             => [
			'type' => 'string',
			'enum' => [ 'cloud-watch-logs', 's3', ],
		],
		'Long'                                                           => [ 'type' => 'long', ],
		'MarketType'                                                     => [
			'type' => 'string',
			'enum' => [ 'spot', ],
		],
		'MillisecondDateTime'                                            => [ 'type' => 'timestamp', ],
		'ModifyCapacityReservationRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'CapacityReservationId', ],
			'members'  => [
				'CapacityReservationId' => [ 'shape' => 'String', ],
				'InstanceCount'         => [ 'shape' => 'Integer', ],
				'EndDate'               => [ 'shape' => 'DateTime', ],
				'EndDateType'           => [ 'shape' => 'EndDateType', ],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyCapacityReservationResult'                                => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyClientVpnEndpointRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId'  => [ 'shape' => 'String', ],
				'ServerCertificateArn' => [ 'shape' => 'String', ],
				'ConnectionLogOptions' => [ 'shape' => 'ConnectionLogOptions', ],
				'DnsServers'           => [ 'shape' => 'DnsServersOptionsModifyStructure', ],
				'Description'          => [ 'shape' => 'String', ],
				'DryRun'               => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyClientVpnEndpointResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyEbsDefaultKmsKeyIdRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'KmsKeyId', ],
			'members'  => [
				'KmsKeyId' => [ 'shape' => 'String', ],
				'DryRun'   => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyEbsDefaultKmsKeyIdResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'KmsKeyId' => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
			],
		],
		'ModifyFleetRequest'                                             => [
			'type'     => 'structure',
			'required' => [
				'FleetId',
				'TargetCapacitySpecification',
			],
			'members'  => [
				'DryRun'                          => [ 'shape' => 'Boolean', ],
				'ExcessCapacityTerminationPolicy' => [ 'shape' => 'FleetExcessCapacityTerminationPolicy', ],
				'FleetId'                         => [ 'shape' => 'FleetIdentifier', ],
				'TargetCapacitySpecification'     => [ 'shape' => 'TargetCapacitySpecificationRequest', ],
			],
		],
		'ModifyFleetResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyFpgaImageAttributeRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'FpgaImageId', ],
			'members'  => [
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'FpgaImageId'    => [ 'shape' => 'String', ],
				'Attribute'      => [ 'shape' => 'FpgaImageAttributeName', ],
				'OperationType'  => [ 'shape' => 'OperationType', ],
				'UserIds'        => [
					'shape'        => 'UserIdStringList',
					'locationName' => 'UserId',
				],
				'UserGroups'     => [
					'shape'        => 'UserGroupStringList',
					'locationName' => 'UserGroup',
				],
				'ProductCodes'   => [
					'shape'        => 'ProductCodeStringList',
					'locationName' => 'ProductCode',
				],
				'LoadPermission' => [ 'shape' => 'LoadPermissionModifications', ],
				'Description'    => [ 'shape' => 'String', ],
				'Name'           => [ 'shape' => 'String', ],
			],
		],
		'ModifyFpgaImageAttributeResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'FpgaImageAttribute' => [
					'shape'        => 'FpgaImageAttribute',
					'locationName' => 'fpgaImageAttribute',
				],
			],
		],
		'ModifyHostsRequest'                                             => [
			'type'     => 'structure',
			'required' => [ 'HostIds', ],
			'members'  => [
				'AutoPlacement' => [
					'shape'        => 'AutoPlacement',
					'locationName' => 'autoPlacement',
				],
				'HostIds'       => [
					'shape'        => 'RequestHostIdList',
					'locationName' => 'hostId',
				],
				'HostRecovery'  => [ 'shape' => 'HostRecovery', ],
			],
		],
		'ModifyHostsResult'                                              => [
			'type'    => 'structure',
			'members' => [
				'Successful'   => [
					'shape'        => 'ResponseHostIdList',
					'locationName' => 'successful',
				],
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemList',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'ModifyIdFormatRequest'                                          => [
			'type'     => 'structure',
			'required' => [
				'Resource',
				'UseLongIds',
			],
			'members'  => [
				'Resource'   => [ 'shape' => 'String', ],
				'UseLongIds' => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyIdentityIdFormatRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'PrincipalArn',
				'Resource',
				'UseLongIds',
			],
			'members'  => [
				'PrincipalArn' => [
					'shape'        => 'String',
					'locationName' => 'principalArn',
				],
				'Resource'     => [
					'shape'        => 'String',
					'locationName' => 'resource',
				],
				'UseLongIds'   => [
					'shape'        => 'Boolean',
					'locationName' => 'useLongIds',
				],
			],
		],
		'ModifyImageAttributeRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'ImageId', ],
			'members'  => [
				'Attribute'        => [ 'shape' => 'String', ],
				'Description'      => [ 'shape' => 'AttributeValue', ],
				'ImageId'          => [ 'shape' => 'String', ],
				'LaunchPermission' => [ 'shape' => 'LaunchPermissionModifications', ],
				'OperationType'    => [ 'shape' => 'OperationType', ],
				'ProductCodes'     => [
					'shape'        => 'ProductCodeStringList',
					'locationName' => 'ProductCode',
				],
				'UserGroups'       => [
					'shape'        => 'UserGroupStringList',
					'locationName' => 'UserGroup',
				],
				'UserIds'          => [
					'shape'        => 'UserIdStringList',
					'locationName' => 'UserId',
				],
				'Value'            => [ 'shape' => 'String', ],
				'DryRun'           => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ModifyInstanceAttributeRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'SourceDestCheck'                   => [ 'shape' => 'AttributeBooleanValue', ],
				'Attribute'                         => [
					'shape'        => 'InstanceAttributeName',
					'locationName' => 'attribute',
				],
				'BlockDeviceMappings'               => [
					'shape'        => 'InstanceBlockDeviceMappingSpecificationList',
					'locationName' => 'blockDeviceMapping',
				],
				'DisableApiTermination'             => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'disableApiTermination',
				],
				'DryRun'                            => [ 'shape' => 'Boolean', 'locationName' => 'dryRun', ],
				'EbsOptimized'                      => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'ebsOptimized',
				],
				'EnaSupport'                        => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'enaSupport',
				],
				'Groups'                            => [ 'shape' => 'GroupIdStringList', 'locationName' => 'GroupId', ],
				'InstanceId'                        => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'InstanceInitiatedShutdownBehavior' => [
					'shape'        => 'AttributeValue',
					'locationName' => 'instanceInitiatedShutdownBehavior',
				],
				'InstanceType'                      => [
					'shape'        => 'AttributeValue',
					'locationName' => 'instanceType',
				],
				'Kernel'                            => [ 'shape' => 'AttributeValue', 'locationName' => 'kernel', ],
				'Ramdisk'                           => [ 'shape' => 'AttributeValue', 'locationName' => 'ramdisk', ],
				'SriovNetSupport'                   => [
					'shape'        => 'AttributeValue',
					'locationName' => 'sriovNetSupport',
				],
				'UserData'                          => [
					'shape'        => 'BlobAttributeValue',
					'locationName' => 'userData',
				],
				'Value'                             => [ 'shape' => 'String', 'locationName' => 'value', ],
			],
		],
		'ModifyInstanceCapacityReservationAttributesRequest'             => [
			'type'     => 'structure',
			'required' => [
				'InstanceId',
				'CapacityReservationSpecification',
			],
			'members'  => [
				'InstanceId'                       => [ 'shape' => 'String', ],
				'CapacityReservationSpecification' => [ 'shape' => 'CapacityReservationSpecification', ],
				'DryRun'                           => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyInstanceCapacityReservationAttributesResult'              => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyInstanceCreditSpecificationRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'InstanceCreditSpecifications', ],
			'members'  => [
				'DryRun'                       => [ 'shape' => 'Boolean', ],
				'ClientToken'                  => [ 'shape' => 'String', ],
				'InstanceCreditSpecifications' => [
					'shape'        => 'InstanceCreditSpecificationListRequest',
					'locationName' => 'InstanceCreditSpecification',
				],
			],
		],
		'ModifyInstanceCreditSpecificationResult'                        => [
			'type'    => 'structure',
			'members' => [
				'SuccessfulInstanceCreditSpecifications'   => [
					'shape'        => 'SuccessfulInstanceCreditSpecificationSet',
					'locationName' => 'successfulInstanceCreditSpecificationSet',
				],
				'UnsuccessfulInstanceCreditSpecifications' => [
					'shape'        => 'UnsuccessfulInstanceCreditSpecificationSet',
					'locationName' => 'unsuccessfulInstanceCreditSpecificationSet',
				],
			],
		],
		'ModifyInstanceEventStartTimeRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'InstanceId',
				'InstanceEventId',
				'NotBefore',
			],
			'members'  => [
				'DryRun'          => [ 'shape' => 'Boolean', ],
				'InstanceId'      => [ 'shape' => 'String', ],
				'InstanceEventId' => [ 'shape' => 'String', ],
				'NotBefore'       => [ 'shape' => 'DateTime', ],
			],
		],
		'ModifyInstanceEventStartTimeResult'                             => [
			'type'    => 'structure',
			'members' => [
				'Event' => [
					'shape'        => 'InstanceStatusEvent',
					'locationName' => 'event',
				],
			],
		],
		'ModifyInstancePlacementRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', ],
			'members'  => [
				'Affinity'        => [
					'shape'        => 'Affinity',
					'locationName' => 'affinity',
				],
				'GroupName'       => [ 'shape' => 'String', ],
				'HostId'          => [
					'shape'        => 'String',
					'locationName' => 'hostId',
				],
				'InstanceId'      => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Tenancy'         => [
					'shape'        => 'HostTenancy',
					'locationName' => 'tenancy',
				],
				'PartitionNumber' => [ 'shape' => 'Integer', ],
			],
		],
		'ModifyInstancePlacementResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyLaunchTemplateRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'DryRun'             => [ 'shape' => 'Boolean', ],
				'ClientToken'        => [ 'shape' => 'String', ],
				'LaunchTemplateId'   => [ 'shape' => 'String', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'DefaultVersion'     => [
					'shape'        => 'String',
					'locationName' => 'SetDefaultVersion',
				],
			],
		],
		'ModifyLaunchTemplateResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplate' => [
					'shape'        => 'LaunchTemplate',
					'locationName' => 'launchTemplate',
				],
			],
		],
		'ModifyNetworkInterfaceAttributeRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'Attachment'         => [
					'shape'        => 'NetworkInterfaceAttachmentChanges',
					'locationName' => 'attachment',
				],
				'Description'        => [
					'shape'        => 'AttributeValue',
					'locationName' => 'description',
				],
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Groups'             => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'SourceDestCheck'    => [
					'shape'        => 'AttributeBooleanValue',
					'locationName' => 'sourceDestCheck',
				],
			],
		],
		'ModifyReservedInstancesRequest'                                 => [
			'type'     => 'structure',
			'required' => [
				'ReservedInstancesIds',
				'TargetConfigurations',
			],
			'members'  => [
				'ReservedInstancesIds' => [
					'shape'        => 'ReservedInstancesIdStringList',
					'locationName' => 'ReservedInstancesId',
				],
				'ClientToken'          => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'TargetConfigurations' => [
					'shape'        => 'ReservedInstancesConfigurationList',
					'locationName' => 'ReservedInstancesConfigurationSetItemType',
				],
			],
		],
		'ModifyReservedInstancesResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesModificationId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesModificationId',
				],
			],
		],
		'ModifySnapshotAttributeRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'SnapshotId', ],
			'members'  => [
				'Attribute'              => [ 'shape' => 'SnapshotAttributeName', ],
				'CreateVolumePermission' => [ 'shape' => 'CreateVolumePermissionModifications', ],
				'GroupNames'             => [
					'shape'        => 'GroupNameStringList',
					'locationName' => 'UserGroup',
				],
				'OperationType'          => [ 'shape' => 'OperationType', ],
				'SnapshotId'             => [ 'shape' => 'String', ],
				'UserIds'                => [
					'shape'        => 'UserIdStringList',
					'locationName' => 'UserId',
				],
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ModifySpotFleetRequestRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'SpotFleetRequestId', ],
			'members'  => [
				'ExcessCapacityTerminationPolicy' => [
					'shape'        => 'ExcessCapacityTerminationPolicy',
					'locationName' => 'excessCapacityTerminationPolicy',
				],
				'SpotFleetRequestId'              => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
				'TargetCapacity'                  => [
					'shape'        => 'Integer',
					'locationName' => 'targetCapacity',
				],
				'OnDemandTargetCapacity'          => [ 'shape' => 'Integer', ],
			],
		],
		'ModifySpotFleetRequestResponse'                                 => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifySubnetAttributeRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'SubnetId', ],
			'members'  => [
				'AssignIpv6AddressOnCreation' => [ 'shape' => 'AttributeBooleanValue', ],
				'MapPublicIpOnLaunch'         => [ 'shape' => 'AttributeBooleanValue', ],
				'SubnetId'                    => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'ModifyTrafficMirrorFilterNetworkServicesRequest'                => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorFilterId', ],
			'members'  => [
				'TrafficMirrorFilterId' => [ 'shape' => 'String', ],
				'AddNetworkServices'    => [
					'shape'        => 'TrafficMirrorNetworkServiceList',
					'locationName' => 'AddNetworkService',
				],
				'RemoveNetworkServices' => [
					'shape'        => 'TrafficMirrorNetworkServiceList',
					'locationName' => 'RemoveNetworkService',
				],
				'DryRun'                => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyTrafficMirrorFilterNetworkServicesResult'                 => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilter' => [
					'shape'        => 'TrafficMirrorFilter',
					'locationName' => 'trafficMirrorFilter',
				],
			],
		],
		'ModifyTrafficMirrorFilterRuleRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorFilterRuleId', ],
			'members'  => [
				'TrafficMirrorFilterRuleId' => [ 'shape' => 'String', ],
				'TrafficDirection'          => [ 'shape' => 'TrafficDirection', ],
				'RuleNumber'                => [ 'shape' => 'Integer', ],
				'RuleAction'                => [ 'shape' => 'TrafficMirrorRuleAction', ],
				'DestinationPortRange'      => [ 'shape' => 'TrafficMirrorPortRangeRequest', ],
				'SourcePortRange'           => [ 'shape' => 'TrafficMirrorPortRangeRequest', ],
				'Protocol'                  => [ 'shape' => 'Integer', ],
				'DestinationCidrBlock'      => [ 'shape' => 'String', ],
				'SourceCidrBlock'           => [ 'shape' => 'String', ],
				'Description'               => [ 'shape' => 'String', ],
				'RemoveFields'              => [
					'shape'        => 'TrafficMirrorFilterRuleFieldList',
					'locationName' => 'RemoveField',
				],
				'DryRun'                    => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyTrafficMirrorFilterRuleResult'                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterRule' => [
					'shape'        => 'TrafficMirrorFilterRule',
					'locationName' => 'trafficMirrorFilterRule',
				],
			],
		],
		'ModifyTrafficMirrorSessionRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'TrafficMirrorSessionId', ],
			'members'  => [
				'TrafficMirrorSessionId' => [ 'shape' => 'String', ],
				'TrafficMirrorTargetId'  => [ 'shape' => 'String', ],
				'TrafficMirrorFilterId'  => [ 'shape' => 'String', ],
				'PacketLength'           => [ 'shape' => 'Integer', ],
				'SessionNumber'          => [ 'shape' => 'Integer', ],
				'VirtualNetworkId'       => [ 'shape' => 'Integer', ],
				'Description'            => [ 'shape' => 'String', ],
				'RemoveFields'           => [
					'shape'        => 'TrafficMirrorSessionFieldList',
					'locationName' => 'RemoveField',
				],
				'DryRun'                 => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyTrafficMirrorSessionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSession' => [
					'shape'        => 'TrafficMirrorSession',
					'locationName' => 'trafficMirrorSession',
				],
			],
		],
		'ModifyTransitGatewayVpcAttachmentRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayAttachmentId', ],
			'members'  => [
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'AddSubnetIds'               => [ 'shape' => 'ValueStringList', ],
				'RemoveSubnetIds'            => [ 'shape' => 'ValueStringList', ],
				'Options'                    => [ 'shape' => 'ModifyTransitGatewayVpcAttachmentRequestOptions', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyTransitGatewayVpcAttachmentRequestOptions'                => [
			'type'    => 'structure',
			'members' => [
				'DnsSupport'  => [ 'shape' => 'DnsSupportValue', ],
				'Ipv6Support' => [ 'shape' => 'Ipv6SupportValue', ],
			],
		],
		'ModifyTransitGatewayVpcAttachmentResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachment' => [
					'shape'        => 'TransitGatewayVpcAttachment',
					'locationName' => 'transitGatewayVpcAttachment',
				],
			],
		],
		'ModifyVolumeAttributeRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'AutoEnableIO' => [ 'shape' => 'AttributeBooleanValue', ],
				'VolumeId'     => [ 'shape' => 'String', ],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ModifyVolumeRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'VolumeId', ],
			'members'  => [
				'DryRun'     => [ 'shape' => 'Boolean', ],
				'VolumeId'   => [ 'shape' => 'String', ],
				'Size'       => [ 'shape' => 'Integer', ],
				'VolumeType' => [ 'shape' => 'VolumeType', ],
				'Iops'       => [ 'shape' => 'Integer', ],
			],
		],
		'ModifyVolumeResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'VolumeModification' => [
					'shape'        => 'VolumeModification',
					'locationName' => 'volumeModification',
				],
			],
		],
		'ModifyVpcAttributeRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'VpcId', ],
			'members'  => [
				'EnableDnsHostnames' => [ 'shape' => 'AttributeBooleanValue', ],
				'EnableDnsSupport'   => [ 'shape' => 'AttributeBooleanValue', ],
				'VpcId'              => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'ModifyVpcEndpointConnectionNotificationRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'ConnectionNotificationId', ],
			'members'  => [
				'DryRun'                    => [ 'shape' => 'Boolean', ],
				'ConnectionNotificationId'  => [ 'shape' => 'String', ],
				'ConnectionNotificationArn' => [ 'shape' => 'String', ],
				'ConnectionEvents'          => [ 'shape' => 'ValueStringList', ],
			],
		],
		'ModifyVpcEndpointConnectionNotificationResult'                  => [
			'type'    => 'structure',
			'members' => [
				'ReturnValue' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyVpcEndpointRequest'                                       => [
			'type'     => 'structure',
			'required' => [ 'VpcEndpointId', ],
			'members'  => [
				'DryRun'                 => [ 'shape' => 'Boolean', ],
				'VpcEndpointId'          => [ 'shape' => 'String', ],
				'ResetPolicy'            => [ 'shape' => 'Boolean', ],
				'PolicyDocument'         => [ 'shape' => 'String', ],
				'AddRouteTableIds'       => [
					'shape'        => 'ValueStringList',
					'locationName' => 'AddRouteTableId',
				],
				'RemoveRouteTableIds'    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RemoveRouteTableId',
				],
				'AddSubnetIds'           => [
					'shape'        => 'ValueStringList',
					'locationName' => 'AddSubnetId',
				],
				'RemoveSubnetIds'        => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RemoveSubnetId',
				],
				'AddSecurityGroupIds'    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'AddSecurityGroupId',
				],
				'RemoveSecurityGroupIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RemoveSecurityGroupId',
				],
				'PrivateDnsEnabled'      => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyVpcEndpointResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyVpcEndpointServiceConfigurationRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ServiceId', ],
			'members'  => [
				'DryRun'                        => [ 'shape' => 'Boolean', ],
				'ServiceId'                     => [ 'shape' => 'String', ],
				'AcceptanceRequired'            => [ 'shape' => 'Boolean', ],
				'AddNetworkLoadBalancerArns'    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'AddNetworkLoadBalancerArn',
				],
				'RemoveNetworkLoadBalancerArns' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'RemoveNetworkLoadBalancerArn',
				],
			],
		],
		'ModifyVpcEndpointServiceConfigurationResult'                    => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyVpcEndpointServicePermissionsRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ServiceId', ],
			'members'  => [
				'DryRun'                  => [ 'shape' => 'Boolean', ],
				'ServiceId'               => [ 'shape' => 'String', ],
				'AddAllowedPrincipals'    => [ 'shape' => 'ValueStringList', ],
				'RemoveAllowedPrincipals' => [ 'shape' => 'ValueStringList', ],
			],
		],
		'ModifyVpcEndpointServicePermissionsResult'                      => [
			'type'    => 'structure',
			'members' => [
				'ReturnValue' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyVpcPeeringConnectionOptionsRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'VpcPeeringConnectionId', ],
			'members'  => [
				'AccepterPeeringConnectionOptions'  => [ 'shape' => 'PeeringConnectionOptionsRequest', ],
				'DryRun'                            => [ 'shape' => 'Boolean', ],
				'RequesterPeeringConnectionOptions' => [ 'shape' => 'PeeringConnectionOptionsRequest', ],
				'VpcPeeringConnectionId'            => [ 'shape' => 'String', ],
			],
		],
		'ModifyVpcPeeringConnectionOptionsResult'                        => [
			'type'    => 'structure',
			'members' => [
				'AccepterPeeringConnectionOptions'  => [
					'shape'        => 'PeeringConnectionOptions',
					'locationName' => 'accepterPeeringConnectionOptions',
				],
				'RequesterPeeringConnectionOptions' => [
					'shape'        => 'PeeringConnectionOptions',
					'locationName' => 'requesterPeeringConnectionOptions',
				],
			],
		],
		'ModifyVpcTenancyRequest'                                        => [
			'type'     => 'structure',
			'required' => [
				'VpcId',
				'InstanceTenancy',
			],
			'members'  => [
				'VpcId'           => [ 'shape' => 'String', ],
				'InstanceTenancy' => [ 'shape' => 'VpcTenancy', ],
				'DryRun'          => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyVpcTenancyResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'ReturnValue' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ModifyVpnConnectionRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'VpnConnectionId', ],
			'members'  => [
				'VpnConnectionId'  => [ 'shape' => 'String', ],
				'TransitGatewayId' => [ 'shape' => 'String', ],
				'VpnGatewayId'     => [ 'shape' => 'String', ],
				'DryRun'           => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyVpnConnectionResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'VpnConnection' => [
					'shape'        => 'VpnConnection',
					'locationName' => 'vpnConnection',
				],
			],
		],
		'MonitorInstancesRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'MonitorInstancesResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'InstanceMonitorings' => [
					'shape'        => 'InstanceMonitoringList',
					'locationName' => 'instancesSet',
				],
			],
		],
		'Monitoring'                                                     => [
			'type'    => 'structure',
			'members' => [
				'State' => [
					'shape'        => 'MonitoringState',
					'locationName' => 'state',
				],
			],
		],
		'MonitoringState'                                                => [
			'type' => 'string',
			'enum' => [
				'disabled',
				'disabling',
				'enabled',
				'pending',
			],
		],
		'MoveAddressToVpcRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'PublicIp', ],
			'members'  => [
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'PublicIp' => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'MoveAddressToVpcResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'AllocationId' => [
					'shape'        => 'String',
					'locationName' => 'allocationId',
				],
				'Status'       => [
					'shape'        => 'Status',
					'locationName' => 'status',
				],
			],
		],
		'MoveStatus'                                                     => [
			'type' => 'string',
			'enum' => [
				'movingToVpc',
				'restoringToClassic',
			],
		],
		'MovingAddressStatus'                                            => [
			'type'    => 'structure',
			'members' => [
				'MoveStatus' => [
					'shape'        => 'MoveStatus',
					'locationName' => 'moveStatus',
				],
				'PublicIp'   => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'MovingAddressStatusSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'MovingAddressStatus',
				'locationName' => 'item',
			],
		],
		'NatGateway'                                                     => [
			'type'    => 'structure',
			'members' => [
				'CreateTime'           => [
					'shape'        => 'DateTime',
					'locationName' => 'createTime',
				],
				'DeleteTime'           => [
					'shape'        => 'DateTime',
					'locationName' => 'deleteTime',
				],
				'FailureCode'          => [
					'shape'        => 'String',
					'locationName' => 'failureCode',
				],
				'FailureMessage'       => [
					'shape'        => 'String',
					'locationName' => 'failureMessage',
				],
				'NatGatewayAddresses'  => [
					'shape'        => 'NatGatewayAddressList',
					'locationName' => 'natGatewayAddressSet',
				],
				'NatGatewayId'         => [
					'shape'        => 'String',
					'locationName' => 'natGatewayId',
				],
				'ProvisionedBandwidth' => [
					'shape'        => 'ProvisionedBandwidth',
					'locationName' => 'provisionedBandwidth',
				],
				'State'                => [
					'shape'        => 'NatGatewayState',
					'locationName' => 'state',
				],
				'SubnetId'             => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
				'VpcId'                => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'Tags'                 => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'NatGatewayAddress'                                              => [
			'type'    => 'structure',
			'members' => [
				'AllocationId'       => [
					'shape'        => 'String',
					'locationName' => 'allocationId',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'PrivateIp'          => [
					'shape'        => 'String',
					'locationName' => 'privateIp',
				],
				'PublicIp'           => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'NatGatewayAddressList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NatGatewayAddress',
				'locationName' => 'item',
			],
		],
		'NatGatewayList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NatGateway',
				'locationName' => 'item',
			],
		],
		'NatGatewayState'                                                => [
			'type' => 'string',
			'enum' => [
				'pending',
				'failed',
				'available',
				'deleting',
				'deleted',
			],
		],
		'NetworkAcl'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Associations' => [
					'shape'        => 'NetworkAclAssociationList',
					'locationName' => 'associationSet',
				],
				'Entries'      => [
					'shape'        => 'NetworkAclEntryList',
					'locationName' => 'entrySet',
				],
				'IsDefault'    => [
					'shape'        => 'Boolean',
					'locationName' => 'default',
				],
				'NetworkAclId' => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
				'Tags'         => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcId'        => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'OwnerId'      => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
			],
		],
		'NetworkAclAssociation'                                          => [
			'type'    => 'structure',
			'members' => [
				'NetworkAclAssociationId' => [
					'shape'        => 'String',
					'locationName' => 'networkAclAssociationId',
				],
				'NetworkAclId'            => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
				'SubnetId'                => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'NetworkAclAssociationList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkAclAssociation',
				'locationName' => 'item',
			],
		],
		'NetworkAclEntry'                                                => [
			'type'    => 'structure',
			'members' => [
				'CidrBlock'     => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'Egress'        => [
					'shape'        => 'Boolean',
					'locationName' => 'egress',
				],
				'IcmpTypeCode'  => [
					'shape'        => 'IcmpTypeCode',
					'locationName' => 'icmpTypeCode',
				],
				'Ipv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'PortRange'     => [
					'shape'        => 'PortRange',
					'locationName' => 'portRange',
				],
				'Protocol'      => [
					'shape'        => 'String',
					'locationName' => 'protocol',
				],
				'RuleAction'    => [
					'shape'        => 'RuleAction',
					'locationName' => 'ruleAction',
				],
				'RuleNumber'    => [
					'shape'        => 'Integer',
					'locationName' => 'ruleNumber',
				],
			],
		],
		'NetworkAclEntryList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkAclEntry',
				'locationName' => 'item',
			],
		],
		'NetworkAclList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkAcl',
				'locationName' => 'item',
			],
		],
		'NetworkInterface'                                               => [
			'type'    => 'structure',
			'members' => [
				'Association'        => [ 'shape' => 'NetworkInterfaceAssociation', 'locationName' => 'association', ],
				'Attachment'         => [ 'shape' => 'NetworkInterfaceAttachment', 'locationName' => 'attachment', ],
				'AvailabilityZone'   => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'Description'        => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Groups'             => [ 'shape' => 'GroupIdentifierList', 'locationName' => 'groupSet', ],
				'InterfaceType'      => [ 'shape' => 'NetworkInterfaceType', 'locationName' => 'interfaceType', ],
				'Ipv6Addresses'      => [
					'shape'        => 'NetworkInterfaceIpv6AddressesList',
					'locationName' => 'ipv6AddressesSet',
				],
				'MacAddress'         => [ 'shape' => 'String', 'locationName' => 'macAddress', ],
				'NetworkInterfaceId' => [ 'shape' => 'String', 'locationName' => 'networkInterfaceId', ],
				'OwnerId'            => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
				'PrivateDnsName'     => [ 'shape' => 'String', 'locationName' => 'privateDnsName', ],
				'PrivateIpAddress'   => [ 'shape' => 'String', 'locationName' => 'privateIpAddress', ],
				'PrivateIpAddresses' => [
					'shape'        => 'NetworkInterfacePrivateIpAddressList',
					'locationName' => 'privateIpAddressesSet',
				],
				'RequesterId'        => [ 'shape' => 'String', 'locationName' => 'requesterId', ],
				'RequesterManaged'   => [ 'shape' => 'Boolean', 'locationName' => 'requesterManaged', ],
				'SourceDestCheck'    => [ 'shape' => 'Boolean', 'locationName' => 'sourceDestCheck', ],
				'Status'             => [ 'shape' => 'NetworkInterfaceStatus', 'locationName' => 'status', ],
				'SubnetId'           => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'TagSet'             => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'VpcId'              => [ 'shape' => 'String', 'locationName' => 'vpcId', ],
			],
		],
		'NetworkInterfaceAssociation'                                    => [
			'type'    => 'structure',
			'members' => [
				'AllocationId'  => [
					'shape'        => 'String',
					'locationName' => 'allocationId',
				],
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'IpOwnerId'     => [
					'shape'        => 'String',
					'locationName' => 'ipOwnerId',
				],
				'PublicDnsName' => [
					'shape'        => 'String',
					'locationName' => 'publicDnsName',
				],
				'PublicIp'      => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'NetworkInterfaceAttachment'                                     => [
			'type'    => 'structure',
			'members' => [
				'AttachTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'attachTime',
				],
				'AttachmentId'        => [
					'shape'        => 'String',
					'locationName' => 'attachmentId',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
				'DeviceIndex'         => [
					'shape'        => 'Integer',
					'locationName' => 'deviceIndex',
				],
				'InstanceId'          => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'InstanceOwnerId'     => [
					'shape'        => 'String',
					'locationName' => 'instanceOwnerId',
				],
				'Status'              => [
					'shape'        => 'AttachmentStatus',
					'locationName' => 'status',
				],
			],
		],
		'NetworkInterfaceAttachmentChanges'                              => [
			'type'    => 'structure',
			'members' => [
				'AttachmentId'        => [
					'shape'        => 'String',
					'locationName' => 'attachmentId',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
			],
		],
		'NetworkInterfaceAttribute'                                      => [
			'type' => 'string',
			'enum' => [
				'description',
				'groupSet',
				'sourceDestCheck',
				'attachment',
			],
		],
		'NetworkInterfaceCreationType'                                   => [
			'type' => 'string',
			'enum' => [ 'efa', ],
		],
		'NetworkInterfaceIdList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'NetworkInterfaceIpv6Address'                                    => [
			'type'    => 'structure',
			'members' => [
				'Ipv6Address' => [
					'shape'        => 'String',
					'locationName' => 'ipv6Address',
				],
			],
		],
		'NetworkInterfaceIpv6AddressesList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkInterfaceIpv6Address',
				'locationName' => 'item',
			],
		],
		'NetworkInterfaceList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkInterface',
				'locationName' => 'item',
			],
		],
		'NetworkInterfacePermission'                                     => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfacePermissionId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfacePermissionId',
				],
				'NetworkInterfaceId'           => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'AwsAccountId'                 => [
					'shape'        => 'String',
					'locationName' => 'awsAccountId',
				],
				'AwsService'                   => [
					'shape'        => 'String',
					'locationName' => 'awsService',
				],
				'Permission'                   => [
					'shape'        => 'InterfacePermissionType',
					'locationName' => 'permission',
				],
				'PermissionState'              => [
					'shape'        => 'NetworkInterfacePermissionState',
					'locationName' => 'permissionState',
				],
			],
		],
		'NetworkInterfacePermissionIdList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'NetworkInterfacePermissionList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkInterfacePermission',
				'locationName' => 'item',
			],
		],
		'NetworkInterfacePermissionState'                                => [
			'type'    => 'structure',
			'members' => [
				'State'         => [
					'shape'        => 'NetworkInterfacePermissionStateCode',
					'locationName' => 'state',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
			],
		],
		'NetworkInterfacePermissionStateCode'                            => [
			'type' => 'string',
			'enum' => [
				'pending',
				'granted',
				'revoking',
				'revoked',
			],
		],
		'NetworkInterfacePrivateIpAddress'                               => [
			'type'    => 'structure',
			'members' => [
				'Association'      => [
					'shape'        => 'NetworkInterfaceAssociation',
					'locationName' => 'association',
				],
				'Primary'          => [
					'shape'        => 'Boolean',
					'locationName' => 'primary',
				],
				'PrivateDnsName'   => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'PrivateIpAddress' => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'NetworkInterfacePrivateIpAddressList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NetworkInterfacePrivateIpAddress',
				'locationName' => 'item',
			],
		],
		'NetworkInterfaceStatus'                                         => [
			'type' => 'string',
			'enum' => [
				'available',
				'associated',
				'attaching',
				'in-use',
				'detaching',
			],
		],
		'NetworkInterfaceType'                                           => [
			'type' => 'string',
			'enum' => [
				'interface',
				'natGateway',
				'efa',
			],
		],
		'NewDhcpConfiguration'                                           => [
			'type'    => 'structure',
			'members' => [
				'Key'    => [
					'shape'        => 'String',
					'locationName' => 'key',
				],
				'Values' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'Value',
				],
			],
		],
		'NewDhcpConfigurationList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NewDhcpConfiguration',
				'locationName' => 'item',
			],
		],
		'NextToken'                                                      => [ 'type' => 'string', ],
		'OccurrenceDayRequestSet'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Integer',
				'locationName' => 'OccurenceDay',
			],
		],
		'OccurrenceDaySet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Integer',
				'locationName' => 'item',
			],
		],
		'OfferingClassType'                                              => [
			'type' => 'string',
			'enum' => [ 'standard', 'convertible', ],
		],
		'OfferingTypeValues'                                             => [
			'type' => 'string',
			'enum' => [
				'Heavy Utilization',
				'Medium Utilization',
				'Light Utilization',
				'No Upfront',
				'Partial Upfront',
				'All Upfront',
			],
		],
		'OnDemandAllocationStrategy'                                     => [
			'type' => 'string',
			'enum' => [
				'lowestPrice',
				'prioritized',
			],
		],
		'OnDemandOptions'                                                => [
			'type'    => 'structure',
			'members' => [
				'AllocationStrategy'     => [
					'shape'        => 'FleetOnDemandAllocationStrategy',
					'locationName' => 'allocationStrategy',
				],
				'SingleInstanceType'     => [
					'shape'        => 'Boolean',
					'locationName' => 'singleInstanceType',
				],
				'SingleAvailabilityZone' => [
					'shape'        => 'Boolean',
					'locationName' => 'singleAvailabilityZone',
				],
				'MinTargetCapacity'      => [
					'shape'        => 'Integer',
					'locationName' => 'minTargetCapacity',
				],
				'MaxTotalPrice'          => [
					'shape'        => 'String',
					'locationName' => 'maxTotalPrice',
				],
			],
		],
		'OnDemandOptionsRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'AllocationStrategy'     => [ 'shape' => 'FleetOnDemandAllocationStrategy', ],
				'SingleInstanceType'     => [ 'shape' => 'Boolean', ],
				'SingleAvailabilityZone' => [ 'shape' => 'Boolean', ],
				'MinTargetCapacity'      => [ 'shape' => 'Integer', ],
				'MaxTotalPrice'          => [ 'shape' => 'String', ],
			],
		],
		'OperationType'                                                  => [
			'type' => 'string',
			'enum' => [ 'add', 'remove', ],
		],
		'OwnerStringList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'Owner',
			],
		],
		'PaymentOption'                                                  => [
			'type' => 'string',
			'enum' => [
				'AllUpfront',
				'PartialUpfront',
				'NoUpfront',
			],
		],
		'PciId'                                                          => [
			'type'    => 'structure',
			'members' => [
				'DeviceId'          => [ 'shape' => 'String', ],
				'VendorId'          => [ 'shape' => 'String', ],
				'SubsystemId'       => [ 'shape' => 'String', ],
				'SubsystemVendorId' => [ 'shape' => 'String', ],
			],
		],
		'PeeringConnectionOptions'                                       => [
			'type'    => 'structure',
			'members' => [
				'AllowDnsResolutionFromRemoteVpc'            => [
					'shape'        => 'Boolean',
					'locationName' => 'allowDnsResolutionFromRemoteVpc',
				],
				'AllowEgressFromLocalClassicLinkToRemoteVpc' => [
					'shape'        => 'Boolean',
					'locationName' => 'allowEgressFromLocalClassicLinkToRemoteVpc',
				],
				'AllowEgressFromLocalVpcToRemoteClassicLink' => [
					'shape'        => 'Boolean',
					'locationName' => 'allowEgressFromLocalVpcToRemoteClassicLink',
				],
			],
		],
		'PeeringConnectionOptionsRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'AllowDnsResolutionFromRemoteVpc'            => [ 'shape' => 'Boolean', ],
				'AllowEgressFromLocalClassicLinkToRemoteVpc' => [ 'shape' => 'Boolean', ],
				'AllowEgressFromLocalVpcToRemoteClassicLink' => [ 'shape' => 'Boolean', ],
			],
		],
		'PermissionGroup'                                                => [
			'type' => 'string',
			'enum' => [ 'all', ],
		],
		'Placement'                                                      => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'Affinity'         => [
					'shape'        => 'String',
					'locationName' => 'affinity',
				],
				'GroupName'        => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'PartitionNumber'  => [
					'shape'        => 'Integer',
					'locationName' => 'partitionNumber',
				],
				'HostId'           => [
					'shape'        => 'String',
					'locationName' => 'hostId',
				],
				'Tenancy'          => [
					'shape'        => 'Tenancy',
					'locationName' => 'tenancy',
				],
				'SpreadDomain'     => [
					'shape'        => 'String',
					'locationName' => 'spreadDomain',
				],
			],
		],
		'PlacementGroup'                                                 => [
			'type'    => 'structure',
			'members' => [
				'GroupName'      => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'State'          => [
					'shape'        => 'PlacementGroupState',
					'locationName' => 'state',
				],
				'Strategy'       => [
					'shape'        => 'PlacementStrategy',
					'locationName' => 'strategy',
				],
				'PartitionCount' => [
					'shape'        => 'Integer',
					'locationName' => 'partitionCount',
				],
			],
		],
		'PlacementGroupList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PlacementGroup',
				'locationName' => 'item',
			],
		],
		'PlacementGroupState'                                            => [
			'type' => 'string',
			'enum' => [
				'pending',
				'available',
				'deleting',
				'deleted',
			],
		],
		'PlacementGroupStringList'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'PlacementResponse'                                              => [
			'type'    => 'structure',
			'members' => [
				'GroupName' => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
			],
		],
		'PlacementStrategy'                                              => [
			'type' => 'string',
			'enum' => [
				'cluster',
				'spread',
				'partition',
			],
		],
		'PlatformValues'                                                 => [
			'type' => 'string',
			'enum' => [ 'Windows', ],
		],
		'PoolMaxResults'                                                 => [
			'type' => 'integer',
			'max'  => 10,
			'min'  => 1,
		],
		'PortRange'                                                      => [
			'type'    => 'structure',
			'members' => [
				'From' => [
					'shape'        => 'Integer',
					'locationName' => 'from',
				],
				'To'   => [
					'shape'        => 'Integer',
					'locationName' => 'to',
				],
			],
		],
		'PrefixList'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Cidrs'          => [
					'shape'        => 'ValueStringList',
					'locationName' => 'cidrSet',
				],
				'PrefixListId'   => [
					'shape'        => 'String',
					'locationName' => 'prefixListId',
				],
				'PrefixListName' => [
					'shape'        => 'String',
					'locationName' => 'prefixListName',
				],
			],
		],
		'PrefixListId'                                                   => [
			'type'    => 'structure',
			'members' => [
				'Description'  => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'PrefixListId' => [
					'shape'        => 'String',
					'locationName' => 'prefixListId',
				],
			],
		],
		'PrefixListIdList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PrefixListId',
				'locationName' => 'item',
			],
		],
		'PrefixListIdSet'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'PrefixListSet'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PrefixList',
				'locationName' => 'item',
			],
		],
		'PriceSchedule'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Active'       => [
					'shape'        => 'Boolean',
					'locationName' => 'active',
				],
				'CurrencyCode' => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Price'        => [
					'shape'        => 'Double',
					'locationName' => 'price',
				],
				'Term'         => [
					'shape'        => 'Long',
					'locationName' => 'term',
				],
			],
		],
		'PriceScheduleList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PriceSchedule',
				'locationName' => 'item',
			],
		],
		'PriceScheduleSpecification'                                     => [
			'type'    => 'structure',
			'members' => [
				'CurrencyCode' => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Price'        => [
					'shape'        => 'Double',
					'locationName' => 'price',
				],
				'Term'         => [
					'shape'        => 'Long',
					'locationName' => 'term',
				],
			],
		],
		'PriceScheduleSpecificationList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PriceScheduleSpecification',
				'locationName' => 'item',
			],
		],
		'PricingDetail'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Count' => [
					'shape'        => 'Integer',
					'locationName' => 'count',
				],
				'Price' => [
					'shape'        => 'Double',
					'locationName' => 'price',
				],
			],
		],
		'PricingDetailsList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PricingDetail',
				'locationName' => 'item',
			],
		],
		'PrincipalIdFormat'                                              => [
			'type'    => 'structure',
			'members' => [
				'Arn'      => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
				'Statuses' => [
					'shape'        => 'IdFormatList',
					'locationName' => 'statusSet',
				],
			],
		],
		'PrincipalIdFormatList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PrincipalIdFormat',
				'locationName' => 'item',
			],
		],
		'PrincipalType'                                                  => [
			'type' => 'string',
			'enum' => [
				'All',
				'Service',
				'OrganizationUnit',
				'Account',
				'User',
				'Role',
			],
		],
		'PrivateIpAddressConfigSet'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstancesPrivateIpAddressConfig',
				'locationName' => 'PrivateIpAddressConfigSet',
			],
		],
		'PrivateIpAddressSpecification'                                  => [
			'type'    => 'structure',
			'members' => [
				'Primary'          => [
					'shape'        => 'Boolean',
					'locationName' => 'primary',
				],
				'PrivateIpAddress' => [
					'shape'        => 'String',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'PrivateIpAddressSpecificationList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PrivateIpAddressSpecification',
				'locationName' => 'item',
			],
		],
		'PrivateIpAddressStringList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'PrivateIpAddress',
			],
		],
		'ProductCode'                                                    => [
			'type'    => 'structure',
			'members' => [
				'ProductCodeId'   => [
					'shape'        => 'String',
					'locationName' => 'productCode',
				],
				'ProductCodeType' => [
					'shape'        => 'ProductCodeValues',
					'locationName' => 'type',
				],
			],
		],
		'ProductCodeList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ProductCode',
				'locationName' => 'item',
			],
		],
		'ProductCodeStringList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ProductCode',
			],
		],
		'ProductCodeValues'                                              => [
			'type' => 'string',
			'enum' => [ 'devpay', 'marketplace', ],
		],
		'ProductDescriptionList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'PropagatingVgw'                                                 => [
			'type'    => 'structure',
			'members' => [
				'GatewayId' => [
					'shape'        => 'String',
					'locationName' => 'gatewayId',
				],
			],
		],
		'PropagatingVgwList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PropagatingVgw',
				'locationName' => 'item',
			],
		],
		'ProvisionByoipCidrRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'Cidr', ],
			'members'  => [
				'Cidr'                     => [ 'shape' => 'String', ],
				'CidrAuthorizationContext' => [ 'shape' => 'CidrAuthorizationContext', ],
				'Description'              => [ 'shape' => 'String', ],
				'DryRun'                   => [ 'shape' => 'Boolean', ],
			],
		],
		'ProvisionByoipCidrResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'ByoipCidr' => [
					'shape'        => 'ByoipCidr',
					'locationName' => 'byoipCidr',
				],
			],
		],
		'ProvisionedBandwidth'                                           => [
			'type'    => 'structure',
			'members' => [
				'ProvisionTime' => [
					'shape'        => 'DateTime',
					'locationName' => 'provisionTime',
				],
				'Provisioned'   => [
					'shape'        => 'String',
					'locationName' => 'provisioned',
				],
				'RequestTime'   => [
					'shape'        => 'DateTime',
					'locationName' => 'requestTime',
				],
				'Requested'     => [
					'shape'        => 'String',
					'locationName' => 'requested',
				],
				'Status'        => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
			],
		],
		'PublicIpStringList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'PublicIp',
			],
		],
		'PublicIpv4Pool'                                                 => [
			'type'    => 'structure',
			'members' => [
				'PoolId'                     => [
					'shape'        => 'String',
					'locationName' => 'poolId',
				],
				'Description'                => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'PoolAddressRanges'          => [
					'shape'        => 'PublicIpv4PoolRangeSet',
					'locationName' => 'poolAddressRangeSet',
				],
				'TotalAddressCount'          => [
					'shape'        => 'Integer',
					'locationName' => 'totalAddressCount',
				],
				'TotalAvailableAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'totalAvailableAddressCount',
				],
			],
		],
		'PublicIpv4PoolRange'                                            => [
			'type'    => 'structure',
			'members' => [
				'FirstAddress'          => [
					'shape'        => 'String',
					'locationName' => 'firstAddress',
				],
				'LastAddress'           => [
					'shape'        => 'String',
					'locationName' => 'lastAddress',
				],
				'AddressCount'          => [
					'shape'        => 'Integer',
					'locationName' => 'addressCount',
				],
				'AvailableAddressCount' => [
					'shape'        => 'Integer',
					'locationName' => 'availableAddressCount',
				],
			],
		],
		'PublicIpv4PoolRangeSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PublicIpv4PoolRange',
				'locationName' => 'item',
			],
		],
		'PublicIpv4PoolSet'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PublicIpv4Pool',
				'locationName' => 'item',
			],
		],
		'Purchase'                                                       => [
			'type'    => 'structure',
			'members' => [
				'CurrencyCode'      => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Duration'          => [
					'shape'        => 'Integer',
					'locationName' => 'duration',
				],
				'HostIdSet'         => [
					'shape'        => 'ResponseHostIdSet',
					'locationName' => 'hostIdSet',
				],
				'HostReservationId' => [
					'shape'        => 'String',
					'locationName' => 'hostReservationId',
				],
				'HourlyPrice'       => [
					'shape'        => 'String',
					'locationName' => 'hourlyPrice',
				],
				'InstanceFamily'    => [
					'shape'        => 'String',
					'locationName' => 'instanceFamily',
				],
				'PaymentOption'     => [
					'shape'        => 'PaymentOption',
					'locationName' => 'paymentOption',
				],
				'UpfrontPrice'      => [
					'shape'        => 'String',
					'locationName' => 'upfrontPrice',
				],
			],
		],
		'PurchaseHostReservationRequest'                                 => [
			'type'     => 'structure',
			'required' => [
				'HostIdSet',
				'OfferingId',
			],
			'members'  => [
				'ClientToken'  => [ 'shape' => 'String', ],
				'CurrencyCode' => [ 'shape' => 'CurrencyCodeValues', ],
				'HostIdSet'    => [ 'shape' => 'RequestHostIdSet', ],
				'LimitPrice'   => [ 'shape' => 'String', ],
				'OfferingId'   => [ 'shape' => 'String', ],
			],
		],
		'PurchaseHostReservationResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'ClientToken'       => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'CurrencyCode'      => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
				'Purchase'          => [
					'shape'        => 'PurchaseSet',
					'locationName' => 'purchase',
				],
				'TotalHourlyPrice'  => [
					'shape'        => 'String',
					'locationName' => 'totalHourlyPrice',
				],
				'TotalUpfrontPrice' => [
					'shape'        => 'String',
					'locationName' => 'totalUpfrontPrice',
				],
			],
		],
		'PurchaseRequest'                                                => [
			'type'     => 'structure',
			'required' => [
				'InstanceCount',
				'PurchaseToken',
			],
			'members'  => [
				'InstanceCount' => [ 'shape' => 'Integer', ],
				'PurchaseToken' => [ 'shape' => 'String', ],
			],
		],
		'PurchaseRequestSet'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PurchaseRequest',
				'locationName' => 'PurchaseRequest',
			],
			'min'    => 1,
		],
		'PurchaseReservedInstancesOfferingRequest'                       => [
			'type'     => 'structure',
			'required' => [
				'InstanceCount',
				'ReservedInstancesOfferingId',
			],
			'members'  => [
				'InstanceCount'               => [ 'shape' => 'Integer', ],
				'ReservedInstancesOfferingId' => [ 'shape' => 'String', ],
				'DryRun'                      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'LimitPrice'                  => [
					'shape'        => 'ReservedInstanceLimitPrice',
					'locationName' => 'limitPrice',
				],
			],
		],
		'PurchaseReservedInstancesOfferingResult'                        => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
			],
		],
		'PurchaseScheduledInstancesRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'PurchaseRequests', ],
			'members'  => [
				'ClientToken'      => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'DryRun'           => [ 'shape' => 'Boolean', ],
				'PurchaseRequests' => [
					'shape'        => 'PurchaseRequestSet',
					'locationName' => 'PurchaseRequest',
				],
			],
		],
		'PurchaseScheduledInstancesResult'                               => [
			'type'    => 'structure',
			'members' => [
				'ScheduledInstanceSet' => [
					'shape'        => 'PurchasedScheduledInstanceSet',
					'locationName' => 'scheduledInstanceSet',
				],
			],
		],
		'PurchaseSet'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Purchase',
				'locationName' => 'item',
			],
		],
		'PurchasedScheduledInstanceSet'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstance',
				'locationName' => 'item',
			],
		],
		'RIProductDescription'                                           => [
			'type' => 'string',
			'enum' => [
				'Linux/UNIX',
				'Linux/UNIX (Amazon VPC)',
				'Windows',
				'Windows (Amazon VPC)',
			],
		],
		'ReasonCodesList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReportInstanceReasonCodes',
				'locationName' => 'item',
			],
		],
		'RebootInstancesRequest'                                         => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'RecurringCharge'                                                => [
			'type'    => 'structure',
			'members' => [
				'Amount'    => [
					'shape'        => 'Double',
					'locationName' => 'amount',
				],
				'Frequency' => [
					'shape'        => 'RecurringChargeFrequency',
					'locationName' => 'frequency',
				],
			],
		],
		'RecurringChargeFrequency'                                       => [
			'type' => 'string',
			'enum' => [ 'Hourly', ],
		],
		'RecurringChargesList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RecurringCharge',
				'locationName' => 'item',
			],
		],
		'Region'                                                         => [
			'type'    => 'structure',
			'members' => [
				'Endpoint'   => [
					'shape'        => 'String',
					'locationName' => 'regionEndpoint',
				],
				'RegionName' => [
					'shape'        => 'String',
					'locationName' => 'regionName',
				],
			],
		],
		'RegionList'                                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Region',
				'locationName' => 'item',
			],
		],
		'RegionNameStringList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'RegionName',
			],
		],
		'RegisterImageRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'Name', ],
			'members'  => [
				'ImageLocation'       => [ 'shape' => 'String', ],
				'Architecture'        => [ 'shape' => 'ArchitectureValues', 'locationName' => 'architecture', ],
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingRequestList',
					'locationName' => 'BlockDeviceMapping',
				],
				'Description'         => [ 'shape' => 'String', 'locationName' => 'description', ],
				'DryRun'              => [ 'shape' => 'Boolean', 'locationName' => 'dryRun', ],
				'EnaSupport'          => [ 'shape' => 'Boolean', 'locationName' => 'enaSupport', ],
				'KernelId'            => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'Name'                => [ 'shape' => 'String', 'locationName' => 'name', ],
				'BillingProducts'     => [ 'shape' => 'BillingProductList', 'locationName' => 'BillingProduct', ],
				'RamdiskId'           => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'RootDeviceName'      => [ 'shape' => 'String', 'locationName' => 'rootDeviceName', ],
				'SriovNetSupport'     => [ 'shape' => 'String', 'locationName' => 'sriovNetSupport', ],
				'VirtualizationType'  => [ 'shape' => 'String', 'locationName' => 'virtualizationType', ],
			],
		],
		'RegisterImageResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'ImageId' => [
					'shape'        => 'String',
					'locationName' => 'imageId',
				],
			],
		],
		'RejectTransitGatewayVpcAttachmentRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'TransitGatewayAttachmentId', ],
			'members'  => [
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'RejectTransitGatewayVpcAttachmentResult'                        => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayVpcAttachment' => [
					'shape'        => 'TransitGatewayVpcAttachment',
					'locationName' => 'transitGatewayVpcAttachment',
				],
			],
		],
		'RejectVpcEndpointConnectionsRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'ServiceId',
				'VpcEndpointIds',
			],
			'members'  => [
				'DryRun'         => [ 'shape' => 'Boolean', ],
				'ServiceId'      => [ 'shape' => 'String', ],
				'VpcEndpointIds' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'VpcEndpointId',
				],
			],
		],
		'RejectVpcEndpointConnectionsResult'                             => [
			'type'    => 'structure',
			'members' => [
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemSet',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'RejectVpcPeeringConnectionRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'VpcPeeringConnectionId', ],
			'members'  => [
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'RejectVpcPeeringConnectionResult'                               => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ReleaseAddressRequest'                                          => [
			'type'    => 'structure',
			'members' => [
				'AllocationId' => [ 'shape' => 'String', ],
				'PublicIp'     => [ 'shape' => 'String', ],
				'DryRun'       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ReleaseHostsRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'HostIds', ],
			'members'  => [
				'HostIds' => [
					'shape'        => 'RequestHostIdList',
					'locationName' => 'hostId',
				],
			],
		],
		'ReleaseHostsResult'                                             => [
			'type'    => 'structure',
			'members' => [
				'Successful'   => [
					'shape'        => 'ResponseHostIdList',
					'locationName' => 'successful',
				],
				'Unsuccessful' => [
					'shape'        => 'UnsuccessfulItemList',
					'locationName' => 'unsuccessful',
				],
			],
		],
		'ReplaceIamInstanceProfileAssociationRequest'                    => [
			'type'     => 'structure',
			'required' => [
				'IamInstanceProfile',
				'AssociationId',
			],
			'members'  => [
				'IamInstanceProfile' => [ 'shape' => 'IamInstanceProfileSpecification', ],
				'AssociationId'      => [ 'shape' => 'String', ],
			],
		],
		'ReplaceIamInstanceProfileAssociationResult'                     => [
			'type'    => 'structure',
			'members' => [
				'IamInstanceProfileAssociation' => [
					'shape'        => 'IamInstanceProfileAssociation',
					'locationName' => 'iamInstanceProfileAssociation',
				],
			],
		],
		'ReplaceNetworkAclAssociationRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'AssociationId',
				'NetworkAclId',
			],
			'members'  => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkAclId'  => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
			],
		],
		'ReplaceNetworkAclAssociationResult'                             => [
			'type'    => 'structure',
			'members' => [
				'NewAssociationId' => [
					'shape'        => 'String',
					'locationName' => 'newAssociationId',
				],
			],
		],
		'ReplaceNetworkAclEntryRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'Egress',
				'NetworkAclId',
				'Protocol',
				'RuleAction',
				'RuleNumber',
			],
			'members'  => [
				'CidrBlock'     => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Egress'        => [
					'shape'        => 'Boolean',
					'locationName' => 'egress',
				],
				'IcmpTypeCode'  => [
					'shape'        => 'IcmpTypeCode',
					'locationName' => 'Icmp',
				],
				'Ipv6CidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'NetworkAclId'  => [
					'shape'        => 'String',
					'locationName' => 'networkAclId',
				],
				'PortRange'     => [
					'shape'        => 'PortRange',
					'locationName' => 'portRange',
				],
				'Protocol'      => [
					'shape'        => 'String',
					'locationName' => 'protocol',
				],
				'RuleAction'    => [
					'shape'        => 'RuleAction',
					'locationName' => 'ruleAction',
				],
				'RuleNumber'    => [
					'shape'        => 'Integer',
					'locationName' => 'ruleNumber',
				],
			],
		],
		'ReplaceRouteRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'RouteTableId', ],
			'members'  => [
				'DestinationCidrBlock'        => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'DestinationIpv6CidrBlock'    => [
					'shape'        => 'String',
					'locationName' => 'destinationIpv6CidrBlock',
				],
				'DryRun'                      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'EgressOnlyInternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'egressOnlyInternetGatewayId',
				],
				'GatewayId'                   => [
					'shape'        => 'String',
					'locationName' => 'gatewayId',
				],
				'InstanceId'                  => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'NatGatewayId'                => [
					'shape'        => 'String',
					'locationName' => 'natGatewayId',
				],
				'TransitGatewayId'            => [ 'shape' => 'String', ],
				'NetworkInterfaceId'          => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'RouteTableId'                => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
				'VpcPeeringConnectionId'      => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'ReplaceRouteTableAssociationRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'AssociationId',
				'RouteTableId',
			],
			'members'  => [
				'AssociationId' => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'DryRun'        => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'RouteTableId'  => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
			],
		],
		'ReplaceRouteTableAssociationResult'                             => [
			'type'    => 'structure',
			'members' => [
				'NewAssociationId' => [
					'shape'        => 'String',
					'locationName' => 'newAssociationId',
				],
			],
		],
		'ReplaceTransitGatewayRouteRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'DestinationCidrBlock',
				'TransitGatewayRouteTableId',
			],
			'members'  => [
				'DestinationCidrBlock'       => [ 'shape' => 'String', ],
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'TransitGatewayAttachmentId' => [ 'shape' => 'String', ],
				'Blackhole'                  => [ 'shape' => 'Boolean', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'ReplaceTransitGatewayRouteResult'                               => [
			'type'    => 'structure',
			'members' => [
				'Route' => [
					'shape'        => 'TransitGatewayRoute',
					'locationName' => 'route',
				],
			],
		],
		'ReportInstanceReasonCodes'                                      => [
			'type' => 'string',
			'enum' => [
				'instance-stuck-in-state',
				'unresponsive',
				'not-accepting-credentials',
				'password-not-available',
				'performance-network',
				'performance-instance-store',
				'performance-ebs-volume',
				'performance-other',
				'other',
			],
		],
		'ReportInstanceStatusRequest'                                    => [
			'type'     => 'structure',
			'required' => [
				'Instances',
				'ReasonCodes',
				'Status',
			],
			'members'  => [
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'EndTime'     => [
					'shape'        => 'DateTime',
					'locationName' => 'endTime',
				],
				'Instances'   => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'instanceId',
				],
				'ReasonCodes' => [
					'shape'        => 'ReasonCodesList',
					'locationName' => 'reasonCode',
				],
				'StartTime'   => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
				'Status'      => [
					'shape'        => 'ReportStatusType',
					'locationName' => 'status',
				],
			],
		],
		'ReportStatusType'                                               => [
			'type' => 'string',
			'enum' => [ 'ok', 'impaired', ],
		],
		'RequestHostIdList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'RequestHostIdSet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'RequestLaunchTemplateData'                                      => [
			'type'    => 'structure',
			'members' => [
				'KernelId'                          => [ 'shape' => 'String', ],
				'EbsOptimized'                      => [ 'shape' => 'Boolean', ],
				'IamInstanceProfile'                => [ 'shape' => 'LaunchTemplateIamInstanceProfileSpecificationRequest', ],
				'BlockDeviceMappings'               => [
					'shape'        => 'LaunchTemplateBlockDeviceMappingRequestList',
					'locationName' => 'BlockDeviceMapping',
				],
				'NetworkInterfaces'                 => [
					'shape'        => 'LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList',
					'locationName' => 'NetworkInterface',
				],
				'ImageId'                           => [ 'shape' => 'String', ],
				'InstanceType'                      => [ 'shape' => 'InstanceType', ],
				'KeyName'                           => [ 'shape' => 'String', ],
				'Monitoring'                        => [ 'shape' => 'LaunchTemplatesMonitoringRequest', ],
				'Placement'                         => [ 'shape' => 'LaunchTemplatePlacementRequest', ],
				'RamDiskId'                         => [ 'shape' => 'String', ],
				'DisableApiTermination'             => [ 'shape' => 'Boolean', ],
				'InstanceInitiatedShutdownBehavior' => [ 'shape' => 'ShutdownBehavior', ],
				'UserData'                          => [ 'shape' => 'String', ],
				'TagSpecifications'                 => [
					'shape'        => 'LaunchTemplateTagSpecificationRequestList',
					'locationName' => 'TagSpecification',
				],
				'ElasticGpuSpecifications'          => [
					'shape'        => 'ElasticGpuSpecificationList',
					'locationName' => 'ElasticGpuSpecification',
				],
				'ElasticInferenceAccelerators'      => [
					'shape'        => 'LaunchTemplateElasticInferenceAcceleratorList',
					'locationName' => 'ElasticInferenceAccelerator',
				],
				'SecurityGroupIds'                  => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'SecurityGroups'                    => [
					'shape'        => 'SecurityGroupStringList',
					'locationName' => 'SecurityGroup',
				],
				'InstanceMarketOptions'             => [ 'shape' => 'LaunchTemplateInstanceMarketOptionsRequest', ],
				'CreditSpecification'               => [ 'shape' => 'CreditSpecificationRequest', ],
				'CpuOptions'                        => [ 'shape' => 'LaunchTemplateCpuOptionsRequest', ],
				'CapacityReservationSpecification'  => [ 'shape' => 'LaunchTemplateCapacityReservationSpecificationRequest', ],
				'LicenseSpecifications'             => [
					'shape'        => 'LaunchTemplateLicenseSpecificationListRequest',
					'locationName' => 'LicenseSpecification',
				],
				'HibernationOptions'                => [ 'shape' => 'LaunchTemplateHibernationOptionsRequest', ],
			],
		],
		'RequestSpotFleetRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'SpotFleetRequestConfig', ],
			'members'  => [
				'DryRun'                 => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'SpotFleetRequestConfig' => [
					'shape'        => 'SpotFleetRequestConfigData',
					'locationName' => 'spotFleetRequestConfig',
				],
			],
		],
		'RequestSpotFleetResponse'                                       => [
			'type'    => 'structure',
			'members' => [
				'SpotFleetRequestId' => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
			],
		],
		'RequestSpotInstancesRequest'                                    => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZoneGroup'        => [
					'shape'        => 'String',
					'locationName' => 'availabilityZoneGroup',
				],
				'BlockDurationMinutes'         => [
					'shape'        => 'Integer',
					'locationName' => 'blockDurationMinutes',
				],
				'ClientToken'                  => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'DryRun'                       => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceCount'                => [
					'shape'        => 'Integer',
					'locationName' => 'instanceCount',
				],
				'LaunchGroup'                  => [
					'shape'        => 'String',
					'locationName' => 'launchGroup',
				],
				'LaunchSpecification'          => [ 'shape' => 'RequestSpotLaunchSpecification', ],
				'SpotPrice'                    => [
					'shape'        => 'String',
					'locationName' => 'spotPrice',
				],
				'Type'                         => [
					'shape'        => 'SpotInstanceType',
					'locationName' => 'type',
				],
				'ValidFrom'                    => [
					'shape'        => 'DateTime',
					'locationName' => 'validFrom',
				],
				'ValidUntil'                   => [
					'shape'        => 'DateTime',
					'locationName' => 'validUntil',
				],
				'InstanceInterruptionBehavior' => [ 'shape' => 'InstanceInterruptionBehavior', ],
			],
		],
		'RequestSpotInstancesResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'SpotInstanceRequests' => [
					'shape'        => 'SpotInstanceRequestList',
					'locationName' => 'spotInstanceRequestSet',
				],
			],
		],
		'RequestSpotLaunchSpecification'                                 => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroupIds'    => [ 'shape' => 'ValueStringList', 'locationName' => 'SecurityGroupId', ],
				'SecurityGroups'      => [ 'shape' => 'ValueStringList', 'locationName' => 'SecurityGroup', ],
				'AddressingType'      => [ 'shape' => 'String', 'locationName' => 'addressingType', ],
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'EbsOptimized'        => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'IamInstanceProfile'  => [
					'shape'        => 'IamInstanceProfileSpecification',
					'locationName' => 'iamInstanceProfile',
				],
				'ImageId'             => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceType'        => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'KernelId'            => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'KeyName'             => [ 'shape' => 'String', 'locationName' => 'keyName', ],
				'Monitoring'          => [
					'shape'        => 'RunInstancesMonitoringEnabled',
					'locationName' => 'monitoring',
				],
				'NetworkInterfaces'   => [
					'shape'        => 'InstanceNetworkInterfaceSpecificationList',
					'locationName' => 'NetworkInterface',
				],
				'Placement'           => [ 'shape' => 'SpotPlacement', 'locationName' => 'placement', ],
				'RamdiskId'           => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'SubnetId'            => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'UserData'            => [ 'shape' => 'String', 'locationName' => 'userData', ],
			],
		],
		'Reservation'                                                    => [
			'type'    => 'structure',
			'members' => [
				'Groups'        => [
					'shape'        => 'GroupIdentifierList',
					'locationName' => 'groupSet',
				],
				'Instances'     => [
					'shape'        => 'InstanceList',
					'locationName' => 'instancesSet',
				],
				'OwnerId'       => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'RequesterId'   => [
					'shape'        => 'String',
					'locationName' => 'requesterId',
				],
				'ReservationId' => [
					'shape'        => 'String',
					'locationName' => 'reservationId',
				],
			],
		],
		'ReservationList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Reservation',
				'locationName' => 'item',
			],
		],
		'ReservationState'                                               => [
			'type' => 'string',
			'enum' => [
				'payment-pending',
				'payment-failed',
				'active',
				'retired',
			],
		],
		'ReservationValue'                                               => [
			'type'    => 'structure',
			'members' => [
				'HourlyPrice'           => [
					'shape'        => 'String',
					'locationName' => 'hourlyPrice',
				],
				'RemainingTotalValue'   => [
					'shape'        => 'String',
					'locationName' => 'remainingTotalValue',
				],
				'RemainingUpfrontValue' => [
					'shape'        => 'String',
					'locationName' => 'remainingUpfrontValue',
				],
			],
		],
		'ReservedInstanceIdSet'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ReservedInstanceId',
			],
		],
		'ReservedInstanceLimitPrice'                                     => [
			'type'    => 'structure',
			'members' => [
				'Amount'       => [
					'shape'        => 'Double',
					'locationName' => 'amount',
				],
				'CurrencyCode' => [
					'shape'        => 'CurrencyCodeValues',
					'locationName' => 'currencyCode',
				],
			],
		],
		'ReservedInstanceReservationValue'                               => [
			'type'    => 'structure',
			'members' => [
				'ReservationValue'   => [
					'shape'        => 'ReservationValue',
					'locationName' => 'reservationValue',
				],
				'ReservedInstanceId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstanceId',
				],
			],
		],
		'ReservedInstanceReservationValueSet'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstanceReservationValue',
				'locationName' => 'item',
			],
		],
		'ReservedInstanceState'                                          => [
			'type' => 'string',
			'enum' => [
				'payment-pending',
				'active',
				'payment-failed',
				'retired',
			],
		],
		'ReservedInstances'                                              => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'    => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'Duration'            => [ 'shape' => 'Long', 'locationName' => 'duration', ],
				'End'                 => [ 'shape' => 'DateTime', 'locationName' => 'end', ],
				'FixedPrice'          => [ 'shape' => 'Float', 'locationName' => 'fixedPrice', ],
				'InstanceCount'       => [ 'shape' => 'Integer', 'locationName' => 'instanceCount', ],
				'InstanceType'        => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'ProductDescription'  => [ 'shape' => 'RIProductDescription', 'locationName' => 'productDescription', ],
				'ReservedInstancesId' => [ 'shape' => 'String', 'locationName' => 'reservedInstancesId', ],
				'Start'               => [ 'shape' => 'DateTime', 'locationName' => 'start', ],
				'State'               => [ 'shape' => 'ReservedInstanceState', 'locationName' => 'state', ],
				'UsagePrice'          => [ 'shape' => 'Float', 'locationName' => 'usagePrice', ],
				'CurrencyCode'        => [ 'shape' => 'CurrencyCodeValues', 'locationName' => 'currencyCode', ],
				'InstanceTenancy'     => [ 'shape' => 'Tenancy', 'locationName' => 'instanceTenancy', ],
				'OfferingClass'       => [ 'shape' => 'OfferingClassType', 'locationName' => 'offeringClass', ],
				'OfferingType'        => [ 'shape' => 'OfferingTypeValues', 'locationName' => 'offeringType', ],
				'RecurringCharges'    => [ 'shape' => 'RecurringChargesList', 'locationName' => 'recurringCharges', ],
				'Scope'               => [ 'shape' => 'scope', 'locationName' => 'scope', ],
				'Tags'                => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'ReservedInstancesConfiguration'                                 => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'InstanceCount'    => [
					'shape'        => 'Integer',
					'locationName' => 'instanceCount',
				],
				'InstanceType'     => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'Platform'         => [
					'shape'        => 'String',
					'locationName' => 'platform',
				],
				'Scope'            => [
					'shape'        => 'scope',
					'locationName' => 'scope',
				],
			],
		],
		'ReservedInstancesConfigurationList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesConfiguration',
				'locationName' => 'item',
			],
		],
		'ReservedInstancesId'                                            => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
			],
		],
		'ReservedInstancesIdStringList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ReservedInstancesId',
			],
		],
		'ReservedInstancesList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstances',
				'locationName' => 'item',
			],
		],
		'ReservedInstancesListing'                                       => [
			'type'    => 'structure',
			'members' => [
				'ClientToken'                => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'CreateDate'                 => [
					'shape'        => 'DateTime',
					'locationName' => 'createDate',
				],
				'InstanceCounts'             => [
					'shape'        => 'InstanceCountList',
					'locationName' => 'instanceCounts',
				],
				'PriceSchedules'             => [
					'shape'        => 'PriceScheduleList',
					'locationName' => 'priceSchedules',
				],
				'ReservedInstancesId'        => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
				'ReservedInstancesListingId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesListingId',
				],
				'Status'                     => [
					'shape'        => 'ListingStatus',
					'locationName' => 'status',
				],
				'StatusMessage'              => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'Tags'                       => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'UpdateDate'                 => [
					'shape'        => 'DateTime',
					'locationName' => 'updateDate',
				],
			],
		],
		'ReservedInstancesListingList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesListing',
				'locationName' => 'item',
			],
		],
		'ReservedInstancesModification'                                  => [
			'type'    => 'structure',
			'members' => [
				'ClientToken'                     => [
					'shape'        => 'String',
					'locationName' => 'clientToken',
				],
				'CreateDate'                      => [
					'shape'        => 'DateTime',
					'locationName' => 'createDate',
				],
				'EffectiveDate'                   => [
					'shape'        => 'DateTime',
					'locationName' => 'effectiveDate',
				],
				'ModificationResults'             => [
					'shape'        => 'ReservedInstancesModificationResultList',
					'locationName' => 'modificationResultSet',
				],
				'ReservedInstancesIds'            => [
					'shape'        => 'ReservedIntancesIds',
					'locationName' => 'reservedInstancesSet',
				],
				'ReservedInstancesModificationId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesModificationId',
				],
				'Status'                          => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
				'StatusMessage'                   => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'UpdateDate'                      => [
					'shape'        => 'DateTime',
					'locationName' => 'updateDate',
				],
			],
		],
		'ReservedInstancesModificationIdStringList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ReservedInstancesModificationId',
			],
		],
		'ReservedInstancesModificationList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesModification',
				'locationName' => 'item',
			],
		],
		'ReservedInstancesModificationResult'                            => [
			'type'    => 'structure',
			'members' => [
				'ReservedInstancesId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesId',
				],
				'TargetConfiguration' => [
					'shape'        => 'ReservedInstancesConfiguration',
					'locationName' => 'targetConfiguration',
				],
			],
		],
		'ReservedInstancesModificationResultList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesModificationResult',
				'locationName' => 'item',
			],
		],
		'ReservedInstancesOffering'                                      => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'            => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'Duration'                    => [ 'shape' => 'Long', 'locationName' => 'duration', ],
				'FixedPrice'                  => [ 'shape' => 'Float', 'locationName' => 'fixedPrice', ],
				'InstanceType'                => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'ProductDescription'          => [
					'shape'        => 'RIProductDescription',
					'locationName' => 'productDescription',
				],
				'ReservedInstancesOfferingId' => [
					'shape'        => 'String',
					'locationName' => 'reservedInstancesOfferingId',
				],
				'UsagePrice'                  => [ 'shape' => 'Float', 'locationName' => 'usagePrice', ],
				'CurrencyCode'                => [ 'shape' => 'CurrencyCodeValues', 'locationName' => 'currencyCode', ],
				'InstanceTenancy'             => [ 'shape' => 'Tenancy', 'locationName' => 'instanceTenancy', ],
				'Marketplace'                 => [ 'shape' => 'Boolean', 'locationName' => 'marketplace', ],
				'OfferingClass'               => [ 'shape' => 'OfferingClassType', 'locationName' => 'offeringClass', ],
				'OfferingType'                => [ 'shape' => 'OfferingTypeValues', 'locationName' => 'offeringType', ],
				'PricingDetails'              => [
					'shape'        => 'PricingDetailsList',
					'locationName' => 'pricingDetailsSet',
				],
				'RecurringCharges'            => [
					'shape'        => 'RecurringChargesList',
					'locationName' => 'recurringCharges',
				],
				'Scope'                       => [ 'shape' => 'scope', 'locationName' => 'scope', ],
			],
		],
		'ReservedInstancesOfferingIdStringList'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'ReservedInstancesOfferingList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesOffering',
				'locationName' => 'item',
			],
		],
		'ReservedIntancesIds'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedInstancesId',
				'locationName' => 'item',
			],
		],
		'ResetEbsDefaultKmsKeyIdRequest'                                 => [
			'type'    => 'structure',
			'members' => [ 'DryRun' => [ 'shape' => 'Boolean', ], ],
		],
		'ResetEbsDefaultKmsKeyIdResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'KmsKeyId' => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
			],
		],
		'ResetFpgaImageAttributeName'                                    => [
			'type' => 'string',
			'enum' => [ 'loadPermission', ],
		],
		'ResetFpgaImageAttributeRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'FpgaImageId', ],
			'members'  => [
				'DryRun'      => [ 'shape' => 'Boolean', ],
				'FpgaImageId' => [ 'shape' => 'String', ],
				'Attribute'   => [ 'shape' => 'ResetFpgaImageAttributeName', ],
			],
		],
		'ResetFpgaImageAttributeResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'ResetImageAttributeName'                                        => [
			'type' => 'string',
			'enum' => [ 'launchPermission', ],
		],
		'ResetImageAttributeRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'Attribute', 'ImageId', ],
			'members'  => [
				'Attribute' => [ 'shape' => 'ResetImageAttributeName', ],
				'ImageId'   => [ 'shape' => 'String', ],
				'DryRun'    => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ResetInstanceAttributeRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'Attribute',
				'InstanceId',
			],
			'members'  => [
				'Attribute'  => [
					'shape'        => 'InstanceAttributeName',
					'locationName' => 'attribute',
				],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'ResetNetworkInterfaceAttributeRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'NetworkInterfaceId', ],
			'members'  => [
				'DryRun'             => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'SourceDestCheck'    => [
					'shape'        => 'String',
					'locationName' => 'sourceDestCheck',
				],
			],
		],
		'ResetSnapshotAttributeRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'Attribute',
				'SnapshotId',
			],
			'members'  => [
				'Attribute'  => [ 'shape' => 'SnapshotAttributeName', ],
				'SnapshotId' => [ 'shape' => 'String', ],
				'DryRun'     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'ResourceIdList'                                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'ResourceList'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ResourceType'                                                   => [
			'type' => 'string',
			'enum' => [
				'client-vpn-endpoint',
				'customer-gateway',
				'dedicated-host',
				'dhcp-options',
				'elastic-ip',
				'fleet',
				'fpga-image',
				'host-reservation',
				'image',
				'instance',
				'internet-gateway',
				'launch-template',
				'natgateway',
				'network-acl',
				'network-interface',
				'reserved-instances',
				'route-table',
				'security-group',
				'snapshot',
				'spot-instances-request',
				'subnet',
				'traffic-mirror-filter',
				'traffic-mirror-session',
				'traffic-mirror-target',
				'transit-gateway',
				'transit-gateway-attachment',
				'transit-gateway-route-table',
				'volume',
				'vpc',
				'vpc-peering-connection',
				'vpn-connection',
				'vpn-gateway',
			],
		],
		'ResponseError'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'LaunchTemplateErrorCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'ResponseHostIdList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ResponseHostIdSet'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'ResponseLaunchTemplateData'                                     => [
			'type'    => 'structure',
			'members' => [
				'KernelId'                          => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'EbsOptimized'                      => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'IamInstanceProfile'                => [
					'shape'        => 'LaunchTemplateIamInstanceProfileSpecification',
					'locationName' => 'iamInstanceProfile',
				],
				'BlockDeviceMappings'               => [
					'shape'        => 'LaunchTemplateBlockDeviceMappingList',
					'locationName' => 'blockDeviceMappingSet',
				],
				'NetworkInterfaces'                 => [
					'shape'        => 'LaunchTemplateInstanceNetworkInterfaceSpecificationList',
					'locationName' => 'networkInterfaceSet',
				],
				'ImageId'                           => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceType'                      => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'KeyName'                           => [ 'shape' => 'String', 'locationName' => 'keyName', ],
				'Monitoring'                        => [
					'shape'        => 'LaunchTemplatesMonitoring',
					'locationName' => 'monitoring',
				],
				'Placement'                         => [
					'shape'        => 'LaunchTemplatePlacement',
					'locationName' => 'placement',
				],
				'RamDiskId'                         => [ 'shape' => 'String', 'locationName' => 'ramDiskId', ],
				'DisableApiTermination'             => [
					'shape'        => 'Boolean',
					'locationName' => 'disableApiTermination',
				],
				'InstanceInitiatedShutdownBehavior' => [
					'shape'        => 'ShutdownBehavior',
					'locationName' => 'instanceInitiatedShutdownBehavior',
				],
				'UserData'                          => [ 'shape' => 'String', 'locationName' => 'userData', ],
				'TagSpecifications'                 => [
					'shape'        => 'LaunchTemplateTagSpecificationList',
					'locationName' => 'tagSpecificationSet',
				],
				'ElasticGpuSpecifications'          => [
					'shape'        => 'ElasticGpuSpecificationResponseList',
					'locationName' => 'elasticGpuSpecificationSet',
				],
				'ElasticInferenceAccelerators'      => [
					'shape'        => 'LaunchTemplateElasticInferenceAcceleratorResponseList',
					'locationName' => 'elasticInferenceAcceleratorSet',
				],
				'SecurityGroupIds'                  => [
					'shape'        => 'ValueStringList',
					'locationName' => 'securityGroupIdSet',
				],
				'SecurityGroups'                    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'securityGroupSet',
				],
				'InstanceMarketOptions'             => [
					'shape'        => 'LaunchTemplateInstanceMarketOptions',
					'locationName' => 'instanceMarketOptions',
				],
				'CreditSpecification'               => [
					'shape'        => 'CreditSpecification',
					'locationName' => 'creditSpecification',
				],
				'CpuOptions'                        => [
					'shape'        => 'LaunchTemplateCpuOptions',
					'locationName' => 'cpuOptions',
				],
				'CapacityReservationSpecification'  => [
					'shape'        => 'LaunchTemplateCapacityReservationSpecificationResponse',
					'locationName' => 'capacityReservationSpecification',
				],
				'LicenseSpecifications'             => [
					'shape'        => 'LaunchTemplateLicenseList',
					'locationName' => 'licenseSet',
				],
				'HibernationOptions'                => [
					'shape'        => 'LaunchTemplateHibernationOptions',
					'locationName' => 'hibernationOptions',
				],
			],
		],
		'RestorableByStringList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'RestoreAddressToClassicRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'PublicIp', ],
			'members'  => [
				'DryRun'   => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'PublicIp' => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
			],
		],
		'RestoreAddressToClassicResult'                                  => [
			'type'    => 'structure',
			'members' => [
				'PublicIp' => [
					'shape'        => 'String',
					'locationName' => 'publicIp',
				],
				'Status'   => [
					'shape'        => 'Status',
					'locationName' => 'status',
				],
			],
		],
		'RevokeClientVpnIngressRequest'                                  => [
			'type'     => 'structure',
			'required' => [
				'ClientVpnEndpointId',
				'TargetNetworkCidr',
			],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'TargetNetworkCidr'   => [ 'shape' => 'String', ],
				'AccessGroupId'       => [ 'shape' => 'String', ],
				'RevokeAllGroups'     => [ 'shape' => 'Boolean', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'RevokeClientVpnIngressResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'Status' => [
					'shape'        => 'ClientVpnAuthorizationRuleStatus',
					'locationName' => 'status',
				],
			],
		],
		'RevokeSecurityGroupEgressRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'GroupId', ],
			'members'  => [
				'DryRun'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'GroupId'                    => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'IpPermissions'              => [
					'shape'        => 'IpPermissionList',
					'locationName' => 'ipPermissions',
				],
				'CidrIp'                     => [
					'shape'        => 'String',
					'locationName' => 'cidrIp',
				],
				'FromPort'                   => [
					'shape'        => 'Integer',
					'locationName' => 'fromPort',
				],
				'IpProtocol'                 => [
					'shape'        => 'String',
					'locationName' => 'ipProtocol',
				],
				'ToPort'                     => [
					'shape'        => 'Integer',
					'locationName' => 'toPort',
				],
				'SourceSecurityGroupName'    => [
					'shape'        => 'String',
					'locationName' => 'sourceSecurityGroupName',
				],
				'SourceSecurityGroupOwnerId' => [
					'shape'        => 'String',
					'locationName' => 'sourceSecurityGroupOwnerId',
				],
			],
		],
		'RevokeSecurityGroupIngressRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'CidrIp'                     => [ 'shape' => 'String', ],
				'FromPort'                   => [ 'shape' => 'Integer', ],
				'GroupId'                    => [ 'shape' => 'String', ],
				'GroupName'                  => [ 'shape' => 'String', ],
				'IpPermissions'              => [ 'shape' => 'IpPermissionList', ],
				'IpProtocol'                 => [ 'shape' => 'String', ],
				'SourceSecurityGroupName'    => [ 'shape' => 'String', ],
				'SourceSecurityGroupOwnerId' => [ 'shape' => 'String', ],
				'ToPort'                     => [ 'shape' => 'Integer', ],
				'DryRun'                     => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'Route'                                                          => [
			'type'    => 'structure',
			'members' => [
				'DestinationCidrBlock'        => [ 'shape' => 'String', 'locationName' => 'destinationCidrBlock', ],
				'DestinationIpv6CidrBlock'    => [ 'shape' => 'String', 'locationName' => 'destinationIpv6CidrBlock', ],
				'DestinationPrefixListId'     => [ 'shape' => 'String', 'locationName' => 'destinationPrefixListId', ],
				'EgressOnlyInternetGatewayId' => [
					'shape'        => 'String',
					'locationName' => 'egressOnlyInternetGatewayId',
				],
				'GatewayId'                   => [ 'shape' => 'String', 'locationName' => 'gatewayId', ],
				'InstanceId'                  => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'InstanceOwnerId'             => [ 'shape' => 'String', 'locationName' => 'instanceOwnerId', ],
				'NatGatewayId'                => [ 'shape' => 'String', 'locationName' => 'natGatewayId', ],
				'TransitGatewayId'            => [ 'shape' => 'String', 'locationName' => 'transitGatewayId', ],
				'NetworkInterfaceId'          => [ 'shape' => 'String', 'locationName' => 'networkInterfaceId', ],
				'Origin'                      => [ 'shape' => 'RouteOrigin', 'locationName' => 'origin', ],
				'State'                       => [ 'shape' => 'RouteState', 'locationName' => 'state', ],
				'VpcPeeringConnectionId'      => [ 'shape' => 'String', 'locationName' => 'vpcPeeringConnectionId', ],
			],
		],
		'RouteList'                                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Route',
				'locationName' => 'item',
			],
		],
		'RouteOrigin'                                                    => [
			'type' => 'string',
			'enum' => [
				'CreateRouteTable',
				'CreateRoute',
				'EnableVgwRoutePropagation',
			],
		],
		'RouteState'                                                     => [
			'type' => 'string',
			'enum' => [ 'active', 'blackhole', ],
		],
		'RouteTable'                                                     => [
			'type'    => 'structure',
			'members' => [
				'Associations'    => [
					'shape'        => 'RouteTableAssociationList',
					'locationName' => 'associationSet',
				],
				'PropagatingVgws' => [
					'shape'        => 'PropagatingVgwList',
					'locationName' => 'propagatingVgwSet',
				],
				'RouteTableId'    => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
				'Routes'          => [
					'shape'        => 'RouteList',
					'locationName' => 'routeSet',
				],
				'Tags'            => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcId'           => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'OwnerId'         => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
			],
		],
		'RouteTableAssociation'                                          => [
			'type'    => 'structure',
			'members' => [
				'Main'                    => [
					'shape'        => 'Boolean',
					'locationName' => 'main',
				],
				'RouteTableAssociationId' => [
					'shape'        => 'String',
					'locationName' => 'routeTableAssociationId',
				],
				'RouteTableId'            => [
					'shape'        => 'String',
					'locationName' => 'routeTableId',
				],
				'SubnetId'                => [
					'shape'        => 'String',
					'locationName' => 'subnetId',
				],
			],
		],
		'RouteTableAssociationList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RouteTableAssociation',
				'locationName' => 'item',
			],
		],
		'RouteTableList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RouteTable',
				'locationName' => 'item',
			],
		],
		'RuleAction'                                                     => [
			'type' => 'string',
			'enum' => [ 'allow', 'deny', ],
		],
		'RunInstancesMonitoringEnabled'                                  => [
			'type'     => 'structure',
			'required' => [ 'Enabled', ],
			'members'  => [
				'Enabled' => [
					'shape'        => 'Boolean',
					'locationName' => 'enabled',
				],
			],
		],
		'RunInstancesRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'MaxCount', 'MinCount', ],
			'members'  => [
				'BlockDeviceMappings'               => [
					'shape'        => 'BlockDeviceMappingRequestList',
					'locationName' => 'BlockDeviceMapping',
				],
				'ImageId'                           => [ 'shape' => 'String', ],
				'InstanceType'                      => [ 'shape' => 'InstanceType', ],
				'Ipv6AddressCount'                  => [ 'shape' => 'Integer', ],
				'Ipv6Addresses'                     => [
					'shape'        => 'InstanceIpv6AddressList',
					'locationName' => 'Ipv6Address',
				],
				'KernelId'                          => [ 'shape' => 'String', ],
				'KeyName'                           => [ 'shape' => 'String', ],
				'MaxCount'                          => [ 'shape' => 'Integer', ],
				'MinCount'                          => [ 'shape' => 'Integer', ],
				'Monitoring'                        => [ 'shape' => 'RunInstancesMonitoringEnabled', ],
				'Placement'                         => [ 'shape' => 'Placement', ],
				'RamdiskId'                         => [ 'shape' => 'String', ],
				'SecurityGroupIds'                  => [
					'shape'        => 'SecurityGroupIdStringList',
					'locationName' => 'SecurityGroupId',
				],
				'SecurityGroups'                    => [
					'shape'        => 'SecurityGroupStringList',
					'locationName' => 'SecurityGroup',
				],
				'SubnetId'                          => [ 'shape' => 'String', ],
				'UserData'                          => [ 'shape' => 'String', ],
				'AdditionalInfo'                    => [ 'shape' => 'String', 'locationName' => 'additionalInfo', ],
				'ClientToken'                       => [ 'shape' => 'String', 'locationName' => 'clientToken', ],
				'DisableApiTermination'             => [
					'shape'        => 'Boolean',
					'locationName' => 'disableApiTermination',
				],
				'DryRun'                            => [ 'shape' => 'Boolean', 'locationName' => 'dryRun', ],
				'EbsOptimized'                      => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'IamInstanceProfile'                => [
					'shape'        => 'IamInstanceProfileSpecification',
					'locationName' => 'iamInstanceProfile',
				],
				'InstanceInitiatedShutdownBehavior' => [
					'shape'        => 'ShutdownBehavior',
					'locationName' => 'instanceInitiatedShutdownBehavior',
				],
				'NetworkInterfaces'                 => [
					'shape'        => 'InstanceNetworkInterfaceSpecificationList',
					'locationName' => 'networkInterface',
				],
				'PrivateIpAddress'                  => [ 'shape' => 'String', 'locationName' => 'privateIpAddress', ],
				'ElasticGpuSpecification'           => [ 'shape' => 'ElasticGpuSpecifications', ],
				'ElasticInferenceAccelerators'      => [
					'shape'        => 'ElasticInferenceAccelerators',
					'locationName' => 'ElasticInferenceAccelerator',
				],
				'TagSpecifications'                 => [
					'shape'        => 'TagSpecificationList',
					'locationName' => 'TagSpecification',
				],
				'LaunchTemplate'                    => [ 'shape' => 'LaunchTemplateSpecification', ],
				'InstanceMarketOptions'             => [ 'shape' => 'InstanceMarketOptionsRequest', ],
				'CreditSpecification'               => [ 'shape' => 'CreditSpecificationRequest', ],
				'CpuOptions'                        => [ 'shape' => 'CpuOptionsRequest', ],
				'CapacityReservationSpecification'  => [ 'shape' => 'CapacityReservationSpecification', ],
				'HibernationOptions'                => [ 'shape' => 'HibernationOptionsRequest', ],
				'LicenseSpecifications'             => [
					'shape'        => 'LicenseSpecificationListRequest',
					'locationName' => 'LicenseSpecification',
				],
			],
		],
		'RunScheduledInstancesRequest'                                   => [
			'type'     => 'structure',
			'required' => [
				'LaunchSpecification',
				'ScheduledInstanceId',
			],
			'members'  => [
				'ClientToken'         => [
					'shape'            => 'String',
					'idempotencyToken' => true,
				],
				'DryRun'              => [ 'shape' => 'Boolean', ],
				'InstanceCount'       => [ 'shape' => 'Integer', ],
				'LaunchSpecification' => [ 'shape' => 'ScheduledInstancesLaunchSpecification', ],
				'ScheduledInstanceId' => [ 'shape' => 'String', ],
			],
		],
		'RunScheduledInstancesResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'InstanceIdSet' => [
					'shape'        => 'InstanceIdSet',
					'locationName' => 'instanceIdSet',
				],
			],
		],
		'S3Storage'                                                      => [
			'type'    => 'structure',
			'members' => [
				'AWSAccessKeyId'        => [ 'shape' => 'String', ],
				'Bucket'                => [
					'shape'        => 'String',
					'locationName' => 'bucket',
				],
				'Prefix'                => [
					'shape'        => 'String',
					'locationName' => 'prefix',
				],
				'UploadPolicy'          => [
					'shape'        => 'Blob',
					'locationName' => 'uploadPolicy',
				],
				'UploadPolicySignature' => [
					'shape'        => 'String',
					'locationName' => 'uploadPolicySignature',
				],
			],
		],
		'ScheduledInstance'                                              => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'            => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'CreateDate'                  => [ 'shape' => 'DateTime', 'locationName' => 'createDate', ],
				'HourlyPrice'                 => [ 'shape' => 'String', 'locationName' => 'hourlyPrice', ],
				'InstanceCount'               => [ 'shape' => 'Integer', 'locationName' => 'instanceCount', ],
				'InstanceType'                => [ 'shape' => 'String', 'locationName' => 'instanceType', ],
				'NetworkPlatform'             => [ 'shape' => 'String', 'locationName' => 'networkPlatform', ],
				'NextSlotStartTime'           => [ 'shape' => 'DateTime', 'locationName' => 'nextSlotStartTime', ],
				'Platform'                    => [ 'shape' => 'String', 'locationName' => 'platform', ],
				'PreviousSlotEndTime'         => [ 'shape' => 'DateTime', 'locationName' => 'previousSlotEndTime', ],
				'Recurrence'                  => [
					'shape'        => 'ScheduledInstanceRecurrence',
					'locationName' => 'recurrence',
				],
				'ScheduledInstanceId'         => [ 'shape' => 'String', 'locationName' => 'scheduledInstanceId', ],
				'SlotDurationInHours'         => [ 'shape' => 'Integer', 'locationName' => 'slotDurationInHours', ],
				'TermEndDate'                 => [ 'shape' => 'DateTime', 'locationName' => 'termEndDate', ],
				'TermStartDate'               => [ 'shape' => 'DateTime', 'locationName' => 'termStartDate', ],
				'TotalScheduledInstanceHours' => [
					'shape'        => 'Integer',
					'locationName' => 'totalScheduledInstanceHours',
				],
			],
		],
		'ScheduledInstanceAvailability'                                  => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'            => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'AvailableInstanceCount'      => [ 'shape' => 'Integer', 'locationName' => 'availableInstanceCount', ],
				'FirstSlotStartTime'          => [ 'shape' => 'DateTime', 'locationName' => 'firstSlotStartTime', ],
				'HourlyPrice'                 => [ 'shape' => 'String', 'locationName' => 'hourlyPrice', ],
				'InstanceType'                => [ 'shape' => 'String', 'locationName' => 'instanceType', ],
				'MaxTermDurationInDays'       => [ 'shape' => 'Integer', 'locationName' => 'maxTermDurationInDays', ],
				'MinTermDurationInDays'       => [ 'shape' => 'Integer', 'locationName' => 'minTermDurationInDays', ],
				'NetworkPlatform'             => [ 'shape' => 'String', 'locationName' => 'networkPlatform', ],
				'Platform'                    => [ 'shape' => 'String', 'locationName' => 'platform', ],
				'PurchaseToken'               => [ 'shape' => 'String', 'locationName' => 'purchaseToken', ],
				'Recurrence'                  => [
					'shape'        => 'ScheduledInstanceRecurrence',
					'locationName' => 'recurrence',
				],
				'SlotDurationInHours'         => [ 'shape' => 'Integer', 'locationName' => 'slotDurationInHours', ],
				'TotalScheduledInstanceHours' => [
					'shape'        => 'Integer',
					'locationName' => 'totalScheduledInstanceHours',
				],
			],
		],
		'ScheduledInstanceAvailabilitySet'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstanceAvailability',
				'locationName' => 'item',
			],
		],
		'ScheduledInstanceIdRequestSet'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ScheduledInstanceId',
			],
		],
		'ScheduledInstanceRecurrence'                                    => [
			'type'    => 'structure',
			'members' => [
				'Frequency'               => [
					'shape'        => 'String',
					'locationName' => 'frequency',
				],
				'Interval'                => [
					'shape'        => 'Integer',
					'locationName' => 'interval',
				],
				'OccurrenceDaySet'        => [
					'shape'        => 'OccurrenceDaySet',
					'locationName' => 'occurrenceDaySet',
				],
				'OccurrenceRelativeToEnd' => [
					'shape'        => 'Boolean',
					'locationName' => 'occurrenceRelativeToEnd',
				],
				'OccurrenceUnit'          => [
					'shape'        => 'String',
					'locationName' => 'occurrenceUnit',
				],
			],
		],
		'ScheduledInstanceRecurrenceRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'Frequency'               => [ 'shape' => 'String', ],
				'Interval'                => [ 'shape' => 'Integer', ],
				'OccurrenceDays'          => [
					'shape'        => 'OccurrenceDayRequestSet',
					'locationName' => 'OccurrenceDay',
				],
				'OccurrenceRelativeToEnd' => [ 'shape' => 'Boolean', ],
				'OccurrenceUnit'          => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstanceSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstance',
				'locationName' => 'item',
			],
		],
		'ScheduledInstancesBlockDeviceMapping'                           => [
			'type'    => 'structure',
			'members' => [
				'DeviceName'  => [ 'shape' => 'String', ],
				'Ebs'         => [ 'shape' => 'ScheduledInstancesEbs', ],
				'NoDevice'    => [ 'shape' => 'String', ],
				'VirtualName' => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesBlockDeviceMappingSet'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstancesBlockDeviceMapping',
				'locationName' => 'BlockDeviceMapping',
			],
		],
		'ScheduledInstancesEbs'                                          => [
			'type'    => 'structure',
			'members' => [
				'DeleteOnTermination' => [ 'shape' => 'Boolean', ],
				'Encrypted'           => [ 'shape' => 'Boolean', ],
				'Iops'                => [ 'shape' => 'Integer', ],
				'SnapshotId'          => [ 'shape' => 'String', ],
				'VolumeSize'          => [ 'shape' => 'Integer', ],
				'VolumeType'          => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesIamInstanceProfile'                           => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [ 'shape' => 'String', ],
				'Name' => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesIpv6Address'                                  => [
			'type'    => 'structure',
			'members' => [ 'Ipv6Address' => [ 'shape' => 'Ipv6Address', ], ],
		],
		'ScheduledInstancesIpv6AddressList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstancesIpv6Address',
				'locationName' => 'Ipv6Address',
			],
		],
		'ScheduledInstancesLaunchSpecification'                          => [
			'type'     => 'structure',
			'required' => [ 'ImageId', ],
			'members'  => [
				'BlockDeviceMappings' => [
					'shape'        => 'ScheduledInstancesBlockDeviceMappingSet',
					'locationName' => 'BlockDeviceMapping',
				],
				'EbsOptimized'        => [ 'shape' => 'Boolean', ],
				'IamInstanceProfile'  => [ 'shape' => 'ScheduledInstancesIamInstanceProfile', ],
				'ImageId'             => [ 'shape' => 'String', ],
				'InstanceType'        => [ 'shape' => 'String', ],
				'KernelId'            => [ 'shape' => 'String', ],
				'KeyName'             => [ 'shape' => 'String', ],
				'Monitoring'          => [ 'shape' => 'ScheduledInstancesMonitoring', ],
				'NetworkInterfaces'   => [
					'shape'        => 'ScheduledInstancesNetworkInterfaceSet',
					'locationName' => 'NetworkInterface',
				],
				'Placement'           => [ 'shape' => 'ScheduledInstancesPlacement', ],
				'RamdiskId'           => [ 'shape' => 'String', ],
				'SecurityGroupIds'    => [
					'shape'        => 'ScheduledInstancesSecurityGroupIdSet',
					'locationName' => 'SecurityGroupId',
				],
				'SubnetId'            => [ 'shape' => 'String', ],
				'UserData'            => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesMonitoring'                                   => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'Boolean', ], ],
		],
		'ScheduledInstancesNetworkInterface'                             => [
			'type'    => 'structure',
			'members' => [
				'AssociatePublicIpAddress'       => [ 'shape' => 'Boolean', ],
				'DeleteOnTermination'            => [ 'shape' => 'Boolean', ],
				'Description'                    => [ 'shape' => 'String', ],
				'DeviceIndex'                    => [ 'shape' => 'Integer', ],
				'Groups'                         => [
					'shape'        => 'ScheduledInstancesSecurityGroupIdSet',
					'locationName' => 'Group',
				],
				'Ipv6AddressCount'               => [ 'shape' => 'Integer', ],
				'Ipv6Addresses'                  => [
					'shape'        => 'ScheduledInstancesIpv6AddressList',
					'locationName' => 'Ipv6Address',
				],
				'NetworkInterfaceId'             => [ 'shape' => 'String', ],
				'PrivateIpAddress'               => [ 'shape' => 'String', ],
				'PrivateIpAddressConfigs'        => [
					'shape'        => 'PrivateIpAddressConfigSet',
					'locationName' => 'PrivateIpAddressConfig',
				],
				'SecondaryPrivateIpAddressCount' => [ 'shape' => 'Integer', ],
				'SubnetId'                       => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesNetworkInterfaceSet'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ScheduledInstancesNetworkInterface',
				'locationName' => 'NetworkInterface',
			],
		],
		'ScheduledInstancesPlacement'                                    => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [ 'shape' => 'String', ],
				'GroupName'        => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesPrivateIpAddressConfig'                       => [
			'type'    => 'structure',
			'members' => [
				'Primary'          => [ 'shape' => 'Boolean', ],
				'PrivateIpAddress' => [ 'shape' => 'String', ],
			],
		],
		'ScheduledInstancesSecurityGroupIdSet'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SecurityGroupId',
			],
		],
		'SearchTransitGatewayRoutesRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'TransitGatewayRouteTableId',
				'Filters',
			],
			'members'  => [
				'TransitGatewayRouteTableId' => [ 'shape' => 'String', ],
				'Filters'                    => [
					'shape'        => 'FilterList',
					'locationName' => 'Filter',
				],
				'MaxResults'                 => [ 'shape' => 'TransitGatewayMaxResults', ],
				'DryRun'                     => [ 'shape' => 'Boolean', ],
			],
		],
		'SearchTransitGatewayRoutesResult'                               => [
			'type'    => 'structure',
			'members' => [
				'Routes'                    => [
					'shape'        => 'TransitGatewayRouteList',
					'locationName' => 'routeSet',
				],
				'AdditionalRoutesAvailable' => [
					'shape'        => 'Boolean',
					'locationName' => 'additionalRoutesAvailable',
				],
			],
		],
		'SecurityGroup'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Description'         => [
					'shape'        => 'String',
					'locationName' => 'groupDescription',
				],
				'GroupName'           => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'IpPermissions'       => [
					'shape'        => 'IpPermissionList',
					'locationName' => 'ipPermissions',
				],
				'OwnerId'             => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'GroupId'             => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'IpPermissionsEgress' => [
					'shape'        => 'IpPermissionList',
					'locationName' => 'ipPermissionsEgress',
				],
				'Tags'                => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcId'               => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'SecurityGroupIdStringList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SecurityGroupId',
			],
		],
		'SecurityGroupIdentifier'                                        => [
			'type'    => 'structure',
			'members' => [
				'GroupId'   => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'GroupName' => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
			],
		],
		'SecurityGroupList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SecurityGroup',
				'locationName' => 'item',
			],
		],
		'SecurityGroupReference'                                         => [
			'type'    => 'structure',
			'members' => [
				'GroupId'                => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'ReferencingVpcId'       => [
					'shape'        => 'String',
					'locationName' => 'referencingVpcId',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'SecurityGroupReferences'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SecurityGroupReference',
				'locationName' => 'item',
			],
		],
		'SecurityGroupStringList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SecurityGroup',
			],
		],
		'ServiceConfiguration'                                           => [
			'type'    => 'structure',
			'members' => [
				'ServiceType'             => [
					'shape'        => 'ServiceTypeDetailSet',
					'locationName' => 'serviceType',
				],
				'ServiceId'               => [ 'shape' => 'String', 'locationName' => 'serviceId', ],
				'ServiceName'             => [ 'shape' => 'String', 'locationName' => 'serviceName', ],
				'ServiceState'            => [
					'shape'        => 'ServiceState',
					'locationName' => 'serviceState',
				],
				'AvailabilityZones'       => [
					'shape'        => 'ValueStringList',
					'locationName' => 'availabilityZoneSet',
				],
				'AcceptanceRequired'      => [
					'shape'        => 'Boolean',
					'locationName' => 'acceptanceRequired',
				],
				'ManagesVpcEndpoints'     => [
					'shape'        => 'Boolean',
					'locationName' => 'managesVpcEndpoints',
				],
				'NetworkLoadBalancerArns' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'networkLoadBalancerArnSet',
				],
				'BaseEndpointDnsNames'    => [
					'shape'        => 'ValueStringList',
					'locationName' => 'baseEndpointDnsNameSet',
				],
				'PrivateDnsName'          => [ 'shape' => 'String', 'locationName' => 'privateDnsName', ],
				'Tags'                    => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'ServiceConfigurationSet'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ServiceConfiguration',
				'locationName' => 'item',
			],
		],
		'ServiceDetail'                                                  => [
			'type'    => 'structure',
			'members' => [
				'ServiceName'                => [
					'shape'        => 'String',
					'locationName' => 'serviceName',
				],
				'ServiceId'                  => [
					'shape'        => 'String',
					'locationName' => 'serviceId',
				],
				'ServiceType'                => [
					'shape'        => 'ServiceTypeDetailSet',
					'locationName' => 'serviceType',
				],
				'AvailabilityZones'          => [
					'shape'        => 'ValueStringList',
					'locationName' => 'availabilityZoneSet',
				],
				'Owner'                      => [
					'shape'        => 'String',
					'locationName' => 'owner',
				],
				'BaseEndpointDnsNames'       => [
					'shape'        => 'ValueStringList',
					'locationName' => 'baseEndpointDnsNameSet',
				],
				'PrivateDnsName'             => [
					'shape'        => 'String',
					'locationName' => 'privateDnsName',
				],
				'VpcEndpointPolicySupported' => [
					'shape'        => 'Boolean',
					'locationName' => 'vpcEndpointPolicySupported',
				],
				'AcceptanceRequired'         => [
					'shape'        => 'Boolean',
					'locationName' => 'acceptanceRequired',
				],
				'ManagesVpcEndpoints'        => [
					'shape'        => 'Boolean',
					'locationName' => 'managesVpcEndpoints',
				],
				'Tags'                       => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'ServiceDetailSet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ServiceDetail',
				'locationName' => 'item',
			],
		],
		'ServiceState'                                                   => [
			'type' => 'string',
			'enum' => [
				'Pending',
				'Available',
				'Deleting',
				'Deleted',
				'Failed',
			],
		],
		'ServiceType'                                                    => [
			'type' => 'string',
			'enum' => [ 'Interface', 'Gateway', ],
		],
		'ServiceTypeDetail'                                              => [
			'type'    => 'structure',
			'members' => [
				'ServiceType' => [
					'shape'        => 'ServiceType',
					'locationName' => 'serviceType',
				],
			],
		],
		'ServiceTypeDetailSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ServiceTypeDetail',
				'locationName' => 'item',
			],
		],
		'ShutdownBehavior'                                               => [
			'type' => 'string',
			'enum' => [ 'stop', 'terminate', ],
		],
		'SlotDateTimeRangeRequest'                                       => [
			'type'     => 'structure',
			'required' => [
				'EarliestTime',
				'LatestTime',
			],
			'members'  => [
				'EarliestTime' => [ 'shape' => 'DateTime', ],
				'LatestTime'   => [ 'shape' => 'DateTime', ],
			],
		],
		'SlotStartTimeRangeRequest'                                      => [
			'type'    => 'structure',
			'members' => [
				'EarliestTime' => [ 'shape' => 'DateTime', ],
				'LatestTime'   => [ 'shape' => 'DateTime', ],
			],
		],
		'Snapshot'                                                       => [
			'type'    => 'structure',
			'members' => [
				'DataEncryptionKeyId' => [ 'shape' => 'String', 'locationName' => 'dataEncryptionKeyId', ],
				'Description'         => [ 'shape' => 'String', 'locationName' => 'description', ],
				'Encrypted'           => [ 'shape' => 'Boolean', 'locationName' => 'encrypted', ],
				'KmsKeyId'            => [ 'shape' => 'String', 'locationName' => 'kmsKeyId', ],
				'OwnerId'             => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
				'Progress'            => [ 'shape' => 'String', 'locationName' => 'progress', ],
				'SnapshotId'          => [ 'shape' => 'String', 'locationName' => 'snapshotId', ],
				'StartTime'           => [ 'shape' => 'DateTime', 'locationName' => 'startTime', ],
				'State'               => [ 'shape' => 'SnapshotState', 'locationName' => 'status', ],
				'StateMessage'        => [ 'shape' => 'String', 'locationName' => 'statusMessage', ],
				'VolumeId'            => [ 'shape' => 'String', 'locationName' => 'volumeId', ],
				'VolumeSize'          => [ 'shape' => 'Integer', 'locationName' => 'volumeSize', ],
				'OwnerAlias'          => [ 'shape' => 'String', 'locationName' => 'ownerAlias', ],
				'Tags'                => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
			],
		],
		'SnapshotAttributeName'                                          => [
			'type' => 'string',
			'enum' => [
				'productCodes',
				'createVolumePermission',
			],
		],
		'SnapshotDetail'                                                 => [
			'type'    => 'structure',
			'members' => [
				'Description'   => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DeviceName'    => [
					'shape'        => 'String',
					'locationName' => 'deviceName',
				],
				'DiskImageSize' => [
					'shape'        => 'Double',
					'locationName' => 'diskImageSize',
				],
				'Format'        => [
					'shape'        => 'String',
					'locationName' => 'format',
				],
				'Progress'      => [
					'shape'        => 'String',
					'locationName' => 'progress',
				],
				'SnapshotId'    => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
				'Status'        => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'Url'           => [
					'shape'        => 'String',
					'locationName' => 'url',
				],
				'UserBucket'    => [
					'shape'        => 'UserBucketDetails',
					'locationName' => 'userBucket',
				],
			],
		],
		'SnapshotDetailList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotDetail',
				'locationName' => 'item',
			],
		],
		'SnapshotDiskContainer'                                          => [
			'type'    => 'structure',
			'members' => [
				'Description' => [ 'shape' => 'String', ],
				'Format'      => [ 'shape' => 'String', ],
				'Url'         => [ 'shape' => 'String', ],
				'UserBucket'  => [ 'shape' => 'UserBucket', ],
			],
		],
		'SnapshotIdStringList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SnapshotId',
			],
		],
		'SnapshotInfo'                                                   => [
			'type'    => 'structure',
			'members' => [
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'Tags'        => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'Encrypted'   => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'VolumeId'    => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
				'State'       => [
					'shape'        => 'SnapshotState',
					'locationName' => 'state',
				],
				'VolumeSize'  => [
					'shape'        => 'Integer',
					'locationName' => 'volumeSize',
				],
				'StartTime'   => [
					'shape'        => 'MillisecondDateTime',
					'locationName' => 'startTime',
				],
				'Progress'    => [
					'shape'        => 'String',
					'locationName' => 'progress',
				],
				'OwnerId'     => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'SnapshotId'  => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
			],
		],
		'SnapshotList'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Snapshot',
				'locationName' => 'item',
			],
		],
		'SnapshotSet'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotInfo',
				'locationName' => 'item',
			],
		],
		'SnapshotState'                                                  => [
			'type' => 'string',
			'enum' => [
				'pending',
				'completed',
				'error',
			],
		],
		'SnapshotTaskDetail'                                             => [
			'type'    => 'structure',
			'members' => [
				'Description'   => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'DiskImageSize' => [
					'shape'        => 'Double',
					'locationName' => 'diskImageSize',
				],
				'Encrypted'     => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'Format'        => [
					'shape'        => 'String',
					'locationName' => 'format',
				],
				'KmsKeyId'      => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
				'Progress'      => [
					'shape'        => 'String',
					'locationName' => 'progress',
				],
				'SnapshotId'    => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
				'Status'        => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'Url'           => [
					'shape'        => 'String',
					'locationName' => 'url',
				],
				'UserBucket'    => [
					'shape'        => 'UserBucketDetails',
					'locationName' => 'userBucket',
				],
			],
		],
		'SpotAllocationStrategy'                                         => [
			'type' => 'string',
			'enum' => [
				'lowest-price',
				'diversified',
			],
		],
		'SpotDatafeedSubscription'                                       => [
			'type'    => 'structure',
			'members' => [
				'Bucket'  => [
					'shape'        => 'String',
					'locationName' => 'bucket',
				],
				'Fault'   => [
					'shape'        => 'SpotInstanceStateFault',
					'locationName' => 'fault',
				],
				'OwnerId' => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Prefix'  => [
					'shape'        => 'String',
					'locationName' => 'prefix',
				],
				'State'   => [
					'shape'        => 'DatafeedSubscriptionState',
					'locationName' => 'state',
				],
			],
		],
		'SpotFleetLaunchSpecification'                                   => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroups'      => [ 'shape' => 'GroupIdentifierList', 'locationName' => 'groupSet', ],
				'AddressingType'      => [ 'shape' => 'String', 'locationName' => 'addressingType', ],
				'BlockDeviceMappings' => [
					'shape'        => 'BlockDeviceMappingList',
					'locationName' => 'blockDeviceMapping',
				],
				'EbsOptimized'        => [ 'shape' => 'Boolean', 'locationName' => 'ebsOptimized', ],
				'IamInstanceProfile'  => [
					'shape'        => 'IamInstanceProfileSpecification',
					'locationName' => 'iamInstanceProfile',
				],
				'ImageId'             => [ 'shape' => 'String', 'locationName' => 'imageId', ],
				'InstanceType'        => [ 'shape' => 'InstanceType', 'locationName' => 'instanceType', ],
				'KernelId'            => [ 'shape' => 'String', 'locationName' => 'kernelId', ],
				'KeyName'             => [ 'shape' => 'String', 'locationName' => 'keyName', ],
				'Monitoring'          => [ 'shape' => 'SpotFleetMonitoring', 'locationName' => 'monitoring', ],
				'NetworkInterfaces'   => [
					'shape'        => 'InstanceNetworkInterfaceSpecificationList',
					'locationName' => 'networkInterfaceSet',
				],
				'Placement'           => [ 'shape' => 'SpotPlacement', 'locationName' => 'placement', ],
				'RamdiskId'           => [ 'shape' => 'String', 'locationName' => 'ramdiskId', ],
				'SpotPrice'           => [ 'shape' => 'String', 'locationName' => 'spotPrice', ],
				'SubnetId'            => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'UserData'            => [ 'shape' => 'String', 'locationName' => 'userData', ],
				'WeightedCapacity'    => [ 'shape' => 'Double', 'locationName' => 'weightedCapacity', ],
				'TagSpecifications'   => [
					'shape'        => 'SpotFleetTagSpecificationList',
					'locationName' => 'tagSpecificationSet',
				],
			],
		],
		'SpotFleetMonitoring'                                            => [
			'type'    => 'structure',
			'members' => [
				'Enabled' => [
					'shape'        => 'Boolean',
					'locationName' => 'enabled',
				],
			],
		],
		'SpotFleetRequestConfig'                                         => [
			'type'    => 'structure',
			'members' => [
				'ActivityStatus'         => [
					'shape'        => 'ActivityStatus',
					'locationName' => 'activityStatus',
				],
				'CreateTime'             => [
					'shape'        => 'DateTime',
					'locationName' => 'createTime',
				],
				'SpotFleetRequestConfig' => [
					'shape'        => 'SpotFleetRequestConfigData',
					'locationName' => 'spotFleetRequestConfig',
				],
				'SpotFleetRequestId'     => [
					'shape'        => 'String',
					'locationName' => 'spotFleetRequestId',
				],
				'SpotFleetRequestState'  => [
					'shape'        => 'BatchState',
					'locationName' => 'spotFleetRequestState',
				],
			],
		],
		'SpotFleetRequestConfigData'                                     => [
			'type'     => 'structure',
			'required' => [ 'IamFleetRole', 'TargetCapacity', ],
			'members'  => [
				'AllocationStrategy'               => [
					'shape'        => 'AllocationStrategy',
					'locationName' => 'allocationStrategy',
				],
				'OnDemandAllocationStrategy'       => [
					'shape'        => 'OnDemandAllocationStrategy',
					'locationName' => 'onDemandAllocationStrategy',
				],
				'ClientToken'                      => [ 'shape' => 'String', 'locationName' => 'clientToken', ],
				'ExcessCapacityTerminationPolicy'  => [
					'shape'        => 'ExcessCapacityTerminationPolicy',
					'locationName' => 'excessCapacityTerminationPolicy',
				],
				'FulfilledCapacity'                => [ 'shape' => 'Double', 'locationName' => 'fulfilledCapacity', ],
				'OnDemandFulfilledCapacity'        => [
					'shape'        => 'Double',
					'locationName' => 'onDemandFulfilledCapacity',
				],
				'IamFleetRole'                     => [ 'shape' => 'String', 'locationName' => 'iamFleetRole', ],
				'LaunchSpecifications'             => [
					'shape'        => 'LaunchSpecsList',
					'locationName' => 'launchSpecifications',
				],
				'LaunchTemplateConfigs'            => [
					'shape'        => 'LaunchTemplateConfigList',
					'locationName' => 'launchTemplateConfigs',
				],
				'SpotPrice'                        => [ 'shape' => 'String', 'locationName' => 'spotPrice', ],
				'TargetCapacity'                   => [ 'shape' => 'Integer', 'locationName' => 'targetCapacity', ],
				'OnDemandTargetCapacity'           => [
					'shape'        => 'Integer',
					'locationName' => 'onDemandTargetCapacity',
				],
				'OnDemandMaxTotalPrice'            => [
					'shape'        => 'String',
					'locationName' => 'onDemandMaxTotalPrice',
				],
				'SpotMaxTotalPrice'                => [ 'shape' => 'String', 'locationName' => 'spotMaxTotalPrice', ],
				'TerminateInstancesWithExpiration' => [
					'shape'        => 'Boolean',
					'locationName' => 'terminateInstancesWithExpiration',
				],
				'Type'                             => [ 'shape' => 'FleetType', 'locationName' => 'type', ],
				'ValidFrom'                        => [ 'shape' => 'DateTime', 'locationName' => 'validFrom', ],
				'ValidUntil'                       => [ 'shape' => 'DateTime', 'locationName' => 'validUntil', ],
				'ReplaceUnhealthyInstances'        => [
					'shape'        => 'Boolean',
					'locationName' => 'replaceUnhealthyInstances',
				],
				'InstanceInterruptionBehavior'     => [
					'shape'        => 'InstanceInterruptionBehavior',
					'locationName' => 'instanceInterruptionBehavior',
				],
				'LoadBalancersConfig'              => [
					'shape'        => 'LoadBalancersConfig',
					'locationName' => 'loadBalancersConfig',
				],
				'InstancePoolsToUseCount'          => [
					'shape'        => 'Integer',
					'locationName' => 'instancePoolsToUseCount',
				],
			],
		],
		'SpotFleetRequestConfigSet'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SpotFleetRequestConfig',
				'locationName' => 'item',
			],
		],
		'SpotFleetTagSpecification'                                      => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [
					'shape'        => 'ResourceType',
					'locationName' => 'resourceType',
				],
				'Tags'         => [
					'shape'        => 'TagList',
					'locationName' => 'tag',
				],
			],
		],
		'SpotFleetTagSpecificationList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SpotFleetTagSpecification',
				'locationName' => 'item',
			],
		],
		'SpotInstanceInterruptionBehavior'                               => [
			'type' => 'string',
			'enum' => [
				'hibernate',
				'stop',
				'terminate',
			],
		],
		'SpotInstanceRequest'                                            => [
			'type'    => 'structure',
			'members' => [
				'ActualBlockHourlyPrice'       => [ 'shape' => 'String', 'locationName' => 'actualBlockHourlyPrice', ],
				'AvailabilityZoneGroup'        => [ 'shape' => 'String', 'locationName' => 'availabilityZoneGroup', ],
				'BlockDurationMinutes'         => [ 'shape' => 'Integer', 'locationName' => 'blockDurationMinutes', ],
				'CreateTime'                   => [ 'shape' => 'DateTime', 'locationName' => 'createTime', ],
				'Fault'                        => [ 'shape' => 'SpotInstanceStateFault', 'locationName' => 'fault', ],
				'InstanceId'                   => [ 'shape' => 'String', 'locationName' => 'instanceId', ],
				'LaunchGroup'                  => [ 'shape' => 'String', 'locationName' => 'launchGroup', ],
				'LaunchSpecification'          => [
					'shape'        => 'LaunchSpecification',
					'locationName' => 'launchSpecification',
				],
				'LaunchedAvailabilityZone'     => [
					'shape'        => 'String',
					'locationName' => 'launchedAvailabilityZone',
				],
				'ProductDescription'           => [
					'shape'        => 'RIProductDescription',
					'locationName' => 'productDescription',
				],
				'SpotInstanceRequestId'        => [ 'shape' => 'String', 'locationName' => 'spotInstanceRequestId', ],
				'SpotPrice'                    => [ 'shape' => 'String', 'locationName' => 'spotPrice', ],
				'State'                        => [ 'shape' => 'SpotInstanceState', 'locationName' => 'state', ],
				'Status'                       => [ 'shape' => 'SpotInstanceStatus', 'locationName' => 'status', ],
				'Tags'                         => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'Type'                         => [ 'shape' => 'SpotInstanceType', 'locationName' => 'type', ],
				'ValidFrom'                    => [ 'shape' => 'DateTime', 'locationName' => 'validFrom', ],
				'ValidUntil'                   => [ 'shape' => 'DateTime', 'locationName' => 'validUntil', ],
				'InstanceInterruptionBehavior' => [
					'shape'        => 'InstanceInterruptionBehavior',
					'locationName' => 'instanceInterruptionBehavior',
				],
			],
		],
		'SpotInstanceRequestIdList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SpotInstanceRequestId',
			],
		],
		'SpotInstanceRequestList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SpotInstanceRequest',
				'locationName' => 'item',
			],
		],
		'SpotInstanceState'                                              => [
			'type' => 'string',
			'enum' => [
				'open',
				'active',
				'closed',
				'cancelled',
				'failed',
			],
		],
		'SpotInstanceStateFault'                                         => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'SpotInstanceStatus'                                             => [
			'type'    => 'structure',
			'members' => [
				'Code'       => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Message'    => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
				'UpdateTime' => [
					'shape'        => 'DateTime',
					'locationName' => 'updateTime',
				],
			],
		],
		'SpotInstanceType'                                               => [
			'type' => 'string',
			'enum' => [ 'one-time', 'persistent', ],
		],
		'SpotMarketOptions'                                              => [
			'type'    => 'structure',
			'members' => [
				'MaxPrice'                     => [ 'shape' => 'String', ],
				'SpotInstanceType'             => [ 'shape' => 'SpotInstanceType', ],
				'BlockDurationMinutes'         => [ 'shape' => 'Integer', ],
				'ValidUntil'                   => [ 'shape' => 'DateTime', ],
				'InstanceInterruptionBehavior' => [ 'shape' => 'InstanceInterruptionBehavior', ],
			],
		],
		'SpotOptions'                                                    => [
			'type'    => 'structure',
			'members' => [
				'AllocationStrategy'           => [
					'shape'        => 'SpotAllocationStrategy',
					'locationName' => 'allocationStrategy',
				],
				'InstanceInterruptionBehavior' => [
					'shape'        => 'SpotInstanceInterruptionBehavior',
					'locationName' => 'instanceInterruptionBehavior',
				],
				'InstancePoolsToUseCount'      => [
					'shape'        => 'Integer',
					'locationName' => 'instancePoolsToUseCount',
				],
				'SingleInstanceType'           => [
					'shape'        => 'Boolean',
					'locationName' => 'singleInstanceType',
				],
				'SingleAvailabilityZone'       => [
					'shape'        => 'Boolean',
					'locationName' => 'singleAvailabilityZone',
				],
				'MinTargetCapacity'            => [
					'shape'        => 'Integer',
					'locationName' => 'minTargetCapacity',
				],
				'MaxTotalPrice'                => [
					'shape'        => 'String',
					'locationName' => 'maxTotalPrice',
				],
			],
		],
		'SpotOptionsRequest'                                             => [
			'type'    => 'structure',
			'members' => [
				'AllocationStrategy'           => [ 'shape' => 'SpotAllocationStrategy', ],
				'InstanceInterruptionBehavior' => [ 'shape' => 'SpotInstanceInterruptionBehavior', ],
				'InstancePoolsToUseCount'      => [ 'shape' => 'Integer', ],
				'SingleInstanceType'           => [ 'shape' => 'Boolean', ],
				'SingleAvailabilityZone'       => [ 'shape' => 'Boolean', ],
				'MinTargetCapacity'            => [ 'shape' => 'Integer', ],
				'MaxTotalPrice'                => [ 'shape' => 'String', ],
			],
		],
		'SpotPlacement'                                                  => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'GroupName'        => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'Tenancy'          => [
					'shape'        => 'Tenancy',
					'locationName' => 'tenancy',
				],
			],
		],
		'SpotPrice'                                                      => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'   => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'InstanceType'       => [
					'shape'        => 'InstanceType',
					'locationName' => 'instanceType',
				],
				'ProductDescription' => [
					'shape'        => 'RIProductDescription',
					'locationName' => 'productDescription',
				],
				'SpotPrice'          => [
					'shape'        => 'String',
					'locationName' => 'spotPrice',
				],
				'Timestamp'          => [
					'shape'        => 'DateTime',
					'locationName' => 'timestamp',
				],
			],
		],
		'SpotPriceHistoryList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SpotPrice',
				'locationName' => 'item',
			],
		],
		'StaleIpPermission'                                              => [
			'type'    => 'structure',
			'members' => [
				'FromPort'         => [
					'shape'        => 'Integer',
					'locationName' => 'fromPort',
				],
				'IpProtocol'       => [
					'shape'        => 'String',
					'locationName' => 'ipProtocol',
				],
				'IpRanges'         => [
					'shape'        => 'IpRanges',
					'locationName' => 'ipRanges',
				],
				'PrefixListIds'    => [
					'shape'        => 'PrefixListIdSet',
					'locationName' => 'prefixListIds',
				],
				'ToPort'           => [
					'shape'        => 'Integer',
					'locationName' => 'toPort',
				],
				'UserIdGroupPairs' => [
					'shape'        => 'UserIdGroupPairSet',
					'locationName' => 'groups',
				],
			],
		],
		'StaleIpPermissionSet'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'StaleIpPermission',
				'locationName' => 'item',
			],
		],
		'StaleSecurityGroup'                                             => [
			'type'    => 'structure',
			'members' => [
				'Description'              => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'GroupId'                  => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'GroupName'                => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'StaleIpPermissions'       => [
					'shape'        => 'StaleIpPermissionSet',
					'locationName' => 'staleIpPermissions',
				],
				'StaleIpPermissionsEgress' => [
					'shape'        => 'StaleIpPermissionSet',
					'locationName' => 'staleIpPermissionsEgress',
				],
				'VpcId'                    => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'StaleSecurityGroupSet'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'StaleSecurityGroup',
				'locationName' => 'item',
			],
		],
		'StartInstancesRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds'    => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'AdditionalInfo' => [
					'shape'        => 'String',
					'locationName' => 'additionalInfo',
				],
				'DryRun'         => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'StartInstancesResult'                                           => [
			'type'    => 'structure',
			'members' => [
				'StartingInstances' => [
					'shape'        => 'InstanceStateChangeList',
					'locationName' => 'instancesSet',
				],
			],
		],
		'State'                                                          => [
			'type' => 'string',
			'enum' => [
				'PendingAcceptance',
				'Pending',
				'Available',
				'Deleting',
				'Deleted',
				'Rejected',
				'Failed',
				'Expired',
			],
		],
		'StateReason'                                                    => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'Status'                                                         => [
			'type' => 'string',
			'enum' => [
				'MoveInProgress',
				'InVpc',
				'InClassic',
			],
		],
		'StatusName'                                                     => [
			'type' => 'string',
			'enum' => [ 'reachability', ],
		],
		'StatusType'                                                     => [
			'type' => 'string',
			'enum' => [
				'passed',
				'failed',
				'insufficient-data',
				'initializing',
			],
		],
		'StopInstancesRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'Hibernate'   => [ 'shape' => 'Boolean', ],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
				'Force'       => [
					'shape'        => 'Boolean',
					'locationName' => 'force',
				],
			],
		],
		'StopInstancesResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'StoppingInstances' => [
					'shape'        => 'InstanceStateChangeList',
					'locationName' => 'instancesSet',
				],
			],
		],
		'Storage'                                                        => [
			'type'    => 'structure',
			'members' => [ 'S3' => [ 'shape' => 'S3Storage', ], ],
		],
		'StorageLocation'                                                => [
			'type'    => 'structure',
			'members' => [
				'Bucket' => [ 'shape' => 'String', ],
				'Key'    => [ 'shape' => 'String', ],
			],
		],
		'String'                                                         => [ 'type' => 'string', ],
		'Subnet'                                                         => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'            => [ 'shape' => 'String', 'locationName' => 'availabilityZone', ],
				'AvailabilityZoneId'          => [ 'shape' => 'String', 'locationName' => 'availabilityZoneId', ],
				'AvailableIpAddressCount'     => [ 'shape' => 'Integer', 'locationName' => 'availableIpAddressCount', ],
				'CidrBlock'                   => [ 'shape' => 'String', 'locationName' => 'cidrBlock', ],
				'DefaultForAz'                => [ 'shape' => 'Boolean', 'locationName' => 'defaultForAz', ],
				'MapPublicIpOnLaunch'         => [ 'shape' => 'Boolean', 'locationName' => 'mapPublicIpOnLaunch', ],
				'State'                       => [ 'shape' => 'SubnetState', 'locationName' => 'state', ],
				'SubnetId'                    => [ 'shape' => 'String', 'locationName' => 'subnetId', ],
				'VpcId'                       => [ 'shape' => 'String', 'locationName' => 'vpcId', ],
				'OwnerId'                     => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
				'AssignIpv6AddressOnCreation' => [
					'shape'        => 'Boolean',
					'locationName' => 'assignIpv6AddressOnCreation',
				],
				'Ipv6CidrBlockAssociationSet' => [
					'shape'        => 'SubnetIpv6CidrBlockAssociationSet',
					'locationName' => 'ipv6CidrBlockAssociationSet',
				],
				'Tags'                        => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'SubnetArn'                   => [ 'shape' => 'String', 'locationName' => 'subnetArn', ],
			],
		],
		'SubnetCidrBlockState'                                           => [
			'type'    => 'structure',
			'members' => [
				'State'         => [
					'shape'        => 'SubnetCidrBlockStateCode',
					'locationName' => 'state',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
			],
		],
		'SubnetCidrBlockStateCode'                                       => [
			'type' => 'string',
			'enum' => [
				'associating',
				'associated',
				'disassociating',
				'disassociated',
				'failing',
				'failed',
			],
		],
		'SubnetIdStringList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SubnetId',
			],
		],
		'SubnetIpv6CidrBlockAssociation'                                 => [
			'type'    => 'structure',
			'members' => [
				'AssociationId'      => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'Ipv6CidrBlock'      => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'Ipv6CidrBlockState' => [
					'shape'        => 'SubnetCidrBlockState',
					'locationName' => 'ipv6CidrBlockState',
				],
			],
		],
		'SubnetIpv6CidrBlockAssociationSet'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SubnetIpv6CidrBlockAssociation',
				'locationName' => 'item',
			],
		],
		'SubnetList'                                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Subnet',
				'locationName' => 'item',
			],
		],
		'SubnetState'                                                    => [
			'type' => 'string',
			'enum' => [ 'pending', 'available', ],
		],
		'SuccessfulInstanceCreditSpecificationItem'                      => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
			],
		],
		'SuccessfulInstanceCreditSpecificationSet'                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SuccessfulInstanceCreditSpecificationItem',
				'locationName' => 'item',
			],
		],
		'SummaryStatus'                                                  => [
			'type' => 'string',
			'enum' => [
				'ok',
				'impaired',
				'insufficient-data',
				'not-applicable',
				'initializing',
			],
		],
		'Tag'                                                            => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [
					'shape'        => 'String',
					'locationName' => 'key',
				],
				'Value' => [
					'shape'        => 'String',
					'locationName' => 'value',
				],
			],
		],
		'TagDescription'                                                 => [
			'type'    => 'structure',
			'members' => [
				'Key'          => [
					'shape'        => 'String',
					'locationName' => 'key',
				],
				'ResourceId'   => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'ResourceType' => [
					'shape'        => 'ResourceType',
					'locationName' => 'resourceType',
				],
				'Value'        => [
					'shape'        => 'String',
					'locationName' => 'value',
				],
			],
		],
		'TagDescriptionList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TagDescription',
				'locationName' => 'item',
			],
		],
		'TagList'                                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Tag',
				'locationName' => 'item',
			],
		],
		'TagSpecification'                                               => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [
					'shape'        => 'ResourceType',
					'locationName' => 'resourceType',
				],
				'Tags'         => [
					'shape'        => 'TagList',
					'locationName' => 'Tag',
				],
			],
		],
		'TagSpecificationList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TagSpecification',
				'locationName' => 'item',
			],
		],
		'TargetCapacitySpecification'                                    => [
			'type'    => 'structure',
			'members' => [
				'TotalTargetCapacity'       => [
					'shape'        => 'Integer',
					'locationName' => 'totalTargetCapacity',
				],
				'OnDemandTargetCapacity'    => [
					'shape'        => 'Integer',
					'locationName' => 'onDemandTargetCapacity',
				],
				'SpotTargetCapacity'        => [
					'shape'        => 'Integer',
					'locationName' => 'spotTargetCapacity',
				],
				'DefaultTargetCapacityType' => [
					'shape'        => 'DefaultTargetCapacityType',
					'locationName' => 'defaultTargetCapacityType',
				],
			],
		],
		'TargetCapacitySpecificationRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'TotalTargetCapacity', ],
			'members'  => [
				'TotalTargetCapacity'       => [ 'shape' => 'Integer', ],
				'OnDemandTargetCapacity'    => [ 'shape' => 'Integer', ],
				'SpotTargetCapacity'        => [ 'shape' => 'Integer', ],
				'DefaultTargetCapacityType' => [ 'shape' => 'DefaultTargetCapacityType', ],
			],
		],
		'TargetConfiguration'                                            => [
			'type'    => 'structure',
			'members' => [
				'InstanceCount' => [
					'shape'        => 'Integer',
					'locationName' => 'instanceCount',
				],
				'OfferingId'    => [
					'shape'        => 'String',
					'locationName' => 'offeringId',
				],
			],
		],
		'TargetConfigurationRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'OfferingId', ],
			'members'  => [
				'InstanceCount' => [ 'shape' => 'Integer', ],
				'OfferingId'    => [ 'shape' => 'String', ],
			],
		],
		'TargetConfigurationRequestSet'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TargetConfigurationRequest',
				'locationName' => 'TargetConfigurationRequest',
			],
		],
		'TargetGroup'                                                    => [
			'type'    => 'structure',
			'members' => [
				'Arn' => [
					'shape'        => 'String',
					'locationName' => 'arn',
				],
			],
		],
		'TargetGroups'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TargetGroup',
				'locationName' => 'item',
			],
			'max'    => 5,
			'min'    => 1,
		],
		'TargetGroupsConfig'                                             => [
			'type'    => 'structure',
			'members' => [
				'TargetGroups' => [
					'shape'        => 'TargetGroups',
					'locationName' => 'targetGroups',
				],
			],
		],
		'TargetNetwork'                                                  => [
			'type'    => 'structure',
			'members' => [
				'AssociationId'       => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'VpcId'               => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'TargetNetworkId'     => [
					'shape'        => 'String',
					'locationName' => 'targetNetworkId',
				],
				'ClientVpnEndpointId' => [
					'shape'        => 'String',
					'locationName' => 'clientVpnEndpointId',
				],
				'Status'              => [
					'shape'        => 'AssociationStatus',
					'locationName' => 'status',
				],
				'SecurityGroups'      => [
					'shape'        => 'ValueStringList',
					'locationName' => 'securityGroups',
				],
			],
		],
		'TargetNetworkSet'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TargetNetwork',
				'locationName' => 'item',
			],
		],
		'TargetReservationValue'                                         => [
			'type'    => 'structure',
			'members' => [
				'ReservationValue'    => [
					'shape'        => 'ReservationValue',
					'locationName' => 'reservationValue',
				],
				'TargetConfiguration' => [
					'shape'        => 'TargetConfiguration',
					'locationName' => 'targetConfiguration',
				],
			],
		],
		'TargetReservationValueSet'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TargetReservationValue',
				'locationName' => 'item',
			],
		],
		'TelemetryStatus'                                                => [
			'type' => 'string',
			'enum' => [ 'UP', 'DOWN', ],
		],
		'Tenancy'                                                        => [
			'type' => 'string',
			'enum' => [
				'default',
				'dedicated',
				'host',
			],
		],
		'TerminateClientVpnConnectionsRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ClientVpnEndpointId', ],
			'members'  => [
				'ClientVpnEndpointId' => [ 'shape' => 'String', ],
				'ConnectionId'        => [ 'shape' => 'String', ],
				'Username'            => [ 'shape' => 'String', ],
				'DryRun'              => [ 'shape' => 'Boolean', ],
			],
		],
		'TerminateClientVpnConnectionsResult'                            => [
			'type'    => 'structure',
			'members' => [
				'ClientVpnEndpointId' => [
					'shape'        => 'String',
					'locationName' => 'clientVpnEndpointId',
				],
				'Username'            => [
					'shape'        => 'String',
					'locationName' => 'username',
				],
				'ConnectionStatuses'  => [
					'shape'        => 'TerminateConnectionStatusSet',
					'locationName' => 'connectionStatuses',
				],
			],
		],
		'TerminateConnectionStatus'                                      => [
			'type'    => 'structure',
			'members' => [
				'ConnectionId'   => [
					'shape'        => 'String',
					'locationName' => 'connectionId',
				],
				'PreviousStatus' => [
					'shape'        => 'ClientVpnConnectionStatus',
					'locationName' => 'previousStatus',
				],
				'CurrentStatus'  => [
					'shape'        => 'ClientVpnConnectionStatus',
					'locationName' => 'currentStatus',
				],
			],
		],
		'TerminateConnectionStatusSet'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TerminateConnectionStatus',
				'locationName' => 'item',
			],
		],
		'TerminateInstancesRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'TerminateInstancesResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'TerminatingInstances' => [
					'shape'        => 'InstanceStateChangeList',
					'locationName' => 'instancesSet',
				],
			],
		],
		'TrafficDirection'                                               => [
			'type' => 'string',
			'enum' => [ 'ingress', 'egress', ],
		],
		'TrafficMirrorFilter'                                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterId',
				],
				'IngressFilterRules'    => [
					'shape'        => 'TrafficMirrorFilterRuleList',
					'locationName' => 'ingressFilterRuleSet',
				],
				'EgressFilterRules'     => [
					'shape'        => 'TrafficMirrorFilterRuleList',
					'locationName' => 'egressFilterRuleSet',
				],
				'NetworkServices'       => [
					'shape'        => 'TrafficMirrorNetworkServiceList',
					'locationName' => 'networkServiceSet',
				],
				'Description'           => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'Tags'                  => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TrafficMirrorFilterRule'                                        => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorFilterRuleId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterRuleId',
				],
				'TrafficMirrorFilterId'     => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterId',
				],
				'TrafficDirection'          => [
					'shape'        => 'TrafficDirection',
					'locationName' => 'trafficDirection',
				],
				'RuleNumber'                => [ 'shape' => 'Integer', 'locationName' => 'ruleNumber', ],
				'RuleAction'                => [
					'shape'        => 'TrafficMirrorRuleAction',
					'locationName' => 'ruleAction',
				],
				'Protocol'                  => [ 'shape' => 'Integer', 'locationName' => 'protocol', ],
				'DestinationPortRange'      => [
					'shape'        => 'TrafficMirrorPortRange',
					'locationName' => 'destinationPortRange',
				],
				'SourcePortRange'           => [
					'shape'        => 'TrafficMirrorPortRange',
					'locationName' => 'sourcePortRange',
				],
				'DestinationCidrBlock'      => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'SourceCidrBlock'           => [ 'shape' => 'String', 'locationName' => 'sourceCidrBlock', ],
				'Description'               => [ 'shape' => 'String', 'locationName' => 'description', ],
			],
		],
		'TrafficMirrorFilterRuleField'                                   => [
			'type' => 'string',
			'enum' => [
				'destination-port-range',
				'source-port-range',
				'protocol',
				'description',
			],
		],
		'TrafficMirrorFilterRuleFieldList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TrafficMirrorFilterRuleField', ],
		],
		'TrafficMirrorFilterRuleList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficMirrorFilterRule',
				'locationName' => 'item',
			],
		],
		'TrafficMirrorFilterSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficMirrorFilter',
				'locationName' => 'item',
			],
		],
		'TrafficMirrorNetworkService'                                    => [
			'type' => 'string',
			'enum' => [ 'amazon-dns', ],
		],
		'TrafficMirrorNetworkServiceList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficMirrorNetworkService',
				'locationName' => 'item',
			],
		],
		'TrafficMirrorPortRange'                                         => [
			'type'    => 'structure',
			'members' => [
				'FromPort' => [
					'shape'        => 'Integer',
					'locationName' => 'fromPort',
				],
				'ToPort'   => [
					'shape'        => 'Integer',
					'locationName' => 'toPort',
				],
			],
		],
		'TrafficMirrorPortRangeRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'FromPort' => [ 'shape' => 'Integer', ],
				'ToPort'   => [ 'shape' => 'Integer', ],
			],
		],
		'TrafficMirrorRuleAction'                                        => [
			'type' => 'string',
			'enum' => [ 'accept', 'reject', ],
		],
		'TrafficMirrorSession'                                           => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorSessionId' => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorSessionId',
				],
				'TrafficMirrorTargetId'  => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorTargetId',
				],
				'TrafficMirrorFilterId'  => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorFilterId',
				],
				'NetworkInterfaceId'     => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'OwnerId'                => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'PacketLength'           => [
					'shape'        => 'Integer',
					'locationName' => 'packetLength',
				],
				'SessionNumber'          => [
					'shape'        => 'Integer',
					'locationName' => 'sessionNumber',
				],
				'VirtualNetworkId'       => [
					'shape'        => 'Integer',
					'locationName' => 'virtualNetworkId',
				],
				'Description'            => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'Tags'                   => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TrafficMirrorSessionField'                                      => [
			'type' => 'string',
			'enum' => [
				'packet-length',
				'description',
				'virtual-network-id',
			],
		],
		'TrafficMirrorSessionFieldList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TrafficMirrorSessionField', ],
		],
		'TrafficMirrorSessionSet'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficMirrorSession',
				'locationName' => 'item',
			],
		],
		'TrafficMirrorTarget'                                            => [
			'type'    => 'structure',
			'members' => [
				'TrafficMirrorTargetId'  => [
					'shape'        => 'String',
					'locationName' => 'trafficMirrorTargetId',
				],
				'NetworkInterfaceId'     => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'NetworkLoadBalancerArn' => [
					'shape'        => 'String',
					'locationName' => 'networkLoadBalancerArn',
				],
				'Type'                   => [
					'shape'        => 'TrafficMirrorTargetType',
					'locationName' => 'type',
				],
				'Description'            => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'OwnerId'                => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Tags'                   => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TrafficMirrorTargetSet'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficMirrorTarget',
				'locationName' => 'item',
			],
		],
		'TrafficMirrorTargetType'                                        => [
			'type' => 'string',
			'enum' => [
				'network-interface',
				'network-load-balancer',
			],
		],
		'TrafficMirroringMaxResults'                                     => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'TrafficType'                                                    => [
			'type' => 'string',
			'enum' => [ 'ACCEPT', 'REJECT', 'ALL', ],
		],
		'TransitGateway'                                                 => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayId'  => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayId',
				],
				'TransitGatewayArn' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayArn',
				],
				'State'             => [
					'shape'        => 'TransitGatewayState',
					'locationName' => 'state',
				],
				'OwnerId'           => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'Description'       => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'CreationTime'      => [
					'shape'        => 'DateTime',
					'locationName' => 'creationTime',
				],
				'Options'           => [
					'shape'        => 'TransitGatewayOptions',
					'locationName' => 'options',
				],
				'Tags'              => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TransitGatewayAssociation'                                      => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayRouteTableId',
				],
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayAssociationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayAssociationState'                                 => [
			'type' => 'string',
			'enum' => [
				'associating',
				'associated',
				'disassociating',
				'disassociated',
			],
		],
		'TransitGatewayAttachment'                                       => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'TransitGatewayId'           => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayId',
				],
				'TransitGatewayOwnerId'      => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayOwnerId',
				],
				'ResourceOwnerId'            => [
					'shape'        => 'String',
					'locationName' => 'resourceOwnerId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayAttachmentState',
					'locationName' => 'state',
				],
				'Association'                => [
					'shape'        => 'TransitGatewayAttachmentAssociation',
					'locationName' => 'association',
				],
				'CreationTime'               => [
					'shape'        => 'DateTime',
					'locationName' => 'creationTime',
				],
				'Tags'                       => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TransitGatewayAttachmentAssociation'                            => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayRouteTableId',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayAssociationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayAttachmentIdStringList'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'TransitGatewayAttachmentList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayAttachment',
				'locationName' => 'item',
			],
		],
		'TransitGatewayAttachmentPropagation'                            => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayRouteTableId',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayPropagationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayAttachmentPropagationList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayAttachmentPropagation',
				'locationName' => 'item',
			],
		],
		'TransitGatewayAttachmentResourceType'                           => [
			'type' => 'string',
			'enum' => [
				'vpc',
				'vpn',
				'direct-connect-gateway',
			],
		],
		'TransitGatewayAttachmentState'                                  => [
			'type' => 'string',
			'enum' => [
				'pendingAcceptance',
				'rollingBack',
				'pending',
				'available',
				'modifying',
				'deleting',
				'deleted',
				'failed',
				'rejected',
				'rejecting',
				'failing',
			],
		],
		'TransitGatewayIdStringList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'TransitGatewayList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGateway',
				'locationName' => 'item',
			],
		],
		'TransitGatewayMaxResults'                                       => [
			'type' => 'integer',
			'max'  => 1000,
			'min'  => 5,
		],
		'TransitGatewayOptions'                                          => [
			'type'    => 'structure',
			'members' => [
				'AmazonSideAsn'                  => [
					'shape'        => 'Long',
					'locationName' => 'amazonSideAsn',
				],
				'AutoAcceptSharedAttachments'    => [
					'shape'        => 'AutoAcceptSharedAttachmentsValue',
					'locationName' => 'autoAcceptSharedAttachments',
				],
				'DefaultRouteTableAssociation'   => [
					'shape'        => 'DefaultRouteTableAssociationValue',
					'locationName' => 'defaultRouteTableAssociation',
				],
				'AssociationDefaultRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'associationDefaultRouteTableId',
				],
				'DefaultRouteTablePropagation'   => [
					'shape'        => 'DefaultRouteTablePropagationValue',
					'locationName' => 'defaultRouteTablePropagation',
				],
				'PropagationDefaultRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'propagationDefaultRouteTableId',
				],
				'VpnEcmpSupport'                 => [
					'shape'        => 'VpnEcmpSupportValue',
					'locationName' => 'vpnEcmpSupport',
				],
				'DnsSupport'                     => [
					'shape'        => 'DnsSupportValue',
					'locationName' => 'dnsSupport',
				],
			],
		],
		'TransitGatewayPropagation'                                      => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
				'TransitGatewayRouteTableId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayRouteTableId',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayPropagationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayPropagationState'                                 => [
			'type' => 'string',
			'enum' => [
				'enabling',
				'enabled',
				'disabling',
				'disabled',
			],
		],
		'TransitGatewayRequestOptions'                                   => [
			'type'    => 'structure',
			'members' => [
				'AmazonSideAsn'                => [ 'shape' => 'Long', ],
				'AutoAcceptSharedAttachments'  => [ 'shape' => 'AutoAcceptSharedAttachmentsValue', ],
				'DefaultRouteTableAssociation' => [ 'shape' => 'DefaultRouteTableAssociationValue', ],
				'DefaultRouteTablePropagation' => [ 'shape' => 'DefaultRouteTablePropagationValue', ],
				'VpnEcmpSupport'               => [ 'shape' => 'VpnEcmpSupportValue', ],
				'DnsSupport'                   => [ 'shape' => 'DnsSupportValue', ],
			],
		],
		'TransitGatewayRoute'                                            => [
			'type'    => 'structure',
			'members' => [
				'DestinationCidrBlock'      => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'TransitGatewayAttachments' => [
					'shape'        => 'TransitGatewayRouteAttachmentList',
					'locationName' => 'transitGatewayAttachments',
				],
				'Type'                      => [
					'shape'        => 'TransitGatewayRouteType',
					'locationName' => 'type',
				],
				'State'                     => [
					'shape'        => 'TransitGatewayRouteState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayRouteAttachment'                                  => [
			'type'    => 'structure',
			'members' => [
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
			],
		],
		'TransitGatewayRouteAttachmentList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayRouteAttachment',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayRoute',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteState'                                       => [
			'type' => 'string',
			'enum' => [
				'pending',
				'active',
				'blackhole',
				'deleting',
				'deleted',
			],
		],
		'TransitGatewayRouteTable'                                       => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayRouteTableId'   => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayRouteTableId',
				],
				'TransitGatewayId'             => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayId',
				],
				'State'                        => [
					'shape'        => 'TransitGatewayRouteTableState',
					'locationName' => 'state',
				],
				'DefaultAssociationRouteTable' => [
					'shape'        => 'Boolean',
					'locationName' => 'defaultAssociationRouteTable',
				],
				'DefaultPropagationRouteTable' => [
					'shape'        => 'Boolean',
					'locationName' => 'defaultPropagationRouteTable',
				],
				'CreationTime'                 => [
					'shape'        => 'DateTime',
					'locationName' => 'creationTime',
				],
				'Tags'                         => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TransitGatewayRouteTableAssociation'                            => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayAssociationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayRouteTableAssociationList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayRouteTableAssociation',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteTableIdStringList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteTableList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayRouteTable',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteTablePropagation'                            => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'ResourceId'                 => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
				'ResourceType'               => [
					'shape'        => 'TransitGatewayAttachmentResourceType',
					'locationName' => 'resourceType',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayPropagationState',
					'locationName' => 'state',
				],
			],
		],
		'TransitGatewayRouteTablePropagationList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayRouteTablePropagation',
				'locationName' => 'item',
			],
		],
		'TransitGatewayRouteTableState'                                  => [
			'type' => 'string',
			'enum' => [
				'pending',
				'available',
				'deleting',
				'deleted',
			],
		],
		'TransitGatewayRouteType'                                        => [
			'type' => 'string',
			'enum' => [ 'static', 'propagated', ],
		],
		'TransitGatewayState'                                            => [
			'type' => 'string',
			'enum' => [
				'pending',
				'available',
				'modifying',
				'deleting',
				'deleted',
			],
		],
		'TransitGatewayVpcAttachment'                                    => [
			'type'    => 'structure',
			'members' => [
				'TransitGatewayAttachmentId' => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayAttachmentId',
				],
				'TransitGatewayId'           => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayId',
				],
				'VpcId'                      => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'VpcOwnerId'                 => [
					'shape'        => 'String',
					'locationName' => 'vpcOwnerId',
				],
				'State'                      => [
					'shape'        => 'TransitGatewayAttachmentState',
					'locationName' => 'state',
				],
				'SubnetIds'                  => [
					'shape'        => 'ValueStringList',
					'locationName' => 'subnetIds',
				],
				'CreationTime'               => [
					'shape'        => 'DateTime',
					'locationName' => 'creationTime',
				],
				'Options'                    => [
					'shape'        => 'TransitGatewayVpcAttachmentOptions',
					'locationName' => 'options',
				],
				'Tags'                       => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'TransitGatewayVpcAttachmentList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TransitGatewayVpcAttachment',
				'locationName' => 'item',
			],
		],
		'TransitGatewayVpcAttachmentOptions'                             => [
			'type'    => 'structure',
			'members' => [
				'DnsSupport'  => [
					'shape'        => 'DnsSupportValue',
					'locationName' => 'dnsSupport',
				],
				'Ipv6Support' => [
					'shape'        => 'Ipv6SupportValue',
					'locationName' => 'ipv6Support',
				],
			],
		],
		'TransportProtocol'                                              => [
			'type' => 'string',
			'enum' => [ 'tcp', 'udp', ],
		],
		'TunnelOptionsList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpnTunnelOptionsSpecification',
				'locationName' => 'item',
			],
		],
		'UnassignIpv6AddressesRequest'                                   => [
			'type'     => 'structure',
			'required' => [
				'Ipv6Addresses',
				'NetworkInterfaceId',
			],
			'members'  => [
				'Ipv6Addresses'      => [
					'shape'        => 'Ipv6AddressList',
					'locationName' => 'ipv6Addresses',
				],
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'UnassignIpv6AddressesResult'                                    => [
			'type'    => 'structure',
			'members' => [
				'NetworkInterfaceId'      => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'UnassignedIpv6Addresses' => [
					'shape'        => 'Ipv6AddressList',
					'locationName' => 'unassignedIpv6Addresses',
				],
			],
		],
		'UnassignPrivateIpAddressesRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'NetworkInterfaceId',
				'PrivateIpAddresses',
			],
			'members'  => [
				'NetworkInterfaceId' => [
					'shape'        => 'String',
					'locationName' => 'networkInterfaceId',
				],
				'PrivateIpAddresses' => [
					'shape'        => 'PrivateIpAddressStringList',
					'locationName' => 'privateIpAddress',
				],
			],
		],
		'UnmonitorInstancesRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'InstanceIds', ],
			'members'  => [
				'InstanceIds' => [
					'shape'        => 'InstanceIdStringList',
					'locationName' => 'InstanceId',
				],
				'DryRun'      => [
					'shape'        => 'Boolean',
					'locationName' => 'dryRun',
				],
			],
		],
		'UnmonitorInstancesResult'                                       => [
			'type'    => 'structure',
			'members' => [
				'InstanceMonitorings' => [
					'shape'        => 'InstanceMonitoringList',
					'locationName' => 'instancesSet',
				],
			],
		],
		'UnsuccessfulInstanceCreditSpecificationErrorCode'               => [
			'type' => 'string',
			'enum' => [
				'InvalidInstanceID.Malformed',
				'InvalidInstanceID.NotFound',
				'IncorrectInstanceState',
				'InstanceCreditSpecification.NotSupported',
			],
		],
		'UnsuccessfulInstanceCreditSpecificationItem'                    => [
			'type'    => 'structure',
			'members' => [
				'InstanceId' => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'Error'      => [
					'shape'        => 'UnsuccessfulInstanceCreditSpecificationItemError',
					'locationName' => 'error',
				],
			],
		],
		'UnsuccessfulInstanceCreditSpecificationItemError'               => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'UnsuccessfulInstanceCreditSpecificationErrorCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'UnsuccessfulInstanceCreditSpecificationSet'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UnsuccessfulInstanceCreditSpecificationItem',
				'locationName' => 'item',
			],
		],
		'UnsuccessfulItem'                                               => [
			'type'    => 'structure',
			'members' => [
				'Error'      => [
					'shape'        => 'UnsuccessfulItemError',
					'locationName' => 'error',
				],
				'ResourceId' => [
					'shape'        => 'String',
					'locationName' => 'resourceId',
				],
			],
		],
		'UnsuccessfulItemError'                                          => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'UnsuccessfulItemList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UnsuccessfulItem',
				'locationName' => 'item',
			],
		],
		'UnsuccessfulItemSet'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UnsuccessfulItem',
				'locationName' => 'item',
			],
		],
		'UpdateSecurityGroupRuleDescriptionsEgressRequest'               => [
			'type'     => 'structure',
			'required' => [ 'IpPermissions', ],
			'members'  => [
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'GroupId'       => [ 'shape' => 'String', ],
				'GroupName'     => [ 'shape' => 'String', ],
				'IpPermissions' => [ 'shape' => 'IpPermissionList', ],
			],
		],
		'UpdateSecurityGroupRuleDescriptionsEgressResult'                => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'UpdateSecurityGroupRuleDescriptionsIngressRequest'              => [
			'type'     => 'structure',
			'required' => [ 'IpPermissions', ],
			'members'  => [
				'DryRun'        => [ 'shape' => 'Boolean', ],
				'GroupId'       => [ 'shape' => 'String', ],
				'GroupName'     => [ 'shape' => 'String', ],
				'IpPermissions' => [ 'shape' => 'IpPermissionList', ],
			],
		],
		'UpdateSecurityGroupRuleDescriptionsIngressResult'               => [
			'type'    => 'structure',
			'members' => [
				'Return' => [
					'shape'        => 'Boolean',
					'locationName' => 'return',
				],
			],
		],
		'UserBucket'                                                     => [
			'type'    => 'structure',
			'members' => [
				'S3Bucket' => [ 'shape' => 'String', ],
				'S3Key'    => [ 'shape' => 'String', ],
			],
		],
		'UserBucketDetails'                                              => [
			'type'    => 'structure',
			'members' => [
				'S3Bucket' => [
					'shape'        => 'String',
					'locationName' => 's3Bucket',
				],
				'S3Key'    => [
					'shape'        => 'String',
					'locationName' => 's3Key',
				],
			],
		],
		'UserData'                                                       => [
			'type'    => 'structure',
			'members' => [
				'Data' => [
					'shape'        => 'String',
					'locationName' => 'data',
				],
			],
		],
		'UserGroupStringList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'UserGroup',
			],
		],
		'UserIdGroupPair'                                                => [
			'type'    => 'structure',
			'members' => [
				'Description'            => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'GroupId'                => [
					'shape'        => 'String',
					'locationName' => 'groupId',
				],
				'GroupName'              => [
					'shape'        => 'String',
					'locationName' => 'groupName',
				],
				'PeeringStatus'          => [
					'shape'        => 'String',
					'locationName' => 'peeringStatus',
				],
				'UserId'                 => [
					'shape'        => 'String',
					'locationName' => 'userId',
				],
				'VpcId'                  => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'UserIdGroupPairList'                                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UserIdGroupPair',
				'locationName' => 'item',
			],
		],
		'UserIdGroupPairSet'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UserIdGroupPair',
				'locationName' => 'item',
			],
		],
		'UserIdStringList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'UserId',
			],
		],
		'ValueStringList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'VersionDescription'                                             => [ 'type' => 'string', 'max' => 255, ],
		'VersionStringList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'item',
			],
		],
		'VgwTelemetry'                                                   => [
			'type'    => 'structure',
			'members' => [
				'AcceptedRouteCount' => [
					'shape'        => 'Integer',
					'locationName' => 'acceptedRouteCount',
				],
				'LastStatusChange'   => [
					'shape'        => 'DateTime',
					'locationName' => 'lastStatusChange',
				],
				'OutsideIpAddress'   => [
					'shape'        => 'String',
					'locationName' => 'outsideIpAddress',
				],
				'Status'             => [
					'shape'        => 'TelemetryStatus',
					'locationName' => 'status',
				],
				'StatusMessage'      => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
			],
		],
		'VgwTelemetryList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VgwTelemetry',
				'locationName' => 'item',
			],
		],
		'VirtualizationType'                                             => [
			'type' => 'string',
			'enum' => [ 'hvm', 'paravirtual', ],
		],
		'Volume'                                                         => [
			'type'    => 'structure',
			'members' => [
				'Attachments'      => [
					'shape'        => 'VolumeAttachmentList',
					'locationName' => 'attachmentSet',
				],
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'CreateTime'       => [
					'shape'        => 'DateTime',
					'locationName' => 'createTime',
				],
				'Encrypted'        => [
					'shape'        => 'Boolean',
					'locationName' => 'encrypted',
				],
				'KmsKeyId'         => [
					'shape'        => 'String',
					'locationName' => 'kmsKeyId',
				],
				'Size'             => [
					'shape'        => 'Integer',
					'locationName' => 'size',
				],
				'SnapshotId'       => [
					'shape'        => 'String',
					'locationName' => 'snapshotId',
				],
				'State'            => [
					'shape'        => 'VolumeState',
					'locationName' => 'status',
				],
				'VolumeId'         => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
				'Iops'             => [
					'shape'        => 'Integer',
					'locationName' => 'iops',
				],
				'Tags'             => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VolumeType'       => [
					'shape'        => 'VolumeType',
					'locationName' => 'volumeType',
				],
			],
		],
		'VolumeAttachment'                                               => [
			'type'    => 'structure',
			'members' => [
				'AttachTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'attachTime',
				],
				'Device'              => [
					'shape'        => 'String',
					'locationName' => 'device',
				],
				'InstanceId'          => [
					'shape'        => 'String',
					'locationName' => 'instanceId',
				],
				'State'               => [
					'shape'        => 'VolumeAttachmentState',
					'locationName' => 'status',
				],
				'VolumeId'            => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
				'DeleteOnTermination' => [
					'shape'        => 'Boolean',
					'locationName' => 'deleteOnTermination',
				],
			],
		],
		'VolumeAttachmentList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeAttachment',
				'locationName' => 'item',
			],
		],
		'VolumeAttachmentState'                                          => [
			'type' => 'string',
			'enum' => [
				'attaching',
				'attached',
				'detaching',
				'detached',
				'busy',
			],
		],
		'VolumeAttributeName'                                            => [
			'type' => 'string',
			'enum' => [
				'autoEnableIO',
				'productCodes',
			],
		],
		'VolumeDetail'                                                   => [
			'type'     => 'structure',
			'required' => [ 'Size', ],
			'members'  => [
				'Size' => [
					'shape'        => 'Long',
					'locationName' => 'size',
				],
			],
		],
		'VolumeIdStringList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VolumeId',
			],
		],
		'VolumeList'                                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Volume',
				'locationName' => 'item',
			],
		],
		'VolumeModification'                                             => [
			'type'    => 'structure',
			'members' => [
				'VolumeId'           => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
				'ModificationState'  => [
					'shape'        => 'VolumeModificationState',
					'locationName' => 'modificationState',
				],
				'StatusMessage'      => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
				'TargetSize'         => [
					'shape'        => 'Integer',
					'locationName' => 'targetSize',
				],
				'TargetIops'         => [
					'shape'        => 'Integer',
					'locationName' => 'targetIops',
				],
				'TargetVolumeType'   => [
					'shape'        => 'VolumeType',
					'locationName' => 'targetVolumeType',
				],
				'OriginalSize'       => [
					'shape'        => 'Integer',
					'locationName' => 'originalSize',
				],
				'OriginalIops'       => [
					'shape'        => 'Integer',
					'locationName' => 'originalIops',
				],
				'OriginalVolumeType' => [
					'shape'        => 'VolumeType',
					'locationName' => 'originalVolumeType',
				],
				'Progress'           => [
					'shape'        => 'Long',
					'locationName' => 'progress',
				],
				'StartTime'          => [
					'shape'        => 'DateTime',
					'locationName' => 'startTime',
				],
				'EndTime'            => [
					'shape'        => 'DateTime',
					'locationName' => 'endTime',
				],
			],
		],
		'VolumeModificationList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeModification',
				'locationName' => 'item',
			],
		],
		'VolumeModificationState'                                        => [
			'type' => 'string',
			'enum' => [
				'modifying',
				'optimizing',
				'completed',
				'failed',
			],
		],
		'VolumeState'                                                    => [
			'type' => 'string',
			'enum' => [
				'creating',
				'available',
				'in-use',
				'deleting',
				'deleted',
				'error',
			],
		],
		'VolumeStatusAction'                                             => [
			'type'    => 'structure',
			'members' => [
				'Code'        => [
					'shape'        => 'String',
					'locationName' => 'code',
				],
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'EventId'     => [
					'shape'        => 'String',
					'locationName' => 'eventId',
				],
				'EventType'   => [
					'shape'        => 'String',
					'locationName' => 'eventType',
				],
			],
		],
		'VolumeStatusActionsList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeStatusAction',
				'locationName' => 'item',
			],
		],
		'VolumeStatusDetails'                                            => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [
					'shape'        => 'VolumeStatusName',
					'locationName' => 'name',
				],
				'Status' => [
					'shape'        => 'String',
					'locationName' => 'status',
				],
			],
		],
		'VolumeStatusDetailsList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeStatusDetails',
				'locationName' => 'item',
			],
		],
		'VolumeStatusEvent'                                              => [
			'type'    => 'structure',
			'members' => [
				'Description' => [
					'shape'        => 'String',
					'locationName' => 'description',
				],
				'EventId'     => [
					'shape'        => 'String',
					'locationName' => 'eventId',
				],
				'EventType'   => [
					'shape'        => 'String',
					'locationName' => 'eventType',
				],
				'NotAfter'    => [
					'shape'        => 'DateTime',
					'locationName' => 'notAfter',
				],
				'NotBefore'   => [
					'shape'        => 'DateTime',
					'locationName' => 'notBefore',
				],
			],
		],
		'VolumeStatusEventsList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeStatusEvent',
				'locationName' => 'item',
			],
		],
		'VolumeStatusInfo'                                               => [
			'type'    => 'structure',
			'members' => [
				'Details' => [
					'shape'        => 'VolumeStatusDetailsList',
					'locationName' => 'details',
				],
				'Status'  => [
					'shape'        => 'VolumeStatusInfoStatus',
					'locationName' => 'status',
				],
			],
		],
		'VolumeStatusInfoStatus'                                         => [
			'type' => 'string',
			'enum' => [
				'ok',
				'impaired',
				'insufficient-data',
			],
		],
		'VolumeStatusItem'                                               => [
			'type'    => 'structure',
			'members' => [
				'Actions'          => [
					'shape'        => 'VolumeStatusActionsList',
					'locationName' => 'actionsSet',
				],
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'Events'           => [
					'shape'        => 'VolumeStatusEventsList',
					'locationName' => 'eventsSet',
				],
				'VolumeId'         => [
					'shape'        => 'String',
					'locationName' => 'volumeId',
				],
				'VolumeStatus'     => [
					'shape'        => 'VolumeStatusInfo',
					'locationName' => 'volumeStatus',
				],
			],
		],
		'VolumeStatusList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VolumeStatusItem',
				'locationName' => 'item',
			],
		],
		'VolumeStatusName'                                               => [
			'type' => 'string',
			'enum' => [
				'io-enabled',
				'io-performance',
			],
		],
		'VolumeType'                                                     => [
			'type' => 'string',
			'enum' => [
				'standard',
				'io1',
				'gp2',
				'sc1',
				'st1',
			],
		],
		'Vpc'                                                            => [
			'type'    => 'structure',
			'members' => [
				'CidrBlock'                   => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'DhcpOptionsId'               => [
					'shape'        => 'String',
					'locationName' => 'dhcpOptionsId',
				],
				'State'                       => [
					'shape'        => 'VpcState',
					'locationName' => 'state',
				],
				'VpcId'                       => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'OwnerId'                     => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'InstanceTenancy'             => [
					'shape'        => 'Tenancy',
					'locationName' => 'instanceTenancy',
				],
				'Ipv6CidrBlockAssociationSet' => [
					'shape'        => 'VpcIpv6CidrBlockAssociationSet',
					'locationName' => 'ipv6CidrBlockAssociationSet',
				],
				'CidrBlockAssociationSet'     => [
					'shape'        => 'VpcCidrBlockAssociationSet',
					'locationName' => 'cidrBlockAssociationSet',
				],
				'IsDefault'                   => [
					'shape'        => 'Boolean',
					'locationName' => 'isDefault',
				],
				'Tags'                        => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'VpcAttachment'                                                  => [
			'type'    => 'structure',
			'members' => [
				'State' => [
					'shape'        => 'AttachmentStatus',
					'locationName' => 'state',
				],
				'VpcId' => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'VpcAttachmentList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcAttachment',
				'locationName' => 'item',
			],
		],
		'VpcAttributeName'                                               => [
			'type' => 'string',
			'enum' => [
				'enableDnsSupport',
				'enableDnsHostnames',
			],
		],
		'VpcCidrBlockAssociation'                                        => [
			'type'    => 'structure',
			'members' => [
				'AssociationId'  => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'CidrBlock'      => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'CidrBlockState' => [
					'shape'        => 'VpcCidrBlockState',
					'locationName' => 'cidrBlockState',
				],
			],
		],
		'VpcCidrBlockAssociationSet'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcCidrBlockAssociation',
				'locationName' => 'item',
			],
		],
		'VpcCidrBlockState'                                              => [
			'type'    => 'structure',
			'members' => [
				'State'         => [
					'shape'        => 'VpcCidrBlockStateCode',
					'locationName' => 'state',
				],
				'StatusMessage' => [
					'shape'        => 'String',
					'locationName' => 'statusMessage',
				],
			],
		],
		'VpcCidrBlockStateCode'                                          => [
			'type' => 'string',
			'enum' => [
				'associating',
				'associated',
				'disassociating',
				'disassociated',
				'failing',
				'failed',
			],
		],
		'VpcClassicLink'                                                 => [
			'type'    => 'structure',
			'members' => [
				'ClassicLinkEnabled' => [
					'shape'        => 'Boolean',
					'locationName' => 'classicLinkEnabled',
				],
				'Tags'               => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcId'              => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
			],
		],
		'VpcClassicLinkIdList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VpcId',
			],
		],
		'VpcClassicLinkList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcClassicLink',
				'locationName' => 'item',
			],
		],
		'VpcEndpoint'                                                    => [
			'type'    => 'structure',
			'members' => [
				'VpcEndpointId'       => [ 'shape' => 'String', 'locationName' => 'vpcEndpointId', ],
				'VpcEndpointType'     => [ 'shape' => 'VpcEndpointType', 'locationName' => 'vpcEndpointType', ],
				'VpcId'               => [ 'shape' => 'String', 'locationName' => 'vpcId', ],
				'ServiceName'         => [ 'shape' => 'String', 'locationName' => 'serviceName', ],
				'State'               => [ 'shape' => 'State', 'locationName' => 'state', ],
				'PolicyDocument'      => [ 'shape' => 'String', 'locationName' => 'policyDocument', ],
				'RouteTableIds'       => [ 'shape' => 'ValueStringList', 'locationName' => 'routeTableIdSet', ],
				'SubnetIds'           => [ 'shape' => 'ValueStringList', 'locationName' => 'subnetIdSet', ],
				'Groups'              => [ 'shape' => 'GroupIdentifierSet', 'locationName' => 'groupSet', ],
				'PrivateDnsEnabled'   => [ 'shape' => 'Boolean', 'locationName' => 'privateDnsEnabled', ],
				'RequesterManaged'    => [ 'shape' => 'Boolean', 'locationName' => 'requesterManaged', ],
				'NetworkInterfaceIds' => [ 'shape' => 'ValueStringList', 'locationName' => 'networkInterfaceIdSet', ],
				'DnsEntries'          => [ 'shape' => 'DnsEntrySet', 'locationName' => 'dnsEntrySet', ],
				'CreationTimestamp'   => [ 'shape' => 'MillisecondDateTime', 'locationName' => 'creationTimestamp', ],
				'Tags'                => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'OwnerId'             => [ 'shape' => 'String', 'locationName' => 'ownerId', ],
			],
		],
		'VpcEndpointConnection'                                          => [
			'type'    => 'structure',
			'members' => [
				'ServiceId'               => [
					'shape'        => 'String',
					'locationName' => 'serviceId',
				],
				'VpcEndpointId'           => [
					'shape'        => 'String',
					'locationName' => 'vpcEndpointId',
				],
				'VpcEndpointOwner'        => [
					'shape'        => 'String',
					'locationName' => 'vpcEndpointOwner',
				],
				'VpcEndpointState'        => [
					'shape'        => 'State',
					'locationName' => 'vpcEndpointState',
				],
				'CreationTimestamp'       => [
					'shape'        => 'MillisecondDateTime',
					'locationName' => 'creationTimestamp',
				],
				'DnsEntries'              => [
					'shape'        => 'DnsEntrySet',
					'locationName' => 'dnsEntrySet',
				],
				'NetworkLoadBalancerArns' => [
					'shape'        => 'ValueStringList',
					'locationName' => 'networkLoadBalancerArnSet',
				],
			],
		],
		'VpcEndpointConnectionSet'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcEndpointConnection',
				'locationName' => 'item',
			],
		],
		'VpcEndpointSet'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcEndpoint',
				'locationName' => 'item',
			],
		],
		'VpcEndpointType'                                                => [
			'type' => 'string',
			'enum' => [ 'Interface', 'Gateway', ],
		],
		'VpcIdStringList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VpcId',
			],
		],
		'VpcIpv6CidrBlockAssociation'                                    => [
			'type'    => 'structure',
			'members' => [
				'AssociationId'      => [
					'shape'        => 'String',
					'locationName' => 'associationId',
				],
				'Ipv6CidrBlock'      => [
					'shape'        => 'String',
					'locationName' => 'ipv6CidrBlock',
				],
				'Ipv6CidrBlockState' => [
					'shape'        => 'VpcCidrBlockState',
					'locationName' => 'ipv6CidrBlockState',
				],
			],
		],
		'VpcIpv6CidrBlockAssociationSet'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcIpv6CidrBlockAssociation',
				'locationName' => 'item',
			],
		],
		'VpcList'                                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Vpc',
				'locationName' => 'item',
			],
		],
		'VpcPeeringConnection'                                           => [
			'type'    => 'structure',
			'members' => [
				'AccepterVpcInfo'        => [
					'shape'        => 'VpcPeeringConnectionVpcInfo',
					'locationName' => 'accepterVpcInfo',
				],
				'ExpirationTime'         => [
					'shape'        => 'DateTime',
					'locationName' => 'expirationTime',
				],
				'RequesterVpcInfo'       => [
					'shape'        => 'VpcPeeringConnectionVpcInfo',
					'locationName' => 'requesterVpcInfo',
				],
				'Status'                 => [
					'shape'        => 'VpcPeeringConnectionStateReason',
					'locationName' => 'status',
				],
				'Tags'                   => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
				'VpcPeeringConnectionId' => [
					'shape'        => 'String',
					'locationName' => 'vpcPeeringConnectionId',
				],
			],
		],
		'VpcPeeringConnectionList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcPeeringConnection',
				'locationName' => 'item',
			],
		],
		'VpcPeeringConnectionOptionsDescription'                         => [
			'type'    => 'structure',
			'members' => [
				'AllowDnsResolutionFromRemoteVpc'            => [
					'shape'        => 'Boolean',
					'locationName' => 'allowDnsResolutionFromRemoteVpc',
				],
				'AllowEgressFromLocalClassicLinkToRemoteVpc' => [
					'shape'        => 'Boolean',
					'locationName' => 'allowEgressFromLocalClassicLinkToRemoteVpc',
				],
				'AllowEgressFromLocalVpcToRemoteClassicLink' => [
					'shape'        => 'Boolean',
					'locationName' => 'allowEgressFromLocalVpcToRemoteClassicLink',
				],
			],
		],
		'VpcPeeringConnectionStateReason'                                => [
			'type'    => 'structure',
			'members' => [
				'Code'    => [
					'shape'        => 'VpcPeeringConnectionStateReasonCode',
					'locationName' => 'code',
				],
				'Message' => [
					'shape'        => 'String',
					'locationName' => 'message',
				],
			],
		],
		'VpcPeeringConnectionStateReasonCode'                            => [
			'type' => 'string',
			'enum' => [
				'initiating-request',
				'pending-acceptance',
				'active',
				'deleted',
				'rejected',
				'failed',
				'expired',
				'provisioning',
				'deleting',
			],
		],
		'VpcPeeringConnectionVpcInfo'                                    => [
			'type'    => 'structure',
			'members' => [
				'CidrBlock'        => [
					'shape'        => 'String',
					'locationName' => 'cidrBlock',
				],
				'Ipv6CidrBlockSet' => [
					'shape'        => 'Ipv6CidrBlockSet',
					'locationName' => 'ipv6CidrBlockSet',
				],
				'CidrBlockSet'     => [
					'shape'        => 'CidrBlockSet',
					'locationName' => 'cidrBlockSet',
				],
				'OwnerId'          => [
					'shape'        => 'String',
					'locationName' => 'ownerId',
				],
				'PeeringOptions'   => [
					'shape'        => 'VpcPeeringConnectionOptionsDescription',
					'locationName' => 'peeringOptions',
				],
				'VpcId'            => [
					'shape'        => 'String',
					'locationName' => 'vpcId',
				],
				'Region'           => [
					'shape'        => 'String',
					'locationName' => 'region',
				],
			],
		],
		'VpcState'                                                       => [
			'type' => 'string',
			'enum' => [ 'pending', 'available', ],
		],
		'VpcTenancy'                                                     => [
			'type' => 'string',
			'enum' => [ 'default', ],
		],
		'VpnConnection'                                                  => [
			'type'    => 'structure',
			'members' => [
				'CustomerGatewayConfiguration' => [
					'shape'        => 'String',
					'locationName' => 'customerGatewayConfiguration',
				],
				'CustomerGatewayId'            => [
					'shape'        => 'String',
					'locationName' => 'customerGatewayId',
				],
				'Category'                     => [ 'shape' => 'String', 'locationName' => 'category', ],
				'State'                        => [ 'shape' => 'VpnState', 'locationName' => 'state', ],
				'Type'                         => [ 'shape' => 'GatewayType', 'locationName' => 'type', ],
				'VpnConnectionId'              => [
					'shape'        => 'String',
					'locationName' => 'vpnConnectionId',
				],
				'VpnGatewayId'                 => [ 'shape' => 'String', 'locationName' => 'vpnGatewayId', ],
				'TransitGatewayId'             => [
					'shape'        => 'String',
					'locationName' => 'transitGatewayId',
				],
				'Options'                      => [
					'shape'        => 'VpnConnectionOptions',
					'locationName' => 'options',
				],
				'Routes'                       => [
					'shape'        => 'VpnStaticRouteList',
					'locationName' => 'routes',
				],
				'Tags'                         => [ 'shape' => 'TagList', 'locationName' => 'tagSet', ],
				'VgwTelemetry'                 => [
					'shape'        => 'VgwTelemetryList',
					'locationName' => 'vgwTelemetry',
				],
			],
		],
		'VpnConnectionIdStringList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VpnConnectionId',
			],
		],
		'VpnConnectionList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpnConnection',
				'locationName' => 'item',
			],
		],
		'VpnConnectionOptions'                                           => [
			'type'    => 'structure',
			'members' => [
				'StaticRoutesOnly' => [
					'shape'        => 'Boolean',
					'locationName' => 'staticRoutesOnly',
				],
			],
		],
		'VpnConnectionOptionsSpecification'                              => [
			'type'    => 'structure',
			'members' => [
				'StaticRoutesOnly' => [
					'shape'        => 'Boolean',
					'locationName' => 'staticRoutesOnly',
				],
				'TunnelOptions'    => [ 'shape' => 'TunnelOptionsList', ],
			],
		],
		'VpnEcmpSupportValue'                                            => [
			'type' => 'string',
			'enum' => [ 'enable', 'disable', ],
		],
		'VpnGateway'                                                     => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone' => [
					'shape'        => 'String',
					'locationName' => 'availabilityZone',
				],
				'State'            => [
					'shape'        => 'VpnState',
					'locationName' => 'state',
				],
				'Type'             => [
					'shape'        => 'GatewayType',
					'locationName' => 'type',
				],
				'VpcAttachments'   => [
					'shape'        => 'VpcAttachmentList',
					'locationName' => 'attachments',
				],
				'VpnGatewayId'     => [
					'shape'        => 'String',
					'locationName' => 'vpnGatewayId',
				],
				'AmazonSideAsn'    => [
					'shape'        => 'Long',
					'locationName' => 'amazonSideAsn',
				],
				'Tags'             => [
					'shape'        => 'TagList',
					'locationName' => 'tagSet',
				],
			],
		],
		'VpnGatewayIdStringList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VpnGatewayId',
			],
		],
		'VpnGatewayList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpnGateway',
				'locationName' => 'item',
			],
		],
		'VpnProtocol'                                                    => [
			'type' => 'string',
			'enum' => [ 'openvpn', ],
		],
		'VpnState'                                                       => [
			'type' => 'string',
			'enum' => [
				'pending',
				'available',
				'deleting',
				'deleted',
			],
		],
		'VpnStaticRoute'                                                 => [
			'type'    => 'structure',
			'members' => [
				'DestinationCidrBlock' => [
					'shape'        => 'String',
					'locationName' => 'destinationCidrBlock',
				],
				'Source'               => [
					'shape'        => 'VpnStaticRouteSource',
					'locationName' => 'source',
				],
				'State'                => [
					'shape'        => 'VpnState',
					'locationName' => 'state',
				],
			],
		],
		'VpnStaticRouteList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpnStaticRoute',
				'locationName' => 'item',
			],
		],
		'VpnStaticRouteSource'                                           => [
			'type' => 'string',
			'enum' => [ 'Static', ],
		],
		'VpnTunnelOptionsSpecification'                                  => [
			'type'    => 'structure',
			'members' => [
				'TunnelInsideCidr' => [ 'shape' => 'String', ],
				'PreSharedKey'     => [ 'shape' => 'String', ],
			],
		],
		'WithdrawByoipCidrRequest'                                       => [
			'type'     => 'structure',
			'required' => [ 'Cidr', ],
			'members'  => [
				'Cidr'   => [ 'shape' => 'String', ],
				'DryRun' => [ 'shape' => 'Boolean', ],
			],
		],
		'WithdrawByoipCidrResult'                                        => [
			'type'    => 'structure',
			'members' => [
				'ByoipCidr' => [
					'shape'        => 'ByoipCidr',
					'locationName' => 'byoipCidr',
				],
			],
		],
		'ZoneIdStringList'                                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ZoneId',
			],
		],
		'ZoneNameStringList'                                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ZoneName',
			],
		],
		'scope'                                                          => [
			'type' => 'string',
			'enum' => [
				'Availability Zone',
				'Region',
			],
		],
	],
];
