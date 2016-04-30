<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dce7fe0ac921a67cd5a7b9c47d8ff0259a302d2f9b77e0cafbd616b8fecd2ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_effbcbad8bbd19eacb0097ab09b40f19bf9f7b50678ee08789be2604f7138087 = $this->env->getExtension("native_profiler");
        $__internal_effbcbad8bbd19eacb0097ab09b40f19bf9f7b50678ee08789be2604f7138087->enter($__internal_effbcbad8bbd19eacb0097ab09b40f19bf9f7b50678ee08789be2604f7138087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_effbcbad8bbd19eacb0097ab09b40f19bf9f7b50678ee08789be2604f7138087->leave($__internal_effbcbad8bbd19eacb0097ab09b40f19bf9f7b50678ee08789be2604f7138087_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d0a6313378796512435a80370e5d678587b2c13e3d3a1bc9af2b3b8f32cb854 = $this->env->getExtension("native_profiler");
        $__internal_9d0a6313378796512435a80370e5d678587b2c13e3d3a1bc9af2b3b8f32cb854->enter($__internal_9d0a6313378796512435a80370e5d678587b2c13e3d3a1bc9af2b3b8f32cb854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d0a6313378796512435a80370e5d678587b2c13e3d3a1bc9af2b3b8f32cb854->leave($__internal_9d0a6313378796512435a80370e5d678587b2c13e3d3a1bc9af2b3b8f32cb854_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7489d1f7a1ccc51e87414ebde5e03e363c757f6c505c6618ec1144606ea0cd63 = $this->env->getExtension("native_profiler");
        $__internal_7489d1f7a1ccc51e87414ebde5e03e363c757f6c505c6618ec1144606ea0cd63->enter($__internal_7489d1f7a1ccc51e87414ebde5e03e363c757f6c505c6618ec1144606ea0cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7489d1f7a1ccc51e87414ebde5e03e363c757f6c505c6618ec1144606ea0cd63->leave($__internal_7489d1f7a1ccc51e87414ebde5e03e363c757f6c505c6618ec1144606ea0cd63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b486afcf59dfdb004e5c3ef5bfc8fa8d1567d8d596eb1aa92004bcdba05d7b21 = $this->env->getExtension("native_profiler");
        $__internal_b486afcf59dfdb004e5c3ef5bfc8fa8d1567d8d596eb1aa92004bcdba05d7b21->enter($__internal_b486afcf59dfdb004e5c3ef5bfc8fa8d1567d8d596eb1aa92004bcdba05d7b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b486afcf59dfdb004e5c3ef5bfc8fa8d1567d8d596eb1aa92004bcdba05d7b21->leave($__internal_b486afcf59dfdb004e5c3ef5bfc8fa8d1567d8d596eb1aa92004bcdba05d7b21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
