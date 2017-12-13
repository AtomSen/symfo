<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5cea255f8ac967820ec3d0e6610a9ec3448d674780fda4d97fa5bf78ff08ef74 extends Twig_Template
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
        $__internal_e5c95af37dec67fcf34dd6aa1bd13458360ce05432850e754130dc76a314e988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c95af37dec67fcf34dd6aa1bd13458360ce05432850e754130dc76a314e988->enter($__internal_e5c95af37dec67fcf34dd6aa1bd13458360ce05432850e754130dc76a314e988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b3a9acf16cb9e31e673a8edb5475c19fef6309dd2d851fb893720e7fed2eab9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a9acf16cb9e31e673a8edb5475c19fef6309dd2d851fb893720e7fed2eab9e->enter($__internal_b3a9acf16cb9e31e673a8edb5475c19fef6309dd2d851fb893720e7fed2eab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e5c95af37dec67fcf34dd6aa1bd13458360ce05432850e754130dc76a314e988->leave($__internal_e5c95af37dec67fcf34dd6aa1bd13458360ce05432850e754130dc76a314e988_prof);

        
        $__internal_b3a9acf16cb9e31e673a8edb5475c19fef6309dd2d851fb893720e7fed2eab9e->leave($__internal_b3a9acf16cb9e31e673a8edb5475c19fef6309dd2d851fb893720e7fed2eab9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
