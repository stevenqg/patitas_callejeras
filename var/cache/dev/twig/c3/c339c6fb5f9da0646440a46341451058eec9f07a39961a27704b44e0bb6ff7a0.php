<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e956c336fb1d3e4e1100a9a0d13ef7cc96c9564935a2a923272bdd0c63af1163 extends Twig_Template
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
        $__internal_5e962929c08e07f8205fabf2662f2d699be5be855fce73e84284ee34b52dea20 = $this->env->getExtension("native_profiler");
        $__internal_5e962929c08e07f8205fabf2662f2d699be5be855fce73e84284ee34b52dea20->enter($__internal_5e962929c08e07f8205fabf2662f2d699be5be855fce73e84284ee34b52dea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5e962929c08e07f8205fabf2662f2d699be5be855fce73e84284ee34b52dea20->leave($__internal_5e962929c08e07f8205fabf2662f2d699be5be855fce73e84284ee34b52dea20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
