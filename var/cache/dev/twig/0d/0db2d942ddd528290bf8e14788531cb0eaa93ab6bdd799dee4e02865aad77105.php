<?php

/* base.html.twig */
class __TwigTemplate_aa2a2ff5354c90d7993ad3cdbe7ddf5f831f4b969119fc807f61d12c866909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9058087f9d1b6367b9fc88809421c0c3235aa5de7841f54526b89632f1b8aaf9 = $this->env->getExtension("native_profiler");
        $__internal_9058087f9d1b6367b9fc88809421c0c3235aa5de7841f54526b89632f1b8aaf9->enter($__internal_9058087f9d1b6367b9fc88809421c0c3235aa5de7841f54526b89632f1b8aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9058087f9d1b6367b9fc88809421c0c3235aa5de7841f54526b89632f1b8aaf9->leave($__internal_9058087f9d1b6367b9fc88809421c0c3235aa5de7841f54526b89632f1b8aaf9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f50a86b4da19033931201037eb6f94d8e2508d8cb7172717d79563e0234bab0 = $this->env->getExtension("native_profiler");
        $__internal_1f50a86b4da19033931201037eb6f94d8e2508d8cb7172717d79563e0234bab0->enter($__internal_1f50a86b4da19033931201037eb6f94d8e2508d8cb7172717d79563e0234bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f50a86b4da19033931201037eb6f94d8e2508d8cb7172717d79563e0234bab0->leave($__internal_1f50a86b4da19033931201037eb6f94d8e2508d8cb7172717d79563e0234bab0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e89b97be379a121e3a1cbb7e6017add51d0ffdf966e2ab7db2d9cde7c7b9db6 = $this->env->getExtension("native_profiler");
        $__internal_1e89b97be379a121e3a1cbb7e6017add51d0ffdf966e2ab7db2d9cde7c7b9db6->enter($__internal_1e89b97be379a121e3a1cbb7e6017add51d0ffdf966e2ab7db2d9cde7c7b9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e89b97be379a121e3a1cbb7e6017add51d0ffdf966e2ab7db2d9cde7c7b9db6->leave($__internal_1e89b97be379a121e3a1cbb7e6017add51d0ffdf966e2ab7db2d9cde7c7b9db6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78caa35cc037140b32046bc1159a9b9ea69c59d554a7fbf6d4b51041cd228ea5 = $this->env->getExtension("native_profiler");
        $__internal_78caa35cc037140b32046bc1159a9b9ea69c59d554a7fbf6d4b51041cd228ea5->enter($__internal_78caa35cc037140b32046bc1159a9b9ea69c59d554a7fbf6d4b51041cd228ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78caa35cc037140b32046bc1159a9b9ea69c59d554a7fbf6d4b51041cd228ea5->leave($__internal_78caa35cc037140b32046bc1159a9b9ea69c59d554a7fbf6d4b51041cd228ea5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c66f9281c89325692555b92019dbc2f1eb686dbcebc6d2d00b854b489e7df3ec = $this->env->getExtension("native_profiler");
        $__internal_c66f9281c89325692555b92019dbc2f1eb686dbcebc6d2d00b854b489e7df3ec->enter($__internal_c66f9281c89325692555b92019dbc2f1eb686dbcebc6d2d00b854b489e7df3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c66f9281c89325692555b92019dbc2f1eb686dbcebc6d2d00b854b489e7df3ec->leave($__internal_c66f9281c89325692555b92019dbc2f1eb686dbcebc6d2d00b854b489e7df3ec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
