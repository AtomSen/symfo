<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd24646232e48fd2fc9accfd4ad164d58b3039bddc988a86b788c3e859a1070a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd24646232e48fd2fc9accfd4ad164d58b3039bddc988a86b788c3e859a1070a->enter($__internal_cd24646232e48fd2fc9accfd4ad164d58b3039bddc988a86b788c3e859a1070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f403051ae802414f557bfa6e6dc6b61f45d886894cff4841cec42382ec9db6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f403051ae802414f557bfa6e6dc6b61f45d886894cff4841cec42382ec9db6f4->enter($__internal_f403051ae802414f557bfa6e6dc6b61f45d886894cff4841cec42382ec9db6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cd24646232e48fd2fc9accfd4ad164d58b3039bddc988a86b788c3e859a1070a->leave($__internal_cd24646232e48fd2fc9accfd4ad164d58b3039bddc988a86b788c3e859a1070a_prof);

        
        $__internal_f403051ae802414f557bfa6e6dc6b61f45d886894cff4841cec42382ec9db6f4->leave($__internal_f403051ae802414f557bfa6e6dc6b61f45d886894cff4841cec42382ec9db6f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6db9234a5943a3c3ff3e81f2413b95adf3d2cc1e63253acdb8ef119c9b15853c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db9234a5943a3c3ff3e81f2413b95adf3d2cc1e63253acdb8ef119c9b15853c->enter($__internal_6db9234a5943a3c3ff3e81f2413b95adf3d2cc1e63253acdb8ef119c9b15853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e90b2306df43096fa629fc064a689a874a88df4b979fc4574877a1c2af4bcff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90b2306df43096fa629fc064a689a874a88df4b979fc4574877a1c2af4bcff3->enter($__internal_e90b2306df43096fa629fc064a689a874a88df4b979fc4574877a1c2af4bcff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e90b2306df43096fa629fc064a689a874a88df4b979fc4574877a1c2af4bcff3->leave($__internal_e90b2306df43096fa629fc064a689a874a88df4b979fc4574877a1c2af4bcff3_prof);

        
        $__internal_6db9234a5943a3c3ff3e81f2413b95adf3d2cc1e63253acdb8ef119c9b15853c->leave($__internal_6db9234a5943a3c3ff3e81f2413b95adf3d2cc1e63253acdb8ef119c9b15853c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
