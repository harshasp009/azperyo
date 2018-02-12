<?php

/* themes/azforyou/templates/page.html.twig */
class __TwigTemplate_374b733f792e1be9891f25ef5eedee38c60b793f4a8ff87a5440f9dccadc2126 extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
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

        // line 1
        $this->loadTemplate("header.html.twig", "themes/azforyou/templates/page.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"page-header-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
    ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
        echo "
     </div>
     </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
    </div>

</div>



";
        // line 22
        $this->loadTemplate("footer.html.twig", "themes/azforyou/templates/page.html.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/azforyou/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  62 => 14,  51 => 6,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html.twig' %}
<div class=\"page-header-top\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
    {{ page.header_top }}
     </div>
     </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ page.content }}
        </div>
    </div>

</div>



{% include 'footer.html.twig' %}", "themes/azforyou/templates/page.html.twig", "/private/var/www/azforyou/themes/azforyou/templates/page.html.twig");
    }
}
