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
        $__internal_085cb20f090fe9081bcc4ddb229e45a0ecb9b042f8edac2dc76caf2930ab6ada = $this->env->getExtension("native_profiler");
        $__internal_085cb20f090fe9081bcc4ddb229e45a0ecb9b042f8edac2dc76caf2930ab6ada->enter($__internal_085cb20f090fe9081bcc4ddb229e45a0ecb9b042f8edac2dc76caf2930ab6ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_085cb20f090fe9081bcc4ddb229e45a0ecb9b042f8edac2dc76caf2930ab6ada->leave($__internal_085cb20f090fe9081bcc4ddb229e45a0ecb9b042f8edac2dc76caf2930ab6ada_prof);

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
