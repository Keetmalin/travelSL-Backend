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
        $__internal_e12c0e0e29f539403d5ec82fad15ad307350c3ef0a3b786db3fe75918a099d4d = $this->env->getExtension("native_profiler");
        $__internal_e12c0e0e29f539403d5ec82fad15ad307350c3ef0a3b786db3fe75918a099d4d->enter($__internal_e12c0e0e29f539403d5ec82fad15ad307350c3ef0a3b786db3fe75918a099d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e12c0e0e29f539403d5ec82fad15ad307350c3ef0a3b786db3fe75918a099d4d->leave($__internal_e12c0e0e29f539403d5ec82fad15ad307350c3ef0a3b786db3fe75918a099d4d_prof);

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
