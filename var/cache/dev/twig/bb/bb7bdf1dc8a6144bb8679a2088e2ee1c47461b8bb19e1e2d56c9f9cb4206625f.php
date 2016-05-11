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
        $__internal_03ca5dc1f4b7e5b3ca0c07a47d384ffc2b091cfbdc582dbf884114198bd29664 = $this->env->getExtension("native_profiler");
        $__internal_03ca5dc1f4b7e5b3ca0c07a47d384ffc2b091cfbdc582dbf884114198bd29664->enter($__internal_03ca5dc1f4b7e5b3ca0c07a47d384ffc2b091cfbdc582dbf884114198bd29664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_03ca5dc1f4b7e5b3ca0c07a47d384ffc2b091cfbdc582dbf884114198bd29664->leave($__internal_03ca5dc1f4b7e5b3ca0c07a47d384ffc2b091cfbdc582dbf884114198bd29664_prof);

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
