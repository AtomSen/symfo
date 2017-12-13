<?php

/* ::users.html.twig */
class __TwigTemplate_2e6b70760738a6a5a79af054c06cbaee24aa00bc056588a8a96725eaa3d2bbb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::users.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08af63cb5b2d0006231f4246cd20a7f0b7acbc2b3cf09213b867ec2dc9897d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08af63cb5b2d0006231f4246cd20a7f0b7acbc2b3cf09213b867ec2dc9897d7a->enter($__internal_08af63cb5b2d0006231f4246cd20a7f0b7acbc2b3cf09213b867ec2dc9897d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::users.html.twig"));

        $__internal_9f2d7676412818821e5a8a91e83bb86b18db8e5251590c37bab8218c21f121fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2d7676412818821e5a8a91e83bb86b18db8e5251590c37bab8218c21f121fa->enter($__internal_9f2d7676412818821e5a8a91e83bb86b18db8e5251590c37bab8218c21f121fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08af63cb5b2d0006231f4246cd20a7f0b7acbc2b3cf09213b867ec2dc9897d7a->leave($__internal_08af63cb5b2d0006231f4246cd20a7f0b7acbc2b3cf09213b867ec2dc9897d7a_prof);

        
        $__internal_9f2d7676412818821e5a8a91e83bb86b18db8e5251590c37bab8218c21f121fa->leave($__internal_9f2d7676412818821e5a8a91e83bb86b18db8e5251590c37bab8218c21f121fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d37a623cc5cc6f691f2cafd570ccb44daf043f06b3ff6e02b78dcc96ddf380e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37a623cc5cc6f691f2cafd570ccb44daf043f06b3ff6e02b78dcc96ddf380e2->enter($__internal_d37a623cc5cc6f691f2cafd570ccb44daf043f06b3ff6e02b78dcc96ddf380e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_729909be667326850a6bf85f4185f859943b69af39e0186fd47624b5283f433a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729909be667326850a6bf85f4185f859943b69af39e0186fd47624b5283f433a->enter($__internal_729909be667326850a6bf85f4185f859943b69af39e0186fd47624b5283f433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo "<li>
    ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUser", array(), "method"), "html", null, true);
            echo "

</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
";
        
        $__internal_729909be667326850a6bf85f4185f859943b69af39e0186fd47624b5283f433a->leave($__internal_729909be667326850a6bf85f4185f859943b69af39e0186fd47624b5283f433a_prof);

        
        $__internal_d37a623cc5cc6f691f2cafd570ccb44daf043f06b3ff6e02b78dcc96ddf380e2->leave($__internal_d37a623cc5cc6f691f2cafd570ccb44daf043f06b3ff6e02b78dcc96ddf380e2_prof);

    }

    public function getTemplateName()
    {
        return "::users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  60 => 7,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}

    <ul>
{% for user in users %}
<li>
    {{ user.getUser() }}

</li>
{% endfor %}
    </ul>
{% endblock %}", "::users.html.twig", "D:\\symfony\\my_project_name\\app/Resources\\views/users.html.twig");
    }
}
