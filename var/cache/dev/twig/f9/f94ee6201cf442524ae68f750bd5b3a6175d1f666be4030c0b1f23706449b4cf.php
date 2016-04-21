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
        $__internal_afda7b10e55d210ae66e52bdae0b04389d1838b50b22102c11c9a784c177d66e = $this->env->getExtension("native_profiler");
        $__internal_afda7b10e55d210ae66e52bdae0b04389d1838b50b22102c11c9a784c177d66e->enter($__internal_afda7b10e55d210ae66e52bdae0b04389d1838b50b22102c11c9a784c177d66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_afda7b10e55d210ae66e52bdae0b04389d1838b50b22102c11c9a784c177d66e->leave($__internal_afda7b10e55d210ae66e52bdae0b04389d1838b50b22102c11c9a784c177d66e_prof);

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
