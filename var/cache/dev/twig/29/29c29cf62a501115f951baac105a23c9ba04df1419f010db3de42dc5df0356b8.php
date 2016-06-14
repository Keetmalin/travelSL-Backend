<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1d1a633db083ef31341e474927800db717285f1c82798f438ec303679ce22340 extends Twig_Template
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
        $__internal_3580aebd6c2cf390601fee89df6cc645689068c27005e8d987ff1f8682c3f66e = $this->env->getExtension("native_profiler");
        $__internal_3580aebd6c2cf390601fee89df6cc645689068c27005e8d987ff1f8682c3f66e->enter($__internal_3580aebd6c2cf390601fee89df6cc645689068c27005e8d987ff1f8682c3f66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3580aebd6c2cf390601fee89df6cc645689068c27005e8d987ff1f8682c3f66e->leave($__internal_3580aebd6c2cf390601fee89df6cc645689068c27005e8d987ff1f8682c3f66e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
