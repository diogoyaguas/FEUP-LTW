function validateForm() {
    if(document.getElementsByName('Title')[0].value != "" && document.getElementsByName('Post')[0].value != "") { 
        document.getElementById("post").submit();
     } else { 
        return false;
     }    
  }