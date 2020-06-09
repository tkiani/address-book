document.getElementById('add').addEventListener("click", showAdd, true);

function showAdd(){
    $("#address-book").hide();
    $("#add-form").show();
    $("#delete-form").hide();
    $("#update-form").hide();
}

document.getElementById("submit-btn").addEventListener("click", addNewContact, true);


function addNewContact(event){
    event.preventDefault();

    
    let firstName = document.getElementById("first-name").value;
    let lastName = document.getElementById("last-name").value;
    let phoneNumber = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let type = document.querySelector('input[name="optionsRadios"]:checked').value;

    let data = "firstName="+firstName+"&lastName="+lastName+"&phoneNumber="+phoneNumber+"&email="+email+"&type="+type;

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'add.php', true);

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
        alert(this.responseText);
    }

    xhr.send(data);
}