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
        $__internal_0b14298a58cfed461d71844eb03abbed2ccc817b5c4c4ee1bb50b2b1801cac9b = $this->env->getExtension("native_profiler");
        $__internal_0b14298a58cfed461d71844eb03abbed2ccc817b5c4c4ee1bb50b2b1801cac9b->enter($__internal_0b14298a58cfed461d71844eb03abbed2ccc817b5c4c4ee1bb50b2b1801cac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0b14298a58cfed461d71844eb03abbed2ccc817b5c4c4ee1bb50b2b1801cac9b->leave($__internal_0b14298a58cfed461d71844eb03abbed2ccc817b5c4c4ee1bb50b2b1801cac9b_prof);

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
