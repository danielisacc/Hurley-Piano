document.getElementById('hamburger').addEventListener('click', function() {
    var menu = document.getElementById('nav-menu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
});

// Setting menu to be global for now
//
//
GUI = new Array();
GUI.menu = document.getElementById('nav-menu');
GUI.noteURL = "https://rigler.org/hurley/note/";


fetch("menu.json").then(x => x.json() ).then(x => 
   {
   for( y = 0; y < x.length; y++)
      {
   //   console.log(x[y].name)
	t = document.createElement("a");
	t.className = "nav-link";
	t.innerHTML = x[y].name;
	t.href = x[y].url;
	GUI.menu.append(t);
      }
   GUI.x = x;
   });


GUI.listNote = function() {  
  fetch(GUI.noteURL + "?list").then( x => x.text() ).then( x => console.log(x) ) 
    };

GUI.readNote = function(name) {
  fetch(GUI.noteURL + "?name=" + name ).then( x => x.text() ).then( x => console.log(x) )
   };

GUI.writeNote = function(name,contact,payload) {

let formData = new FormData();
formData.append('name', name);
formData.append('contact', contact);
formData.append('payload', message);

fetch("https://rigler.org/hurley/note/",
    {
        body: formData,
        method: "post"
    });

}

const ContactBox = document.querySelector("#contactBox");

async function sendData() {
  // Associate the FormData object with the form element

console.log(contactBox.children[0].value);
console.log(contactBox.children[4].value);
console.log(contactBox.children[6].value);

try {
    const response = await fetch("https://rigler.org/hurley/note/", {
      method: "POST",
      body:  { "payload":contractBox.children[0] } 
 
    });
    console.log(await response.json());
  } catch (e) {
    console.error(e);
  }
}

// Take over form submission
//contactBox.addEventListener("submit", (event) => {
//  event.preventDefault();
//  sendData();
//}

