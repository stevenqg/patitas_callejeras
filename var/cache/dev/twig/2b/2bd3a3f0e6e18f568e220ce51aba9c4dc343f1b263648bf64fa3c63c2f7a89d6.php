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
        $__internal_1190abef0602eeae575d5ee1f581550f92789f36bc2397afdc64f29aae63d1ad = $this->env->getExtension("native_profiler");
        $__internal_1190abef0602eeae575d5ee1f581550f92789f36bc2397afdc64f29aae63d1ad->enter($__internal_1190abef0602eeae575d5ee1f581550f92789f36bc2397afdc64f29aae63d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFundationBundle:fundation:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1190abef0602eeae575d5ee1f581550f92789f36bc2397afdc64f29aae63d1ad->leave($__internal_1190abef0602eeae575d5ee1f581550f92789f36bc2397afdc64f29aae63d1ad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_00633a70a36220d39c0b66d2f197dc795df14d17f29b4ff78f2d90b95005b83d = $this->env->getExtension("native_profiler");
        $__internal_00633a70a36220d39c0b66d2f197dc795df14d17f29b4ff78f2d90b95005b83d->enter($__internal_00633a70a36220d39c0b66d2f197dc795df14d17f29b4ff78f2d90b95005b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00633a70a36220d39c0b66d2f197dc795df14d17f29b4ff78f2d90b95005b83d->leave($__internal_00633a70a36220d39c0b66d2f197dc795df14d17f29b4ff78f2d90b95005b83d_prof);

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
