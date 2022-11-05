<?php
namespace Aws\Detective;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Detective** service.
 * @method Result acceptInvitation(array $args = [])
 * @method Promise acceptInvitationAsync(array $args = [])
 * @method Result createGraph(array $args = [])
 * @method Promise createGraphAsync(array $args = [])
 * @method Result createMembers(array $args = [])
 * @method Promise createMembersAsync(array $args = [])
 * @method Result deleteGraph(array $args = [])
 * @method Promise deleteGraphAsync(array $args = [])
 * @method Result deleteMembers(array $args = [])
 * @method Promise deleteMembersAsync(array $args = [])
 * @method Result disassociateMembership(array $args = [])
 * @method Promise disassociateMembershipAsync(array $args = [])
 * @method Result getMembers(array $args = [])
 * @method Promise getMembersAsync(array $args = [])
 * @method Result listGraphs(array $args = [])
 * @method Promise listGraphsAsync(array $args = [])
 * @method Result listInvitations(array $args = [])
 * @method Promise listInvitationsAsync(array $args = [])
 * @method Result listMembers(array $args = [])
 * @method Promise listMembersAsync(array $args = [])
 * @method Result rejectInvitation(array $args = [])
 * @method Promise rejectInvitationAsync(array $args = [])
 * @method Result startMonitoringMember(array $args = [])
 * @method Promise startMonitoringMemberAsync(array $args = [])
 */
class DetectiveClient extends AwsClient {}
