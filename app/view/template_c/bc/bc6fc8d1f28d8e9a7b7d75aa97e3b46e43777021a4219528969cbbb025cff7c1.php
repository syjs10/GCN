<?php

/* rootConflictStu.html */
class __TwigTemplate_d1fcee0a22d216160de3f268c874df4c77cf8f4c3cadc53b8910c88e85d6e378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "rootConflictStu.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/layout.html";
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
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "score", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\">上一页</a>
\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
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
        // line 42
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\">下一页</a>
";
    }

    public function getTemplateName()
    {
        return "rootConflictStu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  133 => 39,  129 => 38,  123 => 37,  118 => 34,  101 => 29,  91 => 28,  81 => 27,  71 => 26,  66 => 24,  62 => 23,  58 => 22,  55 => 21,  51 => 20,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


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
\t\t\t\t\t<td>{{ value['name'] }}</td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t<td>{{ value['score'] }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department'] }}\">{{ value['employ_department'] }}</a>
\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department1'] }}\">{{ value['employ_department1'] }}</a>
\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department2'] }}\">{{ value['employ_department2'] }}</a>
\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department3'] }}\">{{ value['employ_department3'] }}</a>
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
{% endblock %}", "rootConflictStu.html", "/var/www/html/GCN/app/view/rootConflictStu.html");
    }
}
