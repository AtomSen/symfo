<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9ecd932e5d724ac01bd34c6c7859d2c76df6788246a7764cb84aec5455501f11 extends Twig_Template
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
        $__internal_f02c9b19788549f4826b126c28eaf685176178288d53518fcc5a01bc9801c0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02c9b19788549f4826b126c28eaf685176178288d53518fcc5a01bc9801c0d8->enter($__internal_f02c9b19788549f4826b126c28eaf685176178288d53518fcc5a01bc9801c0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c6d6e5cf8880dbbe60343ebb2cbf36da4bfd439736e353692c2b86df69d0a82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d6e5cf8880dbbe60343ebb2cbf36da4bfd439736e353692c2b86df69d0a82a->enter($__internal_c6d6e5cf8880dbbe60343ebb2cbf36da4bfd439736e353692c2b86df69d0a82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f02c9b19788549f4826b126c28eaf685176178288d53518fcc5a01bc9801c0d8->leave($__internal_f02c9b19788549f4826b126c28eaf685176178288d53518fcc5a01bc9801c0d8_prof);

        
        $__internal_c6d6e5cf8880dbbe60343ebb2cbf36da4bfd439736e353692c2b86df69d0a82a->leave($__internal_c6d6e5cf8880dbbe60343ebb2cbf36da4bfd439736e353692c2b86df69d0a82a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
