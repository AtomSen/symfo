<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_4bcb6f0574e38f9e42103ee1a885c991a6f6be3bd8ec40fd9614d73fd2046fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcb6f0574e38f9e42103ee1a885c991a6f6be3bd8ec40fd9614d73fd2046fbf->enter($__internal_4bcb6f0574e38f9e42103ee1a885c991a6f6be3bd8ec40fd9614d73fd2046fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a04cfe6c8ac58de85fa99489f5c205928d0cd8e67a894b404fc3a6e74e38370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04cfe6c8ac58de85fa99489f5c205928d0cd8e67a894b404fc3a6e74e38370f->enter($__internal_a04cfe6c8ac58de85fa99489f5c205928d0cd8e67a894b404fc3a6e74e38370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcb6f0574e38f9e42103ee1a885c991a6f6be3bd8ec40fd9614d73fd2046fbf->leave($__internal_4bcb6f0574e38f9e42103ee1a885c991a6f6be3bd8ec40fd9614d73fd2046fbf_prof);

        
        $__internal_a04cfe6c8ac58de85fa99489f5c205928d0cd8e67a894b404fc3a6e74e38370f->leave($__internal_a04cfe6c8ac58de85fa99489f5c205928d0cd8e67a894b404fc3a6e74e38370f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dee49b80de37955b2ffa4aec96ccc88ea2d88c9f9f15238ef976b8c994dd240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dee49b80de37955b2ffa4aec96ccc88ea2d88c9f9f15238ef976b8c994dd240->enter($__internal_2dee49b80de37955b2ffa4aec96ccc88ea2d88c9f9f15238ef976b8c994dd240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc4510d6539690c2ebd5518ece885c32c5428900ebdc646a3d03752d5912116f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4510d6539690c2ebd5518ece885c32c5428900ebdc646a3d03752d5912116f->enter($__internal_bc4510d6539690c2ebd5518ece885c32c5428900ebdc646a3d03752d5912116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc4510d6539690c2ebd5518ece885c32c5428900ebdc646a3d03752d5912116f->leave($__internal_bc4510d6539690c2ebd5518ece885c32c5428900ebdc646a3d03752d5912116f_prof);

        
        $__internal_2dee49b80de37955b2ffa4aec96ccc88ea2d88c9f9f15238ef976b8c994dd240->leave($__internal_2dee49b80de37955b2ffa4aec96ccc88ea2d88c9f9f15238ef976b8c994dd240_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d215a06b3b0c22ed55096233eb4e1fa2fc85221fa3ee1dd3d8eaf1f1cae360a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d215a06b3b0c22ed55096233eb4e1fa2fc85221fa3ee1dd3d8eaf1f1cae360a->enter($__internal_0d215a06b3b0c22ed55096233eb4e1fa2fc85221fa3ee1dd3d8eaf1f1cae360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a205587df29770217c1f97bc067f8ed216f0836bc9e71bbefd49ec832e7a15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a205587df29770217c1f97bc067f8ed216f0836bc9e71bbefd49ec832e7a15a->enter($__internal_5a205587df29770217c1f97bc067f8ed216f0836bc9e71bbefd49ec832e7a15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a205587df29770217c1f97bc067f8ed216f0836bc9e71bbefd49ec832e7a15a->leave($__internal_5a205587df29770217c1f97bc067f8ed216f0836bc9e71bbefd49ec832e7a15a_prof);

        
        $__internal_0d215a06b3b0c22ed55096233eb4e1fa2fc85221fa3ee1dd3d8eaf1f1cae360a->leave($__internal_0d215a06b3b0c22ed55096233eb4e1fa2fc85221fa3ee1dd3d8eaf1f1cae360a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
