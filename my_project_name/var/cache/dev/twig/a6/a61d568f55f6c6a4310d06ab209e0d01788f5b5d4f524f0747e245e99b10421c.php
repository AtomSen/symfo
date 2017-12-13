<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_9af1d55f5469e69ca73a64fe95007921b001e0c780dd41e0e0f1f44e10b3a251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af1d55f5469e69ca73a64fe95007921b001e0c780dd41e0e0f1f44e10b3a251->enter($__internal_9af1d55f5469e69ca73a64fe95007921b001e0c780dd41e0e0f1f44e10b3a251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7d8b28f9e9de39cdabe3ecb85be377735580b159cbef51140026d04ff54aeb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8b28f9e9de39cdabe3ecb85be377735580b159cbef51140026d04ff54aeb57->enter($__internal_7d8b28f9e9de39cdabe3ecb85be377735580b159cbef51140026d04ff54aeb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9af1d55f5469e69ca73a64fe95007921b001e0c780dd41e0e0f1f44e10b3a251->leave($__internal_9af1d55f5469e69ca73a64fe95007921b001e0c780dd41e0e0f1f44e10b3a251_prof);

        
        $__internal_7d8b28f9e9de39cdabe3ecb85be377735580b159cbef51140026d04ff54aeb57->leave($__internal_7d8b28f9e9de39cdabe3ecb85be377735580b159cbef51140026d04ff54aeb57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
