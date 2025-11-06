const firebaseConfig = {
    apiKey: "AIzaSyATpbUARdmcIIooGbHvGDSjme-puslI3Oo",
    authDomain: "contact-5eb5b.firebaseapp.com",
    databaseURL: "https://contact-5eb5b-default-rtdb.firebaseio.com",
    projectId: "contact-5eb5b",
    storageBucket: "contact-5eb5b.firebasestorage.app",
    messagingSenderId: "228439836153",
    appId: "1:228439836153:web:b0b6444c8156e10ccd2928",
    measurementId: "G-QZ7F0C3JE1"
};

  firebase.initializeApp(firebaseConfig);

// reference your database
var contactFormDB = firebase.database().ref("contactForm");

document.getElementById("contactForm").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var Name = getElementVal("name");
  var Email = getElementVal("email");
  var Message = getElementVal("message");

  saveMessages(Name, Email, Message);

  //   enable alert
  document.querySelector(".alert").style.display = "block";

  //   remove the alert
  setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
  }, 3000);

  //   reset the form
  document.getElementById("contactForm").reset();
}

const saveMessages = (Name, Email, Message) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    Name: Name,
    Email: Email,
    Message: Message,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};