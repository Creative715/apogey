<?php
namespace Aws\WAFV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS WAFV2** service.
 * @method Result associateWebACL(array $args = [])
 * @method Promise associateWebACLAsync(array $args = [])
 * @method Result checkCapacity(array $args = [])
 * @method Promise checkCapacityAsync(array $args = [])
 * @method Result createIPSet(array $args = [])
 * @method Promise createIPSetAsync(array $args = [])
 * @method Result createRegexPatternSet(array $args = [])
 * @method Promise createRegexPatternSetAsync(array $args = [])
 * @method Result createRuleGroup(array $args = [])
 * @method Promise createRuleGroupAsync(array $args = [])
 * @method Result createWebACL(array $args = [])
 * @method Promise createWebACLAsync(array $args = [])
 * @method Result deleteFirewallManagerRuleGroups(array $args = [])
 * @method Promise deleteFirewallManagerRuleGroupsAsync(array $args = [])
 * @method Result deleteIPSet(array $args = [])
 * @method Promise deleteIPSetAsync(array $args = [])
 * @method Result deleteLoggingConfiguration(array $args = [])
 * @method Promise deleteLoggingConfigurationAsync(array $args = [])
 * @method Result deletePermissionPolicy(array $args = [])
 * @method Promise deletePermissionPolicyAsync(array $args = [])
 * @method Result deleteRegexPatternSet(array $args = [])
 * @method Promise deleteRegexPatternSetAsync(array $args = [])
 * @method Result deleteRuleGroup(array $args = [])
 * @method Promise deleteRuleGroupAsync(array $args = [])
 * @method Result deleteWebACL(array $args = [])
 * @method Promise deleteWebACLAsync(array $args = [])
 * @method Result describeManagedRuleGroup(array $args = [])
 * @method Promise describeManagedRuleGroupAsync(array $args = [])
 * @method Result disassociateWebACL(array $args = [])
 * @method Promise disassociateWebACLAsync(array $args = [])
 * @method Result getIPSet(array $args = [])
 * @method Promise getIPSetAsync(array $args = [])
 * @method Result getLoggingConfiguration(array $args = [])
 * @method Promise getLoggingConfigurationAsync(array $args = [])
 * @method Result getPermissionPolicy(array $args = [])
 * @method Promise getPermissionPolicyAsync(array $args = [])
 * @method Result getRateBasedStatementManagedKeys(array $args = [])
 * @method Promise getRateBasedStatementManagedKeysAsync(array $args = [])
 * @method Result getRegexPatternSet(array $args = [])
 * @method Promise getRegexPatternSetAsync(array $args = [])
 * @method Result getRuleGroup(array $args = [])
 * @method Promise getRuleGroupAsync(array $args = [])
 * @method Result getSampledRequests(array $args = [])
 * @method Promise getSampledRequestsAsync(array $args = [])
 * @method Result getWebACL(array $args = [])
 * @method Promise getWebACLAsync(array $args = [])
 * @method Result getWebACLForResource(array $args = [])
 * @method Promise getWebACLForResourceAsync(array $args = [])
 * @method Result listAvailableManagedRuleGroups(array $args = [])
 * @method Promise listAvailableManagedRuleGroupsAsync(array $args = [])
 * @method Result listIPSets(array $args = [])
 * @method Promise listIPSetsAsync(array $args = [])
 * @method Result listLoggingConfigurations(array $args = [])
 * @method Promise listLoggingConfigurationsAsync(array $args = [])
 * @method Result listRegexPatternSets(array $args = [])
 * @method Promise listRegexPatternSetsAsync(array $args = [])
 * @method Result listResourcesForWebACL(array $args = [])
 * @method Promise listResourcesForWebACLAsync(array $args = [])
 * @method Result listRuleGroups(array $args = [])
 * @method Promise listRuleGroupsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listWebACLs(array $args = [])
 * @method Promise listWebACLsAsync(array $args = [])
 * @method Result putLoggingConfiguration(array $args = [])
 * @method Promise putLoggingConfigurationAsync(array $args = [])
 * @method Result putPermissionPolicy(array $args = [])
 * @method Promise putPermissionPolicyAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateIPSet(array $args = [])
 * @method Promise updateIPSetAsync(array $args = [])
 * @method Result updateRegexPatternSet(array $args = [])
 * @method Promise updateRegexPatternSetAsync(array $args = [])
 * @method Result updateRuleGroup(array $args = [])
 * @method Promise updateRuleGroupAsync(array $args = [])
 * @method Result updateWebACL(array $args = [])
 * @method Promise updateWebACLAsync(array $args = [])
 */
class WAFV2Client extends AwsClient {}
