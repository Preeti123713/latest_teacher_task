<?php

/* Template Name:Teacher-Listing */

$selectedLevel = $_GET[ 'level-select' ];
$selectedCountry = $_GET[ 'country-select' ];
$selectedLanguage = $_GET[ 'language-select' ];

$arguments = array(
    'post_type' => 'teacher',
    'meta_query' => array(
        array(
            'key' => 'country',
            'value' => 'india',
            'compare' => 'LIKE',
        ),  
    ),
);
$the_main_loop = new WP_Query($arguments);
echo $the_main_loop->found_posts.' iuuuuuuuuuuuuu';

if ( $the_main_loop->have_posts()) {
    echo "fffffffffffffffff";
while($the_main_loop->have_posts()) {
    $the_main_loop->the_post(); 
    echo get_the_ID(); 
} 
wp_reset_query();
} 


?>
<!doctype html>
<html lang = 'en'>
<head>
<!-- Required meta tags -->
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>

<!-- Bootstrap CSS -->
<link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' integrity = 'sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin = 'anonymous'>

<title>Hello, world!</title>
</head>
<body>
<div class = 'container my-4'>
<div class = 'card-group'>
<div class = 'card'>
<div class = 'card-body'>
<h5 class = 'card-title'>Teacher`s Name</h5>
<p class = 'card-text'><?php  echo 'Name: ' . $category_array[0]->post_name  . '<br>';
?></p>
<p class = 'card-text'><?php  echo 'Level: ' . $selectedLevel . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Country: ' . $selectedCountry . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Language: ' . $selectedLanguage . '<br>';
?></p>
<input type = 'checkbox' class = 'form-check-input' id = 'exampleCheck1'>
</div>
</div>
<div class = 'card'>
<div class = 'card-body'>
<h5 class = 'card-title'>Teacher`s Name</h5>
<p class = 'card-text'><?php echo 'Level: ' . $selectedLevel . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Country: ' . $selectedCountry . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Language: ' . $selectedLanguage . '<br>';
?></p>
<input type = 'checkbox' class = 'form-check-input' id = 'exampleCheck1'>
</div>
</div>
<div class = 'card'>
<div class = 'card-body'>
<h5 class = 'card-title'>Teacher`s Name</h5>
<p class = 'card-text'><?php echo 'Level: ' . $selectedLevel . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Country: ' . $selectedCountry . '<br>';
?></p>
<p class = 'card-text'><?php echo 'Language: ' . $selectedLanguage . '<br>';
?></p>
<input type = 'checkbox' class = 'form-check-input' id = 'exampleCheck1'>
</div>
</div>
</div>
</div>

</div>
</div>
<script src = 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js' integrity = 'sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin = 'anonymous'></script>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js' integrity = 'sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct' crossorigin = 'anonymous'></script>
</body>
</html>
