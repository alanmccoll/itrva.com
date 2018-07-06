<?php

/* themes/itrva/templates/navigation/menu.html.twig */
class __TwigTemplate_57bdbb862934285ce7ef7c0f68ac112d30ac2afde32cb3890e8eb0bad168a37a extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 34, "for" => 45, "spaceless" => 56);
        $filters = array("clean_class" => 38, "render" => 52);
        $functions = array("cycle" => 43, "link" => 58);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for', 'spaceless'),
                array('clean_class', 'render'),
                array('cycle', 'link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null))));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      ";
                    // line 34
                    $context["menu_classes"] = array(0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((                    // line 38
($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)))) : ("")));
                    // line 41
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["menu_classes"] ?? null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 43
                    echo "      <ul class=\"menu ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), ($context["menu_level"] ?? null)), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true));
                    echo "\">
    ";
                }
                // line 45
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        ";
                    // line 47
                    $context["item_classes"] = array(0 => "menu__item", 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", array())) ? ("menu__item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 50
$context["item"], "is_collapsed", array())) ? ("menu__item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", array())) ? ("menu__item--active-trail") : ("")), 4 => ("menu-title-" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(                    // line 52
$context["item"], "title", array())))), 5 => (($this->getAttribute(                    // line 53
$context["item"], "original_link", array())) ? (("menu-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute($context["item"], "original_link", array()), "getPluginId", array(), "method")))) : ("")));
                    // line 56
                    echo "        ";
                    ob_start();
                    // line 57
                    echo "          <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                    echo ">
            ";
                    // line 58
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
            ";
                    // line 59
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 60
                        echo "              ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1))));
                        echo "
            ";
                    }
                    // line 62
                    echo "          </li>
        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 64
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/itrva/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  136 => 64,  132 => 62,  126 => 60,  124 => 59,  120 => 58,  115 => 57,  112 => 56,  110 => 53,  109 => 52,  108 => 51,  107 => 50,  106 => 49,  105 => 47,  103 => 46,  98 => 45,  90 => 43,  84 => 41,  82 => 38,  81 => 34,  79 => 33,  76 => 32,  73 => 31,  70 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/itrva/templates/navigation/menu.html.twig", "/var/www/html/itrva.com/public_html/themes/itrva/templates/navigation/menu.html.twig");
    }
}
