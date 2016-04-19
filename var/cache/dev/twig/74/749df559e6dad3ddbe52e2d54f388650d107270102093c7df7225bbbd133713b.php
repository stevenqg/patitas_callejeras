<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_87e4a7c2d759b5d55b8ff7ae201019e1d3bfc90badc9e6d567887b0d4b77c808 extends Twig_Template
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
        $__internal_a321a35fbd9144ba5d552c42d3011c4853420f2b7a7b251bb4dd5bb668ad5f65 = $this->env->getExtension("native_profiler");
        $__internal_a321a35fbd9144ba5d552c42d3011c4853420f2b7a7b251bb4dd5bb668ad5f65->enter($__internal_a321a35fbd9144ba5d552c42d3011c4853420f2b7a7b251bb4dd5bb668ad5f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a321a35fbd9144ba5d552c42d3011c4853420f2b7a7b251bb4dd5bb668ad5f65->leave($__internal_a321a35fbd9144ba5d552c42d3011c4853420f2b7a7b251bb4dd5bb668ad5f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
