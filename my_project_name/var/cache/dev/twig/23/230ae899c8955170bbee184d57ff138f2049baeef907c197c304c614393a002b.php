<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b0ed5726a588782d3bf38f118936840218006435c7eb33f442bfa3419121109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0ed5726a588782d3bf38f118936840218006435c7eb33f442bfa3419121109->enter($__internal_4b0ed5726a588782d3bf38f118936840218006435c7eb33f442bfa3419121109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_5b9ff8e7b63f4d720daaae6fc23412bdc466e7fbb8b0d224189ae51011bb6477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9ff8e7b63f4d720daaae6fc23412bdc466e7fbb8b0d224189ae51011bb6477->enter($__internal_5b9ff8e7b63f4d720daaae6fc23412bdc466e7fbb8b0d224189ae51011bb6477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0ed5726a588782d3bf38f118936840218006435c7eb33f442bfa3419121109->leave($__internal_4b0ed5726a588782d3bf38f118936840218006435c7eb33f442bfa3419121109_prof);

        
        $__internal_5b9ff8e7b63f4d720daaae6fc23412bdc466e7fbb8b0d224189ae51011bb6477->leave($__internal_5b9ff8e7b63f4d720daaae6fc23412bdc466e7fbb8b0d224189ae51011bb6477_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e5c4377bfb76cadbdc8779e9b534c850b92c126329691fe7b86aee8abc939eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c4377bfb76cadbdc8779e9b534c850b92c126329691fe7b86aee8abc939eea->enter($__internal_e5c4377bfb76cadbdc8779e9b534c850b92c126329691fe7b86aee8abc939eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ddeb2ad15db279ac01e88fc20003b8980531be212f3d9f57b64196d36201a846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeb2ad15db279ac01e88fc20003b8980531be212f3d9f57b64196d36201a846->enter($__internal_ddeb2ad15db279ac01e88fc20003b8980531be212f3d9f57b64196d36201a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ddeb2ad15db279ac01e88fc20003b8980531be212f3d9f57b64196d36201a846->leave($__internal_ddeb2ad15db279ac01e88fc20003b8980531be212f3d9f57b64196d36201a846_prof);

        
        $__internal_e5c4377bfb76cadbdc8779e9b534c850b92c126329691fe7b86aee8abc939eea->leave($__internal_e5c4377bfb76cadbdc8779e9b534c850b92c126329691fe7b86aee8abc939eea_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ffe42f61b5476a852f98b8db1ade1dfbaf759eb0a680200fa50ffcee91f6692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffe42f61b5476a852f98b8db1ade1dfbaf759eb0a680200fa50ffcee91f6692->enter($__internal_1ffe42f61b5476a852f98b8db1ade1dfbaf759eb0a680200fa50ffcee91f6692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a988ca583aee2f7f23e547260e998947be139d1c3b440ced50f2f27df1ed664e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a988ca583aee2f7f23e547260e998947be139d1c3b440ced50f2f27df1ed664e->enter($__internal_a988ca583aee2f7f23e547260e998947be139d1c3b440ced50f2f27df1ed664e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a988ca583aee2f7f23e547260e998947be139d1c3b440ced50f2f27df1ed664e->leave($__internal_a988ca583aee2f7f23e547260e998947be139d1c3b440ced50f2f27df1ed664e_prof);

        
        $__internal_1ffe42f61b5476a852f98b8db1ade1dfbaf759eb0a680200fa50ffcee91f6692->leave($__internal_1ffe42f61b5476a852f98b8db1ade1dfbaf759eb0a680200fa50ffcee91f6692_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
