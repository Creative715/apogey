<?php
namespace Aws\Lightsail;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Lightsail** service.
 * @method Result allocateStaticIp(array $args = [])
 * @method Promise allocateStaticIpAsync(array $args = [])
 * @method Result attachCertificateToDistribution(array $args = [])
 * @method Promise attachCertificateToDistributionAsync(array $args = [])
 * @method Result attachDisk(array $args = [])
 * @method Promise attachDiskAsync(array $args = [])
 * @method Result attachInstancesToLoadBalancer(array $args = [])
 * @method Promise attachInstancesToLoadBalancerAsync(array $args = [])
 * @method Result attachLoadBalancerTlsCertificate(array $args = [])
 * @method Promise attachLoadBalancerTlsCertificateAsync(array $args = [])
 * @method Result attachStaticIp(array $args = [])
 * @method Promise attachStaticIpAsync(array $args = [])
 * @method Result closeInstancePublicPorts(array $args = [])
 * @method Promise closeInstancePublicPortsAsync(array $args = [])
 * @method Result copySnapshot(array $args = [])
 * @method Promise copySnapshotAsync(array $args = [])
 * @method Result createCertificate(array $args = [])
 * @method Promise createCertificateAsync(array $args = [])
 * @method Result createCloudFormationStack(array $args = [])
 * @method Promise createCloudFormationStackAsync(array $args = [])
 * @method Result createContactMethod(array $args = [])
 * @method Promise createContactMethodAsync(array $args = [])
 * @method Result createContainerService(array $args = [])
 * @method Promise createContainerServiceAsync(array $args = [])
 * @method Result createContainerServiceDeployment(array $args = [])
 * @method Promise createContainerServiceDeploymentAsync(array $args = [])
 * @method Result createContainerServiceRegistryLogin(array $args = [])
 * @method Promise createContainerServiceRegistryLoginAsync(array $args = [])
 * @method Result createDisk(array $args = [])
 * @method Promise createDiskAsync(array $args = [])
 * @method Result createDiskFromSnapshot(array $args = [])
 * @method Promise createDiskFromSnapshotAsync(array $args = [])
 * @method Result createDiskSnapshot(array $args = [])
 * @method Promise createDiskSnapshotAsync(array $args = [])
 * @method Result createDistribution(array $args = [])
 * @method Promise createDistributionAsync(array $args = [])
 * @method Result createDomain(array $args = [])
 * @method Promise createDomainAsync(array $args = [])
 * @method Result createDomainEntry(array $args = [])
 * @method Promise createDomainEntryAsync(array $args = [])
 * @method Result createInstanceSnapshot(array $args = [])
 * @method Promise createInstanceSnapshotAsync(array $args = [])
 * @method Result createInstances(array $args = [])
 * @method Promise createInstancesAsync(array $args = [])
 * @method Result createInstancesFromSnapshot(array $args = [])
 * @method Promise createInstancesFromSnapshotAsync(array $args = [])
 * @method Result createKeyPair(array $args = [])
 * @method Promise createKeyPairAsync(array $args = [])
 * @method Result createLoadBalancer(array $args = [])
 * @method Promise createLoadBalancerAsync(array $args = [])
 * @method Result createLoadBalancerTlsCertificate(array $args = [])
 * @method Promise createLoadBalancerTlsCertificateAsync(array $args = [])
 * @method Result createRelationalDatabase(array $args = [])
 * @method Promise createRelationalDatabaseAsync(array $args = [])
 * @method Result createRelationalDatabaseFromSnapshot(array $args = [])
 * @method Promise createRelationalDatabaseFromSnapshotAsync(array $args = [])
 * @method Result createRelationalDatabaseSnapshot(array $args = [])
 * @method Promise createRelationalDatabaseSnapshotAsync(array $args = [])
 * @method Result deleteAlarm(array $args = [])
 * @method Promise deleteAlarmAsync(array $args = [])
 * @method Result deleteAutoSnapshot(array $args = [])
 * @method Promise deleteAutoSnapshotAsync(array $args = [])
 * @method Result deleteCertificate(array $args = [])
 * @method Promise deleteCertificateAsync(array $args = [])
 * @method Result deleteContactMethod(array $args = [])
 * @method Promise deleteContactMethodAsync(array $args = [])
 * @method Result deleteContainerImage(array $args = [])
 * @method Promise deleteContainerImageAsync(array $args = [])
 * @method Result deleteContainerService(array $args = [])
 * @method Promise deleteContainerServiceAsync(array $args = [])
 * @method Result deleteDisk(array $args = [])
 * @method Promise deleteDiskAsync(array $args = [])
 * @method Result deleteDiskSnapshot(array $args = [])
 * @method Promise deleteDiskSnapshotAsync(array $args = [])
 * @method Result deleteDistribution(array $args = [])
 * @method Promise deleteDistributionAsync(array $args = [])
 * @method Result deleteDomain(array $args = [])
 * @method Promise deleteDomainAsync(array $args = [])
 * @method Result deleteDomainEntry(array $args = [])
 * @method Promise deleteDomainEntryAsync(array $args = [])
 * @method Result deleteInstance(array $args = [])
 * @method Promise deleteInstanceAsync(array $args = [])
 * @method Result deleteInstanceSnapshot(array $args = [])
 * @method Promise deleteInstanceSnapshotAsync(array $args = [])
 * @method Result deleteKeyPair(array $args = [])
 * @method Promise deleteKeyPairAsync(array $args = [])
 * @method Result deleteKnownHostKeys(array $args = [])
 * @method Promise deleteKnownHostKeysAsync(array $args = [])
 * @method Result deleteLoadBalancer(array $args = [])
 * @method Promise deleteLoadBalancerAsync(array $args = [])
 * @method Result deleteLoadBalancerTlsCertificate(array $args = [])
 * @method Promise deleteLoadBalancerTlsCertificateAsync(array $args = [])
 * @method Result deleteRelationalDatabase(array $args = [])
 * @method Promise deleteRelationalDatabaseAsync(array $args = [])
 * @method Result deleteRelationalDatabaseSnapshot(array $args = [])
 * @method Promise deleteRelationalDatabaseSnapshotAsync(array $args = [])
 * @method Result detachCertificateFromDistribution(array $args = [])
 * @method Promise detachCertificateFromDistributionAsync(array $args = [])
 * @method Result detachDisk(array $args = [])
 * @method Promise detachDiskAsync(array $args = [])
 * @method Result detachInstancesFromLoadBalancer(array $args = [])
 * @method Promise detachInstancesFromLoadBalancerAsync(array $args = [])
 * @method Result detachStaticIp(array $args = [])
 * @method Promise detachStaticIpAsync(array $args = [])
 * @method Result disableAddOn(array $args = [])
 * @method Promise disableAddOnAsync(array $args = [])
 * @method Result downloadDefaultKeyPair(array $args = [])
 * @method Promise downloadDefaultKeyPairAsync(array $args = [])
 * @method Result enableAddOn(array $args = [])
 * @method Promise enableAddOnAsync(array $args = [])
 * @method Result exportSnapshot(array $args = [])
 * @method Promise exportSnapshotAsync(array $args = [])
 * @method Result getActiveNames(array $args = [])
 * @method Promise getActiveNamesAsync(array $args = [])
 * @method Result getAlarms(array $args = [])
 * @method Promise getAlarmsAsync(array $args = [])
 * @method Result getAutoSnapshots(array $args = [])
 * @method Promise getAutoSnapshotsAsync(array $args = [])
 * @method Result getBlueprints(array $args = [])
 * @method Promise getBlueprintsAsync(array $args = [])
 * @method Result getBundles(array $args = [])
 * @method Promise getBundlesAsync(array $args = [])
 * @method Result getCertificates(array $args = [])
 * @method Promise getCertificatesAsync(array $args = [])
 * @method Result getCloudFormationStackRecords(array $args = [])
 * @method Promise getCloudFormationStackRecordsAsync(array $args = [])
 * @method Result getContactMethods(array $args = [])
 * @method Promise getContactMethodsAsync(array $args = [])
 * @method Result getContainerAPIMetadata(array $args = [])
 * @method Promise getContainerAPIMetadataAsync(array $args = [])
 * @method Result getContainerImages(array $args = [])
 * @method Promise getContainerImagesAsync(array $args = [])
 * @method Result getContainerLog(array $args = [])
 * @method Promise getContainerLogAsync(array $args = [])
 * @method Result getContainerServiceDeployments(array $args = [])
 * @method Promise getContainerServiceDeploymentsAsync(array $args = [])
 * @method Result getContainerServiceMetricData(array $args = [])
 * @method Promise getContainerServiceMetricDataAsync(array $args = [])
 * @method Result getContainerServicePowers(array $args = [])
 * @method Promise getContainerServicePowersAsync(array $args = [])
 * @method Result getContainerServices(array $args = [])
 * @method Promise getContainerServicesAsync(array $args = [])
 * @method Result getDisk(array $args = [])
 * @method Promise getDiskAsync(array $args = [])
 * @method Result getDiskSnapshot(array $args = [])
 * @method Promise getDiskSnapshotAsync(array $args = [])
 * @method Result getDiskSnapshots(array $args = [])
 * @method Promise getDiskSnapshotsAsync(array $args = [])
 * @method Result getDisks(array $args = [])
 * @method Promise getDisksAsync(array $args = [])
 * @method Result getDistributionBundles(array $args = [])
 * @method Promise getDistributionBundlesAsync(array $args = [])
 * @method Result getDistributionLatestCacheReset(array $args = [])
 * @method Promise getDistributionLatestCacheResetAsync(array $args = [])
 * @method Result getDistributionMetricData(array $args = [])
 * @method Promise getDistributionMetricDataAsync(array $args = [])
 * @method Result getDistributions(array $args = [])
 * @method Promise getDistributionsAsync(array $args = [])
 * @method Result getDomain(array $args = [])
 * @method Promise getDomainAsync(array $args = [])
 * @method Result getDomains(array $args = [])
 * @method Promise getDomainsAsync(array $args = [])
 * @method Result getExportSnapshotRecords(array $args = [])
 * @method Promise getExportSnapshotRecordsAsync(array $args = [])
 * @method Result getInstance(array $args = [])
 * @method Promise getInstanceAsync(array $args = [])
 * @method Result getInstanceAccessDetails(array $args = [])
 * @method Promise getInstanceAccessDetailsAsync(array $args = [])
 * @method Result getInstanceMetricData(array $args = [])
 * @method Promise getInstanceMetricDataAsync(array $args = [])
 * @method Result getInstancePortStates(array $args = [])
 * @method Promise getInstancePortStatesAsync(array $args = [])
 * @method Result getInstanceSnapshot(array $args = [])
 * @method Promise getInstanceSnapshotAsync(array $args = [])
 * @method Result getInstanceSnapshots(array $args = [])
 * @method Promise getInstanceSnapshotsAsync(array $args = [])
 * @method Result getInstanceState(array $args = [])
 * @method Promise getInstanceStateAsync(array $args = [])
 * @method Result getInstances(array $args = [])
 * @method Promise getInstancesAsync(array $args = [])
 * @method Result getKeyPair(array $args = [])
 * @method Promise getKeyPairAsync(array $args = [])
 * @method Result getKeyPairs(array $args = [])
 * @method Promise getKeyPairsAsync(array $args = [])
 * @method Result getLoadBalancer(array $args = [])
 * @method Promise getLoadBalancerAsync(array $args = [])
 * @method Result getLoadBalancerMetricData(array $args = [])
 * @method Promise getLoadBalancerMetricDataAsync(array $args = [])
 * @method Result getLoadBalancerTlsCertificates(array $args = [])
 * @method Promise getLoadBalancerTlsCertificatesAsync(array $args = [])
 * @method Result getLoadBalancers(array $args = [])
 * @method Promise getLoadBalancersAsync(array $args = [])
 * @method Result getOperation(array $args = [])
 * @method Promise getOperationAsync(array $args = [])
 * @method Result getOperations(array $args = [])
 * @method Promise getOperationsAsync(array $args = [])
 * @method Result getOperationsForResource(array $args = [])
 * @method Promise getOperationsForResourceAsync(array $args = [])
 * @method Result getRegions(array $args = [])
 * @method Promise getRegionsAsync(array $args = [])
 * @method Result getRelationalDatabase(array $args = [])
 * @method Promise getRelationalDatabaseAsync(array $args = [])
 * @method Result getRelationalDatabaseBlueprints(array $args = [])
 * @method Promise getRelationalDatabaseBlueprintsAsync(array $args = [])
 * @method Result getRelationalDatabaseBundles(array $args = [])
 * @method Promise getRelationalDatabaseBundlesAsync(array $args = [])
 * @method Result getRelationalDatabaseEvents(array $args = [])
 * @method Promise getRelationalDatabaseEventsAsync(array $args = [])
 * @method Result getRelationalDatabaseLogEvents(array $args = [])
 * @method Promise getRelationalDatabaseLogEventsAsync(array $args = [])
 * @method Result getRelationalDatabaseLogStreams(array $args = [])
 * @method Promise getRelationalDatabaseLogStreamsAsync(array $args = [])
 * @method Result getRelationalDatabaseMasterUserPassword(array $args = [])
 * @method Promise getRelationalDatabaseMasterUserPasswordAsync(array $args = [])
 * @method Result getRelationalDatabaseMetricData(array $args = [])
 * @method Promise getRelationalDatabaseMetricDataAsync(array $args = [])
 * @method Result getRelationalDatabaseParameters(array $args = [])
 * @method Promise getRelationalDatabaseParametersAsync(array $args = [])
 * @method Result getRelationalDatabaseSnapshot(array $args = [])
 * @method Promise getRelationalDatabaseSnapshotAsync(array $args = [])
 * @method Result getRelationalDatabaseSnapshots(array $args = [])
 * @method Promise getRelationalDatabaseSnapshotsAsync(array $args = [])
 * @method Result getRelationalDatabases(array $args = [])
 * @method Promise getRelationalDatabasesAsync(array $args = [])
 * @method Result getStaticIp(array $args = [])
 * @method Promise getStaticIpAsync(array $args = [])
 * @method Result getStaticIps(array $args = [])
 * @method Promise getStaticIpsAsync(array $args = [])
 * @method Result importKeyPair(array $args = [])
 * @method Promise importKeyPairAsync(array $args = [])
 * @method Result isVpcPeered(array $args = [])
 * @method Promise isVpcPeeredAsync(array $args = [])
 * @method Result openInstancePublicPorts(array $args = [])
 * @method Promise openInstancePublicPortsAsync(array $args = [])
 * @method Result peerVpc(array $args = [])
 * @method Promise peerVpcAsync(array $args = [])
 * @method Result putAlarm(array $args = [])
 * @method Promise putAlarmAsync(array $args = [])
 * @method Result putInstancePublicPorts(array $args = [])
 * @method Promise putInstancePublicPortsAsync(array $args = [])
 * @method Result rebootInstance(array $args = [])
 * @method Promise rebootInstanceAsync(array $args = [])
 * @method Result rebootRelationalDatabase(array $args = [])
 * @method Promise rebootRelationalDatabaseAsync(array $args = [])
 * @method Result registerContainerImage(array $args = [])
 * @method Promise registerContainerImageAsync(array $args = [])
 * @method Result releaseStaticIp(array $args = [])
 * @method Promise releaseStaticIpAsync(array $args = [])
 * @method Result resetDistributionCache(array $args = [])
 * @method Promise resetDistributionCacheAsync(array $args = [])
 * @method Result sendContactMethodVerification(array $args = [])
 * @method Promise sendContactMethodVerificationAsync(array $args = [])
 * @method Result setIpAddressType(array $args = [])
 * @method Promise setIpAddressTypeAsync(array $args = [])
 * @method Result startInstance(array $args = [])
 * @method Promise startInstanceAsync(array $args = [])
 * @method Result startRelationalDatabase(array $args = [])
 * @method Promise startRelationalDatabaseAsync(array $args = [])
 * @method Result stopInstance(array $args = [])
 * @method Promise stopInstanceAsync(array $args = [])
 * @method Result stopRelationalDatabase(array $args = [])
 * @method Promise stopRelationalDatabaseAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result testAlarm(array $args = [])
 * @method Promise testAlarmAsync(array $args = [])
 * @method Result unpeerVpc(array $args = [])
 * @method Promise unpeerVpcAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateContainerService(array $args = [])
 * @method Promise updateContainerServiceAsync(array $args = [])
 * @method Result updateDistribution(array $args = [])
 * @method Promise updateDistributionAsync(array $args = [])
 * @method Result updateDistributionBundle(array $args = [])
 * @method Promise updateDistributionBundleAsync(array $args = [])
 * @method Result updateDomainEntry(array $args = [])
 * @method Promise updateDomainEntryAsync(array $args = [])
 * @method Result updateLoadBalancerAttribute(array $args = [])
 * @method Promise updateLoadBalancerAttributeAsync(array $args = [])
 * @method Result updateRelationalDatabase(array $args = [])
 * @method Promise updateRelationalDatabaseAsync(array $args = [])
 * @method Result updateRelationalDatabaseParameters(array $args = [])
 * @method Promise updateRelationalDatabaseParametersAsync(array $args = [])
 */
class LightsailClient extends AwsClient {}
