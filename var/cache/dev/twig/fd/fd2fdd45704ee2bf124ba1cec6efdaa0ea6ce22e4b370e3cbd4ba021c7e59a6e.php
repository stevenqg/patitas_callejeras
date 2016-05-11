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
        $__internal_a391317934b7359fe030f73e042396cbcf6bdcb89eeb22eea3ffc29551243050 = $this->env->getExtension("native_profiler");
        $__internal_a391317934b7359fe030f73e042396cbcf6bdcb89eeb22eea3ffc29551243050->enter($__internal_a391317934b7359fe030f73e042396cbcf6bdcb89eeb22eea3ffc29551243050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a391317934b7359fe030f73e042396cbcf6bdcb89eeb22eea3ffc29551243050->leave($__internal_a391317934b7359fe030f73e042396cbcf6bdcb89eeb22eea3ffc29551243050_prof);

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
