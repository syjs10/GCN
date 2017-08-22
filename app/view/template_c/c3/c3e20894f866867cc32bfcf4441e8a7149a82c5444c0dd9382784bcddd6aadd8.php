<?php

/* template/stulayout.html */
class __TwigTemplate_32020ca8507a98ddf987e21f1b3aaaf01ed5e7f2873d9536516d913db1387c98 extends Twig_Template
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

\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"format-detection\" content=\"telephone=no\">
\t
    
</head>
<body>
\t";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    public function getTemplateName()
    {
        return "template/stulayout.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  53 => 15,  49 => 6,  46 => 5,  41 => 17,  39 => 15,  29 => 7,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

\t{% block head %}
\t{% endblock %}
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"format-detection\" content=\"telephone=no\">
\t
    
</head>
<body>
\t{% block content %}
\t{% endblock %}
</body>
</html>", "template/stulayout.html", "/var/www/html/GCN/app/view/template/stulayout.html");
    }
}
