<?php
namespace Aws\LexModelsV2;

use Aws\AwsClient;
use Aws\CommandInterface;
use Aws\Result;
use GuzzleHttp\Promise\Promise;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **Amazon Lex Model Building V2** service.
 * @method Result buildBotLocale(array $args = [])
 * @method Promise buildBotLocaleAsync(array $args = [])
 * @method Result createBot(array $args = [])
 * @method Promise createBotAsync(array $args = [])
 * @method Result createBotAlias(array $args = [])
 * @method Promise createBotAliasAsync(array $args = [])
 * @method Result createBotLocale(array $args = [])
 * @method Promise createBotLocaleAsync(array $args = [])
 * @method Result createBotVersion(array $args = [])
 * @method Promise createBotVersionAsync(array $args = [])
 * @method Result createIntent(array $args = [])
 * @method Promise createIntentAsync(array $args = [])
 * @method Result createSlot(array $args = [])
 * @method Promise createSlotAsync(array $args = [])
 * @method Result createSlotType(array $args = [])
 * @method Promise createSlotTypeAsync(array $args = [])
 * @method Result deleteBot(array $args = [])
 * @method Promise deleteBotAsync(array $args = [])
 * @method Result deleteBotAlias(array $args = [])
 * @method Promise deleteBotAliasAsync(array $args = [])
 * @method Result deleteBotLocale(array $args = [])
 * @method Promise deleteBotLocaleAsync(array $args = [])
 * @method Result deleteBotVersion(array $args = [])
 * @method Promise deleteBotVersionAsync(array $args = [])
 * @method Result deleteIntent(array $args = [])
 * @method Promise deleteIntentAsync(array $args = [])
 * @method Result deleteSlot(array $args = [])
 * @method Promise deleteSlotAsync(array $args = [])
 * @method Result deleteSlotType(array $args = [])
 * @method Promise deleteSlotTypeAsync(array $args = [])
 * @method Result describeBot(array $args = [])
 * @method Promise describeBotAsync(array $args = [])
 * @method Result describeBotAlias(array $args = [])
 * @method Promise describeBotAliasAsync(array $args = [])
 * @method Result describeBotLocale(array $args = [])
 * @method Promise describeBotLocaleAsync(array $args = [])
 * @method Result describeBotVersion(array $args = [])
 * @method Promise describeBotVersionAsync(array $args = [])
 * @method Result describeIntent(array $args = [])
 * @method Promise describeIntentAsync(array $args = [])
 * @method Result describeSlot(array $args = [])
 * @method Promise describeSlotAsync(array $args = [])
 * @method Result describeSlotType(array $args = [])
 * @method Promise describeSlotTypeAsync(array $args = [])
 * @method Result listBotAliases(array $args = [])
 * @method Promise listBotAliasesAsync(array $args = [])
 * @method Result listBotLocales(array $args = [])
 * @method Promise listBotLocalesAsync(array $args = [])
 * @method Result listBotVersions(array $args = [])
 * @method Promise listBotVersionsAsync(array $args = [])
 * @method Result listBots(array $args = [])
 * @method Promise listBotsAsync(array $args = [])
 * @method Result listBuiltInIntents(array $args = [])
 * @method Promise listBuiltInIntentsAsync(array $args = [])
 * @method Result listBuiltInSlotTypes(array $args = [])
 * @method Promise listBuiltInSlotTypesAsync(array $args = [])
 * @method Result listIntents(array $args = [])
 * @method Promise listIntentsAsync(array $args = [])
 * @method Result listSlotTypes(array $args = [])
 * @method Promise listSlotTypesAsync(array $args = [])
 * @method Result listSlots(array $args = [])
 * @method Promise listSlotsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateBot(array $args = [])
 * @method Promise updateBotAsync(array $args = [])
 * @method Result updateBotAlias(array $args = [])
 * @method Promise updateBotAliasAsync(array $args = [])
 * @method Result updateBotLocale(array $args = [])
 * @method Promise updateBotLocaleAsync(array $args = [])
 * @method Result updateIntent(array $args = [])
 * @method Promise updateIntentAsync(array $args = [])
 * @method Result updateSlot(array $args = [])
 * @method Promise updateSlotAsync(array $args = [])
 * @method Result updateSlotType(array $args = [])
 * @method Promise updateSlotTypeAsync(array $args = [])
 */
class LexModelsV2Client extends AwsClient {
    public function __construct(array $args)
    {
        parent::__construct($args);

        // Setup middleware.
        $stack = $this->getHandlerList();
        $stack->appendBuild($this->updateContentType(), 'models.lex.v2.updateContentType');
    }

    /**
     * Creates a middleware that updates the Content-Type header when it is present;
     * this is necessary because the service protocol is rest-json which by default
     * sets the content-type to 'application/json', but interacting with the service
     * requires it to be set to x-amz-json-1.1
     *
     * @return callable
     */
    private function updateContentType()
    {
        return function (callable $handler) {
            return function (
                CommandInterface $command,
                RequestInterface $request = null
            ) use ($handler) {
                $contentType = $request->getHeader('Content-Type');
                if (!empty($contentType) && $contentType[0] == 'application/json') {
                    return $handler($command, $request->withHeader(
                        'Content-Type',
                        'application/x-amz-json-1.1'
                    ));
                }
                return $handler($command, $request);
            };
        };
    }
}
