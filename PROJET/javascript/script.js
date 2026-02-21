document.addEventListener("DOMContentLoaded", function () {

  const form = document.getElementById("contactForm");
  const message = document.getElementById("messageConfirmation");

  form.addEventListener("submit", function () {
    message.style.display = "block";
  });

});


setTimeout(function () {
  alert("En ce moment séance gratuite chez ELITE ! Venez essayer la salle gratuitement.");
}, 30000);


if (!localStorage.getItem("cookiesAccepted")) {

  const accept = confirm("Ce site utilise des cookies. Accepter ?");

  if (accept) {
    localStorage.setItem("cookiesAccepted", "true");
  }

}