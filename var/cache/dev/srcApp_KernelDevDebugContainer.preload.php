<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerJBd8ix8/srcApp_KernelDevDebugContainer.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ActeurController';
$classes[] = 'App\Controller\CinelandController';
$classes[] = 'App\Controller\FilmController';
$classes[] = 'App\Controller\GenreController';
$classes[] = 'App\Form\ActeurAddType';
$classes[] = 'App\Form\ActeurRemoveType';
$classes[] = 'App\Form\ActeurSelectType';
$classes[] = 'App\Form\ActeurUpdateAgeMinimalAllFilmsType';
$classes[] = 'App\Form\ActeurUpdateType';
$classes[] = 'App\Form\FilmAddType';
$classes[] = 'App\Form\FilmDateBetweenTwoType';
$classes[] = 'App\Form\FilmDateInfToType';
$classes[] = 'App\Form\FilmHaveTheseTwoActorsType';
$classes[] = 'App\Form\FilmRemoveType';
$classes[] = 'App\Form\FilmSearchType';
$classes[] = 'App\Form\FilmSelectType';
$classes[] = 'App\Form\FilmUpdateNoteType';
$classes[] = 'App\Form\FilmUpdateType';
$classes[] = 'App\Form\GenreAddType';
$classes[] = 'App\Form\GenreRemoveType';
$classes[] = 'App\Form\GenreSelectType';
$classes[] = 'App\Form\GenreUpdateType';
$classes[] = 'App\Form\StringDateTimeType';
$classes[] = 'App\Form\StringToDateTimeTransformer';
$classes[] = 'App\Repository\ActeurRepository';
$classes[] = 'App\Repository\FilmRepository';
$classes[] = 'App\Repository\GenreRepository';
$classes[] = 'App\Validator\Constraints\DateBetweenValidator';
$classes[] = 'App\Validator\Constraints\EntityExistValidator';
$classes[] = 'App\Validator\Constraints\EntityHasNotChildValidator';
$classes[] = 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AboutCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand';
$classes[] = 'Symfony\Component\Form\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand';
$classes[] = 'Symfony\Component\Console\CommandLoader\ContainerCommandLoader';
$classes[] = 'Symfony\Component\Console\EventListener\ErrorListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DumpListener';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextualizedDumper';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'string';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand';
$classes[] = 'Doctrine\Migrations\DependencyFactory';
$classes[] = 'Doctrine\Migrations\Configuration\Migration\ExistingConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\Configuration';
$classes[] = 'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration';
$classes[] = 'Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\CurrentCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\DiffCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\ExecuteCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\GenerateCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\LatestCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\MigrateCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\RollupCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\StatusCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\UpToDateCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\VersionCommand';
$classes[] = 'Doctrine\Migrations\Tools\Console\Command\ListCommand';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bundle\MakerBundle\Command\MakerCommand';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeCommand';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeController';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeCrud';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeEntity';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeFixtures';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeForm';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMessage';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeMigration';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeResetPassword';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeSubscriber';
$classes[] = 'Symfony\Bundle\MakerBundle\EventRegistry';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeUnitTest';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeUser';
$classes[] = 'Symfony\Bundle\MakerBundle\Security\UserClassBuilder';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeValidator';
$classes[] = 'Symfony\Bundle\MakerBundle\Maker\MakeVoter';
$classes[] = 'Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber';
$classes[] = 'Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper';
$classes[] = 'Symfony\Bundle\MakerBundle\Doctrine\EntityClassGenerator';
$classes[] = 'Symfony\Bundle\MakerBundle\FileManager';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\AutoloaderUtil';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter';
$classes[] = 'Symfony\Bundle\MakerBundle\Generator';
$classes[] = 'Symfony\Bundle\MakerBundle\Util\PhpCompatUtil';
$classes[] = 'Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer';
$classes[] = 'Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater';
$classes[] = 'Symfony\Bridge\Monolog\Command\ServerLogCommand';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Environment';
$classes[] = 'Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'App\Twig\AppExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Command\DebugCommand';
$classes[] = 'Symfony\Bundle\TwigBundle\Command\LintCommand';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer';
$classes[] = 'Symfony\Bundle\TwigBundle\TemplateIterator';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Command\ServerDumpCommand';
$classes[] = 'Symfony\Component\VarDumper\Server\DumpServer';
$classes[] = 'Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor';
$classes[] = 'Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor';
$classes[] = 'Symfony\Component\VarDumper\Dumper\CliDumper';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

Preloader::preload($classes);
