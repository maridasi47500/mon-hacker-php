<?php
namespace mywelcome;
class RenderFigureClass
{
    // déclaration d'une propriété
          public $title="Bienvenue ici";
          public $css="";
          public $header="";
          public $main="";
          public $footer="";
          public $js="";


    public $var = '<html>
<head>
<title>hello!!%1$s</title>
%2$s
</head>
<body>
%3$s
%4$s
%5$s
%6$s
</body>
</html>';
  public function __construct($title) {
$this->title=$title;
  }
  public function set_title($title){
    $this->title = $title;
  }
  public function get_title(){
    return $this->title;
  }
  public function set_css($css){
    $this->css = $css;
  }
  public function get_css(){
    return $this->css;
  }
  public function set_header($header){
    $this->header=$header;
  }
  public function get_header(){
    return $this->header;
  }
  public function set_main($main){
    $this->main=$main;
  }
  public function get_main(){
    return $this->main;
  }
  public function set_footer($footer){
    $this->footer=$footer;
  }
  public function get_footer(){
    return $this->footer;
  }
  public function set_js($js){
    $this->footer=$footer;
  }
  public function get_js(){
    return $this->js;
  }


    // déclaration des méthodes
    public function render_figure() {
    echo sprintf($this->var, $this->title,$this->css,$this->header,$this->main,$this->footer,$this->js);
    }
}
?>

