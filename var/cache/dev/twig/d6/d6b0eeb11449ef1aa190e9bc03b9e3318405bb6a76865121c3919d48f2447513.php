<?php

/* PCFundationBundle:Admin:colaborador.html.twig */
class __TwigTemplate_235977852323ad627e575f1b6d22a922f870ea1a8350a3f4b0a0f70b2f164e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFundationBundle:Admin:admin.html.twig", "PCFundationBundle:Admin:colaborador.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFundationBundle:Admin:admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0874cf3152a53c01e6c85a3607ffe0ff06d77f5d9d7522504f47076fa421401d = $this->env->getExtension("native_profiler");
        $__internal_0874cf3152a53c01e6c85a3607ffe0ff06d77f5d9d7522504f47076fa421401d->enter($__internal_0874cf3152a53c01e6c85a3607ffe0ff06d77f5d9d7522504f47076fa421401d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:Admin:colaborador.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0874cf3152a53c01e6c85a3607ffe0ff06d77f5d9d7522504f47076fa421401d->leave($__internal_0874cf3152a53c01e6c85a3607ffe0ff06d77f5d9d7522504f47076fa421401d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_023205f48378952fce2937bb190d939bb0e732e8ec99c2260cfd0388b22ebf24 = $this->env->getExtension("native_profiler");
        $__internal_023205f48378952fce2937bb190d939bb0e732e8ec99c2260cfd0388b22ebf24->enter($__internal_023205f48378952fce2937bb190d939bb0e732e8ec99c2260cfd0388b22ebf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"liner\"></div>
\t<br>
\t<div class=\"container\">
  \t<form>
      ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
      <div class=\"form-group\">
        <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Nombre:</h5></label>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nombre(s) y apellido(s)")));
        echo "
      </div>
      <div class=\"form-group\">
        <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Dirección:</h5></label>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dirección")));
        echo "
      </div>
      <div class=\"form-group\">
        <label for=\"recipient-name\" class=\"textjusti control-label\"><h5>Teléfono:</h5></label>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "número telefónico")));
        echo "
      </div>
      <div class=\"form-grou\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "registrar", "attr" => array("class" => "btn btn-primary")));
        echo "
      </div>
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </form>
\t</div>
";
        
        $__internal_023205f48378952fce2937bb190d939bb0e732e8ec99c2260cfd0388b22ebf24->leave($__internal_023205f48378952fce2937bb190d939bb0e732e8ec99c2260cfd0388b22ebf24_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:Admin:colaborador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  72 => 21,  66 => 18,  59 => 14,  52 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "PCFundationBundle:Admin:admin.html.twig"%}*/
/* {% block body %}*/
/* 	<div class="liner"></div>*/
/* 	<br>*/
/* 	<div class="container">*/
/*   	<form>*/
/*       {{ form_start(form, {'attr' : {'role' : 'form'} }) }}*/
/*       <div class="form-group">*/
/*         <label for="recipient-name" class="textjusti control-label"><h5>Nombre:</h5></label>*/
/*         {{form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'nombre(s) y apellido(s)' } })}}*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="recipient-name" class="textjusti control-label"><h5>Dirección:</h5></label>*/
/*         {{form_widget(form.address, {'attr' : {'class' : 'form-control', 'placeholder' : 'dirección' } })}}*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="recipient-name" class="textjusti control-label"><h5>Teléfono:</h5></label>*/
/*         {{form_widget(form.phone, {'attr' : {'class' : 'form-control', 'placeholder' : 'número telefónico' } })}}*/
/*       </div>*/
/*       <div class="form-grou">*/
/*         {{ form_widget(form.save, {'label' : 'registrar', 'attr' : {'class' : 'btn btn-primary'} }) }}*/
/*       </div>*/
/*     {{ form_end(form) }}*/
/*     </form>*/
/* 	</div>*/
/* {% endblock %}*/
