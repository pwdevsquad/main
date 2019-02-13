
<?php
    if( isset( $_POST['Crea'] ) )
    {
      $file = "test/../text.txt";
//если файла нету... тогда
if (!file_exists($file)) {
  echo "File is not founded";
  $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
    echo "File created";
  fwrite($fp, "Значение, то что будет в файле");
  fclose($fp);
}



    }
?>
