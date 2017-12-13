<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf043cdc1f86180e4b139ce9ecd758283ee7565b0ba4e5ddd009afa4c62823f7 extends Twig_Template
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
        $__internal_c2aabc225a46b1e532519a500685ff3fc5f23bce9c067cc7ba02fef677d303dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aabc225a46b1e532519a500685ff3fc5f23bce9c067cc7ba02fef677d303dd->enter($__internal_c2aabc225a46b1e532519a500685ff3fc5f23bce9c067cc7ba02fef677d303dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a5e060d496a932bbc258cccf8e1d52c6a0766f7f3f26d58d5eec143f1f221ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e060d496a932bbc258cccf8e1d52c6a0766f7f3f26d58d5eec143f1f221ce7->enter($__internal_a5e060d496a932bbc258cccf8e1d52c6a0766f7f3f26d58d5eec143f1f221ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c2aabc225a46b1e532519a500685ff3fc5f23bce9c067cc7ba02fef677d303dd->leave($__internal_c2aabc225a46b1e532519a500685ff3fc5f23bce9c067cc7ba02fef677d303dd_prof);

        
        $__internal_a5e060d496a932bbc258cccf8e1d52c6a0766f7f3f26d58d5eec143f1f221ce7->leave($__internal_a5e060d496a932bbc258cccf8e1d52c6a0766f7f3f26d58d5eec143f1f221ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
