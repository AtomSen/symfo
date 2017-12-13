<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9ba68c83c2c30f20ee1f3c04d495bd7f8d503cc4c3445d9733f151ba3ac36a92 extends Twig_Template
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
        $__internal_09045efa79f1c3efb5a9f235dd8c79e46d2f673bc4c947c23636ff38edd9f1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09045efa79f1c3efb5a9f235dd8c79e46d2f673bc4c947c23636ff38edd9f1f4->enter($__internal_09045efa79f1c3efb5a9f235dd8c79e46d2f673bc4c947c23636ff38edd9f1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_074c59aeea91005d9ac5fb93a0098d0bf1f6a0fc3bafdfc422c6a94a48b571dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074c59aeea91005d9ac5fb93a0098d0bf1f6a0fc3bafdfc422c6a94a48b571dc->enter($__internal_074c59aeea91005d9ac5fb93a0098d0bf1f6a0fc3bafdfc422c6a94a48b571dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_09045efa79f1c3efb5a9f235dd8c79e46d2f673bc4c947c23636ff38edd9f1f4->leave($__internal_09045efa79f1c3efb5a9f235dd8c79e46d2f673bc4c947c23636ff38edd9f1f4_prof);

        
        $__internal_074c59aeea91005d9ac5fb93a0098d0bf1f6a0fc3bafdfc422c6a94a48b571dc->leave($__internal_074c59aeea91005d9ac5fb93a0098d0bf1f6a0fc3bafdfc422c6a94a48b571dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
