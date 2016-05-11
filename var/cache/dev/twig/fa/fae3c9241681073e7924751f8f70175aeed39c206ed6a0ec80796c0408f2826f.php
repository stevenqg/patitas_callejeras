<?php

/* PCFundationBundle:Admin:add_photo_mascota.html.twig */
class __TwigTemplate_75cafd2ccf5db3ab6bd156174a6b08f9e4691e1cbd56c384e38b6ca8e1d94472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:add_photo_mascota.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'capa' => array($this, 'block_capa'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f88b072391ae1a77afd668882760f4f251aaeab8ff6d3202993bf2aca3d9ec38 = $this->env->getExtension("native_profiler");
        $__internal_f88b072391ae1a77afd668882760f4f251aaeab8ff6d3202993bf2aca3d9ec38->enter($__internal_f88b072391ae1a77afd668882760f4f251aaeab8ff6d3202993bf2aca3d9ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:add_photo_mascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88b072391ae1a77afd668882760f4f251aaeab8ff6d3202993bf2aca3d9ec38->leave($__internal_f88b072391ae1a77afd668882760f4f251aaeab8ff6d3202993bf2aca3d9ec38_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c2809c3e2c21354eff7904c0ceece6da764e0e3af404122ff43a1f37a553a2f = $this->env->getExtension("native_profiler");
        $__internal_0c2809c3e2c21354eff7904c0ceece6da764e0e3af404122ff43a1f37a553a2f->enter($__internal_0c2809c3e2c21354eff7904c0ceece6da764e0e3af404122ff43a1f37a553a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/fileinput.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_0c2809c3e2c21354eff7904c0ceece6da764e0e3af404122ff43a1f37a553a2f->leave($__internal_0c2809c3e2c21354eff7904c0ceece6da764e0e3af404122ff43a1f37a553a2f_prof);

    }

    // line 6
    public function block_capa($context, array $blocks = array())
    {
        $__internal_bfdc10b5d8907d4dbce3ec82b4d32f0efce9f9bce024aeac1c19f8e91c8ccc8d = $this->env->getExtension("native_profiler");
        $__internal_bfdc10b5d8907d4dbce3ec82b4d32f0efce9f9bce024aeac1c19f8e91c8ccc8d->enter($__internal_bfdc10b5d8907d4dbce3ec82b4d32f0efce9f9bce024aeac1c19f8e91c8ccc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

        // line 7
        echo "<div>
\t\t
\t\t<h1 class=\"coloralert\"> Agregar Mascota - paso 2</h1>
\t\t<div class=\"sectionstile\">
\t\t\t<form role=\"form \"enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pc_admin_pet_photo");
        echo "\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"sr-only\" for=\"file-1\">seleccione una foto para la mascota</label>
\t                <input id=\"file-1\" type=\"file\" class=\"form-control\" name=\"file\" data-preview-file-type=\"any\">
\t            </div>
\t            <button type=\"submit\" class=\"btn btn-default\">guardar</button>
\t        </form>
\t\t</div> 
\t</div><!--div sectionsitile-->
</div>
";
        
        $__internal_bfdc10b5d8907d4dbce3ec82b4d32f0efce9f9bce024aeac1c19f8e91c8ccc8d->leave($__internal_bfdc10b5d8907d4dbce3ec82b4d32f0efce9f9bce024aeac1c19f8e91c8ccc8d_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ccc0192df035c735188a2e60642364b088573a0f817ec1a5892c76730aed9fe2 = $this->env->getExtension("native_profiler");
        $__internal_ccc0192df035c735188a2e60642364b088573a0f817ec1a5892c76730aed9fe2->enter($__internal_ccc0192df035c735188a2e60642364b088573a0f817ec1a5892c76730aed9fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fileinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ccc0192df035c735188a2e60642364b088573a0f817ec1a5892c76730aed9fe2->leave($__internal_ccc0192df035c735188a2e60642364b088573a0f817ec1a5892c76730aed9fe2_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:add_photo_mascota.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  91 => 23,  85 => 22,  67 => 11,  61 => 7,  55 => 6,  46 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/*  <link href="{{ asset('public/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />*/
/* {% endblock %}*/
/* {% block capa %}*/
/* <div>*/
/* 		*/
/* 		<h1 class="coloralert"> Agregar Mascota - paso 2</h1>*/
/* 		<div class="sectionstile">*/
/* 			<form role="form "enctype="multipart/form-data" method="post" action="{{ path('pc_admin_pet_photo')}}">*/
/* 				<div class="form-group">*/
/* 					<label class="sr-only" for="file-1">seleccione una foto para la mascota</label>*/
/* 	                <input id="file-1" type="file" class="form-control" name="file" data-preview-file-type="any">*/
/* 	            </div>*/
/* 	            <button type="submit" class="btn btn-default">guardar</button>*/
/* 	        </form>*/
/* 		</div> */
/* 	</div><!--div sectionsitile-->*/
/* </div>*/
/* {% endblock %}	*/
/* {% block javascript %}*/
/* {{ parent() }}*/
/* 	    <script src="{{ asset('public/js/fileinput.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
