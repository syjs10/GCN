<?php

/* allUnhiredStu.html */
class __TwigTemplate_a827dbfdd8dd4a5461d66da70171ec5f13bf09b02fa743e78f3e6aed2c552005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "allUnhiredStu.html", 1);
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
        echo "    <title>未录取人员</title>

";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <nav class=\"navbar navbar-default navbar-static-top\">
      <div class=\"container\">
          <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/index\">首页</a></li>
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/conflictStu\">冲突人员</a></li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/unhired\">未选人员</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown \">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/logout\">退出登录</a></li>
                    </ul>
                </li>
            </ul>
           </div>
      </div>
    </nav>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-2 col-xs-1\"></div>
        <div class=\"col-md-8 col-xs-10\">
            <table class=\"table table-hover table-bordered\">
                <tbody style=\"text-align:center;\">
                        <tr>
                            <th width=\"10%\">姓名</th>
                            <th width=\"5%\">性别</th>
                            <th width=\"25%\">电话</th>
                            <th width=\"50%\">部门</th>

                        </tr>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 45
            echo "                        <tr>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "name", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "gender", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "phonenum", array(), "array"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department0", array(), "array"), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department1", array(), "array"), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department2", array(), "array"), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/setDep/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array(), "array"), "html", null, true);
            echo "/depName/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "department3", array(), "array"), "html", null, true);
            echo "</a>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                </tbody>
            </table>
            <nav aria-label=\"Page navigation\" class=\"page \">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/unhired/page/";
        echo twig_escape_filter($this->env, ($context["prePage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">上一页</span>
                        </a>
                    </li>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["num"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "Root/unhired/page/";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    <li>
                        <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Root/unhired/page/";
        echo twig_escape_filter($this->env, ($context["nextPage"] ?? null), "html", null, true);
        echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">下一页</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"col-md-2 col-xs-1\"></div>
      </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "allUnhiredStu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  191 => 71,  178 => 69,  174 => 68,  165 => 64,  157 => 58,  140 => 53,  130 => 52,  120 => 51,  110 => 50,  105 => 48,  101 => 47,  97 => 46,  94 => 45,  90 => 44,  67 => 24,  62 => 22,  55 => 18,  51 => 17,  47 => 16,  41 => 12,  38 => 11,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
    <title>未录取人员</title>

{% endblock %}



{% block content %}
    <nav class=\"navbar navbar-default navbar-static-top\">
      <div class=\"container\">
          <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ base_url }}Root/index\">首页</a></li>
                <li><a href=\"{{ base_url }}Root/conflictStu\">冲突人员</a></li>
                <li><a href=\"{{ base_url }}Root/unhired\">未选人员</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown \">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ name }} <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ base_url }}Root/logout\">退出登录</a></li>
                    </ul>
                </li>
            </ul>
           </div>
      </div>
    </nav>
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-2 col-xs-1\"></div>
        <div class=\"col-md-8 col-xs-10\">
            <table class=\"table table-hover table-bordered\">
                <tbody style=\"text-align:center;\">
                        <tr>
                            <th width=\"10%\">姓名</th>
                            <th width=\"5%\">性别</th>
                            <th width=\"25%\">电话</th>
                            <th width=\"50%\">部门</th>

                        </tr>
                    {% for value in data %}
                        <tr>
                            <td>{{ value['name'] }}</td>
                            <td>{{ value['gender'] }}</td>
                            <td>{{ value['phonenum'] }}</td>
                            <td>
                                <a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['department0'] }}\">{{ value['department0'] }}</a>
                                <a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['department1'] }}\">{{ value['department1'] }}</a>
                                <a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['department2'] }}\">{{ value['department2'] }}</a>
                                <a href=\"{{ base_url }}Root/setDep/id/{{ value['id'] }}/depName/{{ value['department3'] }}\">{{ value['department3'] }}</a>

                            </td>
                        </tr>
                    {% endfor %}

                </tbody>
            </table>
            <nav aria-label=\"Page navigation\" class=\"page \">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"{{ base_url }}Root/unhired/page/{{ prePage }}\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">上一页</span>
                        </a>
                    </li>
                    {% for item in 1..num %}
                        <li><a href=\"{{ base_url }}Root/unhired/page/{{ item }}\">{{ item }}</a></li>
                    {% endfor %}
                    <li>
                        <a href=\"{{ base_url }}Root/unhired/page/{{ nextPage }}\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">下一页</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"col-md-2 col-xs-1\"></div>
      </div>
    </div>

{% endblock %}", "allUnhiredStu.html", "/var/www/html/GCN/app/view/allUnhiredStu.html");
    }
}
