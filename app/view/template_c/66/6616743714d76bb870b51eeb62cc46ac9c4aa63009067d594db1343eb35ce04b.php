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
        echo "\t<title>Index Page</title>
\t
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/index\">首页</a>
\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu\">冲突人员</a> 
\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/logout\">退出登录</a>
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
        return array (  64 => 17,  60 => 16,  55 => 15,  52 => 14,  46 => 10,  43 => 9,  37 => 4,  33 => 2,  30 => 1,  11 => 6,);
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
\t<title>Index Page</title>
\t
{% endblock %}

{% block content %}
\t<a href=\"{{ base_url }}Root/index\">首页</a>
\t<a href=\"{{ base_url }}Root/conflictStu\">冲突人员</a> 
\t<a href=\"{{ base_url }}Root/logout\">退出登录</a>
{% endblock %}", "root.html", "/var/www/html/GCN/app/view/root.html");
    }
}
