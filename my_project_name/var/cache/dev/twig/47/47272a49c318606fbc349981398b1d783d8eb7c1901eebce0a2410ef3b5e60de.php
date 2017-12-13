<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6e4570fad85f6f3092700e80b4da0b39d79996b97c2a68ef92cae4c383c27b16 extends Twig_Template
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
        $__internal_11cd1af71a063e04245d89d7ef0353b12fa3749d50d6a16d8c9673fd8dcc3a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cd1af71a063e04245d89d7ef0353b12fa3749d50d6a16d8c9673fd8dcc3a4b->enter($__internal_11cd1af71a063e04245d89d7ef0353b12fa3749d50d6a16d8c9673fd8dcc3a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9de3a4d416b9d338ffa6c8123fb8f9f5ffad7ed170018addd60781763ff6bcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de3a4d416b9d338ffa6c8123fb8f9f5ffad7ed170018addd60781763ff6bcc9->enter($__internal_9de3a4d416b9d338ffa6c8123fb8f9f5ffad7ed170018addd60781763ff6bcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_11cd1af71a063e04245d89d7ef0353b12fa3749d50d6a16d8c9673fd8dcc3a4b->leave($__internal_11cd1af71a063e04245d89d7ef0353b12fa3749d50d6a16d8c9673fd8dcc3a4b_prof);

        
        $__internal_9de3a4d416b9d338ffa6c8123fb8f9f5ffad7ed170018addd60781763ff6bcc9->leave($__internal_9de3a4d416b9d338ffa6c8123fb8f9f5ffad7ed170018addd60781763ff6bcc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
