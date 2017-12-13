<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c40bf4c2c77ad20238e937fdfec9ae0d7acc3103392335b441de2be54f309c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40bf4c2c77ad20238e937fdfec9ae0d7acc3103392335b441de2be54f309c00->enter($__internal_c40bf4c2c77ad20238e937fdfec9ae0d7acc3103392335b441de2be54f309c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c88d06d6d75bd93d2b6bac811518131aa7a7d2968dfaa22c3a0ed3d5edee3d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88d06d6d75bd93d2b6bac811518131aa7a7d2968dfaa22c3a0ed3d5edee3d95->enter($__internal_c88d06d6d75bd93d2b6bac811518131aa7a7d2968dfaa22c3a0ed3d5edee3d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c40bf4c2c77ad20238e937fdfec9ae0d7acc3103392335b441de2be54f309c00->leave($__internal_c40bf4c2c77ad20238e937fdfec9ae0d7acc3103392335b441de2be54f309c00_prof);

        
        $__internal_c88d06d6d75bd93d2b6bac811518131aa7a7d2968dfaa22c3a0ed3d5edee3d95->leave($__internal_c88d06d6d75bd93d2b6bac811518131aa7a7d2968dfaa22c3a0ed3d5edee3d95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1952d711ef1be1e8207e3057342bccddfc9353eadddc14b4d25eed4496fc3706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1952d711ef1be1e8207e3057342bccddfc9353eadddc14b4d25eed4496fc3706->enter($__internal_1952d711ef1be1e8207e3057342bccddfc9353eadddc14b4d25eed4496fc3706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd26c53d2be751855c65fb9fb1976dadf67ad8674d4f8275c4222af63067295d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd26c53d2be751855c65fb9fb1976dadf67ad8674d4f8275c4222af63067295d->enter($__internal_bd26c53d2be751855c65fb9fb1976dadf67ad8674d4f8275c4222af63067295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd26c53d2be751855c65fb9fb1976dadf67ad8674d4f8275c4222af63067295d->leave($__internal_bd26c53d2be751855c65fb9fb1976dadf67ad8674d4f8275c4222af63067295d_prof);

        
        $__internal_1952d711ef1be1e8207e3057342bccddfc9353eadddc14b4d25eed4496fc3706->leave($__internal_1952d711ef1be1e8207e3057342bccddfc9353eadddc14b4d25eed4496fc3706_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_febda9c514decf41e26b59a168281ae71a20454475c523354677f45f98f0d7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_febda9c514decf41e26b59a168281ae71a20454475c523354677f45f98f0d7f5->enter($__internal_febda9c514decf41e26b59a168281ae71a20454475c523354677f45f98f0d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f4cf987401826296b42da5b6ee0a21d8bb68d6dda24bbca56c3a8c75b4db112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cf987401826296b42da5b6ee0a21d8bb68d6dda24bbca56c3a8c75b4db112b->enter($__internal_f4cf987401826296b42da5b6ee0a21d8bb68d6dda24bbca56c3a8c75b4db112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4cf987401826296b42da5b6ee0a21d8bb68d6dda24bbca56c3a8c75b4db112b->leave($__internal_f4cf987401826296b42da5b6ee0a21d8bb68d6dda24bbca56c3a8c75b4db112b_prof);

        
        $__internal_febda9c514decf41e26b59a168281ae71a20454475c523354677f45f98f0d7f5->leave($__internal_febda9c514decf41e26b59a168281ae71a20454475c523354677f45f98f0d7f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70edeb325030e4f9be17e6f5f19bbac5844ea7854eda99f240e344942be1de6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70edeb325030e4f9be17e6f5f19bbac5844ea7854eda99f240e344942be1de6f->enter($__internal_70edeb325030e4f9be17e6f5f19bbac5844ea7854eda99f240e344942be1de6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21df3d934944a2dbda95d2dc122e616d31300a055b4fc4345b3ea68bac1b7db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21df3d934944a2dbda95d2dc122e616d31300a055b4fc4345b3ea68bac1b7db0->enter($__internal_21df3d934944a2dbda95d2dc122e616d31300a055b4fc4345b3ea68bac1b7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21df3d934944a2dbda95d2dc122e616d31300a055b4fc4345b3ea68bac1b7db0->leave($__internal_21df3d934944a2dbda95d2dc122e616d31300a055b4fc4345b3ea68bac1b7db0_prof);

        
        $__internal_70edeb325030e4f9be17e6f5f19bbac5844ea7854eda99f240e344942be1de6f->leave($__internal_70edeb325030e4f9be17e6f5f19bbac5844ea7854eda99f240e344942be1de6f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aeb9484af64d3fa9626dabd13a14541f859a38d311abf6fa4c8bc532a40eb846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb9484af64d3fa9626dabd13a14541f859a38d311abf6fa4c8bc532a40eb846->enter($__internal_aeb9484af64d3fa9626dabd13a14541f859a38d311abf6fa4c8bc532a40eb846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52c69c80968db6fa3208fe0519bf4b5ec36b9128dfc6beb3082fefd3c9775807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c69c80968db6fa3208fe0519bf4b5ec36b9128dfc6beb3082fefd3c9775807->enter($__internal_52c69c80968db6fa3208fe0519bf4b5ec36b9128dfc6beb3082fefd3c9775807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52c69c80968db6fa3208fe0519bf4b5ec36b9128dfc6beb3082fefd3c9775807->leave($__internal_52c69c80968db6fa3208fe0519bf4b5ec36b9128dfc6beb3082fefd3c9775807_prof);

        
        $__internal_aeb9484af64d3fa9626dabd13a14541f859a38d311abf6fa4c8bc532a40eb846->leave($__internal_aeb9484af64d3fa9626dabd13a14541f859a38d311abf6fa4c8bc532a40eb846_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\symfony\\my_project_name\\app/Resources\\views/base.html.twig");
    }
}
