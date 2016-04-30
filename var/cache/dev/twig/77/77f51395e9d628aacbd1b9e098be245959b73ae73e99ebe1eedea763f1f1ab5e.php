<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9847b42d597d84b1299db0e4ede62796a61c4a9631a827fe59d37774a1d93031 extends Twig_Template
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
        $__internal_361b5b500387a652e21b95b9980c1408346c31978f8722035b718cb3d84c369f = $this->env->getExtension("native_profiler");
        $__internal_361b5b500387a652e21b95b9980c1408346c31978f8722035b718cb3d84c369f->enter($__internal_361b5b500387a652e21b95b9980c1408346c31978f8722035b718cb3d84c369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_361b5b500387a652e21b95b9980c1408346c31978f8722035b718cb3d84c369f->leave($__internal_361b5b500387a652e21b95b9980c1408346c31978f8722035b718cb3d84c369f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
