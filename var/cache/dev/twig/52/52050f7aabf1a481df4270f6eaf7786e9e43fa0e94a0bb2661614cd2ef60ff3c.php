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
        $__internal_f394d9679dac97d12d21fbc4262d533e24c9a71656dabd06755238cc537949c7 = $this->env->getExtension("native_profiler");
        $__internal_f394d9679dac97d12d21fbc4262d533e24c9a71656dabd06755238cc537949c7->enter($__internal_f394d9679dac97d12d21fbc4262d533e24c9a71656dabd06755238cc537949c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f394d9679dac97d12d21fbc4262d533e24c9a71656dabd06755238cc537949c7->leave($__internal_f394d9679dac97d12d21fbc4262d533e24c9a71656dabd06755238cc537949c7_prof);

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
