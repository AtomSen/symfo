<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_5bf4bf50176d6e1ae6e91a280b9cac4adfeba5f81155974b1dfee9b01e9c5065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf4bf50176d6e1ae6e91a280b9cac4adfeba5f81155974b1dfee9b01e9c5065->enter($__internal_5bf4bf50176d6e1ae6e91a280b9cac4adfeba5f81155974b1dfee9b01e9c5065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a4a642df3aa056cbab44a2827873e3bef27b6106c5079df974add8944f2a885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a642df3aa056cbab44a2827873e3bef27b6106c5079df974add8944f2a885a->enter($__internal_a4a642df3aa056cbab44a2827873e3bef27b6106c5079df974add8944f2a885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf4bf50176d6e1ae6e91a280b9cac4adfeba5f81155974b1dfee9b01e9c5065->leave($__internal_5bf4bf50176d6e1ae6e91a280b9cac4adfeba5f81155974b1dfee9b01e9c5065_prof);

        
        $__internal_a4a642df3aa056cbab44a2827873e3bef27b6106c5079df974add8944f2a885a->leave($__internal_a4a642df3aa056cbab44a2827873e3bef27b6106c5079df974add8944f2a885a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_75881bfff3b5b1ed0d5ca3fde290fb614d8d741afcb1f03c58e68bce78d6447f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75881bfff3b5b1ed0d5ca3fde290fb614d8d741afcb1f03c58e68bce78d6447f->enter($__internal_75881bfff3b5b1ed0d5ca3fde290fb614d8d741afcb1f03c58e68bce78d6447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3353d3ece7dfacb5d5481c905668970c2996cab95be61c74ceb589baab5b7160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3353d3ece7dfacb5d5481c905668970c2996cab95be61c74ceb589baab5b7160->enter($__internal_3353d3ece7dfacb5d5481c905668970c2996cab95be61c74ceb589baab5b7160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_3353d3ece7dfacb5d5481c905668970c2996cab95be61c74ceb589baab5b7160->leave($__internal_3353d3ece7dfacb5d5481c905668970c2996cab95be61c74ceb589baab5b7160_prof);

        
        $__internal_75881bfff3b5b1ed0d5ca3fde290fb614d8d741afcb1f03c58e68bce78d6447f->leave($__internal_75881bfff3b5b1ed0d5ca3fde290fb614d8d741afcb1f03c58e68bce78d6447f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e28f9b3dcb1e419ea9670754be918995eede4fd7a552ee9064adc45921c2047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e28f9b3dcb1e419ea9670754be918995eede4fd7a552ee9064adc45921c2047->enter($__internal_4e28f9b3dcb1e419ea9670754be918995eede4fd7a552ee9064adc45921c2047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1eac4b1f7a78e8dcbbe12b6db9a4cf6cbe6f0508c8c5c3e78bf105423c471801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eac4b1f7a78e8dcbbe12b6db9a4cf6cbe6f0508c8c5c3e78bf105423c471801->enter($__internal_1eac4b1f7a78e8dcbbe12b6db9a4cf6cbe6f0508c8c5c3e78bf105423c471801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1eac4b1f7a78e8dcbbe12b6db9a4cf6cbe6f0508c8c5c3e78bf105423c471801->leave($__internal_1eac4b1f7a78e8dcbbe12b6db9a4cf6cbe6f0508c8c5c3e78bf105423c471801_prof);

        
        $__internal_4e28f9b3dcb1e419ea9670754be918995eede4fd7a552ee9064adc45921c2047->leave($__internal_4e28f9b3dcb1e419ea9670754be918995eede4fd7a552ee9064adc45921c2047_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
