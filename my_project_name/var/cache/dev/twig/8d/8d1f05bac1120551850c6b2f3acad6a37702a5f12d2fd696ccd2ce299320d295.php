<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_c5d1e0773e76de5f008e8d666e809dd3a50a5ad3a2577fbb308a2bb0ec16316f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d1e0773e76de5f008e8d666e809dd3a50a5ad3a2577fbb308a2bb0ec16316f->enter($__internal_c5d1e0773e76de5f008e8d666e809dd3a50a5ad3a2577fbb308a2bb0ec16316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fc6e02553712161b39dad3ebc4abcf42bfe9dd953a75b27592386e0a02f528dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6e02553712161b39dad3ebc4abcf42bfe9dd953a75b27592386e0a02f528dd->enter($__internal_fc6e02553712161b39dad3ebc4abcf42bfe9dd953a75b27592386e0a02f528dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c5d1e0773e76de5f008e8d666e809dd3a50a5ad3a2577fbb308a2bb0ec16316f->leave($__internal_c5d1e0773e76de5f008e8d666e809dd3a50a5ad3a2577fbb308a2bb0ec16316f_prof);

        
        $__internal_fc6e02553712161b39dad3ebc4abcf42bfe9dd953a75b27592386e0a02f528dd->leave($__internal_fc6e02553712161b39dad3ebc4abcf42bfe9dd953a75b27592386e0a02f528dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_592c07bf822ac80c3862770fd3d726dd04718d83becb2959f3cf195363ed5e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592c07bf822ac80c3862770fd3d726dd04718d83becb2959f3cf195363ed5e85->enter($__internal_592c07bf822ac80c3862770fd3d726dd04718d83becb2959f3cf195363ed5e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9408868f1db37ef77ef503528d11535c6e8fd5684cef03fa132abf5a62e0aa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9408868f1db37ef77ef503528d11535c6e8fd5684cef03fa132abf5a62e0aa39->enter($__internal_9408868f1db37ef77ef503528d11535c6e8fd5684cef03fa132abf5a62e0aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9408868f1db37ef77ef503528d11535c6e8fd5684cef03fa132abf5a62e0aa39->leave($__internal_9408868f1db37ef77ef503528d11535c6e8fd5684cef03fa132abf5a62e0aa39_prof);

        
        $__internal_592c07bf822ac80c3862770fd3d726dd04718d83becb2959f3cf195363ed5e85->leave($__internal_592c07bf822ac80c3862770fd3d726dd04718d83becb2959f3cf195363ed5e85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d934a93f30d9a85f3898acae526e5beec204951fde204f08a1877be4f724bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d934a93f30d9a85f3898acae526e5beec204951fde204f08a1877be4f724bdc->enter($__internal_9d934a93f30d9a85f3898acae526e5beec204951fde204f08a1877be4f724bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83b644713ce333ced9f127264139cea1aa39689b3597e99fbb24908de520e0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b644713ce333ced9f127264139cea1aa39689b3597e99fbb24908de520e0e3->enter($__internal_83b644713ce333ced9f127264139cea1aa39689b3597e99fbb24908de520e0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83b644713ce333ced9f127264139cea1aa39689b3597e99fbb24908de520e0e3->leave($__internal_83b644713ce333ced9f127264139cea1aa39689b3597e99fbb24908de520e0e3_prof);

        
        $__internal_9d934a93f30d9a85f3898acae526e5beec204951fde204f08a1877be4f724bdc->leave($__internal_9d934a93f30d9a85f3898acae526e5beec204951fde204f08a1877be4f724bdc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a1aff4455892a64af407349c0f0e398dfff156e829cb1071f90423d81fe977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a1aff4455892a64af407349c0f0e398dfff156e829cb1071f90423d81fe977->enter($__internal_68a1aff4455892a64af407349c0f0e398dfff156e829cb1071f90423d81fe977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c18795fa3b4e59499d6b00105a0d6606470850cafd74d47a9d8bc13dfa6a85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c18795fa3b4e59499d6b00105a0d6606470850cafd74d47a9d8bc13dfa6a85e->enter($__internal_9c18795fa3b4e59499d6b00105a0d6606470850cafd74d47a9d8bc13dfa6a85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c18795fa3b4e59499d6b00105a0d6606470850cafd74d47a9d8bc13dfa6a85e->leave($__internal_9c18795fa3b4e59499d6b00105a0d6606470850cafd74d47a9d8bc13dfa6a85e_prof);

        
        $__internal_68a1aff4455892a64af407349c0f0e398dfff156e829cb1071f90423d81fe977->leave($__internal_68a1aff4455892a64af407349c0f0e398dfff156e829cb1071f90423d81fe977_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f3b9a81d85d8181c02427fe6345808e0064794e0aa44e24ecca4f88d8469d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3b9a81d85d8181c02427fe6345808e0064794e0aa44e24ecca4f88d8469d78->enter($__internal_5f3b9a81d85d8181c02427fe6345808e0064794e0aa44e24ecca4f88d8469d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_466f1e23c606e087030e5f9f54ac003023d02e6f78134d5992b963784efc368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466f1e23c606e087030e5f9f54ac003023d02e6f78134d5992b963784efc368f->enter($__internal_466f1e23c606e087030e5f9f54ac003023d02e6f78134d5992b963784efc368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_466f1e23c606e087030e5f9f54ac003023d02e6f78134d5992b963784efc368f->leave($__internal_466f1e23c606e087030e5f9f54ac003023d02e6f78134d5992b963784efc368f_prof);

        
        $__internal_5f3b9a81d85d8181c02427fe6345808e0064794e0aa44e24ecca4f88d8469d78->leave($__internal_5f3b9a81d85d8181c02427fe6345808e0064794e0aa44e24ecca4f88d8469d78_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\symfony\\my_project_name\\app\\Resources\\views\\base.html.twig");
    }
}
