<?php
    // Create $products array
    $products = [ [
        'type' => 'electronics',
        'name' => 'Audio Technica ATH-M50x',
        'price' => 119.99,
        'quantity' => 2 ],
        [
        'type' => 'electronics',
        'name' => 'Sennheiser HD 202 II',
        'price' => 24.50,
        'quantity' => 5 ],
        [
        'type' => 'electronics',
        'name' => 'GPX HM3817DTBK Micro System',
        'price' => 135.99,
        'quantity' => 1 ],
        [
        'type' => 'electronics',
        'name' => 'Samsung MX-J630 2.0 Channel 230 Watt System',
        'price' => 117.99,
        'quantity' => 4 ],
        [
        'type' => 'electronics',
        'name' => 'M-Audio Bass Traveler',
        'price' => 29.00,
        'quantity' => 9 ],
        
        [
        'type' => 'movies',
        'name' => 'Finding Dory',
        'price' => 19.99,
        'quantity' => 4 ],
        
        [
        'type' => 'movies',
        'name' => 'Terminator: Genisys',
        'price' => 14.95,
        'quantity' => 3 ],
        [
        'type' => 'movies',
        'name' => 'Interstellar',
        'price' => 12.00,
        'quantity' => 4 ],
        [
        'type' => 'movies',
        'name' => 'Transformers: Age of Extinction',
        'price' => 9.95,
        'quantity' => 7 ],
        [
        'type' => 'movies',
        'name' => 'Eye in the Sky',
        'price' => 14.95,
        'quantity' => 6 ],
        [
        'type' => 'movies',
        'name' => 'The spy who dumped me',
        'price' => 29.00,
        'quantity' => 8 ],
        [
        'type' => 'movies',
        'name' => 'Mamma Mia, Here We Go Again',
        'price' => 22.99,
        'quantity' => 4 ],
        [
        'type' => 'electronics',
        'name' => 'M-Audio Bass Traveler',
        'price' => 29.00,
        'quantity' => 5 ],
        [
        'type' => 'video-games',
        'name' => 'Battlefield 1',
        'price' => 59.99,
        'quantity' => 3 ],
        [
        'type' => 'video-games',
        'name' => 'Overwatch',
        'price' => 40.00,
        'quantity' => 1 ],
        [
        'type' => 'video-games',
        'name' => 'Gears of War 4',
        'price' => 59.99,
        'quantity' => 8 ],
        [
        'type' => 'video-games',
        'name' => 'Titanfall 2',
        'price' => 59.99,
        'quantity' => 7 ],
        [
        'type' => 'video-games',
        'name' => 'Sid Meier\'s Civilization VI ',
        'price' => 59.99,
        'quantity' => 4 ],
        [
        'type' => 'video-games',
        'name' => 'The Sims 4',
        'price' => 39.99,
        'quantity' => 2 ],
        [
        'type' => 'video-games',
        'name' => 'Grand Theft Auto V',
        'price' => 59.99,
        'quantity' => 7 ] ];
?>

<?php // STEP 1 add two more products
    $products[] = [
        'type' => 'movies',
        'name' => 'The Irishman',
        'price' => 29.99,
        'quantity' => 1 ];
        $products[] = [
            'type' => 'video-games',
            'name' => 'Fuzion Frenzy',
            'price' => 14.99,
            'quantity' => 2 ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    table { 
        border: 1px solid black; 
        border-collapse: collapse; 
        background: #fff; 
    }
    
    th, td { 
        border: 1px solid black; 
        padding: .2em .7em;   
        color: #000;
        font-size: 16px; 
        font-weight: 400; 
    } 
    
    thead th { 
        background-color: #1A466A; 
        color: #fff; 
        font-weight: bold;  
    }
    .container { 
        margin: 10px;
    }
 </style>
  </head>
  <body class="container">

    
 <h4>Product List: Step 2 (1)</h4>
  <table class="table">
  <thead>
    <tr>
      <?php
        $keys = array_keys($products[0]);
        $tRow = "";
        foreach($keys as $k) {
            $tRow.="<th>".ucfirst($k)."</th>";
        }
        echo $tRow;
      ?>
    </tr>
  </thead>
    <tbody>
      <?php
        foreach ($products as $s) {
            $tRow = "<tr>";
             foreach($s as $key => $value) {
                $tRow .= "<td>".$value."</td>";
             }
             $tRow .= "</tr>";
             echo $tRow;
        }
        ?>
    </tbody>
</table>

<h4>Product List: Step 2 (2)</h4>
  <table class="table">
  <thead>
    <tr>
      <?php
        $keys = array_keys($products[0]);
        $tRow = "";
        foreach($keys as $k) {
            $tRow.="<th>".ucfirst($k)."</th>";
        }
        echo $tRow;
      ?>
    </tr>
  </thead>
    <tbody>
      <?php
        foreach ($products as $s) {
            $tRow = "<tr>";
            $isPriceOver30 = false;
            foreach ($s as $key => $value) {
                if ($key === 'price' && $value > 30) {
                    $isPriceOver30 = true;
                }
                $tRow .= "<td>".$value."</td>";
            }
            $tRow .= "</tr>";
            if ($isPriceOver30) {
                echo $tRow;
            }
        }
        ?>
    </tbody>
</table>

<h4>Product List: Step 2 (3)</h4>
  <table class="table">
  <thead>
    <tr>
      <?php
        $keys = array_keys($products[0]);
        $tRow = "";
        foreach($keys as $k) {
            $tRow.="<th>".ucfirst($k)."</th>";
        }
        echo $tRow;
      ?>
    </tr>
  </thead>
    <tbody>
      <?php
        foreach ($products as $s) {
            if ($s['type'] == 'electronics' && $s['price'] > 30) {
                $tRow = "<tr>";
                foreach($s as $key => $value) {
                    $tRow .= "<td>".$value."</td>";
                }
                $tRow .= "</tr>";
                echo $tRow;
            }
        }
        ?>
    </tbody>
</table>

<h4>Product List: Step 2 (4)</h4>
  <table class="table">
  <thead>
    <tr>
      <?php
        $keys = array_keys($products[0]);
        $tRow = "";
        foreach($keys as $k) {
            $tRow.="<th>".ucfirst($k)."</th>";
        }
        echo $tRow.="<th>revenue</th>";
      ?>
    </tr>
  </thead>
    <tbody>
      <?php

        foreach ($products as $s) {
            if ($s['type'] == 'movies') {
                $tRow = "<tr>";
                foreach($s as $key => $value) {
                    $tRow .= "<td>".$value."</td>";
                }
                $rev = $s['quantity'] * $s['price'];
                $tRow .= "<td>$rev</td></tr>";
                echo $tRow;
            }
        }
        ?>
    </tbody>
</table>

<h4>Product List: Step 2 (5)</h4>
  <table class="table">
  <thead>
    <tr>
      <?php
        $keys = array_keys($products[0]);
        $tRow = "";
        foreach($keys as $k) {
            $tRow.="<th>".ucfirst($k)."</th>";
        }
        echo $tRow.="<th>revenue</th>";
      ?>
    </tr>
  </thead>
    <tbody>
      <?php

        foreach ($products as $s) {
            if ($s['type'] == 'video-games') {
                $tRow = "<tr>";
                foreach($s as $key => $value) {
                    $tRow .= "<td>".$value."</td>";
                }
                $rev = $s['quantity'] * $s['price'];
                $tRow .= "<td>$rev</td></tr>";
                echo $tRow;
            }
        }
        ?>
    </tbody>
</table>

  </body>
</html>