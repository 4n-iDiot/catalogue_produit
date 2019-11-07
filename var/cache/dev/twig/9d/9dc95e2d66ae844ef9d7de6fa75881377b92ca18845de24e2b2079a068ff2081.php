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

/* product/showProduct.html.twig */
class __TwigTemplate_731081666542384dafffbcb285259e4ef75b93ffe83c62471eae1776a6951f6b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/showProduct.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>
<div>
    <p>
        Bacon ipsum dolor amet filet mignon picanha kielbasa jowl hamburger shankle biltong chicken turkey pastrami cupim pork chop. Chicken andouille prosciutto capicola picanha, brisket t-bone. Tri-tip pig pork chop short ribs frankfurter pork ham. Landjaeger meatball meatloaf, kielbasa strip steak leberkas picanha swine chicken pancetta pork loin hamburger pork.
    </p>
    <p>
        Kielbasa pork belly meatball cupim burgdoggen chuck turkey buffalo ground round leberkas cow shank short loin bacon alcatra. Leberkas short loin boudin swine, ham hock bresaola turducken tail pastrami picanha pancetta andouille rump landjaeger bacon. Pastrami swine rump meatball filet mignon turkey alcatra. Picanha filet mignon ground round tongue ham hock ball tip tri-tip, prosciutto leberkas kielbasa short loin short ribs drumstick. Flank pig kielbasa short loin jerky ham hock turducken prosciutto t-bone salami pork jowl.
    </p>
    <p>
        Pastrami short loin pork chop, chicken kielbasa swine turducken jerky short ribs beef. Short ribs alcatra shoulder, flank pork chop shankle t-bone. Tail rump pork chop boudin pig, chicken porchetta. Shank doner biltong, capicola brisket sausage meatloaf beef ribs kevin beef rump ribeye t-bone. Shoulder cupim meatloaf, beef kevin frankfurter picanha bacon. Frankfurter bresaola chuck kevin buffalo strip steak pork loin beef ribs prosciutto picanha shankle. Drumstick prosciutto pancetta beef ribs.
    </p>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/showProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ title }}</h1>
<div>
    <p>
        Bacon ipsum dolor amet filet mignon picanha kielbasa jowl hamburger shankle biltong chicken turkey pastrami cupim pork chop. Chicken andouille prosciutto capicola picanha, brisket t-bone. Tri-tip pig pork chop short ribs frankfurter pork ham. Landjaeger meatball meatloaf, kielbasa strip steak leberkas picanha swine chicken pancetta pork loin hamburger pork.
    </p>
    <p>
        Kielbasa pork belly meatball cupim burgdoggen chuck turkey buffalo ground round leberkas cow shank short loin bacon alcatra. Leberkas short loin boudin swine, ham hock bresaola turducken tail pastrami picanha pancetta andouille rump landjaeger bacon. Pastrami swine rump meatball filet mignon turkey alcatra. Picanha filet mignon ground round tongue ham hock ball tip tri-tip, prosciutto leberkas kielbasa short loin short ribs drumstick. Flank pig kielbasa short loin jerky ham hock turducken prosciutto t-bone salami pork jowl.
    </p>
    <p>
        Pastrami short loin pork chop, chicken kielbasa swine turducken jerky short ribs beef. Short ribs alcatra shoulder, flank pork chop shankle t-bone. Tail rump pork chop boudin pig, chicken porchetta. Shank doner biltong, capicola brisket sausage meatloaf beef ribs kevin beef rump ribeye t-bone. Shoulder cupim meatloaf, beef kevin frankfurter picanha bacon. Frankfurter bresaola chuck kevin buffalo strip steak pork loin beef ribs prosciutto picanha shankle. Drumstick prosciutto pancetta beef ribs.
    </p>
</div>", "product/showProduct.html.twig", "/home/vderveaux/Documents/CatalogueProduit/catalogue_produit/templates/product/showProduct.html.twig");
    }
}
