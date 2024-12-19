
<?php
$baglan = mysqli_connect("localhost", "root", "",  "akors");


for ($i=1; $i<100 ; $i++) { 
    $sorguk="SELECT * FROM akors.ana where id=$i";
    $çalış=mysqli_query($baglan,$sorguk);
 while( $sorgu=$çalış->fetch_assoc()){
 
     if(isset($_POST["".$sorgu['id'].""])){
       echo("<link rel="."stylesheet"." href="."an.css".">");
        echo("<div class="."baslık".">");
        echo("<h1>".$sorgu["id"]."|".$sorgu["sarkıcı"]."|".$sorgu["sarkıismi"]."</h>");
        echo("</div>");
     
 $select1=$_POST["ton"];
 switch ($select1) {
    case 'C':
    $ton="1";
        break;
    case 'C#':
            $ton="2";
                break;
    case 'db':
           $ton="3";
                break;
    case 'D':
        $ton="4";
           break;
    case 'D#':
                                    $ton="5";
                                        break;
    case 'Eb':
                                            $ton="6";
                                                break;
    case 'E':
                                                    $ton="7";
                                                        break;
    case 'F':
                                                            $ton="8";
                                                                break;
    case 'F#':
          $ton="9";
          break;
    case 'Gb':
         $ton="10";
         break;
    case 'G':
           $ton="11";
            break;
    case 'G#':
            $ton="12";
                                                                                                break;
    case 'Ab':
                                                                                                    $ton="13";
                                                                                                        break;
    case 'A':
                                                                                                            $ton="14";
                                                                                                                break;
    case 'A#':
                                                                                                                    $ton="15";
                                                                                                                        break;
    case 'Bb':
                                                                                                                            $ton="16";
                                                                                                                                break;
    case 'B':
                                                                                                                                    $ton="17";
                                                                                                                                        break;
                                                                                                                                      
 }
 $sorguk="SELECT * FROM akors.".$ton." where id=$i";
 $çalış=mysqli_query($baglan,$sorguk);
 while( $sorgu=$çalış->fetch_assoc()){
    echo("<div class="."soz".">");
        echo($sorgu["sarkı_sozleri"]);
    echo("</div>");




 
   }  


}//isset buton



}//while



}//for




?>