<?php
namespace Aws\SesV2;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Simple Email Service** service.
 * @method Result createConfigurationSet(array $args = [])
 * @method Promise createConfigurationSetAsync(array $args = [])
 * @method Result createConfigurationSetEventDestination(array $args = [])
 * @method Promise createConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result createContact(array $args = [])
 * @method Promise createContactAsync(array $args = [])
 * @method Result createContactList(array $args = [])
 * @method Promise createContactListAsync(array $args = [])
 * @method Result createCustomVerificationEmailTemplate(array $args = [])
 * @method Promise createCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result createDedicatedIpPool(array $args = [])
 * @method Promise createDedicatedIpPoolAsync(array $args = [])
 * @method Result createDeliverabilityTestReport(array $args = [])
 * @method Promise createDeliverabilityTestReportAsync(array $args = [])
 * @method Result createEmailIdentity(array $args = [])
 * @method Promise createEmailIdentityAsync(array $args = [])
 * @method Result createEmailIdentityPolicy(array $args = [])
 * @method Promise createEmailIdentityPolicyAsync(array $args = [])
 * @method Result createEmailTemplate(array $args = [])
 * @method Promise createEmailTemplateAsync(array $args = [])
 * @method Result createImportJob(array $args = [])
 * @method Promise createImportJobAsync(array $args = [])
 * @method Result deleteConfigurationSet(array $args = [])
 * @method Promise deleteConfigurationSetAsync(array $args = [])
 * @method Result deleteConfigurationSetEventDestination(array $args = [])
 * @method Promise deleteConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result deleteContact(array $args = [])
 * @method Promise deleteContactAsync(array $args = [])
 * @method Result deleteContactList(array $args = [])
 * @method Promise deleteContactListAsync(array $args = [])
 * @method Result deleteCustomVerificationEmailTemplate(array $args = [])
 * @method Promise deleteCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result deleteDedicatedIpPool(array $args = [])
 * @method Promise deleteDedicatedIpPoolAsync(array $args = [])
 * @method Result deleteEmailIdentity(array $args = [])
 * @method Promise deleteEmailIdentityAsync(array $args = [])
 * @method Result deleteEmailIdentityPolicy(array $args = [])
 * @method Promise deleteEmailIdentityPolicyAsync(array $args = [])
 * @method Result deleteEmailTemplate(array $args = [])
 * @method Promise deleteEmailTemplateAsync(array $args = [])
 * @method Result deleteSuppressedDestination(array $args = [])
 * @method Promise deleteSuppressedDestinationAsync(array $args = [])
 * @method Result getAccount(array $args = [])
 * @method Promise getAccountAsync(array $args = [])
 * @method Result getBlacklistReports(array $args = [])
 * @method Promise getBlacklistReportsAsync(array $args = [])
 * @method Result getConfigurationSet(array $args = [])
 * @method Promise getConfigurationSetAsync(array $args = [])
 * @method Result getConfigurationSetEventDestinations(array $args = [])
 * @method Promise getConfigurationSetEventDestinationsAsync(array $args = [])
 * @method Result getContact(array $args = [])
 * @method Promise getContactAsync(array $args = [])
 * @method Result getContactList(array $args = [])
 * @method Promise getContactListAsync(array $args = [])
 * @method Result getCustomVerificationEmailTemplate(array $args = [])
 * @method Promise getCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result getDedicatedIp(array $args = [])
 * @method Promise getDedicatedIpAsync(array $args = [])
 * @method Result getDedicatedIps(array $args = [])
 * @method Promise getDedicatedIpsAsync(array $args = [])
 * @method Result getDeliverabilityDashboardOptions(array $args = [])
 * @method Promise getDeliverabilityDashboardOptionsAsync(array $args = [])
 * @method Result getDeliverabilityTestReport(array $args = [])
 * @method Promise getDeliverabilityTestReportAsync(array $args = [])
 * @method Result getDomainDeliverabilityCampaign(array $args = [])
 * @method Promise getDomainDeliverabilityCampaignAsync(array $args = [])
 * @method Result getDomainStatisticsReport(array $args = [])
 * @method Promise getDomainStatisticsReportAsync(array $args = [])
 * @method Result getEmailIdentity(array $args = [])
 * @method Promise getEmailIdentityAsync(array $args = [])
 * @method Result getEmailIdentityPolicies(array $args = [])
 * @method Promise getEmailIdentityPoliciesAsync(array $args = [])
 * @method Result getEmailTemplate(array $args = [])
 * @method Promise getEmailTemplateAsync(array $args = [])
 * @method Result getImportJob(array $args = [])
 * @method Promise getImportJobAsync(array $args = [])
 * @method Result getSuppressedDestination(array $args = [])
 * @method Promise getSuppressedDestinationAsync(array $args = [])
 * @method Result listConfigurationSets(array $args = [])
 * @method Promise listConfigurationSetsAsync(array $args = [])
 * @method Result listContactLists(array $args = [])
 * @method Promise listContactListsAsync(array $args = [])
 * @method Result listContacts(array $args = [])
 * @method Promise listContactsAsync(array $args = [])
 * @method Result listCustomVerificationEmailTemplates(array $args = [])
 * @method Promise listCustomVerificationEmailTemplatesAsync(array $args = [])
 * @method Result listDedicatedIpPools(array $args = [])
 * @method Promise listDedicatedIpPoolsAsync(array $args = [])
 * @method Result listDeliverabilityTestReports(array $args = [])
 * @method Promise listDeliverabilityTestReportsAsync(array $args = [])
 * @method Result listDomainDeliverabilityCampaigns(array $args = [])
 * @method Promise listDomainDeliverabilityCampaignsAsync(array $args = [])
 * @method Result listEmailIdentities(array $args = [])
 * @method Promise listEmailIdentitiesAsync(array $args = [])
 * @method Result listEmailTemplates(array $args = [])
 * @method Promise listEmailTemplatesAsync(array $args = [])
 * @method Result listImportJobs(array $args = [])
 * @method Promise listImportJobsAsync(array $args = [])
 * @method Result listSuppressedDestinations(array $args = [])
 * @method Promise listSuppressedDestinationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putAccountDedicatedIpWarmupAttributes(array $args = [])
 * @method Promise putAccountDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method Result putAccountDetails(array $args = [])
 * @method Promise putAccountDetailsAsync(array $args = [])
 * @method Result putAccountSendingAttributes(array $args = [])
 * @method Promise putAccountSendingAttributesAsync(array $args = [])
 * @method Result putAccountSuppressionAttributes(array $args = [])
 * @method Promise putAccountSuppressionAttributesAsync(array $args = [])
 * @method Result putConfigurationSetDeliveryOptions(array $args = [])
 * @method Promise putConfigurationSetDeliveryOptionsAsync(array $args = [])
 * @method Result putConfigurationSetReputationOptions(array $args = [])
 * @method Promise putConfigurationSetReputationOptionsAsync(array $args = [])
 * @method Result putConfigurationSetSendingOptions(array $args = [])
 * @method Promise putConfigurationSetSendingOptionsAsync(array $args = [])
 * @method Result putConfigurationSetSuppressionOptions(array $args = [])
 * @method Promise putConfigurationSetSuppressionOptionsAsync(array $args = [])
 * @method Result putConfigurationSetTrackingOptions(array $args = [])
 * @method Promise putConfigurationSetTrackingOptionsAsync(array $args = [])
 * @method Result putDedicatedIpInPool(array $args = [])
 * @method Promise putDedicatedIpInPoolAsync(array $args = [])
 * @method Result putDedicatedIpWarmupAttributes(array $args = [])
 * @method Promise putDedicatedIpWarmupAttributesAsync(array $args = [])
 * @method Result putDeliverabilityDashboardOption(array $args = [])
 * @method Promise putDeliverabilityDashboardOptionAsync(array $args = [])
 * @method Result putEmailIdentityConfigurationSetAttributes(array $args = [])
 * @method Promise putEmailIdentityConfigurationSetAttributesAsync(array $args = [])
 * @method Result putEmailIdentityDkimAttributes(array $args = [])
 * @method Promise putEmailIdentityDkimAttributesAsync(array $args = [])
 * @method Result putEmailIdentityDkimSigningAttributes(array $args = [])
 * @method Promise putEmailIdentityDkimSigningAttributesAsync(array $args = [])
 * @method Result putEmailIdentityFeedbackAttributes(array $args = [])
 * @method Promise putEmailIdentityFeedbackAttributesAsync(array $args = [])
 * @method Result putEmailIdentityMailFromAttributes(array $args = [])
 * @method Promise putEmailIdentityMailFromAttributesAsync(array $args = [])
 * @method Result putSuppressedDestination(array $args = [])
 * @method Promise putSuppressedDestinationAsync(array $args = [])
 * @method Result sendBulkEmail(array $args = [])
 * @method Promise sendBulkEmailAsync(array $args = [])
 * @method Result sendCustomVerificationEmail(array $args = [])
 * @method Promise sendCustomVerificationEmailAsync(array $args = [])
 * @method Result sendEmail(array $args = [])
 * @method Promise sendEmailAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result testRenderEmailTemplate(array $args = [])
 * @method Promise testRenderEmailTemplateAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateConfigurationSetEventDestination(array $args = [])
 * @method Promise updateConfigurationSetEventDestinationAsync(array $args = [])
 * @method Result updateContact(array $args = [])
 * @method Promise updateContactAsync(array $args = [])
 * @method Result updateContactList(array $args = [])
 * @method Promise updateContactListAsync(array $args = [])
 * @method Result updateCustomVerificationEmailTemplate(array $args = [])
 * @method Promise updateCustomVerificationEmailTemplateAsync(array $args = [])
 * @method Result updateEmailIdentityPolicy(array $args = [])
 * @method Promise updateEmailIdentityPolicyAsync(array $args = [])
 * @method Result updateEmailTemplate(array $args = [])
 * @method Promise updateEmailTemplateAsync(array $args = [])
 */
class SesV2Client extends AwsClient {}
