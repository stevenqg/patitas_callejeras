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
        $__internal_b12143e9d362c5aadd7568df12a4676bc3b75693a15bca35ffd0e0f970fdca57 = $this->env->getExtension("native_profiler");
        $__internal_b12143e9d362c5aadd7568df12a4676bc3b75693a15bca35ffd0e0f970fdca57->enter($__internal_b12143e9d362c5aadd7568df12a4676bc3b75693a15bca35ffd0e0f970fdca57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b12143e9d362c5aadd7568df12a4676bc3b75693a15bca35ffd0e0f970fdca57->leave($__internal_b12143e9d362c5aadd7568df12a4676bc3b75693a15bca35ffd0e0f970fdca57_prof);

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
