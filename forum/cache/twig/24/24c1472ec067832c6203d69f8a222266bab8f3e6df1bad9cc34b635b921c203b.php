<?php

/* jumpbox.html */
class __TwigTemplate_4c6fb7590b472d1e0d3ce0a6ac8dc2f975013af74dbc0675886316c715da5353 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif (        // line 4
(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif (        // line 6
(isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif (        // line 8
(isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            if ( !(isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", array());
                    echo "\">";
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 31,  140 => 26,  134 => 25,  117 => 23,  114 => 22,  110 => 21,  104 => 17,  96 => 16,  86 => 15,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  57 => 9,  55 => 8,  46 => 7,  44 => 6,  35 => 5,  33 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- IF S_VIEWTOPIC -->*/
/* 	<p class="jumpbox-return"><a href="{U_VIEW_FORUM}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" accesskey="r">{L_RETURN_TO_FORUM}</a></p>*/
/* <!-- ELSEIF S_VIEWFORUM -->*/
/* 	<p class="jumpbox-return"><a href="{U_INDEX}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" accesskey="r">{L_RETURN_TO_INDEX}</a></p>*/
/* <!-- ELSEIF SEARCH_TOPIC -->*/
/* 	<p class="jumpbox-return"><a class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH_TOPIC}" accesskey="r">{L_RETURN_TO_TOPIC}</a></p>*/
/* <!-- ELSEIF S_SEARCH_ACTION -->*/
/* 	<p class="jumpbox-return"><a class="left-box arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_SEARCH}" title="{L_SEARCH_ADV}" accesskey="r">{L_GO_TO_SEARCH_ADV}</a></p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_JUMPBOX -->*/
/* */
/* 	<div class="dropdown-container dropdown-container-{S_CONTENT_FLOW_END}<!-- IF not S_IN_MCP --> dropdown-up<!-- ENDIF --> dropdown-{S_CONTENT_FLOW_BEGIN} dropdown-button-control" id="jumpbox">*/
/* 		<span title="<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->" class="dropdown-trigger button dropdown-select">*/
/* 			<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->*/
/* 		</span>*/
/* 		<div class="dropdown hidden">*/
/* 			<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 			<ul class="dropdown-contents">*/
/* 			<!-- BEGIN jumpbox_forums -->*/
/* 				<!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 					<li><!-- BEGIN level -->&nbsp; &nbsp;<!-- END level --><a href="{jumpbox_forums.LINK}">{jumpbox_forums.FORUM_NAME}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END jumpbox_forums -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <!-- ELSE -->*/
/* 	<br /><br />*/
/* <!-- ENDIF -->*/
/* */
