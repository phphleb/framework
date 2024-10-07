<?php

/*declare(strict_types=1);*/

/**
 * Adding a class autoload path: classname => path.
 *
 * Добавление пути для автозагрузки класса: classname => path.
 */
namespace Hleb\Init\Connectors;

/**
 * @internal
 */
final class HlebConnector
{
    public static array $map = [
        'Hleb\Main\Console\Console' => '/Main/Console/Console.php',
        'Hleb\Main\Insert\ExternalSingleton' => '/Main/Insert/ExternalSingleton.php',
        'Hleb\Constructor\Containers\CoreContainerInterface' => '/Constructor/Containers/CoreContainerInterface.php',
        'Hleb\Main\Insert\BaseAsyncSingleton' => '/Main/Insert/BaseAsyncSingleton.php',
        'Hleb\Main\Insert\BaseSingleton' => '/Main/Insert/BaseSingleton.php',
        'Hleb\Main\Routes\StandardRoute' => '/Main/Routes/StandardRoute.php',
        'Hleb\Base\Container' => '/Base/Container.php',
        'Hleb\Base\RollbackInterface' => '/Base/RollbackInterface.php',
        'Hleb\Base\Controller' => '/Base/Controller.php',
        'Hleb\Base\Middleware' => '/Base/Middleware.php',
        'Hleb\Base\Model' => '/Base/Model.php',
        'Hleb\Base\Module' => '/Base/Module.php',
        'Hleb\Base\Task' => '/Base/Task.php',
        'Hleb\Base\Scheduler' => '/Base/Scheduler.php',
        'Hleb\Base\Event' => '/Base/Event.php',
        'Hleb\Base\PageController' => '/Base/PageController.php',
        'Hleb\Constructor\Actions\ActionInterface' => '/Constructor/Actions/ActionInterface.php',
        'Hleb\Constructor\Actions\ClearCacheAction' => '/Constructor/Actions/ClearCacheAction.php',
        'Hleb\Constructor\Actions\UpdateRouteCacheAction' => '/Constructor/Actions/UpdateRouteCacheAction.php',
        'Hleb\Constructor\Containers\CoreContainer' => '/Constructor/Containers/CoreContainer.php',
        'Hleb\Constructor\Containers\BaseContainerFactory' => '/Constructor/Containers/BaseContainerFactory.php',
        'Hleb\Constructor\Attributes\Task\Purpose' => '/Constructor/Attributes/Task/Purpose.php',
        'Hleb\Constructor\Attributes\Disabled' => '/Constructor/Attributes/Disabled.php',
        'Hleb\Constructor\Attributes\Dependency' => '/Constructor/Attributes/Dependency.php',
        'Hleb\Constructor\Attributes\Accessible' => '/Constructor/Attributes/Accessible.php',
        'Hleb\Constructor\Attributes\AvailableAsParent' => '/Constructor/Attributes/AvailableAsParent.php',
        'Hleb\Constructor\Attributes\ForTestOnly' => '/Constructor/Attributes/ForTestOnly.php',
        'Hleb\Constructor\Attributes\Hidden' => '/Constructor/Attributes/Hidden.php',
        'Hleb\Constructor\Attributes\NotFinal' => '/Constructor/Attributes/NotFinal.php',
        'Hleb\Constructor\Cache\CacheRoutes' => '/Constructor/Cache/CacheRoutes.php',
        'Hleb\Constructor\Cache\RouteMark' => '/Constructor/Cache/RouteMark.php',
        'Hleb\Constructor\Cache\OnceResult' => '/Constructor/Cache/OnceResult.php',
        'Hleb\Constructor\Cache\WebCron' => '/Constructor/Cache/WebCron.php',
        'Hleb\Constructor\Cache\ClearRandomFileCache' => '/Constructor/Cache/ClearRandomFileCache.php',
        'Hleb\Constructor\Cache\ClassWithDataCreator' => '/Constructor/Cache/ClassWithDataCreator.php',
        'Hleb\Constructor\Data\DebugAnalytics' => '/Constructor/Data/DebugAnalytics.php',
        'Hleb\Constructor\Data\DynamicParams' => '/Constructor/Data/DynamicParams.php',
        'Hleb\Constructor\Data\Key' => '/Constructor/Data/Key.php',
        'Hleb\Constructor\Data\RoutesPreview' => '/Constructor/Data/RoutesPreview.php',
        'Hleb\Constructor\Data\SystemSettings' => '/Constructor/Data/SystemSettings.php',
        'Hleb\Constructor\Data\UrlManager' => '/Constructor/Data/UrlManager.php',
        'Hleb\Constructor\Data\MainLogLevel' => '/Constructor/Data/MainLogLevel.php',
        'Hleb\Constructor\Data\View' => '/Constructor/Data/View.php',
        'Hleb\Constructor\Protected\Csrf' => '/Constructor/Protected/Csrf.php',
        'Hleb\Constructor\Templates\TemplateInterface' => '/Constructor/Templates/TemplateInterface.php',
        'Hleb\Constructor\Templates\PhpTemplate' => '/Constructor/Templates/PhpTemplate.php',
        'Hleb\Constructor\Templates\Template' => '/Constructor/Templates/Template.php',
        'Hleb\Constructor\Templates\TwigTemplate' => '/Constructor/Templates/TwigTemplate.php',
        'Hleb\Database\PdoManager' => '/Database/PdoManager.php',
        'Hleb\Database\DbExcessLog' => '/Database/DbExcessLog.php',
        'Hleb\Database\SystemDB' => '/Database/SystemDB.php',
        'Hleb\Database\StandardDB' => '/Database/StandardDB.php',
        'Hleb\Helpers\Abracadabra' => '/Helpers/Abracadabra.php',
        'Hleb\Helpers\ArrayHelper' => '/Helpers/ArrayHelper.php',
        'Hleb\Helpers\ArrayWriting' => '/Helpers/ArrayWriting.php',
        'Hleb\Helpers\StringHelper' => '/Helpers/StringHelper.php',
        'Hleb\Helpers\AttributeHelper' => '/Helpers/AttributeHelper.php',
        'Hleb\Helpers\DefaultValueHelper' => '/Helpers/DefaultValueHelper.php',
        'Hleb\Helpers\ClassDataInFile' => '/Helpers/ClassDataInFile.php',
        'Hleb\Helpers\DirectoryCleaner' => '/Helpers/DirectoryCleaner.php',
        'Hleb\Helpers\DirectoryInspector' => '/Helpers/DirectoryInspector.php',
        'Hleb\Helpers\DirectoryHelper' => '/Helpers/DirectoryHelper.php',
        'Hleb\Helpers\NameConverter' => '/Helpers/NameConverter.php',
        'Hleb\Helpers\HostHelper' => '/Helpers/HostHelper.php',
        'Hleb\Helpers\RangeChecker' => '/Helpers/RangeChecker.php',
        'Hleb\Helpers\ReflectionMethod' => '/Helpers/ReflectionMethod.php',
        'Hleb\Helpers\ReflectionConstant' => '/Helpers/ReflectionConstant.php',
        'Hleb\Helpers\TaskHelper' => '/Helpers/TaskHelper.php',
        'Hleb\Helpers\ResourceViewHelper' => '/Helpers/ResourceViewHelper.php',
        'Hleb\Helpers\RouteHelper' => '/Helpers/RouteHelper.php',
        'Hleb\Helpers\StorageLibConfigurator' => '/Helpers/StorageLibConfigurator.php',
        'Hleb\Helpers\StrToList' => '/Helpers/StrToList.php',
        'Hleb\Helpers\PhpCommentHelper' => '/Helpers/PhpCommentHelper.php',
        'Hleb\Helpers\ProtectedFileSaver' => '/Helpers/ProtectedFileSaver.php',
        'Hleb\HttpMethods\External\RequestUri' => '/HttpMethods/External/RequestUri.php',
        'Hleb\HttpMethods\External\SystemRequest' => '/HttpMethods/External/SystemRequest.php',
        'Hleb\HttpMethods\External\Response' => '/HttpMethods/External/Response.php',
        'Hleb\HttpMethods\Intelligence\AsyncConsolidator' => '/HttpMethods/Intelligence/AsyncConsolidator.php',
        'Hleb\HttpMethods\Intelligence\Cookies\CookieInterface' => '/HttpMethods/Intelligence/Cookies/CookieInterface.php',
        'Hleb\HttpMethods\Intelligence\Cookies\AsyncCookies' => '/HttpMethods/Intelligence/Cookies/AsyncCookies.php',
        'Hleb\HttpMethods\Intelligence\Cookies\ParseCookies' => '/HttpMethods/Intelligence/Cookies/ParseCookies.php',
        'Hleb\HttpMethods\Intelligence\Cookies\StandardCookies' => '/HttpMethods/Intelligence/Cookies/StandardCookies.php',
        'Hleb\HttpMethods\Specifier\DataType' => '/HttpMethods/Specifier/DataType.php',
        'Hleb\Init\AddressBar' => '/Init/AddressBar.php',
        'Hleb\Init\Autoloader' => '/Init/Autoloader.php',
        'Hleb\Init\Connectors\PhphlebConnector' => '/Init/Connectors/PhphlebConnector.php',
        'Hleb\Init\ErrorLog' => '/Init/ErrorLog.php',
        'Hleb\Main\BaseErrorPage' => '/Main/BaseErrorPage.php',
        'Hleb\Main\Console\Commands\Features\FeatureInterface' => '/Main/Console/Commands/Features/FeatureInterface.php',
        'Hleb\Main\Console\Commands\Features\AutoloaderSupport\AutoloaderSupport' => '/Main/Console/Commands/Features/AutoloaderSupport/AutoloaderSupport.php',
        'Hleb\Main\Console\Commands\Features\CodeCleanup\ClearingComments' => '/Main/Console/Commands/Features/CodeCleanup/ClearingComments.php',
        'Hleb\Main\Console\Commands\Features\ExecutionSpeed\ExecutionSpeed' => '/Main/Console/Commands/Features/ExecutionSpeed/ExecutionSpeed.php',
        'Hleb\Main\Console\Commands\Features\FlatKegling\StartData' => '/Main/Console/Commands/Features/FlatKegling/StartData.php',
        'Hleb\Main\Console\Commands\Features\FlatKegling\Calculations' => '/Main/Console/Commands/Features/FlatKegling/Calculations.php',
        'Hleb\Main\Console\Commands\Features\FlatKegling\ExpressionTrait' => '/Main/Console/Commands/Features/FlatKegling/ExpressionTrait.php',
        'Hleb\Main\Console\Commands\Features\FlatKegling\FlatKeglingGame' => '/Main/Console/Commands/Features/FlatKegling/FlatKeglingGame.php',
        'Hleb\Main\Console\Commands\Features\FlatKegling\WinStorage' => '/Main/Console/Commands/Features/FlatKegling/WinStorage.php',
        'Hleb\Main\Console\Commands\Features\ReverseMode\ReverseStrictMode' => '/Main/Console/Commands/Features/ReverseMode/ReverseStrictMode.php',
        'Hleb\Main\Console\Commands\Features\ReverseMode\ReverseHlCheckMode' => '/Main/Console/Commands/Features/ReverseMode/ReverseHlCheckMode.php',
        'Hleb\Main\Console\Commands\Features\OriginCommand\OriginCommandReturn' => '/Main/Console/Commands/Features/OriginCommand/OriginCommandReturn.php',
        'Hleb\Main\Console\Commands\Help\HelpGenerator' => '/Main/Console/Commands/Help/HelpGenerator.php',
        'Hleb\Main\Console\WebConsole' => '/Main/Console/WebConsole.php',
        'Hleb\Main\Console\WebConsoleOnPage' => '/Main/Console/WebConsoleOnPage.php',
        'Hleb\Main\Console\Extreme\ExtremeRegister' => '/Main/Console/Extreme/ExtremeRegister.php',
        'Hleb\Main\Console\Extreme\ExtremeTerminal' => '/Main/Console/Extreme/ExtremeTerminal.php',
        'Hleb\Main\Console\Extreme\ExtremeRequest' => '/Main/Console/Extreme/ExtremeRequest.php',
        'Hleb\Main\Console\Extreme\ExtremeIdentifier' => '/Main/Console/Extreme/ExtremeIdentifier.php',
        'Hleb\Main\Console\Extreme\ExtremeDataTransfer' => '/Main/Console/Extreme/ExtremeDataTransfer.php',
        'Hleb\Main\Console\ConsoleAdapter' => '/Main/Console/ConsoleAdapter.php',
        'Hleb\Main\Console\ConsoleHandler' => '/Main/Console/ConsoleHandler.php',
        'Hleb\Main\Console\IndexedArgConverter' => '/Main/Console/IndexedArgConverter.php',
        'Hleb\Main\Console\Specifiers\ArgType' => '/Main/Console/Specifiers/ArgType.php',
        'Hleb\Main\Console\Specifiers\LightDataType' => '/Main/Console/Specifiers/LightDataType.php',
        'Hleb\Main\Insert\ContainerUniqueItem' => '/Main/Insert/ContainerUniqueItem.php',
        'Hleb\Main\Insert\OpenInstanceSingleton' => '/Main/Insert/OpenInstanceSingleton.php',
        'Hleb\Main\Logger\LoggerInterface' => '/Main/Logger/LoggerInterface.php',
        'Hleb\Main\Logger\BaseLogger' => '/Main/Logger/BaseLogger.php',
        'Hleb\Main\Logger\FileLogger' => '/Main/Logger/FileLogger.php',
        'Hleb\Main\Logger\LogCleaner' => '/Main/Logger/LogCleaner.php',
        'Hleb\Main\Logger\NullLogger' => '/Main/Logger/NullLogger.php',
        'Hleb\Main\Logger\LoggerWrapper' => '/Main/Logger/LoggerWrapper.php',
        'Hleb\Main\Logger\Log' => '/Main/Logger/Log.php',
        'Hleb\Main\Logger\LogLevel' => '/Main/Logger/LogLevel.php',
        'Hleb\Main\Logger\StreamLogger' => '/Main/Logger/StreamLogger.php',
        'Hleb\Main\ProjectLoader' => '/Main/ProjectLoader.php',
        'Hleb\Main\Routes\Methods\Traits\InsertWhereTrait' => '/Main/Routes/Methods/Traits/InsertWhereTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupDomainTrait' => '/Main/Routes/Methods/Traits/Group/GroupDomainTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupMiddlewareTrait' => '/Main/Routes/Methods/Traits/Group/GroupMiddlewareTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupAfterTrait' => '/Main/Routes/Methods/Traits/Group/GroupAfterTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupBeforeTrait' => '/Main/Routes/Methods/Traits/Group/GroupBeforeTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupPrefixTrait' => '/Main/Routes/Methods/Traits/Group/GroupPrefixTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupProtectTrait' => '/Main/Routes/Methods/Traits/Group/GroupProtectTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupWhereTrait' => '/Main/Routes/Methods/Traits/Group/GroupWhereTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\StandardGroupTrait' => '/Main/Routes/Methods/Traits/Group/StandardGroupTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupTrait' => '/Main/Routes/Methods/Traits/Group/GroupTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertControllerTrait' => '/Main/Routes/Methods/Traits/InsertControllerTrait.php',
        'Hleb\Main\Routes\Methods\Traits\Group\GroupPlainTrait' => '/Main/Routes/Methods/Traits/Group/GroupPlainTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertPlainTrait' => '/Main/Routes/Methods/Traits/InsertPlainTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertPageTrait' => '/Main/Routes/Methods/Traits/InsertPageTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertDomainTrait' => '/Main/Routes/Methods/Traits/InsertDomainTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertMiddlewareTrait' => '/Main/Routes/Methods/Traits/InsertMiddlewareTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertBeforeTrait' => '/Main/Routes/Methods/Traits/InsertBeforeTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertModuleTrait' => '/Main/Routes/Methods/Traits/InsertModuleTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertNameTrait' => '/Main/Routes/Methods/Traits/InsertNameTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertProtectTrait' => '/Main/Routes/Methods/Traits/InsertProtectTrait.php',
        'Hleb\Main\Routes\Methods\Traits\InsertAfterTrait' => '/Main/Routes/Methods/Traits/InsertAfterTrait.php',
        'Hleb\Main\Routes\Methods\Traits\StandardTrait' => '/Main/Routes/Methods/Traits/StandardTrait.php',
        'Hleb\Main\Routes\BaseRoute' => '/Main/Routes/BaseRoute.php',
        'Hleb\Main\Routes\Methods\BaseType' => '/Main/Routes/Methods/BaseType.php',
        'Hleb\Main\Info\PathInfoDoc' => '/Main/Info/PathInfoDoc.php',
        'Hleb\Main\Console\Colorizer' => '/Main/Console/Colorizer.php',
        'Hleb\Main\Routes\Prepare\Defender' => '/Main/Routes/Prepare/Defender.php',
        'Hleb\Main\Routes\Prepare\FileChecker' => '/Main/Routes/Prepare/FileChecker.php',
        'Hleb\Main\Routes\Prepare\Handler' => '/Main/Routes/Prepare/Handler.php',
        'Hleb\Main\Routes\Prepare\Optimizer' => '/Main/Routes/Prepare/Optimizer.php',
        'Hleb\Main\Routes\Prepare\Verifier' => '/Main/Routes/Prepare/Verifier.php',
        'Hleb\Main\Routes\Search\FindRoute' => '/Main/Routes/Search/FindRoute.php',
        'Hleb\Main\Routes\Search\RouteFileManager' => '/Main/Routes/Search/RouteFileManager.php',
        'Hleb\Main\Routes\Search\SearchBlock' => '/Main/Routes/Search/SearchBlock.php',
        'Hleb\Main\Routes\Update\CheckRouteForUpdates' => '/Main/Routes/Update/CheckRouteForUpdates.php',
        'Hleb\Main\Routes\Update\RouteData' => '/Main/Routes/Update/RouteData.php',
        'Hleb\Main\System\LibraryServiceAddress' => '/Main/System/LibraryServiceAddress.php',
        'Hleb\Main\System\LibraryServiceResources' => '/Main/System/LibraryServiceResources.php',
        'Hleb\Main\Console\Sections\ModuleCreator' => '/Main/Console/Sections/ModuleCreator.php',
        'Hleb\Main\Console\Commands\TemplateCreator' => '/Main/Console/Commands/TemplateCreator.php',
        'Hleb\Main\Console\Commands\CustomTask' => '/Main/Console/Commands/CustomTask.php',
        'Hleb\Main\Console\Commands\FindRouteTrait' => '/Main/Console/Commands/FindRouteTrait.php',
        'Hleb\Main\Console\Commands\RouteInfo' => '/Main/Console/Commands/RouteInfo.php',
        'Hleb\Main\Console\Commands\ShortList' => '/Main/Console/Commands/ShortList.php',
        'Hleb\Main\Console\Commands\LockProject' => '/Main/Console/Commands/LockProject.php',
        'Hleb\Main\Console\Commands\CliLogLevel' => '/Main/Console/Commands/CliLogLevel.php',
        'Hleb\Main\Console\Commands\SearchRoute' => '/Main/Console/Commands/SearchRoute.php',
        'Hleb\Main\Console\Commands\RouteList' => '/Main/Console/Commands/RouteList.php',
        'Hleb\Main\Console\Commands\LatestLogs' => '/Main/Console/Commands/LatestLogs.php',
        'Hleb\Main\Console\Commands\TwigCacheUpdater' => '/Main/Console/Commands/TwigCacheUpdater.php',
        'Hleb\Main\Console\Commands\RouteCacheUpdater' => '/Main/Console/Commands/RouteCacheUpdater.php',
        'Hleb\Main\Console\Commands\RouteClearCache' => '/Main/Console/Commands/RouteClearCache.php',
        'Hleb\Main\Console\Commands\ConfigInfo' => '/Main/Console/Commands/ConfigInfo.php',
        'Hleb\Main\Console\Commands\Deployer\DeploymentLibInterface' => '/Main/Console/Commands/Deployer/DeploymentLibInterface.php',
        'Hleb\Main\Console\Commands\Deployer\LibraryDeployer' => '/Main/Console/Commands/Deployer/LibraryDeployer.php',
        'Hleb\Main\Console\Commands\Deployer\LibDeployerCreator' => '/Main/Console/Commands/Deployer/LibDeployerCreator.php',
        'Hleb\Main\Console\Commands\Deployer\LibDeployerFinder' => '/Main/Console/Commands/Deployer/LibDeployerFinder.php',
        'Hleb\Main\Workspace' => '/Main/Workspace.php',
        'Hleb\Main\RouteExtractor' => '/Main/RouteExtractor.php',
        'Hleb\Main\ErrorTemplates' => '/Main/ErrorTemplates.php',
        'Hleb\Constructor\Script\Hlogin' => '/Constructor/Script/Hlogin.php',
        'Hleb\Reference\CommandInterface' => '/Reference/CommandInterface.php',
        'Hleb\Reference\ConverterInterface' => '/Reference/ConverterInterface.php',
        'Hleb\Reference\DiInterface' => '/Reference/DiInterface.php',
        'Hleb\Reference\DtoInterface' => '/Reference/DtoInterface.php',
        'Hleb\Reference\CookieInterface' => '/Reference/CookieInterface.php',
        'Hleb\Reference\DbInterface' => '/Reference/DbInterface.php',
        'Hleb\Reference\DebugInterface' => '/Reference/DebugInterface.php',
        'Hleb\Reference\LogInterface' => '/Reference/LogInterface.php',
        'Hleb\Reference\RequestInterface' => '/Reference/RequestInterface.php',
        'Hleb\Reference\ResponseInterface' => '/Reference/ResponseInterface.php',
        'Hleb\Reference\RouterInterface' => '/Reference/RouterInterface.php',
        'Hleb\Reference\RedirectInterface' => '/Reference/RedirectInterface.php',
        'Hleb\Reference\PathInterface' => '/Reference/PathInterface.php',
        'Hleb\Reference\SessionInterface' => '/Reference/SessionInterface.php',
        'Hleb\Reference\SettingInterface' => '/Reference/SettingInterface.php',
        'Hleb\Reference\ArrInterface' => '/Reference/ArrInterface.php',
        'Hleb\Reference\CsrfInterface' => '/Reference/CsrfInterface.php',
        'Hleb\Reference\TemplateInterface' => '/Reference/TemplateInterface.php',
        'Hleb\Reference\SystemInterface' => '/Reference/SystemInterface.php',
        'Hleb\Reference\ViewInterface' => '/Reference/ViewInterface.php',
        'Hleb\Reference\OnceInterface' => '/Reference/OnceInterface.php',
        'Hleb\Reference\Interface\Arr' => '/Reference/Interface/Arr.php',
        'Hleb\Reference\Interface\Command' => '/Reference/Interface/Command.php',
        'Hleb\Reference\Interface\DI' => '/Reference/Interface/DI.php',
        'Hleb\Reference\Interface\Converter' => '/Reference/Interface/Converter.php',
        'Hleb\Reference\Interface\Cookie' => '/Reference/Interface/Cookie.php',
        'Hleb\Reference\Interface\Csrf' => '/Reference/Interface/Csrf.php',
        'Hleb\Reference\Interface\Db' => '/Reference/Interface/Db.php',
        'Hleb\Reference\Interface\Debug' => '/Reference/Interface/Debug.php',
        'Hleb\Reference\Interface\Dto' => '/Reference/Interface/Dto.php',
        'Hleb\Reference\Interface\Log' => '/Reference/Interface/Log.php',
        'Hleb\Reference\Interface\Path' => '/Reference/Interface/Path.php',
        'Hleb\Reference\Interface\Redirect' => '/Reference/Interface/Redirect.php',
        'Hleb\Reference\Interface\Request' => '/Reference/Interface/Request.php',
        'Hleb\Reference\Interface\Response' => '/Reference/Interface/Response.php',
        'Hleb\Reference\Interface\Router' => '/Reference/Interface/Router.php',
        'Hleb\Reference\Interface\Session' => '/Reference/Interface/Session.php',
        'Hleb\Reference\Interface\Setting' => '/Reference/Interface/Setting.php',
        'Hleb\Reference\Interface\System' => '/Reference/Interface/System.php',
        'Hleb\Reference\Interface\Template' => '/Reference/Interface/Template.php',
        'Hleb\Reference\CacheInterface' => '/Reference/CacheInterface.php',
        'Hleb\Reference\Interface\Cache' => '/Reference/Interface/Cache.php',
        'Hleb\Reference\CacheReference' => '/Reference/CacheReference.php',
        'Hleb\Reference\CommandReference' => '/Reference/CommandReference.php',
        'Hleb\Reference\ConverterReference' => '/Reference/ConverterReference.php',
        'Hleb\Reference\DiReference' => '/Reference/DiReference.php',
        'Hleb\Reference\DtoReference' => '/Reference/DtoReference.php',
        'Hleb\Reference\DbReference' => '/Reference/DbReference.php',
        'Hleb\Reference\DebugReference' => '/Reference/DebugReference.php',
        'Hleb\Reference\CookieReference' => '/Reference/CookieReference.php',
        'Hleb\Reference\LogReference' => '/Reference/LogReference.php',
        'Hleb\Reference\RequestReference' => '/Reference/RequestReference.php',
        'Hleb\Reference\ResponseReference' => '/Reference/ResponseReference.php',
        'Hleb\Reference\RouterReference' => '/Reference/RouterReference.php',
        'Hleb\Reference\RedirectReference' => '/Reference/RedirectReference.php',
        'Hleb\Reference\PathReference' => '/Reference/PathReference.php',
        'Hleb\Reference\SessionReference' => '/Reference/SessionReference.php',
        'Hleb\Reference\SettingReference' => '/Reference/SettingReference.php',
        'Hleb\Reference\ArrReference' => '/Reference/ArrReference.php',
        'Hleb\Reference\CsrfReference' => '/Reference/CsrfReference.php',
        'Hleb\Reference\TemplateReference' => '/Reference/TemplateReference.php',
        'Hleb\Reference\SystemReference' => '/Reference/SystemReference.php',
        'Hleb\Reference\ScriptInterface' => '/Reference/ScriptInterface.php',
        'Hleb\Init\ShootOneselfInTheFoot\BaseMockAddOn' => '/Init/ShootOneselfInTheFoot/BaseMockAddOn.php',
        'Hleb\Init\ShootOneselfInTheFoot\ArrForTest' => '/Init/ShootOneselfInTheFoot/ArrForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\CacheForTest' => '/Init/ShootOneselfInTheFoot/CacheForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\CommandForTest' => '/Init/ShootOneselfInTheFoot/CommandForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\ContainerForTest' => '/Init/ShootOneselfInTheFoot/ContainerForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\CookiesForTest' => '/Init/ShootOneselfInTheFoot/CookiesForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\CsrfForTest' => '/Init/ShootOneselfInTheFoot/CsrfForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\ConverterForTest' => '/Init/ShootOneselfInTheFoot/ConverterForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\SettingForTest' => '/Init/ShootOneselfInTheFoot/SettingForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\SystemForTest' => '/Init/ShootOneselfInTheFoot/SystemForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\DtoForTest' => '/Init/ShootOneselfInTheFoot/DtoForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\PatchForTest' => '/Init/ShootOneselfInTheFoot/PatchForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\RouterForTest' => '/Init/ShootOneselfInTheFoot/RouterForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\ResponseForTest' => '/Init/ShootOneselfInTheFoot/ResponseForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\Mock' => '/Init/ShootOneselfInTheFoot/Mock.php',
        'Hleb\Init\ShootOneselfInTheFoot\ScriptForTest' => '/Init/ShootOneselfInTheFoot/ScriptForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\TemplateForTest' => '/Init/ShootOneselfInTheFoot/TemplateForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\DebugForTest' => '/Init/ShootOneselfInTheFoot/DebugForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\ViewForTest' => '/Init/ShootOneselfInTheFoot/ViewForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\OnceForTest' => '/Init/ShootOneselfInTheFoot/OnceForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\SessionForTest' => '/Init/ShootOneselfInTheFoot/SessionForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\RequestForTest' => '/Init/ShootOneselfInTheFoot/RequestForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\LogForTest' => '/Init/ShootOneselfInTheFoot/LogForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\RedirectForTest' => '/Init/ShootOneselfInTheFoot/RedirectForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\DbForTest' => '/Init/ShootOneselfInTheFoot/DbForTest.php',
        'Hleb\Init\ShootOneselfInTheFoot\DiForTest' => '/Init/ShootOneselfInTheFoot/DiForTest.php',
        'Hleb\Constructor\DI\DependencyInjection' => '/Constructor/DI/DependencyInjection.php',
        'Hleb\Constructor\Containers\TestContainerInterface' => '/Constructor/Containers/TestContainerInterface.php',
        'Hleb\Route\Any' => '/Route/Any.php',
        'Hleb\Route\After' => '/Route/After.php',
        'Hleb\Route\Controller' => '/Route/Controller.php',
        'Hleb\Route\Page' => '/Route/Page.php',
        'Hleb\Route\Delete' => '/Route/Delete.php',
        'Hleb\Route\Domain' => '/Route/Domain.php',
        'Hleb\Route\Fallback' => '/Route/Fallback.php',
        'Hleb\Route\Get' => '/Route/Get.php',
        'Hleb\Route\Group\EndGroup' => '/Route/Group/EndGroup.php',
        'Hleb\Route\Group\GroupAfter' => '/Route/Group/GroupAfter.php',
        'Hleb\Route\Group\GroupDomain' => '/Route/Group/GroupDomain.php',
        'Hleb\Route\Group\GroupMiddleware' => '/Route/Group/GroupMiddleware.php',
        'Hleb\Route\Group\GroupPrefix' => '/Route/Group/GroupPrefix.php',
        'Hleb\Route\Group\GroupProtect' => '/Route/Group/GroupProtect.php',
        'Hleb\Route\Group\GroupWhere' => '/Route/Group/GroupWhere.php',
        'Hleb\Route\Group\ToGroup' => '/Route/Group/ToGroup.php',
        'Hleb\Route\MatchTypes' => '/Route/MatchTypes.php',
        'Hleb\Route\Middleware' => '/Route/Middleware.php',
        'Hleb\Route\Module' => '/Route/Module.php',
        'Hleb\Route\Name' => '/Route/Name.php',
        'Hleb\Route\Options' => '/Route/Options.php',
        'Hleb\Route\Patch' => '/Route/Patch.php',
        'Hleb\Route\Post' => '/Route/Post.php',
        'Hleb\Route\Protect' => '/Route/Protect.php',
        'Hleb\Route\Put' => '/Route/Put.php',
        'Hleb\Route\Where' => '/Route/Where.php',
        'Hleb\Static\Arr' => '/Static/Arr.php',
        'Hleb\Static\DB' => '/Static/DB.php',
        'Hleb\Static\Script' => '/Static/Script.php',
        'Hleb\Static\View' => '/Static/View.php',
        'Hleb\Static\Once' => '/Static/Once.php',
        'Hleb\Static\Path' => '/Static/Path.php',
        'Hleb\Static\Csrf' => '/Static/Csrf.php',
        'Hleb\Static\Command' => '/Static/Command.php',
        'Hleb\Static\Log' => '/Static/Log.php',
        'Hleb\Static\Template' => '/Static/Template.php',
        'Hleb\Static\Redirect' => '/Static/Redirect.php',
        'Hleb\Static\Container' => '/Static/Container.php',
        'Hleb\Static\Cache' => '/Static/Cache.php',
        'Hleb\Static\Cookies' => '/Static/Cookies.php',
        'Hleb\Static\Debug' => '/Static/Debug.php',
        'Hleb\Static\Request' => '/Static/Request.php',
        'Hleb\Static\DI' => '/Static/DI.php',
        'Hleb\Static\Response' => '/Static/Response.php',
        'Hleb\Static\Session' => '/Static/Session.php',
        'Hleb\Static\Dto' => '/Static/Dto.php',
        'Hleb\Static\Converter' => '/Static/Converter.php',
        'Hleb\Static\Settings' => '/Static/Settings.php',
        'Hleb\Static\System' => '/Static/System.php',
        'Hleb\Static\Router' => '/Static/Router.php',
        'Hleb\Init\CustomAutoloader' => '/Init/CustomAutoloader.php',
        'Hleb\Route\Plain' => '/Route/Plain.php',
        'Hleb\Init\Headers\ParsePsrHeaders' => '/Init/Headers/ParsePsrHeaders.php',
        'Hleb\Init\Headers\ParseSwooleHeaders' => '/Init/Headers/ParseSwooleHeaders.php',
        'Hleb\Route\Group\GroupPlain' => '/Route/Group/GroupPlain.php',
        ];

