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
        $__internal_85298897a486c6d4203faf8a62e40df24e5ad87cfd2c9cd66af558141b313d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85298897a486c6d4203faf8a62e40df24e5ad87cfd2c9cd66af558141b313d45->enter($__internal_85298897a486c6d4203faf8a62e40df24e5ad87cfd2c9cd66af558141b313d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_11c980c3549c732824d2752af3b51ed84889a9f26ac52f385667e1094b40be6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c980c3549c732824d2752af3b51ed84889a9f26ac52f385667e1094b40be6e->enter($__internal_11c980c3549c732824d2752af3b51ed84889a9f26ac52f385667e1094b40be6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85298897a486c6d4203faf8a62e40df24e5ad87cfd2c9cd66af558141b313d45->leave($__internal_85298897a486c6d4203faf8a62e40df24e5ad87cfd2c9cd66af558141b313d45_prof);

        
        $__internal_11c980c3549c732824d2752af3b51ed84889a9f26ac52f385667e1094b40be6e->leave($__internal_11c980c3549c732824d2752af3b51ed84889a9f26ac52f385667e1094b40be6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c990a448e03839f636b1ed5ea793b43d1c664872c3452ae884ef345711983a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c990a448e03839f636b1ed5ea793b43d1c664872c3452ae884ef345711983a11->enter($__internal_c990a448e03839f636b1ed5ea793b43d1c664872c3452ae884ef345711983a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a302ef21f5590e32fafffbf5b40b09bed6f1c26d9db942947cc02d6f5e21c9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a302ef21f5590e32fafffbf5b40b09bed6f1c26d9db942947cc02d6f5e21c9fd->enter($__internal_a302ef21f5590e32fafffbf5b40b09bed6f1c26d9db942947cc02d6f5e21c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a302ef21f5590e32fafffbf5b40b09bed6f1c26d9db942947cc02d6f5e21c9fd->leave($__internal_a302ef21f5590e32fafffbf5b40b09bed6f1c26d9db942947cc02d6f5e21c9fd_prof);

        
        $__internal_c990a448e03839f636b1ed5ea793b43d1c664872c3452ae884ef345711983a11->leave($__internal_c990a448e03839f636b1ed5ea793b43d1c664872c3452ae884ef345711983a11_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f242c40195a90f6b571a7ad170bed2b99381ad9e4c239edecdbf95a69c562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f242c40195a90f6b571a7ad170bed2b99381ad9e4c239edecdbf95a69c562a->enter($__internal_27f242c40195a90f6b571a7ad170bed2b99381ad9e4c239edecdbf95a69c562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f775852c23945e70b15b4387d911ce05ccc0f049f47287a7c83538e21ecd55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f775852c23945e70b15b4387d911ce05ccc0f049f47287a7c83538e21ecd55d->enter($__internal_1f775852c23945e70b15b4387d911ce05ccc0f049f47287a7c83538e21ecd55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f775852c23945e70b15b4387d911ce05ccc0f049f47287a7c83538e21ecd55d->leave($__internal_1f775852c23945e70b15b4387d911ce05ccc0f049f47287a7c83538e21ecd55d_prof);

        
        $__internal_27f242c40195a90f6b571a7ad170bed2b99381ad9e4c239edecdbf95a69c562a->leave($__internal_27f242c40195a90f6b571a7ad170bed2b99381ad9e4c239edecdbf95a69c562a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b28a4928d054a60252a3b1f21ad2a5cb09708d2d26cb5001e77f27726c4158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b28a4928d054a60252a3b1f21ad2a5cb09708d2d26cb5001e77f27726c4158->enter($__internal_90b28a4928d054a60252a3b1f21ad2a5cb09708d2d26cb5001e77f27726c4158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9e7e12aad4fa4dc0eb682d9f9d1590cb2440bee530c4cfbf06733b5dcae7b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7e12aad4fa4dc0eb682d9f9d1590cb2440bee530c4cfbf06733b5dcae7b21->enter($__internal_f9e7e12aad4fa4dc0eb682d9f9d1590cb2440bee530c4cfbf06733b5dcae7b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f9e7e12aad4fa4dc0eb682d9f9d1590cb2440bee530c4cfbf06733b5dcae7b21->leave($__internal_f9e7e12aad4fa4dc0eb682d9f9d1590cb2440bee530c4cfbf06733b5dcae7b21_prof);

        
        $__internal_90b28a4928d054a60252a3b1f21ad2a5cb09708d2d26cb5001e77f27726c4158->leave($__internal_90b28a4928d054a60252a3b1f21ad2a5cb09708d2d26cb5001e77f27726c4158_prof);

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
