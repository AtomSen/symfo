<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_062d2765a011620b6d73c82eabfd9e25721e0be85d8317f339764a5606a61e85 extends Twig_Template
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
        $__internal_f3cb782d2830550cd0c477ac40cea9c98b2e9eb40360dd938ad46fc4b18bb31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cb782d2830550cd0c477ac40cea9c98b2e9eb40360dd938ad46fc4b18bb31b->enter($__internal_f3cb782d2830550cd0c477ac40cea9c98b2e9eb40360dd938ad46fc4b18bb31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1c954ecc4375091bfe84a5f62d86c1c5363d1d5cc09cc4051d0903508da665a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c954ecc4375091bfe84a5f62d86c1c5363d1d5cc09cc4051d0903508da665a5->enter($__internal_1c954ecc4375091bfe84a5f62d86c1c5363d1d5cc09cc4051d0903508da665a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f3cb782d2830550cd0c477ac40cea9c98b2e9eb40360dd938ad46fc4b18bb31b->leave($__internal_f3cb782d2830550cd0c477ac40cea9c98b2e9eb40360dd938ad46fc4b18bb31b_prof);

        
        $__internal_1c954ecc4375091bfe84a5f62d86c1c5363d1d5cc09cc4051d0903508da665a5->leave($__internal_1c954ecc4375091bfe84a5f62d86c1c5363d1d5cc09cc4051d0903508da665a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
