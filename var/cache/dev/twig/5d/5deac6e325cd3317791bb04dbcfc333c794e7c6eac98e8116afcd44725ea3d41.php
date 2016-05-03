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
        $__internal_9556819bd09b2636991d58062a5c71164a6b46ddb68500206ba7ee487ef88e6f = $this->env->getExtension("native_profiler");
        $__internal_9556819bd09b2636991d58062a5c71164a6b46ddb68500206ba7ee487ef88e6f->enter($__internal_9556819bd09b2636991d58062a5c71164a6b46ddb68500206ba7ee487ef88e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9556819bd09b2636991d58062a5c71164a6b46ddb68500206ba7ee487ef88e6f->leave($__internal_9556819bd09b2636991d58062a5c71164a6b46ddb68500206ba7ee487ef88e6f_prof);

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
