function validateForm() {
    var id = document.forms["loginForm"]["id"].value;
    var password = document.forms["loginForm"]["pass1"].value;
    var errorElement = document.getElementById("error");

    if (id.trim() === ""|| !Number.isInteger(Number(id))|| id.length < 4) {
        errorElement.textContent = "Invalid ID Input!";
        return false;
    }

    if (password.trim() === ""|| id.length < 4 ) {
        errorElement.textContent = "Invalid Password Input!";
        return false;
    }

    errorElement.textContent = ""; // Clear the error message if there are no errors
}
