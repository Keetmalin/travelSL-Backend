<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0d84f6937879e2b19dd0ec5851a843d2fb8710f642613dac734ab77180a64b4d extends Twig_Template
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
        $__internal_f937aabe7ef0dd652215de773c1de33a237670f92a05cd52698fd9ecca5e522b = $this->env->getExtension("native_profiler");
        $__internal_f937aabe7ef0dd652215de773c1de33a237670f92a05cd52698fd9ecca5e522b->enter($__internal_f937aabe7ef0dd652215de773c1de33a237670f92a05cd52698fd9ecca5e522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f937aabe7ef0dd652215de773c1de33a237670f92a05cd52698fd9ecca5e522b->leave($__internal_f937aabe7ef0dd652215de773c1de33a237670f92a05cd52698fd9ecca5e522b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
