<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f2af2b45f313d131d95de1616e6858e3cb530d1c3059dd6506d6abdb2bd628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f2af2b45f313d131d95de1616e6858e3cb530d1c3059dd6506d6abdb2bd628->enter($__internal_b7f2af2b45f313d131d95de1616e6858e3cb530d1c3059dd6506d6abdb2bd628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_76d6553d7e0958c45a8a8fa6b360881b3f92581110cee6e7e6c81da2889308c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d6553d7e0958c45a8a8fa6b360881b3f92581110cee6e7e6c81da2889308c7->enter($__internal_76d6553d7e0958c45a8a8fa6b360881b3f92581110cee6e7e6c81da2889308c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f2af2b45f313d131d95de1616e6858e3cb530d1c3059dd6506d6abdb2bd628->leave($__internal_b7f2af2b45f313d131d95de1616e6858e3cb530d1c3059dd6506d6abdb2bd628_prof);

        
        $__internal_76d6553d7e0958c45a8a8fa6b360881b3f92581110cee6e7e6c81da2889308c7->leave($__internal_76d6553d7e0958c45a8a8fa6b360881b3f92581110cee6e7e6c81da2889308c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_570753b4ffb897fd29b0b4e0bd6b302c45ab634a93353b668c216d51e231b6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570753b4ffb897fd29b0b4e0bd6b302c45ab634a93353b668c216d51e231b6b8->enter($__internal_570753b4ffb897fd29b0b4e0bd6b302c45ab634a93353b668c216d51e231b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d32f62d589c2e4bea2df8877511daa46cde22dc4d79ad300763822d4dbec4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d32f62d589c2e4bea2df8877511daa46cde22dc4d79ad300763822d4dbec4ce->enter($__internal_6d32f62d589c2e4bea2df8877511daa46cde22dc4d79ad300763822d4dbec4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d32f62d589c2e4bea2df8877511daa46cde22dc4d79ad300763822d4dbec4ce->leave($__internal_6d32f62d589c2e4bea2df8877511daa46cde22dc4d79ad300763822d4dbec4ce_prof);

        
        $__internal_570753b4ffb897fd29b0b4e0bd6b302c45ab634a93353b668c216d51e231b6b8->leave($__internal_570753b4ffb897fd29b0b4e0bd6b302c45ab634a93353b668c216d51e231b6b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b865ecdeb9430d3b2832300d440bedbaa3a764939f32ba246078859e54d54a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b865ecdeb9430d3b2832300d440bedbaa3a764939f32ba246078859e54d54a88->enter($__internal_b865ecdeb9430d3b2832300d440bedbaa3a764939f32ba246078859e54d54a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3debce57ea0103302c1436cd61346c2e788db8a63556570342427760a9db7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3debce57ea0103302c1436cd61346c2e788db8a63556570342427760a9db7f9->enter($__internal_f3debce57ea0103302c1436cd61346c2e788db8a63556570342427760a9db7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3debce57ea0103302c1436cd61346c2e788db8a63556570342427760a9db7f9->leave($__internal_f3debce57ea0103302c1436cd61346c2e788db8a63556570342427760a9db7f9_prof);

        
        $__internal_b865ecdeb9430d3b2832300d440bedbaa3a764939f32ba246078859e54d54a88->leave($__internal_b865ecdeb9430d3b2832300d440bedbaa3a764939f32ba246078859e54d54a88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a806173be6b6638818cc507775238520cdaab2b8ffe65b97a68f13d67179946c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a806173be6b6638818cc507775238520cdaab2b8ffe65b97a68f13d67179946c->enter($__internal_a806173be6b6638818cc507775238520cdaab2b8ffe65b97a68f13d67179946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_183eeca534cdfe041875469d997353ebb917496a18d05dbcddf4bd0d4a25853e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183eeca534cdfe041875469d997353ebb917496a18d05dbcddf4bd0d4a25853e->enter($__internal_183eeca534cdfe041875469d997353ebb917496a18d05dbcddf4bd0d4a25853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_183eeca534cdfe041875469d997353ebb917496a18d05dbcddf4bd0d4a25853e->leave($__internal_183eeca534cdfe041875469d997353ebb917496a18d05dbcddf4bd0d4a25853e_prof);

        
        $__internal_a806173be6b6638818cc507775238520cdaab2b8ffe65b97a68f13d67179946c->leave($__internal_a806173be6b6638818cc507775238520cdaab2b8ffe65b97a68f13d67179946c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
