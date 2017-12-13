<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_2098009fa537c8da9f0375ce46c5db8903cfa0029761435ca3ca95fb79d14cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2098009fa537c8da9f0375ce46c5db8903cfa0029761435ca3ca95fb79d14cf5->enter($__internal_2098009fa537c8da9f0375ce46c5db8903cfa0029761435ca3ca95fb79d14cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4f07ccc0d0d6a42385db230f357200f413990d631d61264a81e2c92ae8ba5415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f07ccc0d0d6a42385db230f357200f413990d631d61264a81e2c92ae8ba5415->enter($__internal_4f07ccc0d0d6a42385db230f357200f413990d631d61264a81e2c92ae8ba5415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2098009fa537c8da9f0375ce46c5db8903cfa0029761435ca3ca95fb79d14cf5->leave($__internal_2098009fa537c8da9f0375ce46c5db8903cfa0029761435ca3ca95fb79d14cf5_prof);

        
        $__internal_4f07ccc0d0d6a42385db230f357200f413990d631d61264a81e2c92ae8ba5415->leave($__internal_4f07ccc0d0d6a42385db230f357200f413990d631d61264a81e2c92ae8ba5415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
