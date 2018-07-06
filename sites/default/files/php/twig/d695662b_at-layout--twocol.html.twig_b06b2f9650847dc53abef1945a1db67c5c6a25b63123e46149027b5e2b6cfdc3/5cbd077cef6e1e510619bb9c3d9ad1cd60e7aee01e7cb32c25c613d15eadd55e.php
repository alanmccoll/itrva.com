<?php

/* themes/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig */
class __TwigTemplate_97478f66ee47742c1878cae61673fa677c43e98d11d7fb4e5409ee16bc2a5890 extends Twig_Template
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
        $tags = array("set" => 10, "if" => 11);
        $filters = array("trim" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('trim'),
                array()
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

        // line 10
        ob_start();
        // line 11
        echo "  ";
        if (($this->getAttribute(($context["content"] ?? null), "col_1", array()) && $this->getAttribute(($context["content"] ?? null), "col_2", array()))) {
            // line 12
            echo "    l-arc--2 l-ac--1-2
  ";
        } elseif (($this->getAttribute(        // line 13
($context["content"] ?? null), "col_1", array()) && (null === $this->getAttribute(($context["content"] ?? null), "col_2", array())))) {
            // line 14
            echo "    l-arc--1 l-ac--1
  ";
        } elseif (($this->getAttribute(        // line 15
($context["content"] ?? null), "col_2", array()) && (null === $this->getAttribute(($context["content"] ?? null), "col_1", array())))) {
            // line 16
            echo "    l-arc--1 l-ac--2
  ";
        }
        $context["layout_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_element"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => twig_trim_filter(($context["layout_classes"] ?? null)), 1 => "clearfix"), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        if ($this->getAttribute(($context["content"] ?? null), "top", array())) {
            // line 21
            echo "    <div class=\"atl__top clearfix\">
      ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "top", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($this->getAttribute(($context["content"] ?? null), "col_1", array()) || $this->getAttribute(($context["content"] ?? null), "col_2", array()))) {
            // line 27
            echo "    <div class=\"atl__lr clearfix\">
      ";
            // line 28
            if ($this->getAttribute(($context["content"] ?? null), "col_1", array())) {
                // line 29
                echo "        <div class=\"atl__lc lc-1\">
          ";
                // line 30
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "col_1", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 33
            echo "
      ";
            // line 34
            if ($this->getAttribute(($context["content"] ?? null), "col_2", array())) {
                // line 35
                echo "        <div class=\"atl__lc lc-2\">
          ";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "col_2", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 39
            echo "    </div>
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        if ($this->getAttribute(($context["content"] ?? null), "bottom", array())) {
            // line 43
            echo "    <div class=\"atl__bottom clearfix\">
      ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "bottom", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 47
        echo "</";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_element"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  125 => 44,  122 => 43,  120 => 42,  117 => 41,  113 => 39,  107 => 36,  104 => 35,  102 => 34,  99 => 33,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  83 => 26,  80 => 25,  74 => 22,  71 => 21,  69 => 20,  63 => 19,  58 => 16,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  45 => 11,  43 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig", "/var/www/html/itrva.com/public_html/themes/adaptivetheme/at_core/layout_plugin/templates/twocol/at-layout--twocol.html.twig");
    }
}
