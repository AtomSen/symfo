<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3078bb444171a393edbd00fe3d1d2b94f0089de32c340d08af82a30085989f58 extends Twig_Template
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
        $__internal_8c4a469d77fe995886c7bfa1d3cac77899639b3eba1ecfbc5c46730db58227d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4a469d77fe995886c7bfa1d3cac77899639b3eba1ecfbc5c46730db58227d3->enter($__internal_8c4a469d77fe995886c7bfa1d3cac77899639b3eba1ecfbc5c46730db58227d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c79f389ea0e0b3b70cd49bc071d162a168c3604f4a4b6b1716fe0c9730f8c3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79f389ea0e0b3b70cd49bc071d162a168c3604f4a4b6b1716fe0c9730f8c3d4->enter($__internal_c79f389ea0e0b3b70cd49bc071d162a168c3604f4a4b6b1716fe0c9730f8c3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8c4a469d77fe995886c7bfa1d3cac77899639b3eba1ecfbc5c46730db58227d3->leave($__internal_8c4a469d77fe995886c7bfa1d3cac77899639b3eba1ecfbc5c46730db58227d3_prof);

        
        $__internal_c79f389ea0e0b3b70cd49bc071d162a168c3604f4a4b6b1716fe0c9730f8c3d4->leave($__internal_c79f389ea0e0b3b70cd49bc071d162a168c3604f4a4b6b1716fe0c9730f8c3d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
