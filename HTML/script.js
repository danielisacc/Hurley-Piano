
// Hamburger menu button (Daniel)
document.getElementById('hamburger').addEventListener('click', function() {
  const links = document.getElementById('links');
  const burger = document.getElementById('hamburger');
  if (links.style.display === 'flex') {
      links.style.display = 'none';
      burger.style.backgroundColor = 'transparent';
  }
  else {
      links.style.display = 'flex';
      burger.style.backgroundColor = 'rgba(200,200,200,20%)';
  }
});
// Dropdown Menu Json converson (Daniel)
const listEl = document.getElementById('links')

fetch('./menu-signin.json')
    .then(res => res.json())
    .then(data => {
        data.forEach(link => {
            listEl.insertAdjacentHTML('beforeend', `<a href=${link.url}>${link.name}</a>`)
        });
    })


// Setting menu to be global for now
//
//
GUI = new Array();
GUI.menu = document.getElementById('nav-menu');
GUI.noteURL = "https://rigler.org/hurley/note/";


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

