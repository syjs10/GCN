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
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/index\">首页</a>
\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview\">面试阶段</a>
\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose\">选人阶段</a>
\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getConflictStu\">冲突人员</a>
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getHiredStu\">已选人员</a>
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getUnhiredStu\">未选人员</a>
\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/rePassword\">修改密码</a>
\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/logout\">退出登录</a>
\t
\t";
        // line 11
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "template/header.html";
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  35 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
\t<a href=\"{{ base_url }}Department/index\">首页</a>
\t<a href=\"{{ base_url }}Department/interview\">面试阶段</a>
\t<a href=\"{{ base_url }}Department/choose\">选人阶段</a>
\t<a href=\"{{ base_url }}Department/getConflictStu\">冲突人员</a>
\t<a href=\"{{ base_url }}Department/getHiredStu\">已选人员</a>
\t<a href=\"{{ base_url }}Department/getUnhiredStu\">未选人员</a>
\t<a href=\"{{ base_url }}Department/rePassword\">修改密码</a>
\t<a href=\"{{ base_url }}Department/logout\">退出登录</a>
\t
\t{{ name }}
{% endblock %}", "template/header.html", "/var/www/html/GCN/app/view/template/header.html");
    }
}
