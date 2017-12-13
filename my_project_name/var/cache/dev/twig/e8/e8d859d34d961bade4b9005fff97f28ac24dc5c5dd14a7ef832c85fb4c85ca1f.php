<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
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
        $__internal_f13f65ad4cbd640d36f70175474d4e8fffa3f223637d0e8eb1c26effd4ef24c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13f65ad4cbd640d36f70175474d4e8fffa3f223637d0e8eb1c26effd4ef24c2->enter($__internal_f13f65ad4cbd640d36f70175474d4e8fffa3f223637d0e8eb1c26effd4ef24c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_df4448d117dd0ce865df578cf70c915fa28b9ebc46b640f3e36d26ea1c8302bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4448d117dd0ce865df578cf70c915fa28b9ebc46b640f3e36d26ea1c8302bb->enter($__internal_df4448d117dd0ce865df578cf70c915fa28b9ebc46b640f3e36d26ea1c8302bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f13f65ad4cbd640d36f70175474d4e8fffa3f223637d0e8eb1c26effd4ef24c2->leave($__internal_f13f65ad4cbd640d36f70175474d4e8fffa3f223637d0e8eb1c26effd4ef24c2_prof);

        
        $__internal_df4448d117dd0ce865df578cf70c915fa28b9ebc46b640f3e36d26ea1c8302bb->leave($__internal_df4448d117dd0ce865df578cf70c915fa28b9ebc46b640f3e36d26ea1c8302bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
