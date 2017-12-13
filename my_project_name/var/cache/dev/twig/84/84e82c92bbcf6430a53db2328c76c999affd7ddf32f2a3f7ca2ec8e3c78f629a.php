<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_50b2f5cb3123d7a774907482aaf5174e0ae5616512281d42e34bb951c80647b8 extends Twig_Template
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
        $__internal_91d1cbc41b084ddf2fb1be3e9aa7948a0a18ed5cc3feb66097fa4f61f7d4dbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d1cbc41b084ddf2fb1be3e9aa7948a0a18ed5cc3feb66097fa4f61f7d4dbcc->enter($__internal_91d1cbc41b084ddf2fb1be3e9aa7948a0a18ed5cc3feb66097fa4f61f7d4dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_772a6d4dbc14d18dff781f85d999af69f245d9c90990cb6a58187462672396f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772a6d4dbc14d18dff781f85d999af69f245d9c90990cb6a58187462672396f9->enter($__internal_772a6d4dbc14d18dff781f85d999af69f245d9c90990cb6a58187462672396f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_91d1cbc41b084ddf2fb1be3e9aa7948a0a18ed5cc3feb66097fa4f61f7d4dbcc->leave($__internal_91d1cbc41b084ddf2fb1be3e9aa7948a0a18ed5cc3feb66097fa4f61f7d4dbcc_prof);

        
        $__internal_772a6d4dbc14d18dff781f85d999af69f245d9c90990cb6a58187462672396f9->leave($__internal_772a6d4dbc14d18dff781f85d999af69f245d9c90990cb6a58187462672396f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
