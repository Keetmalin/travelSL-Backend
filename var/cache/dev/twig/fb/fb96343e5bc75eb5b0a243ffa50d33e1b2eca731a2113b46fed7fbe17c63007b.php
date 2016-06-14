<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0eed199717e5c4df796cfdd872cede31262033c64d232e32e0724a9fad605f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60b9d6adecaa1f6c974a21d11af7b4921c3f3d9cf22547e2d22de6e3cf5af7b5 = $this->env->getExtension("native_profiler");
        $__internal_60b9d6adecaa1f6c974a21d11af7b4921c3f3d9cf22547e2d22de6e3cf5af7b5->enter($__internal_60b9d6adecaa1f6c974a21d11af7b4921c3f3d9cf22547e2d22de6e3cf5af7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b9d6adecaa1f6c974a21d11af7b4921c3f3d9cf22547e2d22de6e3cf5af7b5->leave($__internal_60b9d6adecaa1f6c974a21d11af7b4921c3f3d9cf22547e2d22de6e3cf5af7b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ab64a97902ed1504de7e4fcdfd279982b10cb9ad8a333589935609277d7a7b9 = $this->env->getExtension("native_profiler");
        $__internal_9ab64a97902ed1504de7e4fcdfd279982b10cb9ad8a333589935609277d7a7b9->enter($__internal_9ab64a97902ed1504de7e4fcdfd279982b10cb9ad8a333589935609277d7a7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ab64a97902ed1504de7e4fcdfd279982b10cb9ad8a333589935609277d7a7b9->leave($__internal_9ab64a97902ed1504de7e4fcdfd279982b10cb9ad8a333589935609277d7a7b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b71f863d7c748d816fb4544f04ae93b8743b359f2ba6188a838d5ffb03a3701 = $this->env->getExtension("native_profiler");
        $__internal_5b71f863d7c748d816fb4544f04ae93b8743b359f2ba6188a838d5ffb03a3701->enter($__internal_5b71f863d7c748d816fb4544f04ae93b8743b359f2ba6188a838d5ffb03a3701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5b71f863d7c748d816fb4544f04ae93b8743b359f2ba6188a838d5ffb03a3701->leave($__internal_5b71f863d7c748d816fb4544f04ae93b8743b359f2ba6188a838d5ffb03a3701_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca4df6f2c8162ee6299f36fb626fda38906b36ed43e99a15346be2dffe6c51d8 = $this->env->getExtension("native_profiler");
        $__internal_ca4df6f2c8162ee6299f36fb626fda38906b36ed43e99a15346be2dffe6c51d8->enter($__internal_ca4df6f2c8162ee6299f36fb626fda38906b36ed43e99a15346be2dffe6c51d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca4df6f2c8162ee6299f36fb626fda38906b36ed43e99a15346be2dffe6c51d8->leave($__internal_ca4df6f2c8162ee6299f36fb626fda38906b36ed43e99a15346be2dffe6c51d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
