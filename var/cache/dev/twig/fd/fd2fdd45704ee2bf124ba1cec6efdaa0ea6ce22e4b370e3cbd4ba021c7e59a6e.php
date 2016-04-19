<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_57f71fed2cfb7318040a55dbbf2e8e5d2920d47d658a6ee2b3c9d758b813eadd extends Twig_Template
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
        $__internal_f3c84a9296017a3805651a75ca52fa2b5652d0100e65791dac0d1b4d763418bf = $this->env->getExtension("native_profiler");
        $__internal_f3c84a9296017a3805651a75ca52fa2b5652d0100e65791dac0d1b4d763418bf->enter($__internal_f3c84a9296017a3805651a75ca52fa2b5652d0100e65791dac0d1b4d763418bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f3c84a9296017a3805651a75ca52fa2b5652d0100e65791dac0d1b4d763418bf->leave($__internal_f3c84a9296017a3805651a75ca52fa2b5652d0100e65791dac0d1b4d763418bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
