<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<script type="text/javascript">
 
// Category Lists
 
var categories = new Array();
categories['Travel_Coupons'] = new Array('Abhibus.com','RedBus.in','MakemyTrip.com','Travelyaari.com');
categories['Electronics_Coupons'] = new Array('FlipKart.com','shopping.com','deals.in','shopxyz.in');
categories['Fashion_Coupons'] = new Array('jabong.com','xyz.com','fashion.com');
categories['Gift_Coupons'] = new Array('giftshop.in','gifts.in','sendgifts.com','freegifts.in');
 
// State lists
var states = new Array();
 
states['Travel_Coupons'] = new Array('Alberta','British Columbia','Ontario');
states['Electronics_Coupons'] = new Array('Baja California','Chihuahua','Jalisco');
states['Gift_Coupons'] = new Array('California','Florida','New York');
 
function changeStates() {
  cntrySel = document.getElementById('Category');
  stateList = categories[cntrySel.value];
  changeSelect('Website', stateList, stateList);  
}
function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}
 
addLoadEvent(function() {
  changeStates();
});
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
 
 
 
    <div style="padding:3px 2px;border-bottom:1px solid #ccc">Ajax Form</div>  
    <form id="ff" action="_self" method="post">
 
<table>
<tbody><tr>
<td>Category:</td>
</tr>
<tr>
<td>
<select name="Category" id="Category" onchange="changeStates();">
  <option value="Travel_Coupons">Travel Coupons</option>
  <option value="Electronics_Coupons">Electronics Coupons</option>
  <option value="Fashion_Coupons">Fashion Coupons</option>
  <option value="Gift_Coupons">Gift Coupons</option>
   
</select>
</td>
</tr><tr>
<td>Website:</td>
</tr>
<tr>
<td>
<select name="Website" id="Website" onchange="changeCities();">
  <option value="">Please select a Website</option>
</select>
</td>
</tr><tr>
<td>CouponTitle : <input type="text" id="CouponTitle" name="CouponTitle"></td>
</tr>
<tr>
<td>CouponDescription : <input type="text" id="CouponDescription" name="CouponDescription"></td>
</tr>
<tr>
<td>CouponCode : <input type="text" id="CouponCode" name="CouponCode"></td>
</tr>
<tr>
<td>AffiliateLink : <input type="text" id="AffiliateLink" name="AffiliateLink"></td>
</tr>
<tr>
<td>AffiliateImage : <input type="text" id="AffiliateImage" name="AffiliateImage"></td>
</tr>
 
<tr><td><input type="submit" value="Submit"></td> 
 
</tr></tbody></table>
</form>
<script type="text/javascript">

/*

$('#ff').form({  
    success:function(data){  
        $.messager.alert('Info', data, 'info');  
      }  
});
*/







$('#ff').submit(function(evt) {
 
    evt.preventDefault();
 
    var postTo = 'http://edufruit.com/save_shopping.php';
 
    $.post(postTo,({first_name: $('#AffiliateLink').val()}),
    function(data) {
        alert(data);
        if(data != "") {
            // do something
            alert('Thanks!');
        } else {
            // couldn't connect
        }
        },'json');
    return false;
 
});






</script>

  
