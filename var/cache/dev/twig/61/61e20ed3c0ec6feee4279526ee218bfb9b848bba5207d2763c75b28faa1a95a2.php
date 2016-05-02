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
        $__internal_212e6d8975fb4207c350f8a7c1fa5887c11bbec6a846012a74a55e708acaaa96 = $this->env->getExtension("native_profiler");
        $__internal_212e6d8975fb4207c350f8a7c1fa5887c11bbec6a846012a74a55e708acaaa96->enter($__internal_212e6d8975fb4207c350f8a7c1fa5887c11bbec6a846012a74a55e708acaaa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_212e6d8975fb4207c350f8a7c1fa5887c11bbec6a846012a74a55e708acaaa96->leave($__internal_212e6d8975fb4207c350f8a7c1fa5887c11bbec6a846012a74a55e708acaaa96_prof);

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
