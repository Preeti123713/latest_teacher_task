<?php
/* Template Name: Teacher-Listing */

$selectedLevel = $_GET['level-select'];
$selectedCountry = $_GET['country-select'];
$selectedLanguage = $_GET['language-select'];
$arguments = array(
    'post_type' => 'teacher',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'country',
            'value' => $selectedCountry,
            'compare' => 'LIKE',
        ),
        array(
            'key' => 'level',
            'value' => $selectedLevel,
            'compare' => 'LIKE',
        ),
        array(
            'key' => 'language',
            'value' => $selectedLanguage,
            'compare' => 'LIKE',
        ),
    ),
);

$the_main_loop = new WP_Query($arguments);
?>
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'
        integrity='sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N' crossorigin='anonymous'>

    <title>Hello, world!</title>
</head>

<body>
    <form method="GET" action='<?php echo get_permalink(30);?>'>
<div class="container">
  <div class="row">
            <?php
            if ($the_main_loop->have_posts()) {
                while ($the_main_loop->have_posts()) {
                    $the_main_loop->the_post();
                    $meta = get_post_meta(get_the_ID());
// print_r($meta); die;
?>
         <div class="col-md-4">
        <!-- Your card HTML goes here -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo the_title() ?></h5>
            <p class="card-text">Level  : <?php echo $meta['level'][0] ?></p>
            <p class="card-text">Country : <?php echo $meta['country'][0] ?></p>
            <p class="card-text">Language :  <?php echo $meta['language'][0] ?></p>
            <input type="checkbox" class="form-check-input" id="teacher_id" name="teachers[]"  value="<?php echo get_the_ID() ?>">

          </div>
        </div>
      </div>
      <?php
                }
            } else {
                echo '<p>No teachers found.</p>';
            }
            ?>
        </div>
        <div class="card-footer text-center"> 
        <button class="btn btn-success btn-sm"
                      id="center"> 
                 Next
              </button>
          </div> 
    </div>
    </form>
    <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js'
        integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj'
        crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct'
        crossorigin='anonymous'></script>
</body>

</html>