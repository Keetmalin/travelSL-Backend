<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9fad1da90d0bf20dc85d0a678a3fe0d4bd4d2c1a373a9d72b58cea6a1bab7c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7810a982fef3c6fdf46dd5dcbfab822ed16554daa400e13183227db24d40e161 = $this->env->getExtension("native_profiler");
        $__internal_7810a982fef3c6fdf46dd5dcbfab822ed16554daa400e13183227db24d40e161->enter($__internal_7810a982fef3c6fdf46dd5dcbfab822ed16554daa400e13183227db24d40e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7810a982fef3c6fdf46dd5dcbfab822ed16554daa400e13183227db24d40e161->leave($__internal_7810a982fef3c6fdf46dd5dcbfab822ed16554daa400e13183227db24d40e161_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f56e7e49b272cf564099a595e260eef2eed5f8aee46660b30309a0e01f6e3e3 = $this->env->getExtension("native_profiler");
        $__internal_2f56e7e49b272cf564099a595e260eef2eed5f8aee46660b30309a0e01f6e3e3->enter($__internal_2f56e7e49b272cf564099a595e260eef2eed5f8aee46660b30309a0e01f6e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f56e7e49b272cf564099a595e260eef2eed5f8aee46660b30309a0e01f6e3e3->leave($__internal_2f56e7e49b272cf564099a595e260eef2eed5f8aee46660b30309a0e01f6e3e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32d37c90068462fc77c50d863a1c51f46d9597e2379abf735da5e8464e3c3b7b = $this->env->getExtension("native_profiler");
        $__internal_32d37c90068462fc77c50d863a1c51f46d9597e2379abf735da5e8464e3c3b7b->enter($__internal_32d37c90068462fc77c50d863a1c51f46d9597e2379abf735da5e8464e3c3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32d37c90068462fc77c50d863a1c51f46d9597e2379abf735da5e8464e3c3b7b->leave($__internal_32d37c90068462fc77c50d863a1c51f46d9597e2379abf735da5e8464e3c3b7b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e0368fe4362f279014d400aaafc6585afc38936696f8fd66c51c67700aff3eb = $this->env->getExtension("native_profiler");
        $__internal_5e0368fe4362f279014d400aaafc6585afc38936696f8fd66c51c67700aff3eb->enter($__internal_5e0368fe4362f279014d400aaafc6585afc38936696f8fd66c51c67700aff3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5e0368fe4362f279014d400aaafc6585afc38936696f8fd66c51c67700aff3eb->leave($__internal_5e0368fe4362f279014d400aaafc6585afc38936696f8fd66c51c67700aff3eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
