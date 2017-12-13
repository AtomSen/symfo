<?php

/* lucky/number.html.twig */
class __TwigTemplate_19e065b3713ef7406090216b07e9096475aa744bfcbc964dfb87c4ad59f0afd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55c7baabe8b64e32c62f6dcda13135068c7b9520f93c70c29a16214e69aa15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55c7baabe8b64e32c62f6dcda13135068c7b9520f93c70c29a16214e69aa15c->enter($__internal_a55c7baabe8b64e32c62f6dcda13135068c7b9520f93c70c29a16214e69aa15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_0a7b945faac3938c0fa55af27c716ede46fc833c4c80dee2b82a1e251767a4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7b945faac3938c0fa55af27c716ede46fc833c4c80dee2b82a1e251767a4a7->enter($__internal_0a7b945faac3938c0fa55af27c716ede46fc833c4c80dee2b82a1e251767a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo " </h1>


</body>
</html>
";
        
        $__internal_a55c7baabe8b64e32c62f6dcda13135068c7b9520f93c70c29a16214e69aa15c->leave($__internal_a55c7baabe8b64e32c62f6dcda13135068c7b9520f93c70c29a16214e69aa15c_prof);

        
        $__internal_0a7b945faac3938c0fa55af27c716ede46fc833c4c80dee2b82a1e251767a4a7->leave($__internal_0a7b945faac3938c0fa55af27c716ede46fc833c4c80dee2b82a1e251767a4a7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ea0cb3a20fe6a851842437ae2fc0d7566c65f5fa558496744fd25829aec0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ea0cb3a20fe6a851842437ae2fc0d7566c65f5fa558496744fd25829aec0fa->enter($__internal_b9ea0cb3a20fe6a851842437ae2fc0d7566c65f5fa558496744fd25829aec0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c9ae083b11638a4067609b026af6a58953ef8415030c2051eda221149e92696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9ae083b11638a4067609b026af6a58953ef8415030c2051eda221149e92696->enter($__internal_1c9ae083b11638a4067609b026af6a58953ef8415030c2051eda221149e92696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c9ae083b11638a4067609b026af6a58953ef8415030c2051eda221149e92696->leave($__internal_1c9ae083b11638a4067609b026af6a58953ef8415030c2051eda221149e92696_prof);

        
        $__internal_b9ea0cb3a20fe6a851842437ae2fc0d7566c65f5fa558496744fd25829aec0fa->leave($__internal_b9ea0cb3a20fe6a851842437ae2fc0d7566c65f5fa558496744fd25829aec0fa_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5c2ea9734bc8c96e0866e0fbf855d46f180e7983970a4f4e01001d6d69fb96a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c2ea9734bc8c96e0866e0fbf855d46f180e7983970a4f4e01001d6d69fb96a->enter($__internal_f5c2ea9734bc8c96e0866e0fbf855d46f180e7983970a4f4e01001d6d69fb96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99bedc3e2b7d114f0e42c34551f23897636cd422ffedcfa595ebf4d3422fb85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bedc3e2b7d114f0e42c34551f23897636cd422ffedcfa595ebf4d3422fb85c->enter($__internal_99bedc3e2b7d114f0e42c34551f23897636cd422ffedcfa595ebf4d3422fb85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99bedc3e2b7d114f0e42c34551f23897636cd422ffedcfa595ebf4d3422fb85c->leave($__internal_99bedc3e2b7d114f0e42c34551f23897636cd422ffedcfa595ebf4d3422fb85c_prof);

        
        $__internal_f5c2ea9734bc8c96e0866e0fbf855d46f180e7983970a4f4e01001d6d69fb96a->leave($__internal_f5c2ea9734bc8c96e0866e0fbf855d46f180e7983970a4f4e01001d6d69fb96a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c587e47fa9f7be289319b75736df90dd8a943701dc0908e5751c6953fdbef41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c587e47fa9f7be289319b75736df90dd8a943701dc0908e5751c6953fdbef41f->enter($__internal_c587e47fa9f7be289319b75736df90dd8a943701dc0908e5751c6953fdbef41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5126f42417d8de7b28240d9f5e929e396bce726e4b190140aadca57ee1210cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5126f42417d8de7b28240d9f5e929e396bce726e4b190140aadca57ee1210cc->enter($__internal_f5126f42417d8de7b28240d9f5e929e396bce726e4b190140aadca57ee1210cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5126f42417d8de7b28240d9f5e929e396bce726e4b190140aadca57ee1210cc->leave($__internal_f5126f42417d8de7b28240d9f5e929e396bce726e4b190140aadca57ee1210cc_prof);

        
        $__internal_c587e47fa9f7be289319b75736df90dd8a943701dc0908e5751c6953fdbef41f->leave($__internal_c587e47fa9f7be289319b75736df90dd8a943701dc0908e5751c6953fdbef41f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_feb3aef95a972ef352267cdc7c6f5560991db6ea5da05e3c841c0f71ccb82119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb3aef95a972ef352267cdc7c6f5560991db6ea5da05e3c841c0f71ccb82119->enter($__internal_feb3aef95a972ef352267cdc7c6f5560991db6ea5da05e3c841c0f71ccb82119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f44f84959ef98126bd980efdec1f6ef9e6cd3688e7e84dcc1bcdf01513bf815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44f84959ef98126bd980efdec1f6ef9e6cd3688e7e84dcc1bcdf01513bf815->enter($__internal_2f44f84959ef98126bd980efdec1f6ef9e6cd3688e7e84dcc1bcdf01513bf815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f44f84959ef98126bd980efdec1f6ef9e6cd3688e7e84dcc1bcdf01513bf815->leave($__internal_2f44f84959ef98126bd980efdec1f6ef9e6cd3688e7e84dcc1bcdf01513bf815_prof);

        
        $__internal_feb3aef95a972ef352267cdc7c6f5560991db6ea5da05e3c841c0f71ccb82119->leave($__internal_feb3aef95a972ef352267cdc7c6f5560991db6ea5da05e3c841c0f71ccb82119_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 7,  69 => 6,  52 => 13,  50 => 12,  48 => 11,  41 => 8,  39 => 7,  35 => 6,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<h1>{{ number }} </h1>


</body>
</html>
", "lucky/number.html.twig", "D:\\symfony\\my_project_name\\app\\Resources\\views\\lucky\\number.html.twig");
    }
}
