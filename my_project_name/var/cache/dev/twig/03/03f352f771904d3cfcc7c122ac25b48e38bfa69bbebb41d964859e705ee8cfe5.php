<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ea2bf1adf33610aae7127de23eabd4c76f592d519eb929223d1b452c817795d5 extends Twig_Template
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
        $__internal_eb557ae6a80cf871d806bacdb5a65923038bac930d30fec83a183787591aef83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb557ae6a80cf871d806bacdb5a65923038bac930d30fec83a183787591aef83->enter($__internal_eb557ae6a80cf871d806bacdb5a65923038bac930d30fec83a183787591aef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_33bea97432f92babc10847584899cd53b37b018cb06c35e8cbe3031dc6fc5ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bea97432f92babc10847584899cd53b37b018cb06c35e8cbe3031dc6fc5ccb->enter($__internal_33bea97432f92babc10847584899cd53b37b018cb06c35e8cbe3031dc6fc5ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb557ae6a80cf871d806bacdb5a65923038bac930d30fec83a183787591aef83->leave($__internal_eb557ae6a80cf871d806bacdb5a65923038bac930d30fec83a183787591aef83_prof);

        
        $__internal_33bea97432f92babc10847584899cd53b37b018cb06c35e8cbe3031dc6fc5ccb->leave($__internal_33bea97432f92babc10847584899cd53b37b018cb06c35e8cbe3031dc6fc5ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
