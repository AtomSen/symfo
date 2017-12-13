<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_9bcccd4f319c639f5e48c24341ed4e7993c7c9a0d3ec20db7876abace70dd642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcccd4f319c639f5e48c24341ed4e7993c7c9a0d3ec20db7876abace70dd642->enter($__internal_9bcccd4f319c639f5e48c24341ed4e7993c7c9a0d3ec20db7876abace70dd642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b109b9a49f0f45300f343dc4daf6c41f20992b59202d886af71e817f5704730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b109b9a49f0f45300f343dc4daf6c41f20992b59202d886af71e817f5704730->enter($__internal_9b109b9a49f0f45300f343dc4daf6c41f20992b59202d886af71e817f5704730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bcccd4f319c639f5e48c24341ed4e7993c7c9a0d3ec20db7876abace70dd642->leave($__internal_9bcccd4f319c639f5e48c24341ed4e7993c7c9a0d3ec20db7876abace70dd642_prof);

        
        $__internal_9b109b9a49f0f45300f343dc4daf6c41f20992b59202d886af71e817f5704730->leave($__internal_9b109b9a49f0f45300f343dc4daf6c41f20992b59202d886af71e817f5704730_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f370c850e902121bb432dccf2edcf7598b95f083086b600026a40ac8b26a40e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f370c850e902121bb432dccf2edcf7598b95f083086b600026a40ac8b26a40e7->enter($__internal_f370c850e902121bb432dccf2edcf7598b95f083086b600026a40ac8b26a40e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b9e3c771050ba3a4970a339592746944593aee5c39645ad628a59786564438d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e3c771050ba3a4970a339592746944593aee5c39645ad628a59786564438d1->enter($__internal_b9e3c771050ba3a4970a339592746944593aee5c39645ad628a59786564438d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b9e3c771050ba3a4970a339592746944593aee5c39645ad628a59786564438d1->leave($__internal_b9e3c771050ba3a4970a339592746944593aee5c39645ad628a59786564438d1_prof);

        
        $__internal_f370c850e902121bb432dccf2edcf7598b95f083086b600026a40ac8b26a40e7->leave($__internal_f370c850e902121bb432dccf2edcf7598b95f083086b600026a40ac8b26a40e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1107322327e68691e2917bcf4b425c7fd6a0dcff82f66b9f840f9e25d06c7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1107322327e68691e2917bcf4b425c7fd6a0dcff82f66b9f840f9e25d06c7eb->enter($__internal_e1107322327e68691e2917bcf4b425c7fd6a0dcff82f66b9f840f9e25d06c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d68abbae84d82835f6dcaf664eef58db791b9a4d85f486a90a6a8a772a2f7c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68abbae84d82835f6dcaf664eef58db791b9a4d85f486a90a6a8a772a2f7c70->enter($__internal_d68abbae84d82835f6dcaf664eef58db791b9a4d85f486a90a6a8a772a2f7c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d68abbae84d82835f6dcaf664eef58db791b9a4d85f486a90a6a8a772a2f7c70->leave($__internal_d68abbae84d82835f6dcaf664eef58db791b9a4d85f486a90a6a8a772a2f7c70_prof);

        
        $__internal_e1107322327e68691e2917bcf4b425c7fd6a0dcff82f66b9f840f9e25d06c7eb->leave($__internal_e1107322327e68691e2917bcf4b425c7fd6a0dcff82f66b9f840f9e25d06c7eb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_af93820261c42f48871984295ac80acda78c6e62d42c7a9cb06c38f0c297249c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af93820261c42f48871984295ac80acda78c6e62d42c7a9cb06c38f0c297249c->enter($__internal_af93820261c42f48871984295ac80acda78c6e62d42c7a9cb06c38f0c297249c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9afbfe1c1a628d90bb38339480de2c79e63982ae95148dd06f75514bb9d3e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9afbfe1c1a628d90bb38339480de2c79e63982ae95148dd06f75514bb9d3e8f->enter($__internal_f9afbfe1c1a628d90bb38339480de2c79e63982ae95148dd06f75514bb9d3e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f9afbfe1c1a628d90bb38339480de2c79e63982ae95148dd06f75514bb9d3e8f->leave($__internal_f9afbfe1c1a628d90bb38339480de2c79e63982ae95148dd06f75514bb9d3e8f_prof);

        
        $__internal_af93820261c42f48871984295ac80acda78c6e62d42c7a9cb06c38f0c297249c->leave($__internal_af93820261c42f48871984295ac80acda78c6e62d42c7a9cb06c38f0c297249c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
