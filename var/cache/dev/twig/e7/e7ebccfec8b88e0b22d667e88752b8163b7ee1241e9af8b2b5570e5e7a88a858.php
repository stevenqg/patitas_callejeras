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
        $__internal_e5f6d227d14811e7ba7ed0337da675b3f5692fe258458e6a1c5486beac229dfb = $this->env->getExtension("native_profiler");
        $__internal_e5f6d227d14811e7ba7ed0337da675b3f5692fe258458e6a1c5486beac229dfb->enter($__internal_e5f6d227d14811e7ba7ed0337da675b3f5692fe258458e6a1c5486beac229dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e5f6d227d14811e7ba7ed0337da675b3f5692fe258458e6a1c5486beac229dfb->leave($__internal_e5f6d227d14811e7ba7ed0337da675b3f5692fe258458e6a1c5486beac229dfb_prof);

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
