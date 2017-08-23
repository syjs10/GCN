<?php

/* stuSubmit.html */
class __TwigTemplate_204b64e4a2540cd8c4138bdf648aae09f5fdbea7dc2ded1a78ecb301b97a259f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template/stulayout.html", "stuSubmit.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/stulayout.html";
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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/validate.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/css/frozen.css\">
\t
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t
\t<div class=\"ui-form ui-border-t\">
\t\t<div class=\"title\">
\t\t\t<div class=\"ui-flex ui-flex-pack-center\">
\t\t\t\t<div class=\"ui-avatar-one\"><span class=\"ui-flex ui-flex-pack-center\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "img/band.JPG)\"></span></div>
\t\t\t\t
\t\t\t</div>
\t\t\t<h5 align=\"center\">工大网管，欢迎“家”入</h5>
\t\t</div>
\t\t<form action=\"doSubmit\" enctype=\"multipart/form-data\" method=\"post\" id=\"stuForm\">

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                姓名
\t            </label>
\t            <input type=\"text\" name=\"name\" placeholder=\"姓名\" data-required=\"true\" data-pattern=\"[\\u4e00-\\u9fa5]\" data-descriptions=\"name\">
\t            <a href=\"#\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                学号
\t            </label>
\t            <input type=\"text\" name=\"studentid\" placeholder=\"9位学号\" data-required=\"true\" data-pattern=\"\\d{9}\" data-descriptions=\"studentid\" maxlength=\"9\">
\t            <a href=\"#\" class=\"ui-icon-close\">
\t            </a>
        \t</div>
\t\t\t
\t\t\t<ul class=\"ui-form-item ui-border-b ui-grid-trisect\">
\t\t\t\t<li>
\t\t\t\t\t<label>
\t\t                性别
\t\t            </label>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"ui-form-item ui-form-item-radio ui-border-b\">
\t\t\t            
\t\t\t            <label class=\"ui-radio\" for=\"radio\">
\t\t\t                <input type=\"radio\" name=\"gender\" value=\"男\">
\t\t\t            </label>
\t\t\t            <p>男</p>
\t\t\t        </div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"ui-form-item ui-form-item-radio ui-border-b\">
\t\t\t            
\t\t\t            <label class=\"ui-radio\" for=\"radio\">
\t\t\t                <input type=\"radio\" name=\"gender\" value=\"女\">
\t\t\t            </label>
\t\t\t            <p>女</p>
\t\t\t        </div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                专业班级
\t            </label>
\t            <input type=\"text\" name=\"class\" placeholder=\"例：计算机1701\" data-required=\"true\" data-descriptions=\"klass\">
        \t</div>

\t\t    <div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t            中国 +86
\t\t        </label>
\t\t        <input type=\"text\" name=\"phonenum\" placeholder=\"请输入手机号码\" data-required=\"true\" data-pattern=\"^0?1[3|4|5|8][0-9]\\d{8}\$\"  data-descriptions=\"phonenum\" maxlength=\"11\">
\t\t        <a href=\"#\" class=\"ui-icon-close\">
\t\t        </a>
\t\t    </div>

        \t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                QQ
\t            </label>
\t            <input type=\"text\" name=\"qqnum\" placeholder=\"QQ号码\" data-required=\"true\" data-pattern=\"[1-9]([0-9]{5,11})\" data-descriptions=\"qqnum\">
        \t</div>

\t        <div class=\"ui-form-item ui-border-b\">
\t            <label>报名部门</label>
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department0\">
\t                        <option selected>意向部门1</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t                <div class=\"ui-select\">
\t                    <select name=\"department1\">
\t                        <option selected>意向部门2</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"ui-form-item ui-border-b\">
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department2\">
\t                        <option selected>意向部门3</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t                <div class=\"ui-select\">
\t                    <select name=\"department3\">
\t                        <option selected>意向部门4</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t            </div>
\t        </div>
\t\t    <div class=\"ui-form-item ui-form-item-textarea ui-border-b\">
\t            <label>
\t                自我介绍
\t            </label>
\t            <textarea placeholder=\"爱好特长等\" name=\"introduction\"></textarea>
\t        </div>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t        \t<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify\" alt=\"验证码\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify'\"/>
\t\t        </label>
\t\t        <input type=\"text\" name=\"verify\" placeholder=\"请输入验证码\" maxlength=\"4\">
\t\t        <a href=\"#\" class=\"ui-icon-close\">
\t\t        </a>
\t\t    </div>

        \t<!--  -->
        \t<!--  -->
