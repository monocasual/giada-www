<?php

/* @derky_sortablescaptcha/event/overall_header_head_append.html */
class __TwigTemplate_fb0c4092f57657f2176997286629e2fc9ee98121c0107638aa61dfe4323c48fc extends Twig_Template
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
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 2
            echo "<!-- This event is needed because INCLUDECSS can't be used in the sortables template file https://tracker.phpbb.com/browse/PHPBB3-13717 -->
";
            // line 3
            $asset_file = "sortablescaptcha.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('4');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
    }

    public function getTemplateName()
    {
        return "@derky_sortablescaptcha/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF CAPTCHA_TEMPLATE -->*/
/* <!-- This event is needed because INCLUDECSS can't be used in the sortables template file https://tracker.phpbb.com/browse/PHPBB3-13717 -->*/
/* <!-- INCLUDECSS sortablescaptcha.css -->*/
/* <!-- ENDIF -->*/
