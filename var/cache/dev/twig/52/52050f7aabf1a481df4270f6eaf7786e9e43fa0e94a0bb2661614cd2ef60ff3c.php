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
        $__internal_3d6b0bba5c23cf14ddc4ae71905af0f451a12789d5054461d193f850f492c0c8 = $this->env->getExtension("native_profiler");
        $__internal_3d6b0bba5c23cf14ddc4ae71905af0f451a12789d5054461d193f850f492c0c8->enter($__internal_3d6b0bba5c23cf14ddc4ae71905af0f451a12789d5054461d193f850f492c0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3d6b0bba5c23cf14ddc4ae71905af0f451a12789d5054461d193f850f492c0c8->leave($__internal_3d6b0bba5c23cf14ddc4ae71905af0f451a12789d5054461d193f850f492c0c8_prof);

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