    /**
     * For this set of classes, the path starts at the root directory (App\Bootstrap).
     *
     * Для этого набора классов путь начинается с корневой директории (App\Bootstrap).
     */
    public static array $bootstrapMap = [
        'App\Bootstrap\BaseContainer' => '/app/Bootstrap/BaseContainer.php',
        'App\Bootstrap\ContainerFactory' => '/app/Bootstrap/ContainerFactory.php',
        'App\Bootstrap\ContainerInterface' => '/app/Bootstrap/ContainerInterface.php',
        'App\Bootstrap\Services\RequestIdService' => '/app/Bootstrap/Services/RequestIdService.php',
        'App\Bootstrap\Services\RequestIdInterface' => '/app/Bootstrap/Services/RequestIdInterface.php',
        'App\Bootstrap\Events\ControllerEvent' => '/app/Bootstrap/Events/ControllerEvent.php',
        'App\Bootstrap\Events\MiddlewareEvent' => '/app/Bootstrap/Events/MiddlewareEvent.php',
        'App\Bootstrap\Events\ModuleEvent' => '/app/Bootstrap/Events/ModuleEvent.php',
        'App\Bootstrap\Events\PageEvent' => '/app/Bootstrap/Events/PageEvent.php',
        'App\Bootstrap\Events\TaskEvent' => '/app/Bootstrap/Events/TaskEvent.php',
        'App\Bootstrap\Http\ErrorContent' => '/app/Bootstrap/Http/ErrorContent.php',
    ];

