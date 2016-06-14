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
        $__internal_1fdd5902bceece17fcbbc9ed0141002e4b2dced7d2f0cfa61d352421ea91fc3f = $this->env->getExtension("native_profiler");
        $__internal_1fdd5902bceece17fcbbc9ed0141002e4b2dced7d2f0cfa61d352421ea91fc3f->enter($__internal_1fdd5902bceece17fcbbc9ed0141002e4b2dced7d2f0cfa61d352421ea91fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1fdd5902bceece17fcbbc9ed0141002e4b2dced7d2f0cfa61d352421ea91fc3f->leave($__internal_1fdd5902bceece17fcbbc9ed0141002e4b2dced7d2f0cfa61d352421ea91fc3f_prof);

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
