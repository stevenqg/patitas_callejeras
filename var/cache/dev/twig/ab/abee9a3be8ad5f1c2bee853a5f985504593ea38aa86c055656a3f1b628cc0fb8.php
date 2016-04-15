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
        $__internal_7e58d3b572c764ab211c0e89ed93beac61b3519b50316adf2e997b08285916fc = $this->env->getExtension("native_profiler");
        $__internal_7e58d3b572c764ab211c0e89ed93beac61b3519b50316adf2e997b08285916fc->enter($__internal_7e58d3b572c764ab211c0e89ed93beac61b3519b50316adf2e997b08285916fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7e58d3b572c764ab211c0e89ed93beac61b3519b50316adf2e997b08285916fc->leave($__internal_7e58d3b572c764ab211c0e89ed93beac61b3519b50316adf2e997b08285916fc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e0404b4ec27596e7cd68cc568599db695fd9c2a4c4850668a66a48bb9f6bc4a = $this->env->getExtension("native_profiler");
        $__internal_8e0404b4ec27596e7cd68cc568599db695fd9c2a4c4850668a66a48bb9f6bc4a->enter($__internal_8e0404b4ec27596e7cd68cc568599db695fd9c2a4c4850668a66a48bb9f6bc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e0404b4ec27596e7cd68cc568599db695fd9c2a4c4850668a66a48bb9f6bc4a->leave($__internal_8e0404b4ec27596e7cd68cc568599db695fd9c2a4c4850668a66a48bb9f6bc4a_prof);

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
