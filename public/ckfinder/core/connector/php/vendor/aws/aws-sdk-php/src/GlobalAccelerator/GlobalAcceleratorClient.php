<?php
namespace Aws\GlobalAccelerator;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Global Accelerator** service.
 * @method Result addCustomRoutingEndpoints(array $args = [])
 * @method Promise addCustomRoutingEndpointsAsync(array $args = [])
 * @method Result advertiseByoipCidr(array $args = [])
 * @method Promise advertiseByoipCidrAsync(array $args = [])
 * @method Result allowCustomRoutingTraffic(array $args = [])
 * @method Promise allowCustomRoutingTrafficAsync(array $args = [])
 * @method Result createAccelerator(array $args = [])
 * @method Promise createAcceleratorAsync(array $args = [])
 * @method Result createCustomRoutingAccelerator(array $args = [])
 * @method Promise createCustomRoutingAcceleratorAsync(array $args = [])
 * @method Result createCustomRoutingEndpointGroup(array $args = [])
 * @method Promise createCustomRoutingEndpointGroupAsync(array $args = [])
 * @method Result createCustomRoutingListener(array $args = [])
 * @method Promise createCustomRoutingListenerAsync(array $args = [])
 * @method Result createEndpointGroup(array $args = [])
 * @method Promise createEndpointGroupAsync(array $args = [])
 * @method Result createListener(array $args = [])
 * @method Promise createListenerAsync(array $args = [])
 * @method Result deleteAccelerator(array $args = [])
 * @method Promise deleteAcceleratorAsync(array $args = [])
 * @method Result deleteCustomRoutingAccelerator(array $args = [])
 * @method Promise deleteCustomRoutingAcceleratorAsync(array $args = [])
 * @method Result deleteCustomRoutingEndpointGroup(array $args = [])
 * @method Promise deleteCustomRoutingEndpointGroupAsync(array $args = [])
 * @method Result deleteCustomRoutingListener(array $args = [])
 * @method Promise deleteCustomRoutingListenerAsync(array $args = [])
 * @method Result deleteEndpointGroup(array $args = [])
 * @method Promise deleteEndpointGroupAsync(array $args = [])
 * @method Result deleteListener(array $args = [])
 * @method Promise deleteListenerAsync(array $args = [])
 * @method Result denyCustomRoutingTraffic(array $args = [])
 * @method Promise denyCustomRoutingTrafficAsync(array $args = [])
 * @method Result deprovisionByoipCidr(array $args = [])
 * @method Promise deprovisionByoipCidrAsync(array $args = [])
 * @method Result describeAccelerator(array $args = [])
 * @method Promise describeAcceleratorAsync(array $args = [])
 * @method Result describeAcceleratorAttributes(array $args = [])
 * @method Promise describeAcceleratorAttributesAsync(array $args = [])
 * @method Result describeCustomRoutingAccelerator(array $args = [])
 * @method Promise describeCustomRoutingAcceleratorAsync(array $args = [])
 * @method Result describeCustomRoutingAcceleratorAttributes(array $args = [])
 * @method Promise describeCustomRoutingAcceleratorAttributesAsync(array $args = [])
 * @method Result describeCustomRoutingEndpointGroup(array $args = [])
 * @method Promise describeCustomRoutingEndpointGroupAsync(array $args = [])
 * @method Result describeCustomRoutingListener(array $args = [])
 * @method Promise describeCustomRoutingListenerAsync(array $args = [])
 * @method Result describeEndpointGroup(array $args = [])
 * @method Promise describeEndpointGroupAsync(array $args = [])
 * @method Result describeListener(array $args = [])
 * @method Promise describeListenerAsync(array $args = [])
 * @method Result listAccelerators(array $args = [])
 * @method Promise listAcceleratorsAsync(array $args = [])
 * @method Result listByoipCidrs(array $args = [])
 * @method Promise listByoipCidrsAsync(array $args = [])
 * @method Result listCustomRoutingAccelerators(array $args = [])
 * @method Promise listCustomRoutingAcceleratorsAsync(array $args = [])
 * @method Result listCustomRoutingEndpointGroups(array $args = [])
 * @method Promise listCustomRoutingEndpointGroupsAsync(array $args = [])
 * @method Result listCustomRoutingListeners(array $args = [])
 * @method Promise listCustomRoutingListenersAsync(array $args = [])
 * @method Result listCustomRoutingPortMappings(array $args = [])
 * @method Promise listCustomRoutingPortMappingsAsync(array $args = [])
 * @method Result listCustomRoutingPortMappingsByDestination(array $args = [])
 * @method Promise listCustomRoutingPortMappingsByDestinationAsync(array $args = [])
 * @method Result listEndpointGroups(array $args = [])
 * @method Promise listEndpointGroupsAsync(array $args = [])
 * @method Result listListeners(array $args = [])
 * @method Promise listListenersAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result provisionByoipCidr(array $args = [])
 * @method Promise provisionByoipCidrAsync(array $args = [])
 * @method Result removeCustomRoutingEndpoints(array $args = [])
 * @method Promise removeCustomRoutingEndpointsAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAccelerator(array $args = [])
 * @method Promise updateAcceleratorAsync(array $args = [])
 * @method Result updateAcceleratorAttributes(array $args = [])
 * @method Promise updateAcceleratorAttributesAsync(array $args = [])
 * @method Result updateCustomRoutingAccelerator(array $args = [])
 * @method Promise updateCustomRoutingAcceleratorAsync(array $args = [])
 * @method Result updateCustomRoutingAcceleratorAttributes(array $args = [])
 * @method Promise updateCustomRoutingAcceleratorAttributesAsync(array $args = [])
 * @method Result updateCustomRoutingListener(array $args = [])
 * @method Promise updateCustomRoutingListenerAsync(array $args = [])
 * @method Result updateEndpointGroup(array $args = [])
 * @method Promise updateEndpointGroupAsync(array $args = [])
 * @method Result updateListener(array $args = [])
 * @method Promise updateListenerAsync(array $args = [])
 * @method Result withdrawByoipCidr(array $args = [])
 * @method Promise withdrawByoipCidrAsync(array $args = [])
 */
class GlobalAcceleratorClient extends AwsClient {}
