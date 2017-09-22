<?php

/* @derky_sortablescaptcha/captcha_sortables_acp.html */
class __TwigTemplate_b56d6f0ac3d5d5b287ad695f7ab07ebc62b3267343521188b7db7774d8d6b58a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "@derky_sortablescaptcha/captcha_sortables_acp.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>


\t<a href=\"";
        // line 6
        if ((isset($context["U_LIST"]) ? $context["U_LIST"] : null)) {
            echo (isset($context["U_LIST"]) ? $context["U_LIST"] : null);
        } else {
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        }
        echo "\" style=\"float: ";
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("BACK");
        echo "</a>

\t<h1>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("QUESTIONS");
        echo "</h1>

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("QUESTIONS_EXPLAIN");
        echo "</p>
";
        // line 11
        if ((isset($context["S_LIST"]) ? $context["S_LIST"] : null)) {
            // line 12
            echo "\t<form id=\"captcha_sortables\" method=\"post\" action=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("QUESTIONS");
            echo "</legend>

\t<table cellspacing=\"1\">
\t<thead>
\t<tr>
\t\t<th colspan=\"3\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("QUESTIONS");
            echo "</th>
\t</tr>
\t<tr class=\"row3\">
\t\t<td style=\"text-align: center;\">";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("QUESTION_TEXT");
            echo "</td>
\t\t<td style=\"width: 5%; text-align: center;\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("QUESTION_LANG");
            echo "</td>
\t\t<td style=\"vertical-align: top; width: 50px; text-align: center; white-space: nowrap;\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</td>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "questions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
                // line 30
                echo "\t\t
\t\t";
                // line 31
                if (($this->getAttribute($context["questions"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "<tr class=\"row1\">";
                } else {
                    echo "<tr class=\"row2\">";
                }
                // line 32
                echo "\t
\t\t<td style=\"text-align: left;\">";
                // line 33
                echo $this->getAttribute($context["questions"], "QUESTION_TEXT", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 34
                echo $this->getAttribute($context["questions"], "QUESTION_LANG", array());
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 35
                echo $this->getAttribute($context["questions"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a>&nbsp;<a href=\"";
                echo $this->getAttribute($context["questions"], "U_DELETE", array());
                echo "\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a></td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t</tbody>
\t</table>
\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"add\" value=\"";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("ADD");
            echo "\" />
\t\t<input  type=\"hidden\" name=\"action\" value=\"add\" />
\t\t<input  type=\"hidden\" name=\"configure\" value=\"1\" />
\t\t<input  type=\"hidden\" name=\"select_captcha\" value=\"";
            // line 44
            echo (isset($context["CLASS"]) ? $context["CLASS"] : null);
            echo "\" />

\t\t";
            // line 46
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t";
            // line 48
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
";
        } else {
            // line 52
            echo "\t";
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 53
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("SORTABLES_ERROR_MSG");
                echo "</p>
\t\t</div>
\t";
            }
            // line 58
            echo "\t<form id=\"captcha_sortables\" method=\"post\" action=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("EDIT_QUESTION");
            echo "</legend>
\t<dl> 
\t\t<dt><label for=\"sort\">";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("QUESTION_SORT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("QUESTION_SORT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"sort\" value=\"0\"";
            // line 63
            if ( !(isset($context["SORT"]) ? $context["SORT"] : null)) {
                echo " id=\"sort\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("COLUMN_LEFT");
            if ((isset($context["NAME_LEFT"]) ? $context["NAME_LEFT"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["NAME_LEFT"]) ? $context["NAME_LEFT"] : null);
            }
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"sort\" value=\"1\"";
            // line 64
            if ((isset($context["SORT"]) ? $context["SORT"] : null)) {
                echo " id=\"sort\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("COLUMN_RIGHT");
            if ((isset($context["NAME_RIGHT"]) ? $context["NAME_RIGHT"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["NAME_RIGHT"]) ? $context["NAME_RIGHT"] : null);
            }
            echo "</label></dd>
\t</dl>
\t
\t<dl> 
\t\t<dt><label for=\"lang_iso\">";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("QUESTION_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("QUESTION_LANG_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"lang_iso\" name=\"lang_iso\">";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "langs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["langs"]) {
                echo "<option value=\"";
                echo $this->getAttribute($context["langs"], "ISO", array());
                echo "\" ";
                if (($this->getAttribute($context["langs"], "ISO", array()) == (isset($context["LANG_ISO"]) ? $context["LANG_ISO"] : null))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $this->getAttribute($context["langs"], "NAME", array());
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</select></dd>
\t</dl>
\t<dl> 
\t\t<dt><label for=\"question_text\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("QUESTION_TEXT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("QUESTION_TEXT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"question_text\" maxlength=\"255\" size=\"60\" name=\"question_text\" type=\"text\" value=\"";
            // line 73
            echo (isset($context["QUESTION_TEXT"]) ? $context["QUESTION_TEXT"] : null);
            echo "\" /></dd>
\t</dl>
\t</fieldset>
\t
\t<div style=\"float: left; width: 48%;\">
\t\t<fieldset style=\"margin:0;\">
\t\t\t<legend>";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("COLUMN_LEFT");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"name_left\">";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("COLUMN_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("COLUMN_NAME_LEFT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input id=\"name_left\" maxlength=\"255\" style=\"width:100%;\" name=\"name_left\" type=\"text\" value=\"";
            // line 82
            echo (isset($context["NAME_LEFT"]) ? $context["NAME_LEFT"] : null);
            echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label for=\"options_left\" style=\"white-space:normal;\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("ANSWERS_EXPLAIN");
            echo "</label><br />
\t\t\t<textarea id=\"options_left\" name=\"options_left\" rows=\"5\" cols=\"5\" style=\"width: 100%; height: 60px; margin-top: 2px;\">";
            // line 86
            echo (isset($context["OPTIONS_LEFT"]) ? $context["OPTIONS_LEFT"] : null);
            echo "</textarea></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>
\t
\t<div style=\"float: right; width: 48%;\">
\t\t<fieldset style=\"margin:0;\">
\t\t\t<legend>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("COLUMN_RIGHT");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"name_right\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("COLUMN_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("COLUMN_NAME_RIGHT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input id=\"name_right\" maxlength=\"255\" style=\"width:100%;\" name=\"name_right\" type=\"text\" value=\"";
            // line 96
            echo (isset($context["NAME_RIGHT"]) ? $context["NAME_RIGHT"] : null);
            echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label for=\"options_right\" style=\"white-space:normal;\">";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("ANSWERS_EXPLAIN");
            echo "</label><br />
\t\t\t<textarea id=\"options_right\" name=\"options_right\" rows=\"5\" cols=\"5\" style=\"width:100%; height: 60px; margin-top: 2px;\">";
            // line 100
            echo (isset($context["OPTIONS_RIGHT"]) ? $context["OPTIONS_RIGHT"] : null);
            echo "</textarea></dd>\t
\t\t</dl>
\t\t</fieldset>
\t</div>
\t
\t<div style=\"clear:both;\"></div>
\t
\t
\t<fieldset>
\t\t<legend>";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("CHANGES_SUBMIT");
            echo "</legend>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
            // line 112
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"question_id\" value=\"";
            // line 113
            echo (isset($context["QUESTION_ID"]) ? $context["QUESTION_ID"] : null);
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t<input type=\"hidden\" name=\"configure\" value=\"1\" />
\t\t\t<input type=\"hidden\" name=\"select_captcha\" value=\"";
            // line 116
            echo (isset($context["CLASS"]) ? $context["CLASS"] : null);
            echo "\" />
\t\t</p>
\t\t";
            // line 118
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t
\t</fieldset>
\t</form>
";
        }
        // line 123
        echo "
";
        // line 124
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "@derky_sortablescaptcha/captcha_sortables_acp.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "@derky_sortablescaptcha/captcha_sortables_acp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 124,  366 => 123,  358 => 118,  353 => 116,  347 => 113,  343 => 112,  337 => 109,  325 => 100,  321 => 99,  315 => 96,  308 => 95,  303 => 93,  293 => 86,  289 => 85,  283 => 82,  276 => 81,  271 => 79,  262 => 73,  255 => 72,  234 => 69,  227 => 68,  211 => 64,  198 => 63,  191 => 62,  186 => 60,  180 => 58,  174 => 55,  170 => 54,  167 => 53,  164 => 52,  157 => 48,  152 => 46,  147 => 44,  141 => 41,  136 => 38,  121 => 35,  117 => 34,  113 => 33,  110 => 32,  104 => 31,  101 => 30,  97 => 29,  90 => 25,  86 => 24,  82 => 23,  76 => 20,  68 => 15,  61 => 12,  59 => 11,  55 => 10,  50 => 8,  37 => 6,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* */
/* 	<a href="<!-- IF U_LIST -->{U_LIST}<!-- ELSE -->{U_ACTION}<!-- ENDIF -->" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_QUESTIONS}</h1>*/
/* */
/* 	<p>{L_QUESTIONS_EXPLAIN}</p>*/
/* <!-- IF S_LIST -->*/
/* 	<form id="captcha_sortables" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_QUESTIONS}</legend>*/
/* */
/* 	<table cellspacing="1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th colspan="3">{L_QUESTIONS}</th>*/
/* 	</tr>*/
/* 	<tr class="row3">*/
/* 		<td style="text-align: center;">{L_QUESTION_TEXT}</td>*/
/* 		<td style="width: 5%; text-align: center;">{L_QUESTION_LANG}</td>*/
/* 		<td style="vertical-align: top; width: 50px; text-align: center; white-space: nowrap;">{L_ACTION}</td>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN questions -->*/
/* 		*/
/* 		<!-- IF questions.S_ROW_COUNT is even --><tr class="row1"><!-- ELSE --><tr class="row2"><!-- ENDIF -->*/
/* 	*/
/* 		<td style="text-align: left;">{questions.QUESTION_TEXT}</td>*/
/* 		<td style="text-align: center;">{questions.QUESTION_LANG}</td>*/
/* 		<td style="text-align: center;"><a href="{questions.U_EDIT}">{ICON_EDIT}</a>&nbsp;<a href="{questions.U_DELETE}">{ICON_DELETE}</a></td>*/
/* 		</tr>*/
/* 		<!-- END questions -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<fieldset class="quick">*/
/* 		<input class="button1" type="submit" name="add" value="{L_ADD}" />*/
/* 		<input  type="hidden" name="action" value="add" />*/
/* 		<input  type="hidden" name="configure" value="1" />*/
/* 		<input  type="hidden" name="select_captcha" value="{CLASS}" />*/
/* */
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* <!-- ELSE -->*/
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{L_SORTABLES_ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<form id="captcha_sortables" method="post" action="{U_ACTION}">*/
/* 	<fieldset>*/
/* 		<legend>{L_EDIT_QUESTION}</legend>*/
/* 	<dl> */
/* 		<dt><label for="sort">{L_QUESTION_SORT}{L_COLON}</label><br /><span>{L_QUESTION_SORT_EXPLAIN}</span></dt>*/
/* 		<dd><label><input type="radio" class="radio" name="sort" value="0"<!-- IF not SORT --> id="sort" checked="checked"<!-- ENDIF --> /> {L_COLUMN_LEFT}<!-- IF NAME_LEFT -->{L_COLON} {NAME_LEFT}<!-- ENDIF --></label>*/
/* 			<label><input type="radio" class="radio" name="sort" value="1"<!-- IF SORT --> id="sort" checked="checked"<!-- ENDIF --> /> {L_COLUMN_RIGHT}<!-- IF NAME_RIGHT -->{L_COLON} {NAME_RIGHT}<!-- ENDIF --></label></dd>*/
/* 	</dl>*/
/* 	*/
/* 	<dl> */
/* 		<dt><label for="lang_iso">{L_QUESTION_LANG}{L_COLON}</label><br /><span>{L_QUESTION_LANG_EXPLAIN}</span></dt>*/
/* 		<dd><select id="lang_iso" name="lang_iso"><!-- BEGIN langs --><option value="{langs.ISO}" <!-- IF langs.ISO == LANG_ISO --> selected="selected" <!-- ENDIF -->>{langs.NAME}</option><!-- END langs --></select></dd>*/
/* 	</dl>*/
/* 	<dl> */
/* 		<dt><label for="question_text">{L_QUESTION_TEXT}{L_COLON}</label><br /><span>{L_QUESTION_TEXT_EXPLAIN}</span></dt>*/
/* 		<dd><input id="question_text" maxlength="255" size="60" name="question_text" type="text" value="{QUESTION_TEXT}" /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* 	*/
/* 	<div style="float: left; width: 48%;">*/
/* 		<fieldset style="margin:0;">*/
/* 			<legend>{L_COLUMN_LEFT}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="name_left">{L_COLUMN_NAME}{L_COLON}</label><br /><span>{L_COLUMN_NAME_LEFT_EXPLAIN}</span></dt>*/
/* 			<dd><input id="name_left" maxlength="255" style="width:100%;" name="name_left" type="text" value="{NAME_LEFT}" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dd class="full" style="text-align: left;"><label for="options_left" style="white-space:normal;">{L_ANSWERS_EXPLAIN}</label><br />*/
/* 			<textarea id="options_left" name="options_left" rows="5" cols="5" style="width: 100%; height: 60px; margin-top: 2px;">{OPTIONS_LEFT}</textarea></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	*/
/* 	<div style="float: right; width: 48%;">*/
/* 		<fieldset style="margin:0;">*/
/* 			<legend>{L_COLUMN_RIGHT}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="name_right">{L_COLUMN_NAME}{L_COLON}</label><br /><span>{L_COLUMN_NAME_RIGHT_EXPLAIN}</span></dt>*/
/* 			<dd><input id="name_right" maxlength="255" style="width:100%;" name="name_right" type="text" value="{NAME_RIGHT}" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dd class="full" style="text-align: left;"><label for="options_right" style="white-space:normal;">{L_ANSWERS_EXPLAIN}</label><br />*/
/* 			<textarea id="options_right" name="options_right" rows="5" cols="5" style="width:100%; height: 60px; margin-top: 2px;">{OPTIONS_RIGHT}</textarea></dd>	*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	*/
/* 	<div style="clear:both;"></div>*/
/* 	*/
/* 	*/
/* 	<fieldset>*/
/* 		<legend>{L_CHANGES_SUBMIT}</legend>*/
/* */
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" name="submit" value="{L_SUBMIT}" />*/
/* 			<input type="hidden" name="question_id" value="{QUESTION_ID}" />*/
/* 			<input type="hidden" name="action" value="add" />*/
/* 			<input type="hidden" name="configure" value="1" />*/
/* 			<input type="hidden" name="select_captcha" value="{CLASS}" />*/
/* 		</p>*/
/* 		{S_FORM_TOKEN}*/
/* 		*/
/* 	</fieldset>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
