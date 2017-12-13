<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6b5d21bafd407f8a334eb150075375b336f8d3c379ee177afb763c047f8c7022 extends Twig_Template
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
        $__internal_8a06e82dc5fece50a53c1674287c94017f8a148b84110889149ad0044be65515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a06e82dc5fece50a53c1674287c94017f8a148b84110889149ad0044be65515->enter($__internal_8a06e82dc5fece50a53c1674287c94017f8a148b84110889149ad0044be65515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ec986205d728a7057c2350fbc3792ceb48ebd491212f81089fe13dcc905628a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec986205d728a7057c2350fbc3792ceb48ebd491212f81089fe13dcc905628a4->enter($__internal_ec986205d728a7057c2350fbc3792ceb48ebd491212f81089fe13dcc905628a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8a06e82dc5fece50a53c1674287c94017f8a148b84110889149ad0044be65515->leave($__internal_8a06e82dc5fece50a53c1674287c94017f8a148b84110889149ad0044be65515_prof);

        
        $__internal_ec986205d728a7057c2350fbc3792ceb48ebd491212f81089fe13dcc905628a4->leave($__internal_ec986205d728a7057c2350fbc3792ceb48ebd491212f81089fe13dcc905628a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
