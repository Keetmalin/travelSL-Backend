<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e93e0a6aff326a2b64e43d84ce6934e59ccdf7c3989249a228e7949a091e59fe extends Twig_Template
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
        $__internal_a9e35da56e14da742083202837b38b3c52f96504c9e890c46e6bb796198cf29c = $this->env->getExtension("native_profiler");
        $__internal_a9e35da56e14da742083202837b38b3c52f96504c9e890c46e6bb796198cf29c->enter($__internal_a9e35da56e14da742083202837b38b3c52f96504c9e890c46e6bb796198cf29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a9e35da56e14da742083202837b38b3c52f96504c9e890c46e6bb796198cf29c->leave($__internal_a9e35da56e14da742083202837b38b3c52f96504c9e890c46e6bb796198cf29c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
