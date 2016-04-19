<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a86c4ce7def51d98b557d3b5baea0f49f6e05c2f0a63183f2d491d6060b6a68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7c08c17a08e2daf98b16ec65de5530bed0bf51c33d51ba596f3c22a6387844 = $this->env->getExtension("native_profiler");
        $__internal_8e7c08c17a08e2daf98b16ec65de5530bed0bf51c33d51ba596f3c22a6387844->enter($__internal_8e7c08c17a08e2daf98b16ec65de5530bed0bf51c33d51ba596f3c22a6387844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8e7c08c17a08e2daf98b16ec65de5530bed0bf51c33d51ba596f3c22a6387844->leave($__internal_8e7c08c17a08e2daf98b16ec65de5530bed0bf51c33d51ba596f3c22a6387844_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3abdfa39c07efdba141ba6335b961e64dc8e56fb5590cb19d5d71a920ce7316 = $this->env->getExtension("native_profiler");
        $__internal_b3abdfa39c07efdba141ba6335b961e64dc8e56fb5590cb19d5d71a920ce7316->enter($__internal_b3abdfa39c07efdba141ba6335b961e64dc8e56fb5590cb19d5d71a920ce7316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b3abdfa39c07efdba141ba6335b961e64dc8e56fb5590cb19d5d71a920ce7316->leave($__internal_b3abdfa39c07efdba141ba6335b961e64dc8e56fb5590cb19d5d71a920ce7316_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
