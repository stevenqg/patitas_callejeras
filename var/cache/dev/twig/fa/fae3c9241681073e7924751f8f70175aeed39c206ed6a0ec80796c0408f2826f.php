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
        $__internal_ff5c2a64c25e8592f74965746858529fb79ffa8b14b52ec93bb7d9fafa2b3a77 = $this->env->getExtension("native_profiler");
        $__internal_ff5c2a64c25e8592f74965746858529fb79ffa8b14b52ec93bb7d9fafa2b3a77->enter($__internal_ff5c2a64c25e8592f74965746858529fb79ffa8b14b52ec93bb7d9fafa2b3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:add_photo_mascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5c2a64c25e8592f74965746858529fb79ffa8b14b52ec93bb7d9fafa2b3a77->leave($__internal_ff5c2a64c25e8592f74965746858529fb79ffa8b14b52ec93bb7d9fafa2b3a77_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0d460c56977551a47a6afb3fa7c3c251f52d939d7977292b533a49b40b74619 = $this->env->getExtension("native_profiler");
        $__internal_d0d460c56977551a47a6afb3fa7c3c251f52d939d7977292b533a49b40b74619->enter($__internal_d0d460c56977551a47a6afb3fa7c3c251f52d939d7977292b533a49b40b74619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/fileinput.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_d0d460c56977551a47a6afb3fa7c3c251f52d939d7977292b533a49b40b74619->leave($__internal_d0d460c56977551a47a6afb3fa7c3c251f52d939d7977292b533a49b40b74619_prof);

    }

    // line 6
    public function block_capa($context, array $blocks = array())
    {
        $__internal_dc8e15a0df514e9b136d80f7ab0a4af5bc9c06d9ebbca03958455e1f25f5d16f = $this->env->getExtension("native_profiler");
        $__internal_dc8e15a0df514e9b136d80f7ab0a4af5bc9c06d9ebbca03958455e1f25f5d16f->enter($__internal_dc8e15a0df514e9b136d80f7ab0a4af5bc9c06d9ebbca03958455e1f25f5d16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
        
        $__internal_dc8e15a0df514e9b136d80f7ab0a4af5bc9c06d9ebbca03958455e1f25f5d16f->leave($__internal_dc8e15a0df514e9b136d80f7ab0a4af5bc9c06d9ebbca03958455e1f25f5d16f_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f4af2893a9cc6f9430612342ddb6f64012a8556db2c224cfae6bd88644fb99e4 = $this->env->getExtension("native_profiler");
        $__internal_f4af2893a9cc6f9430612342ddb6f64012a8556db2c224cfae6bd88644fb99e4->enter($__internal_f4af2893a9cc6f9430612342ddb6f64012a8556db2c224cfae6bd88644fb99e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fileinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_f4af2893a9cc6f9430612342ddb6f64012a8556db2c224cfae6bd88644fb99e4->leave($__internal_f4af2893a9cc6f9430612342ddb6f64012a8556db2c224cfae6bd88644fb99e4_prof);

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
