
document.getElementById('home').addEventListener("click", showAddressBook, true);

document.addEventListener('DOMContentLoaded', showAddressBook, true);

function showAddressBook(){
  
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'getAddress.php', true);

    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            //do somethiung
         
            var users = JSON.parse(this.responseText);

            var output = "";

            for (var i in users){
                output += 
                '<tr class="table-active">'+
                '<td>' + users[i].firstName+ '</td>'+
                '<td>' + users[i].lastName+ '</td>'+
                '<td>' + users[i].phoneNumber+ '</td>'+
                '<td>' + users[i].email+ '</td>'+
                '<td>' + users[i].type+ '</td>'+
                '</tr>';
            }

            document.getElementById("table").innerHTML = output;
        }
    }

    xhr.send();
    
}