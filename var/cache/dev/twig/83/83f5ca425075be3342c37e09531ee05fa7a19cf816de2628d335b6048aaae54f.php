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
        $__internal_9128d924b45678bb8ed754f4f4c21f50a3f73ed1bfe82123f5b78b81fc4b019f = $this->env->getExtension("native_profiler");
        $__internal_9128d924b45678bb8ed754f4f4c21f50a3f73ed1bfe82123f5b78b81fc4b019f->enter($__internal_9128d924b45678bb8ed754f4f4c21f50a3f73ed1bfe82123f5b78b81fc4b019f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9128d924b45678bb8ed754f4f4c21f50a3f73ed1bfe82123f5b78b81fc4b019f->leave($__internal_9128d924b45678bb8ed754f4f4c21f50a3f73ed1bfe82123f5b78b81fc4b019f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f38f1b6f8677d0692f64ae097b313319173d595d1939ce04ddf8954d5421de7 = $this->env->getExtension("native_profiler");
        $__internal_1f38f1b6f8677d0692f64ae097b313319173d595d1939ce04ddf8954d5421de7->enter($__internal_1f38f1b6f8677d0692f64ae097b313319173d595d1939ce04ddf8954d5421de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f38f1b6f8677d0692f64ae097b313319173d595d1939ce04ddf8954d5421de7->leave($__internal_1f38f1b6f8677d0692f64ae097b313319173d595d1939ce04ddf8954d5421de7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4204e4163de8c94dcd95ea20426bcaf83c35a7a4c123a08803ebbf54f745db4b = $this->env->getExtension("native_profiler");
        $__internal_4204e4163de8c94dcd95ea20426bcaf83c35a7a4c123a08803ebbf54f745db4b->enter($__internal_4204e4163de8c94dcd95ea20426bcaf83c35a7a4c123a08803ebbf54f745db4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4204e4163de8c94dcd95ea20426bcaf83c35a7a4c123a08803ebbf54f745db4b->leave($__internal_4204e4163de8c94dcd95ea20426bcaf83c35a7a4c123a08803ebbf54f745db4b_prof);

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
