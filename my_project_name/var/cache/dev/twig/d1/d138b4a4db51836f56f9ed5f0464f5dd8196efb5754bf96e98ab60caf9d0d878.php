<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_6cf9e95491590792253b0429929cb6448fe6a4004bfc849b9bcf6bbe0fa8c8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf9e95491590792253b0429929cb6448fe6a4004bfc849b9bcf6bbe0fa8c8fb->enter($__internal_6cf9e95491590792253b0429929cb6448fe6a4004bfc849b9bcf6bbe0fa8c8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_09608bb231bec82e162ec62a6a2b5314912a4ff7fe43473c044a754a4513c8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09608bb231bec82e162ec62a6a2b5314912a4ff7fe43473c044a754a4513c8c6->enter($__internal_09608bb231bec82e162ec62a6a2b5314912a4ff7fe43473c044a754a4513c8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6cf9e95491590792253b0429929cb6448fe6a4004bfc849b9bcf6bbe0fa8c8fb->leave($__internal_6cf9e95491590792253b0429929cb6448fe6a4004bfc849b9bcf6bbe0fa8c8fb_prof);

        
        $__internal_09608bb231bec82e162ec62a6a2b5314912a4ff7fe43473c044a754a4513c8c6->leave($__internal_09608bb231bec82e162ec62a6a2b5314912a4ff7fe43473c044a754a4513c8c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
