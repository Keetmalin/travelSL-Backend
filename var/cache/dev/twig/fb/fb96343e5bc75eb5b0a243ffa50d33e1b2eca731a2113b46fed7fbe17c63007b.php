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
        $__internal_23a6fccc85bbf6aa746c1eaefb5af955248fef01b4e079f7bffc04f3167bf4cb = $this->env->getExtension("native_profiler");
        $__internal_23a6fccc85bbf6aa746c1eaefb5af955248fef01b4e079f7bffc04f3167bf4cb->enter($__internal_23a6fccc85bbf6aa746c1eaefb5af955248fef01b4e079f7bffc04f3167bf4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a6fccc85bbf6aa746c1eaefb5af955248fef01b4e079f7bffc04f3167bf4cb->leave($__internal_23a6fccc85bbf6aa746c1eaefb5af955248fef01b4e079f7bffc04f3167bf4cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67cb7d4fbc113bb2d873d74e502a6ff8029695d0f86e1a73db7fec3336a21deb = $this->env->getExtension("native_profiler");
        $__internal_67cb7d4fbc113bb2d873d74e502a6ff8029695d0f86e1a73db7fec3336a21deb->enter($__internal_67cb7d4fbc113bb2d873d74e502a6ff8029695d0f86e1a73db7fec3336a21deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67cb7d4fbc113bb2d873d74e502a6ff8029695d0f86e1a73db7fec3336a21deb->leave($__internal_67cb7d4fbc113bb2d873d74e502a6ff8029695d0f86e1a73db7fec3336a21deb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32daff70f9b23f4fc69f5c6dfa970ceb5445bd0d87fba3c4aaaf4a813ff2fc4a = $this->env->getExtension("native_profiler");
        $__internal_32daff70f9b23f4fc69f5c6dfa970ceb5445bd0d87fba3c4aaaf4a813ff2fc4a->enter($__internal_32daff70f9b23f4fc69f5c6dfa970ceb5445bd0d87fba3c4aaaf4a813ff2fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32daff70f9b23f4fc69f5c6dfa970ceb5445bd0d87fba3c4aaaf4a813ff2fc4a->leave($__internal_32daff70f9b23f4fc69f5c6dfa970ceb5445bd0d87fba3c4aaaf4a813ff2fc4a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b3d45f56d2e0e021f5b61d35b484e80e9cfaa6531f26dce507c2ec77cf3d679 = $this->env->getExtension("native_profiler");
        $__internal_9b3d45f56d2e0e021f5b61d35b484e80e9cfaa6531f26dce507c2ec77cf3d679->enter($__internal_9b3d45f56d2e0e021f5b61d35b484e80e9cfaa6531f26dce507c2ec77cf3d679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b3d45f56d2e0e021f5b61d35b484e80e9cfaa6531f26dce507c2ec77cf3d679->leave($__internal_9b3d45f56d2e0e021f5b61d35b484e80e9cfaa6531f26dce507c2ec77cf3d679_prof);

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
