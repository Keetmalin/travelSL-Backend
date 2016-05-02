<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9f02e2cd8144aeb63786d4400061e508c5268283bca8e8853b24a0907ac1103b extends Twig_Template
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
        $__internal_83ea5bc7da5c634b6b30fcdd9608c0041770d876cec3676dbb21f08aa5440778 = $this->env->getExtension("native_profiler");
        $__internal_83ea5bc7da5c634b6b30fcdd9608c0041770d876cec3676dbb21f08aa5440778->enter($__internal_83ea5bc7da5c634b6b30fcdd9608c0041770d876cec3676dbb21f08aa5440778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_83ea5bc7da5c634b6b30fcdd9608c0041770d876cec3676dbb21f08aa5440778->leave($__internal_83ea5bc7da5c634b6b30fcdd9608c0041770d876cec3676dbb21f08aa5440778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
