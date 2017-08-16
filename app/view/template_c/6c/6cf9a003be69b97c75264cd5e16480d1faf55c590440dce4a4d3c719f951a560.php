<?php

/* choose.html */
class __TwigTemplate_708b4c65e006cd27e7232f92f293a8b1c2b24b891b10fd4bd56fd0e29871889b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "choose.html", 1);
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
        echo "\t<title>已面试人员列表</title>
\t
\t<style></style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t<table class=\"table table-hover table-bordered\">
\t\t<tbody  >
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"20%\">姓名</th>
\t\t\t\t\t<th width=\"20%\">性别</th>
\t\t\t\t\t<th width=\"20%\">评分</th>
\t\t\t\t\t<th width=\"40%\">其他部门</th>
\t\t\t\t</tr>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Student/getStuInfoWithReview/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "score", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 27
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != ($context["name"] ?? null))) {
                // line 28
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array")))) {
                // line 31
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array")))) {
                // line 34
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t";
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array")))) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "\t\t    \t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/choose/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t<li>
\t\t    \t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
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
        return "choose.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  154 => 56,  141 => 54,  137 => 53,  128 => 49,  120 => 43,  111 => 39,  105 => 37,  102 => 36,  96 => 34,  93 => 33,  87 => 31,  84 => 30,  78 => 28,  76 => 27,  71 => 25,  67 => 24,  59 => 23,  56 => 22,  52 => 21,  42 => 13,  39 => 12,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>已面试人员列表</title>
\t
\t<style></style>
{% endblock %}



{% block content %}
\t<table class=\"table table-hover table-bordered\">
\t\t<tbody  >
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"20%\">姓名</th>
\t\t\t\t\t<th width=\"20%\">性别</th>
\t\t\t\t\t<th width=\"20%\">评分</th>
\t\t\t\t\t<th width=\"40%\">其他部门</th>
\t\t\t\t</tr>
\t\t\t{% for value in data %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"{{ base_url }}Student/getStuInfoWithReview/id/{{ value['id'] }}\">{{ value['name'] }}</a></td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t<td>{{ value['score'] }}</td>
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
\t\t    \t<a href=\"{{ base_url }}Department/choose/page/{{ prePage }}\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t{% for item in 1..num %}
\t\t    \t<li><a href=\"{{ base_url }}Department/choose/page/{{ item }}\">{{ item }}</a></li>
\t\t\t{% endfor %}
\t\t\t<li>
\t\t    \t<a href=\"{{ base_url }}Department/choose/page/{{ nextPage }}\" aria-label=\"Next\">
\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t    \t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
{% endblock %}", "choose.html", "/var/www/html/GCN/app/view/choose.html");
    }
}
