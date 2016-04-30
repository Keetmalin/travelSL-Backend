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
        $__internal_3673ae75d91008ed6934e16cd3dcce07420dfe1eead1b383c52cb6b0a763562b = $this->env->getExtension("native_profiler");
        $__internal_3673ae75d91008ed6934e16cd3dcce07420dfe1eead1b383c52cb6b0a763562b->enter($__internal_3673ae75d91008ed6934e16cd3dcce07420dfe1eead1b383c52cb6b0a763562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3673ae75d91008ed6934e16cd3dcce07420dfe1eead1b383c52cb6b0a763562b->leave($__internal_3673ae75d91008ed6934e16cd3dcce07420dfe1eead1b383c52cb6b0a763562b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_433cfebf61d91a76655eca9aa754c2d699fc9a1dd255ddd1d02de9bbca1d4267 = $this->env->getExtension("native_profiler");
        $__internal_433cfebf61d91a76655eca9aa754c2d699fc9a1dd255ddd1d02de9bbca1d4267->enter($__internal_433cfebf61d91a76655eca9aa754c2d699fc9a1dd255ddd1d02de9bbca1d4267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_433cfebf61d91a76655eca9aa754c2d699fc9a1dd255ddd1d02de9bbca1d4267->leave($__internal_433cfebf61d91a76655eca9aa754c2d699fc9a1dd255ddd1d02de9bbca1d4267_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7687b6ec7004b3afc25e323ad55109d259a43a90fabe3e53b19a23949208378 = $this->env->getExtension("native_profiler");
        $__internal_c7687b6ec7004b3afc25e323ad55109d259a43a90fabe3e53b19a23949208378->enter($__internal_c7687b6ec7004b3afc25e323ad55109d259a43a90fabe3e53b19a23949208378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7687b6ec7004b3afc25e323ad55109d259a43a90fabe3e53b19a23949208378->leave($__internal_c7687b6ec7004b3afc25e323ad55109d259a43a90fabe3e53b19a23949208378_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2a8714f536fd076f0994fada2f2249dc82e3cb2704a1b6a84dcd30ce6de5afd = $this->env->getExtension("native_profiler");
        $__internal_b2a8714f536fd076f0994fada2f2249dc82e3cb2704a1b6a84dcd30ce6de5afd->enter($__internal_b2a8714f536fd076f0994fada2f2249dc82e3cb2704a1b6a84dcd30ce6de5afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b2a8714f536fd076f0994fada2f2249dc82e3cb2704a1b6a84dcd30ce6de5afd->leave($__internal_b2a8714f536fd076f0994fada2f2249dc82e3cb2704a1b6a84dcd30ce6de5afd_prof);

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
