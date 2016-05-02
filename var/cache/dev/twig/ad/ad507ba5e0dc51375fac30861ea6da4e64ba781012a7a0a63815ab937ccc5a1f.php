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
        $__internal_9cc795f26b50e67612bef017fb223a5d93ef8c621cd768f3c61a5afc005c370a = $this->env->getExtension("native_profiler");
        $__internal_9cc795f26b50e67612bef017fb223a5d93ef8c621cd768f3c61a5afc005c370a->enter($__internal_9cc795f26b50e67612bef017fb223a5d93ef8c621cd768f3c61a5afc005c370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9cc795f26b50e67612bef017fb223a5d93ef8c621cd768f3c61a5afc005c370a->leave($__internal_9cc795f26b50e67612bef017fb223a5d93ef8c621cd768f3c61a5afc005c370a_prof);

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
