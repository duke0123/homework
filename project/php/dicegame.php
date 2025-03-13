<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1 class=text-center>Dice Game</h1>

     <form id=Alex>
    Player 1: &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="player1" >
    <br />
    
    player 2:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="player2">
    <br />

    How many sides? <input type="text" name="sides">
    <br />

    How many rounds? <input type="text" name="rounds">

    <br />

    <button type="submit">Play!</button>
     </form>

    <script>
     document.getElementById('Alex').addEventListener('submit', function(event){
      event.preventDefault();
       });


       const player1name =  <?= $player1name?>
       const player2name =  <?= $player2name?>
       const Sides = <?= $Num_side?>
       const rounds = <?= $rounds?>


    </script>


<?php
if($_SERVER["REQUEST_METHOD"] === 'POST')

$player1Name = $_POST['player1']; 
$player2Name = $_POST['player2']; 
$sides = intval($_POST['sides']); 
$rounds = intval($_POST['rounds']);
?>









    <table class="table table-striped">
        <tr>
          <th>
            Roll #
         </th>
    
          <th>
            Player 1 Rolled
         </th>
       
          <th>
            Player 2 Rolled
         </th>
       
          <th>
            Winner
         </th>
       </tr>

         <?php
            require_once 'Dice.class.php';


            $d1 = new Dice(5);
            $d2 = new Dice(9);



           for($i=1; $i<=10; $i++){
            $d1->roll();
            $d2->roll();

            ?>

            <tr>
              <td> <? echo $i; ?>. </td>
              <td>
                  <?= $d1->get_face_value()  ?>
              </td>
              <td>
                  <?= $d2->get_face_value()  ?>
              </td>
              <td>
                <?php
                     if($d1->get_face_value() == $d2->get_face_value()){
                        echo 'tie';
                     }
                     if($d1->get_face_value() > $d2->get_face_value()){
                        echo 'Player 1';
                     }
                     if($d1->get_face_value() < $d2->get_face_value()){
                        echo 'Player 2';
                     }
                ?>
              </td>
        
            </tr>

       <?php
           }

         ?>










</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>