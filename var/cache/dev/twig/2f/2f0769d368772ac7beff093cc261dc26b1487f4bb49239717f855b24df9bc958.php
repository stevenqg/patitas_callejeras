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
        $__internal_943f67ca590d7f0e5d1d90424356bd80d7b09f93a1fe82909359725b4f3a9593 = $this->env->getExtension("native_profiler");
        $__internal_943f67ca590d7f0e5d1d90424356bd80d7b09f93a1fe82909359725b4f3a9593->enter($__internal_943f67ca590d7f0e5d1d90424356bd80d7b09f93a1fe82909359725b4f3a9593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_943f67ca590d7f0e5d1d90424356bd80d7b09f93a1fe82909359725b4f3a9593->leave($__internal_943f67ca590d7f0e5d1d90424356bd80d7b09f93a1fe82909359725b4f3a9593_prof);

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
