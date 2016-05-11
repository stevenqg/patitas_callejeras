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
        $__internal_05cde61ff1451d256229e2f4a4b26e48dcdf0eef195b52867c7785a2dc96459d = $this->env->getExtension("native_profiler");
        $__internal_05cde61ff1451d256229e2f4a4b26e48dcdf0eef195b52867c7785a2dc96459d->enter($__internal_05cde61ff1451d256229e2f4a4b26e48dcdf0eef195b52867c7785a2dc96459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05cde61ff1451d256229e2f4a4b26e48dcdf0eef195b52867c7785a2dc96459d->leave($__internal_05cde61ff1451d256229e2f4a4b26e48dcdf0eef195b52867c7785a2dc96459d_prof);

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
