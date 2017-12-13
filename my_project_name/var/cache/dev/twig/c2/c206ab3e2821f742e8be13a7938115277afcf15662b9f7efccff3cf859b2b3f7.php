<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6a2355aa7f1013b197aef05ec7ae491c62f377d27c7c1ea05b1b9f67c2a90770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_673fc9a97309575f1ada838dbd0a934b4c1137b79fa1a6adc7e388626764e567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673fc9a97309575f1ada838dbd0a934b4c1137b79fa1a6adc7e388626764e567->enter($__internal_673fc9a97309575f1ada838dbd0a934b4c1137b79fa1a6adc7e388626764e567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c7af68d74db238590c0a3257c921e4da6665ceb1adde32773ad6a6b8294cdc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7af68d74db238590c0a3257c921e4da6665ceb1adde32773ad6a6b8294cdc2f->enter($__internal_c7af68d74db238590c0a3257c921e4da6665ceb1adde32773ad6a6b8294cdc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673fc9a97309575f1ada838dbd0a934b4c1137b79fa1a6adc7e388626764e567->leave($__internal_673fc9a97309575f1ada838dbd0a934b4c1137b79fa1a6adc7e388626764e567_prof);

        
        $__internal_c7af68d74db238590c0a3257c921e4da6665ceb1adde32773ad6a6b8294cdc2f->leave($__internal_c7af68d74db238590c0a3257c921e4da6665ceb1adde32773ad6a6b8294cdc2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19638358bd1e96c0b31626d8d7a81a19e08295647991ba2d2d7510b2ff1c36d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19638358bd1e96c0b31626d8d7a81a19e08295647991ba2d2d7510b2ff1c36d5->enter($__internal_19638358bd1e96c0b31626d8d7a81a19e08295647991ba2d2d7510b2ff1c36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc6c02080ad7ea7fe2f9cd58eee2a64320925a5851ee1ab5ab039076267ab024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6c02080ad7ea7fe2f9cd58eee2a64320925a5851ee1ab5ab039076267ab024->enter($__internal_dc6c02080ad7ea7fe2f9cd58eee2a64320925a5851ee1ab5ab039076267ab024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_dc6c02080ad7ea7fe2f9cd58eee2a64320925a5851ee1ab5ab039076267ab024->leave($__internal_dc6c02080ad7ea7fe2f9cd58eee2a64320925a5851ee1ab5ab039076267ab024_prof);

        
        $__internal_19638358bd1e96c0b31626d8d7a81a19e08295647991ba2d2d7510b2ff1c36d5->leave($__internal_19638358bd1e96c0b31626d8d7a81a19e08295647991ba2d2d7510b2ff1c36d5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_70fd20657030d1111578e3301a628843ca04b76137979cb4ca4c15ca3d744bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fd20657030d1111578e3301a628843ca04b76137979cb4ca4c15ca3d744bd5->enter($__internal_70fd20657030d1111578e3301a628843ca04b76137979cb4ca4c15ca3d744bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb9992f4e7b44191b5c4b2f868c673198e6e8d6ef80dd7d481f594f18c0774c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9992f4e7b44191b5c4b2f868c673198e6e8d6ef80dd7d481f594f18c0774c3->enter($__internal_cb9992f4e7b44191b5c4b2f868c673198e6e8d6ef80dd7d481f594f18c0774c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb9992f4e7b44191b5c4b2f868c673198e6e8d6ef80dd7d481f594f18c0774c3->leave($__internal_cb9992f4e7b44191b5c4b2f868c673198e6e8d6ef80dd7d481f594f18c0774c3_prof);

        
        $__internal_70fd20657030d1111578e3301a628843ca04b76137979cb4ca4c15ca3d744bd5->leave($__internal_70fd20657030d1111578e3301a628843ca04b76137979cb4ca4c15ca3d744bd5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b1b002edce79d0c627ac12c805121d9c41f1863b2a28bff80cefe8af675afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b1b002edce79d0c627ac12c805121d9c41f1863b2a28bff80cefe8af675afc->enter($__internal_45b1b002edce79d0c627ac12c805121d9c41f1863b2a28bff80cefe8af675afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99f811c596e999a9a29909b6d6c8bf81b24602b4d59ac1bb9af685d86e47d229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f811c596e999a9a29909b6d6c8bf81b24602b4d59ac1bb9af685d86e47d229->enter($__internal_99f811c596e999a9a29909b6d6c8bf81b24602b4d59ac1bb9af685d86e47d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_99f811c596e999a9a29909b6d6c8bf81b24602b4d59ac1bb9af685d86e47d229->leave($__internal_99f811c596e999a9a29909b6d6c8bf81b24602b4d59ac1bb9af685d86e47d229_prof);

        
        $__internal_45b1b002edce79d0c627ac12c805121d9c41f1863b2a28bff80cefe8af675afc->leave($__internal_45b1b002edce79d0c627ac12c805121d9c41f1863b2a28bff80cefe8af675afc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
