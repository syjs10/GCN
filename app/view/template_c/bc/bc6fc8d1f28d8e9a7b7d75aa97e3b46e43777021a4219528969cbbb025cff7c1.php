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
        echo "\t<title>冲突人员</title>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery.min.js\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/bootstrap/bootstrap.min.js\"></script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
\t<nav class=\"navbar navbar-default navbar-static-top\">
\t  <div class=\"container\">
\t\t  <div class=\"collapse navbar-collapse\">
\t\t    <ul class=\"nav navbar-nav\">
\t\t    \t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/index\">首页</a></li>
\t\t    \t<li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu\">冲突人员</a></li>
\t\t    </ul>
\t\t    <ul class=\"nav navbar-nav navbar-right\">
\t\t    \t<li class=\"dropdown \">
\t\t\t    \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t\t    \t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 25
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 45
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department1", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "employ_department2", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
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
        // line 57
        echo "\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<nav aria-label=\"Page navigation\" class=\"page navbar-fixed-bottom\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t    \t<li>
\t\t\t\t    \t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
\t\t\t\t        \t<span aria-hidden=\"true\">上一页</span>
\t\t\t\t    \t</a>
\t\t\t    \t</li>
\t\t\t    \t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
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
        // line 70
        echo "\t\t\t\t\t<li>
\t\t\t\t    \t<a href=\"";
        // line 71
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
        return array (  193 => 71,  190 => 70,  177 => 68,  173 => 67,  164 => 63,  156 => 57,  139 => 52,  129 => 51,  119 => 50,  109 => 49,  104 => 47,  100 => 46,  97 => 45,  93 => 44,  71 => 25,  66 => 23,  59 => 19,  55 => 18,  48 => 13,  45 => 12,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>冲突人员</title>
\t<script src=\"{{ source_url }}js/jquery.min.js\"></script>
    <script src=\"{{ source_url }}js/bootstrap/bootstrap.min.js\"></script>
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
