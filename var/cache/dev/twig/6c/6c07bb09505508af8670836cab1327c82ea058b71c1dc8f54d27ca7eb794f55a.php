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
        $__internal_5a6058d3b1c6d823b4bd6cd0dbd5c7ac06749e6566e899e7903efd4e3f6b8f1d = $this->env->getExtension("native_profiler");
        $__internal_5a6058d3b1c6d823b4bd6cd0dbd5c7ac06749e6566e899e7903efd4e3f6b8f1d->enter($__internal_5a6058d3b1c6d823b4bd6cd0dbd5c7ac06749e6566e899e7903efd4e3f6b8f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5a6058d3b1c6d823b4bd6cd0dbd5c7ac06749e6566e899e7903efd4e3f6b8f1d->leave($__internal_5a6058d3b1c6d823b4bd6cd0dbd5c7ac06749e6566e899e7903efd4e3f6b8f1d_prof);

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
