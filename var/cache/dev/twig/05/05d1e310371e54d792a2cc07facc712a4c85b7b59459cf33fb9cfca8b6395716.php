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
        $__internal_7781500678a1ce42cb6ec7d6cba1e9e675b71ec82bf276e8653de2724a1e487f = $this->env->getExtension("native_profiler");
        $__internal_7781500678a1ce42cb6ec7d6cba1e9e675b71ec82bf276e8653de2724a1e487f->enter($__internal_7781500678a1ce42cb6ec7d6cba1e9e675b71ec82bf276e8653de2724a1e487f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7781500678a1ce42cb6ec7d6cba1e9e675b71ec82bf276e8653de2724a1e487f->leave($__internal_7781500678a1ce42cb6ec7d6cba1e9e675b71ec82bf276e8653de2724a1e487f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_586cb37f308fdc8d2e72aa103f82fab55ee08892c1fdcd6c2de1961b555d892c = $this->env->getExtension("native_profiler");
        $__internal_586cb37f308fdc8d2e72aa103f82fab55ee08892c1fdcd6c2de1961b555d892c->enter($__internal_586cb37f308fdc8d2e72aa103f82fab55ee08892c1fdcd6c2de1961b555d892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_586cb37f308fdc8d2e72aa103f82fab55ee08892c1fdcd6c2de1961b555d892c->leave($__internal_586cb37f308fdc8d2e72aa103f82fab55ee08892c1fdcd6c2de1961b555d892c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5d357e6ffb5fb4f46c8c914db702854239852198b78ad7aefdc32967fdbde5c = $this->env->getExtension("native_profiler");
        $__internal_c5d357e6ffb5fb4f46c8c914db702854239852198b78ad7aefdc32967fdbde5c->enter($__internal_c5d357e6ffb5fb4f46c8c914db702854239852198b78ad7aefdc32967fdbde5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5d357e6ffb5fb4f46c8c914db702854239852198b78ad7aefdc32967fdbde5c->leave($__internal_c5d357e6ffb5fb4f46c8c914db702854239852198b78ad7aefdc32967fdbde5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07e24949bff6256162b073860d4c3986b8a1e701f054302fdf0a89e75eb6ab23 = $this->env->getExtension("native_profiler");
        $__internal_07e24949bff6256162b073860d4c3986b8a1e701f054302fdf0a89e75eb6ab23->enter($__internal_07e24949bff6256162b073860d4c3986b8a1e701f054302fdf0a89e75eb6ab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07e24949bff6256162b073860d4c3986b8a1e701f054302fdf0a89e75eb6ab23->leave($__internal_07e24949bff6256162b073860d4c3986b8a1e701f054302fdf0a89e75eb6ab23_prof);

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
