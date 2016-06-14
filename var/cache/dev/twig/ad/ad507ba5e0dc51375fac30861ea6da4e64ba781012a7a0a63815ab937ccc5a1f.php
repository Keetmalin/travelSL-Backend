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
        $__internal_98e256f557db4fb7b5aa87d1975c9b7424d835afd50aa72c5434e933b8be56f6 = $this->env->getExtension("native_profiler");
        $__internal_98e256f557db4fb7b5aa87d1975c9b7424d835afd50aa72c5434e933b8be56f6->enter($__internal_98e256f557db4fb7b5aa87d1975c9b7424d835afd50aa72c5434e933b8be56f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_98e256f557db4fb7b5aa87d1975c9b7424d835afd50aa72c5434e933b8be56f6->leave($__internal_98e256f557db4fb7b5aa87d1975c9b7424d835afd50aa72c5434e933b8be56f6_prof);

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
