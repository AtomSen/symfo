<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51373b15bc3e7900f7dab7645e85aae1479fd914944259cf38caba9064983bc6 extends Twig_Template
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
        $__internal_a061c2f5dbc83c4056e13cf6690b16bbbea155bf2e712a2bafe78881c5563f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a061c2f5dbc83c4056e13cf6690b16bbbea155bf2e712a2bafe78881c5563f37->enter($__internal_a061c2f5dbc83c4056e13cf6690b16bbbea155bf2e712a2bafe78881c5563f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9325f61a2b0f66597785230156991f314ff54ec15e031018613c2a133a872c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9325f61a2b0f66597785230156991f314ff54ec15e031018613c2a133a872c40->enter($__internal_9325f61a2b0f66597785230156991f314ff54ec15e031018613c2a133a872c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a061c2f5dbc83c4056e13cf6690b16bbbea155bf2e712a2bafe78881c5563f37->leave($__internal_a061c2f5dbc83c4056e13cf6690b16bbbea155bf2e712a2bafe78881c5563f37_prof);

        
        $__internal_9325f61a2b0f66597785230156991f314ff54ec15e031018613c2a133a872c40->leave($__internal_9325f61a2b0f66597785230156991f314ff54ec15e031018613c2a133a872c40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
