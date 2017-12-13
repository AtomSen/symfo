<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_193e39f86a8b888ab35e7bd17c6d262920b13f4176710f295679b4a2c70b9de2 extends Twig_Template
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
        $__internal_9a158ae1cdcf3a0f1ed19c1c05deb5fbcfd379717b581db5640bb1e85ee2557f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a158ae1cdcf3a0f1ed19c1c05deb5fbcfd379717b581db5640bb1e85ee2557f->enter($__internal_9a158ae1cdcf3a0f1ed19c1c05deb5fbcfd379717b581db5640bb1e85ee2557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7cd7c44b1620c06df3ec8e69fe7690327081631c6d2a0eb2ad3c3d5b88945f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd7c44b1620c06df3ec8e69fe7690327081631c6d2a0eb2ad3c3d5b88945f9e->enter($__internal_7cd7c44b1620c06df3ec8e69fe7690327081631c6d2a0eb2ad3c3d5b88945f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9a158ae1cdcf3a0f1ed19c1c05deb5fbcfd379717b581db5640bb1e85ee2557f->leave($__internal_9a158ae1cdcf3a0f1ed19c1c05deb5fbcfd379717b581db5640bb1e85ee2557f_prof);

        
        $__internal_7cd7c44b1620c06df3ec8e69fe7690327081631c6d2a0eb2ad3c3d5b88945f9e->leave($__internal_7cd7c44b1620c06df3ec8e69fe7690327081631c6d2a0eb2ad3c3d5b88945f9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
