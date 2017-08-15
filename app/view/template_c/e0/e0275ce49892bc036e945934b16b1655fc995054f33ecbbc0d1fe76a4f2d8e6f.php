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
        echo "\t<title>Index Page</title>
\t
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<form action=\"findStuI/\" method=\"post\">
\t\t<input type=\"text\" placeholder=\"输入手机号\" name=\"phoneNum\">
\t\t<input type=\"submit\">\t
\t</form>
\t<table>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t<tr>
\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t<th>性别</th>
\t\t\t\t\t<th>其他部门</th>
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
            echo "Student/getStuInfo/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 26
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != ($context["name"] ?? null))) {
                // line 27
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array")))) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t";
            if ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array")))) {
                // line 33
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t";
            if (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array") != ($context["name"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"))) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array") != twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array")))) {
                // line 36
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"), "html", null, true);
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
        echo "Department/interview/page/";
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
            echo "Department/interview/page/";
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
        echo "Department/interview/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\">下一页</a>
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
        return array (  147 => 50,  133 => 47,  129 => 46,  123 => 45,  118 => 42,  109 => 38,  103 => 36,  100 => 35,  94 => 33,  91 => 32,  85 => 30,  82 => 29,  76 => 27,  74 => 26,  69 => 24,  61 => 23,  58 => 22,  54 => 21,  41 => 10,  38 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>Index Page</title>
\t
{% endblock %}

{% block content %}
\t<form action=\"findStuI/\" method=\"post\">
\t\t<input type=\"text\" placeholder=\"输入手机号\" name=\"phoneNum\">
\t\t<input type=\"submit\">\t
\t</form>
\t<table>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t<tr>
\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t<th>性别</th>
\t\t\t\t\t<th>其他部门</th>
\t\t\t\t</tr>
\t\t\t{% for value in data %}
\t\t\t\t<tr>
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
\t<a href=\"{{ base_url }}Department/interview/page/{{ prePage }}\">上一页</a>
\t\t{% for item in 1..num %}
\t\t    <a href=\"{{ base_url }}Department/interview/page/{{ item }}\">{{ item }}</a>
\t\t    &nbsp;
\t\t{% endfor %}
\t<a href=\"{{ base_url }}Department/interview/page/{{ nextPage }}\">下一页</a>
{% endblock %}", "interview.html", "/var/www/html/GCN/app/view/interview.html");
    }
}
