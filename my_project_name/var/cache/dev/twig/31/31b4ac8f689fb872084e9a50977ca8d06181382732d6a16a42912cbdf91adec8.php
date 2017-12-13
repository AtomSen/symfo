<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_47867b47d047b57a69b61b818d077441105b9dedf0a9dafb9e475df4246fb7b8 extends Twig_Template
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
        $__internal_91c9c4c32850479d4328fe095fff49ce54d32f6be6d5859e4a918fb39563a244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c9c4c32850479d4328fe095fff49ce54d32f6be6d5859e4a918fb39563a244->enter($__internal_91c9c4c32850479d4328fe095fff49ce54d32f6be6d5859e4a918fb39563a244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f457a487ed0a280b932d24a8964cd7340e93104f697502473bd401f4539c329c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f457a487ed0a280b932d24a8964cd7340e93104f697502473bd401f4539c329c->enter($__internal_f457a487ed0a280b932d24a8964cd7340e93104f697502473bd401f4539c329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_91c9c4c32850479d4328fe095fff49ce54d32f6be6d5859e4a918fb39563a244->leave($__internal_91c9c4c32850479d4328fe095fff49ce54d32f6be6d5859e4a918fb39563a244_prof);

        
        $__internal_f457a487ed0a280b932d24a8964cd7340e93104f697502473bd401f4539c329c->leave($__internal_f457a487ed0a280b932d24a8964cd7340e93104f697502473bd401f4539c329c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
