<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_2c7dc7d7541eefd0646d5dade5ad68e3c8ba177a8aeb8723839cbbd4610d6383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7dc7d7541eefd0646d5dade5ad68e3c8ba177a8aeb8723839cbbd4610d6383->enter($__internal_2c7dc7d7541eefd0646d5dade5ad68e3c8ba177a8aeb8723839cbbd4610d6383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ac727a2bfe2b575dbec2c84f425f8506b7dbbf693b10b46d0e534ba7f38e4bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac727a2bfe2b575dbec2c84f425f8506b7dbbf693b10b46d0e534ba7f38e4bee->enter($__internal_ac727a2bfe2b575dbec2c84f425f8506b7dbbf693b10b46d0e534ba7f38e4bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2c7dc7d7541eefd0646d5dade5ad68e3c8ba177a8aeb8723839cbbd4610d6383->leave($__internal_2c7dc7d7541eefd0646d5dade5ad68e3c8ba177a8aeb8723839cbbd4610d6383_prof);

        
        $__internal_ac727a2bfe2b575dbec2c84f425f8506b7dbbf693b10b46d0e534ba7f38e4bee->leave($__internal_ac727a2bfe2b575dbec2c84f425f8506b7dbbf693b10b46d0e534ba7f38e4bee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
