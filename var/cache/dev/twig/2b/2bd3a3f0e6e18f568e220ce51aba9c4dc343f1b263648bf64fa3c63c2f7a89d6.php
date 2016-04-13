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
        $__internal_98e0dbc02304e4f4871b8406043a6bfe0ec7d6df5a79f8ead6bb5485d300d118 = $this->env->getExtension("native_profiler");
        $__internal_98e0dbc02304e4f4871b8406043a6bfe0ec7d6df5a79f8ead6bb5485d300d118->enter($__internal_98e0dbc02304e4f4871b8406043a6bfe0ec7d6df5a79f8ead6bb5485d300d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e0dbc02304e4f4871b8406043a6bfe0ec7d6df5a79f8ead6bb5485d300d118->leave($__internal_98e0dbc02304e4f4871b8406043a6bfe0ec7d6df5a79f8ead6bb5485d300d118_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3243a7bf57ddd24fe01e8831b44d80ff0e623f04d817e7ed7754bcb62fd7374 = $this->env->getExtension("native_profiler");
        $__internal_e3243a7bf57ddd24fe01e8831b44d80ff0e623f04d817e7ed7754bcb62fd7374->enter($__internal_e3243a7bf57ddd24fe01e8831b44d80ff0e623f04d817e7ed7754bcb62fd7374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "
\t<tr>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "lastName", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "age", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "email", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "password", array()), "html", null, true);
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</table>
";
        
        $__internal_e3243a7bf57ddd24fe01e8831b44d80ff0e623f04d817e7ed7754bcb62fd7374->leave($__internal_e3243a7bf57ddd24fe01e8831b44d80ff0e623f04d817e7ed7754bcb62fd7374_prof);

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
        return array (  83 => 17,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 7,  46 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block body %}*/
/* {{ parent() }}*/
/* */
/* <table>*/
/* {% for admin in admins %}*/
/* */
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
