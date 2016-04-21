<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6159211eb1b977f956ee32c9a5bcd3b29190167ae43928674165e09b9e5fa3a5 extends Twig_Template
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
        $__internal_239e2bc00f48710f042bdc235219f57be4b048c529488ffb67cb32c24d71a896 = $this->env->getExtension("native_profiler");
        $__internal_239e2bc00f48710f042bdc235219f57be4b048c529488ffb67cb32c24d71a896->enter($__internal_239e2bc00f48710f042bdc235219f57be4b048c529488ffb67cb32c24d71a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_239e2bc00f48710f042bdc235219f57be4b048c529488ffb67cb32c24d71a896->leave($__internal_239e2bc00f48710f042bdc235219f57be4b048c529488ffb67cb32c24d71a896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
