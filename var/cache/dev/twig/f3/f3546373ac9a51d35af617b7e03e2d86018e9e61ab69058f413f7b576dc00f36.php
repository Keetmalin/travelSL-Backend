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
        $__internal_eae9a707c6d73b81a8c03772360846aa414a9c355a1769c95c24fe4a21340631 = $this->env->getExtension("native_profiler");
        $__internal_eae9a707c6d73b81a8c03772360846aa414a9c355a1769c95c24fe4a21340631->enter($__internal_eae9a707c6d73b81a8c03772360846aa414a9c355a1769c95c24fe4a21340631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eae9a707c6d73b81a8c03772360846aa414a9c355a1769c95c24fe4a21340631->leave($__internal_eae9a707c6d73b81a8c03772360846aa414a9c355a1769c95c24fe4a21340631_prof);

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
