<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4da13a6571ea24bbcfe983e3dcd271cbf5886a89c1e3358bc496c32beab9401f extends Twig_Template
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
        $__internal_928d94dd3257a152efe010bd652b9c281633258dd916f2a4e5596f82d919df40 = $this->env->getExtension("native_profiler");
        $__internal_928d94dd3257a152efe010bd652b9c281633258dd916f2a4e5596f82d919df40->enter($__internal_928d94dd3257a152efe010bd652b9c281633258dd916f2a4e5596f82d919df40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_928d94dd3257a152efe010bd652b9c281633258dd916f2a4e5596f82d919df40->leave($__internal_928d94dd3257a152efe010bd652b9c281633258dd916f2a4e5596f82d919df40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
