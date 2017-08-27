<?php

/* departmentIndex.html */
class __TwigTemplate_e6d0c5bf22a79b0e8a58a8648a5e3a8a442c75c79649dc452f7a9b763118fa24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "departmentIndex.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/hflayout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<title>部门首页</title>
\t
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"jumbotron\">
\t\t<div class=\"container-fluid\">
\t\t  <div class=\"row\">
\t\t    <div class=\"col-md-2 col-xs-1\"></div>
\t\t    <div class=\"col-md-8 col-xs-10\">
\t\t\t\t<h2>系统使用简介</h2>
\t\t\t\t<p>1.报名阶段:新生报完名会有一个报名号,用于快速找到新生.</p>
\t\t\t\t<p>2.面试阶段:面试阶段主页面是报名新生的列表,点击名字可以查看完整信息,信息页面<span style=\"color:red\">请务必提交免面试官意见和评分</span>,否则在已面试人员里不会出现该学生名字,也无法录取该学生,每个面试部门的面试意见和评分不会相互影响.面试时如果无法快速找到学生可以用其报名时的电话号来查找该学生</p>
\t\t\t\t<p>3.选人阶段:已面试人员中显示了所有面试过的人员,学生按评分高低排序,点击名字可以查看详细信息以及面试官的意见和评分并且可以录取和取消录取.</p>
\t\t\t\t<p>4.冲突人员:如果两个或多个部门的同时选中一个人那么这个人就会进入冲突人员列表,冲突人员可以自行与其他部门商量,也可以在最后的抢人阶段由管理员调剂.</p>
\t\t\t\t<p>5.未选人员:已面试未录取的人员(包含冲突后调剂取消录取的人员)</p>
\t\t\t</div>
\t\t    <div class=\"col-md-2 col-xs-1\"></div>
\t\t  </div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "departmentIndex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>部门首页</title>
\t
{% endblock %}



{% block content %}
\t<div class=\"jumbotron\">
\t\t<div class=\"container-fluid\">
\t\t  <div class=\"row\">
\t\t    <div class=\"col-md-2 col-xs-1\"></div>
\t\t    <div class=\"col-md-8 col-xs-10\">
\t\t\t\t<h2>系统使用简介</h2>
\t\t\t\t<p>1.报名阶段:新生报完名会有一个报名号,用于快速找到新生.</p>
\t\t\t\t<p>2.面试阶段:面试阶段主页面是报名新生的列表,点击名字可以查看完整信息,信息页面<span style=\"color:red\">请务必提交免面试官意见和评分</span>,否则在已面试人员里不会出现该学生名字,也无法录取该学生,每个面试部门的面试意见和评分不会相互影响.面试时如果无法快速找到学生可以用其报名时的电话号来查找该学生</p>
\t\t\t\t<p>3.选人阶段:已面试人员中显示了所有面试过的人员,学生按评分高低排序,点击名字可以查看详细信息以及面试官的意见和评分并且可以录取和取消录取.</p>
\t\t\t\t<p>4.冲突人员:如果两个或多个部门的同时选中一个人那么这个人就会进入冲突人员列表,冲突人员可以自行与其他部门商量,也可以在最后的抢人阶段由管理员调剂.</p>
\t\t\t\t<p>5.未选人员:已面试未录取的人员(包含冲突后调剂取消录取的人员)</p>
\t\t\t</div>
\t\t    <div class=\"col-md-2 col-xs-1\"></div>
\t\t  </div>
\t\t</div>
\t</div>
{% endblock %}", "departmentIndex.html", "/var/www/html/GCN/app/view/departmentIndex.html");
    }
}
