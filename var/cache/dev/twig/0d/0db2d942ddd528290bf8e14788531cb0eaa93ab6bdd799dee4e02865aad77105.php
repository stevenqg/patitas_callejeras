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
        $__internal_58ca43e86ce50fe553f918839d22a16d1c2d5221a611bc963a76617f8176f99e = $this->env->getExtension("native_profiler");
        $__internal_58ca43e86ce50fe553f918839d22a16d1c2d5221a611bc963a76617f8176f99e->enter($__internal_58ca43e86ce50fe553f918839d22a16d1c2d5221a611bc963a76617f8176f99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_58ca43e86ce50fe553f918839d22a16d1c2d5221a611bc963a76617f8176f99e->leave($__internal_58ca43e86ce50fe553f918839d22a16d1c2d5221a611bc963a76617f8176f99e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee220a8a4eb8eac6173ce5abde8673620f50a90958cc06c0b7f9d93e9e978d78 = $this->env->getExtension("native_profiler");
        $__internal_ee220a8a4eb8eac6173ce5abde8673620f50a90958cc06c0b7f9d93e9e978d78->enter($__internal_ee220a8a4eb8eac6173ce5abde8673620f50a90958cc06c0b7f9d93e9e978d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ee220a8a4eb8eac6173ce5abde8673620f50a90958cc06c0b7f9d93e9e978d78->leave($__internal_ee220a8a4eb8eac6173ce5abde8673620f50a90958cc06c0b7f9d93e9e978d78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c23a9afb49f6976c8ddf2a8a58564e18d70be1a0b938aeffa36fb67faf660368 = $this->env->getExtension("native_profiler");
        $__internal_c23a9afb49f6976c8ddf2a8a58564e18d70be1a0b938aeffa36fb67faf660368->enter($__internal_c23a9afb49f6976c8ddf2a8a58564e18d70be1a0b938aeffa36fb67faf660368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c23a9afb49f6976c8ddf2a8a58564e18d70be1a0b938aeffa36fb67faf660368->leave($__internal_c23a9afb49f6976c8ddf2a8a58564e18d70be1a0b938aeffa36fb67faf660368_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8de43c46cbe2f82f605069185bcd2fca2ff16aba53b97a4f4e869c6481a07b = $this->env->getExtension("native_profiler");
        $__internal_ed8de43c46cbe2f82f605069185bcd2fca2ff16aba53b97a4f4e869c6481a07b->enter($__internal_ed8de43c46cbe2f82f605069185bcd2fca2ff16aba53b97a4f4e869c6481a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed8de43c46cbe2f82f605069185bcd2fca2ff16aba53b97a4f4e869c6481a07b->leave($__internal_ed8de43c46cbe2f82f605069185bcd2fca2ff16aba53b97a4f4e869c6481a07b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b62538737353e6720cf0ad1c112ce5ac3639a51a482fd7d1b05248b7034fe94b = $this->env->getExtension("native_profiler");
        $__internal_b62538737353e6720cf0ad1c112ce5ac3639a51a482fd7d1b05248b7034fe94b->enter($__internal_b62538737353e6720cf0ad1c112ce5ac3639a51a482fd7d1b05248b7034fe94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b62538737353e6720cf0ad1c112ce5ac3639a51a482fd7d1b05248b7034fe94b->leave($__internal_b62538737353e6720cf0ad1c112ce5ac3639a51a482fd7d1b05248b7034fe94b_prof);

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
