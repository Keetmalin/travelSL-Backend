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
        $__internal_73caae6d6575386d60cc1d902a7fbe81ba090af5c0d3a0feecd027b44f84189b = $this->env->getExtension("native_profiler");
        $__internal_73caae6d6575386d60cc1d902a7fbe81ba090af5c0d3a0feecd027b44f84189b->enter($__internal_73caae6d6575386d60cc1d902a7fbe81ba090af5c0d3a0feecd027b44f84189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73caae6d6575386d60cc1d902a7fbe81ba090af5c0d3a0feecd027b44f84189b->leave($__internal_73caae6d6575386d60cc1d902a7fbe81ba090af5c0d3a0feecd027b44f84189b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0b71dcebcd8ec658b1aca3749e44988dc4db2cb54a9ad3966f78360ca7accb6 = $this->env->getExtension("native_profiler");
        $__internal_b0b71dcebcd8ec658b1aca3749e44988dc4db2cb54a9ad3966f78360ca7accb6->enter($__internal_b0b71dcebcd8ec658b1aca3749e44988dc4db2cb54a9ad3966f78360ca7accb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0b71dcebcd8ec658b1aca3749e44988dc4db2cb54a9ad3966f78360ca7accb6->leave($__internal_b0b71dcebcd8ec658b1aca3749e44988dc4db2cb54a9ad3966f78360ca7accb6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ea2c710bbffcbee4c99f83fa7fb9427bcd6a50d6e858fae6ae60a6876003bb4 = $this->env->getExtension("native_profiler");
        $__internal_8ea2c710bbffcbee4c99f83fa7fb9427bcd6a50d6e858fae6ae60a6876003bb4->enter($__internal_8ea2c710bbffcbee4c99f83fa7fb9427bcd6a50d6e858fae6ae60a6876003bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ea2c710bbffcbee4c99f83fa7fb9427bcd6a50d6e858fae6ae60a6876003bb4->leave($__internal_8ea2c710bbffcbee4c99f83fa7fb9427bcd6a50d6e858fae6ae60a6876003bb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cc653c08a5b570abe9de11297a58fb932d66cb57022c6a20cbe47d8905c3b1f = $this->env->getExtension("native_profiler");
        $__internal_0cc653c08a5b570abe9de11297a58fb932d66cb57022c6a20cbe47d8905c3b1f->enter($__internal_0cc653c08a5b570abe9de11297a58fb932d66cb57022c6a20cbe47d8905c3b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0cc653c08a5b570abe9de11297a58fb932d66cb57022c6a20cbe47d8905c3b1f->leave($__internal_0cc653c08a5b570abe9de11297a58fb932d66cb57022c6a20cbe47d8905c3b1f_prof);

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
