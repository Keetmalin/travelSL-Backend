<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d53556dd633fa5490270040f7420c93096ed48e3bd19cc3a0694a09075bf5121 extends Twig_Template
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
        $__internal_a11fa3f8ea5fc73b79932315bb849c8586008b4774034c98089f32db9a9f1b0a = $this->env->getExtension("native_profiler");
        $__internal_a11fa3f8ea5fc73b79932315bb849c8586008b4774034c98089f32db9a9f1b0a->enter($__internal_a11fa3f8ea5fc73b79932315bb849c8586008b4774034c98089f32db9a9f1b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a11fa3f8ea5fc73b79932315bb849c8586008b4774034c98089f32db9a9f1b0a->leave($__internal_a11fa3f8ea5fc73b79932315bb849c8586008b4774034c98089f32db9a9f1b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
