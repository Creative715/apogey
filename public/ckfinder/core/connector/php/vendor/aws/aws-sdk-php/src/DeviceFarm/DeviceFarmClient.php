<?php
namespace Aws\DeviceFarm;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DeviceFarm** service.
 *
 * @method Result createDevicePool(array $args = [])
 * @method Promise createDevicePoolAsync(array $args = [])
 * @method Result createInstanceProfile(array $args = [])
 * @method Promise createInstanceProfileAsync(array $args = [])
 * @method Result createNetworkProfile(array $args = [])
 * @method Promise createNetworkProfileAsync(array $args = [])
 * @method Result createProject(array $args = [])
 * @method Promise createProjectAsync(array $args = [])
 * @method Result createRemoteAccessSession(array $args = [])
 * @method Promise createRemoteAccessSessionAsync(array $args = [])
 * @method Result createTestGridProject(array $args = [])
 * @method Promise createTestGridProjectAsync(array $args = [])
 * @method Result createTestGridUrl(array $args = [])
 * @method Promise createTestGridUrlAsync(array $args = [])
 * @method Result createUpload(array $args = [])
 * @method Promise createUploadAsync(array $args = [])
 * @method Result createVPCEConfiguration(array $args = [])
 * @method Promise createVPCEConfigurationAsync(array $args = [])
 * @method Result deleteDevicePool(array $args = [])
 * @method Promise deleteDevicePoolAsync(array $args = [])
 * @method Result deleteInstanceProfile(array $args = [])
 * @method Promise deleteInstanceProfileAsync(array $args = [])
 * @method Result deleteNetworkProfile(array $args = [])
 * @method Promise deleteNetworkProfileAsync(array $args = [])
 * @method Result deleteProject(array $args = [])
 * @method Promise deleteProjectAsync(array $args = [])
 * @method Result deleteRemoteAccessSession(array $args = [])
 * @method Promise deleteRemoteAccessSessionAsync(array $args = [])
 * @method Result deleteRun(array $args = [])
 * @method Promise deleteRunAsync(array $args = [])
 * @method Result deleteTestGridProject(array $args = [])
 * @method Promise deleteTestGridProjectAsync(array $args = [])
 * @method Result deleteUpload(array $args = [])
 * @method Promise deleteUploadAsync(array $args = [])
 * @method Result deleteVPCEConfiguration(array $args = [])
 * @method Promise deleteVPCEConfigurationAsync(array $args = [])
 * @method Result getAccountSettings(array $args = [])
 * @method Promise getAccountSettingsAsync(array $args = [])
 * @method Result getDevice(array $args = [])
 * @method Promise getDeviceAsync(array $args = [])
 * @method Result getDeviceInstance(array $args = [])
 * @method Promise getDeviceInstanceAsync(array $args = [])
 * @method Result getDevicePool(array $args = [])
 * @method Promise getDevicePoolAsync(array $args = [])
 * @method Result getDevicePoolCompatibility(array $args = [])
 * @method Promise getDevicePoolCompatibilityAsync(array $args = [])
 * @method Result getInstanceProfile(array $args = [])
 * @method Promise getInstanceProfileAsync(array $args = [])
 * @method Result getJob(array $args = [])
 * @method Promise getJobAsync(array $args = [])
 * @method Result getNetworkProfile(array $args = [])
 * @method Promise getNetworkProfileAsync(array $args = [])
 * @method Result getOfferingStatus(array $args = [])
 * @method Promise getOfferingStatusAsync(array $args = [])
 * @method Result getProject(array $args = [])
 * @method Promise getProjectAsync(array $args = [])
 * @method Result getRemoteAccessSession(array $args = [])
 * @method Promise getRemoteAccessSessionAsync(array $args = [])
 * @method Result getRun(array $args = [])
 * @method Promise getRunAsync(array $args = [])
 * @method Result getSuite(array $args = [])
 * @method Promise getSuiteAsync(array $args = [])
 * @method Result getTest(array $args = [])
 * @method Promise getTestAsync(array $args = [])
 * @method Result getTestGridProject(array $args = [])
 * @method Promise getTestGridProjectAsync(array $args = [])
 * @method Result getTestGridSession(array $args = [])
 * @method Promise getTestGridSessionAsync(array $args = [])
 * @method Result getUpload(array $args = [])
 * @method Promise getUploadAsync(array $args = [])
 * @method Result getVPCEConfiguration(array $args = [])
 * @method Promise getVPCEConfigurationAsync(array $args = [])
 * @method Result installToRemoteAccessSession(array $args = [])
 * @method Promise installToRemoteAccessSessionAsync(array $args = [])
 * @method Result listArtifacts(array $args = [])
 * @method Promise listArtifactsAsync(array $args = [])
 * @method Result listDeviceInstances(array $args = [])
 * @method Promise listDeviceInstancesAsync(array $args = [])
 * @method Result listDevicePools(array $args = [])
 * @method Promise listDevicePoolsAsync(array $args = [])
 * @method Result listDevices(array $args = [])
 * @method Promise listDevicesAsync(array $args = [])
 * @method Result listInstanceProfiles(array $args = [])
 * @method Promise listInstanceProfilesAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listNetworkProfiles(array $args = [])
 * @method Promise listNetworkProfilesAsync(array $args = [])
 * @method Result listOfferingPromotions(array $args = [])
 * @method Promise listOfferingPromotionsAsync(array $args = [])
 * @method Result listOfferingTransactions(array $args = [])
 * @method Promise listOfferingTransactionsAsync(array $args = [])
 * @method Result listOfferings(array $args = [])
 * @method Promise listOfferingsAsync(array $args = [])
 * @method Result listProjects(array $args = [])
 * @method Promise listProjectsAsync(array $args = [])
 * @method Result listRemoteAccessSessions(array $args = [])
 * @method Promise listRemoteAccessSessionsAsync(array $args = [])
 * @method Result listRuns(array $args = [])
 * @method Promise listRunsAsync(array $args = [])
 * @method Result listSamples(array $args = [])
 * @method Promise listSamplesAsync(array $args = [])
 * @method Result listSuites(array $args = [])
 * @method Promise listSuitesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listTestGridProjects(array $args = [])
 * @method Promise listTestGridProjectsAsync(array $args = [])
 * @method Result listTestGridSessionActions(array $args = [])
 * @method Promise listTestGridSessionActionsAsync(array $args = [])
 * @method Result listTestGridSessionArtifacts(array $args = [])
 * @method Promise listTestGridSessionArtifactsAsync(array $args = [])
 * @method Result listTestGridSessions(array $args = [])
 * @method Promise listTestGridSessionsAsync(array $args = [])
 * @method Result listTests(array $args = [])
 * @method Promise listTestsAsync(array $args = [])
 * @method Result listUniqueProblems(array $args = [])
 * @method Promise listUniqueProblemsAsync(array $args = [])
 * @method Result listUploads(array $args = [])
 * @method Promise listUploadsAsync(array $args = [])
 * @method Result listVPCEConfigurations(array $args = [])
 * @method Promise listVPCEConfigurationsAsync(array $args = [])
 * @method Result purchaseOffering(array $args = [])
 * @method Promise purchaseOfferingAsync(array $args = [])
 * @method Result renewOffering(array $args = [])
 * @method Promise renewOfferingAsync(array $args = [])
 * @method Result scheduleRun(array $args = [])
 * @method Promise scheduleRunAsync(array $args = [])
 * @method Result stopJob(array $args = [])
 * @method Promise stopJobAsync(array $args = [])
 * @method Result stopRemoteAccessSession(array $args = [])
 * @method Promise stopRemoteAccessSessionAsync(array $args = [])
 * @method Result stopRun(array $args = [])
 * @method Promise stopRunAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDeviceInstance(array $args = [])
 * @method Promise updateDeviceInstanceAsync(array $args = [])
 * @method Result updateDevicePool(array $args = [])
 * @method Promise updateDevicePoolAsync(array $args = [])
 * @method Result updateInstanceProfile(array $args = [])
 * @method Promise updateInstanceProfileAsync(array $args = [])
 * @method Result updateNetworkProfile(array $args = [])
 * @method Promise updateNetworkProfileAsync(array $args = [])
 * @method Result updateProject(array $args = [])
 * @method Promise updateProjectAsync(array $args = [])
 * @method Result updateTestGridProject(array $args = [])
 * @method Promise updateTestGridProjectAsync(array $args = [])
 * @method Result updateUpload(array $args = [])
 * @method Promise updateUploadAsync(array $args = [])
 * @method Result updateVPCEConfiguration(array $args = [])
 * @method Promise updateVPCEConfigurationAsync(array $args = [])
 */
class DeviceFarmClient extends AwsClient {}
