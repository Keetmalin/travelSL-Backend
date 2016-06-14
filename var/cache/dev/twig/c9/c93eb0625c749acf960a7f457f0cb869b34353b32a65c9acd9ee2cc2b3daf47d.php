<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c6aac5e0fae7497cff608a45f27478d91e8a00aacd387189b7854b5543765fba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee8802f67482793fb2944144a040a8a9d80b4e78643c2d3a150eb0b8e82627f6 = $this->env->getExtension("native_profiler");
        $__internal_ee8802f67482793fb2944144a040a8a9d80b4e78643c2d3a150eb0b8e82627f6->enter($__internal_ee8802f67482793fb2944144a040a8a9d80b4e78643c2d3a150eb0b8e82627f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ee8802f67482793fb2944144a040a8a9d80b4e78643c2d3a150eb0b8e82627f6->leave($__internal_ee8802f67482793fb2944144a040a8a9d80b4e78643c2d3a150eb0b8e82627f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
