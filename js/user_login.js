function choose_user($name) {
	alert($name);
}

function filter() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("searchBar");
  filter = input.value.toUpperCase();
  table = document.getElementById("userNameTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}








// Get the modal
var modal = document.getElementById('password_popup');

function show_modal($name,$img)
{
  var ui = document.getElementById('avatar_image');
  ui.src=$img;

  var ud = document.getElementById('username_display');
  ud.innerText='Please enter the password for ' + $name;

  document.getElementById('password_popup').style.display='block';
}

function just_login($name)
{
  var x = "user_home.php?userID=" + $name;
  window.location.assign(x);
}