<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fe0c00e8dd623bdca524c35c1663970edff469b334f69064dee390d5478cad60 extends Twig_Template
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
        $__internal_06dbf24465023422d6f7ea20c6fbe85465f8c90a06daefc3df5ffceadd2114de = $this->env->getExtension("native_profiler");
        $__internal_06dbf24465023422d6f7ea20c6fbe85465f8c90a06daefc3df5ffceadd2114de->enter($__internal_06dbf24465023422d6f7ea20c6fbe85465f8c90a06daefc3df5ffceadd2114de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_06dbf24465023422d6f7ea20c6fbe85465f8c90a06daefc3df5ffceadd2114de->leave($__internal_06dbf24465023422d6f7ea20c6fbe85465f8c90a06daefc3df5ffceadd2114de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
