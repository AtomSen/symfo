<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c96c430f0072b2fcc37956bb389027312cb9f8b4cdc62770bbb42cb023c0b3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f6a22ed24b420e1774bd08b702a7e35a7677d783e05ffc05a3b96131be0d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f6a22ed24b420e1774bd08b702a7e35a7677d783e05ffc05a3b96131be0d0a->enter($__internal_02f6a22ed24b420e1774bd08b702a7e35a7677d783e05ffc05a3b96131be0d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4e1c85dda807a2f4340097658be5d7b7ad4648f05bb51bc08a88a64a1162f916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1c85dda807a2f4340097658be5d7b7ad4648f05bb51bc08a88a64a1162f916->enter($__internal_4e1c85dda807a2f4340097658be5d7b7ad4648f05bb51bc08a88a64a1162f916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_02f6a22ed24b420e1774bd08b702a7e35a7677d783e05ffc05a3b96131be0d0a->leave($__internal_02f6a22ed24b420e1774bd08b702a7e35a7677d783e05ffc05a3b96131be0d0a_prof);

        
        $__internal_4e1c85dda807a2f4340097658be5d7b7ad4648f05bb51bc08a88a64a1162f916->leave($__internal_4e1c85dda807a2f4340097658be5d7b7ad4648f05bb51bc08a88a64a1162f916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
