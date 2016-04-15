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
        $__internal_84545435da584499021561e4d6470066ce6a93daf778576258deb3165e71c561 = $this->env->getExtension("native_profiler");
        $__internal_84545435da584499021561e4d6470066ce6a93daf778576258deb3165e71c561->enter($__internal_84545435da584499021561e4d6470066ce6a93daf778576258deb3165e71c561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_84545435da584499021561e4d6470066ce6a93daf778576258deb3165e71c561->leave($__internal_84545435da584499021561e4d6470066ce6a93daf778576258deb3165e71c561_prof);

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
