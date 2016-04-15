<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d0d8079a53c8ba88700f88c7f0782455c9dea8bd55099a7aee3fa09d2cea9892 extends Twig_Template
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
        $__internal_28b36106fc4c8b329608cb0b70350e310ba004f2c4ba63ae643704ac0751a8a2 = $this->env->getExtension("native_profiler");
        $__internal_28b36106fc4c8b329608cb0b70350e310ba004f2c4ba63ae643704ac0751a8a2->enter($__internal_28b36106fc4c8b329608cb0b70350e310ba004f2c4ba63ae643704ac0751a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_28b36106fc4c8b329608cb0b70350e310ba004f2c4ba63ae643704ac0751a8a2->leave($__internal_28b36106fc4c8b329608cb0b70350e310ba004f2c4ba63ae643704ac0751a8a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
