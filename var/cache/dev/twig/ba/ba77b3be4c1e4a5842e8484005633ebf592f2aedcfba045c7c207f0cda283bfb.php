<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_80445d98020dbd11f4fcc4ebc8de2db56064e2e93d756609b43cfb6a71e28234 extends Twig_Template
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
        $__internal_ce33805d640c31a3f797083dbd58a1bce3ac029ede7a0b182c96291f17dadf37 = $this->env->getExtension("native_profiler");
        $__internal_ce33805d640c31a3f797083dbd58a1bce3ac029ede7a0b182c96291f17dadf37->enter($__internal_ce33805d640c31a3f797083dbd58a1bce3ac029ede7a0b182c96291f17dadf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ce33805d640c31a3f797083dbd58a1bce3ac029ede7a0b182c96291f17dadf37->leave($__internal_ce33805d640c31a3f797083dbd58a1bce3ac029ede7a0b182c96291f17dadf37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
