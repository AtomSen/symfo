<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a91a3b4322fa2e54aa441d59497315d55bbdf3dda35f906aa3ab94fbb1781251 extends Twig_Template
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
        $__internal_f5be4d2c4d79b71bb98de156394aaa7ae4a29bf2026b2023cab5b7adde6327ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5be4d2c4d79b71bb98de156394aaa7ae4a29bf2026b2023cab5b7adde6327ce->enter($__internal_f5be4d2c4d79b71bb98de156394aaa7ae4a29bf2026b2023cab5b7adde6327ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5adb5580ca8ce84ed42ae05addb27e9ab16c2be7d061e8b25f81b1f2c48aa5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adb5580ca8ce84ed42ae05addb27e9ab16c2be7d061e8b25f81b1f2c48aa5aa->enter($__internal_5adb5580ca8ce84ed42ae05addb27e9ab16c2be7d061e8b25f81b1f2c48aa5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f5be4d2c4d79b71bb98de156394aaa7ae4a29bf2026b2023cab5b7adde6327ce->leave($__internal_f5be4d2c4d79b71bb98de156394aaa7ae4a29bf2026b2023cab5b7adde6327ce_prof);

        
        $__internal_5adb5580ca8ce84ed42ae05addb27e9ab16c2be7d061e8b25f81b1f2c48aa5aa->leave($__internal_5adb5580ca8ce84ed42ae05addb27e9ab16c2be7d061e8b25f81b1f2c48aa5aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
