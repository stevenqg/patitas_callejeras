<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ef9c61b5feee76a9a10da653bde0dfa810f822cd3d2dbe495ef1a28648c07a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01ea176eaebd30b04abcec3acede2b7047d99cb79c18e49553b5e3eba4622f52 = $this->env->getExtension("native_profiler");
        $__internal_01ea176eaebd30b04abcec3acede2b7047d99cb79c18e49553b5e3eba4622f52->enter($__internal_01ea176eaebd30b04abcec3acede2b7047d99cb79c18e49553b5e3eba4622f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_01ea176eaebd30b04abcec3acede2b7047d99cb79c18e49553b5e3eba4622f52->leave($__internal_01ea176eaebd30b04abcec3acede2b7047d99cb79c18e49553b5e3eba4622f52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
