<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_85f74d6767b3fbbc69fff537d175e1929b844dd12cbd62c9217f4dca1511b76a extends Twig_Template
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
        $__internal_1d74bd8fa7f72e17af5ed6f4d0bc92d68a75152f0dde02efa2fd9a18497cef43 = $this->env->getExtension("native_profiler");
        $__internal_1d74bd8fa7f72e17af5ed6f4d0bc92d68a75152f0dde02efa2fd9a18497cef43->enter($__internal_1d74bd8fa7f72e17af5ed6f4d0bc92d68a75152f0dde02efa2fd9a18497cef43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d74bd8fa7f72e17af5ed6f4d0bc92d68a75152f0dde02efa2fd9a18497cef43->leave($__internal_1d74bd8fa7f72e17af5ed6f4d0bc92d68a75152f0dde02efa2fd9a18497cef43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
