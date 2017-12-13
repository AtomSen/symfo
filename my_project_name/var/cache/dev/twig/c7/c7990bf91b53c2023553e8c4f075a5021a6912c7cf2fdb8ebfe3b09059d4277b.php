<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03430cddaf8b56cc67b04805117689a0b85dfdda8701cb88de7df84db26e7965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03430cddaf8b56cc67b04805117689a0b85dfdda8701cb88de7df84db26e7965->enter($__internal_03430cddaf8b56cc67b04805117689a0b85dfdda8701cb88de7df84db26e7965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_35a5bf7194781ede273677e3f177387a5b1889c443c69ab2883bb507728a96c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a5bf7194781ede273677e3f177387a5b1889c443c69ab2883bb507728a96c1->enter($__internal_35a5bf7194781ede273677e3f177387a5b1889c443c69ab2883bb507728a96c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03430cddaf8b56cc67b04805117689a0b85dfdda8701cb88de7df84db26e7965->leave($__internal_03430cddaf8b56cc67b04805117689a0b85dfdda8701cb88de7df84db26e7965_prof);

        
        $__internal_35a5bf7194781ede273677e3f177387a5b1889c443c69ab2883bb507728a96c1->leave($__internal_35a5bf7194781ede273677e3f177387a5b1889c443c69ab2883bb507728a96c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11df2d2e89c4ede9ff0ad586ed15647d27190dde1e2d0bb168ecc6a604f2bb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11df2d2e89c4ede9ff0ad586ed15647d27190dde1e2d0bb168ecc6a604f2bb0d->enter($__internal_11df2d2e89c4ede9ff0ad586ed15647d27190dde1e2d0bb168ecc6a604f2bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_918dc7b3226eba16ba895b0d7fc64305f5ba5acba98d90d2e5cfcf5ec3f02d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918dc7b3226eba16ba895b0d7fc64305f5ba5acba98d90d2e5cfcf5ec3f02d2e->enter($__internal_918dc7b3226eba16ba895b0d7fc64305f5ba5acba98d90d2e5cfcf5ec3f02d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_918dc7b3226eba16ba895b0d7fc64305f5ba5acba98d90d2e5cfcf5ec3f02d2e->leave($__internal_918dc7b3226eba16ba895b0d7fc64305f5ba5acba98d90d2e5cfcf5ec3f02d2e_prof);

        
        $__internal_11df2d2e89c4ede9ff0ad586ed15647d27190dde1e2d0bb168ecc6a604f2bb0d->leave($__internal_11df2d2e89c4ede9ff0ad586ed15647d27190dde1e2d0bb168ecc6a604f2bb0d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bb1ccb264f298bba072f9eb648348e389424c6984977141e30d4bbef469b5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb1ccb264f298bba072f9eb648348e389424c6984977141e30d4bbef469b5c0->enter($__internal_8bb1ccb264f298bba072f9eb648348e389424c6984977141e30d4bbef469b5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_949c05807d33dd07ca3bb3a34d32f974cf516a7f6702846f873e8049da54469f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949c05807d33dd07ca3bb3a34d32f974cf516a7f6702846f873e8049da54469f->enter($__internal_949c05807d33dd07ca3bb3a34d32f974cf516a7f6702846f873e8049da54469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_949c05807d33dd07ca3bb3a34d32f974cf516a7f6702846f873e8049da54469f->leave($__internal_949c05807d33dd07ca3bb3a34d32f974cf516a7f6702846f873e8049da54469f_prof);

        
        $__internal_8bb1ccb264f298bba072f9eb648348e389424c6984977141e30d4bbef469b5c0->leave($__internal_8bb1ccb264f298bba072f9eb648348e389424c6984977141e30d4bbef469b5c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
