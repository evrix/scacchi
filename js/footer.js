//Get the button:
mybutton = document.getElementById("tornaSU");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/* QUESTO DEVE FUNZIONARE !!
var current = document.querySelector('a[href="'+document.URL+'"]');
current.className = "current";
*/

/*
// Set current nav class
var active = 0;
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href === document.URL) {
        active = i;
    }
}
document.links[active].className = 'current';

//
document.getElementsByTagName('details').forEach((D,_,A)=>{
  D.ontoggle =_=>{ if(D.open) A.forEach(d =>{ if(d!=D) d.removeAttr('open') })}
})

//
document.getElementsByTagName('details').forEach(<script>

//
function myFunction() {
  var x = document.links;
  var txt = "";
  var i;
  for (i = 0; i < x.length; i++) {
    txt = txt +  x[i].href + "<br>";
  }
  document.getElementById("demo").innerHTML = txt;
}

function myFunction2() {
  var indirizzo = document.URL;
  document.getElementById("test").innerHTML = indirizzo;
}

</script>
<p>Click the button to display the URL of each link in the document.</p>

<button type="button" onclick="myFunction()">Try it</button>
<button type="button" onclick="myFunction2()">Try it</button>

//
<p id="demo"></p>
<p id="test"></p>
(D,_,A)=>{
  D.ontoggle =_=>{ if(D.open) A.forEach(d =>{ if(d!=D) d.open=false })}
})

let obj = document.getElementsByTagName('details');

for (let [key, name] of Object.entries(obj)) {
  console.log(key + ': ' + name);
  console.log(name);

}

*/
