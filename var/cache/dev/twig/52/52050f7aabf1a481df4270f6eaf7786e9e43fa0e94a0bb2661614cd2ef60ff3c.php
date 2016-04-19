<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_54cc9ff79ad334544814bfc59ee3844a2cb789500494fff4d94090a0c7c646ef extends Twig_Template
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
        $__internal_497a2edfa4a7d7a113547b52a876c0b2f05244c90df85e96b8ac1f0fceef6584 = $this->env->getExtension("native_profiler");
        $__internal_497a2edfa4a7d7a113547b52a876c0b2f05244c90df85e96b8ac1f0fceef6584->enter($__internal_497a2edfa4a7d7a113547b52a876c0b2f05244c90df85e96b8ac1f0fceef6584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_497a2edfa4a7d7a113547b52a876c0b2f05244c90df85e96b8ac1f0fceef6584->leave($__internal_497a2edfa4a7d7a113547b52a876c0b2f05244c90df85e96b8ac1f0fceef6584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
