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
        $__internal_ec1dbfe4df6c8a2fbcd8a6afcd3de3b6ff9cf344c7401bc327f5bb39c9c94f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1dbfe4df6c8a2fbcd8a6afcd3de3b6ff9cf344c7401bc327f5bb39c9c94f75->enter($__internal_ec1dbfe4df6c8a2fbcd8a6afcd3de3b6ff9cf344c7401bc327f5bb39c9c94f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_79b9acd9ecda726a7511d96af3981bac603667bf7805cd2b7cc2d7c472976e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b9acd9ecda726a7511d96af3981bac603667bf7805cd2b7cc2d7c472976e52->enter($__internal_79b9acd9ecda726a7511d96af3981bac603667bf7805cd2b7cc2d7c472976e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form.html.twig"));

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
        
        $__internal_ec1dbfe4df6c8a2fbcd8a6afcd3de3b6ff9cf344c7401bc327f5bb39c9c94f75->leave($__internal_ec1dbfe4df6c8a2fbcd8a6afcd3de3b6ff9cf344c7401bc327f5bb39c9c94f75_prof);

        
        $__internal_79b9acd9ecda726a7511d96af3981bac603667bf7805cd2b7cc2d7c472976e52->leave($__internal_79b9acd9ecda726a7511d96af3981bac603667bf7805cd2b7cc2d7c472976e52_prof);

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
