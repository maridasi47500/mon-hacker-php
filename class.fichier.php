namespace mywelcome;
class FichierClass
{
  // Redéfinition de la méthode parente
public $name;
public $path;
  function __construct($path,$name){
$this->name=$name;
$this->path=$path;
}
  public function get_path() {
    return $this->path;
  }
  public function set_path($mypath) {
    $this->path=$mypath;
  }
  public function get_name() {
    return $this->name;
  }
  public function set_name($name) {
    $this->name=$name;
  }

public function lire(){

$filename=str_replace(Array("\n", "\r", "\r\n"), '',( dirname(__FILE__) . str_replace("./","/",$this->get_path()) . "/" . $this->get_name() ));
      $file = fopen( $filename, "r");

         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
return $filetext;
}
}
