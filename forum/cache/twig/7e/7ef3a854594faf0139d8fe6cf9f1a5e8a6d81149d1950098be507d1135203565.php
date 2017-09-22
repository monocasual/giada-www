<?php

/* forumlist_body.html */
class __TwigTemplate_96b664d356688ff89cd616d19ea60e0245f9e2ad6e49b53cc7122d690dcf93c7 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_category_header_before.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_category_header_before.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 11
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_category_header_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_category_header_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 17
                echo "\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 23
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_category_header_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_category_header_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 24
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 28
            echo "\t";
            if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_category_header_after.html')) {
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_category_header_after.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }

            // line 29
            echo "
\t";
            // line 30
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 31
                echo "\t\t";
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_forum_row_before.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_forum_row_before.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 32
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 33
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_forum_row_prepend.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_forum_row_prepend.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 34
                echo "\t\t\t<dl class=\"icon ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt title=\"";
                // line 35
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" /></a> -->";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 41
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 42
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                }
                // line 43
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_subforums_before.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                        $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_subforums_before.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    // line 48
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 51
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "\t\t\t\t\t\t\t";
                    if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_subforums_after.html')) {
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                        $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_subforums_after.html')->display($context);
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }

                    // line 53
                    echo "\t\t\t\t\t\t";
                }
                // line 54
                echo "
\t\t\t\t\t\t";
                // line 55
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 56
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 57
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 59
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 66
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 67
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 68
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 69
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 70
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 72
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 74
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 75
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 78
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 79
                            echo "\t\t\t\t\t\t\t";
                            if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_last_post_title_prepend.html')) {
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                                $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_last_post_title_prepend.html')->display($context);
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }

                            // line 80
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 81
                        echo " 
\t\t\t\t\t\t";
                        // line 82
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t";
                        // line 83
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\">";
                            echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                            echo "</a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t</dl>
\t\t\t";
                // line 89
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_forum_row_append.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_forum_row_append.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 90
                echo "\t\t</li>
\t\t";
                // line 91
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_forum_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_forum_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 92
                echo "\t";
            }
            // line 93
            echo "
