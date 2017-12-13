<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d583b98410130b0ee15aa0638d60ba1c2a9e77df7956d4c474e008a1dc1908f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d583b98410130b0ee15aa0638d60ba1c2a9e77df7956d4c474e008a1dc1908f->enter($__internal_5d583b98410130b0ee15aa0638d60ba1c2a9e77df7956d4c474e008a1dc1908f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4edd4473080caa01d0cff79cc158891e70dece84d810eff93db1471576333712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edd4473080caa01d0cff79cc158891e70dece84d810eff93db1471576333712->enter($__internal_4edd4473080caa01d0cff79cc158891e70dece84d810eff93db1471576333712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d583b98410130b0ee15aa0638d60ba1c2a9e77df7956d4c474e008a1dc1908f->leave($__internal_5d583b98410130b0ee15aa0638d60ba1c2a9e77df7956d4c474e008a1dc1908f_prof);

        
        $__internal_4edd4473080caa01d0cff79cc158891e70dece84d810eff93db1471576333712->leave($__internal_4edd4473080caa01d0cff79cc158891e70dece84d810eff93db1471576333712_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7071c1dd57e6dc8761cb5219bc46aff46d66b8f3dc4a05854ee9cca16b9a25ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7071c1dd57e6dc8761cb5219bc46aff46d66b8f3dc4a05854ee9cca16b9a25ad->enter($__internal_7071c1dd57e6dc8761cb5219bc46aff46d66b8f3dc4a05854ee9cca16b9a25ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15bb73a03c25bd23cac4bcdaac48f7960a5d25cd35589a6234d95e6f724263f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bb73a03c25bd23cac4bcdaac48f7960a5d25cd35589a6234d95e6f724263f6->enter($__internal_15bb73a03c25bd23cac4bcdaac48f7960a5d25cd35589a6234d95e6f724263f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_15bb73a03c25bd23cac4bcdaac48f7960a5d25cd35589a6234d95e6f724263f6->leave($__internal_15bb73a03c25bd23cac4bcdaac48f7960a5d25cd35589a6234d95e6f724263f6_prof);

        
        $__internal_7071c1dd57e6dc8761cb5219bc46aff46d66b8f3dc4a05854ee9cca16b9a25ad->leave($__internal_7071c1dd57e6dc8761cb5219bc46aff46d66b8f3dc4a05854ee9cca16b9a25ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d3ba70d8e2d79c14d7a24fd75d7e88a5387b4c1cb83848c08bd2ddf91455533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3ba70d8e2d79c14d7a24fd75d7e88a5387b4c1cb83848c08bd2ddf91455533->enter($__internal_6d3ba70d8e2d79c14d7a24fd75d7e88a5387b4c1cb83848c08bd2ddf91455533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0b8eb8182ae5c4cf42eab2d3317af073dda84a0dabdc59131ff16e0a1d2fd05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b8eb8182ae5c4cf42eab2d3317af073dda84a0dabdc59131ff16e0a1d2fd05->enter($__internal_b0b8eb8182ae5c4cf42eab2d3317af073dda84a0dabdc59131ff16e0a1d2fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b0b8eb8182ae5c4cf42eab2d3317af073dda84a0dabdc59131ff16e0a1d2fd05->leave($__internal_b0b8eb8182ae5c4cf42eab2d3317af073dda84a0dabdc59131ff16e0a1d2fd05_prof);

        
        $__internal_6d3ba70d8e2d79c14d7a24fd75d7e88a5387b4c1cb83848c08bd2ddf91455533->leave($__internal_6d3ba70d8e2d79c14d7a24fd75d7e88a5387b4c1cb83848c08bd2ddf91455533_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
