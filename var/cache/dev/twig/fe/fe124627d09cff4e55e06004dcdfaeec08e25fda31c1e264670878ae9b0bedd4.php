<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3b67b7cb3039bb6f3bc4c853d30ebbf2bd8996abf11ca596e5d365d07ce6c7c1 extends Twig_Template
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
        $__internal_90a27f18476fc194ab2fe5b1f6d33275e254a1828ea818ff3a1f4d6b8b22a624 = $this->env->getExtension("native_profiler");
        $__internal_90a27f18476fc194ab2fe5b1f6d33275e254a1828ea818ff3a1f4d6b8b22a624->enter($__internal_90a27f18476fc194ab2fe5b1f6d33275e254a1828ea818ff3a1f4d6b8b22a624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_90a27f18476fc194ab2fe5b1f6d33275e254a1828ea818ff3a1f4d6b8b22a624->leave($__internal_90a27f18476fc194ab2fe5b1f6d33275e254a1828ea818ff3a1f4d6b8b22a624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
