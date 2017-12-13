<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_8c2ff05c1824cd1ac3162fef7314d36f3a32ba07d29da53b67310154756e75d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2ff05c1824cd1ac3162fef7314d36f3a32ba07d29da53b67310154756e75d2->enter($__internal_8c2ff05c1824cd1ac3162fef7314d36f3a32ba07d29da53b67310154756e75d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e43c551480fcd7edba6bbbc4dd0d369c9d61818c2094dab622d799bbfaf9380f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43c551480fcd7edba6bbbc4dd0d369c9d61818c2094dab622d799bbfaf9380f->enter($__internal_e43c551480fcd7edba6bbbc4dd0d369c9d61818c2094dab622d799bbfaf9380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8c2ff05c1824cd1ac3162fef7314d36f3a32ba07d29da53b67310154756e75d2->leave($__internal_8c2ff05c1824cd1ac3162fef7314d36f3a32ba07d29da53b67310154756e75d2_prof);

        
        $__internal_e43c551480fcd7edba6bbbc4dd0d369c9d61818c2094dab622d799bbfaf9380f->leave($__internal_e43c551480fcd7edba6bbbc4dd0d369c9d61818c2094dab622d799bbfaf9380f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
