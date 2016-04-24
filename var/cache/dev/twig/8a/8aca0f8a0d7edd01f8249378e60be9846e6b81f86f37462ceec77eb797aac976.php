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
        $__internal_4816a3c6ea330ca137a85ff6a776abf002132b4ac4671832760f160ee19cb8a4 = $this->env->getExtension("native_profiler");
        $__internal_4816a3c6ea330ca137a85ff6a776abf002132b4ac4671832760f160ee19cb8a4->enter($__internal_4816a3c6ea330ca137a85ff6a776abf002132b4ac4671832760f160ee19cb8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4816a3c6ea330ca137a85ff6a776abf002132b4ac4671832760f160ee19cb8a4->leave($__internal_4816a3c6ea330ca137a85ff6a776abf002132b4ac4671832760f160ee19cb8a4_prof);

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
