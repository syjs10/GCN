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
\t\t<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Student/doSubmit\" enctype=\"multipart/form-data\" method=\"post\" id=\"stuForm\">

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                姓名
\t            </label>
\t            <input type=\"text\" name=\"name\" placeholder=\"姓名\" data-required=\"true\" data-pattern=\"[\\u4e00-\\u9fa5]\" data-descriptions=\"name\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                学号
\t            </label>
\t            <input type=\"text\" name=\"studentid\" placeholder=\"9位学号\" data-required=\"true\" data-pattern=\"\\d{9}\" data-descriptions=\"studentid\" maxlength=\"9\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
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
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t    <div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t            中国 +86
\t\t        </label>
\t\t        <input type=\"text\" name=\"phonenum\" placeholder=\"请输入手机号码\" data-required=\"true\" data-pattern=\"^0?1[3|4|5|8][0-9]\\d{8}\$\"  data-descriptions=\"phonenum\" maxlength=\"11\">
\t\t        <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
\t\t    </div>

        \t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                QQ
\t            </label>
\t            <input type=\"text\" name=\"qqnum\" placeholder=\"QQ号码\" data-required=\"true\" data-pattern=\"[1-9]([0-9]{5,11})\" data-descriptions=\"qqnum\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t        <div class=\"ui-form-item ui-border-b\">
\t            <label>报名部门</label>
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department0\">
\t                        <option value=\"\">意向部门1</option>
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
\t                        <option value=\"\">意向部门2</option>
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
\t                        <option value=\"\">意向部门3</option>
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
\t                        <option value=\"\">意向部门4</option>
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
\t            <textarea placeholder=\"爱好特长等\" name=\"introduction\" data-required=\"true\" data-descriptions=\"introduction\"></textarea>
\t        </div>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-form-item-l ui-border-b\" style=\"padding:0;\">
\t\t        <label class=\"ui-border-r\" style=\"padding:0;\">
\t\t        \t<img src=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify\" alt=\"验证码\" onclick=\"this.src='";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "ShowVerify'\" style=\"width:100%; height:100%;\" />
\t\t        </label>
\t\t        <input type=\"text\" name=\"verify\" placeholder=\"请输入验证码\" maxlength=\"4\">
\t\t        <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
\t\t    </div>

        \t<!--  -->
        \t<!--  -->
\t\t\t<div class=\"ui-btn-wrap\">
\t\t\t    <button type=\"submit\" class=\"ui-btn-lg ui-btn-primary\" id=\"btn1\">
\t\t\t        提  交
\t\t\t    </button>
\t\t\t</div>

\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"ui-flex ui-flex-pack-center\">
\t    <div>&copy; 2017 JS&ZQD </div>
\t</div>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/js/zepto.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/js/frozen.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, ($context["source_url"] ?? null), "html", null, true);
        echo "dist/zepto-mvalidate.js\"></script>
\t
\t<script type=\"text/javascript\">
\t\tfunction delValue(obj){
\t\t\t// console.log(obj);
\t\t\t\$(obj).parent().children('input').val('');
\t\t}
\t</script>
\t

\t\t<script type=\"text/javascript\">
\t\t\$(\"#stuForm\").mvalidate({
\t\t    type:1,
\t\t    validateInSubmit:true,
\t\t    
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
        return array (  236 => 180,  232 => 179,  228 => 178,  201 => 156,  63 => 21,  55 => 16,  49 => 12,  46 => 11,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
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
\t\t<form action=\"{{ base_url }}Student/doSubmit\" enctype=\"multipart/form-data\" method=\"post\" id=\"stuForm\">

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                姓名
\t            </label>
\t            <input type=\"text\" name=\"name\" placeholder=\"姓名\" data-required=\"true\" data-pattern=\"[\\u4e00-\\u9fa5]\" data-descriptions=\"name\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t\t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                学号
\t            </label>
\t            <input type=\"text\" name=\"studentid\" placeholder=\"9位学号\" data-required=\"true\" data-pattern=\"\\d{9}\" data-descriptions=\"studentid\" maxlength=\"9\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
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
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t\t    <div class=\"ui-form-item ui-form-item-l ui-border-b\">
\t\t        <label class=\"ui-border-r\">
\t\t            中国 +86
\t\t        </label>
\t\t        <input type=\"text\" name=\"phonenum\" placeholder=\"请输入手机号码\" data-required=\"true\" data-pattern=\"^0?1[3|4|5|8][0-9]\\d{8}\$\"  data-descriptions=\"phonenum\" maxlength=\"11\">
\t\t        <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
\t\t    </div>

        \t<div class=\"ui-form-item ui-border-b\">
\t            <label>
\t                QQ
\t            </label>
\t            <input type=\"text\" name=\"qqnum\" placeholder=\"QQ号码\" data-required=\"true\" data-pattern=\"[1-9]([0-9]{5,11})\" data-descriptions=\"qqnum\">
\t            <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
        \t</div>

\t        <div class=\"ui-form-item ui-border-b\">
\t            <label>报名部门</label>
\t            <div class=\"ui-select-group\">
\t                <div class=\"ui-select\">
\t                    <select name=\"department0\">
\t                        <option value=\"\">意向部门1</option>
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
\t                        <option value=\"\">意向部门2</option>
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
\t                        <option value=\"\">意向部门3</option>
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
\t                        <option value=\"\">意向部门4</option>
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
\t            <textarea placeholder=\"爱好特长等\" name=\"introduction\" data-required=\"true\" data-descriptions=\"introduction\"></textarea>
\t        </div>
\t\t\t
\t\t\t<div class=\"ui-form-item ui-form-item-l ui-border-b\" style=\"padding:0;\">
\t\t        <label class=\"ui-border-r\" style=\"padding:0;\">
\t\t        \t<img src=\"{{ base_url }}ShowVerify\" alt=\"验证码\" onclick=\"this.src='{{ base_url }}ShowVerify'\" style=\"width:100%; height:100%;\" />
\t\t        </label>
\t\t        <input type=\"text\" name=\"verify\" placeholder=\"请输入验证码\" maxlength=\"4\">
\t\t        <a href=\"javascript:void(0);\" onclick=\"delValue(this)\" class=\"ui-icon-close\">
\t            </a>
\t\t    </div>

        \t<!--  -->
        \t<!--  -->
\t\t\t<div class=\"ui-btn-wrap\">
\t\t\t    <button type=\"submit\" class=\"ui-btn-lg ui-btn-primary\" id=\"btn1\">
\t\t\t        提  交
\t\t\t    </button>
\t\t\t</div>

\t\t\t<br><br>
\t\t</form>
\t</div>
\t<div class=\"ui-flex ui-flex-pack-center\">
\t    <div>&copy; 2017 JS&ZQD </div>
\t</div>
\t
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/js/zepto.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/js/frozen.js\"></script>
\t<script type=\"text/javascript\" src=\"{{ source_url }}dist/zepto-mvalidate.js\"></script>
\t
\t<script type=\"text/javascript\">
\t\tfunction delValue(obj){
\t\t\t// console.log(obj);
\t\t\t\$(obj).parent().children('input').val('');
\t\t}
\t</script>
\t

\t\t<script type=\"text/javascript\">
\t\t\$(\"#stuForm\").mvalidate({
\t\t    type:1,
\t\t    validateInSubmit:true,
\t\t    
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
