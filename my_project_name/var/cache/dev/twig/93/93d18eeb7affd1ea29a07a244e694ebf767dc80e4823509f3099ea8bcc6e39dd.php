<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c321b27f600d2c707885c1fb6c3429dd09131cc27cf20f889d1ce73a1291c74f extends Twig_Template
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
        $__internal_7bf86390b39ea48c7d6879fd87fa6cb31fcdee48b78ee93a0b483193ee126c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf86390b39ea48c7d6879fd87fa6cb31fcdee48b78ee93a0b483193ee126c40->enter($__internal_7bf86390b39ea48c7d6879fd87fa6cb31fcdee48b78ee93a0b483193ee126c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_375b9929f0e1b34ff7cf4c020985ef0ed247069ee6704690dfd3c6635ac28a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375b9929f0e1b34ff7cf4c020985ef0ed247069ee6704690dfd3c6635ac28a2d->enter($__internal_375b9929f0e1b34ff7cf4c020985ef0ed247069ee6704690dfd3c6635ac28a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7bf86390b39ea48c7d6879fd87fa6cb31fcdee48b78ee93a0b483193ee126c40->leave($__internal_7bf86390b39ea48c7d6879fd87fa6cb31fcdee48b78ee93a0b483193ee126c40_prof);

        
        $__internal_375b9929f0e1b34ff7cf4c020985ef0ed247069ee6704690dfd3c6635ac28a2d->leave($__internal_375b9929f0e1b34ff7cf4c020985ef0ed247069ee6704690dfd3c6635ac28a2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
