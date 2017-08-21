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
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/main.css\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery.min.js\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/bootstrap/bootstrap.min.js\"></script>
\t";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body>
\t";
        // line 15
        $this->loadTemplate("template/header.html", "template/hflayout.html", 15)->display($context);
        // line 16
        echo "\t<div class=\"container-fluid\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t    \t";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
\t
\t";
        // line 27
        $this->loadTemplate("template/footer.html", "template/hflayout.html", 27)->display($context);
        // line 28
        echo "</body>
</html>";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "\t";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
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
        return array (  88 => 21,  85 => 20,  81 => 12,  78 => 11,  73 => 28,  71 => 27,  64 => 22,  62 => 20,  56 => 16,  54 => 15,  50 => 13,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"UTF-8\">
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
