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
        $__internal_0ffb10ac3366674225a84db9ff8a23f54a6779cd57d30f0e445d35b9861c1dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffb10ac3366674225a84db9ff8a23f54a6779cd57d30f0e445d35b9861c1dff->enter($__internal_0ffb10ac3366674225a84db9ff8a23f54a6779cd57d30f0e445d35b9861c1dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_67096d335842b42a05ca810f38bc0ff8e9fa19a21a6a47c3c30311944a9de296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67096d335842b42a05ca810f38bc0ff8e9fa19a21a6a47c3c30311944a9de296->enter($__internal_67096d335842b42a05ca810f38bc0ff8e9fa19a21a6a47c3c30311944a9de296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0ffb10ac3366674225a84db9ff8a23f54a6779cd57d30f0e445d35b9861c1dff->leave($__internal_0ffb10ac3366674225a84db9ff8a23f54a6779cd57d30f0e445d35b9861c1dff_prof);

        
        $__internal_67096d335842b42a05ca810f38bc0ff8e9fa19a21a6a47c3c30311944a9de296->leave($__internal_67096d335842b42a05ca810f38bc0ff8e9fa19a21a6a47c3c30311944a9de296_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff74a2f277da98f4b7026bfe5479f07b916b0dbfffd95aa6db615ae4a3d08e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff74a2f277da98f4b7026bfe5479f07b916b0dbfffd95aa6db615ae4a3d08e33->enter($__internal_ff74a2f277da98f4b7026bfe5479f07b916b0dbfffd95aa6db615ae4a3d08e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d2f4ea84688f7120cd9b25ce93cf366e3046a6401270b1722df511e2e1ec59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2f4ea84688f7120cd9b25ce93cf366e3046a6401270b1722df511e2e1ec59b->enter($__internal_7d2f4ea84688f7120cd9b25ce93cf366e3046a6401270b1722df511e2e1ec59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7d2f4ea84688f7120cd9b25ce93cf366e3046a6401270b1722df511e2e1ec59b->leave($__internal_7d2f4ea84688f7120cd9b25ce93cf366e3046a6401270b1722df511e2e1ec59b_prof);

        
        $__internal_ff74a2f277da98f4b7026bfe5479f07b916b0dbfffd95aa6db615ae4a3d08e33->leave($__internal_ff74a2f277da98f4b7026bfe5479f07b916b0dbfffd95aa6db615ae4a3d08e33_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3edd2a88baac49c8fa2684f97456f362e235dd58893d402c2d73c19941864be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3edd2a88baac49c8fa2684f97456f362e235dd58893d402c2d73c19941864be->enter($__internal_c3edd2a88baac49c8fa2684f97456f362e235dd58893d402c2d73c19941864be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3fa5e4c8fe766f006afb65bb00bc1fe6f7d03ea92e724af478ae40250fbdd7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa5e4c8fe766f006afb65bb00bc1fe6f7d03ea92e724af478ae40250fbdd7cd->enter($__internal_3fa5e4c8fe766f006afb65bb00bc1fe6f7d03ea92e724af478ae40250fbdd7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3fa5e4c8fe766f006afb65bb00bc1fe6f7d03ea92e724af478ae40250fbdd7cd->leave($__internal_3fa5e4c8fe766f006afb65bb00bc1fe6f7d03ea92e724af478ae40250fbdd7cd_prof);

        
        $__internal_c3edd2a88baac49c8fa2684f97456f362e235dd58893d402c2d73c19941864be->leave($__internal_c3edd2a88baac49c8fa2684f97456f362e235dd58893d402c2d73c19941864be_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_01cf9b257e6ffc0688aee7fdbad532be6024cd07fdd1c5bce54c238275f75d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cf9b257e6ffc0688aee7fdbad532be6024cd07fdd1c5bce54c238275f75d47->enter($__internal_01cf9b257e6ffc0688aee7fdbad532be6024cd07fdd1c5bce54c238275f75d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a7f9acdb0a013f8a6a211a4c4be4768656f2fdf1936d2e9c3858e20d0e64b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7f9acdb0a013f8a6a211a4c4be4768656f2fdf1936d2e9c3858e20d0e64b76->enter($__internal_5a7f9acdb0a013f8a6a211a4c4be4768656f2fdf1936d2e9c3858e20d0e64b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a7f9acdb0a013f8a6a211a4c4be4768656f2fdf1936d2e9c3858e20d0e64b76->leave($__internal_5a7f9acdb0a013f8a6a211a4c4be4768656f2fdf1936d2e9c3858e20d0e64b76_prof);

        
        $__internal_01cf9b257e6ffc0688aee7fdbad532be6024cd07fdd1c5bce54c238275f75d47->leave($__internal_01cf9b257e6ffc0688aee7fdbad532be6024cd07fdd1c5bce54c238275f75d47_prof);

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
