<?php
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = ($_POST['name']);
    $birth = ($_POST['birth']);
    $age = (int) $_POST['age'];
    $gender = ($_POST['gender']);
    $h = ($_POST['na']);
    $email =($_POST['email']);
    $cno = ($_POST['cno']);
    $Edpt = ($_POST['Edpt']);
    $hd = ($_POST['hd']);
    $section =($_POST['section']);
    $emgno =($_POST['emgno']);
    $color=($_POST['color']);
    $range = ($_POST['range']);

    echo "<h3>The Survey's Outcome</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
          <th>Their Full name</th>
          <th>Date of birth</th>
          <th>Age</th>
          <th>Gender</th>
          <th>ID number</th>
          <th>Email</th>
          <th>Cellphone number</th>
          <th>Educational department</th>
          <th>Head of department</th>
          <th>Class section</th>
          <th>Home contacts</th>
          <th>Chosen Color</th>
          <th>Rating</th>
          </tr>";

    echo "<tr>
          <td>".$name."</td>
          <td>".$birth."</td>
          <td>".$age."</td>
          <td>".$gender."</td>
          <td>".$h."</td>
          <td>".$email."</td>
          <td>".$cno."</td>
          <td>".$Edpt."</td>
          <td>".$hd."</td>
          <td>".$section."</td>
          <td>".$emgno."</td>
          <td>".$color."</td>
          <td>".$range."</td>
          </tr>";
    echo "</table>";
} else {
    echo"<p>No info has been given out</p>";
}
?>