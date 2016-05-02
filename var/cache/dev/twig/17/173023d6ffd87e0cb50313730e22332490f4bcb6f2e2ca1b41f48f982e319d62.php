<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_49481551c2b97366b92b19b46402080bd70757f68a679095c504669fe7a08737 extends Twig_Template
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
        $__internal_19eab1e98e195d72b4883b714802dd25c85f3ba632932c1221e11eb2272dacff = $this->env->getExtension("native_profiler");
        $__internal_19eab1e98e195d72b4883b714802dd25c85f3ba632932c1221e11eb2272dacff->enter($__internal_19eab1e98e195d72b4883b714802dd25c85f3ba632932c1221e11eb2272dacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19eab1e98e195d72b4883b714802dd25c85f3ba632932c1221e11eb2272dacff->leave($__internal_19eab1e98e195d72b4883b714802dd25c85f3ba632932c1221e11eb2272dacff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
