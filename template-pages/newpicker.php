<?php 
$teachers = $_GET['teachers'];
$count = count($teachers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
    .container {
      display: flex;
    }

    #calendar {
      flex: 1;
    }

    .time {
      flex: 1;
    }
    .clocked{
      border: 1px solid black;
      padding: 10px 10px;
      margin: 10px;
      width: max-content;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Document</title>
</head>
<body>
 <?php for ($i = 0; $i < $count; $i++) { ?>
<form method="GET" action="<?php echo get_permalink(48) ?>">
<input type="hidden" name="selectdate" id="selectdate_<?php echo $i; ?>" value="">
<input type="hidden" name="selecttime" id="selecttime_<?php echo $i; ?>" value="">
    <?php foreach($teachers as $value){?>
    <input type="hidden" name="teachers[]" value="<?php  echo $value ?>">
    <?php } ?>
  <div class="container">
    <label for="date_<?php echo $i; ?>">Select a date:</label>
    <div class="calendar">
      <input type="text" name="date[]" class="date" id="date_<?php echo $i; ?>" readonly>
    </div>
    <div class="time">
      <div id="clock_<?php echo $i; ?>">12:00 AM</div>
      <label for="hour_<?php echo $i; ?>">Select an hour:</label>
      <br>
      <div class="clocked">
        <div class="hours">
          <input type="radio" name="hour_<?php echo $i; ?>" value="9" checked>9 AM
          <input type="radio" name="hour_<?php echo $i; ?>" value="10">10 AM
          <input type="radio" name="hour_<?php echo $i; ?>" value="11">11 AM
          <input type="radio" name="hour_<?php echo $i; ?>" value="12">12 AM
        </div>
        <div class="hours">
          <input type="radio" name="hour_<?php echo $i; ?>" value="1">1 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="2">2 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="3">3 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="4">4 PM
        </div>
        <div class="hours">
          <input type="radio" name="hour_<?php echo $i; ?>" value="5">5 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="6">6 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="7">7 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="8">8 PM
        </div>
        <div class="hours">
          <input type="radio" name="hour_<?php echo $i; ?>" value="9">9 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="10">10 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="11">11 PM
          <input type="radio" name="hour_<?php echo $i; ?>" value="12">12 PM
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4">Next</button>
  </div>


</form>
<?php  } ?>
<script>
$(document).ready(function() {
    var selecteddate;
  $('.date').each(function(index) {
    $(this).attr('id', 'date_' + index);
    $(this).datepicker({
      onSelect: function(dateText) {
        $('#date_' + index).val(dateText);
                $('#selectdate_' + index).val(dateText);
      },
      minDate: 0
    }).datepicker("show"); // Open the calendar after initialization
    
  });

  $('.clocked').each(function(index) {
    const clock = document.getElementById('clock_' + index);
    const radioButtons = document.querySelectorAll('input[name="hour_' + index + '"]');

    radioButtons.forEach(function(radioButton) {
      radioButton.addEventListener('change', function() {
        const selectedHour = this.value;
        clock.textContent = selectedHour % 12 + ':00 ' + (selectedHour < 12 ? 'AM' : 'PM');       
        $('#selecttime_'+ index).val(selectedHour);
      });
    });
  });
});
</script>
</body>
</html>