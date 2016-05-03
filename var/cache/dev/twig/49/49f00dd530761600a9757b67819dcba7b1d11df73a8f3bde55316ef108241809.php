<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f551fce0150ff07529bb3608883c2af2ce4109ab9faa9ee95c119d86111a1500 = $this->env->getExtension("native_profiler");
        $__internal_f551fce0150ff07529bb3608883c2af2ce4109ab9faa9ee95c119d86111a1500->enter($__internal_f551fce0150ff07529bb3608883c2af2ce4109ab9faa9ee95c119d86111a1500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f551fce0150ff07529bb3608883c2af2ce4109ab9faa9ee95c119d86111a1500->leave($__internal_f551fce0150ff07529bb3608883c2af2ce4109ab9faa9ee95c119d86111a1500_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec972fba3368480822e48742afc1477529d9b3148f1dac1cb3a9588826914b3c = $this->env->getExtension("native_profiler");
        $__internal_ec972fba3368480822e48742afc1477529d9b3148f1dac1cb3a9588826914b3c->enter($__internal_ec972fba3368480822e48742afc1477529d9b3148f1dac1cb3a9588826914b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec972fba3368480822e48742afc1477529d9b3148f1dac1cb3a9588826914b3c->leave($__internal_ec972fba3368480822e48742afc1477529d9b3148f1dac1cb3a9588826914b3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b68cc2c71f7abb75175d2a5932d77584d7cf3e342312ee5262673ebb02689511 = $this->env->getExtension("native_profiler");
        $__internal_b68cc2c71f7abb75175d2a5932d77584d7cf3e342312ee5262673ebb02689511->enter($__internal_b68cc2c71f7abb75175d2a5932d77584d7cf3e342312ee5262673ebb02689511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b68cc2c71f7abb75175d2a5932d77584d7cf3e342312ee5262673ebb02689511->leave($__internal_b68cc2c71f7abb75175d2a5932d77584d7cf3e342312ee5262673ebb02689511_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dee202fac229ff602129d4b6a24680f37aa4d975853600f47f9820de407d1ca = $this->env->getExtension("native_profiler");
        $__internal_8dee202fac229ff602129d4b6a24680f37aa4d975853600f47f9820de407d1ca->enter($__internal_8dee202fac229ff602129d4b6a24680f37aa4d975853600f47f9820de407d1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8dee202fac229ff602129d4b6a24680f37aa4d975853600f47f9820de407d1ca->leave($__internal_8dee202fac229ff602129d4b6a24680f37aa4d975853600f47f9820de407d1ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
