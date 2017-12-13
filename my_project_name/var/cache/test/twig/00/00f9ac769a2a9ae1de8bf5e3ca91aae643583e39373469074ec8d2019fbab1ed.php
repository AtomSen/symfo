<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_0c0ff4dfff79aa6ecc9fd895db160c4c5dde628a4db15dd7be5b0adc0165295d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0ff4dfff79aa6ecc9fd895db160c4c5dde628a4db15dd7be5b0adc0165295d->enter($__internal_0c0ff4dfff79aa6ecc9fd895db160c4c5dde628a4db15dd7be5b0adc0165295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3894857f7f644d396df14b1d84a8982042a54d1bd966b9f72136c1121a173eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3894857f7f644d396df14b1d84a8982042a54d1bd966b9f72136c1121a173eeb->enter($__internal_3894857f7f644d396df14b1d84a8982042a54d1bd966b9f72136c1121a173eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0c0ff4dfff79aa6ecc9fd895db160c4c5dde628a4db15dd7be5b0adc0165295d->leave($__internal_0c0ff4dfff79aa6ecc9fd895db160c4c5dde628a4db15dd7be5b0adc0165295d_prof);

        
        $__internal_3894857f7f644d396df14b1d84a8982042a54d1bd966b9f72136c1121a173eeb->leave($__internal_3894857f7f644d396df14b1d84a8982042a54d1bd966b9f72136c1121a173eeb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e53bc000af7cb23a749bd104c6ece131e755afc827233cea5f03eef7143ca044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53bc000af7cb23a749bd104c6ece131e755afc827233cea5f03eef7143ca044->enter($__internal_e53bc000af7cb23a749bd104c6ece131e755afc827233cea5f03eef7143ca044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf4589d4070892a7eec6028202632ed86def02496873802e0aceb6054e85ddff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4589d4070892a7eec6028202632ed86def02496873802e0aceb6054e85ddff->enter($__internal_cf4589d4070892a7eec6028202632ed86def02496873802e0aceb6054e85ddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cf4589d4070892a7eec6028202632ed86def02496873802e0aceb6054e85ddff->leave($__internal_cf4589d4070892a7eec6028202632ed86def02496873802e0aceb6054e85ddff_prof);

        
        $__internal_e53bc000af7cb23a749bd104c6ece131e755afc827233cea5f03eef7143ca044->leave($__internal_e53bc000af7cb23a749bd104c6ece131e755afc827233cea5f03eef7143ca044_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1bfa2ef0e2a5ad7633c6f28be5163f0051fc3046b5b5c3466c4844f7f51564a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bfa2ef0e2a5ad7633c6f28be5163f0051fc3046b5b5c3466c4844f7f51564a->enter($__internal_c1bfa2ef0e2a5ad7633c6f28be5163f0051fc3046b5b5c3466c4844f7f51564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8666a32dae639237c4622c071e6603c7d53bff3505150a0085690d950196ccd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8666a32dae639237c4622c071e6603c7d53bff3505150a0085690d950196ccd1->enter($__internal_8666a32dae639237c4622c071e6603c7d53bff3505150a0085690d950196ccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8666a32dae639237c4622c071e6603c7d53bff3505150a0085690d950196ccd1->leave($__internal_8666a32dae639237c4622c071e6603c7d53bff3505150a0085690d950196ccd1_prof);

        
        $__internal_c1bfa2ef0e2a5ad7633c6f28be5163f0051fc3046b5b5c3466c4844f7f51564a->leave($__internal_c1bfa2ef0e2a5ad7633c6f28be5163f0051fc3046b5b5c3466c4844f7f51564a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d6623abd48750a9e80afbd56b0ed72b4cdbf33057d1d1822e1754ffbd3b8e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6623abd48750a9e80afbd56b0ed72b4cdbf33057d1d1822e1754ffbd3b8e71->enter($__internal_1d6623abd48750a9e80afbd56b0ed72b4cdbf33057d1d1822e1754ffbd3b8e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90309b10100e1cb196f05aa96e132ee9d172232a6e4d71e8e951745c6e8e2ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90309b10100e1cb196f05aa96e132ee9d172232a6e4d71e8e951745c6e8e2ba0->enter($__internal_90309b10100e1cb196f05aa96e132ee9d172232a6e4d71e8e951745c6e8e2ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90309b10100e1cb196f05aa96e132ee9d172232a6e4d71e8e951745c6e8e2ba0->leave($__internal_90309b10100e1cb196f05aa96e132ee9d172232a6e4d71e8e951745c6e8e2ba0_prof);

        
        $__internal_1d6623abd48750a9e80afbd56b0ed72b4cdbf33057d1d1822e1754ffbd3b8e71->leave($__internal_1d6623abd48750a9e80afbd56b0ed72b4cdbf33057d1d1822e1754ffbd3b8e71_prof);

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
", "@Twig/layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
