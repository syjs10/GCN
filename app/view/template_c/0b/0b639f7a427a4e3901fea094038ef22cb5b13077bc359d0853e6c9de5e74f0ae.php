<?php

/* template/header.html */
class __TwigTemplate_e6158fcefa74223c173bbfd05613803f1c318ece658070c27a3962dcc8d98570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/index\">首页</a>
\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/interview\">面试阶段</a>
\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "Department/choose\">选人阶段</a>

\t";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "template/header.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  35 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template/header.html", "/var/www/html/GCN/app/view/template/header.html");
    }
}