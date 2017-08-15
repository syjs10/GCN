<?php

/* student.html */
class __TwigTemplate_4c24a102537a0615adc5f34b39d17e8a122ce10ae1a88852adf7b63d53d72fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "student.html", 1);
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
        echo "\t<title>招新页面</title>
\t
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"form\">
\t\t<div class=\"title\">
\t\t\t<h1 align=\"center\">工大网管，欢迎“家”入</h1>
\t\t</div>
\t\t<form action=\"getInfo\" enctype=\"multipart/form-data\" method=\"post\">
\t\t\t<table border=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">姓名：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"name\" maxlength=\"4\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">学号：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"studentid\" maxlength=\"9\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t性别：
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input style=\"margin-left: 0;\" class=\"radio\" type=\"radio\" name=\"gender\" value=\"男\" style=\"margin-left:40px;\">男</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">女</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">其他</input>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">专业班级：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"class\" maxlength=\"30\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">手机：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"phonenum\" maxlength=\"11\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">QQ:</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"qqnum\" maxlength=\"15\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">部门:</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<select class=\"\" name=\"department0\">
\t\t\t\t\t\t\t\t<option >部门1</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<select class=\"\" name=\"department1\">
\t\t\t\t\t\t\t\t<option >部门2</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"\" name=\"department2\">
\t\t\t\t\t\t\t\t<option >部门3</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"\" name=\"department3\">
\t\t\t\t\t\t\t\t<option >部门4</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t自我介绍<br>（包括特长爱好）：
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea class=\"input\" name=\"introduction\" rows=\"10\" cols=\"15\"></textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t验证码
\t\t\t\t\t</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"verify\" value=\"\" style=\"width:50%; margin-bottom:17px;\">

\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify\" alt=\"验证码\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify'\"/>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<input type=\"submit\" value=\"提  交\" class=\"submit\">
\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"bottom\">
\t\t&copy; 2017 JS 
\t</div>
";
    }

    public function getTemplateName()
    {
        return "student.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 115,  41 => 10,  38 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>招新页面</title>
\t
{% endblock %}

{% block content %}
\t<div class=\"form\">
\t\t<div class=\"title\">
\t\t\t<h1 align=\"center\">工大网管，欢迎“家”入</h1>
\t\t</div>
\t\t<form action=\"getInfo\" enctype=\"multipart/form-data\" method=\"post\">
\t\t\t<table border=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">姓名：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"name\" maxlength=\"4\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">学号：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"studentid\" maxlength=\"9\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t性别：
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input style=\"margin-left: 0;\" class=\"radio\" type=\"radio\" name=\"gender\" value=\"男\" style=\"margin-left:40px;\">男</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">女</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">其他</input>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">专业班级：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"class\" maxlength=\"30\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">手机：</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"phonenum\" maxlength=\"11\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">QQ:</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"qqnum\" maxlength=\"15\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">部门:</td>
\t\t\t\t\t<td class=\"td_b\">
\t\t\t\t\t\t<select class=\"\" name=\"department0\">
\t\t\t\t\t\t\t\t<option >部门1</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<select class=\"\" name=\"department1\">
\t\t\t\t\t\t\t\t<option >部门2</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"\" name=\"department2\">
\t\t\t\t\t\t\t\t<option >部门3</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select class=\"\" name=\"department3\">
\t\t\t\t\t\t\t\t<option >部门4</option>
\t\t\t\t\t\t\t\t<option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t自我介绍<br>（包括特长爱好）：
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea class=\"input\" name=\"introduction\" rows=\"10\" cols=\"15\"></textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class = \"td_a\">
\t\t\t\t\t\t验证码
\t\t\t\t\t</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<input type=\"text\" class=\"input\" name=\"verify\" value=\"\" style=\"width:50%; margin-bottom:17px;\">

\t\t\t\t\t\t<img src=\"{{ base_url }}ShowVerify\" alt=\"验证码\" onclick=\"this.src='{{ base_url }}ShowVerify'\"/>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<input type=\"submit\" value=\"提  交\" class=\"submit\">
\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"bottom\">
\t\t&copy; 2017 JS 
\t</div>
{% endblock %}", "student.html", "/var/www/html/GCN/app/view/student.html");
    }
}
