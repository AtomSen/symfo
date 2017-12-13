<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_7c27361400bdd5f7b778ab1fda975d7dd740729a4890010d0324411ffc4a046a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c27361400bdd5f7b778ab1fda975d7dd740729a4890010d0324411ffc4a046a->enter($__internal_7c27361400bdd5f7b778ab1fda975d7dd740729a4890010d0324411ffc4a046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7c7830d77d0ddfcfb4d5b29e9c007b47f6164c4b43f441c7e745bd898daa20fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7830d77d0ddfcfb4d5b29e9c007b47f6164c4b43f441c7e745bd898daa20fe->enter($__internal_7c7830d77d0ddfcfb4d5b29e9c007b47f6164c4b43f441c7e745bd898daa20fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c27361400bdd5f7b778ab1fda975d7dd740729a4890010d0324411ffc4a046a->leave($__internal_7c27361400bdd5f7b778ab1fda975d7dd740729a4890010d0324411ffc4a046a_prof);

        
        $__internal_7c7830d77d0ddfcfb4d5b29e9c007b47f6164c4b43f441c7e745bd898daa20fe->leave($__internal_7c7830d77d0ddfcfb4d5b29e9c007b47f6164c4b43f441c7e745bd898daa20fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13be73574dbd45477d6bceb9504deb332ee61396f5e50607a55cd366b045c524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13be73574dbd45477d6bceb9504deb332ee61396f5e50607a55cd366b045c524->enter($__internal_13be73574dbd45477d6bceb9504deb332ee61396f5e50607a55cd366b045c524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c23a1d01d3557bab9fb6744651e66182feeaedb97cf4905cd78fb1497458d521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23a1d01d3557bab9fb6744651e66182feeaedb97cf4905cd78fb1497458d521->enter($__internal_c23a1d01d3557bab9fb6744651e66182feeaedb97cf4905cd78fb1497458d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c23a1d01d3557bab9fb6744651e66182feeaedb97cf4905cd78fb1497458d521->leave($__internal_c23a1d01d3557bab9fb6744651e66182feeaedb97cf4905cd78fb1497458d521_prof);

        
        $__internal_13be73574dbd45477d6bceb9504deb332ee61396f5e50607a55cd366b045c524->leave($__internal_13be73574dbd45477d6bceb9504deb332ee61396f5e50607a55cd366b045c524_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33277feb8f2989ab8b7088da6690f50b719b04d8021405096470885ee5af6de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33277feb8f2989ab8b7088da6690f50b719b04d8021405096470885ee5af6de4->enter($__internal_33277feb8f2989ab8b7088da6690f50b719b04d8021405096470885ee5af6de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_88f1fbca5a68da45c67183dfd07a0818e40761841c89dd59ec2db5fba42b82e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f1fbca5a68da45c67183dfd07a0818e40761841c89dd59ec2db5fba42b82e8->enter($__internal_88f1fbca5a68da45c67183dfd07a0818e40761841c89dd59ec2db5fba42b82e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88f1fbca5a68da45c67183dfd07a0818e40761841c89dd59ec2db5fba42b82e8->leave($__internal_88f1fbca5a68da45c67183dfd07a0818e40761841c89dd59ec2db5fba42b82e8_prof);

        
        $__internal_33277feb8f2989ab8b7088da6690f50b719b04d8021405096470885ee5af6de4->leave($__internal_33277feb8f2989ab8b7088da6690f50b719b04d8021405096470885ee5af6de4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_635e13365dcb1b7532ea60e9b505718eaaeac7343b6206cf337b306044d7a48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635e13365dcb1b7532ea60e9b505718eaaeac7343b6206cf337b306044d7a48f->enter($__internal_635e13365dcb1b7532ea60e9b505718eaaeac7343b6206cf337b306044d7a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ae09fa05644997edd812e5060dfb4696c90526f85e33a90433847420650b1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae09fa05644997edd812e5060dfb4696c90526f85e33a90433847420650b1ed->enter($__internal_9ae09fa05644997edd812e5060dfb4696c90526f85e33a90433847420650b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ae09fa05644997edd812e5060dfb4696c90526f85e33a90433847420650b1ed->leave($__internal_9ae09fa05644997edd812e5060dfb4696c90526f85e33a90433847420650b1ed_prof);

        
        $__internal_635e13365dcb1b7532ea60e9b505718eaaeac7343b6206cf337b306044d7a48f->leave($__internal_635e13365dcb1b7532ea60e9b505718eaaeac7343b6206cf337b306044d7a48f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
