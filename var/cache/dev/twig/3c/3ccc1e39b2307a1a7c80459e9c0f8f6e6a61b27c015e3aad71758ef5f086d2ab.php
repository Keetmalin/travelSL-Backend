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
        $__internal_28ed563aa6c736c290fde3d27811b03231f14dc9f377cea949ed00db77dfa9fe = $this->env->getExtension("native_profiler");
        $__internal_28ed563aa6c736c290fde3d27811b03231f14dc9f377cea949ed00db77dfa9fe->enter($__internal_28ed563aa6c736c290fde3d27811b03231f14dc9f377cea949ed00db77dfa9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ed563aa6c736c290fde3d27811b03231f14dc9f377cea949ed00db77dfa9fe->leave($__internal_28ed563aa6c736c290fde3d27811b03231f14dc9f377cea949ed00db77dfa9fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_773ffd86b118725330034d1c48a4d419a78f7fa60d079509ce8a0aa7e9ebbe37 = $this->env->getExtension("native_profiler");
        $__internal_773ffd86b118725330034d1c48a4d419a78f7fa60d079509ce8a0aa7e9ebbe37->enter($__internal_773ffd86b118725330034d1c48a4d419a78f7fa60d079509ce8a0aa7e9ebbe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_773ffd86b118725330034d1c48a4d419a78f7fa60d079509ce8a0aa7e9ebbe37->leave($__internal_773ffd86b118725330034d1c48a4d419a78f7fa60d079509ce8a0aa7e9ebbe37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dcf93b05e534dbfe52521f87f32fcb154c4326e2177b1c0fbea13ae045958d8 = $this->env->getExtension("native_profiler");
        $__internal_3dcf93b05e534dbfe52521f87f32fcb154c4326e2177b1c0fbea13ae045958d8->enter($__internal_3dcf93b05e534dbfe52521f87f32fcb154c4326e2177b1c0fbea13ae045958d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3dcf93b05e534dbfe52521f87f32fcb154c4326e2177b1c0fbea13ae045958d8->leave($__internal_3dcf93b05e534dbfe52521f87f32fcb154c4326e2177b1c0fbea13ae045958d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5363ef742705a9767a029baf38b51ad649b85e0d32f3a402c25e53f492ec7048 = $this->env->getExtension("native_profiler");
        $__internal_5363ef742705a9767a029baf38b51ad649b85e0d32f3a402c25e53f492ec7048->enter($__internal_5363ef742705a9767a029baf38b51ad649b85e0d32f3a402c25e53f492ec7048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5363ef742705a9767a029baf38b51ad649b85e0d32f3a402c25e53f492ec7048->leave($__internal_5363ef742705a9767a029baf38b51ad649b85e0d32f3a402c25e53f492ec7048_prof);

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
