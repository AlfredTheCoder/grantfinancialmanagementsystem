<!DOCTYPE html>
<html lang="en">
<head>
<title>Add/Edit Supplier</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
</script>
<style> 
</style>
</head>
<body>
<strong>Add/Edit Supplier</strong><hr>

<?php
echo form_open('supplier/save', array('name' => 'supplier_add'));    
?>

<label>Supplier</label>
<input type="text" name="supplier" id="supplier"> <br/>

<label>PIN</label>
<input type="text" name="taxpin" id="taxpin"> <br/>

<label>Contact</label>
<input type="text" name="contact" id="contact"> <br/>

<label>Address</label>
<textarea  name="addresss" id="addresss"></textarea> <br/>

<label>City</label>
<select name="citys" id="citys">>
<option value="">All</option>
<?php

foreach($cities as $city)
{
echo '<option value="'.$city['cityidd'].'">'.$city['city'].'</option>';
}
?>	
</select> <br/>


<label>Telephone</label>
<input type="text" name="telephone" id="telephone"> <br/>

<label>Email</label>
<input type="text" name="email" id="email"> <br/>

<label>Website</label>
<input type="text" name="website" id="website"> <br/>

<label>Payment Mode</label>
<select name="paymentmodes" id="paymentmodes">>
<option value="">--Please select--</option>
<?php
foreach($modes as $mode)
{
echo "<option value='".$mode['id']."'>".$mode['paymentmode']."</option>";
}
?>	
</select> <br/>

<label>KES Account</label>
<input type="number" name="kesaccount" id="kesaccount"> <br/>

<label>USD Account</label>
<input type="number" name="usdaccount" id="usdaccount"> <br/>

<label>Bank</label>
<select name="banks" id="banks">
<option value="">--Please select--</option>
<?php
foreach($banks as $bank)
{
echo '<option value="'.$bank['id'].'">'.$bank['bankname'].'</option>';

}
?>  
</select> <br/>

<label>Bank Branch</label>
<select name="bankbranches" id="bankbranches">
<option value=""></option>
</select> <br/>

<script type= text/javascript>
$('#banks').on('change', function() {
var bank = $(this).val();
$.ajax({
type: 'post',
url: 'supplier/get_branches',
data: { bank_id : bank },
success: function (response) {
$('#bankbranches').html(response); 
}
});
});
</script>

<label>Bank Branch Code</label>
<input type="number" name="bankcode" id="bankcode"> <br/>

<label>SWIFT</label>
<input type="text" name="swiftcode" id="swiftcode"> <br/>

<label>Mobile Payment Number</label>
<input type="number" name="mobilepaymentnumber" id="mobilepaymentnumber"> <br/>

<label>Mobile Payment Name</label>
<input type="number" name="mobilepaymentname" id="mobilepaymentname"> <br/>

<label>Cheque Addressee</label>
<input type="number" name="chequeddressee" id="chequeaddressee"> <br/>

<label>Status</label>
<input type="radio" name="status" value="1" checked="checked">Yes
<input type="radio" name="status" value="0">No <br/>

<label>Category</label>
<select name="categorysuppliers" id="categorysuppliers">
<option value="">--Please select--</option>
<?php
foreach($categories as $category)
{
echo '<option value="'.$category['id'].'">'.$category['supplycategory'].'</option>';
}
?>	
</select> <br/>

<label>Staff</label>
<select name="staff" id="staff">>
<option value="">--Non Staff--</option>
<?php

foreach($staffs as $staff)
{
echo '<option value="">'.$staff['firstname'].' '.$staff['lastname'].'</option>';
}
?>	
</select> <br/>

<input type="submit" name="submit" id="submit" value="Save Details" class="btn">
<?php
echo form_close();
?>
</form>
</body>
</html>







