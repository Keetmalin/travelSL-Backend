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
        $__internal_f4c6b38208279471fdd5a1b5557e72b31742313ecc27eeda25a0bbd750c3b980 = $this->env->getExtension("native_profiler");
        $__internal_f4c6b38208279471fdd5a1b5557e72b31742313ecc27eeda25a0bbd750c3b980->enter($__internal_f4c6b38208279471fdd5a1b5557e72b31742313ecc27eeda25a0bbd750c3b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c6b38208279471fdd5a1b5557e72b31742313ecc27eeda25a0bbd750c3b980->leave($__internal_f4c6b38208279471fdd5a1b5557e72b31742313ecc27eeda25a0bbd750c3b980_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_318db9c88445a0d75658896d137ddbdbf10192bbd729d116822c63c5d6518e7c = $this->env->getExtension("native_profiler");
        $__internal_318db9c88445a0d75658896d137ddbdbf10192bbd729d116822c63c5d6518e7c->enter($__internal_318db9c88445a0d75658896d137ddbdbf10192bbd729d116822c63c5d6518e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_318db9c88445a0d75658896d137ddbdbf10192bbd729d116822c63c5d6518e7c->leave($__internal_318db9c88445a0d75658896d137ddbdbf10192bbd729d116822c63c5d6518e7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87d5a66321a3ec1a87afe5a382e0bd12a6bdec0a22339809301b6ac1e8aa0530 = $this->env->getExtension("native_profiler");
        $__internal_87d5a66321a3ec1a87afe5a382e0bd12a6bdec0a22339809301b6ac1e8aa0530->enter($__internal_87d5a66321a3ec1a87afe5a382e0bd12a6bdec0a22339809301b6ac1e8aa0530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87d5a66321a3ec1a87afe5a382e0bd12a6bdec0a22339809301b6ac1e8aa0530->leave($__internal_87d5a66321a3ec1a87afe5a382e0bd12a6bdec0a22339809301b6ac1e8aa0530_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1443467add0832fa6cd565f29d905fc9fbeb26ca5991be18a42793ea1e49ba79 = $this->env->getExtension("native_profiler");
        $__internal_1443467add0832fa6cd565f29d905fc9fbeb26ca5991be18a42793ea1e49ba79->enter($__internal_1443467add0832fa6cd565f29d905fc9fbeb26ca5991be18a42793ea1e49ba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1443467add0832fa6cd565f29d905fc9fbeb26ca5991be18a42793ea1e49ba79->leave($__internal_1443467add0832fa6cd565f29d905fc9fbeb26ca5991be18a42793ea1e49ba79_prof);

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
