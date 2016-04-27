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
        $__internal_6e9138f50d7317506581c4455ce424a4a52aa9490d19eb6dbb4672f7243b5d3c = $this->env->getExtension("native_profiler");
        $__internal_6e9138f50d7317506581c4455ce424a4a52aa9490d19eb6dbb4672f7243b5d3c->enter($__internal_6e9138f50d7317506581c4455ce424a4a52aa9490d19eb6dbb4672f7243b5d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e9138f50d7317506581c4455ce424a4a52aa9490d19eb6dbb4672f7243b5d3c->leave($__internal_6e9138f50d7317506581c4455ce424a4a52aa9490d19eb6dbb4672f7243b5d3c_prof);

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
