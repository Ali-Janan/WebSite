/**
 * READ MORE FUNTION
 */
function myFunction() {
  var jan = document.getElementById("jan");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("readMoreBtn");

  if (jan.style.display === "none") {
    jan.style.display = "inline";
    btnText.innerHTML = "Show more"; 
    moreText.style.display = "none";
  } else {
    jan.style.display = "none";
    btnText.innerHTML = "Show less"; 
    moreText.style.display = "flex";
  }
}

//----------------------------------------------------
function searchFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('div');
  
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    p = a.getElementsByTagName("p")[0];
    txtValue = p.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
    
  }
}

function addToBasket (event) {
  console.log("hello", event);
}


const button = document.querySelector('button');

button.addEventListener('click', function (event) {
  addToBasket(event);
});

/*
const menuElement = document.querySelector('.menu-icon');
const topNavElement = document.querySelector('.top-nav');
menuElement.addEventListener('click', function(e) {
  console.log("menu click", e);
  menuElement.classList.toggle('opened');
  topNavElement.classList.toggle('opened');
});
*/



  $(".icon-menu").on('click', function() {
    $(".nav").toggleClass('nav-open');
});

