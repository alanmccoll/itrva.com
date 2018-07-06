<?php

/* themes/itrva/templates/misc/status-messages.html.twig */
class __TwigTemplate_7871aa769ad8637d2288bd01e39ab6c10b18e7841bd9261b278a93dd34e00fa1 extends Twig_Template
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
        $tags = array("for" => 27, "set" => 29, "if" => 36);
        $filters = array("without" => 34, "length" => 44, "first" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('without', 'length', 'first'),
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

        // line 26
        echo "<div data-drupal-messages>
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "    ";
            // line 29
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 31
$context["type"]));
            // line 34
            echo "    <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">

      <div class=\"messages__container\"";
            // line 36
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">

        ";
            // line 38
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 39
                echo "          <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
        ";
            }
            // line 41
            echo "
        <span class=\"icon icon-";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["type"], "html", null, true));
            echo "\" aria-hidden=\"true\"></span>

        ";
            // line 44
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 45
                echo "          <ul class=\"messages__list\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 47
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "          </ul>
        ";
            } else {
                // line 51
                echo "          <div class=\"messages__list\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</div>
        ";
            }
            // line 53
            echo "
      </div>

    </div>
    ";
            // line 58
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 60,  120 => 58,  114 => 53,  108 => 51,  104 => 49,  95 => 47,  91 => 46,  88 => 45,  86 => 44,  81 => 42,  78 => 41,  72 => 39,  70 => 38,  63 => 36,  55 => 34,  53 => 31,  52 => 29,  50 => 28,  46 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/misc/status-messages.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/misc/status-messages.html.twig");
    }
}
