<?php

  $title = 'Responsive PHP Page';

  function sum($a, $b){
    echo $a .' + '. $b .' = '. $a + $b;
  }

  function sub($a, $b){
    echo $a .' - '. $b. ' = '. $a - $b;
  }

  function div($a, $b){
    echo $a .' / '. $b. ' = ' .$a / $b;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Full-width mint green h1 -->
  <h1 class="w-full text-black text-3xl font-bold text-center py-6">
    Welcome to My Page
  </h1>

  <!-- Centered, rounded-corner section -->
  <div class="max-w-2xl md:mx-auto mt-10 bg-white p-6 rounded-2xl shadow-md mx-4">
    <p class="text-gray-700 text-lg">
      <?php
        sum(34, 45);
        echo '<br>';
        sub(34, 45);
        echo '<br>';
        div(34, 45);
        echo '<br>';
      ?>
    </p>
  </div>

</body>
</html>