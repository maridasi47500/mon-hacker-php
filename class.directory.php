<?php
namespace mywelcome;
include "class.render_figure.php";
class DirectoryClass
{
  public $path;
  public $name;
  public $title_directory;

  function __construct($name) {
    $this->title_directory = $name;
  }
  function get_title_directory($name) {
    return $this->title_directory;
  }
  public function get_path() {
    return $this->path;
  }
  public function set_path($path) {
    $this->path=$path;
  }

    // déclaration d'une propriété
    public $var = 'une valeur par défaut';

    // déclaration des méthodes
    public function displayVar() {
        echo $this->var;
    }
}
?>

