<?php

/* themes/azforyou/templates/page--front.html.twig */
class __TwigTemplate_c4b65f16be448ccdb2c4ca612390b76e14f605a933a13f6886d57d550f8ab7ce extends Twig_Template
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
        $this->loadTemplate("header.html.twig", "themes/azforyou/templates/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 4
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "
";
        // line 6
        echo "<div class=\"container-fluid\">
    ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "our_company", array()), "html", null, true));
        echo "
</div>
<div class=\"container-fluid\">
    ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
        echo "
</div>
<div class=\"promised_deliver\">
    <div class=\"container-fluid\">
        ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promise_to_deliver", array()), "html", null, true));
        echo "
    </div>
</div>
<div class=\"container-fluid\">
    ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "recent_project", array()), "html", null, true));
        echo "
</div>
<div class=\"customer_reviews\">
    <div class=\"container-fluid\">
        ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "customer_reviews", array()), "html", null, true));
        echo "
    </div>
</div>

";
        // line 26
        $this->loadTemplate("footer.html.twig", "themes/azforyou/templates/page--front.html.twig", 26)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/azforyou/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  83 => 22,  76 => 18,  69 => 14,  62 => 10,  56 => 7,  53 => 6,  48 => 4,  45 => 2,  43 => 1,);
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

{#<div class=\"container-fluid\">#}
    {{ page.banner }}
{#</div>#}
<div class=\"container-fluid\">
    {{ page.our_company }}
</div>
<div class=\"container-fluid\">
    {{ page.featured }}
</div>
<div class=\"promised_deliver\">
    <div class=\"container-fluid\">
        {{ page.promise_to_deliver }}
    </div>
</div>
<div class=\"container-fluid\">
    {{ page.recent_project }}
</div>
<div class=\"customer_reviews\">
    <div class=\"container-fluid\">
        {{ page.customer_reviews }}
    </div>
</div>

{% include 'footer.html.twig' %}", "themes/azforyou/templates/page--front.html.twig", "/private/var/www/azforyou/themes/azforyou/templates/page--front.html.twig");
    }
}
