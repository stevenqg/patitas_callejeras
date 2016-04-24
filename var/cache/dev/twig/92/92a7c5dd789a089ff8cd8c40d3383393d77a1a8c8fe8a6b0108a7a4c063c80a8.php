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
        $__internal_544b84ce750776eaafafe801fb55b7a6f93f44cd197e71e3825d7116be5f0ab7 = $this->env->getExtension("native_profiler");
        $__internal_544b84ce750776eaafafe801fb55b7a6f93f44cd197e71e3825d7116be5f0ab7->enter($__internal_544b84ce750776eaafafe801fb55b7a6f93f44cd197e71e3825d7116be5f0ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_544b84ce750776eaafafe801fb55b7a6f93f44cd197e71e3825d7116be5f0ab7->leave($__internal_544b84ce750776eaafafe801fb55b7a6f93f44cd197e71e3825d7116be5f0ab7_prof);

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
