<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3e3cfe76230e5d301a3c407a058a2c1f52a4cdb574d0ea80ef653cc4b8dfb14b extends Twig_Template
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
        $__internal_13241f7d6d1f1f5b4fd80b082aeb46a63a2d959cd8dd011803ad6e5e49c9b509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13241f7d6d1f1f5b4fd80b082aeb46a63a2d959cd8dd011803ad6e5e49c9b509->enter($__internal_13241f7d6d1f1f5b4fd80b082aeb46a63a2d959cd8dd011803ad6e5e49c9b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0628ff5fce68aea8ab0ed13a1fdff78dc6cfb399754d0fcad5b8cdbb2df2ddf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0628ff5fce68aea8ab0ed13a1fdff78dc6cfb399754d0fcad5b8cdbb2df2ddf1->enter($__internal_0628ff5fce68aea8ab0ed13a1fdff78dc6cfb399754d0fcad5b8cdbb2df2ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_13241f7d6d1f1f5b4fd80b082aeb46a63a2d959cd8dd011803ad6e5e49c9b509->leave($__internal_13241f7d6d1f1f5b4fd80b082aeb46a63a2d959cd8dd011803ad6e5e49c9b509_prof);

        
        $__internal_0628ff5fce68aea8ab0ed13a1fdff78dc6cfb399754d0fcad5b8cdbb2df2ddf1->leave($__internal_0628ff5fce68aea8ab0ed13a1fdff78dc6cfb399754d0fcad5b8cdbb2df2ddf1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
