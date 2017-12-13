<?php

/* ::form.html.twig */
class __TwigTemplate_99d0b7698e3857584b19ca65964b3881e9599297c44283a24547e546e834ef40 extends Twig_Template
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
        $__internal_279fbbc7e9dd54ccd52c79c767abd886ccf8e65ec4294734287db93b2efa9175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279fbbc7e9dd54ccd52c79c767abd886ccf8e65ec4294734287db93b2efa9175->enter($__internal_279fbbc7e9dd54ccd52c79c767abd886ccf8e65ec4294734287db93b2efa9175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::form.html.twig"));

        $__internal_684c9ec96bdbf3e512f76af54d78182813cd752e8e4cef807fd00a2f672e68a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684c9ec96bdbf3e512f76af54d78182813cd752e8e4cef807fd00a2f672e68a3->enter($__internal_684c9ec96bdbf3e512f76af54d78182813cd752e8e4cef807fd00a2f672e68a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<input type=\"submit\" />
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</body>
</html>";
        
        $__internal_279fbbc7e9dd54ccd52c79c767abd886ccf8e65ec4294734287db93b2efa9175->leave($__internal_279fbbc7e9dd54ccd52c79c767abd886ccf8e65ec4294734287db93b2efa9175_prof);

        
        $__internal_684c9ec96bdbf3e512f76af54d78182813cd752e8e4cef807fd00a2f672e68a3->leave($__internal_684c9ec96bdbf3e512f76af54d78182813cd752e8e4cef807fd00a2f672e68a3_prof);

    }

    public function getTemplateName()
    {
        return "::form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
{{ form_start(form) }}
{{ form_widget(form) }}

<input type=\"submit\" />
{{ form_end(form) }}
</body>
</html>", "::form.html.twig", "D:\\symfony\\my_project_name\\app/Resources\\views/form.html.twig");
    }
}
