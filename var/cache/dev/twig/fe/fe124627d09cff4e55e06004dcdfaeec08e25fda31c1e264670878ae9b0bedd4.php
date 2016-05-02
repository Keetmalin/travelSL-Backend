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
        $__internal_8192cc5c1a99a2c274ff200339360848cd6753ee600ab59909dac66dd589713e = $this->env->getExtension("native_profiler");
        $__internal_8192cc5c1a99a2c274ff200339360848cd6753ee600ab59909dac66dd589713e->enter($__internal_8192cc5c1a99a2c274ff200339360848cd6753ee600ab59909dac66dd589713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8192cc5c1a99a2c274ff200339360848cd6753ee600ab59909dac66dd589713e->leave($__internal_8192cc5c1a99a2c274ff200339360848cd6753ee600ab59909dac66dd589713e_prof);

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
