<?php
namespace Aws\DevOpsGuru;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon DevOps Guru** service.
 * @method Result addNotificationChannel(array $args = [])
 * @method Promise addNotificationChannelAsync(array $args = [])
 * @method Result describeAccountHealth(array $args = [])
 * @method Promise describeAccountHealthAsync(array $args = [])
 * @method Result describeAccountOverview(array $args = [])
 * @method Promise describeAccountOverviewAsync(array $args = [])
 * @method Result describeAnomaly(array $args = [])
 * @method Promise describeAnomalyAsync(array $args = [])
 * @method Result describeFeedback(array $args = [])
 * @method Promise describeFeedbackAsync(array $args = [])
 * @method Result describeInsight(array $args = [])
 * @method Promise describeInsightAsync(array $args = [])
 * @method Result describeResourceCollectionHealth(array $args = [])
 * @method Promise describeResourceCollectionHealthAsync(array $args = [])
 * @method Result describeServiceIntegration(array $args = [])
 * @method Promise describeServiceIntegrationAsync(array $args = [])
 * @method Result getResourceCollection(array $args = [])
 * @method Promise getResourceCollectionAsync(array $args = [])
 * @method Result listAnomaliesForInsight(array $args = [])
 * @method Promise listAnomaliesForInsightAsync(array $args = [])
 * @method Result listEvents(array $args = [])
 * @method Promise listEventsAsync(array $args = [])
 * @method Result listInsights(array $args = [])
 * @method Promise listInsightsAsync(array $args = [])
 * @method Result listNotificationChannels(array $args = [])
 * @method Promise listNotificationChannelsAsync(array $args = [])
 * @method Result listRecommendations(array $args = [])
 * @method Promise listRecommendationsAsync(array $args = [])
 * @method Result putFeedback(array $args = [])
 * @method Promise putFeedbackAsync(array $args = [])
 * @method Result removeNotificationChannel(array $args = [])
 * @method Promise removeNotificationChannelAsync(array $args = [])
 * @method Result searchInsights(array $args = [])
 * @method Promise searchInsightsAsync(array $args = [])
 * @method Result updateResourceCollection(array $args = [])
 * @method Promise updateResourceCollectionAsync(array $args = [])
 * @method Result updateServiceIntegration(array $args = [])
 * @method Promise updateServiceIntegrationAsync(array $args = [])
 */
class DevOpsGuruClient extends AwsClient {}
