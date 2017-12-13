<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e26819f51523b377e887d87fc7c0338f1c904b322e65a529d4a86bd51ac0ab6f extends Twig_Template
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
        $__internal_5938fbbcf0fa7c90470c3c2713e03305c1d40cd5cb41e1b9faf6ccf9ee04b330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5938fbbcf0fa7c90470c3c2713e03305c1d40cd5cb41e1b9faf6ccf9ee04b330->enter($__internal_5938fbbcf0fa7c90470c3c2713e03305c1d40cd5cb41e1b9faf6ccf9ee04b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_46bce914a887a54b56c21db2c46a0d012c40d58839e2de9470b8218e6b7b0f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bce914a887a54b56c21db2c46a0d012c40d58839e2de9470b8218e6b7b0f4e->enter($__internal_46bce914a887a54b56c21db2c46a0d012c40d58839e2de9470b8218e6b7b0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5938fbbcf0fa7c90470c3c2713e03305c1d40cd5cb41e1b9faf6ccf9ee04b330->leave($__internal_5938fbbcf0fa7c90470c3c2713e03305c1d40cd5cb41e1b9faf6ccf9ee04b330_prof);

        
        $__internal_46bce914a887a54b56c21db2c46a0d012c40d58839e2de9470b8218e6b7b0f4e->leave($__internal_46bce914a887a54b56c21db2c46a0d012c40d58839e2de9470b8218e6b7b0f4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
