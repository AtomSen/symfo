<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3be36c52daff360d86d735f203002d64e284e97f1fc6846c5b0383fe4ecbe6ee extends Twig_Template
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
        $__internal_7be1fd48a85ab3ad8c99963cff19dfdcb579b8604585f5e78c11b1465c01adbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be1fd48a85ab3ad8c99963cff19dfdcb579b8604585f5e78c11b1465c01adbf->enter($__internal_7be1fd48a85ab3ad8c99963cff19dfdcb579b8604585f5e78c11b1465c01adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_28addca2d4c05599b8184d5b5581a9980909300138fa282aa2fa276c3f3e3f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28addca2d4c05599b8184d5b5581a9980909300138fa282aa2fa276c3f3e3f76->enter($__internal_28addca2d4c05599b8184d5b5581a9980909300138fa282aa2fa276c3f3e3f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7be1fd48a85ab3ad8c99963cff19dfdcb579b8604585f5e78c11b1465c01adbf->leave($__internal_7be1fd48a85ab3ad8c99963cff19dfdcb579b8604585f5e78c11b1465c01adbf_prof);

        
        $__internal_28addca2d4c05599b8184d5b5581a9980909300138fa282aa2fa276c3f3e3f76->leave($__internal_28addca2d4c05599b8184d5b5581a9980909300138fa282aa2fa276c3f3e3f76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
