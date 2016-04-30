<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0b967ce48707b5867f5f476243aac0ea44a876132ed441cef6e4050d3c22ccf extends Twig_Template
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
        $__internal_d1d1916c6d000a65d1f09fdaa84eee525c4383d4360483fa0bf93fc3751501d8 = $this->env->getExtension("native_profiler");
        $__internal_d1d1916c6d000a65d1f09fdaa84eee525c4383d4360483fa0bf93fc3751501d8->enter($__internal_d1d1916c6d000a65d1f09fdaa84eee525c4383d4360483fa0bf93fc3751501d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d1d1916c6d000a65d1f09fdaa84eee525c4383d4360483fa0bf93fc3751501d8->leave($__internal_d1d1916c6d000a65d1f09fdaa84eee525c4383d4360483fa0bf93fc3751501d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
