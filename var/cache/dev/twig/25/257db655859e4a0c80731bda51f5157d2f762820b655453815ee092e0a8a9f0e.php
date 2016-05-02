<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_de99486e673e37c142c470974809a1c7b297ea3e13f66404f841583ac346e720 extends Twig_Template
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
        $__internal_04e44e79db5458f8fa89b95a6865dc80222c3f1eb27119f115765ca780db30af = $this->env->getExtension("native_profiler");
        $__internal_04e44e79db5458f8fa89b95a6865dc80222c3f1eb27119f115765ca780db30af->enter($__internal_04e44e79db5458f8fa89b95a6865dc80222c3f1eb27119f115765ca780db30af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_04e44e79db5458f8fa89b95a6865dc80222c3f1eb27119f115765ca780db30af->leave($__internal_04e44e79db5458f8fa89b95a6865dc80222c3f1eb27119f115765ca780db30af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
