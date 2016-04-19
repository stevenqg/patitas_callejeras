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
        $__internal_18ce4765730194c50fae10bacd53c282003528fce913a2917c3d73ec00a36e50 = $this->env->getExtension("native_profiler");
        $__internal_18ce4765730194c50fae10bacd53c282003528fce913a2917c3d73ec00a36e50->enter($__internal_18ce4765730194c50fae10bacd53c282003528fce913a2917c3d73ec00a36e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_18ce4765730194c50fae10bacd53c282003528fce913a2917c3d73ec00a36e50->leave($__internal_18ce4765730194c50fae10bacd53c282003528fce913a2917c3d73ec00a36e50_prof);

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
