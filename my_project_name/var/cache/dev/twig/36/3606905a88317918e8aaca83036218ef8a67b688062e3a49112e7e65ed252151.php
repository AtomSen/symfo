<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_67ae5ea13163c01121e71cea5f7c7f67da596a2d21cc7bdac767e5bd4891cc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ae5ea13163c01121e71cea5f7c7f67da596a2d21cc7bdac767e5bd4891cc45->enter($__internal_67ae5ea13163c01121e71cea5f7c7f67da596a2d21cc7bdac767e5bd4891cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b8c9908f69c4ced691dd1d2d43f3078a68c3f7eda36885dcd35023ed8dc999c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c9908f69c4ced691dd1d2d43f3078a68c3f7eda36885dcd35023ed8dc999c7->enter($__internal_b8c9908f69c4ced691dd1d2d43f3078a68c3f7eda36885dcd35023ed8dc999c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ae5ea13163c01121e71cea5f7c7f67da596a2d21cc7bdac767e5bd4891cc45->leave($__internal_67ae5ea13163c01121e71cea5f7c7f67da596a2d21cc7bdac767e5bd4891cc45_prof);

        
        $__internal_b8c9908f69c4ced691dd1d2d43f3078a68c3f7eda36885dcd35023ed8dc999c7->leave($__internal_b8c9908f69c4ced691dd1d2d43f3078a68c3f7eda36885dcd35023ed8dc999c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d2c48897d9bf33680105716bed6ec0e2f648163a11c03ae3bdc2f0f0d970da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2c48897d9bf33680105716bed6ec0e2f648163a11c03ae3bdc2f0f0d970da1->enter($__internal_0d2c48897d9bf33680105716bed6ec0e2f648163a11c03ae3bdc2f0f0d970da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_926d64f9333cd81196b39133324542949113a4192f3bc940a189b08ae0cb53bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926d64f9333cd81196b39133324542949113a4192f3bc940a189b08ae0cb53bf->enter($__internal_926d64f9333cd81196b39133324542949113a4192f3bc940a189b08ae0cb53bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_926d64f9333cd81196b39133324542949113a4192f3bc940a189b08ae0cb53bf->leave($__internal_926d64f9333cd81196b39133324542949113a4192f3bc940a189b08ae0cb53bf_prof);

        
        $__internal_0d2c48897d9bf33680105716bed6ec0e2f648163a11c03ae3bdc2f0f0d970da1->leave($__internal_0d2c48897d9bf33680105716bed6ec0e2f648163a11c03ae3bdc2f0f0d970da1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0812e22c095805e45e163485172eb8ef6b39a7e4f01b035ebe4f3643c4a4e59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0812e22c095805e45e163485172eb8ef6b39a7e4f01b035ebe4f3643c4a4e59b->enter($__internal_0812e22c095805e45e163485172eb8ef6b39a7e4f01b035ebe4f3643c4a4e59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6b7a94298ec264742d63c37f18972bca1a93d33b42b34808f4862ffd899e4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b7a94298ec264742d63c37f18972bca1a93d33b42b34808f4862ffd899e4b3->enter($__internal_f6b7a94298ec264742d63c37f18972bca1a93d33b42b34808f4862ffd899e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f6b7a94298ec264742d63c37f18972bca1a93d33b42b34808f4862ffd899e4b3->leave($__internal_f6b7a94298ec264742d63c37f18972bca1a93d33b42b34808f4862ffd899e4b3_prof);

        
        $__internal_0812e22c095805e45e163485172eb8ef6b39a7e4f01b035ebe4f3643c4a4e59b->leave($__internal_0812e22c095805e45e163485172eb8ef6b39a7e4f01b035ebe4f3643c4a4e59b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71fbc67a1d0322403363ff2a0613916bc4a3cf77afdcbdef1dcfa36f50925d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fbc67a1d0322403363ff2a0613916bc4a3cf77afdcbdef1dcfa36f50925d91->enter($__internal_71fbc67a1d0322403363ff2a0613916bc4a3cf77afdcbdef1dcfa36f50925d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c10ec45de066b549cf8cef24ff822bab3481a9cde2fdf203a683bd56f4a7ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c10ec45de066b549cf8cef24ff822bab3481a9cde2fdf203a683bd56f4a7ea2->enter($__internal_0c10ec45de066b549cf8cef24ff822bab3481a9cde2fdf203a683bd56f4a7ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0c10ec45de066b549cf8cef24ff822bab3481a9cde2fdf203a683bd56f4a7ea2->leave($__internal_0c10ec45de066b549cf8cef24ff822bab3481a9cde2fdf203a683bd56f4a7ea2_prof);

        
        $__internal_71fbc67a1d0322403363ff2a0613916bc4a3cf77afdcbdef1dcfa36f50925d91->leave($__internal_71fbc67a1d0322403363ff2a0613916bc4a3cf77afdcbdef1dcfa36f50925d91_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
