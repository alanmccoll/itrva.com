<?php

/* themes/itrva/templates/content/node.html.twig */
class __TwigTemplate_c84b5a7ffc30769b199c6a5d2d00dd2e38a193d697e3d2540b0422f1cf53cc55 extends Twig_Template
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
        $tags = array("set" => 72, "if" => 86, "trans" => 88);
        $filters = array("clean_class" => 75, "without" => 115);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'without'),
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

        // line 72
        $context["classes"] = array(0 => "node", 1 => ("node--id-" . $this->getAttribute(        // line 74
($context["node"] ?? null), "id", array())), 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 75
($context["node"] ?? null), "bundle", array()))), 3 => (($this->getAttribute(        // line 76
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 78
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 79
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 82
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class=\"node__container\">

    <header";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["header_attributes"] ?? null), "addClass", array(0 => "node__header"), "method"), "html", null, true));
        echo ">
      ";
        // line 86
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method")) {
            // line 87
            echo "        <span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 88
            echo t("This node is", array());
            echo "</span>";
            echo t("Unpublished", array());
            // line 89
            echo "        </span>
      ";
        }
        // line 91
        echo "
      ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 93
        if (($context["label"] ?? null)) {
            // line 94
            echo "        ";
            if (($context["page"] ?? null)) {
                // line 95
                echo "          <h1";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h1>
        ";
            } else {
                // line 97
                echo "          <h2";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo "><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</a></h2>
        ";
            }
            // line 99
            echo "      ";
        }
        // line 100
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 102
        if (($context["display_submitted"] ?? null)) {
            // line 103
            echo "        <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["meta_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          <div";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_attributes"] ?? null), "html", null, true));
            echo ">
             <span class=\"node__author\">";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true));
            echo "</span>
             <span class=\"node__pubdate\">";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
            echo "</span>
          </div>
          ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 112
        echo "    </header>

    <div";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "comment"), "html", null, true));
        echo "
    </div>

  ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 118,  152 => 115,  148 => 114,  144 => 112,  138 => 109,  133 => 107,  129 => 106,  125 => 105,  121 => 104,  116 => 103,  114 => 102,  108 => 100,  105 => 99,  95 => 97,  87 => 95,  84 => 94,  82 => 93,  78 => 92,  75 => 91,  71 => 89,  67 => 88,  64 => 87,  62 => 86,  58 => 85,  51 => 82,  49 => 79,  48 => 78,  47 => 77,  46 => 76,  45 => 75,  44 => 74,  43 => 72,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/content/node.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/content/node.html.twig");
    }
}
