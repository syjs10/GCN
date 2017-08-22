<?php

/* template/layout.html */
class __TwigTemplate_db83f7b10926d73ed58bb65544d2881c6e58e49718785d13b19019397c6dad6d extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/main.css\">
    
</head>
<body>
\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "\t";
    }

    public function getTemplateName()
    {
        return "template/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  64 => 17,  60 => 6,  57 => 5,  52 => 19,  50 => 17,  43 => 13,  39 => 12,  35 => 11,  29 => 7,  27 => 5,  21 => 1,);
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
\t<link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/main.css\">
    
</head>
<body>
\t{% block content %}
\t{% endblock %}
</body>
</html>", "template/layout.html", "/var/www/html/GCN/app/view/template/layout.html");
    }
}
