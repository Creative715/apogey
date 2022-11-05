<?php
namespace Aws\AuditManager;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Audit Manager** service.
 * @method Result associateAssessmentReportEvidenceFolder(array $args = [])
 * @method Promise associateAssessmentReportEvidenceFolderAsync(array $args = [])
 * @method Result batchAssociateAssessmentReportEvidence(array $args = [])
 * @method Promise batchAssociateAssessmentReportEvidenceAsync(array $args = [])
 * @method Result batchCreateDelegationByAssessment(array $args = [])
 * @method Promise batchCreateDelegationByAssessmentAsync(array $args = [])
 * @method Result batchDeleteDelegationByAssessment(array $args = [])
 * @method Promise batchDeleteDelegationByAssessmentAsync(array $args = [])
 * @method Result batchDisassociateAssessmentReportEvidence(array $args = [])
 * @method Promise batchDisassociateAssessmentReportEvidenceAsync(array $args = [])
 * @method Result batchImportEvidenceToAssessmentControl(array $args = [])
 * @method Promise batchImportEvidenceToAssessmentControlAsync(array $args = [])
 * @method Result createAssessment(array $args = [])
 * @method Promise createAssessmentAsync(array $args = [])
 * @method Result createAssessmentFramework(array $args = [])
 * @method Promise createAssessmentFrameworkAsync(array $args = [])
 * @method Result createAssessmentReport(array $args = [])
 * @method Promise createAssessmentReportAsync(array $args = [])
 * @method Result createControl(array $args = [])
 * @method Promise createControlAsync(array $args = [])
 * @method Result deleteAssessment(array $args = [])
 * @method Promise deleteAssessmentAsync(array $args = [])
 * @method Result deleteAssessmentFramework(array $args = [])
 * @method Promise deleteAssessmentFrameworkAsync(array $args = [])
 * @method Result deleteAssessmentReport(array $args = [])
 * @method Promise deleteAssessmentReportAsync(array $args = [])
 * @method Result deleteControl(array $args = [])
 * @method Promise deleteControlAsync(array $args = [])
 * @method Result deregisterAccount(array $args = [])
 * @method Promise deregisterAccountAsync(array $args = [])
 * @method Result deregisterOrganizationAdminAccount(array $args = [])
 * @method Promise deregisterOrganizationAdminAccountAsync(array $args = [])
 * @method Result disassociateAssessmentReportEvidenceFolder(array $args = [])
 * @method Promise disassociateAssessmentReportEvidenceFolderAsync(array $args = [])
 * @method Result getAccountStatus(array $args = [])
 * @method Promise getAccountStatusAsync(array $args = [])
 * @method Result getAssessment(array $args = [])
 * @method Promise getAssessmentAsync(array $args = [])
 * @method Result getAssessmentFramework(array $args = [])
 * @method Promise getAssessmentFrameworkAsync(array $args = [])
 * @method Result getAssessmentReportUrl(array $args = [])
 * @method Promise getAssessmentReportUrlAsync(array $args = [])
 * @method Result getChangeLogs(array $args = [])
 * @method Promise getChangeLogsAsync(array $args = [])
 * @method Result getControl(array $args = [])
 * @method Promise getControlAsync(array $args = [])
 * @method Result getDelegations(array $args = [])
 * @method Promise getDelegationsAsync(array $args = [])
 * @method Result getEvidence(array $args = [])
 * @method Promise getEvidenceAsync(array $args = [])
 * @method Result getEvidenceByEvidenceFolder(array $args = [])
 * @method Promise getEvidenceByEvidenceFolderAsync(array $args = [])
 * @method Result getEvidenceFolder(array $args = [])
 * @method Promise getEvidenceFolderAsync(array $args = [])
 * @method Result getEvidenceFoldersByAssessment(array $args = [])
 * @method Promise getEvidenceFoldersByAssessmentAsync(array $args = [])
 * @method Result getEvidenceFoldersByAssessmentControl(array $args = [])
 * @method Promise getEvidenceFoldersByAssessmentControlAsync(array $args = [])
 * @method Result getOrganizationAdminAccount(array $args = [])
 * @method Promise getOrganizationAdminAccountAsync(array $args = [])
 * @method Result getServicesInScope(array $args = [])
 * @method Promise getServicesInScopeAsync(array $args = [])
 * @method Result getSettings(array $args = [])
 * @method Promise getSettingsAsync(array $args = [])
 * @method Result listAssessmentFrameworks(array $args = [])
 * @method Promise listAssessmentFrameworksAsync(array $args = [])
 * @method Result listAssessmentReports(array $args = [])
 * @method Promise listAssessmentReportsAsync(array $args = [])
 * @method Result listAssessments(array $args = [])
 * @method Promise listAssessmentsAsync(array $args = [])
 * @method Result listControls(array $args = [])
 * @method Promise listControlsAsync(array $args = [])
 * @method Result listKeywordsForDataSource(array $args = [])
 * @method Promise listKeywordsForDataSourceAsync(array $args = [])
 * @method Result listNotifications(array $args = [])
 * @method Promise listNotificationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result registerAccount(array $args = [])
 * @method Promise registerAccountAsync(array $args = [])
 * @method Result registerOrganizationAdminAccount(array $args = [])
 * @method Promise registerOrganizationAdminAccountAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAssessment(array $args = [])
 * @method Promise updateAssessmentAsync(array $args = [])
 * @method Result updateAssessmentControl(array $args = [])
 * @method Promise updateAssessmentControlAsync(array $args = [])
 * @method Result updateAssessmentControlSetStatus(array $args = [])
 * @method Promise updateAssessmentControlSetStatusAsync(array $args = [])
 * @method Result updateAssessmentFramework(array $args = [])
 * @method Promise updateAssessmentFrameworkAsync(array $args = [])
 * @method Result updateAssessmentStatus(array $args = [])
 * @method Promise updateAssessmentStatusAsync(array $args = [])
 * @method Result updateControl(array $args = [])
 * @method Promise updateControlAsync(array $args = [])
 * @method Result updateSettings(array $args = [])
 * @method Promise updateSettingsAsync(array $args = [])
 * @method Result validateAssessmentReportIntegrity(array $args = [])
 * @method Promise validateAssessmentReportIntegrityAsync(array $args = [])
 */
class AuditManagerClient extends AwsClient {}
