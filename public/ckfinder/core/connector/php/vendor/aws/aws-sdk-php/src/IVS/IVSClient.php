<?php
namespace Aws\IVS;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Interactive Video Service** service.
 * @method Result batchGetChannel(array $args = [])
 * @method Promise batchGetChannelAsync(array $args = [])
 * @method Result batchGetStreamKey(array $args = [])
 * @method Promise batchGetStreamKeyAsync(array $args = [])
 * @method Result createChannel(array $args = [])
 * @method Promise createChannelAsync(array $args = [])
 * @method Result createStreamKey(array $args = [])
 * @method Promise createStreamKeyAsync(array $args = [])
 * @method Result deleteChannel(array $args = [])
 * @method Promise deleteChannelAsync(array $args = [])
 * @method Result deletePlaybackKeyPair(array $args = [])
 * @method Promise deletePlaybackKeyPairAsync(array $args = [])
 * @method Result deleteStreamKey(array $args = [])
 * @method Promise deleteStreamKeyAsync(array $args = [])
 * @method Result getChannel(array $args = [])
 * @method Promise getChannelAsync(array $args = [])
 * @method Result getPlaybackKeyPair(array $args = [])
 * @method Promise getPlaybackKeyPairAsync(array $args = [])
 * @method Result getStream(array $args = [])
 * @method Promise getStreamAsync(array $args = [])
 * @method Result getStreamKey(array $args = [])
 * @method Promise getStreamKeyAsync(array $args = [])
 * @method Result importPlaybackKeyPair(array $args = [])
 * @method Promise importPlaybackKeyPairAsync(array $args = [])
 * @method Result listChannels(array $args = [])
 * @method Promise listChannelsAsync(array $args = [])
 * @method Result listPlaybackKeyPairs(array $args = [])
 * @method Promise listPlaybackKeyPairsAsync(array $args = [])
 * @method Result listStreamKeys(array $args = [])
 * @method Promise listStreamKeysAsync(array $args = [])
 * @method Result listStreams(array $args = [])
 * @method Promise listStreamsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putMetadata(array $args = [])
 * @method Promise putMetadataAsync(array $args = [])
 * @method Result stopStream(array $args = [])
 * @method Promise stopStreamAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateChannel(array $args = [])
 * @method Promise updateChannelAsync(array $args = [])
 */
class IVSClient extends AwsClient {}
