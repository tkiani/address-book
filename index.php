<?php include("header.php");?>

<?php include("showAddressBook.php");?>
    
<?php include("showAddContact.php");?>

<?php include("showDeleteContact.php");?>

<?php include("showUpdateContact.php");?> 

  <script>
    $("#address-book").show();
    $("#add-form").hide();
    $("#delete-form").hide();
    $("#update-form").hide();
  </script>

  <script src="home.js"> </script>
  <script src="getAddress.js"> </script>
  <script src="add.js"> </script>
  <script src="delete.js"> </script>
  <script src="update.js"> </script>
 
</body>
</html>