<?php
namespace Aws\ComprehendMedical;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Comprehend Medical** service.
 * @method Result describeEntitiesDetectionV2Job(array $args = [])
 * @method Promise describeEntitiesDetectionV2JobAsync(array $args = [])
 * @method Result describeICD10CMInferenceJob(array $args = [])
 * @method Promise describeICD10CMInferenceJobAsync(array $args = [])
 * @method Result describePHIDetectionJob(array $args = [])
 * @method Promise describePHIDetectionJobAsync(array $args = [])
 * @method Result describeRxNormInferenceJob(array $args = [])
 * @method Promise describeRxNormInferenceJobAsync(array $args = [])
 * @method Result detectEntities(array $args = [])
 * @method Promise detectEntitiesAsync(array $args = [])
 * @method Result detectEntitiesV2(array $args = [])
 * @method Promise detectEntitiesV2Async(array $args = [])
 * @method Result detectPHI(array $args = [])
 * @method Promise detectPHIAsync(array $args = [])
 * @method Result inferICD10CM(array $args = [])
 * @method Promise inferICD10CMAsync(array $args = [])
 * @method Result inferRxNorm(array $args = [])
 * @method Promise inferRxNormAsync(array $args = [])
 * @method Result listEntitiesDetectionV2Jobs(array $args = [])
 * @method Promise listEntitiesDetectionV2JobsAsync(array $args = [])
 * @method Result listICD10CMInferenceJobs(array $args = [])
 * @method Promise listICD10CMInferenceJobsAsync(array $args = [])
 * @method Result listPHIDetectionJobs(array $args = [])
 * @method Promise listPHIDetectionJobsAsync(array $args = [])
 * @method Result listRxNormInferenceJobs(array $args = [])
 * @method Promise listRxNormInferenceJobsAsync(array $args = [])
 * @method Result startEntitiesDetectionV2Job(array $args = [])
 * @method Promise startEntitiesDetectionV2JobAsync(array $args = [])
 * @method Result startICD10CMInferenceJob(array $args = [])
 * @method Promise startICD10CMInferenceJobAsync(array $args = [])
 * @method Result startPHIDetectionJob(array $args = [])
 * @method Promise startPHIDetectionJobAsync(array $args = [])
 * @method Result startRxNormInferenceJob(array $args = [])
 * @method Promise startRxNormInferenceJobAsync(array $args = [])
 * @method Result stopEntitiesDetectionV2Job(array $args = [])
 * @method Promise stopEntitiesDetectionV2JobAsync(array $args = [])
 * @method Result stopICD10CMInferenceJob(array $args = [])
 * @method Promise stopICD10CMInferenceJobAsync(array $args = [])
 * @method Result stopPHIDetectionJob(array $args = [])
 * @method Promise stopPHIDetectionJobAsync(array $args = [])
 * @method Result stopRxNormInferenceJob(array $args = [])
 * @method Promise stopRxNormInferenceJobAsync(array $args = [])
 */
class ComprehendMedicalClient extends AwsClient {}
