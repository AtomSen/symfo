<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_86f7a632103f026320ef584c15d29cc5e25f4b6f4390a2303dbc447b59b77846 extends Twig_Template
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
        $__internal_5f00c11104054288c48bafbd2588b23dbddb1b4c8520c99bee2f09324939df7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f00c11104054288c48bafbd2588b23dbddb1b4c8520c99bee2f09324939df7d->enter($__internal_5f00c11104054288c48bafbd2588b23dbddb1b4c8520c99bee2f09324939df7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_6af006c7f04ae14a76a9887e47a7efc8c0cde4aea1b86a3c9587f9e282c97449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af006c7f04ae14a76a9887e47a7efc8c0cde4aea1b86a3c9587f9e282c97449->enter($__internal_6af006c7f04ae14a76a9887e47a7efc8c0cde4aea1b86a3c9587f9e282c97449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5f00c11104054288c48bafbd2588b23dbddb1b4c8520c99bee2f09324939df7d->leave($__internal_5f00c11104054288c48bafbd2588b23dbddb1b4c8520c99bee2f09324939df7d_prof);

        
        $__internal_6af006c7f04ae14a76a9887e47a7efc8c0cde4aea1b86a3c9587f9e282c97449->leave($__internal_6af006c7f04ae14a76a9887e47a7efc8c0cde4aea1b86a3c9587f9e282c97449_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
