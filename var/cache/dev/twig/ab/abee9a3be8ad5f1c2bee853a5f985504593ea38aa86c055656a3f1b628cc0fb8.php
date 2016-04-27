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
        $__internal_958ef22c9290fcbc2d33c6f99d224c7b6801ab9efe858f73dc1474645eaa9291 = $this->env->getExtension("native_profiler");
        $__internal_958ef22c9290fcbc2d33c6f99d224c7b6801ab9efe858f73dc1474645eaa9291->enter($__internal_958ef22c9290fcbc2d33c6f99d224c7b6801ab9efe858f73dc1474645eaa9291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_958ef22c9290fcbc2d33c6f99d224c7b6801ab9efe858f73dc1474645eaa9291->leave($__internal_958ef22c9290fcbc2d33c6f99d224c7b6801ab9efe858f73dc1474645eaa9291_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9f09c7b04dd671a9f5cb1b87c92bb6f4711e705eb4fc39a12f63f4fced0e43b = $this->env->getExtension("native_profiler");
        $__internal_d9f09c7b04dd671a9f5cb1b87c92bb6f4711e705eb4fc39a12f63f4fced0e43b->enter($__internal_d9f09c7b04dd671a9f5cb1b87c92bb6f4711e705eb4fc39a12f63f4fced0e43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d9f09c7b04dd671a9f5cb1b87c92bb6f4711e705eb4fc39a12f63f4fced0e43b->leave($__internal_d9f09c7b04dd671a9f5cb1b87c92bb6f4711e705eb4fc39a12f63f4fced0e43b_prof);

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
