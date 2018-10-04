<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_8eba05f8da422e66610479ebf342bbe9e76598ed034378fec1b4ef9aa0635db9 extends Twig_Template
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
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Default:index.html.twig", "/home/cabox/workspace/karudev/veille/symfony2/sf/src/Blog/CoreBundle/Resources/views/Default/index.html.twig");
    }
}
