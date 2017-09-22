<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * phpbb_cache_container.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class phpbb_cache_container extends Symfony\Component\DependencyInjection\ContainerBuilder
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'acl.permissions' => 'getAcl_PermissionsService',
            'auth' => 'getAuthService',
            'auth.provider.apache' => 'getAuth_Provider_ApacheService',
            'auth.provider.db' => 'getAuth_Provider_DbService',
            'auth.provider.ldap' => 'getAuth_Provider_LdapService',
            'auth.provider.oauth' => 'getAuth_Provider_OauthService',
            'auth.provider.oauth.service.bitly' => 'getAuth_Provider_Oauth_Service_BitlyService',
            'auth.provider.oauth.service.facebook' => 'getAuth_Provider_Oauth_Service_FacebookService',
            'auth.provider.oauth.service.google' => 'getAuth_Provider_Oauth_Service_GoogleService',
            'auth.provider.oauth.service_collection' => 'getAuth_Provider_Oauth_ServiceCollectionService',
            'auth.provider_collection' => 'getAuth_ProviderCollectionService',
            'avatar.driver.gravatar' => 'getAvatar_Driver_GravatarService',
            'avatar.driver.local' => 'getAvatar_Driver_LocalService',
            'avatar.driver.remote' => 'getAvatar_Driver_RemoteService',
            'avatar.driver.upload' => 'getAvatar_Driver_UploadService',
            'avatar.driver_collection' => 'getAvatar_DriverCollectionService',
            'avatar.manager' => 'getAvatar_ManagerService',
            'cache' => 'getCacheService',
            'cache.driver' => 'getCache_DriverService',
            'captcha.factory' => 'getCaptcha_FactoryService',
            'captcha.plugins.service_collection' => 'getCaptcha_Plugins_ServiceCollectionService',
            'class_loader' => 'getClassLoaderService',
            'class_loader.ext' => 'getClassLoader_ExtService',
            'config' => 'getConfigService',
            'config.php' => 'getConfig_PhpService',
            'config_text' => 'getConfigTextService',
            'console.command.cache.purge' => 'getConsole_Command_Cache_PurgeService',
            'console.command.config.delete' => 'getConsole_Command_Config_DeleteService',
            'console.command.config.get' => 'getConsole_Command_Config_GetService',
            'console.command.config.increment' => 'getConsole_Command_Config_IncrementService',
            'console.command.config.set' => 'getConsole_Command_Config_SetService',
            'console.command.config.set_atomic' => 'getConsole_Command_Config_SetAtomicService',
            'console.command.cron.list' => 'getConsole_Command_Cron_ListService',
            'console.command.cron.run' => 'getConsole_Command_Cron_RunService',
            'console.command.db.migrate' => 'getConsole_Command_Db_MigrateService',
            'console.command.dev.migration_tips' => 'getConsole_Command_Dev_MigrationTipsService',
            'console.command.extension.disable' => 'getConsole_Command_Extension_DisableService',
            'console.command.extension.enable' => 'getConsole_Command_Extension_EnableService',
            'console.command.extension.purge' => 'getConsole_Command_Extension_PurgeService',
            'console.command.extension.show' => 'getConsole_Command_Extension_ShowService',
            'console.command.fixup.recalculate_email_hash' => 'getConsole_Command_Fixup_RecalculateEmailHashService',
            'console.command_collection' => 'getConsole_CommandCollectionService',
            'content.visibility' => 'getContent_VisibilityService',
            'controller.helper' => 'getController_HelperService',
            'controller.provider' => 'getController_ProviderService',
            'controller.resolver' => 'getController_ResolverService',
            'core.captcha.plugins.gd' => 'getCore_Captcha_Plugins_GdService',
            'core.captcha.plugins.gd_wave' => 'getCore_Captcha_Plugins_GdWaveService',
            'core.captcha.plugins.nogd' => 'getCore_Captcha_Plugins_NogdService',
            'core.captcha.plugins.qa' => 'getCore_Captcha_Plugins_QaService',
            'core.captcha.plugins.recaptcha' => 'getCore_Captcha_Plugins_RecaptchaService',
            'cron.lock_db' => 'getCron_LockDbService',
            'cron.manager' => 'getCron_ManagerService',
            'cron.task.core.prune_all_forums' => 'getCron_Task_Core_PruneAllForumsService',
            'cron.task.core.prune_forum' => 'getCron_Task_Core_PruneForumService',
            'cron.task.core.prune_notifications' => 'getCron_Task_Core_PruneNotificationsService',
            'cron.task.core.prune_shadow_topics' => 'getCron_Task_Core_PruneShadowTopicsService',
            'cron.task.core.queue' => 'getCron_Task_Core_QueueService',
            'cron.task.core.tidy_cache' => 'getCron_Task_Core_TidyCacheService',
            'cron.task.core.tidy_database' => 'getCron_Task_Core_TidyDatabaseService',
            'cron.task.core.tidy_plupload' => 'getCron_Task_Core_TidyPluploadService',
            'cron.task.core.tidy_search' => 'getCron_Task_Core_TidySearchService',
            'cron.task.core.tidy_sessions' => 'getCron_Task_Core_TidySessionsService',
            'cron.task.core.tidy_warnings' => 'getCron_Task_Core_TidyWarningsService',
            'cron.task_collection' => 'getCron_TaskCollectionService',
            'dbal.conn' => 'getDbal_ConnService',
            'dbal.conn.driver' => 'getDbal_Conn_DriverService',
            'dbal.tools' => 'getDbal_ToolsService',
            'derky.sortablescaptcha.captcha.sortables' => 'getDerky_Sortablescaptcha_Captcha_SortablesService',
            'dispatcher' => 'getDispatcherService',
            'ext.manager' => 'getExt_ManagerService',
            'feed.factory' => 'getFeed_FactoryService',
            'feed.forum' => 'getFeed_ForumService',
            'feed.forums' => 'getFeed_ForumsService',
            'feed.helper' => 'getFeed_HelperService',
            'feed.news' => 'getFeed_NewsService',
            'feed.overall' => 'getFeed_OverallService',
            'feed.topic' => 'getFeed_TopicService',
            'feed.topics' => 'getFeed_TopicsService',
            'feed.topics_active' => 'getFeed_TopicsActiveService',
            'file_downloader' => 'getFileDownloaderService',
            'filesystem' => 'getFilesystemService',
            'groupposition.legend' => 'getGroupposition_LegendService',
            'groupposition.teampage' => 'getGroupposition_TeampageService',
            'hook_finder' => 'getHookFinderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel_exception_subscriber' => 'getKernelExceptionSubscriberService',
            'kernel_request_subscriber' => 'getKernelRequestSubscriberService',
            'kernel_terminate_subscriber' => 'getKernelTerminateSubscriberService',
            'log' => 'getLogService',
            'message.form.admin' => 'getMessage_Form_AdminService',
            'message.form.topic' => 'getMessage_Form_TopicService',
            'message.form.user' => 'getMessage_Form_UserService',
            'migrator' => 'getMigratorService',
            'migrator.helper' => 'getMigrator_HelperService',
            'migrator.tool.config' => 'getMigrator_Tool_ConfigService',
            'migrator.tool.config_text' => 'getMigrator_Tool_ConfigTextService',
            'migrator.tool.module' => 'getMigrator_Tool_ModuleService',
            'migrator.tool.permission' => 'getMigrator_Tool_PermissionService',
            'migrator.tool_collection' => 'getMigrator_ToolCollectionService',
            'mimetype.content_guesser' => 'getMimetype_ContentGuesserService',
            'mimetype.extension_guesser' => 'getMimetype_ExtensionGuesserService',
            'mimetype.filebinary_mimetype_guesser' => 'getMimetype_FilebinaryMimetypeGuesserService',
            'mimetype.fileinfo_mimetype_guesser' => 'getMimetype_FileinfoMimetypeGuesserService',
            'mimetype.guesser' => 'getMimetype_GuesserService',
            'mimetype.guesser_collection' => 'getMimetype_GuesserCollectionService',
            'notification.method.email' => 'getNotification_Method_EmailService',
            'notification.method.jabber' => 'getNotification_Method_JabberService',
            'notification.method_collection' => 'getNotification_MethodCollectionService',
            'notification.type.admin_activate_user' => 'getNotification_Type_AdminActivateUserService',
            'notification.type.approve_post' => 'getNotification_Type_ApprovePostService',
            'notification.type.approve_topic' => 'getNotification_Type_ApproveTopicService',
            'notification.type.bookmark' => 'getNotification_Type_BookmarkService',
            'notification.type.disapprove_post' => 'getNotification_Type_DisapprovePostService',
            'notification.type.disapprove_topic' => 'getNotification_Type_DisapproveTopicService',
            'notification.type.group_request' => 'getNotification_Type_GroupRequestService',
            'notification.type.group_request_approved' => 'getNotification_Type_GroupRequestApprovedService',
            'notification.type.pm' => 'getNotification_Type_PmService',
            'notification.type.post' => 'getNotification_Type_PostService',
            'notification.type.post_in_queue' => 'getNotification_Type_PostInQueueService',
            'notification.type.quote' => 'getNotification_Type_QuoteService',
            'notification.type.report_pm' => 'getNotification_Type_ReportPmService',
            'notification.type.report_pm_closed' => 'getNotification_Type_ReportPmClosedService',
            'notification.type.report_post' => 'getNotification_Type_ReportPostService',
            'notification.type.report_post_closed' => 'getNotification_Type_ReportPostClosedService',
            'notification.type.topic' => 'getNotification_Type_TopicService',
            'notification.type.topic_in_queue' => 'getNotification_Type_TopicInQueueService',
            'notification.type_collection' => 'getNotification_TypeCollectionService',
            'notification_manager' => 'getNotificationManagerService',
            'pagination' => 'getPaginationService',
            'passwords.driver.bcrypt' => 'getPasswords_Driver_BcryptService',
            'passwords.driver.bcrypt_2y' => 'getPasswords_Driver_Bcrypt2yService',
            'passwords.driver.bcrypt_wcf2' => 'getPasswords_Driver_BcryptWcf2Service',
            'passwords.driver.convert_password' => 'getPasswords_Driver_ConvertPasswordService',
            'passwords.driver.md5_mybb' => 'getPasswords_Driver_Md5MybbService',
            'passwords.driver.md5_phpbb2' => 'getPasswords_Driver_Md5Phpbb2Service',
            'passwords.driver.md5_vb' => 'getPasswords_Driver_Md5VbService',
            'passwords.driver.phpass' => 'getPasswords_Driver_PhpassService',
            'passwords.driver.salted_md5' => 'getPasswords_Driver_SaltedMd5Service',
            'passwords.driver.sha1' => 'getPasswords_Driver_Sha1Service',
            'passwords.driver.sha1_smf' => 'getPasswords_Driver_Sha1SmfService',
            'passwords.driver.sha1_wcf1' => 'getPasswords_Driver_Sha1Wcf1Service',
            'passwords.driver_collection' => 'getPasswords_DriverCollectionService',
            'passwords.driver_helper' => 'getPasswords_DriverHelperService',
            'passwords.helper' => 'getPasswords_HelperService',
            'passwords.manager' => 'getPasswords_ManagerService',
            'path_helper' => 'getPathHelperService',
            'php_ini' => 'getPhpIniService',
            'plupload' => 'getPluploadService',
            'profilefields.lang_helper' => 'getProfilefields_LangHelperService',
            'profilefields.manager' => 'getProfilefields_ManagerService',
            'profilefields.type.bool' => 'getProfilefields_Type_BoolService',
            'profilefields.type.date' => 'getProfilefields_Type_DateService',
            'profilefields.type.dropdown' => 'getProfilefields_Type_DropdownService',
            'profilefields.type.googleplus' => 'getProfilefields_Type_GoogleplusService',
            'profilefields.type.int' => 'getProfilefields_Type_IntService',
            'profilefields.type.string' => 'getProfilefields_Type_StringService',
            'profilefields.type.text' => 'getProfilefields_Type_TextService',
            'profilefields.type.url' => 'getProfilefields_Type_UrlService',
            'profilefields.type_collection' => 'getProfilefields_TypeCollectionService',
            'request' => 'getRequestService',
            'symfony_request' => 'getSymfonyRequestService',
            'symfony_response_listener' => 'getSymfonyResponseListenerService',
            'template' => 'getTemplateService',
            'template_context' => 'getTemplateContextService',
            'user' => 'getUserService',
            'user_loader' => 'getUserLoaderService',
            'version_helper' => 'getVersionHelperService',
            'viewonline_helper' => 'getViewonlineHelperService',
        );

        $this->aliases = array();
    }

    /**
     * Gets the 'acl.permissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\permissions A phpbb\permissions instance.
     */
    protected function getAcl_PermissionsService()
    {
        return $this->services['acl.permissions'] = new \phpbb\permissions($this->get('dispatcher'), $this->get('user'));
    }

    /**
     * Gets the 'auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\auth A phpbb\auth\auth instance.
     */
    protected function getAuthService()
    {
        return $this->services['auth'] = new \phpbb\auth\auth();
    }

    /**
     * Gets the 'auth.provider.apache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\apache A phpbb\auth\provider\apache instance.
     */
    protected function getAuth_Provider_ApacheService()
    {
        return $this->services['auth.provider.apache'] = new \phpbb\auth\provider\apache($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), './', 'php');
    }

    /**
     * Gets the 'auth.provider.db' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\db A phpbb\auth\provider\db instance.
     */
    protected function getAuth_Provider_DbService()
    {
        return $this->services['auth.provider.db'] = new \phpbb\auth\provider\db($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), $this, './', 'php');
    }

    /**
     * Gets the 'auth.provider.ldap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\ldap A phpbb\auth\provider\ldap instance.
     */
    protected function getAuth_Provider_LdapService()
    {
        return $this->services['auth.provider.ldap'] = new \phpbb\auth\provider\ldap($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('user'));
    }

    /**
     * Gets the 'auth.provider.oauth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\oauth\oauth A phpbb\auth\provider\oauth\oauth instance.
     */
    protected function getAuth_Provider_OauthService()
    {
        return $this->services['auth.provider.oauth'] = new \phpbb\auth\provider\oauth\oauth($this->get('dbal.conn'), $this->get('config'), $this->get('passwords.manager'), $this->get('request'), $this->get('user'), 'phpbb_oauth_tokens', 'phpbb_oauth_accounts', $this->get('auth.provider.oauth.service_collection'), 'phpbb_users', $this, './', 'php');
    }

    /**
     * Gets the 'auth.provider.oauth.service.bitly' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\oauth\service\bitly A phpbb\auth\provider\oauth\service\bitly instance.
     */
    protected function getAuth_Provider_Oauth_Service_BitlyService()
    {
        return $this->services['auth.provider.oauth.service.bitly'] = new \phpbb\auth\provider\oauth\service\bitly($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the 'auth.provider.oauth.service.facebook' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\oauth\service\facebook A phpbb\auth\provider\oauth\service\facebook instance.
     */
    protected function getAuth_Provider_Oauth_Service_FacebookService()
    {
        return $this->services['auth.provider.oauth.service.facebook'] = new \phpbb\auth\provider\oauth\service\facebook($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the 'auth.provider.oauth.service.google' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider\oauth\service\google A phpbb\auth\provider\oauth\service\google instance.
     */
    protected function getAuth_Provider_Oauth_Service_GoogleService()
    {
        return $this->services['auth.provider.oauth.service.google'] = new \phpbb\auth\provider\oauth\service\google($this->get('config'), $this->get('request'));
    }

    /**
     * Gets the 'auth.provider.oauth.service_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getAuth_Provider_Oauth_ServiceCollectionService()
    {
        $this->services['auth.provider.oauth.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('auth.provider.oauth.service.bitly');
        $instance->add('auth.provider.oauth.service.facebook');
        $instance->add('auth.provider.oauth.service.google');

        return $instance;
    }

    /**
     * Gets the 'auth.provider_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\auth\provider_collection A phpbb\auth\provider_collection instance.
     */
    protected function getAuth_ProviderCollectionService()
    {
        $this->services['auth.provider_collection'] = $instance = new \phpbb\auth\provider_collection($this, $this->get('config'));

        $instance->add('auth.provider.db');
        $instance->add('auth.provider.apache');
        $instance->add('auth.provider.ldap');
        $instance->add('auth.provider.oauth');

        return $instance;
    }

    /**
     * Gets the 'avatar.driver.gravatar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\avatar\driver\gravatar A phpbb\avatar\driver\gravatar instance.
     */
    protected function getAvatar_Driver_GravatarService()
    {
        $this->services['avatar.driver.gravatar'] = $instance = new \phpbb\avatar\driver\gravatar($this->get('config'), './', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.gravatar');

        return $instance;
    }

    /**
     * Gets the 'avatar.driver.local' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\avatar\driver\local A phpbb\avatar\driver\local instance.
     */
    protected function getAvatar_Driver_LocalService()
    {
        $this->services['avatar.driver.local'] = $instance = new \phpbb\avatar\driver\local($this->get('config'), './', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.local');

        return $instance;
    }

    /**
     * Gets the 'avatar.driver.remote' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\avatar\driver\remote A phpbb\avatar\driver\remote instance.
     */
    protected function getAvatar_Driver_RemoteService()
    {
        $this->services['avatar.driver.remote'] = $instance = new \phpbb\avatar\driver\remote($this->get('config'), './', 'php', $this->get('path_helper'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.remote');

        return $instance;
    }

    /**
     * Gets the 'avatar.driver.upload' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\avatar\driver\upload A phpbb\avatar\driver\upload instance.
     */
    protected function getAvatar_Driver_UploadService()
    {
        $this->services['avatar.driver.upload'] = $instance = new \phpbb\avatar\driver\upload($this->get('config'), './', 'php', $this->get('path_helper'), $this->get('mimetype.guesser'), $this->get('dispatcher'), $this->get('cache.driver'));

        $instance->set_name('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the 'avatar.driver_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getAvatar_DriverCollectionService()
    {
        $this->services['avatar.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('avatar.driver.gravatar');
        $instance->add('avatar.driver.local');
        $instance->add('avatar.driver.remote');
        $instance->add('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the 'avatar.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\avatar\manager A phpbb\avatar\manager instance.
     */
    protected function getAvatar_ManagerService()
    {
        return $this->services['avatar.manager'] = new \phpbb\avatar\manager($this->get('config'), $this->get('avatar.driver_collection'));
    }

    /**
     * Gets the 'cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cache\service A phpbb\cache\service instance.
     */
    protected function getCacheService()
    {
        return $this->services['cache'] = new \phpbb\cache\service($this->get('cache.driver'), $this->get('config'), $this->get('dbal.conn'), './', 'php');
    }

    /**
     * Gets the 'cache.driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cache\driver\file A phpbb\cache\driver\file instance.
     */
    protected function getCache_DriverService()
    {
        return $this->services['cache.driver'] = new \phpbb\cache\driver\file();
    }

    /**
     * Gets the 'captcha.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\captcha\factory A phpbb\captcha\factory instance.
     */
    protected function getCaptcha_FactoryService()
    {
        return $this->services['captcha.factory'] = new \phpbb\captcha\factory($this, $this->get('captcha.plugins.service_collection'));
    }

    /**
     * Gets the 'captcha.plugins.service_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getCaptcha_Plugins_ServiceCollectionService()
    {
        $this->services['captcha.plugins.service_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('core.captcha.plugins.gd');
        $instance->add('core.captcha.plugins.gd_wave');
        $instance->add('core.captcha.plugins.nogd');
        $instance->add('core.captcha.plugins.qa');
        $instance->add('core.captcha.plugins.recaptcha');
        $instance->add('derky.sortablescaptcha.captcha.sortables');

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\class_loader A phpbb\class_loader instance.
     */
    protected function getClassLoaderService()
    {
        $this->services['class_loader'] = $instance = new \phpbb\class_loader('phpbb\\', './includes/', 'php');

        $instance->register();
        $instance->set_cache($this->get('cache.driver'));

        return $instance;
    }

    /**
     * Gets the 'class_loader.ext' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\class_loader A phpbb\class_loader instance.
     */
    protected function getClassLoader_ExtService()
    {
        $this->services['class_loader.ext'] = $instance = new \phpbb\class_loader('\\', './ext/', 'php');

        $instance->register();
        $instance->set_cache($this->get('cache.driver'));

        return $instance;
    }

    /**
     * Gets the 'config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\config\db A phpbb\config\db instance.
     */
    protected function getConfigService()
    {
        return $this->services['config'] = new \phpbb\config\db($this->get('dbal.conn'), $this->get('cache.driver'), 'phpbb_config');
    }

    /**
     * Gets the 'config.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getConfig_PhpService()
    {
        throw new RuntimeException('You have requested a synthetic service ("config.php"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'config_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\config\db_text A phpbb\config\db_text instance.
     */
    protected function getConfigTextService()
    {
        return $this->services['config_text'] = new \phpbb\config\db_text($this->get('dbal.conn'), 'phpbb_config_text');
    }

    /**
     * Gets the 'console.command.cache.purge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\cache\purge A phpbb\console\command\cache\purge instance.
     */
    protected function getConsole_Command_Cache_PurgeService()
    {
        return $this->services['console.command.cache.purge'] = new \phpbb\console\command\cache\purge($this->get('user'), $this->get('cache.driver'), $this->get('dbal.conn'), $this->get('auth'), $this->get('log'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.config.delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\config\delete A phpbb\console\command\config\delete instance.
     */
    protected function getConsole_Command_Config_DeleteService()
    {
        return $this->services['console.command.config.delete'] = new \phpbb\console\command\config\delete($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.config.get' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\config\get A phpbb\console\command\config\get instance.
     */
    protected function getConsole_Command_Config_GetService()
    {
        return $this->services['console.command.config.get'] = new \phpbb\console\command\config\get($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.config.increment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\config\increment A phpbb\console\command\config\increment instance.
     */
    protected function getConsole_Command_Config_IncrementService()
    {
        return $this->services['console.command.config.increment'] = new \phpbb\console\command\config\increment($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.config.set' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\config\set A phpbb\console\command\config\set instance.
     */
    protected function getConsole_Command_Config_SetService()
    {
        return $this->services['console.command.config.set'] = new \phpbb\console\command\config\set($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.config.set_atomic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\config\set_atomic A phpbb\console\command\config\set_atomic instance.
     */
    protected function getConsole_Command_Config_SetAtomicService()
    {
        return $this->services['console.command.config.set_atomic'] = new \phpbb\console\command\config\set_atomic($this->get('user'), $this->get('config'));
    }

    /**
     * Gets the 'console.command.cron.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\cron\cron_list A phpbb\console\command\cron\cron_list instance.
     */
    protected function getConsole_Command_Cron_ListService()
    {
        return $this->services['console.command.cron.list'] = new \phpbb\console\command\cron\cron_list($this->get('user'), $this->get('cron.manager'));
    }

    /**
     * Gets the 'console.command.cron.run' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\cron\run A phpbb\console\command\cron\run instance.
     */
    protected function getConsole_Command_Cron_RunService()
    {
        return $this->services['console.command.cron.run'] = new \phpbb\console\command\cron\run($this->get('user'), $this->get('cron.manager'), $this->get('cron.lock_db'));
    }

    /**
     * Gets the 'console.command.db.migrate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\db\migrate A phpbb\console\command\db\migrate instance.
     */
    protected function getConsole_Command_Db_MigrateService()
    {
        return $this->services['console.command.db.migrate'] = new \phpbb\console\command\db\migrate($this->get('user'), $this->get('migrator'), $this->get('ext.manager'), $this->get('config'), $this->get('cache'), $this->get('log'), './');
    }

    /**
     * Gets the 'console.command.dev.migration_tips' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\dev\migration_tips A phpbb\console\command\dev\migration_tips instance.
     */
    protected function getConsole_Command_Dev_MigrationTipsService()
    {
        return $this->services['console.command.dev.migration_tips'] = new \phpbb\console\command\dev\migration_tips($this->get('user'), $this->get('ext.manager'));
    }

    /**
     * Gets the 'console.command.extension.disable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\extension\disable A phpbb\console\command\extension\disable instance.
     */
    protected function getConsole_Command_Extension_DisableService()
    {
        return $this->services['console.command.extension.disable'] = new \phpbb\console\command\extension\disable($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the 'console.command.extension.enable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\extension\enable A phpbb\console\command\extension\enable instance.
     */
    protected function getConsole_Command_Extension_EnableService()
    {
        return $this->services['console.command.extension.enable'] = new \phpbb\console\command\extension\enable($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the 'console.command.extension.purge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\extension\purge A phpbb\console\command\extension\purge instance.
     */
    protected function getConsole_Command_Extension_PurgeService()
    {
        return $this->services['console.command.extension.purge'] = new \phpbb\console\command\extension\purge($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the 'console.command.extension.show' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\extension\show A phpbb\console\command\extension\show instance.
     */
    protected function getConsole_Command_Extension_ShowService()
    {
        return $this->services['console.command.extension.show'] = new \phpbb\console\command\extension\show($this->get('user'), $this->get('ext.manager'), $this->get('log'));
    }

    /**
     * Gets the 'console.command.fixup.recalculate_email_hash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\console\command\fixup\recalculate_email_hash A phpbb\console\command\fixup\recalculate_email_hash instance.
     */
    protected function getConsole_Command_Fixup_RecalculateEmailHashService()
    {
        return $this->services['console.command.fixup.recalculate_email_hash'] = new \phpbb\console\command\fixup\recalculate_email_hash($this->get('user'), $this->get('dbal.conn'));
    }

    /**
     * Gets the 'console.command_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getConsole_CommandCollectionService()
    {
        $this->services['console.command_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('console.command.cache.purge');
        $instance->add('console.command.config.delete');
        $instance->add('console.command.config.increment');
        $instance->add('console.command.config.get');
        $instance->add('console.command.config.set');
        $instance->add('console.command.config.set_atomic');
        $instance->add('console.command.cron.list');
        $instance->add('console.command.cron.run');
        $instance->add('console.command.db.migrate');
        $instance->add('console.command.dev.migration_tips');
        $instance->add('console.command.extension.disable');
        $instance->add('console.command.extension.enable');
        $instance->add('console.command.extension.purge');
        $instance->add('console.command.extension.show');
        $instance->add('console.command.fixup.recalculate_email_hash');

        return $instance;
    }

    /**
     * Gets the 'content.visibility' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\content_visibility A phpbb\content_visibility instance.
     */
    protected function getContent_VisibilityService()
    {
        return $this->services['content.visibility'] = new \phpbb\content_visibility($this->get('auth'), $this->get('config'), $this->get('dispatcher'), $this->get('dbal.conn'), $this->get('user'), './', 'php', 'phpbb_forums', 'phpbb_posts', 'phpbb_topics', 'phpbb_users');
    }

    /**
     * Gets the 'controller.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\controller\helper A phpbb\controller\helper instance.
     */
    protected function getController_HelperService()
    {
        return $this->services['controller.helper'] = new \phpbb\controller\helper($this->get('template'), $this->get('user'), $this->get('config'), $this->get('controller.provider'), $this->get('ext.manager'), $this->get('symfony_request'), $this->get('request'), $this->get('filesystem'), './', 'php');
    }

    /**
     * Gets the 'controller.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\controller\provider A phpbb\controller\provider instance.
     */
    protected function getController_ProviderService()
    {
        $this->services['controller.provider'] = $instance = new \phpbb\controller\provider();

        $instance->find('./');

        return $instance;
    }

    /**
     * Gets the 'controller.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\controller\resolver A phpbb\controller\resolver instance.
     */
    protected function getController_ResolverService()
    {
        return $this->services['controller.resolver'] = new \phpbb\controller\resolver($this->get('user'), $this, './', $this->get('template'));
    }

    /**
     * Gets the 'core.captcha.plugins.gd' service.
     *
     * @return \phpbb\captcha\plugins\gd A phpbb\captcha\plugins\gd instance.
     */
    protected function getCore_Captcha_Plugins_GdService()
    {
        $instance = new \phpbb\captcha\plugins\gd();

        $instance->set_name('core.captcha.plugins.gd');

        return $instance;
    }

    /**
     * Gets the 'core.captcha.plugins.gd_wave' service.
     *
     * @return \phpbb\captcha\plugins\gd_wave A phpbb\captcha\plugins\gd_wave instance.
     */
    protected function getCore_Captcha_Plugins_GdWaveService()
    {
        $instance = new \phpbb\captcha\plugins\gd_wave();

        $instance->set_name('core.captcha.plugins.gd_wave');

        return $instance;
    }

    /**
     * Gets the 'core.captcha.plugins.nogd' service.
     *
     * @return \phpbb\captcha\plugins\nogd A phpbb\captcha\plugins\nogd instance.
     */
    protected function getCore_Captcha_Plugins_NogdService()
    {
        $instance = new \phpbb\captcha\plugins\nogd();

        $instance->set_name('core.captcha.plugins.nogd');

        return $instance;
    }

    /**
     * Gets the 'core.captcha.plugins.qa' service.
     *
     * @return \phpbb\captcha\plugins\qa A phpbb\captcha\plugins\qa instance.
     */
    protected function getCore_Captcha_Plugins_QaService()
    {
        $instance = new \phpbb\captcha\plugins\qa('phpbb_captcha_questions', 'phpbb_captcha_answers', 'phpbb_qa_confirm');

        $instance->set_name('core.captcha.plugins.qa');

        return $instance;
    }

    /**
     * Gets the 'core.captcha.plugins.recaptcha' service.
     *
     * @return \phpbb\captcha\plugins\recaptcha A phpbb\captcha\plugins\recaptcha instance.
     */
    protected function getCore_Captcha_Plugins_RecaptchaService()
    {
        $instance = new \phpbb\captcha\plugins\recaptcha();

        $instance->set_name('core.captcha.plugins.recaptcha');

        return $instance;
    }

    /**
     * Gets the 'cron.lock_db' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\lock\db A phpbb\lock\db instance.
     */
    protected function getCron_LockDbService()
    {
        return $this->services['cron.lock_db'] = new \phpbb\lock\db('cron_lock', $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the 'cron.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\manager A phpbb\cron\manager instance.
     */
    protected function getCron_ManagerService()
    {
        return $this->services['cron.manager'] = new \phpbb\cron\manager($this->get('cron.task_collection'), './', 'php');
    }

    /**
     * Gets the 'cron.task.core.prune_all_forums' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\prune_all_forums A phpbb\cron\task\core\prune_all_forums instance.
     */
    protected function getCron_Task_Core_PruneAllForumsService()
    {
        $this->services['cron.task.core.prune_all_forums'] = $instance = new \phpbb\cron\task\core\prune_all_forums('./', 'php', $this->get('config'), $this->get('dbal.conn'));

        $instance->set_name('cron.task.core.prune_all_forums');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.prune_forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\prune_forum A phpbb\cron\task\core\prune_forum instance.
     */
    protected function getCron_Task_Core_PruneForumService()
    {
        $this->services['cron.task.core.prune_forum'] = $instance = new \phpbb\cron\task\core\prune_forum('./', 'php', $this->get('config'), $this->get('dbal.conn'));

        $instance->set_name('cron.task.core.prune_forum');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.prune_notifications' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\prune_notifications A phpbb\cron\task\core\prune_notifications instance.
     */
    protected function getCron_Task_Core_PruneNotificationsService()
    {
        $this->services['cron.task.core.prune_notifications'] = $instance = new \phpbb\cron\task\core\prune_notifications($this->get('config'), $this->get('notification_manager'));

        $instance->set_name('cron.task.core.prune_notifications');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.prune_shadow_topics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\prune_shadow_topics A phpbb\cron\task\core\prune_shadow_topics instance.
     */
    protected function getCron_Task_Core_PruneShadowTopicsService()
    {
        $this->services['cron.task.core.prune_shadow_topics'] = $instance = new \phpbb\cron\task\core\prune_shadow_topics('./', 'php', $this->get('config'), $this->get('dbal.conn'), $this->get('log'), $this->get('user'));

        $instance->set_name('cron.task.core.prune_shadow_topics');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\queue A phpbb\cron\task\core\queue instance.
     */
    protected function getCron_Task_Core_QueueService()
    {
        $this->services['cron.task.core.queue'] = $instance = new \phpbb\cron\task\core\queue('./', 'php', $this->get('config'));

        $instance->set_name('cron.task.core.queue');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_cache A phpbb\cron\task\core\tidy_cache instance.
     */
    protected function getCron_Task_Core_TidyCacheService()
    {
        $this->services['cron.task.core.tidy_cache'] = $instance = new \phpbb\cron\task\core\tidy_cache($this->get('config'), $this->get('cache.driver'));

        $instance->set_name('cron.task.core.tidy_cache');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_database A phpbb\cron\task\core\tidy_database instance.
     */
    protected function getCron_Task_Core_TidyDatabaseService()
    {
        $this->services['cron.task.core.tidy_database'] = $instance = new \phpbb\cron\task\core\tidy_database('./', 'php', $this->get('config'));

        $instance->set_name('cron.task.core.tidy_database');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_plupload' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_plupload A phpbb\cron\task\core\tidy_plupload instance.
     */
    protected function getCron_Task_Core_TidyPluploadService()
    {
        $this->services['cron.task.core.tidy_plupload'] = $instance = new \phpbb\cron\task\core\tidy_plupload('./', $this->get('config'));

        $instance->set_name('cron.task.core.tidy_plupload');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_search A phpbb\cron\task\core\tidy_search instance.
     */
    protected function getCron_Task_Core_TidySearchService()
    {
        $this->services['cron.task.core.tidy_search'] = $instance = new \phpbb\cron\task\core\tidy_search('./', 'php', $this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), $this->get('dispatcher'));

        $instance->set_name('cron.task.core.tidy_search');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_sessions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_sessions A phpbb\cron\task\core\tidy_sessions instance.
     */
    protected function getCron_Task_Core_TidySessionsService()
    {
        $this->services['cron.task.core.tidy_sessions'] = $instance = new \phpbb\cron\task\core\tidy_sessions($this->get('config'), $this->get('user'));

        $instance->set_name('cron.task.core.tidy_sessions');

        return $instance;
    }

    /**
     * Gets the 'cron.task.core.tidy_warnings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\cron\task\core\tidy_warnings A phpbb\cron\task\core\tidy_warnings instance.
     */
    protected function getCron_Task_Core_TidyWarningsService()
    {
        $this->services['cron.task.core.tidy_warnings'] = $instance = new \phpbb\cron\task\core\tidy_warnings('./', 'php', $this->get('config'));

        $instance->set_name('cron.task.core.tidy_warnings');

        return $instance;
    }

    /**
     * Gets the 'cron.task_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getCron_TaskCollectionService()
    {
        $this->services['cron.task_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('cron.task.core.prune_all_forums');
        $instance->add('cron.task.core.prune_forum');
        $instance->add('cron.task.core.prune_shadow_topics');
        $instance->add('cron.task.core.prune_notifications');
        $instance->add('cron.task.core.queue');
        $instance->add('cron.task.core.tidy_cache');
        $instance->add('cron.task.core.tidy_database');
        $instance->add('cron.task.core.tidy_plupload');
        $instance->add('cron.task.core.tidy_search');
        $instance->add('cron.task.core.tidy_sessions');
        $instance->add('cron.task.core.tidy_warnings');

        return $instance;
    }

    /**
     * Gets the 'dbal.conn' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\driver\factory A phpbb\db\driver\factory instance.
     */
    protected function getDbal_ConnService()
    {
        return $this->services['dbal.conn'] = new \phpbb\db\driver\factory($this);
    }

    /**
     * Gets the 'dbal.conn.driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\driver\mysql A phpbb\db\driver\mysql instance.
     */
    protected function getDbal_Conn_DriverService()
    {
        $this->services['dbal.conn.driver'] = $instance = new \phpbb\db\driver\mysql();

        $instance->sql_connect('localhost', 'phpbb', 'phpbb_45fid', 'phpbb', '', false, false);

        return $instance;
    }

    /**
     * Gets the 'dbal.tools' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\tools A phpbb\db\tools instance.
     */
    protected function getDbal_ToolsService()
    {
        return $this->services['dbal.tools'] = new \phpbb\db\tools($this->get('dbal.conn'));
    }

    /**
     * Gets the 'derky.sortablescaptcha.captcha.sortables' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \derky\sortablescaptcha\captcha\sortables A derky\sortablescaptcha\captcha\sortables instance.
     */
    protected function getDerky_Sortablescaptcha_Captcha_SortablesService()
    {
        $this->services['derky.sortablescaptcha.captcha.sortables'] = $instance = new \derky\sortablescaptcha\captcha\sortables($this->get('dbal.conn'), $this->get('cache.driver'), $this->get('config'), $this->get('log'), $this->get('request'), $this->get('template'), $this->get('user'), 'phpbb_sortables_questions', 'phpbb_sortables_answers', 'phpbb_sortables_confirm');

        $instance->set_name('derky.sortablescaptcha.captcha.sortables');

        return $instance;
    }

    /**
     * Gets the 'dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\event\dispatcher A phpbb\event\dispatcher instance.
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = new \phpbb\event\dispatcher($this);

        $instance->addSubscriberService('kernel_request_subscriber', 'phpbb\\event\\kernel_request_subscriber');
        $instance->addSubscriberService('kernel_exception_subscriber', 'phpbb\\event\\kernel_exception_subscriber');
        $instance->addSubscriberService('kernel_terminate_subscriber', 'phpbb\\event\\kernel_terminate_subscriber');
        $instance->addSubscriberService('symfony_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');

        return $instance;
    }

    /**
     * Gets the 'ext.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\extension\manager A phpbb\extension\manager instance.
     */
    protected function getExt_ManagerService()
    {
        return $this->services['ext.manager'] = new \phpbb\extension\manager($this, $this->get('dbal.conn'), $this->get('config'), $this->get('filesystem'), $this->get('user'), 'phpbb_ext', './', 'php', $this->get('cache.driver'));
    }

    /**
     * Gets the 'feed.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\feed\factory A phpbb\feed\factory instance.
     */
    protected function getFeed_FactoryService()
    {
        return $this->services['feed.factory'] = new \phpbb\feed\factory($this, $this->get('config'), $this->get('dbal.conn'));
    }

    /**
     * Gets the 'feed.forum' service.
     *
     * @return \phpbb\feed\forum A phpbb\feed\forum instance.
     */
    protected function getFeed_ForumService()
    {
        return new \phpbb\feed\forum($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.forums' service.
     *
     * @return \phpbb\feed\forums A phpbb\feed\forums instance.
     */
    protected function getFeed_ForumsService()
    {
        return new \phpbb\feed\forums($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\feed\helper A phpbb\feed\helper instance.
     */
    protected function getFeed_HelperService()
    {
        return $this->services['feed.helper'] = new \phpbb\feed\helper($this->get('config'), $this->get('user'), './', 'php');
    }

    /**
     * Gets the 'feed.news' service.
     *
     * @return \phpbb\feed\news A phpbb\feed\news instance.
     */
    protected function getFeed_NewsService()
    {
        return new \phpbb\feed\news($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.overall' service.
     *
     * @return \phpbb\feed\overall A phpbb\feed\overall instance.
     */
    protected function getFeed_OverallService()
    {
        return new \phpbb\feed\overall($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.topic' service.
     *
     * @return \phpbb\feed\topic A phpbb\feed\topic instance.
     */
    protected function getFeed_TopicService()
    {
        return new \phpbb\feed\topic($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.topics' service.
     *
     * @return \phpbb\feed\topics A phpbb\feed\topics instance.
     */
    protected function getFeed_TopicsService()
    {
        return new \phpbb\feed\topics($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'feed.topics_active' service.
     *
     * @return \phpbb\feed\topics_active A phpbb\feed\topics_active instance.
     */
    protected function getFeed_TopicsActiveService()
    {
        return new \phpbb\feed\topics_active($this->get('feed.helper'), $this->get('config'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('content.visibility'), 'php');
    }

    /**
     * Gets the 'file_downloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\file_downloader A phpbb\file_downloader instance.
     */
    protected function getFileDownloaderService()
    {
        return $this->services['file_downloader'] = new \phpbb\file_downloader();
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\filesystem A phpbb\filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \phpbb\filesystem();
    }

    /**
     * Gets the 'groupposition.legend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\groupposition\legend A phpbb\groupposition\legend instance.
     */
    protected function getGroupposition_LegendService()
    {
        return $this->services['groupposition.legend'] = new \phpbb\groupposition\legend($this->get('dbal.conn'), $this->get('user'));
    }

    /**
     * Gets the 'groupposition.teampage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\groupposition\teampage A phpbb\groupposition\teampage instance.
     */
    protected function getGroupposition_TeampageService()
    {
        return $this->services['groupposition.teampage'] = new \phpbb\groupposition\teampage($this->get('dbal.conn'), $this->get('user'), $this->get('cache.driver'));
    }

    /**
     * Gets the 'hook_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\hook\finder A phpbb\hook\finder instance.
     */
    protected function getHookFinderService()
    {
        return $this->services['hook_finder'] = new \phpbb\hook\finder('./', 'php', $this->get('cache.driver'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('dispatcher'), $this->get('controller.resolver'));
    }

    /**
     * Gets the 'kernel_exception_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\event\kernel_exception_subscriber A phpbb\event\kernel_exception_subscriber instance.
     */
    protected function getKernelExceptionSubscriberService()
    {
        return $this->services['kernel_exception_subscriber'] = new \phpbb\event\kernel_exception_subscriber($this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'kernel_request_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\event\kernel_request_subscriber A phpbb\event\kernel_request_subscriber instance.
     */
    protected function getKernelRequestSubscriberService()
    {
        return $this->services['kernel_request_subscriber'] = new \phpbb\event\kernel_request_subscriber($this->get('ext.manager'), './', 'php');
    }

    /**
     * Gets the 'kernel_terminate_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\event\kernel_terminate_subscriber A phpbb\event\kernel_terminate_subscriber instance.
     */
    protected function getKernelTerminateSubscriberService()
    {
        return $this->services['kernel_terminate_subscriber'] = new \phpbb\event\kernel_terminate_subscriber();
    }

    /**
     * Gets the 'log' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\log\log A phpbb\log\log instance.
     */
    protected function getLogService()
    {
        return $this->services['log'] = new \phpbb\log\log($this->get('dbal.conn'), $this->get('user'), $this->get('auth'), $this->get('dispatcher'), './', 'adm/', 'php', 'phpbb_log');
    }

    /**
     * Gets the 'message.form.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\message\admin_form A phpbb\message\admin_form instance.
     */
    protected function getMessage_Form_AdminService()
    {
        return $this->services['message.form.admin'] = new \phpbb\message\admin_form($this->get('auth'), $this->get('config'), $this->get('config_text'), $this->get('dbal.conn'), $this->get('user'), './', 'php');
    }

    /**
     * Gets the 'message.form.topic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\message\topic_form A phpbb\message\topic_form instance.
     */
    protected function getMessage_Form_TopicService()
    {
        return $this->services['message.form.topic'] = new \phpbb\message\topic_form($this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), './', 'php');
    }

    /**
     * Gets the 'message.form.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\message\user_form A phpbb\message\user_form instance.
     */
    protected function getMessage_Form_UserService()
    {
        return $this->services['message.form.user'] = new \phpbb\message\user_form($this->get('auth'), $this->get('config'), $this->get('dbal.conn'), $this->get('user'), './', 'php');
    }

    /**
     * Gets the 'migrator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migrator A phpbb\db\migrator instance.
     */
    protected function getMigratorService()
    {
        return $this->services['migrator'] = new \phpbb\db\migrator($this, $this->get('config'), $this->get('dbal.conn'), $this->get('dbal.tools'), 'phpbb_migrations', './', 'php', 'phpbb_', $this->get('migrator.tool_collection'), $this->get('migrator.helper'));
    }

    /**
     * Gets the 'migrator.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migration\helper A phpbb\db\migration\helper instance.
     */
    protected function getMigrator_HelperService()
    {
        return $this->services['migrator.helper'] = new \phpbb\db\migration\helper();
    }

    /**
     * Gets the 'migrator.tool.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migration\tool\config A phpbb\db\migration\tool\config instance.
     */
    protected function getMigrator_Tool_ConfigService()
    {
        return $this->services['migrator.tool.config'] = new \phpbb\db\migration\tool\config($this->get('config'));
    }

    /**
     * Gets the 'migrator.tool.config_text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migration\tool\config_text A phpbb\db\migration\tool\config_text instance.
     */
    protected function getMigrator_Tool_ConfigTextService()
    {
        return $this->services['migrator.tool.config_text'] = new \phpbb\db\migration\tool\config_text($this->get('config_text'));
    }

    /**
     * Gets the 'migrator.tool.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migration\tool\module A phpbb\db\migration\tool\module instance.
     */
    protected function getMigrator_Tool_ModuleService()
    {
        return $this->services['migrator.tool.module'] = new \phpbb\db\migration\tool\module($this->get('dbal.conn'), $this->get('cache'), $this->get('user'), './', 'php', 'phpbb_modules');
    }

    /**
     * Gets the 'migrator.tool.permission' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\db\migration\tool\permission A phpbb\db\migration\tool\permission instance.
     */
    protected function getMigrator_Tool_PermissionService()
    {
        return $this->services['migrator.tool.permission'] = new \phpbb\db\migration\tool\permission($this->get('dbal.conn'), $this->get('cache'), $this->get('auth'), './', 'php');
    }

    /**
     * Gets the 'migrator.tool_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getMigrator_ToolCollectionService()
    {
        $this->services['migrator.tool_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('migrator.tool.config');
        $instance->add('migrator.tool.config_text');
        $instance->add('migrator.tool.module');
        $instance->add('migrator.tool.permission');

        return $instance;
    }

    /**
     * Gets the 'mimetype.content_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\mimetype\content_guesser A phpbb\mimetype\content_guesser instance.
     */
    protected function getMimetype_ContentGuesserService()
    {
        $this->services['mimetype.content_guesser'] = $instance = new \phpbb\mimetype\content_guesser();

        $instance->set_priority(-1);

        return $instance;
    }

    /**
     * Gets the 'mimetype.extension_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\mimetype\extension_guesser A phpbb\mimetype\extension_guesser instance.
     */
    protected function getMimetype_ExtensionGuesserService()
    {
        $this->services['mimetype.extension_guesser'] = $instance = new \phpbb\mimetype\extension_guesser();

        $instance->set_priority(-2);

        return $instance;
    }

    /**
     * Gets the 'mimetype.filebinary_mimetype_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser A Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser instance.
     */
    protected function getMimetype_FilebinaryMimetypeGuesserService()
    {
        return $this->services['mimetype.filebinary_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser();
    }

    /**
     * Gets the 'mimetype.fileinfo_mimetype_guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser A Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser instance.
     */
    protected function getMimetype_FileinfoMimetypeGuesserService()
    {
        return $this->services['mimetype.fileinfo_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser();
    }

    /**
     * Gets the 'mimetype.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\mimetype\guesser A phpbb\mimetype\guesser instance.
     */
    protected function getMimetype_GuesserService()
    {
        return $this->services['mimetype.guesser'] = new \phpbb\mimetype\guesser($this->get('mimetype.guesser_collection'));
    }

    /**
     * Gets the 'mimetype.guesser_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getMimetype_GuesserCollectionService()
    {
        $this->services['mimetype.guesser_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('mimetype.fileinfo_mimetype_guesser');
        $instance->add('mimetype.filebinary_mimetype_guesser');
        $instance->add('mimetype.content_guesser');
        $instance->add('mimetype.extension_guesser');

        return $instance;
    }

    /**
     * Gets the 'notification.method.email' service.
     *
     * @return \phpbb\notification\method\email A phpbb\notification\method\email instance.
     */
    protected function getNotification_Method_EmailService()
    {
        return new \phpbb\notification\method\email($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php');
    }

    /**
     * Gets the 'notification.method.jabber' service.
     *
     * @return \phpbb\notification\method\jabber A phpbb\notification\method\jabber instance.
     */
    protected function getNotification_Method_JabberService()
    {
        return new \phpbb\notification\method\jabber($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php');
    }

    /**
     * Gets the 'notification.method_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getNotification_MethodCollectionService()
    {
        $this->services['notification.method_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.method.email');
        $instance->add('notification.method.jabber');

        return $instance;
    }

    /**
     * Gets the 'notification.type.admin_activate_user' service.
     *
     * @return \phpbb\notification\type\admin_activate_user A phpbb\notification\type\admin_activate_user instance.
     */
    protected function getNotification_Type_AdminActivateUserService()
    {
        return new \phpbb\notification\type\admin_activate_user($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.approve_post' service.
     *
     * @return \phpbb\notification\type\approve_post A phpbb\notification\type\approve_post instance.
     */
    protected function getNotification_Type_ApprovePostService()
    {
        return new \phpbb\notification\type\approve_post($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.approve_topic' service.
     *
     * @return \phpbb\notification\type\approve_topic A phpbb\notification\type\approve_topic instance.
     */
    protected function getNotification_Type_ApproveTopicService()
    {
        return new \phpbb\notification\type\approve_topic($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.bookmark' service.
     *
     * @return \phpbb\notification\type\bookmark A phpbb\notification\type\bookmark instance.
     */
    protected function getNotification_Type_BookmarkService()
    {
        return new \phpbb\notification\type\bookmark($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.disapprove_post' service.
     *
     * @return \phpbb\notification\type\disapprove_post A phpbb\notification\type\disapprove_post instance.
     */
    protected function getNotification_Type_DisapprovePostService()
    {
        return new \phpbb\notification\type\disapprove_post($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.disapprove_topic' service.
     *
     * @return \phpbb\notification\type\disapprove_topic A phpbb\notification\type\disapprove_topic instance.
     */
    protected function getNotification_Type_DisapproveTopicService()
    {
        return new \phpbb\notification\type\disapprove_topic($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.group_request' service.
     *
     * @return \phpbb\notification\type\group_request A phpbb\notification\type\group_request instance.
     */
    protected function getNotification_Type_GroupRequestService()
    {
        return new \phpbb\notification\type\group_request($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.group_request_approved' service.
     *
     * @return \phpbb\notification\type\group_request_approved A phpbb\notification\type\group_request_approved instance.
     */
    protected function getNotification_Type_GroupRequestApprovedService()
    {
        return new \phpbb\notification\type\group_request_approved($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.pm' service.
     *
     * @return \phpbb\notification\type\pm A phpbb\notification\type\pm instance.
     */
    protected function getNotification_Type_PmService()
    {
        return new \phpbb\notification\type\pm($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.post' service.
     *
     * @return \phpbb\notification\type\post A phpbb\notification\type\post instance.
     */
    protected function getNotification_Type_PostService()
    {
        return new \phpbb\notification\type\post($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.post_in_queue' service.
     *
     * @return \phpbb\notification\type\post_in_queue A phpbb\notification\type\post_in_queue instance.
     */
    protected function getNotification_Type_PostInQueueService()
    {
        return new \phpbb\notification\type\post_in_queue($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.quote' service.
     *
     * @return \phpbb\notification\type\quote A phpbb\notification\type\quote instance.
     */
    protected function getNotification_Type_QuoteService()
    {
        return new \phpbb\notification\type\quote($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.report_pm' service.
     *
     * @return \phpbb\notification\type\report_pm A phpbb\notification\type\report_pm instance.
     */
    protected function getNotification_Type_ReportPmService()
    {
        return new \phpbb\notification\type\report_pm($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.report_pm_closed' service.
     *
     * @return \phpbb\notification\type\report_pm_closed A phpbb\notification\type\report_pm_closed instance.
     */
    protected function getNotification_Type_ReportPmClosedService()
    {
        return new \phpbb\notification\type\report_pm_closed($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.report_post' service.
     *
     * @return \phpbb\notification\type\report_post A phpbb\notification\type\report_post instance.
     */
    protected function getNotification_Type_ReportPostService()
    {
        return new \phpbb\notification\type\report_post($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.report_post_closed' service.
     *
     * @return \phpbb\notification\type\report_post_closed A phpbb\notification\type\report_post_closed instance.
     */
    protected function getNotification_Type_ReportPostClosedService()
    {
        return new \phpbb\notification\type\report_post_closed($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.topic' service.
     *
     * @return \phpbb\notification\type\topic A phpbb\notification\type\topic instance.
     */
    protected function getNotification_Type_TopicService()
    {
        return new \phpbb\notification\type\topic($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type.topic_in_queue' service.
     *
     * @return \phpbb\notification\type\topic_in_queue A phpbb\notification\type\topic_in_queue instance.
     */
    protected function getNotification_Type_TopicInQueueService()
    {
        return new \phpbb\notification\type\topic_in_queue($this->get('user_loader'), $this->get('dbal.conn'), $this->get('cache.driver'), $this->get('user'), $this->get('auth'), $this->get('config'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'notification.type_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getNotification_TypeCollectionService()
    {
        $this->services['notification.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('notification.type.approve_post');
        $instance->add('notification.type.approve_topic');
        $instance->add('notification.type.bookmark');
        $instance->add('notification.type.disapprove_post');
        $instance->add('notification.type.disapprove_topic');
        $instance->add('notification.type.group_request');
        $instance->add('notification.type.group_request_approved');
        $instance->add('notification.type.pm');
        $instance->add('notification.type.post');
        $instance->add('notification.type.post_in_queue');
        $instance->add('notification.type.quote');
        $instance->add('notification.type.report_pm');
        $instance->add('notification.type.report_pm_closed');
        $instance->add('notification.type.report_post');
        $instance->add('notification.type.report_post_closed');
        $instance->add('notification.type.topic');
        $instance->add('notification.type.topic_in_queue');
        $instance->add('notification.type.admin_activate_user');

        return $instance;
    }

    /**
     * Gets the 'notification_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\notification\manager A phpbb\notification\manager instance.
     */
    protected function getNotificationManagerService()
    {
        return $this->services['notification_manager'] = new \phpbb\notification\manager($this->get('notification.type_collection'), $this->get('notification.method_collection'), $this, $this->get('user_loader'), $this->get('config'), $this->get('dispatcher'), $this->get('dbal.conn'), $this->get('cache'), $this->get('user'), './', 'php', 'phpbb_notification_types', 'phpbb_notifications', 'phpbb_user_notifications');
    }

    /**
     * Gets the 'pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\pagination A phpbb\pagination instance.
     */
    protected function getPaginationService()
    {
        return $this->services['pagination'] = new \phpbb\pagination($this->get('template'), $this->get('user'), $this->get('controller.helper'), $this->get('dispatcher'));
    }

    /**
     * Gets the 'passwords.driver.bcrypt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\bcrypt A phpbb\passwords\driver\bcrypt instance.
     */
    protected function getPasswords_Driver_BcryptService()
    {
        return $this->services['passwords.driver.bcrypt'] = new \phpbb\passwords\driver\bcrypt($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.bcrypt_2y' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\bcrypt_2y A phpbb\passwords\driver\bcrypt_2y instance.
     */
    protected function getPasswords_Driver_Bcrypt2yService()
    {
        return $this->services['passwords.driver.bcrypt_2y'] = new \phpbb\passwords\driver\bcrypt_2y($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.bcrypt_wcf2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\bcrypt_wcf2 A phpbb\passwords\driver\bcrypt_wcf2 instance.
     */
    protected function getPasswords_Driver_BcryptWcf2Service()
    {
        return $this->services['passwords.driver.bcrypt_wcf2'] = new \phpbb\passwords\driver\bcrypt_wcf2($this->get('passwords.driver.bcrypt'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.convert_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\convert_password A phpbb\passwords\driver\convert_password instance.
     */
    protected function getPasswords_Driver_ConvertPasswordService()
    {
        return $this->services['passwords.driver.convert_password'] = new \phpbb\passwords\driver\convert_password($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.md5_mybb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\md5_mybb A phpbb\passwords\driver\md5_mybb instance.
     */
    protected function getPasswords_Driver_Md5MybbService()
    {
        return $this->services['passwords.driver.md5_mybb'] = new \phpbb\passwords\driver\md5_mybb($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.md5_phpbb2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\md5_phpbb2 A phpbb\passwords\driver\md5_phpbb2 instance.
     */
    protected function getPasswords_Driver_Md5Phpbb2Service()
    {
        return $this->services['passwords.driver.md5_phpbb2'] = new \phpbb\passwords\driver\md5_phpbb2($this->get('request'), $this->get('passwords.driver.salted_md5'), $this->get('passwords.driver_helper'), './', 'php');
    }

    /**
     * Gets the 'passwords.driver.md5_vb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\md5_vb A phpbb\passwords\driver\md5_vb instance.
     */
    protected function getPasswords_Driver_Md5VbService()
    {
        return $this->services['passwords.driver.md5_vb'] = new \phpbb\passwords\driver\md5_vb($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.phpass' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\phpass A phpbb\passwords\driver\phpass instance.
     */
    protected function getPasswords_Driver_PhpassService()
    {
        return $this->services['passwords.driver.phpass'] = new \phpbb\passwords\driver\phpass($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.salted_md5' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\salted_md5 A phpbb\passwords\driver\salted_md5 instance.
     */
    protected function getPasswords_Driver_SaltedMd5Service()
    {
        return $this->services['passwords.driver.salted_md5'] = new \phpbb\passwords\driver\salted_md5($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.sha1' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\sha1 A phpbb\passwords\driver\sha1 instance.
     */
    protected function getPasswords_Driver_Sha1Service()
    {
        return $this->services['passwords.driver.sha1'] = new \phpbb\passwords\driver\sha1($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.sha1_smf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\sha1_smf A phpbb\passwords\driver\sha1_smf instance.
     */
    protected function getPasswords_Driver_Sha1SmfService()
    {
        return $this->services['passwords.driver.sha1_smf'] = new \phpbb\passwords\driver\sha1_smf($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver.sha1_wcf1' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\sha1_wcf1 A phpbb\passwords\driver\sha1_wcf1 instance.
     */
    protected function getPasswords_Driver_Sha1Wcf1Service()
    {
        return $this->services['passwords.driver.sha1_wcf1'] = new \phpbb\passwords\driver\sha1_wcf1($this->get('config'), $this->get('passwords.driver_helper'));
    }

    /**
     * Gets the 'passwords.driver_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getPasswords_DriverCollectionService()
    {
        $this->services['passwords.driver_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('passwords.driver.bcrypt');
        $instance->add('passwords.driver.bcrypt_2y');
        $instance->add('passwords.driver.bcrypt_wcf2');
        $instance->add('passwords.driver.salted_md5');
        $instance->add('passwords.driver.phpass');
        $instance->add('passwords.driver.convert_password');
        $instance->add('passwords.driver.sha1_smf');
        $instance->add('passwords.driver.sha1_wcf1');
        $instance->add('passwords.driver.sha1');
        $instance->add('passwords.driver.md5_phpbb2');
        $instance->add('passwords.driver.md5_mybb');
        $instance->add('passwords.driver.md5_vb');

        return $instance;
    }

    /**
     * Gets the 'passwords.driver_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\driver\helper A phpbb\passwords\driver\helper instance.
     */
    protected function getPasswords_DriverHelperService()
    {
        return $this->services['passwords.driver_helper'] = new \phpbb\passwords\driver\helper($this->get('config'));
    }

    /**
     * Gets the 'passwords.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\helper A phpbb\passwords\helper instance.
     */
    protected function getPasswords_HelperService()
    {
        return $this->services['passwords.helper'] = new \phpbb\passwords\helper();
    }

    /**
     * Gets the 'passwords.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\passwords\manager A phpbb\passwords\manager instance.
     */
    protected function getPasswords_ManagerService()
    {
        return $this->services['passwords.manager'] = new \phpbb\passwords\manager($this->get('config'), $this->get('passwords.driver_collection'), $this->get('passwords.helper'), array(0 => 'passwords.driver.bcrypt_2y', 1 => 'passwords.driver.bcrypt', 2 => 'passwords.driver.salted_md5', 3 => 'passwords.driver.phpass'));
    }

    /**
     * Gets the 'path_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\path_helper A phpbb\path_helper instance.
     */
    protected function getPathHelperService()
    {
        return $this->services['path_helper'] = new \phpbb\path_helper($this->get('symfony_request'), $this->get('filesystem'), $this->get('request'), './', 'php', 'adm/');
    }

    /**
     * Gets the 'php_ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\php\ini A phpbb\php\ini instance.
     */
    protected function getPhpIniService()
    {
        return $this->services['php_ini'] = new \phpbb\php\ini();
    }

    /**
     * Gets the 'plupload' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\plupload\plupload A phpbb\plupload\plupload instance.
     */
    protected function getPluploadService()
    {
        return $this->services['plupload'] = new \phpbb\plupload\plupload('./', $this->get('config'), $this->get('request'), $this->get('user'), $this->get('php_ini'), $this->get('mimetype.guesser'));
    }

    /**
     * Gets the 'profilefields.lang_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\lang_helper A phpbb\profilefields\lang_helper instance.
     */
    protected function getProfilefields_LangHelperService()
    {
        return $this->services['profilefields.lang_helper'] = new \phpbb\profilefields\lang_helper($this->get('dbal.conn'), 'phpbb_profile_fields_lang');
    }

    /**
     * Gets the 'profilefields.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\manager A phpbb\profilefields\manager instance.
     */
    protected function getProfilefields_ManagerService()
    {
        return $this->services['profilefields.manager'] = new \phpbb\profilefields\manager($this->get('auth'), $this->get('dbal.conn'), $this->get('dispatcher'), $this->get('request'), $this->get('template'), $this->get('profilefields.type_collection'), $this->get('user'), 'phpbb_profile_fields', 'phpbb_profile_lang', 'phpbb_profile_fields_data');
    }

    /**
     * Gets the 'profilefields.type.bool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_bool A phpbb\profilefields\type\type_bool instance.
     */
    protected function getProfilefields_Type_BoolService()
    {
        return $this->services['profilefields.type.bool'] = new \phpbb\profilefields\type\type_bool($this->get('profilefields.lang_helper'), $this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_date A phpbb\profilefields\type\type_date instance.
     */
    protected function getProfilefields_Type_DateService()
    {
        return $this->services['profilefields.type.date'] = new \phpbb\profilefields\type\type_date($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.dropdown' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_dropdown A phpbb\profilefields\type\type_dropdown instance.
     */
    protected function getProfilefields_Type_DropdownService()
    {
        return $this->services['profilefields.type.dropdown'] = new \phpbb\profilefields\type\type_dropdown($this->get('profilefields.lang_helper'), $this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.googleplus' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_googleplus A phpbb\profilefields\type\type_googleplus instance.
     */
    protected function getProfilefields_Type_GoogleplusService()
    {
        return $this->services['profilefields.type.googleplus'] = new \phpbb\profilefields\type\type_googleplus($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.int' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_int A phpbb\profilefields\type\type_int instance.
     */
    protected function getProfilefields_Type_IntService()
    {
        return $this->services['profilefields.type.int'] = new \phpbb\profilefields\type\type_int($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_string A phpbb\profilefields\type\type_string instance.
     */
    protected function getProfilefields_Type_StringService()
    {
        return $this->services['profilefields.type.string'] = new \phpbb\profilefields\type\type_string($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_text A phpbb\profilefields\type\type_text instance.
     */
    protected function getProfilefields_Type_TextService()
    {
        return $this->services['profilefields.type.text'] = new \phpbb\profilefields\type\type_text($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\profilefields\type\type_url A phpbb\profilefields\type\type_url instance.
     */
    protected function getProfilefields_Type_UrlService()
    {
        return $this->services['profilefields.type.url'] = new \phpbb\profilefields\type\type_url($this->get('request'), $this->get('template'), $this->get('user'));
    }

    /**
     * Gets the 'profilefields.type_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\di\service_collection A phpbb\di\service_collection instance.
     */
    protected function getProfilefields_TypeCollectionService()
    {
        $this->services['profilefields.type_collection'] = $instance = new \phpbb\di\service_collection($this);

        $instance->add('profilefields.type.bool');
        $instance->add('profilefields.type.date');
        $instance->add('profilefields.type.dropdown');
        $instance->add('profilefields.type.googleplus');
        $instance->add('profilefields.type.int');
        $instance->add('profilefields.type.string');
        $instance->add('profilefields.type.text');
        $instance->add('profilefields.type.url');

        return $instance;
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\request\request A phpbb\request\request instance.
     */
    protected function getRequestService()
    {
        return $this->services['request'] = new \phpbb\request\request(NULL, true);
    }

    /**
     * Gets the 'symfony_request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\symfony_request A phpbb\symfony_request instance.
     */
    protected function getSymfonyRequestService()
    {
        return $this->services['symfony_request'] = new \phpbb\symfony_request($this->get('request'));
    }

    /**
     * Gets the 'symfony_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getSymfonyResponseListenerService()
    {
        return $this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\template\twig\twig A phpbb\template\twig\twig instance.
     */
    protected function getTemplateService()
    {
        return $this->services['template'] = new \phpbb\template\twig\twig($this->get('path_helper'), $this->get('config'), $this->get('user'), $this->get('template_context'), $this->get('ext.manager'));
    }

    /**
     * Gets the 'template_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\template\context A phpbb\template\context instance.
     */
    protected function getTemplateContextService()
    {
        return $this->services['template_context'] = new \phpbb\template\context();
    }

    /**
     * Gets the 'user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\user A phpbb\user instance.
     */
    protected function getUserService()
    {
        return $this->services['user'] = new \phpbb\user('\\phpbb\\datetime');
    }

    /**
     * Gets the 'user_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\user_loader A phpbb\user_loader instance.
     */
    protected function getUserLoaderService()
    {
        return $this->services['user_loader'] = new \phpbb\user_loader($this->get('dbal.conn'), './', 'php', 'phpbb_users');
    }

    /**
     * Gets the 'version_helper' service.
     *
     * @return \phpbb\version_helper A phpbb\version_helper instance.
     */
    protected function getVersionHelperService()
    {
        return new \phpbb\version_helper($this->get('cache'), $this->get('config'), $this->get('file_downloader'), $this->get('user'));
    }

    /**
     * Gets the 'viewonline_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \phpbb\viewonline_helper A phpbb\viewonline_helper instance.
     */
    protected function getViewonlineHelperService()
    {
        return $this->services['viewonline_helper'] = new \phpbb\viewonline_helper($this->get('filesystem'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'core.root_path' => './',
            'core.php_ext' => 'php',
            'tables.auth_provider_oauth_token_storage' => 'phpbb_oauth_tokens',
            'tables.auth_provider_oauth_account_assoc' => 'phpbb_oauth_accounts',
            'tables.captcha_qa_questions' => 'phpbb_captcha_questions',
            'tables.captcha_qa_answers' => 'phpbb_captcha_answers',
            'tables.captcha_qa_confirm' => 'phpbb_qa_confirm',
            'tables.config' => 'phpbb_config',
            'tables.config_text' => 'phpbb_config_text',
            'tables.ext' => 'phpbb_ext',
            'tables.forums' => 'phpbb_forums',
            'tables.log' => 'phpbb_log',
            'tables.migrations' => 'phpbb_migrations',
            'tables.modules' => 'phpbb_modules',
            'tables.notification_types' => 'phpbb_notification_types',
            'tables.notifications' => 'phpbb_notifications',
            'tables.profile_fields' => 'phpbb_profile_fields',
            'tables.profile_fields_data' => 'phpbb_profile_fields_data',
            'tables.profile_fields_options_language' => 'phpbb_profile_fields_lang',
            'tables.profile_fields_language' => 'phpbb_profile_lang',
            'tables.posts' => 'phpbb_posts',
            'tables.topics' => 'phpbb_topics',
            'tables.user_notifications' => 'phpbb_user_notifications',
            'tables.users' => 'phpbb_users',
            'core.disable_super_globals' => true,
            'datetime.class' => '\\phpbb\\datetime',
            'mimetype.guesser.priority.lowest' => -2,
            'mimetype.guesser.priority.low' => -1,
            'mimetype.guesser.priority.default' => 0,
            'mimetype.guesser.priority.high' => 1,
            'mimetype.guesser.priority.highest' => 2,
            'passwords.algorithms' => array(
                0 => 'passwords.driver.bcrypt_2y',
                1 => 'passwords.driver.bcrypt',
                2 => 'passwords.driver.salted_md5',
                3 => 'passwords.driver.phpass',
            ),
            'derky.sortables.tables.questions' => 'phpbb_sortables_questions',
            'derky.sortables.tables.answers' => 'phpbb_sortables_answers',
            'derky.sortables.tables.confirm' => 'phpbb_sortables_confirm',
            'core.adm_relative_path' => 'adm/',
            'core.table_prefix' => 'phpbb_',
            'cache.driver.class' => 'phpbb\\cache\\driver\\file',
            'dbal.driver.class' => 'phpbb\\db\\driver\\mysql',
            'dbal.dbhost' => 'localhost',
            'dbal.dbuser' => 'phpbb',
            'dbal.dbpasswd' => 'phpbb_45fid',
            'dbal.dbname' => 'phpbb',
            'dbal.dbport' => '',
            'dbal.new_link' => false,
        );
    }
}
