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
        $__internal_96e36096843a3e40be97c2c856caab0725d607c0e7ff57c61c38f6cf8507cb13 = $this->env->getExtension("native_profiler");
        $__internal_96e36096843a3e40be97c2c856caab0725d607c0e7ff57c61c38f6cf8507cb13->enter($__internal_96e36096843a3e40be97c2c856caab0725d607c0e7ff57c61c38f6cf8507cb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_96e36096843a3e40be97c2c856caab0725d607c0e7ff57c61c38f6cf8507cb13->leave($__internal_96e36096843a3e40be97c2c856caab0725d607c0e7ff57c61c38f6cf8507cb13_prof);

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
