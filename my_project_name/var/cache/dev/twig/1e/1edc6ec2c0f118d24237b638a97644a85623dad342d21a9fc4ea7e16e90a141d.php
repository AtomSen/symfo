<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_ebae816fd1156f5046be1c76889a36b567d9959762a8dd75a3ba623a17fd264f extends Twig_Template
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
        $__internal_626d2a231c8afc3146ac335aa661106a5d7f9658a00ce788610a682c08ba58c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626d2a231c8afc3146ac335aa661106a5d7f9658a00ce788610a682c08ba58c7->enter($__internal_626d2a231c8afc3146ac335aa661106a5d7f9658a00ce788610a682c08ba58c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_a31d58fd0c727a7f6bbdadefc8d5448bee56361b4c4685d5eafa0023dcb4a361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31d58fd0c727a7f6bbdadefc8d5448bee56361b4c4685d5eafa0023dcb4a361->enter($__internal_a31d58fd0c727a7f6bbdadefc8d5448bee56361b4c4685d5eafa0023dcb4a361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_626d2a231c8afc3146ac335aa661106a5d7f9658a00ce788610a682c08ba58c7->leave($__internal_626d2a231c8afc3146ac335aa661106a5d7f9658a00ce788610a682c08ba58c7_prof);

        
        $__internal_a31d58fd0c727a7f6bbdadefc8d5448bee56361b4c4685d5eafa0023dcb4a361->leave($__internal_a31d58fd0c727a7f6bbdadefc8d5448bee56361b4c4685d5eafa0023dcb4a361_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0077bdde79dc6d0b9895ef0538a76fccc882c27626a2ce6a93388dbf6630ee3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0077bdde79dc6d0b9895ef0538a76fccc882c27626a2ce6a93388dbf6630ee3b->enter($__internal_0077bdde79dc6d0b9895ef0538a76fccc882c27626a2ce6a93388dbf6630ee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bc9c653f531aa1f349cb19b5e689f05812c3acb26ce824c12f70534826cefbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc9c653f531aa1f349cb19b5e689f05812c3acb26ce824c12f70534826cefbd->enter($__internal_8bc9c653f531aa1f349cb19b5e689f05812c3acb26ce824c12f70534826cefbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8bc9c653f531aa1f349cb19b5e689f05812c3acb26ce824c12f70534826cefbd->leave($__internal_8bc9c653f531aa1f349cb19b5e689f05812c3acb26ce824c12f70534826cefbd_prof);

        
        $__internal_0077bdde79dc6d0b9895ef0538a76fccc882c27626a2ce6a93388dbf6630ee3b->leave($__internal_0077bdde79dc6d0b9895ef0538a76fccc882c27626a2ce6a93388dbf6630ee3b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9100dafb23bc6ac86c87a96dcd4d97e31a83e105f6a44752fd62f13f6d0229cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9100dafb23bc6ac86c87a96dcd4d97e31a83e105f6a44752fd62f13f6d0229cc->enter($__internal_9100dafb23bc6ac86c87a96dcd4d97e31a83e105f6a44752fd62f13f6d0229cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48fa56a0bee7d91a9677bc021bd55b7aa7d89f4dec68ddc188e4cf78880788c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fa56a0bee7d91a9677bc021bd55b7aa7d89f4dec68ddc188e4cf78880788c3->enter($__internal_48fa56a0bee7d91a9677bc021bd55b7aa7d89f4dec68ddc188e4cf78880788c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_48fa56a0bee7d91a9677bc021bd55b7aa7d89f4dec68ddc188e4cf78880788c3->leave($__internal_48fa56a0bee7d91a9677bc021bd55b7aa7d89f4dec68ddc188e4cf78880788c3_prof);

        
        $__internal_9100dafb23bc6ac86c87a96dcd4d97e31a83e105f6a44752fd62f13f6d0229cc->leave($__internal_9100dafb23bc6ac86c87a96dcd4d97e31a83e105f6a44752fd62f13f6d0229cc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3497d6cdcc82b83e837efbecfc4a9b4c094c55b1776ed64c6fa72c3d5986913d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3497d6cdcc82b83e837efbecfc4a9b4c094c55b1776ed64c6fa72c3d5986913d->enter($__internal_3497d6cdcc82b83e837efbecfc4a9b4c094c55b1776ed64c6fa72c3d5986913d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12b6854afe42fc73cc7f5de3d09aa6a4b0b6dddc87fd4240e4c4ce67c7e2821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b6854afe42fc73cc7f5de3d09aa6a4b0b6dddc87fd4240e4c4ce67c7e2821a->enter($__internal_12b6854afe42fc73cc7f5de3d09aa6a4b0b6dddc87fd4240e4c4ce67c7e2821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12b6854afe42fc73cc7f5de3d09aa6a4b0b6dddc87fd4240e4c4ce67c7e2821a->leave($__internal_12b6854afe42fc73cc7f5de3d09aa6a4b0b6dddc87fd4240e4c4ce67c7e2821a_prof);

        
        $__internal_3497d6cdcc82b83e837efbecfc4a9b4c094c55b1776ed64c6fa72c3d5986913d->leave($__internal_3497d6cdcc82b83e837efbecfc4a9b4c094c55b1776ed64c6fa72c3d5986913d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
