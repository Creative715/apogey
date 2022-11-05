<?php
namespace Aws\FSx;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon FSx** service.
 * @method Result associateFileSystemAliases(array $args = [])
 * @method Promise associateFileSystemAliasesAsync(array $args = [])
 * @method Result cancelDataRepositoryTask(array $args = [])
 * @method Promise cancelDataRepositoryTaskAsync(array $args = [])
 * @method Result createBackup(array $args = [])
 * @method Promise createBackupAsync(array $args = [])
 * @method Result createDataRepositoryTask(array $args = [])
 * @method Promise createDataRepositoryTaskAsync(array $args = [])
 * @method Result createFileSystem(array $args = [])
 * @method Promise createFileSystemAsync(array $args = [])
 * @method Result createFileSystemFromBackup(array $args = [])
 * @method Promise createFileSystemFromBackupAsync(array $args = [])
 * @method Result deleteBackup(array $args = [])
 * @method Promise deleteBackupAsync(array $args = [])
 * @method Result deleteFileSystem(array $args = [])
 * @method Promise deleteFileSystemAsync(array $args = [])
 * @method Result describeBackups(array $args = [])
 * @method Promise describeBackupsAsync(array $args = [])
 * @method Result describeDataRepositoryTasks(array $args = [])
 * @method Promise describeDataRepositoryTasksAsync(array $args = [])
 * @method Result describeFileSystemAliases(array $args = [])
 * @method Promise describeFileSystemAliasesAsync(array $args = [])
 * @method Result describeFileSystems(array $args = [])
 * @method Promise describeFileSystemsAsync(array $args = [])
 * @method Result disassociateFileSystemAliases(array $args = [])
 * @method Promise disassociateFileSystemAliasesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateFileSystem(array $args = [])
 * @method Promise updateFileSystemAsync(array $args = [])
 */
class FSxClient extends AwsClient {}
