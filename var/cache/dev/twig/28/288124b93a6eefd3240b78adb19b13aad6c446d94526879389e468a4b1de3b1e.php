<?php

/* ::base.html.twig */
class __TwigTemplate_e0d68b1018fbdee74e24f7ecaa2c3e9ce22a7b8648462e80fbd2049cb2f61e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d878753622b7c3c37e2214b7c68e96b13a03c54f5acf3758d112b893d29dc3b = $this->env->getExtension("native_profiler");
        $__internal_2d878753622b7c3c37e2214b7c68e96b13a03c54f5acf3758d112b893d29dc3b->enter($__internal_2d878753622b7c3c37e2214b7c68e96b13a03c54f5acf3758d112b893d29dc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2d878753622b7c3c37e2214b7c68e96b13a03c54f5acf3758d112b893d29dc3b->leave($__internal_2d878753622b7c3c37e2214b7c68e96b13a03c54f5acf3758d112b893d29dc3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3387e26d6cf5ef9f659ccf8adace04c2b4114e19bd267a67fbae83ea421d8d70 = $this->env->getExtension("native_profiler");
        $__internal_3387e26d6cf5ef9f659ccf8adace04c2b4114e19bd267a67fbae83ea421d8d70->enter($__internal_3387e26d6cf5ef9f659ccf8adace04c2b4114e19bd267a67fbae83ea421d8d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3387e26d6cf5ef9f659ccf8adace04c2b4114e19bd267a67fbae83ea421d8d70->leave($__internal_3387e26d6cf5ef9f659ccf8adace04c2b4114e19bd267a67fbae83ea421d8d70_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71b7f1c8fcc3a27b3552a5dd67343efb1236e9f00a2a3f1046359283ffcc95af = $this->env->getExtension("native_profiler");
        $__internal_71b7f1c8fcc3a27b3552a5dd67343efb1236e9f00a2a3f1046359283ffcc95af->enter($__internal_71b7f1c8fcc3a27b3552a5dd67343efb1236e9f00a2a3f1046359283ffcc95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_71b7f1c8fcc3a27b3552a5dd67343efb1236e9f00a2a3f1046359283ffcc95af->leave($__internal_71b7f1c8fcc3a27b3552a5dd67343efb1236e9f00a2a3f1046359283ffcc95af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7bf3efe39067313f51ad911f39fc7a44c8fd2726616c3306a48e6a072a2bc39 = $this->env->getExtension("native_profiler");
        $__internal_a7bf3efe39067313f51ad911f39fc7a44c8fd2726616c3306a48e6a072a2bc39->enter($__internal_a7bf3efe39067313f51ad911f39fc7a44c8fd2726616c3306a48e6a072a2bc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7bf3efe39067313f51ad911f39fc7a44c8fd2726616c3306a48e6a072a2bc39->leave($__internal_a7bf3efe39067313f51ad911f39fc7a44c8fd2726616c3306a48e6a072a2bc39_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9e3bd1ae4e5bdccba79eca59639312e3235b5d19bbdccfb10ef3360737caf04 = $this->env->getExtension("native_profiler");
        $__internal_d9e3bd1ae4e5bdccba79eca59639312e3235b5d19bbdccfb10ef3360737caf04->enter($__internal_d9e3bd1ae4e5bdccba79eca59639312e3235b5d19bbdccfb10ef3360737caf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d9e3bd1ae4e5bdccba79eca59639312e3235b5d19bbdccfb10ef3360737caf04->leave($__internal_d9e3bd1ae4e5bdccba79eca59639312e3235b5d19bbdccfb10ef3360737caf04_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
