<?php
namespace Aws\IdentityStore;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS SSO Identity Store** service.
 * @method Result describeGroup(array $args = [])
 * @method Promise describeGroupAsync(array $args = [])
 * @method Result describeUser(array $args = [])
 * @method Promise describeUserAsync(array $args = [])
 * @method Result listGroups(array $args = [])
 * @method Promise listGroupsAsync(array $args = [])
 * @method Result listUsers(array $args = [])
 * @method Promise listUsersAsync(array $args = [])
 */
class IdentityStoreClient extends AwsClient {}