\t\t\t<div class=\"ui-btn-wrap\">
\t\t\t    <input type=\"submit\" class=\"ui-btn-lg ui-btn-primary\" id=\"btn1\" value=\"提  交\">
\t\t\t        
\t\t\t</div>
\t\t\t<div class=\"ui-dialog\">
\t\t\t    <div class=\"ui-dialog-cnt\">
\t\t\t        <div class=\"ui-dialog-bd\">
\t\t\t            <div>
\t\t\t\t            <!-- <h4>标题</h4> -->
\t\t\t\t            <div>提交成功</div>
\t\t\t            </div>
\t\t\t        </div>
\t\t\t        <div class=\"ui-dialog-ft ui-btn-group\">
\t\t\t            <button type=\"button\" data-role=\"button\"  class=\"select\" id=\"dialogButton<%=i%>\">关闭</button> 
\t\t\t        </div>
\t\t\t    </div>        
\t\t\t</div>

\t\t\t<!-- <input type=\"submit\" value=\"提  交\" class=\"submit\"> -->
\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"ui-flex ui-flex-pack-center\">
\t    <div>&copy; 2017 JS&ZQD </div>
\t</div>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/lib/zepto.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/js/frozen.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/zepto-mvalidate.js\"></script>
\t
\t<script type=\"text/javascript\">
\t\t// \$(\"#btn1\").tap(function(){
\t\t//     var dia2=\$(\".ui-dialog\").dialog(\"show\");
\t\t//     dia2.on(\"dialog:action\",function(e){
\t\t//         console.log(e.index)
\t\t//     });
\t\t// })
\t</script>

\t<script>
\t\t
\t\t// \$.validator.setDefaults({
\t\t//     submitHandler: function() {
\t\t//       alert(\"提交事件!\");
\t\t//     }
\t\t// });
\t\t// \$().ready(function() {
\t\t//     \$(\"#stuForm\").validate({
\t\t//     \trules: {
\t\t//     \t\tname: \"required\",
\t\t//     \t\tstudentid: {
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true,
\t\t// \t\t    \tmixlength: 9
\t\t// \t\t    },
\t\t// \t\t    class:\"required\",
\t\t// \t\t    phonenum:{
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true,
\t\t// \t\t    \tmixlength: 11
\t\t// \t\t    },
\t\t// \t\t    qqnum:{
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true
\t\t// \t\t    },
\t\t// \t\t    introduction: \"required\",
\t\t// \t\t    verify: \"required\"

