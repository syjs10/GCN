<?php

/* conflictStu.html */
class __TwigTemplate_4ccd1c50938a6fce7506b1e73356aa828e5001156b10271e8554e66d0316a743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "conflictStu.html", 1);
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
        echo "\t<title>冲突人员</title>
\t
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">姓名</th>
\t\t\t\t<th width=\"5%\">性别</th>
\t\t\t\t<th width=\"15%\">电话</th>
\t\t\t\t<th width=\"40%\">其他部门</th>
\t\t\t\t<th width=\"20%\">操作</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody >
\t\t\t\t
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 25
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Student/getStuInfoWithReview/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "phonenum", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 30
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != ($context["name"] ?? null))) {
                // line 31
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array")))) {
                // line 34
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array")))) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t";
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array")))) {
                // line 40
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button onclick=\"location.href='";
            // line 45
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/unhiring/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "'\">取消录取</button>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page \">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getConflictStu/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "\t\t    \t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/getConflictStu/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t<li>
\t\t    \t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getConflictStu/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Next\">
\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t    \t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
";
    }

    public function getTemplateName()
    {
        return "conflictStu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  166 => 63,  153 => 61,  149 => 60,  140 => 56,  132 => 50,  119 => 45,  114 => 42,  108 => 40,  105 => 39,  99 => 37,  96 => 36,  90 => 34,  87 => 33,  81 => 31,  79 => 30,  74 => 28,  70 => 27,  62 => 26,  59 => 25,  55 => 24,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>冲突人员</title>
\t
{% endblock %}



{% block content %}
\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">姓名</th>
\t\t\t\t<th width=\"5%\">性别</th>
\t\t\t\t<th width=\"15%\">电话</th>
\t\t\t\t<th width=\"40%\">其他部门</th>
\t\t\t\t<th width=\"20%\">操作</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody >
\t\t\t\t
\t\t\t{% for value in data %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"{{ base_url }}Student/getStuInfoWithReview/id/{{ value['id'] }}\">{{ value['name'] }}</a></td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t<td>{{ value['phonenum'] }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if value['employ_department'] != name %}
\t\t\t\t\t\t\t{{ value['employ_department'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['employ_department1'] != name and value['employ_department'] != value['employ_department1'] %}
\t\t\t\t\t\t\t{{ value['employ_department1'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['employ_department2'] != name and value['employ_department'] != value['employ_department2'] and value['employ_department1'] != value['employ_department2'] %}
\t\t\t\t\t\t\t{{ value['employ_department2'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['employ_department3'] != name and value['employ_department'] != value['employ_department3'] and value['employ_department1'] != value['employ_department3'] and value['employ_department2'] != value['employ_department3'] %}
\t\t\t\t\t\t\t{{ value['employ_department3'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button onclick=\"location.href='{{ base_url }}Department/unhiring/id/{{ value['id'] }}'\">取消录取</button>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page \">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"{{ base_url }}Department/getConflictStu/page/{{ prePage }}\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t{% for item in 1..num %}
\t\t    \t<li><a href=\"{{ base_url }}Department/getConflictStu/page/{{ item }}\">{{ item }}</a></li>
\t\t\t{% endfor %}
\t\t\t<li>
\t\t    \t<a href=\"{{ base_url }}Department/getConflictStu/page/{{ nextPage }}\" aria-label=\"Next\">
\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t    \t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
{% endblock %}", "conflictStu.html", "/var/www/html/GCN/app/view/conflictStu.html");
    }
}
