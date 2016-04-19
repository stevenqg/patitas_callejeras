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
        $__internal_59652efa88c5bc5b0eec651f3bb860387a4f06332afdc38713c1ed5220412596 = $this->env->getExtension("native_profiler");
        $__internal_59652efa88c5bc5b0eec651f3bb860387a4f06332afdc38713c1ed5220412596->enter($__internal_59652efa88c5bc5b0eec651f3bb860387a4f06332afdc38713c1ed5220412596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_59652efa88c5bc5b0eec651f3bb860387a4f06332afdc38713c1ed5220412596->leave($__internal_59652efa88c5bc5b0eec651f3bb860387a4f06332afdc38713c1ed5220412596_prof);

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
