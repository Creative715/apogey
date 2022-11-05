<?php
namespace Aws\WorkSpaces;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * Amazon WorkSpaces client.
 *
 * @method Result associateConnectionAlias(array $args = [])
 * @method Promise associateConnectionAliasAsync(array $args = [])
 * @method Result associateIpGroups(array $args = [])
 * @method Promise associateIpGroupsAsync(array $args = [])
 * @method Result authorizeIpRules(array $args = [])
 * @method Promise authorizeIpRulesAsync(array $args = [])
 * @method Result copyWorkspaceImage(array $args = [])
 * @method Promise copyWorkspaceImageAsync(array $args = [])
 * @method Result createConnectionAlias(array $args = [])
 * @method Promise createConnectionAliasAsync(array $args = [])
 * @method Result createIpGroup(array $args = [])
 * @method Promise createIpGroupAsync(array $args = [])
 * @method Result createTags(array $args = [])
 * @method Promise createTagsAsync(array $args = [])
 * @method Result createWorkspaces(array $args = [])
 * @method Promise createWorkspacesAsync(array $args = [])
 * @method Result deleteConnectionAlias(array $args = [])
 * @method Promise deleteConnectionAliasAsync(array $args = [])
 * @method Result deleteIpGroup(array $args = [])
 * @method Promise deleteIpGroupAsync(array $args = [])
 * @method Result deleteTags(array $args = [])
 * @method Promise deleteTagsAsync(array $args = [])
 * @method Result deleteWorkspaceImage(array $args = [])
 * @method Promise deleteWorkspaceImageAsync(array $args = [])
 * @method Result deregisterWorkspaceDirectory(array $args = [])
 * @method Promise deregisterWorkspaceDirectoryAsync(array $args = [])
 * @method Result describeAccount(array $args = [])
 * @method Promise describeAccountAsync(array $args = [])
 * @method Result describeAccountModifications(array $args = [])
 * @method Promise describeAccountModificationsAsync(array $args = [])
 * @method Result describeClientProperties(array $args = [])
 * @method Promise describeClientPropertiesAsync(array $args = [])
 * @method Result describeConnectionAliasPermissions(array $args = [])
 * @method Promise describeConnectionAliasPermissionsAsync(array $args = [])
 * @method Result describeConnectionAliases(array $args = [])
 * @method Promise describeConnectionAliasesAsync(array $args = [])
 * @method Result describeIpGroups(array $args = [])
 * @method Promise describeIpGroupsAsync(array $args = [])
 * @method Result describeTags(array $args = [])
 * @method Promise describeTagsAsync(array $args = [])
 * @method Result describeWorkspaceBundles(array $args = [])
 * @method Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method Result describeWorkspaceDirectories(array $args = [])
 * @method Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method Result describeWorkspaceImagePermissions(array $args = [])
 * @method Promise describeWorkspaceImagePermissionsAsync(array $args = [])
 * @method Result describeWorkspaceImages(array $args = [])
 * @method Promise describeWorkspaceImagesAsync(array $args = [])
 * @method Result describeWorkspaceSnapshots(array $args = [])
 * @method Promise describeWorkspaceSnapshotsAsync(array $args = [])
 * @method Result describeWorkspaces(array $args = [])
 * @method Promise describeWorkspacesAsync(array $args = [])
 * @method Result describeWorkspacesConnectionStatus(array $args = [])
 * @method Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method Result disassociateConnectionAlias(array $args = [])
 * @method Promise disassociateConnectionAliasAsync(array $args = [])
 * @method Result disassociateIpGroups(array $args = [])
 * @method Promise disassociateIpGroupsAsync(array $args = [])
 * @method Result importWorkspaceImage(array $args = [])
 * @method Promise importWorkspaceImageAsync(array $args = [])
 * @method Result listAvailableManagementCidrRanges(array $args = [])
 * @method Promise listAvailableManagementCidrRangesAsync(array $args = [])
 * @method Result migrateWorkspace(array $args = [])
 * @method Promise migrateWorkspaceAsync(array $args = [])
 * @method Result modifyAccount(array $args = [])
 * @method Promise modifyAccountAsync(array $args = [])
 * @method Result modifyClientProperties(array $args = [])
 * @method Promise modifyClientPropertiesAsync(array $args = [])
 * @method Result modifySelfservicePermissions(array $args = [])
 * @method Promise modifySelfservicePermissionsAsync(array $args = [])
 * @method Result modifyWorkspaceAccessProperties(array $args = [])
 * @method Promise modifyWorkspaceAccessPropertiesAsync(array $args = [])
 * @method Result modifyWorkspaceCreationProperties(array $args = [])
 * @method Promise modifyWorkspaceCreationPropertiesAsync(array $args = [])
 * @method Result modifyWorkspaceProperties(array $args = [])
 * @method Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method Result modifyWorkspaceState(array $args = [])
 * @method Promise modifyWorkspaceStateAsync(array $args = [])
 * @method Result rebootWorkspaces(array $args = [])
 * @method Promise rebootWorkspacesAsync(array $args = [])
 * @method Result rebuildWorkspaces(array $args = [])
 * @method Promise rebuildWorkspacesAsync(array $args = [])
 * @method Result registerWorkspaceDirectory(array $args = [])
 * @method Promise registerWorkspaceDirectoryAsync(array $args = [])
 * @method Result restoreWorkspace(array $args = [])
 * @method Promise restoreWorkspaceAsync(array $args = [])
 * @method Result revokeIpRules(array $args = [])
 * @method Promise revokeIpRulesAsync(array $args = [])
 * @method Result startWorkspaces(array $args = [])
 * @method Promise startWorkspacesAsync(array $args = [])
 * @method Result stopWorkspaces(array $args = [])
 * @method Promise stopWorkspacesAsync(array $args = [])
 * @method Result terminateWorkspaces(array $args = [])
 * @method Promise terminateWorkspacesAsync(array $args = [])
 * @method Result updateConnectionAliasPermission(array $args = [])
 * @method Promise updateConnectionAliasPermissionAsync(array $args = [])
 * @method Result updateRulesOfIpGroup(array $args = [])
 * @method Promise updateRulesOfIpGroupAsync(array $args = [])
 * @method Result updateWorkspaceImagePermission(array $args = [])
 * @method Promise updateWorkspaceImagePermissionAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
