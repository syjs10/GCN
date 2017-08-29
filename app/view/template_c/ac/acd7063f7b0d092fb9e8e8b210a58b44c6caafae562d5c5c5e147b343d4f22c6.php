<?php

/* rePwd.html */
class __TwigTemplate_4af88e2d47aa7f2a5f3f87bf383c5e0cd796ee4a33e44b3dc2ac00cebe5f1a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/hflayout.html", "rePwd.html", 1);
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
        echo "\t<title>修改密码</title>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery-validation-1.14.0/lib/jquery.js\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "js/jquery-validation-1.14.0/dist/jquery.validate.min.js\"></script>
\t<style>
\t\t
\t</style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t<form action=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/doRePassword\" enctype=\"multipart/form-data\" method=\"post\" id=\"rePwd\">
\t\t<label for=\"password\">新密码</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" />

\t\t<br/>
\t\t<label for=\"confirm_password\">确认密码</label>
\t\t<input type=\"password\" name=\"confirm_password\"/>
\t\t<br/>
\t\t<input type=\"submit\">
\t</form>
\t<script>
\t\t\$.validator.setDefaults({
\t\t    submitHandler: function() {
\t\t      form.submit();
\t\t    }
\t\t});
\t\t\$().ready(function() {
\t\t    \$(\"#rePwd\").validate({
\t\t    \trules: {
\t\t    \t\tpassword: \"required\",
\t\t    \t\tconfirm_password: {
\t\t\t\t    \trequired: true,
\t\t\t\t    \tequalTo: \"#password\"
\t\t\t\t    }
\t\t    \t},
\t\t    \tmessages: {
\t\t    \t\tname: \"请输入新密码\",
\t\t    \t\tconfirm_password: {
\t\t\t\t        required: \"请重新输入密码\",
\t\t\t\t        equalTo: \"两次密码输入不一致\"
\t\t\t\t    }
\t\t    \t}
\t\t    });
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "rePwd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  48 => 13,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/hflayout.html\" %}


{% block head %}
\t<title>修改密码</title>
\t<script src=\"{{ source_url }}js/jquery-validation-1.14.0/lib/jquery.js\"></script>
\t<script src=\"{{ source_url }}js/jquery-validation-1.14.0/dist/jquery.validate.min.js\"></script>
\t<style>
\t\t
\t</style>
{% endblock %}

{% block content %}
\t<form action=\"{{ base_url }}Department/doRePassword\" enctype=\"multipart/form-data\" method=\"post\" id=\"rePwd\">
\t\t<label for=\"password\">新密码</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" />

\t\t<br/>
\t\t<label for=\"confirm_password\">确认密码</label>
\t\t<input type=\"password\" name=\"confirm_password\"/>
\t\t<br/>
\t\t<input type=\"submit\">
\t</form>
\t<script>
\t\t\$.validator.setDefaults({
\t\t    submitHandler: function() {
\t\t      form.submit();
\t\t    }
\t\t});
\t\t\$().ready(function() {
\t\t    \$(\"#rePwd\").validate({
\t\t    \trules: {
\t\t    \t\tpassword: \"required\",
\t\t    \t\tconfirm_password: {
\t\t\t\t    \trequired: true,
\t\t\t\t    \tequalTo: \"#password\"
\t\t\t\t    }
\t\t    \t},
\t\t    \tmessages: {
\t\t    \t\tname: \"请输入新密码\",
\t\t    \t\tconfirm_password: {
\t\t\t\t        required: \"请重新输入密码\",
\t\t\t\t        equalTo: \"两次密码输入不一致\"
\t\t\t\t    }
\t\t    \t}
\t\t    });
\t\t});
\t</script>
{% endblock %}", "rePwd.html", "/var/www/html/GCN/app/view/rePwd.html");
    }
}
