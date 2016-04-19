<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5f304563791d953ecccc68aacf702eb793ac68f67db1c55097c1d87bf6ca2662 extends Twig_Template
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
        $__internal_b80cd47e5d91e873d837cbe2141fff89650de29981a5dd847dfb93d20bdba884 = $this->env->getExtension("native_profiler");
        $__internal_b80cd47e5d91e873d837cbe2141fff89650de29981a5dd847dfb93d20bdba884->enter($__internal_b80cd47e5d91e873d837cbe2141fff89650de29981a5dd847dfb93d20bdba884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b80cd47e5d91e873d837cbe2141fff89650de29981a5dd847dfb93d20bdba884->leave($__internal_b80cd47e5d91e873d837cbe2141fff89650de29981a5dd847dfb93d20bdba884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
