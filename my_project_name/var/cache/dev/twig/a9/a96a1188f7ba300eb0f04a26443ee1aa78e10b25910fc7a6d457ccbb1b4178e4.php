<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_8ceb70da36075d9a65955c444af25ff0f5dd0cf1d30d5b38f8165f228e180aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ceb70da36075d9a65955c444af25ff0f5dd0cf1d30d5b38f8165f228e180aca->enter($__internal_8ceb70da36075d9a65955c444af25ff0f5dd0cf1d30d5b38f8165f228e180aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3a028f7a70b4647746a3b39c08ccd37326cfbf0021d19676cd4bd708cc70d093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a028f7a70b4647746a3b39c08ccd37326cfbf0021d19676cd4bd708cc70d093->enter($__internal_3a028f7a70b4647746a3b39c08ccd37326cfbf0021d19676cd4bd708cc70d093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8ceb70da36075d9a65955c444af25ff0f5dd0cf1d30d5b38f8165f228e180aca->leave($__internal_8ceb70da36075d9a65955c444af25ff0f5dd0cf1d30d5b38f8165f228e180aca_prof);

        
        $__internal_3a028f7a70b4647746a3b39c08ccd37326cfbf0021d19676cd4bd708cc70d093->leave($__internal_3a028f7a70b4647746a3b39c08ccd37326cfbf0021d19676cd4bd708cc70d093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
