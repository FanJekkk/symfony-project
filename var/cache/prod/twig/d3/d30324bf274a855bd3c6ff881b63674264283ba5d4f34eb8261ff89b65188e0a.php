<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4568dd1e5bad4a6f10696ea4d871e2dc4a6006d806075c3dd9ffd84adfcab084 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('choice_label', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('radio_label', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 106
        echo "
";
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_row', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('button_row', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('choice_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('date_row', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('time_row', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('radio_row', $context, $blocks);
        // line 160
        echo "
";
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('form_errors', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_help', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 13), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["prepend"] =  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["money_pattern"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "{{") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["money_pattern"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "}}") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 36), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 47), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 59
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 60), "")) : ("")) . " control-label"))]);
        // line 61
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 64
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 66), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 67
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 70
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 73
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 76
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 79
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 82
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 85
            if (($context["required"] ?? null)) {
                // line 86
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 86), "")) : ("")) . " required"))]);
            }
            // line 88
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 89
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 89), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
            }
            // line 91
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 92
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 93
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 94
($context["name"] ?? null), "%id%" =>                     // line 95
($context["id"] ?? null)]);
                } else {
                    // line 98
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 101
            echo "<label";
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ["attr" => ($context["label_attr"] ?? null)];
            if (!twig_test_iterable($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 101, $this->getSourceContext());
            }
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_to_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 102
            echo ($context["widget"] ?? null);
            echo " ";
            (( !(($context["label"] ?? null) === false)) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            // line 103
            echo "</label>";
        }
    }

    // line 109
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        $context["widget_attr"] = [];
        // line 111
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 112
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 114
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo " ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        echo " ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo " ";
        // line 118
        echo "</div> ";
    }

    // line 121
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "<div class=\"form-group\">";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 124
        echo "</div>";
    }

    // line 127
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        $context["force_error"] = true;
        // line 129
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 132
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        $context["force_error"] = true;
        // line 134
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 137
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        $context["force_error"] = true;
        // line 139
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 142
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        $context["force_error"] = true;
        // line 144
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 147
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 151
        echo "</div>";
    }

    // line 154
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 158
        echo "</div>";
    }

    // line 163
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 165
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 166
            echo "    <ul class=\"list-unstyled\">";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 168
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 168), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "</ul>
    ";
            // line 171
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    // line 177
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 179
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 179), "")) : ("")) . " help-block"))]);
            // line 180
            echo "<span id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 180, $this->getSourceContext());
            }
            $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_to_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 181
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 182
                if ((($context["help_html"] ?? null) === false)) {
                    // line 183
                    echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 185
                    echo ($context["help"] ?? null);
                }
            } else {
                // line 188
                if ((($context["help_html"] ?? null) === false)) {
                    // line 189
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 191
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 194
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  579 => 194,  575 => 191,  572 => 189,  570 => 188,  566 => 185,  563 => 183,  561 => 182,  559 => 181,  545 => 180,  543 => 179,  541 => 178,  537 => 177,  528 => 171,  525 => 170,  517 => 168,  513 => 167,  511 => 166,  505 => 165,  503 => 164,  499 => 163,  495 => 158,  493 => 157,  491 => 156,  485 => 155,  481 => 154,  477 => 151,  475 => 150,  473 => 149,  467 => 148,  463 => 147,  459 => 144,  457 => 143,  453 => 142,  449 => 139,  447 => 138,  443 => 137,  439 => 134,  437 => 133,  433 => 132,  429 => 129,  427 => 128,  423 => 127,  419 => 124,  417 => 123,  415 => 122,  411 => 121,  407 => 118,  404 => 117,  401 => 116,  398 => 115,  392 => 114,  389 => 112,  387 => 111,  385 => 110,  381 => 109,  376 => 103,  372 => 102,  360 => 101,  356 => 98,  353 => 95,  352 => 94,  351 => 93,  349 => 92,  347 => 91,  344 => 89,  342 => 88,  339 => 86,  337 => 85,  335 => 84,  331 => 82,  327 => 79,  325 => 77,  321 => 76,  317 => 73,  315 => 71,  311 => 70,  307 => 67,  305 => 66,  301 => 64,  297 => 61,  295 => 60,  291 => 59,  286 => 53,  284 => 52,  282 => 51,  279 => 49,  277 => 48,  275 => 47,  271 => 46,  266 => 42,  264 => 41,  262 => 40,  259 => 38,  257 => 37,  255 => 36,  251 => 35,  246 => 31,  242 => 29,  236 => 27,  234 => 26,  232 => 25,  226 => 23,  224 => 22,  221 => 21,  218 => 20,  215 => 19,  213 => 18,  209 => 17,  205 => 14,  203 => 13,  199 => 12,  195 => 9,  192 => 7,  190 => 6,  186 => 5,  182 => 177,  179 => 176,  176 => 174,  174 => 163,  171 => 162,  168 => 160,  166 => 154,  163 => 153,  161 => 147,  158 => 146,  156 => 142,  153 => 141,  151 => 137,  148 => 136,  146 => 132,  143 => 131,  141 => 127,  138 => 126,  136 => 121,  133 => 120,  131 => 109,  128 => 108,  125 => 106,  123 => 82,  120 => 81,  118 => 76,  115 => 75,  113 => 70,  110 => 69,  108 => 64,  105 => 63,  103 => 59,  100 => 58,  97 => 56,  95 => 46,  92 => 45,  90 => 35,  87 => 34,  85 => 17,  82 => 16,  80 => 12,  77 => 11,  75 => 5,  72 => 4,  69 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "/var/www/html/symfony-project/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
