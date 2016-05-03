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
        $__internal_0333b3eafdc555bb2630b06faac6d07c6ff631ec505d1f2f761737ef9e5078b4 = $this->env->getExtension("native_profiler");
        $__internal_0333b3eafdc555bb2630b06faac6d07c6ff631ec505d1f2f761737ef9e5078b4->enter($__internal_0333b3eafdc555bb2630b06faac6d07c6ff631ec505d1f2f761737ef9e5078b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0333b3eafdc555bb2630b06faac6d07c6ff631ec505d1f2f761737ef9e5078b4->leave($__internal_0333b3eafdc555bb2630b06faac6d07c6ff631ec505d1f2f761737ef9e5078b4_prof);

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
