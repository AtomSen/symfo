<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ab1c6c4208a205987a23ebcb3ca2eff89e6f04e3b9eef954130e8647e804a2b extends Twig_Template
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
        $__internal_c63a7b3d592253f82618a5a569078beb604aed20e5a991dab5a67e610c75bfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63a7b3d592253f82618a5a569078beb604aed20e5a991dab5a67e610c75bfda->enter($__internal_c63a7b3d592253f82618a5a569078beb604aed20e5a991dab5a67e610c75bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_52126f17cc9a73eda41e17f80ec0d5acb54f42e09b2007b86bbf6509806c9359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52126f17cc9a73eda41e17f80ec0d5acb54f42e09b2007b86bbf6509806c9359->enter($__internal_52126f17cc9a73eda41e17f80ec0d5acb54f42e09b2007b86bbf6509806c9359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c63a7b3d592253f82618a5a569078beb604aed20e5a991dab5a67e610c75bfda->leave($__internal_c63a7b3d592253f82618a5a569078beb604aed20e5a991dab5a67e610c75bfda_prof);

        
        $__internal_52126f17cc9a73eda41e17f80ec0d5acb54f42e09b2007b86bbf6509806c9359->leave($__internal_52126f17cc9a73eda41e17f80ec0d5acb54f42e09b2007b86bbf6509806c9359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
