<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Display Records</title>
  <link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
  <div class="row">
   <div style="width:500px;margin:50px;">
    <h4>Display Records From Database</h4>
    <table class="table table-striped table-bordered">
     <tr>
	 <td><strong>Name</strong></td>
	 <td><strong>User Name</strong></td>
	 </tr> 
     <?php foreach($Doctors as $doctorList){ ?>
     <tr>
	 <td><?=$doctorList->name;?></td>
	 <td><?=$doctorList->username;?></td>
	 </tr>     
        <?php }?>  
    </table>
   </div> 
  </div> 
 </body>
</html>