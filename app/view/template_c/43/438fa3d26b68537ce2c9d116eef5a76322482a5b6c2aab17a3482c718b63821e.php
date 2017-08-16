<?php

/* unhiredStu.html */
class __TwigTemplate_f3fe346c44308c77509987a6b78f48e74e421305a492687cdaf21a4f5db79075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "unhiredStu.html", 1);
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
        echo "\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"20%\">姓名</th>
\t\t\t\t<th width=\"20%\">性别</th>
\t\t\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Student/getStuInfoWithReview/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getUnhiredStu/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "\t\t    \t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Department/getUnhiredStu/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t<li>
\t\t    \t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/getUnhiredStu/page/";
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
        return "unhiredStu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  113 => 43,  100 => 41,  96 => 40,  87 => 36,  79 => 30,  68 => 25,  60 => 24,  57 => 23,  53 => 22,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>Index Page</title>
\t
{% endblock %}



{% block content %}
\t<table class=\"table table-hover table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"20%\">姓名</th>
\t\t\t\t<th width=\"20%\">性别</th>
\t\t\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody style=\"text-align:center;\">
\t\t\t\t
\t\t\t{% for value in data %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"{{ base_url }}Student/getStuInfoWithReview/id/{{ value['id'] }}\">{{ value['name'] }}</a></td>
\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t
\t\t</tbody>
\t</table>
\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t<ul class=\"pagination\">
\t    \t<li>
\t\t    \t<a href=\"{{ base_url }}Department/getUnhiredStu/page/{{ prePage }}\" aria-label=\"Previous\">
\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t    \t</a>
\t    \t</li>
\t    \t{% for item in 1..num %}
\t\t    \t<li><a href=\"{{ base_url }}Department/getUnhiredStu/page/{{ item }}\">{{ item }}</a></li>
\t\t\t{% endfor %}
\t\t\t<li>
\t\t    \t<a href=\"{{ base_url }}Department/getUnhiredStu/page/{{ nextPage }}\" aria-label=\"Next\">
\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t    \t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
{% endblock %}", "unhiredStu.html", "/var/www/html/GCN/app/view/unhiredStu.html");
    }
}
