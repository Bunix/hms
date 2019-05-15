<!DOCTYPE html>
<html>
<head>
<head>

<meta charset="UTF-8">
<title>Hospital Management System</title>   
</head>
<style>
body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
}
</style>
<body>
<center>
	<font size="+1"><?php echo $companyInfo->company_name;?></font></b><br>                   
    <?php echo $companyInfo->company_address;?><br>     
    <?php echo $companyInfo->company_contactNo;?><br><br>
    Acknowledge Receipt
</center>   
<br /><br />

Patient No: <?php echo $OR_details->patient_no?><br>
Patient Name: <?php echo $OR_details->firstname?> <?php echo $OR_details->middlename?>, <?php echo $OR_details->lastname?>
<br><Br>


<table width="100%" align="center">
<tr>
	<td>Date</td>
    <td><?php echo $OR_details->dDate?></td>
</tr>
<tr>
	<td>Receipt No.</td>
    <td><?php echo $OR_details->receipt_no?></td>
</tr>
<tr>
	<td>Sub Total:</td>
    <td><?php echo number_format($OR_details->subtotal,2)?></td>
</tr>
<tr>
	<td>Discount:</td>
    <td><?php echo number_format($OR_details->discount,2)?></td>
</tr>
<tr>
	<td>Total Amount:</td>
    <td><?php echo number_format($OR_details->total_amount,2)?></td>
</tr>
<tr>
	<td>Amount Paid::</td>
    <td><?php echo number_format($OR_details->amountPaid,2)?></td>
</tr>
<tr>
	<td>Change:</td>
    <td><?php echo number_format($OR_details->change,2)?></td>
</tr>
</table>

</body>
</html>	