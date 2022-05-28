 <html>
    <head>
      <title> le fichiers en PHP </title> 
    </head> 
    <body>
     <h1>fichier ecxercice</h1>
        <?php 
        if(file_exists("phpFicher.txt"))
        {
        	
        }      
            $ressource = fopen('phpFichier.txt', 'rb');
            echo fread($ressource, filesize('test.txt'));
        ?>


    </body>
 </html>