<?php
namespace Aws;

use Aws\AccessAnalyzer\AccessAnalyzerClient;
use Aws\Acm\AcmClient;
use Aws\ACMPCA\ACMPCAClient;
use Aws\AlexaForBusiness\AlexaForBusinessClient;
use Aws\Amplify\AmplifyClient;
use Aws\AmplifyBackend\AmplifyBackendClient;
use Aws\ApiGateway\ApiGatewayClient;
use Aws\ApiGatewayManagementApi\ApiGatewayManagementApiClient;
use Aws\ApiGatewayV2\ApiGatewayV2Client;
use Aws\AppConfig\AppConfigClient;
use Aws\Appflow\AppflowClient;
use Aws\AppIntegrationsService\AppIntegrationsServiceClient;
use Aws\ApplicationAutoScaling\ApplicationAutoScalingClient;
use Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient;
use Aws\ApplicationInsights\ApplicationInsightsClient;
use Aws\AppMesh\AppMeshClient;
use Aws\AppRegistry\AppRegistryClient;
use Aws\Appstream\AppstreamClient;
use Aws\AppSync\AppSyncClient;
use Aws\Athena\AthenaClient;
use Aws\AuditManager\AuditManagerClient;
use Aws\AugmentedAIRuntime\AugmentedAIRuntimeClient;
use Aws\AutoScaling\AutoScalingClient;
use Aws\AutoScalingPlans\AutoScalingPlansClient;
use Aws\Backup\BackupClient;
use Aws\Batch\BatchClient;
use Aws\Braket\BraketClient;
use Aws\Budgets\BudgetsClient;
use Aws\Chime\ChimeClient;
use Aws\Cloud9\Cloud9Client;
use Aws\CloudDirectory\CloudDirectoryClient;
use Aws\CloudFormation\CloudFormationClient;
use Aws\CloudFront\CloudFrontClient;
use Aws\CloudHsm\CloudHsmClient;
use Aws\CloudHSMV2\CloudHSMV2Client;
use Aws\CloudSearch\CloudSearchClient;
use Aws\CloudSearchDomain\CloudSearchDomainClient;
use Aws\CloudTrail\CloudTrailClient;
use Aws\CloudWatch\CloudWatchClient;
use Aws\CloudWatchEvents\CloudWatchEventsClient;
use Aws\CloudWatchLogs\CloudWatchLogsClient;
use Aws\CodeArtifact\CodeArtifactClient;
use Aws\CodeBuild\CodeBuildClient;
use Aws\CodeCommit\CodeCommitClient;
use Aws\CodeDeploy\CodeDeployClient;
use Aws\CodeGuruProfiler\CodeGuruProfilerClient;
use Aws\CodeGuruReviewer\CodeGuruReviewerClient;
use Aws\CodePipeline\CodePipelineClient;
use Aws\CodeStar\CodeStarClient;
use Aws\CodeStarconnections\CodeStarconnectionsClient;
use Aws\CodeStarNotifications\CodeStarNotificationsClient;
use Aws\CognitoIdentity\CognitoIdentityClient;
use Aws\CognitoIdentityProvider\CognitoIdentityProviderClient;
use Aws\CognitoSync\CognitoSyncClient;
use Aws\Comprehend\ComprehendClient;
use Aws\ComprehendMedical\ComprehendMedicalClient;
use Aws\ComputeOptimizer\ComputeOptimizerClient;
use Aws\ConfigService\ConfigServiceClient;
use Aws\Connect\ConnectClient;
use Aws\ConnectContactLens\ConnectContactLensClient;
use Aws\ConnectParticipant\ConnectParticipantClient;
use Aws\CostandUsageReportService\CostandUsageReportServiceClient;
use Aws\CostExplorer\CostExplorerClient;
use Aws\CustomerProfiles\CustomerProfilesClient;
use Aws\DatabaseMigrationService\DatabaseMigrationServiceClient;
use Aws\DataExchange\DataExchangeClient;
use Aws\DataPipeline\DataPipelineClient;
use Aws\DataSync\DataSyncClient;
use Aws\DAX\DAXClient;
use Aws\Detective\DetectiveClient;
use Aws\DeviceFarm\DeviceFarmClient;
use Aws\DevOpsGuru\DevOpsGuruClient;
use Aws\DirectConnect\DirectConnectClient;
use Aws\DirectoryService\DirectoryServiceClient;
use Aws\DLM\DLMClient;
use Aws\DocDB\DocDBClient;
use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDbStreams\DynamoDbStreamsClient;
use Aws\EBS\EBSClient;
use Aws\Ec2\Ec2Client;
use Aws\EC2InstanceConnect\EC2InstanceConnectClient;
use Aws\Ecr\EcrClient;
use Aws\ECRPublic\ECRPublicClient;
use Aws\Ecs\EcsClient;
use Aws\Efs\EfsClient;
use Aws\EKS\EKSClient;
use Aws\ElastiCache\ElastiCacheClient;
use Aws\ElasticBeanstalk\ElasticBeanstalkClient;
use Aws\ElasticInference\ElasticInferenceClient;
use Aws\ElasticLoadBalancing\ElasticLoadBalancingClient;
use Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client;
use Aws\ElasticsearchService\ElasticsearchServiceClient;
use Aws\ElasticTranscoder\ElasticTranscoderClient;
use Aws\Emr\EmrClient;
use Aws\EMRContainers\EMRContainersClient;
use Aws\EventBridge\EventBridgeClient;
use Aws\Firehose\FirehoseClient;
use Aws\FMS\FMSClient;
use Aws\ForecastQueryService\ForecastQueryServiceClient;
use Aws\ForecastService\ForecastServiceClient;
use Aws\FraudDetector\FraudDetectorClient;
use Aws\FSx\FSxClient;
use Aws\GameLift\GameLiftClient;
use Aws\Glacier\GlacierClient;
use Aws\GlobalAccelerator\GlobalAcceleratorClient;
use Aws\Glue\GlueClient;
use Aws\GlueDataBrew\GlueDataBrewClient;
use Aws\Greengrass\GreengrassClient;
use Aws\GreengrassV2\GreengrassV2Client;
use Aws\GroundStation\GroundStationClient;
use Aws\GuardDuty\GuardDutyClient;
use Aws\Health\HealthClient;
use Aws\HealthLake\HealthLakeClient;
use Aws\Honeycode\HoneycodeClient;
use Aws\Iam\IamClient;
use Aws\IdentityStore\IdentityStoreClient;
use Aws\imagebuilder\imagebuilderClient;
use Aws\ImportExport\ImportExportClient;
use Aws\Inspector\InspectorClient;
use Aws\Iot\IotClient;
use Aws\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient;
use Aws\IoT1ClickProjects\IoT1ClickProjectsClient;
use Aws\IoTAnalytics\IoTAnalyticsClient;
use Aws\IotDataPlane\IotDataPlaneClient;
use Aws\IoTDeviceAdvisor\IoTDeviceAdvisorClient;
use Aws\IoTEvents\IoTEventsClient;
use Aws\IoTEventsData\IoTEventsDataClient;
use Aws\IoTFleetHub\IoTFleetHubClient;
use Aws\IoTJobsDataPlane\IoTJobsDataPlaneClient;
use Aws\IoTSecureTunneling\IoTSecureTunnelingClient;
use Aws\IoTSiteWise\IoTSiteWiseClient;
use Aws\IoTThingsGraph\IoTThingsGraphClient;
use Aws\IoTWireless\IoTWirelessClient;
use Aws\IVS\IVSClient;
use Aws\Kafka\KafkaClient;
use Aws\kendra\kendraClient;
use Aws\Kinesis\KinesisClient;
use Aws\KinesisAnalytics\KinesisAnalyticsClient;
use Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client;
use Aws\KinesisVideo\KinesisVideoClient;
use Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient;
use Aws\KinesisVideoMedia\KinesisVideoMediaClient;
use Aws\KinesisVideoSignalingChannels\KinesisVideoSignalingChannelsClient;
use Aws\Kms\KmsClient;
use Aws\LakeFormation\LakeFormationClient;
use Aws\Lambda\LambdaClient;
use Aws\LexModelBuildingService\LexModelBuildingServiceClient;
use Aws\LexModelsV2\LexModelsV2Client;
use Aws\LexRuntimeService\LexRuntimeServiceClient;
use Aws\LexRuntimeV2\LexRuntimeV2Client;
use Aws\LicenseManager\LicenseManagerClient;
use Aws\Lightsail\LightsailClient;
use Aws\LocationService\LocationServiceClient;
use Aws\LookoutforVision\LookoutforVisionClient;
use Aws\MachineLearning\MachineLearningClient;
use Aws\Macie\MacieClient;
use Aws\Macie2\Macie2Client;
use Aws\ManagedBlockchain\ManagedBlockchainClient;
use Aws\MarketplaceCatalog\MarketplaceCatalogClient;
use Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient;
use Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient;
use Aws\MarketplaceMetering\MarketplaceMeteringClient;
use Aws\MediaConnect\MediaConnectClient;
use Aws\MediaConvert\MediaConvertClient;
use Aws\MediaLive\MediaLiveClient;
use Aws\MediaPackage\MediaPackageClient;
use Aws\MediaPackageVod\MediaPackageVodClient;
use Aws\MediaStore\MediaStoreClient;
use Aws\MediaStoreData\MediaStoreDataClient;
use Aws\MediaTailor\MediaTailorClient;
use Aws\MigrationHub\MigrationHubClient;
use Aws\MigrationHubConfig\MigrationHubConfigClient;
use Aws\Mobile\MobileClient;
use Aws\MQ\MQClient;
use Aws\MTurk\MTurkClient;
use Aws\MWAA\MWAAClient;
use Aws\Neptune\NeptuneClient;
use Aws\NetworkFirewall\NetworkFirewallClient;
use Aws\NetworkManager\NetworkManagerClient;
use Aws\OpsWorks\OpsWorksClient;
use Aws\OpsWorksCM\OpsWorksCMClient;
use Aws\Organizations\OrganizationsClient;
use Aws\Outposts\OutpostsClient;
use Aws\Personalize\PersonalizeClient;
use Aws\PersonalizeEvents\PersonalizeEventsClient;
use Aws\PersonalizeRuntime\PersonalizeRuntimeClient;
use Aws\PI\PIClient;
use Aws\Pinpoint\PinpointClient;
use Aws\PinpointEmail\PinpointEmailClient;
use Aws\PinpointSMSVoice\PinpointSMSVoiceClient;
use Aws\Polly\PollyClient;
use Aws\Pricing\PricingClient;
use Aws\PrometheusService\PrometheusServiceClient;
use Aws\QLDB\QLDBClient;
use Aws\QLDBSession\QLDBSessionClient;
use Aws\QuickSight\QuickSightClient;
use Aws\RAM\RAMClient;
use Aws\Rds\RdsClient;
use Aws\RDSDataService\RDSDataServiceClient;
use Aws\Redshift\RedshiftClient;
use Aws\RedshiftDataAPIService\RedshiftDataAPIServiceClient;
use Aws\Rekognition\RekognitionClient;
use Aws\ResourceGroups\ResourceGroupsClient;
use Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient;
use Aws\RoboMaker\RoboMakerClient;
use Aws\Route53\Route53Client;
use Aws\Route53Domains\Route53DomainsClient;
use Aws\Route53Resolver\Route53ResolverClient;
use Aws\S3\S3Client;
use Aws\S3\S3MultiRegionClient;
use Aws\S3Control\S3ControlClient;
use Aws\S3Outposts\S3OutpostsClient;
use Aws\SageMaker\SageMakerClient;
use Aws\SagemakerEdgeManager\SagemakerEdgeManagerClient;
use Aws\SageMakerFeatureStoreRuntime\SageMakerFeatureStoreRuntimeClient;
use Aws\SageMakerRuntime\SageMakerRuntimeClient;
use Aws\SavingsPlans\SavingsPlansClient;
use Aws\Schemas\SchemasClient;
use Aws\SecretsManager\SecretsManagerClient;
use Aws\SecurityHub\SecurityHubClient;
use Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient;
use Aws\ServiceCatalog\ServiceCatalogClient;
use Aws\ServiceDiscovery\ServiceDiscoveryClient;
use Aws\ServiceQuotas\ServiceQuotasClient;
use Aws\Ses\SesClient;
use Aws\SesV2\SesV2Client;
use Aws\Sfn\SfnClient;
use Aws\Shield\ShieldClient;
use Aws\signer\signerClient;
use Aws\Sms\SmsClient;
use Aws\SnowBall\SnowBallClient;
use Aws\Sns\SnsClient;
use Aws\Sqs\SqsClient;
use Aws\Ssm\SsmClient;
use Aws\SSO\SSOClient;
use Aws\SSOAdmin\SSOAdminClient;
use Aws\SSOOIDC\SSOOIDCClient;
use Aws\StorageGateway\StorageGatewayClient;
use Aws\Sts\StsClient;
use Aws\Support\SupportClient;
use Aws\Swf\SwfClient;
use Aws\Synthetics\SyntheticsClient;
use Aws\Textract\TextractClient;
use Aws\TimestreamQuery\TimestreamQueryClient;
use Aws\TimestreamWrite\TimestreamWriteClient;
use Aws\TranscribeService\TranscribeServiceClient;
use Aws\Transfer\TransferClient;
use Aws\Translate\TranslateClient;
use Aws\Waf\WafClient;
use Aws\WafRegional\WafRegionalClient;
use Aws\WAFV2\WAFV2Client;
use Aws\WellArchitected\WellArchitectedClient;
use Aws\WorkDocs\WorkDocsClient;
use Aws\WorkLink\WorkLinkClient;
use Aws\WorkMail\WorkMailClient;
use Aws\WorkMailMessageFlow\WorkMailMessageFlowClient;
use Aws\WorkSpaces\WorkSpacesClient;
use Aws\XRay\XRayClient;
use BadMethodCallException;
use InvalidArgumentException;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method ACMPCAClient createACMPCA(array $args = [])
 * @method MultiRegionClient createMultiRegionACMPCA(array $args = [])
 * @method AccessAnalyzerClient createAccessAnalyzer(array $args = [])
 * @method MultiRegionClient createMultiRegionAccessAnalyzer(array $args = [])
 * @method AcmClient createAcm(array $args = [])
 * @method MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method AlexaForBusinessClient createAlexaForBusiness(array $args = [])
 * @method MultiRegionClient createMultiRegionAlexaForBusiness(array $args = [])
 * @method AmplifyClient createAmplify(array $args = [])
 * @method MultiRegionClient createMultiRegionAmplify(array $args = [])
 * @method AmplifyBackendClient createAmplifyBackend(array $args = [])
 * @method MultiRegionClient createMultiRegionAmplifyBackend(array $args = [])
 * @method ApiGatewayClient createApiGateway(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method ApiGatewayManagementApiClient createApiGatewayManagementApi(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGatewayManagementApi(array $args = [])
 * @method ApiGatewayV2Client createApiGatewayV2(array $args = [])
 * @method MultiRegionClient createMultiRegionApiGatewayV2(array $args = [])
 * @method AppConfigClient createAppConfig(array $args = [])
 * @method MultiRegionClient createMultiRegionAppConfig(array $args = [])
 * @method AppIntegrationsServiceClient createAppIntegrationsService(array $args = [])
 * @method MultiRegionClient createMultiRegionAppIntegrationsService(array $args = [])
 * @method AppMeshClient createAppMesh(array $args = [])
 * @method MultiRegionClient createMultiRegionAppMesh(array $args = [])
 * @method AppRegistryClient createAppRegistry(array $args = [])
 * @method MultiRegionClient createMultiRegionAppRegistry(array $args = [])
 * @method AppSyncClient createAppSync(array $args = [])
 * @method MultiRegionClient createMultiRegionAppSync(array $args = [])
 * @method AppflowClient createAppflow(array $args = [])
 * @method MultiRegionClient createMultiRegionAppflow(array $args = [])
 * @method ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method ApplicationInsightsClient createApplicationInsights(array $args = [])
 * @method MultiRegionClient createMultiRegionApplicationInsights(array $args = [])
 * @method AppstreamClient createAppstream(array $args = [])
 * @method MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method AthenaClient createAthena(array $args = [])
 * @method MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method AuditManagerClient createAuditManager(array $args = [])
 * @method MultiRegionClient createMultiRegionAuditManager(array $args = [])
 * @method AugmentedAIRuntimeClient createAugmentedAIRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionAugmentedAIRuntime(array $args = [])
 * @method AutoScalingClient createAutoScaling(array $args = [])
 * @method MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method AutoScalingPlansClient createAutoScalingPlans(array $args = [])
 * @method MultiRegionClient createMultiRegionAutoScalingPlans(array $args = [])
 * @method BackupClient createBackup(array $args = [])
 * @method MultiRegionClient createMultiRegionBackup(array $args = [])
 * @method BatchClient createBatch(array $args = [])
 * @method MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method BraketClient createBraket(array $args = [])
 * @method MultiRegionClient createMultiRegionBraket(array $args = [])
 * @method BudgetsClient createBudgets(array $args = [])
 * @method MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method ChimeClient createChime(array $args = [])
 * @method MultiRegionClient createMultiRegionChime(array $args = [])
 * @method Cloud9Client createCloud9(array $args = [])
 * @method MultiRegionClient createMultiRegionCloud9(array $args = [])
 * @method CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method CloudFormationClient createCloudFormation(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method CloudFrontClient createCloudFront(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method CloudHsmClient createCloudHsm(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method CloudSearchClient createCloudSearch(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method CloudTrailClient createCloudTrail(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method CloudWatchClient createCloudWatch(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method CodeArtifactClient createCodeArtifact(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeArtifact(array $args = [])
 * @method CodeBuildClient createCodeBuild(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method CodeCommitClient createCodeCommit(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method CodeDeployClient createCodeDeploy(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method CodeGuruProfilerClient createCodeGuruProfiler(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeGuruProfiler(array $args = [])
 * @method CodeGuruReviewerClient createCodeGuruReviewer(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeGuruReviewer(array $args = [])
 * @method CodePipelineClient createCodePipeline(array $args = [])
 * @method MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method CodeStarClient createCodeStar(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method CodeStarNotificationsClient createCodeStarNotifications(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStarNotifications(array $args = [])
 * @method CodeStarconnectionsClient createCodeStarconnections(array $args = [])
 * @method MultiRegionClient createMultiRegionCodeStarconnections(array $args = [])
 * @method CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method CognitoSyncClient createCognitoSync(array $args = [])
 * @method MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method ComprehendClient createComprehend(array $args = [])
 * @method MultiRegionClient createMultiRegionComprehend(array $args = [])
 * @method ComprehendMedicalClient createComprehendMedical(array $args = [])
 * @method MultiRegionClient createMultiRegionComprehendMedical(array $args = [])
 * @method ComputeOptimizerClient createComputeOptimizer(array $args = [])
 * @method MultiRegionClient createMultiRegionComputeOptimizer(array $args = [])
 * @method ConfigServiceClient createConfigService(array $args = [])
 * @method MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method ConnectClient createConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionConnect(array $args = [])
 * @method ConnectContactLensClient createConnectContactLens(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectContactLens(array $args = [])
 * @method ConnectParticipantClient createConnectParticipant(array $args = [])
 * @method MultiRegionClient createMultiRegionConnectParticipant(array $args = [])
 * @method CostExplorerClient createCostExplorer(array $args = [])
 * @method MultiRegionClient createMultiRegionCostExplorer(array $args = [])
 * @method CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method CustomerProfilesClient createCustomerProfiles(array $args = [])
 * @method MultiRegionClient createMultiRegionCustomerProfiles(array $args = [])
 * @method DAXClient createDAX(array $args = [])
 * @method MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method DLMClient createDLM(array $args = [])
 * @method MultiRegionClient createMultiRegionDLM(array $args = [])
 * @method DataExchangeClient createDataExchange(array $args = [])
 * @method MultiRegionClient createMultiRegionDataExchange(array $args = [])
 * @method DataPipelineClient createDataPipeline(array $args = [])
 * @method MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method DataSyncClient createDataSync(array $args = [])
 * @method MultiRegionClient createMultiRegionDataSync(array $args = [])
 * @method DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method DetectiveClient createDetective(array $args = [])
 * @method MultiRegionClient createMultiRegionDetective(array $args = [])
 * @method DevOpsGuruClient createDevOpsGuru(array $args = [])
 * @method MultiRegionClient createMultiRegionDevOpsGuru(array $args = [])
 * @method DeviceFarmClient createDeviceFarm(array $args = [])
 * @method MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method DirectConnectClient createDirectConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method DirectoryServiceClient createDirectoryService(array $args = [])
 * @method MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method DocDBClient createDocDB(array $args = [])
 * @method MultiRegionClient createMultiRegionDocDB(array $args = [])
 * @method DynamoDbClient createDynamoDb(array $args = [])
 * @method MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method EBSClient createEBS(array $args = [])
 * @method MultiRegionClient createMultiRegionEBS(array $args = [])
 * @method EC2InstanceConnectClient createEC2InstanceConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionEC2InstanceConnect(array $args = [])
 * @method ECRPublicClient createECRPublic(array $args = [])
 * @method MultiRegionClient createMultiRegionECRPublic(array $args = [])
 * @method EKSClient createEKS(array $args = [])
 * @method MultiRegionClient createMultiRegionEKS(array $args = [])
 * @method EMRContainersClient createEMRContainers(array $args = [])
 * @method MultiRegionClient createMultiRegionEMRContainers(array $args = [])
 * @method Ec2Client createEc2(array $args = [])
 * @method MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method EcrClient createEcr(array $args = [])
 * @method MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method EcsClient createEcs(array $args = [])
 * @method MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method EfsClient createEfs(array $args = [])
 * @method MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method ElastiCacheClient createElastiCache(array $args = [])
 * @method MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method ElasticInferenceClient createElasticInference(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticInference(array $args = [])
 * @method ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method EmrClient createEmr(array $args = [])
 * @method MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method EventBridgeClient createEventBridge(array $args = [])
 * @method MultiRegionClient createMultiRegionEventBridge(array $args = [])
 * @method FMSClient createFMS(array $args = [])
 * @method MultiRegionClient createMultiRegionFMS(array $args = [])
 * @method FSxClient createFSx(array $args = [])
 * @method MultiRegionClient createMultiRegionFSx(array $args = [])
 * @method FirehoseClient createFirehose(array $args = [])
 * @method MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method ForecastQueryServiceClient createForecastQueryService(array $args = [])
 * @method MultiRegionClient createMultiRegionForecastQueryService(array $args = [])
 * @method ForecastServiceClient createForecastService(array $args = [])
 * @method MultiRegionClient createMultiRegionForecastService(array $args = [])
 * @method FraudDetectorClient createFraudDetector(array $args = [])
 * @method MultiRegionClient createMultiRegionFraudDetector(array $args = [])
 * @method GameLiftClient createGameLift(array $args = [])
 * @method MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method GlacierClient createGlacier(array $args = [])
 * @method MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method GlobalAcceleratorClient createGlobalAccelerator(array $args = [])
 * @method MultiRegionClient createMultiRegionGlobalAccelerator(array $args = [])
 * @method GlueClient createGlue(array $args = [])
 * @method MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method GlueDataBrewClient createGlueDataBrew(array $args = [])
 * @method MultiRegionClient createMultiRegionGlueDataBrew(array $args = [])
 * @method GreengrassClient createGreengrass(array $args = [])
 * @method MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method GreengrassV2Client createGreengrassV2(array $args = [])
 * @method MultiRegionClient createMultiRegionGreengrassV2(array $args = [])
 * @method GroundStationClient createGroundStation(array $args = [])
 * @method MultiRegionClient createMultiRegionGroundStation(array $args = [])
 * @method GuardDutyClient createGuardDuty(array $args = [])
 * @method MultiRegionClient createMultiRegionGuardDuty(array $args = [])
 * @method HealthClient createHealth(array $args = [])
 * @method MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method HealthLakeClient createHealthLake(array $args = [])
 * @method MultiRegionClient createMultiRegionHealthLake(array $args = [])
 * @method HoneycodeClient createHoneycode(array $args = [])
 * @method MultiRegionClient createMultiRegionHoneycode(array $args = [])
 * @method IVSClient createIVS(array $args = [])
 * @method MultiRegionClient createMultiRegionIVS(array $args = [])
 * @method IamClient createIam(array $args = [])
 * @method MultiRegionClient createMultiRegionIam(array $args = [])
 * @method IdentityStoreClient createIdentityStore(array $args = [])
 * @method MultiRegionClient createMultiRegionIdentityStore(array $args = [])
 * @method ImportExportClient createImportExport(array $args = [])
 * @method MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method InspectorClient createInspector(array $args = [])
 * @method MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method IoT1ClickDevicesServiceClient createIoT1ClickDevicesService(array $args = [])
 * @method MultiRegionClient createMultiRegionIoT1ClickDevicesService(array $args = [])
 * @method IoT1ClickProjectsClient createIoT1ClickProjects(array $args = [])
 * @method MultiRegionClient createMultiRegionIoT1ClickProjects(array $args = [])
 * @method IoTAnalyticsClient createIoTAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTAnalytics(array $args = [])
 * @method IoTDeviceAdvisorClient createIoTDeviceAdvisor(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTDeviceAdvisor(array $args = [])
 * @method IoTEventsClient createIoTEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTEvents(array $args = [])
 * @method IoTEventsDataClient createIoTEventsData(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTEventsData(array $args = [])
 * @method IoTFleetHubClient createIoTFleetHub(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTFleetHub(array $args = [])
 * @method IoTJobsDataPlaneClient createIoTJobsDataPlane(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTJobsDataPlane(array $args = [])
 * @method IoTSecureTunnelingClient createIoTSecureTunneling(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTSecureTunneling(array $args = [])
 * @method IoTSiteWiseClient createIoTSiteWise(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTSiteWise(array $args = [])
 * @method IoTThingsGraphClient createIoTThingsGraph(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTThingsGraph(array $args = [])
 * @method IoTWirelessClient createIoTWireless(array $args = [])
 * @method MultiRegionClient createMultiRegionIoTWireless(array $args = [])
 * @method IotClient createIot(array $args = [])
 * @method MultiRegionClient createMultiRegionIot(array $args = [])
 * @method IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method KafkaClient createKafka(array $args = [])
 * @method MultiRegionClient createMultiRegionKafka(array $args = [])
 * @method KinesisClient createKinesis(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method KinesisAnalyticsV2Client createKinesisAnalyticsV2(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisAnalyticsV2(array $args = [])
 * @method KinesisVideoClient createKinesisVideo(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideo(array $args = [])
 * @method KinesisVideoArchivedMediaClient createKinesisVideoArchivedMedia(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoArchivedMedia(array $args = [])
 * @method KinesisVideoMediaClient createKinesisVideoMedia(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoMedia(array $args = [])
 * @method KinesisVideoSignalingChannelsClient createKinesisVideoSignalingChannels(array $args = [])
 * @method MultiRegionClient createMultiRegionKinesisVideoSignalingChannels(array $args = [])
 * @method KmsClient createKms(array $args = [])
 * @method MultiRegionClient createMultiRegionKms(array $args = [])
 * @method LakeFormationClient createLakeFormation(array $args = [])
 * @method MultiRegionClient createMultiRegionLakeFormation(array $args = [])
 * @method LambdaClient createLambda(array $args = [])
 * @method MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method LexModelsV2Client createLexModelsV2(array $args = [])
 * @method MultiRegionClient createMultiRegionLexModelsV2(array $args = [])
 * @method LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method LexRuntimeV2Client createLexRuntimeV2(array $args = [])
 * @method MultiRegionClient createMultiRegionLexRuntimeV2(array $args = [])
 * @method LicenseManagerClient createLicenseManager(array $args = [])
 * @method MultiRegionClient createMultiRegionLicenseManager(array $args = [])
 * @method LightsailClient createLightsail(array $args = [])
 * @method MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method LocationServiceClient createLocationService(array $args = [])
 * @method MultiRegionClient createMultiRegionLocationService(array $args = [])
 * @method LookoutforVisionClient createLookoutforVision(array $args = [])
 * @method MultiRegionClient createMultiRegionLookoutforVision(array $args = [])
 * @method MQClient createMQ(array $args = [])
 * @method MultiRegionClient createMultiRegionMQ(array $args = [])
 * @method MTurkClient createMTurk(array $args = [])
 * @method MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method MWAAClient createMWAA(array $args = [])
 * @method MultiRegionClient createMultiRegionMWAA(array $args = [])
 * @method MachineLearningClient createMachineLearning(array $args = [])
 * @method MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method MacieClient createMacie(array $args = [])
 * @method MultiRegionClient createMultiRegionMacie(array $args = [])
 * @method Macie2Client createMacie2(array $args = [])
 * @method MultiRegionClient createMultiRegionMacie2(array $args = [])
 * @method ManagedBlockchainClient createManagedBlockchain(array $args = [])
 * @method MultiRegionClient createMultiRegionManagedBlockchain(array $args = [])
 * @method MarketplaceCatalogClient createMarketplaceCatalog(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceCatalog(array $args = [])
 * @method MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method MediaConnectClient createMediaConnect(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaConnect(array $args = [])
 * @method MediaConvertClient createMediaConvert(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaConvert(array $args = [])
 * @method MediaLiveClient createMediaLive(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaLive(array $args = [])
 * @method MediaPackageClient createMediaPackage(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaPackage(array $args = [])
 * @method MediaPackageVodClient createMediaPackageVod(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaPackageVod(array $args = [])
 * @method MediaStoreClient createMediaStore(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaStore(array $args = [])
 * @method MediaStoreDataClient createMediaStoreData(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaStoreData(array $args = [])
 * @method MediaTailorClient createMediaTailor(array $args = [])
 * @method MultiRegionClient createMultiRegionMediaTailor(array $args = [])
 * @method MigrationHubClient createMigrationHub(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method MigrationHubConfigClient createMigrationHubConfig(array $args = [])
 * @method MultiRegionClient createMultiRegionMigrationHubConfig(array $args = [])
 * @method MobileClient createMobile(array $args = [])
 * @method MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method NeptuneClient createNeptune(array $args = [])
 * @method MultiRegionClient createMultiRegionNeptune(array $args = [])
 * @method NetworkFirewallClient createNetworkFirewall(array $args = [])
 * @method MultiRegionClient createMultiRegionNetworkFirewall(array $args = [])
 * @method NetworkManagerClient createNetworkManager(array $args = [])
 * @method MultiRegionClient createMultiRegionNetworkManager(array $args = [])
 * @method OpsWorksClient createOpsWorks(array $args = [])
 * @method MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method OrganizationsClient createOrganizations(array $args = [])
 * @method MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method OutpostsClient createOutposts(array $args = [])
 * @method MultiRegionClient createMultiRegionOutposts(array $args = [])
 * @method PIClient createPI(array $args = [])
 * @method MultiRegionClient createMultiRegionPI(array $args = [])
 * @method PersonalizeClient createPersonalize(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalize(array $args = [])
 * @method PersonalizeEventsClient createPersonalizeEvents(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalizeEvents(array $args = [])
 * @method PersonalizeRuntimeClient createPersonalizeRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionPersonalizeRuntime(array $args = [])
 * @method PinpointClient createPinpoint(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method PinpointEmailClient createPinpointEmail(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpointEmail(array $args = [])
 * @method PinpointSMSVoiceClient createPinpointSMSVoice(array $args = [])
 * @method MultiRegionClient createMultiRegionPinpointSMSVoice(array $args = [])
 * @method PollyClient createPolly(array $args = [])
 * @method MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method PricingClient createPricing(array $args = [])
 * @method MultiRegionClient createMultiRegionPricing(array $args = [])
 * @method PrometheusServiceClient createPrometheusService(array $args = [])
 * @method MultiRegionClient createMultiRegionPrometheusService(array $args = [])
 * @method QLDBClient createQLDB(array $args = [])
 * @method MultiRegionClient createMultiRegionQLDB(array $args = [])
 * @method QLDBSessionClient createQLDBSession(array $args = [])
 * @method MultiRegionClient createMultiRegionQLDBSession(array $args = [])
 * @method QuickSightClient createQuickSight(array $args = [])
 * @method MultiRegionClient createMultiRegionQuickSight(array $args = [])
 * @method RAMClient createRAM(array $args = [])
 * @method MultiRegionClient createMultiRegionRAM(array $args = [])
 * @method RDSDataServiceClient createRDSDataService(array $args = [])
 * @method MultiRegionClient createMultiRegionRDSDataService(array $args = [])
 * @method RdsClient createRds(array $args = [])
 * @method MultiRegionClient createMultiRegionRds(array $args = [])
 * @method RedshiftClient createRedshift(array $args = [])
 * @method MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method RedshiftDataAPIServiceClient createRedshiftDataAPIService(array $args = [])
 * @method MultiRegionClient createMultiRegionRedshiftDataAPIService(array $args = [])
 * @method RekognitionClient createRekognition(array $args = [])
 * @method MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method ResourceGroupsClient createResourceGroups(array $args = [])
 * @method MultiRegionClient createMultiRegionResourceGroups(array $args = [])
 * @method ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method RoboMakerClient createRoboMaker(array $args = [])
 * @method MultiRegionClient createMultiRegionRoboMaker(array $args = [])
 * @method Route53Client createRoute53(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method Route53DomainsClient createRoute53Domains(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method Route53ResolverClient createRoute53Resolver(array $args = [])
 * @method MultiRegionClient createMultiRegionRoute53Resolver(array $args = [])
 * @method S3Client createS3(array $args = [])
 * @method S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method S3ControlClient createS3Control(array $args = [])
 * @method MultiRegionClient createMultiRegionS3Control(array $args = [])
 * @method S3OutpostsClient createS3Outposts(array $args = [])
 * @method MultiRegionClient createMultiRegionS3Outposts(array $args = [])
 * @method SSOClient createSSO(array $args = [])
 * @method MultiRegionClient createMultiRegionSSO(array $args = [])
 * @method SSOAdminClient createSSOAdmin(array $args = [])
 * @method MultiRegionClient createMultiRegionSSOAdmin(array $args = [])
 * @method SSOOIDCClient createSSOOIDC(array $args = [])
 * @method MultiRegionClient createMultiRegionSSOOIDC(array $args = [])
 * @method SageMakerClient createSageMaker(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMaker(array $args = [])
 * @method SageMakerFeatureStoreRuntimeClient createSageMakerFeatureStoreRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerFeatureStoreRuntime(array $args = [])
 * @method SageMakerRuntimeClient createSageMakerRuntime(array $args = [])
 * @method MultiRegionClient createMultiRegionSageMakerRuntime(array $args = [])
 * @method SagemakerEdgeManagerClient createSagemakerEdgeManager(array $args = [])
 * @method MultiRegionClient createMultiRegionSagemakerEdgeManager(array $args = [])
 * @method SavingsPlansClient createSavingsPlans(array $args = [])
 * @method MultiRegionClient createMultiRegionSavingsPlans(array $args = [])
 * @method SchemasClient createSchemas(array $args = [])
 * @method MultiRegionClient createMultiRegionSchemas(array $args = [])
 * @method SecretsManagerClient createSecretsManager(array $args = [])
 * @method MultiRegionClient createMultiRegionSecretsManager(array $args = [])
 * @method SecurityHubClient createSecurityHub(array $args = [])
 * @method MultiRegionClient createMultiRegionSecurityHub(array $args = [])
 * @method ServerlessApplicationRepositoryClient createServerlessApplicationRepository(array $args = [])
 * @method MultiRegionClient createMultiRegionServerlessApplicationRepository(array $args = [])
 * @method ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method ServiceDiscoveryClient createServiceDiscovery(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceDiscovery(array $args = [])
 * @method ServiceQuotasClient createServiceQuotas(array $args = [])
 * @method MultiRegionClient createMultiRegionServiceQuotas(array $args = [])
 * @method SesClient createSes(array $args = [])
 * @method MultiRegionClient createMultiRegionSes(array $args = [])
 * @method SesV2Client createSesV2(array $args = [])
 * @method MultiRegionClient createMultiRegionSesV2(array $args = [])
 * @method SfnClient createSfn(array $args = [])
 * @method MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method ShieldClient createShield(array $args = [])
 * @method MultiRegionClient createMultiRegionShield(array $args = [])
 * @method SmsClient createSms(array $args = [])
 * @method MultiRegionClient createMultiRegionSms(array $args = [])
 * @method SnowBallClient createSnowBall(array $args = [])
 * @method MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method SnsClient createSns(array $args = [])
 * @method MultiRegionClient createMultiRegionSns(array $args = [])
 * @method SqsClient createSqs(array $args = [])
 * @method MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method SsmClient createSsm(array $args = [])
 * @method MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method StorageGatewayClient createStorageGateway(array $args = [])
 * @method MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method StsClient createSts(array $args = [])
 * @method MultiRegionClient createMultiRegionSts(array $args = [])
 * @method SupportClient createSupport(array $args = [])
 * @method MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method SwfClient createSwf(array $args = [])
 * @method MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method SyntheticsClient createSynthetics(array $args = [])
 * @method MultiRegionClient createMultiRegionSynthetics(array $args = [])
 * @method TextractClient createTextract(array $args = [])
 * @method MultiRegionClient createMultiRegionTextract(array $args = [])
 * @method TimestreamQueryClient createTimestreamQuery(array $args = [])
 * @method MultiRegionClient createMultiRegionTimestreamQuery(array $args = [])
 * @method TimestreamWriteClient createTimestreamWrite(array $args = [])
 * @method MultiRegionClient createMultiRegionTimestreamWrite(array $args = [])
 * @method TranscribeServiceClient createTranscribeService(array $args = [])
 * @method MultiRegionClient createMultiRegionTranscribeService(array $args = [])
 * @method TransferClient createTransfer(array $args = [])
 * @method MultiRegionClient createMultiRegionTransfer(array $args = [])
 * @method TranslateClient createTranslate(array $args = [])
 * @method MultiRegionClient createMultiRegionTranslate(array $args = [])
 * @method WAFV2Client createWAFV2(array $args = [])
 * @method MultiRegionClient createMultiRegionWAFV2(array $args = [])
 * @method WafClient createWaf(array $args = [])
 * @method MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method WafRegionalClient createWafRegional(array $args = [])
 * @method MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method WellArchitectedClient createWellArchitected(array $args = [])
 * @method MultiRegionClient createMultiRegionWellArchitected(array $args = [])
 * @method WorkDocsClient createWorkDocs(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method WorkLinkClient createWorkLink(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkLink(array $args = [])
 * @method WorkMailClient createWorkMail(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkMail(array $args = [])
 * @method WorkMailMessageFlowClient createWorkMailMessageFlow(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkMailMessageFlow(array $args = [])
 * @method WorkSpacesClient createWorkSpaces(array $args = [])
 * @method MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method XRayClient createXRay(array $args = [])
 * @method MultiRegionClient createMultiRegionXRay(array $args = [])
 * @method imagebuilderClient createimagebuilder(array $args = [])
 * @method MultiRegionClient createMultiRegionimagebuilder(array $args = [])
 * @method kendraClient createkendra(array $args = [])
 * @method MultiRegionClient createMultiRegionkendra(array $args = [])
 * @method signerClient createsigner(array $args = [])
 * @method MultiRegionClient createMultiRegionsigner(array $args = [])
 */
class Sdk
{
    const VERSION = '3.173.26';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws InvalidArgumentException
     * @see Aws\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        }

        if (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see Aws\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "Aws\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "Aws\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'Aws\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    /**
     * Clone existing SDK instance with ability to pass an associative array
     * of extra client settings.
     *
     * @param array $args
     *
     * @return self
     */
    public function copy(array $args = [])
    {
        return new self($args + $this->args);
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\Aws\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
