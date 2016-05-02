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
        $__internal_a5c23550fe09a557558020cf038aba1c3eb61ed88dd735e2dec1e249bbb7a012 = $this->env->getExtension("native_profiler");
        $__internal_a5c23550fe09a557558020cf038aba1c3eb61ed88dd735e2dec1e249bbb7a012->enter($__internal_a5c23550fe09a557558020cf038aba1c3eb61ed88dd735e2dec1e249bbb7a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a5c23550fe09a557558020cf038aba1c3eb61ed88dd735e2dec1e249bbb7a012->leave($__internal_a5c23550fe09a557558020cf038aba1c3eb61ed88dd735e2dec1e249bbb7a012_prof);

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
