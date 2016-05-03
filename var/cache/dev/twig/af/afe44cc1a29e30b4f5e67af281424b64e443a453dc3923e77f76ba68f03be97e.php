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
        $__internal_3dfa3437f40413e8d49efd94e9cc320af5e684d20dd7b7040f02fba941d80c3f = $this->env->getExtension("native_profiler");
        $__internal_3dfa3437f40413e8d49efd94e9cc320af5e684d20dd7b7040f02fba941d80c3f->enter($__internal_3dfa3437f40413e8d49efd94e9cc320af5e684d20dd7b7040f02fba941d80c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3dfa3437f40413e8d49efd94e9cc320af5e684d20dd7b7040f02fba941d80c3f->leave($__internal_3dfa3437f40413e8d49efd94e9cc320af5e684d20dd7b7040f02fba941d80c3f_prof);

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
