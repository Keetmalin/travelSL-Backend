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
        $__internal_9f2d4ec9d5d1aee0f622988f245ad27e48bb5ee54c3fab6e0d21cf67fbfdd7eb = $this->env->getExtension("native_profiler");
        $__internal_9f2d4ec9d5d1aee0f622988f245ad27e48bb5ee54c3fab6e0d21cf67fbfdd7eb->enter($__internal_9f2d4ec9d5d1aee0f622988f245ad27e48bb5ee54c3fab6e0d21cf67fbfdd7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f2d4ec9d5d1aee0f622988f245ad27e48bb5ee54c3fab6e0d21cf67fbfdd7eb->leave($__internal_9f2d4ec9d5d1aee0f622988f245ad27e48bb5ee54c3fab6e0d21cf67fbfdd7eb_prof);

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
