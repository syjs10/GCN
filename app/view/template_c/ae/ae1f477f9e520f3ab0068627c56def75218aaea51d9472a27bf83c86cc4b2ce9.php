<?php

/* template/header.html */
class __TwigTemplate_ec3880433968c56fe7768d3f1181bcaa0793f47e71136c0bd82a089c240e6837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "
<!-- <nav class=\"navbar navbar-default navbar-static-top\">
  <div class=\"container\">
\t  <div class=\"collapse navbar-collapse\">
\t    <ul class=\"nav navbar-nav\">
\t    \t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/index\">首页</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">面试阶段</p>
\t    \t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview\">已报名人员</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">选人阶段</p>
\t    \t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose\">已面试人员</a></li>
\t\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getConflictStu\">冲突人员</a></li>
\t\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getHiredStu\">已选人员</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getUnhiredStu\">未选人员</a></li>

\t    </ul>
\t    <ul class=\"nav navbar-nav navbar-right\">
\t    \t<li class=\"dropdown \">
\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t    \t\t<ul class=\"dropdown-menu\">
\t    \t\t\t<li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/rePassword\">修改密码</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/logout\">退出登录</a></li>
\t    \t\t</ul>
\t    \t</li>
\t    </ul>
\t   </div>
  </div>
</nav> -->
<nav class=\"navbar navbar-default\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t<div class=\"navbar-header\">
\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
\t\t\t\tdata-target=\"#example-navbar-collapse\">
\t\t\t<span class=\"sr-only\">切换导航</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>
\t\t<a class=\"navbar-brand\" href=\"#\">菜鸟教程</a>
\t</div>
\t<div class=\"collapse navbar-collapse\" id=\"example-navbar-collapse\">
\t\t<ul class=\"nav navbar-nav\">
\t    \t<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/index\">首页</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">面试阶段</p>
\t    \t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview\">已报名人员</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">选人阶段</p>
\t    \t<li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose\">已面试人员</a></li>
\t\t\t<li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getConflictStu\">冲突人员</a></li>
\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getHiredStu\">已选人员</a></li>
\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getUnhiredStu\">未选人员</a></li>

\t    </ul>
\t    <ul class=\"nav navbar-nav navbar-right\">
\t    \t<li class=\"dropdown \">
\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 55
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t    \t\t<ul class=\"dropdown-menu\">
\t    \t\t\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/rePassword\">修改密码</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/logout\">退出登录</a></li>
\t    \t\t</ul>
\t    \t</li>
\t    </ul>
\t</div>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "template/header.html";
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  131 => 57,  126 => 55,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  101 => 45,  96 => 43,  72 => 22,  68 => 21,  63 => 19,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  38 => 9,  33 => 7,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block  head%}

<!-- <nav class=\"navbar navbar-default navbar-static-top\">
  <div class=\"container\">
\t  <div class=\"collapse navbar-collapse\">
\t    <ul class=\"nav navbar-nav\">
\t    \t<li><a href=\"{{ base_url }}Department/index\">首页</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">面试阶段</p>
\t    \t<li><a href=\"{{ base_url }}Department/interview\">已报名人员</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">选人阶段</p>
\t    \t<li><a href=\"{{ base_url }}Department/choose\">已面试人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getConflictStu\">冲突人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getHiredStu\">已选人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getUnhiredStu\">未选人员</a></li>

\t    </ul>
\t    <ul class=\"nav navbar-nav navbar-right\">
\t    \t<li class=\"dropdown \">
\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ name }} <span class=\"caret\"></span></a>
\t    \t\t<ul class=\"dropdown-menu\">
\t    \t\t\t<li><a href=\"{{ base_url }}Department/rePassword\">修改密码</a></li>
\t\t\t\t\t<li><a href=\"{{ base_url }}Department/logout\">退出登录</a></li>
\t    \t\t</ul>
\t    \t</li>
\t    </ul>
\t   </div>
  </div>
</nav> -->
<nav class=\"navbar navbar-default\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t<div class=\"navbar-header\">
\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
\t\t\t\tdata-target=\"#example-navbar-collapse\">
\t\t\t<span class=\"sr-only\">切换导航</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>
\t\t<a class=\"navbar-brand\" href=\"#\">菜鸟教程</a>
\t</div>
\t<div class=\"collapse navbar-collapse\" id=\"example-navbar-collapse\">
\t\t<ul class=\"nav navbar-nav\">
\t    \t<li><a href=\"{{ base_url }}Department/index\">首页</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">面试阶段</p>
\t    \t<li><a href=\"{{ base_url }}Department/interview\">已报名人员</a></li>
\t    \t<p class=\"navbar-text\" style=\"color:#ccc;\">选人阶段</p>
\t    \t<li><a href=\"{{ base_url }}Department/choose\">已面试人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getConflictStu\">冲突人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getHiredStu\">已选人员</a></li>
\t\t\t<li><a href=\"{{ base_url }}Department/getUnhiredStu\">未选人员</a></li>

\t    </ul>
\t    <ul class=\"nav navbar-nav navbar-right\">
\t    \t<li class=\"dropdown \">
\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ name }} <span class=\"caret\"></span></a>
\t    \t\t<ul class=\"dropdown-menu\">
\t    \t\t\t<li><a href=\"{{ base_url }}Department/rePassword\">修改密码</a></li>
\t\t\t\t\t<li><a href=\"{{ base_url }}Department/logout\">退出登录</a></li>
\t    \t\t</ul>
\t    \t</li>
\t    </ul>
\t</div>
\t</div>
</nav>
{% endblock %}", "template/header.html", "/var/www/html/GCN/app/view/template/header.html");
    }
}
