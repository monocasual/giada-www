<?php

/* @derky_sortablescaptcha/captcha_sortables_acp_demo.html */
class __TwigTemplate_c24b97bcf6d0ec04c65bae8fa6f8b7539125cf0a46b674bd99c9c1a9437558a4 extends Twig_Template
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
\t<dt><label>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("DEMO_QUESTION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_QUESTION_EXPLAIN");
        echo "</span></dt>

\t<dd>
\t\t<div style=\"display:inline-block;\"><!-- used for RTL -->
\t\t
\t\t\t<div style=\"float:left; width:100px; padding: 5px; background-color: #ffffff; border-style: dashed; border-color: #c9d2d8; border-width: 1px;\">
\t\t\t<strong>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("DEMO_NAME_LEFT");
        echo "</strong><hr style=\"border-style: solid;\" />
\t\t\t<ul style=\"margin: 0; padding: 0; height: 70px;\">
\t\t\t\t<li style=\"background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("DEMO_OPTION_BANANAS");
        echo "</li>
\t\t\t\t<li style=\"background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("DEMO_OPTION_TOMATOES");
        echo "</li>
\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t<div style=\"float:left; margin-left:25px; width:100px; padding: 5px; background-color: #ffffff; border-style: dashed; border-color: #c9d2d8; border-width: 1px;\">
\t\t\t<strong>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("DEMO_NAME_RIGHT");
        echo "</strong><hr style=\"border-style: solid;\" />
\t\t\t<ul style=\"margin: 0; padding: 0; height: 70px;\">
\t\t\t\t<li style=\"background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("DEMO_OPTION_APPLES");
        echo "</li>
\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div style=\"clear:both; padding-top: 5px;\">
\t\t<p><em>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("DEMO_PREVIEW_ONLY");
        echo "</em></p>
\t\t</div>
\t\t
\t</dd>
</dl>";
    }

    public function getTemplateName()
    {
        return "@derky_sortablescaptcha/captcha_sortables_acp_demo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  56 => 18,  51 => 16,  43 => 11,  39 => 10,  34 => 8,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label>{L_DEMO_QUESTION}{L_COLON}</label><br /><span>{L_CONFIRM_QUESTION_EXPLAIN}</span></dt>*/
/* */
/* 	<dd>*/
/* 		<div style="display:inline-block;"><!-- used for RTL -->*/
/* 		*/
/* 			<div style="float:left; width:100px; padding: 5px; background-color: #ffffff; border-style: dashed; border-color: #c9d2d8; border-width: 1px;">*/
/* 			<strong>{L_DEMO_NAME_LEFT}</strong><hr style="border-style: solid;" />*/
/* 			<ul style="margin: 0; padding: 0; height: 70px;">*/
/* 				<li style="background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;">{L_DEMO_OPTION_BANANAS}</li>*/
/* 				<li style="background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;">{L_DEMO_OPTION_TOMATOES}</li>*/
/* 			</ul>*/
/* 			</div>*/
/* 			*/
/* 			<div style="float:left; margin-left:25px; width:100px; padding: 5px; background-color: #ffffff; border-style: dashed; border-color: #c9d2d8; border-width: 1px;">*/
/* 			<strong>{L_DEMO_NAME_RIGHT}</strong><hr style="border-style: solid;" />*/
/* 			<ul style="margin: 0; padding: 0; height: 70px;">*/
/* 				<li style="background-color:#e1ebf2; list-style-type: none; margin: 5px 5px 5px 5px; padding: 5px; min-width: 50px; cursor: move;">{L_DEMO_OPTION_APPLES}</li>*/
/* 			</ul>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		<div style="clear:both; padding-top: 5px;">*/
/* 		<p><em>{L_DEMO_PREVIEW_ONLY}</em></p>*/
/* 		</div>*/
/* 		*/
/* 	</dd>*/
/* </dl>*/
