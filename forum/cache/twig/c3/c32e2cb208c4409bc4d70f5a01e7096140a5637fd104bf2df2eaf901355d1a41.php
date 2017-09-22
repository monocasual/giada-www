<?php

/* captcha_default_acp_demo.html */
class __TwigTemplate_bff9a7bb899346e2672e5afb8d15646dc8f5d7310aae9d878e1e61edac3b7886 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"captcha_preview\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CAPTCHA_PREVIEW_EXPLAIN");
        echo "</span></dt>
\t<dd><img src=\"";
        // line 3
        echo (isset($context["CONFIRM_IMAGE"]) ? $context["CONFIRM_IMAGE"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" width=\"360\" height=\"96\" id=\"captcha_preview\" /></dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "captcha_default_acp_demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="captcha_preview">{L_PREVIEW}{L_COLON}</label><br /><span>{L_CAPTCHA_PREVIEW_EXPLAIN}</span></dt>*/
/* 	<dd><img src="{CONFIRM_IMAGE}" alt="{L_PREVIEW}" width="360" height="96" id="captcha_preview" /></dd>*/
/* </dl>*/
/* */
