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
        $__internal_87666d7303ee2efb508435e73374dcb2422e4d942545aa422611198f2066b69d = $this->env->getExtension("native_profiler");
        $__internal_87666d7303ee2efb508435e73374dcb2422e4d942545aa422611198f2066b69d->enter($__internal_87666d7303ee2efb508435e73374dcb2422e4d942545aa422611198f2066b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87666d7303ee2efb508435e73374dcb2422e4d942545aa422611198f2066b69d->leave($__internal_87666d7303ee2efb508435e73374dcb2422e4d942545aa422611198f2066b69d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5fda6af928ca473b9cea29144cf162c696b1a257bfbb3d92b0c875df657feb6 = $this->env->getExtension("native_profiler");
        $__internal_d5fda6af928ca473b9cea29144cf162c696b1a257bfbb3d92b0c875df657feb6->enter($__internal_d5fda6af928ca473b9cea29144cf162c696b1a257bfbb3d92b0c875df657feb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5fda6af928ca473b9cea29144cf162c696b1a257bfbb3d92b0c875df657feb6->leave($__internal_d5fda6af928ca473b9cea29144cf162c696b1a257bfbb3d92b0c875df657feb6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e1a2f9e778f8eb8d8e533cc93306f520f562012cfdfef5c4c32855e9f275bb3 = $this->env->getExtension("native_profiler");
        $__internal_2e1a2f9e778f8eb8d8e533cc93306f520f562012cfdfef5c4c32855e9f275bb3->enter($__internal_2e1a2f9e778f8eb8d8e533cc93306f520f562012cfdfef5c4c32855e9f275bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e1a2f9e778f8eb8d8e533cc93306f520f562012cfdfef5c4c32855e9f275bb3->leave($__internal_2e1a2f9e778f8eb8d8e533cc93306f520f562012cfdfef5c4c32855e9f275bb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22d5b00ee84ab36bd0853b841af41af64f0fe50eb02d523d96ae168e5bf3101d = $this->env->getExtension("native_profiler");
        $__internal_22d5b00ee84ab36bd0853b841af41af64f0fe50eb02d523d96ae168e5bf3101d->enter($__internal_22d5b00ee84ab36bd0853b841af41af64f0fe50eb02d523d96ae168e5bf3101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22d5b00ee84ab36bd0853b841af41af64f0fe50eb02d523d96ae168e5bf3101d->leave($__internal_22d5b00ee84ab36bd0853b841af41af64f0fe50eb02d523d96ae168e5bf3101d_prof);

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
