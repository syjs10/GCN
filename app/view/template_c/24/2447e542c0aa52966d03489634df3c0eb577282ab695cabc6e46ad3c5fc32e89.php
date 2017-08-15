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
        echo "\t<title>Index Page</title>
\t
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<table>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t<tr>
\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t<th>性别</th>
\t\t\t\t\t<th>评分</th>
\t\t\t\t\t<th>其他部门</th>
\t\t\t\t</tr>
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 21
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Student/getStuInfoWithReview/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "score", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 26
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != ($context["name"] ?? null))) {
                // line 27
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array")))) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array")))) {
                // line 33
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t";
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array")))) {
                // line 36
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\">上一页</a>
\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "\t\t    <a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/choose/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a>
\t\t    &nbsp;
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\">下一页</a>
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
        return array (  148 => 50,  134 => 47,  130 => 46,  124 => 45,  119 => 42,  110 => 38,  104 => 36,  101 => 35,  95 => 33,  92 => 32,  86 => 30,  83 => 29,  77 => 27,  75 => 26,  70 => 24,  66 => 23,  58 => 22,  55 => 21,  51 => 20,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>Index Page</title>
\t
{% endblock %}



{% block content %}
\t<table>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t<tr>
\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t<th>性别</th>
\t\t\t\t\t<th>评分</th>
\t\t\t\t\t<th>其他部门</th>
\t\t\t\t</tr>
\t\t\t{% for value in data %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"{{ base_url }}Student/getStuInfoWithReview/id/{{ value['id'] }}\">{{ value['name'] }}</a></td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t<td>{{ value['score'] }}</td>
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
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t
\t\t</tbody>
\t</table>
\t<a href=\"{{ base_url }}Department/choose/page/{{ prePage }}\">上一页</a>
\t\t{% for item in 1..num %}
\t\t    <a href=\"{{ base_url }}Department/choose/page/{{ item }}\">{{ item }}</a>
\t\t    &nbsp;
\t\t{% endfor %}
\t<a href=\"{{ base_url }}Department/choose/page/{{ nextPage }}\">下一页</a>
{% endblock %}", "conflictStu.html", "/var/www/html/GCN/app/view/conflictStu.html");
    }
}
