<?php

/* users.html.twig */
class __TwigTemplate_599ecb12ba0548c248e0d5351c8869025288eb206d7e41c23e0dc15bb3665380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "users.html.twig", 1);
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
        $__internal_d6b5ca067e840d3783aa9a6923d9423a9c09a7647992ca30ea88217f10c41a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b5ca067e840d3783aa9a6923d9423a9c09a7647992ca30ea88217f10c41a09->enter($__internal_d6b5ca067e840d3783aa9a6923d9423a9c09a7647992ca30ea88217f10c41a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users.html.twig"));

        $__internal_1a24a5e8acec7fcb8a9be56ffeae793da486570b1f7b7d80ad5fc4c6545c3314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a24a5e8acec7fcb8a9be56ffeae793da486570b1f7b7d80ad5fc4c6545c3314->enter($__internal_1a24a5e8acec7fcb8a9be56ffeae793da486570b1f7b7d80ad5fc4c6545c3314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b5ca067e840d3783aa9a6923d9423a9c09a7647992ca30ea88217f10c41a09->leave($__internal_d6b5ca067e840d3783aa9a6923d9423a9c09a7647992ca30ea88217f10c41a09_prof);

        
        $__internal_1a24a5e8acec7fcb8a9be56ffeae793da486570b1f7b7d80ad5fc4c6545c3314->leave($__internal_1a24a5e8acec7fcb8a9be56ffeae793da486570b1f7b7d80ad5fc4c6545c3314_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_13def144173a1cf4deddef0c31a7a51935eae931fea6dc72d3d5c4d919e92721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13def144173a1cf4deddef0c31a7a51935eae931fea6dc72d3d5c4d919e92721->enter($__internal_13def144173a1cf4deddef0c31a7a51935eae931fea6dc72d3d5c4d919e92721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28e9e945b9c9bd7cd12dfe57f11f382c34acac663cf0035d87f2396c061a2b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e9e945b9c9bd7cd12dfe57f11f382c34acac663cf0035d87f2396c061a2b5f->enter($__internal_28e9e945b9c9bd7cd12dfe57f11f382c34acac663cf0035d87f2396c061a2b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28e9e945b9c9bd7cd12dfe57f11f382c34acac663cf0035d87f2396c061a2b5f->leave($__internal_28e9e945b9c9bd7cd12dfe57f11f382c34acac663cf0035d87f2396c061a2b5f_prof);

        
        $__internal_13def144173a1cf4deddef0c31a7a51935eae931fea6dc72d3d5c4d919e92721->leave($__internal_13def144173a1cf4deddef0c31a7a51935eae931fea6dc72d3d5c4d919e92721_prof);

    }

    public function getTemplateName()
    {
        return "users.html.twig";
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
{% endblock %}", "users.html.twig", "D:\\symfony\\my_project_name\\app\\Resources\\views\\users.html.twig");
    }
}
