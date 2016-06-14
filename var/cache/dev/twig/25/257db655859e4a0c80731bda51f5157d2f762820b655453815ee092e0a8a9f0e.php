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
        $__internal_52f0a4f5238b91a1a39328ec354b9e93da1588114ec5c5170a6634fc18493e31 = $this->env->getExtension("native_profiler");
        $__internal_52f0a4f5238b91a1a39328ec354b9e93da1588114ec5c5170a6634fc18493e31->enter($__internal_52f0a4f5238b91a1a39328ec354b9e93da1588114ec5c5170a6634fc18493e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_52f0a4f5238b91a1a39328ec354b9e93da1588114ec5c5170a6634fc18493e31->leave($__internal_52f0a4f5238b91a1a39328ec354b9e93da1588114ec5c5170a6634fc18493e31_prof);

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
