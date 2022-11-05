<?php
namespace Aws\Pinpoint;

use Aws\Api\ApiProvider;
use Aws\Api\DocModel;
use Aws\Api\Service;
use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Pinpoint** service.
 * @method Result createApp(array $args = [])
 * @method Promise createAppAsync(array $args = [])
 * @method Result createCampaign(array $args = [])
 * @method Promise createCampaignAsync(array $args = [])
 * @method Result createEmailTemplate(array $args = [])
 * @method Promise createEmailTemplateAsync(array $args = [])
 * @method Result createExportJob(array $args = [])
 * @method Promise createExportJobAsync(array $args = [])
 * @method Result createImportJob(array $args = [])
 * @method Promise createImportJobAsync(array $args = [])
 * @method Result createJourney(array $args = [])
 * @method Promise createJourneyAsync(array $args = [])
 * @method Result createPushTemplate(array $args = [])
 * @method Promise createPushTemplateAsync(array $args = [])
 * @method Result createRecommenderConfiguration(array $args = [])
 * @method Promise createRecommenderConfigurationAsync(array $args = [])
 * @method Result createSegment(array $args = [])
 * @method Promise createSegmentAsync(array $args = [])
 * @method Result createSmsTemplate(array $args = [])
 * @method Promise createSmsTemplateAsync(array $args = [])
 * @method Result createVoiceTemplate(array $args = [])
 * @method Promise createVoiceTemplateAsync(array $args = [])
 * @method Result deleteAdmChannel(array $args = [])
 * @method Promise deleteAdmChannelAsync(array $args = [])
 * @method Result deleteApnsChannel(array $args = [])
 * @method Promise deleteApnsChannelAsync(array $args = [])
 * @method Result deleteApnsSandboxChannel(array $args = [])
 * @method Promise deleteApnsSandboxChannelAsync(array $args = [])
 * @method Result deleteApnsVoipChannel(array $args = [])
 * @method Promise deleteApnsVoipChannelAsync(array $args = [])
 * @method Result deleteApnsVoipSandboxChannel(array $args = [])
 * @method Promise deleteApnsVoipSandboxChannelAsync(array $args = [])
 * @method Result deleteApp(array $args = [])
 * @method Promise deleteAppAsync(array $args = [])
 * @method Result deleteBaiduChannel(array $args = [])
 * @method Promise deleteBaiduChannelAsync(array $args = [])
 * @method Result deleteCampaign(array $args = [])
 * @method Promise deleteCampaignAsync(array $args = [])
 * @method Result deleteEmailChannel(array $args = [])
 * @method Promise deleteEmailChannelAsync(array $args = [])
 * @method Result deleteEmailTemplate(array $args = [])
 * @method Promise deleteEmailTemplateAsync(array $args = [])
 * @method Result deleteEndpoint(array $args = [])
 * @method Promise deleteEndpointAsync(array $args = [])
 * @method Result deleteEventStream(array $args = [])
 * @method Promise deleteEventStreamAsync(array $args = [])
 * @method Result deleteGcmChannel(array $args = [])
 * @method Promise deleteGcmChannelAsync(array $args = [])
 * @method Result deleteJourney(array $args = [])
 * @method Promise deleteJourneyAsync(array $args = [])
 * @method Result deletePushTemplate(array $args = [])
 * @method Promise deletePushTemplateAsync(array $args = [])
 * @method Result deleteRecommenderConfiguration(array $args = [])
 * @method Promise deleteRecommenderConfigurationAsync(array $args = [])
 * @method Result deleteSegment(array $args = [])
 * @method Promise deleteSegmentAsync(array $args = [])
 * @method Result deleteSmsChannel(array $args = [])
 * @method Promise deleteSmsChannelAsync(array $args = [])
 * @method Result deleteSmsTemplate(array $args = [])
 * @method Promise deleteSmsTemplateAsync(array $args = [])
 * @method Result deleteUserEndpoints(array $args = [])
 * @method Promise deleteUserEndpointsAsync(array $args = [])
 * @method Result deleteVoiceChannel(array $args = [])
 * @method Promise deleteVoiceChannelAsync(array $args = [])
 * @method Result deleteVoiceTemplate(array $args = [])
 * @method Promise deleteVoiceTemplateAsync(array $args = [])
 * @method Result getAdmChannel(array $args = [])
 * @method Promise getAdmChannelAsync(array $args = [])
 * @method Result getApnsChannel(array $args = [])
 * @method Promise getApnsChannelAsync(array $args = [])
 * @method Result getApnsSandboxChannel(array $args = [])
 * @method Promise getApnsSandboxChannelAsync(array $args = [])
 * @method Result getApnsVoipChannel(array $args = [])
 * @method Promise getApnsVoipChannelAsync(array $args = [])
 * @method Result getApnsVoipSandboxChannel(array $args = [])
 * @method Promise getApnsVoipSandboxChannelAsync(array $args = [])
 * @method Result getApp(array $args = [])
 * @method Promise getAppAsync(array $args = [])
 * @method Result getApplicationDateRangeKpi(array $args = [])
 * @method Promise getApplicationDateRangeKpiAsync(array $args = [])
 * @method Result getApplicationSettings(array $args = [])
 * @method Promise getApplicationSettingsAsync(array $args = [])
 * @method Result getApps(array $args = [])
 * @method Promise getAppsAsync(array $args = [])
 * @method Result getBaiduChannel(array $args = [])
 * @method Promise getBaiduChannelAsync(array $args = [])
 * @method Result getCampaign(array $args = [])
 * @method Promise getCampaignAsync(array $args = [])
 * @method Result getCampaignActivities(array $args = [])
 * @method Promise getCampaignActivitiesAsync(array $args = [])
 * @method Result getCampaignDateRangeKpi(array $args = [])
 * @method Promise getCampaignDateRangeKpiAsync(array $args = [])
 * @method Result getCampaignVersion(array $args = [])
 * @method Promise getCampaignVersionAsync(array $args = [])
 * @method Result getCampaignVersions(array $args = [])
 * @method Promise getCampaignVersionsAsync(array $args = [])
 * @method Result getCampaigns(array $args = [])
 * @method Promise getCampaignsAsync(array $args = [])
 * @method Result getChannels(array $args = [])
 * @method Promise getChannelsAsync(array $args = [])
 * @method Result getEmailChannel(array $args = [])
 * @method Promise getEmailChannelAsync(array $args = [])
 * @method Result getEmailTemplate(array $args = [])
 * @method Promise getEmailTemplateAsync(array $args = [])
 * @method Result getUserEndpoint(array $args = [])
 * @method Promise getUserEndpointAsync(array $args = [])
 * @method Result getEventStream(array $args = [])
 * @method Promise getEventStreamAsync(array $args = [])
 * @method Result getExportJob(array $args = [])
 * @method Promise getExportJobAsync(array $args = [])
 * @method Result getExportJobs(array $args = [])
 * @method Promise getExportJobsAsync(array $args = [])
 * @method Result getGcmChannel(array $args = [])
 * @method Promise getGcmChannelAsync(array $args = [])
 * @method Result getImportJob(array $args = [])
 * @method Promise getImportJobAsync(array $args = [])
 * @method Result getImportJobs(array $args = [])
 * @method Promise getImportJobsAsync(array $args = [])
 * @method Result getJourney(array $args = [])
 * @method Promise getJourneyAsync(array $args = [])
 * @method Result getJourneyDateRangeKpi(array $args = [])
 * @method Promise getJourneyDateRangeKpiAsync(array $args = [])
 * @method Result getJourneyExecutionActivityMetrics(array $args = [])
 * @method Promise getJourneyExecutionActivityMetricsAsync(array $args = [])
 * @method Result getJourneyExecutionMetrics(array $args = [])
 * @method Promise getJourneyExecutionMetricsAsync(array $args = [])
 * @method Result getPushTemplate(array $args = [])
 * @method Promise getPushTemplateAsync(array $args = [])
 * @method Result getRecommenderConfiguration(array $args = [])
 * @method Promise getRecommenderConfigurationAsync(array $args = [])
 * @method Result getRecommenderConfigurations(array $args = [])
 * @method Promise getRecommenderConfigurationsAsync(array $args = [])
 * @method Result getSegment(array $args = [])
 * @method Promise getSegmentAsync(array $args = [])
 * @method Result getSegmentExportJobs(array $args = [])
 * @method Promise getSegmentExportJobsAsync(array $args = [])
 * @method Result getSegmentImportJobs(array $args = [])
 * @method Promise getSegmentImportJobsAsync(array $args = [])
 * @method Result getSegmentVersion(array $args = [])
 * @method Promise getSegmentVersionAsync(array $args = [])
 * @method Result getSegmentVersions(array $args = [])
 * @method Promise getSegmentVersionsAsync(array $args = [])
 * @method Result getSegments(array $args = [])
 * @method Promise getSegmentsAsync(array $args = [])
 * @method Result getSmsChannel(array $args = [])
 * @method Promise getSmsChannelAsync(array $args = [])
 * @method Result getSmsTemplate(array $args = [])
 * @method Promise getSmsTemplateAsync(array $args = [])
 * @method Result getUserEndpoints(array $args = [])
 * @method Promise getUserEndpointsAsync(array $args = [])
 * @method Result getVoiceChannel(array $args = [])
 * @method Promise getVoiceChannelAsync(array $args = [])
 * @method Result getVoiceTemplate(array $args = [])
 * @method Promise getVoiceTemplateAsync(array $args = [])
 * @method Result listJourneys(array $args = [])
 * @method Promise listJourneysAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTemplateVersions(array $args = [])
 * @method Promise listTemplateVersionsAsync(array $args = [])
 * @method Result listTemplates(array $args = [])
 * @method Promise listTemplatesAsync(array $args = [])
 * @method Result phoneNumberValidate(array $args = [])
 * @method Promise phoneNumberValidateAsync(array $args = [])
 * @method Result putEventStream(array $args = [])
 * @method Promise putEventStreamAsync(array $args = [])
 * @method Result putEvents(array $args = [])
 * @method Promise putEventsAsync(array $args = [])
 * @method Result removeAttributes(array $args = [])
 * @method Promise removeAttributesAsync(array $args = [])
 * @method Result sendMessages(array $args = [])
 * @method Promise sendMessagesAsync(array $args = [])
 * @method Result sendUsersMessages(array $args = [])
 * @method Promise sendUsersMessagesAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAdmChannel(array $args = [])
 * @method Promise updateAdmChannelAsync(array $args = [])
 * @method Result updateApnsChannel(array $args = [])
 * @method Promise updateApnsChannelAsync(array $args = [])
 * @method Result updateApnsSandboxChannel(array $args = [])
 * @method Promise updateApnsSandboxChannelAsync(array $args = [])
 * @method Result updateApnsVoipChannel(array $args = [])
 * @method Promise updateApnsVoipChannelAsync(array $args = [])
 * @method Result updateApnsVoipSandboxChannel(array $args = [])
 * @method Promise updateApnsVoipSandboxChannelAsync(array $args = [])
 * @method Result updateApplicationSettings(array $args = [])
 * @method Promise updateApplicationSettingsAsync(array $args = [])
 * @method Result updateBaiduChannel(array $args = [])
 * @method Promise updateBaiduChannelAsync(array $args = [])
 * @method Result updateCampaign(array $args = [])
 * @method Promise updateCampaignAsync(array $args = [])
 * @method Result updateEmailChannel(array $args = [])
 * @method Promise updateEmailChannelAsync(array $args = [])
 * @method Result updateEmailTemplate(array $args = [])
 * @method Promise updateEmailTemplateAsync(array $args = [])
 * @method Result updateUserEndpoint(array $args = [])
 * @method Promise updateUserEndpointAsync(array $args = [])
 * @method Result updateUserEndpointsBatch(array $args = [])
 * @method Promise updateUserEndpointsBatchAsync(array $args = [])
 * @method Result updateGcmChannel(array $args = [])
 * @method Promise updateGcmChannelAsync(array $args = [])
 * @method Result updateJourney(array $args = [])
 * @method Promise updateJourneyAsync(array $args = [])
 * @method Result updateJourneyState(array $args = [])
 * @method Promise updateJourneyStateAsync(array $args = [])
 * @method Result updatePushTemplate(array $args = [])
 * @method Promise updatePushTemplateAsync(array $args = [])
 * @method Result updateRecommenderConfiguration(array $args = [])
 * @method Promise updateRecommenderConfigurationAsync(array $args = [])
 * @method Result updateSegment(array $args = [])
 * @method Promise updateSegmentAsync(array $args = [])
 * @method Result updateSmsChannel(array $args = [])
 * @method Promise updateSmsChannelAsync(array $args = [])
 * @method Result updateSmsTemplate(array $args = [])
 * @method Promise updateSmsTemplateAsync(array $args = [])
 * @method Result updateTemplateActiveVersion(array $args = [])
 * @method Promise updateTemplateActiveVersionAsync(array $args = [])
 * @method Result updateVoiceChannel(array $args = [])
 * @method Promise updateVoiceChannelAsync(array $args = [])
 * @method Result updateVoiceTemplate(array $args = [])
 * @method Promise updateVoiceTemplateAsync(array $args = [])
 */
class PinpointClient extends AwsClient {}
