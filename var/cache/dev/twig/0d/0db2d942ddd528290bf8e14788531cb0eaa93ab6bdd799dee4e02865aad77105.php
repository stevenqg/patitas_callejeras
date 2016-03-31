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
        $__internal_f67e94d2b8cd7279cccaa98b7930ae10fe5e49ab48277e808cba0b0ef3ab0a7f = $this->env->getExtension("native_profiler");
        $__internal_f67e94d2b8cd7279cccaa98b7930ae10fe5e49ab48277e808cba0b0ef3ab0a7f->enter($__internal_f67e94d2b8cd7279cccaa98b7930ae10fe5e49ab48277e808cba0b0ef3ab0a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f67e94d2b8cd7279cccaa98b7930ae10fe5e49ab48277e808cba0b0ef3ab0a7f->leave($__internal_f67e94d2b8cd7279cccaa98b7930ae10fe5e49ab48277e808cba0b0ef3ab0a7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ec5c5ac1dae7b260f79ad70f8eaf77678666af018aec041e0672b92f99b4018 = $this->env->getExtension("native_profiler");
        $__internal_1ec5c5ac1dae7b260f79ad70f8eaf77678666af018aec041e0672b92f99b4018->enter($__internal_1ec5c5ac1dae7b260f79ad70f8eaf77678666af018aec041e0672b92f99b4018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ec5c5ac1dae7b260f79ad70f8eaf77678666af018aec041e0672b92f99b4018->leave($__internal_1ec5c5ac1dae7b260f79ad70f8eaf77678666af018aec041e0672b92f99b4018_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_409e99d2c0d19bac2e24d2384477925bc42d229c900f529ebd2450eba4e1b690 = $this->env->getExtension("native_profiler");
        $__internal_409e99d2c0d19bac2e24d2384477925bc42d229c900f529ebd2450eba4e1b690->enter($__internal_409e99d2c0d19bac2e24d2384477925bc42d229c900f529ebd2450eba4e1b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_409e99d2c0d19bac2e24d2384477925bc42d229c900f529ebd2450eba4e1b690->leave($__internal_409e99d2c0d19bac2e24d2384477925bc42d229c900f529ebd2450eba4e1b690_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b73f308ff069c93586088f666e07cd399bf6d3dc27dab9b33d1c56c161ee55df = $this->env->getExtension("native_profiler");
        $__internal_b73f308ff069c93586088f666e07cd399bf6d3dc27dab9b33d1c56c161ee55df->enter($__internal_b73f308ff069c93586088f666e07cd399bf6d3dc27dab9b33d1c56c161ee55df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b73f308ff069c93586088f666e07cd399bf6d3dc27dab9b33d1c56c161ee55df->leave($__internal_b73f308ff069c93586088f666e07cd399bf6d3dc27dab9b33d1c56c161ee55df_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f246c837dc025c6f156040ddad380cf44787a90ee00997e3ea074099892f1a0 = $this->env->getExtension("native_profiler");
        $__internal_3f246c837dc025c6f156040ddad380cf44787a90ee00997e3ea074099892f1a0->enter($__internal_3f246c837dc025c6f156040ddad380cf44787a90ee00997e3ea074099892f1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f246c837dc025c6f156040ddad380cf44787a90ee00997e3ea074099892f1a0->leave($__internal_3f246c837dc025c6f156040ddad380cf44787a90ee00997e3ea074099892f1a0_prof);

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
