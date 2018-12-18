var input = document.getElementById("categories");
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("add").click();
  }
});

values = [];

function addRecord() {
  var inp = document.getElementById('categories');
  text = inp.value.replace(/^\s+/, '').replace(/\s+$/, '');
  if (text !== '') {
    
    values.push(inp.value.toUpperCase());
    inp.value = "";
    displayRecord();
  }
}

function displayRecord() {
  document.getElementById("values").innerHTML = values.join(" | ");
  document.getElementById("array").value = JSON.stringify(values);
  console.log(document.getElementById("array"));
  if(values.length == 5) document.getElementById("categories").setAttribute("readonly", "true");
}

function clearLabel() {
    document.getElementById("values").innerHTML = "";
    document.getElementById("categories").removeAttribute("readonly");
    values = [];
}