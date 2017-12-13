<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bc7e7a784d133918f6e03109f05e39011e458d777d67588a14a7457d3057c06 extends Twig_Template
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
        $__internal_ca4765656a95b682c28b1d36f26cd83f3d0eab1fb34597fac6be01125b6d6bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4765656a95b682c28b1d36f26cd83f3d0eab1fb34597fac6be01125b6d6bd0->enter($__internal_ca4765656a95b682c28b1d36f26cd83f3d0eab1fb34597fac6be01125b6d6bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_eb59b3eb000f3143aae1c793f6372246bf5025c057d6e3e5be1d1784260aa6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb59b3eb000f3143aae1c793f6372246bf5025c057d6e3e5be1d1784260aa6eb->enter($__internal_eb59b3eb000f3143aae1c793f6372246bf5025c057d6e3e5be1d1784260aa6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ca4765656a95b682c28b1d36f26cd83f3d0eab1fb34597fac6be01125b6d6bd0->leave($__internal_ca4765656a95b682c28b1d36f26cd83f3d0eab1fb34597fac6be01125b6d6bd0_prof);

        
        $__internal_eb59b3eb000f3143aae1c793f6372246bf5025c057d6e3e5be1d1784260aa6eb->leave($__internal_eb59b3eb000f3143aae1c793f6372246bf5025c057d6e3e5be1d1784260aa6eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
