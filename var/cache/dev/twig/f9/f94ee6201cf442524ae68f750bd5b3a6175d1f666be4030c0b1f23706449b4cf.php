<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_170c466ca536d1a244590de58391d1520aa90e7427ce7404b6828cced31795db extends Twig_Template
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
        $__internal_7e0fc0bd53a0c26952ad95f6835a1efdd21902a0f50c5b15510175904091bc15 = $this->env->getExtension("native_profiler");
        $__internal_7e0fc0bd53a0c26952ad95f6835a1efdd21902a0f50c5b15510175904091bc15->enter($__internal_7e0fc0bd53a0c26952ad95f6835a1efdd21902a0f50c5b15510175904091bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7e0fc0bd53a0c26952ad95f6835a1efdd21902a0f50c5b15510175904091bc15->leave($__internal_7e0fc0bd53a0c26952ad95f6835a1efdd21902a0f50c5b15510175904091bc15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
