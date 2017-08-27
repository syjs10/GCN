<?php

/* root.html */
class __TwigTemplate_08d0a08057678d3ac449654d9ce02ae99325bb4bdc048286632636933c3befb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("template/layout.html", "root.html", 6);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "\t
\t
\t";
        // line 4
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t<title>管理员页面</title>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery.min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/bootstrap/bootstrap.min.js\"></script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t  <div class=\"container\">
\t\t  <div class=\"collapse navbar-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t    \t<li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/index\">首页</a></li>
\t\t    \t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu\">冲突人员</a></li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t    \t<li class=\"dropdown \">
\t\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t\t    \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/logout\">退出登录</a></li>
\t\t    \t\t</ul>
\t\t    \t</li>
\t\t    </ul>
\t\t   </div>
\t  </div>
\t</nav>
";
    }

    public function getTemplateName()
    {
        return "root.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  80 => 26,  73 => 22,  69 => 21,  62 => 16,  59 => 15,  53 => 12,  49 => 11,  46 => 10,  43 => 9,  37 => 4,  33 => 2,  30 => 1,  11 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
\t
\t
\t{{ name }}
{% endblock %}
{% extends \"template/layout.html\" %}


{% block head %}
\t<title>管理员页面</title>
\t<script src=\"{{ source_url }}js/jquery.min.js\"></script>
    <script src=\"{{ source_url }}js/bootstrap/bootstrap.min.js\"></script>
{% endblock %}

{% block content %}

\t<nav class=\"navbar navbar-default navbar-static-top\">
\t  <div class=\"container\">
\t\t  <div class=\"collapse navbar-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t    \t<li><a href=\"{{ base_url }}Root/index\">首页</a></li>
\t\t    \t<li><a href=\"{{ base_url }}Root/conflictStu\">冲突人员</a></li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t    \t<li class=\"dropdown \">
\t\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ name }} <span class=\"caret\"></span></a>
\t\t    \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"{{ base_url }}Root/logout\">退出登录</a></li>
\t\t    \t\t</ul>
\t\t    \t</li>
\t\t    </ul>
\t\t   </div>
\t  </div>
\t</nav>
{% endblock %}", "root.html", "/var/www/html/GCN/app/view/root.html");
    }
}
