document.getElementById("home").addEventListener("click", showHome, true);

function showHome(){
    $("#address-book").show();
    $("#add-form").hide();
    $("#delete-form").hide();
    $("#update-form").hide();
}