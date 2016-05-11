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
        $__internal_907a0d4a1695974be5ba93d9e76d6ef28a541f6dd0b2a6b7232dae0f4e3a1284 = $this->env->getExtension("native_profiler");
        $__internal_907a0d4a1695974be5ba93d9e76d6ef28a541f6dd0b2a6b7232dae0f4e3a1284->enter($__internal_907a0d4a1695974be5ba93d9e76d6ef28a541f6dd0b2a6b7232dae0f4e3a1284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_907a0d4a1695974be5ba93d9e76d6ef28a541f6dd0b2a6b7232dae0f4e3a1284->leave($__internal_907a0d4a1695974be5ba93d9e76d6ef28a541f6dd0b2a6b7232dae0f4e3a1284_prof);

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
