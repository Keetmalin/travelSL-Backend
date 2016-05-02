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
        $__internal_9e95bcd191fca6c15953273f0eff9f6e941e013484c2490ae9e8c2fce609923e = $this->env->getExtension("native_profiler");
        $__internal_9e95bcd191fca6c15953273f0eff9f6e941e013484c2490ae9e8c2fce609923e->enter($__internal_9e95bcd191fca6c15953273f0eff9f6e941e013484c2490ae9e8c2fce609923e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e95bcd191fca6c15953273f0eff9f6e941e013484c2490ae9e8c2fce609923e->leave($__internal_9e95bcd191fca6c15953273f0eff9f6e941e013484c2490ae9e8c2fce609923e_prof);

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
