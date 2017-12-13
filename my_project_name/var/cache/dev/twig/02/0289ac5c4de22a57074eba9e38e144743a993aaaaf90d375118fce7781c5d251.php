<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_da3d9b132af2a40e907a65e172b4f955099b807077400b069492c335ce2f3d3d extends Twig_Template
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
        $__internal_c25a2f28d45021254718c1aba2a80b86d465bc3c614e4f450f31c6ed94c540c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25a2f28d45021254718c1aba2a80b86d465bc3c614e4f450f31c6ed94c540c7->enter($__internal_c25a2f28d45021254718c1aba2a80b86d465bc3c614e4f450f31c6ed94c540c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b019e2433298a0ec5937a18ce1a8bc698f9a9e8cd616cd96dbd8d0fcddc98c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b019e2433298a0ec5937a18ce1a8bc698f9a9e8cd616cd96dbd8d0fcddc98c95->enter($__internal_b019e2433298a0ec5937a18ce1a8bc698f9a9e8cd616cd96dbd8d0fcddc98c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c25a2f28d45021254718c1aba2a80b86d465bc3c614e4f450f31c6ed94c540c7->leave($__internal_c25a2f28d45021254718c1aba2a80b86d465bc3c614e4f450f31c6ed94c540c7_prof);

        
        $__internal_b019e2433298a0ec5937a18ce1a8bc698f9a9e8cd616cd96dbd8d0fcddc98c95->leave($__internal_b019e2433298a0ec5937a18ce1a8bc698f9a9e8cd616cd96dbd8d0fcddc98c95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
