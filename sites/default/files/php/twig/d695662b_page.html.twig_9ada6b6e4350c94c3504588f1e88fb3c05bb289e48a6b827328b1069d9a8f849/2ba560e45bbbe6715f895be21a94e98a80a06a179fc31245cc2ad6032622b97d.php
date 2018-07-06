<?php

/* themes/itrva/templates/generated/page.html.twig */
class __TwigTemplate_10e3a3c04d157944a108301f79d0bba03003f3f4506fcea268881c20d62a2b56 extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array();
        $functions = array("attach_library" => 7);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("itrva/itrva.layout.page"), "html", null, true));
        echo "
<div";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 9
        if (($this->getAttribute(($context["leaderboard"] ?? null), "has_regions", array()) == true)) {
            // line 10
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["leaderboard"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["leaderboard"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "leaderboard", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 16
        echo "  ";
        if (($this->getAttribute(($context["header"] ?? null), "has_regions", array()) == true)) {
            // line 17
            echo "    <header";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["header"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["header"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
            echo "
        ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_second", array()), "html", null, true));
            echo "
      </div>
    </header>
  ";
        }
        // line 24
        echo "  ";
        if (($this->getAttribute(($context["navbar"] ?? null), "has_regions", array()) == true)) {
            // line 25
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navbar", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 31
        echo "  ";
        if (($this->getAttribute(($context["highlighted"] ?? null), "has_regions", array()) == true)) {
            // line 32
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["highlighted"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["highlighted"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 38
        echo "  ";
        if (($this->getAttribute(($context["features"] ?? null), "has_regions", array()) == true)) {
            // line 39
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["features"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["features"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_first", array()), "html", null, true));
            echo "
        ";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_second", array()), "html", null, true));
            echo "
        ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "features_third", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 47
        echo "  ";
        if (($this->getAttribute(($context["content_prefix"] ?? null), "has_regions", array()) == true)) {
            // line 48
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_prefix"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_prefix"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_prefix", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($this->getAttribute(($context["main"] ?? null), "has_regions", array()) == true)) {
            // line 55
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["main"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
        ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 63
        echo "  ";
        if (($this->getAttribute(($context["content_suffix"] ?? null), "has_regions", array()) == true)) {
            // line 64
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_suffix"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_suffix"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_suffix", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 70
        echo "  ";
        if (($this->getAttribute(($context["subfeatures"] ?? null), "has_regions", array()) == true)) {
            // line 71
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["subfeatures"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["subfeatures"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "subfeatures_first", array()), "html", null, true));
            echo "
        ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "subfeatures_second", array()), "html", null, true));
            echo "
        ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "subfeatures_third", array()), "html", null, true));
            echo "
        ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "subfeatures_fourth", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 80
        echo "  ";
        if (($this->getAttribute(($context["footer"] ?? null), "has_regions", array()) == true)) {
            // line 81
            echo "    <footer";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer"] ?? null), "wrapper_attributes", array()), "html", null, true));
            echo ">
      <div";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer"] ?? null), "container_attributes", array()), "html", null, true));
            echo ">
        ";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 87
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attribution"] ?? null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/generated/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 87,  265 => 83,  261 => 82,  256 => 81,  253 => 80,  246 => 76,  242 => 75,  238 => 74,  234 => 73,  230 => 72,  225 => 71,  222 => 70,  215 => 66,  211 => 65,  206 => 64,  203 => 63,  196 => 59,  192 => 58,  188 => 57,  184 => 56,  179 => 55,  176 => 54,  169 => 50,  165 => 49,  160 => 48,  157 => 47,  150 => 43,  146 => 42,  142 => 41,  138 => 40,  133 => 39,  130 => 38,  123 => 34,  119 => 33,  114 => 32,  111 => 31,  104 => 27,  100 => 26,  95 => 25,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  72 => 17,  69 => 16,  62 => 12,  58 => 11,  53 => 10,  51 => 9,  47 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/generated/page.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/generated/page.html.twig");
    }
}
