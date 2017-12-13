<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3a9a12d857df3b5e5e76c0dd267d375522e18e1c0c37b8efada538f7708e989a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee3a4f55635462b9506599fa9577b900d333afe5fafa5756ff94b4130762b327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3a4f55635462b9506599fa9577b900d333afe5fafa5756ff94b4130762b327->enter($__internal_ee3a4f55635462b9506599fa9577b900d333afe5fafa5756ff94b4130762b327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_e20371e5072af55623e0285e92ac9dfbf141a7d295aa9903ae5aba141e5f9831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20371e5072af55623e0285e92ac9dfbf141a7d295aa9903ae5aba141e5f9831->enter($__internal_e20371e5072af55623e0285e92ac9dfbf141a7d295aa9903ae5aba141e5f9831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_ee3a4f55635462b9506599fa9577b900d333afe5fafa5756ff94b4130762b327->leave($__internal_ee3a4f55635462b9506599fa9577b900d333afe5fafa5756ff94b4130762b327_prof);

        
        $__internal_e20371e5072af55623e0285e92ac9dfbf141a7d295aa9903ae5aba141e5f9831->leave($__internal_e20371e5072af55623e0285e92ac9dfbf141a7d295aa9903ae5aba141e5f9831_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e870b2c2d81815a07a2ab383b6a810bb5f53fc1c3d2a00ccc81bea25ca59a0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e870b2c2d81815a07a2ab383b6a810bb5f53fc1c3d2a00ccc81bea25ca59a0b1->enter($__internal_e870b2c2d81815a07a2ab383b6a810bb5f53fc1c3d2a00ccc81bea25ca59a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4b1eafad395e6fe0b6fa2ba1a700951b522e04289718d7edd332ee9c2f715563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1eafad395e6fe0b6fa2ba1a700951b522e04289718d7edd332ee9c2f715563->enter($__internal_4b1eafad395e6fe0b6fa2ba1a700951b522e04289718d7edd332ee9c2f715563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_4b1eafad395e6fe0b6fa2ba1a700951b522e04289718d7edd332ee9c2f715563->leave($__internal_4b1eafad395e6fe0b6fa2ba1a700951b522e04289718d7edd332ee9c2f715563_prof);

        
        $__internal_e870b2c2d81815a07a2ab383b6a810bb5f53fc1c3d2a00ccc81bea25ca59a0b1->leave($__internal_e870b2c2d81815a07a2ab383b6a810bb5f53fc1c3d2a00ccc81bea25ca59a0b1_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f84713187e19b243a06b6221f9f73147a032bffceaf720c1a197af497fea6ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84713187e19b243a06b6221f9f73147a032bffceaf720c1a197af497fea6ae4->enter($__internal_f84713187e19b243a06b6221f9f73147a032bffceaf720c1a197af497fea6ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2013e6c27993228990d5e4d6acc52fec0b78b252869a0965166cc0dd28c223fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2013e6c27993228990d5e4d6acc52fec0b78b252869a0965166cc0dd28c223fb->enter($__internal_2013e6c27993228990d5e4d6acc52fec0b78b252869a0965166cc0dd28c223fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2013e6c27993228990d5e4d6acc52fec0b78b252869a0965166cc0dd28c223fb->leave($__internal_2013e6c27993228990d5e4d6acc52fec0b78b252869a0965166cc0dd28c223fb_prof);

        
        $__internal_f84713187e19b243a06b6221f9f73147a032bffceaf720c1a197af497fea6ae4->leave($__internal_f84713187e19b243a06b6221f9f73147a032bffceaf720c1a197af497fea6ae4_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d7dbe39874de240aca2bf34923527a051bb74ecddd3a2ea3eb3b9e961640cb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dbe39874de240aca2bf34923527a051bb74ecddd3a2ea3eb3b9e961640cb29->enter($__internal_d7dbe39874de240aca2bf34923527a051bb74ecddd3a2ea3eb3b9e961640cb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1d858ebb5e12c0df188c33622866dc9eaf51f8b0b297fcb4088cdb9094d4756e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d858ebb5e12c0df188c33622866dc9eaf51f8b0b297fcb4088cdb9094d4756e->enter($__internal_1d858ebb5e12c0df188c33622866dc9eaf51f8b0b297fcb4088cdb9094d4756e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_1d858ebb5e12c0df188c33622866dc9eaf51f8b0b297fcb4088cdb9094d4756e->leave($__internal_1d858ebb5e12c0df188c33622866dc9eaf51f8b0b297fcb4088cdb9094d4756e_prof);

        
        $__internal_d7dbe39874de240aca2bf34923527a051bb74ecddd3a2ea3eb3b9e961640cb29->leave($__internal_d7dbe39874de240aca2bf34923527a051bb74ecddd3a2ea3eb3b9e961640cb29_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2e6c08e88ed29e5cc907e172fe31f7f2e19a10d64899ba14b27980e2c2c00269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6c08e88ed29e5cc907e172fe31f7f2e19a10d64899ba14b27980e2c2c00269->enter($__internal_2e6c08e88ed29e5cc907e172fe31f7f2e19a10d64899ba14b27980e2c2c00269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f31d13cfa3276630d14aa5a6616a85a2b7ee27f28b7fb3a1d7385fd6062a9be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31d13cfa3276630d14aa5a6616a85a2b7ee27f28b7fb3a1d7385fd6062a9be3->enter($__internal_f31d13cfa3276630d14aa5a6616a85a2b7ee27f28b7fb3a1d7385fd6062a9be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_f31d13cfa3276630d14aa5a6616a85a2b7ee27f28b7fb3a1d7385fd6062a9be3->leave($__internal_f31d13cfa3276630d14aa5a6616a85a2b7ee27f28b7fb3a1d7385fd6062a9be3_prof);

        
        $__internal_2e6c08e88ed29e5cc907e172fe31f7f2e19a10d64899ba14b27980e2c2c00269->leave($__internal_2e6c08e88ed29e5cc907e172fe31f7f2e19a10d64899ba14b27980e2c2c00269_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b6f53c77a6f181c3a8ed16462f4870714697538befd83ad406c16283800b941f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f53c77a6f181c3a8ed16462f4870714697538befd83ad406c16283800b941f->enter($__internal_b6f53c77a6f181c3a8ed16462f4870714697538befd83ad406c16283800b941f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_35cec1f216174adce6becf659ea44f92602f87936b1d1b0c7539fca98cb6cfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cec1f216174adce6becf659ea44f92602f87936b1d1b0c7539fca98cb6cfdc->enter($__internal_35cec1f216174adce6becf659ea44f92602f87936b1d1b0c7539fca98cb6cfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_35cec1f216174adce6becf659ea44f92602f87936b1d1b0c7539fca98cb6cfdc->leave($__internal_35cec1f216174adce6becf659ea44f92602f87936b1d1b0c7539fca98cb6cfdc_prof);

        
        $__internal_b6f53c77a6f181c3a8ed16462f4870714697538befd83ad406c16283800b941f->leave($__internal_b6f53c77a6f181c3a8ed16462f4870714697538befd83ad406c16283800b941f_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_139a47d4b07d7bb6e5a400ebaa8739f0161ccecbf047c188cebe235f530427f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139a47d4b07d7bb6e5a400ebaa8739f0161ccecbf047c188cebe235f530427f3->enter($__internal_139a47d4b07d7bb6e5a400ebaa8739f0161ccecbf047c188cebe235f530427f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fcc77772043123ef4080e28d3a4bf9a7de27867e2d73a48acd1ff70d61dd1faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc77772043123ef4080e28d3a4bf9a7de27867e2d73a48acd1ff70d61dd1faf->enter($__internal_fcc77772043123ef4080e28d3a4bf9a7de27867e2d73a48acd1ff70d61dd1faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_fcc77772043123ef4080e28d3a4bf9a7de27867e2d73a48acd1ff70d61dd1faf->leave($__internal_fcc77772043123ef4080e28d3a4bf9a7de27867e2d73a48acd1ff70d61dd1faf_prof);

        
        $__internal_139a47d4b07d7bb6e5a400ebaa8739f0161ccecbf047c188cebe235f530427f3->leave($__internal_139a47d4b07d7bb6e5a400ebaa8739f0161ccecbf047c188cebe235f530427f3_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_0dbbcaacaa22824970f50bd44e30ac4d773b699bee29c039caedd99f4c49ba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbbcaacaa22824970f50bd44e30ac4d773b699bee29c039caedd99f4c49ba7e->enter($__internal_0dbbcaacaa22824970f50bd44e30ac4d773b699bee29c039caedd99f4c49ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_4b523883f8f40ccdd6f803eadf99aa8b5436a6700104463214a7acc104a6e2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b523883f8f40ccdd6f803eadf99aa8b5436a6700104463214a7acc104a6e2ac->enter($__internal_4b523883f8f40ccdd6f803eadf99aa8b5436a6700104463214a7acc104a6e2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4b523883f8f40ccdd6f803eadf99aa8b5436a6700104463214a7acc104a6e2ac->leave($__internal_4b523883f8f40ccdd6f803eadf99aa8b5436a6700104463214a7acc104a6e2ac_prof);

        
        $__internal_0dbbcaacaa22824970f50bd44e30ac4d773b699bee29c039caedd99f4c49ba7e->leave($__internal_0dbbcaacaa22824970f50bd44e30ac4d773b699bee29c039caedd99f4c49ba7e_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_15f13957f3dee3ba4e068c63bb64ff14e2e1ca198f0246a791e7abbbb98e276d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f13957f3dee3ba4e068c63bb64ff14e2e1ca198f0246a791e7abbbb98e276d->enter($__internal_15f13957f3dee3ba4e068c63bb64ff14e2e1ca198f0246a791e7abbbb98e276d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_46056ca0391d6820f520ac71fee50cfec76ff50c558fec227bfdefe8b57d392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46056ca0391d6820f520ac71fee50cfec76ff50c558fec227bfdefe8b57d392e->enter($__internal_46056ca0391d6820f520ac71fee50cfec76ff50c558fec227bfdefe8b57d392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_46056ca0391d6820f520ac71fee50cfec76ff50c558fec227bfdefe8b57d392e->leave($__internal_46056ca0391d6820f520ac71fee50cfec76ff50c558fec227bfdefe8b57d392e_prof);

        
        $__internal_15f13957f3dee3ba4e068c63bb64ff14e2e1ca198f0246a791e7abbbb98e276d->leave($__internal_15f13957f3dee3ba4e068c63bb64ff14e2e1ca198f0246a791e7abbbb98e276d_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_daa124528866361f2cef3eea45485b4cc5a9c8580979b9e174e8da62191288e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa124528866361f2cef3eea45485b4cc5a9c8580979b9e174e8da62191288e7->enter($__internal_daa124528866361f2cef3eea45485b4cc5a9c8580979b9e174e8da62191288e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fe9fabd12ed352283987b2536278b7822e1f5b5b813e48f35ccf7fc69330c4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9fabd12ed352283987b2536278b7822e1f5b5b813e48f35ccf7fc69330c4b4->enter($__internal_fe9fabd12ed352283987b2536278b7822e1f5b5b813e48f35ccf7fc69330c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fe9fabd12ed352283987b2536278b7822e1f5b5b813e48f35ccf7fc69330c4b4->leave($__internal_fe9fabd12ed352283987b2536278b7822e1f5b5b813e48f35ccf7fc69330c4b4_prof);

        
        $__internal_daa124528866361f2cef3eea45485b4cc5a9c8580979b9e174e8da62191288e7->leave($__internal_daa124528866361f2cef3eea45485b4cc5a9c8580979b9e174e8da62191288e7_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_90df1250fd9fe20b1396947e68a013dd4c5e15931af247101abee55e354b46b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90df1250fd9fe20b1396947e68a013dd4c5e15931af247101abee55e354b46b5->enter($__internal_90df1250fd9fe20b1396947e68a013dd4c5e15931af247101abee55e354b46b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7f19a9e1201fe11f2bab8eaff26dd03fc4f37bbcc742d3bec3ad4ab92618be97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f19a9e1201fe11f2bab8eaff26dd03fc4f37bbcc742d3bec3ad4ab92618be97->enter($__internal_7f19a9e1201fe11f2bab8eaff26dd03fc4f37bbcc742d3bec3ad4ab92618be97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_7f19a9e1201fe11f2bab8eaff26dd03fc4f37bbcc742d3bec3ad4ab92618be97->leave($__internal_7f19a9e1201fe11f2bab8eaff26dd03fc4f37bbcc742d3bec3ad4ab92618be97_prof);

        
        $__internal_90df1250fd9fe20b1396947e68a013dd4c5e15931af247101abee55e354b46b5->leave($__internal_90df1250fd9fe20b1396947e68a013dd4c5e15931af247101abee55e354b46b5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "D:\\symfony\\my_project_name\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
