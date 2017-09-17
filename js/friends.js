function choose_user($name) {
	alert($name);
}

function filter(event) {

  var input, filter, table, tr, td, i;
  input = document.getElementById("searchBar");
  filter = input.value.toUpperCase();
  table = document.getElementById("userNameTable");
  tr = table.getElementsByTagName("tr");
  rowHighlight = 0;
  visibleRowCount = 0;
  visibleRows = [];
  for (i = 0; i < tr.length; i++) {
    tr[i].style.background = "white";        
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        visibleRows[visibleRowCount] = tr[i];
        visibleRowCount++;
      } else {
        tr[i].style.display = "none";
      }
    }       
  }

  visibleRows[rowHighlight].style.background = "#19D74F";
  visibleRows[rowHighlight].scrollIntoView(false);
  //alert(event);
  if(event)
  {
    var key = event.which;
    if (key == selectElement) 
    { // user presses enter in search box
      input.blur();
      document.getElementById("next_btn").focus();    
    }
  }
}



// variables for key presses
var nextElement = 32; // spacebar
var selectElement = 13; // enter key

var rowHighlight = 0;
var visibleRowCount = 0;
var visibleRows = [];



function init() 
{
	rowHighlight = 0;
	var theTable = document.getElementById("userNameTable").getElementsByTagName("tr");
  theTable[rowHighlight].style.background = "#19D74F";
  filter(event);	
}

window.onload=init;

/*
functions for post navigation
*/
function friendBtnNext(event) { 
  event.preventDefault();
    var key = event.which;
  // if key pressed is the spacebar, change focus to choose button
  if (key == nextElement){
    document.getElementById("next_btn").blur();
    document.getElementById("select_btn").focus();
  }
  // if key pressed is the enter key, view next post
  if (key == selectElement){ 

    //var theTable = document.getElementById("userNameTable").getElementsByTagName("tr");
    var theTable = visibleRows;
    theTable[rowHighlight].style.background = "white";

    if( rowHighlight<visibleRowCount-1 )
    {

      rowHighlight++;

    }else
    {
      rowHighlight=0;
    
    }
    theTable[rowHighlight].style.background = "#19D74F";

    theTable[rowHighlight].scrollIntoView(false);

    console.log(rowHighlight);
    console.log(theTable.length);

  }
}
function friendBtnPrevious(event) {
  event.preventDefault();
    var key = event.which;
  // if key pressed is the spacebar, change focus to next button
  if (key == nextElement){  
    document.getElementById("previous_btn").blur();
    document.getElementById("next_btn").focus();
  }
  // if key pressed is the enter key, view previous post
  if (key == selectElement){

    //var theTable = document.getElementById("userNameTable").getElementsByTagName("tr");
    var theTable = visibleRows;
    theTable[rowHighlight].style.background = "white";
    theTable[rowHighlight].style.borderColor = "white";

    if( rowHighlight>0 )
    {
      rowHighlight--;
    }else
    {
      rowHighlight=visibleRowCount-1;
    }

    theTable[rowHighlight].style.background = "#19D74F";
    theTable[rowHighlight].style.borderColor = "#19D74F";
    theTable[rowHighlight].scrollIntoView(false);    
    console.log(rowHighlight);
    console.log(theTable.length-1);

    //key.stopPropagation();
    //plusComment(1); //this is for the latest comment
  }
}

function friendBtnSelect(event) {
  event.preventDefault();
  var key = event.which;
  // if key pressed is the spacebar, change focus to the back button
  if (key == nextElement){ 
      document.getElementById("select_btn").blur();
      document.getElementById("add_btn").focus();    
  }
  // if key pressed is the enter key, display choose buttons and comments
  if (key == selectElement){
    //var theTable = document.getElementById("userNameTable").getElementsByTagName("tr");
    var theTable = visibleRows;    
    theTable[rowHighlight].onclick();


    td = theTable[rowHighlight].getElementsByTagName("td")[0];

    var str = theTable[rowHighlight].outerHTML.toString();
    var start = str.indexOf("Friend(");
    var end = str.indexOf("')",start+7); 
    var chunk = str.substring(start+7,end+1);

    if (str.indexOf('remove') > -1) 
    {
      theTable[rowHighlight].setAttribute('onclick',"addFriend("+chunk+");");
      td.innerHTML='<img src="img/cbclear.png" class="checkBoxImage">';

    }
    else
    {
      theTable[rowHighlight].setAttribute('onclick',"removeFriend("+chunk+");");
      td.innerHTML='<img src="img/cbchecked.png" class="checkBoxImage">';
    }
    document.getElementById("next_btn").focus();
        
    key.stopPropagation();
  } 
}

function friendBtnAdd(event,usrID) {
  event.preventDefault();
  var key = event.which;
  // if key pressed is the spacebar, change focus to the back button
  if (key == nextElement){ 
      document.getElementById("add_btn").blur();
      document.getElementById("back_btn").focus();    
  }
  // if key pressed is the enter key, display choose buttons and comments
  if (key == selectElement){
    $btn = document.getElementById("add_btn");
    if($btn.innerHTML=="New Friends")
    {
      window.location.href = "new_friends.php?userID="+usrID;    
    }
    else
    {
      window.location.href = "my_friends.php?userID="+usrID;       
    }

  } 
}

/* 
function for back key presses
*/
function friendBtnBack(event){
  event.preventDefault();
    var key = event.which;
  if (key == nextElement){
      document.getElementById("back_btn").blur();
      document.getElementById("previous_btn").focus();      
  }
  if (key == selectElement){
    window.history.back();
  } 
}

function admin_search(event)
{
	if(document.getElementById('searchBar').style.display!='block')
	{
		document.getElementById('searchBar').style.display='block';
		document.getElementById('search_btn').innerText='Clear';
		document.getElementById('searchBar').focus();		
	}else
	{
		document.getElementById('searchBar').innerText='';
//    alert(document.getElementById('searchBar').innerText);
//		document.getElementById('search_btn').innerText='Search';
    document.getElementById('searchBar').blur();
    document.getElementById('searchBar').style.display='none';
		document.getElementById('next_btn').focus();				
	}
  filter(event);
}

  function addFriend(idOne,idTwo)
  {
      console.log(idOne);
      console.log(idTwo);

      jQuery.ajax({
       type: "POST",
       data: { userOneID: idOne, userTwoID: idTwo },
       url: "php/add_friend.php",
       cache: true,
       success: function(response)
       {
         console.log("Friend Added!");
       }
     });
 }
  
  function removeFriend(idOne,idTwo)
  {
      console.log(idOne);
      console.log(idTwo);

      jQuery.ajax({
       type: "POST",
       data: { userOneID: idOne, userTwoID: idTwo },
       url: "php/remove_friend.php",
       cache: true,
       success: function(response)
       {
         console.log("Friend Removed!");
       }
     });
 }

