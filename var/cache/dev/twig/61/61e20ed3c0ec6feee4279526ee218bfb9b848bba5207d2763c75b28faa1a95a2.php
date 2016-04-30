<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f3bc2af1073d8206a13b35e908879c9a57f3483e093850c532238a1dc5b53657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b90ac644f840d1a638e0704f81832d1b94ecd391984a89cc4495df2121bbc49e = $this->env->getExtension("native_profiler");
        $__internal_b90ac644f840d1a638e0704f81832d1b94ecd391984a89cc4495df2121bbc49e->enter($__internal_b90ac644f840d1a638e0704f81832d1b94ecd391984a89cc4495df2121bbc49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b90ac644f840d1a638e0704f81832d1b94ecd391984a89cc4495df2121bbc49e->leave($__internal_b90ac644f840d1a638e0704f81832d1b94ecd391984a89cc4495df2121bbc49e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
