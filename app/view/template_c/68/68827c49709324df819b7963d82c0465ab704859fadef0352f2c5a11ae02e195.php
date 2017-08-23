<?php

/* template/hflayout.html */
class __TwigTemplate_f1a11b877953b4c22c3c1793a9a1ccb5ce441744cc469432624e74946a3e45d9 extends Twig_Template
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
\t<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"format-detection\" content=\"telephone=no\">
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
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery.min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/bootstrap/bootstrap.min.js\"></script>
\t";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>
<body>
\t";
        // line 17
        $this->loadTemplate("template/header.html", "template/hflayout.html", 17)->display($context);
        // line 18
        echo "\t<div class=\"container-fluid\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t    \t";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
\t
\t";
        // line 29
        $this->loadTemplate("template/footer.html", "template/hflayout.html", 29)->display($context);
        // line 30
        echo "</body>
</html>";
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "\t";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t";
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
        return array (  90 => 23,  87 => 22,  83 => 14,  80 => 13,  75 => 30,  73 => 29,  66 => 24,  64 => 22,  58 => 18,  56 => 17,  52 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"format-detection\" content=\"telephone=no\">
\t<link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/main.css\">
    <script src=\"{{ source_url }}js/jquery.min.js\"></script>
    <script src=\"{{ source_url }}js/bootstrap/bootstrap.min.js\"></script>
\t{% block head %}
\t{% endblock %}
</head>
<body>
\t{% include \"template/header.html\" %}
\t<div class=\"container-fluid\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t    \t{% block content %}
\t\t\t{% endblock %}
\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
\t
\t{% include \"template/footer.html\" %}
</body>
</html>", "template/hflayout.html", "/var/www/html/GCN/app/view/template/hflayout.html");
    }
}
