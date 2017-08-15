<?php

/* stuInfo.html */
class __TwigTemplate_78d8f45e11f0f51cc5fb616c27f779e9682b6104389c4c595aee0f75ffe6b59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "stuInfo.html", 1);
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
    \t\t<form action=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/putStuReview\" method=\"post\">
\t\t\t\t<tr>
\t\t\t\t\t<td>面试官评价</td>
\t\t\t\t\t<td><textarea name=\"review\" cols=\"30\" rows=\"10\"></textarea></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>评分</td>
\t\t\t\t\t<td><input type=\"text\" name=\"score\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type=\"hidden\" name = \"id\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array(), "array"), "html", null, true);
        echo "\"></td>
\t\t\t\t\t<td><input type=\"submit\" value=\"提交\"></td>
\t\t\t\t</tr>
\t\t\t</form>
    \t</tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "stuInfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  135 => 55,  130 => 53,  124 => 49,  118 => 47,  115 => 46,  109 => 44,  106 => 43,  100 => 41,  97 => 40,  91 => 38,  89 => 37,  81 => 32,  74 => 28,  67 => 24,  60 => 20,  53 => 16,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    \t\t<form action=\"{{ base_url }}Department/putStuReview\" method=\"post\">
\t\t\t\t<tr>
\t\t\t\t\t<td>面试官评价</td>
\t\t\t\t\t<td><textarea name=\"review\" cols=\"30\" rows=\"10\"></textarea></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>评分</td>
\t\t\t\t\t<td><input type=\"text\" name=\"score\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type=\"hidden\" name = \"id\" value=\"{{ data['id'] }}\"></td>
\t\t\t\t\t<td><input type=\"submit\" value=\"提交\"></td>
\t\t\t\t</tr>
\t\t\t</form>
    \t</tbody>
    </table>
{% endblock %}", "stuInfo.html", "/var/www/html/GCN/app/view/stuInfo.html");
    }
}
