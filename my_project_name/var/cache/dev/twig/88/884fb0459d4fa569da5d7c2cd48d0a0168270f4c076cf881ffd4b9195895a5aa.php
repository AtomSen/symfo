<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c02706646be8830cee863351d5254b7b2c6abdc404e878e9f3360bec0b7bc527 extends Twig_Template
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
        $__internal_43ea83922bfc4cb29e58ca3195e3305afbc453efb80d26de0bafec0f5e43fea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ea83922bfc4cb29e58ca3195e3305afbc453efb80d26de0bafec0f5e43fea0->enter($__internal_43ea83922bfc4cb29e58ca3195e3305afbc453efb80d26de0bafec0f5e43fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4e21786400299e0c8810853c843845a7da67f5461ac92efe44ab91e124008eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e21786400299e0c8810853c843845a7da67f5461ac92efe44ab91e124008eb5->enter($__internal_4e21786400299e0c8810853c843845a7da67f5461ac92efe44ab91e124008eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_43ea83922bfc4cb29e58ca3195e3305afbc453efb80d26de0bafec0f5e43fea0->leave($__internal_43ea83922bfc4cb29e58ca3195e3305afbc453efb80d26de0bafec0f5e43fea0_prof);

        
        $__internal_4e21786400299e0c8810853c843845a7da67f5461ac92efe44ab91e124008eb5->leave($__internal_4e21786400299e0c8810853c843845a7da67f5461ac92efe44ab91e124008eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
