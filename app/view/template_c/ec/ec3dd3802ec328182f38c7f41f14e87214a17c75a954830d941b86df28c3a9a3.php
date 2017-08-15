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
        echo "    
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <table>
    \t<tbody>
    \t\t<tr>
    \t\t\t<td>姓名</td>
    \t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>学号</td>
    \t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "gender", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>性别</td>
    \t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "studentid", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>专业班级</td>
    \t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "class", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>手机</td>
    \t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "phonenum", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>QQ</td>
    \t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "qqnum", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>其他部门</td>
    \t\t\t<td>
\t\t\t\t\t";
        // line 37
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != ($context["name"] ?? null))) {
            // line 38
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array")))) {
            // line 41
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t";
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array")))) {
            // line 44
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t";
        if (((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array")))) {
            // line 47
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "department3", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 49
        echo "    \t\t\t</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td>自我介绍</td>
    \t\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "introduction", array(), "array"), "html", null, true);
        echo "</td>
    \t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>面试官评价</td>
\t\t\t\t<td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "review", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>评分</td>
\t\t\t\t<td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "score", array(), "array"), "html", null, true);
        echo "</td>
\t\t\t</tr>
    \t</tbody>
    </table>
    <button onclick=\"location.href='";
        // line 65
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/hiring/id/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array(), "array"), "html", null, true);
        echo "'\">录取</button>
    <button onclick=\"location.href='";
        // line 66
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
        return array (  157 => 66,  151 => 65,  144 => 61,  137 => 57,  130 => 53,  124 => 49,  118 => 47,  115 => 46,  109 => 44,  106 => 43,  100 => 41,  97 => 40,  91 => 38,  89 => 37,  81 => 32,  74 => 28,  67 => 24,  60 => 20,  53 => 16,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template/hflayout.html' %}

{% block head %}
    
{% endblock %}

{% block content %}
    <table>
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
