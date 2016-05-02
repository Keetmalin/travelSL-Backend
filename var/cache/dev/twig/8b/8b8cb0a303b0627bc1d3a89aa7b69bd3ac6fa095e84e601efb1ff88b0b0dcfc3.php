<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b39a5bfe5eb65067e2a45c90e32e52c0a61f607879cb23cd18058ac9e3a61738 extends Twig_Template
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
        $__internal_b1b44e9d2bdf253aed109c3cc8957220afddd17d1106175b3ebf5da15a5fc92b = $this->env->getExtension("native_profiler");
        $__internal_b1b44e9d2bdf253aed109c3cc8957220afddd17d1106175b3ebf5da15a5fc92b->enter($__internal_b1b44e9d2bdf253aed109c3cc8957220afddd17d1106175b3ebf5da15a5fc92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b1b44e9d2bdf253aed109c3cc8957220afddd17d1106175b3ebf5da15a5fc92b->leave($__internal_b1b44e9d2bdf253aed109c3cc8957220afddd17d1106175b3ebf5da15a5fc92b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
