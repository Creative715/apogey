<?php
namespace Aws\AccessAnalyzer;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Access Analyzer** service.
 * @method Result applyArchiveRule(array $args = [])
 * @method Promise applyArchiveRuleAsync(array $args = [])
 * @method Result createAccessPreview(array $args = [])
 * @method Promise createAccessPreviewAsync(array $args = [])
 * @method Result createAnalyzer(array $args = [])
 * @method Promise createAnalyzerAsync(array $args = [])
 * @method Result createArchiveRule(array $args = [])
 * @method Promise createArchiveRuleAsync(array $args = [])
 * @method Result deleteAnalyzer(array $args = [])
 * @method Promise deleteAnalyzerAsync(array $args = [])
 * @method Result deleteArchiveRule(array $args = [])
 * @method Promise deleteArchiveRuleAsync(array $args = [])
 * @method Result getAccessPreview(array $args = [])
 * @method Promise getAccessPreviewAsync(array $args = [])
 * @method Result getAnalyzedResource(array $args = [])
 * @method Promise getAnalyzedResourceAsync(array $args = [])
 * @method Result getAnalyzer(array $args = [])
 * @method Promise getAnalyzerAsync(array $args = [])
 * @method Result getArchiveRule(array $args = [])
 * @method Promise getArchiveRuleAsync(array $args = [])
 * @method Result getFinding(array $args = [])
 * @method Promise getFindingAsync(array $args = [])
 * @method Result listAccessPreviewFindings(array $args = [])
 * @method Promise listAccessPreviewFindingsAsync(array $args = [])
 * @method Result listAccessPreviews(array $args = [])
 * @method Promise listAccessPreviewsAsync(array $args = [])
 * @method Result listAnalyzedResources(array $args = [])
 * @method Promise listAnalyzedResourcesAsync(array $args = [])
 * @method Result listAnalyzers(array $args = [])
 * @method Promise listAnalyzersAsync(array $args = [])
 * @method Result listArchiveRules(array $args = [])
 * @method Promise listArchiveRulesAsync(array $args = [])
 * @method Result listFindings(array $args = [])
 * @method Promise listFindingsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result startResourceScan(array $args = [])
 * @method Promise startResourceScanAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateArchiveRule(array $args = [])
 * @method Promise updateArchiveRuleAsync(array $args = [])
 * @method Result updateFindings(array $args = [])
 * @method Promise updateFindingsAsync(array $args = [])
 */
class AccessAnalyzerClient extends AwsClient {}
