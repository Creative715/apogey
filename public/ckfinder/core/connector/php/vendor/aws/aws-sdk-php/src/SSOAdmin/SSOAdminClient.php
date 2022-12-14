<?php
namespace Aws\SSOAdmin;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Single Sign-On Admin** service.
 * @method Result attachManagedPolicyToPermissionSet(array $args = [])
 * @method Promise attachManagedPolicyToPermissionSetAsync(array $args = [])
 * @method Result createAccountAssignment(array $args = [])
 * @method Promise createAccountAssignmentAsync(array $args = [])
 * @method Result createInstanceAccessControlAttributeConfiguration(array $args = [])
 * @method Promise createInstanceAccessControlAttributeConfigurationAsync(array $args = [])
 * @method Result createPermissionSet(array $args = [])
 * @method Promise createPermissionSetAsync(array $args = [])
 * @method Result deleteAccountAssignment(array $args = [])
 * @method Promise deleteAccountAssignmentAsync(array $args = [])
 * @method Result deleteInlinePolicyFromPermissionSet(array $args = [])
 * @method Promise deleteInlinePolicyFromPermissionSetAsync(array $args = [])
 * @method Result deleteInstanceAccessControlAttributeConfiguration(array $args = [])
 * @method Promise deleteInstanceAccessControlAttributeConfigurationAsync(array $args = [])
 * @method Result deletePermissionSet(array $args = [])
 * @method Promise deletePermissionSetAsync(array $args = [])
 * @method Result describeAccountAssignmentCreationStatus(array $args = [])
 * @method Promise describeAccountAssignmentCreationStatusAsync(array $args = [])
 * @method Result describeAccountAssignmentDeletionStatus(array $args = [])
 * @method Promise describeAccountAssignmentDeletionStatusAsync(array $args = [])
 * @method Result describeInstanceAccessControlAttributeConfiguration(array $args = [])
 * @method Promise describeInstanceAccessControlAttributeConfigurationAsync(array $args = [])
 * @method Result describePermissionSet(array $args = [])
 * @method Promise describePermissionSetAsync(array $args = [])
 * @method Result describePermissionSetProvisioningStatus(array $args = [])
 * @method Promise describePermissionSetProvisioningStatusAsync(array $args = [])
 * @method Result detachManagedPolicyFromPermissionSet(array $args = [])
 * @method Promise detachManagedPolicyFromPermissionSetAsync(array $args = [])
 * @method Result getInlinePolicyForPermissionSet(array $args = [])
 * @method Promise getInlinePolicyForPermissionSetAsync(array $args = [])
 * @method Result listAccountAssignmentCreationStatus(array $args = [])
 * @method Promise listAccountAssignmentCreationStatusAsync(array $args = [])
 * @method Result listAccountAssignmentDeletionStatus(array $args = [])
 * @method Promise listAccountAssignmentDeletionStatusAsync(array $args = [])
 * @method Result listAccountAssignments(array $args = [])
 * @method Promise listAccountAssignmentsAsync(array $args = [])
 * @method Result listAccountsForProvisionedPermissionSet(array $args = [])
 * @method Promise listAccountsForProvisionedPermissionSetAsync(array $args = [])
 * @method Result listInstances(array $args = [])
 * @method Promise listInstancesAsync(array $args = [])
 * @method Result listManagedPoliciesInPermissionSet(array $args = [])
 * @method Promise listManagedPoliciesInPermissionSetAsync(array $args = [])
 * @method Result listPermissionSetProvisioningStatus(array $args = [])
 * @method Promise listPermissionSetProvisioningStatusAsync(array $args = [])
 * @method Result listPermissionSets(array $args = [])
 * @method Promise listPermissionSetsAsync(array $args = [])
 * @method Result listPermissionSetsProvisionedToAccount(array $args = [])
 * @method Promise listPermissionSetsProvisionedToAccountAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result provisionPermissionSet(array $args = [])
 * @method Promise provisionPermissionSetAsync(array $args = [])
 * @method Result putInlinePolicyToPermissionSet(array $args = [])
 * @method Promise putInlinePolicyToPermissionSetAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateInstanceAccessControlAttributeConfiguration(array $args = [])
 * @method Promise updateInstanceAccessControlAttributeConfigurationAsync(array $args = [])
 * @method Result updatePermissionSet(array $args = [])
 * @method Promise updatePermissionSetAsync(array $args = [])
 */
class SSOAdminClient extends AwsClient {}
