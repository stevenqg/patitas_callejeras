<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_46105fa8624ffba91e4e33a165a4fd1f619427fa359678982f717d86007c9174 extends Twig_Template
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
        $__internal_d4594d765952b02111bacd4b298049c0f3d310823db035fffa27ac44d46fc977 = $this->env->getExtension("native_profiler");
        $__internal_d4594d765952b02111bacd4b298049c0f3d310823db035fffa27ac44d46fc977->enter($__internal_d4594d765952b02111bacd4b298049c0f3d310823db035fffa27ac44d46fc977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4594d765952b02111bacd4b298049c0f3d310823db035fffa27ac44d46fc977->leave($__internal_d4594d765952b02111bacd4b298049c0f3d310823db035fffa27ac44d46fc977_prof);

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
