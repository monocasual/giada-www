<?php

/* notification_dropdown.html */
class __TwigTemplate_badad1306817340b39487e28c50f0e4dc67b62c044626a52d61c3f91234f0b80 extends Twig_Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\">
\t\t\t\t<a href=\"";
        // line 7
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a>
\t\t\t\t";
        // line 8
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            // line 9
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
            echo "</a></span>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t</span>
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 15
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
            // line 16
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 21
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo " bg2";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", array())) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", array());
            }
            if ( !$this->getAttribute($context["notifications"], "URL", array())) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 22
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 23
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", array());
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", array());
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", array())) {
                echo $this->getAttribute($context["notifications"], "AVATAR", array());
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 27
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", array());
            echo "</p>
\t\t\t\t\t\t\t";
            // line 28
            if ($this->getAttribute($context["notifications"], "REFERENCE", array())) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", array());
                echo "</p>";
            }
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", array())) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", array());
                echo "</p>";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", array())) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", array());
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute($context["notifications"], "TIME", array());
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 33
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                echo "</a>";
            }
            // line 34
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 42
        echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  160 => 39,  153 => 37,  145 => 35,  142 => 34,  138 => 33,  132 => 31,  125 => 30,  118 => 29,  112 => 28,  108 => 27,  105 => 26,  96 => 25,  84 => 23,  82 => 22,  68 => 21,  63 => 20,  57 => 17,  54 => 16,  52 => 15,  46 => 11,  38 => 9,  36 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div id="notification_list" class="dropdown dropdown-extended notification_list">*/
/* 	<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 	<div class="dropdown-contents">*/
/* 		<div class="header">*/
/* 			{L_NOTIFICATIONS}*/
/* 			<span class="header_settings">*/
/* 				<a href="{U_NOTIFICATION_SETTINGS}">{L_SETTINGS}</a>*/
/* 				<!-- IF NOTIFICATIONS_COUNT -->*/
/* 					<span id="mark_all_notifications"> &bull; <a href="{U_MARK_ALL_NOTIFICATIONS}" data-ajax="notification.mark_all_read">{L_MARK_ALL_READ}</a></span>*/
/* 				<!-- ENDIF -->*/
/* 			</span>*/
/* 		</div>*/
/* */
/* 		<ul>*/
/* 			<!-- IF not .notifications -->*/
/* 				<li class="no_notifications">*/
/* 					{L_NO_NOTIFICATIONS}*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- BEGIN notifications -->*/
/* 				<li class="<!-- IF notifications.UNREAD --> bg2<!-- ENDIF --><!-- IF notifications.STYLING --> {notifications.STYLING}<!-- ENDIF --><!-- IF not notifications.URL --> no-url<!-- ENDIF -->">*/
/* 					<!-- IF notifications.URL -->*/
/* 						<a class="notification-block" href="<!-- IF notifications.UNREAD -->{notifications.U_MARK_READ}" data-real-url="{notifications.URL}<!-- ELSE -->{notifications.URL}<!-- ENDIF -->">*/
/* 					<!-- ENDIF -->*/
/* 						<!-- IF notifications.AVATAR -->{notifications.AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" /><!-- ENDIF -->*/
/* 						<div class="notification_text">*/
/* 							<p class="notification-title">{notifications.FORMATTED_TITLE}</p>*/
/* 							<!-- IF notifications.REFERENCE --><p class="notification-reference">{notifications.REFERENCE}</p><!-- ENDIF -->*/
/* 							<!-- IF notifications.FORUM --><p class="notification-forum">{notifications.FORUM}</p><!-- ENDIF -->*/
/* 							<!-- IF notifications.REASON --><p class="notification-reason">{notifications.REASON}</p><!-- ENDIF -->*/
/* 							<p class="notification-time">{notifications.TIME}</p>*/
/* 						</div>*/
/* 					<!-- IF notifications.URL --></a><!-- ENDIF -->*/
/* 					<!-- IF notifications.UNREAD -->*/
/* 						<a href="{notifications.U_MARK_READ}" class="mark_read icon-mark" data-ajax="notification.mark_read" title="{L_MARK_READ}"></a>*/
/* 					<!-- ENDIF -->*/
/* 				</li>*/
/* 			<!-- END notifications -->*/
/* 		</ul>*/
/* */
/* 		<div class="footer">*/
/* 			<a href="{U_VIEW_ALL_NOTIFICATIONS}"><span>{L_SEE_ALL}</span></a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
