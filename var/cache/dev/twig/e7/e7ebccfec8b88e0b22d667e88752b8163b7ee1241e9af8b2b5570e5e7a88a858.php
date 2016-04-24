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
        $__internal_f4e7f381b31fa7b698a317256c17c4f77bab6d56cbf6e8b317802c39a6db0a0e = $this->env->getExtension("native_profiler");
        $__internal_f4e7f381b31fa7b698a317256c17c4f77bab6d56cbf6e8b317802c39a6db0a0e->enter($__internal_f4e7f381b31fa7b698a317256c17c4f77bab6d56cbf6e8b317802c39a6db0a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f4e7f381b31fa7b698a317256c17c4f77bab6d56cbf6e8b317802c39a6db0a0e->leave($__internal_f4e7f381b31fa7b698a317256c17c4f77bab6d56cbf6e8b317802c39a6db0a0e_prof);

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
