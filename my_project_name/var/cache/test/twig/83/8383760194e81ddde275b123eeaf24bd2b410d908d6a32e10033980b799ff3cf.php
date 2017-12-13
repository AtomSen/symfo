<?php

/* form.html.twig */
class __TwigTemplate_f03dfef7d39638c23f39be1a1763a1e213a433d786f59b7c7ab37870bcadceb8 extends Twig_Template
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
        $__internal_1eb4657c10b3307f883da78a55235d7a5bc12aa5a11329b89ff56a4ed2e68201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb4657c10b3307f883da78a55235d7a5bc12aa5a11329b89ff56a4ed2e68201->enter($__internal_1eb4657c10b3307f883da78a55235d7a5bc12aa5a11329b89ff56a4ed2e68201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_99b9d7c0267b6dc5b96b2f1538b3f48bf47448e70dec31ddd58a0a90951df6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b9d7c0267b6dc5b96b2f1538b3f48bf47448e70dec31ddd58a0a90951df6d8->enter($__internal_99b9d7c0267b6dc5b96b2f1538b3f48bf47448e70dec31ddd58a0a90951df6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

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
        
        $__internal_1eb4657c10b3307f883da78a55235d7a5bc12aa5a11329b89ff56a4ed2e68201->leave($__internal_1eb4657c10b3307f883da78a55235d7a5bc12aa5a11329b89ff56a4ed2e68201_prof);

        
        $__internal_99b9d7c0267b6dc5b96b2f1538b3f48bf47448e70dec31ddd58a0a90951df6d8->leave($__internal_99b9d7c0267b6dc5b96b2f1538b3f48bf47448e70dec31ddd58a0a90951df6d8_prof);

    }

    public function getTemplateName()
    {
        return "form.html.twig";
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
</html>", "form.html.twig", "D:\\symfony\\my_project_name\\app\\Resources\\views\\form.html.twig");
    }
}
