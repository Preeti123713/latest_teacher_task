 var x=document.getElementById('login');
  var y=document.getElementById('register');
  var z=document.getElementById('btn');

  var loginButton = document.querySelector('.login');
  // console.log(loginButton);
  var registerButton = document.querySelector('.register');
  function register()
  {
      x.style.left='-400px';
      y.style.left='50px';
      z.style.left='110px';
  }
  function login()
  {
      x.style.left='50px';
      y.style.left='450px';
      z.style.left='0px';
  }
  var modal = document.getElementById('login-form');
  window.onclick = function(event) 
  {
      if (event.target == modal) 
      {
          modal.style.display = "none";
      }
  }
  loginButton.addEventListener('click', login);
  registerButton.addEventListener('click', register);
  jQuery(document).ready(function ($) {
    $('#login').submit(function(e) { 
    e.preventDefault()
    alert('heelo');
        var email = $('#l_email').val();
        var password = $('#l_password').val();
 console.log(ajax_object.ajax_url);
       $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                'action': 'ajax_login',
                'email': email,
                'password': password,
                'security': ajax_object.ajax_nonce,
            },
            success: function(response) {
              $('#registration-message').html(response).fadeIn(500);     
            }
          });
        });
    $('#register').submit(function(e) { 
      e.preventDefault()
        var f_name = $('#username').val();
        var l_name = $('#l_name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var c_password = $('#c_password').val();
//  console.log(ajax_object.ajax_url);
       $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                'action': 'register_user',
                'firstname': f_name,
                'lastname': l_name,
                'email': email,
                'password': password,
                'c_password': c_password,
                'security': ajax_object.ajax_nonce,
            },
            success: function(response) {
              $('#registration-message').html(response).fadeIn(500);     
            }
          });
        });
      });
  var level;
  if (document.querySelector('select[name="level-select"]')!= null) {
  level = document.querySelector('select[name="level-select"]').value;
}
else {
    level = null;
}
  var country;
  if (document.querySelector('select[name="country-select"]')!= null) {
  country = document.querySelector('select[name="country-select"]').value;
}
else {
    country = null;
}
  var language;
  if (document.querySelector('select[name="language-select"]') != null) {
    language = document.querySelector('select[name="language-select"]').value;
}
else {
  language = null;
}
  var searchButton;
  if (document.getElementById("search-button") != null) {
    searchButton = document.getElementById("search-button").value;
}
else {
  searchButton = null;
}
  

  if (level === "0") {
    document.querySelector("#level_err").innerHTML =
      '<div class="alert alert-warning">Please select at least One option</div>';
    alert("Please select at least One option");
  }

  if (country === "0") {
    document.querySelector("#country_err").innerHTML =
      '<div class="alert alert-warning">Please select at least One option</div>';
    alert("Please select at least One option");
  }

  if (language === "0") {
    document.querySelector("#language_err").innerHTML =
      '<div class="alert alert-warning">Please select at least One option</div>';
    alert("Please select at least One option");
  }
 document.addEventListener("DOMContentLoaded", function () {
    // Get references to the select boxes and search button
    const levelSelect = document.getElementById("level-select");
    const countrySelect = document.getElementById("country-select");
    const languageSelect = document.getElementById("language-select");
    if (searchButton) {
    const searchButton = document.getElementById("search-button");   
  //   const searchResults = document.getElementById("search-results");

    // Add an event listener to the search button
    searchButton.addEventListener("click", function () {
      // Get the selected values from the select boxes
      var selectedLevel = levelSelect.value;
      var selectedCountry = countrySelect.value;
      var selectedLanguage = languageSelect.value;
      window.location.href =
        "teacher.php?level-select=" +
        selectedLevel +
        "&country-select=" +
        selectedCountry +
        "&language-select=" +
        selectedLanguage;
    });
  }
  });


