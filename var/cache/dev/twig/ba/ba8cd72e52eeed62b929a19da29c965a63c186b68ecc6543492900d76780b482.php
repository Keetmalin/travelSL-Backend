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
        $__internal_aded4367fb864faf436e9f2d17fd02c26d09b7c1dd744c1f92f8d47e1df0c592 = $this->env->getExtension("native_profiler");
        $__internal_aded4367fb864faf436e9f2d17fd02c26d09b7c1dd744c1f92f8d47e1df0c592->enter($__internal_aded4367fb864faf436e9f2d17fd02c26d09b7c1dd744c1f92f8d47e1df0c592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aded4367fb864faf436e9f2d17fd02c26d09b7c1dd744c1f92f8d47e1df0c592->leave($__internal_aded4367fb864faf436e9f2d17fd02c26d09b7c1dd744c1f92f8d47e1df0c592_prof);

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
