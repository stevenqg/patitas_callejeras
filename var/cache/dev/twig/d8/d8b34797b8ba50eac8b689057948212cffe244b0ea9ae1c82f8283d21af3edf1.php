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
        $__internal_83f5d71a3654b23cae17b5bc7f500f339407a74f60423f5b0d752e17655ae15c = $this->env->getExtension("native_profiler");
        $__internal_83f5d71a3654b23cae17b5bc7f500f339407a74f60423f5b0d752e17655ae15c->enter($__internal_83f5d71a3654b23cae17b5bc7f500f339407a74f60423f5b0d752e17655ae15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_83f5d71a3654b23cae17b5bc7f500f339407a74f60423f5b0d752e17655ae15c->leave($__internal_83f5d71a3654b23cae17b5bc7f500f339407a74f60423f5b0d752e17655ae15c_prof);

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