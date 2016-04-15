<?php

/* PCFundationBundle:fundation:indexAdmin.html.twig */
class __TwigTemplate_17878ad6aee3e3a3a7f789e94948a877338cf59380ff7e35c071c9fc2dc7339a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PCFundationBundle:fundation:indexAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1c642cf68e72c66fa6af0137e56caea8c72ee3d63409aa9daadfb1084376d0 = $this->env->getExtension("native_profiler");
        $__internal_ef1c642cf68e72c66fa6af0137e56caea8c72ee3d63409aa9daadfb1084376d0->enter($__internal_ef1c642cf68e72c66fa6af0137e56caea8c72ee3d63409aa9daadfb1084376d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1c642cf68e72c66fa6af0137e56caea8c72ee3d63409aa9daadfb1084376d0->leave($__internal_ef1c642cf68e72c66fa6af0137e56caea8c72ee3d63409aa9daadfb1084376d0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fbf923bec40c0c2af41149458bf21887d973492dc8e7fa3e9dcbe1b6616b535 = $this->env->getExtension("native_profiler");
        $__internal_4fbf923bec40c0c2af41149458bf21887d973492dc8e7fa3e9dcbe1b6616b535->enter($__internal_4fbf923bec40c0c2af41149458bf21887d973492dc8e7fa3e9dcbe1b6616b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<table>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 7
            echo "\t<tr>
\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "lastName", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "age", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "email", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "password", array()), "html", null, true);
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
        
        $__internal_4fbf923bec40c0c2af41149458bf21887d973492dc8e7fa3e9dcbe1b6616b535->leave($__internal_4fbf923bec40c0c2af41149458bf21887d973492dc8e7fa3e9dcbe1b6616b535_prof);

    }

    public function getTemplateName()
    {
        return "PCFundationBundle:fundation:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  50 => 7,  46 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block body %}*/
/* {{ parent() }}*/
/* */
/* <table>*/
/* {% for admin in admins %}*/
/* 	<tr>*/
/* 		<td>{{admin.id}}</td>*/
/* 		<td>{{admin.name}}</td>*/
/* 		<td>{{admin.lastName}}</td>*/
/* 		<td>{{admin.age}}</td>*/
/* 		<td>{{admin.email}}</td>*/
/* 		<td>{{admin.password}}</td>*/
/* 	</tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* 		*/
