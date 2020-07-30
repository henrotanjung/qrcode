<?php
 include "phpqrcode/qrlib.php"; 

 //isi qrcode jika di scan
//  $codeContents = 'https://www.tutorialspoint.com/java/java_tutorial.pdf'; 
 $codeContents = 'http://192.168.0.27:8007/intsys/his-tpa/AAint/upload/419083/419083_AIA.pdf'; 
//  $codeContents = '//192.168.0.20/Z Folder/IT/INTERNAL ONLY/010 IT Programmer/004 Hendro/java_tutorial.pdf'; 
  
 //output gambar langsung ke browser, sebagai PNG
 QRcode::png($codeContents); 
 ?>