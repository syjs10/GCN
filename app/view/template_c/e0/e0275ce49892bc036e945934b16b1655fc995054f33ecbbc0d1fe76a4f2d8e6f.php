<?php

/* interview.html */
class __TwigTemplate_03d7b297406899dbc86f863c0bc9633f855959db19b7aa38cb2a1f89e1aac934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "interview.html", 1);
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
        echo "\t<title>面试</title>
\t
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/Department/findStuI/\" method=\"post\" class=\"form-inline navbar-right\">
\t\t<input type=\"text\" placeholder=\"输入手机号\" name=\"phoneNum\" class=\"form-control \">
\t\t<input type=\"submit\" class=\"btn btn-default\">\t
\t</form>
\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">编号</th>
\t\t\t\t<th width=\"30%\">姓名</th>
\t\t\t\t<th width=\"30%\">性别</th>
\t\t\t\t<th width=\"30%\">其他部门</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 26
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Student/getStuInfo/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 31
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != ($context["name"] ?? null))) {
                // line 32
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array")))) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array")))) {
                // line 38
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t";
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array")))) {
                // line 41
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "\t\t    \t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/interview/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t<li>
\t\t    \t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview/page/";
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
        return "interview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  162 => 60,  149 => 58,  145 => 57,  136 => 53,  128 => 47,  119 => 43,  113 => 41,  110 => 40,  104 => 38,  101 => 37,  95 => 35,  92 => 34,  86 => 32,  84 => 31,  79 => 29,  71 => 28,  67 => 27,  64 => 26,  60 => 25,  41 => 10,  38 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>面试</title>
\t
{% endblock %}

{% block content %}
\t<form action=\"{{ base_url }}/Department/findStuI/\" method=\"post\" class=\"form-inline navbar-right\">
\t\t<input type=\"text\" placeholder=\"输入手机号\" name=\"phoneNum\" class=\"form-control \">
\t\t<input type=\"submit\" class=\"btn btn-default\">\t
\t</form>
\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">编号</th>
\t\t\t\t<th width=\"30%\">姓名</th>
\t\t\t\t<th width=\"30%\">性别</th>
\t\t\t\t<th width=\"30%\">其他部门</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t
\t\t\t{% for value in data %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ value['id'] }}</td>
\t\t\t\t\t<td><a href=\"{{ base_url }}Student/getStuInfo/id/{{ value['id'] }}\">{{ value['name'] }}</a></td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if value['department0'] != name %}
\t\t\t\t\t\t\t{{ value['department0'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['department1'] != name and value['department0'] != value['department1'] %}
\t\t\t\t\t\t\t{{ value['department1'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['department2'] != name and value['department0'] != value['department2'] and value['department1'] != value['department2'] %}
\t\t\t\t\t\t\t{{ value['department2'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if value['department3'] != name and value['department0'] != value['department3'] and value['department1'] != value['department3'] and value['department2'] != value['department3'] %}
\t\t\t\t\t\t\t{{ value['department3'] }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"{{ base_url }}Department/interview/page/{{ prePage }}\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t{% for item in 1..num %}
\t\t    \t<li><a href=\"{{ base_url }}Department/interview/page/{{ item }}\">{{ item }}</a></li>
\t\t\t{% endfor %}
\t\t\t<li>
\t\t    \t<a href=\"{{ base_url }}Department/interview/page/{{ nextPage }}\" aria-label=\"Next\">
\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t    \t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
{% endblock %}", "interview.html", "/var/www/html/GCN/app/view/interview.html");
    }
}
