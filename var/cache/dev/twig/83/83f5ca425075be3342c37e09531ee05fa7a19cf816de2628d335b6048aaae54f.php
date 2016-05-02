<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_77b8d3345119920d04f3d71bf2d12a2ddb511dcdba29546b811ab2549f74a28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3e4e8e3b685e9ffda90dea7b98655f063f54535e6cacc1b4f6012bdc5feb7f3c = $this->env->getExtension("native_profiler");
        $__internal_3e4e8e3b685e9ffda90dea7b98655f063f54535e6cacc1b4f6012bdc5feb7f3c->enter($__internal_3e4e8e3b685e9ffda90dea7b98655f063f54535e6cacc1b4f6012bdc5feb7f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e4e8e3b685e9ffda90dea7b98655f063f54535e6cacc1b4f6012bdc5feb7f3c->leave($__internal_3e4e8e3b685e9ffda90dea7b98655f063f54535e6cacc1b4f6012bdc5feb7f3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f828e80276371399a7b67387dcd056698a0728fa125c93fd3e4f4be604d0100 = $this->env->getExtension("native_profiler");
        $__internal_5f828e80276371399a7b67387dcd056698a0728fa125c93fd3e4f4be604d0100->enter($__internal_5f828e80276371399a7b67387dcd056698a0728fa125c93fd3e4f4be604d0100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f828e80276371399a7b67387dcd056698a0728fa125c93fd3e4f4be604d0100->leave($__internal_5f828e80276371399a7b67387dcd056698a0728fa125c93fd3e4f4be604d0100_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64d07d95f185446caaca21280951ac1c4eaa79cd69b8379cd0901d35704e5052 = $this->env->getExtension("native_profiler");
        $__internal_64d07d95f185446caaca21280951ac1c4eaa79cd69b8379cd0901d35704e5052->enter($__internal_64d07d95f185446caaca21280951ac1c4eaa79cd69b8379cd0901d35704e5052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_64d07d95f185446caaca21280951ac1c4eaa79cd69b8379cd0901d35704e5052->leave($__internal_64d07d95f185446caaca21280951ac1c4eaa79cd69b8379cd0901d35704e5052_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
