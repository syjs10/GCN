<?php

/* login.html */
class __TwigTemplate_b3deb78c872b52574da0bbc909a52228aa285cd4f82ba4be01c127d033fc7666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "login.html", 1);
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
        echo "\t<title>登 录</title>
\t
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/doLogin\" method=\"POST\">
\t\t<label for=\"username\">用户名</label>
\t\t<input type=\"text\" name=\"username\" />
\t\t
\t\t<label for=\"password\">密 &nbsp;码</label>
\t\t<input type=\"password\" name=\"password\" />

\t\t<label for=\"verify\">验证码</label>
\t\t<input type=\"text\" name=\"verify\" />
\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify\" alt=\"验证码\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify'\">
\t\t<input type=\"submit\" value=\"登录\" />
\t\t
\t</form>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  41 => 10,  38 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>登 录</title>
\t
{% endblock %}

{% block content %}
\t<form action=\"{{ base_url }}Department/doLogin\" method=\"POST\">
\t\t<label for=\"username\">用户名</label>
\t\t<input type=\"text\" name=\"username\" />
\t\t
\t\t<label for=\"password\">密 &nbsp;码</label>
\t\t<input type=\"password\" name=\"password\" />

\t\t<label for=\"verify\">验证码</label>
\t\t<input type=\"text\" name=\"verify\" />
\t\t<img src=\"{{ base_url }}ShowVerify\" alt=\"验证码\" onclick=\"this.src='{{ base_url }}ShowVerify'\">
\t\t<input type=\"submit\" value=\"登录\" />
\t\t
\t</form>
{% endblock %}", "login.html", "/var/www/html/GCN/app/view/login.html");
    }
}
