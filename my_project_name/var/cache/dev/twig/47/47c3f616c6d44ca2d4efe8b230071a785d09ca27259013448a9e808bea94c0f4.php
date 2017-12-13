<?php

/* form_table_layout.html.twig */
class __TwigTemplate_456d5c2c6ebe0756a0457d9f93d7f0e6fc0108837c5eb99b36b6babbb56966ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f7a85ed4dd787097c1f9b84e43f4b4c6997b4a09e8322a7afc525ef72bc1654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7a85ed4dd787097c1f9b84e43f4b4c6997b4a09e8322a7afc525ef72bc1654->enter($__internal_3f7a85ed4dd787097c1f9b84e43f4b4c6997b4a09e8322a7afc525ef72bc1654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_68019f126c32989ad4b5a6606c22b2db12e111d5f6212409fe5e350893833ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68019f126c32989ad4b5a6606c22b2db12e111d5f6212409fe5e350893833ba6->enter($__internal_68019f126c32989ad4b5a6606c22b2db12e111d5f6212409fe5e350893833ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_3f7a85ed4dd787097c1f9b84e43f4b4c6997b4a09e8322a7afc525ef72bc1654->leave($__internal_3f7a85ed4dd787097c1f9b84e43f4b4c6997b4a09e8322a7afc525ef72bc1654_prof);

        
        $__internal_68019f126c32989ad4b5a6606c22b2db12e111d5f6212409fe5e350893833ba6->leave($__internal_68019f126c32989ad4b5a6606c22b2db12e111d5f6212409fe5e350893833ba6_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_11d246ce1f36ff311136420e38eca4ee78d3b41d98d00fc57fc1111ad51c52e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d246ce1f36ff311136420e38eca4ee78d3b41d98d00fc57fc1111ad51c52e7->enter($__internal_11d246ce1f36ff311136420e38eca4ee78d3b41d98d00fc57fc1111ad51c52e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c8a9bed1a02a33c87d1892c0432e8fd28ea9e8a61694fec22a0dd560933da718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a9bed1a02a33c87d1892c0432e8fd28ea9e8a61694fec22a0dd560933da718->enter($__internal_c8a9bed1a02a33c87d1892c0432e8fd28ea9e8a61694fec22a0dd560933da718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_c8a9bed1a02a33c87d1892c0432e8fd28ea9e8a61694fec22a0dd560933da718->leave($__internal_c8a9bed1a02a33c87d1892c0432e8fd28ea9e8a61694fec22a0dd560933da718_prof);

        
        $__internal_11d246ce1f36ff311136420e38eca4ee78d3b41d98d00fc57fc1111ad51c52e7->leave($__internal_11d246ce1f36ff311136420e38eca4ee78d3b41d98d00fc57fc1111ad51c52e7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_209f26d3e4d7ff03858161a94461a68de6428249f45246af5a8571ba8dec6459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209f26d3e4d7ff03858161a94461a68de6428249f45246af5a8571ba8dec6459->enter($__internal_209f26d3e4d7ff03858161a94461a68de6428249f45246af5a8571ba8dec6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7d9f297eb441bf55a683c8dcb9eab4b28776d5c77d05e08d337b22095e1b9947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9f297eb441bf55a683c8dcb9eab4b28776d5c77d05e08d337b22095e1b9947->enter($__internal_7d9f297eb441bf55a683c8dcb9eab4b28776d5c77d05e08d337b22095e1b9947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7d9f297eb441bf55a683c8dcb9eab4b28776d5c77d05e08d337b22095e1b9947->leave($__internal_7d9f297eb441bf55a683c8dcb9eab4b28776d5c77d05e08d337b22095e1b9947_prof);

        
        $__internal_209f26d3e4d7ff03858161a94461a68de6428249f45246af5a8571ba8dec6459->leave($__internal_209f26d3e4d7ff03858161a94461a68de6428249f45246af5a8571ba8dec6459_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_d02ace77498c6c74f472540ebcf9777b9c9d088a6476c3dd480e4864c55a360b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02ace77498c6c74f472540ebcf9777b9c9d088a6476c3dd480e4864c55a360b->enter($__internal_d02ace77498c6c74f472540ebcf9777b9c9d088a6476c3dd480e4864c55a360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7251fafe45c8961c5cf520d22cba3736830cc840bc649dfe4e8fb597cf75c3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7251fafe45c8961c5cf520d22cba3736830cc840bc649dfe4e8fb597cf75c3df->enter($__internal_7251fafe45c8961c5cf520d22cba3736830cc840bc649dfe4e8fb597cf75c3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7251fafe45c8961c5cf520d22cba3736830cc840bc649dfe4e8fb597cf75c3df->leave($__internal_7251fafe45c8961c5cf520d22cba3736830cc840bc649dfe4e8fb597cf75c3df_prof);

        
        $__internal_d02ace77498c6c74f472540ebcf9777b9c9d088a6476c3dd480e4864c55a360b->leave($__internal_d02ace77498c6c74f472540ebcf9777b9c9d088a6476c3dd480e4864c55a360b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1558463f9fd8322a677d42536b6d343206e22804c6a771bae2dafc26c5a32576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1558463f9fd8322a677d42536b6d343206e22804c6a771bae2dafc26c5a32576->enter($__internal_1558463f9fd8322a677d42536b6d343206e22804c6a771bae2dafc26c5a32576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_1d70cc843902503c5fec8c4d12d67f3df030587cf556a2c0225644b03cd7ca4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d70cc843902503c5fec8c4d12d67f3df030587cf556a2c0225644b03cd7ca4b->enter($__internal_1d70cc843902503c5fec8c4d12d67f3df030587cf556a2c0225644b03cd7ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_1d70cc843902503c5fec8c4d12d67f3df030587cf556a2c0225644b03cd7ca4b->leave($__internal_1d70cc843902503c5fec8c4d12d67f3df030587cf556a2c0225644b03cd7ca4b_prof);

        
        $__internal_1558463f9fd8322a677d42536b6d343206e22804c6a771bae2dafc26c5a32576->leave($__internal_1558463f9fd8322a677d42536b6d343206e22804c6a771bae2dafc26c5a32576_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
