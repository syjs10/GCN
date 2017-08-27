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
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "css/bootstrap/bootstrap.min.css\">
\t
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t<div class=\"container container-fluid\">
\t\t<br><br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\" panel panel-info\">
\t\t\t\t  <div class=\"panel-heading\"><h4>部门登录</h4></div>
\t\t\t\t  <div class=\"panel-body\" style=\"padding:30px;\">
\t\t\t\t\t <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/doLogin\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">用&nbsp;户&nbsp;名</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" aria-describedby=\"sizing-addon1\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">验&nbsp;证&nbsp;码</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"verify\" />
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"padding:0;\" id=\"basic-addon2\">
\t\t\t\t\t\t\t\t<img style=\"height:100%;\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify\" alt=\"验证码\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify'\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info btn-lg pull-right\" value=\" 登  录 \" />
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t  </div>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-3\"></div>
\t\t</div>
\t\t
\t\t
\t\t\t
\t</div>
\t
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
        return array (  74 => 35,  55 => 19,  45 => 11,  42 => 10,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>登 录</title>
\t<link rel=\"stylesheet\" href=\"{{ source_url }}css/bootstrap/bootstrap.min.css\">
\t
{% endblock %}

{% block content %}
\t<div class=\"container container-fluid\">
\t\t<br><br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\"></div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\" panel panel-info\">
\t\t\t\t  <div class=\"panel-heading\"><h4>部门登录</h4></div>
\t\t\t\t  <div class=\"panel-body\" style=\"padding:30px;\">
\t\t\t\t\t <form action=\"{{ base_url }}Department/doLogin\" method=\"POST\">
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">用&nbsp;户&nbsp;名</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" aria-describedby=\"sizing-addon1\" />
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">验&nbsp;证&nbsp;码</span>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"verify\" />
\t\t\t\t\t\t\t<span class=\"input-group-addon\" style=\"padding:0;\" id=\"basic-addon2\">
\t\t\t\t\t\t\t\t<img style=\"height:100%;\" src=\"{{ base_url }}ShowVerify\" alt=\"验证码\" onclick=\"this.src='{{ base_url }}ShowVerify'\">
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info btn-lg pull-right\" value=\" 登  录 \" />
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t  </div>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-3\"></div>
\t\t</div>
\t\t
\t\t
\t\t\t
\t</div>
\t
{% endblock %}", "login.html", "/var/www/html/GCN/app/view/login.html");
    }
}
