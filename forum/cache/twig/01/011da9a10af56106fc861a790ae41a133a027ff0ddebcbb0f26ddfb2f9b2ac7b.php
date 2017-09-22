<?php

/* navbar_footer.html */
class __TwigTemplate_f0c9b8cb03e00cbe030fbc53cdd9a57d99f4507f488eaaa16fea28c95ec71cef extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_breadcrumb_prepend.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_breadcrumb_prepend.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_breadcrumb_append.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_breadcrumb_append.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_timezone_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_timezone_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_timezone_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_timezone_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 16
        echo "\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_teamlink_before.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_teamlink_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 21
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/overall_footer_teamlink_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/overall_footer_teamlink_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 23
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 24,  161 => 23,  152 => 22,  143 => 21,  134 => 20,  131 => 19,  121 => 18,  114 => 17,  111 => 16,  103 => 15,  98 => 14,  90 => 13,  87 => 12,  61 => 11,  58 => 10,  50 => 9,  43 => 8,  34 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="navbar" role="navigation">*/
/* 	<div class="inner">*/
/* */
/* 	<ul id="nav-footer" class="linklist bulletin" role="menubar">*/
/* 		<li class="small-icon icon-home breadcrumbs">*/
/* 			<!-- IF U_SITE_HOME --><span class="crumb"><a href="{U_SITE_HOME}" data-navbar-reference="home">{L_SITE_HOME}</a></span><!-- ENDIF -->*/
/* 			<!-- EVENT overall_footer_breadcrumb_prepend -->*/
/* 			<span class="crumb"><a href="{U_INDEX}" data-navbar-reference="index">{L_INDEX}</a></span>*/
/* 			<!-- EVENT overall_footer_breadcrumb_append -->*/
/* 		</li>*/
/* 		<!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT --><li class="small-icon icon-<!-- IF S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-last-responsive="true"><a href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_FORUM_TOGGLE}" data-toggle-url="{U_WATCH_FORUM_TOGGLE}">{S_WATCH_FORUM_TITLE}</a></li><!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_footer_timezone_before -->*/
/* 		<li class="rightside">{S_TIMEZONE}</li>*/
/* 		<!-- EVENT overall_footer_timezone_after -->*/
/* 		<!-- IF not S_IS_BOT -->*/
/* 			<li class="small-icon icon-delete-cookies rightside"><a href="{U_DELETE_COOKIES}" data-ajax="true" data-refresh="true" role="menuitem">{L_DELETE_COOKIES}</a></li>*/
/* 			<!-- IF S_DISPLAY_MEMBERLIST --><li class="small-icon icon-members rightside" data-last-responsive="true"><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}" role="menuitem">{L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_before -->*/
/* 		<!-- IF U_TEAM --><li class="small-icon icon-team rightside" data-last-responsive="true"><a href="{U_TEAM}" role="menuitem">{L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 		<!-- EVENT overall_footer_teamlink_after -->*/
/* 		<!-- IF U_CONTACT_US --><li class="small-icon icon-contact rightside" data-last-responsive="true"><a href="{U_CONTACT_US}" role="menuitem">{L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* 	</ul>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
