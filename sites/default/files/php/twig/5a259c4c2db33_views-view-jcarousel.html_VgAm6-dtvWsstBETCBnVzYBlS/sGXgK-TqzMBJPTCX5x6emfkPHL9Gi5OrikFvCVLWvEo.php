<?php

/* modules/contrib/jcarousel/templates/views-view-jcarousel.html.twig */
class __TwigTemplate_c826680e04fd28156b25145ba58d2dbdac7379a231956b19bb5e40871f09ffe2 extends Twig_Template
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
        $tags = array("if" => 16, "for" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 15
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_wrapper"]) ? $context["attributes_wrapper"] : null), "html", null, true));
        echo ">
  ";
        // line 16
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "navigation", array()) == "before")) {
            // line 17
            echo "    <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_previous"]) ? $context["attributes_previous"] : null), "html", null, true));
            echo "  href=\"#\"></a>
    <a";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_next"]) ? $context["attributes_next"] : null), "html", null, true));
            echo " href=\"#\"></a>
  ";
        }
        // line 20
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    <ul";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_content"]) ? $context["attributes_content"] : null), "html", null, true));
        echo ">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 23
            echo "        <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes_row"]) ? $context["attributes_row"] : null), $context["key"], array(), "array"), "html", null, true));
            echo ">
          ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["row"], "html", null, true));
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
  </div>
  ";
        // line 29
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "navigation", array()) == "after")) {
            // line 30
            echo "    <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_previous"]) ? $context["attributes_previous"] : null), "html", null, true));
            echo "  href=\"#\"></a>
    <a";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes_next"]) ? $context["attributes_next"] : null), "html", null, true));
            echo " href=\"#\"></a>
  ";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/jcarousel/templates/views-view-jcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  98 => 31,  93 => 30,  91 => 29,  87 => 27,  78 => 24,  73 => 23,  69 => 22,  65 => 21,  60 => 20,  55 => 18,  50 => 17,  48 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * View template to display a list as a carousel.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - rows: The rendered rows.
 *
 * @see template_preprocess_jcarousel_view()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes_wrapper }}>
  {% if options.navigation == 'before' %}
    <a{{ attributes_previous }}  href=\"#\"></a>
    <a{{ attributes_next }} href=\"#\"></a>
  {% endif %}
  <div{{ attributes }}>
    <ul{{ attributes_content }}>
      {% for key,row in items %}
        <li{{ attributes_row[key] }}>
          {{ row }}
        </li>
      {% endfor %}
    </ul>
  </div>
  {% if options.navigation == 'after' %}
    <a{{ attributes_previous }}  href=\"#\"></a>
    <a{{ attributes_next }} href=\"#\"></a>
  {% endif %}
</div>
", "modules/contrib/jcarousel/templates/views-view-jcarousel.html.twig", "/private/var/www/azforyou/modules/contrib/jcarousel/templates/views-view-jcarousel.html.twig");
    }
}
