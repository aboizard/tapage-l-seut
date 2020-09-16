<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_groups_membership.html */
class __TwigTemplate_0f6fbb44eab9749fcab823dbb6d2a6780f571414747c1bf34f0e6a196f99e1cb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_groups_membership.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_EXPLAIN");
        echo "</p>
\t";
        // line 11
        $value = 0;
        $context['definition']->set('SHOW_BUTTONS', $value);
        // line 12
        echo "\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", []))) {
            // line 13
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", []));
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 24
                echo "\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", [])) {
                    // line 25
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 26
                    echo "\t\t";
                }
                // line 27
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["leader"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 31
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", [])) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["leader"], "GROUP_ID", []);
                    echo "\" /> ";
                }
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["leader"], "U_VIEW_GROUP", []);
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["leader"], "GROUP_COLOUR", [])) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["leader"], "GROUP_COLOUR", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["leader"], "GROUP_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["leader"], "GROUP_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["leader"], "GROUP_DESC", []);
                }
                // line 34
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", [])) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["leader"], "GROUP_STATUS", []);
                    echo "</i>";
                }
                // line 35
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 37
                echo $this->getAttribute($context["leader"], "GROUP_ID", []);
                echo "\" ";
                if ($this->getAttribute($context["leader"], "GROUP_SPECIAL", [])) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</ul>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", []))) {
            // line 45
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 49
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", []));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 56
                echo "\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", [])) {
                    // line 57
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["member"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 63
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", [])) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["member"], "GROUP_ID", []);
                    echo "\" /> ";
                }
                // line 64
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["member"], "U_VIEW_GROUP", []);
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["member"], "GROUP_COLOUR", [])) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["member"], "GROUP_COLOUR", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["member"], "GROUP_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 65
                if ($this->getAttribute($context["member"], "GROUP_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["member"], "GROUP_DESC", []);
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", [])) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["member"], "GROUP_STATUS", []);
                    echo "</i>";
                }
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 69
                echo $this->getAttribute($context["member"], "GROUP_ID", []);
                echo "\" ";
                if ($this->getAttribute($context["member"], "GROUP_SPECIAL", [])) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t</ul>
\t";
        }
        // line 75
        echo "\t</div>
</div>

";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", []))) {
            // line 79
            echo "<div class=\"panel\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_PENDING");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pending"]) {
                // line 92
                echo "\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", [])) {
                    // line 93
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 94
                    echo "\t\t";
                }
                // line 95
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["pending"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 99
                echo $this->getAttribute($context["pending"], "U_VIEW_GROUP", []);
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["pending"], "GROUP_COLOUR", [])) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["pending"], "GROUP_COLOUR", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["pending"], "GROUP_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 100
                if ($this->getAttribute($context["pending"], "GROUP_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["pending"], "GROUP_DESC", []);
                }
                // line 101
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", [])) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["pending"], "GROUP_STATUS", []);
                    echo "</i>";
                }
                // line 102
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 104
                echo $this->getAttribute($context["pending"], "GROUP_ID", []);
                echo "\" ";
                if ($this->getAttribute($context["pending"], "GROUP_SPECIAL", [])) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t</ul>
\t</div>
</div>
";
        }
        // line 112
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", []))) {
            // line 113
            echo "<div class=\"panel\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NONMEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 119
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", []));
            foreach ($context['_seq'] as $context["_key"] => $context["nonmember"]) {
                // line 126
                echo "\t\t";
                if ($this->getAttribute($context["nonmember"], "S_CAN_JOIN", [])) {
                    // line 127
                    echo "\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 128
                    echo "\t\t";
                }
                // line 129
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["nonmember"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 133
                echo $this->getAttribute($context["nonmember"], "U_VIEW_GROUP", []);
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["nonmember"], "GROUP_COLOUR", [])) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["nonmember"], "GROUP_COLOUR", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["nonmember"], "GROUP_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 134
                if ($this->getAttribute($context["nonmember"], "GROUP_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["nonmember"], "GROUP_DESC", []);
                }
                // line 135
                echo "\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["nonmember"], "GROUP_SPECIAL", [])) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["nonmember"], "GROUP_STATUS", []);
                    echo "</i>";
                }
                // line 136
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 138
                echo $this->getAttribute($context["nonmember"], "GROUP_ID", []);
                echo "\" ";
                if ( !$this->getAttribute($context["nonmember"], "S_CAN_JOIN", [])) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nonmember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t\t</div>
\t</div>
";
        }
        // line 146
        echo "

\t";
        // line 148
        if (((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null) || ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", []) == 1))) {
            // line 149
            echo "\t<fieldset>
\t\t";
            // line 150
            if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                // line 151
                echo "\t\t<div class=\"left-box\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"change_default\" value=\"";
                // line 152
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                echo "\" />
\t\t\t";
                // line 153
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</div>
\t\t";
            }
            // line 156
            echo "
\t\t";
            // line 157
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", []) == 1)) {
                // line 158
                echo "\t\t<div class=\"right-box\">
\t\t\t<label for=\"action\">";
                // line 159
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t<select name=\"action\" id=\"action\">
\t\t\t\t<option value=\"join\">";
                // line 161
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOIN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"resign\">";
                // line 162
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESIGN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"demote\">";
                // line 163
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEMOTE_SELECTED");
                echo "</option>
\t\t\t</select>&nbsp;
\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 165
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t";
                // line 166
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</div>
\t\t";
            }
            // line 169
            echo "\t</fieldset>
\t";
        }
        // line 171
        echo "
</form>

";
        // line 174
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_membership.html", 174)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_membership.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 174,  543 => 171,  539 => 169,  533 => 166,  529 => 165,  524 => 163,  520 => 162,  516 => 161,  510 => 159,  507 => 158,  505 => 157,  502 => 156,  496 => 153,  492 => 152,  489 => 151,  487 => 150,  484 => 149,  482 => 148,  478 => 146,  472 => 142,  458 => 138,  454 => 136,  447 => 135,  442 => 134,  430 => 133,  418 => 129,  415 => 128,  411 => 127,  408 => 126,  404 => 125,  395 => 119,  391 => 118,  384 => 113,  382 => 112,  376 => 108,  362 => 104,  358 => 102,  351 => 101,  346 => 100,  334 => 99,  322 => 95,  319 => 94,  315 => 93,  312 => 92,  308 => 91,  299 => 85,  295 => 84,  288 => 79,  286 => 78,  281 => 75,  277 => 73,  263 => 69,  259 => 67,  252 => 66,  247 => 65,  234 => 64,  222 => 63,  210 => 59,  207 => 58,  203 => 57,  200 => 56,  196 => 55,  187 => 49,  183 => 48,  178 => 45,  176 => 44,  173 => 43,  169 => 41,  155 => 37,  151 => 35,  144 => 34,  139 => 33,  126 => 32,  114 => 31,  102 => 27,  99 => 26,  95 => 25,  92 => 24,  88 => 23,  79 => 17,  75 => 16,  70 => 13,  67 => 12,  64 => 11,  60 => 10,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_groups_membership.html", "");
    }
}
