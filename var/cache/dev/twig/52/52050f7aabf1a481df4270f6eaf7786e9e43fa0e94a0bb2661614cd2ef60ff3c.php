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
        $__internal_43ff6d277024a5123ba7df653d1b6e0da8cbbda3543504b77e8de189fbbbc58f = $this->env->getExtension("native_profiler");
        $__internal_43ff6d277024a5123ba7df653d1b6e0da8cbbda3543504b77e8de189fbbbc58f->enter($__internal_43ff6d277024a5123ba7df653d1b6e0da8cbbda3543504b77e8de189fbbbc58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_43ff6d277024a5123ba7df653d1b6e0da8cbbda3543504b77e8de189fbbbc58f->leave($__internal_43ff6d277024a5123ba7df653d1b6e0da8cbbda3543504b77e8de189fbbbc58f_prof);

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
