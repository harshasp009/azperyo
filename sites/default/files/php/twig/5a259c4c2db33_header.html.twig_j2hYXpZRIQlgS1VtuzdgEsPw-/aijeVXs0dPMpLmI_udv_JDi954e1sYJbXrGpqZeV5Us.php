<?php

/* header.html.twig */
class __TwigTemplate_e0f30dd6c9c7ebf448f81fad07d21c7db85d0d569d0e2c94d55d23a401c472cf extends Twig_Template
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
        $tags = array("set" => 2, "if" => 16);
        $filters = array("clean_class" => 5, "t" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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

        // line 2
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 5
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 8
        echo "<header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">

    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <div class=\"logo_img\" >
                ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
            </div>
            ";
        // line 16
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            // line 17
            echo "                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            ";
        }
        // line 24
        echo "        </div>

        ";
        // line 27
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array())) {
            // line 28
            echo "            <div class=\"navbar-collapse collapse\">
                ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_menu", array()), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 32
        echo "    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  86 => 29,  83 => 28,  80 => 27,  76 => 24,  67 => 18,  64 => 17,  61 => 16,  56 => 13,  47 => 8,  45 => 5,  44 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
set navbar_classes = [
'navbar',
theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
]
%}
<header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">

    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <div class=\"logo_img\" >
                {{ page.header }}
            </div>
            {# .btn-navbar is used as the toggle for collapsed navbar content #}
            {% if page.header_menu %}
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            {% endif %}
        </div>

        {# Navigation (collapsible) #}
        {% if page.header_menu %}
            <div class=\"navbar-collapse collapse\">
                {{ page.header_menu }}
            </div>
        {% endif %}
    </div>
</header>", "header.html.twig", "themes/azforyou/templates/header.html.twig");
    }
}
