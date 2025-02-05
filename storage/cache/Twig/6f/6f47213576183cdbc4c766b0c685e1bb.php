<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login.twig */
class __TwigTemplate_400c65afb371bcf37ee2e48f794123cc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background: #f4f4f4; }
        form { background: white; padding: 20px; border-radius: 5px; display: inline-block; margin-top: 50px; }
        input { display: block; width: 100%; margin: 10px 0; padding: 8px; }
        button { background: #28a745; color: white; padding: 10px; border: none; cursor: pointer; }
        button:hover { background: #218838; }
        .register-link { margin-top: 15px; display: block; }
    </style>
</head>
<body>
    <h1>Login</h1>
    
    ";
        // line 19
        if (array_key_exists("error", $context)) {
            // line 20
            yield "        <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
    ";
        }
        // line 22
        yield "    
    <form method=\"POST\" action=\"/login\">
        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "\">
        
        <label for=\"username\">Username:</label>
        <input type=\"text\" name=\"username\" required><br>
        
        <label for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" required><br>
        
        <button type=\"submit\">Login</button>
    </form>

    <p class=\"register-link\">Don't have an account? <a href=\"/register\">Register here</a></p>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  74 => 24,  70 => 22,  64 => 20,  62 => 19,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background: #f4f4f4; }
        form { background: white; padding: 20px; border-radius: 5px; display: inline-block; margin-top: 50px; }
        input { display: block; width: 100%; margin: 10px 0; padding: 8px; }
        button { background: #28a745; color: white; padding: 10px; border: none; cursor: pointer; }
        button:hover { background: #218838; }
        .register-link { margin-top: 15px; display: block; }
    </style>
</head>
<body>
    <h1>Login</h1>
    
    {% if error is defined %}
        <p style=\"color: red;\">{{ error }}</p>
    {% endif %}
    
    <form method=\"POST\" action=\"/login\">
        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token }}\">
        
        <label for=\"username\">Username:</label>
        <input type=\"text\" name=\"username\" required><br>
        
        <label for=\"password\">Password:</label>
        <input type=\"password\" name=\"password\" required><br>
        
        <button type=\"submit\">Login</button>
    </form>

    <p class=\"register-link\">Don't have an account? <a href=\"/register\">Register here</a></p>
</body>
</html>
", "login.twig", "C:\\laragon\\www\\Mvc_moderne2\\app\\views\\front\\login.twig");
    }
}
