<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d44f4360e3e9feaa1cb73971eb6fabaa095559369b7e994fd34bbc4f47465d7 extends Twig_Template
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
        $__internal_b6d20dbf3c0e7bc1a1f9e5ad63ef038064ddaf0c066d49ea412de0ae0243155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d20dbf3c0e7bc1a1f9e5ad63ef038064ddaf0c066d49ea412de0ae0243155e->enter($__internal_b6d20dbf3c0e7bc1a1f9e5ad63ef038064ddaf0c066d49ea412de0ae0243155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9c02fd694ec130a6ccf11eb49f5110515b4f5ce00b08a3e0f2942e4264cd23c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c02fd694ec130a6ccf11eb49f5110515b4f5ce00b08a3e0f2942e4264cd23c2->enter($__internal_9c02fd694ec130a6ccf11eb49f5110515b4f5ce00b08a3e0f2942e4264cd23c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b6d20dbf3c0e7bc1a1f9e5ad63ef038064ddaf0c066d49ea412de0ae0243155e->leave($__internal_b6d20dbf3c0e7bc1a1f9e5ad63ef038064ddaf0c066d49ea412de0ae0243155e_prof);

        
        $__internal_9c02fd694ec130a6ccf11eb49f5110515b4f5ce00b08a3e0f2942e4264cd23c2->leave($__internal_9c02fd694ec130a6ccf11eb49f5110515b4f5ce00b08a3e0f2942e4264cd23c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
