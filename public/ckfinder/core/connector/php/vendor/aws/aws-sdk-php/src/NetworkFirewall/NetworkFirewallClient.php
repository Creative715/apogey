<?php
namespace Aws\NetworkFirewall;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Network Firewall** service.
 * @method Result associateFirewallPolicy(array $args = [])
 * @method Promise associateFirewallPolicyAsync(array $args = [])
 * @method Result associateSubnets(array $args = [])
 * @method Promise associateSubnetsAsync(array $args = [])
 * @method Result createFirewall(array $args = [])
 * @method Promise createFirewallAsync(array $args = [])
 * @method Result createFirewallPolicy(array $args = [])
 * @method Promise createFirewallPolicyAsync(array $args = [])
 * @method Result createRuleGroup(array $args = [])
 * @method Promise createRuleGroupAsync(array $args = [])
 * @method Result deleteFirewall(array $args = [])
 * @method Promise deleteFirewallAsync(array $args = [])
 * @method Result deleteFirewallPolicy(array $args = [])
 * @method Promise deleteFirewallPolicyAsync(array $args = [])
 * @method Result deleteResourcePolicy(array $args = [])
 * @method Promise deleteResourcePolicyAsync(array $args = [])
 * @method Result deleteRuleGroup(array $args = [])
 * @method Promise deleteRuleGroupAsync(array $args = [])
 * @method Result describeFirewall(array $args = [])
 * @method Promise describeFirewallAsync(array $args = [])
 * @method Result describeFirewallPolicy(array $args = [])
 * @method Promise describeFirewallPolicyAsync(array $args = [])
 * @method Result describeLoggingConfiguration(array $args = [])
 * @method Promise describeLoggingConfigurationAsync(array $args = [])
 * @method Result describeResourcePolicy(array $args = [])
 * @method Promise describeResourcePolicyAsync(array $args = [])
 * @method Result describeRuleGroup(array $args = [])
 * @method Promise describeRuleGroupAsync(array $args = [])
 * @method Result disassociateSubnets(array $args = [])
 * @method Promise disassociateSubnetsAsync(array $args = [])
 * @method Result listFirewallPolicies(array $args = [])
 * @method Promise listFirewallPoliciesAsync(array $args = [])
 * @method Result listFirewalls(array $args = [])
 * @method Promise listFirewallsAsync(array $args = [])
 * @method Result listRuleGroups(array $args = [])
 * @method Promise listRuleGroupsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putResourcePolicy(array $args = [])
 * @method Promise putResourcePolicyAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateFirewallDeleteProtection(array $args = [])
 * @method Promise updateFirewallDeleteProtectionAsync(array $args = [])
 * @method Result updateFirewallDescription(array $args = [])
 * @method Promise updateFirewallDescriptionAsync(array $args = [])
 * @method Result updateFirewallPolicy(array $args = [])
 * @method Promise updateFirewallPolicyAsync(array $args = [])
 * @method Result updateFirewallPolicyChangeProtection(array $args = [])
 * @method Promise updateFirewallPolicyChangeProtectionAsync(array $args = [])
 * @method Result updateLoggingConfiguration(array $args = [])
 * @method Promise updateLoggingConfigurationAsync(array $args = [])
 * @method Result updateRuleGroup(array $args = [])
 * @method Promise updateRuleGroupAsync(array $args = [])
 * @method Result updateSubnetChangeProtection(array $args = [])
 * @method Promise updateSubnetChangeProtectionAsync(array $args = [])
 */
class NetworkFirewallClient extends AwsClient {}
