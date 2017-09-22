<?php

/* acp_main.html */
class __TwigTemplate_d5dc0dd146d0c63f38164ee4961e350c0729be333830bb96eb7e5b7b5d482f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_main.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_RESTORE_PERMISSIONS"]) ? $context["S_RESTORE_PERMISSIONS"] : null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("PERMISSIONS_TRANSFERRED");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("PERMISSIONS_TRANSFERRED_EXPLAIN");
            echo "</p>

";
        } else {
            // line 12
            echo "
\t<h1>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("WELCOME_PHPBB");
            echo "</h1>

\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("ADMIN_INTRO");
            echo "</p>

\t";
            // line 17
            if ((isset($context["S_VERSIONCHECK_FAIL"]) ? $context["S_VERSIONCHECK_FAIL"] : null)) {
                // line 18
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 20
                echo (isset($context["VERSIONCHECK_FAIL_REASON"]) ? $context["VERSIONCHECK_FAIL_REASON"] : null);
                echo "</p>
\t\t\t<p><a href=\"";
                // line 21
                echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                echo (isset($context["U_VERSIONCHECK"]) ? $context["U_VERSIONCHECK"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            } elseif ( !            // line 23
(isset($context["S_VERSION_UP_TO_DATE"]) ? $context["S_VERSION_UP_TO_DATE"] : null)) {
                // line 24
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 25
                echo $this->env->getExtension('phpbb')->lang("VERSION_NOT_UP_TO_DATE_TITLE");
                echo "</p>
\t\t\t<p><a href=\"";
                // line 26
                echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a> &middot; <a href=\"";
                echo (isset($context["U_VERSIONCHECK"]) ? $context["U_VERSIONCHECK"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                echo "</a></p>
\t\t</div>
\t";
            }
            // line 29
            echo "
\t";
            // line 30
            if ((isset($context["S_SEARCH_INDEX_MISSING"]) ? $context["S_SEARCH_INDEX_MISSING"] : null)) {
                // line 31
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 33
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_INDEX");
                echo "</p>
\t\t</div>
\t";
            }
            // line 36
            echo "
\t";
            // line 37
            if ((isset($context["S_REMOVE_INSTALL"]) ? $context["S_REMOVE_INSTALL"] : null)) {
                // line 38
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 39
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 40
                echo $this->env->getExtension('phpbb')->lang("REMOVE_INSTALL");
                echo "</p>
\t\t</div>
\t";
            }
            // line 43
            echo "
\t";
            // line 44
            if ((isset($context["S_MBSTRING_LOADED"]) ? $context["S_MBSTRING_LOADED"] : null)) {
                // line 45
                echo "\t\t";
                if ((isset($context["S_MBSTRING_FUNC_OVERLOAD_FAIL"]) ? $context["S_MBSTRING_FUNC_OVERLOAD_FAIL"] : null)) {
                    // line 46
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 47
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_FUNC_OVERLOAD");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 48
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 51
                echo "
\t\t";
                // line 52
                if ((isset($context["S_MBSTRING_ENCODING_TRANSLATION_FAIL"]) ? $context["S_MBSTRING_ENCODING_TRANSLATION_FAIL"] : null)) {
                    // line 53
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 54
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 55
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 58
                echo "
\t\t";
                // line 59
                if ((isset($context["S_MBSTRING_HTTP_INPUT_FAIL"]) ? $context["S_MBSTRING_HTTP_INPUT_FAIL"] : null)) {
                    // line 60
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_INPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 62
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_INPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 65
                echo "
\t\t";
                // line 66
                if ((isset($context["S_MBSTRING_HTTP_OUTPUT_FAIL"]) ? $context["S_MBSTRING_HTTP_OUTPUT_FAIL"] : null)) {
                    // line 67
                    echo "\t\t\t<div class=\"errorbox\">
\t\t\t\t<h3>";
                    // line 68
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_OUTPUT");
                    echo "</h3>
\t\t\t\t<p>";
                    // line 69
                    echo $this->env->getExtension('phpbb')->lang("ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN");
                    echo "</p>
\t\t\t</div>
\t\t";
                }
                // line 72
                echo "\t";
            }
            // line 73
            echo "
\t";
            // line 74
            if ((isset($context["S_WRITABLE_CONFIG"]) ? $context["S_WRITABLE_CONFIG"] : null)) {
                // line 75
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 76
                echo $this->env->getExtension('phpbb')->lang("WRITABLE_CONFIG");
                echo "</p>
\t\t</div>
\t";
            }
            // line 79
            echo "
\t";
            // line 80
            if ((isset($context["S_PHP_VERSION_OLD"]) ? $context["S_PHP_VERSION_OLD"] : null)) {
                // line 81
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 82
                echo $this->env->getExtension('phpbb')->lang("PHP_VERSION_OLD");
                echo "</p>
\t\t</div>
\t";
            }
            // line 85
            echo "
\t";
            // line 86
            if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/acp_main_notice_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                $this->env->loadTemplate('@derky_sortablescaptcha/event/acp_main_notice_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 87
            echo "
\t<table class=\"table1 two-columns no-header\" data-no-responsive-header=\"true\">
\t\t<caption>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("FORUM_STATS");
            echo "</caption>
\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("VALUE");
            echo "</th>
\t\t<th>";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("STATISTIC");
            echo "</th>
\t\t<th>";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("VALUE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("NUMBER_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 102
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("POSTS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 104
            echo (isset($context["POSTS_PER_DAY"]) ? $context["POSTS_PER_DAY"] : null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("NUMBER_TOPICS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 108
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("TOPICS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 110
            echo (isset($context["TOPICS_PER_DAY"]) ? $context["TOPICS_PER_DAY"] : null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("NUMBER_USERS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 114
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("USERS_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 116
            echo (isset($context["USERS_PER_DAY"]) ? $context["USERS_PER_DAY"] : null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("NUMBER_FILES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 120
            echo (isset($context["TOTAL_FILES"]) ? $context["TOTAL_FILES"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("FILES_PER_DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 122
            echo (isset($context["FILES_PER_DAY"]) ? $context["FILES_PER_DAY"] : null);
            echo "</strong></td>
\t</tr>


\t<tr>
\t\t<td>";
            // line 127
            echo $this->env->getExtension('phpbb')->lang("BOARD_STARTED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 128
            echo (isset($context["START_DATE"]) ? $context["START_DATE"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("AVATAR_DIR_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 130
            echo (isset($context["AVATAR_DIR_SIZE"]) ? $context["AVATAR_DIR_SIZE"] : null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("DATABASE_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 134
            echo (isset($context["DBSIZE"]) ? $context["DBSIZE"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 135
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_DIR_SIZE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 136
            echo (isset($context["UPLOAD_DIR_SIZE"]) ? $context["UPLOAD_DIR_SIZE"] : null);
            echo "</strong></td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("DATABASE_SERVER_INFO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 140
            echo (isset($context["DATABASE_INFO"]) ? $context["DATABASE_INFO"] : null);
            echo "</strong></td>
\t\t<td>";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("GZIP_COMPRESSION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </td>
\t\t<td><strong>";
            // line 142
            echo (isset($context["GZIP_COMPRESSION"]) ? $context["GZIP_COMPRESSION"] : null);
            echo "</strong></td>
\t</tr>
\t";
            // line 144
            if (((isset($context["S_TOTAL_ORPHAN"]) ? $context["S_TOTAL_ORPHAN"] : null) || (isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null))) {
                // line 145
                echo "\t<tr>
\t";
                // line 146
                if ((isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null)) {
                    // line 147
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("BOARD_VERSION");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " </td>
\t\t<td>
\t\t\t<strong><a href=\"";
                    // line 149
                    echo (isset($context["U_VERSIONCHECK"]) ? $context["U_VERSIONCHECK"] : null);
                    echo "\" ";
                    if ((isset($context["S_VERSION_UP_TO_DATE"]) ? $context["S_VERSION_UP_TO_DATE"] : null)) {
                        echo "style=\"color: #228822;\" ";
                    } elseif ( !(isset($context["S_VERSIONCHECK_FAIL"]) ? $context["S_VERSIONCHECK_FAIL"] : null)) {
                        echo "style=\"color: #BC2A4D;\" ";
                    }
                    echo "title=\"";
                    echo $this->env->getExtension('phpbb')->lang("MORE_INFORMATION");
                    echo "\">";
                    echo (isset($context["BOARD_VERSION"]) ? $context["BOARD_VERSION"] : null);
                    echo "</a></strong> [&nbsp;<a href=\"";
                    echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
                    echo "</a>&nbsp;]
\t\t</td>
\t";
                }
                // line 152
                echo "\t";
                if ((isset($context["S_TOTAL_ORPHAN"]) ? $context["S_TOTAL_ORPHAN"] : null)) {
                    // line 153
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("NUMBER_ORPHAN");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " </td>
\t\t<td><strong>";
                    // line 154
                    echo (isset($context["TOTAL_ORPHAN"]) ? $context["TOTAL_ORPHAN"] : null);
                    echo "</strong></td>
\t";
                }
                // line 156
                echo "\t";
                if (( !(isset($context["S_TOTAL_ORPHAN"]) ? $context["S_TOTAL_ORPHAN"] : null) ||  !(isset($context["S_VERSIONCHECK"]) ? $context["S_VERSIONCHECK"] : null))) {
                    // line 157
                    echo "\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t";
                }
                // line 160
                echo "\t</tr>
\t";
            }
            // line 162
            echo "\t</tbody>
\t</table>

\t";
            // line 165
            if ((isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null)) {
                // line 166
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 167
                echo $this->env->getExtension('phpbb')->lang("STATISTIC_RESYNC_OPTIONS");
                echo "</legend>

\t\t\t<form id=\"action_online_form\" method=\"post\" action=\"";
                // line 169
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_online\">";
                // line 171
                echo $this->env->getExtension('phpbb')->lang("RESET_ONLINE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"online\" /><input class=\"button2\" type=\"submit\" id=\"action_online\" name=\"action_online\" value=\"";
                // line 172
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_date_form\" method=\"post\" action=\"";
                // line 176
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_date\">";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("RESET_DATE");
                echo "</label><br /><span>&nbsp;</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"date\" /><input class=\"button2\" type=\"submit\" id=\"action_date\" name=\"action_date\" value=\"";
                // line 179
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 183
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_stats\">";
                // line 185
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 186
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_user_form\" method=\"post\" action=\"";
                // line 190
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_user\">";
                // line 192
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POSTCOUNTS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POSTCOUNTS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"user\" /><input class=\"button2\" type=\"submit\" id=\"action_user\" name=\"action_user\" value=\"";
                // line 193
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t<form id=\"action_db_track_form\" method=\"post\" action=\"";
                // line 197
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_db_track\">";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POST_MARKING");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("RESYNC_POST_MARKING_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"db_track\" /><input class=\"button2\" type=\"submit\" id=\"action_db_track\" name=\"action_db_track\" value=\"";
                // line 200
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 204
                if ((isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null)) {
                    // line 205
                    echo "\t\t\t<form id=\"action_purge_sessions_form\" method=\"post\" action=\"";
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_sessions\">";
                    // line 207
                    echo $this->env->getExtension('phpbb')->lang("PURGE_SESSIONS");
                    echo "</label><br /><span>";
                    echo $this->env->getExtension('phpbb')->lang("PURGE_SESSIONS_EXPLAIN");
                    echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_sessions\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_sessions\" name=\"action_purge_sessions\" value=\"";
                    // line 208
                    echo $this->env->getExtension('phpbb')->lang("RUN");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>
\t\t\t";
                }
                // line 212
                echo "
\t\t\t<form id=\"action_purge_cache_form\" method=\"post\" action=\"";
                // line 213
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\" data-ajax=\"true\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"action_purge_cache\">";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("PURGE_CACHE");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("PURGE_CACHE_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"purge_cache\" /><input class=\"button2\" type=\"submit\" id=\"action_purge_cache\" name=\"action_purge_cache\" value=\"";
                // line 216
                echo $this->env->getExtension('phpbb')->lang("RUN");
                echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</form>

\t\t\t";
                // line 220
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/acp_main_actions_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/acp_main_actions_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 221
                echo "  \t\t</fieldset>
\t";
            }
            // line 223
            echo "
\t";
            // line 224
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()))) {
                // line 225
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_LOG");
                echo "</h2>

\t\t<p>";
                // line 227
                echo $this->env->getExtension('phpbb')->lang("ADMIN_LOG_INDEX_EXPLAIN");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 229
                echo (isset($context["U_ADMIN_LOG"]) ? $context["U_ADMIN_LOG"] : null);
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb')->lang("VIEW_ADMIN_LOG");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 234
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 235
                echo $this->env->getExtension('phpbb')->lang("IP");
                echo "</th>
\t\t\t<th>";
                // line 236
                echo $this->env->getExtension('phpbb')->lang("TIME");
                echo "</th>
\t\t\t<th>";
                // line 237
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 241
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 242
                    echo "\t\t\t<tr>
\t\t\t\t<td>";
                    // line 243
                    echo $this->getAttribute($context["log"], "USERNAME", array());
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 244
                    echo $this->getAttribute($context["log"], "IP", array());
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 245
                    echo $this->getAttribute($context["log"], "DATE", array());
                    echo "</td>
\t\t\t\t<td>";
                    // line 246
                    echo $this->getAttribute($context["log"], "ACTION", array());
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 252
            echo "
\t";
            // line 253
            if ((isset($context["S_INACTIVE_USERS"]) ? $context["S_INACTIVE_USERS"] : null)) {
                // line 254
                echo "\t\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS");
                echo "</h2>

\t\t<p>";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_USERS_EXPLAIN_INDEX");
                echo "</p>

\t\t<div style=\"text-align: right;\"><a href=\"";
                // line 258
                echo (isset($context["U_INACTIVE_USERS"]) ? $context["U_INACTIVE_USERS"] : null);
                echo "\">&raquo; ";
                echo $this->env->getExtension('phpbb')->lang("VIEW_INACTIVE_USERS");
                echo "</a></div>

\t\t<table class=\"table1 zebra-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 263
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "</th>
\t\t\t<th>";
                // line 264
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo "</th>
\t\t\t<th>";
                // line 265
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_DATE");
                echo "</th>
\t\t\t<th>";
                // line 266
                echo $this->env->getExtension('phpbb')->lang("LAST_VISIT");
                echo "</th>
\t\t\t<th>";
                // line 267
                echo $this->env->getExtension('phpbb')->lang("INACTIVE_REASON");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 271
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "inactive", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["inactive"]) {
                    // line 272
                    echo "\t\t\t<tr>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 274
                    echo $this->getAttribute($context["inactive"], "USERNAME_FULL", array());
                    echo "
\t\t\t\t\t";
                    // line 275
                    if ($this->getAttribute($context["inactive"], "POSTS", array())) {
                        echo "<br />";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["inactive"], "POSTS", array());
                        echo "</strong> [<a href=\"";
                        echo $this->getAttribute($context["inactive"], "U_SEARCH_USER", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                        echo "</a>]";
                    }
                    // line 276
                    echo "\t\t\t\t</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 277
                    echo $this->getAttribute($context["inactive"], "JOINED", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 278
                    echo $this->getAttribute($context["inactive"], "INACTIVE_DATE", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">";
                    // line 279
                    echo $this->getAttribute($context["inactive"], "LAST_VISIT", array());
                    echo "</td>
\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t";
                    // line 281
                    echo $this->getAttribute($context["inactive"], "REASON", array());
                    echo "
\t\t\t\t\t";
                    // line 282
                    if ($this->getAttribute($context["inactive"], "REMINDED", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["inactive"], "REMINDED_EXPLAIN", array());
                    }
                    // line 283
                    echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 286
                    echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                    // line 287
                    echo $this->env->getExtension('phpbb')->lang("NO_INACTIVE_USERS");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inactive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 293
            echo "
";
        }
        // line 295
        echo "
";
        // line 296
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_main.html", 296)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  859 => 296,  856 => 295,  852 => 293,  847 => 290,  838 => 287,  835 => 286,  828 => 283,  823 => 282,  819 => 281,  814 => 279,  810 => 278,  806 => 277,  803 => 276,  790 => 275,  786 => 274,  782 => 272,  777 => 271,  770 => 267,  766 => 266,  762 => 265,  758 => 264,  754 => 263,  744 => 258,  739 => 256,  733 => 254,  731 => 253,  728 => 252,  723 => 249,  714 => 246,  710 => 245,  706 => 244,  702 => 243,  699 => 242,  695 => 241,  688 => 237,  684 => 236,  680 => 235,  676 => 234,  666 => 229,  661 => 227,  655 => 225,  653 => 224,  650 => 223,  646 => 221,  638 => 220,  631 => 216,  625 => 215,  620 => 213,  617 => 212,  610 => 208,  604 => 207,  598 => 205,  596 => 204,  589 => 200,  583 => 199,  578 => 197,  571 => 193,  565 => 192,  560 => 190,  553 => 186,  547 => 185,  542 => 183,  535 => 179,  531 => 178,  526 => 176,  519 => 172,  515 => 171,  510 => 169,  505 => 167,  502 => 166,  500 => 165,  495 => 162,  491 => 160,  486 => 157,  483 => 156,  478 => 154,  472 => 153,  469 => 152,  449 => 149,  442 => 147,  440 => 146,  437 => 145,  435 => 144,  430 => 142,  425 => 141,  421 => 140,  416 => 139,  410 => 136,  405 => 135,  401 => 134,  396 => 133,  390 => 130,  385 => 129,  381 => 128,  376 => 127,  368 => 122,  363 => 121,  359 => 120,  354 => 119,  348 => 116,  343 => 115,  339 => 114,  334 => 113,  328 => 110,  323 => 109,  319 => 108,  314 => 107,  308 => 104,  303 => 103,  299 => 102,  294 => 101,  286 => 96,  282 => 95,  278 => 94,  274 => 93,  267 => 89,  263 => 87,  255 => 86,  252 => 85,  246 => 82,  243 => 81,  241 => 80,  238 => 79,  232 => 76,  229 => 75,  227 => 74,  224 => 73,  221 => 72,  215 => 69,  211 => 68,  208 => 67,  206 => 66,  203 => 65,  197 => 62,  193 => 61,  190 => 60,  188 => 59,  185 => 58,  179 => 55,  175 => 54,  172 => 53,  170 => 52,  167 => 51,  161 => 48,  157 => 47,  154 => 46,  151 => 45,  149 => 44,  146 => 43,  140 => 40,  136 => 39,  133 => 38,  131 => 37,  128 => 36,  122 => 33,  118 => 32,  115 => 31,  113 => 30,  110 => 29,  98 => 26,  94 => 25,  91 => 24,  89 => 23,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  65 => 17,  60 => 15,  55 => 13,  52 => 12,  46 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_RESTORE_PERMISSIONS -->*/
/* */
/* 	<h1>{L_PERMISSIONS_TRANSFERRED}</h1>*/
/* */
/* 	<p>{L_PERMISSIONS_TRANSFERRED_EXPLAIN}</p>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<h1>{L_WELCOME_PHPBB}</h1>*/
/* */
/* 	<p>{L_ADMIN_INTRO}</p>*/
/* */
/* 	<!-- IF S_VERSIONCHECK_FAIL -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_VERSIONCHECK_FAIL}</p>*/
/* 			<p>{VERSIONCHECK_FAIL_REASON}</p>*/
/* 			<p><a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a> &middot; <a href="{U_VERSIONCHECK}">{L_MORE_INFORMATION}</a></p>*/
/* 		</div>*/
/* 	<!-- ELSEIF not S_VERSION_UP_TO_DATE -->*/
/* 		<div class="errorbox">*/
/* 			<p>{L_VERSION_NOT_UP_TO_DATE_TITLE}</p>*/
/* 			<p><a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a> &middot; <a href="{U_VERSIONCHECK}">{L_MORE_INFORMATION}</a></p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SEARCH_INDEX_MISSING -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{L_NO_SEARCH_INDEX}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_REMOVE_INSTALL -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{L_REMOVE_INSTALL}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_MBSTRING_LOADED -->*/
/* 		<!-- IF S_MBSTRING_FUNC_OVERLOAD_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_FUNC_OVERLOAD}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_ENCODING_TRANSLATION_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_ENCODING_TRANSLATION}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_HTTP_INPUT_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_HTTP_INPUT}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_HTTP_INPUT_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF S_MBSTRING_HTTP_OUTPUT_FAIL -->*/
/* 			<div class="errorbox">*/
/* 				<h3>{L_ERROR_MBSTRING_HTTP_OUTPUT}</h3>*/
/* 				<p>{L_ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_WRITABLE_CONFIG -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_WRITABLE_CONFIG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_PHP_VERSION_OLD -->*/
/* 		<div class="errorbox notice">*/
/* 			<p>{L_PHP_VERSION_OLD}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT acp_main_notice_after -->*/
/* */
/* 	<table class="table1 two-columns no-header" data-no-responsive-header="true">*/
/* 		<caption>{L_FORUM_STATS}</caption>*/
/* 		<col class="col1" /><col class="col2" /><col class="col1" /><col class="col2" />*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_STATISTIC}</th>*/
/* 		<th>{L_VALUE}</th>*/
/* 		<th>{L_STATISTIC}</th>*/
/* 		<th>{L_VALUE}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_POSTS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_POSTS}</strong></td>*/
/* 		<td>{L_POSTS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{POSTS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_TOPICS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_TOPICS}</strong></td>*/
/* 		<td>{L_TOPICS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{TOPICS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_USERS}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_USERS}</strong></td>*/
/* 		<td>{L_USERS_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{USERS_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_NUMBER_FILES}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_FILES}</strong></td>*/
/* 		<td>{L_FILES_PER_DAY}{L_COLON} </td>*/
/* 		<td><strong>{FILES_PER_DAY}</strong></td>*/
/* 	</tr>*/
/* */
/* */
/* 	<tr>*/
/* 		<td>{L_BOARD_STARTED}{L_COLON} </td>*/
/* 		<td><strong>{START_DATE}</strong></td>*/
/* 		<td>{L_AVATAR_DIR_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{AVATAR_DIR_SIZE}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_DATABASE_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{DBSIZE}</strong></td>*/
/* 		<td>{L_UPLOAD_DIR_SIZE}{L_COLON} </td>*/
/* 		<td><strong>{UPLOAD_DIR_SIZE}</strong></td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{L_DATABASE_SERVER_INFO}{L_COLON} </td>*/
/* 		<td><strong>{DATABASE_INFO}</strong></td>*/
/* 		<td>{L_GZIP_COMPRESSION}{L_COLON} </td>*/
/* 		<td><strong>{GZIP_COMPRESSION}</strong></td>*/
/* 	</tr>*/
/* 	<!-- IF S_TOTAL_ORPHAN or S_VERSIONCHECK -->*/
/* 	<tr>*/
/* 	<!-- IF S_VERSIONCHECK -->*/
/* 		<td>{L_BOARD_VERSION}{L_COLON} </td>*/
/* 		<td>*/
/* 			<strong><a href="{U_VERSIONCHECK}" <!-- IF S_VERSION_UP_TO_DATE -->style="color: #228822;" <!-- ELSEIF not S_VERSIONCHECK_FAIL -->style="color: #BC2A4D;" <!-- ENDIF -->title="{L_MORE_INFORMATION}">{BOARD_VERSION}</a></strong> [&nbsp;<a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a>&nbsp;]*/
/* 		</td>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_TOTAL_ORPHAN -->*/
/* 		<td>{L_NUMBER_ORPHAN}{L_COLON} </td>*/
/* 		<td><strong>{TOTAL_ORPHAN}</strong></td>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF not S_TOTAL_ORPHAN or not S_VERSIONCHECK -->*/
/* 		<td>&nbsp;</td>*/
/* 		<td>&nbsp;</td>*/
/* 	<!-- ENDIF -->*/
/* 	</tr>*/
/* 	<!-- ENDIF -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<!-- IF S_ACTION_OPTIONS -->*/
/* 		<fieldset>*/
/* 			<legend>{L_STATISTIC_RESYNC_OPTIONS}</legend>*/
/* */
/* 			<form id="action_online_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_online">{L_RESET_ONLINE}</label><br /><span>&nbsp;</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="online" /><input class="button2" type="submit" id="action_online" name="action_online" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_date_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_date">{L_RESET_DATE}</label><br /><span>&nbsp;</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="date" /><input class="button2" type="submit" id="action_date" name="action_date" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_stats_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_stats">{L_RESYNC_STATS}</label><br /><span>{L_RESYNC_STATS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="stats" /><input class="button2" type="submit" id="action_stats" name="action_stats" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_user_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_user">{L_RESYNC_POSTCOUNTS}</label><br /><span>{L_RESYNC_POSTCOUNTS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="user" /><input class="button2" type="submit" id="action_user" name="action_user" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<form id="action_db_track_form" method="post" action="{U_ACTION}">*/
/* 				<dl>*/
/* 					<dt><label for="action_db_track">{L_RESYNC_POST_MARKING}</label><br /><span>{L_RESYNC_POST_MARKING_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="db_track" /><input class="button2" type="submit" id="action_db_track" name="action_db_track" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<!-- IF S_FOUNDER -->*/
/* 			<form id="action_purge_sessions_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_purge_sessions">{L_PURGE_SESSIONS}</label><br /><span>{L_PURGE_SESSIONS_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="purge_sessions" /><input class="button2" type="submit" id="action_purge_sessions" name="action_purge_sessions" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<form id="action_purge_cache_form" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 				<dl>*/
/* 					<dt><label for="action_purge_cache">{L_PURGE_CACHE}</label><br /><span>{L_PURGE_CACHE_EXPLAIN}</span></dt>*/
/* 					<dd><input type="hidden" name="action" value="purge_cache" /><input class="button2" type="submit" id="action_purge_cache" name="action_purge_cache" value="{L_RUN}" /></dd>*/
/* 				</dl>*/
/* 			</form>*/
/* */
/* 			<!-- EVENT acp_main_actions_append -->*/
/*   		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .log -->*/
/* 		<h2>{L_ADMIN_LOG}</h2>*/
/* */
/* 		<p>{L_ADMIN_LOG_INDEX_EXPLAIN}</p>*/
/* */
/* 		<div style="text-align: right;"><a href="{U_ADMIN_LOG}">&raquo; {L_VIEW_ADMIN_LOG}</a></div>*/
/* */
/* 		<table class="table1 zebra-table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_USERNAME}</th>*/
/* 			<th>{L_IP}</th>*/
/* 			<th>{L_TIME}</th>*/
/* 			<th>{L_ACTION}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN log -->*/
/* 			<tr>*/
/* 				<td>{log.USERNAME}</td>*/
/* 				<td style="text-align: center;">{log.IP}</td>*/
/* 				<td style="text-align: center;">{log.DATE}</td>*/
/* 				<td>{log.ACTION}</td>*/
/* 			</tr>*/
/* 		<!-- END log -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_INACTIVE_USERS -->*/
/* 		<h2>{L_INACTIVE_USERS}</h2>*/
/* */
/* 		<p>{L_INACTIVE_USERS_EXPLAIN_INDEX}</p>*/
/* */
/* 		<div style="text-align: right;"><a href="{U_INACTIVE_USERS}">&raquo; {L_VIEW_INACTIVE_USERS}</a></div>*/
/* */
/* 		<table class="table1 zebra-table">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th>{L_USERNAME}</th>*/
/* 			<th>{L_JOINED}</th>*/
/* 			<th>{L_INACTIVE_DATE}</th>*/
/* 			<th>{L_LAST_VISIT}</th>*/
/* 			<th>{L_INACTIVE_REASON}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<!-- BEGIN inactive -->*/
/* 			<tr>*/
/* 				<td style="vertical-align: top;">*/
/* 					{inactive.USERNAME_FULL}*/
/* 					<!-- IF inactive.POSTS --><br />{L_POSTS}{L_COLON} <strong>{inactive.POSTS}</strong> [<a href="{inactive.U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a>]<!-- ENDIF -->*/
/* 				</td>*/
/* 				<td style="vertical-align: top;">{inactive.JOINED}</td>*/
/* 				<td style="vertical-align: top;">{inactive.INACTIVE_DATE}</td>*/
/* 				<td style="vertical-align: top;">{inactive.LAST_VISIT}</td>*/
/* 				<td style="vertical-align: top;">*/
/* 					{inactive.REASON}*/
/* 					<!-- IF inactive.REMINDED --><br />{inactive.REMINDED_EXPLAIN}<!-- ENDIF -->*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 			<tr>*/
/* 				<td colspan="5" style="text-align: center;">{L_NO_INACTIVE_USERS}</td>*/
/* 			</tr>*/
/* 		<!-- END inactive -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
