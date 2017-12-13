<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_111d59b413361a5c199b84ce7a2a9ccc55d09953faae1d87c5d37facc7f0537e extends Twig_Template
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
        $__internal_84714a2c5120cd47aeb039aa2360916a238fbd39ce881147ff2206caaf899828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84714a2c5120cd47aeb039aa2360916a238fbd39ce881147ff2206caaf899828->enter($__internal_84714a2c5120cd47aeb039aa2360916a238fbd39ce881147ff2206caaf899828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_13b72b1b93d7b45722abb5e06871dba99361c1cf7d738c89d2f0f650cc9ad853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b72b1b93d7b45722abb5e06871dba99361c1cf7d738c89d2f0f650cc9ad853->enter($__internal_13b72b1b93d7b45722abb5e06871dba99361c1cf7d738c89d2f0f650cc9ad853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_84714a2c5120cd47aeb039aa2360916a238fbd39ce881147ff2206caaf899828->leave($__internal_84714a2c5120cd47aeb039aa2360916a238fbd39ce881147ff2206caaf899828_prof);

        
        $__internal_13b72b1b93d7b45722abb5e06871dba99361c1cf7d738c89d2f0f650cc9ad853->leave($__internal_13b72b1b93d7b45722abb5e06871dba99361c1cf7d738c89d2f0f650cc9ad853_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
