<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
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
        $__internal_20c935e819840d6827cc0a57c2e1139e030c8df83466de938332040a650144cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c935e819840d6827cc0a57c2e1139e030c8df83466de938332040a650144cd->enter($__internal_20c935e819840d6827cc0a57c2e1139e030c8df83466de938332040a650144cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fc44a9d7064830626bd1bade16cbcfe17962311ea0a01b47b4a299bf95e7a274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc44a9d7064830626bd1bade16cbcfe17962311ea0a01b47b4a299bf95e7a274->enter($__internal_fc44a9d7064830626bd1bade16cbcfe17962311ea0a01b47b4a299bf95e7a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20c935e819840d6827cc0a57c2e1139e030c8df83466de938332040a650144cd->leave($__internal_20c935e819840d6827cc0a57c2e1139e030c8df83466de938332040a650144cd_prof);

        
        $__internal_fc44a9d7064830626bd1bade16cbcfe17962311ea0a01b47b4a299bf95e7a274->leave($__internal_fc44a9d7064830626bd1bade16cbcfe17962311ea0a01b47b4a299bf95e7a274_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_718783f40ab687e84234c0d1765dd1c194ef346b9dc68282b1322f924888a48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718783f40ab687e84234c0d1765dd1c194ef346b9dc68282b1322f924888a48c->enter($__internal_718783f40ab687e84234c0d1765dd1c194ef346b9dc68282b1322f924888a48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78ecc6545eb0a4ea15262fe675674d6dbc4af14849827685a69965813dfd1f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ecc6545eb0a4ea15262fe675674d6dbc4af14849827685a69965813dfd1f4d->enter($__internal_78ecc6545eb0a4ea15262fe675674d6dbc4af14849827685a69965813dfd1f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_78ecc6545eb0a4ea15262fe675674d6dbc4af14849827685a69965813dfd1f4d->leave($__internal_78ecc6545eb0a4ea15262fe675674d6dbc4af14849827685a69965813dfd1f4d_prof);

        
        $__internal_718783f40ab687e84234c0d1765dd1c194ef346b9dc68282b1322f924888a48c->leave($__internal_718783f40ab687e84234c0d1765dd1c194ef346b9dc68282b1322f924888a48c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cef3e7b3e55e4f14e9baee06f50e954ce8a1600199048d1af3b8a6b5acdfe7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cef3e7b3e55e4f14e9baee06f50e954ce8a1600199048d1af3b8a6b5acdfe7a->enter($__internal_2cef3e7b3e55e4f14e9baee06f50e954ce8a1600199048d1af3b8a6b5acdfe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f9a9a8a054dcddc92466e4909bbdec38d8230eefbc302c74ecf18471694a1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9a9a8a054dcddc92466e4909bbdec38d8230eefbc302c74ecf18471694a1a5->enter($__internal_9f9a9a8a054dcddc92466e4909bbdec38d8230eefbc302c74ecf18471694a1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f9a9a8a054dcddc92466e4909bbdec38d8230eefbc302c74ecf18471694a1a5->leave($__internal_9f9a9a8a054dcddc92466e4909bbdec38d8230eefbc302c74ecf18471694a1a5_prof);

        
        $__internal_2cef3e7b3e55e4f14e9baee06f50e954ce8a1600199048d1af3b8a6b5acdfe7a->leave($__internal_2cef3e7b3e55e4f14e9baee06f50e954ce8a1600199048d1af3b8a6b5acdfe7a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f9d41eb72743b784c01710e56417daba9244f9e27c25ed63258f09487840a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f9d41eb72743b784c01710e56417daba9244f9e27c25ed63258f09487840a1->enter($__internal_a9f9d41eb72743b784c01710e56417daba9244f9e27c25ed63258f09487840a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39e8fdc238e2ae852fc1592475f0d28b14da937e3bea33e6569f9635fa571296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e8fdc238e2ae852fc1592475f0d28b14da937e3bea33e6569f9635fa571296->enter($__internal_39e8fdc238e2ae852fc1592475f0d28b14da937e3bea33e6569f9635fa571296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_39e8fdc238e2ae852fc1592475f0d28b14da937e3bea33e6569f9635fa571296->leave($__internal_39e8fdc238e2ae852fc1592475f0d28b14da937e3bea33e6569f9635fa571296_prof);

        
        $__internal_a9f9d41eb72743b784c01710e56417daba9244f9e27c25ed63258f09487840a1->leave($__internal_a9f9d41eb72743b784c01710e56417daba9244f9e27c25ed63258f09487840a1_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
