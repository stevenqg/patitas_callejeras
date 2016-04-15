<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1c198d58c5bedfdc6b825ada0c4a62fa63869075e9cdcb397c0bbead4394af9f extends Twig_Template
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
        $__internal_9c52f974d0d42c03135286d3e32b8512f41b4525837627f6eabd34d0aceb1746 = $this->env->getExtension("native_profiler");
        $__internal_9c52f974d0d42c03135286d3e32b8512f41b4525837627f6eabd34d0aceb1746->enter($__internal_9c52f974d0d42c03135286d3e32b8512f41b4525837627f6eabd34d0aceb1746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9c52f974d0d42c03135286d3e32b8512f41b4525837627f6eabd34d0aceb1746->leave($__internal_9c52f974d0d42c03135286d3e32b8512f41b4525837627f6eabd34d0aceb1746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
