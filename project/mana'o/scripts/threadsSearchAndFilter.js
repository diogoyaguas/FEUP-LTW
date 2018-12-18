function dropFilters() {
    document.getElementById("filters").classList.toggle("show");
  }

function searchCategorie() {

    let value = document.getElementById("searchID").value;
  
    let search = window.location.search;
    let part = search.substr(0, search.lastIndexOf('=') + 1);
    window.location.search = part + value.toUpperCase();
}
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.filterButton')) {
      var dropdowns = document.getElementsByClassName("dropdown-filters");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }