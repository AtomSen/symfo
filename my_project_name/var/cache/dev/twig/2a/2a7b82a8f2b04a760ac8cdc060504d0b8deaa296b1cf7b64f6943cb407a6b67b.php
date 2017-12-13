<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a39c4d267a93c23c71bed96768da44f870a2e199b55ac87fc7e097d39ebb7465 extends Twig_Template
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
        $__internal_9de03f24e702e8b145c42998f3ad5256d3d13f6991a49abcf820a37deb0ba3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de03f24e702e8b145c42998f3ad5256d3d13f6991a49abcf820a37deb0ba3b7->enter($__internal_9de03f24e702e8b145c42998f3ad5256d3d13f6991a49abcf820a37deb0ba3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d0ab5eb28fcede1e08101a8b00e1ec8b4fadaad972a0135ba24960bbb1427ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ab5eb28fcede1e08101a8b00e1ec8b4fadaad972a0135ba24960bbb1427ece->enter($__internal_d0ab5eb28fcede1e08101a8b00e1ec8b4fadaad972a0135ba24960bbb1427ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9de03f24e702e8b145c42998f3ad5256d3d13f6991a49abcf820a37deb0ba3b7->leave($__internal_9de03f24e702e8b145c42998f3ad5256d3d13f6991a49abcf820a37deb0ba3b7_prof);

        
        $__internal_d0ab5eb28fcede1e08101a8b00e1ec8b4fadaad972a0135ba24960bbb1427ece->leave($__internal_d0ab5eb28fcede1e08101a8b00e1ec8b4fadaad972a0135ba24960bbb1427ece_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
