<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b17514ab8922abbfe4ad9f429858ca6e115166c93d5d34217e11929803feedd4 extends Twig_Template
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
        $__internal_fb96f48902ec798b05f23e525d7d360b90d68096f12521ab70f8a79babc32034 = $this->env->getExtension("native_profiler");
        $__internal_fb96f48902ec798b05f23e525d7d360b90d68096f12521ab70f8a79babc32034->enter($__internal_fb96f48902ec798b05f23e525d7d360b90d68096f12521ab70f8a79babc32034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fb96f48902ec798b05f23e525d7d360b90d68096f12521ab70f8a79babc32034->leave($__internal_fb96f48902ec798b05f23e525d7d360b90d68096f12521ab70f8a79babc32034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