\t\t//     \t},
\t\t//     \tmessages: {
\t\t//     \t\tname: \"请输入姓名\",
\t\t//     \t\tstudentid: {
\t\t// \t\t    \trequired: \"请输入学号\",
\t\t// \t\t    \tnumber: \"请输入正确学号\",
\t\t// \t\t    \tmixlength: \"请输入正确学号\"
\t\t// \t\t    },
\t\t// \t\t    class:\"请输入专业班级\",
\t\t// \t\t    phonenum:{
\t\t// \t\t    \trequired: \"请输入电话\",
\t\t// \t\t    \tnumber: \"请输入正确电话\",
\t\t// \t\t    \tmixlength: \"请输入正确电话\"
\t\t// \t\t    },
\t\t// \t\t    qqnum:{
\t\t// \t\t    \trequired: \"请输入QQ号\",
\t\t// \t\t    \tnumber: \"请输入正确QQ号\"
\t\t// \t\t    },
\t\t// \t\t    introduction:\"请填写自我介绍\",
\t\t// \t\t    verify: \"请输入验证码\"
\t\t//     \t}
\t\t//     });
\t\t// });
\t\t
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\$(\"#stuForm\").mvalidate({
\t\t    type:1,
\t\t    // validateInSubmit:true,
\t\t    valid: function (event, options){
\t\t    \tvar dia2=\$(\".ui-dialog\").dialog(\"show\");
\t\t    \tdia2.on(\"dialog:action\",function(e){
\t\t        \tconsole.log(e.index)
\t\t    \t});
\t\t        \$(\"#stuForm\").submit();
\t\t    },
\t\t    descriptions: {
\t\t    \tname: {
\t\t    \t\trequired: '请输入姓名',
\t\t    \t\tpattern: '你输入的姓名格式不正确'
\t\t    \t},
\t\t    \tstudentid: {
\t\t    \t\trequired: '请输入学号',
\t\t    \t\tpattern: '你输入的学号格式不正确'
\t\t    \t},
\t\t    \tklass: {
\t\t    \t\trequired: '请输入班级'
\t\t    \t},
\t\t    \tphonenum: {
\t\t    \t\trequired: '请输入手机号码',
\t\t    \t\tpattern: '你输入的手机格式不正确'
\t\t    \t},
\t\t    \tqqnum: {
\t\t    \t\trequired: '请输入QQ号码',
\t\t    \t\tpattern: '你输入的QQ格式不正确'
\t\t    \t}
\t\t    }
\t\t})
\t</script>
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
        return array (  242 => 189,  238 => 188,  234 => 187,  194 => 152,  55 => 16,  49 => 12,  46 => 11,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template/stulayout.html\" %}


{% block head %}
\t<title>招新页面</title>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ source_url }}dist/validate.css\">
    <link rel=\"stylesheet\" href=\"{{ source_url }}dist/css/frozen.css\">
\t
{% endblock %}

{% block content %}
\t
\t<div class=\"ui-form ui-border-t\">
\t\t<div class=\"title\">
\t\t\t<div class=\"ui-flex ui-flex-pack-center\">
\t\t\t\t<div class=\"ui-avatar-one\"><span class=\"ui-flex ui-flex-pack-center\" style=\"background-image:url({{ source_url }}img/band.JPG)\"></span></div>
\t\t\t\t
\t\t\t</div>
\t\t\t<h5 align=\"center\">工大网管，欢迎“家”入</h5>
\t\t</div>
\t\t<form action=\"doSubmit\" enctype=\"multipart/form-data\" method=\"post\" id=\"stuForm\">

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                姓名
\t            </label>
\t            <input type=\"text\" name=\"name\" placeholder=\"姓名\" data-required=\"true\" data-pattern=\"[\\u4e00-\\u9fa5]\" data-descriptions=\"name\">
\t            <a href=\"#\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                学号
\t            </label>
\t            <input type=\"text\" name=\"studentid\" placeholder=\"9位学号\" data-required=\"true\" data-pattern=\"\\d{9}\" data-descriptions=\"studentid\" maxlength=\"9\">
\t            <a href=\"#\" class=\"ui-icon-close\">
\t            </a>
        \t</div>
\t\t\t
\t\t\t<ul class=\"ui-form-item ui-border-b ui-grid-trisect\">
\t\t\t\t<li>
\t\t\t\t\t<label>
\t\t                性别
\t\t            </label>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"ui-form-item ui-form-item-radio ui-border-b\">
\t\t\t            
\t\t\t            <label class=\"ui-radio\" for=\"radio\">
\t\t\t                <input type=\"radio\" name=\"gender\" value=\"男\">
\t\t\t            </label>
\t\t\t            <p>男</p>
\t\t\t        </div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"ui-form-item ui-form-item-radio ui-border-b\">
\t\t\t            
\t\t\t            <label class=\"ui-radio\" for=\"radio\">
\t\t\t                <input type=\"radio\" name=\"gender\" value=\"女\">
\t\t\t            </label>
\t\t\t            <p>女</p>
\t\t\t        </div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                专业班级
\t            </label>
\t            <input type=\"text\" name=\"class\" placeholder=\"例：计算机1701\" data-required=\"true\" data-descriptions=\"klass\">
        \t</div>

