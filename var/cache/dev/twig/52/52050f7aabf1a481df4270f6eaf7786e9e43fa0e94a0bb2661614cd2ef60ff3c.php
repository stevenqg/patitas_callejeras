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
        $__internal_8c13993d99e32cd1ed2fb6c379ed780ee506f1e1ac943da8cb0a0aaf18080f10 = $this->env->getExtension("native_profiler");
        $__internal_8c13993d99e32cd1ed2fb6c379ed780ee506f1e1ac943da8cb0a0aaf18080f10->enter($__internal_8c13993d99e32cd1ed2fb6c379ed780ee506f1e1ac943da8cb0a0aaf18080f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8c13993d99e32cd1ed2fb6c379ed780ee506f1e1ac943da8cb0a0aaf18080f10->leave($__internal_8c13993d99e32cd1ed2fb6c379ed780ee506f1e1ac943da8cb0a0aaf18080f10_prof);

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
