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
        $__internal_12e2edb4b82c7657202b67d463b96ca91be1a5515cb75515c1796f2c271a08e7 = $this->env->getExtension("native_profiler");
        $__internal_12e2edb4b82c7657202b67d463b96ca91be1a5515cb75515c1796f2c271a08e7->enter($__internal_12e2edb4b82c7657202b67d463b96ca91be1a5515cb75515c1796f2c271a08e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_12e2edb4b82c7657202b67d463b96ca91be1a5515cb75515c1796f2c271a08e7->leave($__internal_12e2edb4b82c7657202b67d463b96ca91be1a5515cb75515c1796f2c271a08e7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_77db550ca91098570341d0f20c57130164f584ac73e8d0ceab4e11323e81f994 = $this->env->getExtension("native_profiler");
        $__internal_77db550ca91098570341d0f20c57130164f584ac73e8d0ceab4e11323e81f994->enter($__internal_77db550ca91098570341d0f20c57130164f584ac73e8d0ceab4e11323e81f994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_77db550ca91098570341d0f20c57130164f584ac73e8d0ceab4e11323e81f994->leave($__internal_77db550ca91098570341d0f20c57130164f584ac73e8d0ceab4e11323e81f994_prof);

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
