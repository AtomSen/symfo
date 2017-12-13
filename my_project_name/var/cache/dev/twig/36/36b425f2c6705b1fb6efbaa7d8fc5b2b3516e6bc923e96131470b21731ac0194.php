<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1a9dab48292fbc982af7d3daa88e18b61f4ca8ea7e7de3f9a00de3b86f0ef11b extends Twig_Template
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
        $__internal_0f9f5e6d023bd18e6bab07c25c4188de900451f550e3df31b2572268de5754c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9f5e6d023bd18e6bab07c25c4188de900451f550e3df31b2572268de5754c0->enter($__internal_0f9f5e6d023bd18e6bab07c25c4188de900451f550e3df31b2572268de5754c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_67a5323f5753e0c1ad948a8b592084e00d3a8e9bb90630918710471602c9998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a5323f5753e0c1ad948a8b592084e00d3a8e9bb90630918710471602c9998c->enter($__internal_67a5323f5753e0c1ad948a8b592084e00d3a8e9bb90630918710471602c9998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0f9f5e6d023bd18e6bab07c25c4188de900451f550e3df31b2572268de5754c0->leave($__internal_0f9f5e6d023bd18e6bab07c25c4188de900451f550e3df31b2572268de5754c0_prof);

        
        $__internal_67a5323f5753e0c1ad948a8b592084e00d3a8e9bb90630918710471602c9998c->leave($__internal_67a5323f5753e0c1ad948a8b592084e00d3a8e9bb90630918710471602c9998c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
