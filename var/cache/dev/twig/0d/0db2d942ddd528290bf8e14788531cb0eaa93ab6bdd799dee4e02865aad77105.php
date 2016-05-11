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
        $__internal_895c5175d95313c2680e08e5ba8d41f23ecee78037df6422d7f6977150b2ed46 = $this->env->getExtension("native_profiler");
        $__internal_895c5175d95313c2680e08e5ba8d41f23ecee78037df6422d7f6977150b2ed46->enter($__internal_895c5175d95313c2680e08e5ba8d41f23ecee78037df6422d7f6977150b2ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_895c5175d95313c2680e08e5ba8d41f23ecee78037df6422d7f6977150b2ed46->leave($__internal_895c5175d95313c2680e08e5ba8d41f23ecee78037df6422d7f6977150b2ed46_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b89c75403995a01d67b7242485aa5bb8eb6dd8e8a0193abb80ee90d462b881 = $this->env->getExtension("native_profiler");
        $__internal_b0b89c75403995a01d67b7242485aa5bb8eb6dd8e8a0193abb80ee90d462b881->enter($__internal_b0b89c75403995a01d67b7242485aa5bb8eb6dd8e8a0193abb80ee90d462b881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0b89c75403995a01d67b7242485aa5bb8eb6dd8e8a0193abb80ee90d462b881->leave($__internal_b0b89c75403995a01d67b7242485aa5bb8eb6dd8e8a0193abb80ee90d462b881_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ae4d1ef79084254ee0cbbb65af290d673a7826032713c15a2cf05b97ef6f1db = $this->env->getExtension("native_profiler");
        $__internal_0ae4d1ef79084254ee0cbbb65af290d673a7826032713c15a2cf05b97ef6f1db->enter($__internal_0ae4d1ef79084254ee0cbbb65af290d673a7826032713c15a2cf05b97ef6f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ae4d1ef79084254ee0cbbb65af290d673a7826032713c15a2cf05b97ef6f1db->leave($__internal_0ae4d1ef79084254ee0cbbb65af290d673a7826032713c15a2cf05b97ef6f1db_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8554c706174721657b1b0ffe37319e1fc51d107812c3f65c5b04d28662ff553c = $this->env->getExtension("native_profiler");
        $__internal_8554c706174721657b1b0ffe37319e1fc51d107812c3f65c5b04d28662ff553c->enter($__internal_8554c706174721657b1b0ffe37319e1fc51d107812c3f65c5b04d28662ff553c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8554c706174721657b1b0ffe37319e1fc51d107812c3f65c5b04d28662ff553c->leave($__internal_8554c706174721657b1b0ffe37319e1fc51d107812c3f65c5b04d28662ff553c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccdbdcb9b08bd5ae5429d8f9786650f70722f1b3dbc85257d8be1c0838a25969 = $this->env->getExtension("native_profiler");
        $__internal_ccdbdcb9b08bd5ae5429d8f9786650f70722f1b3dbc85257d8be1c0838a25969->enter($__internal_ccdbdcb9b08bd5ae5429d8f9786650f70722f1b3dbc85257d8be1c0838a25969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccdbdcb9b08bd5ae5429d8f9786650f70722f1b3dbc85257d8be1c0838a25969->leave($__internal_ccdbdcb9b08bd5ae5429d8f9786650f70722f1b3dbc85257d8be1c0838a25969_prof);

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
