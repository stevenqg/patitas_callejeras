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
        $__internal_f448c59496e8a518e730789afa96ba8707d64c62788eb1974813a2467209cf0a = $this->env->getExtension("native_profiler");
        $__internal_f448c59496e8a518e730789afa96ba8707d64c62788eb1974813a2467209cf0a->enter($__internal_f448c59496e8a518e730789afa96ba8707d64c62788eb1974813a2467209cf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f448c59496e8a518e730789afa96ba8707d64c62788eb1974813a2467209cf0a->leave($__internal_f448c59496e8a518e730789afa96ba8707d64c62788eb1974813a2467209cf0a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fabd88d40e73cbf1e899648f2f7d0995afd0b37998c10626f27d9a469a61b44e = $this->env->getExtension("native_profiler");
        $__internal_fabd88d40e73cbf1e899648f2f7d0995afd0b37998c10626f27d9a469a61b44e->enter($__internal_fabd88d40e73cbf1e899648f2f7d0995afd0b37998c10626f27d9a469a61b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fabd88d40e73cbf1e899648f2f7d0995afd0b37998c10626f27d9a469a61b44e->leave($__internal_fabd88d40e73cbf1e899648f2f7d0995afd0b37998c10626f27d9a469a61b44e_prof);

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
