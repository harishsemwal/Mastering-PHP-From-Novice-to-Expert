function hackWebsite() {
    var vulnerability = true;

    if (vulnerability) {
        console.log("Exploiting vulnerability...");
        console.log("Access granted!");
        // Now we can do something "malicious"
        document.body.innerHTML = "<h1>Hacked!</h1><p>Your website is now under my control.</p>";
    } else {
        console.log("No vulnerability found.");
    }
}

hackWebsite();
