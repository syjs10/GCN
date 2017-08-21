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
        echo "
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t  <div class=\"container\">
\t\t  <div class=\"collapse navbar-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t    \t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/index\">首页</a></li>
\t\t    \t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu\">冲突人员</a></li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t    \t<li class=\"dropdown \">
\t\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t\t    \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/logout\">退出登录</a></li>
\t\t    \t\t</ul>
\t\t    \t</li>
\t\t    </ul>
\t\t   </div>
\t  </div>
\t</nav>
\t<div class=\"container-fluid\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t    \t
\t\t\t<table class=\"table table-hover table-bordered\">
\t\t\t\t<tbody >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t\t\t<th>性别</th>
\t\t\t\t\t\t\t<th>其他部门</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 44
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department3", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t    \t<li>
\t\t\t\t    \t<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t\t\t    \t</a>
\t\t\t    \t</li>
\t\t\t    \t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 67
            echo "\t\t\t\t    \t<li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/conflictStu/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t<li>
\t\t\t\t    \t<a href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Next\">
\t\t\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t\t\t    \t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
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
        return array (  186 => 70,  183 => 69,  170 => 67,  166 => 66,  157 => 62,  149 => 56,  132 => 51,  122 => 50,  112 => 49,  102 => 48,  97 => 46,  93 => 45,  90 => 44,  86 => 43,  64 => 24,  59 => 22,  52 => 18,  48 => 17,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>Index Page</title>
\t
{% endblock %}



{% block content %}

\t<nav class=\"navbar navbar-default navbar-static-top\">
\t  <div class=\"container\">
\t\t  <div class=\"collapse navbar-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t    \t<li><a href=\"{{ base_url }}Root/index\">首页</a></li>
\t\t    \t<li><a href=\"{{ base_url }}Root/conflictStu\">冲突人员</a></li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t    \t<li class=\"dropdown \">
\t\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ name }} <span class=\"caret\"></span></a>
\t\t    \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"{{ base_url }}Root/logout\">退出登录</a></li>
\t\t    \t\t</ul>
\t\t    \t</li>
\t\t    </ul>
\t\t   </div>
\t  </div>
\t</nav>
\t<div class=\"container-fluid\">
\t  <div class=\"row\">
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t    <div class=\"col-md-8 col-xs-10\">
\t    \t
\t\t\t<table class=\"table table-hover table-bordered\">
\t\t\t\t<tbody >
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>姓名</th>
\t\t\t\t\t\t\t<th>性别</th>
\t\t\t\t\t\t\t<th>其他部门</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% for value in data %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ value['name'] }}</td>
\t\t\t\t\t\t\t<td>{{ value['gender'] }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department'] }}\">{{ value['employ_department'] }}</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department1'] }}\">{{ value['employ_department1'] }}</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department2'] }}\">{{ value['employ_department2'] }}</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['employ_department3'] }}\">{{ value['employ_department3'] }}</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t    \t<li>
\t\t\t\t    \t<a href=\"{{ base_url }}Root/conflictStu/page/{{ prePage }}\" aria-label=\"Previous\">
\t\t\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t\t\t    \t</a>
\t\t\t    \t</li>
\t\t\t    \t{% for item in 1..num %}
\t\t\t\t    \t<li><a href=\"{{ base_url }}Root/conflictStu/page/{{ item }}\">{{ item }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<li>
\t\t\t\t    \t<a href=\"{{ base_url }}Root/conflictStu/page/{{ nextPage }}\" aria-label=\"Next\">
\t\t\t\t    \t\t<span aria-hidden=\"true\">下一页</span>
\t\t\t\t    \t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t    </div>
\t    <div class=\"col-md-2 col-xs-1\"></div>
\t  </div>
\t</div>
{% endblock %}", "rootConflictStu.html", "/var/www/html/GCN/app/view/rootConflictStu.html");
    }
}