    public static array $libraryMap = [
        'XdORM\Shell\XdHelper' => '/phphleb/xdorm/Shell/XdHelper.php',
        'XdORM\XD' => '/phphleb/xdorm/XD.php',
        'XdORM\Shell\XdDB' => '/phphleb/xdorm/Shell/XdDB.php',
        'Phphleb\Nicejson\JsonConverter' => '/phphleb/nicejson/JsonConverter.php',
        'Phphleb\Idnaconv\IdnaConvert' => '/phphleb/idnaconv/IdnaConvert.php',
    ];

    /**
     * Classes with non-standard namespace mapping.
     *
     * Классы с нестандартным соответствием namespace.
     */
    public static array $formattedMap = [
        'Hleb\HlebConsoleBootstrap' => '/HlebConsoleBootstrap.php',
        'Hleb\HlebQueueBootstrap' => '/HlebQueueBootstrap.php',
        'Hleb\HlebBootstrap' => '/HlebBootstrap.php',
        'Hleb\HlebAsyncBootstrap' => '/HlebAsyncBootstrap.php',
        'Route' => '/Main/Routes/Route.php',
        'Functions' => '/Init/Functions.php',
    ];

    /**
     * Various source files in the `app` folder.
     *
     * Различные исходные файлы в папке `app`.
     */
    public static array $anyMap = [
        'App\Commands\DefaultTask' => '/app/Commands/DefaultTask.php',
        'App\Commands\RotateLogs' => '/app/Commands/RotateLogs.php',
        'App\Controllers\DefaultController' => '/app/Controllers/DefaultController.php',
        'App\Controllers\MainController' => '/app/Controllers/MainController.php',
        'App\Middlewares\DefaultMiddleware' => '/app/Middlewares/DefaultMiddleware.php',
        'App\Models\DefaultModel' => '/app/Models/DefaultModel.php',
        'App\Commands\Setup\CreateModuleTask' => '/app/Commands/Setup/CreateModuleTask.php',
        'App\Commands\Setup\ProjectSetupTask' => '/app/Commands/Setup/ProjectSetupTask.php',
    ];

