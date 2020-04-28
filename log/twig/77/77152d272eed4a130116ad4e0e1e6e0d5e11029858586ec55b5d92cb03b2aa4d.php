<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html */
class __TwigTemplate_ca293a16c2005ff49e394ffdf86767f82b653725a5eed2f5f7b9d95621bd11bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>开始使用layui</title>
    <link rel=\"stylesheet\" href=\"/layui/css/layui.css\">
    <script src=\"/layui/layui.js\"></script>
</head>
<body>
<header>header</header>
<content>
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</content>

<footer>footer</footer>
</body>
</html>";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  64 => 15,  56 => 18,  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>开始使用layui</title>
    <link rel=\"stylesheet\" href=\"/layui/css/layui.css\">
    <script src=\"/layui/layui.js\"></script>
</head>
<body>
<header>header</header>
<content>
    {% block content %}

    {% endblock %}
</content>

<footer>footer</footer>
</body>
</html>", "layout.html", "E:\\environment\\phpstudy\\PHPTutorial\\WWW\\mykj\\app\\views\\layout.html");
    }
}
