<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fd8f87f5261dc106a731b09fd469da8ecd6ae3b7e2a5029bfe0dd2a5a3bc56a8 extends Twig_Template
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
        $__internal_0e1de7cca692ab7940a98f000fbe53c6bf3709c9487c306664ffe3c54dd141dc = $this->env->getExtension("native_profiler");
        $__internal_0e1de7cca692ab7940a98f000fbe53c6bf3709c9487c306664ffe3c54dd141dc->enter($__internal_0e1de7cca692ab7940a98f000fbe53c6bf3709c9487c306664ffe3c54dd141dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e1de7cca692ab7940a98f000fbe53c6bf3709c9487c306664ffe3c54dd141dc->leave($__internal_0e1de7cca692ab7940a98f000fbe53c6bf3709c9487c306664ffe3c54dd141dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
