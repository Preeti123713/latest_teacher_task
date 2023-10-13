var level = document.querySelector('select[name="level-select"]').value;
var country = document.querySelector('select[name="country-select"]').value;
var language = document.querySelector('select[name="language-select"]').value;

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
});
