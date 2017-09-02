<?php

$dirname = "/img";
          $images = glob ( $dirname . "*.JPG" );
          $fp = fopen('file.csv', 'w');
          foreach ( $images as $image ) {
            print ($image);
            fputcsv($fp, $image);

          }

fclose($fp);
 ?>
