<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_104cf33482aaeb74a6bb194e5d74ae9ac8bd72d27003a46f42e576d73ea5cb9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104cf33482aaeb74a6bb194e5d74ae9ac8bd72d27003a46f42e576d73ea5cb9b->enter($__internal_104cf33482aaeb74a6bb194e5d74ae9ac8bd72d27003a46f42e576d73ea5cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5218194e6c4dae77ec0100c093e2e08e37dc5471fc9e609bdf0133a4cc194767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5218194e6c4dae77ec0100c093e2e08e37dc5471fc9e609bdf0133a4cc194767->enter($__internal_5218194e6c4dae77ec0100c093e2e08e37dc5471fc9e609bdf0133a4cc194767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_104cf33482aaeb74a6bb194e5d74ae9ac8bd72d27003a46f42e576d73ea5cb9b->leave($__internal_104cf33482aaeb74a6bb194e5d74ae9ac8bd72d27003a46f42e576d73ea5cb9b_prof);

        
        $__internal_5218194e6c4dae77ec0100c093e2e08e37dc5471fc9e609bdf0133a4cc194767->leave($__internal_5218194e6c4dae77ec0100c093e2e08e37dc5471fc9e609bdf0133a4cc194767_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
