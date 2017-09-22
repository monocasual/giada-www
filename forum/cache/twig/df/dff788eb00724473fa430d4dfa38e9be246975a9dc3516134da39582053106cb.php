<?php

/* acp_ext_enable.html */
class __TwigTemplate_306a44de56cf24661c4a6a028e3a9113fbecad84ac03b7df7217ac3d1fcf70ce extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_ext_enable.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
\t<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>
\t<p>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_EXPLAIN");
        echo "</p>

\t";
        // line 10
        if ((isset($context["MIGRATOR_ERROR"]) ? $context["MIGRATOR_ERROR"] : null)) {
            // line 11
            echo "\t<div class=\"errorbox\">
\t\t<p><strong>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("MIGRATION_EXCEPTION_ERROR");
            echo "</strong></p>
\t\t<p>";
            // line 13
            echo (isset($context["MIGRATOR_ERROR"]) ? $context["MIGRATOR_ERROR"] : null);
            echo "</p>
\t\t<p><a href=\"";
            // line 14
            echo (isset($context["U_RETURN"]) ? $context["U_RETURN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t</div>
\t";
        } elseif (        // line 16
(isset($context["PRE"]) ? $context["PRE"] : null)) {
            // line 17
            echo "\t<fieldset>
\t\t<h2>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "</h2>
\t\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_MESSAGE");
            echo "</p>
\t</fieldset>

\t<form id=\"acp_extensions\" method=\"post\" action=\"";
            // line 22
            echo (isset($context["U_ENABLE"]) ? $context["U_ENABLE"] : null);
            echo "\">
\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" name=\"enable\" value=\"";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE");
            echo "\" />
\t\t<input class=\"button2\" type=\"submit\" name=\"cancel\" value=\"";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "\" />
\t</fieldset>
\t</form>
\t";
        } elseif (        // line 28
(isset($context["S_NEXT_STEP"]) ? $context["S_NEXT_STEP"] : null)) {
            // line 29
            echo "\t\t<div class=\"successbox notice\">
\t\t\t<p>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_IN_PROGRESS");
            echo "</p>
\t\t</div>
\t";
        } else {
            // line 33
            echo "\t\t<div class=\"successbox\">
\t\t\t<p>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("EXTENSION_ENABLE_SUCCESS");
            echo "</p>
\t\t\t<br />
\t\t\t<p><a href=\"";
            // line 36
            echo (isset($context["U_RETURN"]) ? $context["U_RETURN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t\t</div>
\t";
        }
        // line 39
        echo "
";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_enable.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_enable.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  127 => 39,  119 => 36,  114 => 34,  111 => 33,  105 => 30,  102 => 29,  100 => 28,  94 => 25,  90 => 24,  85 => 22,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  63 => 14,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  45 => 8,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* 	<a id="maincontent"></a>*/
/* */
/* 	<h1>{L_EXTENSIONS_ADMIN}</h1>*/
/* */
/* 	<p>{L_EXTENSIONS_EXPLAIN}</p>*/
/* 	<p>{L_EXTENSION_ENABLE_EXPLAIN}</p>*/
/* */
/* 	<!-- IF MIGRATOR_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<p><strong>{L_MIGRATION_EXCEPTION_ERROR}</strong></p>*/
/* 		<p>{MIGRATOR_ERROR}</p>*/
/* 		<p><a href="{U_RETURN}">{L_RETURN_TO_EXTENSION_LIST}</a></p>*/
/* 	</div>*/
/* 	<!-- ELSEIF PRE -->*/
/* 	<fieldset>*/
/* 		<h2>{L_CONFIRM}</h2>*/
/* 		<p>{L_CONFIRM_MESSAGE}</p>*/
/* 	</fieldset>*/
/* */
/* 	<form id="acp_extensions" method="post" action="{U_ENABLE}">*/
/* 	<fieldset class="submit-buttons">*/
/* 		<input class="button1" type="submit" name="enable" value="{L_EXTENSION_ENABLE}" />*/
/* 		<input class="button2" type="submit" name="cancel" value="{L_CANCEL}" />*/
/* 	</fieldset>*/
/* 	</form>*/
/* 	<!-- ELSEIF S_NEXT_STEP -->*/
/* 		<div class="successbox notice">*/
/* 			<p>{L_EXTENSION_ENABLE_IN_PROGRESS}</p>*/
/* 		</div>*/
/* 	<!-- ELSE -->*/
/* 		<div class="successbox">*/
/* 			<p>{L_EXTENSION_ENABLE_SUCCESS}</p>*/
/* 			<br />*/
/* 			<p><a href="{U_RETURN}">{L_RETURN_TO_EXTENSION_LIST}</a></p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
