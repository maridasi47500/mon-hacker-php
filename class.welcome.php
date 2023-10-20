<?php
namespace mywelcome;
require "class.directory.php";
require_once "class.render_figure.php";
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
      $myfilename=str_replace(Array("\n", "\r", "\r\n"), '',( dirname(__FILE__) . str_replace("./","/",$this->get_path()) . "/" . $filename ));
      $myfilename=str_replace(Array("\n", "\r", "\r\n"), '',(  $this->get_path() . "/" . $filename ));
      $file = fopen( $myfilename, "r");

         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
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

