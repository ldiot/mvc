<?php

/* index.html */
class __TwigTemplate_779a6745eaaf047b84c0b76608542d8415132c98bce96367450d87d665160c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "F:\\software\\self-web\\www\\practice\\imooc\\app\\views\\index.html");
    }
}
