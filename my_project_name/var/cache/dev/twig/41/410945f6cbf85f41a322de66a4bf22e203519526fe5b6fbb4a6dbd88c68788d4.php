<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b37797268ca5a8e41b087c3038ed78345c68e3a570cd732c25677d67549e6d36 extends Twig_Template
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
        $__internal_202665d0651f35cdd339e72561d2cf2b940c99f861a05960b6a8c13eb937a898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202665d0651f35cdd339e72561d2cf2b940c99f861a05960b6a8c13eb937a898->enter($__internal_202665d0651f35cdd339e72561d2cf2b940c99f861a05960b6a8c13eb937a898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1f1c0858f93d1abb5155bb4d7cab5538bd08486c7072b62d306b04c5e91792fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1c0858f93d1abb5155bb4d7cab5538bd08486c7072b62d306b04c5e91792fd->enter($__internal_1f1c0858f93d1abb5155bb4d7cab5538bd08486c7072b62d306b04c5e91792fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_202665d0651f35cdd339e72561d2cf2b940c99f861a05960b6a8c13eb937a898->leave($__internal_202665d0651f35cdd339e72561d2cf2b940c99f861a05960b6a8c13eb937a898_prof);

        
        $__internal_1f1c0858f93d1abb5155bb4d7cab5538bd08486c7072b62d306b04c5e91792fd->leave($__internal_1f1c0858f93d1abb5155bb4d7cab5538bd08486c7072b62d306b04c5e91792fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
