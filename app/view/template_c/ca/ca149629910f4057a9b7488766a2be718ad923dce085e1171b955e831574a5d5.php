<?php

/* template/footer.html */
class __TwigTemplate_0e2d3b41e84e573082639244702ce6df35c7a73bd6845f0a2c6720f67186861c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "\t<footer>&copy;2017  By JS </footer>
";
    }

    public function getTemplateName()
    {
        return "template/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/footer.html", "/var/www/html/GCN/app/view/template/footer.html");
    }
}