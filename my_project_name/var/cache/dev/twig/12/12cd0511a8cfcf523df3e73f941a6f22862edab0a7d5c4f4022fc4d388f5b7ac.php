<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_72715f3f9b43be9551e560ea5e04186fdcc2c36da980752869d46c6c98aa4c7e extends Twig_Template
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
        $__internal_5a900e353c83d9cbf119632d2195631a854b3bf629eb673fa988f19ae745cd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a900e353c83d9cbf119632d2195631a854b3bf629eb673fa988f19ae745cd43->enter($__internal_5a900e353c83d9cbf119632d2195631a854b3bf629eb673fa988f19ae745cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a7a23b9bb85537b1b210d5cfa9b9bafb87d0390b28e39c1e9177f5d26c320388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a23b9bb85537b1b210d5cfa9b9bafb87d0390b28e39c1e9177f5d26c320388->enter($__internal_a7a23b9bb85537b1b210d5cfa9b9bafb87d0390b28e39c1e9177f5d26c320388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5a900e353c83d9cbf119632d2195631a854b3bf629eb673fa988f19ae745cd43->leave($__internal_5a900e353c83d9cbf119632d2195631a854b3bf629eb673fa988f19ae745cd43_prof);

        
        $__internal_a7a23b9bb85537b1b210d5cfa9b9bafb87d0390b28e39c1e9177f5d26c320388->leave($__internal_a7a23b9bb85537b1b210d5cfa9b9bafb87d0390b28e39c1e9177f5d26c320388_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
