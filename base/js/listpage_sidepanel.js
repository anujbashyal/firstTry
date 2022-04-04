// function openNav() {
//     document.getElementById("mySidebar").style.width = "250px";
//     document.getElementById("mySidebar").style.display = "block";
   
//   }
  
//   function closeNav() {
//     document.getElementById("mySidebar").style.width = "0";
   
//     document.getElementById("mySidebar").style.display = "none";
//   }

  // function openNav() {
  //   document.getElementById("mySidepanel").style.width = "250px";
  //   document.getElementById("mySidepanel").style.display = "block";
    
  // }
  
  // function closeNav() {
  //   document.getElementById("mySidepanel").style.width = "0";
  //   document.getElementById("mySidepanel").style.display = "none";
  //   document.getElementById("closebtn").style.display = "none";
  // }

  function myFunction() {
    var x = document.getElementById("mySidepanel");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
   
    // document.getElementById("mySidepanel").style.width = "250px";
  }