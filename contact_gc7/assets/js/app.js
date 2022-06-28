// document.addEventListener('DOMContentLoaded', (event) => {
//   var e = document.querySelector('#gc7');
//   e.innerHTML = 'Yeee';


//   // Get the container element
//   var btnContainer = document.getElementById("mainnav");

//   // Get all buttons with class="btn" inside the container
//   var btns = btnContainer.getElementsByClassName("btn");

//   // Loop through the buttons and add the active class to the current/clicked button
//   for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");
//     if (current.length > 0) { 
//       current[0].className = current[0].className.replace(" active", "");
//     }
//     this.className += " active";
//     });
//   }

// });

$(document).ready(function() {
  // var v = <?=$page?>; 
  // $('div .linknav').html('456789');
  
  $('div .linknav').on("click", function(){
    // var id = $(this).data("id");
    // $("#formulaire"+id).slideToggle(300);
    console.log(123);
});
	// if(location.pathname != "/") {
	// 	$('#nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
	// } else $('#nav a:eq(0)').addClass('active');
});
