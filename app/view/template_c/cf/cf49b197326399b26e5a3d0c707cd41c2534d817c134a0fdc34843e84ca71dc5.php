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
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/main.css\">
    <!-- <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery.min.js\"></script> -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/bootstrap/bootstrap.min.js\"></script>
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
        return "template/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  64 => 6,  61 => 5,  56 => 17,  54 => 15,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  29 => 7,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

\t{% block head %}
\t{% endblock %}
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/main.css\">
    <!-- <script src=\"{{ source_url }}js/jquery.min.js\"></script> -->
    <script src=\"{{ source_url }}js/bootstrap/bootstrap.min.js\"></script>
</head>
<body>
\t{% block content %}
\t{% endblock %}
</body>
</html>", "template/layout.html", "/var/www/html/GCN/app/view/template/layout.html");
    }
}
