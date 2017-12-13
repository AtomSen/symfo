<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cdcc2c5aebcb16f3da3b8fa293d042feab5f04236228cc486549b6afa9a78996 extends Twig_Template
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
        $__internal_654ee9e2b901527e5a2bde4ad9fa5db48fdc75ddd76d76f9aba10dec42c1af7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654ee9e2b901527e5a2bde4ad9fa5db48fdc75ddd76d76f9aba10dec42c1af7a->enter($__internal_654ee9e2b901527e5a2bde4ad9fa5db48fdc75ddd76d76f9aba10dec42c1af7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4a214ace6a30e32b7b5735abeb521cae2e1fe3f2e1203f548de9375e57471c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a214ace6a30e32b7b5735abeb521cae2e1fe3f2e1203f548de9375e57471c64->enter($__internal_4a214ace6a30e32b7b5735abeb521cae2e1fe3f2e1203f548de9375e57471c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_654ee9e2b901527e5a2bde4ad9fa5db48fdc75ddd76d76f9aba10dec42c1af7a->leave($__internal_654ee9e2b901527e5a2bde4ad9fa5db48fdc75ddd76d76f9aba10dec42c1af7a_prof);

        
        $__internal_4a214ace6a30e32b7b5735abeb521cae2e1fe3f2e1203f548de9375e57471c64->leave($__internal_4a214ace6a30e32b7b5735abeb521cae2e1fe3f2e1203f548de9375e57471c64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
