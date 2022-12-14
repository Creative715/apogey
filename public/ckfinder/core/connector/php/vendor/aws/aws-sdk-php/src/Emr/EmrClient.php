<?php
namespace Aws\Emr;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Elastic MapReduce (Amazon EMR)** service.
 *
 * @method Result addInstanceFleet(array $args = [])
 * @method Promise addInstanceFleetAsync(array $args = [])
 * @method Result addInstanceGroups(array $args = [])
 * @method Promise addInstanceGroupsAsync(array $args = [])
 * @method Result addJobFlowSteps(array $args = [])
 * @method Promise addJobFlowStepsAsync(array $args = [])
 * @method Result addTags(array $args = [])
 * @method Promise addTagsAsync(array $args = [])
 * @method Result cancelSteps(array $args = [])
 * @method Promise cancelStepsAsync(array $args = [])
 * @method Result createSecurityConfiguration(array $args = [])
 * @method Promise createSecurityConfigurationAsync(array $args = [])
 * @method Result createStudio(array $args = [])
 * @method Promise createStudioAsync(array $args = [])
 * @method Result createStudioSessionMapping(array $args = [])
 * @method Promise createStudioSessionMappingAsync(array $args = [])
 * @method Result deleteSecurityConfiguration(array $args = [])
 * @method Promise deleteSecurityConfigurationAsync(array $args = [])
 * @method Result deleteStudio(array $args = [])
 * @method Promise deleteStudioAsync(array $args = [])
 * @method Result deleteStudioSessionMapping(array $args = [])
 * @method Promise deleteStudioSessionMappingAsync(array $args = [])
 * @method Result describeCluster(array $args = [])
 * @method Promise describeClusterAsync(array $args = [])
 * @method Result describeJobFlows(array $args = [])
 * @method Promise describeJobFlowsAsync(array $args = [])
 * @method Result describeNotebookExecution(array $args = [])
 * @method Promise describeNotebookExecutionAsync(array $args = [])
 * @method Result describeSecurityConfiguration(array $args = [])
 * @method Promise describeSecurityConfigurationAsync(array $args = [])
 * @method Result describeStep(array $args = [])
 * @method Promise describeStepAsync(array $args = [])
 * @method Result describeStudio(array $args = [])
 * @method Promise describeStudioAsync(array $args = [])
 * @method Result getBlockPublicAccessConfiguration(array $args = [])
 * @method Promise getBlockPublicAccessConfigurationAsync(array $args = [])
 * @method Result getManagedScalingPolicy(array $args = [])
 * @method Promise getManagedScalingPolicyAsync(array $args = [])
 * @method Result getStudioSessionMapping(array $args = [])
 * @method Promise getStudioSessionMappingAsync(array $args = [])
 * @method Result listBootstrapActions(array $args = [])
 * @method Promise listBootstrapActionsAsync(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listInstanceFleets(array $args = [])
 * @method Promise listInstanceFleetsAsync(array $args = [])
 * @method Result listInstanceGroups(array $args = [])
 * @method Promise listInstanceGroupsAsync(array $args = [])
 * @method Result listInstances(array $args = [])
 * @method Promise listInstancesAsync(array $args = [])
 * @method Result listNotebookExecutions(array $args = [])
 * @method Promise listNotebookExecutionsAsync(array $args = [])
 * @method Result listSecurityConfigurations(array $args = [])
 * @method Promise listSecurityConfigurationsAsync(array $args = [])
 * @method Result listSteps(array $args = [])
 * @method Promise listStepsAsync(array $args = [])
 * @method Result listStudioSessionMappings(array $args = [])
 * @method Promise listStudioSessionMappingsAsync(array $args = [])
 * @method Result listStudios(array $args = [])
 * @method Promise listStudiosAsync(array $args = [])
 * @method Result modifyCluster(array $args = [])
 * @method Promise modifyClusterAsync(array $args = [])
 * @method Result modifyInstanceFleet(array $args = [])
 * @method Promise modifyInstanceFleetAsync(array $args = [])
 * @method Result modifyInstanceGroups(array $args = [])
 * @method Promise modifyInstanceGroupsAsync(array $args = [])
 * @method Result putAutoScalingPolicy(array $args = [])
 * @method Promise putAutoScalingPolicyAsync(array $args = [])
 * @method Result putBlockPublicAccessConfiguration(array $args = [])
 * @method Promise putBlockPublicAccessConfigurationAsync(array $args = [])
 * @method Result putManagedScalingPolicy(array $args = [])
 * @method Promise putManagedScalingPolicyAsync(array $args = [])
 * @method Result removeAutoScalingPolicy(array $args = [])
 * @method Promise removeAutoScalingPolicyAsync(array $args = [])
 * @method Result removeManagedScalingPolicy(array $args = [])
 * @method Promise removeManagedScalingPolicyAsync(array $args = [])
 * @method Result removeTags(array $args = [])
 * @method Promise removeTagsAsync(array $args = [])
 * @method Result runJobFlow(array $args = [])
 * @method Promise runJobFlowAsync(array $args = [])
 * @method Result setTerminationProtection(array $args = [])
 * @method Promise setTerminationProtectionAsync(array $args = [])
 * @method Result setVisibleToAllUsers(array $args = [])
 * @method Promise setVisibleToAllUsersAsync(array $args = [])
 * @method Result startNotebookExecution(array $args = [])
 * @method Promise startNotebookExecutionAsync(array $args = [])
 * @method Result stopNotebookExecution(array $args = [])
 * @method Promise stopNotebookExecutionAsync(array $args = [])
 * @method Result terminateJobFlows(array $args = [])
 * @method Promise terminateJobFlowsAsync(array $args = [])
 * @method Result updateStudio(array $args = [])
 * @method Promise updateStudioAsync(array $args = [])
 * @method Result updateStudioSessionMapping(array $args = [])
 * @method Promise updateStudioSessionMappingAsync(array $args = [])
 */
class EmrClient extends AwsClient {}
