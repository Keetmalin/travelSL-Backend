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
        $__internal_60d5aa525b406e33d0baa41d6f3daf994e2af48dcd045044412b8a2438cfe70c = $this->env->getExtension("native_profiler");
        $__internal_60d5aa525b406e33d0baa41d6f3daf994e2af48dcd045044412b8a2438cfe70c->enter($__internal_60d5aa525b406e33d0baa41d6f3daf994e2af48dcd045044412b8a2438cfe70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_60d5aa525b406e33d0baa41d6f3daf994e2af48dcd045044412b8a2438cfe70c->leave($__internal_60d5aa525b406e33d0baa41d6f3daf994e2af48dcd045044412b8a2438cfe70c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69669c5964440584c07782b6875b5aae01a561406d2aa7acc3adeee14eb812ec = $this->env->getExtension("native_profiler");
        $__internal_69669c5964440584c07782b6875b5aae01a561406d2aa7acc3adeee14eb812ec->enter($__internal_69669c5964440584c07782b6875b5aae01a561406d2aa7acc3adeee14eb812ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_69669c5964440584c07782b6875b5aae01a561406d2aa7acc3adeee14eb812ec->leave($__internal_69669c5964440584c07782b6875b5aae01a561406d2aa7acc3adeee14eb812ec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6df59a7ba6896c16eaed1f44f47b1f7485b3257d4af3552ce791bc8d0d17a603 = $this->env->getExtension("native_profiler");
        $__internal_6df59a7ba6896c16eaed1f44f47b1f7485b3257d4af3552ce791bc8d0d17a603->enter($__internal_6df59a7ba6896c16eaed1f44f47b1f7485b3257d4af3552ce791bc8d0d17a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6df59a7ba6896c16eaed1f44f47b1f7485b3257d4af3552ce791bc8d0d17a603->leave($__internal_6df59a7ba6896c16eaed1f44f47b1f7485b3257d4af3552ce791bc8d0d17a603_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_619612980afc99dd4b321bee81620d142bdfa18378b3d2f689ec1fe74609c4fe = $this->env->getExtension("native_profiler");
        $__internal_619612980afc99dd4b321bee81620d142bdfa18378b3d2f689ec1fe74609c4fe->enter($__internal_619612980afc99dd4b321bee81620d142bdfa18378b3d2f689ec1fe74609c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_619612980afc99dd4b321bee81620d142bdfa18378b3d2f689ec1fe74609c4fe->leave($__internal_619612980afc99dd4b321bee81620d142bdfa18378b3d2f689ec1fe74609c4fe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a677fef6faba0018cd134a058ff81127a0f52bc7e412835dd2fd68f189ee0aa = $this->env->getExtension("native_profiler");
        $__internal_8a677fef6faba0018cd134a058ff81127a0f52bc7e412835dd2fd68f189ee0aa->enter($__internal_8a677fef6faba0018cd134a058ff81127a0f52bc7e412835dd2fd68f189ee0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a677fef6faba0018cd134a058ff81127a0f52bc7e412835dd2fd68f189ee0aa->leave($__internal_8a677fef6faba0018cd134a058ff81127a0f52bc7e412835dd2fd68f189ee0aa_prof);

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
