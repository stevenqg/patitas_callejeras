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
        $__internal_6c8416222b9bd26ae5bbaac1d140e049e60d8182001d35c815220eb4179850f5 = $this->env->getExtension("native_profiler");
        $__internal_6c8416222b9bd26ae5bbaac1d140e049e60d8182001d35c815220eb4179850f5->enter($__internal_6c8416222b9bd26ae5bbaac1d140e049e60d8182001d35c815220eb4179850f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:add_photo_mascota.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8416222b9bd26ae5bbaac1d140e049e60d8182001d35c815220eb4179850f5->leave($__internal_6c8416222b9bd26ae5bbaac1d140e049e60d8182001d35c815220eb4179850f5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b93bbde254dae081402e33cfa9f1bd257bc0a34297a1915a42618d4c727aa0f4 = $this->env->getExtension("native_profiler");
        $__internal_b93bbde254dae081402e33cfa9f1bd257bc0a34297a1915a42618d4c727aa0f4->enter($__internal_b93bbde254dae081402e33cfa9f1bd257bc0a34297a1915a42618d4c727aa0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/fileinput.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_b93bbde254dae081402e33cfa9f1bd257bc0a34297a1915a42618d4c727aa0f4->leave($__internal_b93bbde254dae081402e33cfa9f1bd257bc0a34297a1915a42618d4c727aa0f4_prof);

    }

    // line 6
    public function block_capa($context, array $blocks = array())
    {
        $__internal_09b9ad9bde62d62ead37b26c8020553ffe7dbc5a39a53ed07e5eadcfd82b1f3f = $this->env->getExtension("native_profiler");
        $__internal_09b9ad9bde62d62ead37b26c8020553ffe7dbc5a39a53ed07e5eadcfd82b1f3f->enter($__internal_09b9ad9bde62d62ead37b26c8020553ffe7dbc5a39a53ed07e5eadcfd82b1f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capa"));

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
        
        $__internal_09b9ad9bde62d62ead37b26c8020553ffe7dbc5a39a53ed07e5eadcfd82b1f3f->leave($__internal_09b9ad9bde62d62ead37b26c8020553ffe7dbc5a39a53ed07e5eadcfd82b1f3f_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_134c425a2de2f98c4552ffffe4ccebcf1d28425eae85e0c48889146e1e48bc8d = $this->env->getExtension("native_profiler");
        $__internal_134c425a2de2f98c4552ffffe4ccebcf1d28425eae85e0c48889146e1e48bc8d->enter($__internal_134c425a2de2f98c4552ffffe4ccebcf1d28425eae85e0c48889146e1e48bc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fileinput.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_134c425a2de2f98c4552ffffe4ccebcf1d28425eae85e0c48889146e1e48bc8d->leave($__internal_134c425a2de2f98c4552ffffe4ccebcf1d28425eae85e0c48889146e1e48bc8d_prof);

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
