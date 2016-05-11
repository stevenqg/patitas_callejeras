<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a2fd05a2f19a0818a3cfa0fa81cdbb7710e77becea400c90428f67882805a061 extends Twig_Template
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
        $__internal_012d6c24f30ae4e926c1c1adc37aa874e8715a7e986c60b5f8d424690268b12e = $this->env->getExtension("native_profiler");
        $__internal_012d6c24f30ae4e926c1c1adc37aa874e8715a7e986c60b5f8d424690268b12e->enter($__internal_012d6c24f30ae4e926c1c1adc37aa874e8715a7e986c60b5f8d424690268b12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_012d6c24f30ae4e926c1c1adc37aa874e8715a7e986c60b5f8d424690268b12e->leave($__internal_012d6c24f30ae4e926c1c1adc37aa874e8715a7e986c60b5f8d424690268b12e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
