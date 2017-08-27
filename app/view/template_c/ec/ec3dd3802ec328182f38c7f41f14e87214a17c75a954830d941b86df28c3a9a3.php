<?php

/* stuInfoWithReview.html */
class __TwigTemplate_c30f24088f5ba28d1811575541ccc0f0a419105dc1f5717a85964902e38538d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "stuInfoWithReview.html", 1);
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <title>学生信息</title>
    
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <table class=\"table table-hover table-bordered\">
    \t<tbody>
    \t\t<tr>
    \t\t\t<td>姓名</td>
    \t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>学号</td>
    \t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "gender", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>性别</td>
    \t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "studentid", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>专业班级</td>
    \t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "class", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>手机</td>
    \t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "phonenum", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>QQ</td>
    \t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "qqnum", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>其他部门</td>
    \t\t\t<td>
\t\t\t\t\t";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != ($context["name"] ?? null))) {
            // line 39
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array")))) {
            // line 42
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array")))) {
            // line 45
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t";
        if (((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array")))) {
            // line 48
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 50
        echo "    \t\t\t</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>自我介绍</td>
    \t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "introduction", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>面试官评价</td>
\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "review", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>评分</td>
\t\t\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "score", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t</tr>
    \t</tbody>
    </table>
    <button onclick=\"location.href='";
        // line 66
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/hiring/id/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array(), "array"), "html", null, true);
        echo "'\">录取</button>
    <button onclick=\"location.href='";
        // line 67
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/unhiring/id/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array(), "array"), "html", null, true);
        echo "'\">取消录取</button>
";
    }

    public function getTemplateName()
    {
        return "stuInfoWithReview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 67,  152 => 66,  145 => 62,  138 => 58,  131 => 54,  125 => 50,  119 => 48,  116 => 47,  110 => 45,  107 => 44,  101 => 42,  98 => 41,  92 => 39,  90 => 38,  82 => 33,  75 => 29,  68 => 25,  61 => 21,  54 => 17,  47 => 13,  41 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template/hflayout.html' %}

{% block head %}
    <title>学生信息</title>
    
{% endblock %}

{% block content %}
    <table class=\"table table-hover table-bordered\">
    \t<tbody>
    \t\t<tr>
    \t\t\t<td>姓名</td>
    \t\t\t<td>{{ data['name'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>学号</td>
    \t\t\t<td>{{ data['gender'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>性别</td>
    \t\t\t<td>{{ data['studentid'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>专业班级</td>
    \t\t\t<td>{{ data['class'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>手机</td>
    \t\t\t<td>{{ data['phonenum'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>QQ</td>
    \t\t\t<td>{{ data['qqnum'] }}</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>其他部门</td>
    \t\t\t<td>
\t\t\t\t\t{% if data['department0'] != name %}
\t\t\t\t\t\t{{ data['department0'] }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if data['department1'] != name and data['department0'] != data['department1'] %}
\t\t\t\t\t\t{{ data['department1'] }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if data['department2'] != name and data['department0'] != data['department2'] and data['department1'] != data['department2'] %}
\t\t\t\t\t\t{{ data['department2'] }}
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if data['department3'] != name and data['department0'] != data['department3'] and data['department1'] != data['department3'] and data['department2'] != data['department3'] %}
\t\t\t\t\t\t{{ data['department3'] }}
\t\t\t\t\t{% endif %}
    \t\t\t</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>自我介绍</td>
    \t\t\t<td>{{ data['introduction'] }}</td>
    \t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>面试官评价</td>
\t\t\t\t<td>{{ data['review'] }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>评分</td>
\t\t\t\t<td>{{ data['score'] }}</td>
\t\t\t</tr>
    \t</tbody>
    </table>
    <button onclick=\"location.href='{{ base_url }}Department/hiring/id/{{ data['id'] }}'\">录取</button>
    <button onclick=\"location.href='{{ base_url }}Department/unhiring/id/{{ data['id'] }}'\">取消录取</button>
{% endblock %}", "stuInfoWithReview.html", "/var/www/html/GCN/app/view/stuInfoWithReview.html");
    }
}
