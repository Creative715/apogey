<?php
namespace Aws\Iot;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS IoT** service.
 *
 * @method Result acceptCertificateTransfer(array $args = [])
 * @method Promise acceptCertificateTransferAsync(array $args = [])
 * @method Result addThingToBillingGroup(array $args = [])
 * @method Promise addThingToBillingGroupAsync(array $args = [])
 * @method Result addThingToThingGroup(array $args = [])
 * @method Promise addThingToThingGroupAsync(array $args = [])
 * @method Result associateTargetsWithJob(array $args = [])
 * @method Promise associateTargetsWithJobAsync(array $args = [])
 * @method Result attachPolicy(array $args = [])
 * @method Promise attachPolicyAsync(array $args = [])
 * @method Result attachPrincipalPolicy(array $args = [])
 * @method Promise attachPrincipalPolicyAsync(array $args = [])
 * @method Result attachSecurityProfile(array $args = [])
 * @method Promise attachSecurityProfileAsync(array $args = [])
 * @method Result attachThingPrincipal(array $args = [])
 * @method Promise attachThingPrincipalAsync(array $args = [])
 * @method Result cancelAuditMitigationActionsTask(array $args = [])
 * @method Promise cancelAuditMitigationActionsTaskAsync(array $args = [])
 * @method Result cancelAuditTask(array $args = [])
 * @method Promise cancelAuditTaskAsync(array $args = [])
 * @method Result cancelCertificateTransfer(array $args = [])
 * @method Promise cancelCertificateTransferAsync(array $args = [])
 * @method Result cancelDetectMitigationActionsTask(array $args = [])
 * @method Promise cancelDetectMitigationActionsTaskAsync(array $args = [])
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result cancelJobExecution(array $args = [])
 * @method Promise cancelJobExecutionAsync(array $args = [])
 * @method Result clearDefaultAuthorizer(array $args = [])
 * @method Promise clearDefaultAuthorizerAsync(array $args = [])
 * @method Result confirmTopicRuleDestination(array $args = [])
 * @method Promise confirmTopicRuleDestinationAsync(array $args = [])
 * @method Result createAuditSuppression(array $args = [])
 * @method Promise createAuditSuppressionAsync(array $args = [])
 * @method Result createAuthorizer(array $args = [])
 * @method Promise createAuthorizerAsync(array $args = [])
 * @method Result createBillingGroup(array $args = [])
 * @method Promise createBillingGroupAsync(array $args = [])
 * @method Result createCertificateFromCsr(array $args = [])
 * @method Promise createCertificateFromCsrAsync(array $args = [])
 * @method Result createCustomMetric(array $args = [])
 * @method Promise createCustomMetricAsync(array $args = [])
 * @method Result createDimension(array $args = [])
 * @method Promise createDimensionAsync(array $args = [])
 * @method Result createDomainConfiguration(array $args = [])
 * @method Promise createDomainConfigurationAsync(array $args = [])
 * @method Result createDynamicThingGroup(array $args = [])
 * @method Promise createDynamicThingGroupAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createKeysAndCertificate(array $args = [])
 * @method Promise createKeysAndCertificateAsync(array $args = [])
 * @method Result createMitigationAction(array $args = [])
 * @method Promise createMitigationActionAsync(array $args = [])
 * @method Result createOTAUpdate(array $args = [])
 * @method Promise createOTAUpdateAsync(array $args = [])
 * @method Result createPolicy(array $args = [])
 * @method Promise createPolicyAsync(array $args = [])
 * @method Result createPolicyVersion(array $args = [])
 * @method Promise createPolicyVersionAsync(array $args = [])
 * @method Result createProvisioningClaim(array $args = [])
 * @method Promise createProvisioningClaimAsync(array $args = [])
 * @method Result createProvisioningTemplate(array $args = [])
 * @method Promise createProvisioningTemplateAsync(array $args = [])
 * @method Result createProvisioningTemplateVersion(array $args = [])
 * @method Promise createProvisioningTemplateVersionAsync(array $args = [])
 * @method Result createRoleAlias(array $args = [])
 * @method Promise createRoleAliasAsync(array $args = [])
 * @method Result createScheduledAudit(array $args = [])
 * @method Promise createScheduledAuditAsync(array $args = [])
 * @method Result createSecurityProfile(array $args = [])
 * @method Promise createSecurityProfileAsync(array $args = [])
 * @method Result createStream(array $args = [])
 * @method Promise createStreamAsync(array $args = [])
 * @method Result createThing(array $args = [])
 * @method Promise createThingAsync(array $args = [])
 * @method Result createThingGroup(array $args = [])
 * @method Promise createThingGroupAsync(array $args = [])
 * @method Result createThingType(array $args = [])
 * @method Promise createThingTypeAsync(array $args = [])
 * @method Result createTopicRule(array $args = [])
 * @method Promise createTopicRuleAsync(array $args = [])
 * @method Result createTopicRuleDestination(array $args = [])
 * @method Promise createTopicRuleDestinationAsync(array $args = [])
 * @method Result deleteAccountAuditConfiguration(array $args = [])
 * @method Promise deleteAccountAuditConfigurationAsync(array $args = [])
 * @method Result deleteAuditSuppression(array $args = [])
 * @method Promise deleteAuditSuppressionAsync(array $args = [])
 * @method Result deleteAuthorizer(array $args = [])
 * @method Promise deleteAuthorizerAsync(array $args = [])
 * @method Result deleteBillingGroup(array $args = [])
 * @method Promise deleteBillingGroupAsync(array $args = [])
 * @method Result deleteCACertificate(array $args = [])
 * @method Promise deleteCACertificateAsync(array $args = [])
 * @method Result deleteCertificate(array $args = [])
 * @method Promise deleteCertificateAsync(array $args = [])
 * @method Result deleteCustomMetric(array $args = [])
 * @method Promise deleteCustomMetricAsync(array $args = [])
 * @method Result deleteDimension(array $args = [])
 * @method Promise deleteDimensionAsync(array $args = [])
 * @method Result deleteDomainConfiguration(array $args = [])
 * @method Promise deleteDomainConfigurationAsync(array $args = [])
 * @method Result deleteDynamicThingGroup(array $args = [])
 * @method Promise deleteDynamicThingGroupAsync(array $args = [])
 * @method Result deleteJob(array $args = [])
 * @method Promise deleteJobAsync(array $args = [])
 * @method Result deleteJobExecution(array $args = [])
 * @method Promise deleteJobExecutionAsync(array $args = [])
 * @method Result deleteMitigationAction(array $args = [])
 * @method Promise deleteMitigationActionAsync(array $args = [])
 * @method Result deleteOTAUpdate(array $args = [])
 * @method Promise deleteOTAUpdateAsync(array $args = [])
 * @method Result deletePolicy(array $args = [])
 * @method Promise deletePolicyAsync(array $args = [])
 * @method Result deletePolicyVersion(array $args = [])
 * @method Promise deletePolicyVersionAsync(array $args = [])
 * @method Result deleteProvisioningTemplate(array $args = [])
 * @method Promise deleteProvisioningTemplateAsync(array $args = [])
 * @method Result deleteProvisioningTemplateVersion(array $args = [])
 * @method Promise deleteProvisioningTemplateVersionAsync(array $args = [])
 * @method Result deleteRegistrationCode(array $args = [])
 * @method Promise deleteRegistrationCodeAsync(array $args = [])
 * @method Result deleteRoleAlias(array $args = [])
 * @method Promise deleteRoleAliasAsync(array $args = [])
 * @method Result deleteScheduledAudit(array $args = [])
 * @method Promise deleteScheduledAuditAsync(array $args = [])
 * @method Result deleteSecurityProfile(array $args = [])
 * @method Promise deleteSecurityProfileAsync(array $args = [])
 * @method Result deleteStream(array $args = [])
 * @method Promise deleteStreamAsync(array $args = [])
 * @method Result deleteThing(array $args = [])
 * @method Promise deleteThingAsync(array $args = [])
 * @method Result deleteThingGroup(array $args = [])
 * @method Promise deleteThingGroupAsync(array $args = [])
 * @method Result deleteThingType(array $args = [])
 * @method Promise deleteThingTypeAsync(array $args = [])
 * @method Result deleteTopicRule(array $args = [])
 * @method Promise deleteTopicRuleAsync(array $args = [])
 * @method Result deleteTopicRuleDestination(array $args = [])
 * @method Promise deleteTopicRuleDestinationAsync(array $args = [])
 * @method Result deleteV2LoggingLevel(array $args = [])
 * @method Promise deleteV2LoggingLevelAsync(array $args = [])
 * @method Result deprecateThingType(array $args = [])
 * @method Promise deprecateThingTypeAsync(array $args = [])
 * @method Result describeAccountAuditConfiguration(array $args = [])
 * @method Promise describeAccountAuditConfigurationAsync(array $args = [])
 * @method Result describeAuditFinding(array $args = [])
 * @method Promise describeAuditFindingAsync(array $args = [])
 * @method Result describeAuditMitigationActionsTask(array $args = [])
 * @method Promise describeAuditMitigationActionsTaskAsync(array $args = [])
 * @method Result describeAuditSuppression(array $args = [])
 * @method Promise describeAuditSuppressionAsync(array $args = [])
 * @method Result describeAuditTask(array $args = [])
 * @method Promise describeAuditTaskAsync(array $args = [])
 * @method Result describeAuthorizer(array $args = [])
 * @method Promise describeAuthorizerAsync(array $args = [])
 * @method Result describeBillingGroup(array $args = [])
 * @method Promise describeBillingGroupAsync(array $args = [])
 * @method Result describeCACertificate(array $args = [])
 * @method Promise describeCACertificateAsync(array $args = [])
 * @method Result describeCertificate(array $args = [])
 * @method Promise describeCertificateAsync(array $args = [])
 * @method Result describeCustomMetric(array $args = [])
 * @method Promise describeCustomMetricAsync(array $args = [])
 * @method Result describeDefaultAuthorizer(array $args = [])
 * @method Promise describeDefaultAuthorizerAsync(array $args = [])
 * @method Result describeDetectMitigationActionsTask(array $args = [])
 * @method Promise describeDetectMitigationActionsTaskAsync(array $args = [])
 * @method Result describeDimension(array $args = [])
 * @method Promise describeDimensionAsync(array $args = [])
 * @method Result describeDomainConfiguration(array $args = [])
 * @method Promise describeDomainConfigurationAsync(array $args = [])
 * @method Result describeEndpoint(array $args = [])
 * @method Promise describeEndpointAsync(array $args = [])
 * @method Result describeEventConfigurations(array $args = [])
 * @method Promise describeEventConfigurationsAsync(array $args = [])
 * @method Result describeIndex(array $args = [])
 * @method Promise describeIndexAsync(array $args = [])
 * @method Result describeJob(array $args = [])
 * @method Promise describeJobAsync(array $args = [])
 * @method Result describeJobExecution(array $args = [])
 * @method Promise describeJobExecutionAsync(array $args = [])
 * @method Result describeMitigationAction(array $args = [])
 * @method Promise describeMitigationActionAsync(array $args = [])
 * @method Result describeProvisioningTemplate(array $args = [])
 * @method Promise describeProvisioningTemplateAsync(array $args = [])
 * @method Result describeProvisioningTemplateVersion(array $args = [])
 * @method Promise describeProvisioningTemplateVersionAsync(array $args = [])
 * @method Result describeRoleAlias(array $args = [])
 * @method Promise describeRoleAliasAsync(array $args = [])
 * @method Result describeScheduledAudit(array $args = [])
 * @method Promise describeScheduledAuditAsync(array $args = [])
 * @method Result describeSecurityProfile(array $args = [])
 * @method Promise describeSecurityProfileAsync(array $args = [])
 * @method Result describeStream(array $args = [])
 * @method Promise describeStreamAsync(array $args = [])
 * @method Result describeThing(array $args = [])
 * @method Promise describeThingAsync(array $args = [])
 * @method Result describeThingGroup(array $args = [])
 * @method Promise describeThingGroupAsync(array $args = [])
 * @method Result describeThingRegistrationTask(array $args = [])
 * @method Promise describeThingRegistrationTaskAsync(array $args = [])
 * @method Result describeThingType(array $args = [])
 * @method Promise describeThingTypeAsync(array $args = [])
 * @method Result detachPolicy(array $args = [])
 * @method Promise detachPolicyAsync(array $args = [])
 * @method Result detachPrincipalPolicy(array $args = [])
 * @method Promise detachPrincipalPolicyAsync(array $args = [])
 * @method Result detachSecurityProfile(array $args = [])
 * @method Promise detachSecurityProfileAsync(array $args = [])
 * @method Result detachThingPrincipal(array $args = [])
 * @method Promise detachThingPrincipalAsync(array $args = [])
 * @method Result disableTopicRule(array $args = [])
 * @method Promise disableTopicRuleAsync(array $args = [])
 * @method Result enableTopicRule(array $args = [])
 * @method Promise enableTopicRuleAsync(array $args = [])
 * @method Result getBehaviorModelTrainingSummaries(array $args = [])
 * @method Promise getBehaviorModelTrainingSummariesAsync(array $args = [])
 * @method Result getCardinality(array $args = [])
 * @method Promise getCardinalityAsync(array $args = [])
 * @method Result getEffectivePolicies(array $args = [])
 * @method Promise getEffectivePoliciesAsync(array $args = [])
 * @method Result getIndexingConfiguration(array $args = [])
 * @method Promise getIndexingConfigurationAsync(array $args = [])
 * @method Result getJobDocument(array $args = [])
 * @method Promise getJobDocumentAsync(array $args = [])
 * @method Result getLoggingOptions(array $args = [])
 * @method Promise getLoggingOptionsAsync(array $args = [])
 * @method Result getOTAUpdate(array $args = [])
 * @method Promise getOTAUpdateAsync(array $args = [])
 * @method Result getPercentiles(array $args = [])
 * @method Promise getPercentilesAsync(array $args = [])
 * @method Result getPolicy(array $args = [])
 * @method Promise getPolicyAsync(array $args = [])
 * @method Result getPolicyVersion(array $args = [])
 * @method Promise getPolicyVersionAsync(array $args = [])
 * @method Result getRegistrationCode(array $args = [])
 * @method Promise getRegistrationCodeAsync(array $args = [])
 * @method Result getStatistics(array $args = [])
 * @method Promise getStatisticsAsync(array $args = [])
 * @method Result getTopicRule(array $args = [])
 * @method Promise getTopicRuleAsync(array $args = [])
 * @method Result getTopicRuleDestination(array $args = [])
 * @method Promise getTopicRuleDestinationAsync(array $args = [])
 * @method Result getV2LoggingOptions(array $args = [])
 * @method Promise getV2LoggingOptionsAsync(array $args = [])
 * @method Result listActiveViolations(array $args = [])
 * @method Promise listActiveViolationsAsync(array $args = [])
 * @method Result listAttachedPolicies(array $args = [])
 * @method Promise listAttachedPoliciesAsync(array $args = [])
 * @method Result listAuditFindings(array $args = [])
 * @method Promise listAuditFindingsAsync(array $args = [])
 * @method Result listAuditMitigationActionsExecutions(array $args = [])
 * @method Promise listAuditMitigationActionsExecutionsAsync(array $args = [])
 * @method Result listAuditMitigationActionsTasks(array $args = [])
 * @method Promise listAuditMitigationActionsTasksAsync(array $args = [])
 * @method Result listAuditSuppressions(array $args = [])
 * @method Promise listAuditSuppressionsAsync(array $args = [])
 * @method Result listAuditTasks(array $args = [])
 * @method Promise listAuditTasksAsync(array $args = [])
 * @method Result listAuthorizers(array $args = [])
 * @method Promise listAuthorizersAsync(array $args = [])
 * @method Result listBillingGroups(array $args = [])
 * @method Promise listBillingGroupsAsync(array $args = [])
 * @method Result listCACertificates(array $args = [])
 * @method Promise listCACertificatesAsync(array $args = [])
 * @method Result listCertificates(array $args = [])
 * @method Promise listCertificatesAsync(array $args = [])
 * @method Result listCertificatesByCA(array $args = [])
 * @method Promise listCertificatesByCAAsync(array $args = [])
 * @method Result listCustomMetrics(array $args = [])
 * @method Promise listCustomMetricsAsync(array $args = [])
 * @method Result listDetectMitigationActionsExecutions(array $args = [])
 * @method Promise listDetectMitigationActionsExecutionsAsync(array $args = [])
 * @method Result listDetectMitigationActionsTasks(array $args = [])
 * @method Promise listDetectMitigationActionsTasksAsync(array $args = [])
 * @method Result listDimensions(array $args = [])
 * @method Promise listDimensionsAsync(array $args = [])
 * @method Result listDomainConfigurations(array $args = [])
 * @method Promise listDomainConfigurationsAsync(array $args = [])
 * @method Result listIndices(array $args = [])
 * @method Promise listIndicesAsync(array $args = [])
 * @method Result listJobExecutionsForJob(array $args = [])
 * @method Promise listJobExecutionsForJobAsync(array $args = [])
 * @method Result listJobExecutionsForThing(array $args = [])
 * @method Promise listJobExecutionsForThingAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listMitigationActions(array $args = [])
 * @method Promise listMitigationActionsAsync(array $args = [])
 * @method Result listOTAUpdates(array $args = [])
 * @method Promise listOTAUpdatesAsync(array $args = [])
 * @method Result listOutgoingCertificates(array $args = [])
 * @method Promise listOutgoingCertificatesAsync(array $args = [])
 * @method Result listPolicies(array $args = [])
 * @method Promise listPoliciesAsync(array $args = [])
 * @method Result listPolicyPrincipals(array $args = [])
 * @method Promise listPolicyPrincipalsAsync(array $args = [])
 * @method Result listPolicyVersions(array $args = [])
 * @method Promise listPolicyVersionsAsync(array $args = [])
 * @method Result listPrincipalPolicies(array $args = [])
 * @method Promise listPrincipalPoliciesAsync(array $args = [])
 * @method Result listPrincipalThings(array $args = [])
 * @method Promise listPrincipalThingsAsync(array $args = [])
 * @method Result listProvisioningTemplateVersions(array $args = [])
 * @method Promise listProvisioningTemplateVersionsAsync(array $args = [])
 * @method Result listProvisioningTemplates(array $args = [])
 * @method Promise listProvisioningTemplatesAsync(array $args = [])
 * @method Result listRoleAliases(array $args = [])
 * @method Promise listRoleAliasesAsync(array $args = [])
 * @method Result listScheduledAudits(array $args = [])
 * @method Promise listScheduledAuditsAsync(array $args = [])
 * @method Result listSecurityProfiles(array $args = [])
 * @method Promise listSecurityProfilesAsync(array $args = [])
 * @method Result listSecurityProfilesForTarget(array $args = [])
 * @method Promise listSecurityProfilesForTargetAsync(array $args = [])
 * @method Result listStreams(array $args = [])
 * @method Promise listStreamsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTargetsForPolicy(array $args = [])
 * @method Promise listTargetsForPolicyAsync(array $args = [])
 * @method Result listTargetsForSecurityProfile(array $args = [])
 * @method Promise listTargetsForSecurityProfileAsync(array $args = [])
 * @method Result listThingGroups(array $args = [])
 * @method Promise listThingGroupsAsync(array $args = [])
 * @method Result listThingGroupsForThing(array $args = [])
 * @method Promise listThingGroupsForThingAsync(array $args = [])
 * @method Result listThingPrincipals(array $args = [])
 * @method Promise listThingPrincipalsAsync(array $args = [])
 * @method Result listThingRegistrationTaskReports(array $args = [])
 * @method Promise listThingRegistrationTaskReportsAsync(array $args = [])
 * @method Result listThingRegistrationTasks(array $args = [])
 * @method Promise listThingRegistrationTasksAsync(array $args = [])
 * @method Result listThingTypes(array $args = [])
 * @method Promise listThingTypesAsync(array $args = [])
 * @method Result listThings(array $args = [])
 * @method Promise listThingsAsync(array $args = [])
 * @method Result listThingsInBillingGroup(array $args = [])
 * @method Promise listThingsInBillingGroupAsync(array $args = [])
 * @method Result listThingsInThingGroup(array $args = [])
 * @method Promise listThingsInThingGroupAsync(array $args = [])
 * @method Result listTopicRuleDestinations(array $args = [])
 * @method Promise listTopicRuleDestinationsAsync(array $args = [])
 * @method Result listTopicRules(array $args = [])
 * @method Promise listTopicRulesAsync(array $args = [])
 * @method Result listV2LoggingLevels(array $args = [])
 * @method Promise listV2LoggingLevelsAsync(array $args = [])
 * @method Result listViolationEvents(array $args = [])
 * @method Promise listViolationEventsAsync(array $args = [])
 * @method Result registerCACertificate(array $args = [])
 * @method Promise registerCACertificateAsync(array $args = [])
 * @method Result registerCertificate(array $args = [])
 * @method Promise registerCertificateAsync(array $args = [])
 * @method Result registerCertificateWithoutCA(array $args = [])
 * @method Promise registerCertificateWithoutCAAsync(array $args = [])
 * @method Result registerThing(array $args = [])
 * @method Promise registerThingAsync(array $args = [])
 * @method Result rejectCertificateTransfer(array $args = [])
 * @method Promise rejectCertificateTransferAsync(array $args = [])
 * @method Result removeThingFromBillingGroup(array $args = [])
 * @method Promise removeThingFromBillingGroupAsync(array $args = [])
 * @method Result removeThingFromThingGroup(array $args = [])
 * @method Promise removeThingFromThingGroupAsync(array $args = [])
 * @method Result replaceTopicRule(array $args = [])
 * @method Promise replaceTopicRuleAsync(array $args = [])
 * @method Result searchIndex(array $args = [])
 * @method Promise searchIndexAsync(array $args = [])
 * @method Result setDefaultAuthorizer(array $args = [])
 * @method Promise setDefaultAuthorizerAsync(array $args = [])
 * @method Result setDefaultPolicyVersion(array $args = [])
 * @method Promise setDefaultPolicyVersionAsync(array $args = [])
 * @method Result setLoggingOptions(array $args = [])
 * @method Promise setLoggingOptionsAsync(array $args = [])
 * @method Result setV2LoggingLevel(array $args = [])
 * @method Promise setV2LoggingLevelAsync(array $args = [])
 * @method Result setV2LoggingOptions(array $args = [])
 * @method Promise setV2LoggingOptionsAsync(array $args = [])
 * @method Result startAuditMitigationActionsTask(array $args = [])
 * @method Promise startAuditMitigationActionsTaskAsync(array $args = [])
 * @method Result startDetectMitigationActionsTask(array $args = [])
 * @method Promise startDetectMitigationActionsTaskAsync(array $args = [])
 * @method Result startOnDemandAuditTask(array $args = [])
 * @method Promise startOnDemandAuditTaskAsync(array $args = [])
 * @method Result startThingRegistrationTask(array $args = [])
 * @method Promise startThingRegistrationTaskAsync(array $args = [])
 * @method Result stopThingRegistrationTask(array $args = [])
 * @method Promise stopThingRegistrationTaskAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result testAuthorization(array $args = [])
 * @method Promise testAuthorizationAsync(array $args = [])
 * @method Result testInvokeAuthorizer(array $args = [])
 * @method Promise testInvokeAuthorizerAsync(array $args = [])
 * @method Result transferCertificate(array $args = [])
 * @method Promise transferCertificateAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAccountAuditConfiguration(array $args = [])
 * @method Promise updateAccountAuditConfigurationAsync(array $args = [])
 * @method Result updateAuditSuppression(array $args = [])
 * @method Promise updateAuditSuppressionAsync(array $args = [])
 * @method Result updateAuthorizer(array $args = [])
 * @method Promise updateAuthorizerAsync(array $args = [])
 * @method Result updateBillingGroup(array $args = [])
 * @method Promise updateBillingGroupAsync(array $args = [])
 * @method Result updateCACertificate(array $args = [])
 * @method Promise updateCACertificateAsync(array $args = [])
 * @method Result updateCertificate(array $args = [])
 * @method Promise updateCertificateAsync(array $args = [])
 * @method Result updateCustomMetric(array $args = [])
 * @method Promise updateCustomMetricAsync(array $args = [])
 * @method Result updateDimension(array $args = [])
 * @method Promise updateDimensionAsync(array $args = [])
 * @method Result updateDomainConfiguration(array $args = [])
 * @method Promise updateDomainConfigurationAsync(array $args = [])
 * @method Result updateDynamicThingGroup(array $args = [])
 * @method Promise updateDynamicThingGroupAsync(array $args = [])
 * @method Result updateEventConfigurations(array $args = [])
 * @method Promise updateEventConfigurationsAsync(array $args = [])
 * @method Result updateIndexingConfiguration(array $args = [])
 * @method Promise updateIndexingConfigurationAsync(array $args = [])
 * @method Result updateJob(array $args = [])
 * @method Promise updateJobAsync(array $args = [])
 * @method Result updateMitigationAction(array $args = [])
 * @method Promise updateMitigationActionAsync(array $args = [])
 * @method Result updateProvisioningTemplate(array $args = [])
 * @method Promise updateProvisioningTemplateAsync(array $args = [])
 * @method Result updateRoleAlias(array $args = [])
 * @method Promise updateRoleAliasAsync(array $args = [])
 * @method Result updateScheduledAudit(array $args = [])
 * @method Promise updateScheduledAuditAsync(array $args = [])
 * @method Result updateSecurityProfile(array $args = [])
 * @method Promise updateSecurityProfileAsync(array $args = [])
 * @method Result updateStream(array $args = [])
 * @method Promise updateStreamAsync(array $args = [])
 * @method Result updateThing(array $args = [])
 * @method Promise updateThingAsync(array $args = [])
 * @method Result updateThingGroup(array $args = [])
 * @method Promise updateThingGroupAsync(array $args = [])
 * @method Result updateThingGroupsForThing(array $args = [])
 * @method Promise updateThingGroupsForThingAsync(array $args = [])
 * @method Result updateTopicRuleDestination(array $args = [])
 * @method Promise updateTopicRuleDestinationAsync(array $args = [])
 * @method Result validateSecurityProfileBehaviors(array $args = [])
 * @method Promise validateSecurityProfileBehaviorsAsync(array $args = [])
 */
class IotClient extends AwsClient {}
