function valider_(e) {
    let nom = document.getElementById("nom").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();

  
    if (nom === "") {
        alert("Le nom ne peut pas être vide, s'il vous plaît.");
        e.preventDefault();
        return;
    }

    if (!email.includes("@")) {
        alert("L'email doit impérativement contenir le caractère '@'.");
        e.preventDefault();
        return;
    }

    if (message.length < 7) {
        alert("Le message doit contenir au moins 7 caractères.");
        e.preventDefault();
        return;
    }
}

document.getElementById("form").addEventListener("submit", valider_);
