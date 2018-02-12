<?php

/* footer.html.twig */
class __TwigTemplate_7160b87c4c9084661e71f9eb9c94265c32a4290adbc6be7b1e4d83a0898cdc98 extends Twig_Template
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
        $tags = array("if" => 5);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<footer class=\"footer\">
<div class=\"container-fluid\">
           <div class = \"row\">
               <div class=\"col-md-4\">
                   ";
        // line 5
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_one", array())) {
            // line 6
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_one", array()), "html", null, true));
            echo "
                   ";
        }
        // line 8
        echo "               </div>
               <div class=\"col-md-4\">
                   ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_two", array())) {
            // line 11
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_two", array()), "html", null, true));
            echo "
                   ";
        }
        // line 13
        echo "               </div>
               <div class=\"col-md-4\">
                   ";
        // line 15
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_three", array())) {
            // line 16
            echo "                       ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_three", array()), "html", null, true));
            echo "
                   ";
        }
        // line 18
        echo "               </div>
            </div>
         </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  75 => 16,  73 => 15,  69 => 13,  63 => 11,  61 => 10,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer\">
<div class=\"container-fluid\">
           <div class = \"row\">
               <div class=\"col-md-4\">
                   {% if page.footer_one %}
                       {{ page.footer_one }}
                   {% endif %}
               </div>
               <div class=\"col-md-4\">
                   {% if page.footer_two %}
                       {{ page.footer_two }}
                   {% endif %}
               </div>
               <div class=\"col-md-4\">
                   {% if page.footer_three %}
                       {{ page.footer_three }}
                   {% endif %}
               </div>
            </div>
         </div>
</footer>", "footer.html.twig", "themes/azforyou/templates/footer.html.twig");
    }
}
