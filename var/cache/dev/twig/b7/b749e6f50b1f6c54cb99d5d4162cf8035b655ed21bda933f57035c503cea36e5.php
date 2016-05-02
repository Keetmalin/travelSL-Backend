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
        $__internal_27953ea764adbef5441adf757d8f7d7d503c4192e3e609cacfd558246ce4d5cc = $this->env->getExtension("native_profiler");
        $__internal_27953ea764adbef5441adf757d8f7d7d503c4192e3e609cacfd558246ce4d5cc->enter($__internal_27953ea764adbef5441adf757d8f7d7d503c4192e3e609cacfd558246ce4d5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_27953ea764adbef5441adf757d8f7d7d503c4192e3e609cacfd558246ce4d5cc->leave($__internal_27953ea764adbef5441adf757d8f7d7d503c4192e3e609cacfd558246ce4d5cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb3d2c6d9173ec6ad6c7bf93ad7152590f139ca867d787cd090db1e54fc34f8b = $this->env->getExtension("native_profiler");
        $__internal_eb3d2c6d9173ec6ad6c7bf93ad7152590f139ca867d787cd090db1e54fc34f8b->enter($__internal_eb3d2c6d9173ec6ad6c7bf93ad7152590f139ca867d787cd090db1e54fc34f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eb3d2c6d9173ec6ad6c7bf93ad7152590f139ca867d787cd090db1e54fc34f8b->leave($__internal_eb3d2c6d9173ec6ad6c7bf93ad7152590f139ca867d787cd090db1e54fc34f8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87ab0baa742aa7c366ab86035a009a901e879df1937924c9bd7a19afec244a8f = $this->env->getExtension("native_profiler");
        $__internal_87ab0baa742aa7c366ab86035a009a901e879df1937924c9bd7a19afec244a8f->enter($__internal_87ab0baa742aa7c366ab86035a009a901e879df1937924c9bd7a19afec244a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87ab0baa742aa7c366ab86035a009a901e879df1937924c9bd7a19afec244a8f->leave($__internal_87ab0baa742aa7c366ab86035a009a901e879df1937924c9bd7a19afec244a8f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6719a26356d6308eb6a8a8c81155a5f066551d057274c21647ab629cbdec76dd = $this->env->getExtension("native_profiler");
        $__internal_6719a26356d6308eb6a8a8c81155a5f066551d057274c21647ab629cbdec76dd->enter($__internal_6719a26356d6308eb6a8a8c81155a5f066551d057274c21647ab629cbdec76dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6719a26356d6308eb6a8a8c81155a5f066551d057274c21647ab629cbdec76dd->leave($__internal_6719a26356d6308eb6a8a8c81155a5f066551d057274c21647ab629cbdec76dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_703ebbd512a7bdcccc8092327d385e34e59e4be5d4134b4042f1ae0b46515a67 = $this->env->getExtension("native_profiler");
        $__internal_703ebbd512a7bdcccc8092327d385e34e59e4be5d4134b4042f1ae0b46515a67->enter($__internal_703ebbd512a7bdcccc8092327d385e34e59e4be5d4134b4042f1ae0b46515a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_703ebbd512a7bdcccc8092327d385e34e59e4be5d4134b4042f1ae0b46515a67->leave($__internal_703ebbd512a7bdcccc8092327d385e34e59e4be5d4134b4042f1ae0b46515a67_prof);

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
