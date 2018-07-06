<?php

/* themes/itrva/templates/layout/html.html.twig */
class __TwigTemplate_29babfc218c65be8e733341085c669b9c2ad0d14aa651f2d5f5afb90280a548e extends Twig_Template
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
        $tags = array("set" => 46, "if" => 53);
        $filters = array("raw" => 70, "safe_join" => 71, "clean_class" => 78, "t" => 88);
        $functions = array("attach_library" => 39);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('raw', 'safe_join', 'clean_class', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("at_core/at.fastclick_initialize"), "html", null, true));
        echo "
";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("at_core/at.breakpoints"), "html", null, true));
        echo "
";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary(($this->getAttribute(($context["theme"] ?? null), "name", array()) . "/fontfaceobserver")), "html", null, true));
        echo "
";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary(($this->getAttribute(($context["theme"] ?? null), "name", array()) . "/base")), "html", null, true));
        echo "
";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary(($this->getAttribute(($context["theme"] ?? null), "name", array()) . "/color")), "html", null, true));
        echo "
<!DOCTYPE html>
";
        // line 46
        $context["html_classes"] = array(0 => "no-js", 1 => "adaptivetheme");
        // line 51
        echo "<html";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["html_attributes"] ?? null), "addClass", array(0 => ($context["html_classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <head>
    ";
        // line 53
        if ((($context["touch_icons"] ?? null) == true)) {
            // line 54
            echo "      ";
            if (($context["touch_icon_ipad_retina"] ?? null)) {
                // line 55
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_ipad_retina"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"152x152\" />
      ";
            }
            // line 57
            echo "      ";
            if (($context["touch_icon_iphone_retina"] ?? null)) {
                // line 58
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_iphone_retina"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"120x120\" />
      ";
            }
            // line 60
            echo "      ";
            if (($context["touch_icon_ipad"] ?? null)) {
                // line 61
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_ipad"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"76x76\" />
      ";
            }
            // line 63
            echo "      ";
            if (($context["touch_icon_default"] ?? null)) {
                // line 64
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_default"] ?? null), "html", null, true));
                echo "\" rel=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_rel"] ?? null), "html", null, true));
                echo "\" sizes=\"60x60\" />
      ";
            }
            // line 66
            echo "      ";
            if (($context["touch_icon_nokia"] ?? null)) {
                // line 67
                echo "        <link href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["touch_icon_nokia"] ?? null), "html", null, true));
                echo "\" rel=\"shortcut icon\" />
      ";
            }
            // line 69
            echo "    ";
        }
        // line 70
        echo "    <head-placeholder token=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, ($context["head_title"] ?? null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>
  ";
        // line 76
        $context["body_classes"] = array(0 => ((        // line 77
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 78
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), 2 => (($this->getAttribute(        // line 79
($context["path_info"] ?? null), "args", array())) ? (("path-" . $this->getAttribute(($context["path_info"] ?? null), "args", array()))) : ("")), 3 => (($this->getAttribute(        // line 80
($context["path_info"] ?? null), "query", array())) ? (("path-query-" . $this->getAttribute(($context["path_info"] ?? null), "query", array()))) : ("")), 4 => ((        // line 81
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), 5 => (($this->getAttribute(        // line 82
($context["head_title_array"] ?? null), "name", array())) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["head_title_array"] ?? null), "name", array())))) : ("")), 6 => (($this->getAttribute(        // line 83
($context["theme"] ?? null), "name", array())) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["theme"] ?? null), "name", array())))) : ("")), 7 => ((        // line 84
($context["db_offline"] ?? null)) ? ("db-offline") : ("")));
        // line 87
        echo "  <body";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <a href=\"";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["skip_link_target"] ?? null), "html", null, true));
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "</a>
    ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true));
        echo "
    ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true));
        echo "
    ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 92,  177 => 91,  173 => 90,  169 => 89,  163 => 88,  158 => 87,  156 => 84,  155 => 83,  154 => 82,  153 => 81,  152 => 80,  151 => 79,  150 => 78,  149 => 77,  148 => 76,  143 => 73,  139 => 72,  135 => 71,  130 => 70,  127 => 69,  121 => 67,  118 => 66,  110 => 64,  107 => 63,  99 => 61,  96 => 60,  88 => 58,  85 => 57,  77 => 55,  74 => 54,  72 => 53,  66 => 51,  64 => 46,  59 => 43,  55 => 42,  51 => 41,  47 => 40,  43 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/layout/html.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/layout/html.html.twig");
    }
}
