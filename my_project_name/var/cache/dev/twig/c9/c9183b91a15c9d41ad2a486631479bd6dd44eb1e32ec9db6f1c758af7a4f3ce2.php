<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9676b17fdd24f413452ce75aed249516f8713df58005b26b244c2201ca0e9782 extends Twig_Template
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
        $__internal_9ff698dcd890e9a5b2ed1c23a97e19ea9ee202be6620b35a9ebe6d67187caa28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff698dcd890e9a5b2ed1c23a97e19ea9ee202be6620b35a9ebe6d67187caa28->enter($__internal_9ff698dcd890e9a5b2ed1c23a97e19ea9ee202be6620b35a9ebe6d67187caa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c7ae9ba9e2a513ff68a4f688f0550c0237a8d7ec66559c816fc920e05bd4f0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ae9ba9e2a513ff68a4f688f0550c0237a8d7ec66559c816fc920e05bd4f0fe->enter($__internal_c7ae9ba9e2a513ff68a4f688f0550c0237a8d7ec66559c816fc920e05bd4f0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9ff698dcd890e9a5b2ed1c23a97e19ea9ee202be6620b35a9ebe6d67187caa28->leave($__internal_9ff698dcd890e9a5b2ed1c23a97e19ea9ee202be6620b35a9ebe6d67187caa28_prof);

        
        $__internal_c7ae9ba9e2a513ff68a4f688f0550c0237a8d7ec66559c816fc920e05bd4f0fe->leave($__internal_c7ae9ba9e2a513ff68a4f688f0550c0237a8d7ec66559c816fc920e05bd4f0fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
