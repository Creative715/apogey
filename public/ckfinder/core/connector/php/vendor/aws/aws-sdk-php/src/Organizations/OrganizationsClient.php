<?php
namespace Aws\Organizations;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Organizations** service.
 * @method Result acceptHandshake(array $args = [])
 * @method Promise acceptHandshakeAsync(array $args = [])
 * @method Result attachPolicy(array $args = [])
 * @method Promise attachPolicyAsync(array $args = [])
 * @method Result cancelHandshake(array $args = [])
 * @method Promise cancelHandshakeAsync(array $args = [])
 * @method Result createAccount(array $args = [])
 * @method Promise createAccountAsync(array $args = [])
 * @method Result createGovCloudAccount(array $args = [])
 * @method Promise createGovCloudAccountAsync(array $args = [])
 * @method Result createOrganization(array $args = [])
 * @method Promise createOrganizationAsync(array $args = [])
 * @method Result createOrganizationalUnit(array $args = [])
 * @method Promise createOrganizationalUnitAsync(array $args = [])
 * @method Result createPolicy(array $args = [])
 * @method Promise createPolicyAsync(array $args = [])
 * @method Result declineHandshake(array $args = [])
 * @method Promise declineHandshakeAsync(array $args = [])
 * @method Result deleteOrganization(array $args = [])
 * @method Promise deleteOrganizationAsync(array $args = [])
 * @method Result deleteOrganizationalUnit(array $args = [])
 * @method Promise deleteOrganizationalUnitAsync(array $args = [])
 * @method Result deletePolicy(array $args = [])
 * @method Promise deletePolicyAsync(array $args = [])
 * @method Result deregisterDelegatedAdministrator(array $args = [])
 * @method Promise deregisterDelegatedAdministratorAsync(array $args = [])
 * @method Result describeAccount(array $args = [])
 * @method Promise describeAccountAsync(array $args = [])
 * @method Result describeCreateAccountStatus(array $args = [])
 * @method Promise describeCreateAccountStatusAsync(array $args = [])
 * @method Result describeEffectivePolicy(array $args = [])
 * @method Promise describeEffectivePolicyAsync(array $args = [])
 * @method Result describeHandshake(array $args = [])
 * @method Promise describeHandshakeAsync(array $args = [])
 * @method Result describeOrganization(array $args = [])
 * @method Promise describeOrganizationAsync(array $args = [])
 * @method Result describeOrganizationalUnit(array $args = [])
 * @method Promise describeOrganizationalUnitAsync(array $args = [])
 * @method Result describePolicy(array $args = [])
 * @method Promise describePolicyAsync(array $args = [])
 * @method Result detachPolicy(array $args = [])
 * @method Promise detachPolicyAsync(array $args = [])
 * @method Result disableAWSServiceAccess(array $args = [])
 * @method Promise disableAWSServiceAccessAsync(array $args = [])
 * @method Result disablePolicyType(array $args = [])
 * @method Promise disablePolicyTypeAsync(array $args = [])
 * @method Result enableAWSServiceAccess(array $args = [])
 * @method Promise enableAWSServiceAccessAsync(array $args = [])
 * @method Result enableAllFeatures(array $args = [])
 * @method Promise enableAllFeaturesAsync(array $args = [])
 * @method Result enablePolicyType(array $args = [])
 * @method Promise enablePolicyTypeAsync(array $args = [])
 * @method Result inviteAccountToOrganization(array $args = [])
 * @method Promise inviteAccountToOrganizationAsync(array $args = [])
 * @method Result leaveOrganization(array $args = [])
 * @method Promise leaveOrganizationAsync(array $args = [])
 * @method Result listAWSServiceAccessForOrganization(array $args = [])
 * @method Promise listAWSServiceAccessForOrganizationAsync(array $args = [])
 * @method Result listAccounts(array $args = [])
 * @method Promise listAccountsAsync(array $args = [])
 * @method Result listAccountsForParent(array $args = [])
 * @method Promise listAccountsForParentAsync(array $args = [])
 * @method Result listChildren(array $args = [])
 * @method Promise listChildrenAsync(array $args = [])
 * @method Result listCreateAccountStatus(array $args = [])
 * @method Promise listCreateAccountStatusAsync(array $args = [])
 * @method Result listDelegatedAdministrators(array $args = [])
 * @method Promise listDelegatedAdministratorsAsync(array $args = [])
 * @method Result listDelegatedServicesForAccount(array $args = [])
 * @method Promise listDelegatedServicesForAccountAsync(array $args = [])
 * @method Result listHandshakesForAccount(array $args = [])
 * @method Promise listHandshakesForAccountAsync(array $args = [])
 * @method Result listHandshakesForOrganization(array $args = [])
 * @method Promise listHandshakesForOrganizationAsync(array $args = [])
 * @method Result listOrganizationalUnitsForParent(array $args = [])
 * @method Promise listOrganizationalUnitsForParentAsync(array $args = [])
 * @method Result listParents(array $args = [])
 * @method Promise listParentsAsync(array $args = [])
 * @method Result listPolicies(array $args = [])
 * @method Promise listPoliciesAsync(array $args = [])
 * @method Result listPoliciesForTarget(array $args = [])
 * @method Promise listPoliciesForTargetAsync(array $args = [])
 * @method Result listRoots(array $args = [])
 * @method Promise listRootsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTargetsForPolicy(array $args = [])
 * @method Promise listTargetsForPolicyAsync(array $args = [])
 * @method Result moveAccount(array $args = [])
 * @method Promise moveAccountAsync(array $args = [])
 * @method Result registerDelegatedAdministrator(array $args = [])
 * @method Promise registerDelegatedAdministratorAsync(array $args = [])
 * @method Result removeAccountFromOrganization(array $args = [])
 * @method Promise removeAccountFromOrganizationAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateOrganizationalUnit(array $args = [])
 * @method Promise updateOrganizationalUnitAsync(array $args = [])
 * @method Result updatePolicy(array $args = [])
 * @method Promise updatePolicyAsync(array $args = [])
 */
class OrganizationsClient extends AwsClient {}