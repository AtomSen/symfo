<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
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
        $__internal_433f379c5b2229bf0304e3a3028a44212a0278a33e6e2cc17b62963964a0a4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433f379c5b2229bf0304e3a3028a44212a0278a33e6e2cc17b62963964a0a4e6->enter($__internal_433f379c5b2229bf0304e3a3028a44212a0278a33e6e2cc17b62963964a0a4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0483998891ea3f5ca0506389e95e8fde60827d29b9948cae5dd30b743e0601a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0483998891ea3f5ca0506389e95e8fde60827d29b9948cae5dd30b743e0601a0->enter($__internal_0483998891ea3f5ca0506389e95e8fde60827d29b9948cae5dd30b743e0601a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_433f379c5b2229bf0304e3a3028a44212a0278a33e6e2cc17b62963964a0a4e6->leave($__internal_433f379c5b2229bf0304e3a3028a44212a0278a33e6e2cc17b62963964a0a4e6_prof);

        
        $__internal_0483998891ea3f5ca0506389e95e8fde60827d29b9948cae5dd30b743e0601a0->leave($__internal_0483998891ea3f5ca0506389e95e8fde60827d29b9948cae5dd30b743e0601a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f42859886166880ce1f42f6acb54f5270e63b20d498acf3d8f297031992c68f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42859886166880ce1f42f6acb54f5270e63b20d498acf3d8f297031992c68f3->enter($__internal_f42859886166880ce1f42f6acb54f5270e63b20d498acf3d8f297031992c68f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12cd7abe3572134f45f523f61fe56555e2d5ac0d499f519950f522ca11341649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cd7abe3572134f45f523f61fe56555e2d5ac0d499f519950f522ca11341649->enter($__internal_12cd7abe3572134f45f523f61fe56555e2d5ac0d499f519950f522ca11341649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_12cd7abe3572134f45f523f61fe56555e2d5ac0d499f519950f522ca11341649->leave($__internal_12cd7abe3572134f45f523f61fe56555e2d5ac0d499f519950f522ca11341649_prof);

        
        $__internal_f42859886166880ce1f42f6acb54f5270e63b20d498acf3d8f297031992c68f3->leave($__internal_f42859886166880ce1f42f6acb54f5270e63b20d498acf3d8f297031992c68f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
