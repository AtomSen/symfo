<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_65f13e9b6ce55124a73002ca1d892ba6ba360f2870ce0568816b96cc3eaed839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f13e9b6ce55124a73002ca1d892ba6ba360f2870ce0568816b96cc3eaed839->enter($__internal_65f13e9b6ce55124a73002ca1d892ba6ba360f2870ce0568816b96cc3eaed839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e25957a90bc4db5b9abbbb26b94fb75c3b5078712143799103b34798048ea354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25957a90bc4db5b9abbbb26b94fb75c3b5078712143799103b34798048ea354->enter($__internal_e25957a90bc4db5b9abbbb26b94fb75c3b5078712143799103b34798048ea354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_65f13e9b6ce55124a73002ca1d892ba6ba360f2870ce0568816b96cc3eaed839->leave($__internal_65f13e9b6ce55124a73002ca1d892ba6ba360f2870ce0568816b96cc3eaed839_prof);

        
        $__internal_e25957a90bc4db5b9abbbb26b94fb75c3b5078712143799103b34798048ea354->leave($__internal_e25957a90bc4db5b9abbbb26b94fb75c3b5078712143799103b34798048ea354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
