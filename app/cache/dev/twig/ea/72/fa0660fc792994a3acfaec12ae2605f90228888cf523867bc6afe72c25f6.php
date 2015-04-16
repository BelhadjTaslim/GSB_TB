<?php

/* AheGsbBundle::layout.html.twig */
class __TwigTemplate_ea72fa0660fc792994a3acfaec12ae2605f90228888cf523867bc6afe72c25f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Laboratoire Galaxy-Swiss-Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    
    <!--link href=\"";
        // line 7
        echo "\" 
          rel=\"stylesheet\" type=\"text/css\" /-->
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "36cbc85_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36cbc85_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/36cbc85_bootstrap_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"styles.css\" type=\"text/css\" />
    ";
        } else {
            // asset "36cbc85"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_36cbc85") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/36cbc85.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"styles.css\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "  </head>
        
        

  <body>
      
    <div id=\"entete\" style=\"margin-left:auto;margin-right:auto;text-align:center;\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ahegsb/images/logo.png"), "html", null, true);
        echo "\" 
             id=\"logoGSB\" 
             alt=\"Laboratoire Galaxy-Swiss Bourdin\" 
             title=\"Laboratoire Galaxy-Swiss Bourdin\"
        />
        <h1><br/>Laboratoire Galaxy Swiss-Bourdin</h1>
    </div>

     ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "     ";
        $this->displayBlock('menu', $context, $blocks);
        // line 33
        echo "     ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        
   
  </body>
</html>";
    }

    // line 29
    public function block_messages($context, array $blocks = array())
    {
        // line 30
        echo "     ";
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "     ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 36
        echo "     ";
    }

    // line 34
    public function block_bloc1($context, array $blocks = array())
    {
        // line 35
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  116 => 34,  112 => 36,  109 => 34,  106 => 33,  102 => 32,  99 => 31,  95 => 30,  92 => 29,  85 => 37,  82 => 33,  79 => 31,  77 => 29,  66 => 21,  57 => 14,  39 => 10,  35 => 9,  31 => 7,  23 => 1,);
    }
}
