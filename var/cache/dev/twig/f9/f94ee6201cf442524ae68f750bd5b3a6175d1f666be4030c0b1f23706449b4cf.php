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
        $__internal_4fe4fa3a22c020f5594dc462e79fbc3e5281e645c6a4f9b3df3508c8f558e2e6 = $this->env->getExtension("native_profiler");
        $__internal_4fe4fa3a22c020f5594dc462e79fbc3e5281e645c6a4f9b3df3508c8f558e2e6->enter($__internal_4fe4fa3a22c020f5594dc462e79fbc3e5281e645c6a4f9b3df3508c8f558e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4fe4fa3a22c020f5594dc462e79fbc3e5281e645c6a4f9b3df3508c8f558e2e6->leave($__internal_4fe4fa3a22c020f5594dc462e79fbc3e5281e645c6a4f9b3df3508c8f558e2e6_prof);

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
