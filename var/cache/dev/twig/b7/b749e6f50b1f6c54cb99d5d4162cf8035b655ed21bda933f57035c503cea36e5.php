<?php

/* base.html.twig */
class __TwigTemplate_a4db033e91b695be984ac484819c20fa12e20a91c5ec8b801f7d787806f57df4 extends Twig_Template
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
        $__internal_73cf0d636e892726a198e4065576fc201d600d71beaeee5a1683c25986e409a2 = $this->env->getExtension("native_profiler");
        $__internal_73cf0d636e892726a198e4065576fc201d600d71beaeee5a1683c25986e409a2->enter($__internal_73cf0d636e892726a198e4065576fc201d600d71beaeee5a1683c25986e409a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_73cf0d636e892726a198e4065576fc201d600d71beaeee5a1683c25986e409a2->leave($__internal_73cf0d636e892726a198e4065576fc201d600d71beaeee5a1683c25986e409a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd01f32961896a09635586e61aca9ff7ba56b25c46e8cf4f4c9a3828515acfc2 = $this->env->getExtension("native_profiler");
        $__internal_bd01f32961896a09635586e61aca9ff7ba56b25c46e8cf4f4c9a3828515acfc2->enter($__internal_bd01f32961896a09635586e61aca9ff7ba56b25c46e8cf4f4c9a3828515acfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd01f32961896a09635586e61aca9ff7ba56b25c46e8cf4f4c9a3828515acfc2->leave($__internal_bd01f32961896a09635586e61aca9ff7ba56b25c46e8cf4f4c9a3828515acfc2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e530fd8779bbcb522155449ebfd7e8f100c1c0589036532a72eadb3d6e92a5ab = $this->env->getExtension("native_profiler");
        $__internal_e530fd8779bbcb522155449ebfd7e8f100c1c0589036532a72eadb3d6e92a5ab->enter($__internal_e530fd8779bbcb522155449ebfd7e8f100c1c0589036532a72eadb3d6e92a5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e530fd8779bbcb522155449ebfd7e8f100c1c0589036532a72eadb3d6e92a5ab->leave($__internal_e530fd8779bbcb522155449ebfd7e8f100c1c0589036532a72eadb3d6e92a5ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39417b5eb264ea2ec5c5defc4ce5de42136ab50edf1f9d20cce9f9d006cec223 = $this->env->getExtension("native_profiler");
        $__internal_39417b5eb264ea2ec5c5defc4ce5de42136ab50edf1f9d20cce9f9d006cec223->enter($__internal_39417b5eb264ea2ec5c5defc4ce5de42136ab50edf1f9d20cce9f9d006cec223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39417b5eb264ea2ec5c5defc4ce5de42136ab50edf1f9d20cce9f9d006cec223->leave($__internal_39417b5eb264ea2ec5c5defc4ce5de42136ab50edf1f9d20cce9f9d006cec223_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2ae205fe609c95293e710b88eeb408bc5f497325b16dcddc0bfab0df10faa31 = $this->env->getExtension("native_profiler");
        $__internal_d2ae205fe609c95293e710b88eeb408bc5f497325b16dcddc0bfab0df10faa31->enter($__internal_d2ae205fe609c95293e710b88eeb408bc5f497325b16dcddc0bfab0df10faa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2ae205fe609c95293e710b88eeb408bc5f497325b16dcddc0bfab0df10faa31->leave($__internal_d2ae205fe609c95293e710b88eeb408bc5f497325b16dcddc0bfab0df10faa31_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
