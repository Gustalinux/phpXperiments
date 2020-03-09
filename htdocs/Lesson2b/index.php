<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="style.php" />
        <title>POO Lesson 02</title>
    </head>
    <body>
        
        <div>
            <label id="model"></label>
        </div>
        <?php
            require_once 'Pen.php';
            
            $c1 = new Pen();
            $c1->model = "bic";
            $c1->color = "blue";
            $c1->charge = 80;
            $c1->tip = 0.5;
            $c1->capped = false;
            
            $c2 = new Pen();
            $c2->model = "faber-castell";
            $c2->color = "red";
            $c2->charge = 50;
            $c2->tip = 0.75;
            $c2->capped = false;
            
            print_r($c1);
            echo "<br>";
            print_r($c2);
            $c1->scribble();
            $c2->scribble();
            
        ?>
    </body>
</html>
