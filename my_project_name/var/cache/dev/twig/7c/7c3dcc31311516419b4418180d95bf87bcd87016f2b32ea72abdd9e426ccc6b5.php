<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_186b8f17570cb156f5db5df09e4a85ca0e9c8b01eda52dec9034733426ae64a7 extends Twig_Template
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
        $__internal_4d1863e3bba405a59929c2dda154d4fabd4f3dcd50e8add1ce46268f1c88fbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1863e3bba405a59929c2dda154d4fabd4f3dcd50e8add1ce46268f1c88fbec->enter($__internal_4d1863e3bba405a59929c2dda154d4fabd4f3dcd50e8add1ce46268f1c88fbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_93569035650c14d1d2ca8b1f2d885565e1d80acdde0e58c2119f6c8cf7b50e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93569035650c14d1d2ca8b1f2d885565e1d80acdde0e58c2119f6c8cf7b50e79->enter($__internal_93569035650c14d1d2ca8b1f2d885565e1d80acdde0e58c2119f6c8cf7b50e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4d1863e3bba405a59929c2dda154d4fabd4f3dcd50e8add1ce46268f1c88fbec->leave($__internal_4d1863e3bba405a59929c2dda154d4fabd4f3dcd50e8add1ce46268f1c88fbec_prof);

        
        $__internal_93569035650c14d1d2ca8b1f2d885565e1d80acdde0e58c2119f6c8cf7b50e79->leave($__internal_93569035650c14d1d2ca8b1f2d885565e1d80acdde0e58c2119f6c8cf7b50e79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
