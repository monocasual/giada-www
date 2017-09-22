<?php

/* overall_footer.html */
class __TwigTemplate_0f99f4fbeff578136e048d7f6f1a27371d185258bda4607c01b8a64673556e4f extends Twig_Template
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
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- /#main -->
\t\t\t\t</div>
\t\t</div><!-- /#acp -->
\t</div>

\t<div id=\"page-footer\">
\t\t<div class=\"copyright\">
\t\t\t";
        // line 9
        if ((isset($context["S_COPYRIGHT_HTML"]) ? $context["S_COPYRIGHT_HTML"] : null)) {
            // line 10
            echo "\t\t\t\t";
            echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
            echo "
\t\t\t\t";
            // line 11
            if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
                echo "<br />";
                echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
            }
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "
\t\t\t";
        // line 14
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            // line 15
            echo "\t\t\t\t";
            if ((isset($context["S_COPYRIGHT_HTML"]) ? $context["S_COPYRIGHT_HTML"] : null)) {
                echo "<br />";
            }
            // line 16
            echo "\t\t\t\t";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "
\t\t\t";
        }
        // line 18
        echo "\t\t</div>

\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t</div>
\t\t<div id=\"loading_indicator\"></div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 36
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 37
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 38
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 39
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('4');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 40
        $asset_file = "admin.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('4');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 41
        echo "
";
        // line 42
        if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/acp_overall_footer_after.html')) {
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
            $this->env->loadTemplate('@derky_sortablescaptcha/event/acp_overall_footer_after.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }

        // line 43
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 43,  148 => 42,  145 => 41,  130 => 40,  115 => 39,  108 => 38,  100 => 37,  96 => 36,  80 => 25,  64 => 20,  60 => 18,  54 => 16,  49 => 15,  47 => 14,  44 => 13,  41 => 12,  36 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* 						</div>*/
/* 					</div><!-- /#main -->*/
/* 				</div>*/
/* 		</div><!-- /#acp -->*/
/* 	</div>*/
/* */
/* 	<div id="page-footer">*/
/* 		<div class="copyright">*/
/* 			<!-- IF S_COPYRIGHT_HTML -->*/
/* 				{CREDIT_LINE}*/
/* 				<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF DEBUG_OUTPUT -->*/
/* 				<!-- IF S_COPYRIGHT_HTML --><br /><!-- ENDIF -->*/
/* 				{DEBUG_OUTPUT}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* */
/* 		<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 			<div id="darken">&nbsp;</div>*/
/* 		</div>*/
/* 		<div id="loading_indicator"></div>*/
/* */
/* 		<div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 			<a href="#" class="alert_close"></a>*/
/* 			<h3 class="alert_title"></h3><p class="alert_text"></p>*/
/* 		</div>*/
/* 		<div id="phpbb_confirm" class="phpbb_alert">*/
/* 			<a href="#" class="alert_close"></a>*/
/* 			<div class="alert_text"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* <!-- INCLUDEJS ajax.js -->*/
/* <!-- INCLUDEJS admin.js -->*/
/* */
/* <!-- EVENT acp_overall_footer_after -->*/
/* {$SCRIPTS}*/
/* */
/* </body>*/
/* </html>*/
/* */
