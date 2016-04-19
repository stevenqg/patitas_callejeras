<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b5284ead7905fed177e27229873982794a4d2095ea1a11600d15e1f5d556fe36 extends Twig_Template
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
        $__internal_e6d71f62ee0a4a72f2331c09af16acf7ef385945398dc8e2330a8ac353ac766c = $this->env->getExtension("native_profiler");
        $__internal_e6d71f62ee0a4a72f2331c09af16acf7ef385945398dc8e2330a8ac353ac766c->enter($__internal_e6d71f62ee0a4a72f2331c09af16acf7ef385945398dc8e2330a8ac353ac766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e6d71f62ee0a4a72f2331c09af16acf7ef385945398dc8e2330a8ac353ac766c->leave($__internal_e6d71f62ee0a4a72f2331c09af16acf7ef385945398dc8e2330a8ac353ac766c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
