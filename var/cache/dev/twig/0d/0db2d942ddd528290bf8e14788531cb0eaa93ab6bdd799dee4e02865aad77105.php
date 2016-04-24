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
        $__internal_49560f08001817f2804963e5b117367e361eaf30e94e21821c020e531f9d6467 = $this->env->getExtension("native_profiler");
        $__internal_49560f08001817f2804963e5b117367e361eaf30e94e21821c020e531f9d6467->enter($__internal_49560f08001817f2804963e5b117367e361eaf30e94e21821c020e531f9d6467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_49560f08001817f2804963e5b117367e361eaf30e94e21821c020e531f9d6467->leave($__internal_49560f08001817f2804963e5b117367e361eaf30e94e21821c020e531f9d6467_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77a50008454445a6b04a23e4d760aed2f4576f110ea1a224caadced5625e51d5 = $this->env->getExtension("native_profiler");
        $__internal_77a50008454445a6b04a23e4d760aed2f4576f110ea1a224caadced5625e51d5->enter($__internal_77a50008454445a6b04a23e4d760aed2f4576f110ea1a224caadced5625e51d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77a50008454445a6b04a23e4d760aed2f4576f110ea1a224caadced5625e51d5->leave($__internal_77a50008454445a6b04a23e4d760aed2f4576f110ea1a224caadced5625e51d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9afdf3f253fa1ef9873062dc5a58ac6e8262d74f91cf2d57831bd0fc2ba1b312 = $this->env->getExtension("native_profiler");
        $__internal_9afdf3f253fa1ef9873062dc5a58ac6e8262d74f91cf2d57831bd0fc2ba1b312->enter($__internal_9afdf3f253fa1ef9873062dc5a58ac6e8262d74f91cf2d57831bd0fc2ba1b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9afdf3f253fa1ef9873062dc5a58ac6e8262d74f91cf2d57831bd0fc2ba1b312->leave($__internal_9afdf3f253fa1ef9873062dc5a58ac6e8262d74f91cf2d57831bd0fc2ba1b312_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dbbaa6f33f5519e6e64ffe4584c595a0bcce93c049868ad2298df99e747fb6d = $this->env->getExtension("native_profiler");
        $__internal_9dbbaa6f33f5519e6e64ffe4584c595a0bcce93c049868ad2298df99e747fb6d->enter($__internal_9dbbaa6f33f5519e6e64ffe4584c595a0bcce93c049868ad2298df99e747fb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9dbbaa6f33f5519e6e64ffe4584c595a0bcce93c049868ad2298df99e747fb6d->leave($__internal_9dbbaa6f33f5519e6e64ffe4584c595a0bcce93c049868ad2298df99e747fb6d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65bd48e38cfd3f0c9a1ffae582b94c5d6e295d99437914b600963e1b799cd2ba = $this->env->getExtension("native_profiler");
        $__internal_65bd48e38cfd3f0c9a1ffae582b94c5d6e295d99437914b600963e1b799cd2ba->enter($__internal_65bd48e38cfd3f0c9a1ffae582b94c5d6e295d99437914b600963e1b799cd2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_65bd48e38cfd3f0c9a1ffae582b94c5d6e295d99437914b600963e1b799cd2ba->leave($__internal_65bd48e38cfd3f0c9a1ffae582b94c5d6e295d99437914b600963e1b799cd2ba_prof);

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
