<?php

/* template/hflayout.html */
class __TwigTemplate_aca77345808286f0f61477f5b9e73beb55ca1c9fe16c0603d273034e478ed25e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "</head>
<body>
\t";
        // line 9
        $this->loadTemplate("template/header.html", "template/hflayout.html", 9)->display($context);
        // line 10
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "\t";
        $this->loadTemplate("template/footer.html", "template/hflayout.html", 12)->display($context);
        // line 13
        echo "</body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t";
    }

    public function getTemplateName()
    {
        return "template/hflayout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  53 => 10,  49 => 6,  46 => 5,  41 => 13,  38 => 12,  35 => 10,  33 => 9,  29 => 7,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/hflayout.html", "/var/www/html/GCN/app/view/template/hflayout.html");
    }
}
