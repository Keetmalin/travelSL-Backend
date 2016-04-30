<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7845f861f016e3e2ecd87174297e797bc10e666be4f0d13e642fc495a3896660 extends Twig_Template
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
        $__internal_33bb9c7c990e992bafce1b879812761e18fd3be5bccb9bb6952d92d3c16d5942 = $this->env->getExtension("native_profiler");
        $__internal_33bb9c7c990e992bafce1b879812761e18fd3be5bccb9bb6952d92d3c16d5942->enter($__internal_33bb9c7c990e992bafce1b879812761e18fd3be5bccb9bb6952d92d3c16d5942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_33bb9c7c990e992bafce1b879812761e18fd3be5bccb9bb6952d92d3c16d5942->leave($__internal_33bb9c7c990e992bafce1b879812761e18fd3be5bccb9bb6952d92d3c16d5942_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
