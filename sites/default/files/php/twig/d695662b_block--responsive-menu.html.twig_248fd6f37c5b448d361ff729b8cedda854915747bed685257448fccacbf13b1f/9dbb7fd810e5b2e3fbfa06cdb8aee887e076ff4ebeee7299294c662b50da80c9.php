<?php

/* themes/itrva/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_29ce2326524e5841f4d9f938b375c872cb3a00337d0701f8f1ae3399e0b1dd0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 44, "block" => 70);
        $filters = array("clean_class" => 46, "clean_id" => 48);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class', 'clean_id'),
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

        // line 44
        $context["classes"] = array(0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 46
($context["configuration"] ?? null), "provider", array()))), 2 => ("rm-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 47
($context["derivative_plugin_id"] ?? null))), 3 => ("rm-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 48
($context["attributes"] ?? null), "id", array()))), 4 => ((        // line 49
($context["label"] ?? null)) ? ("has-title") : ("")), 5 => "js-hide");
        // line 53
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 54
        echo "<nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\">
  <div class=\"rm-block__inner\">

    ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    <div";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "rm-toggle"), "method"), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 59
        $context["rm_label_class"] = ((($context["label"] ?? null)) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 60
        echo "      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\" aria-lable=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "\">
        <svg class=\"rm-toggle__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
          <path d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
        </svg>
        <span class=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rm_label_class"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</span>
      </button>
    </div>
    ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 70
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
  </div>
</nav>
";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "      <div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 72,  105 => 71,  102 => 70,  95 => 75,  92 => 70,  87 => 67,  79 => 64,  71 => 60,  69 => 59,  65 => 58,  61 => 57,  52 => 54,  50 => 53,  48 => 49,  47 => 48,  46 => 47,  45 => 46,  44 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/block/block--responsive-menu.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/block/block--responsive-menu.html.twig");
    }
}
