<?php

/* message.html */
class __TwigTemplate_17843755926208c26c426412fabd39ac2c384ec7f2d4094dde8a64ec26463d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "message.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<title>信息提示</title>
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap-theme.min.css\">
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t
\t<div class=\"container-fluid\" style=\"margin-top:10%\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t\t    <div class=\"jumbotron\">
\t\t\t    <div class=\"container\">
\t\t    
\t\t\t\t\t<h1>报名成功</h1>
\t\t\t\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>把编号告诉面试官</p>
\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Message/close\" role=\"button\">知道了</a></p>
\t\t\t\t</div>
\t  \t\t</div>
\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  59 => 20,  48 => 11,  45 => 10,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>信息提示</title>
\t<link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap-theme.min.css\">
{% endblock %}

{% block content %}
\t
\t<div class=\"container-fluid\" style=\"margin-top:10%\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t\t    <div class=\"jumbotron\">
\t\t\t    <div class=\"container\">
\t\t    
\t\t\t\t\t<h1>报名成功</h1>
\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t\t<p>把编号告诉面试官</p>
\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg\" href=\"{{ base_url }}Message/close\" role=\"button\">知道了</a></p>
\t\t\t\t</div>
\t  \t\t</div>
\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
{% endblock %}", "message.html", "/var/www/html/GCN/app/view/message.html");
    }
}
