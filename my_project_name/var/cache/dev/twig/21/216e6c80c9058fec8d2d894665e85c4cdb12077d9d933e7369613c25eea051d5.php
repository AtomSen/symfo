<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24e5e45d6a3f87bcc66e2747c52ee54ab8a9c0aba2f705ad6e7b789cdb766be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24e5e45d6a3f87bcc66e2747c52ee54ab8a9c0aba2f705ad6e7b789cdb766be->enter($__internal_e24e5e45d6a3f87bcc66e2747c52ee54ab8a9c0aba2f705ad6e7b789cdb766be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b24dd88d6307eed36be81baa68c15c1b8a71328cd72849127d947d3e1ac25bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24dd88d6307eed36be81baa68c15c1b8a71328cd72849127d947d3e1ac25bbd->enter($__internal_b24dd88d6307eed36be81baa68c15c1b8a71328cd72849127d947d3e1ac25bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_e24e5e45d6a3f87bcc66e2747c52ee54ab8a9c0aba2f705ad6e7b789cdb766be->leave($__internal_e24e5e45d6a3f87bcc66e2747c52ee54ab8a9c0aba2f705ad6e7b789cdb766be_prof);

        
        $__internal_b24dd88d6307eed36be81baa68c15c1b8a71328cd72849127d947d3e1ac25bbd->leave($__internal_b24dd88d6307eed36be81baa68c15c1b8a71328cd72849127d947d3e1ac25bbd_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_21c4e1905618b01a5ca0fafdf9a7c36f1617836d53ba0d7d93bfeb8226c83b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c4e1905618b01a5ca0fafdf9a7c36f1617836d53ba0d7d93bfeb8226c83b95->enter($__internal_21c4e1905618b01a5ca0fafdf9a7c36f1617836d53ba0d7d93bfeb8226c83b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_13054ffaa51848c357c1f32ad8eeff66d3f47f605155bf97f0ae267ebb0a31cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13054ffaa51848c357c1f32ad8eeff66d3f47f605155bf97f0ae267ebb0a31cb->enter($__internal_13054ffaa51848c357c1f32ad8eeff66d3f47f605155bf97f0ae267ebb0a31cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_13054ffaa51848c357c1f32ad8eeff66d3f47f605155bf97f0ae267ebb0a31cb->leave($__internal_13054ffaa51848c357c1f32ad8eeff66d3f47f605155bf97f0ae267ebb0a31cb_prof);

        
        $__internal_21c4e1905618b01a5ca0fafdf9a7c36f1617836d53ba0d7d93bfeb8226c83b95->leave($__internal_21c4e1905618b01a5ca0fafdf9a7c36f1617836d53ba0d7d93bfeb8226c83b95_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ae811abb88b7cf10e35df1b56d616e95a7b1bb3507d945a9f84bbe8e6f6ffed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae811abb88b7cf10e35df1b56d616e95a7b1bb3507d945a9f84bbe8e6f6ffed7->enter($__internal_ae811abb88b7cf10e35df1b56d616e95a7b1bb3507d945a9f84bbe8e6f6ffed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8f301187ede3b361a8cc18646a72772a15a0101bdea3725173371515cbdf25d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f301187ede3b361a8cc18646a72772a15a0101bdea3725173371515cbdf25d5->enter($__internal_8f301187ede3b361a8cc18646a72772a15a0101bdea3725173371515cbdf25d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8f301187ede3b361a8cc18646a72772a15a0101bdea3725173371515cbdf25d5->leave($__internal_8f301187ede3b361a8cc18646a72772a15a0101bdea3725173371515cbdf25d5_prof);

        
        $__internal_ae811abb88b7cf10e35df1b56d616e95a7b1bb3507d945a9f84bbe8e6f6ffed7->leave($__internal_ae811abb88b7cf10e35df1b56d616e95a7b1bb3507d945a9f84bbe8e6f6ffed7_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_60796e618a642eacdaab5da6d34ef6bc037ca355324c56b6ee9b5fe9075f7b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60796e618a642eacdaab5da6d34ef6bc037ca355324c56b6ee9b5fe9075f7b0c->enter($__internal_60796e618a642eacdaab5da6d34ef6bc037ca355324c56b6ee9b5fe9075f7b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_04a636fb09e51a772977ac2d8324437008f2e6f574fcf4cbc8d7507ae6ca478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a636fb09e51a772977ac2d8324437008f2e6f574fcf4cbc8d7507ae6ca478a->enter($__internal_04a636fb09e51a772977ac2d8324437008f2e6f574fcf4cbc8d7507ae6ca478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_04a636fb09e51a772977ac2d8324437008f2e6f574fcf4cbc8d7507ae6ca478a->leave($__internal_04a636fb09e51a772977ac2d8324437008f2e6f574fcf4cbc8d7507ae6ca478a_prof);

        
        $__internal_60796e618a642eacdaab5da6d34ef6bc037ca355324c56b6ee9b5fe9075f7b0c->leave($__internal_60796e618a642eacdaab5da6d34ef6bc037ca355324c56b6ee9b5fe9075f7b0c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9d5cd715f579be6a172bbaca7300ff998426afe4abbb50d8ce619dabde02561f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5cd715f579be6a172bbaca7300ff998426afe4abbb50d8ce619dabde02561f->enter($__internal_9d5cd715f579be6a172bbaca7300ff998426afe4abbb50d8ce619dabde02561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c2b877e32b4bcd17f72ecb1f4591f1a237946966f5e5ccf99be5efe7c0952605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b877e32b4bcd17f72ecb1f4591f1a237946966f5e5ccf99be5efe7c0952605->enter($__internal_c2b877e32b4bcd17f72ecb1f4591f1a237946966f5e5ccf99be5efe7c0952605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_71c57da912d97d307c33eb6732063d6fc6c9300a4f400cebe4b09d1bb96706d7 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b71678d7c0706a60e958f7f78e99fb5ffa56a17bad102a90c8643416ef8e98b2 = "{{") && ('' === $__internal_b71678d7c0706a60e958f7f78e99fb5ffa56a17bad102a90c8643416ef8e98b2 || 0 === strpos($__internal_71c57da912d97d307c33eb6732063d6fc6c9300a4f400cebe4b09d1bb96706d7, $__internal_b71678d7c0706a60e958f7f78e99fb5ffa56a17bad102a90c8643416ef8e98b2)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_c2b877e32b4bcd17f72ecb1f4591f1a237946966f5e5ccf99be5efe7c0952605->leave($__internal_c2b877e32b4bcd17f72ecb1f4591f1a237946966f5e5ccf99be5efe7c0952605_prof);

        
        $__internal_9d5cd715f579be6a172bbaca7300ff998426afe4abbb50d8ce619dabde02561f->leave($__internal_9d5cd715f579be6a172bbaca7300ff998426afe4abbb50d8ce619dabde02561f_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_59ebef10aba05db95ce0e1acfb0a5de708a728c26c03e6308120711c3fdbbf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ebef10aba05db95ce0e1acfb0a5de708a728c26c03e6308120711c3fdbbf3a->enter($__internal_59ebef10aba05db95ce0e1acfb0a5de708a728c26c03e6308120711c3fdbbf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_acbded1a018e6e3c3f2db74006ba7810612e0f14bfb8a39cb4632dce65b80a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbded1a018e6e3c3f2db74006ba7810612e0f14bfb8a39cb4632dce65b80a7e->enter($__internal_acbded1a018e6e3c3f2db74006ba7810612e0f14bfb8a39cb4632dce65b80a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_acbded1a018e6e3c3f2db74006ba7810612e0f14bfb8a39cb4632dce65b80a7e->leave($__internal_acbded1a018e6e3c3f2db74006ba7810612e0f14bfb8a39cb4632dce65b80a7e_prof);

        
        $__internal_59ebef10aba05db95ce0e1acfb0a5de708a728c26c03e6308120711c3fdbbf3a->leave($__internal_59ebef10aba05db95ce0e1acfb0a5de708a728c26c03e6308120711c3fdbbf3a_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_145acfe77ff8f9e90855bbe33eca2318f4e36a19997b29eb75410c260b6e368a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145acfe77ff8f9e90855bbe33eca2318f4e36a19997b29eb75410c260b6e368a->enter($__internal_145acfe77ff8f9e90855bbe33eca2318f4e36a19997b29eb75410c260b6e368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d614e86bbed20473383704b87b0e6f1273d0becd542e691d47b7ea52c4259f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d614e86bbed20473383704b87b0e6f1273d0becd542e691d47b7ea52c4259f58->enter($__internal_d614e86bbed20473383704b87b0e6f1273d0becd542e691d47b7ea52c4259f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_d614e86bbed20473383704b87b0e6f1273d0becd542e691d47b7ea52c4259f58->leave($__internal_d614e86bbed20473383704b87b0e6f1273d0becd542e691d47b7ea52c4259f58_prof);

        
        $__internal_145acfe77ff8f9e90855bbe33eca2318f4e36a19997b29eb75410c260b6e368a->leave($__internal_145acfe77ff8f9e90855bbe33eca2318f4e36a19997b29eb75410c260b6e368a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7fda39802825b480f35a52d082cf34aa10d699f9999ecd7b5c81b30e020bcb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fda39802825b480f35a52d082cf34aa10d699f9999ecd7b5c81b30e020bcb39->enter($__internal_7fda39802825b480f35a52d082cf34aa10d699f9999ecd7b5c81b30e020bcb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7c3fa83ff8bc3f800eb41fe2937c453aa8d83243a9a5a89d1b884131df5a2319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3fa83ff8bc3f800eb41fe2937c453aa8d83243a9a5a89d1b884131df5a2319->enter($__internal_7c3fa83ff8bc3f800eb41fe2937c453aa8d83243a9a5a89d1b884131df5a2319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_7c3fa83ff8bc3f800eb41fe2937c453aa8d83243a9a5a89d1b884131df5a2319->leave($__internal_7c3fa83ff8bc3f800eb41fe2937c453aa8d83243a9a5a89d1b884131df5a2319_prof);

        
        $__internal_7fda39802825b480f35a52d082cf34aa10d699f9999ecd7b5c81b30e020bcb39->leave($__internal_7fda39802825b480f35a52d082cf34aa10d699f9999ecd7b5c81b30e020bcb39_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_05ed159cc1884fde1b702d93e3843251ac49f691579615fa3c065ecfa8b1b466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ed159cc1884fde1b702d93e3843251ac49f691579615fa3c065ecfa8b1b466->enter($__internal_05ed159cc1884fde1b702d93e3843251ac49f691579615fa3c065ecfa8b1b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_69d33725d14853a7fb44ddc035e71624c97f902616041c2ed60080aff08eb82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d33725d14853a7fb44ddc035e71624c97f902616041c2ed60080aff08eb82f->enter($__internal_69d33725d14853a7fb44ddc035e71624c97f902616041c2ed60080aff08eb82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_69d33725d14853a7fb44ddc035e71624c97f902616041c2ed60080aff08eb82f->leave($__internal_69d33725d14853a7fb44ddc035e71624c97f902616041c2ed60080aff08eb82f_prof);

        
        $__internal_05ed159cc1884fde1b702d93e3843251ac49f691579615fa3c065ecfa8b1b466->leave($__internal_05ed159cc1884fde1b702d93e3843251ac49f691579615fa3c065ecfa8b1b466_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_16962a64bf7f57f8ba8705d0d2e1c4ece03c0659a4e133fce16c439566da2aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16962a64bf7f57f8ba8705d0d2e1c4ece03c0659a4e133fce16c439566da2aa5->enter($__internal_16962a64bf7f57f8ba8705d0d2e1c4ece03c0659a4e133fce16c439566da2aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_2ec64f58c4316d18adac5ffed5478a0adb00821c729af360ef7f3c700ba9a548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec64f58c4316d18adac5ffed5478a0adb00821c729af360ef7f3c700ba9a548->enter($__internal_2ec64f58c4316d18adac5ffed5478a0adb00821c729af360ef7f3c700ba9a548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_2ec64f58c4316d18adac5ffed5478a0adb00821c729af360ef7f3c700ba9a548->leave($__internal_2ec64f58c4316d18adac5ffed5478a0adb00821c729af360ef7f3c700ba9a548_prof);

        
        $__internal_16962a64bf7f57f8ba8705d0d2e1c4ece03c0659a4e133fce16c439566da2aa5->leave($__internal_16962a64bf7f57f8ba8705d0d2e1c4ece03c0659a4e133fce16c439566da2aa5_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_91206e5966b855b578e30b139fd274a8a9775477246186f1ba074e769901321e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91206e5966b855b578e30b139fd274a8a9775477246186f1ba074e769901321e->enter($__internal_91206e5966b855b578e30b139fd274a8a9775477246186f1ba074e769901321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_551d4a1e295b122c15b6bffd47f72161f6823b02ba18eb94f512c5ecf6d10341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d4a1e295b122c15b6bffd47f72161f6823b02ba18eb94f512c5ecf6d10341->enter($__internal_551d4a1e295b122c15b6bffd47f72161f6823b02ba18eb94f512c5ecf6d10341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_551d4a1e295b122c15b6bffd47f72161f6823b02ba18eb94f512c5ecf6d10341->leave($__internal_551d4a1e295b122c15b6bffd47f72161f6823b02ba18eb94f512c5ecf6d10341_prof);

        
        $__internal_91206e5966b855b578e30b139fd274a8a9775477246186f1ba074e769901321e->leave($__internal_91206e5966b855b578e30b139fd274a8a9775477246186f1ba074e769901321e_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e300dfd8c5f7fffcb8902ea89c77f68c00914e99423e126ae09987847f4a5ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e300dfd8c5f7fffcb8902ea89c77f68c00914e99423e126ae09987847f4a5ed4->enter($__internal_e300dfd8c5f7fffcb8902ea89c77f68c00914e99423e126ae09987847f4a5ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_afdb81d317de215fc7c946be5aeed8d6e3bc05aa0fd54a26b96f9396e1d78488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdb81d317de215fc7c946be5aeed8d6e3bc05aa0fd54a26b96f9396e1d78488->enter($__internal_afdb81d317de215fc7c946be5aeed8d6e3bc05aa0fd54a26b96f9396e1d78488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_afdb81d317de215fc7c946be5aeed8d6e3bc05aa0fd54a26b96f9396e1d78488->leave($__internal_afdb81d317de215fc7c946be5aeed8d6e3bc05aa0fd54a26b96f9396e1d78488_prof);

        
        $__internal_e300dfd8c5f7fffcb8902ea89c77f68c00914e99423e126ae09987847f4a5ed4->leave($__internal_e300dfd8c5f7fffcb8902ea89c77f68c00914e99423e126ae09987847f4a5ed4_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_abca99a43743422f2d021559e1b4cbbf79ee61cf2712144f7814534af1da16fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abca99a43743422f2d021559e1b4cbbf79ee61cf2712144f7814534af1da16fc->enter($__internal_abca99a43743422f2d021559e1b4cbbf79ee61cf2712144f7814534af1da16fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_52fe820875024e8cbae3357d750d829482efd93046c34fbb6a91e70637e69f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fe820875024e8cbae3357d750d829482efd93046c34fbb6a91e70637e69f36->enter($__internal_52fe820875024e8cbae3357d750d829482efd93046c34fbb6a91e70637e69f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_52fe820875024e8cbae3357d750d829482efd93046c34fbb6a91e70637e69f36->leave($__internal_52fe820875024e8cbae3357d750d829482efd93046c34fbb6a91e70637e69f36_prof);

        
        $__internal_abca99a43743422f2d021559e1b4cbbf79ee61cf2712144f7814534af1da16fc->leave($__internal_abca99a43743422f2d021559e1b4cbbf79ee61cf2712144f7814534af1da16fc_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d2e680be04b0fc656b441466298c9dd63ee8e016fe4174e77ab833d60545eda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e680be04b0fc656b441466298c9dd63ee8e016fe4174e77ab833d60545eda3->enter($__internal_d2e680be04b0fc656b441466298c9dd63ee8e016fe4174e77ab833d60545eda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_86405dcced63973f25dd820d62bc07e14b1bc6fa6df4786d24905d09805a46fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86405dcced63973f25dd820d62bc07e14b1bc6fa6df4786d24905d09805a46fe->enter($__internal_86405dcced63973f25dd820d62bc07e14b1bc6fa6df4786d24905d09805a46fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_86405dcced63973f25dd820d62bc07e14b1bc6fa6df4786d24905d09805a46fe->leave($__internal_86405dcced63973f25dd820d62bc07e14b1bc6fa6df4786d24905d09805a46fe_prof);

        
        $__internal_d2e680be04b0fc656b441466298c9dd63ee8e016fe4174e77ab833d60545eda3->leave($__internal_d2e680be04b0fc656b441466298c9dd63ee8e016fe4174e77ab833d60545eda3_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_62ff0f34f410a1eaf9abd6de08a514358b13e371f535c51d4591e4836c5fa672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ff0f34f410a1eaf9abd6de08a514358b13e371f535c51d4591e4836c5fa672->enter($__internal_62ff0f34f410a1eaf9abd6de08a514358b13e371f535c51d4591e4836c5fa672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8859f97c985ea6b85148da505e6ddecf936fa70a9b2e1bb1c0d1f44032336f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8859f97c985ea6b85148da505e6ddecf936fa70a9b2e1bb1c0d1f44032336f09->enter($__internal_8859f97c985ea6b85148da505e6ddecf936fa70a9b2e1bb1c0d1f44032336f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8859f97c985ea6b85148da505e6ddecf936fa70a9b2e1bb1c0d1f44032336f09->leave($__internal_8859f97c985ea6b85148da505e6ddecf936fa70a9b2e1bb1c0d1f44032336f09_prof);

        
        $__internal_62ff0f34f410a1eaf9abd6de08a514358b13e371f535c51d4591e4836c5fa672->leave($__internal_62ff0f34f410a1eaf9abd6de08a514358b13e371f535c51d4591e4836c5fa672_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_dab98f894831531da51f78555e61da93ad9526dea62ced5c984a154b657db2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab98f894831531da51f78555e61da93ad9526dea62ced5c984a154b657db2b8->enter($__internal_dab98f894831531da51f78555e61da93ad9526dea62ced5c984a154b657db2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_00ac8638fd26e6f55c3cb95f953249033627d57e05cd8916538c957cfeab61a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ac8638fd26e6f55c3cb95f953249033627d57e05cd8916538c957cfeab61a6->enter($__internal_00ac8638fd26e6f55c3cb95f953249033627d57e05cd8916538c957cfeab61a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_00ac8638fd26e6f55c3cb95f953249033627d57e05cd8916538c957cfeab61a6->leave($__internal_00ac8638fd26e6f55c3cb95f953249033627d57e05cd8916538c957cfeab61a6_prof);

        
        $__internal_dab98f894831531da51f78555e61da93ad9526dea62ced5c984a154b657db2b8->leave($__internal_dab98f894831531da51f78555e61da93ad9526dea62ced5c984a154b657db2b8_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_77f3c2b4835c3cbd7c8d1e76fab1f94cc4a5c3545a52cfee193b7cc9131873ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f3c2b4835c3cbd7c8d1e76fab1f94cc4a5c3545a52cfee193b7cc9131873ee->enter($__internal_77f3c2b4835c3cbd7c8d1e76fab1f94cc4a5c3545a52cfee193b7cc9131873ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cbb5c66d9289019e504f7c11d730938390a31cfddea9d20128f8d0ef20e77ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb5c66d9289019e504f7c11d730938390a31cfddea9d20128f8d0ef20e77ce7->enter($__internal_cbb5c66d9289019e504f7c11d730938390a31cfddea9d20128f8d0ef20e77ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cbb5c66d9289019e504f7c11d730938390a31cfddea9d20128f8d0ef20e77ce7->leave($__internal_cbb5c66d9289019e504f7c11d730938390a31cfddea9d20128f8d0ef20e77ce7_prof);

        
        $__internal_77f3c2b4835c3cbd7c8d1e76fab1f94cc4a5c3545a52cfee193b7cc9131873ee->leave($__internal_77f3c2b4835c3cbd7c8d1e76fab1f94cc4a5c3545a52cfee193b7cc9131873ee_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_738ac684f4671f5bdf24c5e95bfdfe2cafc48833727ffde65c7e9fba49820e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738ac684f4671f5bdf24c5e95bfdfe2cafc48833727ffde65c7e9fba49820e8e->enter($__internal_738ac684f4671f5bdf24c5e95bfdfe2cafc48833727ffde65c7e9fba49820e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5f467656633d32903e5ae43ec7c32df8ffc9680503f45596d0a4475b0c43be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f467656633d32903e5ae43ec7c32df8ffc9680503f45596d0a4475b0c43be57->enter($__internal_5f467656633d32903e5ae43ec7c32df8ffc9680503f45596d0a4475b0c43be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5f467656633d32903e5ae43ec7c32df8ffc9680503f45596d0a4475b0c43be57->leave($__internal_5f467656633d32903e5ae43ec7c32df8ffc9680503f45596d0a4475b0c43be57_prof);

        
        $__internal_738ac684f4671f5bdf24c5e95bfdfe2cafc48833727ffde65c7e9fba49820e8e->leave($__internal_738ac684f4671f5bdf24c5e95bfdfe2cafc48833727ffde65c7e9fba49820e8e_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_08ddeb490cce7b2d0c45502ad9101f358a217093103978185863f86223165f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ddeb490cce7b2d0c45502ad9101f358a217093103978185863f86223165f4e->enter($__internal_08ddeb490cce7b2d0c45502ad9101f358a217093103978185863f86223165f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e1facadbe8fe6a09fb8592f46503a97abeb4b63a80634654812d1d8d04e704f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1facadbe8fe6a09fb8592f46503a97abeb4b63a80634654812d1d8d04e704f5->enter($__internal_e1facadbe8fe6a09fb8592f46503a97abeb4b63a80634654812d1d8d04e704f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_e1facadbe8fe6a09fb8592f46503a97abeb4b63a80634654812d1d8d04e704f5->leave($__internal_e1facadbe8fe6a09fb8592f46503a97abeb4b63a80634654812d1d8d04e704f5_prof);

        
        $__internal_08ddeb490cce7b2d0c45502ad9101f358a217093103978185863f86223165f4e->leave($__internal_08ddeb490cce7b2d0c45502ad9101f358a217093103978185863f86223165f4e_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6e6d465d2e07d88d2fe8e14a5ddc304c6b00d5c10c86bf92d495cec7f707e659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6d465d2e07d88d2fe8e14a5ddc304c6b00d5c10c86bf92d495cec7f707e659->enter($__internal_6e6d465d2e07d88d2fe8e14a5ddc304c6b00d5c10c86bf92d495cec7f707e659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cf6c312246624ba0b52ce6f350daa1909c48cb37c9f812168f86584b1613c7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6c312246624ba0b52ce6f350daa1909c48cb37c9f812168f86584b1613c7af->enter($__internal_cf6c312246624ba0b52ce6f350daa1909c48cb37c9f812168f86584b1613c7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_cf6c312246624ba0b52ce6f350daa1909c48cb37c9f812168f86584b1613c7af->leave($__internal_cf6c312246624ba0b52ce6f350daa1909c48cb37c9f812168f86584b1613c7af_prof);

        
        $__internal_6e6d465d2e07d88d2fe8e14a5ddc304c6b00d5c10c86bf92d495cec7f707e659->leave($__internal_6e6d465d2e07d88d2fe8e14a5ddc304c6b00d5c10c86bf92d495cec7f707e659_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cc5fdba6868d3dbc930c8436733f471fa70a94dee749cf4c60ff5c898d45cd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5fdba6868d3dbc930c8436733f471fa70a94dee749cf4c60ff5c898d45cd43->enter($__internal_cc5fdba6868d3dbc930c8436733f471fa70a94dee749cf4c60ff5c898d45cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5789a974a868981de3eeac2c935f0499f814a181b4de781d91c9fd4fdf431f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5789a974a868981de3eeac2c935f0499f814a181b4de781d91c9fd4fdf431f7d->enter($__internal_5789a974a868981de3eeac2c935f0499f814a181b4de781d91c9fd4fdf431f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_5789a974a868981de3eeac2c935f0499f814a181b4de781d91c9fd4fdf431f7d->leave($__internal_5789a974a868981de3eeac2c935f0499f814a181b4de781d91c9fd4fdf431f7d_prof);

        
        $__internal_cc5fdba6868d3dbc930c8436733f471fa70a94dee749cf4c60ff5c898d45cd43->leave($__internal_cc5fdba6868d3dbc930c8436733f471fa70a94dee749cf4c60ff5c898d45cd43_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_155f64f407292c30cac4822a8474c68ed2fb7a565a2075745a832ae706b1bfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155f64f407292c30cac4822a8474c68ed2fb7a565a2075745a832ae706b1bfb5->enter($__internal_155f64f407292c30cac4822a8474c68ed2fb7a565a2075745a832ae706b1bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_cceaabddeee7120d629783c00c299bc55dd26a4a74256266a13a18b92061da6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cceaabddeee7120d629783c00c299bc55dd26a4a74256266a13a18b92061da6e->enter($__internal_cceaabddeee7120d629783c00c299bc55dd26a4a74256266a13a18b92061da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cceaabddeee7120d629783c00c299bc55dd26a4a74256266a13a18b92061da6e->leave($__internal_cceaabddeee7120d629783c00c299bc55dd26a4a74256266a13a18b92061da6e_prof);

        
        $__internal_155f64f407292c30cac4822a8474c68ed2fb7a565a2075745a832ae706b1bfb5->leave($__internal_155f64f407292c30cac4822a8474c68ed2fb7a565a2075745a832ae706b1bfb5_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0d1e4b1c41ad1301a81673fb20af1212c478a056b390bb1389ccbbdd1c7fba48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1e4b1c41ad1301a81673fb20af1212c478a056b390bb1389ccbbdd1c7fba48->enter($__internal_0d1e4b1c41ad1301a81673fb20af1212c478a056b390bb1389ccbbdd1c7fba48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4d52cc8cb06ddc3367c1c46d4de12c57cc42a39d9bc2cc70634c35f5ca250a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d52cc8cb06ddc3367c1c46d4de12c57cc42a39d9bc2cc70634c35f5ca250a85->enter($__internal_4d52cc8cb06ddc3367c1c46d4de12c57cc42a39d9bc2cc70634c35f5ca250a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4d52cc8cb06ddc3367c1c46d4de12c57cc42a39d9bc2cc70634c35f5ca250a85->leave($__internal_4d52cc8cb06ddc3367c1c46d4de12c57cc42a39d9bc2cc70634c35f5ca250a85_prof);

        
        $__internal_0d1e4b1c41ad1301a81673fb20af1212c478a056b390bb1389ccbbdd1c7fba48->leave($__internal_0d1e4b1c41ad1301a81673fb20af1212c478a056b390bb1389ccbbdd1c7fba48_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0297a046facb0c1c0b92c716f81a4a09b83c0ffb5670d9058099c5fca27bab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0297a046facb0c1c0b92c716f81a4a09b83c0ffb5670d9058099c5fca27bab21->enter($__internal_0297a046facb0c1c0b92c716f81a4a09b83c0ffb5670d9058099c5fca27bab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_965028b5ff7c1048c2636dbcbe9f7b0c7dbd81dd3735f173debfec6deb2d7c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965028b5ff7c1048c2636dbcbe9f7b0c7dbd81dd3735f173debfec6deb2d7c64->enter($__internal_965028b5ff7c1048c2636dbcbe9f7b0c7dbd81dd3735f173debfec6deb2d7c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_965028b5ff7c1048c2636dbcbe9f7b0c7dbd81dd3735f173debfec6deb2d7c64->leave($__internal_965028b5ff7c1048c2636dbcbe9f7b0c7dbd81dd3735f173debfec6deb2d7c64_prof);

        
        $__internal_0297a046facb0c1c0b92c716f81a4a09b83c0ffb5670d9058099c5fca27bab21->leave($__internal_0297a046facb0c1c0b92c716f81a4a09b83c0ffb5670d9058099c5fca27bab21_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4b73611a69eaacf4473060bcec93006aba3c8b142dafb936918e3632b85ddfe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b73611a69eaacf4473060bcec93006aba3c8b142dafb936918e3632b85ddfe4->enter($__internal_4b73611a69eaacf4473060bcec93006aba3c8b142dafb936918e3632b85ddfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f78359cfea582208d84c7facae0bd5022569b1813dd7d6e00d33f09b333a728b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78359cfea582208d84c7facae0bd5022569b1813dd7d6e00d33f09b333a728b->enter($__internal_f78359cfea582208d84c7facae0bd5022569b1813dd7d6e00d33f09b333a728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f78359cfea582208d84c7facae0bd5022569b1813dd7d6e00d33f09b333a728b->leave($__internal_f78359cfea582208d84c7facae0bd5022569b1813dd7d6e00d33f09b333a728b_prof);

        
        $__internal_4b73611a69eaacf4473060bcec93006aba3c8b142dafb936918e3632b85ddfe4->leave($__internal_4b73611a69eaacf4473060bcec93006aba3c8b142dafb936918e3632b85ddfe4_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_93cbd85c2f4852f972ba4c8e5ab59a05cc5d7e029821ebd1d3fbc081c7c4372c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93cbd85c2f4852f972ba4c8e5ab59a05cc5d7e029821ebd1d3fbc081c7c4372c->enter($__internal_93cbd85c2f4852f972ba4c8e5ab59a05cc5d7e029821ebd1d3fbc081c7c4372c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_560e314bbae57f2e381cda9a838e688819481fddf01a4fca8da0b15565bcd92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560e314bbae57f2e381cda9a838e688819481fddf01a4fca8da0b15565bcd92e->enter($__internal_560e314bbae57f2e381cda9a838e688819481fddf01a4fca8da0b15565bcd92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_560e314bbae57f2e381cda9a838e688819481fddf01a4fca8da0b15565bcd92e->leave($__internal_560e314bbae57f2e381cda9a838e688819481fddf01a4fca8da0b15565bcd92e_prof);

        
        $__internal_93cbd85c2f4852f972ba4c8e5ab59a05cc5d7e029821ebd1d3fbc081c7c4372c->leave($__internal_93cbd85c2f4852f972ba4c8e5ab59a05cc5d7e029821ebd1d3fbc081c7c4372c_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3fb9daf3ace8befcaf7cce822d779089db011424236815c35dad0e5d2557321e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb9daf3ace8befcaf7cce822d779089db011424236815c35dad0e5d2557321e->enter($__internal_3fb9daf3ace8befcaf7cce822d779089db011424236815c35dad0e5d2557321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_936bf02520b552069320ef5e662fe56a9d21f88d5191dd9c2b0bb03aef77122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936bf02520b552069320ef5e662fe56a9d21f88d5191dd9c2b0bb03aef77122a->enter($__internal_936bf02520b552069320ef5e662fe56a9d21f88d5191dd9c2b0bb03aef77122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_936bf02520b552069320ef5e662fe56a9d21f88d5191dd9c2b0bb03aef77122a->leave($__internal_936bf02520b552069320ef5e662fe56a9d21f88d5191dd9c2b0bb03aef77122a_prof);

        
        $__internal_3fb9daf3ace8befcaf7cce822d779089db011424236815c35dad0e5d2557321e->leave($__internal_3fb9daf3ace8befcaf7cce822d779089db011424236815c35dad0e5d2557321e_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_475649724ca48eddae155cc333fa002c1c3fd5399048ff7b3d13442455b0e11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475649724ca48eddae155cc333fa002c1c3fd5399048ff7b3d13442455b0e11d->enter($__internal_475649724ca48eddae155cc333fa002c1c3fd5399048ff7b3d13442455b0e11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4a52dce5b4d3051602f94e5a33895628a5e868eb9a19977c1864ce8e117480b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a52dce5b4d3051602f94e5a33895628a5e868eb9a19977c1864ce8e117480b7->enter($__internal_4a52dce5b4d3051602f94e5a33895628a5e868eb9a19977c1864ce8e117480b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4a52dce5b4d3051602f94e5a33895628a5e868eb9a19977c1864ce8e117480b7->leave($__internal_4a52dce5b4d3051602f94e5a33895628a5e868eb9a19977c1864ce8e117480b7_prof);

        
        $__internal_475649724ca48eddae155cc333fa002c1c3fd5399048ff7b3d13442455b0e11d->leave($__internal_475649724ca48eddae155cc333fa002c1c3fd5399048ff7b3d13442455b0e11d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
