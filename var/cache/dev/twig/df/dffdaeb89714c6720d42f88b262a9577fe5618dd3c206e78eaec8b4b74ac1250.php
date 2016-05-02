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
        $__internal_2938fe6c054c2ded007bdb37d0da6bb7522133d7e3203094b91a25e38cbfbef1 = $this->env->getExtension("native_profiler");
        $__internal_2938fe6c054c2ded007bdb37d0da6bb7522133d7e3203094b91a25e38cbfbef1->enter($__internal_2938fe6c054c2ded007bdb37d0da6bb7522133d7e3203094b91a25e38cbfbef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2938fe6c054c2ded007bdb37d0da6bb7522133d7e3203094b91a25e38cbfbef1->leave($__internal_2938fe6c054c2ded007bdb37d0da6bb7522133d7e3203094b91a25e38cbfbef1_prof);

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
