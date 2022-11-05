<?php
namespace Aws\IoTThingsGraph;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT Things Graph** service.
 * @method Result associateEntityToThing(array $args = [])
 * @method Promise associateEntityToThingAsync(array $args = [])
 * @method Result createFlowTemplate(array $args = [])
 * @method Promise createFlowTemplateAsync(array $args = [])
 * @method Result createSystemInstance(array $args = [])
 * @method Promise createSystemInstanceAsync(array $args = [])
 * @method Result createSystemTemplate(array $args = [])
 * @method Promise createSystemTemplateAsync(array $args = [])
 * @method Result deleteFlowTemplate(array $args = [])
 * @method Promise deleteFlowTemplateAsync(array $args = [])
 * @method Result deleteNamespace(array $args = [])
 * @method Promise deleteNamespaceAsync(array $args = [])
 * @method Result deleteSystemInstance(array $args = [])
 * @method Promise deleteSystemInstanceAsync(array $args = [])
 * @method Result deleteSystemTemplate(array $args = [])
 * @method Promise deleteSystemTemplateAsync(array $args = [])
 * @method Result deploySystemInstance(array $args = [])
 * @method Promise deploySystemInstanceAsync(array $args = [])
 * @method Result deprecateFlowTemplate(array $args = [])
 * @method Promise deprecateFlowTemplateAsync(array $args = [])
 * @method Result deprecateSystemTemplate(array $args = [])
 * @method Promise deprecateSystemTemplateAsync(array $args = [])
 * @method Result describeNamespace(array $args = [])
 * @method Promise describeNamespaceAsync(array $args = [])
 * @method Result dissociateEntityFromThing(array $args = [])
 * @method Promise dissociateEntityFromThingAsync(array $args = [])
 * @method Result getEntities(array $args = [])
 * @method Promise getEntitiesAsync(array $args = [])
 * @method Result getFlowTemplate(array $args = [])
 * @method Promise getFlowTemplateAsync(array $args = [])
 * @method Result getFlowTemplateRevisions(array $args = [])
 * @method Promise getFlowTemplateRevisionsAsync(array $args = [])
 * @method Result getNamespaceDeletionStatus(array $args = [])
 * @method Promise getNamespaceDeletionStatusAsync(array $args = [])
 * @method Result getSystemInstance(array $args = [])
 * @method Promise getSystemInstanceAsync(array $args = [])
 * @method Result getSystemTemplate(array $args = [])
 * @method Promise getSystemTemplateAsync(array $args = [])
 * @method Result getSystemTemplateRevisions(array $args = [])
 * @method Promise getSystemTemplateRevisionsAsync(array $args = [])
 * @method Result getUploadStatus(array $args = [])
 * @method Promise getUploadStatusAsync(array $args = [])
 * @method Result listFlowExecutionMessages(array $args = [])
 * @method Promise listFlowExecutionMessagesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result searchEntities(array $args = [])
 * @method Promise searchEntitiesAsync(array $args = [])
 * @method Result searchFlowExecutions(array $args = [])
 * @method Promise searchFlowExecutionsAsync(array $args = [])
 * @method Result searchFlowTemplates(array $args = [])
 * @method Promise searchFlowTemplatesAsync(array $args = [])
 * @method Result searchSystemInstances(array $args = [])
 * @method Promise searchSystemInstancesAsync(array $args = [])
 * @method Result searchSystemTemplates(array $args = [])
 * @method Promise searchSystemTemplatesAsync(array $args = [])
 * @method Result searchThings(array $args = [])
 * @method Promise searchThingsAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result undeploySystemInstance(array $args = [])
 * @method Promise undeploySystemInstanceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateFlowTemplate(array $args = [])
 * @method Promise updateFlowTemplateAsync(array $args = [])
 * @method Result updateSystemTemplate(array $args = [])
 * @method Promise updateSystemTemplateAsync(array $args = [])
 * @method Result uploadEntityDefinitions(array $args = [])
 * @method Promise uploadEntityDefinitionsAsync(array $args = [])
 */
class IoTThingsGraphClient extends AwsClient {}
