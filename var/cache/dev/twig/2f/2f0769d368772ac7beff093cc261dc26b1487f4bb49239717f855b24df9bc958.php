<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3943543d301ccce0c3e6435e8df43febae85e6f0584d6b555470a622b4d2cf86 extends Twig_Template
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
        $__internal_d5f3c016219178abcb338052bebaf408118a0e0c51784fb26be74e1292fd3789 = $this->env->getExtension("native_profiler");
        $__internal_d5f3c016219178abcb338052bebaf408118a0e0c51784fb26be74e1292fd3789->enter($__internal_d5f3c016219178abcb338052bebaf408118a0e0c51784fb26be74e1292fd3789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d5f3c016219178abcb338052bebaf408118a0e0c51784fb26be74e1292fd3789->leave($__internal_d5f3c016219178abcb338052bebaf408118a0e0c51784fb26be74e1292fd3789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
