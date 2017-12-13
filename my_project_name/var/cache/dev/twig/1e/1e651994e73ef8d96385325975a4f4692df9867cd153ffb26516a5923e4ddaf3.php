<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32c1e2dd51908b999fd6d04a140dfe953f2babe834a00a161265969b76654424 extends Twig_Template
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
        $__internal_48252f90fe3bc21c749cd2c25ffac7ba0bc2feea84d97265bece7e95f67a3c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48252f90fe3bc21c749cd2c25ffac7ba0bc2feea84d97265bece7e95f67a3c7d->enter($__internal_48252f90fe3bc21c749cd2c25ffac7ba0bc2feea84d97265bece7e95f67a3c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_97c8a3892f9e3f17650153c36f95026650e7f8e1f8282761dba7611760d865c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c8a3892f9e3f17650153c36f95026650e7f8e1f8282761dba7611760d865c8->enter($__internal_97c8a3892f9e3f17650153c36f95026650e7f8e1f8282761dba7611760d865c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_48252f90fe3bc21c749cd2c25ffac7ba0bc2feea84d97265bece7e95f67a3c7d->leave($__internal_48252f90fe3bc21c749cd2c25ffac7ba0bc2feea84d97265bece7e95f67a3c7d_prof);

        
        $__internal_97c8a3892f9e3f17650153c36f95026650e7f8e1f8282761dba7611760d865c8->leave($__internal_97c8a3892f9e3f17650153c36f95026650e7f8e1f8282761dba7611760d865c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
