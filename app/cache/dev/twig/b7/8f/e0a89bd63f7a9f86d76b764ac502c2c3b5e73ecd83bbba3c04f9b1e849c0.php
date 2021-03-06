<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_b78fe0a89bd63f7a9f86d76b764ac502c2c3b5e73ecd83bbba3c04f9b1e849c0 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                ";
            // line 13
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array"), (64 | 256)), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  110 => 22,  90 => 37,  76 => 28,  124 => 11,  100 => 56,  70 => 44,  34 => 30,  81 => 36,  53 => 11,  23 => 3,  127 => 60,  104 => 38,  97 => 41,  84 => 27,  77 => 46,  65 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 17,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  93 => 38,  88 => 31,  78 => 26,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 63,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 39,  62 => 19,  49 => 13,  87 => 25,  44 => 12,  21 => 2,  94 => 34,  89 => 30,  85 => 32,  75 => 24,  68 => 14,  56 => 16,  27 => 7,  25 => 35,  28 => 3,  24 => 3,  31 => 8,  46 => 13,  26 => 11,  19 => 1,  79 => 20,  72 => 27,  69 => 26,  47 => 8,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 33,  111 => 37,  108 => 47,  101 => 43,  98 => 30,  96 => 31,  83 => 35,  74 => 27,  66 => 14,  55 => 8,  52 => 14,  50 => 18,  43 => 11,  41 => 10,  35 => 9,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 4,  109 => 3,  106 => 45,  103 => 32,  99 => 31,  95 => 39,  92 => 21,  86 => 47,  82 => 28,  80 => 29,  73 => 16,  64 => 24,  60 => 12,  57 => 20,  54 => 19,  51 => 14,  48 => 16,  45 => 8,  42 => 11,  39 => 10,  36 => 8,  33 => 9,  30 => 3,);
    }
}
