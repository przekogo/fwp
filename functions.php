<?php
// creates polaroids from folder
  function gallery($folder) {
    $directory="./assets/images/gallery/".$folder;
      $dir=opendir($directory); 
      while($file_name=readdir($dir)) {
       if(($file_name!=".")&&($file_name!="..")) {
        $img = "assets/images/gallery/".$folder."/".$file_name;
        echo "  <div class='polaroid'>
                                  <div class='polaroid-image'>
                                 <img src='$img' />
                                  </div>
                                  <div class='retro-filter'><img src='assets/images/grunge.jpg'></div>
                                </div>";
        echo "\n";
        }
      }
    closedir($dir);
  }
// creates carousel from folder
  function gallery_carousel($folder) {
    $directory="./assets/images/gallery/$folder";
    $dir=opendir($directory);
     
    while($file_name=readdir($dir)) {
      if(($file_name!=".")&&($file_name!="..")) {
        $img = "assets/images/gallery/$folder/".$file_name;
        echo "<div class='item'>
          <img src=$img>
          </div>";
        echo "\n";
      }
    }  
    closedir($dir);
  }
?>