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
        $__internal_a6b30749f1133bd1cb05ff1314310f1ba70671f735eac9f8273d35ff750b2571 = $this->env->getExtension("native_profiler");
        $__internal_a6b30749f1133bd1cb05ff1314310f1ba70671f735eac9f8273d35ff750b2571->enter($__internal_a6b30749f1133bd1cb05ff1314310f1ba70671f735eac9f8273d35ff750b2571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a6b30749f1133bd1cb05ff1314310f1ba70671f735eac9f8273d35ff750b2571->leave($__internal_a6b30749f1133bd1cb05ff1314310f1ba70671f735eac9f8273d35ff750b2571_prof);

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
