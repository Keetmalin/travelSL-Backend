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
        $__internal_e18018418ffeea84eb88bb1013e008c91a3e4a33c7043893033d94176ecd7042 = $this->env->getExtension("native_profiler");
        $__internal_e18018418ffeea84eb88bb1013e008c91a3e4a33c7043893033d94176ecd7042->enter($__internal_e18018418ffeea84eb88bb1013e008c91a3e4a33c7043893033d94176ecd7042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18018418ffeea84eb88bb1013e008c91a3e4a33c7043893033d94176ecd7042->leave($__internal_e18018418ffeea84eb88bb1013e008c91a3e4a33c7043893033d94176ecd7042_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b8335a514501e110496b63bfec241e895d0dd59adbd5df3418125c9c6caffcc = $this->env->getExtension("native_profiler");
        $__internal_2b8335a514501e110496b63bfec241e895d0dd59adbd5df3418125c9c6caffcc->enter($__internal_2b8335a514501e110496b63bfec241e895d0dd59adbd5df3418125c9c6caffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b8335a514501e110496b63bfec241e895d0dd59adbd5df3418125c9c6caffcc->leave($__internal_2b8335a514501e110496b63bfec241e895d0dd59adbd5df3418125c9c6caffcc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7e3bc835890a7879e9c7e569e130c27373f58e9bba2f94f7ad95d716c086f7d = $this->env->getExtension("native_profiler");
        $__internal_f7e3bc835890a7879e9c7e569e130c27373f58e9bba2f94f7ad95d716c086f7d->enter($__internal_f7e3bc835890a7879e9c7e569e130c27373f58e9bba2f94f7ad95d716c086f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7e3bc835890a7879e9c7e569e130c27373f58e9bba2f94f7ad95d716c086f7d->leave($__internal_f7e3bc835890a7879e9c7e569e130c27373f58e9bba2f94f7ad95d716c086f7d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6074815d0a1fe65650ed38a3d3b4b8fc43c88afd4c581ccbd6adbc6bb354b4e9 = $this->env->getExtension("native_profiler");
        $__internal_6074815d0a1fe65650ed38a3d3b4b8fc43c88afd4c581ccbd6adbc6bb354b4e9->enter($__internal_6074815d0a1fe65650ed38a3d3b4b8fc43c88afd4c581ccbd6adbc6bb354b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6074815d0a1fe65650ed38a3d3b4b8fc43c88afd4c581ccbd6adbc6bb354b4e9->leave($__internal_6074815d0a1fe65650ed38a3d3b4b8fc43c88afd4c581ccbd6adbc6bb354b4e9_prof);

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
