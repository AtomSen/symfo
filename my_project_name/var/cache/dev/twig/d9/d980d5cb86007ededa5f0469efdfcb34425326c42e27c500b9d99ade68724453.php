<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0a1615bded4cabb1e00a10feca8d0f78834832c28666e5f395da923e53934f20 extends Twig_Template
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
        $__internal_cbfcf0f51d55cd2bb09685b6266ee29a91a376a28866d79b99c54d6ba1286510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfcf0f51d55cd2bb09685b6266ee29a91a376a28866d79b99c54d6ba1286510->enter($__internal_cbfcf0f51d55cd2bb09685b6266ee29a91a376a28866d79b99c54d6ba1286510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_43d45dbb71267b9706e1d3adf79d8403b2f8e0bca11be7c16abf8de72abd8969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d45dbb71267b9706e1d3adf79d8403b2f8e0bca11be7c16abf8de72abd8969->enter($__internal_43d45dbb71267b9706e1d3adf79d8403b2f8e0bca11be7c16abf8de72abd8969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cbfcf0f51d55cd2bb09685b6266ee29a91a376a28866d79b99c54d6ba1286510->leave($__internal_cbfcf0f51d55cd2bb09685b6266ee29a91a376a28866d79b99c54d6ba1286510_prof);

        
        $__internal_43d45dbb71267b9706e1d3adf79d8403b2f8e0bca11be7c16abf8de72abd8969->leave($__internal_43d45dbb71267b9706e1d3adf79d8403b2f8e0bca11be7c16abf8de72abd8969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
