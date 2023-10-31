<?php
/* Template Name: purpose*/
$Teacher=$_GET['teachers'];
print_r($Teacher);
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
<style>
.card-body {
    width: fit-content;
    background-color: #8fc4b7;
    height: auto;
    /* Set height to auto to adjust based on content */
    padding: 4rem 5rem;
    /* Adjust padding as needed */
}
</style>
</head>
<body>
<section class = 'h-100 h-custom' style = 'background-color: #8fc4b7;'>
<div class = 'container py-5 h-100'>
<div class = 'row d-flex justify-content-center align-items-center h-100'>
<div class = 'col-lg-8 col-xl-6'>
<div class = 'card rounded-3'>

<div class = 'card-body p-4 p-md-5'>
<h3 class = 'mb-4 pb-2 pb-md-0 mb-md-5 px-md-2'>Different Purpose for Online classes booking</h3>

<form action="<?php echo get_permalink(50);?>" method="GET">
<?php foreach($Teacher as $value) {?>
<input type="hidden" name="teachers[]" value="<?php echo $value;?>">
<?php } ?>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]" value="Doing full time job">
<label class = 'form-check-label' for = 'exampleCheck1'>Doing full time job</label>
</div>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]" value="Having any financial issues at home">
<label class = 'form-check-label' for = 'exampleCheck1'>Having any financial issues at home</label>
</div>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]" value= "Having any medical issue at home">
<label class = 'form-check-label' for = 'exampleCheck1'>Having any medical issue at home</label>
</div>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]" value="Suffering from chronic disease">
<label class = 'form-check-label' for = 'exampleCheck1'>Suffering from chronic disease</label>
</div>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]" value="unable to attend offline class due to some personal reasons">
<label class = 'form-check-label' for = 'exampleCheck1'>out of town</label>
</div>
<div class = 'form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'purpose_id' name="purpose[]">
<label class = 'form-check-label' for = 'exampleCheck1'>unable to attend offline class due to some personal reasons</label>
</div>
<div class = 'timeperiod'>
<label class = 'form-check-label' for = 'exampleCheck1'>Time Period</label>
</div>
<div class = 'form-group col-md-6'>
<select id = 'inputState' class = 'form-control' name="time_period">
<option selected>Choose Time Period</option>
<option value="1 Day">1 Day</option>
<option value="7 Days">7 Days</option>
<option value="1 Month">1 Month</option>
<option value="3 Months">3 Months</option>
<option value="6 Months">6 Months</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 text-center">
<button type="submit" class="btn btn-primary">Next</button>
</div>
</div>
</section>
</form>
</body>
</html>