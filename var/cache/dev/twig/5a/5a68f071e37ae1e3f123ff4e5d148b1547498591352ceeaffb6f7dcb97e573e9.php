<?php

/* PCFundationBundle:fundation:encuesta.html.twig */
class __TwigTemplate_664a44c8d4bea6799e517a6594624204eb44784a46a9eeeb01155750471e95c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:encuesta.html.twig", 2);
        $this->blocks = array(
            'scroll_nav' => array($this, 'block_scroll_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de07006f0104267e6ac916db4fcea4a386d595415805491461b38409b36cfcd = $this->env->getExtension("native_profiler");
        $__internal_4de07006f0104267e6ac916db4fcea4a386d595415805491461b38409b36cfcd->enter($__internal_4de07006f0104267e6ac916db4fcea4a386d595415805491461b38409b36cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:encuesta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de07006f0104267e6ac916db4fcea4a386d595415805491461b38409b36cfcd->leave($__internal_4de07006f0104267e6ac916db4fcea4a386d595415805491461b38409b36cfcd_prof);

    }

    // line 3
    public function block_scroll_nav($context, array $blocks = array())
    {
        $__internal_525fbb4df9b7d3d50e2d9b34f7b4c68094eaab77c4cbe0ab546b290dafcb6624 = $this->env->getExtension("native_profiler");
        $__internal_525fbb4df9b7d3d50e2d9b34f7b4c68094eaab77c4cbe0ab546b290dafcb6624->enter($__internal_525fbb4df9b7d3d50e2d9b34f7b4c68094eaab77c4cbe0ab546b290dafcb6624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scroll_nav"));

        
        $__internal_525fbb4df9b7d3d50e2d9b34f7b4c68094eaab77c4cbe0ab546b290dafcb6624->leave($__internal_525fbb4df9b7d3d50e2d9b34f7b4c68094eaab77c4cbe0ab546b290dafcb6624_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fabfffaffe2b5abf9cbb39129897323eab6e46c91c070c9c0caa93a45e41dfe1 = $this->env->getExtension("native_profiler");
        $__internal_fabfffaffe2b5abf9cbb39129897323eab6e46c91c070c9c0caa93a45e41dfe1->enter($__internal_fabfffaffe2b5abf9cbb39129897323eab6e46c91c070c9c0caa93a45e41dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-1\"></div>
\t\t<div class=\"col-md-10\">
\t\t\t<img class=\"posrigth\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo.png"), "html", null, true);
        echo "\"  alt=\"logo\">
\t\t</div>
\t\t<div class=\"col-md-1\"></div>
\t</div>
\t\t<div class=\"liner\"></div>
<body>
\t<iframe class=\"encuestaestile\" src=\"https://docs.google.com/forms/d/1h7QP6Zq4FdxyWfApP34ptDkIqG2UyhEun5WMKQ3Zqcc/viewform?embedded=true\"></iframe>
</body>

";
        
        $__internal_fabfffaffe2b5abf9cbb39129897323eab6e46c91c070c9c0caa93a45e41dfe1->leave($__internal_fabfffaffe2b5abf9cbb39129897323eab6e46c91c070c9c0caa93a45e41dfe1_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_db998046df462dbf6a310969cca000882b222103d390366a523ee54af0846288 = $this->env->getExtension("native_profiler");
        $__internal_db998046df462dbf6a310969cca000882b222103d390366a523ee54af0846288->enter($__internal_db998046df462dbf6a310969cca000882b222103d390366a523ee54af0846288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_db998046df462dbf6a310969cca000882b222103d390366a523ee54af0846288->leave($__internal_db998046df462dbf6a310969cca000882b222103d390366a523ee54af0846288_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:encuesta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  58 => 9,  53 => 6,  47 => 5,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "layout.html.twig" %}*/
/* {% block scroll_nav %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="row">*/
/* 		<div class="col-md-1"></div>*/
/* 		<div class="col-md-10">*/
/* 			<img class="posrigth" src="{{ asset('public/img/logo.png') }}"  alt="logo">*/
/* 		</div>*/
/* 		<div class="col-md-1"></div>*/
/* 	</div>*/
/* 		<div class="liner"></div>*/
/* <body>*/
/* 	<iframe class="encuestaestile" src="https://docs.google.com/forms/d/1h7QP6Zq4FdxyWfApP34ptDkIqG2UyhEun5WMKQ3Zqcc/viewform?embedded=true"></iframe>*/
/* </body>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {% endblock %}*/
