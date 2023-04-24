const firebaseConfig = {
    apiKey: "AIzaSyB_m7oQXI2KGDBuv2q8P33KjxshdbV3csA",
    authDomain: "contactus-71d3c.firebaseapp.com",
    databaseURL: "https://contactus-71d3c-default-rtdb.firebaseio.com",
    projectId: "contactus-71d3c",
    storageBucket: "contactus-71d3c.appspot.com",
    messagingSenderId: "1018543782575",
    appId: "1:1018543782575:web:d11c73153eaa2fac33325a"
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