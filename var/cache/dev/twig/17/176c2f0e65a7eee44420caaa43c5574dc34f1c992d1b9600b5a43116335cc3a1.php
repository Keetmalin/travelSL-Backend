<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_76f4eec66da5c2b2d500764f56deae2d3775eaa2a73053a951a04746416a5c0d extends Twig_Template
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
        $__internal_b79426f67f4415f684a060d7609458b0e2b4b90b500608e54a0fcdf3e06f63aa = $this->env->getExtension("native_profiler");
        $__internal_b79426f67f4415f684a060d7609458b0e2b4b90b500608e54a0fcdf3e06f63aa->enter($__internal_b79426f67f4415f684a060d7609458b0e2b4b90b500608e54a0fcdf3e06f63aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b79426f67f4415f684a060d7609458b0e2b4b90b500608e54a0fcdf3e06f63aa->leave($__internal_b79426f67f4415f684a060d7609458b0e2b4b90b500608e54a0fcdf3e06f63aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
