<?php

/* stuSubmit.html */
class __TwigTemplate_204b64e4a2540cd8c4138bdf648aae09f5fdbea7dc2ded1a78ecb301b97a259f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/layout.html", "stuSubmit.html", 1);
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
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery-validation-1.14.0/lib/jquery.js\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery-validation-1.14.0/dist/jquery.validate.min.js\"></script>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t<div >
\t\t<div >
\t\t\t<h1 align=\"center\">工大网管，欢迎“家”入</h1>
\t\t</div>
\t\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Student/doSubmit\" enctype=\"multipart/form-data\" id=\"stuForm\" method=\"post\">
\t\t\t<table border=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td >姓名：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"name\" maxlength=\"4\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >学号：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"studentid\" maxlength=\"9\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >
\t\t\t\t\t\t性别：
\t\t\t\t\t</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input style=\"margin-left: 0;\" class=\"radio\" type=\"radio\" name=\"gender\" value=\"男\" style=\"margin-left:40px;\">男</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">女</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">其他</input>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >专业班级：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"class\" maxlength=\"30\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >手机：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"phonenum\" maxlength=\"11\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >QQ:</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"qqnum\" maxlength=\"15\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >部门:</td>
\t\t\t\t\t<td >
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
\t\t\t\t\t<td>
\t\t\t\t\t\t自我介绍<br>（包括特长爱好）：
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea  name=\"introduction\" rows=\"10\" cols=\"15\"></textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t验证码
\t\t\t\t\t</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<input type=\"text\" name=\"verify\" value=\"\" style=\"width:50%; margin-bottom:17px;\">

\t\t\t\t\t\t<img src=\"";
        // line 116
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

\t<script>
\t\t\$.validator.setDefaults({
\t\t    submitHandler: function() {
\t\t      form.submit();
\t\t    }
\t\t});
\t\t\$().ready(function() {
\t\t    \$(\"#stuForm\").validate({
\t\t    \trules: {
\t\t    \t\tname: \"required\",
\t\t    \t\tstudentid: {
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true,
\t\t\t\t    \tmixlength: 9
\t\t\t\t    },
\t\t\t\t    class:\"required\",
\t\t\t\t    phonenum:{
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true,
\t\t\t\t    \tmixlength: 11
\t\t\t\t    },
\t\t\t\t    qqnum:{
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true
\t\t\t\t    },
\t\t\t\t    introduction: \"required\",
\t\t\t\t    verify: \"required\"

\t\t    \t},
\t\t    \tmessages: {
\t\t    \t\tname: \"请输入姓名\",
\t\t    \t\tstudentid: {
\t\t\t\t    \trequired: \"请输入学号\",
\t\t\t\t    \tnumber: \"请输入正确学号\",
\t\t\t\t    \tmixlength: \"请输入正确学号\"
\t\t\t\t    },
\t\t\t\t    class:\"请输入专业班级\",
\t\t\t\t    phonenum:{
\t\t\t\t    \trequired: \"请输入电话\",
\t\t\t\t    \tnumber: \"请输入正确电话\",
\t\t\t\t    \tmixlength: \"请输入正确电话\"
\t\t\t\t    },
\t\t\t\t    qqnum:{
\t\t\t\t    \trequired: \"请输入QQ号\",
\t\t\t\t    \tnumber: \"请输入正确QQ号\"
\t\t\t\t    },
\t\t\t\t    introduction:\"请填写自我介绍\",
\t\t\t\t    verify: \"请输入验证码\"
\t\t    \t}
\t\t    });
\t\t});
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "stuSubmit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 116,  54 => 15,  48 => 11,  45 => 10,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/layout.html\" %}


{% block head %}
\t<title>招新页面</title>
\t<script src=\"{{ source_url }}js/jquery-validation-1.14.0/lib/jquery.js\"></script>
\t<script src=\"{{ source_url }}js/jquery-validation-1.14.0/dist/jquery.validate.min.js\"></script>
{% endblock %}

{% block content %}
\t<div >
\t\t<div >
\t\t\t<h1 align=\"center\">工大网管，欢迎“家”入</h1>
\t\t</div>
\t\t<form action=\"{{ base_url }}Student/doSubmit\" enctype=\"multipart/form-data\" id=\"stuForm\" method=\"post\">
\t\t\t<table border=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td >姓名：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"name\" maxlength=\"4\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >学号：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input class=\"input\" type=\"text\" name=\"studentid\" maxlength=\"9\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >
\t\t\t\t\t\t性别：
\t\t\t\t\t</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input style=\"margin-left: 0;\" class=\"radio\" type=\"radio\" name=\"gender\" value=\"男\" style=\"margin-left:40px;\">男</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">女</input>
\t\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"gender\" value=\"女\" style=\"margin-left:40px;\">其他</input>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >专业班级：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"class\" maxlength=\"30\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >手机：</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"phonenum\" maxlength=\"11\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >QQ:</td>
\t\t\t\t\t<td >
\t\t\t\t\t\t<input  type=\"text\" name=\"qqnum\" maxlength=\"15\" size=\"25\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td >部门:</td>
\t\t\t\t\t<td >
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
\t\t\t\t\t<td>
\t\t\t\t\t\t自我介绍<br>（包括特长爱好）：
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea  name=\"introduction\" rows=\"10\" cols=\"15\"></textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t验证码
\t\t\t\t\t</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<input type=\"text\" name=\"verify\" value=\"\" style=\"width:50%; margin-bottom:17px;\">

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

\t<script>
\t\t\$.validator.setDefaults({
\t\t    submitHandler: function() {
\t\t      form.submit();
\t\t    }
\t\t});
\t\t\$().ready(function() {
\t\t    \$(\"#stuForm\").validate({
\t\t    \trules: {
\t\t    \t\tname: \"required\",
\t\t    \t\tstudentid: {
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true,
\t\t\t\t    \tmixlength: 9
\t\t\t\t    },
\t\t\t\t    class:\"required\",
\t\t\t\t    phonenum:{
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true,
\t\t\t\t    \tmixlength: 11
\t\t\t\t    },
\t\t\t\t    qqnum:{
\t\t\t\t    \trequired: true,
\t\t\t\t    \tnumber: true
\t\t\t\t    },
\t\t\t\t    introduction: \"required\",
\t\t\t\t    verify: \"required\"

\t\t    \t},
\t\t    \tmessages: {
\t\t    \t\tname: \"请输入姓名\",
\t\t    \t\tstudentid: {
\t\t\t\t    \trequired: \"请输入学号\",
\t\t\t\t    \tnumber: \"请输入正确学号\",
\t\t\t\t    \tmixlength: \"请输入正确学号\"
\t\t\t\t    },
\t\t\t\t    class:\"请输入专业班级\",
\t\t\t\t    phonenum:{
\t\t\t\t    \trequired: \"请输入电话\",
\t\t\t\t    \tnumber: \"请输入正确电话\",
\t\t\t\t    \tmixlength: \"请输入正确电话\"
\t\t\t\t    },
\t\t\t\t    qqnum:{
\t\t\t\t    \trequired: \"请输入QQ号\",
\t\t\t\t    \tnumber: \"请输入正确QQ号\"
\t\t\t\t    },
\t\t\t\t    introduction:\"请填写自我介绍\",
\t\t\t\t    verify: \"请输入验证码\"
\t\t    \t}
\t\t    });
\t\t});
\t\t</script>
{% endblock %}", "stuSubmit.html", "/var/www/html/GCN/app/view/stuSubmit.html");
    }
}
