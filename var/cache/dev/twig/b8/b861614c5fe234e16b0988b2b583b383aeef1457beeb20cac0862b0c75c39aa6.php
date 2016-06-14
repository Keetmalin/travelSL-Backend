<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4d2ea07f3ccc349349db7c3d6cf4c40e6076da6cf05e3dc6073b674e22870fb9 extends Twig_Template
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
        $__internal_2964cf7683fe782fa5f87e549e2f8f8ff929a787e259738da4d6147556a967dd = $this->env->getExtension("native_profiler");
        $__internal_2964cf7683fe782fa5f87e549e2f8f8ff929a787e259738da4d6147556a967dd->enter($__internal_2964cf7683fe782fa5f87e549e2f8f8ff929a787e259738da4d6147556a967dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2964cf7683fe782fa5f87e549e2f8f8ff929a787e259738da4d6147556a967dd->leave($__internal_2964cf7683fe782fa5f87e549e2f8f8ff929a787e259738da4d6147556a967dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
