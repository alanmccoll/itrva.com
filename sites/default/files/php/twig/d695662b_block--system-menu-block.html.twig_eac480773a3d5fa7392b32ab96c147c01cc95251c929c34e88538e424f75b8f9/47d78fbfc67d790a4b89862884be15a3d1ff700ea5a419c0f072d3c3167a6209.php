<?php

/* themes/itrva/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_b9b413c8920600ee31c242a4b0af5c4e1eb8fe5a871102b6286117e489a5a4b4 extends Twig_Template
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
        $tags = array("set" => 30, "if" => 44, "block" => 53);
        $filters = array("clean_class" => 33, "clean_id" => 35);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 28
        echo "
";
        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 33
($context["configuration"] ?? null), "provider", array()))), 3 => ("block-derivative-plugin--" . \Drupal\Component\Utility\Html::getClass(        // line 34
($context["derivative_plugin_id"] ?? null))), 4 => ("block-id--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 35
($context["attributes"] ?? null), "id", array()))), 5 => ((        // line 36
($context["label"] ?? null)) ? ("has-title") : ("")));
        // line 39
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 40
        echo "<nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\">
  <div class=\"block__inner block-menu__inner\">

    ";
        // line 44
        echo "    ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 45
            echo "      ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method");
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    <h2";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block__title", 1 => "block-menu__title"), "method"), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo "><span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</span></h2>
    ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

    ";
        // line 53
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
  </div>
</nav>
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "block__content", 1 => "block-menu__content"), "method"), "html", null, true));
        echo ">
        ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 55,  104 => 54,  101 => 53,  94 => 58,  91 => 53,  86 => 50,  80 => 49,  76 => 48,  73 => 47,  70 => 46,  67 => 45,  64 => 44,  55 => 40,  53 => 39,  51 => 36,  50 => 35,  49 => 34,  48 => 33,  47 => 30,  44 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/block/block--system-menu-block.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/block/block--system-menu-block.html.twig");
    }
}
