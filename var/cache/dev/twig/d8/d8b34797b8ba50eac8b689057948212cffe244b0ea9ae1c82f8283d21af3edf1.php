<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_050c899b1bcf6cd71f6adae749fd2ab00ef70e84b9b6f939e0c7e520b4aaff98 extends Twig_Template
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
        $__internal_16dda0637e7f1bb7ebcdc3406de7a9872d44ca7cce3e944c0cad58b2c1239ada = $this->env->getExtension("native_profiler");
        $__internal_16dda0637e7f1bb7ebcdc3406de7a9872d44ca7cce3e944c0cad58b2c1239ada->enter($__internal_16dda0637e7f1bb7ebcdc3406de7a9872d44ca7cce3e944c0cad58b2c1239ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_16dda0637e7f1bb7ebcdc3406de7a9872d44ca7cce3e944c0cad58b2c1239ada->leave($__internal_16dda0637e7f1bb7ebcdc3406de7a9872d44ca7cce3e944c0cad58b2c1239ada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
