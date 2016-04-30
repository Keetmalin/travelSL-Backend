<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b7ffd5546ecacf5a77b382f21fad4e2db63084927a27108974d763c401c6871f extends Twig_Template
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
        $__internal_a72e9b57fa122510f5c645620dd2b4307f370e8acd0f9996afba65598dee86cf = $this->env->getExtension("native_profiler");
        $__internal_a72e9b57fa122510f5c645620dd2b4307f370e8acd0f9996afba65598dee86cf->enter($__internal_a72e9b57fa122510f5c645620dd2b4307f370e8acd0f9996afba65598dee86cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_a72e9b57fa122510f5c645620dd2b4307f370e8acd0f9996afba65598dee86cf->leave($__internal_a72e9b57fa122510f5c645620dd2b4307f370e8acd0f9996afba65598dee86cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
