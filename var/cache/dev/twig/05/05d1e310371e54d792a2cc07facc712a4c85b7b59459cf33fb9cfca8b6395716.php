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
        $__internal_b072ce4637bf80579223ffa931fa412c30b1ca2f42cf78bea8254149fed12d3e = $this->env->getExtension("native_profiler");
        $__internal_b072ce4637bf80579223ffa931fa412c30b1ca2f42cf78bea8254149fed12d3e->enter($__internal_b072ce4637bf80579223ffa931fa412c30b1ca2f42cf78bea8254149fed12d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b072ce4637bf80579223ffa931fa412c30b1ca2f42cf78bea8254149fed12d3e->leave($__internal_b072ce4637bf80579223ffa931fa412c30b1ca2f42cf78bea8254149fed12d3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2d108eeffed73e378be766d7f5d4ad7ff16657d6c3816ccbaab05041f922c06 = $this->env->getExtension("native_profiler");
        $__internal_d2d108eeffed73e378be766d7f5d4ad7ff16657d6c3816ccbaab05041f922c06->enter($__internal_d2d108eeffed73e378be766d7f5d4ad7ff16657d6c3816ccbaab05041f922c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2d108eeffed73e378be766d7f5d4ad7ff16657d6c3816ccbaab05041f922c06->leave($__internal_d2d108eeffed73e378be766d7f5d4ad7ff16657d6c3816ccbaab05041f922c06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5316414f76a97a095cdd6547a0863097efc9d35493f34cc811bf7fa8b84f95fc = $this->env->getExtension("native_profiler");
        $__internal_5316414f76a97a095cdd6547a0863097efc9d35493f34cc811bf7fa8b84f95fc->enter($__internal_5316414f76a97a095cdd6547a0863097efc9d35493f34cc811bf7fa8b84f95fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5316414f76a97a095cdd6547a0863097efc9d35493f34cc811bf7fa8b84f95fc->leave($__internal_5316414f76a97a095cdd6547a0863097efc9d35493f34cc811bf7fa8b84f95fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc4bcb4cf1d8931b3ba6b7626c78fa7d4b4c959b47a664196b6271eca7725ac2 = $this->env->getExtension("native_profiler");
        $__internal_dc4bcb4cf1d8931b3ba6b7626c78fa7d4b4c959b47a664196b6271eca7725ac2->enter($__internal_dc4bcb4cf1d8931b3ba6b7626c78fa7d4b4c959b47a664196b6271eca7725ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc4bcb4cf1d8931b3ba6b7626c78fa7d4b4c959b47a664196b6271eca7725ac2->leave($__internal_dc4bcb4cf1d8931b3ba6b7626c78fa7d4b4c959b47a664196b6271eca7725ac2_prof);

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
