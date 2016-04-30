<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b98e29dd97b34f23f3b98a0bdf6404351b93a8c4c2721f890bfb68ca9d92e45c extends Twig_Template
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
        $__internal_74973830928e5f9e24dc2127d4d8b70425c4278fe24fcaf01c6122e90189f6e0 = $this->env->getExtension("native_profiler");
        $__internal_74973830928e5f9e24dc2127d4d8b70425c4278fe24fcaf01c6122e90189f6e0->enter($__internal_74973830928e5f9e24dc2127d4d8b70425c4278fe24fcaf01c6122e90189f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74973830928e5f9e24dc2127d4d8b70425c4278fe24fcaf01c6122e90189f6e0->leave($__internal_74973830928e5f9e24dc2127d4d8b70425c4278fe24fcaf01c6122e90189f6e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
