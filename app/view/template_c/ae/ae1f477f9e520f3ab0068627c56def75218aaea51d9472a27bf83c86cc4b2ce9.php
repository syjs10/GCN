<?php

/* template/header.html */
class __TwigTemplate_ec3880433968c56fe7768d3f1181bcaa0793f47e71136c0bd82a089c240e6837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"navbar navbar-default navbar-static-top\">
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
\t    \t
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
</nav>
";
    }

    public function getTemplateName()
    {
        return "template/header.html";
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  70 => 21,  65 => 19,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  40 => 9,  35 => 7,  29 => 3,  23 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block header %}
<nav class=\"navbar navbar-default navbar-static-top\">
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
\t    \t
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
</nav>
{% endblock %}", "template/header.html", "/var/www/html/GCN/app/view/template/header.html");
    }
}
