<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_3d05c7d9635d31a083c5342925b9a9e454efc3ff3e1944fab74522f3a6423814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d05c7d9635d31a083c5342925b9a9e454efc3ff3e1944fab74522f3a6423814->enter($__internal_3d05c7d9635d31a083c5342925b9a9e454efc3ff3e1944fab74522f3a6423814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cdf232ca60dd8f5e48dc91d1517edf36f4840cd535e8a1ef1fa3ddc1f224ad78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf232ca60dd8f5e48dc91d1517edf36f4840cd535e8a1ef1fa3ddc1f224ad78->enter($__internal_cdf232ca60dd8f5e48dc91d1517edf36f4840cd535e8a1ef1fa3ddc1f224ad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3d05c7d9635d31a083c5342925b9a9e454efc3ff3e1944fab74522f3a6423814->leave($__internal_3d05c7d9635d31a083c5342925b9a9e454efc3ff3e1944fab74522f3a6423814_prof);

        
        $__internal_cdf232ca60dd8f5e48dc91d1517edf36f4840cd535e8a1ef1fa3ddc1f224ad78->leave($__internal_cdf232ca60dd8f5e48dc91d1517edf36f4840cd535e8a1ef1fa3ddc1f224ad78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
