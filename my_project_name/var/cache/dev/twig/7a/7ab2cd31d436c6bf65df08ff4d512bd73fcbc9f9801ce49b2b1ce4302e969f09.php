<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
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
        $__internal_8875732dacc5fc240c4cf7ad7a0c46acd7bdc7ae9634171eff10be76cf80198b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8875732dacc5fc240c4cf7ad7a0c46acd7bdc7ae9634171eff10be76cf80198b->enter($__internal_8875732dacc5fc240c4cf7ad7a0c46acd7bdc7ae9634171eff10be76cf80198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cd3b71657d853fafdc497974715bdfbcd8163a9180eb4f641917a161493e65d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3b71657d853fafdc497974715bdfbcd8163a9180eb4f641917a161493e65d6->enter($__internal_cd3b71657d853fafdc497974715bdfbcd8163a9180eb4f641917a161493e65d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8875732dacc5fc240c4cf7ad7a0c46acd7bdc7ae9634171eff10be76cf80198b->leave($__internal_8875732dacc5fc240c4cf7ad7a0c46acd7bdc7ae9634171eff10be76cf80198b_prof);

        
        $__internal_cd3b71657d853fafdc497974715bdfbcd8163a9180eb4f641917a161493e65d6->leave($__internal_cd3b71657d853fafdc497974715bdfbcd8163a9180eb4f641917a161493e65d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b745c4c4afc91a41697e00d2a771eb598e8a46222db4392107ea46ef408cfeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b745c4c4afc91a41697e00d2a771eb598e8a46222db4392107ea46ef408cfeec->enter($__internal_b745c4c4afc91a41697e00d2a771eb598e8a46222db4392107ea46ef408cfeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a52b7aea0f2ae899c9e9f8666a6161f8cca24cb8d680350132e076ee5dadcbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b7aea0f2ae899c9e9f8666a6161f8cca24cb8d680350132e076ee5dadcbed->enter($__internal_a52b7aea0f2ae899c9e9f8666a6161f8cca24cb8d680350132e076ee5dadcbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a52b7aea0f2ae899c9e9f8666a6161f8cca24cb8d680350132e076ee5dadcbed->leave($__internal_a52b7aea0f2ae899c9e9f8666a6161f8cca24cb8d680350132e076ee5dadcbed_prof);

        
        $__internal_b745c4c4afc91a41697e00d2a771eb598e8a46222db4392107ea46ef408cfeec->leave($__internal_b745c4c4afc91a41697e00d2a771eb598e8a46222db4392107ea46ef408cfeec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7766c2ef427ce4b4ae183adce68c26ddcb851d431eec2129c89c6a93fdf74962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7766c2ef427ce4b4ae183adce68c26ddcb851d431eec2129c89c6a93fdf74962->enter($__internal_7766c2ef427ce4b4ae183adce68c26ddcb851d431eec2129c89c6a93fdf74962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa1e96b45d189cde4acfcf3caf5e9a815534bb346d906379150691021f2234a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1e96b45d189cde4acfcf3caf5e9a815534bb346d906379150691021f2234a1->enter($__internal_aa1e96b45d189cde4acfcf3caf5e9a815534bb346d906379150691021f2234a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_aa1e96b45d189cde4acfcf3caf5e9a815534bb346d906379150691021f2234a1->leave($__internal_aa1e96b45d189cde4acfcf3caf5e9a815534bb346d906379150691021f2234a1_prof);

        
        $__internal_7766c2ef427ce4b4ae183adce68c26ddcb851d431eec2129c89c6a93fdf74962->leave($__internal_7766c2ef427ce4b4ae183adce68c26ddcb851d431eec2129c89c6a93fdf74962_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c17402498806c8e4632fd36898f9aade3211fe3a1f0b438019446a09286eb7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17402498806c8e4632fd36898f9aade3211fe3a1f0b438019446a09286eb7e2->enter($__internal_c17402498806c8e4632fd36898f9aade3211fe3a1f0b438019446a09286eb7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81c621d6433607f380523b7dafd55cc68ef229de87bbe69a5105f3cedcb99bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c621d6433607f380523b7dafd55cc68ef229de87bbe69a5105f3cedcb99bc5->enter($__internal_81c621d6433607f380523b7dafd55cc68ef229de87bbe69a5105f3cedcb99bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_81c621d6433607f380523b7dafd55cc68ef229de87bbe69a5105f3cedcb99bc5->leave($__internal_81c621d6433607f380523b7dafd55cc68ef229de87bbe69a5105f3cedcb99bc5_prof);

        
        $__internal_c17402498806c8e4632fd36898f9aade3211fe3a1f0b438019446a09286eb7e2->leave($__internal_c17402498806c8e4632fd36898f9aade3211fe3a1f0b438019446a09286eb7e2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
