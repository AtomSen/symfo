<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf46f58af914c3d12a5c4277e0a560be63bd0b5507b4f462a7c0088cd5b387b extends Twig_Template
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
        $__internal_b3cb60a7b6c67c8c5ff290bf829dba39735f8d2ee7b398df215901b24a0a8f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cb60a7b6c67c8c5ff290bf829dba39735f8d2ee7b398df215901b24a0a8f3b->enter($__internal_b3cb60a7b6c67c8c5ff290bf829dba39735f8d2ee7b398df215901b24a0a8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_be079f8b298b69ee8f38799ee0e60d0c03f9f019339633b3118221e74bb39c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be079f8b298b69ee8f38799ee0e60d0c03f9f019339633b3118221e74bb39c65->enter($__internal_be079f8b298b69ee8f38799ee0e60d0c03f9f019339633b3118221e74bb39c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b3cb60a7b6c67c8c5ff290bf829dba39735f8d2ee7b398df215901b24a0a8f3b->leave($__internal_b3cb60a7b6c67c8c5ff290bf829dba39735f8d2ee7b398df215901b24a0a8f3b_prof);

        
        $__internal_be079f8b298b69ee8f38799ee0e60d0c03f9f019339633b3118221e74bb39c65->leave($__internal_be079f8b298b69ee8f38799ee0e60d0c03f9f019339633b3118221e74bb39c65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