\t";
            // line 94
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 95
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 99
                if ($this->env->getLoader()->exists('@derky_sortablescaptcha/event/forumlist_body_last_row_after.html')) {
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array('derky_sortablescaptcha', '__main__'));
                    $this->env->loadTemplate('@derky_sortablescaptcha/event/forumlist_body_last_row_after.html')->display($context);
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }

                // line 100
                echo "\t";
            }
            // line 101
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 105,  465 => 103,  459 => 101,  456 => 100,  448 => 99,  442 => 95,  440 => 94,  437 => 93,  434 => 92,  426 => 91,  423 => 90,  415 => 89,  412 => 88,  408 => 86,  390 => 83,  384 => 82,  381 => 81,  371 => 80,  362 => 79,  360 => 78,  353 => 77,  345 => 75,  343 => 74,  336 => 73,  334 => 72,  327 => 70,  320 => 69,  318 => 68,  310 => 67,  308 => 66,  304 => 64,  300 => 62,  291 => 60,  289 => 59,  281 => 58,  279 => 57,  276 => 56,  274 => 55,  271 => 54,  268 => 53,  259 => 52,  253 => 51,  232 => 50,  228 => 49,  222 => 48,  213 => 47,  210 => 46,  201 => 44,  198 => 43,  193 => 42,  186 => 41,  180 => 40,  177 => 39,  159 => 38,  156 => 37,  150 => 36,  146 => 35,  141 => 34,  133 => 33,  130 => 32,  121 => 31,  119 => 30,  116 => 29,  107 => 28,  101 => 24,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  68 => 18,  65 => 17,  57 => 16,  51 => 12,  48 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT forumlist_body_category_header_before -->*/
/* 	<!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW  or forumrow.S_NO_CAT  -->*/
/* 		<div class="forabg">*/
/* 			<div class="inner">*/
/* 			<ul class="topiclist">*/
/* 				<li class="header">*/
/* 					<!-- EVENT forumlist_body_category_header_row_prepend -->*/
/* 					<dl class="icon">*/
/* 						<dt><div class="list-inner"><!-- IF forumrow.S_IS_CAT --><a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE -->{L_FORUM}<!-- ENDIF --></div></dt>*/
/* 						<dd class="topics">{L_TOPICS}</dd>*/
/* 						<dd class="posts">{L_POSTS}</dd>*/
/* 						<dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/* 					</dl>*/
/* 					<!-- EVENT forumlist_body_category_header_row_append -->*/
/* 				</li>*/
/* 			</ul>*/
/* 			<ul class="topiclist forums">*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT forumlist_body_category_header_after -->*/
/* */
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 		<!-- EVENT forumlist_body_forum_row_before -->*/
/* 		<li class="row">*/
/* 			<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 			<dl class="icon {forumrow.FORUM_IMG_STYLE}">*/
/* 				<dt title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 					<!-- IF forumrow.S_UNREAD_FORUM --><a href="{forumrow.U_VIEWFORUM}" class="icon-link"></a><!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED --><!-- <a class="feed-icon-forum" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}"><img src="{T_THEME_PATH}/images/feed.gif" alt="{L_FEED} - {forumrow.FORUM_NAME}" /></a> --><!-- ENDIF -->*/
/* */
/* 						<!-- IF forumrow.FORUM_IMAGE --><span class="forum-image">{forumrow.FORUM_IMAGE}</span><!-- ENDIF -->*/
/* 						<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a>*/
/* 						<!-- IF forumrow.FORUM_DESC --><br />{forumrow.FORUM_DESC}<!-- ENDIF -->*/
/* 						<!-- IF forumrow.MODERATORS -->*/
/* 							<br /><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF .forumrow.subforum and forumrow.S_LIST_SUBFORUMS -->*/
/* 							<!-- EVENT forumlist_body_subforums_before -->*/
/* 							<br /><strong>{forumrow.L_SUBFORUM_STR}{L_COLON}</strong>*/
/* 							<!-- BEGIN subforum -->*/
/* 								<a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 							<!-- END subforum -->*/
/* 							<!-- EVENT forumlist_body_subforums_after -->*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF not S_IS_BOT -->*/
/* 						<div class="responsive-show" style="display: none;">*/
/* 							<!-- IF forumrow.CLICKS -->*/
/* 								{L_REDIRECTS}{L_COLON} <strong>{forumrow.CLICKS}</strong>*/
/* 							<!-- ELSEIF not forumrow.S_IS_LINK and forumrow.TOPICS -->*/
/* 								{L_TOPICS}{L_COLON} <strong>{forumrow.TOPICS}</strong>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</dt>*/
/* 				<!-- IF forumrow.CLICKS -->*/
/* 					<dd class="redirect"><span>{L_REDIRECTS}{L_COLON} {forumrow.CLICKS}</span></dd>*/
/* 				<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 					<dd class="topics">{forumrow.TOPICS} <dfn>{L_TOPICS}</dfn></dd>*/
/* 					<dd class="posts">{forumrow.POSTS} <dfn>{L_POSTS}</dfn></dd>*/
/* 					<dd class="lastpost"><span>*/
/* 						<!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_TOPICS}">{UNAPPROVED_IMG}</a>*/
/* 						<!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 							<a href="{forumrow.U_UNAPPROVED_POSTS}">{UNAPPROVED_POST_IMG}</a>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF forumrow.LAST_POST_TIME --><dfn>{L_LAST_POST}</dfn>*/
/* 						<!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/* 							<!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 							<a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="lastsubject">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a> <br />*/
/* 						<!-- ENDIF --> */
/* 						{L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}*/
/* 						<!-- IF not S_IS_BOT --><a href="{forumrow.U_LAST_POST}">{LAST_POST_IMG}</a> <!-- ENDIF --><br />{forumrow.LAST_POST_TIME}<!-- ELSE -->{L_NO_POSTS}<br />&nbsp;<!-- ENDIF --></span>*/
/* 					</dd>*/
/* 				<!-- ELSE -->*/
/* 					<dd>&nbsp;</dd>*/
/* 				<!-- ENDIF -->*/
/* 			</dl>*/
/* 			<!-- EVENT forumlist_body_forum_row_append -->*/
/* 		</li>*/
/* 		<!-- EVENT forumlist_body_forum_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF forumrow.S_LAST_ROW -->*/
/* 			</ul>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	<!-- EVENT forumlist_body_last_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<strong>{L_NO_FORUMS}</strong>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END forumrow -->*/
/* */
