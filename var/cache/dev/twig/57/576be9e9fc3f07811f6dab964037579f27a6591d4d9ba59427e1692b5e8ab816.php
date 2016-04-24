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
        $__internal_2aea47c744b56214b7bca62f9cf142f037b3856f56532ad1aa931006bdfa77a0 = $this->env->getExtension("native_profiler");
        $__internal_2aea47c744b56214b7bca62f9cf142f037b3856f56532ad1aa931006bdfa77a0->enter($__internal_2aea47c744b56214b7bca62f9cf142f037b3856f56532ad1aa931006bdfa77a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2aea47c744b56214b7bca62f9cf142f037b3856f56532ad1aa931006bdfa77a0->leave($__internal_2aea47c744b56214b7bca62f9cf142f037b3856f56532ad1aa931006bdfa77a0_prof);

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
