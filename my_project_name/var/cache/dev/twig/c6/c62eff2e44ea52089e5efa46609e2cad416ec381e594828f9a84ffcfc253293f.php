<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_79b52ee1bca8afd597c036390abe13a2a813e3884719713b9b534a93b0ee40db extends Twig_Template
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
        $__internal_e42f1cd402383d9ce3ee2c85a1da6e86eab95596db8589a146611a6554001ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42f1cd402383d9ce3ee2c85a1da6e86eab95596db8589a146611a6554001ec5->enter($__internal_e42f1cd402383d9ce3ee2c85a1da6e86eab95596db8589a146611a6554001ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_249c80d66d61339f763b6ea610969bb8ebd303625f165afbfa584748f6d2dcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249c80d66d61339f763b6ea610969bb8ebd303625f165afbfa584748f6d2dcc4->enter($__internal_249c80d66d61339f763b6ea610969bb8ebd303625f165afbfa584748f6d2dcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e42f1cd402383d9ce3ee2c85a1da6e86eab95596db8589a146611a6554001ec5->leave($__internal_e42f1cd402383d9ce3ee2c85a1da6e86eab95596db8589a146611a6554001ec5_prof);

        
        $__internal_249c80d66d61339f763b6ea610969bb8ebd303625f165afbfa584748f6d2dcc4->leave($__internal_249c80d66d61339f763b6ea610969bb8ebd303625f165afbfa584748f6d2dcc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
