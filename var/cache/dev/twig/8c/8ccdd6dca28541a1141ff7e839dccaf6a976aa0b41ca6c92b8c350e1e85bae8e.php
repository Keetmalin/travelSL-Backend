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
        $__internal_bdc85c57556d1403e7320e75b78217704b31660a6cf82d0d4fe415927a702be7 = $this->env->getExtension("native_profiler");
        $__internal_bdc85c57556d1403e7320e75b78217704b31660a6cf82d0d4fe415927a702be7->enter($__internal_bdc85c57556d1403e7320e75b78217704b31660a6cf82d0d4fe415927a702be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bdc85c57556d1403e7320e75b78217704b31660a6cf82d0d4fe415927a702be7->leave($__internal_bdc85c57556d1403e7320e75b78217704b31660a6cf82d0d4fe415927a702be7_prof);

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
