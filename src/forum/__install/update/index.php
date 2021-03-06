<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

// Set update info with file structure to update
$update_info = array(
	'version'	=> array('from' => '3.2.1', 'to' => '3.3.0'),
	'files'		=> array(
		'.htaccess',
		'adm/images/phpbb_logo.svg',
		'adm/index.php',
		'adm/style/acp_attachments.html',
		'adm/style/acp_avatar_options_upload.html',
		'adm/style/acp_ban.html',
		'adm/style/acp_contact.html',
		'adm/style/acp_database.html',
		'adm/style/acp_ext_actions.html',
		'adm/style/acp_ext_list.html',
		'adm/style/acp_forums.html',
		'adm/style/acp_groups.html',
		'adm/style/acp_help_phpbb.html',
		'adm/style/acp_icons.html',
		'adm/style/acp_language.html',
		'adm/style/acp_main.html',
		'adm/style/acp_modules.html',
		'adm/style/acp_permission_roles.html',
		'adm/style/acp_posting_buttons.html',
		'adm/style/acp_profile.html',
		'adm/style/acp_prune_forums.html',
		'adm/style/acp_ranks.html',
		'adm/style/acp_search.html',
		'adm/style/acp_styles.html',
		'adm/style/acp_users.html',
		'adm/style/acp_users_overview.html',
		'adm/style/acp_users_prefs.html',
		'adm/style/acp_users_signature.html',
		'adm/style/admin.css',
		'adm/style/admin.js',
		'adm/style/ajax.js',
		'adm/style/captcha_recaptcha.html',
		'adm/style/installer_footer.html',
		'adm/style/installer_form.html',
		'adm/style/overall_footer.html',
		'adm/style/overall_header.html',
		'adm/style/permission_forum_copy.html',
		'adm/style/permission_mask.html',
		'adm/style/permissions.js',
		'adm/style/progress_bar.html',
		'adm/style/simple_footer.html',
		'adm/style/simple_header.html',
		'adm/style/tooltip.js',
		'assets/cookieconsent/cookieconsent.min.css',
		'assets/cookieconsent/cookieconsent.min.js',
		'assets/javascript/core.js',
		'assets/javascript/editor.js',
		'assets/javascript/jquery-3.4.1.min.js',
		'assets/javascript/plupload.js',
		'assets/plupload/plupload.full.min.js',
		'bin/phpbbcli.php',
		'common.php',
		'composer.json',
		'composer.lock',
		'config/default/container/parameters.yml',
		'config/default/container/services.yml',
		'config/default/container/services_auth.yml',
		'config/default/container/services_avatar.yml',
		'config/default/container/services_console.yml',
		'config/default/container/services_content.yml',
		'config/default/container/services_cron.yml',
		'config/default/container/services_event.yml',
		'config/default/container/services_feed.yml',
		'config/default/container/services_password.yml',
		'config/default/container/services_routing.yml',
		'config/default/container/services_text_formatter.yml',
		'config/default/container/services_twig.yml',
		'config/default/container/services_ucp.yml',
		'config/default/routing/cron.yml',
		'config/default/routing/routing.yml',
		'config/default/routing/ucp.yml',
		'config/installer/container/services_install_obtain_data.yml',
		'cron.php',
		'download/file.php',
		'ext/phpbb/viglink/acp/viglink_helper.php',
		'ext/phpbb/viglink/adm/style/acp_viglink.html',
		'ext/phpbb/viglink/composer.json',
		'ext/phpbb/viglink/composer.lock',
		'ext/phpbb/viglink/language/en/viglink_module_acp.php',
		'ext/phpbb/viglink/styles/all/template/event/acp_help_phpbb_stats_after.html',
		'ext/phpbb/viglink/styles/all/template/event/acp_help_phpbb_stats_before.html',
		'ext/phpbb/viglink/styles/all/template/event/overall_footer_after.html',
		'ext/phpbb/viglink/styles/all/theme/viglink.css',
		'feed.php',
		'includes/acp/acp_attachments.php',
		'includes/acp/acp_bbcodes.php',
		'includes/acp/acp_board.php',
		'includes/acp/acp_bots.php',
		'includes/acp/acp_database.php',
		'includes/acp/acp_email.php',
		'includes/acp/acp_extensions.php',
		'includes/acp/acp_forums.php',
		'includes/acp/acp_groups.php',
		'includes/acp/acp_help_phpbb.php',
		'includes/acp/acp_icons.php',
		'includes/acp/acp_inactive.php',
		'includes/acp/acp_language.php',
		'includes/acp/acp_logs.php',
		'includes/acp/acp_main.php',
		'includes/acp/acp_modules.php',
		'includes/acp/acp_permission_roles.php',
		'includes/acp/acp_permissions.php',
		'includes/acp/acp_profile.php',
		'includes/acp/acp_prune.php',
		'includes/acp/acp_reasons.php',
		'includes/acp/acp_search.php',
		'includes/acp/acp_styles.php',
		'includes/acp/acp_update.php',
		'includes/acp/acp_users.php',
		'includes/acp/auth.php',
		'includes/bbcode.php',
		'includes/compatibility_globals.php',
		'includes/constants.php',
		'includes/diff/diff.php',
		'includes/diff/engine.php',
		'includes/diff/renderer.php',
		'includes/functions.php',
		'includes/functions_acp.php',
		'includes/functions_admin.php',
		'includes/functions_compatibility.php',
		'includes/functions_compress.php',
		'includes/functions_content.php',
		'includes/functions_convert.php',
		'includes/functions_display.php',
		'includes/functions_download.php',
		'includes/functions_jabber.php',
		'includes/functions_mcp.php',
		'includes/functions_messenger.php',
		'includes/functions_module.php',
		'includes/functions_posting.php',
		'includes/functions_privmsgs.php',
		'includes/functions_transfer.php',
		'includes/functions_user.php',
		'includes/hooks/index.php',
		'includes/mcp/mcp_ban.php',
		'includes/mcp/mcp_forum.php',
		'includes/mcp/mcp_front.php',
		'includes/mcp/mcp_logs.php',
		'includes/mcp/mcp_main.php',
		'includes/mcp/mcp_notes.php',
		'includes/mcp/mcp_pm_reports.php',
		'includes/mcp/mcp_post.php',
		'includes/mcp/mcp_queue.php',
		'includes/mcp/mcp_reports.php',
		'includes/mcp/mcp_topic.php',
		'includes/mcp/mcp_warn.php',
		'includes/message_parser.php',
		'includes/questionnaire/questionnaire.php',
		'includes/sphinxapi.php',
		'includes/startup.php',
		'includes/ucp/ucp_activate.php',
		'includes/ucp/ucp_attachments.php',
		'includes/ucp/ucp_auth_link.php',
		'includes/ucp/ucp_groups.php',
		'includes/ucp/ucp_login_link.php',
		'includes/ucp/ucp_main.php',
		'includes/ucp/ucp_notifications.php',
		'includes/ucp/ucp_pm.php',
		'includes/ucp/ucp_pm_compose.php',
		'includes/ucp/ucp_pm_options.php',
		'includes/ucp/ucp_pm_viewfolder.php',
		'includes/ucp/ucp_pm_viewmessage.php',
		'includes/ucp/ucp_prefs.php',
		'includes/ucp/ucp_profile.php',
		'includes/ucp/ucp_register.php',
		'includes/ucp/ucp_resend.php',
		'includes/ucp/ucp_zebra.php',
		'includes/utf/utf_tools.php',
		'index.php',
		'language/en/acp/attachments.php',
		'language/en/acp/board.php',
		'language/en/acp/common.php',
		'language/en/acp/database.php',
		'language/en/acp/forums.php',
		'language/en/acp/groups.php',
		'language/en/acp/permissions.php',
		'language/en/acp/permissions_phpbb.php',
		'language/en/acp/posting.php',
		'language/en/acp/profile.php',
		'language/en/acp/search.php',
		'language/en/acp/styles.php',
		'language/en/captcha_qa.php',
		'language/en/captcha_recaptcha.php',
		'language/en/cli.php',
		'language/en/common.php',
		'language/en/email/admin_activate.txt',
		'language/en/email/forum_notify.txt',
		'language/en/email/newtopic_notify.txt',
		'language/en/email/report_pm.txt',
		'language/en/email/topic_notify.txt',
		'language/en/email/user_forgot_password.txt',
		'language/en/help/faq.php',
		'language/en/install.php',
		'language/en/migrator.php',
		'language/en/posting.php',
		'language/en/ucp.php',
		'language/en/viewforum.php',
		'language/en/viewtopic.php',
		'mcp.php',
		'memberlist.php',
		'phpbb/attachment/delete.php',
		'phpbb/attachment/resync.php',
		'phpbb/attachment/upload.php',
		'phpbb/auth/auth.php',
		'phpbb/auth/provider/apache.php',
		'phpbb/auth/provider/base.php',
		'phpbb/auth/provider/db.php',
		'phpbb/auth/provider/ldap.php',
		'phpbb/auth/provider/oauth/oauth.php',
		'phpbb/auth/provider/oauth/service/base.php',
		'phpbb/auth/provider/oauth/service/bitly.php',
		'phpbb/auth/provider/oauth/service/facebook.php',
		'phpbb/auth/provider/oauth/service/google.php',
		'phpbb/auth/provider/oauth/service/service_interface.php',
		'phpbb/auth/provider/oauth/service/twitter.php',
		'phpbb/auth/provider/oauth/token_storage.php',
		'phpbb/auth/provider/provider_interface.php',
		'phpbb/avatar/driver/local.php',
		'phpbb/avatar/driver/remote.php',
		'phpbb/avatar/driver/upload.php',
		'phpbb/avatar/manager.php',
		'phpbb/cache/driver/apcu.php',
		'phpbb/cache/driver/base.php',
		'phpbb/cache/driver/file.php',
		'phpbb/cache/driver/memcached.php',
		'phpbb/cache/driver/memory.php',
		'phpbb/cache/driver/redis.php',
		'phpbb/cache/service.php',
		'phpbb/captcha/char_cube3d.php',
		'phpbb/captcha/colour_manager.php',
		'phpbb/captcha/gd.php',
		'phpbb/captcha/non_gd.php',
		'phpbb/captcha/plugins/captcha_abstract.php',
		'phpbb/captcha/plugins/gd.php',
		'phpbb/captcha/plugins/gd_wave.php',
		'phpbb/captcha/plugins/nogd.php',
		'phpbb/captcha/plugins/qa.php',
		'phpbb/captcha/plugins/recaptcha.php',
		'phpbb/class_loader.php',
		'phpbb/config/config.php',
		'phpbb/config_php_file.php',
		'phpbb/console/command/cron/run.php',
		'phpbb/console/command/extension/enable.php',
		'phpbb/console/command/fixup/update_hashes.php',
		'phpbb/console/command/thumbnail/delete.php',
		'phpbb/console/command/thumbnail/generate.php',
		'phpbb/console/command/update/check.php',
		'phpbb/console/command/user/add.php',
		'phpbb/console/exception_subscriber.php',
		'phpbb/content_visibility.php',
		'phpbb/controller/helper.php',
		'phpbb/cron/controller/cron.php',
		'phpbb/cron/event/cron_runner_listener.php',
		'phpbb/cron/manager.php',
		'phpbb/cron/task/core/prune_all_forums.php',
		'phpbb/cron/task/core/update_hashes.php',
		'phpbb/cron/task/text_reparser/reparser.php',
		'phpbb/cron/task/wrapper.php',
		'phpbb/datetime.php',
		'phpbb/db/driver/driver.php',
		'phpbb/db/driver/driver_interface.php',
		'phpbb/db/driver/factory.php',
		'phpbb/db/driver/mssql_base.php',
		'phpbb/db/driver/mssql_odbc.php',
		'phpbb/db/driver/mssqlnative.php',
		'phpbb/db/driver/mysqli.php',
		'phpbb/db/driver/oracle.php',
		'phpbb/db/driver/postgres.php',
		'phpbb/db/driver/sqlite3.php',
		'phpbb/db/extractor/mssql_extractor.php',
		'phpbb/db/extractor/mysql_extractor.php',
		'phpbb/db/extractor/oracle_extractor.php',
		'phpbb/db/extractor/postgres_extractor.php',
		'phpbb/db/migration/data/v30x/release_3_0_4_rc1.php',
		'phpbb/db/migration/data/v30x/release_3_0_6_rc1.php',
		'phpbb/db/migration/data/v30x/release_3_0_8_rc1.php',
		'phpbb/db/migration/data/v310/auth_provider_oauth.php',
		'phpbb/db/migration/data/v310/contact_admin_acp_module.php',
		'phpbb/db/migration/data/v310/dev.php',
		'phpbb/db/migration/data/v310/extensions.php',
		'phpbb/db/migration/data/v310/notifications.php',
		'phpbb/db/migration/data/v310/softdelete_mcp_modules.php',
		'phpbb/db/migration/data/v310/softdelete_p1.php',
		'phpbb/db/migration/data/v310/style_update_p1.php',
		'phpbb/db/migration/data/v310/teampage.php',
		'phpbb/db/migration/data/v31x/v3112.php',
		'phpbb/db/migration/data/v320/add_help_phpbb.php',
		'phpbb/db/migration/data/v320/remove_outdated_media.php',
		'phpbb/db/migration/data/v320/text_reparser.php',
		'phpbb/db/migration/data/v32x/disable_remote_avatar.php',
		'phpbb/db/migration/data/v32x/email_force_sender.php',
		'phpbb/db/migration/data/v32x/enable_accurate_pm_button.php',
		'phpbb/db/migration/data/v32x/f_list_topics_permission_add.php',
		'phpbb/db/migration/data/v32x/fix_user_styles.php',
		'phpbb/db/migration/data/v32x/forum_topics_per_page_type.php',
		'phpbb/db/migration/data/v32x/jquery_update.php',
		'phpbb/db/migration/data/v32x/merge_duplicate_bbcodes.php',
		'phpbb/db/migration/data/v32x/remove_imagick.php',
		'phpbb/db/migration/data/v32x/smtp_dynamic_data.php',
		'phpbb/db/migration/data/v32x/timezone_p3.php',
		'phpbb/db/migration/data/v32x/update_prosilver_bitfield.php',
		'phpbb/db/migration/data/v32x/user_emoji_permission.php',
		'phpbb/db/migration/data/v32x/v321.php',
		'phpbb/db/migration/data/v32x/v322.php',
		'phpbb/db/migration/data/v32x/v322rc1.php',
		'phpbb/db/migration/data/v32x/v323.php',
		'phpbb/db/migration/data/v32x/v323rc1.php',
		'phpbb/db/migration/data/v32x/v323rc2.php',
		'phpbb/db/migration/data/v32x/v324.php',
		'phpbb/db/migration/data/v32x/v324rc1.php',
		'phpbb/db/migration/data/v32x/v325.php',
		'phpbb/db/migration/data/v32x/v325rc1.php',
		'phpbb/db/migration/data/v32x/v326.php',
		'phpbb/db/migration/data/v32x/v326rc1.php',
		'phpbb/db/migration/data/v32x/v327.php',
		'phpbb/db/migration/data/v32x/v327rc1.php',
		'phpbb/db/migration/data/v32x/v328.php',
		'phpbb/db/migration/data/v32x/v328rc1.php',
		'phpbb/db/migration/data/v32x/v329.php',
		'phpbb/db/migration/data/v32x/v329rc1.php',
		'phpbb/db/migration/data/v330/add_display_unapproved_posts_config.php',
		'phpbb/db/migration/data/v330/dev.php',
		'phpbb/db/migration/data/v330/forums_legend_limit.php',
		'phpbb/db/migration/data/v330/jquery_update.php',
		'phpbb/db/migration/data/v330/remove_attachment_flash.php',
		'phpbb/db/migration/data/v330/remove_email_hash.php',
		'phpbb/db/migration/data/v330/remove_max_pass_chars.php',
		'phpbb/db/migration/data/v330/reset_password.php',
		'phpbb/db/migration/data/v330/v330.php',
		'phpbb/db/migration/data/v330/v330b1.php',
		'phpbb/db/migration/data/v330/v330b2.php',
		'phpbb/db/migration/data/v330/v330rc1.php',
		'phpbb/db/migration/tool/config.php',
		'phpbb/db/migration/tool/config_text.php',
		'phpbb/db/migration/tool/module.php',
		'phpbb/db/migration/tool/permission.php',
		'phpbb/db/migrator.php',
		'phpbb/db/sql_insert_buffer.php',
		'phpbb/db/tools/mssql.php',
		'phpbb/db/tools/postgres.php',
		'phpbb/db/tools/tools.php',
		'phpbb/debug/error_handler.php',
		'phpbb/di/container_builder.php',
		'phpbb/di/extension/container_configuration.php',
		'phpbb/di/extension/core.php',
		'phpbb/di/extension/tables.php',
		'phpbb/di/service_collection.php',
		'phpbb/event/dispatcher.php',
		'phpbb/event/kernel_exception_subscriber.php',
		'phpbb/event/md_exporter.php',
		'phpbb/event/php_exporter.php',
		'phpbb/extension/extension_interface.php',
		'phpbb/extension/manager.php',
		'phpbb/feed/controller/feed.php',
		'phpbb/feed/helper.php',
		'phpbb/feed/quote_helper.php',
		'phpbb/feed/topics_active.php',
		'phpbb/file_downloader.php',
		'phpbb/files/filespec.php',
		'phpbb/files/types/form.php',
		'phpbb/files/types/local.php',
		'phpbb/files/upload.php',
		'phpbb/filesystem/filesystem.php',
		'phpbb/filesystem/filesystem_interface.php',
		'phpbb/filesystem.php',
		'phpbb/finder.php',
		'phpbb/group/helper.php',
		'phpbb/help/controller/bbcode.php',
		'phpbb/help/controller/faq.php',
		'phpbb/install/controller/helper.php',
		'phpbb/install/helper/config.php',
		'phpbb/install/helper/container_factory.php',
		'phpbb/install/helper/database.php',
		'phpbb/install/helper/iohandler/ajax_iohandler.php',
		'phpbb/install/helper/iohandler/iohandler_interface.php',
		'phpbb/install/installer_configuration.php',
		'phpbb/install/module/install_data/task/add_bots.php',
		'phpbb/install/module/install_data/task/add_modules.php',
		'phpbb/install/module/install_database/task/add_config_settings.php',
		'phpbb/install/module/install_database/task/add_default_data.php',
		'phpbb/install/module/install_database/task/add_tables.php',
		'phpbb/install/module/install_database/task/create_schema.php',
		'phpbb/install/module/install_database/task/set_up_database.php',
		'phpbb/install/module/install_filesystem/task/create_config_file.php',
		'phpbb/install/module/install_finish/task/install_extensions.php',
		'phpbb/install/module/obtain_data/task/obtain_database_data.php',
		'phpbb/install/module/obtain_data/task/obtain_email_data.php',
		'phpbb/install/module/obtain_data/task/obtain_server_data.php',
		'phpbb/install/module/obtain_data/task/obtain_update_ftp_data.php',
		'phpbb/install/module/requirements/task/check_server_environment.php',
		'phpbb/install/module/requirements/task/check_update.php',
		'phpbb/install/module/update_database/task/update_extensions.php',
		'phpbb/install/module/update_filesystem/task/diff_files.php',
		'phpbb/install/module/update_filesystem/task/download_updated_files.php',
		'phpbb/install/module/update_filesystem/task/file_check.php',
		'phpbb/install/module_base.php',
		'phpbb/language/language.php',
		'phpbb/language/language_file_loader.php',
		'phpbb/lock/db.php',
		'phpbb/lock/flock.php',
		'phpbb/log/log.php',
		'phpbb/message/admin_form.php',
		'phpbb/message/form.php',
		'phpbb/message/message.php',
		'phpbb/mimetype/guesser.php',
		'phpbb/module/module_manager.php',
		'phpbb/notification/manager.php',
		'phpbb/notification/method/board.php',
		'phpbb/notification/method/email.php',
		'phpbb/notification/method/jabber.php',
		'phpbb/notification/method/messenger_base.php',
		'phpbb/notification/type/admin_activate_user.php',
		'phpbb/notification/type/approve_post.php',
		'phpbb/notification/type/approve_topic.php',
		'phpbb/notification/type/base.php',
		'phpbb/notification/type/pm.php',
		'phpbb/notification/type/post.php',
		'phpbb/notification/type/report_pm.php',
		'phpbb/notification/type/topic.php',
		'phpbb/notification/type/type_interface.php',
		'phpbb/pagination.php',
		'phpbb/passwords/driver/argon2i.php',
		'phpbb/passwords/driver/argon2id.php',
		'phpbb/passwords/driver/base_native.php',
		'phpbb/passwords/manager.php',
		'phpbb/path_helper.php',
		'phpbb/permissions.php',
		'phpbb/plupload/plupload.php',
		'phpbb/profilefields/manager.php',
		'phpbb/profilefields/type/type_bool.php',
		'phpbb/profilefields/type/type_dropdown.php',
		'phpbb/profilefields/type/type_url.php',
		'phpbb/report/controller/report.php',
		'phpbb/report/report_handler.php',
		'phpbb/report/report_handler_pm.php',
		'phpbb/report/report_handler_post.php',
		'phpbb/request/request.php',
		'phpbb/request/request_interface.php',
		'phpbb/request/type_cast_helper.php',
		'phpbb/request/type_cast_helper_interface.php',
		'phpbb/search/base.php',
		'phpbb/search/fulltext_mysql.php',
		'phpbb/search/fulltext_native.php',
		'phpbb/search/fulltext_postgres.php',
		'phpbb/search/fulltext_sphinx.php',
		'phpbb/search/sphinx/config.php',
		'phpbb/search/sphinx/config_section.php',
		'phpbb/session.php',
		'phpbb/template/asset.php',
		'phpbb/template/assets_bag.php',
		'phpbb/template/context.php',
		'phpbb/template/template.php',
		'phpbb/template/twig/extension/avatar.php',
		'phpbb/template/twig/extension/config.php',
		'phpbb/template/twig/extension/username.php',
		'phpbb/template/twig/extension.php',
		'phpbb/template/twig/lexer.php',
		'phpbb/template/twig/loader.php',
		'phpbb/template/twig/node/definenode.php',
		'phpbb/template/twig/node/includeasset.php',
		'phpbb/template/twig/node/includephp.php',
		'phpbb/template/twig/tokenparser/defineparser.php',
		'phpbb/template/twig/tokenparser/event.php',
		'phpbb/template/twig/tokenparser/includecss.php',
		'phpbb/template/twig/tokenparser/includejs.php',
		'phpbb/template/twig/tokenparser/includeparser.php',
		'phpbb/template/twig/tokenparser/includephp.php',
		'phpbb/template/twig/tokenparser/php.php',
		'phpbb/textformatter/acp_utils_interface.php',
		'phpbb/textformatter/s9e/acp_utils.php',
		'phpbb/textformatter/s9e/bbcode_merger.php',
		'phpbb/textformatter/s9e/factory.php',
		'phpbb/textformatter/s9e/link_helper.php',
		'phpbb/textformatter/s9e/parser.php',
		'phpbb/textformatter/s9e/quote_helper.php',
		'phpbb/textreparser/base.php',
		'phpbb/textreparser/plugins/poll_title.php',
		'phpbb/tree/nestedset.php',
		'phpbb/ucp/controller/reset_password.php',
		'phpbb/user.php',
		'phpbb/user_loader.php',
		'posting.php',
		'report.php',
		'search.php',
		'styles/prosilver/style.cfg',
		'styles/prosilver/template/ajax.js',
		'styles/prosilver/template/attachment.html',
		'styles/prosilver/template/bbcode.html',
		'styles/prosilver/template/captcha_recaptcha.html',
		'styles/prosilver/template/confirm_delete_body.html',
		'styles/prosilver/template/forum_fn.js',
		'styles/prosilver/template/forumlist_body.html',
		'styles/prosilver/template/index_body.html',
		'styles/prosilver/template/login_body.html',
		'styles/prosilver/template/login_body_oauth.html',
		'styles/prosilver/template/login_forum.html',
		'styles/prosilver/template/mcp_ban.html',
		'styles/prosilver/template/mcp_forum.html',
		'styles/prosilver/template/mcp_move.html',
		'styles/prosilver/template/mcp_post.html',
		'styles/prosilver/template/mcp_topic.html',
		'styles/prosilver/template/memberlist_body.html',
		'styles/prosilver/template/memberlist_search.html',
		'styles/prosilver/template/memberlist_view.html',
		'styles/prosilver/template/navbar_header.html',
		'styles/prosilver/template/overall_footer.html',
		'styles/prosilver/template/overall_header.html',
		'styles/prosilver/template/plupload.html',
		'styles/prosilver/template/posting_attach_body.html',
		'styles/prosilver/template/posting_buttons.html',
		'styles/prosilver/template/posting_layout.html',
		'styles/prosilver/template/posting_pm_header.html',
		'styles/prosilver/template/posting_poll_body.html',
		'styles/prosilver/template/posting_preview.html',
		'styles/prosilver/template/posting_review.html',
		'styles/prosilver/template/posting_smilies.html',
		'styles/prosilver/template/posting_topic_review.html',
		'styles/prosilver/template/search_results.html',
		'styles/prosilver/template/simple_footer.html',
		'styles/prosilver/template/ucp_agreement.html',
		'styles/prosilver/template/ucp_attachments.html',
		'styles/prosilver/template/ucp_auth_link_oauth.html',
		'styles/prosilver/template/ucp_avatar_options_upload.html',
		'styles/prosilver/template/ucp_footer.html',
		'styles/prosilver/template/ucp_groups_manage.html',
		'styles/prosilver/template/ucp_notifications.html',
		'styles/prosilver/template/ucp_pm_history.html',
		'styles/prosilver/template/ucp_pm_viewmessage.html',
		'styles/prosilver/template/ucp_pm_viewmessage_print.html',
		'styles/prosilver/template/ucp_prefs_personal.html',
		'styles/prosilver/template/ucp_profile_profile_info.html',
		'styles/prosilver/template/ucp_profile_signature.html',
		'styles/prosilver/template/ucp_register.html',
		'styles/prosilver/template/ucp_reset_password.html',
		'styles/prosilver/template/viewforum_body.html',
		'styles/prosilver/template/viewonline_body.html',
		'styles/prosilver/template/viewtopic_body.html',
		'styles/prosilver/template/viewtopic_print.html',
		'styles/prosilver/template/viewtopic_topic_tools.html',
		'styles/prosilver/theme/bidi.css',
		'styles/prosilver/theme/buttons.css',
		'styles/prosilver/theme/colours.css',
		'styles/prosilver/theme/common.css',
		'styles/prosilver/theme/content.css',
		'styles/prosilver/theme/cp.css',
		'styles/prosilver/theme/forms.css',
		'styles/prosilver/theme/icons.css',
		'styles/prosilver/theme/images/site_logo.svg',
		'styles/prosilver/theme/plupload.css',
		'styles/prosilver/theme/print.css',
		'styles/prosilver/theme/responsive.css',
		'styles/prosilver/theme/stylesheet.css',
		'ucp.php',
		'viewforum.php',
		'viewonline.php',
		'viewtopic.php',
		'styles/prosilver/theme/images/announce_read.gif',
		'styles/prosilver/theme/images/announce_read_locked.gif',
		'styles/prosilver/theme/images/announce_read_locked_mine.gif',
		'styles/prosilver/theme/images/announce_read_mine.gif',
		'styles/prosilver/theme/images/announce_unread.gif',
		'styles/prosilver/theme/images/announce_unread_locked.gif',
		'styles/prosilver/theme/images/announce_unread_locked_mine.gif',
		'styles/prosilver/theme/images/announce_unread_mine.gif',
		'styles/prosilver/theme/images/forum_link.gif',
		'styles/prosilver/theme/images/forum_read.gif',
		'styles/prosilver/theme/images/forum_read_locked.gif',
		'styles/prosilver/theme/images/forum_read_subforum.gif',
		'styles/prosilver/theme/images/forum_unread.gif',
		'styles/prosilver/theme/images/forum_unread_locked.gif',
		'styles/prosilver/theme/images/forum_unread_subforum.gif',
		'styles/prosilver/theme/images/sticky_read.gif',
		'styles/prosilver/theme/images/sticky_read_locked.gif',
		'styles/prosilver/theme/images/sticky_read_locked_mine.gif',
		'styles/prosilver/theme/images/sticky_read_mine.gif',
		'styles/prosilver/theme/images/sticky_unread.gif',
		'styles/prosilver/theme/images/sticky_unread_locked.gif',
		'styles/prosilver/theme/images/sticky_unread_locked_mine.gif',
		'styles/prosilver/theme/images/sticky_unread_mine.gif',
		'styles/prosilver/theme/images/topic_moved.gif',
		'styles/prosilver/theme/images/topic_read.gif',
		'styles/prosilver/theme/images/topic_read_hot.gif',
		'styles/prosilver/theme/images/topic_read_hot_mine.gif',
		'styles/prosilver/theme/images/topic_read_locked.gif',
		'styles/prosilver/theme/images/topic_read_locked_mine.gif',
		'styles/prosilver/theme/images/topic_read_mine.gif',
		'styles/prosilver/theme/images/topic_unread.gif',
		'styles/prosilver/theme/images/topic_unread_hot.gif',
		'styles/prosilver/theme/images/topic_unread_hot_mine.gif',
		'styles/prosilver/theme/images/topic_unread_locked.gif',
		'styles/prosilver/theme/images/topic_unread_locked_mine.gif',
		'styles/prosilver/theme/images/topic_unread_mine.gif',
	),
	'binary'		=> array(
		'images/upload_icons/flash.gif',
		'styles/prosilver/theme/images/announce_read.gif',
		'styles/prosilver/theme/images/announce_read_locked.gif',
		'styles/prosilver/theme/images/announce_read_locked_mine.gif',
		'styles/prosilver/theme/images/announce_read_mine.gif',
		'styles/prosilver/theme/images/announce_unread.gif',
		'styles/prosilver/theme/images/announce_unread_locked.gif',
		'styles/prosilver/theme/images/announce_unread_locked_mine.gif',
		'styles/prosilver/theme/images/announce_unread_mine.gif',
		'styles/prosilver/theme/images/bg_header.gif',
		'styles/prosilver/theme/images/bg_list.gif',
		'styles/prosilver/theme/images/forum_link.gif',
		'styles/prosilver/theme/images/forum_read.gif',
		'styles/prosilver/theme/images/forum_read_locked.gif',
		'styles/prosilver/theme/images/forum_read_subforum.gif',
		'styles/prosilver/theme/images/forum_unread.gif',
		'styles/prosilver/theme/images/forum_unread_locked.gif',
		'styles/prosilver/theme/images/forum_unread_subforum.gif',
		'styles/prosilver/theme/images/icon_download.gif',
		'styles/prosilver/theme/images/icon_offline.gif',
		'styles/prosilver/theme/images/icon_online.gif',
		'styles/prosilver/theme/images/icon_rate_bad.gif',
		'styles/prosilver/theme/images/icon_rate_good.gif',
		'styles/prosilver/theme/images/quote.gif',
		'styles/prosilver/theme/images/quote_rtl.gif',
		'styles/prosilver/theme/images/site_logo.gif',
		'styles/prosilver/theme/images/sticky_read.gif',
		'styles/prosilver/theme/images/sticky_read_locked.gif',
		'styles/prosilver/theme/images/sticky_read_locked_mine.gif',
		'styles/prosilver/theme/images/sticky_read_mine.gif',
		'styles/prosilver/theme/images/sticky_unread.gif',
		'styles/prosilver/theme/images/sticky_unread_locked.gif',
		'styles/prosilver/theme/images/sticky_unread_locked_mine.gif',
		'styles/prosilver/theme/images/sticky_unread_mine.gif',
		'styles/prosilver/theme/images/topic_moved.gif',
		'styles/prosilver/theme/images/topic_read.gif',
		'styles/prosilver/theme/images/topic_read_hot.gif',
		'styles/prosilver/theme/images/topic_read_hot_mine.gif',
		'styles/prosilver/theme/images/topic_read_locked.gif',
		'styles/prosilver/theme/images/topic_read_locked_mine.gif',
		'styles/prosilver/theme/images/topic_read_mine.gif',
		'styles/prosilver/theme/images/topic_unread.gif',
		'styles/prosilver/theme/images/topic_unread_hot.gif',
		'styles/prosilver/theme/images/topic_unread_hot_mine.gif',
		'styles/prosilver/theme/images/topic_unread_locked.gif',
		'styles/prosilver/theme/images/topic_unread_locked_mine.gif',
		'styles/prosilver/theme/images/topic_unread_mine.gif',
	),
	'deleted'		=> array(
		'adm/style/acp_ext_delete_data.html',
		'adm/style/acp_ext_disable.html',
		'adm/style/acp_ext_enable.html',
		'assets/javascript/jquery.min.js',
		'images/upload_icons/flash.gif',
		'includes/ucp/ucp_remind.php',
		'language/en/email/user_activate_passwd.txt',
		'phpbb/cache/driver/apc.php',
		'phpbb/cache/driver/eaccelerator.php',
		'phpbb/cache/driver/memcache.php',
		'phpbb/cache/driver/xcache.php',
		'phpbb/console/command/fixup/recalculate_email_hash.php',
		'phpbb/db/driver/mysql.php',
		'phpbb/db/tools.php',
		'phpbb/install/module/obtain_data/task/obtain_imagick_path.php',
		'styles/prosilver/template/ucp_remind.html',
		'styles/prosilver/theme/images/bg_header.gif',
		'styles/prosilver/theme/images/bg_list.gif',
		'styles/prosilver/theme/images/icon_download.gif',
		'styles/prosilver/theme/images/icon_offline.gif',
		'styles/prosilver/theme/images/icon_online.gif',
		'styles/prosilver/theme/images/icon_rate_bad.gif',
		'styles/prosilver/theme/images/icon_rate_good.gif',
		'styles/prosilver/theme/images/quote.gif',
		'styles/prosilver/theme/images/quote_rtl.gif',
		'styles/prosilver/theme/images/site_logo.gif',
	),
);
