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
        $__internal_2f39086a0e1da8f85a7bbd373225c11b7b3a4ee569d4e2dabb576ff06fdd0c19 = $this->env->getExtension("native_profiler");
        $__internal_2f39086a0e1da8f85a7bbd373225c11b7b3a4ee569d4e2dabb576ff06fdd0c19->enter($__internal_2f39086a0e1da8f85a7bbd373225c11b7b3a4ee569d4e2dabb576ff06fdd0c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2f39086a0e1da8f85a7bbd373225c11b7b3a4ee569d4e2dabb576ff06fdd0c19->leave($__internal_2f39086a0e1da8f85a7bbd373225c11b7b3a4ee569d4e2dabb576ff06fdd0c19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf4bcf3bf32771d1290b3e0a84331b144c271f104941eb916049df1324214f1b = $this->env->getExtension("native_profiler");
        $__internal_bf4bcf3bf32771d1290b3e0a84331b144c271f104941eb916049df1324214f1b->enter($__internal_bf4bcf3bf32771d1290b3e0a84331b144c271f104941eb916049df1324214f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf4bcf3bf32771d1290b3e0a84331b144c271f104941eb916049df1324214f1b->leave($__internal_bf4bcf3bf32771d1290b3e0a84331b144c271f104941eb916049df1324214f1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf38c068d75b227ea3d563794e3624c962e961aa5b9bfacc1030204b0ae4fb25 = $this->env->getExtension("native_profiler");
        $__internal_cf38c068d75b227ea3d563794e3624c962e961aa5b9bfacc1030204b0ae4fb25->enter($__internal_cf38c068d75b227ea3d563794e3624c962e961aa5b9bfacc1030204b0ae4fb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf38c068d75b227ea3d563794e3624c962e961aa5b9bfacc1030204b0ae4fb25->leave($__internal_cf38c068d75b227ea3d563794e3624c962e961aa5b9bfacc1030204b0ae4fb25_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_abbac42bcda8a08f046ba8f0bb795dbf2e4bf79075bed2585cb8e2c94ecd2dba = $this->env->getExtension("native_profiler");
        $__internal_abbac42bcda8a08f046ba8f0bb795dbf2e4bf79075bed2585cb8e2c94ecd2dba->enter($__internal_abbac42bcda8a08f046ba8f0bb795dbf2e4bf79075bed2585cb8e2c94ecd2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abbac42bcda8a08f046ba8f0bb795dbf2e4bf79075bed2585cb8e2c94ecd2dba->leave($__internal_abbac42bcda8a08f046ba8f0bb795dbf2e4bf79075bed2585cb8e2c94ecd2dba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f57dc3d6c5422ac7257101b468d2401beac59e7e1e9be3440a2b1ffc4cdbd8f = $this->env->getExtension("native_profiler");
        $__internal_0f57dc3d6c5422ac7257101b468d2401beac59e7e1e9be3440a2b1ffc4cdbd8f->enter($__internal_0f57dc3d6c5422ac7257101b468d2401beac59e7e1e9be3440a2b1ffc4cdbd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f57dc3d6c5422ac7257101b468d2401beac59e7e1e9be3440a2b1ffc4cdbd8f->leave($__internal_0f57dc3d6c5422ac7257101b468d2401beac59e7e1e9be3440a2b1ffc4cdbd8f_prof);

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
