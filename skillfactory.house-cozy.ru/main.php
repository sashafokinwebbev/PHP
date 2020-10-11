<!DOCTYPE html> 
<html lang="ru"> 
    <head> 
	<title>portfolio</title>
        <meta charset="utf-8">         
        <link rel="stylesheet" href="index.css">
		
    </head> 
	<body>
        <header>

            <h1><?php echo $name ,' ', $surname; ?></h1>

        </header>


    <div class = 'blocks'>        
        <div class = "block-news">
           
           <br> <div class="news-foto"><h2>Моё фото</h2><img src="my.png" width="640" height="760"></div>
           <br><h2><?php echo 'Возраст: ' ,$year,'   '; ?></h2> 
           <h2><?php echo '  Доп. Образование: ',$dopschool;?></h2> 

        </div> 

</div>
        
    </body> </html>