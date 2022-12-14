<?php
namespace Aws\FraudDetector;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Fraud Detector** service.
 * @method Result batchCreateVariable(array $args = [])
 * @method Promise batchCreateVariableAsync(array $args = [])
 * @method Result batchGetVariable(array $args = [])
 * @method Promise batchGetVariableAsync(array $args = [])
 * @method Result createDetectorVersion(array $args = [])
 * @method Promise createDetectorVersionAsync(array $args = [])
 * @method Result createModel(array $args = [])
 * @method Promise createModelAsync(array $args = [])
 * @method Result createModelVersion(array $args = [])
 * @method Promise createModelVersionAsync(array $args = [])
 * @method Result createRule(array $args = [])
 * @method Promise createRuleAsync(array $args = [])
 * @method Result createVariable(array $args = [])
 * @method Promise createVariableAsync(array $args = [])
 * @method Result deleteDetector(array $args = [])
 * @method Promise deleteDetectorAsync(array $args = [])
 * @method Result deleteDetectorVersion(array $args = [])
 * @method Promise deleteDetectorVersionAsync(array $args = [])
 * @method Result deleteEntityType(array $args = [])
 * @method Promise deleteEntityTypeAsync(array $args = [])
 * @method Result deleteEvent(array $args = [])
 * @method Promise deleteEventAsync(array $args = [])
 * @method Result deleteEventType(array $args = [])
 * @method Promise deleteEventTypeAsync(array $args = [])
 * @method Result deleteExternalModel(array $args = [])
 * @method Promise deleteExternalModelAsync(array $args = [])
 * @method Result deleteLabel(array $args = [])
 * @method Promise deleteLabelAsync(array $args = [])
 * @method Result deleteModel(array $args = [])
 * @method Promise deleteModelAsync(array $args = [])
 * @method Result deleteModelVersion(array $args = [])
 * @method Promise deleteModelVersionAsync(array $args = [])
 * @method Result deleteOutcome(array $args = [])
 * @method Promise deleteOutcomeAsync(array $args = [])
 * @method Result deleteRule(array $args = [])
 * @method Promise deleteRuleAsync(array $args = [])
 * @method Result deleteVariable(array $args = [])
 * @method Promise deleteVariableAsync(array $args = [])
 * @method Result describeDetector(array $args = [])
 * @method Promise describeDetectorAsync(array $args = [])
 * @method Result describeModelVersions(array $args = [])
 * @method Promise describeModelVersionsAsync(array $args = [])
 * @method Result getDetectorVersion(array $args = [])
 * @method Promise getDetectorVersionAsync(array $args = [])
 * @method Result getDetectors(array $args = [])
 * @method Promise getDetectorsAsync(array $args = [])
 * @method Result getEntityTypes(array $args = [])
 * @method Promise getEntityTypesAsync(array $args = [])
 * @method Result getEventPrediction(array $args = [])
 * @method Promise getEventPredictionAsync(array $args = [])
 * @method Result getEventTypes(array $args = [])
 * @method Promise getEventTypesAsync(array $args = [])
 * @method Result getExternalModels(array $args = [])
 * @method Promise getExternalModelsAsync(array $args = [])
 * @method Result getKMSEncryptionKey(array $args = [])
 * @method Promise getKMSEncryptionKeyAsync(array $args = [])
 * @method Result getLabels(array $args = [])
 * @method Promise getLabelsAsync(array $args = [])
 * @method Result getModelVersion(array $args = [])
 * @method Promise getModelVersionAsync(array $args = [])
 * @method Result getModels(array $args = [])
 * @method Promise getModelsAsync(array $args = [])
 * @method Result getOutcomes(array $args = [])
 * @method Promise getOutcomesAsync(array $args = [])
 * @method Result getRules(array $args = [])
 * @method Promise getRulesAsync(array $args = [])
 * @method Result getVariables(array $args = [])
 * @method Promise getVariablesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putDetector(array $args = [])
 * @method Promise putDetectorAsync(array $args = [])
 * @method Result putEntityType(array $args = [])
 * @method Promise putEntityTypeAsync(array $args = [])
 * @method Result putEventType(array $args = [])
 * @method Promise putEventTypeAsync(array $args = [])
 * @method Result putExternalModel(array $args = [])
 * @method Promise putExternalModelAsync(array $args = [])
 * @method Result putKMSEncryptionKey(array $args = [])
 * @method Promise putKMSEncryptionKeyAsync(array $args = [])
 * @method Result putLabel(array $args = [])
 * @method Promise putLabelAsync(array $args = [])
 * @method Result putOutcome(array $args = [])
 * @method Promise putOutcomeAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDetectorVersion(array $args = [])
 * @method Promise updateDetectorVersionAsync(array $args = [])
 * @method Result updateDetectorVersionMetadata(array $args = [])
 * @method Promise updateDetectorVersionMetadataAsync(array $args = [])
 * @method Result updateDetectorVersionStatus(array $args = [])
 * @method Promise updateDetectorVersionStatusAsync(array $args = [])
 * @method Result updateModel(array $args = [])
 * @method Promise updateModelAsync(array $args = [])
 * @method Result updateModelVersion(array $args = [])
 * @method Promise updateModelVersionAsync(array $args = [])
 * @method Result updateModelVersionStatus(array $args = [])
 * @method Promise updateModelVersionStatusAsync(array $args = [])
 * @method Result updateRuleMetadata(array $args = [])
 * @method Promise updateRuleMetadataAsync(array $args = [])
 * @method Result updateRuleVersion(array $args = [])
 * @method Promise updateRuleVersionAsync(array $args = [])
 * @method Result updateVariable(array $args = [])
 * @method Promise updateVariableAsync(array $args = [])
 */
class FraudDetectorClient extends AwsClient {}
