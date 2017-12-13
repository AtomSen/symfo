<?php

/* :lucky:number.html.twig */
class __TwigTemplate_4ba49bc52dbaec7aec93f0215e59c83f6a2c9439d41a4d1be5c4501b3c93482e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29dd4464d52abff221e07c3a456c7d9a51cf0f5bb15c8d08c9991865cc79614f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29dd4464d52abff221e07c3a456c7d9a51cf0f5bb15c8d08c9991865cc79614f->enter($__internal_29dd4464d52abff221e07c3a456c7d9a51cf0f5bb15c8d08c9991865cc79614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $__internal_bf74e6e4fab38e72dceafde5bf5d928a24672b3232844a8b3a90e45d7dc3ae63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf74e6e4fab38e72dceafde5bf5d928a24672b3232844a8b3a90e45d7dc3ae63->enter($__internal_bf74e6e4fab38e72dceafde5bf5d928a24672b3232844a8b3a90e45d7dc3ae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo " </h1>


</body>
</html>
";
        
        $__internal_29dd4464d52abff221e07c3a456c7d9a51cf0f5bb15c8d08c9991865cc79614f->leave($__internal_29dd4464d52abff221e07c3a456c7d9a51cf0f5bb15c8d08c9991865cc79614f_prof);

        
        $__internal_bf74e6e4fab38e72dceafde5bf5d928a24672b3232844a8b3a90e45d7dc3ae63->leave($__internal_bf74e6e4fab38e72dceafde5bf5d928a24672b3232844a8b3a90e45d7dc3ae63_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03410520c08a071528fb9e0638227bdf4b842218176813710357f21ce83c81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03410520c08a071528fb9e0638227bdf4b842218176813710357f21ce83c81d->enter($__internal_a03410520c08a071528fb9e0638227bdf4b842218176813710357f21ce83c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8615ecfa0294a29f8bfee65c94206ae2b9f49c1c8e85e62dc18eed18eb539f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8615ecfa0294a29f8bfee65c94206ae2b9f49c1c8e85e62dc18eed18eb539f10->enter($__internal_8615ecfa0294a29f8bfee65c94206ae2b9f49c1c8e85e62dc18eed18eb539f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8615ecfa0294a29f8bfee65c94206ae2b9f49c1c8e85e62dc18eed18eb539f10->leave($__internal_8615ecfa0294a29f8bfee65c94206ae2b9f49c1c8e85e62dc18eed18eb539f10_prof);

        
        $__internal_a03410520c08a071528fb9e0638227bdf4b842218176813710357f21ce83c81d->leave($__internal_a03410520c08a071528fb9e0638227bdf4b842218176813710357f21ce83c81d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b34afe394deeccee42ea236bc7f7496ca624fe362394408d91c524b4c0a47881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34afe394deeccee42ea236bc7f7496ca624fe362394408d91c524b4c0a47881->enter($__internal_b34afe394deeccee42ea236bc7f7496ca624fe362394408d91c524b4c0a47881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70a8a20d353288ac14c5442c6d4419204b3a3adb28b74e0127f3d1defcdfad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a8a20d353288ac14c5442c6d4419204b3a3adb28b74e0127f3d1defcdfad52->enter($__internal_70a8a20d353288ac14c5442c6d4419204b3a3adb28b74e0127f3d1defcdfad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70a8a20d353288ac14c5442c6d4419204b3a3adb28b74e0127f3d1defcdfad52->leave($__internal_70a8a20d353288ac14c5442c6d4419204b3a3adb28b74e0127f3d1defcdfad52_prof);

        
        $__internal_b34afe394deeccee42ea236bc7f7496ca624fe362394408d91c524b4c0a47881->leave($__internal_b34afe394deeccee42ea236bc7f7496ca624fe362394408d91c524b4c0a47881_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_612dd0bc84d0f49afa75fbe4269aa914b818794fc1fe76193e29e7fee27ef39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612dd0bc84d0f49afa75fbe4269aa914b818794fc1fe76193e29e7fee27ef39d->enter($__internal_612dd0bc84d0f49afa75fbe4269aa914b818794fc1fe76193e29e7fee27ef39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccd9714bdae87a4e5be25e63ecc899b2dfadbe25673cbfd68fd89536342d3002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd9714bdae87a4e5be25e63ecc899b2dfadbe25673cbfd68fd89536342d3002->enter($__internal_ccd9714bdae87a4e5be25e63ecc899b2dfadbe25673cbfd68fd89536342d3002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccd9714bdae87a4e5be25e63ecc899b2dfadbe25673cbfd68fd89536342d3002->leave($__internal_ccd9714bdae87a4e5be25e63ecc899b2dfadbe25673cbfd68fd89536342d3002_prof);

        
        $__internal_612dd0bc84d0f49afa75fbe4269aa914b818794fc1fe76193e29e7fee27ef39d->leave($__internal_612dd0bc84d0f49afa75fbe4269aa914b818794fc1fe76193e29e7fee27ef39d_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1650199cbb7aaf74ba6463cfd5f5b1dd535422b3f8a58c55dea55b1c3a0d20c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1650199cbb7aaf74ba6463cfd5f5b1dd535422b3f8a58c55dea55b1c3a0d20c2->enter($__internal_1650199cbb7aaf74ba6463cfd5f5b1dd535422b3f8a58c55dea55b1c3a0d20c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_599f2c628602d8d60e3299556f9fda587ab235f4555948da2eefe165e481442b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599f2c628602d8d60e3299556f9fda587ab235f4555948da2eefe165e481442b->enter($__internal_599f2c628602d8d60e3299556f9fda587ab235f4555948da2eefe165e481442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_599f2c628602d8d60e3299556f9fda587ab235f4555948da2eefe165e481442b->leave($__internal_599f2c628602d8d60e3299556f9fda587ab235f4555948da2eefe165e481442b_prof);

        
        $__internal_1650199cbb7aaf74ba6463cfd5f5b1dd535422b3f8a58c55dea55b1c3a0d20c2->leave($__internal_1650199cbb7aaf74ba6463cfd5f5b1dd535422b3f8a58c55dea55b1c3a0d20c2_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 7,  69 => 6,  52 => 13,  50 => 12,  48 => 11,  41 => 8,  39 => 7,  35 => 6,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<h1>{{ number }} </h1>


</body>
</html>
", ":lucky:number.html.twig", "D:\\symfony\\my_project_name\\app/Resources\\views/lucky/number.html.twig");
    }
}
