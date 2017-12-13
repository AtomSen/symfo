<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e81fad450f2d8c9fc867309ef4a313c296298623ca8a77036d75ed47af78f445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81fad450f2d8c9fc867309ef4a313c296298623ca8a77036d75ed47af78f445->enter($__internal_e81fad450f2d8c9fc867309ef4a313c296298623ca8a77036d75ed47af78f445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_273616123f5fd047726892d0ccd66d6b8e3884acb194dfd1f9bfff028dededd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273616123f5fd047726892d0ccd66d6b8e3884acb194dfd1f9bfff028dededd3->enter($__internal_273616123f5fd047726892d0ccd66d6b8e3884acb194dfd1f9bfff028dededd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e81fad450f2d8c9fc867309ef4a313c296298623ca8a77036d75ed47af78f445->leave($__internal_e81fad450f2d8c9fc867309ef4a313c296298623ca8a77036d75ed47af78f445_prof);

        
        $__internal_273616123f5fd047726892d0ccd66d6b8e3884acb194dfd1f9bfff028dededd3->leave($__internal_273616123f5fd047726892d0ccd66d6b8e3884acb194dfd1f9bfff028dededd3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_046fe92eac071dd1fd4c854d3ddb9294e0ba86e9e8fffcf41b91db9ed0f4c72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046fe92eac071dd1fd4c854d3ddb9294e0ba86e9e8fffcf41b91db9ed0f4c72b->enter($__internal_046fe92eac071dd1fd4c854d3ddb9294e0ba86e9e8fffcf41b91db9ed0f4c72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb597722d780acb766901aaa8ce69498bb16552ecbc0cf997daa0eccc313423a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb597722d780acb766901aaa8ce69498bb16552ecbc0cf997daa0eccc313423a->enter($__internal_eb597722d780acb766901aaa8ce69498bb16552ecbc0cf997daa0eccc313423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb597722d780acb766901aaa8ce69498bb16552ecbc0cf997daa0eccc313423a->leave($__internal_eb597722d780acb766901aaa8ce69498bb16552ecbc0cf997daa0eccc313423a_prof);

        
        $__internal_046fe92eac071dd1fd4c854d3ddb9294e0ba86e9e8fffcf41b91db9ed0f4c72b->leave($__internal_046fe92eac071dd1fd4c854d3ddb9294e0ba86e9e8fffcf41b91db9ed0f4c72b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62796beda1d00dafe8ecc4efeff719181163968e10669478c2845a330ea82397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62796beda1d00dafe8ecc4efeff719181163968e10669478c2845a330ea82397->enter($__internal_62796beda1d00dafe8ecc4efeff719181163968e10669478c2845a330ea82397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_418d03a0e353bedd0a1a595e056360b3383a901b15a200891a20481614f85569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418d03a0e353bedd0a1a595e056360b3383a901b15a200891a20481614f85569->enter($__internal_418d03a0e353bedd0a1a595e056360b3383a901b15a200891a20481614f85569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_418d03a0e353bedd0a1a595e056360b3383a901b15a200891a20481614f85569->leave($__internal_418d03a0e353bedd0a1a595e056360b3383a901b15a200891a20481614f85569_prof);

        
        $__internal_62796beda1d00dafe8ecc4efeff719181163968e10669478c2845a330ea82397->leave($__internal_62796beda1d00dafe8ecc4efeff719181163968e10669478c2845a330ea82397_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_197c93b6255e65169c74e5ef8812cc318121c495fc3661fd704d164d7eae1fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197c93b6255e65169c74e5ef8812cc318121c495fc3661fd704d164d7eae1fa5->enter($__internal_197c93b6255e65169c74e5ef8812cc318121c495fc3661fd704d164d7eae1fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b9ea611e31aeb3544f45fdaf41faee42a9cd401e5780f9838e62d6e353770e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9ea611e31aeb3544f45fdaf41faee42a9cd401e5780f9838e62d6e353770e7->enter($__internal_1b9ea611e31aeb3544f45fdaf41faee42a9cd401e5780f9838e62d6e353770e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b9ea611e31aeb3544f45fdaf41faee42a9cd401e5780f9838e62d6e353770e7->leave($__internal_1b9ea611e31aeb3544f45fdaf41faee42a9cd401e5780f9838e62d6e353770e7_prof);

        
        $__internal_197c93b6255e65169c74e5ef8812cc318121c495fc3661fd704d164d7eae1fa5->leave($__internal_197c93b6255e65169c74e5ef8812cc318121c495fc3661fd704d164d7eae1fa5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
