<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a11b8b42c15884e79c095d5cdc8a13a55f90a93ca5fbecedc2e7e785b78ae9c1 extends Twig_Template
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
        $__internal_e860bbd7aef131c31a58beb8933c15868c15cd0b2ea943b90c728f55ed88154b = $this->env->getExtension("native_profiler");
        $__internal_e860bbd7aef131c31a58beb8933c15868c15cd0b2ea943b90c728f55ed88154b->enter($__internal_e860bbd7aef131c31a58beb8933c15868c15cd0b2ea943b90c728f55ed88154b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e860bbd7aef131c31a58beb8933c15868c15cd0b2ea943b90c728f55ed88154b->leave($__internal_e860bbd7aef131c31a58beb8933c15868c15cd0b2ea943b90c728f55ed88154b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
