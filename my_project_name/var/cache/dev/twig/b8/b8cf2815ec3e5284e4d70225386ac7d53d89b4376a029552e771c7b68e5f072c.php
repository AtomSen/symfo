<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b60c8463566e2be5e09097f3595b0f9e7e853d2c2ecd5693383cf26df9e43075 extends Twig_Template
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
        $__internal_fd4ac382df11eec689e5f3c316980c97ba56f9fba1f14f356fd9a4ad3e14b3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4ac382df11eec689e5f3c316980c97ba56f9fba1f14f356fd9a4ad3e14b3ef->enter($__internal_fd4ac382df11eec689e5f3c316980c97ba56f9fba1f14f356fd9a4ad3e14b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_579fdac8c3e24a07ee7c568f977486a677f5d3bf995c3aae8db55a9d64224a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579fdac8c3e24a07ee7c568f977486a677f5d3bf995c3aae8db55a9d64224a91->enter($__internal_579fdac8c3e24a07ee7c568f977486a677f5d3bf995c3aae8db55a9d64224a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fd4ac382df11eec689e5f3c316980c97ba56f9fba1f14f356fd9a4ad3e14b3ef->leave($__internal_fd4ac382df11eec689e5f3c316980c97ba56f9fba1f14f356fd9a4ad3e14b3ef_prof);

        
        $__internal_579fdac8c3e24a07ee7c568f977486a677f5d3bf995c3aae8db55a9d64224a91->leave($__internal_579fdac8c3e24a07ee7c568f977486a677f5d3bf995c3aae8db55a9d64224a91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
