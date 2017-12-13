<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab6aeb0481d92605895c52435a310f3d2d1165934b4536515e362da5b27b7028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6aeb0481d92605895c52435a310f3d2d1165934b4536515e362da5b27b7028->enter($__internal_ab6aeb0481d92605895c52435a310f3d2d1165934b4536515e362da5b27b7028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_91c87c242e9f73ab5bad43e7ba65428439e5b0c5118b4ceab0fc79a55ef988fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c87c242e9f73ab5bad43e7ba65428439e5b0c5118b4ceab0fc79a55ef988fb->enter($__internal_91c87c242e9f73ab5bad43e7ba65428439e5b0c5118b4ceab0fc79a55ef988fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ab6aeb0481d92605895c52435a310f3d2d1165934b4536515e362da5b27b7028->leave($__internal_ab6aeb0481d92605895c52435a310f3d2d1165934b4536515e362da5b27b7028_prof);

        
        $__internal_91c87c242e9f73ab5bad43e7ba65428439e5b0c5118b4ceab0fc79a55ef988fb->leave($__internal_91c87c242e9f73ab5bad43e7ba65428439e5b0c5118b4ceab0fc79a55ef988fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b96e20fe8673bf0fc984801f5b0d40bbaf6cfcb24da36d5bd81e35e26e5fd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b96e20fe8673bf0fc984801f5b0d40bbaf6cfcb24da36d5bd81e35e26e5fd19->enter($__internal_3b96e20fe8673bf0fc984801f5b0d40bbaf6cfcb24da36d5bd81e35e26e5fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10117e6739d2cad9e26bdcf8654de829e25f4f2f6cd8ac62aef4a2a862ab3cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10117e6739d2cad9e26bdcf8654de829e25f4f2f6cd8ac62aef4a2a862ab3cbc->enter($__internal_10117e6739d2cad9e26bdcf8654de829e25f4f2f6cd8ac62aef4a2a862ab3cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10117e6739d2cad9e26bdcf8654de829e25f4f2f6cd8ac62aef4a2a862ab3cbc->leave($__internal_10117e6739d2cad9e26bdcf8654de829e25f4f2f6cd8ac62aef4a2a862ab3cbc_prof);

        
        $__internal_3b96e20fe8673bf0fc984801f5b0d40bbaf6cfcb24da36d5bd81e35e26e5fd19->leave($__internal_3b96e20fe8673bf0fc984801f5b0d40bbaf6cfcb24da36d5bd81e35e26e5fd19_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e830d996d9d263a7697c91b1292964360bbe2fa5cc9cf5216b25c70ed441c7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e830d996d9d263a7697c91b1292964360bbe2fa5cc9cf5216b25c70ed441c7de->enter($__internal_e830d996d9d263a7697c91b1292964360bbe2fa5cc9cf5216b25c70ed441c7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ac3c4b0415f1607711298e0a437e6a583ce833a32d9c96dc9b904dd45a27e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac3c4b0415f1607711298e0a437e6a583ce833a32d9c96dc9b904dd45a27e27->enter($__internal_8ac3c4b0415f1607711298e0a437e6a583ce833a32d9c96dc9b904dd45a27e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8ac3c4b0415f1607711298e0a437e6a583ce833a32d9c96dc9b904dd45a27e27->leave($__internal_8ac3c4b0415f1607711298e0a437e6a583ce833a32d9c96dc9b904dd45a27e27_prof);

        
        $__internal_e830d996d9d263a7697c91b1292964360bbe2fa5cc9cf5216b25c70ed441c7de->leave($__internal_e830d996d9d263a7697c91b1292964360bbe2fa5cc9cf5216b25c70ed441c7de_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e100155b68653b35ea74acb8768ac0771e03d11a233a4b6da500276a95349bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e100155b68653b35ea74acb8768ac0771e03d11a233a4b6da500276a95349bc8->enter($__internal_e100155b68653b35ea74acb8768ac0771e03d11a233a4b6da500276a95349bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bca3ac52600d936db2059352594f8672f475950dca8d8c100cb592263f62bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bca3ac52600d936db2059352594f8672f475950dca8d8c100cb592263f62bcf->enter($__internal_2bca3ac52600d936db2059352594f8672f475950dca8d8c100cb592263f62bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2bca3ac52600d936db2059352594f8672f475950dca8d8c100cb592263f62bcf->leave($__internal_2bca3ac52600d936db2059352594f8672f475950dca8d8c100cb592263f62bcf_prof);

        
        $__internal_e100155b68653b35ea74acb8768ac0771e03d11a233a4b6da500276a95349bc8->leave($__internal_e100155b68653b35ea74acb8768ac0771e03d11a233a4b6da500276a95349bc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
