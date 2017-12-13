<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_2ae94cca8559cfa40adb470c5f6f82e40ab6e8e3c23481a310521432dc01854e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae94cca8559cfa40adb470c5f6f82e40ab6e8e3c23481a310521432dc01854e->enter($__internal_2ae94cca8559cfa40adb470c5f6f82e40ab6e8e3c23481a310521432dc01854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dc78f655319cfef737ee2acc648fc6dbc4c20be69b9d6a1d50c46b17579bb5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc78f655319cfef737ee2acc648fc6dbc4c20be69b9d6a1d50c46b17579bb5be->enter($__internal_dc78f655319cfef737ee2acc648fc6dbc4c20be69b9d6a1d50c46b17579bb5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2ae94cca8559cfa40adb470c5f6f82e40ab6e8e3c23481a310521432dc01854e->leave($__internal_2ae94cca8559cfa40adb470c5f6f82e40ab6e8e3c23481a310521432dc01854e_prof);

        
        $__internal_dc78f655319cfef737ee2acc648fc6dbc4c20be69b9d6a1d50c46b17579bb5be->leave($__internal_dc78f655319cfef737ee2acc648fc6dbc4c20be69b9d6a1d50c46b17579bb5be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
