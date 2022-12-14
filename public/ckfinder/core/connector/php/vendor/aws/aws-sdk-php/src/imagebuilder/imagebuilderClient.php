<?php
namespace Aws\imagebuilder;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **EC2 Image Builder** service.
 * @method Result cancelImageCreation(array $args = [])
 * @method Promise cancelImageCreationAsync(array $args = [])
 * @method Result createComponent(array $args = [])
 * @method Promise createComponentAsync(array $args = [])
 * @method Result createContainerRecipe(array $args = [])
 * @method Promise createContainerRecipeAsync(array $args = [])
 * @method Result createDistributionConfiguration(array $args = [])
 * @method Promise createDistributionConfigurationAsync(array $args = [])
 * @method Result createImage(array $args = [])
 * @method Promise createImageAsync(array $args = [])
 * @method Result createImagePipeline(array $args = [])
 * @method Promise createImagePipelineAsync(array $args = [])
 * @method Result createImageRecipe(array $args = [])
 * @method Promise createImageRecipeAsync(array $args = [])
 * @method Result createInfrastructureConfiguration(array $args = [])
 * @method Promise createInfrastructureConfigurationAsync(array $args = [])
 * @method Result deleteComponent(array $args = [])
 * @method Promise deleteComponentAsync(array $args = [])
 * @method Result deleteContainerRecipe(array $args = [])
 * @method Promise deleteContainerRecipeAsync(array $args = [])
 * @method Result deleteDistributionConfiguration(array $args = [])
 * @method Promise deleteDistributionConfigurationAsync(array $args = [])
 * @method Result deleteImage(array $args = [])
 * @method Promise deleteImageAsync(array $args = [])
 * @method Result deleteImagePipeline(array $args = [])
 * @method Promise deleteImagePipelineAsync(array $args = [])
 * @method Result deleteImageRecipe(array $args = [])
 * @method Promise deleteImageRecipeAsync(array $args = [])
 * @method Result deleteInfrastructureConfiguration(array $args = [])
 * @method Promise deleteInfrastructureConfigurationAsync(array $args = [])
 * @method Result getComponent(array $args = [])
 * @method Promise getComponentAsync(array $args = [])
 * @method Result getComponentPolicy(array $args = [])
 * @method Promise getComponentPolicyAsync(array $args = [])
 * @method Result getContainerRecipe(array $args = [])
 * @method Promise getContainerRecipeAsync(array $args = [])
 * @method Result getContainerRecipePolicy(array $args = [])
 * @method Promise getContainerRecipePolicyAsync(array $args = [])
 * @method Result getDistributionConfiguration(array $args = [])
 * @method Promise getDistributionConfigurationAsync(array $args = [])
 * @method Result getImage(array $args = [])
 * @method Promise getImageAsync(array $args = [])
 * @method Result getImagePipeline(array $args = [])
 * @method Promise getImagePipelineAsync(array $args = [])
 * @method Result getImagePolicy(array $args = [])
 * @method Promise getImagePolicyAsync(array $args = [])
 * @method Result getImageRecipe(array $args = [])
 * @method Promise getImageRecipeAsync(array $args = [])
 * @method Result getImageRecipePolicy(array $args = [])
 * @method Promise getImageRecipePolicyAsync(array $args = [])
 * @method Result getInfrastructureConfiguration(array $args = [])
 * @method Promise getInfrastructureConfigurationAsync(array $args = [])
 * @method Result importComponent(array $args = [])
 * @method Promise importComponentAsync(array $args = [])
 * @method Result listComponentBuildVersions(array $args = [])
 * @method Promise listComponentBuildVersionsAsync(array $args = [])
 * @method Result listComponents(array $args = [])
 * @method Promise listComponentsAsync(array $args = [])
 * @method Result listContainerRecipes(array $args = [])
 * @method Promise listContainerRecipesAsync(array $args = [])
 * @method Result listDistributionConfigurations(array $args = [])
 * @method Promise listDistributionConfigurationsAsync(array $args = [])
 * @method Result listImageBuildVersions(array $args = [])
 * @method Promise listImageBuildVersionsAsync(array $args = [])
 * @method Result listImagePackages(array $args = [])
 * @method Promise listImagePackagesAsync(array $args = [])
 * @method Result listImagePipelineImages(array $args = [])
 * @method Promise listImagePipelineImagesAsync(array $args = [])
 * @method Result listImagePipelines(array $args = [])
 * @method Promise listImagePipelinesAsync(array $args = [])
 * @method Result listImageRecipes(array $args = [])
 * @method Promise listImageRecipesAsync(array $args = [])
 * @method Result listImages(array $args = [])
 * @method Promise listImagesAsync(array $args = [])
 * @method Result listInfrastructureConfigurations(array $args = [])
 * @method Promise listInfrastructureConfigurationsAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result putComponentPolicy(array $args = [])
 * @method Promise putComponentPolicyAsync(array $args = [])
 * @method Result putContainerRecipePolicy(array $args = [])
 * @method Promise putContainerRecipePolicyAsync(array $args = [])
 * @method Result putImagePolicy(array $args = [])
 * @method Promise putImagePolicyAsync(array $args = [])
 * @method Result putImageRecipePolicy(array $args = [])
 * @method Promise putImageRecipePolicyAsync(array $args = [])
 * @method Result startImagePipelineExecution(array $args = [])
 * @method Promise startImagePipelineExecutionAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateDistributionConfiguration(array $args = [])
 * @method Promise updateDistributionConfigurationAsync(array $args = [])
 * @method Result updateImagePipeline(array $args = [])
 * @method Promise updateImagePipelineAsync(array $args = [])
 * @method Result updateInfrastructureConfiguration(array $args = [])
 * @method Promise updateInfrastructureConfigurationAsync(array $args = [])
 */
class imagebuilderClient extends AwsClient {}
