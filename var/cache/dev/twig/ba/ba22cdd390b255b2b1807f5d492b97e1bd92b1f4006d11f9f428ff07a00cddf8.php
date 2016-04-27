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
        $__internal_f90ee5560dcfb8d05aff82303761b7aeb8e18f5ed1963593a0e6cc165b6f9e5c = $this->env->getExtension("native_profiler");
        $__internal_f90ee5560dcfb8d05aff82303761b7aeb8e18f5ed1963593a0e6cc165b6f9e5c->enter($__internal_f90ee5560dcfb8d05aff82303761b7aeb8e18f5ed1963593a0e6cc165b6f9e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f90ee5560dcfb8d05aff82303761b7aeb8e18f5ed1963593a0e6cc165b6f9e5c->leave($__internal_f90ee5560dcfb8d05aff82303761b7aeb8e18f5ed1963593a0e6cc165b6f9e5c_prof);

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
