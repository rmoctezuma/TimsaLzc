<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_ee201b7e5286871138855a98c0a01f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  564 => 178,  553 => 176,  549 => 175,  541 => 172,  536 => 170,  530 => 168,  528 => 167,  522 => 163,  513 => 160,  509 => 159,  503 => 158,  500 => 157,  496 => 156,  491 => 154,  484 => 152,  476 => 150,  473 => 149,  470 => 148,  466 => 134,  463 => 133,  459 => 132,  456 => 131,  453 => 130,  449 => 123,  445 => 122,  442 => 121,  437 => 104,  426 => 102,  422 => 101,  415 => 97,  411 => 96,  406 => 95,  403 => 94,  391 => 83,  388 => 82,  384 => 106,  382 => 94,  378 => 92,  376 => 82,  373 => 81,  370 => 80,  365 => 135,  363 => 130,  357 => 126,  353 => 124,  351 => 121,  348 => 120,  343 => 117,  329 => 116,  320 => 115,  303 => 114,  298 => 113,  296 => 112,  292 => 110,  287 => 108,  284 => 107,  281 => 80,  278 => 79,  276 => 78,  271 => 76,  268 => 75,  265 => 74,  260 => 71,  245 => 69,  242 => 68,  239 => 67,  222 => 66,  219 => 65,  216 => 64,  210 => 60,  204 => 59,  201 => 58,  197 => 56,  193 => 55,  188 => 54,  182 => 53,  170 => 52,  168 => 51,  165 => 50,  162 => 49,  159 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  141 => 42,  138 => 41,  136 => 40,  132 => 38,  126 => 34,  123 => 33,  119 => 32,  115 => 30,  112 => 29,  104 => 143,  101 => 142,  98 => 141,  94 => 139,  92 => 138,  89 => 137,  87 => 74,  84 => 73,  82 => 64,  79 => 63,  77 => 29,  74 => 28,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 22,  50 => 20,  45 => 17,  43 => 16,  40 => 15,  37 => 14,);
    }
}