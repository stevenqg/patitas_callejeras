<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4a2d7862c663b290b90bbf0f52da4896abcd22e23e603e49ffca7f2105d60102 extends Twig_Template
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
        $__internal_761b43fb982b03d4f9490fa8d322d26a23942cbb0d4120c14dac45c85320aa97 = $this->env->getExtension("native_profiler");
        $__internal_761b43fb982b03d4f9490fa8d322d26a23942cbb0d4120c14dac45c85320aa97->enter($__internal_761b43fb982b03d4f9490fa8d322d26a23942cbb0d4120c14dac45c85320aa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_761b43fb982b03d4f9490fa8d322d26a23942cbb0d4120c14dac45c85320aa97->leave($__internal_761b43fb982b03d4f9490fa8d322d26a23942cbb0d4120c14dac45c85320aa97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
