<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
    </head>


    <body>
        
       
    <h2>CONTACT MANAGER</h2>
    <hr>

    <?php
    include('Contact.php');


    contact::sayHello();
    $fruits = Contact::getFruits();
    echo '<br>';
    echo json_encode($fruits);

  ?>

  <ul>
  <?php
    foreach($fruits as $fruit)
    {
  ?>

        <li><?=$fruit['name']?> (<?=$fruit['created']?>)</li>
    


  <?php } ?>
  

  <table border = 1 cellpadding= 2 bgcolor = green>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>Created</th>
        </thead>

        <?php

            foreach($fruits as $fruit){
        ?>

        <tr>
                <td><?= $fruit['id'] ?></td>
                <td><?= $fruit['name'] ?></td>
                <td><?= $fruit['created'] ?></td>
        </tr>
            <?php } ?>
    </table>
       </ul> 


                
    

        <form id="contacts" action="processform.php" method="post">
        <label> Name</label>
        <input type="text" name="name" value"" required>
        <br>
        <label> Email </label>
        <input type="text" name="email" value""required>
        <br>
        <label> Phone </label>
        <input type="text" name="phone" value""required>
        <br>

        <label for=""> Gender</label>


        <select name="gender">
        <option value="male">Male</option>
        <option value="Femal">Female</option>
        </select>
        <br>
        <button type="submit" class="btn">submit</button>
        </form>

            </body>
        </html>