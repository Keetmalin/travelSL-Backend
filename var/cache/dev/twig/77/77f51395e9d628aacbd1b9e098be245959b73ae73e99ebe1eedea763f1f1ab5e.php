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
        $__internal_b177a0d65efe41cef2a4984adac9d4ccc9da9a9d2d53f6a96c197ba93ec92538 = $this->env->getExtension("native_profiler");
        $__internal_b177a0d65efe41cef2a4984adac9d4ccc9da9a9d2d53f6a96c197ba93ec92538->enter($__internal_b177a0d65efe41cef2a4984adac9d4ccc9da9a9d2d53f6a96c197ba93ec92538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b177a0d65efe41cef2a4984adac9d4ccc9da9a9d2d53f6a96c197ba93ec92538->leave($__internal_b177a0d65efe41cef2a4984adac9d4ccc9da9a9d2d53f6a96c197ba93ec92538_prof);

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
