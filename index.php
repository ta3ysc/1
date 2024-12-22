<?php include "ana.php" ?>
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inde.css">
    <style>.body {
    background-color: gray;
    position: relative;
    text-align: center;
}

.tonsec {
    text-align: center;
    width: 150px;
    margin: auto;
}

.şarkılar {
    text-align: center;
    margin: auto;
    position: relative;
}</style>
</head>
<body>
    
     <form action="ana.php" method="post">
   <div class="tonsec">
     <label > ton seçiniz</label>
     <select name="ton" >
<option value="C">C</option>
<option value="C#">C#</option>
<option value="db">db</option>
<option value="D">D</option>
<option value="D#">D#</option>
<option value="Eb">Eb</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="F#">F#</option>
<option value="Gb">Gb</option>
<option value="G">G</option>
<option value="G#">G#</option>
<option value="Ab">Ab</option>
<option value="A">A</option>
<option value="A#">A#</option>
<option value="Bb">Bb</option>
<option value="B">B</option>


</select>
</div>
<br><div class="şarkılar">
     <?php
        for ($i=1; $i<100 ; $i++) { 
        $sorguk="SELECT * FROM akors.ana where id=$i";
        $çalış=mysqli_query($baglan,$sorguk);
        while( $sorgu=$çalış->fetch_assoc()){
               echo("<input type='submit' name=".$sorgu["id"]." value=".$sorgu["id"]."))))".$sorgu["sarkıcı"]."---".$sorgu["sarkıismi"]."><br>");
           
      
     
     
       
            if(isset($_POST["".$sorgu['id'].""])){
            echo($sorgu["id"]);
        
          }  
        
    }
    }
        ?></form>
       
    </div>
</body>
</html>

