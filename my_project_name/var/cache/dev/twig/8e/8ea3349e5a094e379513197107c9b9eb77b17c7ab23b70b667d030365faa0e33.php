<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d2c6051287dec7240518ff24fd973bb0bbe6429f52ab90508fb4aa3532856899 extends Twig_Template
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
        $__internal_942176eb8985082d9e5abc9639770d05358cef948457504646ca68e601505e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942176eb8985082d9e5abc9639770d05358cef948457504646ca68e601505e9e->enter($__internal_942176eb8985082d9e5abc9639770d05358cef948457504646ca68e601505e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ed04d9df05a1b8e8bdb579fdaf5a75d5e662d547de3da09563413f58960f4015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04d9df05a1b8e8bdb579fdaf5a75d5e662d547de3da09563413f58960f4015->enter($__internal_ed04d9df05a1b8e8bdb579fdaf5a75d5e662d547de3da09563413f58960f4015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_942176eb8985082d9e5abc9639770d05358cef948457504646ca68e601505e9e->leave($__internal_942176eb8985082d9e5abc9639770d05358cef948457504646ca68e601505e9e_prof);

        
        $__internal_ed04d9df05a1b8e8bdb579fdaf5a75d5e662d547de3da09563413f58960f4015->leave($__internal_ed04d9df05a1b8e8bdb579fdaf5a75d5e662d547de3da09563413f58960f4015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
