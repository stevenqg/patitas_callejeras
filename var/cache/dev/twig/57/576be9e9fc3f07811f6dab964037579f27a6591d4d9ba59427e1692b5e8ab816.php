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
        $__internal_b832271eb3f348e013ee6b9e7fe88050c66800f396e6c92a00aaeb64948db8a4 = $this->env->getExtension("native_profiler");
        $__internal_b832271eb3f348e013ee6b9e7fe88050c66800f396e6c92a00aaeb64948db8a4->enter($__internal_b832271eb3f348e013ee6b9e7fe88050c66800f396e6c92a00aaeb64948db8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b832271eb3f348e013ee6b9e7fe88050c66800f396e6c92a00aaeb64948db8a4->leave($__internal_b832271eb3f348e013ee6b9e7fe88050c66800f396e6c92a00aaeb64948db8a4_prof);

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
