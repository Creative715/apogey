<?php
namespace Aws\GlueDataBrew;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Glue DataBrew** service.
 * @method Result batchDeleteRecipeVersion(array $args = [])
 * @method Promise batchDeleteRecipeVersionAsync(array $args = [])
 * @method Result createDataset(array $args = [])
 * @method Promise createDatasetAsync(array $args = [])
 * @method Result createProfileJob(array $args = [])
 * @method Promise createProfileJobAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result createRecipe(array $args = [])
 * @method Promise createRecipeAsync(array $args = [])
 * @method Result createRecipeJob(array $args = [])
 * @method Promise createRecipeJobAsync(array $args = [])
 * @method Result createSchedule(array $args = [])
 * @method Promise createScheduleAsync(array $args = [])
 * @method Result deleteDataset(array $args = [])
 * @method Promise deleteDatasetAsync(array $args = [])
 * @method Result deleteJob(array $args = [])
 * @method Promise deleteJobAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result deleteRecipeVersion(array $args = [])
 * @method Promise deleteRecipeVersionAsync(array $args = [])
 * @method Result deleteSchedule(array $args = [])
 * @method Promise deleteScheduleAsync(array $args = [])
 * @method Result describeDataset(array $args = [])
 * @method Promise describeDatasetAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result describeJobRun(array $args = [])
 * @method Promise describeJobRunAsync(array $args = [])
 * @method Result describeProject(array $args = [])
 * @method Promise describeProjectAsync(array $args = [])
 * @method Result describeRecipe(array $args = [])
 * @method Promise describeRecipeAsync(array $args = [])
 * @method Result describeSchedule(array $args = [])
 * @method Promise describeScheduleAsync(array $args = [])
 * @method Result listDatasets(array $args = [])
 * @method Promise listDatasetsAsync(array $args = [])
 * @method Result listJobRuns(array $args = [])
 * @method Promise listJobRunsAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listRecipeVersions(array $args = [])
 * @method Promise listRecipeVersionsAsync(array $args = [])
 * @method Result listRecipes(array $args = [])
 * @method Promise listRecipesAsync(array $args = [])
 * @method Result listSchedules(array $args = [])
 * @method Promise listSchedulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result publishRecipe(array $args = [])
 * @method Promise publishRecipeAsync(array $args = [])
 * @method Result sendProjectSessionAction(array $args = [])
 * @method Promise sendProjectSessionActionAsync(array $args = [])
 * @method Result startJobRun(array $args = [])
 * @method Promise startJobRunAsync(array $args = [])
 * @method Result startProjectSession(array $args = [])
 * @method Promise startProjectSessionAsync(array $args = [])
 * @method Result stopJobRun(array $args = [])
 * @method Promise stopJobRunAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDataset(array $args = [])
 * @method Promise updateDatasetAsync(array $args = [])
 * @method Result updateProfileJob(array $args = [])
 * @method Promise updateProfileJobAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 * @method Result updateRecipe(array $args = [])
 * @method Promise updateRecipeAsync(array $args = [])
 * @method Result updateRecipeJob(array $args = [])
 * @method Promise updateRecipeJobAsync(array $args = [])
 * @method Result updateSchedule(array $args = [])
 * @method Promise updateScheduleAsync(array $args = [])
 */
class GlueDataBrewClient extends AwsClient {}
