<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_14417d6f9a34873c762ed73d1edcb5a08ad6ef869d927d199705e246c5def258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14417d6f9a34873c762ed73d1edcb5a08ad6ef869d927d199705e246c5def258->enter($__internal_14417d6f9a34873c762ed73d1edcb5a08ad6ef869d927d199705e246c5def258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d7542876ba18995f086cf20039be08e8827661058d3d258b1e17282388859c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7542876ba18995f086cf20039be08e8827661058d3d258b1e17282388859c96->enter($__internal_d7542876ba18995f086cf20039be08e8827661058d3d258b1e17282388859c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14417d6f9a34873c762ed73d1edcb5a08ad6ef869d927d199705e246c5def258->leave($__internal_14417d6f9a34873c762ed73d1edcb5a08ad6ef869d927d199705e246c5def258_prof);

        
        $__internal_d7542876ba18995f086cf20039be08e8827661058d3d258b1e17282388859c96->leave($__internal_d7542876ba18995f086cf20039be08e8827661058d3d258b1e17282388859c96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
