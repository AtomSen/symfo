<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_a8f06a033adbceb631f479c524859abcd930f71fc8803aa26438ba5a92119d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f06a033adbceb631f479c524859abcd930f71fc8803aa26438ba5a92119d4c->enter($__internal_a8f06a033adbceb631f479c524859abcd930f71fc8803aa26438ba5a92119d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b71c4c97953b547e7888256f100bb88bad66f4376c521ad2b210aa91bb6f97ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71c4c97953b547e7888256f100bb88bad66f4376c521ad2b210aa91bb6f97ab->enter($__internal_b71c4c97953b547e7888256f100bb88bad66f4376c521ad2b210aa91bb6f97ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a8f06a033adbceb631f479c524859abcd930f71fc8803aa26438ba5a92119d4c->leave($__internal_a8f06a033adbceb631f479c524859abcd930f71fc8803aa26438ba5a92119d4c_prof);

        
        $__internal_b71c4c97953b547e7888256f100bb88bad66f4376c521ad2b210aa91bb6f97ab->leave($__internal_b71c4c97953b547e7888256f100bb88bad66f4376c521ad2b210aa91bb6f97ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
