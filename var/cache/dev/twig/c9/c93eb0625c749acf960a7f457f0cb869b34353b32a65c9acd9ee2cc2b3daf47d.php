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
        $__internal_439b1b9fd260be9e648d96b1ab7137896318a35b7eb5e197b3a839cc16c4562a = $this->env->getExtension("native_profiler");
        $__internal_439b1b9fd260be9e648d96b1ab7137896318a35b7eb5e197b3a839cc16c4562a->enter($__internal_439b1b9fd260be9e648d96b1ab7137896318a35b7eb5e197b3a839cc16c4562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_439b1b9fd260be9e648d96b1ab7137896318a35b7eb5e197b3a839cc16c4562a->leave($__internal_439b1b9fd260be9e648d96b1ab7137896318a35b7eb5e197b3a839cc16c4562a_prof);

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
