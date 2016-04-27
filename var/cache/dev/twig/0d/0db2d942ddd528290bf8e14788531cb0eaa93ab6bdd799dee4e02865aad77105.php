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
        $__internal_bec28e5a0446f8c1528a4693b6bb67ad5562f6b231d6fae18aad3715e0974efe = $this->env->getExtension("native_profiler");
        $__internal_bec28e5a0446f8c1528a4693b6bb67ad5562f6b231d6fae18aad3715e0974efe->enter($__internal_bec28e5a0446f8c1528a4693b6bb67ad5562f6b231d6fae18aad3715e0974efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bec28e5a0446f8c1528a4693b6bb67ad5562f6b231d6fae18aad3715e0974efe->leave($__internal_bec28e5a0446f8c1528a4693b6bb67ad5562f6b231d6fae18aad3715e0974efe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc436885f91e8374a1be57a785c88d7ff989712460c558d7fad00d07bde43d50 = $this->env->getExtension("native_profiler");
        $__internal_fc436885f91e8374a1be57a785c88d7ff989712460c558d7fad00d07bde43d50->enter($__internal_fc436885f91e8374a1be57a785c88d7ff989712460c558d7fad00d07bde43d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc436885f91e8374a1be57a785c88d7ff989712460c558d7fad00d07bde43d50->leave($__internal_fc436885f91e8374a1be57a785c88d7ff989712460c558d7fad00d07bde43d50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fbccdfeb1475dc7cf9a0ac6948ce16de77d67cb0957d39532150d257d1d8e04 = $this->env->getExtension("native_profiler");
        $__internal_8fbccdfeb1475dc7cf9a0ac6948ce16de77d67cb0957d39532150d257d1d8e04->enter($__internal_8fbccdfeb1475dc7cf9a0ac6948ce16de77d67cb0957d39532150d257d1d8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8fbccdfeb1475dc7cf9a0ac6948ce16de77d67cb0957d39532150d257d1d8e04->leave($__internal_8fbccdfeb1475dc7cf9a0ac6948ce16de77d67cb0957d39532150d257d1d8e04_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e90d90781df9500b236b61c400ae1dc837960537a73dc4fc653534eeebff09 = $this->env->getExtension("native_profiler");
        $__internal_97e90d90781df9500b236b61c400ae1dc837960537a73dc4fc653534eeebff09->enter($__internal_97e90d90781df9500b236b61c400ae1dc837960537a73dc4fc653534eeebff09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97e90d90781df9500b236b61c400ae1dc837960537a73dc4fc653534eeebff09->leave($__internal_97e90d90781df9500b236b61c400ae1dc837960537a73dc4fc653534eeebff09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ce34464f8fb6ff8534b9e39cb99a5e14cedf3f0a0497f2b2f16aac3007a0dad = $this->env->getExtension("native_profiler");
        $__internal_7ce34464f8fb6ff8534b9e39cb99a5e14cedf3f0a0497f2b2f16aac3007a0dad->enter($__internal_7ce34464f8fb6ff8534b9e39cb99a5e14cedf3f0a0497f2b2f16aac3007a0dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ce34464f8fb6ff8534b9e39cb99a5e14cedf3f0a0497f2b2f16aac3007a0dad->leave($__internal_7ce34464f8fb6ff8534b9e39cb99a5e14cedf3f0a0497f2b2f16aac3007a0dad_prof);

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
