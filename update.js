document.getElementById("update").addEventListener("click", showUpdate, true);

function showUpdate(){
    $("#address-book").hide();
    $("#add-form").hide();
    $("#delete-form").hide();
    $("#update-form").show();
}