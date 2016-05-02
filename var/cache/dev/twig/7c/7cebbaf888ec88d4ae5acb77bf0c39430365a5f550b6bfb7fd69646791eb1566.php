<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_86dd3b71e2757afda1d9ae2987c8da8d1583937006a4b952144b899d71323ded extends Twig_Template
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
        $__internal_78e28ed45c38fb767e83d2cf805faf31bf7e1a5705f40ada02066901e9a6d52b = $this->env->getExtension("native_profiler");
        $__internal_78e28ed45c38fb767e83d2cf805faf31bf7e1a5705f40ada02066901e9a6d52b->enter($__internal_78e28ed45c38fb767e83d2cf805faf31bf7e1a5705f40ada02066901e9a6d52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_78e28ed45c38fb767e83d2cf805faf31bf7e1a5705f40ada02066901e9a6d52b->leave($__internal_78e28ed45c38fb767e83d2cf805faf31bf7e1a5705f40ada02066901e9a6d52b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
