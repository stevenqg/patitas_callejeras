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
        $__internal_4805870c249349d24880b6cc8febcfac660c9a28560a18c5f91bd762ac8f8137 = $this->env->getExtension("native_profiler");
        $__internal_4805870c249349d24880b6cc8febcfac660c9a28560a18c5f91bd762ac8f8137->enter($__internal_4805870c249349d24880b6cc8febcfac660c9a28560a18c5f91bd762ac8f8137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4805870c249349d24880b6cc8febcfac660c9a28560a18c5f91bd762ac8f8137->leave($__internal_4805870c249349d24880b6cc8febcfac660c9a28560a18c5f91bd762ac8f8137_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03c2500e50db6b9a7ae122a0083e20480f9222eba8780b8867e3c63d760500f0 = $this->env->getExtension("native_profiler");
        $__internal_03c2500e50db6b9a7ae122a0083e20480f9222eba8780b8867e3c63d760500f0->enter($__internal_03c2500e50db6b9a7ae122a0083e20480f9222eba8780b8867e3c63d760500f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03c2500e50db6b9a7ae122a0083e20480f9222eba8780b8867e3c63d760500f0->leave($__internal_03c2500e50db6b9a7ae122a0083e20480f9222eba8780b8867e3c63d760500f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d62feca5a7bc709ecc3d02877707e0b1431595d97e8f7c91aae09b506ba4255 = $this->env->getExtension("native_profiler");
        $__internal_1d62feca5a7bc709ecc3d02877707e0b1431595d97e8f7c91aae09b506ba4255->enter($__internal_1d62feca5a7bc709ecc3d02877707e0b1431595d97e8f7c91aae09b506ba4255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d62feca5a7bc709ecc3d02877707e0b1431595d97e8f7c91aae09b506ba4255->leave($__internal_1d62feca5a7bc709ecc3d02877707e0b1431595d97e8f7c91aae09b506ba4255_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e5e6b74932c4489ac27e05ff2893f58eb93868556541210b6be3e5f0b1d2763 = $this->env->getExtension("native_profiler");
        $__internal_9e5e6b74932c4489ac27e05ff2893f58eb93868556541210b6be3e5f0b1d2763->enter($__internal_9e5e6b74932c4489ac27e05ff2893f58eb93868556541210b6be3e5f0b1d2763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e5e6b74932c4489ac27e05ff2893f58eb93868556541210b6be3e5f0b1d2763->leave($__internal_9e5e6b74932c4489ac27e05ff2893f58eb93868556541210b6be3e5f0b1d2763_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d74e74106729698b4580bb874c962edf048c9dcf47491ab2f490b92d8df3d87 = $this->env->getExtension("native_profiler");
        $__internal_6d74e74106729698b4580bb874c962edf048c9dcf47491ab2f490b92d8df3d87->enter($__internal_6d74e74106729698b4580bb874c962edf048c9dcf47491ab2f490b92d8df3d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d74e74106729698b4580bb874c962edf048c9dcf47491ab2f490b92d8df3d87->leave($__internal_6d74e74106729698b4580bb874c962edf048c9dcf47491ab2f490b92d8df3d87_prof);

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
