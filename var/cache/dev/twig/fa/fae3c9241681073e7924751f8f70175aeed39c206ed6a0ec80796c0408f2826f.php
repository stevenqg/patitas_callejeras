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
        $__internal_5282695f61f069529a452225269a0fd9a7b468a50676e9bbfa580e5fa037497a = $this->env->getExtension("native_profiler");
        $__internal_5282695f61f069529a452225269a0fd9a7b468a50676e9bbfa580e5fa037497a->enter($__internal_5282695f61f069529a452225269a0fd9a7b468a50676e9bbfa580e5fa037497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:add_photo_mascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5282695f61f069529a452225269a0fd9a7b468a50676e9bbfa580e5fa037497a->leave($__internal_5282695f61f069529a452225269a0fd9a7b468a50676e9bbfa580e5fa037497a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0429abebb8900e08017684ba05cf5806e8f2d2b458d2a3255c4c706c7e163af = $this->env->getExtension("native_profiler");
        $__internal_d0429abebb8900e08017684ba05cf5806e8f2d2b458d2a3255c4c706c7e163af->enter($__internal_d0429abebb8900e08017684ba05cf5806e8f2d2b458d2a3255c4c706c7e163af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/fileinput.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_d0429abebb8900e08017684ba05cf5806e8f2d2b458d2a3255c4c706c7e163af->leave($__internal_d0429abebb8900e08017684ba05cf5806e8f2d2b458d2a3255c4c706c7e163af_prof);

    }

    // line 6
    public function block_capa($context, array $blocks = array())
    {
        $__internal_14963401c10e976320e3fb373d7df608ce48f7ed5cbb42dcf55c6bdbfe322b84 = $this->env->getExtension("native_profiler");
        $__internal_14963401c10e976320e3fb373d7df608ce48f7ed5cbb42dcf55c6bdbfe322b84->enter($__internal_14963401c10e976320e3fb373d7df608ce48f7ed5cbb42dcf55c6bdbfe322b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
        
        $__internal_14963401c10e976320e3fb373d7df608ce48f7ed5cbb42dcf55c6bdbfe322b84->leave($__internal_14963401c10e976320e3fb373d7df608ce48f7ed5cbb42dcf55c6bdbfe322b84_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_674dc47b8f781e6135a5c3ab85ae32bc1c6bfd2da44f173fcf59a2da37c25aae = $this->env->getExtension("native_profiler");
        $__internal_674dc47b8f781e6135a5c3ab85ae32bc1c6bfd2da44f173fcf59a2da37c25aae->enter($__internal_674dc47b8f781e6135a5c3ab85ae32bc1c6bfd2da44f173fcf59a2da37c25aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fileinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_674dc47b8f781e6135a5c3ab85ae32bc1c6bfd2da44f173fcf59a2da37c25aae->leave($__internal_674dc47b8f781e6135a5c3ab85ae32bc1c6bfd2da44f173fcf59a2da37c25aae_prof);

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
