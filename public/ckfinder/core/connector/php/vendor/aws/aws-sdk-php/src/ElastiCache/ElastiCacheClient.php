<?php
namespace Aws\ElastiCache;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon ElastiCache** service.
 *
 * @method Result addTagsToResource(array $args = [])
 * @method Promise addTagsToResourceAsync(array $args = [])
 * @method Result authorizeCacheSecurityGroupIngress(array $args = [])
 * @method Promise authorizeCacheSecurityGroupIngressAsync(array $args = [])
 * @method Result batchApplyUpdateAction(array $args = [])
 * @method Promise batchApplyUpdateActionAsync(array $args = [])
 * @method Result batchStopUpdateAction(array $args = [])
 * @method Promise batchStopUpdateActionAsync(array $args = [])
 * @method Result completeMigration(array $args = [])
 * @method Promise completeMigrationAsync(array $args = [])
 * @method Result copySnapshot(array $args = [])
 * @method Promise copySnapshotAsync(array $args = [])
 * @method Result createCacheCluster(array $args = [])
 * @method Promise createCacheClusterAsync(array $args = [])
 * @method Result createCacheParameterGroup(array $args = [])
 * @method Promise createCacheParameterGroupAsync(array $args = [])
 * @method Result createCacheSecurityGroup(array $args = [])
 * @method Promise createCacheSecurityGroupAsync(array $args = [])
 * @method Result createCacheSubnetGroup(array $args = [])
 * @method Promise createCacheSubnetGroupAsync(array $args = [])
 * @method Result createGlobalReplicationGroup(array $args = [])
 * @method Promise createGlobalReplicationGroupAsync(array $args = [])
 * @method Result createReplicationGroup(array $args = [])
 * @method Promise createReplicationGroupAsync(array $args = [])
 * @method Result createSnapshot(array $args = [])
 * @method Promise createSnapshotAsync(array $args = [])
 * @method Result createUser(array $args = [])
 * @method Promise createUserAsync(array $args = [])
 * @method Result createUserGroup(array $args = [])
 * @method Promise createUserGroupAsync(array $args = [])
 * @method Result decreaseNodeGroupsInGlobalReplicationGroup(array $args = [])
 * @method Promise decreaseNodeGroupsInGlobalReplicationGroupAsync(array $args = [])
 * @method Result decreaseReplicaCount(array $args = [])
 * @method Promise decreaseReplicaCountAsync(array $args = [])
 * @method Result deleteCacheCluster(array $args = [])
 * @method Promise deleteCacheClusterAsync(array $args = [])
 * @method Result deleteCacheParameterGroup(array $args = [])
 * @method Promise deleteCacheParameterGroupAsync(array $args = [])
 * @method Result deleteCacheSecurityGroup(array $args = [])
 * @method Promise deleteCacheSecurityGroupAsync(array $args = [])
 * @method Result deleteCacheSubnetGroup(array $args = [])
 * @method Promise deleteCacheSubnetGroupAsync(array $args = [])
 * @method Result deleteGlobalReplicationGroup(array $args = [])
 * @method Promise deleteGlobalReplicationGroupAsync(array $args = [])
 * @method Result deleteReplicationGroup(array $args = [])
 * @method Promise deleteReplicationGroupAsync(array $args = [])
 * @method Result deleteSnapshot(array $args = [])
 * @method Promise deleteSnapshotAsync(array $args = [])
 * @method Result deleteUser(array $args = [])
 * @method Promise deleteUserAsync(array $args = [])
 * @method Result deleteUserGroup(array $args = [])
 * @method Promise deleteUserGroupAsync(array $args = [])
 * @method Result describeCacheClusters(array $args = [])
 * @method Promise describeCacheClustersAsync(array $args = [])
 * @method Result describeCacheEngineVersions(array $args = [])
 * @method Promise describeCacheEngineVersionsAsync(array $args = [])
 * @method Result describeCacheParameterGroups(array $args = [])
 * @method Promise describeCacheParameterGroupsAsync(array $args = [])
 * @method Result describeCacheParameters(array $args = [])
 * @method Promise describeCacheParametersAsync(array $args = [])
 * @method Result describeCacheSecurityGroups(array $args = [])
 * @method Promise describeCacheSecurityGroupsAsync(array $args = [])
 * @method Result describeCacheSubnetGroups(array $args = [])
 * @method Promise describeCacheSubnetGroupsAsync(array $args = [])
 * @method Result describeEngineDefaultParameters(array $args = [])
 * @method Promise describeEngineDefaultParametersAsync(array $args = [])
 * @method Result describeEvents(array $args = [])
 * @method Promise describeEventsAsync(array $args = [])
 * @method Result describeGlobalReplicationGroups(array $args = [])
 * @method Promise describeGlobalReplicationGroupsAsync(array $args = [])
 * @method Result describeReplicationGroups(array $args = [])
 * @method Promise describeReplicationGroupsAsync(array $args = [])
 * @method Result describeReservedCacheNodes(array $args = [])
 * @method Promise describeReservedCacheNodesAsync(array $args = [])
 * @method Result describeReservedCacheNodesOfferings(array $args = [])
 * @method Promise describeReservedCacheNodesOfferingsAsync(array $args = [])
 * @method Result describeServiceUpdates(array $args = [])
 * @method Promise describeServiceUpdatesAsync(array $args = [])
 * @method Result describeSnapshots(array $args = [])
 * @method Promise describeSnapshotsAsync(array $args = [])
 * @method Result describeUpdateActions(array $args = [])
 * @method Promise describeUpdateActionsAsync(array $args = [])
 * @method Result describeUserGroups(array $args = [])
 * @method Promise describeUserGroupsAsync(array $args = [])
 * @method Result describeUsers(array $args = [])
 * @method Promise describeUsersAsync(array $args = [])
 * @method Result disassociateGlobalReplicationGroup(array $args = [])
 * @method Promise disassociateGlobalReplicationGroupAsync(array $args = [])
 * @method Result failoverGlobalReplicationGroup(array $args = [])
 * @method Promise failoverGlobalReplicationGroupAsync(array $args = [])
 * @method Result increaseNodeGroupsInGlobalReplicationGroup(array $args = [])
 * @method Promise increaseNodeGroupsInGlobalReplicationGroupAsync(array $args = [])
 * @method Result increaseReplicaCount(array $args = [])
 * @method Promise increaseReplicaCountAsync(array $args = [])
 * @method Result listAllowedNodeTypeModifications(array $args = [])
 * @method Promise listAllowedNodeTypeModificationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result modifyCacheCluster(array $args = [])
 * @method Promise modifyCacheClusterAsync(array $args = [])
 * @method Result modifyCacheParameterGroup(array $args = [])
 * @method Promise modifyCacheParameterGroupAsync(array $args = [])
 * @method Result modifyCacheSubnetGroup(array $args = [])
 * @method Promise modifyCacheSubnetGroupAsync(array $args = [])
 * @method Result modifyGlobalReplicationGroup(array $args = [])
 * @method Promise modifyGlobalReplicationGroupAsync(array $args = [])
 * @method Result modifyReplicationGroup(array $args = [])
 * @method Promise modifyReplicationGroupAsync(array $args = [])
 * @method Result modifyReplicationGroupShardConfiguration(array $args = [])
 * @method Promise modifyReplicationGroupShardConfigurationAsync(array $args = [])
 * @method Result modifyUser(array $args = [])
 * @method Promise modifyUserAsync(array $args = [])
 * @method Result modifyUserGroup(array $args = [])
 * @method Promise modifyUserGroupAsync(array $args = [])
 * @method Result purchaseReservedCacheNodesOffering(array $args = [])
 * @method Promise purchaseReservedCacheNodesOfferingAsync(array $args = [])
 * @method Result rebalanceSlotsInGlobalReplicationGroup(array $args = [])
 * @method Promise rebalanceSlotsInGlobalReplicationGroupAsync(array $args = [])
 * @method Result rebootCacheCluster(array $args = [])
 * @method Promise rebootCacheClusterAsync(array $args = [])
 * @method Result removeTagsFromResource(array $args = [])
 * @method Promise removeTagsFromResourceAsync(array $args = [])
 * @method Result resetCacheParameterGroup(array $args = [])
 * @method Promise resetCacheParameterGroupAsync(array $args = [])
 * @method Result revokeCacheSecurityGroupIngress(array $args = [])
 * @method Promise revokeCacheSecurityGroupIngressAsync(array $args = [])
 * @method Result startMigration(array $args = [])
 * @method Promise startMigrationAsync(array $args = [])
 * @method Result testFailover(array $args = [])
 * @method Promise testFailoverAsync(array $args = [])
 */
class ElastiCacheClient extends AwsClient {}
