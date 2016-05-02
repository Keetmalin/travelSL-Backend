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
        $__internal_563f45fa85511a7d5966074dc3311e3c7ac3bc9163d1b9e97867f0e276b460f2 = $this->env->getExtension("native_profiler");
        $__internal_563f45fa85511a7d5966074dc3311e3c7ac3bc9163d1b9e97867f0e276b460f2->enter($__internal_563f45fa85511a7d5966074dc3311e3c7ac3bc9163d1b9e97867f0e276b460f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_563f45fa85511a7d5966074dc3311e3c7ac3bc9163d1b9e97867f0e276b460f2->leave($__internal_563f45fa85511a7d5966074dc3311e3c7ac3bc9163d1b9e97867f0e276b460f2_prof);

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
