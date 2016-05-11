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
        $__internal_7f25992795c54f5302440e598ec46cd14c05900367d2be4831141c6a9db9aefb = $this->env->getExtension("native_profiler");
        $__internal_7f25992795c54f5302440e598ec46cd14c05900367d2be4831141c6a9db9aefb->enter($__internal_7f25992795c54f5302440e598ec46cd14c05900367d2be4831141c6a9db9aefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7f25992795c54f5302440e598ec46cd14c05900367d2be4831141c6a9db9aefb->leave($__internal_7f25992795c54f5302440e598ec46cd14c05900367d2be4831141c6a9db9aefb_prof);

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
