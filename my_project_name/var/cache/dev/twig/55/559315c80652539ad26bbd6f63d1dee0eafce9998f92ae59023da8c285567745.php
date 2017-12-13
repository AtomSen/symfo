<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_6e1726557f6a1087c91848b8bd2275b9591986f416f1276beca8e7ab214ecb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1726557f6a1087c91848b8bd2275b9591986f416f1276beca8e7ab214ecb9d->enter($__internal_6e1726557f6a1087c91848b8bd2275b9591986f416f1276beca8e7ab214ecb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5504c625288faf0c61a1af04916bab281a833196abe6216bd204cf5297b7245d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5504c625288faf0c61a1af04916bab281a833196abe6216bd204cf5297b7245d->enter($__internal_5504c625288faf0c61a1af04916bab281a833196abe6216bd204cf5297b7245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6e1726557f6a1087c91848b8bd2275b9591986f416f1276beca8e7ab214ecb9d->leave($__internal_6e1726557f6a1087c91848b8bd2275b9591986f416f1276beca8e7ab214ecb9d_prof);

        
        $__internal_5504c625288faf0c61a1af04916bab281a833196abe6216bd204cf5297b7245d->leave($__internal_5504c625288faf0c61a1af04916bab281a833196abe6216bd204cf5297b7245d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
