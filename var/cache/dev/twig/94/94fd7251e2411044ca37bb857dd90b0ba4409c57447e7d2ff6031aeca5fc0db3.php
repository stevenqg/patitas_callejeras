<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0e44c33a8685a7eebd667f3e177a74abeea2aebde2a3012e72b1a96acb9fbffb extends Twig_Template
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
        $__internal_0f3ac2fe61bb5ef99518e9a0096fd385b05bda462d0cece0993883d8af5b3031 = $this->env->getExtension("native_profiler");
        $__internal_0f3ac2fe61bb5ef99518e9a0096fd385b05bda462d0cece0993883d8af5b3031->enter($__internal_0f3ac2fe61bb5ef99518e9a0096fd385b05bda462d0cece0993883d8af5b3031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0f3ac2fe61bb5ef99518e9a0096fd385b05bda462d0cece0993883d8af5b3031->leave($__internal_0f3ac2fe61bb5ef99518e9a0096fd385b05bda462d0cece0993883d8af5b3031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