    /**
     * Framework exceptions (should be in order of inheritance).
     *
     * Исключения фреймворка (должны располагаться в порядке наследования).
     */
    public static array $exceptionMap = [
        'AsyncExitException' => '/Constructor/Exceptions/Exit/AsyncExitException.php',
        'Hleb\FrameworkException' => '/Constructor/Exceptions/FrameworkException.php',
        'Hleb\CoreException' => '/Constructor/Exceptions/CoreException.php',
        'Hleb\CoreProcessException' => '/Constructor/Exceptions/CoreProcessException.php',
        'Hleb\HttpException' => '/Constructor/Exceptions/HttpException.php',
        'Hleb\Http403ForbiddenException' => '/Constructor/Exceptions/Http/Http403ForbiddenException.php',
        'Hleb\Http404NotFoundException' => '/Constructor/Exceptions/Http/Http404NotFoundException.php',
        'Hleb\Http401UnauthorizedException' => '/Constructor/Exceptions/Http/Http401UnauthorizedException.php',
        'Hleb\Http400BadRequestException' => '/Constructor/Exceptions/Http/Http400BadRequestException.php',
        'Hleb\Http500InternalServerErrorException' => '/Constructor/Exceptions/Http/Http500InternalServerErrorException.php',
        'Hleb\CoreErrorException' => '/Constructor/Exceptions/CoreErrorException.php',
        'Hleb\Http406NotAcceptableException' => '/Constructor/Exceptions/Http/Http406NotAcceptableException.php',
        'Hleb\Http409ConflictException' => '/Constructor/Exceptions/Http/Http409ConflictException.php',
        'Hleb\Http410GoneException' => '/Constructor/Exceptions/Http/Http410GoneException.php',
        'Hleb\ReflectionProcessException' => '/Constructor/Exceptions/Reflection/ReflectionProcessException.php',
        'Hleb\DomainException' => '/Constructor/Exceptions/Cause/DomainException.php',
        'Hleb\DynamicStateException' => '/Constructor/Exceptions/Cause/DynamicStateException.php',
        'Hleb\InvalidArgumentException' => '/Constructor/Exceptions/Cause/InvalidArgumentException.php',
        'Hleb\ParseException' => '/Constructor/Exceptions/Cause/ParseException.php',
        'Hleb\UnexpectedValueException' => '/Constructor/Exceptions/Cause/UnexpectedValueException.php',
        'Hleb\DatabaseException' => '/Constructor/Exceptions/Database/DatabaseException.php',
        'Hleb\AsyncRouteException' => '/Constructor/Exceptions/Route/AsyncRouteException.php',
        'Hleb\RouteColoredException' => '/Constructor/Exceptions/Route/RouteColoredException.php',
        'Hleb\FileSystemException' => '/Constructor/Exceptions/File/FileSystemException.php',
        'Hleb\FileResourceAccessException' => '/Constructor/Exceptions/File/FileResourceAccessException.php',
        'Hleb\FileResourceModificationException' => '/Constructor/Exceptions/File/FileResourceModificationException.php',
        'Hleb\InvalidLogLevelException' => '/Constructor/Exceptions/Log/InvalidLogLevelException.php',
    ];
}
