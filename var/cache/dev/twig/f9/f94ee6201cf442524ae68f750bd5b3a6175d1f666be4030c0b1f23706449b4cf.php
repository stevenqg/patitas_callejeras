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
        $__internal_5460b74304cfe7bb204ee85376638ef66ee3c7efdd8a6d0954dd2ac0dd5858d3 = $this->env->getExtension("native_profiler");
        $__internal_5460b74304cfe7bb204ee85376638ef66ee3c7efdd8a6d0954dd2ac0dd5858d3->enter($__internal_5460b74304cfe7bb204ee85376638ef66ee3c7efdd8a6d0954dd2ac0dd5858d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5460b74304cfe7bb204ee85376638ef66ee3c7efdd8a6d0954dd2ac0dd5858d3->leave($__internal_5460b74304cfe7bb204ee85376638ef66ee3c7efdd8a6d0954dd2ac0dd5858d3_prof);

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
