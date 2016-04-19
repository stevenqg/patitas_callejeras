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
        $__internal_d92e9ff6740376c1ab7eae6bb8c322c647c67b19a318e5f1caae2f2f4ef93d55 = $this->env->getExtension("native_profiler");
        $__internal_d92e9ff6740376c1ab7eae6bb8c322c647c67b19a318e5f1caae2f2f4ef93d55->enter($__internal_d92e9ff6740376c1ab7eae6bb8c322c647c67b19a318e5f1caae2f2f4ef93d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d92e9ff6740376c1ab7eae6bb8c322c647c67b19a318e5f1caae2f2f4ef93d55->leave($__internal_d92e9ff6740376c1ab7eae6bb8c322c647c67b19a318e5f1caae2f2f4ef93d55_prof);

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
