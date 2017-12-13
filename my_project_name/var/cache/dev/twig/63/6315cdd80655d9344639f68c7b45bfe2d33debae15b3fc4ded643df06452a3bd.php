<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f97f0bb28644ff672cb12d38927ee89643e31d7681ef1e1e6e270f43d33b63f extends Twig_Template
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
        $__internal_96e5d4c70a6758ab692326f37123d07ba47cd6ff33c5f98485d1abc1b08e5fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e5d4c70a6758ab692326f37123d07ba47cd6ff33c5f98485d1abc1b08e5fd6->enter($__internal_96e5d4c70a6758ab692326f37123d07ba47cd6ff33c5f98485d1abc1b08e5fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_aa0a71c89587d673dc87e0590366ae34ada864b1e3dfd4a7b0348ebdf0de9c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0a71c89587d673dc87e0590366ae34ada864b1e3dfd4a7b0348ebdf0de9c8d->enter($__internal_aa0a71c89587d673dc87e0590366ae34ada864b1e3dfd4a7b0348ebdf0de9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_96e5d4c70a6758ab692326f37123d07ba47cd6ff33c5f98485d1abc1b08e5fd6->leave($__internal_96e5d4c70a6758ab692326f37123d07ba47cd6ff33c5f98485d1abc1b08e5fd6_prof);

        
        $__internal_aa0a71c89587d673dc87e0590366ae34ada864b1e3dfd4a7b0348ebdf0de9c8d->leave($__internal_aa0a71c89587d673dc87e0590366ae34ada864b1e3dfd4a7b0348ebdf0de9c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
