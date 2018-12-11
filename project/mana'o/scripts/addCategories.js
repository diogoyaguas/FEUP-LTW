var input = document.getElementById("categories");
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("submit").click();
  }
});

values = [];

function addRecord() {
  var inp = document.getElementById('categories');
  text = inp.value.replace(/^\s+/, '').replace(/\s+$/, '');
  if (text !== '') {
    values.push(inp.value);
    inp.value = "";
    displayRecord();
  }
}

function displayRecord() {
  document.getElementById("values").innerHTML = values.join(" | ");
}