\t\t    <div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t            中国 +86
\t\t        </label>
\t\t        <input type=\"text\" name=\"phonenum\" placeholder=\"请输入手机号码\" data-required=\"true\" data-pattern=\"^0?1[3|4|5|8][0-9]\\d{8}\$\"  data-descriptions=\"phonenum\" maxlength=\"11\">
\t\t        <a href=\"#\" class=\"ui-icon-close\">
\t\t        </a>
\t\t    </div>

        \t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                QQ
\t            </label>
\t            <input type=\"text\" name=\"qqnum\" placeholder=\"QQ号码\" data-required=\"true\" data-pattern=\"[1-9]([0-9]{5,11})\" data-descriptions=\"qqnum\">
        \t</div>

\t        <div class=\"ui-form-item ui-border-b\">
\t            <label>报名部门</label>
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department0\">
\t                        <option selected>意向部门1</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t                <div class=\"ui-select\">
\t                    <select name=\"department1\">
\t                        <option selected>意向部门2</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t            </div>
\t        </div>
\t        <div class=\"ui-form-item ui-border-b\">
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department2\">
\t                        <option selected>意向部门3</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t                <div class=\"ui-select\">
\t                    <select name=\"department3\">
\t                        <option selected>意向部门4</option>
\t                        <option value=\"技术部\">技术部</option>
\t\t\t\t\t\t\t<option value=\"影音部\">影音部</option>
\t\t\t\t\t\t\t<option value=\"宣传部\">宣传部</option>
\t\t\t\t\t\t\t<option value=\"策划部\">策划部</option>
\t\t\t\t\t\t\t<option value=\"采编部\">采编部</option>
\t\t\t\t\t\t\t<option value=\"外事部\">外事部</option>
\t                    </select>
\t                </div>
\t            </div>
\t        </div>
\t\t    <div class=\"ui-form-item ui-form-item-textarea ui-border-b\">
\t            <label>
\t                自我介绍
\t            </label>
\t            <textarea placeholder=\"爱好特长等\" name=\"introduction\"></textarea>
\t        </div>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t        \t<img src=\"{{ base_url }}ShowVerify\" alt=\"验证码\" onclick=\"this.src='{{ base_url }}ShowVerify'\"/>
\t\t        </label>
\t\t        <input type=\"text\" name=\"verify\" placeholder=\"请输入验证码\" maxlength=\"4\">
\t\t        <a href=\"#\" class=\"ui-icon-close\">
\t\t        </a>
\t\t    </div>

        \t<!--  -->
        \t<!--  -->
\t\t\t<div class=\"ui-btn-wrap\">
\t\t\t    <input type=\"submit\" class=\"ui-btn-lg ui-btn-primary\" id=\"btn1\" value=\"提  交\">
\t\t\t        
\t\t\t</div>
\t\t\t<div class=\"ui-dialog\">
\t\t\t    <div class=\"ui-dialog-cnt\">
\t\t\t        <div class=\"ui-dialog-bd\">
\t\t\t            <div>
\t\t\t\t            <!-- <h4>标题</h4> -->
\t\t\t\t            <div>提交成功</div>
\t\t\t            </div>
\t\t\t        </div>
\t\t\t        <div class=\"ui-dialog-ft ui-btn-group\">
\t\t\t            <button type=\"button\" data-role=\"button\"  class=\"select\" id=\"dialogButton<%=i%>\">关闭</button> 
\t\t\t        </div>
\t\t\t    </div>        
\t\t\t</div>

\t\t\t<!-- <input type=\"submit\" value=\"提  交\" class=\"submit\"> -->
\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"ui-flex ui-flex-pack-center\">
\t    <div>&copy; 2017 JS&ZQD </div>
\t</div>
\t
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/lib/zepto.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/js/frozen.js\"></script>
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/zepto-mvalidate.js\"></script>
\t
\t<script type=\"text/javascript\">
\t\t// \$(\"#btn1\").tap(function(){
\t\t//     var dia2=\$(\".ui-dialog\").dialog(\"show\");
\t\t//     dia2.on(\"dialog:action\",function(e){
\t\t//         console.log(e.index)
\t\t//     });
\t\t// })
\t</script>

\t<script>
\t\t
\t\t// \$.validator.setDefaults({
\t\t//     submitHandler: function() {
\t\t//       alert(\"提交事件!\");
\t\t//     }
\t\t// });
\t\t// \$().ready(function() {
\t\t//     \$(\"#stuForm\").validate({
\t\t//     \trules: {
\t\t//     \t\tname: \"required\",
\t\t//     \t\tstudentid: {
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true,
\t\t// \t\t    \tmixlength: 9
\t\t// \t\t    },
\t\t// \t\t    class:\"required\",
\t\t// \t\t    phonenum:{
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true,
\t\t// \t\t    \tmixlength: 11
\t\t// \t\t    },
\t\t// \t\t    qqnum:{
\t\t// \t\t    \trequired: true,
\t\t// \t\t    \tnumber: true
\t\t// \t\t    },
\t\t// \t\t    introduction: \"required\",
\t\t// \t\t    verify: \"required\"

\t\t//     \t},
\t\t//     \tmessages: {
\t\t//     \t\tname: \"请输入姓名\",
\t\t//     \t\tstudentid: {
\t\t// \t\t    \trequired: \"请输入学号\",
\t\t// \t\t    \tnumber: \"请输入正确学号\",
\t\t// \t\t    \tmixlength: \"请输入正确学号\"
\t\t// \t\t    },
\t\t// \t\t    class:\"请输入专业班级\",
\t\t// \t\t    phonenum:{
\t\t// \t\t    \trequired: \"请输入电话\",
\t\t// \t\t    \tnumber: \"请输入正确电话\",
\t\t// \t\t    \tmixlength: \"请输入正确电话\"
\t\t// \t\t    },
\t\t// \t\t    qqnum:{
\t\t// \t\t    \trequired: \"请输入QQ号\",
\t\t// \t\t    \tnumber: \"请输入正确QQ号\"
\t\t// \t\t    },
\t\t// \t\t    introduction:\"请填写自我介绍\",
\t\t// \t\t    verify: \"请输入验证码\"
\t\t//     \t}
\t\t//     });
\t\t// });
\t\t
\t\t</script>
\t\t<script type=\"text/javascript\">
\t\t\$(\"#stuForm\").mvalidate({
\t\t    type:1,
\t\t    // validateInSubmit:true,
\t\t    valid: function (event, options){
\t\t    \tvar dia2=\$(\".ui-dialog\").dialog(\"show\");
\t\t    \tdia2.on(\"dialog:action\",function(e){
\t\t        \tconsole.log(e.index)
\t\t    \t});
\t\t        \$(\"#stuForm\").submit();
\t\t    },
\t\t    descriptions: {
\t\t    \tname: {
\t\t    \t\trequired: '请输入姓名',
\t\t    \t\tpattern: '你输入的姓名格式不正确'
\t\t    \t},
\t\t    \tstudentid: {
\t\t    \t\trequired: '请输入学号',
\t\t    \t\tpattern: '你输入的学号格式不正确'
\t\t    \t},
\t\t    \tklass: {
\t\t    \t\trequired: '请输入班级'
\t\t    \t},
\t\t    \tphonenum: {
\t\t    \t\trequired: '请输入手机号码',
\t\t    \t\tpattern: '你输入的手机格式不正确'
\t\t    \t},
\t\t    \tqqnum: {
\t\t    \t\trequired: '请输入QQ号码',
\t\t    \t\tpattern: '你输入的QQ格式不正确'
\t\t    \t}
\t\t    }
\t\t})
\t</script>
{% endblock %}", "stuSubmit.html", "/var/www/html/GCN/app/view/stuSubmit.html");
    }
}
