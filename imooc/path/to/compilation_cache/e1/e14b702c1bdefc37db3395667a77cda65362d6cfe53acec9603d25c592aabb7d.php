<?php

/* layout.html */
class __TwigTemplate_e12e084f3f37276857f11bedcfa35c1e560be90afdbdc780093190c9c12c2d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <body>
    \t<header>header</header>
    \t<content>
    \t\t";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "    \t</content>
    \t<footer>footer</footer>
    </body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    \t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 7,  26 => 5,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
    \t<header>header</header>
    \t<content>
    \t\t{% block content %}
    \t\t{% endblock%}
    \t</content>
    \t<footer>footer</footer>
    </body>
</html>", "layout.html", "F:\\software\\self-web\\www\\practice\\imooc\\app\\views\\layout.html");
    }
}
