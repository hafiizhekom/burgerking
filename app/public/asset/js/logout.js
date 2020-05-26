$("#logout-button").click(function() {
    logout();
})

function logout(){
    alert("Logging out...");
    localStorage.clear();
    window.location.replace("/");
}
