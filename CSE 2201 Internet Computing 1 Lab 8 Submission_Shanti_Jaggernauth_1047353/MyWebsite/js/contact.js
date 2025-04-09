
const storedName = localStorage.getItem("contactName");
const storedTime = localStorage.getItem("contactTime");
const storedColor = localStorage.getItem("favouriteColor");

if (storedName) {
  document.getElementById("welcomeMessage").textContent = `Welcome back, ${storedName}!`;

  if (storedTime) {
    const timeEl = document.createElement("p");
    timeEl.textContent = `Last submitted at: ${storedTime}`;
    document.getElementById("welcomeMessage").after(timeEl);
  }

  if (storedColor) {
    document.body.style.backgroundColor = storedColor;
  }

  
}

document.getElementById("contactForm").addEventListener("submit", function(event) {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const favouriteColor = document.getElementById("favouriteColor").value;

  if (name === "" || email === "" || password === "") {
    alert("Please fill out all fields.");
    event.preventDefault();
    return;
  }

  if (!email.includes("@") || !email.includes(".")) {
    alert("Please enter a valid email address.");
    event.preventDefault();
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    event.preventDefault();
    return;
  }

  localStorage.setItem("contactName", name);
  localStorage.setItem("contactTime", new Date().toLocaleString());
  localStorage.setItem("favouriteColor", favouriteColor);
});


document.getElementById("logoutBtn").addEventListener("click", function() {
  localStorage.removeItem("contactName");
  localStorage.removeItem("contactTime");
  localStorage.removeItem("favouriteColor");
  window.location.reload();
});
