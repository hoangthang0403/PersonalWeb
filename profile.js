$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  function copyURI(evt) {
    evt.preventDefault();
    navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
      /* clipboard successfully set */
    }, () => {
      /* clipboard write failed */
    });
  }
  /*Form*/
  function myFunction() 
  {
      var name = document.getElementById('name').value;
      var mail = document.getElementById('mail').value;
      var phone = document.getElementById('phone').value;
      submitOK = true;
      if (name.length == 0 || mail.length == 0 || phone.length == 0)
      {
          submitOK == "false"
          alert("You haven't filled all information");
      }
      else
      {
          alert("Thanks for submitting!!!\nYour name: " + name + "\nEmail: " + mail + "\nPhone Number: " + phone);
      }   
  }
  var http = new XMLHttpRequest();
  http.open('GET','information.txt',true);
  http.send();
  http.onreadystatechange == function()
  {
    if(this.readyState == 4)
    {
      document.write(this.responseText);
    }
  }
