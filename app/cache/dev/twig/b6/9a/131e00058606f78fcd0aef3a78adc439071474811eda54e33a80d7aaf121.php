<?php

/* AheGsbBundle:Default:formConnexion.html.twig */
class __TwigTemplate_b69a131e00058606f78fcd0aef3a78adc439071474811eda54e33a80d7aaf121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"erreur\">
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreurLogMdp"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </div>

<div class=\"container\" >
    <div class=\"jumbotron\" style=\"background-color:#87CEEB;\">
  <p class=\"formLabel\" style=\"text-align:center;\">Identification Visiteurs</p>
      <form method=\"POST\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <table>
            <tr>
                <td>
                    <div class=\"formLabel\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'label', array("label" => "Login"));
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'errors');
        echo "
                    </div>
                </td>  
                <td>
                    ";
        // line 25
        echo "                    <div class=\"formLabel\">
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'widget');
        echo " 
                    </div>
                        
                </td>    
             </tr>  
             
             <tr>       
                <td>
                    <div class=\"formLabel\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp"), 'label', array("label" => "Mot de passe"));
        echo "
                    </div>
                </td>    
                <td>  
                    ";
        // line 40
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp"), 'errors');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp"), 'widget');
        echo "  
                        
                </td>
            </tr>
            
            <tr>
                 <td>
                    <div class=\"formLabel\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil"), 'label', array("label" => "Profil"));
        echo "
                    </div>
                 </td>
                 <td>
                     ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil"), 'widget');
        echo "
                     
                 </td>
             </tr>
             
            <tr>
                <td><input class =\"btn btn-success\" type=\"submit\" value=\"Valider\" 
                           name=\"valider\"></td>
                <td><input class=\"btn btn-danger\" type=\"reset\" value=\"Annuler\" 
                           name=\"annuler\"></td> 
            </tr>
        </table>
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
    </div>
  </div>
  
  ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Default:formConnexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 65,  130 => 53,  123 => 49,  112 => 41,  107 => 40,  100 => 35,  88 => 26,  85 => 25,  78 => 20,  74 => 19,  66 => 14,  62 => 13,  55 => 8,  46 => 6,  42 => 5,  39 => 4,  32 => 3,  29 => 2,);
    }
}
