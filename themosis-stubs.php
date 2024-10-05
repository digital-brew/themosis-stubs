<?php
/**
 * Generated stub declarations for Themosis framework
 * @see https://framework.themosis.com/
 * @see https://github.com/digital-brew/php-stubs-generator
 */

namespace Themosis\Ajax {
    use Themosis\Hook\IHook;
    use Illuminate\Support\ServiceProvider;
    interface AjaxInterface
    {
        /**
         * Listen to AJAX calls.
         *
         * @param  string  $action   The AJAX action name.
         * @param  \Closure|string  $callback
         * @param  string|bool  $logged   true, false or 'both' type of users.
         */
        public function listen($action, $callback, $logged = 'both') : \Themosis\Ajax\AjaxInterface;
    }
    class Ajax implements \Themosis\Ajax\AjaxInterface
    {
        /**
         * Action instance.
         *
         * @var IHook
         */
        protected $action;
        public function __construct(\Themosis\Hook\IHook $action)
        {
        }
        /**
         * Listen to AJAX API calls.
         *
         * @param  string  $action   The AJAX action name.
         * @param  \Closure|string  $callback A callback function name, a closure or a string defining a class and its method.
         * @param  string|bool  $logged   true, false or 'both' type of users.
         */
        public function listen($action, $callback, $logged = 'both') : \Themosis\Ajax\AjaxInterface
        {
        }
    }
    class AjaxServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
}
namespace Themosis\Asset {
    use Themosis\Hook\IHook;
    use Themosis\Html\HtmlBuilder;
    use Exception;
    use Illuminate\Support\ServiceProvider;
    use Themosis\Hook\IHook;
    use Themosis\Html\HtmlBuilder;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Filesystem\Filesystem;
    interface AssetInterface
    {
        /**
         * Return the asset handle.
         */
        public function getHandle() : string;
        /**
         * Set the asset handle.
         */
        public function setHandle(string $handle) : \Themosis\Asset\AssetInterface;
        /**
         * Return the asset file instance.
         */
        public function file() : \Themosis\Asset\AssetFileInterface;
        /**
         * Return the asset path.
         */
        public function getPath() : string;
        /**
         * Return the asset URL.
         */
        public function getUrl() : string;
        /**
         * Set the asset dependencies.
         */
        public function setDependencies(array $dependencies) : \Themosis\Asset\AssetInterface;
        /**
         * Return the asset dependencies.
         *
         * @return mixed
         */
        public function getDependencies();
        /**
         * Set the asset version.
         *
         * @param  null|string|bool  $version
         */
        public function setVersion($version) : \Themosis\Asset\AssetInterface;
        /**
         * Return the asset version.
         *
         * @return mixed
         */
        public function getVersion();
        /**
         * Return the asset type.
         *
         * @return mixed
         */
        public function getType();
        /**
         * Set the asset type.
         */
        public function setType(string $type) : \Themosis\Asset\AssetInterface;
        /**
         * Get the asset argument.
         *
         * @return string|bool
         */
        public function getArgument();
        /**
         * Set the asset argument.
         *
         * @param  string|bool  $arg
         */
        public function setArgument($arg = null) : \Themosis\Asset\AssetInterface;
        /**
         * Load the asset on defined area.
         *
         * @param  string|array  $locations
         */
        public function to($locations = 'front') : \Themosis\Asset\AssetInterface;
        /**
         * Localize the asset.
         */
        public function localize(string $name, array $data) : \Themosis\Asset\AssetInterface;
        /**
         * Add asset inline code.
         */
        public function inline(string $code, bool $after = true) : \Themosis\Asset\AssetInterface;
        /**
         * Add asset attributes.
         */
        public function attributes(array $attributes) : \Themosis\Asset\AssetInterface;
    }
    class Asset implements \Themosis\Asset\AssetInterface
    {
        /**
         * @var string
         */
        protected $handle;
        /**
         * @var AssetFileInterface
         */
        protected $file;
        /**
         * @var bool|string|array
         */
        protected $dependencies;
        /**
         * @var null|string|bool
         */
        protected $version;
        /**
         * @var string|bool
         */
        protected $argument;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var HtmlBuilder
         */
        protected $html;
        /**
         * @var array
         */
        protected $locations = ['wp_enqueue_scripts' => 'front', 'admin_enqueue_scripts' => 'admin', 'login_enqueue_scripts' => 'login', 'customize_preview_init' => 'customizer', 'enqueue_block_editor_assets' => 'editor'];
        /**
         * Asset localized data.
         *
         * @var array
         */
        protected $localize = [];
        /**
         * Asset inline code.
         *
         * @var array
         */
        protected $inline = [];
        public function __construct(\Themosis\Asset\AssetFileInterface $file, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Themosis\Html\HtmlBuilder $html)
        {
        }
        /**
         * Return the asset handle.
         */
        public function getHandle() : string
        {
        }
        /**
         * Set the asset handle.
         */
        public function setHandle(string $handle) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Return the asset file instance.
         */
        public function file() : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Return the asset path.
         */
        public function getPath() : string
        {
        }
        /**
         * Return the asset URL.
         */
        public function getUrl() : string
        {
        }
        /**
         * Set the asset dependencies.
         */
        public function setDependencies(array $dependencies) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Return the asset dependencies.
         *
         * @return array|bool|mixed|string
         */
        public function getDependencies()
        {
        }
        /**
         * Set the asset version.
         *
         * @param  bool|null|string  $version
         */
        public function setVersion($version) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Return the asset version.
         *
         * @return null|string|bool
         */
        public function getVersion()
        {
        }
        /**
         * Set the asset type.
         * Override the auto-discovered type if any.
         */
        public function setType(string $type) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Return the asset type.
         *
         * @return null|string
         */
        public function getType()
        {
        }
        /**
         * Return the asset argument.
         *
         * @return bool|string
         */
        public function getArgument()
        {
        }
        /**
         * Set the asset argument.
         *
         * @param  bool|string  $arg
         */
        public function setArgument($arg = null) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Load the asset on the defined area. Default to front-end.
         *
         * @param  string|array  $locations
         */
        public function to($locations = 'front') : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Register the asset with appropriate action hook.
         */
        protected function install(string $hook)
        {
        }
        /**
         * Enqueue asset.
         */
        public function enqueue()
        {
        }
        /**
         * Enqueue a script asset.
         */
        protected function enqueueScript()
        {
        }
        /**
         * Enqueue a style asset.
         */
        protected function enqueueStyle()
        {
        }
        /**
         * Localize the asset.
         */
        public function localize(string $name, array $data) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Add asset inline code.
         */
        public function inline(string $code, bool $after = true) : \Themosis\Asset\AssetInterface
        {
        }
        /**
         * Add asset attributes.
         *
         *
         * @throws AssetException
         */
        public function attributes(array $attributes) : \Themosis\Asset\AssetInterface
        {
        }
    }
    class AssetException extends \Exception
    {
    }
    interface AssetFileInterface
    {
        /**
         * Check if the asset is external or local.
         */
        public function isExternal() : bool;
        /**
         * Set the external status of the file asset.
         */
        public function setExternal(bool $isExternal = false) : \Themosis\Asset\AssetFileInterface;
        /**
         * Return the asset file full path.
         */
        public function getPath() : string;
        /**
         * Set the asset file path.
         */
        public function setPath(string $path) : \Themosis\Asset\AssetFileInterface;
        /**
         * Return the asset file URL.
         */
        public function getUrl() : string;
        /**
         * Set the asset file URL.
         */
        public function setUrl(string $url) : \Themosis\Asset\AssetFileInterface;
        /**
         * Return the file type.
         *
         * @return null|string
         */
        public function getType();
        /**
         * Set the asset file type.
         *
         * @param  string  $type
         */
        public function setType(string $filename, $type = null) : \Themosis\Asset\AssetFileInterface;
    }
    class AssetServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
    class Factory
    {
        /**
         * @var Finder
         */
        protected $finder;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var HtmlBuilder
         */
        protected $html;
        public function __construct(\Themosis\Asset\Finder $finder, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Themosis\Html\HtmlBuilder $html)
        {
        }
        /**
         * Create and return an Asset instance.
         *
         * @param  null|string|bool  $version
         * @param  null|string|bool  $arg
         * @return AssetInterface
         *
         * @throws AssetException
         */
        public function add(string $handle, string $path, array $dependencies = [], $version = null, $arg = null)
        {
        }
    }
    class File implements \Themosis\Asset\AssetFileInterface
    {
        protected $files;
        /**
         * @var bool
         */
        protected $external = false;
        /**
         * @var string
         */
        protected $path;
        /**
         * @var string
         */
        protected $url;
        /**
         * @var string
         */
        protected $type;
        /**
         * @var array
         */
        protected $extensions = ['js', 'css', 'script', 'style'];
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Check if the file is external or local.
         */
        public function isExternal() : bool
        {
        }
        /**
         * Set the asset file external status.
         */
        public function setExternal(bool $isExternal = false) : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Return the asset file path.
         */
        public function getPath() : string
        {
        }
        /**
         * Set the asset file path.
         */
        public function setPath(string $path) : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Return the asset file URL.
         */
        public function getUrl() : string
        {
        }
        /**
         * Set the asset file URL.
         */
        public function setUrl(string $url) : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Return the asset file type.
         *
         * @return null|string
         */
        public function getType()
        {
        }
        /**
         * Set the asset file type.
         *
         * @param  string  $type
         */
        public function setType(string $filename, $type = null) : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Find the file type.
         *
         *
         * @return string
         */
        protected function findType(string $type)
        {
        }
    }
    class Finder
    {
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var array
         */
        protected $locations = [];
        /**
         * @var array
         */
        protected $schemes = ['//', 'http'];
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Add a base location in order to find an asset.
         */
        public function addLocation(string $path, string $url) : \Themosis\Asset\Finder
        {
        }
        /**
         * Add multiple locations.
         * The key is the asset path and the value its URL.
         */
        public function addLocations(array $paths) : \Themosis\Asset\Finder
        {
        }
        /**
         * Return the registered locations.
         */
        public function getLocations() : array
        {
        }
        /**
         * Return an asset file instance if found.
         *
         *
         * @throws AssetException
         */
        public function find(string $path) : \Themosis\Asset\AssetFileInterface
        {
        }
        /**
         * Check if given path is an external asset or not.
         */
        protected function isExternal(string $path) : bool
        {
        }
    }
}
namespace Themosis\Auth\Console {
    use Illuminate\Console\Command;
    use Illuminate\Console\DetectsApplicationNamespace;
    use Illuminate\Filesystem\Filesystem;
    class AuthMakeCommand extends \Illuminate\Console\Command
    {
        use \Illuminate\Console\DetectsApplicationNamespace;
        /**
         * The console command name and signature.
         *
         * @var string
         */
        protected $signature = 'make:auth
                    {--views : Only scaffold the authentication views}s
                    {--force : Overwrite existing files by default}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Scaffold default authentication files';
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * Authentication views.
         *
         * @var array
         */
        protected $views = ['auth/login.stub' => 'auth/login.blade.php', 'auth/register.stub' => 'auth/register.blade.php', 'auth/verify.stub' => 'auth/verify.blade.php', 'auth/passwords/email.stub' => 'auth/passwords/email.blade.php', 'auth/passwords/reset.stub' => 'auth/passwords/reset.blade.php', 'settings/home.stub' => 'settings/home.blade.php'];
        /**
         * Authentication controllers.
         *
         * @var array
         */
        protected $controllers = ['Auth/ForgotPasswordController.stub' => 'Auth/ForgotPasswordController.php', 'Auth/LoginController.stub' => 'Auth/LoginController.php', 'Auth/RegisterController.stub' => 'Auth/RegisterController.php', 'Auth/ResetPasswordController.stub' => 'Auth/ResetPasswordController.php', 'Auth/VerificationController.stub' => 'Auth/VerificationController.php', 'SettingsController.stub' => 'SettingsController.php'];
        /**
         * Authentication forms.
         *
         * @var array
         */
        protected $forms = ['Auth/Passwords/EmailResetForm.stub' => 'Auth/Passwords/EmailResetForm.php', 'Auth/Passwords/PasswordResetForm.stub' => 'Auth/Passwords/PasswordResetForm.php', 'Auth/LoginForm.stub' => 'Auth/LoginForm.php', 'Auth/LogoutForm.stub' => 'Auth/LogoutForm.php', 'Auth/RegisterForm.stub' => 'Auth/RegisterForm.php'];
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Create auth necessary directories.
         */
        protected function createDirectories()
        {
        }
        /**
         * Export authentication default views.
         */
        protected function exportViews()
        {
        }
        /**
         * Export authentication default controllers.
         */
        protected function exportControllers()
        {
        }
        /**
         * Export authentication default forms.
         */
        protected function exportForms()
        {
        }
        /**
         * Compile controller content.
         *
         *
         * @return string
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function compileStub(string $content)
        {
        }
    }
}
namespace Themosis\Core {
    use Closure;
    use Composer\Autoload\ClassLoader;
    use Illuminate\Container\Container;
    use Illuminate\Contracts\Config\Repository;
    use Illuminate\Contracts\Foundation\Application as ApplicationContract;
    use Illuminate\Contracts\Foundation\CachesConfiguration;
    use Illuminate\Contracts\Foundation\CachesRoutes;
    use Illuminate\Contracts\Http\Kernel as HttpKernelContract;
    use Illuminate\Events\EventServiceProvider;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Http\Request;
    use Illuminate\Log\LogServiceProvider;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Collection;
    use Illuminate\Support\Env;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Str;
    use Symfony\Component\Finder\Finder;
    use Symfony\Component\Finder\SplFileInfo;
    use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpKernel\Exception\HttpException;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    use Symfony\Component\HttpKernel\HttpKernelInterface;
    use Themosis\Core\Bootstrap\EnvironmentLoader;
    use Themosis\Core\Events\LocaleUpdated;
    use Themosis\Route\RouteServiceProvider;
    use Composer\Script\Event;
    use Closure;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Str;
    use Illuminate\Support\Collection;
    use Illuminate\Contracts\Foundation\Application as ApplicationContract;
    use Exception;
    use Illuminate\Support\HtmlString;
    use Illuminate\Support\Str;
    use Exception;
    use Illuminate\Filesystem\Filesystem;
    use Composer\Autoload\ClassLoader;
    use Illuminate\Config\Repository;
    use Themosis\Asset\Finder;
    use Themosis\Core\Support\IncludesFiles;
    use Themosis\Core\Support\PluginHeaders;
    use Themosis\Core\Support\WordPressFileHeaders;
    use Exception;
    use Illuminate\Filesystem\Filesystem;
    use Themosis\Core\Events\PluginLoaded;
    use Themosis\Core\Support\PluginHeaders;
    use Themosis\Core\Support\WordPressFileHeaders;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Filesystem\Filesystem;
    use Composer\Autoload\ClassLoader;
    use Illuminate\Config\Repository;
    use Themosis\Asset\Finder;
    use Themosis\Core\Support\IncludesFiles;
    use Themosis\Core\Support\WordPressFileHeaders;
    use Themosis\Core\Theme\ImageSize;
    use Themosis\Core\Theme\Support;
    use Themosis\Core\Theme\Templates;
    class AliasLoader
    {
        /**
         * Array of class aliases.
         *
         * @var array
         */
        protected $aliases;
        /**
         * Indicates if a loaded has been registered.
         *
         * @var bool
         */
        protected $registered = false;
        /**
         * @var \Themosis\Core\AliasLoader
         */
        protected static $instance;
        /**
         * The namespace for real-time facades.
         *
         * @var string
         */
        protected static $facadeNamespace = 'Facades\\';
        /**
         * Get or create the alias loader singleton.
         *
         *
         * @return static
         */
        public static function getInstance(array $aliases = [])
        {
        }
        /**
         * Get registered aliases.
         *
         * @return array
         */
        public function getAliases()
        {
        }
        /**
         * Set aliases.
         */
        public function setAliases(array $aliases)
        {
        }
        /**
         * Register the loader on the auto-loader stack.
         */
        public function register()
        {
        }
        /**
         * Prepend the load method to the auto-loader stack.
         */
        protected function prependToLoaderStack()
        {
        }
        /**
         * Load a class alias if it is registered.
         *
         * @param  string  $alias
         * @return bool|null
         */
        public function load($alias)
        {
        }
        /**
         * Load a real-time facade for the given alias.
         *
         * @param  string  $alias
         */
        protected function loadFacade($alias)
        {
        }
        /**
         * Ensure that the given alias has an existing real-time facade class.
         *
         * @param  string  $alias
         * @return string
         */
        protected function ensureFacadeExists($alias)
        {
        }
        /**
         * Format the facade stub with the proper namespace and class.
         *
         * @param  string  $alias
         * @param  string  $stub
         * @return string
         */
        protected function formatFacadeStub($alias, $stub)
        {
        }
        /**
         * Add an alias to the loader.
         *
         * @param  string  $class
         * @param  string  $alias
         */
        public function alias($class, $alias)
        {
        }
        /**
         * Indicated if the loader has been registered.
         *
         * @return bool
         */
        public function isRegistered()
        {
        }
        /**
         * Set the registered state of the loader.
         *
         * @param  bool  $value
         */
        public function setRegistered($value)
        {
        }
        /**
         * Set the real-time facade namespace.
         *
         * @param  string  $namespace
         */
        public static function setFacadeNamespace($namespace)
        {
        }
        /**
         * Set the value of the singleton loader.
         *
         * @param  \Themosis\Core\AliasLoader  $loader
         */
        public static function setInstance($loader)
        {
        }
    }
    class Application extends \Illuminate\Container\Container implements \Illuminate\Contracts\Foundation\Application, \Illuminate\Contracts\Foundation\CachesConfiguration, \Illuminate\Contracts\Foundation\CachesRoutes, \Symfony\Component\HttpKernel\HttpKernelInterface
    {
        /**
         * Themosis framework version.
         */
        public const THEMOSIS_VERSION = '4.0.0';
        /**
         * Laravel version.
         *
         * @var string
         */
        public const VERSION = '8.1.0';
        /**
         * Application textdomain.
         */
        public const TEXTDOMAIN = 'themosis';
        /**
         * Base path of the framework.
         *
         * @var string
         */
        protected $basePath;
        /**
         * Path location (directory) of env files.
         *
         * @var string
         */
        protected $environmentPath;
        /**
         * Environment file name base.
         *
         * @var string
         */
        protected $environmentFile = '.env';
        /**
         * The deferred services and their providers.
         *
         * @var array
         */
        protected $deferredServices = [];
        /**
         * All of the registered service providers.
         *
         * @var array
         */
        protected $serviceProviders = [];
        /**
         * The names of the loaded service providers.
         *
         * @var array
         */
        protected $loadedProviders = [];
        /**
         * Indicates if the application has been bootstrapped or not.
         *
         * @var bool
         */
        protected $hasBeenBootstrapped = false;
        /**
         * Indicates if the application has booted.
         *
         * @var bool
         */
        protected $booted = false;
        /**
         * List of booting callbacks.
         *
         * @var array
         */
        protected $bootingCallbacks = [];
        /**
         * List of booted callbacks.
         *
         * @var array
         */
        protected $bootedCallbacks = [];
        /**
         * List of terminating callbacks.
         *
         * @var array
         */
        protected $terminatingCallbacks = [];
        /**
         * @var string
         */
        protected $namespace;
        protected $storagePath;
        public function __construct($basePath = null)
        {
        }
        /**
         * Get the version number of the application.
         *
         * @return string
         */
        public function version()
        {
        }
        /**
         * Register basic bindings into the container.
         */
        protected function registerBaseBindings()
        {
        }
        /**
         * Register base service providers.
         */
        protected function registerBaseServiceProviders()
        {
        }
        /**
         * Register the core class aliases in the container.
         */
        protected function registerCoreContainerAliases()
        {
        }
        /**
         * Get the base path of the Laravel installation.
         *
         * @param  string  $path Optional path to append to the base path.
         * @return string
         */
        public function basePath($path = '')
        {
        }
        /**
         * Set the base path for the application.
         *
         * @param  string  $basePath
         * @return $this
         */
        public function setBasePath($basePath)
        {
        }
        /**
         * Bind all of the application paths in the container.
         */
        protected function bindPathsInContainer()
        {
        }
        /**
         * Get the path to the application "themosis-application" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function path($path = '')
        {
        }
        /**
         * Get the WordPress "content" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function contentPath($path = '')
        {
        }
        /**
         * Get the WordPress "plugins" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function pluginsPath($path = '')
        {
        }
        /**
         * Get the WordPress "mu-plugins" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function mupluginsPath($path = '')
        {
        }
        /**
         * Get the WordPress "themes" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function themesPath($path = '')
        {
        }
        /**
         * Get the application directory.
         *
         * @param  string  $path
         * @return string
         */
        public function applicationPath($path = '')
        {
        }
        /**
         * Get the resources directory path.
         *
         * @param  string  $path
         * @return string
         */
        public function resourcePath($path = '')
        {
        }
        /**
         * Get the path to the resources "languages" directory.
         *
         * @param  string  $path
         * @return string
         */
        public function langPath($path = '')
        {
        }
        /**
         * Get the path of the web server root.
         *
         * @param  string  $path
         * @return string
         */
        public function webPath($path = '')
        {
        }
        /**
         * Get the path to the public directory.
         *
         * @param  string  $path
         * @return string
         */
        public function publicPath($path = '')
        {
        }
        /**
         * Get the root path of the project.
         *
         * @param  string  $path
         * @return string
         */
        public function rootPath($path = '')
        {
        }
        /**
         * Get the main application plugin configuration directory.
         *
         * @param  string  $path
         * @return string
         */
        public function configPath($path = '')
        {
        }
        /**
         * Get the storage directory path.
         *
         * @param  string  $path
         * @return string
         */
        public function storagePath($path = '')
        {
        }
        /**
         * Set the storage directory.
         *
         * @param  string  $path
         * @return $this
         */
        public function useStoragePath($path)
        {
        }
        /**
         * Get the database directory path.
         *
         * @param  string  $path
         * @return string
         */
        public function databasePath($path = '')
        {
        }
        /**
         * Get the bootstrap directory path.
         *
         * @param  string  $path
         * @return string
         */
        public function bootstrapPath($path = '')
        {
        }
        /**
         * Get the WordPress directory path.
         *
         * @param  string  $path
         * @return string
         *
         * @throws \Illuminate\Container\EntryNotFoundException
         */
        public function wordpressPath($path = '')
        {
        }
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param  string  $file
         * @return $this
         */
        public function loadEnvironmentFrom($file)
        {
        }
        /**
         * Return the environment path directory.
         *
         * @return string
         */
        public function environmentPath()
        {
        }
        /**
         * Set the directory for the environment file.
         *
         * @param  string  $path
         * @return $this
         */
        public function useEnvironmentPath($path)
        {
        }
        /**
         * Return the environment file name base.
         *
         * @return string
         */
        public function environmentFile()
        {
        }
        /**
         * Return the environment file path.
         *
         * @return string
         */
        public function environmentFilePath()
        {
        }
        /**
         * Get or check the current application environment.
         *
         * @param  string|array  $environments
         * @return string|bool
         */
        public function environment(...$environments)
        {
        }
        /**
         * Detech application's current environment.
         *
         *
         * @return string
         */
        public function detectEnvironment(\Closure $callback)
        {
        }
        /**
         * Determine if we are running in the console.
         *
         * @return bool
         */
        public function runningInConsole()
        {
        }
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         *
         * @throws \Illuminate\Container\EntryNotFoundException
         */
        public function isDownForMaintenance()
        {
        }
        /**
         * Register all of the configured providers.
         */
        public function registerConfiguredProviders()
        {
        }
        /**
         * Register a deferred provider and service.
         *
         * @param  string  $provider
         * @param  string|null  $service
         */
        public function registerDeferredProvider($provider, $service = null)
        {
        }
        /**
         * Add an array of services to the application's deferred services.
         */
        public function addDeferredServices(array $services)
        {
        }
        /**
         * Get the application's deferred services.
         *
         * @return array
         */
        public function getDeferredServices()
        {
        }
        /**
         * Set the application's deferred services.
         */
        public function setDeferredServices(array $services)
        {
        }
        /**
         * Verify if the application has been bootstrapped before.
         *
         * @return bool
         */
        public function hasBeenBootstrapped()
        {
        }
        /**
         * Bootstrap the application with given list of bootstrap
         * classes.
         */
        public function bootstrapWith(array $bootstrappers)
        {
        }
        /**
         * Boot the application's service providers.
         */
        public function boot()
        {
        }
        /**
         * Call the booting callbacks for the application.
         */
        protected function fireAppCallbacks(array $callbacks)
        {
        }
        /**
         * Boot the given service provider.
         */
        protected function bootProvider(\Illuminate\Support\ServiceProvider $provider)
        {
        }
        /**
         * Register a new boot listener.
         *
         * @param  mixed  $callback
         */
        public function booting($callback)
        {
        }
        /**
         * Register a new "booted" listener.
         *
         * @param  mixed  $callback
         */
        public function booted($callback)
        {
        }
        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         */
        public function getCachedServicesPath()
        {
        }
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         */
        public function getCachedPackagesPath()
        {
        }
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         */
        public function configurationIsCached()
        {
        }
        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         */
        public function getCachedConfigPath()
        {
        }
        /**
         * Handles a Request to convert it to a Response.
         *
         * When $catch is true, the implementation must catch all exceptions
         * and do its best to convert them to a Response instance.
         *
         * @param  SymfonyRequest  $request A Request instance
         * @param  int  $type    The type of the request
         *                                (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
         * @param  bool  $catch   Whether to catch exceptions or not
         * @return Response A Response instance
         *
         * @throws \Exception When an Exception occurs during processing
         */
        public function handle(\Symfony\Component\HttpFoundation\Request $request, int $type = \Symfony\Component\HttpKernel\HttpKernelInterface::MAIN_REQUEST, bool $catch = true) : \Symfony\Component\HttpFoundation\Response
        {
        }
        /**
         * Register a service provider with the application.
         *
         * @param  \Illuminate\Support\ServiceProvider|string  $provider
         * @param  array  $options
         * @param  bool  $force
         * @return \Illuminate\Support\ServiceProvider
         */
        public function register($provider, $options = [], $force = false)
        {
        }
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param  ServiceProvider|string  $provider
         * @return ServiceProvider|null
         */
        public function getProvider($provider)
        {
        }
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param  ServiceProvider|string  $provider
         * @return array
         */
        public function getProviders($provider)
        {
        }
        /**
         * Get the service providers that have been loaded.
         *
         * @return array
         */
        public function getLoadedProviders()
        {
        }
        /**
         * Determine if the given service provider is loaded.
         *
         *
         * @return bool
         */
        public function providerIsLoaded(string $provider)
        {
        }
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param  string  $provider
         * @return ServiceProvider
         */
        public function resolveProvider($provider)
        {
        }
        /**
         * Mark the given provider as registered.
         *
         * @param  ServiceProvider  $provider
         */
        protected function markAsRegistered($provider)
        {
        }
        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         */
        public function runningUnitTests()
        {
        }
        /**
         * Determine if the application is running with debug mode enabled.
         *
         * @return bool
         */
        public function hasDebugModeEnabled()
        {
        }
        /**
         * Get an instance of the maintenance mode manager implementation.
         *
         * @return \Illuminate\Contracts\Foundation\MaintenanceMode
         */
        public function maintenanceMode()
        {
        }
        /**
         * Resolve the given type from the container.
         *
         * (Overriding Container::make)
         *
         * @param  string  $abstract
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public function make($abstract, array $parameters = [])
        {
        }
        /**
         * Load and boot all of the remaining deferred providers.
         */
        public function loadDeferredProviders()
        {
        }
        /**
         * Load the provider for a deferred service.
         *
         * @param  string  $service
         */
        public function loadDeferredProvider($service)
        {
        }
        /**
         * Determine if the given abstract type has been bound.
         *
         * (Overriding Container::bound)
         *
         * @param  string  $abstract
         * @return bool
         */
        public function bound($abstract)
        {
        }
        /**
         * Determine if the application has booted.
         *
         * @return bool
         */
        public function isBooted()
        {
        }
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         */
        public function shouldSkipMiddleware()
        {
        }
        /**
         * Bootstrap a Themosis like plugin.
         *
         *
         * @return PluginManager
         */
        public function loadPlugin(string $filePath, string $configPath)
        {
        }
        /**
         * Register the framework core "plugin" and auto-load
         * any found mu-plugins after the framework.
         *
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @throws \Exception
         */
        public function loadPlugins(string $pluginsPath)
        {
        }
        /**
         * Register a plugin and load it.
         *
         * @param  string  $path Plugin relative path (pluginDirName/pluginMainFile).
         */
        public function registerPlugin(string $path)
        {
        }
        /**
         * Return cached plugins manifest file path.
         *
         * @return string
         */
        public function getCachedPluginsPath()
        {
        }
        /**
         * Register a list of hookable instances.
         */
        public function registerConfiguredHooks(string $config = '')
        {
        }
        /**
         * Create and register a hook instance.
         */
        public function registerHook(string $hook)
        {
        }
        /**
         * Load current active theme.
         *
         * @param  string  $dirPath    The theme directory path.
         * @param  string  $configPath The theme relative configuration folder path.
         * @return ThemeManager
         */
        public function loadTheme(string $dirPath, string $configPath)
        {
        }
        /**
         * Load configuration files based on given path.
         *
         * @param  string  $path   The configuration files folder path.
         * @return Application
         */
        public function loadConfigurationFiles(\Illuminate\Contracts\Config\Repository $config, $path = '')
        {
        }
        /**
         * Get all configuration files.
         *
         * @param  mixed  $path
         * @return array
         */
        protected function getConfigurationFiles($path)
        {
        }
        /**
         * Get configuration file nesting path.
         *
         * @param  string  $path
         * @return string
         */
        protected function getNestedDirectory(\Symfony\Component\Finder\SplFileInfo $file, $path)
        {
        }
        /**
         * Throw an HttpException with the given data.
         *
         * @param  int  $code
         * @param  string  $message
         */
        public function abort($code, $message = '', array $headers = [])
        {
        }
        /**
         * Register a terminating callback with the application.
         *
         *
         * @return $this
         */
        public function terminating($callback)
        {
        }
        /**
         * Terminate the application.
         */
        public function terminate()
        {
        }
        /**
         * Handle incoming request and return a response.
         * Abstract the implementation from the user for easy
         * theme integration.
         *
         * @param  string  $kernel  Application kernel class name.
         * @param  \Symfony\Component\HttpFoundation\Request  $request
         * @return $this
         */
        public function manage(string $kernel, $request)
        {
        }
        /**
         * Handle WordPress administration incoming request.
         * Only send response headers.
         *
         * @param  \Symfony\Component\HttpFoundation\Request  $request
         * @return $this;
         */
        public function manageAdmin(string $kernel, $request)
        {
        }
        /**
         * Manage WordPress Admin Init.
         * Handle incoming request and return a response.
         *
         *
         * @return Closure
         */
        protected function dispatchToAdmin(string $kernel, $request)
        {
        }
        /**
         * Register a callback to run after loading the environment.
         */
        public function afterLoadingEnvironment(\Closure $callback)
        {
        }
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param  string  $bootstrapper
         */
        public function beforeBootstrapping($bootstrapper, \Closure $callback)
        {
        }
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param  string  $bootstrapper
         */
        public function afterBootstrapping($bootstrapper, \Closure $callback)
        {
        }
        /**
         * Set the application locale.
         *
         * @param  string  $locale
         */
        public function setLocale($locale)
        {
        }
        /**
         * Get the application locale.
         *
         * @return string
         */
        public function getLocale()
        {
        }
        /**
         * Check if passed locale is current locale.
         *
         * @param  string  $locale
         * @return bool
         */
        public function isLocale($locale)
        {
        }
        /**
         * Get the current application locale.
         *
         * @return string
         */
        public function currentLocale()
        {
        }
        /**
         * Get the current application fallback locale.
         *
         * @return string
         */
        public function getFallbackLocale()
        {
        }
        /**
         * Set the current application fallback locale.
         *
         * @param  string  $fallbackLocale
         * @return void
         */
        public function setFallbackLocale($fallbackLocale)
        {
        }
        /**
         * Return the application namespace.
         *
         * @return string
         *
         * @throws \RuntimeException
         */
        public function getNamespace()
        {
        }
        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         */
        public function routesAreCached()
        {
        }
        /**
         * Get the path to the routes cache file.
         *
         * @return string
         */
        public function getCachedRoutesPath()
        {
        }
        /**
         * Check if the application events are cached.
         *
         * @return bool
         */
        public function eventsAreCached()
        {
        }
        /**
         * Get the path to the events cache file.
         *
         * @return string
         */
        public function getCachedEventsPath()
        {
        }
        /**
         * Normalize a relative or absolute path to a cache file.
         *
         * @param  string  $key
         * @param  string  $default
         * @return string
         */
        protected function normalizeCachePath($key, $default)
        {
        }
        /**
         * Determine if we currently inside the WordPress administration.
         *
         * @return bool
         */
        public function isWordPressAdmin()
        {
        }
        /**
         * Return a Javascript Global variable.
         *
         *
         * @return string
         */
        public function outputJavascriptGlobal(string $name, array $data)
        {
        }
    }
    class ComposerScripts
    {
        /**
         * Handle the post-install Composer event.
         */
        public static function postInstall(\Composer\Script\Event $event)
        {
        }
        /**
         * Handle the post-update Composer event.
         */
        public static function postUpdate(\Composer\Script\Event $event)
        {
        }
        /**
         * Handle the post-autoload-dump Composer event.
         */
        public static function postAutoloadDump(\Composer\Script\Event $event)
        {
        }
        /**
         * Clear the cached Themosis bootstrapping files.
         */
        protected static function clearCompiled()
        {
        }
    }
    class EnvironmentDetector
    {
        /**
         * Detect application current environment.
         *
         * @param  array|null  $consoleArgs
         * @return string
         */
        public function detect(\Closure $callback, $consoleArgs = null)
        {
        }
        /**
         * Set the application environment for a web request.
         *
         *
         * @return string
         */
        protected function detectWebEnvironment(\Closure $callback)
        {
        }
        /**
         * Set the application environment for a command-line request.
         *
         *
         * @return string
         */
        protected function detectConsoleEnvironment(\Closure $callback, array $args)
        {
        }
        /**
         * Get the environment argument from the console.
         *
         *
         * @return string|null
         */
        protected function getEnvironmentArgument(array $args)
        {
        }
    }
    class HelloDolly
    {
        /**
         * Return a lyric.
         *
         * Tribute to WordPress.
         * Based on the Hello Dolly plugin built by Matt Mullenweg.
         *
         * @see https://wordpress.org/plugins/hello-dolly/
         *
         * @return string
         */
        public static function lyric()
        {
        }
    }
    class HooksRepository
    {
        /**
         * @var ApplicationContract
         */
        protected $app;
        public function __construct(\Illuminate\Contracts\Foundation\Application $application)
        {
        }
        /**
         * Load a list of registered hookable instances.
         *
         * @param  array  $hooks The list of hookable instances.
         */
        public function load(array $hooks)
        {
        }
    }
    class Mix
    {
        /**
         * Get the path to a versioned Mix file.
         *
         * @param  string  $path
         * @param  string  $manifestDirectory
         * @return \Illuminate\Support\HtmlString|string
         *
         * @throws \Exception
         */
        public function __invoke($path, $manifestDirectory = '')
        {
        }
    }
    class PackageManifest
    {
        /**
         * @var Filesystem
         */
        public $files;
        /**
         * @var string
         */
        public $basePath;
        /**
         * @var string
         */
        public $manifestPath;
        /**
         * @var string
         */
        public $vendorPath;
        /**
         * @var array
         */
        public $manifest;
        public function __construct(\Illuminate\Filesystem\Filesystem $files, $basePath, $manifestPath)
        {
        }
        /**
         * Get aliases of all the packages.
         *
         * @return array
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function aliases()
        {
        }
        /**
         * Get providers of all the packages.
         *
         * @return array
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function providers()
        {
        }
        /**
         * Get manifest items by key.
         *
         * @param  string  $key
         * @return array
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function get($key = 'aliases')
        {
        }
        /**
         * Get the current packages manifest.
         *
         * @return array
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function getManifest()
        {
        }
        /**
         * Generate the packages.php manifest file.
         */
        public function build()
        {
        }
        /**
         * Get all the packages names to be ignored.
         *
         * @return array
         */
        protected function packagesToIgnore()
        {
        }
        /**
         * Format given package name.
         *
         * @param  string  $package
         * @return string
         */
        protected function format($package)
        {
        }
        /**
         * Write the given manifest to disk.
         *
         *
         * @throws Exception
         */
        protected function write(array $manifest)
        {
        }
    }
    class PluginManager
    {
        use \Themosis\Core\Support\WordPressFileHeaders;
        use \Themosis\Core\Support\IncludesFiles;
        use \Themosis\Core\Support\PluginHeaders;
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var string
         */
        protected $filePath;
        /**
         * @var string
         */
        protected $dirPath;
        /**
         * @var string
         */
        protected $directory;
        /**
         * @var array
         */
        protected $parsedHeaders = [];
        /**
         * Configuration files namespace.
         *
         * @var string
         */
        protected $namespace;
        /**
         * @var Repository
         */
        protected $config;
        /**
         * @var ClassLoader
         */
        protected $loader;
        public function __construct(\Themosis\Core\Application $app, string $filePath, \Composer\Autoload\ClassLoader $loader)
        {
        }
        /**
         * Load the plugin.
         */
        public function load(string $configPath) : \Themosis\Core\PluginManager
        {
        }
        /**
         * Set the plugin directory name.
         */
        public function setDirectory()
        {
        }
        /**
         * Return the plugin directory name.
         */
        public function getDirectory() : string
        {
        }
        /**
         * Return the plugin root path.
         *
         * @param  string  $path Path to append to the plugin root path.
         */
        public function getPath(string $path = '') : string
        {
        }
        /**
         * Return the plugin root URL.
         */
        public function getUrl(string $path = '') : string
        {
        }
        /**
         * Return a plugin header.
         *
         *
         * @return string|null
         */
        public function getHeader(string $header)
        {
        }
        /**
         * Return the plugin configuration files namespace.
         *
         * @return string
         */
        public function getNamespace()
        {
        }
        /**
         * Return a plugin configuration value.
         *
         * @param  string  $key     Key configuration short name.
         * @param  mixed  $default
         * @return mixed
         */
        public function config(string $key, $default = null)
        {
        }
        /**
         * Register plugin assets directories.
         *
         *
         * @return $this
         */
        public function assets(array $locations)
        {
        }
        /**
         * Set plugin headers and plugin text domain constant.
         */
        protected function setConstants()
        {
        }
        /**
         * Set the plugin prefix.
         */
        protected function setPrefix()
        {
        }
        /**
         * Load plugin configuration files.
         */
        protected function loadPluginConfiguration(string $configPath)
        {
        }
        /**
         * Load plugin classes.
         */
        protected function setPluginAutoloading()
        {
        }
        /**
         * Register plugin services providers.
         *
         *
         * @return $this
         */
        public function providers(array $providers = [])
        {
        }
        /**
         * Register plugin views.
         *
         *
         * @return $this
         */
        public function views(array $paths = [])
        {
        }
    }
    class PluginsRepository
    {
        use \Themosis\Core\Support\WordPressFileHeaders;
        use \Themosis\Core\Support\PluginHeaders;
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var string
         */
        protected $pluginsPath;
        /**
         * @var string
         */
        protected $manifestPath;
        public function __construct(\Themosis\Core\Application $application, \Illuminate\Filesystem\Filesystem $files, string $pluginsPath, string $manifestPath)
        {
        }
        /**
         * Load application must-use plugins.
         *
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @throws Exception
         */
        public function load(array $directories)
        {
        }
        /**
         * Compile a new plugin manifest.
         *
         *
         * @return array
         *
         * @throws Exception
         */
        public function compileManifest(array $directories)
        {
        }
        /**
         * Get the plugin. Find the root file and return its headers.
         *
         *
         * @return array
         */
        public function getPlugin(string $directory)
        {
        }
        /**
         * Verify if the plugins manifest should be recompiled.
         *
         * @param  array|null  $manifest
         * @param  array  $directories
         * @return bool
         */
        public function shouldRecompile($manifest, $directories)
        {
        }
        /**
         * Return plugins manifest.
         *
         * @return array|null
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function loadManifest()
        {
        }
        /**
         * Write the plugins manifest file.
         *
         *
         * @return array
         *
         * @throws Exception
         */
        public function writeManifest(array $manifest)
        {
        }
    }
    class ProviderRepository
    {
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var string
         */
        protected $manifestPath;
        public function __construct(\Illuminate\Contracts\Foundation\Application $app, \Illuminate\Filesystem\Filesystem $files, $manifestPath)
        {
        }
        /**
         * Register application service providers.
         *
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @throws Exception
         */
        public function load(array $providers)
        {
        }
        /**
         * Load the service provider manifest file.
         *
         * @return array|null
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function loadManifest()
        {
        }
        /**
         * Determine if the manifest should be compiled.
         *
         * @param  array  $manifest
         * @param  array  $providers
         * @return bool
         */
        public function shouldRecompile($manifest, $providers)
        {
        }
        /**
         * Compile the application service manifest file.
         *
         *
         * @return array
         *
         * @throws Exception
         */
        public function compileManifest(array $providers)
        {
        }
        /**
         * Create a fresh service manifest data structure.
         *
         *
         * @return array
         */
        protected function freshManifest(array $providers)
        {
        }
        /**
         * Write the service manifest file.
         *
         *
         * @return array
         *
         * @throws Exception
         */
        public function writeManifest(array $manifest)
        {
        }
        /**
         * Create a new provider instance.
         *
         * @param  string  $provider
         * @return \Illuminate\Support\ServiceProvider
         */
        public function createProvider($provider)
        {
        }
        /**
         * Register the load events for the given provider.
         */
        protected function registerLoadEvents($provider, array $events)
        {
        }
    }
    class ThemeManager
    {
        use \Themosis\Core\Support\WordPressFileHeaders;
        use \Themosis\Core\Support\IncludesFiles;
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var ClassLoader
         */
        protected $loader;
        /**
         * @var Repository
         */
        protected $config;
        /**
         * @var string
         */
        protected $dirPath;
        /**
         * @var \WP_Theme
         */
        protected $theme;
        /**
         * @var string
         */
        protected $routesPath;
        /**
         * @var array
         */
        public $headers = ['name' => 'Theme Name', 'theme_uri' => 'Theme URI', 'author' => 'Author', 'author_uri' => 'Author URI', 'description' => 'Description', 'version' => 'Version', 'license' => 'License', 'license_uri' => 'License URI', 'text_domain' => 'Text Domain', 'domain_path' => 'Domain Path'];
        /**
         * @var array
         */
        protected $parsedHeaders = [];
        /**
         * @var ImageSize
         */
        public $images;
        /**
         * The theme directory name.
         *
         * @var string
         */
        protected $directory;
        public function __construct(\Themosis\Core\Application $app, string $dirPath, \Composer\Autoload\ClassLoader $loader)
        {
        }
        /**
         * Load the theme. Setup theme requirements.
         *
         * @param  string  $path Theme configuration folder path.
         * @return $this
         */
        public function load(string $path) : \Themosis\Core\ThemeManager
        {
        }
        /**
         * Define theme assets directories.
         *
         *
         * @return $this
         */
        public function assets(array $locations)
        {
        }
        /**
         * Return a theme header property.
         *
         *
         * @return string|null
         */
        public function getHeader(string $header)
        {
        }
        /**
         * Return the theme directory name.
         *
         * @return string
         */
        public function getDirectory()
        {
        }
        /**
         * Return the theme root path.
         *
         * @param  string  $path Path to append to the theme base path.
         * @return string
         */
        public function getPath(string $path = '')
        {
        }
        /**
         * Return the theme root URL.
         *
         * @param  string  $path Path to append to the theme base URL.
         * @return string
         */
        public function getUrl(string $path = '')
        {
        }
        /**
         * Set the theme directory name property.
         */
        protected function setThemeDirectory()
        {
        }
        /**
         * Load theme configuration files.
         */
        protected function loadThemeConfiguration(string $path)
        {
        }
        /**
         * Load theme classes.
         */
        protected function setThemeAutoloading()
        {
        }
        /**
         * Register theme services providers.
         *
         *
         * @return $this
         */
        public function providers(array $providers = [])
        {
        }
        /**
         * Register theme views path.
         *
         *
         * @return $this
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public function views(array $paths = [])
        {
        }
        /**
         * Register theme constants.
         */
        protected function setThemeConstants()
        {
        }
        /**
         * Register theme image sizes.
         *
         *
         * @return $this
         */
        public function images(array $sizes = [])
        {
        }
        /**
         * Return a configuration value.
         *
         * @param  mixed  $default
         * @return mixed
         */
        public function config(string $key, $default = null)
        {
        }
        /**
         * Return the theme images sizes.
         *
         * @return ImageSize
         */
        public function getImages()
        {
        }
        /**
         * Register theme menus locations.
         *
         *
         * @return $this
         */
        public function menus(array $menus = [])
        {
        }
        /**
         * Register theme sidebars.
         *
         * @param  array  $sidebars
         * @return $this
         */
        public function sidebars($sidebars = [])
        {
        }
        /**
         * Register theme support features.
         *
         * @param  array  $features
         * @return $this
         */
        public function support($features = [])
        {
        }
        /**
         * Register theme templates.
         *
         * @param  array  $templates
         * @return $this
         */
        public function templates($templates = [])
        {
        }
    }
    class WordPressLoader
    {
        /**
         * Load WordPress core files in an environment ready only.
         * For example: load WordPress from a custom command, ...
         */
        public function load() : void
        {
        }
    }
}
namespace Themosis\Core\Auth\Access {
    use Illuminate\Contracts\Auth\Access\Gate;
    use Illuminate\Contracts\Auth\Access\Gate;
    use Illuminate\Support\Str;
    trait Authorizable
    {
        /**
         * Determine if the entity has the given abilities.
         *
         * @param  iterable|string  $abilities
         * @param  array|mixed  $arguments
         * @return bool
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public function can($abilities, $arguments = [])
        {
        }
        /**
         * Determine if the entity has any of the given abilities.
         *
         * @param  iterable|string  $abilities
         * @param  array|mixed  $arguments
         * @return bool
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public function canAny($abilities, $arguments = [])
        {
        }
        /**
         * Determine if the entity does not have the given abilities.
         *
         * @param  iterable|string  $abilities
         * @param  array|mixed  $arguments
         * @return bool
         */
        public function cant($abilities, $arguments = [])
        {
        }
        /**
         * Determine if the entity does not have the given abilities.
         *
         * @param  iterable|string  $abilities
         * @param  array|mixed  $arguments
         * @return bool
         */
        public function cannot($abilities, $arguments = [])
        {
        }
    }
    trait AuthorizesRequests
    {
        /**
         * Authorize a given action for the current user.
         *
         * @param  mixed  $ability
         * @param  mixed|array  $arguments
         * @return \Illuminate\Auth\Access\Response
         *
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */
        public function authorize($ability, $arguments = [])
        {
        }
        /**
         * Authorize a given action for a user.
         *
         * @param  \Illuminate\Contracts\Auth\Authenticatable|mixed  $user
         * @param  mixed  $ability
         * @param  mixed|array  $arguments
         * @return \Illuminate\Auth\Access\Response
         *
         * @throws \Illuminate\Auth\Access\AuthorizationException
         */
        public function authorizeForUser($user, $ability, $arguments = [])
        {
        }
        /**
         * Guesses the ability's name if it wasn't provided.
         *
         * @param  mixed  $ability
         * @param  mixed|array  $arguments
         * @return array
         */
        protected function parseAbilityAndArguments($ability, $arguments)
        {
        }
        /**
         * Normalize the ability name that has been guessed from the method name.
         *
         * @param  string  $ability
         * @return string
         */
        protected function normalizeGuessedAbilityName($ability)
        {
        }
        /**
         * Authorize a resource action based on the incoming request.
         *
         * @param  string  $model
         * @param  string|null  $parameter
         * @param  \Illuminate\Http\Request|null  $request
         */
        public function authorizeResource($model, $parameter = null, array $options = [], $request = null)
        {
        }
        /**
         * Get the map of resource methods to ability names.
         *
         * @return array
         */
        protected function resourceAbilityMap()
        {
        }
        /**
         * Get the list of resource methods which do not have model parameters.
         *
         * @return array
         */
        protected function resourceMethodsWithoutModels()
        {
        }
    }
}
namespace Themosis\Core\Auth\Data {
    class PasswordResetData
    {
        public function getToken() : string
        {
        }
        public function setToken(string $token) : void
        {
        }
        public function getEmail() : string
        {
        }
        public function setEmail(string $email) : void
        {
        }
        public function getPassword() : string
        {
        }
        public function setPassword(string $password) : void
        {
        }
        public function getPasswordConfirmation() : string
        {
        }
        public function setPasswordConfirmation(string $passwordConfirmation) : void
        {
        }
    }
}
namespace Themosis\Core\Http {
    use Illuminate\Auth\Access\AuthorizationException;
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Validation\ValidatesWhenResolved;
    use Illuminate\Contracts\Validation\Validator as ValidatorContract;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Redirector;
    use Illuminate\Validation\Factory as ValidationFactory;
    use Illuminate\Validation\ValidatesWhenResolvedTrait;
    use Illuminate\Validation\ValidationException;
    use Illuminate\Validation\Validator;
    use Exception;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\Response as IlluminateResponse;
    use Illuminate\Routing\Pipeline;
    use Illuminate\Support\Facades\Facade;
    use Symfony\Component\Debug\Exception\FatalThrowableError;
    use Symfony\Component\HttpFoundation\Response;
    use Themosis\Core\Exceptions\Handler;
    use Themosis\Core\Http\Events\RequestHandled;
    use Themosis\Route\Router;
    use Throwable;
    class FormRequest extends \Illuminate\Http\Request implements \Illuminate\Contracts\Validation\ValidatesWhenResolved
    {
        use \Illuminate\Validation\ValidatesWhenResolvedTrait;
        /**
         * @var Container
         */
        protected $container;
        /**
         * @var Redirector
         */
        protected $redirector;
        /**
         * The URI to redirect to if validation fails.
         *
         * @var string
         */
        protected $redirect;
        /**
         * The route to redirect to if validation fails.
         *
         * @var string
         */
        protected $redirectRoute;
        /**
         * The controller action to redirect to if validation fails.
         *
         * @var string
         */
        protected $redirectAction;
        /**
         * The key to be used for the view error bag.
         *
         * @var string
         */
        protected $errorBag = 'default';
        /**
         * @var \Illuminate\Contracts\Validation\Validator
         */
        protected $validator;
        /**
         * Get the validator instance for the request.
         *
         * @return ValidatorContract
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function getValidatorInstance()
        {
        }
        /**
         * Create the default validator instance.
         *
         *
         * @return Validator
         */
        protected function createDefaultValidator(\Illuminate\Validation\Factory $factory)
        {
        }
        /**
         * Get the data to be validated from the request.
         *
         * @return array
         */
        protected function validationData()
        {
        }
        /**
         * Get custom messages for validator errors.
         *
         * @return array
         */
        public function messages()
        {
        }
        /**
         * Get custom attributes for validator errors.
         *
         * @return array
         */
        public function attributes()
        {
        }
        /**
         * Get the validated data from the request.
         *
         * @return array
         */
        public function validated()
        {
        }
        /**
         * Handle a failed validation attempt.
         *
         *
         * @throws ValidationException
         */
        protected function failedValidation(\Illuminate\Validation\Validator $validator)
        {
        }
        /**
         * Get the URL to redirect to on a validation error.
         *
         * @return string
         */
        protected function getRedirectUrl()
        {
        }
        /**
         * Determine if the request passes the authorization check.
         *
         * @return bool
         */
        protected function passesAuthorization()
        {
        }
        /**
         * Handle a failed authorization attempt.
         *
         * @return AuthorizationException
         *
         * @throws AuthorizationException
         */
        protected function failedAuthorization()
        {
        }
        /**
         * Set the validator instance.
         *
         *
         * @return $this
         */
        public function setValidator(\Illuminate\Validation\Validator $validator)
        {
        }
        /**
         * Set the redirector instance.
         *
         *
         * @return $this
         */
        public function setRedirector(\Illuminate\Routing\Redirector $redirector)
        {
        }
        /**
         * Set the container.
         *
         *
         * @return $this
         */
        public function setContainer(\Illuminate\Contracts\Container\Container $container)
        {
        }
    }
    class Kernel implements \Illuminate\Contracts\Http\Kernel
    {
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var Router
         */
        protected $router;
        /**
         * List of bootstrap classes.
         *
         * @var array
         */
        protected $bootstrappers = [\Themosis\Core\Bootstrap\EnvironmentLoader::class, \Themosis\Core\Bootstrap\ConfigurationLoader::class, \Themosis\Core\Bootstrap\ExceptionHandler::class, \Themosis\Core\Bootstrap\RegisterFacades::class, \Themosis\Core\Bootstrap\RegisterProviders::class, \Themosis\Core\Bootstrap\BootProviders::class];
        /**
         * Application middleware stack. Used on every request.
         *
         * @var array
         */
        protected $middleware = [];
        /**
         * The application's route middleware groups.
         *
         * @var array
         */
        protected $middlewareGroups = [];
        /**
         * Aliased middleware. Can be used individually or within groups.
         *
         * @var array
         */
        protected $routeMiddleware = [];
        /**
         * Priority-sorted list of middleware.
         *
         * @var array
         */
        protected $middlewarePriority = [\Illuminate\Session\Middleware\StartSession::class, \Illuminate\View\Middleware\ShareErrorsFromSession::class, \Illuminate\Routing\Middleware\SubstituteBindings::class];
        public function __construct(\Illuminate\Contracts\Foundation\Application $app, \Themosis\Route\Router $router)
        {
        }
        /**
         * Initialize the kernel (bootstrap application base components).
         *
         * @param  \Illuminate\Http\Request  $request
         */
        public function init($request)
        {
        }
        /**
         * Handle an incoming HTTP request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return IlluminateResponse
         */
        public function handle($request)
        {
        }
        /**
         * Determine if the kernel has a given middleware.
         *
         * @param  string  $middleware
         * @return bool
         */
        public function hasMiddleware($middleware)
        {
        }
        /**
         * Send given request through the middleware (if any) and router.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return IlluminateResponse
         */
        protected function sendRequestThroughRouter($request)
        {
        }
        /**
         * Get route dispatcher callback used by the
         * routing pipeline.
         *
         * @return \Closure
         */
        protected function dispatchToRouter()
        {
        }
        /**
         * Bootstrap the application.
         */
        public function bootstrap()
        {
        }
        /**
         * Return the bootstrappers array.
         *
         * @return array
         */
        protected function bootstrappers()
        {
        }
        /**
         * Call the terminate method on any terminable middleware.
         *
         * @param  \Symfony\Component\HttpFoundation\Request  $request
         * @param  Response  $response
         */
        public function terminate($request, $response)
        {
        }
        /**
         * Call the terminate method on any terminable middleware.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Illuminate\Http\Response  $response
         */
        protected function terminateMiddleware($request, $response)
        {
        }
        /**
         * Gather the route middleware for the given request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return array
         */
        protected function gatherRouteMiddleware($request)
        {
        }
        /**
         * Parse a middleware string to get the name and parameters.
         *
         * @param  string  $middleware
         * @return array
         */
        protected function parseMiddleware($middleware)
        {
        }
        /**
         * Add a new middleware to beginning of the stack if it does not already exist.
         *
         * @param  string  $middleware
         * @return $this
         */
        public function prependMiddleware($middleware)
        {
        }
        /**
         * Add a new middleware to end of the stack if it does not already exist.
         *
         * @param  string  $middleware
         * @return $this
         */
        public function pushMiddleware($middleware)
        {
        }
        /**
         * Return the application instance.
         *
         * @return Application
         */
        public function getApplication()
        {
        }
        /**
         * Get the application's route middleware groups.
         *
         * @return array
         */
        public function getMiddlewareGroups()
        {
        }
        /**
         * Get the application's route middleware.
         *
         * @return array
         */
        public function getRouteMiddleware()
        {
        }
        /**
         * Report the exception to the exception handler.
         */
        protected function reportException(\Exception $e)
        {
        }
        /**
         * Render the exception to a response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return Response
         */
        protected function renderException($request, \Exception $e)
        {
        }
    }
}
namespace Themosis\Core\Auth {
    use Illuminate\Auth\Events\Verified;
    use Themosis\Core\Http\FormRequest;
    use Illuminate\Auth\Authenticatable;
    use Illuminate\Auth\MustVerifyEmail;
    use Illuminate\Auth\Passwords\CanResetPassword;
    use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableInterface;
    use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableInterface;
    use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordInterface;
    use Illuminate\Database\Eloquent\Model;
    use Themosis\Core\Auth\Access\Authorizable;
    class EmailVerificationRequest extends \Themosis\Core\Http\FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
        }
        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {
        }
        /**
         * Fulfill the email verification request.
         */
        public function fulfill()
        {
        }
        /**
         * Configure the validator instance.
         *
         * @param  \Illuminate\Validation\Validator  $validator
         * @return \Illuminate\Validation\Validator
         */
        public function withValidator($validator)
        {
        }
    }
    class User extends \Illuminate\Database\Eloquent\Model implements \Illuminate\Contracts\Auth\Authenticatable, \Illuminate\Contracts\Auth\Access\Authorizable, \Illuminate\Contracts\Auth\CanResetPassword
    {
        use \Illuminate\Auth\Authenticatable;
        use \Themosis\Core\Auth\Access\Authorizable;
        use \Illuminate\Auth\Passwords\CanResetPassword;
        use \Illuminate\Auth\MustVerifyEmail;
    }
}
namespace Themosis\Core\Bootstrap {
    use Illuminate\Contracts\Foundation\Application;
    use Exception;
    use Illuminate\Config\Repository;
    use Illuminate\Contracts\Config\Repository as RepositoryContract;
    use Illuminate\Contracts\Foundation\Application;
    use Symfony\Component\Finder\Finder;
    use Dotenv\Dotenv;
    use Dotenv\Exception\InvalidFileException;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Support\Env;
    use Symfony\Component\Console\Input\ArgvInput;
    use Symfony\Component\Console\Output\ConsoleOutput;
    use ErrorException;
    use Exception;
    use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Log\LogManager;
    use Monolog\Handler\NullHandler;
    use Symfony\Component\Console\Output\ConsoleOutput;
    use Symfony\Component\ErrorHandler\Error\FatalError;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Core\AliasLoader;
    use Themosis\Core\PackageManifest;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Http\Request;
    class BootProviders
    {
        /**
         * Bootstrap the application.
         */
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
    }
    class ConfigurationLoader
    {
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
        /**
         * Load configuration items from all found config files.
         *
         *
         * @throws Exception
         */
        protected function loadConfigurationFiles(\Illuminate\Contracts\Foundation\Application $app, \Illuminate\Contracts\Config\Repository $repository) : void
        {
        }
        /**
         * Do we need to include the wordpress config file if cached config is loaded?
         */
        protected function maybeForceWpConfigInclude() : void
        {
        }
        /**
         * Check if the WordPress config constants are already defined.
         */
        protected function isWordPressConfigLoaded() : bool
        {
        }
        /**
         * Get all configuration files.
         *
         *
         * @return array
         */
        protected function getConfigurationFiles(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
        /**
         * Get configuration file nesting path.
         *
         * @param  string  $path
         * @return string
         */
        protected function getNestedDirectory(\SplFileInfo $file, $path)
        {
        }
    }
    class EnvironmentLoader
    {
        /**
         * Bootstrap the application environment.
         */
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
        /**
         * Detect if a custom environment file matching the APP_ENV exists.
         *
         * @param  \Illuminate\Contracts\Foundation\Application  $app
         */
        protected function checkForSpecificEnvironmentFile($app)
        {
        }
        /**
         * Load a custom environment file.
         *
         * @param  \Illuminate\Contracts\Foundation\Application  $app
         * @param  string  $file
         * @return bool
         */
        protected function setEnvironmentFilePath($app, $file)
        {
        }
        /**
         * Create a Dotenv instance.
         *
         * @param  \Illuminate\Contracts\Foundation\Application  $app
         * @return Dotenv
         */
        protected function createDotenv($app)
        {
        }
        /**
         * Write the error information to the screen and exit.
         */
        protected function writeErrorAndDie(\Dotenv\Exception\InvalidFileException $e)
        {
        }
    }
    class ExceptionHandler
    {
        /**
         * @var Application
         */
        protected $app;
        /**
         * Reserved memory so that errors can be displayed properly on memory exhaustion.
         *
         * @var string
         */
        public static $reservedMemory;
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
        /**
         * Convert PHP errors to ErrorException instances.
         *
         * @param  int  $level
         * @param  string  $message
         * @param  string  $file
         * @param  int  $line
         * @param  array  $context
         *
         * @throws ErrorException
         */
        public function handleError($level, $message, $file = '', $line = 0, $context = [])
        {
        }
        /**
         * Reports a deprecation to the "deprecations" logger.
         *
         * @param  string  $message
         * @param  string  $file
         * @param  int  $line
         */
        public function handleDeprecation($message, $file, $line)
        {
        }
        protected function ensureDeprecationLoggerIsConfigured()
        {
        }
        protected function ensureNullLogDriverIsConfigured()
        {
        }
        /**
         * Handle an uncaught exception from the application.
         */
        public function handleException(\Throwable $e)
        {
        }
        /**
         * Handle the PHP shutdown event.
         */
        public function handleShutdown()
        {
        }
        /**
         * Determine if the error level is a deprecation.
         *
         * @param  int  $level
         * @return bool
         */
        protected function isDeprecation($level)
        {
        }
        /**
         * Determine if the error type is fatal.
         *
         * @param  int  $type
         * @return bool
         */
        protected function isFatal($type)
        {
        }
        /**
         * Create a new fatal exception instance from an error array.
         *
         * @param  int|null  $traceOffset
         * @return \Symfony\Component\ErrorHandler\Error\FatalError
         */
        protected function fatalExceptionFromError(array $error, $traceOffset = null)
        {
        }
        /**
         * Render an exception to the console.
         */
        protected function renderForConsole(\Throwable $e)
        {
        }
        /**
         * Render an exception as an HTTP Response and send it.
         */
        protected function renderHttpResponse(\Throwable $e)
        {
        }
        /**
         * Get an instance of the exception handler.
         *
         * @return \Illuminate\Contracts\Debug\ExceptionHandler
         */
        protected function getExceptionHandler()
        {
        }
    }
    class RegisterFacades
    {
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
    }
    class RegisterProviders
    {
        /**
         * Bootstrap application service providers.
         */
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
    }
    class SetRequestForConsole
    {
        /**
         * Setup the request for console application.
         */
        public function bootstrap(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
    }
}
namespace Themosis\Core\Bus {
    use Illuminate\Contracts\Bus\Dispatcher;
    use Illuminate\Support\Fluent;
    use Illuminate\Contracts\Bus\Dispatcher;
    use Illuminate\Contracts\Bus\Dispatcher;
    use Illuminate\Queue\CallQueuedClosure;
    use Illuminate\Queue\SerializableClosure;
    use Illuminate\Container\Container;
    use Illuminate\Contracts\Bus\Dispatcher;
    use Illuminate\Contracts\Cache\Repository as Cache;
    use Illuminate\Contracts\Queue\ShouldBeUnique;
    trait Dispatchable
    {
        /**
         * Dispatch the job with the given arguments.
         *
         * @return PendingDispatch
         */
        public static function dispatch()
        {
        }
        /**
         * Dispatch the job with the given arguments if the given truth test passes.
         *
         * @param  bool  $boolean
         * @param  mixed  ...$arguments
         * @return Fluent|PendingDispatch
         */
        public static function dispatchIf($boolean, ...$arguments)
        {
        }
        /**
         * Dispatch the job with the given arguments unless the given truth test passes.
         *
         * @param  mixed  ...$arguments
         * @return Fluent|PendingDispatch
         */
        public static function dispatchUnless($boolean, ...$arguments)
        {
        }
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * Queuable jobs will be dispatched to the "sync" queue.
         *
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public static function dispatchSync()
        {
        }
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public static function dispatchNow()
        {
        }
        /**
         * Dispatch a command to its appropriate handle after the current process.
         *
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public static function dispatchAfterResponse()
        {
        }
        /**
         * Set the jobs that should run if this job is successful.
         *
         * @param  array  $chain
         * @return PendingChain
         */
        public static function withChain($chain)
        {
        }
    }
    trait DispatchesJobs
    {
        /**
         * Dispatch a job to its appropriate handler.
         *
         * @param  mixed  $job
         * @return mixed
         */
        protected function dispatch($job)
        {
        }
        /**
         * Dispatch a job to its appropriate handler in the current process.
         *
         * @param  mixed  $job
         * @return mixed
         */
        public function dispatchNow($job)
        {
        }
    }
    class PendingChain
    {
        /**
         * The class name of the job being dispatched.
         *
         * @var mixed
         */
        public $job;
        /**
         * The jobs to be chained.
         *
         * @var array
         */
        public $chain;
        /**
         * The name of the connection the chain should be sent to.
         *
         * @var string|null
         */
        public $connection;
        /**
         * The name of the queue the chain should be sent to.
         *
         * @var string|null
         */
        public $queue;
        /**
         * The number of seconds before the chain should be made available.
         *
         * @var \DateTimeInterface|\DateInterval|int|null
         */
        public $delay;
        /**
         * The callbacks to be executed on failure.
         *
         * @var array
         */
        public $catchCallbacks = [];
        /**
         * PendingChain constructor.
         *
         * @param  string  $class
         * @param  array  $chain
         * @param  mixed  $job
         */
        public function __construct($job, $chain)
        {
        }
        /**
         * Set the desired connection for the job.
         *
         * @param  string|null  $connection
         * @return $this
         */
        public function onConnection($connection)
        {
        }
        /**
         * Set the desired queue for the job.
         *
         * @param  string|null  $queue
         * @return $this
         */
        public function onQueue($queue)
        {
        }
        /**
         * Set the desired delay for the chain.
         *
         * @param  \DateTimeInterface|\DateInterval|int|null  $delay
         * @return $this
         */
        public function delay($delay)
        {
        }
        /**
         * Add a callback to be executed on job failure.
         *
         * @param  callable  $callback
         * @return $this
         */
        public function catch($callback)
        {
        }
        /**
         * Get the "catch" callbacks that have been registered.
         *
         * @return array
         */
        public function catchCallbacks()
        {
        }
        /**
         * Dispatch the job with the given arguments.
         *
         * @return PendingDispatch
         */
        public function dispatch()
        {
        }
    }
    class PendingDispatch
    {
        /**
         * @var mixed
         */
        protected $job;
        /**
         * Indicated if the job should be dispatched immediately after sending the response.
         *
         * @var bool
         */
        protected $afterResponse = false;
        public function __construct($job)
        {
        }
        /**
         * Set the desired connection for the job.
         *
         * @param  string|null  $connection
         * @return $this
         */
        public function onConnection($connection)
        {
        }
        /**
         * Set the desired queue for the job.
         *
         * @param  string|null  $queue
         * @return $this
         */
        public function onQueue($queue)
        {
        }
        /**
         * Set the desired connection for the chain.
         *
         * @param  string|null  $connection
         * @return $this
         */
        public function allOnConnection($connection)
        {
        }
        /**
         * Set the desired queue for the chain.
         *
         * @param  string|null  $queue
         * @return $this
         */
        public function allOnQueue($queue)
        {
        }
        /**
         * Set the desired delay for the job.
         *
         * @param  \DateTimeInterface|\DateInterval|int|null  $delay
         * @return $this
         */
        public function delay($delay)
        {
        }
        /**
         * Indicates that the job should be dispatched after all database transactions have committed.
         *
         * @return $this
         */
        public function afterCommit()
        {
        }
        /**
         * Indicates that the job should not wait until database transactions have been committed before dispatching.
         *
         * @return $this
         */
        public function beforeCommit()
        {
        }
        /**
         * Set the jobs that should run if this job is successful.
         *
         * @param  array  $chain
         * @return $this
         */
        public function chain($chain)
        {
        }
        /**
         * Indicates that the job should be dispatched after the response is sent to the browser.
         *
         * @return $this
         */
        public function afterResponse()
        {
        }
        /**
         * Determine if the job should be dispatched.
         *
         * @return bool
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function shouldDispatch()
        {
        }
        /**
         * Dynamically proxy methods to the underlying job.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return $this
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Handle the object's destruction.
         */
        public function __destruct()
        {
        }
    }
    class PendingClosureDispatch extends \Themosis\Core\Bus\PendingDispatch
    {
        /**
         * Add a callback to be executed if the job fails.
         *
         *
         * @return $this
         */
        public function catch(\Closure $callback)
        {
        }
    }
}
namespace Themosis\Core\Cache {
    use Illuminate\Contracts\Cache\Repository;
    class WordPressCacheWrapper
    {
        public function __construct(\Illuminate\Contracts\Cache\Repository $store, bool $multisite = false, string $blogPrefix = '')
        {
        }
        /**
         * Sets the list of global cache groups.
         */
        public function addGlobalGroups(array $groups)
        {
        }
        /**
         * Adds a group or set of groups to the list of non-persistent groups.
         */
        public function addNonPersistentGroups(array $groups)
        {
        }
        /**
         * Switches the internal blog prefix ID.
         */
        public function switchToBlog(int $blog_id)
        {
        }
        /**
         * Retrieves the cache contents, it it exists.
         *
         * @param  string|int  $key
         * @param  string  $group
         * @param  bool  $force
         * @param  null  $found
         * @return bool|mixed False on failure. Cache value on success.
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function get($key, $group = 'default', $force = false, &$found = null)
        {
        }
        /**
         * Store an item into the cache.
         *
         * @param  string|int  $key
         * @param  mixed  $data
         * @param  string  $group
         * @param  int  $expire
         * @return bool
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function set($key, $data, $group = 'default', $expire = 0)
        {
        }
        /**
         * Adds data to the cache if the cache key doesn't already exist.
         *
         * @param  string|int  $key
         * @param  mixed  $data
         * @param  string  $group
         * @param  int  $expire
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function add($key, $data, $group = 'default', $expire = 0) : bool
        {
        }
        /**
         * Decrement numeric cache item's value.
         *
         * @param  string|int  $key
         * @param  int  $offset
         * @param  string  $group
         * @return bool|int
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function decrement($key, $offset = 1, $group = 'default')
        {
        }
        /**
         * Increment numeric cache item's value.
         *
         * @param  string|int  $key
         * @param  int  $offset
         * @param  string  $group
         * @return bool|int
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function increment($key, $offset = 1, $group = 'default')
        {
        }
        /**
         * Removes the cache contents matching key.
         *
         * @param  string|int  $key
         * @param  string  $group
         * @return bool
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function delete($key, $group = 'default')
        {
        }
        /**
         * Replaces the content in the cache, if content already exists.
         *
         * @param  string|int  $key
         * @param  mixed  $data
         * @param  string  $group
         * @param  int  $expire
         * @return bool
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         */
        public function replace($key, $data, $group = 'default', $expire = 0)
        {
        }
        /**
         * Removes all cache items.
         *
         * @return bool
         */
        public function flush()
        {
        }
    }
}
namespace Themosis\Core\Console {
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Themosis\Core\HelloDolly;
    use Illuminate\Console\Command;
    use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;
    use Illuminate\Filesystem\Filesystem;
    use Throwable;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Console\GeneratorCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Support\Composer;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Themosis\Core\Dropins\WordPressDropins;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Themosis\Core\Support\Providers\EventServiceProvider;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Console\Command;
    use Illuminate\Support\Str;
    use Themosis\Core\Support\Providers\EventServiceProvider;
    use Illuminate\Console\Command;
    use Illuminate\Support\Str;
    use Themosis\Core\Support\Providers\EventServiceProvider;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\GeneratorCommand;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\GeneratorCommand;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Application as Artisan;
    use Illuminate\Console\Command;
    use Illuminate\Console\Scheduling\Schedule;
    use Illuminate\Contracts\Console\Kernel as KernelContract;
    use Illuminate\Contracts\Debug\ExceptionHandler;
    use Illuminate\Contracts\Events\Dispatcher;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Support\Env;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Finder\Finder;
    use Throwable;
    use Illuminate\Console\Command;
    use Illuminate\Console\ConfirmableTrait;
    use Illuminate\Encryption\Encrypter;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use InvalidArgumentException;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Themosis\Core\PackageManifest;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Support\Composer;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputOption;
    use Themosis\Core\Support\PluginHeaders;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\GeneratorCommand;
    use Carbon\CarbonImmutable;
    use Carbon\CarbonTimeZone;
    use Illuminate\Console\Command;
    use Themosis\Core\Repositories\PostRepository;
    use Themosis\Core\WordPressLoader;
    use WP_Post;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Themosis\Core\Bus\Dispatchable;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Routing\RouteCollection;
    use Themosis\Core\Application;
    use Themosis\Route\Route;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Console\Command;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Themosis\Route\Route;
    use Themosis\Route\Router;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Console\Command;
    use Illuminate\Console\ConfirmableTrait;
    use Illuminate\Console\Command;
    use Illuminate\Support\ProcessUtils;
    use Symfony\Component\Console\Input\InputOption;
    use Symfony\Component\Process\PhpExecutableFinder;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Str;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputOption;
    use Illuminate\Console\Command;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Support\Arr;
    use Illuminate\Support\ServiceProvider;
    use League\Flysystem\Adapter\Local;
    use League\Flysystem\MountManager;
    use Illuminate\Console\Command;
    use Illuminate\Support\Collection;
    use Symfony\Component\Finder\Finder;
    use Symfony\Component\Finder\SplFileInfo;
    use Illuminate\Console\Command;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Console\GeneratorCommand;
    class CastMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:cast';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new custom Eloquent cast class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Cast';
        /**
         * {@inheritDoc}
         */
        protected function getStub()
        {
        }
        /**
         * Resolve the fully-qualified path to the stub.
         *
         * @param  string  $stub
         * @return string
         */
        protected function resolveStubPath($stub)
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class ChannelMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:channel';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new channel class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Channel';
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string|string[]
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildClass($name)
        {
        }
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class ClearCompiledCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'clear-compiled';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Remove the compiled class file';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class ClosureCommand extends \Illuminate\Console\Command
    {
        /**
         * The command callback.
         *
         * @var \Closure
         */
        protected $callback;
        public function __construct($signature, \Closure $callback)
        {
        }
        /**
         * Execute the console command.
         *
         *
         * @return mixed
         *
         * @throws \ReflectionException
         */
        protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
        {
        }
        /**
         * Set the command description.
         *
         *
         * @return $this
         */
        public function describe($description)
        {
        }
    }
    class ComponentMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:component';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new view component class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Component';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Write the view for the component.
         */
        protected function writeView()
        {
        }
        /**
         * Get the view name relative to the components directory.
         *
         * @return string view
         */
        protected function getView()
        {
        }
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string
         */
        protected function buildClass($name)
        {
        }
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class ConfigCacheCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'config:cache';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a cache file for faster configuration loading';
        /**
         * @var \Illuminate\Filesystem\Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Boot a fresh copy of the application configuration.
         *
         * @return array
         */
        protected function getFreshConfiguration()
        {
        }
    }
    class ConfigClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'config:clear';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Remove the configuration cache file';
        /**
         * @var \Illuminate\Filesystem\Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class ConsoleMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:command';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new console command';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Console command';
        /**
         * Return the stub file path.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Replace the class name for the given stub.
         *
         * @param  string  $stub
         * @param  string  $name
         * @return string
         */
        protected function replaceClass($stub, $name)
        {
        }
        /**
         * Return the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the console command arguments.
         *
         * @return array
         */
        protected function getArguments()
        {
        }
        /**
         * Return the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class CustomerTableCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'customer:table';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a migration for the customer database table';
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var Composer
         */
        protected $composer;
        public function __construct(\Illuminate\Filesystem\Filesystem $files, \Illuminate\Support\Composer $composer)
        {
        }
        public function handle()
        {
        }
        /**
         * Create a base migration file for the customer.
         *
         * @return string
         */
        protected function createBaseMigration()
        {
        }
    }
    class DownCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command signature.
         *
         * @var string
         */
        protected $signature = 'down {--time= : The number of seconds to keep the application in maintenance mode.}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Put the application into maintenance mode';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Return the maintenance duration.
         *
         * @return int|string
         */
        protected function getDuration()
        {
        }
    }
    class DropinClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The command signature.
         *
         * @var string
         */
        protected $signature = 'dropin:clear
                            {--file= : The drop-in file to clear}
                            {--all : Clear all drop-in files.}';
        /**
         * The command description.
         *
         * @var string
         */
        protected $description = 'Clear defined or all WordPress drop-in files';
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class EnvironmentCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'env';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Display the current framework environment';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
    }
    class EventCacheCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name and signature.
         *
         * @var string
         */
        protected $signature = 'event:cache';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = "Discover and cache the application's events and listeners";
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Return all of the events and listeners configured for the application.
         *
         * @return array
         */
        protected function getEvents()
        {
        }
    }
    class EventClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'event:clear';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Clear all cached events and listeners';
        /**
         * @var Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class EventGenerateCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'event:generate';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Generate the missing events and listeners based on registration';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Make the event and listeners for the given event.
         *
         * @param  string  $event
         * @param  array  $listeners
         */
        protected function makeEventAndListeners($event, $listeners)
        {
        }
        /**
         * Make the listeners for the given event.
         *
         * @param  string  $event
         * @param  array  $listeners
         */
        protected function makeListeners($event, $listeners)
        {
        }
    }
    class EventListCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name and signature.
         *
         * @var string
         */
        protected $signature = 'event:list {--event= : Filter the events by name}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = "List the application's events and listeners";
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Return all the events and listeners configured for the application.
         *
         * @return array
         */
        protected function getEvents()
        {
        }
        /**
         * Filter the given events using the provided event name filter.
         *
         *
         * @return array
         */
        protected function filterEvents(array $events)
        {
        }
        /**
         * Check whether the user is filtering by an event name.
         *
         * @return bool
         */
        protected function filteringByEvent()
        {
        }
    }
    class EventMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:event';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new event class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Event';
        /**
         * Check if the class already exists.
         *
         * @param  string  $rawName
         * @return bool
         */
        protected function alreadyExists($rawName)
        {
        }
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class ExceptionMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:exception';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new custom exception class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Exception';
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Determine if the class already exists.
         *
         * @param  string  $rawName
         * @return bool
         */
        protected function alreadyExists($rawName)
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class FormMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:form';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new form class';
        /**
         * The type of the class being generated.
         *
         * @var string
         */
        protected $type = 'Form';
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the class default namespace.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class HookMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:hook';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new hook class';
        /**
         * The type of the class being generated.
         *
         * @var string
         */
        protected $type = 'Hook';
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the class default namespace.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class JobMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:job';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new job class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Job';
        /**
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the default class namespace.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class Kernel implements \Illuminate\Contracts\Console\Kernel
    {
        /**
         * @var Application|\Themosis\Core\Application
         */
        protected $app;
        /**
         * @var Dispatcher
         */
        protected $events;
        /**
         * The console application instance.
         *
         * @var \Illuminate\Console\Application
         */
        protected $artisan;
        /**
         * @var array
         */
        protected $bootstrappers = [\Themosis\Core\Bootstrap\EnvironmentLoader::class, \Themosis\Core\Bootstrap\ConfigurationLoader::class, \Themosis\Core\Bootstrap\ExceptionHandler::class, \Themosis\Core\Bootstrap\RegisterFacades::class, \Themosis\Core\Bootstrap\SetRequestForConsole::class, \Themosis\Core\Bootstrap\RegisterProviders::class, \Themosis\Core\Bootstrap\BootProviders::class];
        /**
         * The console commands provided by the application.
         *
         * @var array
         */
        protected $commands = [];
        /**
         * Indicates if the Closure commands have been loaded.
         *
         * @var bool
         */
        protected $commandsLoaded = false;
        public function __construct(\Illuminate\Contracts\Foundation\Application $app, \Illuminate\Contracts\Events\Dispatcher $events)
        {
        }
        /**
         * Define the application's command schedule.
         */
        protected function defineConsoleSchedule()
        {
        }
        /**
         * Get the name of the cache store that should manage scheduling mutexes.
         *
         * @return string
         */
        protected function scheduleCache()
        {
        }
        /**
         * Define the application's command schedule.
         */
        protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
        {
        }
        /**
         * Get the timezone that should be used by default for scheduled events.
         *
         * @return \DateTimeZone|string|null
         */
        protected function scheduleTimezone()
        {
        }
        /**
         * Run the console application.
         *
         * @param  \Symfony\Component\Console\Input\InputInterface  $input
         * @param  null  $output
         * @return int
         */
        public function handle($input, $output = null)
        {
        }
        /**
         * Terminate the application.
         *
         * @param  InputInterface  $input
         * @param  int  $status
         */
        public function terminate($input, $status)
        {
        }
        /**
         * Bootstrap the application for console commands.
         */
        public function bootstrap()
        {
        }
        /**
         * Register the Closure based commands for the application.
         */
        protected function commands()
        {
        }
        /**
         * Register a closure based command with the application.
         *
         * @param  string  $signature
         * @return ClosureCommand
         */
        public function command($signature, \Closure $callback)
        {
        }
        /**
         * Register the given command with the console applicationb.
         *
         * @param  \Symfony\Component\Console\Command\Command  $command
         */
        public function registerCommand($command)
        {
        }
        /**
         * Get the bootstrap classes for the application.
         *
         * @return array
         */
        protected function bootstrappers()
        {
        }
        /**
         * Register all of the commands in the given directory.
         *
         * @param  array|string  $paths
         *
         * @throws \ReflectionException
         */
        protected function load($paths)
        {
        }
        /**
         * Return the artisan application instance.
         *
         * @return \Illuminate\Console\Application
         */
        protected function getArtisan()
        {
        }
        /**
         * Alias for "getArtisan()".
         */
        protected function getConsole()
        {
        }
        /**
         * Alias. Set the console application instance.
         *
         * @param  \Illuminate\Console\Application  $console
         */
        public function setConsole($console)
        {
        }
        /**
         * Set the console application instance.
         *
         * @param  \Illuminate\Console\Application  $artisan
         */
        public function setArtisan($artisan)
        {
        }
        /**
         * Run a console command by name.
         *
         * @param  string  $command
         * @param  OutputInterface  $outputBuffer
         * @return int
         */
        public function call($command, array $parameters = [], $outputBuffer = null)
        {
        }
        /**
         * Queue the given console command.
         *
         * @param  string  $command
         * @return \Themosis\Core\Bus\PendingDispatch
         */
        public function queue($command, array $parameters = [])
        {
        }
        /**
         * Get all registered commands with the console.
         *
         * @return array
         */
        public function all()
        {
        }
        /**
         * Get the output for the last run command.
         *
         * @return string
         */
        public function output()
        {
        }
        /**
         * Report the exception to the exception handler.
         */
        protected function reportException(\Throwable $e)
        {
        }
        /**
         * Render the exception.
         *
         * @param  OutputInterface  $output
         */
        protected function renderException($output, \Throwable $e)
        {
        }
    }
    class KeyGenerateCommand extends \Illuminate\Console\Command
    {
        use \Illuminate\Console\ConfirmableTrait;
        /**
         * Name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'key:generate
                    {--show : Display the key instead of modifying files}
                    {--force : Force the operation to run when in production}';
        /**
         * Console command description.
         *
         * @var string
         */
        protected $description = 'Set the application key';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Generate a random key for the application.
         *
         * @return string
         */
        protected function generateRandomKey()
        {
        }
        /**
         * Set the application key in the environment file.
         *
         *
         * @return bool
         */
        protected function setKeyInEnvironmentFile(string $key)
        {
        }
        /**
         * Write new environment file with the given key.
         */
        protected function writeNewEnvironmentFileWith(string $key)
        {
        }
        /**
         * Get a regex pattern that will match env APP_KEY with any random key.
         *
         * @return string
         */
        protected function keyReplacementPattern()
        {
        }
    }
    class ListenerMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:listener';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new event listener class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Listener';
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string|string[]
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildClass($name)
        {
        }
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Check if the class already exists.
         *
         * @param  string  $rawName
         * @return bool
         */
        protected function alreadyExists($rawName)
        {
        }
        /**
         * Return the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class MailMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:mail';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new email class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Mail';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Write the Markdown template for the mailable.
         */
        protected function writeMarkdownTemplate()
        {
        }
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string
         */
        protected function buildClass($name)
        {
        }
        /**
         * Return command stub template.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class ModelMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:model';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new Eloquent model class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Model';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Create a model factory for the model.
         */
        protected function createFactory()
        {
        }
        /**
         * Create a migration file for the model.
         */
        protected function createMigration()
        {
        }
        /**
         * Create a seeder file for the model.
         */
        protected function createSeeder()
        {
        }
        /**
         * Create a controller for the model.
         */
        protected function createController()
        {
        }
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Resolve the fully-qualified path to the stub.
         *
         * @param  string  $stub
         * @return string
         */
        protected function resolveStubPath($stub)
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class NotificationMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:notification';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new notification class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Notification';
        /**
         * Execute the console command.
         *
         * @return bool|void|null
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function handle()
        {
        }
        /**
         * Write the Markdown template for the mailable.
         */
        protected function writeMarkdownTemplate()
        {
        }
        /**
         * Build the class (name) with the given name.
         *
         * @param  string  $name
         * @return string|string[]
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildClass($name)
        {
        }
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class ObserverCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:observer';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new observer class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Observer';
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildClass($name)
        {
        }
        /**
         * Replace the model for the given stub.
         *
         * @param  string  $stub
         * @param  string  $model
         * @return string
         */
        protected function replaceModel($stub, $model)
        {
        }
        /**
         * Get the fully-qualified model class name.
         *
         * @param  string  $model
         * @return string
         */
        protected function parseModel($model)
        {
        }
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Resolve the full-qualified path to the stub.
         *
         * @param  string  $stub
         * @return string
         */
        protected function resolveStubPath($stub)
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the console command arguments.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class OptimizeClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'optimize:clear';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Remove the cached bootstrap files';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class OptimizeCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'optimize';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Cache the framework bootstrap files';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class PackageDiscoverCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command signature.
         *
         * @var string
         */
        protected $signature = 'package:discover';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Rebuild the cached package manifest';
        /**
         * Execute the console command.
         */
        public function handle(\Themosis\Core\PackageManifest $manifest)
        {
        }
    }
    class PasswordResetTableCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'password:table';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a migration for the password reset database table';
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var Composer
         */
        protected $composer;
        public function __construct(\Illuminate\Filesystem\Filesystem $files, \Illuminate\Support\Composer $composer)
        {
        }
        /**
         * Execute the command.
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function handle()
        {
        }
        /**
         * Create a base migration file for password resets.
         *
         * @return string
         */
        protected function createBaseMigration()
        {
        }
    }
    class PluginInstallCommand extends \Illuminate\Console\Command
    {
        use \Themosis\Core\Support\PluginHeaders;
        /**
         * The command name.
         *
         * @var string
         */
        protected $name = 'plugin:install';
        /**
         * The command description.
         *
         * @var string
         */
        protected $description = 'Install a Themosis plugin boilerplate';
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var \ZipArchive
         */
        protected $zip;
        /**
         * Temporary plugin path for its zip package.
         *
         * @var string
         */
        protected $temp;
        public function __construct(\Illuminate\Filesystem\Filesystem $files, \ZipArchive $zip)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Generate plugin headers.
         *
         *
         * @return array
         */
        protected function generatePluginHeaders(string $name)
        {
        }
        /**
         * Install the plugin.
         */
        protected function installPlugin(string $name)
        {
        }
        /**
         * Setup the plugin headers.
         */
        protected function setPluginHeaders(string $name, array $headers)
        {
        }
        /**
         * Parse file header line.
         *
         *
         * @return string
         */
        protected function parseLine(string $line, array $headers)
        {
        }
        /**
         * Set the plugin root file name.
         */
        protected function setPluginRootFile(string $name)
        {
        }
        /**
         * Set the plugin configuration file.
         *
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function setConfigurationFile(string $name, array $headers)
        {
        }
        /**
         * Set the plugin translation file.
         *
         * @param  string  $name
         */
        protected function setTranslationFile($name, array $headers)
        {
        }
        /**
         * Set the content of default route provider.
         *
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function setProviders(string $name, array $headers)
        {
        }
        /**
         * Replace file content with given headers values.
         *
         * @param  string  $path
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function replaceFileContent($path, array $headers)
        {
        }
        /**
         * Return the default namespace: "Tld\Domain\Plugin"
         *
         *
         * @return string
         */
        protected function getNamespace(string $default)
        {
        }
        /**
         * Return namespace for autoloading rule: "Tld\\Domain\\Plugin\\"
         *
         *
         * @return string
         */
        protected function getAutoloadNamespace(string $default)
        {
        }
        /**
         * Return the plugin base path.
         */
        protected function getPluginPath()
        {
        }
        /**
         * Parse the plugin name.
         *
         *
         * @return string
         */
        protected function parseNameForDirectory(string $name)
        {
        }
        /**
         * Return the plugin path. Handle -mu case.
         *
         *
         * @return string
         */
        protected function path(string $path = '')
        {
        }
        /**
         * Command arguments.
         *
         * @return array
         */
        protected function getArguments()
        {
        }
        /**
         * Command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class PolicyMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:policy';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new policy class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Policy';
        /**
         * Build the class with the given name.
         *
         * @param  string  $name
         * @return string|void
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildClass($name)
        {
        }
        /**
         * Replace the User model namespace.
         *
         * @param  string  $stub
         * @return string
         */
        protected function replaceUserNamespace($stub)
        {
        }
        /**
         * Replace the model for the given stub.
         *
         * @param  string  $stub
         * @param  string  $model
         * @return string
         */
        protected function replaceModel($stub, $model)
        {
        }
        /**
         * Return the stub file.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Return the command options list.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class ProviderMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:provider';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new service provider class';
        /**
         * The type of class being generated.
         * Used for the console status.
         *
         * @var string
         */
        protected $type = 'Provider';
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class PublishFuturePostCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $signature = 'publish:future-posts {--id=} {--post-type=}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Publish future posts scheduled for the current day and before.';
        /**
         * If no options, publish all scheduled posts of any post-types.
         *
         * --id: publish scheduled post with a specific ID.
         * --post-type: publish all scheduled posts for the given post-type.
         */
        public function handle(\Themosis\Core\WordPressLoader $wordPressLoader, \Themosis\Core\Repositories\PostRepository $postRepository) : void
        {
        }
    }
    class QueueCommand implements \Illuminate\Contracts\Queue\ShouldQueue
    {
        use \Themosis\Core\Bus\Dispatchable;
        use \Illuminate\Bus\Queueable;
        /**
         * The data to pass to the console command.
         *
         * @var array
         */
        protected $data;
        /**
         * QueueCommand constructor.
         * Create a new job instance.
         */
        public function __construct($data)
        {
        }
        /**
         * Handle the job.
         */
        public function handle(\Illuminate\Contracts\Console\Kernel $kernel)
        {
        }
    }
    class RequestMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:request';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new form request class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Request';
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class ResourceMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:resource';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new resource';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Resource';
        /**
         * Execute the console command.
         *
         * @return bool|void|null
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        public function handle()
        {
        }
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Determine if the command is generating a resource collection.
         *
         * @return bool
         */
        protected function collection()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class RouteCacheCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'route:cache';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a route cache file for faster route registration';
        /**
         * @var Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Boot a fresh copy of the application and retrieve its routes.
         *
         * @return RouteCollection
         */
        protected function getFreshApplicationRoutes()
        {
        }
        /**
         * Return a fresh application instance.
         *
         * @return Application
         */
        protected function getFreshApplication()
        {
        }
        /**
         * Build the route cache file.
         *
         *
         * @return string
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         */
        protected function buildRouteCacheFile(\Illuminate\Routing\RouteCollection $routes)
        {
        }
    }
    class RouteClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'route:clear';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Remove the route cache file';
        /**
         * @var Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
    }
    class RouteListCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'route:list';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'List all registered routes';
        /**
         * @var Router
         */
        protected $router;
        /**
         * @var \Illuminate\Routing\RouteCollection
         */
        protected $routes;
        /**
         * @var array
         */
        protected $headers = ['Domain', 'Method', 'URI', 'Name', 'Action', 'Middleware'];
        public function __construct(\Themosis\Route\Router $router)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Compile the routes into a displayable format.
         *
         * @return array
         */
        protected function getRoutes()
        {
        }
        /**
         * Get the route information for a given route.
         *
         *
         * @return array
         */
        protected function getRouteInformation(\Themosis\Route\Route $route)
        {
        }
        /**
         * Get before filters.
         *
         *
         * @return string
         */
        protected function getMiddleware(\Themosis\Route\Route $route)
        {
        }
        /**
         * Filter the route by URI and/or name.
         *
         *
         * @return array|null
         */
        protected function filterRoute(array $route)
        {
        }
        /**
         * Sort the routes by a given element.
         *
         * @param  string  $sort
         * @param  array  $routes
         * @return array
         */
        protected function sortRoutes($sort, $routes)
        {
        }
        /**
         * Display the route information to the console.
         */
        protected function displayRoutes(array $routes)
        {
        }
        /**
         * Return the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class RuleMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:rule';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new validation rule';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Rule';
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
    class SaltsGenerateCommand extends \Illuminate\Console\Command
    {
        use \Illuminate\Console\ConfirmableTrait;
        /**
         * The console command name and signature.
         *
         * @var string
         */
        protected $signature = 'salts:generate
                    {--show : Display the keys instead of modifying files}
                    {--force : Force the operation to run when in production}';
        /**
         * @var string
         */
        protected $description = 'Set the WordPress salt keys';
        /**
         * @var array
         */
        protected $keys = ['AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY', 'AUTH_SALT', 'SECURE_AUTH_SALT', 'LOGGED_IN_SALT', 'NONCE_SALT'];
        /**
         * @var string
         */
        protected $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!#$%&()*+,-./: ;<=>?@[]^_`{|}~';
        public function handle()
        {
        }
        /**
         * Display the salt keys.
         */
        protected function showSaltKeys(array $salts)
        {
        }
        protected function setKeysInEnvironmentFile(array $salts)
        {
        }
        /**
         * Write new environment file with the given key.
         */
        protected function writeNewEnvironmentFileWith(string $key, string $salt)
        {
        }
        /**
         * Get a regex pattern that will match env APP_KEY with any random key.
         *
         * @return string
         */
        protected function keyReplacementPattern(string $key)
        {
        }
        /**
         * Generate the random string salt,
         *
         *
         * @return string
         *
         * @throws \SodiumException
         */
        protected function generateRandomSalt(int $length, string $chars)
        {
        }
    }
    class ServeCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'serve';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Serve the application on the PHP development server';
        /**
         * The current port offset.
         *
         * @var int
         */
        protected $portOffset = 0;
        /**
         * Execute the console command.
         *
         * @return int
         *
         * @throws \Exception
         */
        public function handle()
        {
        }
        /**
         * Get the full server command.
         *
         * @return string
         */
        protected function serverCommand()
        {
        }
        /**
         * Get the host for the command.
         *
         * @return string
         */
        protected function host()
        {
        }
        /**
         * Get the port for the command.
         *
         * @return string
         */
        protected function port()
        {
        }
        /**
         * Check if command has reached its max amount of port tries.
         *
         * @return bool
         */
        protected function canTryAnotherPort()
        {
        }
        /**
         * Get the console command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class StorageLinkCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command signature.
         *
         * @var string
         */
        protected $signature = 'storage:link {--relative : Create the symbolic link using relative paths}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create the symbolic links configured for the application';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Get the symbolic links that are configured for the application.
         *
         * @return array
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function links()
        {
        }
    }
    class StubPublishCommand extends \Illuminate\Console\Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'stub:publish {--force : Overwrite any existing files}';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Publish all stubs that are available for customization';
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class TestMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:test';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new test class';
        /**
         * The type of class being generated.
         *
         * @var string
         */
        protected $type = 'Test';
        /**
         * Get the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Resolve the fully-qualified path to the stub.
         *
         * @param  string  $stub
         * @return string
         */
        protected function resolveStubPath($stub)
        {
        }
        /**
         * Get the destination class path.
         *
         * @param  string  $name
         * @return string
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function getPath($name)
        {
        }
        /**
         * Get the default namespace for the class.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
        /**
         * Get the root namespace for the class.
         *
         * @return string
         */
        protected function rootNamespace()
        {
        }
        /**
         * Get the console command options.
         *
         * @return array[]
         */
        protected function getOptions()
        {
        }
    }
    class ThemeInstallCommand extends \Illuminate\Console\Command
    {
        /**
         * The command name.
         *
         * @var string
         */
        protected $name = 'theme:install';
        /**
         * The command description.
         *
         * @var string
         */
        protected $description = 'Install a Themosis theme boilerplate';
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * @var \ZipArchive
         */
        protected $zip;
        /**
         * @var string
         */
        protected $temp;
        public function __construct(\Illuminate\Filesystem\Filesystem $files, \ZipArchive $zip)
        {
        }
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Install theme.
         *
         * @param  string  $name The theme name from user
         */
        protected function installTheme(string $name)
        {
        }
        /**
         * Setup basic theme information.
         */
        protected function setupTheme(string $name)
        {
        }
        /**
         * Set default theme constant in main "wordpress.php" config file.
         */
        protected function setAsDefaultTheme(string $name)
        {
        }
        /**
         * Command arguments.
         *
         * @return array
         */
        protected function getArguments()
        {
        }
        /**
         * Command options.
         *
         * @return array
         */
        protected function getOptions()
        {
        }
    }
    class UpCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'up';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Bring the application out of maintenance mode';
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
    }
    class VendorPublishCommand extends \Illuminate\Console\Command
    {
        /**
         * @var Filesystem
         */
        protected $files;
        /**
         * The provider to publish.
         *
         * @var string
         */
        protected $provider;
        /**
         * The tags to publish.
         *
         * @var array
         */
        protected $tags = [];
        /**
         * @var string
         */
        protected $signature = 'vendor:publish {--force : Overwrite any existing files.}
                    {--all : Publish assets for all service providers without prompt.}
                    {--provider= : The service provider that has assets you want to publish.}
                    {--tag=* : One or many tags that have assets you want to publish.}';
        /**
         * @var string
         */
        protected $description = 'Publish any publishable assets from vendor packages';
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
        /**
         * Determine the provider of tag(s) to publish.
         */
        protected function determineWhatShouldBePublished()
        {
        }
        /**
         * Prompt for which provider or tag to publish.
         */
        protected function promptForProviderOrTag()
        {
        }
        /**
         * return the choices available via the prompt.
         *
         * @return array
         */
        protected function publishableChoices()
        {
        }
        /**
         * Parse the answer that was given via the prompt.
         *
         * @param  string  $choice
         */
        protected function parseChoice($choice)
        {
        }
        /**
         * Publish the assets for a tag.
         *
         * @param  string  $tag
         */
        protected function publishTag($tag)
        {
        }
        /**
         * Get all the paths to publish.
         *
         * @param  string  $tag
         * @return array
         */
        protected function pathsToPublish($tag)
        {
        }
        /**
         * Publish the given item from and to the given location.
         *
         * @param  string  $from
         * @param  string  $to
         */
        protected function publishItem($from, $to)
        {
        }
        /**
         * Publish the file to the given path.
         *
         * @param  string  $from
         * @param  string  $to
         */
        protected function publishFile($from, $to)
        {
        }
        /**
         * Publish the directory to the given directory.
         *
         * @param  string  $from
         * @param  string  $to
         *
         * @throws \League\Flysystem\FileNotFoundException
         */
        protected function publishDirectory($from, $to)
        {
        }
        /**
         * Move all the files in the given MountManager.
         *
         * @param  \League\Flysystem\MountManager  $manager
         *
         * @throws \League\Flysystem\FileNotFoundException
         */
        protected function moveManagedFiles($manager)
        {
        }
        /**
         * Create the directory to house the published files if needed.
         *
         * @param  string  $directory
         */
        protected function createParentDirectory($directory)
        {
        }
        /**
         * Write a status message to the console.
         *
         * @param  string  $from
         * @param  string  $to
         * @param  string  $type
         */
        protected function status($from, $to, $type)
        {
        }
    }
    class ViewCacheCommand extends \Illuminate\Console\Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'view:cache';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = "Compile all of the application's Blade templates";
        /**
         * Execute the command.
         */
        public function handle()
        {
        }
        /**
         * Compile the given view files.
         */
        protected function compileViews(\Illuminate\Support\Collection $views)
        {
        }
        /**
         * Get the Blade files in the given path.
         *
         *
         * @return Collection
         */
        protected function bladeFilesIn(array $paths)
        {
        }
        /**
         * Get all of the possible view paths.
         *
         * @return \Illuminate\Support\Collection
         */
        protected function paths()
        {
        }
    }
    class ViewClearCommand extends \Illuminate\Console\Command
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'view:clear';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Clear all compiled view files';
        /**
         * @var Filesystem
         */
        protected $files;
        public function __construct(\Illuminate\Filesystem\Filesystem $files)
        {
        }
        /**
         * Execute the console command.
         */
        public function handle()
        {
        }
    }
    class WidgetMakeCommand extends \Illuminate\Console\GeneratorCommand
    {
        /**
         * The console command name.
         *
         * @var string
         */
        protected $name = 'make:widget';
        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Create a new widget class';
        /**
         * The type of the class being generated.
         *
         * @var string
         */
        protected $type = 'Widget';
        /**
         * Return the stub file for the generator.
         *
         * @return string
         */
        protected function getStub()
        {
        }
        /**
         * Return the class default namespace.
         *
         * @param  string  $rootNamespace
         * @return string
         */
        protected function getDefaultNamespace($rootNamespace)
        {
        }
    }
}
namespace Themosis\Core\Support {
    use Symfony\Component\Finder\Finder;
    trait PluginHeaders
    {
        /**
         * Plugin file headers.
         *
         * @var array
         */
        public $headers = ['name' => 'Plugin Name', 'plugin_uri' => 'Plugin URI', 'plugin_prefix' => 'Plugin Prefix', 'plugin_namespace' => 'Plugin Namespace', 'plugin_id' => 'Plugin ID', 'description' => 'Description', 'version' => 'Version', 'author' => 'Author', 'author_uri' => 'Author URI', 'license' => 'License', 'license_uri' => 'License URI', 'text_domain' => 'Text Domain', 'domain_path' => 'Domain Path', 'domain_var' => 'Domain Var', 'network' => 'Network'];
    }
    trait WordPressFileHeaders
    {
        /**
         * Return the file headers as an associative array.
         */
        public function headers(string $path, array $headers) : array
        {
        }
        /**
         * Get a partial content of given file.
         */
        public function read(string $path, int $length = 8192) : string
        {
        }
    }
    trait IncludesFiles
    {
        /**
         * Automatically includes all .php files found on a specified
         * directory path.
         *
         * @param  string|array  $path
         */
        public function includes($path, string $pattern = '*.php')
        {
        }
    }
    trait WordPressUrl
    {
        /**
         * Format the URL. If the URL is missing the WordPress directory
         * fragment, it adds it before the common delimiter.
         *
         *
         * @return string
         */
        public function formatUrl(string $url, string $delimiter = 'wp-admin', string $fragment = 'cms')
        {
        }
        /**
         * Format the home URL. Make sure that it does not contain the "/cms" fragment.
         *
         *
         * @return string
         */
        public function formatHomeUrl(string $url, string $fragment = 'cms')
        {
        }
        /**
         * Format the site URL. If the URL does not contain the fragment,
         * append it with a forward slash (if not inside the fragment) on the URL,
         * but only if the current site is the main site or a subdomain site.
         *
         *
         * @return string
         */
        public function formatSiteUrl(string $url, string $fragment = 'cms')
        {
        }
        /**
         * Format the network URL. If the URL is missing the WordPress directory
         * fragment, it adds it before the common delimiter.
         *
         *
         * @return string
         */
        public function formatNetworkUrl(string $url, string $delimiter = 'wp-admin', string $fragment = 'cms')
        {
        }
    }
}
namespace Themosis\Core\Dropins {
    class WordPressDropins
    {
        /**
         * WordPress drop-ins files.
         *
         * @var array
         */
        public static $dropins = ['advanced-cache' => 'advanced-cache.php', 'blog-deleted' => 'blog-deleted.php', 'blog-inactive' => 'blog-inactive.php', 'blog-suspended' => 'blog-suspended.php', 'db' => 'db.php', 'db-error' => 'db-error.php', 'install' => 'install.php', 'maintenance' => 'maintenance.php', 'object-cache' => 'object-cache.php', 'sunrise' => 'sunrise.php'];
        /**
         * Return a list of publishable drop-in files.
         *
         * @return array
         */
        public static function publishableDropins()
        {
        }
        /**
         * Return a list of drop-in files paths.
         *
         * @param  string|null  $key
         * @return array
         */
        public static function dropinPaths($key = null)
        {
        }
    }
}
namespace Themosis\Core\Enums {
    use Closure;
    use Spatie\Enum\Enum;
    /**
     * @method static self publish()
     * @method static self pending()
     * @method static self draft()
     * @method static self autoDraft()
     * @method static self future()
     * @method static self private()
     * @method static self inherit()
     * @method static self trash()
     * @method static self any()
     */
    class PostStatus extends \Spatie\Enum\Enum
    {
        protected static function values() : \Closure
        {
        }
    }
}
namespace Themosis\Core\Events {
    use Illuminate\Support\Reflector;
    use Illuminate\Support\Str;
    use Symfony\Component\Finder\Finder;
    class DiscoverEvents
    {
        /**
         * Get all of the events and listeners by searching the given listener directory.
         *
         *
         * @return array
         */
        public static function within($listenerPath, $basePath)
        {
        }
        /**
         * Get all of the listeners and their corresponding events.
         *
         *
         * @return array
         */
        protected static function getListenerEvents($listeners, $basePath)
        {
        }
        /**
         * Extract the class name from the given file path.
         *
         *
         * @return string
         */
        protected static function classFromFile(\SplFileInfo $file, $basePath)
        {
        }
    }
    trait Dispatchable
    {
        /**
         * Dispatch the event with the given arguments.
         */
        public static function dispatch()
        {
        }
        /**
         * Dispatch the event with the given arguments if the given truth test passes.
         *
         * @param  bool  $boolean
         * @param  mixed  ...$arguments
         * @return mixed
         */
        public static function dispatchIf($boolean, ...$arguments)
        {
        }
        /**
         * Dispatch the event with the given arguments unless the given truth test passes.
         *
         * @param  bool  $boolean
         * @param  mixed  ...$arguments
         * @return mixed
         */
        public static function dispatchUnless($boolean, ...$arguments)
        {
        }
        /**
         * Broadcast the event with the given arguments.
         *
         * @return \Illuminate\Broadcasting\PendingBroadcast
         */
        public static function broadcast()
        {
        }
    }
    class LocaleUpdated
    {
        /**
         * The updated application locale.
         *
         * @var string
         */
        public $locale;
        public function __construct($locale)
        {
        }
    }
    class PluginLoaded
    {
        /**
         * Plugin directory name.
         *
         * @var string
         */
        public $directory;
        /**
         * Plugin headers.
         *
         * @var array
         */
        public $headers;
        public function __construct($directory, array $headers)
        {
        }
    }
}
namespace Themosis\Core\Exceptions {
    use Closure;
    use Exception;
    use Illuminate\Auth\Access\AuthorizationException;
    use Illuminate\Auth\AuthenticationException;
    use Illuminate\Console\View\Components\BulletList;
    use Illuminate\Console\View\Components\Error;
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
    use Illuminate\Contracts\Foundation\ExceptionRenderer;
    use Illuminate\Contracts\Support\Responsable;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\Database\MultipleRecordsFoundException;
    use Illuminate\Database\RecordsNotFoundException;
    use Illuminate\Http\Exceptions\HttpResponseException;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Response;
    use Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException;
    use Illuminate\Routing\Router;
    use Illuminate\Session\TokenMismatchException;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Reflector;
    use Illuminate\Support\Traits\ReflectsClosures;
    use Illuminate\Support\ViewErrorBag;
    use Illuminate\Validation\ValidationException;
    use InvalidArgumentException;
    use Psr\Log\LoggerInterface;
    use Psr\Log\LogLevel;
    use Symfony\Component\Console\Application as ConsoleApplication;
    use Symfony\Component\Console\Exception\CommandNotFoundException;
    use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
    use Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException;
    use Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirectResponse;
    use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
    use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
    use Symfony\Component\HttpKernel\Exception\HttpException;
    use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    use Throwable;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\Traits\ReflectsClosures;
    use Throwable;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Support\Arr;
    use Whoops\Handler\PrettyPageHandler;
    class Handler implements \Illuminate\Contracts\Debug\ExceptionHandler
    {
        use \Illuminate\Support\Traits\ReflectsClosures;
        /**
         * The container implementation.
         *
         * @var \Illuminate\Contracts\Container\Container
         */
        protected $container;
        /**
         * A list of the exception types that are not reported.
         *
         * @var array<int, class-string<\Throwable>>
         */
        protected $dontReport = [];
        /**
         * The callbacks that should be used during reporting.
         *
         * @var \Illuminate\Foundation\Exceptions\ReportableHandler[]
         */
        protected $reportCallbacks = [];
        /**
         * A map of exceptions with their corresponding custom log levels.
         *
         * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
         */
        protected $levels = [];
        /**
         * The callbacks that should be used during rendering.
         *
         * @var \Closure[]
         */
        protected $renderCallbacks = [];
        /**
         * The registered exception mappings.
         *
         * @var array<string, \Closure>
         */
        protected $exceptionMap = [];
        /**
         * A list of the internal exception types that should not be reported.
         *
         * @var array<int, class-string<\Throwable>>
         */
        protected $internalDontReport = [\Illuminate\Auth\AuthenticationException::class, \Illuminate\Auth\Access\AuthorizationException::class, \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException::class, \Symfony\Component\HttpKernel\Exception\HttpException::class, \Illuminate\Http\Exceptions\HttpResponseException::class, \Illuminate\Database\Eloquent\ModelNotFoundException::class, \Illuminate\Database\MultipleRecordsFoundException::class, \Illuminate\Database\RecordsNotFoundException::class, \Symfony\Component\HttpFoundation\Exception\SuspiciousOperationException::class, \Illuminate\Session\TokenMismatchException::class, \Illuminate\Validation\ValidationException::class];
        /**
         * A list of the inputs that are never flashed for validation exceptions.
         *
         * @var array<int, string>
         */
        protected $dontFlash = ['current_password', 'password', 'password_confirmation'];
        /**
         * Create a new exception handler instance.
         *
         * @return void
         */
        public function __construct(\Illuminate\Contracts\Container\Container $container)
        {
        }
        /**
         * Register the exception handling callbacks for the application.
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Register a reportable callback.
         *
         * @return \Illuminate\Foundation\Exceptions\ReportableHandler
         */
        public function reportable(callable $reportUsing)
        {
        }
        /**
         * Register a renderable callback.
         *
         * @return $this
         */
        public function renderable(callable $renderUsing)
        {
        }
        /**
         * Register a new exception mapping.
         *
         * @param  \Closure|string  $from
         * @param  \Closure|string|null  $to
         * @return $this
         *
         * @throws \InvalidArgumentException
         */
        public function map($from, $to = null)
        {
        }
        /**
         * Indicate that the given exception type should not be reported.
         *
         * @return $this
         */
        public function ignore(string $class)
        {
        }
        /**
         * Set the log level for the given exception type.
         *
         * @param  class-string<\Throwable>  $type
         * @param  \Psr\Log\LogLevel::*  $level
         * @return $this
         */
        public function level($type, $level)
        {
        }
        /**
         * Report or log an exception.
         *
         * @return void
         *
         * @throws \Throwable
         */
        public function report(\Throwable $e)
        {
        }
        /**
         * Determine if the exception should be reported.
         *
         * @return bool
         */
        public function shouldReport(\Throwable $e)
        {
        }
        /**
         * Determine if the exception is in the "do not report" list.
         *
         * @return bool
         */
        protected function shouldntReport(\Throwable $e)
        {
        }
        /**
         * Remove the given exception class from the list of exceptions that should be ignored.
         *
         * @return $this
         */
        public function stopIgnoring(string $exception)
        {
        }
        /**
         * Create the context array for logging the given exception.
         *
         * @return array
         */
        protected function buildExceptionContext(\Throwable $e)
        {
        }
        /**
         * Get the default exception context variables for logging.
         *
         * @return array
         */
        protected function exceptionContext(\Throwable $e)
        {
        }
        /**
         * Get the default context variables for logging.
         *
         * @return array
         */
        protected function context()
        {
        }
        /**
         * Render an exception into an HTTP response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Symfony\Component\HttpFoundation\Response
         *
         * @throws \Throwable
         */
        public function render($request, \Throwable $e)
        {
        }
        /**
         * Prepare exception for rendering.
         *
         * @return \Throwable
         */
        protected function prepareException(\Throwable $e)
        {
        }
        /**
         * Map the exception using a registered mapper if possible.
         *
         * @return \Throwable
         */
        protected function mapException(\Throwable $e)
        {
        }
        /**
         * Try to render a response from request and exception via render callbacks.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return mixed
         *
         * @throws \ReflectionException
         */
        protected function renderViaCallbacks($request, \Throwable $e)
        {
        }
        /**
         * Render a default exception response if any.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        protected function renderExceptionResponse($request, \Throwable $e)
        {
        }
        /**
         * Convert an authentication exception into a response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        protected function unauthenticated($request, \Illuminate\Auth\AuthenticationException $exception)
        {
        }
        /**
         * Create a response object from the given validation exception.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Symfony\Component\HttpFoundation\Response
         */
        protected function convertValidationExceptionToResponse(\Illuminate\Validation\ValidationException $e, $request)
        {
        }
        /**
         * Convert a validation exception into a response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        protected function invalid($request, \Illuminate\Validation\ValidationException $exception)
        {
        }
        /**
         * Convert a validation exception into a JSON response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\JsonResponse
         */
        protected function invalidJson($request, \Illuminate\Validation\ValidationException $exception)
        {
        }
        /**
         * Determine if the exception handler response should be JSON.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return bool
         */
        protected function shouldReturnJson($request, \Throwable $e)
        {
        }
        /**
         * Prepare a response for the given exception.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        protected function prepareResponse($request, \Throwable $e)
        {
        }
        /**
         * Create a Symfony response for the given exception.
         *
         * @return \Symfony\Component\HttpFoundation\Response
         */
        protected function convertExceptionToResponse(\Throwable $e)
        {
        }
        /**
         * Get the response content for the given exception.
         *
         * @return string
         */
        protected function renderExceptionContent(\Throwable $e)
        {
        }
        /**
         * Render an exception to a string using the registered `ExceptionRenderer`.
         *
         * @return string
         */
        protected function renderExceptionWithCustomRenderer(\Throwable $e)
        {
        }
        /**
         * Render an exception to a string using Symfony.
         *
         * @param  bool  $debug
         * @return string
         */
        protected function renderExceptionWithSymfony(\Throwable $e, $debug)
        {
        }
        /**
         * Render the given HttpException.
         *
         * @return \Symfony\Component\HttpFoundation\Response
         */
        protected function renderHttpException(\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $e)
        {
        }
        /**
         * Register the error template hint paths.
         *
         * @return void
         */
        protected function registerErrorViewPaths()
        {
        }
        /**
         * Get the view used to render HTTP exceptions.
         *
         * @return string|null
         */
        protected function getHttpExceptionView(\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $e)
        {
        }
        /**
         * Map the given exception into an Illuminate response.
         *
         * @param  \Symfony\Component\HttpFoundation\Response  $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
         */
        protected function toIlluminateResponse($response, \Throwable $e)
        {
        }
        /**
         * Prepare a JSON response for the given exception.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\JsonResponse
         */
        protected function prepareJsonResponse($request, \Throwable $e)
        {
        }
        /**
         * Convert the given exception to an array.
         *
         * @return array
         */
        protected function convertExceptionToArray(\Throwable $e)
        {
        }
        /**
         * Render an exception to the console.
         *
         * @param  \Symfony\Component\Console\Output\OutputInterface  $output
         * @return void
         *
         * @internal This method is not meant to be used or overwritten outside the framework.
         */
        public function renderForConsole($output, \Throwable $e)
        {
        }
        /**
         * Determine if the given exception is an HTTP exception.
         *
         * @return bool
         */
        protected function isHttpException(\Throwable $e)
        {
        }
    }
    class RegisterErrorViewPaths
    {
        /**
         * Register the error view paths.
         */
        public function __invoke()
        {
        }
    }
    class ReportableHandler
    {
        use \Illuminate\Support\Traits\ReflectsClosures;
        /**
         * The underlying callback.
         *
         * @var callable
         */
        protected $callback;
        /**
         * Indicates if reporting should stop after invoking this handler.
         *
         * @var bool
         */
        protected $shouldStop = false;
        /**
         * Create a new reportable handler instance.
         */
        public function __construct(callable $callback)
        {
        }
        /**
         * Invoke the handler.
         *
         *
         * @return bool
         */
        public function __invoke(\Throwable $e)
        {
        }
        /**
         * Determine if the callback handles the given exception.
         *
         *
         * @return bool
         */
        public function handles(\Throwable $e)
        {
        }
        /**
         * Indicate that report handling should stop after invoking this callback.
         *
         * @return $this
         */
        public function stop()
        {
        }
    }
    class WhoopsHandler
    {
        /**
         * Create a new Whoops handler for debug mode.
         *
         * @return PrettyPageHandler
         */
        public function forDebug()
        {
        }
        /**
         * Register the application paths with the handler.
         *
         * @param  PrettyPageHandler  $handler
         * @return $this
         */
        protected function registerApplicationPaths($handler)
        {
        }
        /**
         * Get the application paths except for the "vendor" directory.
         *
         * @return array
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function directoriesExceptVendor()
        {
        }
        /**
         * Register the blacklist with the handler.
         *
         * @param  \Whoops\Handler\PrettyPageHandler  $handler
         * @return $this
         */
        protected function registerBlacklist($handler)
        {
        }
        /**
         * Register the editor with the handler.
         *
         * @param  \Whoops\Handler\PrettyPageHandler  $handler
         * @return $this
         */
        protected function registerEditor($handler)
        {
        }
    }
}
namespace Themosis\Core\Forms {
    use Themosis\Field\Contracts\FieldFactoryInterface;
    use Themosis\Forms\Contracts\FormFactoryInterface;
    use Themosis\Forms\Contracts\Formidable;
    use Themosis\Forms\Contracts\FormInterface;
    trait FormHelper
    {
        /**
         * Create and return a form instance.
         *
         *
         * @return FormInterface
         */
        public function form(\Themosis\Forms\Contracts\Formidable $formClass)
        {
        }
        /**
         * Retrieve the form factory instance.
         *
         * @return FormFactoryInterface
         */
        private function getFormFactory()
        {
        }
        /**
         * Retrieve the fields factory instance.
         *
         * @return FieldFactoryInterface
         */
        private function getFieldsFactory()
        {
        }
    }
}
namespace Themosis\Core\Http\Events {
    class RequestHandled
    {
        /**
         * @var \Illuminate\Http\Request
         */
        public $request;
        /**
         * @var \Illuminate\Http\Response
         */
        public $response;
        /**
         * RequestHandled constructor.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Illuminate\Http\Response  $response
         */
        public function __construct($request, $response)
        {
        }
    }
}
namespace Themosis\Core\Http\Middleware {
    use Closure;
    use Illuminate\Container\Container;
    use Illuminate\Foundation\Routing\PrecognitionCallableDispatcher;
    use Illuminate\Foundation\Routing\PrecognitionControllerDispatcher;
    use Illuminate\Routing\Contracts\CallableDispatcher as CallableDispatcherContract;
    use Illuminate\Routing\Contracts\ControllerDispatcher as ControllerDispatcherContract;
    use Closure;
    use Illuminate\Contracts\Foundation\Application;
    use Closure;
    use Illuminate\Http\Request;
    use Symfony\Component\HttpFoundation\ParameterBag;
    use Closure;
    use Closure;
    use Illuminate\Http\Exceptions\PostTooLargeException;
    use Illuminate\Contracts\Encryption\DecryptException;
    use Illuminate\Contracts\Encryption\Encrypter;
    use Illuminate\Contracts\Support\Responsable;
    use Illuminate\Cookie\CookieValuePrefix;
    use Illuminate\Cookie\Middleware\EncryptCookies;
    use Illuminate\Http\Request;
    use Illuminate\Session\TokenMismatchException;
    use Illuminate\Support\InteractsWithTime;
    use Symfony\Component\HttpFoundation\Cookie;
    use Symfony\Component\HttpFoundation\Response;
    use Themosis\Core\Application;
    class TransformsRequest
    {
        /**
         * Handle an incoming request.
         *
         * @param  Request  $request
         * @return mixed
         */
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Clean the request's data.
         *
         * @param  Request  $request
         */
        protected function clean($request)
        {
        }
        /**
         * Clean the data in the parameter bag.
         */
        protected function cleanParameterBag(\Symfony\Component\HttpFoundation\ParameterBag $bag)
        {
        }
        /**
         * Clean the data in the given array.
         *
         * @param  string  $keyPrefix
         * @return array
         */
        protected function cleanArray(array $data, $keyPrefix = '')
        {
        }
        /**
         * Clean the given value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function cleanValue($key, $value)
        {
        }
        /**
         * Transform the given value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function transform($key, $value)
        {
        }
    }
    class ConvertEmptyStringsToNull extends \Themosis\Core\Http\Middleware\TransformsRequest
    {
        /**
         * All of the registered skip callbacks.
         *
         * @var array
         */
        protected static $skipCallbacks = [];
        /**
         * Register a callback that instructs the middleware to be skipped.
         */
        public static function skipWhen(\Closure $callback)
        {
        }
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return mixed
         */
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Transform the given value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function transform($key, $value)
        {
        }
    }
    class HandlePrecognitiveRequests
    {
        /**
         * The container instance.
         *
         * @var \Illuminate\Container\Container
         */
        protected $container;
        /**
         * Create a new middleware instance.
         *
         * @param  \Illuminate\Container\Container  $container
         * @return void
         */
        public function __construct(\Illuminate\Container\Container $container)
        {
        }
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return \Illuminate\Http\Response
         */
        public function handle($request, $next)
        {
        }
        /**
         * Prepare to handle a precognitive request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return void
         */
        protected function prepareForPrecognition($request)
        {
        }
        /**
         * Append the appropriate "Vary" header to the given response.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Illuminate\Http\Response  $response
         * @return \Illuminate\Http\Response
         */
        protected function appendVaryHeader($request, $response)
        {
        }
    }
    class PreventRequestsDuringMaintenance
    {
        /**
         * The application.
         *
         * @var \Illuminate\Contracts\Foundation\Application
         */
        protected $app;
        /**
         * The URIs that should be accessible while maintenance mode is enabled.
         *
         * @var array
         */
        protected $except = [];
        /**
         * Create a new middleware instance.
         */
        public function __construct(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
        public function handle($request, \Closure $next)
        {
        }
    }
    class TrimStrings extends \Themosis\Core\Http\Middleware\TransformsRequest
    {
        /**
         * All of the registered skip callbacks.
         *
         * @var array
         */
        protected static $skipCallbacks = [];
        /**
         * The attributes that should not be trimmed.
         *
         * @var array
         */
        protected $except = [];
        /**
         * Register a callback that instructs the middleware to be skipped.
         */
        public static function skipWhen(\Closure $callback)
        {
        }
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Transform the given value.
         *
         * @param  string  $key
         * @param  mixed  $value
         * @return mixed
         */
        protected function transform($key, $value)
        {
        }
    }
    class ValidatePostSize
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return mixed
         *
         * @throws \Illuminate\Http\Exceptions\PostTooLargeException
         */
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Determine the server 'post_max_size' as bytes.
         *
         * @return int
         */
        protected function getPostMaxSize()
        {
        }
    }
    class VerifyCsrfToken
    {
        use \Illuminate\Support\InteractsWithTime;
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var Encrypter
         */
        protected $encrypter;
        /**
         * URIs that should be excluded from CSRF verification.
         *
         * @var array
         */
        protected $except = [];
        /**
         * Indicates wheter the XSRF-TOKEN cookie should be set on the response.
         *
         * @var bool
         */
        protected $addHttpCookie = true;
        public function __construct(\Themosis\Core\Application $application, \Illuminate\Contracts\Encryption\Encrypter $encrypter)
        {
        }
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return mixed
         *
         * @throws TokenMismatchException
         */
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Determine if the HTTP request uses a "read" verb.
         *
         *
         * @return bool
         */
        protected function isReading(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         */
        protected function runningUnitTests()
        {
        }
        /**
         * Check if the request has a URI that should pass through CSRF verification.
         *
         *
         * @return bool
         */
        protected function inExceptArray(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Check if the session and input CSRF tokens match.
         *
         *
         * @return bool
         */
        protected function tokensMatch(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Return the CSRF token from request.
         *
         *
         * @return string
         */
        protected function getTokenFromRequest(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Determine if the cookie should be added to the response.
         *
         * @return bool
         */
        public function shouldAddXsrfTokenCookie()
        {
        }
        /**
         * Add the CSRF token to the response cookies.
         *
         *
         * @return Response
         *
         * @throws \Illuminate\Container\EntryNotFoundException
         */
        protected function addCookieToResponse(\Illuminate\Http\Request $request, \Symfony\Component\HttpFoundation\Response $response)
        {
        }
        /**
         * Determine if the cookie contents should be serialized.
         *
         * @return bool
         */
        public static function serialized()
        {
        }
    }
}
namespace Themosis\Core\Providers {
    use Illuminate\Auth\Console\ClearResetsCommand;
    use Illuminate\Cache\Console\CacheTableCommand;
    use Illuminate\Cache\Console\ClearCommand as CacheClearCommand;
    use Illuminate\Cache\Console\ForgetCommand as CacheForgetCommand;
    use Illuminate\Console\Scheduling\ScheduleFinishCommand;
    use Illuminate\Console\Scheduling\ScheduleListCommand;
    use Illuminate\Console\Scheduling\ScheduleRunCommand;
    use Illuminate\Console\Scheduling\ScheduleTestCommand;
    use Illuminate\Console\Scheduling\ScheduleWorkCommand;
    use Illuminate\Contracts\Support\DeferrableProvider;
    use Illuminate\Database\Console\DbCommand;
    use Illuminate\Database\Console\DumpCommand;
    use Illuminate\Database\Console\Factories\FactoryMakeCommand;
    use Illuminate\Database\Console\Migrations\FreshCommand;
    use Illuminate\Database\Console\Migrations\InstallCommand;
    use Illuminate\Database\Console\Migrations\MigrateCommand;
    use Illuminate\Database\Console\Migrations\MigrateMakeCommand;
    use Illuminate\Database\Console\Migrations\RefreshCommand;
    use Illuminate\Database\Console\Migrations\ResetCommand;
    use Illuminate\Database\Console\Migrations\RollbackCommand;
    use Illuminate\Database\Console\Migrations\StatusCommand;
    use Illuminate\Database\Console\Seeds\SeedCommand;
    use Illuminate\Database\Console\Seeds\SeederMakeCommand;
    use Illuminate\Database\Console\WipeCommand;
    use Illuminate\Notifications\Console\NotificationTableCommand;
    use Illuminate\Queue\Console\BatchesTableCommand;
    use Illuminate\Queue\Console\ClearCommand as QueueClearCommand;
    use Illuminate\Queue\Console\FailedTableCommand;
    use Illuminate\Queue\Console\FlushFailedCommand as FlushFailedQueueCommand;
    use Illuminate\Queue\Console\ForgetFailedCommand as ForgetFailedQueueCommand;
    use Illuminate\Queue\Console\ListenCommand as ListenQueueCommand;
    use Illuminate\Queue\Console\ListFailedCommand as ListFailedQueueCommand;
    use Illuminate\Queue\Console\PruneBatchesCommand as PruneBatchesQueueCommand;
    use Illuminate\Queue\Console\RestartCommand as RestartQueueCommand;
    use Illuminate\Queue\Console\RetryBatchCommand as QueueRetryBatchCommand;
    use Illuminate\Queue\Console\RetryCommand as RetryQueueCommand;
    use Illuminate\Queue\Console\TableCommand;
    use Illuminate\Queue\Console\WorkCommand as WorkQueueCommand;
    use Illuminate\Routing\Console\ControllerMakeCommand;
    use Illuminate\Routing\Console\MiddlewareMakeCommand;
    use Illuminate\Session\Console\SessionTableCommand;
    use Illuminate\Support\ServiceProvider;
    use Themosis\Auth\Console\AuthMakeCommand;
    use Themosis\Core\Console\CastMakeCommand;
    use Themosis\Core\Console\ChannelMakeCommand;
    use Themosis\Core\Console\ClearCompiledCommand;
    use Themosis\Core\Console\ComponentMakeCommand;
    use Themosis\Core\Console\ConfigCacheCommand;
    use Themosis\Core\Console\ConfigClearCommand;
    use Themosis\Core\Console\ConsoleMakeCommand;
    use Themosis\Core\Console\CustomerTableCommand;
    use Themosis\Core\Console\DownCommand;
    use Themosis\Core\Console\DropinClearCommand;
    use Themosis\Core\Console\EnvironmentCommand;
    use Themosis\Core\Console\EventCacheCommand;
    use Themosis\Core\Console\EventClearCommand;
    use Themosis\Core\Console\EventGenerateCommand;
    use Themosis\Core\Console\EventListCommand;
    use Themosis\Core\Console\EventMakeCommand;
    use Themosis\Core\Console\ExceptionMakeCommand;
    use Themosis\Core\Console\FormMakeCommand;
    use Themosis\Core\Console\HookMakeCommand;
    use Themosis\Core\Console\JobMakeCommand;
    use Themosis\Core\Console\KeyGenerateCommand;
    use Themosis\Core\Console\ListenerMakeCommand;
    use Themosis\Core\Console\MailMakeCommand;
    use Themosis\Core\Console\ModelMakeCommand;
    use Themosis\Core\Console\NotificationMakeCommand;
    use Themosis\Core\Console\ObserverCommand;
    use Themosis\Core\Console\OptimizeClearCommand;
    use Themosis\Core\Console\OptimizeCommand;
    use Themosis\Core\Console\PackageDiscoverCommand;
    use Themosis\Core\Console\PasswordResetTableCommand;
    use Themosis\Core\Console\PluginInstallCommand;
    use Themosis\Core\Console\PolicyMakeCommand;
    use Themosis\Core\Console\ProviderMakeCommand;
    use Themosis\Core\Console\PublishFuturePostCommand;
    use Themosis\Core\Console\RequestMakeCommand;
    use Themosis\Core\Console\ResourceMakeCommand;
    use Themosis\Core\Console\RouteCacheCommand;
    use Themosis\Core\Console\RouteClearCommand;
    use Themosis\Core\Console\RouteListCommand;
    use Themosis\Core\Console\RuleMakeCommand;
    use Themosis\Core\Console\SaltsGenerateCommand;
    use Themosis\Core\Console\ServeCommand;
    use Themosis\Core\Console\StorageLinkCommand;
    use Themosis\Core\Console\StubPublishCommand;
    use Themosis\Core\Console\TestMakeCommand;
    use Themosis\Core\Console\ThemeInstallCommand;
    use Themosis\Core\Console\UpCommand;
    use Themosis\Core\Console\VendorPublishCommand;
    use Themosis\Core\Console\ViewCacheCommand;
    use Themosis\Core\Console\ViewClearCommand;
    use Themosis\Core\Console\WidgetMakeCommand;
    use Illuminate\Support\Composer;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Database\MigrationServiceProvider;
    use Illuminate\Support\AggregateServiceProvider;
    use Illuminate\Http\Request;
    use Illuminate\Support\AggregateServiceProvider;
    use Illuminate\Support\Facades\URL;
    use Illuminate\Contracts\Validation\ValidatesWhenResolved;
    use Illuminate\Routing\Redirector;
    use Illuminate\Support\ServiceProvider;
    use Themosis\Core\Http\FormRequest;
    class ArtisanServiceProvider extends \Illuminate\Support\ServiceProvider implements \Illuminate\Contracts\Support\DeferrableProvider
    {
        /**
         * Defer the loading of the provider.
         *
         * @var bool
         */
        protected $defer = true;
        /**
         * Commands to register.
         *
         * @var array
         */
        protected $commands = ['CacheClear' => 'command.cache.clear', 'CacheForget' => 'command.cache.forget', 'ClearCompiled' => 'command.clear-compiled', 'ClearResets' => 'command.auth.resets.clear', 'ConfigCache' => 'command.config.cache', 'ConfigClear' => 'command.config.clear', 'Db' => \Illuminate\Database\Console\DbCommand::class, 'DbWipe' => 'command.db.wipe', 'Down' => 'command.down', 'DropinClear' => 'command.dropin.clear', 'Environment' => 'command.environment', 'EventCache' => 'command.event.cache', 'EventClear' => 'command.event.clear', 'EventList' => 'command.event.list', 'KeyGenerate' => 'command.key.generate', 'Optimize' => 'command.optimize', 'OptimizeClear' => 'command.optimize.clear', 'PackageDiscover' => 'command.package.discover', 'PublishFuturePost' => 'command.publish.future-post', 'QueueClear' => 'command.queue.clear', 'QueueFailed' => 'command.queue.failed', 'QueueFlush' => 'command.queue.flush', 'QueueForget' => 'command.queue.forget', 'QueueListen' => 'command.queue.listen', 'QueuePruneBatches' => 'command.queue.prune-batches', 'QueueRestart' => 'command.queue.restart', 'QueueRetry' => 'command.queue.retry', 'QueueRetryBatch' => 'command.queue.retry-batch', 'QueueWork' => 'command.queue.work', 'RouteCache' => 'command.route.cache', 'RouteClear' => 'command.route.clear', 'RouteList' => 'command.route.list', 'SaltsGenerate' => 'command.salts.generate', 'ScheduleFinish' => \Illuminate\Console\Scheduling\ScheduleFinishCommand::class, 'ScheduleList' => \Illuminate\Console\Scheduling\ScheduleListCommand::class, 'ScheduleRun' => \Illuminate\Console\Scheduling\ScheduleRunCommand::class, 'ScheduleTest' => \Illuminate\Console\Scheduling\ScheduleTestCommand::class, 'ScheduleWork' => \Illuminate\Console\Scheduling\ScheduleWorkCommand::class, 'SchemaDump' => 'command.schema.dump', 'Seed' => 'command.seed', 'StorageLink' => 'command.storage.link', 'Up' => 'command.up', 'ViewCache' => 'command.view.cache', 'ViewClear' => 'command.view.clear'];
        /**
         * Development commands to register.
         *
         * @var array
         */
        protected $devCommands = [
            //'AuthMake' => 'command.auth.make',
            'CacheTable' => 'command.cache.table',
            'CastMake' => 'command.cast.make',
            'ChannelMake' => 'command.channel.make',
            'ComponentMake' => 'command.component.make',
            'ConsoleMake' => 'command.console.make',
            'ControllerMake' => 'command.controller.make',
            'CustomerTable' => 'command.customer.table',
            'EventGenerate' => 'command.event.generate',
            'EventMake' => 'command.event.make',
            'ExceptionMake' => 'command.exception.make',
            'FactoryMake' => 'command.factory.make',
            'FormMake' => 'command.form.make',
            'HookMake' => 'command.hook.make',
            'JobMake' => 'command.job.make',
            'ListenerMake' => 'command.listener.make',
            'MailMake' => 'command.mail.make',
            'MiddlewareMake' => 'command.middleware.make',
            'ModelMake' => 'command.model.make',
            'NotificationMake' => 'command.notification.make',
            'NotificationTable' => 'command.notification.table',
            'ObserverMake' => 'command.observer.make',
            'PasswordResetTable' => 'command.password.reset.table',
            'PluginInstall' => 'command.plugin.install',
            'PolicyMake' => 'command.policy.make',
            'ProviderMake' => 'command.provider.make',
            'QueueFailedTable' => 'command.queue.failed-table',
            'QueueTable' => 'command.queue.table',
            'QueueBatchesTable' => 'command.queue.batches-table',
            'RequestMake' => 'command.request.make',
            'ResourceMake' => 'command.resource.make',
            'RuleMake' => 'command.rule.make',
            'SeederMake' => 'command.seeder.make',
            'SessionTable' => 'command.session.table',
            'Serve' => 'command.serve',
            'StubPublish' => 'command.stub.publish',
            'TestMake' => 'command.test.make',
            'ThemeInstall' => 'command.theme.install',
            'VendorPublish' => 'command.vendor.publish',
            'WidgetMake' => 'command.widget.make',
        ];
        /**
         * Register the service provider.
         */
        public function register()
        {
        }
        /**
         * Register the given commands.
         */
        protected function registerCommands(array $commands)
        {
        }
        /**
         * Register the make:auth command.
         *
         * @param  string  $alias
         */
        protected function registerAuthMakeCommand($alias)
        {
        }
        /**
         * Register the cache:clear command.
         *
         * @param  string  $alias
         */
        protected function registerCacheClearCommand($alias)
        {
        }
        /**
         * Register the cache:forget command.
         *
         * @param  string  $alias
         */
        protected function registerCacheForgetCommand($alias)
        {
        }
        /**
         * Register the cache:table command.
         *
         * @param  string  $alias
         */
        protected function registerCacheTableCommand($alias)
        {
        }
        /**
         * Register the make:cast command.
         *
         * @param  string  $alias
         */
        protected function registerCastMakeCommand($alias)
        {
        }
        /**
         * Register the make:channel command.
         *
         * @param  string  $alias
         */
        protected function registerChannelMakeCommand($alias)
        {
        }
        /**
         * Register the clear-compiled command.
         *
         * @param  string  $alias
         */
        protected function registerClearCompiledCommand($alias)
        {
        }
        protected function registerClearResetsCommand($alias)
        {
        }
        /**
         * Register the make:component command.
         *
         * @param  string  $alias
         */
        protected function registerComponentMakeCommand($alias)
        {
        }
        /**
         * Register the config:cache command.
         *
         * @param  string  $alias
         */
        protected function registerConfigCacheCommand($alias)
        {
        }
        /**
         * Register the config:clear command.
         *
         * @param  string  $alias
         */
        protected function registerConfigClearCommand($alias)
        {
        }
        /**
         * Register the make:command command.
         *
         * @param  string  $alias
         */
        protected function registerConsoleMakeCommand($alias)
        {
        }
        /**
         * Register the make:controller command.
         *
         * @param  string  $alias
         */
        protected function registerControllerMakeCommand($alias)
        {
        }
        /**
         * Register the customer:table command.
         *
         * @param  string  $alias
         */
        protected function registerCustomerTableCommand($alias)
        {
        }
        /**
         * Register the db command.
         */
        protected function registerDbCommand()
        {
        }
        /**
         * Register the db:wipe command.
         *
         * @param  string  $alias
         */
        protected function registerDbWipeCommand($alias)
        {
        }
        /**
         * Register the down command.
         *
         * @param  string  $alias
         */
        protected function registerDownCommand($alias)
        {
        }
        /**
         * Register the dropin:clear command.
         *
         * @param  string  $alias
         */
        protected function registerDropinClearCommand($alias)
        {
        }
        /**
         * Register the env command.
         *
         * @param  string  $alias
         */
        protected function registerEnvironmentCommand($alias)
        {
        }
        /**
         * Register the event:cache command.
         *
         * @param  string  $alias
         */
        protected function registerEventCacheCommand($alias)
        {
        }
        /**
         * Register the event:clear command.
         *
         * @param  string  $alias
         */
        protected function registerEventClearCommand($alias)
        {
        }
        /**
         * Register the event:generate command.
         *
         * @param  string  $alias
         */
        protected function registerEventGenerateCommand($alias)
        {
        }
        /**
         * Register the event:list command.
         *
         * @param  string  $alias
         */
        protected function registerEventListCommand($alias)
        {
        }
        /**
         * Register the make:event command.
         *
         * @param  string  $alias
         */
        protected function registerEventMakeCommand($alias)
        {
        }
        /**
         * Register the make:exception command.
         *
         * @param  string  $alias
         */
        protected function registerExceptionMakeCommand($alias)
        {
        }
        /**
         * Register the make:factory command.
         *
         * @param  string  $alias
         */
        protected function registerFactoryMakeCommand($alias)
        {
        }
        /**
         * Register the make:form command.
         *
         * @param  string  $alias
         */
        protected function registerFormMakeCommand($alias)
        {
        }
        /**
         * Register the make:hook command.
         *
         * @param  string  $alias
         */
        protected function registerHookMakeCommand($alias)
        {
        }
        /**
         * Register the make:job command.
         *
         * @param  string  $alias
         */
        protected function registerJobMakeCommand($alias)
        {
        }
        /**
         * Register the key:generate command.
         *
         * @param  string  $alias
         */
        protected function registerKeyGenerateCommand($alias)
        {
        }
        /**
         * Register the make:listener command.
         *
         * @param  string  $alias
         */
        protected function registerListenerMakeCommand($alias)
        {
        }
        /**
         * Register the make:mail command.
         *
         * @param  string  $alias
         */
        protected function registerMailMakeCommand($alias)
        {
        }
        /**
         * Register the make:middleware command.
         *
         * @param  string  $alias
         */
        protected function registerMiddlewareMakeCommand($alias)
        {
        }
        /**
         * Register the migrate command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateCommand($alias)
        {
        }
        /**
         * Register the migrate:fresh command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateFreshCommand($alias)
        {
        }
        /**
         * Register the migrate:install command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateInstallCommand($alias)
        {
        }
        /**
         * Register the make:migration command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateMakeCommand($alias)
        {
        }
        /**
         * Register the migrate:refresh command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateRefreshCommand($alias)
        {
        }
        /**
         * Register the migrate:reset command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateResetCommand($alias)
        {
        }
        /**
         * Register the migrate:rollback command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateRollbackCommand($alias)
        {
        }
        /**
         * Register the migrate:status command.
         *
         * @param  string  $alias
         */
        protected function registerMigrateStatusCommand($alias)
        {
        }
        /**
         * Register the make:model command.
         *
         * @param  string  $alias
         */
        protected function registerModelMakeCommand($alias)
        {
        }
        /**
         * Register the make:notification command.
         *
         * @param  string  $alias
         */
        protected function registerNotificationMakeCommand($alias)
        {
        }
        /**
         * Register the notification:table command.
         *
         * @param  string  $alias
         */
        protected function registerNotificationTableCommand($alias)
        {
        }
        /**
         * Register the make:observer command.
         *
         * @param  string  $alias
         */
        protected function registerObserverMakeCommand($alias)
        {
        }
        /**
         * Register the optimize command.
         *
         * @param  string  $alias
         */
        protected function registerOptimizeCommand($alias)
        {
        }
        /**
         * Register the optimize:clear command.
         *
         * @param  string  $alias
         */
        protected function registerOptimizeClearCommand($alias)
        {
        }
        /**
         * Register the package:discover command.
         *
         * @param  string  $alias
         */
        protected function registerPackageDiscoverCommand($alias)
        {
        }
        protected function registerPublishFuturePostCommand($alias)
        {
        }
        /**
         * Register the password:table command.
         *
         * @param  string  $alias
         */
        protected function registerPasswordResetTableCommand($alias)
        {
        }
        /**
         * Register the plugin:install command.
         *
         * @param  string  $alias
         */
        protected function registerPluginInstallCommand($alias)
        {
        }
        /**
         * Register the make:policy command.
         *
         * @param  string  $alias
         */
        protected function registerPolicyMakeCommand($alias)
        {
        }
        /**
         * Register the make:provider command.
         *
         * @param  string  $alias
         */
        protected function registerProviderMakeCommand($alias)
        {
        }
        /**
         * Register the queue:clear command.
         *
         * @param  string  $alias
         */
        protected function registerQueueClearCommand($alias)
        {
        }
        /**
         * Register the queue:failed command.
         *
         * @param  string  $alias
         */
        protected function registerQueueFailedCommand($alias)
        {
        }
        /**
         * Register the queue:flush command.
         *
         * @param  string  $alias
         */
        protected function registerQueueFlushCommand($alias)
        {
        }
        /**
         * Register the queue:forget command.
         *
         * @param  string  $alias
         */
        protected function registerQueueForgetCommand($alias)
        {
        }
        /**
         * Register the queue:listen command.
         *
         * @param  string  $alias
         */
        protected function registerQueueListenCommand($alias)
        {
        }
        /**
         * Register the queue:prune-batches command.
         *
         * @param  string  $alias
         */
        protected function registerQueuePruneBatchesCommand($alias)
        {
        }
        /**
         * Register the queue:restart command.
         *
         * @param  string  $alias
         */
        protected function registerQueueRestartCommand($alias)
        {
        }
        /**
         * Register the queue:retry-batch command.
         *
         * @param  string  $alias
         */
        protected function registerQueueRetryBatchCommand($alias)
        {
        }
        /**
         * Register the queue:retry command.
         *
         * @param  string  $alias
         */
        protected function registerQueueRetryCommand($alias)
        {
        }
        /**
         * Register the queue:work command.
         *
         * @param  string  $alias
         */
        protected function registerQueueWorkCommand($alias)
        {
        }
        /**
         * Register the queue:failed-table command.
         *
         * @param  string  $alias
         */
        protected function registerQueueFailedTableCommand($alias)
        {
        }
        /**
         * Register the queue:table command.
         *
         * @param  string  $alias
         */
        protected function registerQueueTableCommand($alias)
        {
        }
        /**
         * Register the queue:batches-table command.
         *
         * @param  string  $alias
         */
        protected function registerQueueBatchesTableCommand($alias)
        {
        }
        /**
         * Register the make:request command.
         *
         * @param  string  $alias
         */
        protected function registerRequestMakeCommand($alias)
        {
        }
        /**
         * Register the make:resource command.
         *
         * @param  string  $alias
         */
        protected function registerResourceMakeCommand($alias)
        {
        }
        /**
         * Register the route:cache command.
         *
         * @param  string  $alias
         */
        protected function registerRouteCacheCommand($alias)
        {
        }
        /**
         * Register the route:clear command.
         *
         * @param  string  $alias
         */
        protected function registerRouteClearCommand($alias)
        {
        }
        /**
         * Register the route:list command.
         *
         * @param  string  $alias
         */
        protected function registerRouteListCommand($alias)
        {
        }
        /**
         * Register the make:rule command.
         *
         * @param  string  $alias
         */
        protected function registerRuleMakeCommand($alias)
        {
        }
        /**
         * Register the salts:generate command.
         *
         * @param  string  $alias
         */
        protected function registerSaltsGenerateCommand($alias)
        {
        }
        /**
         * Register the schedule:finish {id} command.
         */
        protected function registerScheduleFinishCommand()
        {
        }
        /**
         * Register the schedule:list command.
         */
        protected function registerScheduleListCommand()
        {
        }
        /**
         * Register the schedule:run command.
         */
        protected function registerScheduleRunCommand()
        {
        }
        /**
         * Register the schedule:test command.
         */
        protected function registerScheduleTestCommand()
        {
        }
        /**
         * Register the schedule:work command.
         */
        protected function registerScheduleWorkCommand()
        {
        }
        /**
         * Register the schema:dump command.
         *
         * @param  string  $alias
         */
        protected function registerSchemaDumpCommand($alias)
        {
        }
        /**
         * Register the db:seed command.
         *
         * @param  string  $alias
         */
        protected function registerSeedCommand($alias)
        {
        }
        /**
         * Register the make:seeder command.
         *
         * @param  string  $alias
         */
        protected function registerSeederMakeCommand($alias)
        {
        }
        /**
         * Register the serve command.
         *
         * @param  string  $alias
         */
        protected function registerServeCommand($alias)
        {
        }
        /**
         * Register the session:table command.
         *
         * @param  string  $alias
         */
        protected function registerSessionTableCommand($alias)
        {
        }
        /**
         * Register the storage:link command.
         *
         * @param  string  $alias
         */
        protected function registerStorageLinkCommand($alias)
        {
        }
        /**
         * Register the stub:publish command.
         *
         * @param  string  $alias
         */
        protected function registerStubPublishCommand($alias)
        {
        }
        /**
         * Register the make:test command.
         *
         * @param  string  $alias
         */
        protected function registerTestMakeCommand($alias)
        {
        }
        /**
         * Register the theme:install command.
         *
         * @param  string  $alias
         */
        protected function registerThemeInstallCommand($alias)
        {
        }
        /**
         * Register the up command.
         *
         * @param  string  $alias
         */
        public function registerUpCommand($alias)
        {
        }
        /**
         * Register the vendor:publish command.
         *
         * @param  string  $alias
         */
        protected function registerVendorPublishCommand($alias)
        {
        }
        /**
         * Register the view:cache command.
         *
         * @param  string  $alias
         */
        protected function registerViewCacheCommand($alias)
        {
        }
        /**
         * Register the view:clear command.
         *
         * @param  string  $alias
         */
        protected function registerViewClearCommand($alias)
        {
        }
        /**
         * Register the make:widget command.
         *
         * @param  string  $alias
         */
        protected function registerWidgetMakeCommand($alias)
        {
        }
        /**
         * Return list of services provided.
         *
         * @return array
         */
        public function provides()
        {
        }
    }
    class ComposerServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Defer the loading of the provider.
         *
         * @var bool
         */
        protected $defer = true;
        /**
         * Register the service provider.
         */
        public function register()
        {
        }
        /**
         * Return list of services provided by the provider.
         *
         * @return array
         */
        public function provides()
        {
        }
    }
    class ConsoleCoreServiceProvider extends \Illuminate\Support\AggregateServiceProvider
    {
        /**
         * Defer the loading of the provider.
         *
         * @var bool
         */
        protected $defer = true;
        /**
         * The provider class names.
         *
         * @var array
         */
        protected $providers = [\Themosis\Core\Providers\ArtisanServiceProvider::class, \Illuminate\Database\MigrationServiceProvider::class, \Themosis\Core\Providers\ComposerServiceProvider::class];
    }
    class CoreServiceProvider extends \Illuminate\Support\AggregateServiceProvider
    {
        /**
         * The provider class names.
         *
         * @var array
         */
        protected $providers = [\Themosis\Core\Providers\FormRequestServiceProvider::class];
        /**
         * Register the service provider.
         */
        public function register()
        {
        }
        /**
         * Register the "validate" macro on the request.
         */
        public function registerRequestValidate()
        {
        }
        /**
         * Register the "hasValidSignature" macro on the request.
         */
        public function registerRequestSignatureValidation()
        {
        }
        /**
         * Publish core assets.
         */
        public function boot()
        {
        }
    }
    class FormRequestServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Register the service provider.
         */
        public function register()
        {
        }
        /**
         * Bootstrap the service.
         */
        public function boot()
        {
        }
    }
}
namespace Themosis\Core\Repositories {
    use Illuminate\Support\LazyCollection;
    use Themosis\Core\Enums\PostStatus;
    use WP_Post;
    use WP_Query;
    class PostRepository
    {
        public function allScheduledPosts(?string $postType = null) : \Illuminate\Support\LazyCollection
        {
        }
        public function getBy(int $id) : \WP_Post
        {
        }
    }
}
namespace Themosis\Core\Support\Providers {
    use Illuminate\Support\Facades\Gate;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\Event;
    use Illuminate\Support\ServiceProvider;
    use Themosis\Core\Events\DiscoverEvents;
    use Closure;
    use Illuminate\Contracts\Routing\UrlGenerator;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Traits\ForwardsCalls;
    use Themosis\Route\Router;
    class AuthServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        protected $policies = [];
        /**
         * Register the application's policies.
         */
        public function registerPolicies()
        {
        }
        public function register()
        {
        }
        /**
         * Return the policies defined by the provider.
         *
         * @return array
         */
        public function policies()
        {
        }
    }
    class EventServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * The event handler mappings for the application.
         *
         * @var array
         */
        protected $listen = [];
        /**
         * The subscriber classes to register.
         *
         * @var array
         */
        protected $subscribe = [];
        /**
         * Register the application's event listeners.
         */
        public function boot()
        {
        }
        /**
         * Get the discovered events and listeners for the application.
         *
         * @return array
         */
        public function getEvents()
        {
        }
        /**
         * Return the events and handlers.
         *
         * @return array
         */
        public function listens()
        {
        }
        /**
         * Return the discovered events for the application.
         *
         * @return array
         */
        protected function discoveredEvents()
        {
        }
        /**
         * Determine if events and listeners should be automatically discovered.
         *
         * @return bool
         */
        public function shouldDiscoverEvents()
        {
        }
        /**
         * Discover the events and listeners for the application.
         *
         * @return array
         */
        public function discoverEvents()
        {
        }
        /**
         * Get the listener directories that should be used to discover events.
         *
         * @return array
         */
        protected function discoverEventsWithin()
        {
        }
    }
    class RouteServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        use \Illuminate\Support\Traits\ForwardsCalls;
        /**
         * Controller namespace used by loaded routes.
         *
         * @var string|null
         */
        protected $namespace;
        /**
         * The callback that should be used to load application's routes.
         *
         * @var \Closure|null
         */
        protected $loadRoutesUsing;
        public function register()
        {
        }
        /**
         * Set the root controller namespace for the application.
         */
        protected function setRootControllerNamespace()
        {
        }
        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         */
        protected function routesAreCached()
        {
        }
        /**
         * Load the cached routes for the application.
         */
        protected function loadCachedRoutes()
        {
        }
        /**
         * Load the application routes.
         */
        protected function loadRoutes()
        {
        }
        /**
         * Bootstrap the service.
         */
        public function boot()
        {
        }
        /**
         * Pass dynamic methods onto the router instance.
         *
         * @param  string  $method
         * @param  array  $parameters
         * @return mixed
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        public function __call($method, $parameters)
        {
        }
        /**
         * Register the callback that will be used to load the application's routes.
         *
         *
         * @return $this
         */
        protected function routes(\Closure $routesCallback)
        {
        }
    }
}
namespace Themosis\Core\Theme {
    use Themosis\Hook\IHook;
    use Themosis\Hook\IHook;
    class ImageSize
    {
        /**
         * The user defined image sizes.
         *
         * @var array
         */
        protected $sizes;
        /**
         * @var IHook
         */
        protected $filter;
        public function __construct(array $sizes, \Themosis\Hook\IHook $filter)
        {
        }
        /**
         * Parse the images sizes.
         *
         *
         * @return array
         */
        protected function parse(array $sizes)
        {
        }
        /**
         * Parse image properties.
         *
         *
         * @return array
         */
        protected function parseProperties(array $properties, string $slug)
        {
        }
        /**
         * Format label for display.
         *
         *
         * @return string
         */
        protected function label(string $label)
        {
        }
        /**
         * Return the defined images sizes.
         *
         * @return array
         */
        public function getSizes()
        {
        }
        /**
         * Register theme image sizes.
         *
         * @return $this
         */
        public function register()
        {
        }
        /**
         * Filter media size drop down options. Add user custom image sizes.
         *
         *
         * @return array
         */
        public function addToDropDown(array $options)
        {
        }
    }
    class Support
    {
        /**
         * @var array
         */
        protected $features;
        /**
         * @var array
         */
        protected $mustHaveProperties = ['custom-background', 'custom-header', 'html5', 'post-formats', 'post-thumbnails', 'starter-content'];
        public function __construct(array $features)
        {
        }
        /**
         * Parse theme features.
         *
         *
         * @return array
         */
        protected function parse(array $features)
        {
        }
        /**
         * Register theme support.
         */
        public function register()
        {
        }
    }
    class Templates
    {
        /**
         * @var array
         */
        protected $templates;
        /**
         * @var IHook
         */
        protected $filter;
        public function __construct(array $options, \Themosis\Hook\IHook $filter)
        {
        }
        /**
         * Parse templates.
         *
         *
         * @return array
         */
        protected function parse(array $options)
        {
        }
        /**
         * Format the template name.
         *
         *
         * @return string
         */
        protected function formatName(string $name)
        {
        }
        /**
         * Register theme templates.
         */
        public function register()
        {
        }
    }
}
namespace Themosis\Core\Validation {
    use Illuminate\Contracts\Validation\Factory;
    use Illuminate\Contracts\Validation\Validator;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Validation\ValidationException;
    trait ValidatesRequests
    {
        /**
         * Run the validation routine against the given validator.
         *
         * @param  Validator|array  $validator
         * @return array
         *
         * @throws ValidationException
         */
        public function validateWith($validator, \Illuminate\Http\Request $request = null)
        {
        }
        /**
         * Validate the given request with the given rules.
         *
         *
         * @return array
         */
        public function validate(\Illuminate\Http\Request $request, array $rules, array $messages = [], array $attributes = [])
        {
        }
        /**
         * @return array
         *
         * @throws ValidationException
         */
        public function validateWithBag($errorBag, \Illuminate\Http\Request $request, array $rules, array $messages = [], array $attributes = [])
        {
        }
        /**
         * Get the request input based on the given validation rules.
         *
         *
         * @return array
         */
        protected function extractInputFromRules(\Illuminate\Http\Request $request, array $rules)
        {
        }
        /**
         * Get the validation factory.
         *
         * @return \Illuminate\Contracts\Validation\Factory
         */
        protected function getValidationFactory()
        {
        }
    }
}
namespace Themosis\Field\Contracts {
    use Themosis\Forms\Contracts\FieldTypeInterface;
    interface FieldFactoryInterface
    {
        /**
         * Return a text field instance.
         */
        public function text(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a password field instance.
         */
        public function password(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a number field instance.
         */
        public function number(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return an integer field instance.
         */
        public function integer(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return an email field instance.
         */
        public function email(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a textarea field instance.
         */
        public function textarea(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a checkbox field instance.
         */
        public function checkbox(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a choice field instance.
         */
        public function choice(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a button field instance.
         */
        public function button(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a submit field instance.
         */
        public function submit(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a hidden field instance.
         */
        public function hidden(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface;
    }
}
namespace Themosis\Field {
    use Illuminate\Contracts\View\Factory as ViewFactoryInterface;
    use Themosis\Core\Application;
    use Themosis\Field\Contracts\FieldFactoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Types\ButtonType;
    use Themosis\Forms\Fields\Types\CheckboxType;
    use Themosis\Forms\Fields\Types\ChoiceType;
    use Themosis\Forms\Fields\Types\CollectionType;
    use Themosis\Forms\Fields\Types\ColorType;
    use Themosis\Forms\Fields\Types\EditorType;
    use Themosis\Forms\Fields\Types\EmailType;
    use Themosis\Forms\Fields\Types\HiddenType;
    use Themosis\Forms\Fields\Types\IntegerType;
    use Themosis\Forms\Fields\Types\MediaType;
    use Themosis\Forms\Fields\Types\NumberType;
    use Themosis\Forms\Fields\Types\PasswordType;
    use Themosis\Forms\Fields\Types\SubmitType;
    use Themosis\Forms\Fields\Types\TextareaType;
    use Themosis\Forms\Fields\Types\TextType;
    use Illuminate\Support\ServiceProvider;
    /**
     * Field factory.
     */
    class Factory implements \Themosis\Field\Contracts\FieldFactoryInterface
    {
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var ViewFactoryInterface
         */
        protected $viewFactory;
        public function __construct(\Themosis\Core\Application $app, \Illuminate\Contracts\View\Factory $factory)
        {
        }
        /**
         * Return a text type instance.
         */
        public function text(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a password type instance.
         */
        public function password(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a number field type instance.
         */
        public function number(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return an integer field type instance.
         */
        public function integer(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return an email type instance.
         */
        public function email(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a DateField instance.
         *
         * @param  string  $name       The name attribute of the date input.
         * @param  array  $features   Custom field features - title, info.
         * @param  array  $attributes Input html attributes.
         * @return \Themosis\Field\Fields\DateField
         */
        public function date($name, array $features = [], array $attributes = [])
        {
        }
        /**
         * Return a textarea type instance.
         */
        public function textarea(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a checkbox type instance.
         */
        public function checkbox(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a choice type instance.
         */
        public function choice(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a media type instance.
         *
         * @param  string  $name
         */
        public function media($name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return an editor type instance.
         *
         * @param  string  $name
         */
        public function editor($name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a collection type instance.
         *
         * @param  string  $name
         */
        public function collection($name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a color type instance.
         *
         * @param  string  $name
         */
        public function color($name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a button type instance.
         */
        public function button(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a submit type instance.
         */
        public function submit(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return a hidden type instance.
         */
        public function hidden(string $name, array $options = []) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
    }
    class FieldServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
}
namespace Themosis\Forms\Contracts {
    use Illuminate\Contracts\Support\MessageBag;
    use Illuminate\Contracts\View\Factory as ViewFactoryInterface;
    use League\Fractal\Manager;
    use Themosis\Forms\Resources\Factory;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Forms\FormBuilder;
    use Illuminate\Contracts\Support\MessageBag;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Http\Request;
    use League\Fractal\Manager;
    use Themosis\Field\Contracts\FieldFactoryInterface;
    interface CheckableInterface
    {
        /**
         * Verify a value against a choice and return
         * a "checked" HTML attribute.
         */
        public function checked(callable $callback, array $args) : string;
    }
    interface DataTransformerInterface
    {
        /**
         * Return normalized data.
         *
         * @param  mixed  $data
         * @return mixed
         */
        public function transform($data);
        /**
         * Return raw data.
         *
         * @param  mixed  $data
         * @return mixed
         */
        public function reverseTransform($data);
    }
    interface FieldTypeInterface
    {
        /**
         * Output the entity as HTML.
         */
        public function render() : string;
        /**
         * Set the field options.
         */
        public function setOptions(array $options) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return field options.
         *
         * @param  array  $excludes
         */
        public function getOptions(array $excludes = null) : array;
        /**
         * Get field type option defined by key.
         *
         * @param  mixed  $default
         * @return string|array|null
         */
        public function getOption(string $key, $default = null);
        /**
         * Set a field prefix. Mainly applied to field name to avoid conflict
         * with query variables.
         */
        public function setPrefix(string $prefix) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the field prefix.
         */
        public function getPrefix() : string;
        /**
         * Return the field name property.
         */
        public function getName() : string;
        /**
         * Return the field basename property.
         */
        public function getBaseName() : string;
        /**
         * Return field attributes list.
         *
         * @return array
         */
        public function getAttributes();
        /**
         * Get the value of a defined attribute.
         *
         * @param  string  $name The attribute name.
         * @return mixed
         */
        public function getAttribute(string $name);
        /**
         * Set the attributes for the field.
         *
         *
         * @return FieldTypeInterface
         */
        public function setAttributes(array $attributes);
        /**
         * Add an attribute to the field.
         *
         * @param  bool  $overwrite By default, it appends the value. Set to true, to replace the existing attribute value.
         */
        public function addAttribute(string $name, string $value, $overwrite = false) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return a list of default options.
         */
        public function getDefaultOptions() : array;
        /**
         * Return the allowed options for a field.
         */
        public function getAllowedOptions() : array;
        /**
         * Specify the view file to use by the entity.
         */
        public function setView(string $view) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Set the field view factory instance.
         */
        public function setViewFactory(\Illuminate\Contracts\View\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the view instance used by the entity.
         */
        public function getView(bool $prefixed = true) : string;
        /**
         * Indicates if the entity has been rendered or not.
         */
        public function isRendered() : bool;
        /**
         * Check if submitted form is valid.
         */
        public function isValid() : bool;
        /**
         * Check if submitted form is not valid.
         */
        public function isNotValid() : bool;
        /**
         * Set the field transformer.
         */
        public function setTransformer(\Themosis\Forms\Contracts\DataTransformerInterface $transformer) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Set the field raw value.
         *
         * @param  string|array  $value
         */
        public function setValue($value, bool $shouldNotBypassTransformer = true) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Retrieve the field "normalized" value.
         *
         * @param  mixed  $default
         * @return mixed
         */
        public function getValue($default = null);
        /**
         * Retrieve the field original value (reverse transformed).
         *
         * @return mixed
         */
        public function getRawValue();
        /**
         * Return an error message bag instance.
         */
        public function errors() : \Illuminate\Contracts\Support\MessageBag;
        /**
         * Retrieve the error messages of a specific input.
         *
         *
         * @return string|array
         */
        public function error(string $name = '', bool $first = false);
        /**
         * Return the field locale.
         */
        public function getLocale() : string;
        /**
         * Set the field locale.
         */
        public function setLocale(string $locale) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the field theme.
         */
        public function getTheme() : string;
        /**
         * Set the field theme.
         */
        public function setTheme(string $theme) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the Fractal manager.
         */
        public function getManager() : \League\Fractal\Manager;
        /**
         * Set the Fractal manager.
         */
        public function setManager(\League\Fractal\Manager $manager) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the transformer factory.
         */
        public function getResourceTransformerFactory() : \Themosis\Forms\Resources\Factory;
        /**
         * Set the transformer factory.
         */
        public function setResourceTransformerFactory(\Themosis\Forms\Resources\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the resource transformer.
         */
        public function getResourceTransformer() : string;
        /**
         * Return a JSON representation of the field.
         */
        public function toJson() : string;
        /**
         * Return an associative array representation of the field.
         */
        public function toArray() : array;
        /**
         * Return the field type.
         */
        public function getType() : string;
        /**
         * Return the field component name.
         */
        public function getComponent() : string;
        /**
         * Pass custom data to the field view.
         *
         * @param  string|array  $key
         * @param  mixed  $value
         */
        public function with($key, $value = null) : \Themosis\Forms\Contracts\FieldTypeInterface;
    }
    interface FieldsRepositoryInterface
    {
        /**
         * Return the list of all attached fields.
         */
        public function all() : array;
        /**
         * Attach a field to the form.
         */
        public function addField(\Themosis\Forms\Contracts\FieldTypeInterface $field, \Themosis\Support\Contracts\SectionInterface $group) : \Themosis\Forms\Contracts\FieldsRepositoryInterface;
        /**
         * Return the defined field instance based on its basename property.
         * If not set, return all fields from the "default" group.
         *
         *
         * @return mixed
         */
        public function getField(string $name = '', string $group = 'default');
        /**
         * Retrieve a list of attached fields based
         * on provided group name.
         *
         *
         * @return SectionInterface|array
         */
        public function getFieldsByGroup(string $group = '');
        /**
         * Return a list of registered groups within the form.
         */
        public function getGroups() : array;
        /**
         * Retrieve a field by its name.
         */
        public function getFieldByName(string $name) : ?\Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Check if form contains provided group instance (section).
         */
        public function hasGroup(string $name) : bool;
        /**
         * Return the registered group/section instance.
         */
        public function getGroup(string $name) : \Themosis\Support\Contracts\SectionInterface;
    }
    interface FormBuilderInterface
    {
        /**
         * Add a field to the current form instance.
         *
         *
         * @return $this
         */
        public function add(\Themosis\Forms\Contracts\FieldTypeInterface $field) : \Themosis\Forms\Contracts\FormBuilderInterface;
        /**
         * Return generated form instance.
         */
        public function get() : \Themosis\Forms\Contracts\FormInterface;
    }
    interface FormFactoryInterface
    {
        /**
         * Create a FormBuilderInterface instance.
         *
         * @param  mixed  $data    Data object (DTO).
         * @param  array  $options
         * @param  string  $builder A FormBuilderInterface class.
         */
        public function make($data = null, $options = [], $builder = \Themosis\Forms\FormBuilder::class) : \Themosis\Forms\Contracts\FormBuilderInterface;
    }
    interface FormInterface
    {
        /**
         * Return the form repository instance.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface;
        /**
         * Handle request in order to validate form data.
         */
        public function handleRequest(\Illuminate\Http\Request $request) : \Themosis\Forms\Contracts\FormInterface;
        /**
         * Return a list of errors.
         */
        public function errors() : \Illuminate\Contracts\Support\MessageBag;
        /**
         * Return error messages for a specific field.
         * By setting the second parameter to true, a user
         * can fetch the first error message only on the
         * mentioned field.
         *
         *
         * @return mixed
         */
        public function error(string $name, bool $first = false);
        /**
         * Set form group view file.
         */
        public function setGroupView(string $view, string $group = 'default') : \Themosis\Forms\Contracts\FormInterface;
        /**
         * Get the view factory instance.
         */
        public function getViewer() : \Illuminate\Contracts\View\Factory;
        /**
         * Get the Fractal manager.
         */
        public function getManager() : \League\Fractal\Manager;
    }
    interface Formidable
    {
        /**
         * Build and configure a re-usable form.
         */
        public function build(\Themosis\Forms\Contracts\FormFactoryInterface $factory, \Themosis\Field\Contracts\FieldFactoryInterface $fields) : \Themosis\Forms\Contracts\FormInterface;
    }
    interface SelectableInterface
    {
        /**
         * Verify a value against a choice and return
         * a "selected" HTML attribute.
         */
        public function selected(callable $callback, array $args) : string;
    }
}
namespace Themosis\Forms\DataMappers {
    use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    class DataMapperManager
    {
        public function __construct(\Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor)
        {
        }
        /**
         * Map data from object to field.
         *
         * @param  mixed  $data
         */
        public function mapFromObjectToField($data, \Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Map data from field to object.
         *
         * @param  mixed  $data
         */
        public function mapFromFieldToObject(\Themosis\Forms\Contracts\FieldTypeInterface $field, $data)
        {
        }
    }
}
namespace Themosis\Forms\Fields\ChoiceList {
    interface ChoiceListInterface
    {
        /**
         * Format the choices for use (before output).
         */
        public function format() : \Themosis\Forms\Fields\ChoiceList\ChoiceListInterface;
        /**
         * Return formatted choices.
         */
        public function get() : array;
    }
    class ChoiceList implements \Themosis\Forms\Fields\ChoiceList\ChoiceListInterface
    {
        /**
         * Raw choices.
         *
         * @var array
         */
        protected $choices;
        /**
         * Formatted choices.
         *
         * @var array
         */
        protected $results = [];
        public function __construct(array $choices)
        {
        }
        /**
         * Format the choices for use on output.
         */
        public function format() : \Themosis\Forms\Fields\ChoiceList\ChoiceListInterface
        {
        }
        /**
         * Parse the choices and format them.
         *
         *
         * @return array
         */
        protected function parse(array $choices)
        {
        }
        /**
         * Return formatted choices.
         */
        public function get() : array
        {
        }
    }
}
namespace Themosis\Forms\Fields\Contracts {
    interface CanHandleMetabox
    {
        /**
         * Handle metabox post meta save action.
         * Register the field data.
         *
         * @param  mixed  $value
         */
        public function metaboxSave($value, int $post_id);
        /**
         * Initialize field post meta value.
         */
        public function metaboxGet(int $post_id);
    }
    interface CanHandlePageSettings
    {
        /**
         * Save a page setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name);
        /**
         * Return a page setting value.
         *
         * @return mixed
         */
        public function settingGet();
    }
    interface CanHandleTerms
    {
        /**
         * Handle field term meta registration.
         *
         * @param  mixed  $value
         */
        public function termSave($value, int $term_id);
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id);
    }
    interface CanHandleUsers
    {
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id);
        /**
         * Handle field user meta registration.
         *
         * @param  string|array  $value
         */
        public function userSave($value, int $user_id);
    }
}
namespace Themosis\Forms\Fields\Exceptions {
    class NotSupportedFieldException extends \Exception
    {
    }
}
namespace Themosis\Forms\Fields {
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Support\Contracts\SectionInterface;
    class FieldsRepository implements \Themosis\Forms\Contracts\FieldsRepositoryInterface
    {
        /**
         * Fields organized by group.
         *
         * @var array
         */
        protected $fields = [];
        /**
         * All groups with fields.
         *
         * @var SectionInterface[]
         */
        protected $groups = [];
        /**
         * {@inheritdoc}
         */
        public function all() : array
        {
        }
        /**
         * Add a field to the form instance.
         */
        public function addField(\Themosis\Forms\Contracts\FieldTypeInterface $field, \Themosis\Support\Contracts\SectionInterface $group) : \Themosis\Forms\Contracts\FieldsRepositoryInterface
        {
        }
        /**
         * Return the defined field instance based on its basename property.
         * If not set, return all fields from the "default" group.
         *
         *
         * @return FieldTypeInterface|FieldTypeInterface[]|array
         */
        public function getField(string $name = '', string $group = 'default')
        {
        }
        /**
         * Retrieve a list of attached fields based
         * on provided group name.
         *
         *
         * @return SectionInterface|array
         */
        public function getFieldsByGroup(string $group = '')
        {
        }
        /**
         * Return a list of registered groups within the form.
         */
        public function getGroups() : array
        {
        }
        /**
         * Retrieve a field by its name.
         */
        public function getFieldByName(string $name) : ?\Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Check if form contains provided group instance (section).
         */
        public function hasGroup(string $name) : bool
        {
        }
        /**
         * Return the registered group/section instance.
         */
        public function getGroup(string $name) : \Themosis\Support\Contracts\SectionInterface
        {
        }
    }
}
namespace Themosis\Html {
    use Illuminate\Support\ServiceProvider;
    class HtmlBuilder
    {
        /**
         * @var string
         */
        protected $charset = 'UTF-8';
        public function __construct()
        {
        }
        /**
         * Set the encoding charset.
         * Defaults to UTF8.
         *
         * @param  string  $charset
         * @return \Themosis\Html\HtmlBuilder
         */
        public function setCharset($charset = null)
        {
        }
        /**
         * Build a list of HTML attributes from an array.
         *
         * @param  array  $attributes An array of html tag attributes.
         * @return string The html attributes output.
         */
        public function attributes(array $attributes)
        {
        }
        /**
         * Build the attribute.
         *
         * @param  string  $key
         * @param  string  $value
         * @return string|null
         */
        protected function attributeElement($key, $value)
        {
        }
        /**
         * Convert HTML characters to entities.
         *
         * @param  string  $value A string to encode.
         * @return string The encoded character.
         */
        public function entities($value)
        {
        }
        /**
         * Convert special characters to HTML entities.
         *
         * @param  string  $value
         * @return string
         */
        public function special($value)
        {
        }
    }
    class HtmlServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
}
namespace Themosis\Forms {
    use DomainException;
    use Illuminate\Contracts\Support\MessageBag;
    use Illuminate\Contracts\Validation\Factory as ValidationFactoryInterface;
    use Illuminate\Contracts\View\Factory as ViewFactoryInterface;
    use Illuminate\Http\Request;
    use Illuminate\Support\Arr;
    use Illuminate\Validation\Factory;
    use League\Fractal\Manager;
    use League\Fractal\Resource\Item;
    use League\Fractal\Resource\ResourceInterface;
    use League\Fractal\Serializer\ArraySerializer;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Contracts\FormInterface;
    use Themosis\Forms\DataMappers\DataMapperManager;
    use Themosis\Forms\Fields\Types\BaseType;
    use Themosis\Forms\Resources\Factory as TransformerFactory;
    use Themosis\Html\HtmlBuilder;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Contracts\FormBuilderInterface;
    use Themosis\Forms\Contracts\FormInterface;
    use Themosis\Forms\DataMappers\DataMapperManager;
    use Themosis\Forms\Fields\Types\BaseType;
    use Themosis\Support\Section;
    use Illuminate\Contracts\Validation\Factory as ValidationFactoryInterface;
    use Illuminate\Contracts\View\Factory as ViewFactoryInterface;
    use League\Fractal\Manager;
    use Symfony\Component\PropertyAccess\PropertyAccess;
    use Themosis\Forms\Contracts\FormBuilderInterface;
    use Themosis\Forms\Contracts\FormFactoryInterface;
    use Themosis\Forms\DataMappers\DataMapperManager;
    use Themosis\Forms\Fields\FieldsRepository;
    use Themosis\Forms\Resources\Factory;
    use Illuminate\Support\Facades\Blade;
    use Illuminate\Support\ServiceProvider;
    use League\Fractal\Manager;
    use Themosis\Forms\Resources\Factory;
    use Illuminate\Contracts\Support\MessageBag;
    trait FormHelper
    {
        /**
         * Build the view path.
         *
         *
         * @return string
         */
        protected function buildViewPath(string $theme, string $view)
        {
        }
    }
    /**
     * Class Form
     */
    class Form extends \Themosis\Html\HtmlBuilder implements \Themosis\Forms\Contracts\FormInterface, \Themosis\Forms\Contracts\FieldTypeInterface
    {
        use \Themosis\Forms\FormHelper;
        /**
         * DTO object.
         *
         * @var mixed
         */
        protected $dataClass;
        /**
         * @var DataMapperManager
         */
        protected $dataMapper;
        /**
         * @var string
         */
        protected $prefix = 'th_';
        /**
         * Form groups.
         *
         * @var array
         */
        protected $groups = [];
        /**
         * @var FieldsRepositoryInterface
         */
        protected $repository;
        /**
         * @var ValidationFactoryInterface
         */
        protected $validation;
        /**
         * @var \Illuminate\Validation\Validator
         */
        protected $validator;
        /**
         * @var ViewFactoryInterface
         */
        protected $viewer;
        /**
         * Form view name.
         *
         * @var string
         */
        protected $view = 'form.default';
        /**
         * Indicates if form is rendered.
         *
         * @var bool
         */
        protected $rendered = false;
        /**
         * Form options.
         *
         * @var array
         */
        protected $options;
        /**
         * List of allowed options on a form instance.
         *
         * @var array
         */
        protected $allowedOptions = ['attributes', 'container_attr', 'csrf', 'errors', 'flush', 'flushOnFail', 'nonce', 'nonce_action', 'referer', 'tags', 'theme'];
        /**
         * List of default form options.
         *
         * @var array
         */
        protected $defaultOptions = ['attributes' => [], 'container_attr' => [], 'csrf' => true, 'flush' => true, 'flushOnFail' => true, 'tags' => true, 'errors' => true, 'theme' => 'themosis'];
        /**
         * Form "name" attribute value.
         *
         * @var string
         */
        protected $basename;
        /**
         * Form locale (intl).
         *
         * @var string
         */
        protected $locale;
        /**
         * Fractal manager instance.
         *
         * @var Manager
         */
        protected $manager;
        /**
         * @var TransformerFactory
         */
        protected $factory;
        /**
         * The resource transformer class.
         *
         * @var string
         */
        protected $resourceTransformer = 'FormTransformer';
        /**
         * Form type.
         *
         * @var string
         */
        protected $type = 'form';
        /**
         * The JS component name.
         *
         * @var string
         */
        protected $component;
        public function __construct($dataClass, \Themosis\Forms\Contracts\FieldsRepositoryInterface $repository, \Illuminate\Contracts\Validation\Factory $validation, \Illuminate\Contracts\View\Factory $viewer, \Themosis\Forms\DataMappers\DataMapperManager $dataMapper)
        {
        }
        /**
         * Get the form repository instance.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface
        {
        }
        /**
         * Set the form prefix. If fields are attached to the form,
         * all fields are updated with the given prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the form prefix.
         */
        public function getPrefix() : string
        {
        }
        /**
         * Return the form theme.
         */
        public function getTheme() : string
        {
        }
        /**
         * Set the form and attached fields theme.
         */
        public function setTheme(string $theme) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Handle current request and start form data validation.
         *
         *
         * @return $this
         *
         * @throws \Illuminate\Validation\ValidationException
         */
        public function handleRequest(\Illuminate\Http\Request $request) : \Themosis\Forms\Contracts\FormInterface
        {
        }
        /**
         * Get the list of form rules.
         *
         * @param  array  $fields The form fields instances.
         * @return array
         */
        protected function getFormRules(array $fields)
        {
        }
        /**
         * Get the list of form fields messages.
         *
         * @param  array  $fields The form fields instances.
         * @return array
         */
        protected function getFormMessages(array $fields)
        {
        }
        /**
         * Get the list of custom :attribute placeholders values.
         *
         * @param  array  $fields The form fields instances.
         * @return array
         */
        protected function getFormPlaceholders(array $fields)
        {
        }
        /**
         * Check if submitted form is valid.
         */
        public function isValid() : bool
        {
        }
        /**
         * Check if submitted form is not valid.
         */
        public function isNotValid() : bool
        {
        }
        /**
         * Return a list of form errors.
         */
        public function errors() : \Illuminate\Contracts\Support\MessageBag
        {
        }
        /**
         * Return error messages for a specific field.
         * By setting the second parameter to true, a user
         * can fetch the first error message only on the
         * mentioned field.
         *
         *
         * @return string|array
         */
        public function error(string $name = '', bool $first = false)
        {
        }
        /**
         * Render a form and returns its HTML structure.
         */
        public function render() : string
        {
        }
        /**
         * Retrieve form view data.
         */
        protected function getFormData() : array
        {
        }
        /**
         * Pass custom data to the form view.
         *
         * @param  array|string  $key
         * @param  null  $value
         */
        public function with($key, $value = null) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Set form group view file.
         */
        public function setGroupView(string $view, string $group = 'default') : \Themosis\Forms\Contracts\FormInterface
        {
        }
        /**
         * Specify the view file to use by the form.
         */
        public function setView(string $view) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Set the field view factory instance.
         */
        public function setViewFactory(\Illuminate\Contracts\View\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the view path instance used by the form.
         */
        public function getView(bool $prefixed = true) : string
        {
        }
        /**
         * Get the view factory instance.
         */
        public function getViewer() : \Illuminate\Contracts\View\Factory
        {
        }
        /**
         * Indicates if the form has been rendered or not.
         */
        public function isRendered() : bool
        {
        }
        /**
         * Validate form options.
         *
         *
         * @return array
         */
        protected function validateOptions(array $options)
        {
        }
        /**
         * Set form options.
         */
        public function setOptions(array $options) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Parse form options and add some default parameters.
         *
         *
         * @return array
         */
        protected function parseOptions(array $options)
        {
        }
        /**
         * Return form options.
         *
         * @param  array  $excludes
         */
        public function getOptions(array $excludes = null) : array
        {
        }
        /**
         * Return form options.
         *
         * @param  mixed  $default
         * @return string|array|null
         */
        public function getOption(string $key, $default = null)
        {
        }
        /**
         * Get the form "name" attribute value.
         */
        public function getName() : string
        {
        }
        /**
         * getName() method alias.
         */
        public function getBaseName() : string
        {
        }
        /**
         * Return the form attributes.
         *
         * @return array
         */
        public function getAttributes()
        {
        }
        /**
         * Get the value of a defined attribute.
         *
         * @param  string  $name The attribute name.
         * @return mixed
         */
        public function getAttribute(string $name)
        {
        }
        /**
         * Set the form attributes.
         *
         *
         * @return FieldTypeInterface
         */
        public function setAttributes(array $attributes)
        {
        }
        /**
         * Add an attribute to the field.
         *
         * @param  bool  $overwrite
         */
        public function addAttribute(string $name, string $value, $overwrite = false) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the list of default options.
         */
        public function getDefaultOptions() : array
        {
        }
        /**
         * Return allowed options for the form.
         */
        public function getAllowedOptions() : array
        {
        }
        /**
         * Set the form locale.
         */
        public function setLocale(string $locale) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the form locale.
         */
        public function getLocale() : string
        {
        }
        /**
         * {@inheritdoc}
         */
        public function setTransformer(\Themosis\Forms\Contracts\DataTransformerInterface $transformer) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  array|string  $value
         */
        public function setValue($value, bool $shouldNotBypassTransformer = true) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $default
         * @return mixed|null
         */
        public function getValue($default = null)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return mixed
         */
        public function getRawValue()
        {
        }
        /**
         * Set the Fractal manager.
         */
        public function setManager(\League\Fractal\Manager $manager) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the Fractal manager.
         */
        public function getManager() : \League\Fractal\Manager
        {
        }
        /**
         * Return the transformer factory.
         */
        public function getResourceTransformerFactory() : \Themosis\Forms\Resources\Factory
        {
        }
        /**
         * Set the transformer factory.
         */
        public function setResourceTransformerFactory(\Themosis\Forms\Resources\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return form resource transformer class name.
         */
        public function getResourceTransformer() : string
        {
        }
        /**
         * Define the Fractal resource used by the form.
         */
        protected function resource() : \League\Fractal\Resource\ResourceInterface
        {
        }
        /**
         * Define the serialization for the form resource.
         */
        protected function serialize() : \Themosis\Forms\Form
        {
        }
        /**
         * Return an associative array representation of the field.
         */
        public function toArray() : array
        {
        }
        /**
         * Return a JSON representation of the form instance.
         */
        public function toJson() : string
        {
        }
        /**
         * Return the form type.
         */
        public function getType() : string
        {
        }
        /**
         * Return the form component name.
         */
        public function getComponent() : string
        {
        }
        /**
         * Return form HTML element open tag.
         */
        public function open() : string
        {
        }
        /**
         * Return form HTML element close tag.
         */
        public function close() : string
        {
        }
    }
    class FormBuilder implements \Themosis\Forms\Contracts\FormBuilderInterface
    {
        use \Themosis\Forms\FormHelper;
        /**
         * @var FormInterface|FieldTypeInterface
         */
        protected $form;
        /**
         * @var DataMapperManager
         */
        protected $dataMapperManager;
        /**
         * DTO instance
         *
         * @var mixed
         */
        protected $dataClass;
        public function __construct(\Themosis\Forms\Contracts\FormInterface $form, \Themosis\Forms\DataMappers\DataMapperManager $dataMapperManager, $dataClass = null)
        {
        }
        /**
         * Validate the "options" used by a field instance.
         *
         *
         * @return array
         */
        protected function validateOptions(array $options, \Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Add a field to the current form instance.
         */
        public function add(\Themosis\Forms\Contracts\FieldTypeInterface $field) : \Themosis\Forms\Contracts\FormBuilderInterface
        {
        }
        /**
         * Return generated form instance.
         */
        public function get() : \Themosis\Forms\Contracts\FormInterface
        {
        }
    }
    class FormFactory implements \Themosis\Forms\Contracts\FormFactoryInterface
    {
        /**
         * @var ValidationFactoryInterface
         */
        protected $validation;
        /**
         * @var ViewFactoryInterface
         */
        protected $viewer;
        /**
         * @var Manager
         */
        protected $manager;
        /**
         * @var Factory
         */
        protected $factory;
        /**
         * Form generator/builder.
         *
         * @var FormBuilderInterface
         */
        protected $builder;
        /**
         * Form instances default attributes.
         *
         * @var array
         */
        protected $attributes = ['method' => 'post'];
        /**
         * Create a FormBuilderInterface instance.
         *
         * @param  mixed  $data    Data object (DTO).
         * @param  array  $options
         * @param  string  $builder A FieldBuilderInterface class.
         */
        public function make($data = null, $options = [], $builder = \Themosis\Forms\FormBuilder::class) : \Themosis\Forms\Contracts\FormBuilderInterface
        {
        }
        public function __construct(\Illuminate\Contracts\Validation\Factory $validation, \Illuminate\Contracts\View\Factory $viewer, \League\Fractal\Manager $manager, \Themosis\Forms\Resources\Factory $factory)
        {
        }
    }
    class FormServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Register our form service.
         */
        public function register()
        {
        }
        /**
         * Register the PHP League Fractal manager class.
         */
        protected function registerFractalManager()
        {
        }
        /**
         * Register form Blade directives.
         */
        public function boot()
        {
        }
    }
    class NullMessageBag implements \Illuminate\Contracts\Support\MessageBag
    {
        /**
         * {@inheritdoc}
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return array
         */
        public function keys()
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $key
         * @param  string  $message
         * @return $this|MessageBag
         */
        public function add($key, $message)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  array|\Illuminate\Contracts\Support\MessageProvider  $messages
         * @return $this|MessageBag
         */
        public function merge($messages)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  array|string  $key
         * @return bool
         */
        public function has($key)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  null  $key
         * @param  null  $format
         * @return null|string
         */
        public function first($key = null, $format = null)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $key
         * @param  null  $format
         * @return array
         */
        public function get($key, $format = null)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  null  $format
         * @return array
         */
        public function all($format = null)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return array
         */
        public function getMessages()
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return null|string
         */
        public function getFormat()
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $format
         * @return $this|MessageBag
         */
        public function setFormat($format = ':message')
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return bool
         */
        public function isEmpty()
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return bool
         */
        public function isNotEmpty()
        {
        }
        /**
         * {@inheritdoc}
         */
        public function count() : int
        {
        }
        /**
         * {@inheritdoc}
         */
        public function any() : bool
        {
        }
        /**
         * {@inheritdoc}
         *
         * @return $this|MessageBag
         */
        public function forget($key)
        {
        }
    }
}
namespace Themosis\Forms\Fields\Types {
    use Illuminate\Contracts\Support\MessageBag;
    use Illuminate\Contracts\View\Factory as ViewFactoryInterface;
    use League\Fractal\Manager;
    use League\Fractal\Resource\Item;
    use League\Fractal\Resource\ResourceInterface;
    use League\Fractal\Serializer\ArraySerializer;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Contracts\FormInterface;
    use Themosis\Forms\FormHelper;
    use Themosis\Forms\NullMessageBag;
    use Themosis\Forms\Resources\Factory;
    use Themosis\Html\HtmlBuilder;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Transformers\StringToBooleanTransformer;
    use Themosis\Core\Application;
    use Themosis\Forms\Contracts\CheckableInterface;
    use Themosis\Forms\Contracts\SelectableInterface;
    use Themosis\Forms\Fields\ChoiceList\ChoiceList;
    use Themosis\Forms\Fields\ChoiceList\ChoiceListInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Resources\Transformers\ChoiceFieldTransformer;
    use Themosis\Forms\Transformers\ChoiceToValueTransformer;
    use Themosis\Core\Application;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Resources\Transformers\CollectionFieldTransformer;
    use Themosis\Core\Application;
    use Themosis\Forms\Fields\Exceptions\NotSupportedFieldException;
    use Themosis\Forms\Fields\Exceptions\NotSupportedFieldException;
    use Themosis\Forms\Fields\Exceptions\NotSupportedFieldException;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Transformers\IntegerToLocalizedStringTransformer;
    use Themosis\Core\Application;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Fields\Exceptions\NotSupportedFieldException;
    use Themosis\Forms\Resources\Transformers\MediaFieldTransformer;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Transformers\NumberToLocalizedStringTransformer;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    abstract class BaseType extends \Themosis\Html\HtmlBuilder implements \ArrayAccess, \Countable, \Themosis\Forms\Contracts\FieldTypeInterface
    {
        use \Themosis\Forms\FormHelper;
        /**
         * List of options.
         *
         * @var array
         */
        protected $options = [];
        /**
         * List of allowed options.
         *
         * @var array
         */
        protected $allowedOptions = ['attributes', 'data', 'data_type', 'errors', 'flush', 'group', 'info', 'l10n', 'label', 'label_attr', 'mapped', 'messages', 'placeholder', 'rules', 'show_in_rest', 'theme'];
        /**
         * List of default options per field.
         *
         * @var array
         */
        protected $defaultOptions = ['attributes' => [], 'flush' => false, 'group' => 'default', 'info' => '', 'l10n' => [], 'label' => '', 'label_attr' => [], 'mapped' => true, 'messages' => [], 'rules' => '', 'show_in_rest' => false];
        /**
         * Field name prefix.
         * Applied automatically to avoid conflicts with core query variables.
         *
         * @var string
         */
        protected $prefix = 'th_';
        /**
         * The field basename.
         * Name property without the prefix as defined by the user.
         *
         * @var string
         */
        protected $baseName;
        /**
         * Field validation rules.
         *
         * @var string
         */
        protected $rules = '';
        /**
         * A list of custom error messages
         * by field rules.
         *
         * @var array
         */
        protected $messages = [];
        /**
         * A custom :attribute
         * placeholder value.
         *
         * @var string
         */
        protected $placeholder;
        /**
         * The field label display title.
         *
         * @var string
         */
        protected $label;
        /**
         * The form instance handling the field.
         *
         * @var FormInterface
         */
        protected $form;
        /**
         * Indicates if form is rendered.
         *
         * @var bool
         */
        protected $rendered = false;
        /**
         * @var ViewFactoryInterface
         */
        protected $viewFactory;
        /**
         * The field view.
         *
         * @var string
         */
        protected $view;
        /**
         * @var DataTransformerInterface
         */
        protected $transformer;
        /**
         * The "normalized" field value.
         *
         * @var mixed
         */
        protected $value;
        /**
         * @var string
         */
        protected $locale;
        /**
         * @var Manager
         */
        protected $manager;
        /**
         * @var string
         */
        protected $resourceTransformer = 'FieldTransformer';
        /**
         * Resource factory.
         *
         * @var Factory
         */
        protected $factory;
        /**
         * The field type.
         *
         * @var string
         */
        protected $type = 'input';
        /**
         * The JS component abstract name.
         *
         * @var string
         */
        protected $component;
        /**
         * BaseType constructor.
         */
        public function __construct(string $name)
        {
        }
        /**
         * Return the list of default options.
         */
        public function getDefaultOptions() : array
        {
        }
        /**
         * Return allowed options for the field.
         */
        public function getAllowedOptions() : array
        {
        }
        /**
         * Set field options.
         */
        public function setOptions(array $options) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Modify field options by extracting its 'l10n' property
         * and return it.
         *
         *
         * @return array
         */
        protected function handleLocalization(array &$options)
        {
        }
        /**
         * Parse and setup some default options if not set.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * Return field options.
         *
         * @param  array  $excludes
         */
        public function getOptions(array $excludes = null) : array
        {
        }
        /**
         * Return field options.
         *
         * @param  mixed  $default
         * @return string|array|null
         */
        public function getOption(string $key, $default = null)
        {
        }
        /**
         * Set the field prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the field prefix.
         */
        public function getPrefix() : string
        {
        }
        /**
         * Return the field theme.
         */
        public function getTheme() : string
        {
        }
        /**
         * Set the field theme.
         */
        public function setTheme(string $theme) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the field name property value.
         */
        public function getName() : string
        {
        }
        /**
         * Return the field basename.
         */
        public function getBaseName() : string
        {
        }
        /**
         * Return the field attributes.
         *
         * @return array
         */
        public function getAttributes()
        {
        }
        /**
         * Get the value of a defined attribute.
         *
         *
         * @return mixed
         */
        public function getAttribute(string $name)
        {
        }
        /**
         * Set the field attributes.
         *
         *
         * @return FieldTypeInterface
         */
        public function setAttributes(array $attributes)
        {
        }
        /**
         * Add an attribute to the field.
         *
         * @param  bool  $overwrite By default, it appends the value. Set to true, to replace the existing attribute value.
         */
        public function addAttribute(string $name, string $value, $overwrite = false) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Setup the form instance handling the field.
         */
        public function setForm(\Themosis\Forms\Contracts\FormInterface $form) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Set the field view factory instance.
         */
        public function setViewFactory(\Illuminate\Contracts\View\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Output the entity as HTML.
         */
        public function render() : string
        {
        }
        /**
         * Generate and get field data.
         */
        protected function getFieldData() : array
        {
        }
        /**
         * Pass custom data to the field view.
         *
         * @param  array|string  $key
         * @param  null  $value
         */
        public function with($key, $value = null) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Specify the view file to use by the form.
         */
        public function setView(string $view) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the view instance used by the entity.
         */
        public function getView(bool $prefixed = true) : string
        {
        }
        /**
         * Indicates if the entity has been rendered or not.
         */
        public function isRendered() : bool
        {
        }
        /**
         * Check if field is valid.
         */
        public function isValid() : bool
        {
        }
        /**
         * Check if field is not valid.
         */
        public function isNotValid() : bool
        {
        }
        /**
         * Set the field transformer.
         */
        public function setTransformer(\Themosis\Forms\Contracts\DataTransformerInterface $transformer) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Set the value property of the field.
         *
         * @param  array|string  $value
         */
        public function setValue($value, bool $shouldNotBypassTransformer = true) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Retrieve the field "normalized" value.
         *
         * @param  mixed  $default
         * @return mixed
         */
        public function getValue($default = null)
        {
        }
        /**
         * Retrieve the field "raw" value.
         *
         * @return mixed
         */
        public function getRawValue()
        {
        }
        /**
         * Set the field error message bag instance.
         *
         * @param  MessageBag  $messageBag
         * @return $this
         */
        public function setErrorMessageBag($messageBag)
        {
        }
        /**
         * Return the field error message bag instance.
         */
        public function errors() : \Illuminate\Contracts\Support\MessageBag
        {
        }
        /**
         * Retrieve the field error messages.
         *
         *
         * @return string|array
         */
        public function error(string $name = '', bool $first = false)
        {
        }
        /**
         * Return the field locale.
         */
        public function getLocale() : string
        {
        }
        /**
         * Set the field locale.
         */
        public function setLocale(string $locale) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the Fractal manager.
         */
        public function getManager() : \League\Fractal\Manager
        {
        }
        /**
         * Set the Fractal manager.
         */
        public function setManager(\League\Fractal\Manager $manager) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the transformer factory.
         */
        public function getResourceTransformerFactory() : \Themosis\Forms\Resources\Factory
        {
        }
        /**
         * Set the transformer factory.
         */
        public function setResourceTransformerFactory(\Themosis\Forms\Resources\Factory $factory) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the field resource transformer class name.
         */
        public function getResourceTransformer() : string
        {
        }
        /**
         * Define the Fractal resource used by the field.
         */
        protected function resource() : \League\Fractal\Resource\ResourceInterface
        {
        }
        /**
         * Define the serialization for the field resource.
         */
        protected function serialize() : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return an associative array representation of the field.
         */
        public function toArray() : array
        {
        }
        /**
         * Return a JSON representation of the field.
         */
        public function toJson() : string
        {
        }
        /**
         * Return the field type.
         */
        public function getType() : string
        {
        }
        /**
         * Return the field component name.
         */
        public function getComponent() : string
        {
        }
        /**
         * Whether a offset exists.
         *
         * @link http://php.net/manual/en/arrayaccess.offsetexists.php
         *
         * @param  mixed  $offset An offset to check for.
         * @return bool true on success or false on failure.
         *
         * @since 5.0.0
         */
        public function offsetExists($offset) : bool
        {
        }
        /**
         * Offset to retrieve
         *
         * @link http://php.net/manual/en/arrayaccess.offsetget.php
         *
         * @param  mixed  $offset The offset to retrieve.
         * @return mixed Can return all value types.
         *
         * @since 5.0.0
         */
        public function offsetGet($offset) : mixed
        {
        }
        /**
         * Offset to set
         *
         * @link http://php.net/manual/en/arrayaccess.offsetset.php
         *
         * @param  mixed  $offset The offset to assign the value to.
         * @param  mixed  $value  The value to set.
         *
         * @since 5.0.0
         */
        public function offsetSet($offset, $value) : void
        {
        }
        /**
         * Offset to unset
         *
         * @link http://php.net/manual/en/arrayaccess.offsetunset.php
         *
         * @param  mixed  $offset The offset to unset.
         *
         * @since 5.0.0
         */
        public function offsetUnset($offset) : void
        {
        }
        /**
         * Count elements of an object
         *
         * @link http://php.net/manual/en/countable.count.php
         *
         * @return int The custom count as an integer.
         *
         * @since 5.1.0
         */
        public function count() : int
        {
        }
    }
    class ButtonType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\DataTransformerInterface
    {
        /**
         * ButtonType field view.
         *
         * @var string
         */
        protected $view = 'types.button';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'button';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.button';
        /**
         * Get default button options.
         */
        public function getDefaultOptions() : array
        {
        }
        /**
         * Parse field options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $data
         * @return string
         */
        public function reverseTransform($data)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $data
         * @return string
         */
        public function transform($data)
        {
        }
    }
    class CheckboxType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * CheckboxType field view.
         *
         * @var string
         */
        protected $view = 'types.checkbox';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'checkbox';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.checkbox';
        /**
         * Parse field options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $value
         */
        public function setValue($value, bool $shouldNotBypassTransformer = true) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Handle checkbox field post meta registration.
         *
         * @param  mixed  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize the checkbox field post meta value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  array|string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class ChoiceType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\CheckableInterface, \Themosis\Forms\Contracts\SelectableInterface, \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * Field layout.
         *
         * @var string
         */
        protected $layout = 'select';
        /**
         * ChoiceType field view.
         *
         * @var string
         */
        protected $view = 'types.choice';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'choice';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.choice';
        /**
         * The choice field resource transformer.
         *
         * @var string
         */
        protected $resourceTransformer = \Themosis\Forms\Resources\Transformers\ChoiceFieldTransformer::class;
        public function __construct(string $name)
        {
        }
        /**
         * Define the field allowed options.
         */
        protected function setAllowedOptions() : array
        {
        }
        /**
         * Define the field default options values.
         */
        protected function setDefaultOptions() : array
        {
        }
        /**
         * Parse and setup some default options if not set.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * Set the field layout option.
         *
         * @param  bool  $expanded
         * @param  bool  $multiple
         * @return $this
         */
        protected function setLayout($expanded = false, $multiple = false)
        {
        }
        /**
         * Return choice type field options.
         */
        public function getOptions(array $excludes = null) : array
        {
        }
        /**
         * Retrieve the field layout.
         *
         * @return string
         */
        public function getLayout()
        {
        }
        /**
         * {@inheritdoc}
         */
        public function checked(callable $callback, array $args) : string
        {
        }
        /**
         * {@inheritdoc}
         */
        public function selected(callable $callback, array $args) : string
        {
        }
        /**
         * Handle metabox field value registration.
         *
         * @param  string|array  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize metabox field value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Save a single value.
         *
         * @param  string  $value
         */
        protected function saveSingleValue($value, int $post_id)
        {
        }
        /**
         * Save multiple values.
         *
         * @param  array  $value
         */
        protected function saveMultipleValue($value, int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string|array  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field single term meta registration.
         *
         * @param  string  $value
         */
        protected function saveTermSingleValue($value, int $term_id)
        {
        }
        /**
         * Handle field multiple term meta registration.
         */
        protected function saveTermMultipleValue($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  array|string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Handle field user meta single data registration.
         *
         * @param  string  $value
         */
        protected function saveUserSingleValue($value, int $user_id)
        {
        }
        /**
         * Handle field user meta multiple data registration.
         *
         * @param  array  $value
         */
        protected function saveUserMultipleValue($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    /**
     * Class CollectionType
     */
    class CollectionType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\DataTransformerInterface, \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings
    {
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'collection';
        /**
         * Field component.
         *
         * @var string
         */
        protected $component = 'themosis.fields.collection';
        /**
         * Resource transformer class.
         *
         * @var string
         */
        protected $resourceTransformer = \Themosis\Forms\Resources\Transformers\CollectionFieldTransformer::class;
        public function __construct(string $name)
        {
        }
        /**
         * Set field allowed options.
         */
        protected function setAllowedOptions() : array
        {
        }
        /**
         * Set field default options values.
         */
        protected function setDefaultOptions() : array
        {
        }
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  array  $data
         * @return array
         */
        public function transform($data)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  array  $data
         * @return array
         */
        public function reverseTransform($data)
        {
        }
        /**
         * Handle collection field post meta registration.
         *
         * @param  array  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize collection field post meta value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class TextType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\DataTransformerInterface, \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * TextType field view.
         *
         * @var string
         */
        protected $view = 'types.text';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'text';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.text';
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $data
         * @return string
         */
        public function transform($data)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $data
         * @return string
         */
        public function reverseTransform($data)
        {
        }
        /**
         * Initialize text field post meta value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle text field post meta registration.
         *
         * @param  string  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Handle text field term meta registration.
         *
         * @param  string  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle text field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class ColorType extends \Themosis\Forms\Fields\Types\TextType
    {
        /**
         * Color field view.
         *
         * @var string
         */
        protected $view = 'types.text';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'color';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.color';
        public function __construct(string $name)
        {
        }
        /**
         * Define the field allowed options.
         *
         * @return array
         */
        protected function setAllowedOptions()
        {
        }
        /**
         * Define the field default options values.
         *
         * @return array
         */
        protected function setDefaultOptions()
        {
        }
        /**
         * Return a list of default colors for the field.
         *
         * @return array
         */
        protected function getDefaultColors()
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed
         *
         * @throws NotSupportedFieldException
         */
        public function settingGet()
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function userSave($value, int $user_id)
        {
        }
    }
    class TextareaType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\DataTransformerInterface, \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * TextareaType field view.
         *
         * @var string
         */
        protected $view = 'types.textarea';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'textarea';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.textarea';
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $data
         * @return string
         */
        public function transform($data)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $data
         * @return string
         */
        public function reverseTransform($data)
        {
        }
        /**
         * Initialize textarea field post meta value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle textarea field post meta registration.
         *
         * @param  string  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class EditorType extends \Themosis\Forms\Fields\Types\TextareaType
    {
        /**
         * Field view.
         *
         * @var string
         */
        protected $view = 'types.editor';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'editor';
        /**
         * Field component.
         *
         * @var string
         */
        protected $component = 'themosis.fields.editor';
        public function __construct(string $name)
        {
        }
        /**
         * Return field allowed options.
         */
        protected function setAllowedOptions() : array
        {
        }
        /**
         * Return field default options values.
         */
        protected function setDefaultOptions() : array
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function termGet(int $term_id)
        {
        }
    }
    class EmailType extends \Themosis\Forms\Fields\Types\TextType
    {
        /**
         * EmailType field view.
         *
         * @var string
         */
        protected $view = 'types.email';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'email';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.email';
    }
    class HiddenType extends \Themosis\Forms\Fields\Types\TextType
    {
        /**
         * HiddenType field view.
         *
         * @var string
         */
        protected $view = 'types.hidden';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'hidden';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.hidden';
        /**
         * Handle hidden field post meta registration.
         * We do not allow registration as this is a read-only field.
         *
         * @param  string  $value
         * @return null|void
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function userSave($value, int $user_id)
        {
        }
    }
    class IntegerType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * IntegerType field view.
         *
         * @var string
         */
        protected $view = 'types.number';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'integer';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.integer';
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * Handle integer field post meta registration.
         *
         * @param  string  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize the integer field value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  array|string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class MediaType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Contracts\DataTransformerInterface, \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'media';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.media';
        /**
         * The resource transformer class.
         *
         * @var string
         */
        protected $resourceTransformer = \Themosis\Forms\Resources\Transformers\MediaFieldTransformer::class;
        public function __construct(string $name)
        {
        }
        /**
         * Define the field allowed options.
         */
        protected function setAllowedOptions() : array
        {
        }
        /**
         * Define the field default options values.
         */
        protected function setDefaultOptions() : array
        {
        }
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string|null  $data
         * @return int|string
         */
        public function transform($data)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  string  $data
         * @return int|string
         */
        public function reverseTransform($data)
        {
        }
        /**
         * Handle media field post meta registration.
         *
         * @param  string|int  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize media field value on a metabox context.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         *
         *
         * @throws NotSupportedFieldException
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  array|string  $value
         *
         * @throws NotSupportedFieldException
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed
         *
         * @throws NotSupportedFieldException
         */
        public function settingGet()
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
    }
    class NumberType extends \Themosis\Forms\Fields\Types\BaseType implements \Themosis\Forms\Fields\Contracts\CanHandleMetabox, \Themosis\Forms\Fields\Contracts\CanHandlePageSettings, \Themosis\Forms\Fields\Contracts\CanHandleTerms, \Themosis\Forms\Fields\Contracts\CanHandleUsers
    {
        /**
         * NumberType field view.
         *
         * @var string
         */
        protected $view = 'types.number';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'number';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.number';
        public function __construct(string $name)
        {
        }
        /**
         * Set field specific allowed options.
         */
        protected function setAllowedOptions() : array
        {
        }
        /**
         * Set field options default values.
         */
        protected function setDefaultOptions() : array
        {
        }
        /**
         * Parse and setup default options.
         */
        protected function parseOptions(array $options) : array
        {
        }
        /**
         * Handle metabox post meta registration.
         *
         * @param  mixed  $value
         */
        public function metaboxSave($value, int $post_id)
        {
        }
        /**
         * Initialize metabox post meta value.
         */
        public function metaboxGet(int $post_id)
        {
        }
        /**
         * Handle field term meta registration.
         *
         * @param  string  $value
         */
        public function termSave($value, int $term_id)
        {
        }
        /**
         * Handle field term meta initial value.
         */
        public function termGet(int $term_id)
        {
        }
        /**
         * Handle field user meta initial value.
         */
        public function userGet(int $user_id)
        {
        }
        /**
         * Handle field user meta registration.
         *
         * @param  string  $value
         */
        public function userSave($value, int $user_id)
        {
        }
        /**
         * Save the field setting value.
         *
         * @param  mixed  $value
         */
        public function settingSave($value, string $name)
        {
        }
        /**
         * Return the field setting value.
         *
         * @return mixed|void
         */
        public function settingGet()
        {
        }
    }
    class PasswordType extends \Themosis\Forms\Fields\Types\TextType
    {
        /**
         * PasswordType field view.
         *
         * @var string
         */
        protected $view = 'types.password';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'password';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.password';
    }
    class SubmitType extends \Themosis\Forms\Fields\Types\ButtonType
    {
        /**
         * SubmitType field view.
         *
         * @var string
         */
        protected $view = 'types.submit';
        /**
         * Field type.
         *
         * @var string
         */
        protected $type = 'submit';
        /**
         * The component name.
         *
         * @var string
         */
        protected $component = 'themosis.fields.submit';
    }
}
namespace Themosis\Forms\Resources {
    use League\Fractal\TransformerAbstract;
    class Factory
    {
        /**
         * Return a resource transformer instance.
         *
         *
         * @return TransformerAbstract
         */
        public function make($className)
        {
        }
    }
}
namespace Themosis\Forms\Resources\Transformers {
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use League\Fractal\TransformerAbstract;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use League\Fractal\TransformerAbstract;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Contracts\FormInterface;
    use Themosis\Forms\Resources\Factory;
    use League\Fractal\TransformerAbstract;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    class FieldTransformer extends \League\Fractal\TransformerAbstract
    {
        protected array $excludedOptions = ['attributes', 'data', 'data_type', 'errors', 'flush', 'label', 'label_attr', 'mapped', 'messages', 'placeholder', 'rules', 'show_in_rest', 'theme'];
        /**
         * Transform single field.
         *
         *
         * @return array
         */
        public function transform(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Return field options.
         *
         *
         * @return array
         */
        protected function getOptions(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
    }
    class ChoiceFieldTransformer extends \Themosis\Forms\Resources\Transformers\FieldTransformer
    {
        /**
         * Return choice field options.
         *
         *
         * @return array
         */
        protected function getOptions(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Parse field choices.
         *
         *
         * @return array
         */
        protected function parseChoices(array $choices)
        {
        }
    }
    class CollectionFieldTransformer extends \Themosis\Forms\Resources\Transformers\FieldTransformer
    {
        /**
         * Transform field options.
         *
         *
         * @return array
         */
        protected function getOptions(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
    }
    class FormTransformer extends \League\Fractal\TransformerAbstract
    {
        protected array $defaultIncludes = ['fields', 'groups'];
        /**
         * Transform single form.
         *
         *
         * @return array
         */
        public function transform(\Themosis\Forms\Contracts\FieldTypeInterface $form)
        {
        }
        /**
         * Include "fields" property to resource.
         *
         *
         * @return \League\Fractal\Resource\Collection
         */
        public function includeFields(\Themosis\Forms\Contracts\FieldTypeInterface $form)
        {
        }
        /**
         * Include "groups" property to resource.
         *
         *
         * @return \League\Fractal\Resource\Collection
         */
        public function includeGroups(\Themosis\Forms\Contracts\FieldTypeInterface $form)
        {
        }
    }
    class GroupTransformer extends \League\Fractal\TransformerAbstract
    {
        public function transform(\Themosis\Support\Contracts\SectionInterface $group)
        {
        }
    }
    class MediaFieldTransformer extends \Themosis\Forms\Resources\Transformers\FieldTransformer
    {
        /**
         * Return media field options.
         *
         *
         * @return array
         */
        protected function getOptions(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
    }
}
namespace Themosis\Forms\Transformers {
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Transformers\Exceptions\DataTransformerException;
    use Themosis\Forms\Contracts\DataTransformerInterface;
    use Themosis\Forms\Transformers\Exceptions\DataTransformerException;
    class ChoiceToValueTransformer implements \Themosis\Forms\Contracts\DataTransformerInterface
    {
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $data
         * @return mixed
         */
        public function transform($data)
        {
        }
        /**
         * Parse if a value is numeric and cast it
         * to its correct type.
         *
         * @param  mixed  $value
         * @return float|int|mixed
         */
        protected function parseNumeric($value)
        {
        }
        /**
         * {@inheritdoc}
         *
         * @param  mixed  $data
         * @return mixed
         */
        public function reverseTransform($data)
        {
        }
    }
    class NumberToLocalizedStringTransformer implements \Themosis\Forms\Contracts\DataTransformerInterface
    {
        /**
         * Formatter locale.
         *
         * @var string
         */
        protected $locale;
        /**
         * @var FieldTypeInterface
         */
        protected $field;
        public function __construct(string $locale, \Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Convert a numeric value to a localized string.
         *
         * @param  int|float  $data
         * @return string
         *
         * @throws DataTransformerException
         */
        public function transform($data)
        {
        }
        /**
         * Convert a localized string to a numeric value.
         *
         * @param  string  $data
         * @return int|float
         *
         * @throws DataTransformerException
         */
        public function reverseTransform($data)
        {
        }
        /**
         * Retrieve a NumberFormatter instance.
         *
         * @return \NumberFormatter
         */
        protected function getFormatter()
        {
        }
    }
    class IntegerToLocalizedStringTransformer extends \Themosis\Forms\Transformers\NumberToLocalizedStringTransformer
    {
        /**
         * Convert a localized string to an integer value.
         *
         * @param  string  $data
         * @return int
         *
         * @throws Exceptions\DataTransformerException
         */
        public function reverseTransform($data)
        {
        }
    }
    class StringToBooleanTransformer implements \Themosis\Forms\Contracts\DataTransformerInterface
    {
        /**
         * Convert a string to a boolean value.
         *
         * @param  string  $data
         * @return bool
         *
         * @throws DataTransformerException
         */
        public function transform($data)
        {
        }
        /**
         * Convert a boolean to a string value.
         *
         * @param  bool  $data
         * @return string
         */
        public function reverseTransform($data)
        {
        }
    }
}
namespace Themosis\Forms\Transformers\Exceptions {
    use Exception;
    class DataTransformerException extends \Exception
    {
    }
}
namespace Themosis\Hook {
    use BadMethodCallException;
    use Illuminate\Contracts\Foundation\Application;
    use Illuminate\Support\Str;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Contracts\Foundation\Application;
    interface IHook
    {
        /**
         * Add event using the WordPress hooks.
         *
         * @param  string|array  $hooks         The hook name.
         * @param  \Closure|string|array  $callback      Using a class method like so "MyClass@method"
         * @param  int  $priority
         * @param  int  $accepted_args
         * @return mixed
         */
        public function add($hooks, $callback, $priority = 10, $accepted_args = 2);
        /**
         * Run all events registered with the hook.
         *
         * @param  string  $hook The event hook name.
         * @param  mixed  $args
         * @return mixed
         */
        public function run($hook, $args = null);
        /**
         * Check if a registered hook exists.
         *
         * @param  string  $hook
         * @return bool
         */
        public function exists($hook);
        /**
         * Return the callback registered with the given hook.
         *
         * @param  string  $hook The hook name.
         * @return array|bool
         */
        public function getCallback($hook);
        /**
         * Remove a defined action or filter.
         *
         * @param  string  $hook     The hook name.
         * @param  \Closure|string  $callback The callback to remove.
         * @param  int  $priority The priority number.
         * @return mixed
         */
        public function remove($hook, $callback = null, $priority = 10);
    }
    abstract class Hook implements \Themosis\Hook\IHook
    {
        /**
         * @var Application
         */
        protected $container;
        /**
         * List of registered hooks.
         *
         * @var array
         */
        protected $hooks = [];
        /**
         * Hook constructor.
         */
        public function __construct(\Illuminate\Contracts\Foundation\Application $container)
        {
        }
        /**
         * Wrapper of the "add_action" or "add_filter" functions. Allows
         * a developer to specify a controller class or closure.
         *
         * @param  string|array  $hooks         The action hook name.
         * @param  \Closure|string|array  $callback      The action hook callback instance.
         * @param  int  $priority      The priority order for this action.
         * @param  int  $accepted_args Default number of accepted arguments.
         * @return $this
         *
         * @throws BadMethodCallException
         */
        public function add($hooks, $callback, $priority = 10, $accepted_args = 3)
        {
        }
        /**
         * Check if a registered hook exists.
         *
         * @param  string  $hook
         * @return bool
         */
        public function exists($hook)
        {
        }
        /**
         * Remove a registered action or filter.
         *
         * @param  string  $hook
         * @param  \Closure|string  $callback
         * @param  int  $priority
         * @return mixed The Hook instance or false.
         */
        public function remove($hook, $callback = null, $priority = 10)
        {
        }
        /**
         * Return the callback registered with the hook.
         *
         * @param  string  $hook The hook name.
         * @return array|null
         */
        public function getCallback($hook)
        {
        }
        /**
         * Remove hook (filter and or action).
         *
         * @param  string  $hook
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         */
        protected function removeAction($hook, $callback, $priority)
        {
        }
        /**
         * Add an event for the specified hook.
         *
         * @param  string  $hook          The hook name.
         * @param  \Closure|string|array  $callback      The hook callback instance.
         * @param  int  $priority      The priority order.
         * @param  int  $accepted_args The default number of accepted arguments.
         * @return \Closure|array|string
         *
         * @throws BadMethodCallException
         */
        protected function addHookEvent($hook, $callback, $priority, $accepted_args)
        {
        }
        /**
         * Prepare the hook callback for use in a class method.
         *
         * @param  string  $hook
         * @param  string  $class
         * @param  int  $priority
         * @param  int  $accepted_args
         * @return array
         *
         * @throws BadMethodCallException
         */
        protected function addClassEvent($hook, $class, $priority, $accepted_args)
        {
        }
        /**
         * Build the array in order to call a class method.
         *
         * @param  string  $class
         * @param  string  $hook
         * @return array
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function buildClassEventCallback($class, $hook)
        {
        }
        /**
         * Parse a class name and returns its name and its method.
         *
         * @param  string  $class
         * @param  string  $hook
         * @return array
         */
        protected function parseClassEvent($class, $hook)
        {
        }
        /**
         * Add an event for the specified hook.
         *
         * @param  string  $name
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         * @param  int  $accepted_args
         *
         * @throws BadMethodCallException
         */
        protected function addEventListener($name, $callback, $priority, $accepted_args)
        {
        }
    }
    class ActionBuilder extends \Themosis\Hook\Hook
    {
        /**
         * Run all actions registered with the hook.
         *
         * @param  string  $hook The action hook name.
         * @param  mixed  $args
         * @return $this
         */
        public function run($hook, $args = null)
        {
        }
        /**
         * Call a single action hook.
         *
         * @param  string  $hook The hook name.
         * @param  mixed  $args Arguments passed to the hook.
         */
        protected function doAction($hook, $args)
        {
        }
        /**
         * Call a single action hook with arguments as an array.
         *
         * @param  string  $hook The hook name.
         * @param  array  $args Arguments passed as an array to the hook.
         */
        protected function doActionRefArray($hook, array $args)
        {
        }
        /**
         * Add an action event for the specified hook.
         *
         * @param  string  $name
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         * @param  int  $accepted_args
         */
        protected function addEventListener($name, $callback, $priority, $accepted_args)
        {
        }
        /**
         * Calls the WordPress add_action function to listen on a hook event.
         *
         * @param  string  $name
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         * @param  int  $accepted_args
         */
        protected function addAction($name, $callback, $priority, $accepted_args)
        {
        }
    }
    class FilterBuilder extends \Themosis\Hook\Hook
    {
        /**
         * Run all filters registered with the hook.
         *
         * @param  string  $hook The filter hook name.
         * @param  mixed  $args
         * @return mixed
         */
        public function run($hook, $args = null)
        {
        }
        /**
         * Call a filter hook with data as an array.
         *
         * @param  string  $hook The hook name.
         * @param  array  $args Filter data passed with the hook as an array.
         * @return mixed
         */
        protected function applyFiltersRefArray($hook, array $args)
        {
        }
        /**
         * Call a filter hook.
         *
         * @param  string  $hook The hook name.
         * @param  mixed  $args Filter data passed with the hook.
         * @return mixed
         */
        protected function applyFilters($hook, $args)
        {
        }
        /**
         * Add a filter event for the specified hook.
         *
         * @param  string  $name
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         * @param  int  $accepted_args
         */
        protected function addEventListener($name, $callback, $priority, $accepted_args)
        {
        }
        /**
         * Calls the WordPress add_filter function in order to listen to a filter hook.
         *
         * @param  string  $name
         * @param  \Closure|string|array  $callback
         * @param  int  $priority
         * @param  int  $accepted_args
         */
        protected function addFilter($name, $callback, $priority, $accepted_args)
        {
        }
    }
    class HookServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
    class Hookable
    {
        /**
         * @var Application
         */
        protected $app;
        /**
         * @var string|array
         */
        public $hook;
        /**
         * @var int
         */
        public $priority = 10;
        public function __construct(\Illuminate\Contracts\Foundation\Application $app)
        {
        }
    }
}
namespace Themosis\Metabox\Contracts {
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Metabox\Resources\MetaboxResourceInterface;
    use Themosis\Support\Contracts\SectionInterface;
    use Illuminate\Http\Request;
    interface MetaboxInterface
    {
        /**
         * Return the metabox id.
         */
        public function getId() : string;
        /**
         * Set the metabox title.
         */
        public function setTitle(string $title) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox title.
         */
        public function getTitle() : string;
        /**
         * Set the metabox screen.
         *
         * @param string|array|\WP_Screen
         * @param  mixed  $screen
         */
        public function setScreen($screen) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox screen.
         *
         * @return string|array|\WP_Screen
         */
        public function getScreen();
        /**
         * Set the metabox context.
         */
        public function setContext(string $context) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Get the metabox context.
         */
        public function getContext() : string;
        /**
         * Set the metabox priority.
         */
        public function setPriority(string $priority) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Get the metabox priority.
         */
        public function getPriority() : string;
        /**
         * Set the metabox callback.
         *
         * @param  string|callable  $callback
         */
        public function setCallback($callback) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox callback.
         *
         * @return string|callable|array
         */
        public function getCallback();
        /**
         * Set the metabox controller arguments.
         */
        public function setArguments(array $args) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox arguments.
         */
        public function getArguments() : array;
        /**
         * Set the metabox layout.
         */
        public function setLayout(string $layout) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox layout.
         */
        public function getLayout() : string;
        /**
         * Set the metabox for display.
         */
        public function set() : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Set the metabox resource abstraction layer/manager.
         */
        public function setResource(\Themosis\Metabox\Resources\MetaboxResourceInterface $resource) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox resource manager.
         */
        public function getResource() : \Themosis\Metabox\Resources\MetaboxResourceInterface;
        /**
         * Return the metabox as an array resource.
         */
        public function toArray() : array;
        /**
         * Return the metabox as a JSON resource.
         */
        public function toJson() : string;
        /**
         * Set the metabox locale.
         */
        public function setLocale(string $locale) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox locale.
         */
        public function getLocale() : string;
        /**
         * Set the metabox prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox prefix.
         */
        public function getPrefix() : string;
        /**
         * Return the metabox fields repository instance.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface;
        /**
         * Add a field or section of fields to the metabox.
         *
         * @param  FieldTypeInterface|SectionInterface  $field
         * @param  SectionInterface  $section
         */
        public function add($field, \Themosis\Support\Contracts\SectionInterface $section = null) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox translations.
         */
        public function getTranslations() : array;
        /**
         * Return the translation if exists.
         */
        public function getTranslation(string $key) : string;
        /**
         * Add metabox translation.
         */
        public function addTranslation(string $key, string $translation) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Set the metabox capability.
         */
        public function setCapability(string $cap) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox capability.
         */
        public function getCapability() : string;
        /**
         * Set the metabox template.
         *
         * @param  string|array  $template
         */
        public function setTemplate($template, string $screen = 'page') : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Return the metabox template.
         */
        public function getTemplate() : array;
    }
    interface MetaboxManagerInterface
    {
        /**
         * Handle metabox initialization.
         * Initialize metabox fields values.
         */
        public function getFields(\Themosis\Metabox\Contracts\MetaboxInterface $metabox, \Illuminate\Http\Request $request) : \Themosis\Metabox\Contracts\MetaboxInterface;
        /**
         * Handle metabox post meta save.
         */
        public function saveFields(\Themosis\Metabox\Contracts\MetaboxInterface $metabox, \Illuminate\Http\Request $request) : \Themosis\Metabox\Contracts\MetaboxInterface;
    }
}
namespace Themosis\Metabox\Controllers {
    use Illuminate\Http\Exceptions\HttpResponseException;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Themosis\Metabox\Contracts\MetaboxManagerInterface;
    class MetaboxApiController
    {
        /**
         * @var MetaboxManagerInterface
         */
        protected $manager;
        public function __construct(\Themosis\Metabox\Contracts\MetaboxManagerInterface $manager)
        {
        }
        /**
         * GET /metabox/{id} API route
         *
         * @param  string  $id      The metabox unique ID.
         * @return JsonResponse
         */
        public function show(\Illuminate\Http\Request $request, $id)
        {
        }
        /**
         * PUT /metabox/{id} API route
         * Handle metabox fields update/save data.
         *
         * @param  string  $id      The metabox unique ID.
         * @return JsonResponse
         */
        public function update(\Illuminate\Http\Request $request, $id)
        {
        }
    }
}
namespace Themosis\Metabox {
    use Themosis\Core\Application;
    use Themosis\Forms\Fields\FieldsRepository;
    use Themosis\Hook\IHook;
    use Themosis\Metabox\Contracts\MetaboxInterface;
    use Themosis\Metabox\Resources\MetaboxResourceInterface;
    use Illuminate\Contracts\Validation\Factory as ValidationFactory;
    use Illuminate\Http\Request;
    use Illuminate\Support\Collection;
    use Illuminate\Validation\Validator;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleMetabox;
    use Themosis\Forms\Fields\Types\BaseType;
    use Themosis\Metabox\Contracts\MetaboxInterface;
    use Themosis\Metabox\Contracts\MetaboxManagerInterface;
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Support\Renderable;
    use Symfony\Component\HttpFoundation\Response;
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Hook\IHook;
    use Themosis\Metabox\Contracts\MetaboxInterface;
    use Themosis\Metabox\Resources\MetaboxResourceInterface;
    use Themosis\Support\CallbackHandler;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Support\Section;
    use Exception;
    use Themosis\Core\Support\Providers\RouteServiceProvider;
    use Themosis\Support\Facades\Route;
    use Illuminate\Support\ServiceProvider;
    use League\Fractal\Manager;
    use League\Fractal\Serializer\ArraySerializer;
    use Themosis\Metabox\Resources\MetaboxResource;
    use Themosis\Metabox\Resources\Transformers\MetaboxTransformer;
    class Factory
    {
        /**
         * @var Application
         */
        protected $container;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var MetaboxResourceInterface
         */
        protected $resource;
        public function __construct(\Themosis\Core\Application $container, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Themosis\Metabox\Resources\MetaboxResourceInterface $resource)
        {
        }
        /**
         * Create a new metabox instance.
         *
         * @param  string|array|\WP_Screen  $screen
         *
         * @throws MetaboxException
         */
        public function make(string $id, $screen = 'post') : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Format a default title based on given name.
         */
        protected function setDefaultTitle(string $name) : string
        {
        }
        /**
         * Set metabox translations strings.
         *
         *
         * @return $this
         */
        protected function setMetaboxTranslations(\Themosis\Metabox\Contracts\MetaboxInterface $metabox)
        {
        }
    }
    class Manager implements \Themosis\Metabox\Contracts\MetaboxManagerInterface
    {
        /**
         * @var ValidationFactory
         */
        protected $factory;
        public function __construct(\Illuminate\Contracts\Validation\Factory $factory)
        {
        }
        /**
         * Handle metabox initialization.
         * Set the metabox fields value and return the metabox instance.
         */
        public function getFields(\Themosis\Metabox\Contracts\MetaboxInterface $metabox, \Illuminate\Http\Request $request) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Handle metabox post meta save.
         *
         *
         * @throws MetaboxException
         */
        public function saveFields(\Themosis\Metabox\Contracts\MetaboxInterface $metabox, \Illuminate\Http\Request $request) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox data for validation.
         *
         *
         * @return array
         */
        protected function getMetaboxData(\Illuminate\Support\Collection $fields)
        {
        }
        /**
         * Return the metabox rules for validation.
         *
         *
         * @return array
         */
        protected function getMetaboxRules(array $fields)
        {
        }
        /**
         * Return the metabox validation messages.
         *
         *
         * @return array
         */
        protected function getMetaboxMessages(array $fields)
        {
        }
        /**
         * Return the metabox messages placeholders.
         *
         *
         * @return array
         */
        protected function getMetaboxPlaceholders(array $fields)
        {
        }
    }
    class Metabox implements \Themosis\Metabox\Contracts\MetaboxInterface
    {
        use \Themosis\Support\CallbackHandler;
        /**
         * @var string
         */
        protected $id;
        /**
         * @var string
         */
        protected $title;
        /**
         * @var string|array|\WP_Screen
         */
        protected $screen;
        /**
         * @var string
         */
        protected $context;
        /**
         * @var string
         */
        protected $priority;
        /**
         * @var string|callable
         */
        protected $callback;
        /**
         * @var array
         */
        protected $args;
        /**
         * @var string
         */
        protected $layout;
        /**
         * @var Container
         */
        protected $container;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var MetaboxResourceInterface
         */
        protected $resource;
        /**
         * @var FieldsRepositoryInterface
         */
        protected $repository;
        /**
         * @var string
         */
        protected $locale;
        /**
         * @var string
         */
        protected $prefix = 'th_';
        /**
         * @var array
         */
        protected $l10n;
        /**
         * @var string
         */
        protected $capability;
        /**
         * @var array
         */
        protected $template;
        public function __construct(string $id, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Themosis\Forms\Contracts\FieldsRepositoryInterface $repository)
        {
        }
        /**
         * Return the metabox id.
         */
        public function getId() : string
        {
        }
        /**
         * Set the metabox title.
         */
        public function setTitle(string $title) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox title.
         */
        public function getTitle() : string
        {
        }
        /**
         * Set the metabox screen.
         *
         * @param  string|array|\WP_Screen  $screen
         */
        public function setScreen($screen) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox screen.
         *
         * @return array|string|\WP_Screen
         */
        public function getScreen()
        {
        }
        /**
         * Set the metabox context.
         */
        public function setContext(string $context) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox context.
         */
        public function getContext() : string
        {
        }
        /**
         * Set the metabox priority.
         */
        public function setPriority(string $priority) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox priority.
         */
        public function getPriority() : string
        {
        }
        /**
         * Set the metabox callback.
         *
         * @param  callable|string  $callback
         */
        public function setCallback($callback) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox callback.
         * If the user has not defined its own callback, we
         * use our core implementation.
         *
         * @return callable|string|array
         */
        public function getCallback()
        {
        }
        /**
         * Set the metabox callback arguments.
         */
        public function setArguments(array $args) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox callback arguments.
         */
        public function getArguments() : array
        {
        }
        /**
         * Set the metabox layout.
         */
        public function setLayout(string $layout) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox layout.
         */
        public function getLayout() : string
        {
        }
        /**
         * Set the metabox for display.
         */
        public function set() : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Handle "add_meta_boxes" hook and display the metabox.
         *
         * @param  string  $post_type
         * @param  \WP_Post  $post
         */
        public function display($post_type, $post)
        {
        }
        /**
         * Render the metabox.
         */
        public function render(\WP_Post $post, array $args)
        {
        }
        /**
         * Core framework metabox management. Default callback.
         */
        public function handle(array $args)
        {
        }
        /**
         * Set the metabox resource abstraction layer/manager.
         */
        public function setResource(\Themosis\Metabox\Resources\MetaboxResourceInterface $resource) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox resource manager.
         */
        public function getResource() : \Themosis\Metabox\Resources\MetaboxResourceInterface
        {
        }
        /**
         * Return the metabox as an array resource.
         */
        public function toArray() : array
        {
        }
        /**
         * Return the metabox as a JSON resource.
         */
        public function toJson() : string
        {
        }
        /**
         * Set the metabox locale.
         */
        public function setLocale(string $locale) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox locale.
         */
        public function getLocale() : string
        {
        }
        /**
         * Set the metabox prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox prefix.
         */
        public function getPrefix() : string
        {
        }
        /**
         * Return the metabox fields repository instance.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface
        {
        }
        /**
         * Add a field to the metabox.
         *
         * @param  FieldTypeInterface|SectionInterface  $field
         * @param  SectionInterface  $section
         */
        public function add($field, \Themosis\Support\Contracts\SectionInterface $section = null) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return metabox all translations.
         */
        public function getTranslations() : array
        {
        }
        /**
         * Return the translation based on given key.
         * Return empty string if not defined.
         */
        public function getTranslation(string $key) : string
        {
        }
        /**
         * Add metabox translation.
         */
        public function addTranslation(string $key, string $translation) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Set the metabox capability.
         */
        public function setCapability(string $cap) : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox capability.
         */
        public function getCapability() : string
        {
        }
        /**
         * Set the metabox template.
         *
         * @param  array|string  $template
         */
        public function setTemplate($template, string $screen = 'page') : \Themosis\Metabox\Contracts\MetaboxInterface
        {
        }
        /**
         * Return the metabox template.
         */
        public function getTemplate() : array
        {
        }
    }
    class MetaboxException extends \Exception
    {
    }
    class MetaboxRoutingServiceProvider extends \Themosis\Core\Support\Providers\RouteServiceProvider
    {
        public function boot()
        {
        }
        /**
         * Register the metabox API routes.
         */
        public function map()
        {
        }
    }
    class MetaboxServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Defer metabox factory.
         *
         * @var bool
         */
        protected $defer = true;
        public function register()
        {
        }
        /**
         * Register the metabox factory.
         */
        public function registerMetabox()
        {
        }
        /**
         * Register the metabox manager interface.
         */
        public function registerMetaboxInterface()
        {
        }
        /**
         * Return list of registered bindings.
         *
         * @return array
         */
        public function provides()
        {
        }
    }
}
namespace Themosis\Support {
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Support\Str;
    use Countable;
    use Iterator;
    use Themosis\Support\Contracts\SectionInterface;
    trait CallbackHandler
    {
        /**
         * @var Container
         */
        protected $container;
        /**
         * Set the instance container.
         *
         *
         * @return $this
         */
        public function setContainer(\Illuminate\Contracts\Container\Container $container)
        {
        }
        /**
         * Handle the callback to execute.
         *
         * @param  string|array|callable  $callback
         * @return mixed|string
         */
        protected function handleCallback($callback, array $args = [], bool $asArray = true)
        {
        }
        /**
         * Handle a class callback using "ClassName@method" syntax
         *
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         */
        protected function handleClassCallback(string $callback) : array
        {
        }
        /**
         * Return an array with the class name and its method.
         */
        protected function parseCallback(string $callback) : array
        {
        }
    }
    class Section implements \Themosis\Support\Contracts\SectionInterface, \Iterator, \Countable
    {
        /**
         * The unique name of the section instance.
         *
         * @var string
         */
        protected $id;
        /**
         * The section title.
         *
         * @var string
         */
        protected $title;
        /**
         * The section view file name.
         *
         * @var string
         */
        protected $view = '';
        /**
         * The section theme.
         *
         * @var string
         */
        protected $theme = '';
        /**
         * The section items (children instances).
         *
         * @var array
         */
        protected $items;
        /**
         * Section's view data.
         *
         * @var array
         */
        protected $data = [];
        public function __construct(string $id, string $title = '', array $items = [])
        {
        }
        /**
         * Return the section identifier.
         */
        public function getId() : string
        {
        }
        /**
         * Set the section title.
         */
        public function setTitle(string $title) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Return the section title.
         */
        public function getTitle() : string
        {
        }
        /**
         * Set the section view file.
         */
        public function setView(string $view) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Get the section view file.
         */
        public function getView(bool $prefixed = false) : string
        {
        }
        /**
         * Set the section theme.
         */
        public function setTheme(string $theme) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Return the section theme.
         */
        public function getTheme() : string
        {
        }
        /**
         * Set section view data array.
         */
        public function setViewData(array $data) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Return the view data array.
         */
        public function getViewData() : array
        {
        }
        /**
         * Set section items instances.
         */
        public function setItems(array $items) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Get section items instances.
         */
        public function getItems() : array
        {
        }
        /**
         * Add an item to the section.
         *
         * @param  mixed  $item
         */
        public function addItem($item) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Check if the section contains items.
         */
        public function hasItems() : bool
        {
        }
        /**
         * Get current item.
         */
        public function current() : mixed
        {
        }
        /**
         * Move to the next item.
         */
        public function next() : void
        {
        }
        /**
         * Get current key position.
         */
        public function key() : int
        {
        }
        /**
         * Check if item is valid or exists.
         */
        public function valid() : bool
        {
        }
        /**
         * Reset to start position.
         */
        public function rewind() : void
        {
        }
        /**
         * Return the number of items.
         */
        public function count() : int
        {
        }
    }
}
namespace Themosis\Metabox\Resources {
    use League\Fractal\Manager;
    use League\Fractal\Resource\Item;
    use League\Fractal\Serializer\SerializerAbstract;
    use League\Fractal\TransformerAbstract;
    interface MetaboxResourceInterface
    {
        /**
         * Set the metabox data source element.
         *
         * @param  mixed  $source
         */
        public function setSource($source) : \Themosis\Metabox\Resources\MetaboxResourceInterface;
        /**
         * Return an array representation of the data source.
         */
        public function toArray() : array;
        /**
         * Return a JSON representation of the data source.
         */
        public function toJson() : string;
    }
    class MetaboxResource implements \Themosis\Metabox\Resources\MetaboxResourceInterface
    {
        /**
         * @var mixed
         */
        protected $source;
        /**
         * @var Manager
         */
        protected $manager;
        /**
         * @var SerializerAbstract
         */
        protected $serializer;
        /**
         * @var TransformerAbstract
         */
        protected $transformer;
        public function __construct(\League\Fractal\Manager $manager, \League\Fractal\Serializer\SerializerAbstract $serializer, \League\Fractal\TransformerAbstract $transformer)
        {
        }
        /**
         * Return the fractal resource instance.
         *
         * @return Item
         */
        protected function resource()
        {
        }
        /**
         * Define the serialization method.
         *
         * @return $this
         */
        protected function serialize()
        {
        }
        /**
         * Set the metabox data source element.
         *
         * @param  mixed  $source
         */
        public function setSource($source) : \Themosis\Metabox\Resources\MetaboxResourceInterface
        {
        }
        /**
         * Return an array representation of the data source.
         */
        public function toArray() : array
        {
        }
        /**
         * Return a JSON representation of the data source.
         */
        public function toJson() : string
        {
        }
    }
}
namespace Themosis\Metabox\Resources\Transformers {
    use League\Fractal\TransformerAbstract;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Resources\Factory;
    use Themosis\Forms\Resources\Transformers\FieldTransformer;
    use Themosis\Forms\Resources\Transformers\GroupTransformer;
    use Themosis\Metabox\Contracts\MetaboxInterface;
    class MetaboxTransformer extends \League\Fractal\TransformerAbstract
    {
        public function __construct()
        {
        }
        /**
         * Transform the metabox to a resource.
         *
         *
         * @return array
         */
        public function transform(\Themosis\Metabox\Contracts\MetaboxInterface $metabox)
        {
        }
        /**
         * Get the metabox screen data.
         *
         *
         * @return array
         */
        protected function getScreen($screen)
        {
        }
        /**
         * Return the metabox fields.
         *
         *
         * @return \League\Fractal\Resource\Collection
         */
        public function includeFields(\Themosis\Metabox\Contracts\MetaboxInterface $metabox)
        {
        }
        /**
         * Return the metabox groups.
         *
         *
         * @return \League\Fractal\Resource\Collection
         */
        public function includeGroups(\Themosis\Metabox\Contracts\MetaboxInterface $metabox)
        {
        }
    }
}
namespace Themosis\Page\Contracts {
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Container\Container;
    use Themosis\Support\Contracts\UIContainerInterface;
    use Illuminate\Support\Collection;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Support\Contracts\SectionInterface;
    interface PageFactoryInterface
    {
        /**
         * Build a new page instance.
         *
         * @param  string  $slug  The page slug.
         * @param  string  $title The page title.
         */
        public function make(string $slug, string $title) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the application service container.
         */
        public function getContainer() : \Illuminate\Contracts\Container\Container;
    }
    interface PageInterface
    {
        /**
         * Return the page slug.
         */
        public function getSlug() : string;
        /**
         * Set the page slug.
         */
        public function setSlug(string $slug) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page title.
         */
        public function getTitle() : string;
        /**
         * Set the page title.
         */
        public function setTitle(string $title) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page menu title.
         */
        public function getMenu() : string;
        /**
         * Set the page menu title.
         */
        public function setMenu(string $menu) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Get the page capability.
         */
        public function getCapability() : string;
        /**
         * Set the page capability.
         */
        public function setCapability(string $cap) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page icon.
         */
        public function getIcon() : string;
        /**
         * Set the page icon.
         */
        public function setIcon(string $icon) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page position.
         */
        public function getPosition() : int;
        /**
         * Set the page position.
         */
        public function setPosition(int $position) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page parent.
         *
         * @return string|null
         */
        public function getParent();
        /**
         * Set the page parent.
         */
        public function setParent(string $parent) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Check if current page has a parent.
         */
        public function hasParent() : bool;
        /**
         * Return the page URL.
         */
        public function getUrl(array $queryArgs = []) : string;
        /**
         * Set the global page property show in rest.
         * Automatically set all attached settings to this global value.
         * Each setting can override individually this option using an
         * option "show_in_rest".
         *
         * @param  bool  $show
         */
        public function showInRest($show = true) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page show in rest property value.
         */
        public function isShownInRest() : bool;
        /**
         * Set the page for network display.
         */
        public function network(bool $network = true) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Check if the page is for network rendering.
         */
        public function isNetwork() : bool;
        /**
         * Set the page. Display it on the WordPress administration.
         */
        public function set() : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page ui instance.
         */
        public function ui() : \Themosis\Support\Contracts\UIContainerInterface;
        /**
         * Add data to page ui instance.
         *
         * @param  string|array  $key
         * @param  mixed  $value
         */
        public function with($key, $value = null) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page settings repository.
         */
        public function repository() : \Themosis\Page\Contracts\SettingsRepositoryInterface;
        /**
         * Add sections to the page.
         */
        public function addSections(array $sections) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Add settings to the page.
         *
         * @param  string|array  $section
         */
        public function addSettings($section, array $settings = []) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the page prefix.
         */
        public function getPrefix() : string;
        /**
         * Set the page settings name prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Set the page view path.
         */
        public function setView(string $name, bool $useShortPath = false) : \Themosis\Page\Contracts\PageInterface;
        /**
         * Register page routes.
         *
         * @param  string|callable  $callback
         */
        public function route(string $action, $callback, string $method = 'get', string $title = '') : \Themosis\Page\Contracts\PageInterface;
        /**
         * Return the service container instance.
         */
        public function getContainer() : \Illuminate\Contracts\Container\Container;
        /**
         * Return the prefixed action name for POST requests.
         */
        public function getAction(string $action) : string;
        public function getPostUrl() : string;
    }
    interface SettingsRepositoryInterface
    {
        /**
         * Set sections of the repository.
         */
        public function setSections(array $sections) : \Themosis\Page\Contracts\SettingsRepositoryInterface;
        /**
         * Return the page repository sections.
         *
         * @return array
         */
        public function getSections() : \Illuminate\Support\Collection;
        /**
         * Set the repository settings.
         */
        public function setSettings(array $settings) : \Themosis\Page\Contracts\SettingsRepositoryInterface;
        /**
         * Return the repository settings.
         *
         * @return array
         */
        public function getSettings() : \Illuminate\Support\Collection;
        /**
         * Return the setting instance.
         */
        public function getSettingByName(string $name) : \Themosis\Forms\Contracts\FieldTypeInterface;
        /**
         * Return the section instance.
         */
        public function getSectionByName(string $name) : \Themosis\Support\Contracts\SectionInterface;
    }
}
namespace Themosis\Page {
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Support\Renderable;
    use Illuminate\Contracts\Validation\Factory;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Validation\Validator;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Hook\IHook;
    use Themosis\Page\Contracts\PageInterface;
    use Themosis\Page\Contracts\SettingsRepositoryInterface;
    use Themosis\Support\CallbackHandler;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Support\Contracts\UIContainerInterface;
    use Illuminate\Contracts\Container\Container;
    use Illuminate\Contracts\Validation\Factory as FactoryInterface;
    use Illuminate\Contracts\View\Factory;
    use Themosis\Hook\IHook;
    use Themosis\Page\Contracts\PageFactoryInterface;
    use Themosis\Page\Contracts\PageInterface;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\View\Factory;
    use Illuminate\Support\Collection;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Contracts\CanHandlePageSettings;
    use Themosis\Page\Contracts\SettingsRepositoryInterface;
    use Themosis\Support\Contracts\SectionInterface;
    use Illuminate\Contracts\Support\Renderable;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Themosis\Support\Contracts\UIContainerInterface;
    class Page implements \Themosis\Page\Contracts\PageInterface
    {
        use \Themosis\Support\CallbackHandler;
        /**
         * @var string
         */
        protected $slug;
        /**
         * @var string
         */
        protected $title;
        /**
         * @var string
         */
        protected $menu;
        /**
         * @var string
         */
        protected $cap = 'manage_options';
        /**
         * @var string
         */
        protected $icon = 'dashicons-admin-generic';
        /**
         * @var int
         */
        protected $position = 21;
        /**
         * @var string
         */
        protected $parent;
        /**
         * @var bool
         */
        protected $network = false;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var UIContainerInterface
         */
        protected $ui;
        /**
         * @var SettingsRepositoryInterface
         */
        protected $repository;
        /**
         * @var string
         */
        protected $prefix = 'th_';
        /**
         * @var Factory
         */
        protected $validator;
        /**
         * @var int
         */
        protected $errors = 0;
        /**
         * @var int
         */
        protected $offset = 0;
        /**
         * @var array
         */
        protected $routes = [];
        /**
         * List of pages titles per route action.
         * Only used if multiple routes are defined
         * for the current page. Default to main
         * $title property.
         *
         * @var array
         */
        protected $titles = [];
        /**
         * @var bool
         */
        protected $showInRest = false;
        public function __construct(\Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Themosis\Support\Contracts\UIContainerInterface $ui, \Themosis\Page\Contracts\SettingsRepositoryInterface $repository, \Illuminate\Contracts\Validation\Factory $validator)
        {
        }
        /**
         * Return the page slug.
         */
        public function getSlug() : string
        {
        }
        /**
         * Set the page slug.
         */
        public function setSlug(string $slug) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page title.
         */
        public function getTitle() : string
        {
        }
        /**
         * Set the page title.
         */
        public function setTitle(string $title) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page menu.
         */
        public function getMenu() : string
        {
        }
        /**
         * Set the page menu.
         */
        public function setMenu(string $menu) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page capability.
         */
        public function getCapability() : string
        {
        }
        /**
         * Set the page capability.
         */
        public function setCapability(string $cap) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page icon.
         */
        public function getIcon() : string
        {
        }
        /**
         * Set the page icon.
         */
        public function setIcon(string $icon) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page position.
         */
        public function getPosition() : int
        {
        }
        /**
         * Set the page position.
         */
        public function setPosition(int $position) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page parent.
         *
         * @return null|string
         */
        public function getParent()
        {
        }
        /**
         * Set the page parent.
         */
        public function setParent(string $parent) : \Themosis\Page\Contracts\PageInterface
        {
        }
        public function getUrl(array $queryArgs = []) : string
        {
        }
        /**
         * Set the page for network display.
         */
        public function network(bool $network = true) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Check if the page is for network display.
         */
        public function isNetwork() : bool
        {
        }
        /**
         * Set page settings global show in rest property.
         *
         * @param  bool  $show
         */
        public function showInRest($show = true) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the global page property show in rest.
         */
        public function isShownInRest() : bool
        {
        }
        /**
         * Set the page. Display it on the WordPress administration.
         */
        public function set() : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Find the page parent hook if any.
         */
        protected function findParentHook() : string
        {
        }
        /**
         * Build the WordPress pages.
         */
        public function build()
        {
        }
        /**
         * Render/output the page HTML.
         */
        public function render()
        {
        }
        /**
         * Return the page view layer.
         */
        public function ui() : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
        /**
         * Add data to the page view.
         *
         * @param  string|array  $key
         * @param  mixed  $value
         */
        public function with($key, $value = null) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page settings repository.
         */
        public function repository() : \Themosis\Page\Contracts\SettingsRepositoryInterface
        {
        }
        /**
         * Add sections to the page.
         */
        public function addSections(array $sections) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Add settings to the page.
         *
         * @param  string|array  $section
         */
        public function addSettings($section, array $settings = []) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the page prefix.
         */
        public function getPrefix() : string
        {
        }
        /**
         * Set the page settings name prefix.
         */
        public function setPrefix(string $prefix) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Configure page settings if any.
         * Called by the "admin_init" hook.
         */
        public function configureSettings()
        {
        }
        /**
         * Prepare the setting.
         *
         *
         * @return FieldTypeInterface
         */
        protected function prepareSetting(\Themosis\Forms\Contracts\FieldTypeInterface $setting)
        {
        }
        /**
         * Sanitize the setting before save.
         *
         * @param  string|array  $value
         * @return string|array|null
         */
        public function sanitizeSetting($value)
        {
        }
        /**
         * Return the setting custom error messages.
         */
        protected function getSettingMessages(\Themosis\Forms\Contracts\FieldTypeInterface $setting) : array
        {
        }
        /**
         * Return the setting placeholder.
         */
        protected function getSettingPlaceholder(\Themosis\Forms\Contracts\FieldTypeInterface $setting) : array
        {
        }
        /**
         * Output the section HTML.
         */
        public function renderSections(array $args)
        {
        }
        /**
         * Output the setting HTML.
         *
         * @param  FieldTypeInterface  $setting
         */
        public function renderSettings($setting)
        {
        }
        /**
         * Return the setting error from its name.
         */
        public function getSettingError(string $name) : array
        {
        }
        /**
         * Set the page view path.
         */
        public function setView(string $name, bool $useShortPath = false) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Check if current page has a parent.
         */
        public function hasParent() : bool
        {
        }
        /**
         * Parse page GET requests.
         */
        public function parseGetRoute()
        {
        }
        /**
         * Parse page POST requests.
         *
         * Note: POST requests should always target "admin-post.php"
         * on a custom page form.
         */
        public function parsePostRoute()
        {
        }
        /**
         * Register page routes.
         *
         * @param  callable|string  $callback
         */
        public function route(string $action, $callback, string $method = 'get', string $title = '') : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Register page routes actions and filters.
         */
        protected function registerRouteActions()
        {
        }
        /**
         * Format the action name.
         */
        protected function parseAction(string $action, string $method) : string
        {
        }
        /**
         * Called by the "admin_title" filter. Handle the page titles.
         *
         * @param  string  $title
         * @return string
         */
        public function handleTitle($title)
        {
        }
        /**
         * Return the service container instance.
         */
        public function getContainer() : \Illuminate\Contracts\Container\Container
        {
        }
        /**
         * Get the application request instance.
         *
         * @return null|Request
         */
        protected function getRequest()
        {
        }
        /**
         * Return the action name for POST requests.
         */
        public function getAction(string $action) : string
        {
        }
        public function getPostUrl() : string
        {
        }
    }
    class PageFactory implements \Themosis\Page\Contracts\PageFactoryInterface
    {
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var Factory
         */
        protected $view;
        /**
         * @var FactoryInterface
         */
        protected $validator;
        /**
         * @var string
         */
        protected $prefix = 'page';
        public function __construct(\Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter, \Illuminate\Contracts\View\Factory $view, \Illuminate\Contracts\Validation\Factory $validator)
        {
        }
        /**
         * Make a new page instance.
         */
        public function make(string $slug, string $title) : \Themosis\Page\Contracts\PageInterface
        {
        }
        /**
         * Return the application service container.
         */
        public function getContainer() : \Illuminate\Contracts\Container\Container
        {
        }
    }
    class PageServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Defer page factory.
         *
         * @var bool
         */
        protected $defer = true;
        public function register()
        {
        }
        /**
         * Return list of registered bindings.
         *
         * @return array
         */
        public function provides()
        {
        }
    }
    class PageSettingsRepository implements \Themosis\Page\Contracts\SettingsRepositoryInterface
    {
        /**
         * @var array
         */
        protected $sections = [];
        /**
         * @var array
         */
        protected $settings = [];
        /**
         * Set the page repository sections.
         */
        public function setSections(array $sections) : \Themosis\Page\Contracts\SettingsRepositoryInterface
        {
        }
        /**
         * Return the page repository sections.
         *
         * @return array
         */
        public function getSections() : \Illuminate\Support\Collection
        {
        }
        /**
         * Set the page repository settings.
         */
        public function setSettings(array $settings) : \Themosis\Page\Contracts\SettingsRepositoryInterface
        {
        }
        /**
         * Return the page repository settings.
         *
         * @return array
         */
        public function getSettings() : \Illuminate\Support\Collection
        {
        }
        /**
         * Return the setting instance based on its name.
         */
        public function getSettingByName(string $name) : \Themosis\Forms\Contracts\FieldTypeInterface
        {
        }
        /**
         * Return the section instance based on its name.
         */
        public function getSectionByName(string $name) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Parse page settings.
         * Throw an exception if user is using a field not supported.
         *
         *
         * @throws \Exception
         */
        protected function parseCompatibleSettings(array $settings)
        {
        }
    }
    class PageView implements \Themosis\Support\Contracts\UIContainerInterface
    {
        /**
         * @var Factory
         */
        protected $factory;
        /**
         * The page view path.
         *
         * @var string
         */
        protected $view = '';
        /**
         * @var string
         */
        protected $layout;
        /**
         * @var View
         */
        protected $viewInstance;
        /**
         * @var bool
         */
        protected $useShortViewPath = false;
        /**
         * Page view theme (namespace).
         *
         * @var string
         */
        protected $theme = 'themosis';
        public function __construct(\Illuminate\Contracts\View\Factory $factory)
        {
        }
        /**
         * Return the page view theme.
         */
        public function getTheme() : string
        {
        }
        /**
         * Set the page view theme.
         */
        public function setTheme(string $theme) : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
        /**
         * Return the page view layout.
         */
        public function getLayout() : string
        {
        }
        /**
         * Set the page view layout.
         */
        public function setLayout(string $layout) : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
        /**
         * Set the page view.
         */
        public function setView(string $view) : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
        /**
         * Set the page view instance.
         */
        public function setViewInstance(\Illuminate\Contracts\Support\Renderable $view) : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
        /**
         * Return the page view path.
         */
        public function getViewPath() : string
        {
        }
        /**
         * Return the page view.
         */
        public function getView() : \Illuminate\Contracts\View\View
        {
        }
        /**
         * Return the page view factory.
         */
        public function factory() : \Illuminate\Contracts\View\Factory
        {
        }
        /**
         * Tell the page UI to use the view path only instead
         * of the composed one with page layout and theme.
         *
         *
         * @return $this
         */
        public function useShortPath(bool $use = true) : \Themosis\Support\Contracts\UIContainerInterface
        {
        }
    }
}
namespace Themosis\Support\Contracts {
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    interface UIContainerInterface
    {
        /**
         * Return the container theme.
         */
        public function getTheme() : string;
        /**
         * Set the container theme.
         */
        public function setTheme(string $theme) : \Themosis\Support\Contracts\UIContainerInterface;
        /**
         * Return the container layout.
         */
        public function getLayout() : string;
        /**
         * Define a layout/view to use for the container (without a namespace).
         */
        public function setLayout(string $layout) : \Themosis\Support\Contracts\UIContainerInterface;
        /**
         * Define a view to use for the container.
         */
        public function setView(string $view) : \Themosis\Support\Contracts\UIContainerInterface;
        /**
         * Return the container view path.
         */
        public function getViewPath() : string;
        /**
         * Return the container view instance.
         */
        public function getView() : \Illuminate\Contracts\View\View;
        /**
         * Return the container view factory.
         */
        public function factory() : \Illuminate\Contracts\View\Factory;
    }
    interface CanTransform
    {
        /**
         * Return a resource as an array.
         */
        public function toArray() : array;
    }
    interface SectionInterface
    {
        /**
         * Return the section identifier.
         */
        public function getId() : string;
        /**
         * Set the section view file.
         */
        public function setView(string $view) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Set section view data array.
         */
        public function setViewData(array $data) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Return the view data array.
         */
        public function getViewData() : array;
        /**
         * Get the section view file.
         */
        public function getView(bool $prefixed = false) : string;
        /**
         * Set the section theme.
         */
        public function setTheme(string $theme) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Return the section theme.
         */
        public function getTheme() : string;
        /**
         * Set section items instances.
         */
        public function setItems(array $items) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Get section items instances.
         */
        public function getItems() : array;
        /**
         * Add an item to the section.
         *
         * @param  mixed  $item
         */
        public function addItem($item) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Check if the section contains items.
         */
        public function hasItems() : bool;
        /**
         * Set the section title.
         */
        public function setTitle(string $title) : \Themosis\Support\Contracts\SectionInterface;
        /**
         * Return the section title.
         */
        public function getTitle() : string;
    }
}
namespace Themosis\PostType\Contracts {
    interface PostTypeInterface
    {
        /**
         * Set the post type labels.
         */
        public function setLabels(array $labels) : \Themosis\PostType\Contracts\PostTypeInterface;
        /**
         * Return the post type labels.
         */
        public function getLabels() : array;
        /**
         * Return a defined label value.
         */
        public function getLabel(string $name) : string;
        /**
         * Set the post type arguments.
         */
        public function setArguments(array $args) : \Themosis\PostType\Contracts\PostTypeInterface;
        /**
         * Return the post type arguments.
         */
        public function getArguments() : array;
        /**
         * Return a post type argument.
         *
         *
         * @return mixed
         */
        public function getArgument(string $property);
        /**
         * Return the WordPress WP_Post_Type instance.
         *
         * @return \WP_Post_Type|null
         */
        public function getInstance();
        /**
         * Register the post type.
         */
        public function set() : \Themosis\PostType\Contracts\PostTypeInterface;
        /**
         * Set the post type title input placeholder.
         */
        public function setTitlePlaceholder(string $title) : \Themosis\PostType\Contracts\PostTypeInterface;
        /**
         * Set post type custom status.
         *
         * @param  array|string  $status
         */
        public function status($status, array $args = []) : \Themosis\PostType\Contracts\PostTypeInterface;
        /**
         * Check if post type has custom status.
         */
        public function hasStatus() : bool;
        /**
         * Return the post type slug.
         */
        public function getSlug() : string;
        /**
         * Return the post type slug.
         * Aliased method for getSlug.
         */
        public function getName() : string;
    }
}
namespace Themosis\PostType {
    use Themosis\Core\Application;
    use Themosis\Hook\IHook;
    use Themosis\PostType\Contracts\PostTypeInterface;
    use Themosis\Hook\IHook;
    use Themosis\PostType\Contracts\PostTypeInterface;
    use Themosis\Support\Facades\Metabox;
    use Illuminate\Support\ServiceProvider;
    class Factory
    {
        /**
         * @var Application
         */
        protected $container;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        public function __construct(\Themosis\Core\Application $container, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter)
        {
        }
        /**
         * Create a new post type instance.
         *
         *
         * @throws PostTypeException
         */
        public function make(string $slug, string $plural, string $singular) : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * If a given post type exists
         */
        public function exists(string $slug) : bool
        {
        }
        public function get(string $slug) : ?\Themosis\PostType\Contracts\PostTypeInterface
        {
        }
    }
    class PostType implements \Themosis\PostType\Contracts\PostTypeInterface
    {
        /**
         * Post type slug name.
         *
         * @var string
         */
        protected $slug;
        /**
         * Post type arguments.
         *
         * @var array
         */
        protected $args;
        /**
         * @var \WP_Post_Type
         */
        protected $instance;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var IHook
         */
        protected $filter;
        /**
         * @var array
         */
        protected $status;
        public function __construct(string $slug, \Themosis\Hook\IHook $action, \Themosis\Hook\IHook $filter)
        {
        }
        /**
         * Set the post type labels.
         */
        public function setLabels(array $labels) : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * Return the post type labels.
         */
        public function getLabels() : array
        {
        }
        /**
         * Return a defined label value.
         */
        public function getLabel(string $name) : string
        {
        }
        /**
         * Set the post type arguments.
         */
        public function setArguments(array $args) : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * Return the post type arguments.
         */
        public function getArguments() : array
        {
        }
        /**
         * Return a post type argument.
         *
         *
         * @return mixed|null
         */
        public function getArgument(string $property)
        {
        }
        /**
         * Return the WordPress WP_Post_Type instance.
         *
         * @return null|\WP_Post_Type
         */
        public function getInstance()
        {
        }
        /**
         * Return the post type slug.
         */
        public function getSlug() : string
        {
        }
        /**
         * Return the post type slug.
         * Aliased method for getSlug.
         */
        public function getName() : string
        {
        }
        /**
         * Register the post type.
         */
        public function set() : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * Register post type hook callback.
         */
        public function register()
        {
        }
        /**
         * Set the post type title input placeholder.
         */
        public function setTitlePlaceholder(string $title) : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * Register the custom status if any.
         */
        protected function registerStatus()
        {
        }
        /**
         * Set post type custom status.
         *
         * @param  array|string  $status
         */
        public function status($status, array $args = []) : \Themosis\PostType\Contracts\PostTypeInterface
        {
        }
        /**
         * Check if post type has custom status.
         */
        public function hasStatus() : bool
        {
        }
        /**
         * Register custom post type status.
         */
        protected function prepareStatus(string $status, array $args)
        {
        }
        /**
         * Parse the status arguments.
         */
        protected function parseStatusArguments(string $status, array $args) : array
        {
        }
        /**
         * Apply the selected status on post save.
         *
         * @param  string  $value The translated value by WordPress ("publish").
         * @return string
         */
        public function applyStatus(string $value)
        {
        }
    }
    class PostTypeException extends \Exception
    {
    }
    class PostTypeServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
    }
}
namespace Themosis\Route {
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Routing\Router as IlluminateRouter;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Matching\MethodValidator;
    use Illuminate\Routing\Route as IlluminateRoute;
    use Illuminate\Support\Arr;
    use Themosis\Route\Matching\ConditionValidator;
    use Illuminate\Routing\RouteCollection as IlluminateRouteCollection;
    use Illuminate\Routing\RoutingServiceProvider;
    use Illuminate\Container\Container;
    use Illuminate\Contracts\Events\Dispatcher;
    use Illuminate\Routing\Router as IlluminateRouter;
    use Themosis\Route\Bindings\NullableWpPost;
    class AdminRoute
    {
        public function __construct(\Illuminate\Http\Request $request, \Illuminate\Routing\Router $router)
        {
        }
        /**
         * Return the catch-all WordPress administration route.
         *
         * @return \Illuminate\Routing\Route
         *
         * @throws \Illuminate\Container\EntryNotFoundException
         */
        public function get()
        {
        }
    }
    class Route extends \Illuminate\Routing\Route
    {
        /**
         * WordPress conditions rules.
         *
         * @var array
         */
        protected $conditions = [];
        /**
         * A WordPress condition.
         *
         * @var string
         */
        protected $condition = '';
        /**
         * Condition parameters.
         *
         * @var array
         */
        protected $conditionParams = [];
        /**
         * List of WordPress route validators.
         *
         * @var array
         */
        protected $wordpressValidators;
        /**
         * Determine if the route matches given request.
         *
         * @param  bool  $includingMethod
         * @return bool
         */
        public function matches(\Illuminate\Http\Request $request, $includingMethod = true)
        {
        }
        /**
         * Check if route has a condition available.
         * Meaning this is a WordPress route.
         */
        public function hasCondition() : bool
        {
        }
        /**
         * Set route WordPress conditions rules.
         *
         *
         * @return \Themosis\Route\Route
         */
        public function setConditions(array $conditions = [])
        {
        }
        /**
         * Parse the route condition based on global list of conditions.
         * Return the WordPress conditional function.
         */
        protected function parseCondition(string $condition) : string
        {
        }
        /**
         * Parse route action and get any WordPress conditional parameters
         * if any defined.
         */
        protected function parseConditionParams(array $action) : array
        {
        }
        /**
         * Return the route condition.
         *
         * @return string
         */
        public function getCondition()
        {
        }
        /**
         * Return registered conditions.
         *
         * @return array
         */
        public function getConditions()
        {
        }
        /**
         * Return the route condition parameters.
         */
        public function getConditionParameters() : array
        {
        }
        /**
         * Get the WordPress route validators for the instance.
         *
         * @return array
         */
        public function getWordPressValidators()
        {
        }
    }
    class RouteCollection extends \Illuminate\Routing\RouteCollection
    {
        /**
         * Add the given route to the arrays of routes.
         *
         * @param  \Illuminate\Routing\Route  $route
         */
        protected function addToCollections($route)
        {
        }
    }
    class RouteServiceProvider extends \Illuminate\Routing\RoutingServiceProvider
    {
        public function registerRouter()
        {
        }
    }
    class Router extends \Illuminate\Routing\Router
    {
        /**
         * WordPress conditions.
         *
         * @var array
         */
        protected $conditions = [];
        public function __construct(\Illuminate\Contracts\Events\Dispatcher $events, \Illuminate\Container\Container $container = null)
        {
        }
        /**
         * Create a new Route object.
         *
         * @param  array|string  $methods
         * @param  string  $uri
         * @param  mixed  $action
         * @return \Illuminate\Routing\Route
         */
        public function newRoute($methods, $uri, $action)
        {
        }
        /**
         * Find the route matching a given request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Routing\Route
         *
         * @throws \Illuminate\Container\EntryNotFoundException
         */
        protected function findRoute($request)
        {
        }
        /**
         * Setup WordPress conditions.
         */
        public function setConditions(array $conditions = [])
        {
        }
        /**
         * Add WordPress default parameters if WordPress route.
         *
         * @param  \Themosis\Route\Route  $route
         * @return \Themosis\Route\Route
         */
        public function addWordPressBindings($route)
        {
        }
        /**
         * Register the typical authentication routes for an application.
         * Avoid WordPress default endpoints.
         */
        public function auth(array $options = [])
        {
        }
    }
}
namespace Themosis\Route\Bindings {
    use WP_Post;
    class NullableWpPost
    {
        public function __construct(public ?int $ID = null, public int $post_author = 0, public string $post_date = '0000-00-00 00:00:00', public string $post_date_gmt = '0000-00-00 00:00:00', public string $content = '', public string $post_title = '', public string $post_excerpt = '', public string $post_status = 'publish', public string $comment_status = 'open', public string $ping_status = 'open', public string $post_password = '', public string $post_name = '', public string $to_ping = '', public string $pinged = '', public string $post_modified = '0000-00-00 00:00:00', public string $post_modified_gmt = '0000-00-00 00:00:00', public string $post_content_filtered = '', public int $post_parent = 0, public string $guid = '', public int $menu_order = 0, public string $post_type = 'post', public string $post_mime_type = '', public int $comment_count = 0)
        {
        }
        public function toWpPost() : \WP_Post
        {
        }
    }
}
namespace Themosis\Route\Matching {
    use Illuminate\Http\Request;
    use Illuminate\Routing\Matching\ValidatorInterface;
    use Illuminate\Routing\Route;
    class ConditionValidator implements \Illuminate\Routing\Matching\ValidatorInterface
    {
        /**
         * Validate a given rule against a route and request.
         *
         *
         * @return bool
         */
        public function matches(\Illuminate\Routing\Route $route, \Illuminate\Http\Request $request)
        {
        }
    }
}
namespace Themosis\Route\Middleware {
    use Illuminate\Http\Request;
    use Symfony\Component\HttpKernel\Exception\HttpException;
    use Illuminate\Contracts\Routing\Registrar;
    use Themosis\Hook\FilterBuilder;
    use Themosis\Route\Route;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    class WordPressAuthorize
    {
        /**
         * Handle incoming request.
         *
         * @param  Request  $request
         * @param  string  $capability
         * @return mixed
         *
         * @throws HttpException
         */
        public function handle($request, \Closure $next, $capability = 'edit_posts')
        {
        }
    }
    class WordPressBindings
    {
        /**
         * @var Registrar
         */
        protected $router;
        /**
         * Create a new WordPressBindings substitutor.
         */
        public function __construct(\Illuminate\Contracts\Routing\Registrar $router)
        {
        }
        /**
         * Handle an incoming request.
         *
         *
         * @return mixed
         */
        public function handle($request, \Closure $next)
        {
        }
    }
    class WordPressBodyClass
    {
        /**
         * @var FilterBuilder
         */
        protected $filter;
        public function __construct(\Themosis\Hook\FilterBuilder $filter)
        {
        }
        /**
         * Handle incoming request.
         *
         *
         * @return mixed
         */
        public function handle($request, \Closure $next)
        {
        }
        /**
         * Return the callback managing route body CSS classes.
         *
         *
         * @return \Closure
         */
        protected function dispatchBodyClass(\Themosis\Route\Route $route)
        {
        }
    }
    class WordPressHeaders
    {
        /**
         * Cleanup response headers.
         *
         *
         * @return Response
         */
        public function handle(\Illuminate\Http\Request $request, \Closure $next)
        {
        }
    }
}
namespace Themosis\Support\Facades {
    use Illuminate\Support\Facades\Facade;
    use Themosis\Hook\ActionBuilder;
    use Themosis\Hook\Hook;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Ajax\AjaxInterface;
    use Illuminate\Contracts\Console\Kernel as ConsoleKernelContract;
    use Illuminate\Support\Facades\Facade;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Asset\AssetInterface;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Hook\Hook;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Forms\Contracts\FormBuilderInterface;
    use Themosis\Forms\FormBuilder;
    use Themosis\Forms\FormFactory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Html\HtmlBuilder;
    use Illuminate\Support\Facades\Facade;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Metabox\Contracts\MetaboxInterface;
    use Themosis\Metabox\Factory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Page\Contracts\PageInterface;
    use Themosis\Page\PageFactory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\PostType\Contracts\PostTypeInterface;
    use Themosis\PostType\Factory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Route\Router;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Themosis\Taxonomy\Factory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Themosis\Taxonomy\TaxonomyFieldFactory;
    use Illuminate\Support\Facades\Facade;
    use Illuminate\Support\Facades\Facade;
    use Themosis\User\Factory;
    use Illuminate\Support\Facades\Facade;
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\User\Contracts\UserFieldContract;
    /**
     * @method static ActionBuilder run(string $hook, $args = null)
     * @method static Hook add(string|array $hooks, \Closure|string|array $callback, int $priority = 10, int $accepted_args = 3)
     * @method static bool exists(string $hook)
     * @method static Hook|false remove(string $hook, \Closure|string $callback, int $priority = 10)
     * @method static array|null getCallback(string $hook)
     *
     * @see ActionBuilder
     */
    class Action extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static AjaxInterface listen($action, $callback, $logged = 'both')
     *
     * @see \Themosis\Ajax\Ajax
     */
    class Ajax extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * Class Artisan
     *
     * @method static int handle(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output = null)
     * @method static int call(string $command, array $parameters = [], $outputBuffer = null)
     * @method static int queue(string $command, array $parameters = [])
     * @method static array all()
     * @method static string output()
     *
     * @see \Illuminate\Contracts\Console\Kernel
     */
    class Artisan extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static AssetInterface add(string $handle, string $path, array $dependencies = [], $version = null, $arg = null)
     *
     * @see \Themosis\Asset\Factory
     */
    class Asset extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static FieldTypeInterface text(string $name, array $options = [])
     * @method static FieldTypeInterface password(string $name, array $options = [])
     * @method static FieldTypeInterface number(string $name, array $options = [])
     * @method static FieldTypeInterface integer(string $name, array $options = [])
     * @method static FieldTypeInterface email(string $name, array $options = [])
     * @method static mixed date($name, array $features = [], array $attributes = [])
     * @method static FieldTypeInterface textarea(string $name, array $options = [])
     * @method static FieldTypeInterface checkbox(string $name, array $options = [])
     * @method static FieldTypeInterface choice(string $name, array $options = [])
     * @method static FieldTypeInterface media($name, array $options = [])
     * @method static FieldTypeInterface editor($name, array $options = [])
     * @method static FieldTypeInterface collection($name, array $options = [])
     * @method static FieldTypeInterface color($name, array $options = [])
     * @method static FieldTypeInterface button(string $name, array $options = [])
     * @method static FieldTypeInterface submit(string $name, array $options = [])
     * @method static FieldTypeInterface hidden(string $name, array $options = [])
     *
     * @see \Themosis\Field\Factory
     */
    class Field extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static mixed run($hook, $args = null)
     * @method static Hook add(string|array $hooks, \Closure|string|array $callback, int $priority = 10, int $accepted_args = 3)
     * @method static bool exists(string $hook)
     * @method static Hook|false remove(string $hook, \Closure|string $callback, int $priority = 10)
     * @method static array|null getCallback(string $hook)
     *
     * @see \Themosis\Hook\FilterBuilder
     */
    class Filter extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static FormBuilderInterface make($dataClass = null, $options = [], $builder = FormBuilder::class)
     *
     * @see FormFactory
     */
    class Form extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static HtmlBuilder setCharset()
     * @method static string attributes(array $attributes)
     * @method static string entities(string $value)
     * @method static string special(string $value)
     *
     * @see HtmlBuilder
     */
    class Html extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static int id()
     * @method static string title($post = null)
     * @method static string author()
     * @method static string authorMeta(string $field = '', int $user_id = 0)
     * @method static string content($more_text = null, $strip_teaser = false)
     * @method static string excerpt($post = null)
     * @method static string thumbnail($size = 'post-thumbnail', $attr = '', $post = null)
     * @method static string|null thumbnailUrl($size = null, bool $icon = false)
     * @method static string link($post = 0, bool $leavename = false)
     * @method static array category(int $id = 0)
     * @method static array tags(int $id = 0)
     * @method static array|false|\WP_Error terms(string $taxonomy, $post = 0)
     * @method static string date(string $d = '', $post = null)
     * @method static string postClass($class = '', $post_id = null)
     * @method static string nextPage(?string $label = null, int $max_page = 0)
     * @method static string previousPage(?string $label = null)
     * @method static string|array paginate(array $args = [])
     *
     * @see \Themosis\View\Loop
     */
    class Loop extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static MetaboxInterface make(string $id, $screen = 'post')
     *
     * @see Factory
     */
    class Metabox extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static PageInterface make(string $slug, string $title)
     *
     * @see PageFactory
     */
    class Page extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static PostTypeInterface make(string $slug, string $plural, string $singular)
     * @method static bool exists(string $slug)
     * @method static PostTypeInterface|null get(string $slug)
     *
     * @see Factory
     */
    class PostType extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static array setConditions(array $conditions = [])
     * @method static \Themosis\Route\Route addWordPressBindings(\Themosis\Route\Route $route)
     * @method static void auth(array $options = [])
     *                                                                                                                                                // copied from \Illuminate\Support\Facades\Route
     * @method static \Illuminate\Routing\Route get(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route post(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route put(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route delete(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route patch(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route options(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route any(string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|callable|null $action = null)
     * @method static \Illuminate\Routing\RouteRegistrar prefix(string  $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar where(array  $where)
     * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
     * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
     * @method static void apiResources(array $resources)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Support\Facades\Route $route)
     * @method static void substituteImplicitBindings(\Illuminate\Support\Facades\Route $route)
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar namespace(string $value)
     * @method static \Illuminate\Routing\Router|\Illuminate\Routing\RouteRegistrar group(array|\Closure|string $attributes, \Closure|string $routes)
     * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
     * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
     * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [])
     * @method static void bind(string $key, string|callable $binder)
     * @method static void model(string $key, string $class, \Closure|null $callback = null)
     * @method static \Illuminate\Routing\Route current()
     * @method static string|null currentRouteName()
     * @method static string|null currentRouteAction()
     *
     * @see Router
     */
    class Route extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static TaxonomyInterface make(string $slug, $objects, string $plural, string $singular)
     *
     * @see Factory
     */
    class Taxonomy extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static \Themosis\Taxonomy\TaxonomyField make(TaxonomyInterface $taxonomy, array $options = [])
     *
     * @see TaxonomyFieldFactory
     */
    class TaxonomyField extends \Illuminate\Support\Facades\Facade
    {
        /**
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @see \Twig\Environment
     */
    class Twig extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static \Themosis\User\User make(string $username, string $password, string $email)
     * @method static \Themosis\User\User current()
     * @method static \Themosis\User\User get(int $user_id)
     *
     * @see Factory
     */
    class User extends \Illuminate\Support\Facades\Facade
    {
        /**
         * Return the service provider key responsible for the user class.
         * The key must be the same as the one used when registering
         * the service provider.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
        }
    }
    /**
     * @method static UserFieldContract make(array $options = [])
     * @method static UserFieldContract add(FieldTypeInterface|SectionInterface $field, SectionInterface $section = null)
     * @method static UserFieldContract set()
     * @method static FieldsRepositoryInterface repository()
     * @method static mixed display(string|\WP_User $user)
     * @method static void save(int $user_id)
     *
     * @see \Themosis\User\UserField
     */
    class UserField extends \Illuminate\Support\Facades\Facade
    {
        protected static function getFacadeAccessor()
        {
        }
    }
}
namespace Themosis\Taxonomy\Contracts {
    interface TaxonomyInterface
    {
        /**
         * Return the taxonomy slug.
         */
        public function getSlug() : string;
        /**
         * Return the taxonomy slug.
         * Aliased method for getSlug.
         */
        public function getName() : string;
        /**
         * Set taxonomy labels.
         */
        public function setLabels(array $labels) : \Themosis\Taxonomy\Contracts\TaxonomyInterface;
        /**
         * Return taxonomy labels.
         */
        public function getLabels() : array;
        /**
         * Return a taxonomy label by name.
         */
        public function getLabel(string $name) : string;
        /**
         * Set taxonomy arguments.
         */
        public function setArguments(array $args) : \Themosis\Taxonomy\Contracts\TaxonomyInterface;
        /**
         * Return taxonomy arguments.
         */
        public function getArguments() : array;
        /**
         * Return a taxonomy argument.
         *
         *
         * @return mixed
         */
        public function getArgument(string $property);
        /**
         * Register the taxonomy.
         */
        public function set() : \Themosis\Taxonomy\Contracts\TaxonomyInterface;
        /**
         * Set taxonomy objects.
         *
         * @param  string|array  $objects
         */
        public function setObjects($objects) : \Themosis\Taxonomy\Contracts\TaxonomyInterface;
        /**
         * Return taxonomy attached objects.
         */
        public function getObjects() : array;
    }
}
namespace Themosis\Taxonomy\Exceptions {
    class TaxonomyFieldNotFoundException extends \Exception
    {
    }
}
namespace Themosis\Taxonomy {
    use Themosis\Core\Application;
    use Themosis\Hook\IHook;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Illuminate\Contracts\Container\Container;
    use Themosis\Hook\IHook;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Exception;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Validator;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleTerms;
    use Themosis\Forms\Fields\Types\BaseType;
    use Themosis\Hook\IHook;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Themosis\Hook\IHook;
    use Themosis\Taxonomy\Contracts\TaxonomyInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Taxonomy\Exceptions\TaxonomyFieldNotFoundException;
    use Illuminate\Support\ServiceProvider;
    class Factory
    {
        /**
         * @var Application
         */
        protected $container;
        /**
         * @var IHook
         */
        protected $action;
        public function __construct(\Themosis\Core\Application $container, \Themosis\Hook\IHook $action)
        {
        }
        /**
         * Register a taxonomy.
         *
         * @param  string|array  $objects
         *
         * @throws TaxonomyException
         */
        public function make(string $slug, $objects, string $plural, string $singular) : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
    }
    class Taxonomy implements \Themosis\Taxonomy\Contracts\TaxonomyInterface
    {
        /**
         * @var string
         */
        protected $slug;
        /**
         * @var array
         */
        protected $objects;
        /**
         * @var array
         */
        protected $args = [];
        /**
         * @var Container
         */
        protected $container;
        /**
         * @var IHook
         */
        protected $action;
        public function __construct(string $slug, array $objects, \Illuminate\Contracts\Container\Container $container, \Themosis\Hook\IHook $action)
        {
        }
        /**
         * Return the taxonomy slug.
         */
        public function getSlug() : string
        {
        }
        /**
         * Return the taxonomy slug.
         * Aliased method for getSlug.
         */
        public function getName() : string
        {
        }
        /**
         * Set taxonomy labels.
         */
        public function setLabels(array $labels) : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
        /**
         * Return taxonomy labels.
         */
        public function getLabels() : array
        {
        }
        /**
         * Return a taxonomy label by name.
         */
        public function getLabel(string $name) : string
        {
        }
        /**
         * Set taxonomy arguments.
         */
        public function setArguments(array $args) : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
        /**
         * Return taxonomy arguments.
         */
        public function getArguments() : array
        {
        }
        /**
         * Return a taxonomy argument.
         *
         *
         * @return mixed
         */
        public function getArgument(string $property)
        {
        }
        /**
         * Register the taxonomy.
         */
        public function set() : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
        /**
         * Register taxonomy hook callback.
         */
        public function register()
        {
        }
        /**
         * Bind the taxonomy to its custom post type|object. Make sure the taxonomy
         * can be found in 'parse_query' or 'pre_get_posts' filters.
         */
        protected function bind()
        {
        }
        /**
         * Set taxonomy objects.
         *
         * @param  array|string  $objects
         */
        public function setObjects($objects) : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
        /**
         * Parse attached objects and set default update count callback.
         */
        protected function parseObjectsForCustomStatus(array $objects) : \Themosis\Taxonomy\Contracts\TaxonomyInterface
        {
        }
        /**
         * Return taxonomy attached objects.
         */
        public function getObjects() : array
        {
        }
    }
    class TaxonomyException extends \Exception
    {
    }
    class TaxonomyField
    {
        /**
         * @var TaxonomyFieldRepository
         */
        protected $repository;
        /**
         * @var \Illuminate\View\Factory
         */
        protected $factory;
        /**
         * @var \Illuminate\Contracts\Validation\Factory
         */
        protected $validator;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var TaxonomyInterface
         */
        protected $taxonomy;
        /**
         * @var array
         */
        protected $options;
        public function __construct(\Themosis\Taxonomy\Contracts\TaxonomyInterface $taxonomy, \Themosis\Taxonomy\TaxonomyFieldRepository $repository, \Illuminate\View\Factory $factory, \Illuminate\Contracts\Validation\Factory $validator, \Themosis\Hook\IHook $action, array $options)
        {
        }
        /**
         * Add a taxonomy custom field.
         *
         *
         * @return $this
         */
        public function add(\Themosis\Forms\Contracts\FieldTypeInterface $field) : \Themosis\Taxonomy\TaxonomyField
        {
        }
        /**
         * Set taxonomy custom fields.
         */
        public function set()
        {
        }
        /**
         * Return the callback used to register term meta.
         *
         * @return \Closure
         */
        protected function register()
        {
        }
        /**
         * Sanitize term meta value.
         *
         *
         * @return \Closure
         */
        protected function sanitize(\Themosis\Forms\Contracts\FieldTypeInterface $field)
        {
        }
        /**
         * Return the function managing term meta registration.
         *
         * @return \Closure
         */
        protected function save()
        {
        }
        /**
         * Fetch raw data from the request.
         *
         *
         * @return array
         */
        protected function getTermData(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Return terms rules.
         *
         * @return array
         */
        protected function getTermRules()
        {
        }
        /**
         * Return terms errors messages.
         *
         * @return array
         */
        protected function getTermMessages()
        {
        }
        /**
         * Return terms placeholders.
         *
         * @return array
         */
        protected function getTermPlaceholders()
        {
        }
        /**
         * Handle display of fields on "add" term screen.
         *
         * @return \Closure
         */
        protected function outputAddFields()
        {
        }
        /**
         * Handle display of fields on "edit" term screen.
         *
         * @return \Closure
         */
        protected function outputEditFields()
        {
        }
    }
    class TaxonomyFieldFactory
    {
        public function __construct(\Illuminate\View\Factory $viewFactory, \Illuminate\Contracts\Validation\Factory $validator, \Themosis\Hook\IHook $action)
        {
        }
        /**
         * Create a new TaxonomyField instance.
         *
         *
         * @return TaxonomyField
         */
        public function make(\Themosis\Taxonomy\Contracts\TaxonomyInterface $taxonomy, array $options = [])
        {
        }
    }
    class TaxonomyFieldRepository implements \Iterator
    {
        /**
         * Add a field to the taxonomy.
         *
         * @param  FieldTypeInterface|array  $field
         */
        public function add($field)
        {
        }
        /**
         * Return all attached fields.
         *
         * @return array
         */
        public function all()
        {
        }
        /**
         * Return a field instance by name.
         *
         *
         * @return FieldTypeInterface
         *
         * @throws TaxonomyFieldNotFoundException
         */
        public function getFieldByName(string $name)
        {
        }
        /**
         * Return the current element
         *
         * @link https://php.net/manual/en/iterator.current.php
         *
         * @return mixed Can return any type.
         *
         * @since 5.0.0
         */
        public function current() : mixed
        {
        }
        /**
         * Move forward to next element
         *
         * @link https://php.net/manual/en/iterator.next.php
         * @since 5.0.0
         */
        public function next() : void
        {
        }
        /**
         * Return the key of the current element
         *
         * @link https://php.net/manual/en/iterator.key.php
         *
         * @return mixed scalar on success, or null on failure.
         *
         * @since 5.0.0
         */
        public function key() : mixed
        {
        }
        /**
         * Checks if current position is valid
         *
         * @link https://php.net/manual/en/iterator.valid.php
         *
         * @return bool The return value will be casted to boolean and then evaluated.
         *              Returns true on success or false on failure.
         *
         * @since 5.0.0
         */
        public function valid() : bool
        {
        }
        /**
         * Rewind the Iterator to the first element
         *
         * @link https://php.net/manual/en/iterator.rewind.php
         * @since 5.0.0
         */
        public function rewind() : void
        {
        }
    }
    class TaxonomyServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
        /**
         * Register taxonomy factory.
         */
        protected function registerTaxonomyFactory()
        {
        }
        /**
         * Register taxonomy field factory.
         */
        protected function registerTaxonomyField()
        {
        }
    }
}
namespace Themosis\Tinker {
    use Laravel\Tinker\TinkerServiceProvider as LaravelTinkerServiceProvider;
    use Themosis\Core\Application;
    class TinkerServiceProvider extends \Laravel\Tinker\TinkerServiceProvider
    {
        /**
         * Boot the service provider.
         */
        public function boot()
        {
        }
    }
}
namespace Themosis\User\Contracts {
    use Themosis\User\User;
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Support\Contracts\SectionInterface;
    interface UserFactoryContract
    {
        /**
         * Create a new WordPress user and save it to the database.
         */
        public function make(string $username, string $password, string $email) : \Themosis\User\User;
        /**
         * Return the current application user.
         *s
         */
        public function current() : \Themosis\User\User;
        /**
         * Return a user instance based on given id.
         *s
         */
        public function get(int $user_id) : \Themosis\User\User;
    }
    interface UserFieldContract
    {
        /**
         * Make user fields.
         */
        public function make(array $options = []) : \Themosis\User\Contracts\UserFieldContract;
        /**
         * Add a user field.
         *
         * @param  FieldTypeInterface|SectionInterface  $field
         */
        public function add($field, \Themosis\Support\Contracts\SectionInterface $section = null) : \Themosis\User\Contracts\UserFieldContract;
        /**
         * Set the user fields.
         */
        public function set() : \Themosis\User\Contracts\UserFieldContract;
        /**
         * Return the fields repository.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface;
    }
}
namespace Themosis\User\Exceptions {
    class DuplicateUserException extends \Exception
    {
    }
    class UserException extends \Exception
    {
    }
}
namespace Themosis\User {
    use Illuminate\Contracts\Validation\Factory as ValidatorFactory;
    use Themosis\User\Contracts\UserFactoryContract;
    use Themosis\User\Exceptions\DuplicateUserException;
    use Themosis\User\Exceptions\UserException;
    use Themosis\User\Exceptions\UserException;
    use Illuminate\Contracts\Validation\Factory as ValidationFactory;
    use Illuminate\Http\Request;
    use Illuminate\View\Factory as ViewFactory;
    use Themosis\Forms\Contracts\FieldsRepositoryInterface;
    use Themosis\Forms\Contracts\FieldTypeInterface;
    use Themosis\Forms\Fields\Contracts\CanHandleUsers;
    use Themosis\Forms\Fields\Types\BaseType;
    use Themosis\Hook\IHook;
    use Themosis\Support\Contracts\SectionInterface;
    use Themosis\Support\Section;
    use Themosis\User\Contracts\UserFieldContract;
    use Themosis\User\Exceptions\UserException;
    use Illuminate\Support\ServiceProvider;
    use Themosis\Forms\Fields\FieldsRepository;
    class Factory implements \Themosis\User\Contracts\UserFactoryContract
    {
        /**
         * @var ValidatorFactory
         */
        protected $validator;
        public function __construct(\Illuminate\Contracts\Validation\Factory $validator)
        {
        }
        /**
         * Create a WordPress user and save it to the database.
         *
         *
         * @throws UserException
         * @throws DuplicateUserException
         */
        public function make(string $username, string $password, string $email) : \Themosis\User\User
        {
        }
        /**
         * Return the current application user.
         */
        public function current() : \Themosis\User\User
        {
        }
        /**
         * Return a user instance based on given id.
         */
        public function get(int $user_id) : \Themosis\User\User
        {
        }
        /**
         * Validate user credentials.
         *
         *
         * @throws UserException
         */
        protected function validate(array $data)
        {
        }
    }
    class User extends \WP_User
    {
        /**
         * Check if the user has role.
         *
         * @param  string  $role
         * @return bool
         */
        public function hasRole($role)
        {
        }
        /**
         * Set User role.
         *
         * @param  string  $role
         */
        public function setRole($role) : \Themosis\User\User
        {
        }
        /**
         * Check if the user can do a defined capability.
         *
         * @param  string  $cap
         * @return bool
         */
        public function can($cap)
        {
        }
        /**
         * Update user properties.
         *
         *
         * @throws UserException
         */
        public function update(array $data) : \Themosis\User\User
        {
        }
        /**
         * Update single user meta data.
         *
         *
         * @throws UserException
         */
        public function updateMetaData(string $key, string $value) : \Themosis\User\User
        {
        }
    }
    class UserField implements \Themosis\User\Contracts\UserFieldContract
    {
        /**
         * @var FieldsRepositoryInterface
         */
        protected $repository;
        /**
         * @var IHook
         */
        protected $action;
        /**
         * @var ViewFactory
         */
        protected $factory;
        /**
         * @var ValidationFactory
         */
        protected $validator;
        /**
         * @var array
         */
        protected $options = [];
        /**
         * @var array
         */
        protected $allowedOptions = ['prefix'];
        /**
         * @var array
         */
        protected $defaultOptions = ['prefix' => 'th_'];
        public function __construct(\Themosis\Forms\Contracts\FieldsRepositoryInterface $repository, \Themosis\Hook\IHook $action, \Illuminate\View\Factory $factory, \Illuminate\Contracts\Validation\Factory $validator)
        {
        }
        /**
         * Build user fields.
         */
        public function make(array $options = []) : \Themosis\User\Contracts\UserFieldContract
        {
        }
        /**
         * Parse options.
         *
         *
         * @return array
         */
        protected function parseOptions(array $options)
        {
        }
        /**
         * Add a user field.
         *
         * @param  \Themosis\Forms\Contracts\FieldTypeInterface|SectionInterface  $field
         */
        public function add($field, \Themosis\Support\Contracts\SectionInterface $section = null) : \Themosis\User\Contracts\UserFieldContract
        {
        }
        /**
         * Get section for given field.
         *
         * @param  null  $section
         */
        protected function getSection(\Themosis\Forms\Contracts\FieldTypeInterface $field, $section = null) : \Themosis\Support\Contracts\SectionInterface
        {
        }
        /**
         * Set the user fields.
         */
        public function set() : \Themosis\User\Contracts\UserFieldContract
        {
        }
        /**
         * Return the fields repository.
         */
        public function repository() : \Themosis\Forms\Contracts\FieldsRepositoryInterface
        {
        }
        /**
         * Display user meta fields.
         *
         * If adding a user, $user is a string and represent
         * a context: 'add-existing-user' (multisite),
         * 'add-new-user' (single). Else is a WP_User instance.
         *
         * @param  mixed  $user
         */
        public function display($user)
        {
        }
        /**
         * Save user meta.
         *
         * By default, the callback always contains the user_id as
         * the first parameter. In the case of an update profile,
         * a second parameter is available containing an array
         * of previous user meta data.
         *
         * @param  int  $user_id
         *
         * @throws UserException
         */
        public function save($user_id)
        {
        }
        /**
         * Return request user meta data.
         *
         *
         * @return array
         */
        protected function getUserData(\Illuminate\Http\Request $request)
        {
        }
        /**
         * Return user validation rules.
         *
         * @return array
         */
        protected function getUserRules()
        {
        }
        /**
         * Return user validation messages.
         *
         * @return array
         */
        protected function getUserMessages()
        {
        }
        /**
         * Return user validation placeholders.
         *
         * @return array
         */
        protected function getUserPlaceholders()
        {
        }
    }
    class UserServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        public function register()
        {
        }
        /**
         * Register the user factory.
         */
        protected function registerUserFactory()
        {
        }
        /**
         * Register the user field.
         */
        protected function registerUserField()
        {
        }
    }
}
namespace Themosis\View {
    use Illuminate\Support\Facades\Blade;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\View\FileViewFinder as IlluminateFileViewFinder;
    use Illuminate\View\Factory;
    use Illuminate\View\ViewServiceProvider as IlluminateViewServiceProvider;
    use Themosis\View\Engines\Twig;
    use Themosis\View\Extensions\WordPress;
    use Twig\Environment;
    use Twig\Extension\DebugExtension;
    use Twig\Loader\FilesystemLoader;
    class BladeServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Register bindings.
         */
        public function register()
        {
        }
        /**
         * Register Blade custom directives.
         */
        public function boot()
        {
        }
    }
    class FileViewFinder extends \Illuminate\View\FileViewFinder
    {
        /**
         * Return located views.
         *
         * @return array
         */
        public function getViews()
        {
        }
        /**
         * Add ordered view location.
         */
        public function addOrderedLocation(string $location, int $priority = 20)
        {
        }
        /**
         * Get the active view paths.
         *
         * @return array
         */
        public function getPaths()
        {
        }
        /**
         * Get the fully qualified location of the view.
         *
         * @param  string  $name
         * @return string
         */
        public function find($name)
        {
        }
    }
    class FileViewLocation
    {
        public function __construct(string $path, int $priority)
        {
        }
        public function getPath() : string
        {
        }
        public function getPriority() : int
        {
        }
    }
    class Loop
    {
        /**
         * Get the id of the current post.
         *
         * @return int The ID of the current post.
         */
        public function id()
        {
        }
        /**
         * Get the title of the current post.
         *
         * @param  int|\WP_post  $post The post ID or \WP_Post object
         * @return string The title of the current post.
         */
        public function title($post = null)
        {
        }
        /**
         * Get the author of the current post.
         *
         * @return string The author of the current post.
         */
        public function author()
        {
        }
        /**
         * Get author meta.
         *
         * @param  string  $field   User field name.
         * @param  int  $user_id The user ID.
         * @return string
         */
        public function authorMeta($field = '', $user_id = 0)
        {
        }
        /**
         * Get the content of the current post.
         *
         * @param  string  $more_text    Content to show when there is more text.
         * @param  bool  $strip_teaser Strip teaser content before the more text.
         * @return string The content of the current post.
         */
        public function content($more_text = null, $strip_teaser = false)
        {
        }
        /**
         * Get the excerpt of the current post.
         *
         * @param  int|\WP_Post  $post
         * @return string The excerpt of the current post.
         */
        public function excerpt($post = null)
        {
        }
        /**
         * Get the post thumbnail of the current post.
         *
         * @param  string|array  $size The size of the current post thumbnail.
         * @param  string|array  $attr The attributes of the current post thumbnail.
         * @param  int|\WP_Post  $post The post ID or WP_Post object.
         * @return string
         */
        public function thumbnail($size = 'post-thumbnail', $attr = '', $post = null)
        {
        }
        /**
         * Get thumbnail url of current post.
         *
         * @param  string|array  $size The size of the current post thumbnail.
         * @param  bool  $icon
         * @return null|string
         */
        public function thumbnailUrl($size = null, $icon = false)
        {
        }
        /**
         * Get the permalink of the current post.
         *
         * @param  int|\WP_Post  $post      The post ID or WP_Post object.
         * @param  bool  $leavename Keep or not the post name.
         * @return string The permalink of the current post.
         */
        public function link($post = 0, $leavename = false)
        {
        }
        /**
         * Get the categories of the current post.
         *
         * @param  int  $id The post ID.
         * @return array The categories of the current post.
         */
        public function category($id = 0)
        {
        }
        /**
         * Get the tags of the current post.
         *
         * @param  int  $id The post ID
         * @return array The tags of the current post.
         */
        public function tags($id = 0)
        {
        }
        /**
         * Get the terms (custom taxonomies) of the current post.
         *
         * @param  string  $taxonomy The custom taxonomy slug.
         * @param int|\WP_Post The post ID or WP_Post object
         * @param  mixed  $post
         *
         * @see https://codex.wordpress.org/Function_Reference/get_the_terms
         *
         * @return array|false|\WP_Error
         */
        public function terms($taxonomy, $post = 0)
        {
        }
        /**
         * Get the date of the current post.
         *
         * @param  string  $d    Date format.
         * @param  int|\WP_Post  $post The post ID or WP_Post object
         * @return string The date of the current post.
         */
        public function date($d = '', $post = null)
        {
        }
        /**
         * Add the classes for a given post.
         *
         * @author Guriev Eugen
         *
         * @param  string|array  $class   One or more classes to add to the post class list.
         * @param  int|\WP_Post  $post_id The post ID or the post object.
         * @return string
         */
        public function postClass($class = '', $post_id = null)
        {
        }
        /**
         * Return the next link html anchor tag for post entries.
         *
         * @param  string  $label    Link content
         * @param  int  $max_page Max pages in current query.
         * @return string
         */
        public function nextPage($label = null, $max_page = 0)
        {
        }
        /**
         * Return the previous link html anchor tag for post entries.
         *
         * @param  string  $label Link content
         * @return string
         */
        public function previousPage($label = null)
        {
        }
        /**
         * Return a pagination for any type of loops.
         *
         * @param  array  $args
         *
         * @see https://developer.wordpress.org/reference/functions/paginate_links/
         *
         * @return string|array
         */
        public function paginate($args = [])
        {
        }
    }
    class ViewServiceProvider extends \Illuminate\View\ViewServiceProvider
    {
        /**
         * Register view bindings.
         */
        public function register()
        {
        }
        /**
         * Register Themosis view finder.
         */
        public function registerViewFinder()
        {
        }
        /**
         * Register Twig Loader.
         */
        public function registerTwigLoader()
        {
        }
        /**
         * Register Twig Environment.
         */
        public function registerTwigEnvironment()
        {
        }
        /**
         * Register the Twig engine implementation.
         */
        public function registerTwigEngine()
        {
        }
    }
}
namespace Themosis\View\Engines {
    use Illuminate\Contracts\View\Engine;
    use Themosis\View\FileViewFinder;
    use Twig\Environment;
    class Twig implements \Illuminate\Contracts\View\Engine
    {
        /**
         * @var \Twig_Environment
         */
        protected $twig;
        /**
         * @var FileViewFinder
         */
        protected $finder;
        /**
         * @var string
         */
        protected $extension = '.twig';
        public function __construct(\Twig\Environment $twig, \Themosis\View\FileViewFinder $finder)
        {
        }
        /**
         * Get the evaluated contents of the view.
         *
         * @param  string  $path The file name with its file extension.
         * @param  array  $data View data (context)
         * @return string
         *
         * @throws \Twig\Error\LoaderError
         * @throws \Twig\Error\RuntimeError
         * @throws \Twig\Error\SyntaxError
         */
        public function get($path, array $data = [])
        {
        }
        /**
         * Parse the view file name. Replace "." by "/" characters.
         *
         *
         * @return string
         */
        protected function parseFileName(string $name)
        {
        }
    }
}
namespace Themosis\View\Extensions {
    use Twig\Extension\AbstractExtension;
    use Twig\Extension\GlobalsInterface;
    use Twig\TwigFilter;
    use Twig\TwigFunction;
    class WordPress extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
    {
        /**
         * Register Twig templates globals.
         * The "fn" global can be used to call any
         * WordPress or core PHP functions.
         */
        public function getGlobals() : array
        {
        }
        /**
         * Allow developers to call WordPress and core PHP
         * functions inside their Twig templates.
         *
         * @param  string  $name
         * @return mixed
         */
        public function __call($name, array $arguments)
        {
        }
        /**
         * Register a list of WordPress functions for use
         * inside Twig templates.
         *
         * @return array|\Twig_Function[]
         */
        public function getFunctions()
        {
        }
        /**
         * Register a list of WordPress filters for use
         * inside Twig templates.
         *
         * @return array|\Twig_Filter[]
         */
        public function getFilters()
        {
        }
    }
}
namespace {
    class LocalValetDriver extends \LaravelValetDriver
    {
        /**
         * Determine if the driver serves the request.
         *
         * @param  string  $sitePath
         * @param  string  $siteName
         * @param  string  $uri
         * @return bool
         */
        public function serves($sitePath, $siteName, $uri)
        {
        }
        /**
         * Determine if the incoming request is for a static file.
         *
         * @param  string  $sitePath
         * @param  string  $siteName
         * @param  string  $uri
         * @return false|string
         */
        public function isStaticFile($sitePath, $siteName, $uri)
        {
        }
        /**
         * Get the fully resolved path to the application's front controller.
         *
         * @param  string  $sitePath
         * @param  string  $siteName
         * @param  string  $uri
         * @return string
         */
        public function frontControllerPath($sitePath, $siteName, $uri)
        {
        }
    }
    class CreateCustomersTable extends \Illuminate\Database\Migrations\Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
        }
    }
    class CreatePasswordResetsTable extends \Illuminate\Database\Migrations\Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
        }
    }
    class CreateFailedJobsTable extends \Illuminate\Database\Migrations\Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
        }
    }
}
namespace App\Console {
    use Illuminate\Console\Scheduling\Schedule;
    use Themosis\Core\Console\Kernel as ConsoleKernel;
    class Kernel extends \Themosis\Core\Console\Kernel
    {
        /**
         * Console commands provided by your application.
         *
         * @var array
         */
        protected $commands = [];
        /**
         * Define the application's command schedule.
         *
         * @param  Schedule  $schedule
         */
        protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
        {
        }
        /**
         * Register the commands for the application.
         */
        protected function commands()
        {
        }
    }
}
namespace App\Exceptions {
    use Themosis\Core\Exceptions\Handler as ExceptionHandler;
    class Handler extends \Themosis\Core\Exceptions\Handler
    {
    }
}
namespace App\Hooks {
    use Themosis\Asset\AssetException;
    use Themosis\Core\Support\WordPressUrl;
    use Themosis\Hook\Hookable;
    use Themosis\Support\Facades\Action;
    use Themosis\Support\Facades\Asset;
    use Themosis\Support\Facades\Filter;
    use Themosis\Hook\Hookable;
    use Themosis\Support\Facades\Filter;
    use Themosis\Hook\Hookable;
    use Themosis\Support\Facades\Action;
    use Themosis\Support\Facades\Filter;
    use Themosis\Hook\Hookable;
    class Application extends \Themosis\Hook\Hookable
    {
        use \Themosis\Core\Support\WordPressUrl;
        public function register()
        {
        }
    }
    class Compat extends \Themosis\Hook\Hookable
    {
        /**
         * @var string
         */
        public $hook = 'deprecated_hook_run';
        /**
         * @var array
         */
        protected $deprecated = ['edit_form_after_title', 'edit_form_advanced'];
        /**
         * Disable WordPress _deprecated messages for deprecated metabox hooks.
         */
        public function register(string $hook)
        {
        }
    }
    class Mail extends \Themosis\Hook\Hookable
    {
        /**
         * WordPress SMTP configuration.
         */
        public function register()
        {
        }
    }
    class Widgets extends \Themosis\Hook\Hookable
    {
        /**
         * Widgets action hook.
         *
         * @var string
         */
        public $hook = 'widgets_init';
        /**
         * Widgets to register.
         *
         * @var array
         */
        public $widgets = [];
        /**
         * Register the widgets.
         */
        public function register()
        {
        }
    }
}
namespace App\Http\Controllers {
    use Illuminate\Routing\Controller as BaseController;
    use Themosis\Core\Forms\FormHelper;
    use Themosis\Core\Validation\ValidatesRequests;
    class Controller extends \Illuminate\Routing\Controller
    {
        use \Themosis\Core\Forms\FormHelper, \Themosis\Core\Validation\ValidatesRequests;
    }
}
namespace App\Http {
    use Themosis\Core\Http\Kernel as HttpKernel;
    class Kernel extends \Themosis\Core\Http\Kernel
    {
        /**
         * The application's global HTTP middleware stack.
         *
         * These middleware are run during every request to your application.
         *
         * @var array
         */
        protected $middleware = [
            // \App\Http\Middleware\TrustHosts::class,
            \App\Http\Middleware\TrustProxies::class,
            \Illuminate\Http\Middleware\HandleCors::class,
            \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
            \Themosis\Core\Http\Middleware\ValidatePostSize::class,
            \App\Http\Middleware\TrimStrings::class,
            \Themosis\Core\Http\Middleware\ConvertEmptyStringsToNull::class,
        ];
        /**
         * The application's route middleware groups.
         *
         * @var array
         */
        protected $middlewareGroups = ['admin' => [\Illuminate\Session\Middleware\StartSession::class, \Illuminate\View\Middleware\ShareErrorsFromSession::class], 'web' => ['wp.headers', 'wp.bindings', 'bindings', \App\Http\Middleware\EncryptCookies::class, \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class, \Illuminate\Session\Middleware\StartSession::class, \Illuminate\View\Middleware\ShareErrorsFromSession::class, \App\Http\Middleware\VerifyCsrfToken::class, \Illuminate\Routing\Middleware\SubstituteBindings::class, 'csrf', \Themosis\Route\Middleware\WordPressBodyClass::class, \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class], 'api' => ['throttle:60,1', 'wp.can:edit_posts', 'bindings', \Illuminate\Routing\Middleware\ThrottleRequests::class . ':api', \Illuminate\Routing\Middleware\SubstituteBindings::class]];
        /**
         * The application's middleware aliases.
         *
         * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
         *
         * @var array<string, class-string|string>
         */
        protected array $middlewareAliases = ['auth' => \App\Http\Middleware\Authenticate::class, 'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class, 'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class, 'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class, 'can' => \Illuminate\Auth\Middleware\Authorize::class, 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class, 'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class, 'precognitive' => \Themosis\Core\Http\Middleware\HandlePrecognitiveRequests::class, 'signed' => \App\Http\Middleware\ValidateSignature::class, 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class, 'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class];
        /**
         * The application's route middleware.
         * Aliased middleware. Can be used individually or within groups.
         *
         * @var array
         */
        protected $routeMiddleware = ['auth' => \App\Http\Middleware\Authenticate::class, 'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class, 'csrf' => \App\Http\Middleware\VerifyCsrfToken::class, 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class, 'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class, 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class, 'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class, 'wp.bindings' => \Themosis\Route\Middleware\WordPressBindings::class, 'wp.can' => \Themosis\Route\Middleware\WordPressAuthorize::class, 'wp.headers' => \Themosis\Route\Middleware\WordPressHeaders::class];
    }
}
namespace App\Http\Middleware {
    use Illuminate\Auth\Middleware\Authenticate as Middleware;
    use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
    use Themosis\Core\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;
    use App\Providers\RouteServiceProvider;
    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Themosis\Core\Http\Middleware\TrimStrings as Middleware;
    use Illuminate\Http\Middleware\TrustHosts as Middleware;
    use Illuminate\Http\Middleware\TrustProxies as Middleware;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Middleware\ValidateSignature as Middleware;
    use Themosis\Core\Http\Middleware\VerifyCsrfToken as Middleware;
    class Authenticate extends \Illuminate\Auth\Middleware\Authenticate
    {
        /**
         * Get the path the user should be redirected to when they are not authenticated.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return string|null
         */
        protected function redirectTo($request)
        {
        }
    }
    class EncryptCookies extends \Illuminate\Cookie\Middleware\EncryptCookies
    {
        /**
         * The names of the cookies that should not be encrypted.
         *
         * @var array<int, string>
         */
        protected $except = [];
    }
    class PreventRequestsDuringMaintenance extends \Themosis\Core\Http\Middleware\PreventRequestsDuringMaintenance
    {
        /**
         * The URIs that should be reachable while maintenance mode is enabled.
         *
         * @var array<int, string>
         */
        protected $except = [];
    }
    class RedirectIfAuthenticated
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @param  string|null  $guard
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
         */
        public function handle(\Illuminate\Http\Request $request, \Closure $next, ...$guards)
        {
        }
    }
    class TrimStrings extends \Themosis\Core\Http\Middleware\TrimStrings
    {
        /**
         * The names of the attributes that should not be trimmed.
         *
         * @var array<int, string>
         */
        protected $except = ['current_password', 'password', 'password_confirmation'];
    }
    class TrustHosts extends \Illuminate\Http\Middleware\TrustHosts
    {
        /**
         * Get the host patterns that should be trusted.
         *
         * @return array<int, string|null>
         */
        public function hosts() : array
        {
        }
    }
    class TrustProxies extends \Illuminate\Http\Middleware\TrustProxies
    {
        /**
         * The trusted proxies for this application.
         *
         * @var array<int, string>|string|null
         */
        protected $proxies;
        /**
         * The headers that should be used to detect proxies.
         *
         * @var int
         */
        protected $headers = \Illuminate\Http\Request::HEADER_X_FORWARDED_FOR | \Illuminate\Http\Request::HEADER_X_FORWARDED_HOST | \Illuminate\Http\Request::HEADER_X_FORWARDED_PORT | \Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO | \Illuminate\Http\Request::HEADER_X_FORWARDED_AWS_ELB;
    }
    class ValidateSignature extends \Illuminate\Routing\Middleware\ValidateSignature
    {
        /**
         * The names of the query string parameters that should be ignored.
         *
         * @var array<int, string>
         */
        protected $except = [];
    }
    class VerifyCsrfToken extends \Themosis\Core\Http\Middleware\VerifyCsrfToken
    {
        /**
         * URIs that should be excluded from CSRF verification.
         *
         * @var array
         */
        protected $except = [];
    }
}
namespace App\Models {
    use Illuminate\Notifications\Notifiable;
    use Themosis\Core\Auth\User as Authenticatable;
    class Customer extends \Themosis\Core\Auth\User
    {
        use \Illuminate\Notifications\Notifiable;
        /**
         * Mass assignable attributes.
         *
         * @var array
         */
        protected $fillable = ['name', 'email', 'password'];
        /**
         * Hidden attributes.
         *
         * @var array
         */
        protected $hidden = ['password', 'remember_token'];
        /**
         * Attributes to cast to native types.
         *
         * @var array
         */
        protected $casts = ['email_verified_at' => 'datetime'];
    }
}
namespace App\Providers {
    use Illuminate\Support\ServiceProvider;
    use Themosis\Core\Support\Providers\AuthServiceProvider as ServiceProvider;
    use Illuminate\Support\Facades\Broadcast;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
    use Illuminate\Support\Facades\Event;
    use Themosis\Core\Support\Providers\EventServiceProvider as ServiceProvider;
    use Illuminate\Cache\RateLimiting\Limit;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\RateLimiter;
    use Themosis\Core\Support\Providers\RouteServiceProvider as ServiceProvider;
    use Themosis\Support\Facades\Route;
    class AppServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Bootstrap any application services.
         */
        public function boot()
        {
        }
        /**
         * Register any application services.
         */
        public function register()
        {
        }
    }
    class AuthServiceProvider extends \Themosis\Core\Support\Providers\AuthServiceProvider
    {
        /**
         * @var array
         */
        protected $policies = ['App\\Model' => 'App\\Policies\\ModelPolicy'];
        public function boot()
        {
        }
    }
    class BroadcastServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        /**
         * Bootstrap broadcasting service.
         */
        public function boot()
        {
        }
    }
    class EventServiceProvider extends \Themosis\Core\Support\Providers\EventServiceProvider
    {
        /**
         * The event listener mappings for the application.
         *
         * @var array
         */
        protected $listen = [\Illuminate\Auth\Events\Registered::class => [\Illuminate\Auth\Listeners\SendEmailVerificationNotification::class]];
        /**
         * Register any events for your application.
         *
         * @return void
         */
        public function boot()
        {
        }
    }
    class RouteServiceProvider extends \Themosis\Core\Support\Providers\RouteServiceProvider
    {
        /**
         * The path to the "home" route for your application.
         *
         * This is used by Laravel authentication to redirect users after login.
         *
         * @var string
         */
        public const HOME = '/home';
        /**
         * Main controllers namespace.
         *
         * @var string
         */
        // protected $namespace = 'App\Http\Controllers';
        public function boot()
        {
        }
        /**
         * Configure the rate limiters for the application.
         *
         * @return void
         */
        protected function configureRateLimiting()
        {
        }
    }
}
namespace Database\Seeders {
    use Illuminate\Database\Seeder;
    class DatabaseSeeder extends \Illuminate\Database\Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
        }
    }
}
namespace Tests {
    use PHPUnit\Framework\TestCase;
    class SampleTest extends \PHPUnit\Framework\TestCase
    {
        public function testIsSuccessful()
        {
        }
    }
}
namespace {
    use Rector\Config\RectorConfig;
    use RectorLaravel\Set\LaravelSetList;
    /**
     * Themosis Framework
     * WordPress Object Cache Drop-In
     */
    use Themosis\Core\Cache\WordPressCacheWrapper;
    /**
     * Sets up global object cache instance.
     * The used instance is the one defined as the default
     * cache driver from the application cache configuration.s
     *
     * @global \Illuminate\Cache\Repository $wp_object_cache
     */
    function wp_cache_init()
    {
    }
    /**
     * Adds data to the cache if the cache key doesn't already exist.
     *
     * @param  string|int  $key
     * @param  mixed  $data
     * @param  string  $group
     * @param  int  $expire
     * @return bool True on success. False if cache value is already in the store.
     */
    function wp_cache_add($key, $data, $group = '', $expire = 0)
    {
    }
    /**
     * Closes the cache.
     *
     * @return bool
     */
    function wp_cache_close()
    {
    }
    /**
     * Decrement numeric cache item's value.
     *
     * @param  string|int  $key
     * @param  int  $offset
     * @param  string  $group
     * @return bool|int False on failure. The item's new value on success.
     */
    function wp_cache_decr($key, $offset = 1, $group = '')
    {
    }
    /**
     * Increment numeric cache item's value.
     *
     * @param  string|int  $key
     * @param  int  $offset
     * @param  string  $group
     * @return bool|int False on failure. The item's new value on success.
     */
    function wp_cache_incr($key, $offset = 1, $group = '')
    {
    }
    /**
     * Removes the cache contents matching key.
     *
     * @param  string|int  $key
     * @param  string  $group
     * @return bool True on success. False on failure.
     */
    function wp_cache_delete($key, $group = '')
    {
    }
    /**
     * Removes all cache items.
     *
     * @return bool True on success. False on failure.
     */
    function wp_cache_flush()
    {
    }
    /**
     * Retrieve the cache content from the cache by key.
     *
     * @param  string|int  $key
     * @param  string  $group
     * @param  bool  $force
     * @param  null  $found
     * @return mixed False on failure. Cache content on success.
     */
    function wp_cache_get($key, $group = '', $force = \false, &$found = \null)
    {
    }
    /**
     * Store an item in the cache.
     *
     * @param  string|int  $key
     * @param  mixed  $data
     * @param  string  $group
     * @param  int  $expire
     * @return bool False on failure. True on success.
     */
    function wp_cache_set($key, $data, $group = '', $expire = 0)
    {
    }
    /**
     * Replaces the content of the cache with new data.
     *
     * @param  string|int  $key
     * @param  mixed  $data
     * @param  string  $group
     * @param  int  $expire
     * @return bool False if original value does not exists. True if replaced.
     */
    function wp_cache_replace($key, $data, $group = '', $expire = 0)
    {
    }
    /**
     * Switches the internal blog ID (prefix).
     *
     * @param  string|int  $blog_id
     */
    function wp_cache_switch_to_blog($blog_id)
    {
    }
    /**
     * Adds a group or set of groups to the list of global groups.
     *
     * @param  string|array  $groups
     */
    function wp_cache_add_global_groups($groups)
    {
    }
    /**
     * Adds a group or set of groups to the list of non-persistent groups.
     *
     * @param  string|array  $groups
     */
    function wp_cache_add_non_persistent_groups($groups)
    {
    }
    /**
     * Reset internal cache keys and structures.
     *
     * @return bool
     */
    function wp_cache_reset()
    {
    }
    use Illuminate\Container\Container;
    use Illuminate\Contracts\Auth\Factory as AuthFactory;
    use Illuminate\Contracts\Broadcasting\Factory as BroadcastFactory;
    use Illuminate\Contracts\Bus\Dispatcher;
    use Illuminate\Contracts\Cookie\Factory as CookieFactory;
    use Illuminate\Contracts\Debug\ExceptionHandler;
    use Illuminate\Contracts\Routing\ResponseFactory;
    use Illuminate\Contracts\Routing\UrlGenerator;
    use Illuminate\Contracts\Support\Responsable;
    use Illuminate\Contracts\Validation\Factory as ValidationFactory;
    use Illuminate\Contracts\View\Factory as ViewFactory;
    use Illuminate\Http\Exceptions\HttpResponseException;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Log\LogManager;
    use Illuminate\Queue\SerializableClosure;
    use Illuminate\Routing\Redirector;
    use Illuminate\Support\Facades\Date;
    use Illuminate\Support\HtmlString;
    use Psr\Log\LoggerInterface;
    use Symfony\Component\Debug\Exception\FatalThrowableError;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpKernel\Exception\HttpException;
    use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    use Themosis\Core\Bus\PendingDispatch;
    use Themosis\Core\Mix;
    /**
     * Throw an HttpException with the given data.
     *
     * @param  Response|Responsable|int  $code
     * @param  string  $message
     *
     * @throws HttpResponseException
     * @throws HttpException
     * @throws NotFoundHttpException
     */
    function abort($code, $message = '', array $headers = [])
    {
    }
    /**
     * Throw an HttpException with the given data if the given condition is true.
     *
     * @param  bool  $boolean
     * @param  \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Support\Responsable|int  $code
     * @param  string  $message
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    function abort_if($boolean, $code, $message = '', array $headers = [])
    {
    }
    /**
     * Throw an HttpException with the given data unless the given condition is true.
     *
     * @param  bool  $boolean
     * @param  \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Support\Responsable|int  $code
     * @param  string  $message
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    function abort_unless($boolean, $code, $message = '', array $headers = [])
    {
    }
    /**
     * Generate the URL to a controller action.
     *
     * @param  string|array  $name
     * @param  mixed  $parameters
     * @param  bool  $absolute
     * @return string
     */
    function action($name, $parameters = [], $absolute = \true)
    {
    }
    /**
     * Get the available container instance.
     *
     * @param  string  $abstract
     * @return mixed|\Themosis\Core\Application
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function app($abstract = \null, array $parameters = [])
    {
    }
    /**
     * Get the application path.
     *
     * @param  string  $path
     * @return string
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function app_path($path = '')
    {
    }
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool  $secure
     * @return string
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function asset($path, $secure = \null)
    {
    }
    /**
     * Get the available auth instance.
     *
     * @param  string|null  $guard
     * @return \Illuminate\Contracts\Auth\Factory|\Illuminate\Contracts\Auth\Guard
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function auth($guard = \null)
    {
    }
    /**
     * Create a redirect response to the previous location.
     *
     * @param  int  $status
     * @param  array  $headers
     * @param  mixed  $fallback
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function back($status = 302, $headers = [], $fallback = \false)
    {
    }
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function base_path($path = '')
    {
    }
    /**
     * Hash the given value against the bcrypt algorithm.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    function bcrypt($value, $options = [])
    {
    }
    /**
     * Begin broadcasting an event.
     *
     * @param  null  $event
     * @return \Illuminate\Broadcasting\PendingBroadcast
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function broadcast($event = \null)
    {
    }
    /**
     * Get / set the specified cache value.
     *
     * If an array is passed, we'll assume you want to put to the cache.
     *
     * @param dynamic  key|key,default|data,expiration|null
     * @return mixed|\Illuminate\Cache\CacheManager
     *
     * @throws \Exception
     */
    function cache()
    {
    }
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Illuminate\Config\Repository
     *
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    function config($key = \null, $default = \null)
    {
    }
    /**
     * Return the root config path.
     *
     * @param  string  $path
     * @return string
     */
    function config_path($path = '')
    {
    }
    /**
     * Get the path to the content public directory.
     *
     * @param  string  $path
     * @return string
     */
    function content_path($path = '')
    {
    }
    /**
     * Create a new cookie instance.
     *
     * @param  string|null  $name
     * @param  string|null  $value
     * @param  int  $minutes
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null  $secure
     * @param  bool  $httpOnly
     * @param  bool  $raw
     * @param  string|null  $sameSite
     * @return \Illuminate\Cookie\CookieJar|\Symfony\Component\HttpFoundation\Cookie
     */
    function cookie($name = \null, $value = \null, $minutes = 0, $path = \null, $domain = \null, $secure = \null, $httpOnly = \true, $raw = \false, $sameSite = \null)
    {
    }
    /**
     * Generate a CSRF token form field.
     *
     * @return HtmlString
     */
    function csrf_field()
    {
    }
    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    function csrf_token()
    {
    }
    /**
     * Get the database path.
     *
     * @param  string  $path
     * @return string
     */
    function database_path($path = '')
    {
    }
    /**
     * Decrypt the given value.
     *
     * @param  string  $value
     * @param  bool  $unserialize
     * @return mixed
     */
    function decrypt($value, $unserialize = \true)
    {
    }
    /**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return PendingDispatch
     */
    function dispatch($job)
    {
    }
    /**
     * Dispatch a command to its appropriate handler in the current process.
     *
     * @param  mixed  $job
     * @param  null  $handler
     * @return mixed
     */
    function dispatch_now($job, $handler = \null)
    {
    }
    /**
     * Dispatch a command to its appropriate handler in the current process.
     *
     * Queueable jobs will be dispatched to the "sync" queue.
     *
     * @param  mixed  $job
     * @param  mixed  $handler
     * @return mixed
     */
    function dispatch_sync($job, $handler = \null)
    {
    }
    /**
     * Encrypt the given value.
     *
     * @param  mixed  $value
     * @param  bool  $serialize
     * @return string
     */
    function encrypt($value, $serialize = \true)
    {
    }
    /**
     * Dispatch an event and call the listeners.
     *
     * @param  string|object  $args
     * @return array|null
     */
    function event(...$args)
    {
    }
    /**
     * Write some information to the log.
     *
     * @param  string  $message
     * @param  array  $context
     */
    function info($message, $context = [])
    {
    }
    /**
     * Determine if current WordPress condition is a sub-page (of).
     *
     * @param  int|string|array  $parent
     * @return bool
     */
    function is_subpage($parent)
    {
    }
    /**
     * Register the .mo file for the application text domain translations.
     *
     *
     * @return bool
     *
     * @throws ErrorException
     */
    function load_application_textdomain(string $domain, string $locale)
    {
    }
    /**
     * Register the .mo file for any themosis plugins. Work for extensions
     * installed inside the "plugins" and "mu-plugins" directories.
     *
     *
     * @return bool
     */
    function load_themosis_plugin_textdomain(string $domain, string $path)
    {
    }
    /**
     * Log a debug message to the logs.
     *
     * @param  string  $message
     * @return LogManager
     */
    function logger($message = \null, array $context = [])
    {
    }
    /**
     * Get a log driver instance.
     *
     * @param  string  $driver
     * @return LogManager|LoggerInterface
     */
    function logs($driver = \null)
    {
    }
    /**
     * Retrieve metadata for the specified object.
     *
     * @param  int  $object_id
     * @param  string  $meta_key
     * @param  bool  $single
     * @param  string  $meta_type
     * @return mixed
     */
    function meta($object_id, $meta_key = '', $single = \false, $meta_type = 'post')
    {
    }
    /**
     * Generate a form field to spoof the HTTP verb usef by forms.
     *
     * @param  string  $method
     * @return HtmlString
     */
    function method_field($method)
    {
    }
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = '')
    {
    }
    /**
     * Return the mu-plugins path.
     *
     * @param  string  $path
     * @return string
     */
    function muplugins_path($path = '')
    {
    }
    /**
     * Create a new Carbon instance for the current time.
     *
     * @param  \DateTimeZone|string|null  $tz
     * @return \Illuminate\Support\Carbon
     */
    function now($tz = \null)
    {
    }
    /**
     * Retrieve an old input item.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    function old($key = \null, $default = \null)
    {
    }
    /**
     * Get a policy instance for a given class.
     *
     * @param  object|string  $class
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    function policy($class)
    {
    }
    /**
     * Return the plugins path.
     *
     * @param  string  $path
     * @return string
     */
    function plugins_path($path = '')
    {
    }
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function public_path($path = '')
    {
    }
    /**
     * Get a redirector instance.
     *
     * @param  null  $to
     * @param  int  $status
     * @param  array  $headers
     * @param  null  $secure
     * @return Redirector|RedirectResponse
     */
    function redirect($to = \null, $status = 302, $headers = [], $secure = \null)
    {
    }
    /**
     * Report an exception.
     *
     * @param  \Exception  $exception
     */
    function report($exception)
    {
    }
    /**
     * Get an instance of the current request or an input item from the request.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return Request|string|array
     */
    function request($key = \null, $default = \null)
    {
    }
    /**
     * Catch a potential exception and return a default value.
     *
     * @param  mixed  $rescue
     * @param  bool  $report
     * @return mixed
     */
    function rescue(callable $callback, $rescue = \null, $report = \true)
    {
    }
    /**
     * Resolve a service from the container.
     *
     * @param  string  $name
     * @return mixed
     */
    function resolve($name, array $parameters = [])
    {
    }
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */
    function resource_path($path = '')
    {
    }
    /**
     * Return a new response from the application.
     *
     * @param  string  $content
     * @param  int  $status
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Routing\ResponseFactory
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    function response($content = '', $status = 200, array $headers = [])
    {
    }
    /**
     * Return an URL based on the root domain.
     */
    function rootUrl(string $uri = '') : string
    {
    }
    /**
     * Generate the URL to a named route.
     *
     * @param  array  $parameters
     * @param  bool  $absolute
     * @return string
     */
    function route($name, $parameters = [], $absolute = \true)
    {
    }
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */
    function secure_asset($path)
    {
    }
    /**
     * Generate a HTTPS url for the application.
     *
     * @param  string  $path
     * @param  mixed  $parameters
     * @return string
     */
    function secure_url($path, $parameters = [])
    {
    }
    /**
     * Get / set the specified session value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Illuminate\Session\Store|\Illuminate\Session\SessionManager
     *
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    function session($key = \null, $default = \null)
    {
    }
    /**
     * Get the path to the storage folder.
     *
     * @param  string  $path
     * @return string
     */
    function storage_path($path = '')
    {
    }
    /**
     * Get the path to the themes folder.
     *
     * @param  string  $path
     * @return string
     */
    function themes_path($path = '')
    {
    }
    /**
     * Create a new Carbon instance for the current date.
     *
     * @param  \DateTimeZone|string|null  $tz
     * @return \Illuminate\Support\Carbon
     */
    function today($tz = \null)
    {
    }
    /**
     * Translate the given message.
     *
     * @param  string  $key
     * @param  array  $replace
     * @param  string  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function trans($key = \null, $replace = [], $locale = \null)
    {
    }
    /**
     * Translates the given message based on a count.
     *
     * @param  string  $key
     * @param  int|array|\Countable  $number
     * @param  string  $locale
     * @return string
     */
    function trans_choice($key, $number, array $replace = [], $locale = \null)
    {
    }
    /**
     * Return a URL for the application.
     *
     * @param  string  $path
     * @param  array  $parameters
     * @param  bool  $secure
     * @return UrlGenerator|string
     */
    function url($path = \null, $parameters = [], $secure = \null)
    {
    }
    /**
     * Create a new validator instance.
     *
     *
     * @return ValidationFactory|\Illuminate\Validation\Validator
     */
    function validator(array $data = [], array $rules = [], array $messages = [], array $customAttributes = [])
    {
    }
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string  $view
     * @param  array  $data
     * @param  array  $mergeData
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\Factory
     */
    function view($view = \null, $data = [], $mergeData = [])
    {
    }
    /**
     * Get the public web path.
     *
     * @param  string  $path
     * @return string
     */
    function web_path($path = '')
    {
    }
    use Themosis\Core\Application;
    use Illuminate\Support\Str;
    use Monolog\Handler\NullHandler;
    use Monolog\Handler\StreamHandler;
    use Monolog\Handler\SyslogUdpHandler;
    use Illuminate\Support\Str;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Contracts\Http\Kernel;
    use Themosis\Core\Application;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use Themosis\Core\HelloDolly;
}