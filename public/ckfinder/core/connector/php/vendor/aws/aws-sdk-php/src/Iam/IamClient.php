<?php
namespace Aws\Iam;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Identity and Access Management (AWS IAM)** service.
 *
 * @method Result addClientIDToOpenIDConnectProvider(array $args = [])
 * @method Promise addClientIDToOpenIDConnectProviderAsync(array $args = [])
 * @method Result addRoleToInstanceProfile(array $args = [])
 * @method Promise addRoleToInstanceProfileAsync(array $args = [])
 * @method Result addUserToGroup(array $args = [])
 * @method Promise addUserToGroupAsync(array $args = [])
 * @method Result attachGroupPolicy(array $args = [])
 * @method Promise attachGroupPolicyAsync(array $args = [])
 * @method Result attachRolePolicy(array $args = [])
 * @method Promise attachRolePolicyAsync(array $args = [])
 * @method Result attachUserPolicy(array $args = [])
 * @method Promise attachUserPolicyAsync(array $args = [])
 * @method Result changePassword(array $args = [])
 * @method Promise changePasswordAsync(array $args = [])
 * @method Result createAccessKey(array $args = [])
 * @method Promise createAccessKeyAsync(array $args = [])
 * @method Result createAccountAlias(array $args = [])
 * @method Promise createAccountAliasAsync(array $args = [])
 * @method Result createGroup(array $args = [])
 * @method Promise createGroupAsync(array $args = [])
 * @method Result createInstanceProfile(array $args = [])
 * @method Promise createInstanceProfileAsync(array $args = [])
 * @method Result createLoginProfile(array $args = [])
 * @method Promise createLoginProfileAsync(array $args = [])
 * @method Result createOpenIDConnectProvider(array $args = [])
 * @method Promise createOpenIDConnectProviderAsync(array $args = [])
 * @method Result createPolicy(array $args = [])
 * @method Promise createPolicyAsync(array $args = [])
 * @method Result createPolicyVersion(array $args = [])
 * @method Promise createPolicyVersionAsync(array $args = [])
 * @method Result createRole(array $args = [])
 * @method Promise createRoleAsync(array $args = [])
 * @method Result createSAMLProvider(array $args = [])
 * @method Promise createSAMLProviderAsync(array $args = [])
 * @method Result createServiceLinkedRole(array $args = [])
 * @method Promise createServiceLinkedRoleAsync(array $args = [])
 * @method Result createServiceSpecificCredential(array $args = [])
 * @method Promise createServiceSpecificCredentialAsync(array $args = [])
 * @method Result createUser(array $args = [])
 * @method Promise createUserAsync(array $args = [])
 * @method Result createVirtualMFADevice(array $args = [])
 * @method Promise createVirtualMFADeviceAsync(array $args = [])
 * @method Result deactivateMFADevice(array $args = [])
 * @method Promise deactivateMFADeviceAsync(array $args = [])
 * @method Result deleteAccessKey(array $args = [])
 * @method Promise deleteAccessKeyAsync(array $args = [])
 * @method Result deleteAccountAlias(array $args = [])
 * @method Promise deleteAccountAliasAsync(array $args = [])
 * @method Result deleteAccountPasswordPolicy(array $args = [])
 * @method Promise deleteAccountPasswordPolicyAsync(array $args = [])
 * @method Result deleteGroup(array $args = [])
 * @method Promise deleteGroupAsync(array $args = [])
 * @method Result deleteGroupPolicy(array $args = [])
 * @method Promise deleteGroupPolicyAsync(array $args = [])
 * @method Result deleteInstanceProfile(array $args = [])
 * @method Promise deleteInstanceProfileAsync(array $args = [])
 * @method Result deleteLoginProfile(array $args = [])
 * @method Promise deleteLoginProfileAsync(array $args = [])
 * @method Result deleteOpenIDConnectProvider(array $args = [])
 * @method Promise deleteOpenIDConnectProviderAsync(array $args = [])
 * @method Result deletePolicy(array $args = [])
 * @method Promise deletePolicyAsync(array $args = [])
 * @method Result deletePolicyVersion(array $args = [])
 * @method Promise deletePolicyVersionAsync(array $args = [])
 * @method Result deleteRole(array $args = [])
 * @method Promise deleteRoleAsync(array $args = [])
 * @method Result deleteRolePermissionsBoundary(array $args = [])
 * @method Promise deleteRolePermissionsBoundaryAsync(array $args = [])
 * @method Result deleteRolePolicy(array $args = [])
 * @method Promise deleteRolePolicyAsync(array $args = [])
 * @method Result deleteSAMLProvider(array $args = [])
 * @method Promise deleteSAMLProviderAsync(array $args = [])
 * @method Result deleteSSHPublicKey(array $args = [])
 * @method Promise deleteSSHPublicKeyAsync(array $args = [])
 * @method Result deleteServerCertificate(array $args = [])
 * @method Promise deleteServerCertificateAsync(array $args = [])
 * @method Result deleteServiceLinkedRole(array $args = [])
 * @method Promise deleteServiceLinkedRoleAsync(array $args = [])
 * @method Result deleteServiceSpecificCredential(array $args = [])
 * @method Promise deleteServiceSpecificCredentialAsync(array $args = [])
 * @method Result deleteSigningCertificate(array $args = [])
 * @method Promise deleteSigningCertificateAsync(array $args = [])
 * @method Result deleteUser(array $args = [])
 * @method Promise deleteUserAsync(array $args = [])
 * @method Result deleteUserPermissionsBoundary(array $args = [])
 * @method Promise deleteUserPermissionsBoundaryAsync(array $args = [])
 * @method Result deleteUserPolicy(array $args = [])
 * @method Promise deleteUserPolicyAsync(array $args = [])
 * @method Result deleteVirtualMFADevice(array $args = [])
 * @method Promise deleteVirtualMFADeviceAsync(array $args = [])
 * @method Result detachGroupPolicy(array $args = [])
 * @method Promise detachGroupPolicyAsync(array $args = [])
 * @method Result detachRolePolicy(array $args = [])
 * @method Promise detachRolePolicyAsync(array $args = [])
 * @method Result detachUserPolicy(array $args = [])
 * @method Promise detachUserPolicyAsync(array $args = [])
 * @method Result enableMFADevice(array $args = [])
 * @method Promise enableMFADeviceAsync(array $args = [])
 * @method Result generateCredentialReport(array $args = [])
 * @method Promise generateCredentialReportAsync(array $args = [])
 * @method Result generateOrganizationsAccessReport(array $args = [])
 * @method Promise generateOrganizationsAccessReportAsync(array $args = [])
 * @method Result generateServiceLastAccessedDetails(array $args = [])
 * @method Promise generateServiceLastAccessedDetailsAsync(array $args = [])
 * @method Result getAccessKeyLastUsed(array $args = [])
 * @method Promise getAccessKeyLastUsedAsync(array $args = [])
 * @method Result getAccountAuthorizationDetails(array $args = [])
 * @method Promise getAccountAuthorizationDetailsAsync(array $args = [])
 * @method Result getAccountPasswordPolicy(array $args = [])
 * @method Promise getAccountPasswordPolicyAsync(array $args = [])
 * @method Result getAccountSummary(array $args = [])
 * @method Promise getAccountSummaryAsync(array $args = [])
 * @method Result getContextKeysForCustomPolicy(array $args = [])
 * @method Promise getContextKeysForCustomPolicyAsync(array $args = [])
 * @method Result getContextKeysForPrincipalPolicy(array $args = [])
 * @method Promise getContextKeysForPrincipalPolicyAsync(array $args = [])
 * @method Result getCredentialReport(array $args = [])
 * @method Promise getCredentialReportAsync(array $args = [])
 * @method Result getGroup(array $args = [])
 * @method Promise getGroupAsync(array $args = [])
 * @method Result getGroupPolicy(array $args = [])
 * @method Promise getGroupPolicyAsync(array $args = [])
 * @method Result getInstanceProfile(array $args = [])
 * @method Promise getInstanceProfileAsync(array $args = [])
 * @method Result getLoginProfile(array $args = [])
 * @method Promise getLoginProfileAsync(array $args = [])
 * @method Result getOpenIDConnectProvider(array $args = [])
 * @method Promise getOpenIDConnectProviderAsync(array $args = [])
 * @method Result getOrganizationsAccessReport(array $args = [])
 * @method Promise getOrganizationsAccessReportAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result getPolicyVersion(array $args = [])
 * @method Promise getPolicyVersionAsync(array $args = [])
 * @method Result getRole(array $args = [])
 * @method Promise getRoleAsync(array $args = [])
 * @method Result getRolePolicy(array $args = [])
 * @method Promise getRolePolicyAsync(array $args = [])
 * @method Result getSAMLProvider(array $args = [])
 * @method Promise getSAMLProviderAsync(array $args = [])
 * @method Result getSSHPublicKey(array $args = [])
 * @method Promise getSSHPublicKeyAsync(array $args = [])
 * @method Result getServerCertificate(array $args = [])
 * @method Promise getServerCertificateAsync(array $args = [])
 * @method Result getServiceLastAccessedDetails(array $args = [])
 * @method Promise getServiceLastAccessedDetailsAsync(array $args = [])
 * @method Result getServiceLastAccessedDetailsWithEntities(array $args = [])
 * @method Promise getServiceLastAccessedDetailsWithEntitiesAsync(array $args = [])
 * @method Result getServiceLinkedRoleDeletionStatus(array $args = [])
 * @method Promise getServiceLinkedRoleDeletionStatusAsync(array $args = [])
 * @method Result getUser(array $args = [])
 * @method Promise getUserAsync(array $args = [])
 * @method Result getUserPolicy(array $args = [])
 * @method Promise getUserPolicyAsync(array $args = [])
 * @method Result listAccessKeys(array $args = [])
 * @method Promise listAccessKeysAsync(array $args = [])
 * @method Result listAccountAliases(array $args = [])
 * @method Promise listAccountAliasesAsync(array $args = [])
 * @method Result listAttachedGroupPolicies(array $args = [])
 * @method Promise listAttachedGroupPoliciesAsync(array $args = [])
 * @method Result listAttachedRolePolicies(array $args = [])
 * @method Promise listAttachedRolePoliciesAsync(array $args = [])
 * @method Result listAttachedUserPolicies(array $args = [])
 * @method Promise listAttachedUserPoliciesAsync(array $args = [])
 * @method Result listEntitiesForPolicy(array $args = [])
 * @method Promise listEntitiesForPolicyAsync(array $args = [])
 * @method Result listGroupPolicies(array $args = [])
 * @method Promise listGroupPoliciesAsync(array $args = [])
 * @method Result listGroups(array $args = [])
 * @method Promise listGroupsAsync(array $args = [])
 * @method Result listGroupsForUser(array $args = [])
 * @method Promise listGroupsForUserAsync(array $args = [])
 * @method Result listInstanceProfileTags(array $args = [])
 * @method Promise listInstanceProfileTagsAsync(array $args = [])
 * @method Result listInstanceProfiles(array $args = [])
 * @method Promise listInstanceProfilesAsync(array $args = [])
 * @method Result listInstanceProfilesForRole(array $args = [])
 * @method Promise listInstanceProfilesForRoleAsync(array $args = [])
 * @method Result listMFADeviceTags(array $args = [])
 * @method Promise listMFADeviceTagsAsync(array $args = [])
 * @method Result listMFADevices(array $args = [])
 * @method Promise listMFADevicesAsync(array $args = [])
 * @method Result listOpenIDConnectProviderTags(array $args = [])
 * @method Promise listOpenIDConnectProviderTagsAsync(array $args = [])
 * @method Result listOpenIDConnectProviders(array $args = [])
 * @method Promise listOpenIDConnectProvidersAsync(array $args = [])
 * @method Result listPolicies(array $args = [])
 * @method Promise listPoliciesAsync(array $args = [])
 * @method Result listPoliciesGrantingServiceAccess(array $args = [])
 * @method Promise listPoliciesGrantingServiceAccessAsync(array $args = [])
 * @method Result listPolicyTags(array $args = [])
 * @method Promise listPolicyTagsAsync(array $args = [])
 * @method Result listPolicyVersions(array $args = [])
 * @method Promise listPolicyVersionsAsync(array $args = [])
 * @method Result listRolePolicies(array $args = [])
 * @method Promise listRolePoliciesAsync(array $args = [])
 * @method Result listRoleTags(array $args = [])
 * @method Promise listRoleTagsAsync(array $args = [])
 * @method Result listRoles(array $args = [])
 * @method Promise listRolesAsync(array $args = [])
 * @method Result listSAMLProviderTags(array $args = [])
 * @method Promise listSAMLProviderTagsAsync(array $args = [])
 * @method Result listSAMLProviders(array $args = [])
 * @method Promise listSAMLProvidersAsync(array $args = [])
 * @method Result listSSHPublicKeys(array $args = [])
 * @method Promise listSSHPublicKeysAsync(array $args = [])
 * @method Result listServerCertificateTags(array $args = [])
 * @method Promise listServerCertificateTagsAsync(array $args = [])
 * @method Result listServerCertificates(array $args = [])
 * @method Promise listServerCertificatesAsync(array $args = [])
 * @method Result listServiceSpecificCredentials(array $args = [])
 * @method Promise listServiceSpecificCredentialsAsync(array $args = [])
 * @method Result listSigningCertificates(array $args = [])
 * @method Promise listSigningCertificatesAsync(array $args = [])
 * @method Result listUserPolicies(array $args = [])
 * @method Promise listUserPoliciesAsync(array $args = [])
 * @method Result listUserTags(array $args = [])
 * @method Promise listUserTagsAsync(array $args = [])
 * @method Result listUsers(array $args = [])
 * @method Promise listUsersAsync(array $args = [])
 * @method Result listVirtualMFADevices(array $args = [])
 * @method Promise listVirtualMFADevicesAsync(array $args = [])
 * @method Result putGroupPolicy(array $args = [])
 * @method Promise putGroupPolicyAsync(array $args = [])
 * @method Result putRolePermissionsBoundary(array $args = [])
 * @method Promise putRolePermissionsBoundaryAsync(array $args = [])
 * @method Result putRolePolicy(array $args = [])
 * @method Promise putRolePolicyAsync(array $args = [])
 * @method Result putUserPermissionsBoundary(array $args = [])
 * @method Promise putUserPermissionsBoundaryAsync(array $args = [])
 * @method Result putUserPolicy(array $args = [])
 * @method Promise putUserPolicyAsync(array $args = [])
 * @method Result removeClientIDFromOpenIDConnectProvider(array $args = [])
 * @method Promise removeClientIDFromOpenIDConnectProviderAsync(array $args = [])
 * @method Result removeRoleFromInstanceProfile(array $args = [])
 * @method Promise removeRoleFromInstanceProfileAsync(array $args = [])
 * @method Result removeUserFromGroup(array $args = [])
 * @method Promise removeUserFromGroupAsync(array $args = [])
 * @method Result resetServiceSpecificCredential(array $args = [])
 * @method Promise resetServiceSpecificCredentialAsync(array $args = [])
 * @method Result resyncMFADevice(array $args = [])
 * @method Promise resyncMFADeviceAsync(array $args = [])
 * @method Result setDefaultPolicyVersion(array $args = [])
 * @method Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method Result setSecurityTokenServicePreferences(array $args = [])
 * @method Promise setSecurityTokenServicePreferencesAsync(array $args = [])
 * @method Result simulateCustomPolicy(array $args = [])
 * @method Promise simulateCustomPolicyAsync(array $args = [])
 * @method Result simulatePrincipalPolicy(array $args = [])
 * @method Promise simulatePrincipalPolicyAsync(array $args = [])
 * @method Result tagInstanceProfile(array $args = [])
 * @method Promise tagInstanceProfileAsync(array $args = [])
 * @method Result tagMFADevice(array $args = [])
 * @method Promise tagMFADeviceAsync(array $args = [])
 * @method Result tagOpenIDConnectProvider(array $args = [])
 * @method Promise tagOpenIDConnectProviderAsync(array $args = [])
 * @method Result tagPolicy(array $args = [])
 * @method Promise tagPolicyAsync(array $args = [])
 * @method Result tagRole(array $args = [])
 * @method Promise tagRoleAsync(array $args = [])
 * @method Result tagSAMLProvider(array $args = [])
 * @method Promise tagSAMLProviderAsync(array $args = [])
 * @method Result tagServerCertificate(array $args = [])
 * @method Promise tagServerCertificateAsync(array $args = [])
 * @method Result tagUser(array $args = [])
 * @method Promise tagUserAsync(array $args = [])
 * @method Result untagInstanceProfile(array $args = [])
 * @method Promise untagInstanceProfileAsync(array $args = [])
 * @method Result untagMFADevice(array $args = [])
 * @method Promise untagMFADeviceAsync(array $args = [])
 * @method Result untagOpenIDConnectProvider(array $args = [])
 * @method Promise untagOpenIDConnectProviderAsync(array $args = [])
 * @method Result untagPolicy(array $args = [])
 * @method Promise untagPolicyAsync(array $args = [])
 * @method Result untagRole(array $args = [])
 * @method Promise untagRoleAsync(array $args = [])
 * @method Result untagSAMLProvider(array $args = [])
 * @method Promise untagSAMLProviderAsync(array $args = [])
 * @method Result untagServerCertificate(array $args = [])
 * @method Promise untagServerCertificateAsync(array $args = [])
 * @method Result untagUser(array $args = [])
 * @method Promise untagUserAsync(array $args = [])
 * @method Result updateAccessKey(array $args = [])
 * @method Promise updateAccessKeyAsync(array $args = [])
 * @method Result updateAccountPasswordPolicy(array $args = [])
 * @method Promise updateAccountPasswordPolicyAsync(array $args = [])
 * @method Result updateAssumeRolePolicy(array $args = [])
 * @method Promise updateAssumeRolePolicyAsync(array $args = [])
 * @method Result updateGroup(array $args = [])
 * @method Promise updateGroupAsync(array $args = [])
 * @method Result updateLoginProfile(array $args = [])
 * @method Promise updateLoginProfileAsync(array $args = [])
 * @method Result updateOpenIDConnectProviderThumbprint(array $args = [])
 * @method Promise updateOpenIDConnectProviderThumbprintAsync(array $args = [])
 * @method Result updateRole(array $args = [])
 * @method Promise updateRoleAsync(array $args = [])
 * @method Result updateRoleDescription(array $args = [])
 * @method Promise updateRoleDescriptionAsync(array $args = [])
 * @method Result updateSAMLProvider(array $args = [])
 * @method Promise updateSAMLProviderAsync(array $args = [])
 * @method Result updateSSHPublicKey(array $args = [])
 * @method Promise updateSSHPublicKeyAsync(array $args = [])
 * @method Result updateServerCertificate(array $args = [])
 * @method Promise updateServerCertificateAsync(array $args = [])
 * @method Result updateServiceSpecificCredential(array $args = [])
 * @method Promise updateServiceSpecificCredentialAsync(array $args = [])
 * @method Result updateSigningCertificate(array $args = [])
 * @method Promise updateSigningCertificateAsync(array $args = [])
 * @method Result updateUser(array $args = [])
 * @method Promise updateUserAsync(array $args = [])
 * @method Result uploadSSHPublicKey(array $args = [])
 * @method Promise uploadSSHPublicKeyAsync(array $args = [])
 * @method Result uploadServerCertificate(array $args = [])
 * @method Promise uploadServerCertificateAsync(array $args = [])
 * @method Result uploadSigningCertificate(array $args = [])
 * @method Promise uploadSigningCertificateAsync(array $args = [])
 */
class IamClient extends AwsClient {}