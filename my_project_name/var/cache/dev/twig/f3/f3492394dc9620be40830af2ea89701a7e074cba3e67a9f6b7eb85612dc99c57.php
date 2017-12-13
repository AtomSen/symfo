<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_61516f22c7e10fc53fb4895e02445f1b863b8a7c3e662ebb0ea4c4f033a640f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61516f22c7e10fc53fb4895e02445f1b863b8a7c3e662ebb0ea4c4f033a640f6->enter($__internal_61516f22c7e10fc53fb4895e02445f1b863b8a7c3e662ebb0ea4c4f033a640f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7b97e2b40f7238b6779d3ddc568e4bb301a1a0fd0fbbd4fbc3c19da280885ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b97e2b40f7238b6779d3ddc568e4bb301a1a0fd0fbbd4fbc3c19da280885ad3->enter($__internal_7b97e2b40f7238b6779d3ddc568e4bb301a1a0fd0fbbd4fbc3c19da280885ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61516f22c7e10fc53fb4895e02445f1b863b8a7c3e662ebb0ea4c4f033a640f6->leave($__internal_61516f22c7e10fc53fb4895e02445f1b863b8a7c3e662ebb0ea4c4f033a640f6_prof);

        
        $__internal_7b97e2b40f7238b6779d3ddc568e4bb301a1a0fd0fbbd4fbc3c19da280885ad3->leave($__internal_7b97e2b40f7238b6779d3ddc568e4bb301a1a0fd0fbbd4fbc3c19da280885ad3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99af3f386d2711ca19f26184d8befe2e0cd1943e38d59208e73078d536b97307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99af3f386d2711ca19f26184d8befe2e0cd1943e38d59208e73078d536b97307->enter($__internal_99af3f386d2711ca19f26184d8befe2e0cd1943e38d59208e73078d536b97307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d561ef8230a07e9039fdbbd716e60281e9c453957d4fbc1a915f2e7c9d44a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d561ef8230a07e9039fdbbd716e60281e9c453957d4fbc1a915f2e7c9d44a2d->enter($__internal_9d561ef8230a07e9039fdbbd716e60281e9c453957d4fbc1a915f2e7c9d44a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d561ef8230a07e9039fdbbd716e60281e9c453957d4fbc1a915f2e7c9d44a2d->leave($__internal_9d561ef8230a07e9039fdbbd716e60281e9c453957d4fbc1a915f2e7c9d44a2d_prof);

        
        $__internal_99af3f386d2711ca19f26184d8befe2e0cd1943e38d59208e73078d536b97307->leave($__internal_99af3f386d2711ca19f26184d8befe2e0cd1943e38d59208e73078d536b97307_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06aa9428bdd57c7338a6d0d87609661bf3f74bbab69396df0a1176c0698084d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06aa9428bdd57c7338a6d0d87609661bf3f74bbab69396df0a1176c0698084d1->enter($__internal_06aa9428bdd57c7338a6d0d87609661bf3f74bbab69396df0a1176c0698084d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_743d48bb2e07e9708613cbae62c242ae3f9186510404cd2cb5aa5db5f845e98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d48bb2e07e9708613cbae62c242ae3f9186510404cd2cb5aa5db5f845e98b->enter($__internal_743d48bb2e07e9708613cbae62c242ae3f9186510404cd2cb5aa5db5f845e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_743d48bb2e07e9708613cbae62c242ae3f9186510404cd2cb5aa5db5f845e98b->leave($__internal_743d48bb2e07e9708613cbae62c242ae3f9186510404cd2cb5aa5db5f845e98b_prof);

        
        $__internal_06aa9428bdd57c7338a6d0d87609661bf3f74bbab69396df0a1176c0698084d1->leave($__internal_06aa9428bdd57c7338a6d0d87609661bf3f74bbab69396df0a1176c0698084d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
