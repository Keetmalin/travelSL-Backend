<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_834b7b8495865ed10feab6f14f2225275bce4837e00e483c87715714546f1d7a extends Twig_Template
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
        $__internal_03616feeffe7d6f2afd11cbfce276fbcc8a7e331081d6dadc8b505a4f34cabf3 = $this->env->getExtension("native_profiler");
        $__internal_03616feeffe7d6f2afd11cbfce276fbcc8a7e331081d6dadc8b505a4f34cabf3->enter($__internal_03616feeffe7d6f2afd11cbfce276fbcc8a7e331081d6dadc8b505a4f34cabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03616feeffe7d6f2afd11cbfce276fbcc8a7e331081d6dadc8b505a4f34cabf3->leave($__internal_03616feeffe7d6f2afd11cbfce276fbcc8a7e331081d6dadc8b505a4f34cabf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_190f4711b8201ea638d65e7d43c71ca7fd5981cc85bb736f8e2e7904962f7f78 = $this->env->getExtension("native_profiler");
        $__internal_190f4711b8201ea638d65e7d43c71ca7fd5981cc85bb736f8e2e7904962f7f78->enter($__internal_190f4711b8201ea638d65e7d43c71ca7fd5981cc85bb736f8e2e7904962f7f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_190f4711b8201ea638d65e7d43c71ca7fd5981cc85bb736f8e2e7904962f7f78->leave($__internal_190f4711b8201ea638d65e7d43c71ca7fd5981cc85bb736f8e2e7904962f7f78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_436bb60560c511f4fc7ff4d3e2dee455b9e68866bd5f5bfcfded8c9aceb6c74b = $this->env->getExtension("native_profiler");
        $__internal_436bb60560c511f4fc7ff4d3e2dee455b9e68866bd5f5bfcfded8c9aceb6c74b->enter($__internal_436bb60560c511f4fc7ff4d3e2dee455b9e68866bd5f5bfcfded8c9aceb6c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_436bb60560c511f4fc7ff4d3e2dee455b9e68866bd5f5bfcfded8c9aceb6c74b->leave($__internal_436bb60560c511f4fc7ff4d3e2dee455b9e68866bd5f5bfcfded8c9aceb6c74b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ff478c159e56581a708859468a52b137e0e299675916432a6c685bca17d2f97 = $this->env->getExtension("native_profiler");
        $__internal_7ff478c159e56581a708859468a52b137e0e299675916432a6c685bca17d2f97->enter($__internal_7ff478c159e56581a708859468a52b137e0e299675916432a6c685bca17d2f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ff478c159e56581a708859468a52b137e0e299675916432a6c685bca17d2f97->leave($__internal_7ff478c159e56581a708859468a52b137e0e299675916432a6c685bca17d2f97_prof);

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
