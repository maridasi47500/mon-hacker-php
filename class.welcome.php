<?php
namespace mywelcome;
require "class.directory.php";
require_once "class.render_figure.php";
require_once "class.fichier.php";
use mywelcome\RenderFigureClass as RenderFigure;
class WelcomeClass extends DirectoryClass
{
  // Redéfinition de la méthode parente
public $title;
public $path;
  function __construct($title){
$this->title=$title;
}
  public function get_path() {
    return $this->path;
  }
  public function set_path($mypath) {
    $this->path=$mypath;
  }

public function render($filename){
  $file=new FichierClass($filename, $this->get_path());
      $filetext=$file->lire();
$myProgram=new RenderFigure($this->title);
$myProgram->set_main($filetext);
$myProgram->render_figure();
}
  function displayVar()
  {
    echo "Classe étendue\n";
    parent::displayVar();
  }
}

?>

