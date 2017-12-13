<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_3c750254daa49868df3632a0dbc24640812352026e3c31492e5b69d98dd7b65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c750254daa49868df3632a0dbc24640812352026e3c31492e5b69d98dd7b65f->enter($__internal_3c750254daa49868df3632a0dbc24640812352026e3c31492e5b69d98dd7b65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_143f95e8aaf04437b4868354f2000b77102542b71f00686fdb6efba8ee84f3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143f95e8aaf04437b4868354f2000b77102542b71f00686fdb6efba8ee84f3c0->enter($__internal_143f95e8aaf04437b4868354f2000b77102542b71f00686fdb6efba8ee84f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3c750254daa49868df3632a0dbc24640812352026e3c31492e5b69d98dd7b65f->leave($__internal_3c750254daa49868df3632a0dbc24640812352026e3c31492e5b69d98dd7b65f_prof);

        
        $__internal_143f95e8aaf04437b4868354f2000b77102542b71f00686fdb6efba8ee84f3c0->leave($__internal_143f95e8aaf04437b4868354f2000b77102542b71f00686fdb6efba8ee84f3c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
