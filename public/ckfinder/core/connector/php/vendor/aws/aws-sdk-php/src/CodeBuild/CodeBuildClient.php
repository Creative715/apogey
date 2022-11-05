<?php
namespace Aws\CodeBuild;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method Result batchDeleteBuilds(array $args = [])
 * @method Promise batchDeleteBuildsAsync(array $args = [])
 * @method Result batchGetBuildBatches(array $args = [])
 * @method Promise batchGetBuildBatchesAsync(array $args = [])
 * @method Result batchGetBuilds(array $args = [])
 * @method Promise batchGetBuildsAsync(array $args = [])
 * @method Result batchGetProjects(array $args = [])
 * @method Promise batchGetProjectsAsync(array $args = [])
 * @method Result batchGetReportGroups(array $args = [])
 * @method Promise batchGetReportGroupsAsync(array $args = [])
 * @method Result batchGetReports(array $args = [])
 * @method Promise batchGetReportsAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result createReportGroup(array $args = [])
 * @method Promise createReportGroupAsync(array $args = [])
 * @method Result createWebhook(array $args = [])
 * @method Promise createWebhookAsync(array $args = [])
 * @method Result deleteBuildBatch(array $args = [])
 * @method Promise deleteBuildBatchAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result deleteReport(array $args = [])
 * @method Promise deleteReportAsync(array $args = [])
 * @method Result deleteReportGroup(array $args = [])
 * @method Promise deleteReportGroupAsync(array $args = [])
 * @method Result deleteResourcePolicy(array $args = [])
 * @method Promise deleteResourcePolicyAsync(array $args = [])
 * @method Result deleteSourceCredentials(array $args = [])
 * @method Promise deleteSourceCredentialsAsync(array $args = [])
 * @method Result deleteWebhook(array $args = [])
 * @method Promise deleteWebhookAsync(array $args = [])
 * @method Result describeCodeCoverages(array $args = [])
 * @method Promise describeCodeCoveragesAsync(array $args = [])
 * @method Result describeTestCases(array $args = [])
 * @method Promise describeTestCasesAsync(array $args = [])
 * @method Result getReportGroupTrend(array $args = [])
 * @method Promise getReportGroupTrendAsync(array $args = [])
 * @method Result getResourcePolicy(array $args = [])
 * @method Promise getResourcePolicyAsync(array $args = [])
 * @method Result importSourceCredentials(array $args = [])
 * @method Promise importSourceCredentialsAsync(array $args = [])
 * @method Result invalidateProjectCache(array $args = [])
 * @method Promise invalidateProjectCacheAsync(array $args = [])
 * @method Result listBuildBatches(array $args = [])
 * @method Promise listBuildBatchesAsync(array $args = [])
 * @method Result listBuildBatchesForProject(array $args = [])
 * @method Promise listBuildBatchesForProjectAsync(array $args = [])
 * @method Result listBuilds(array $args = [])
 * @method Promise listBuildsAsync(array $args = [])
 * @method Result listBuildsForProject(array $args = [])
 * @method Promise listBuildsForProjectAsync(array $args = [])
 * @method Result listCuratedEnvironmentImages(array $args = [])
 * @method Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listReportGroups(array $args = [])
 * @method Promise listReportGroupsAsync(array $args = [])
 * @method Result listReports(array $args = [])
 * @method Promise listReportsAsync(array $args = [])
 * @method Result listReportsForReportGroup(array $args = [])
 * @method Promise listReportsForReportGroupAsync(array $args = [])
 * @method Result listSharedProjects(array $args = [])
 * @method Promise listSharedProjectsAsync(array $args = [])
 * @method Result listSharedReportGroups(array $args = [])
 * @method Promise listSharedReportGroupsAsync(array $args = [])
 * @method Result listSourceCredentials(array $args = [])
 * @method Promise listSourceCredentialsAsync(array $args = [])
 * @method Result putResourcePolicy(array $args = [])
 * @method Promise putResourcePolicyAsync(array $args = [])
 * @method Result retryBuild(array $args = [])
 * @method Promise retryBuildAsync(array $args = [])
 * @method Result retryBuildBatch(array $args = [])
 * @method Promise retryBuildBatchAsync(array $args = [])
 * @method Result startBuild(array $args = [])
 * @method Promise startBuildAsync(array $args = [])
 * @method Result startBuildBatch(array $args = [])
 * @method Promise startBuildBatchAsync(array $args = [])
 * @method Result stopBuild(array $args = [])
 * @method Promise stopBuildAsync(array $args = [])
 * @method Result stopBuildBatch(array $args = [])
 * @method Promise stopBuildBatchAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 * @method Result updateReportGroup(array $args = [])
 * @method Promise updateReportGroupAsync(array $args = [])
 * @method Result updateWebhook(array $args = [])
 * @method Promise updateWebhookAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}
