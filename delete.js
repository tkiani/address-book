document.getElementById('delete').addEventListener("click", showDelete, true);
document.getElementById('delete').addEventListener("click", showAddressBook2, true);

function showDelete(){
    $("#address-book").hide();
    $("#add-form").hide();
    $("#delete-form").show();
    $("#update-form").hide();
}


document.addEventListener('DOMContentLoaded', showAddressBook2, true);

function showAddressBook2(){
  
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'getAddress.php', true);

    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            //do somethiung
            var users = JSON.parse(this.responseText);

            console.log(users);
            var output = "";

            for (var i in users){
                output += 
                '<tr class="table-active">'+
                '<td id="delete-firstName" value="" >' + users[i].firstName+ '</td>'+
                '<td>' + users[i].lastName+ '</td>'+
                '<td id="delete-phoneNumber">' + users[i].phoneNumber+ '</td>'+
                '<td>' + users[i].email+ '</td>'+
                '<td>' + users[i].type+ '</td>'+
                '<td> <button type="button" class="btn btn-danger" id="delete-btn" value="' + users[i].id +'" onclick="deleteId('+ users[i].id + ')" >Delete</button> </td>' +
                '</tr>';
            }

            document.getElementById("deleteTable").innerHTML = output;
        }
    }

    xhr.send();
    
}

function deleteId(id){
    // alert(id);
    let params = "deleteId="+id;

    var retVal = confirm("Do you want to delete the selected contact?");
    if( retVal == true ) {

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'deleteAddress.php', true);

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        var status = JSON.parse(this.responseText);
            if(status.success){
                showAddressBook2();
            }
            else{
                alert("sorry cant delete user");
            }

        }
    }

    xhr.send(params);
}

}