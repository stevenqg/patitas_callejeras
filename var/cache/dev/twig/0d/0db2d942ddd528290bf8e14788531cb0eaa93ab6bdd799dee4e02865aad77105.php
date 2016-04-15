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
        $__internal_9a61500d8de9727807d8d4d2a8367199b9959857392b41bdb9182d6035e800a8 = $this->env->getExtension("native_profiler");
        $__internal_9a61500d8de9727807d8d4d2a8367199b9959857392b41bdb9182d6035e800a8->enter($__internal_9a61500d8de9727807d8d4d2a8367199b9959857392b41bdb9182d6035e800a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9a61500d8de9727807d8d4d2a8367199b9959857392b41bdb9182d6035e800a8->leave($__internal_9a61500d8de9727807d8d4d2a8367199b9959857392b41bdb9182d6035e800a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d20809a22a83c2d976c30aad20cc38c476c84eddedca7456dbb9b4219c6ce8c3 = $this->env->getExtension("native_profiler");
        $__internal_d20809a22a83c2d976c30aad20cc38c476c84eddedca7456dbb9b4219c6ce8c3->enter($__internal_d20809a22a83c2d976c30aad20cc38c476c84eddedca7456dbb9b4219c6ce8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d20809a22a83c2d976c30aad20cc38c476c84eddedca7456dbb9b4219c6ce8c3->leave($__internal_d20809a22a83c2d976c30aad20cc38c476c84eddedca7456dbb9b4219c6ce8c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65912b2773558da5e48612cbac4a4f97604020444067e0c28725706a2e128b86 = $this->env->getExtension("native_profiler");
        $__internal_65912b2773558da5e48612cbac4a4f97604020444067e0c28725706a2e128b86->enter($__internal_65912b2773558da5e48612cbac4a4f97604020444067e0c28725706a2e128b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65912b2773558da5e48612cbac4a4f97604020444067e0c28725706a2e128b86->leave($__internal_65912b2773558da5e48612cbac4a4f97604020444067e0c28725706a2e128b86_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_40b6ae8b05d8d0666792deb2a9d06d0466972527e4aa7dd451c88ddc5152b672 = $this->env->getExtension("native_profiler");
        $__internal_40b6ae8b05d8d0666792deb2a9d06d0466972527e4aa7dd451c88ddc5152b672->enter($__internal_40b6ae8b05d8d0666792deb2a9d06d0466972527e4aa7dd451c88ddc5152b672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40b6ae8b05d8d0666792deb2a9d06d0466972527e4aa7dd451c88ddc5152b672->leave($__internal_40b6ae8b05d8d0666792deb2a9d06d0466972527e4aa7dd451c88ddc5152b672_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a5200acc6111bbe47769367019e2178359159463d8fb086714c6ed346c9523a = $this->env->getExtension("native_profiler");
        $__internal_1a5200acc6111bbe47769367019e2178359159463d8fb086714c6ed346c9523a->enter($__internal_1a5200acc6111bbe47769367019e2178359159463d8fb086714c6ed346c9523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1a5200acc6111bbe47769367019e2178359159463d8fb086714c6ed346c9523a->leave($__internal_1a5200acc6111bbe47769367019e2178359159463d8fb086714c6ed346c9523a_prof);

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
