<?php
namespace Aws\Ecs;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with **Amazon ECS**.
 *
 * @method Result createCapacityProvider(array $args = [])
 * @method Promise createCapacityProviderAsync(array $args = [])
 * @method Result createCluster(array $args = [])
 * @method Promise createClusterAsync(array $args = [])
 * @method Result createService(array $args = [])
 * @method Promise createServiceAsync(array $args = [])
 * @method Result createTaskSet(array $args = [])
 * @method Promise createTaskSetAsync(array $args = [])
 * @method Result deleteAccountSetting(array $args = [])
 * @method Promise deleteAccountSettingAsync(array $args = [])
 * @method Result deleteAttributes(array $args = [])
 * @method Promise deleteAttributesAsync(array $args = [])
 * @method Result deleteCapacityProvider(array $args = [])
 * @method Promise deleteCapacityProviderAsync(array $args = [])
 * @method Result deleteCluster(array $args = [])
 * @method Promise deleteClusterAsync(array $args = [])
 * @method Result deleteService(array $args = [])
 * @method Promise deleteServiceAsync(array $args = [])
 * @method Result deleteTaskSet(array $args = [])
 * @method Promise deleteTaskSetAsync(array $args = [])
 * @method Result deregisterContainerInstance(array $args = [])
 * @method Promise deregisterContainerInstanceAsync(array $args = [])
 * @method Result deregisterTaskDefinition(array $args = [])
 * @method Promise deregisterTaskDefinitionAsync(array $args = [])
 * @method Result describeCapacityProviders(array $args = [])
 * @method Promise describeCapacityProvidersAsync(array $args = [])
 * @method Result describeClusters(array $args = [])
 * @method Promise describeClustersAsync(array $args = [])
 * @method Result describeContainerInstances(array $args = [])
 * @method Promise describeContainerInstancesAsync(array $args = [])
 * @method Result describeServices(array $args = [])
 * @method Promise describeServicesAsync(array $args = [])
 * @method Result describeTaskDefinition(array $args = [])
 * @method Promise describeTaskDefinitionAsync(array $args = [])
 * @method Result describeTaskSets(array $args = [])
 * @method Promise describeTaskSetsAsync(array $args = [])
 * @method Result describeTasks(array $args = [])
 * @method Promise describeTasksAsync(array $args = [])
 * @method Result discoverPollEndpoint(array $args = [])
 * @method Promise discoverPollEndpointAsync(array $args = [])
 * @method Result listAccountSettings(array $args = [])
 * @method Promise listAccountSettingsAsync(array $args = [])
 * @method Result listAttributes(array $args = [])
 * @method Promise listAttributesAsync(array $args = [])
 * @method Result listClusters(array $args = [])
 * @method Promise listClustersAsync(array $args = [])
 * @method Result listContainerInstances(array $args = [])
 * @method Promise listContainerInstancesAsync(array $args = [])
 * @method Result listServices(array $args = [])
 * @method Promise listServicesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTaskDefinitionFamilies(array $args = [])
 * @method Promise listTaskDefinitionFamiliesAsync(array $args = [])
 * @method Result listTaskDefinitions(array $args = [])
 * @method Promise listTaskDefinitionsAsync(array $args = [])
 * @method Result listTasks(array $args = [])
 * @method Promise listTasksAsync(array $args = [])
 * @method Result putAccountSetting(array $args = [])
 * @method Promise putAccountSettingAsync(array $args = [])
 * @method Result putAccountSettingDefault(array $args = [])
 * @method Promise putAccountSettingDefaultAsync(array $args = [])
 * @method Result putAttributes(array $args = [])
 * @method Promise putAttributesAsync(array $args = [])
 * @method Result putClusterCapacityProviders(array $args = [])
 * @method Promise putClusterCapacityProvidersAsync(array $args = [])
 * @method Result registerContainerInstance(array $args = [])
 * @method Promise registerContainerInstanceAsync(array $args = [])
 * @method Result registerTaskDefinition(array $args = [])
 * @method Promise registerTaskDefinitionAsync(array $args = [])
 * @method Result runTask(array $args = [])
 * @method Promise runTaskAsync(array $args = [])
 * @method Result startTask(array $args = [])
 * @method Promise startTaskAsync(array $args = [])
 * @method Result stopTask(array $args = [])
 * @method Promise stopTaskAsync(array $args = [])
 * @method Result submitAttachmentStateChanges(array $args = [])
 * @method Promise submitAttachmentStateChangesAsync(array $args = [])
 * @method Result submitContainerStateChange(array $args = [])
 * @method Promise submitContainerStateChangeAsync(array $args = [])
 * @method Result submitTaskStateChange(array $args = [])
 * @method Promise submitTaskStateChangeAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateCapacityProvider(array $args = [])
 * @method Promise updateCapacityProviderAsync(array $args = [])
 * @method Result updateClusterSettings(array $args = [])
 * @method Promise updateClusterSettingsAsync(array $args = [])
 * @method Result updateContainerAgent(array $args = [])
 * @method Promise updateContainerAgentAsync(array $args = [])
 * @method Result updateContainerInstancesState(array $args = [])
 * @method Promise updateContainerInstancesStateAsync(array $args = [])
 * @method Result updateService(array $args = [])
 * @method Promise updateServiceAsync(array $args = [])
 * @method Result updateServicePrimaryTaskSet(array $args = [])
 * @method Promise updateServicePrimaryTaskSetAsync(array $args = [])
 * @method Result updateTaskSet(array $args = [])
 * @method Promise updateTaskSetAsync(array $args = [])
 */
class EcsClient extends AwsClient {}
