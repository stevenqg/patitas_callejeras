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
        $__internal_b33d601f3ed917313477041bde6d3fc34be537a0f80fbecb096db3271e72d638 = $this->env->getExtension("native_profiler");
        $__internal_b33d601f3ed917313477041bde6d3fc34be537a0f80fbecb096db3271e72d638->enter($__internal_b33d601f3ed917313477041bde6d3fc34be537a0f80fbecb096db3271e72d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b33d601f3ed917313477041bde6d3fc34be537a0f80fbecb096db3271e72d638->leave($__internal_b33d601f3ed917313477041bde6d3fc34be537a0f80fbecb096db3271e72d638_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb3a873c57e17ce42dc82a2b6bf200c4ef7a18b6457d9b7cf66acc9e41ab1fae = $this->env->getExtension("native_profiler");
        $__internal_cb3a873c57e17ce42dc82a2b6bf200c4ef7a18b6457d9b7cf66acc9e41ab1fae->enter($__internal_cb3a873c57e17ce42dc82a2b6bf200c4ef7a18b6457d9b7cf66acc9e41ab1fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb3a873c57e17ce42dc82a2b6bf200c4ef7a18b6457d9b7cf66acc9e41ab1fae->leave($__internal_cb3a873c57e17ce42dc82a2b6bf200c4ef7a18b6457d9b7cf66acc9e41ab1fae_prof);

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
