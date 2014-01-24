<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_4a17f045fc72f149de7b6c5a3212ce9f962396352cdfdbc96d8ee70202c2f6b6 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 321,  343 => 320,  299 => 278,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  505 => 391,  500 => 389,  385 => 160,  382 => 159,  367 => 156,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  270 => 110,  242 => 96,  228 => 88,  225 => 87,  218 => 83,  206 => 77,  363 => 155,  357 => 152,  353 => 121,  351 => 150,  332 => 116,  315 => 110,  306 => 107,  300 => 105,  297 => 277,  274 => 97,  265 => 107,  263 => 95,  190 => 68,  175 => 65,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 322,  327 => 140,  293 => 118,  288 => 101,  262 => 104,  259 => 103,  248 => 96,  153 => 77,  20 => 1,  23 => 1,  110 => 52,  100 => 36,  255 => 103,  226 => 95,  215 => 93,  178 => 66,  303 => 128,  296 => 175,  292 => 121,  279 => 115,  231 => 89,  223 => 86,  200 => 118,  113 => 40,  53 => 17,  591 => 275,  584 => 274,  573 => 271,  566 => 270,  562 => 269,  555 => 265,  549 => 264,  542 => 259,  540 => 258,  537 => 257,  528 => 250,  520 => 244,  517 => 243,  510 => 393,  487 => 229,  473 => 221,  466 => 217,  459 => 213,  450 => 209,  446 => 207,  442 => 205,  431 => 201,  419 => 198,  416 => 197,  399 => 196,  392 => 191,  371 => 181,  364 => 177,  361 => 176,  358 => 175,  356 => 174,  352 => 172,  344 => 119,  334 => 145,  331 => 187,  324 => 139,  321 => 112,  318 => 111,  316 => 155,  304 => 149,  301 => 148,  291 => 102,  284 => 118,  281 => 138,  276 => 113,  272 => 111,  261 => 105,  244 => 136,  236 => 117,  211 => 105,  201 => 100,  184 => 92,  126 => 42,  118 => 49,  174 => 59,  161 => 63,  148 => 46,  212 => 79,  210 => 116,  124 => 60,  198 => 99,  192 => 96,  186 => 110,  167 => 84,  165 => 83,  146 => 72,  129 => 46,  104 => 37,  213 => 96,  202 => 77,  194 => 83,  191 => 67,  185 => 66,  180 => 63,  172 => 64,  160 => 70,  150 => 55,  114 => 66,  97 => 23,  84 => 27,  81 => 23,  286 => 119,  282 => 164,  277 => 114,  271 => 111,  266 => 160,  256 => 153,  251 => 101,  222 => 127,  207 => 93,  170 => 84,  134 => 54,  76 => 28,  70 => 26,  65 => 22,  34 => 5,  249 => 100,  245 => 109,  237 => 93,  232 => 115,  216 => 97,  205 => 84,  195 => 71,  188 => 90,  181 => 91,  152 => 77,  137 => 48,  90 => 37,  77 => 25,  58 => 18,  480 => 225,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 210,  444 => 149,  440 => 204,  437 => 147,  435 => 202,  430 => 144,  427 => 200,  423 => 199,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 187,  381 => 186,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 179,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 144,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 130,  258 => 94,  252 => 80,  247 => 132,  241 => 119,  229 => 87,  220 => 126,  214 => 106,  177 => 64,  169 => 74,  140 => 42,  132 => 69,  128 => 53,  107 => 27,  61 => 23,  38 => 6,  273 => 112,  269 => 94,  254 => 125,  243 => 92,  240 => 92,  238 => 145,  235 => 85,  230 => 82,  227 => 127,  224 => 81,  221 => 85,  219 => 84,  217 => 120,  208 => 89,  204 => 76,  179 => 105,  159 => 53,  143 => 43,  135 => 73,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  94 => 31,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 20,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  196 => 92,  183 => 94,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 45,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 2,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 46,  115 => 50,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 11,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 82,  162 => 54,  154 => 60,  149 => 89,  147 => 75,  144 => 59,  141 => 73,  133 => 72,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 39,  92 => 28,  86 => 19,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}