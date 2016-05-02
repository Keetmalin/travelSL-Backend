<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2d1dc3a108f5b0e16d4919a607caf92db507261f632278925dcf4e6953a0335c extends Twig_Template
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
        $__internal_62b4d89207e362a54b1cd0648c9bdb54d933ab38e4181f6410ee5c10320ad9bf = $this->env->getExtension("native_profiler");
        $__internal_62b4d89207e362a54b1cd0648c9bdb54d933ab38e4181f6410ee5c10320ad9bf->enter($__internal_62b4d89207e362a54b1cd0648c9bdb54d933ab38e4181f6410ee5c10320ad9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_62b4d89207e362a54b1cd0648c9bdb54d933ab38e4181f6410ee5c10320ad9bf->leave($__internal_62b4d89207e362a54b1cd0648c9bdb54d933ab38e4181f6410ee5c10320ad9bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
