<?php
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript" src="js/java.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
    <header><h1 class="headh1">JamesXad Web Development</h1></header>
        <!-- Alert -->
        <div class="div-alerthome" style="float:right">
		<div class="modal-dialog">
			<div  class="alert alert-success" id="alertmsghome" style=" display:none; width: 300px;">
				<strong class="alert-message"></strong>
			</div>
		</div>
	</div>
<body > 
	<div class="container">
		<table class="table table-striped table-hover">
			<thead class="table-dark">
				<tr>                        <!-- Button trigger modal -->
						<button type="button" id="btnadd" class="button-addrecord btn btn-primary" class="btn btn-primary btnaddclient" data-bs-toggle="modal" data-bs-target="#Modal">Add</button>
				
				</tr>
				<tr>
                    <th>ID</th>
					<th>Name</th>
					<th>Uom</th>
					<th>Quantity</th>
					<th>Product Cost</th>
                    <th>Total Cost</th>
                    <th>BBD</th>
                    <th>image</th>
				</tr>
				<tbody class="tbody-load-record" id="tbodyloadrecord"> </tbody>
			</thead>
		</table>
	</div>




<div class="divcontainer">
    <fieldset>
  <!-- Modal -->
  <div class="modal fade" id="Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="title"></h1>
          <button type="button" class="btn-close" id="btnclose" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="modalform" class="formproduct modal-form" onsubmit="" method="post">
        <div class="modal-body" id="modalcontainer">
            <div class="input-group">
            <table class="tablecontainer">
            <tr>
                    <td class="form-floating">
                        <input type="hidden" class="form-control" id="inputid">
                    </td>
                </tr>
                <tr>

                <tr>
                    <td class="form-floating">
                        <input type="text" class="form-control" id="inputname">
                        <label for="inputname" class="input" >Name</label>
                    </td>
                </tr>

                <tr>
                    <td class="form-floating">
                        <input type="text" class="form-control" id="inputuom">
                        <label for="inputuom">UOM</label>
                    </td>
                </tr>
                <tr>

                <tr>
                    <td class="form-floating">
                        <input type="number" class="form-control inputnumber" id="inputquantity">
                        <label for="inputquantity" >Quantity</label>
                    </td>
                </tr>

                <tr>
                    <td class="form-floating">
                        <input type="text" class="form-control" id="inputcost">
                        <label for="inputcost">Productcost</label>
                    </td>
                </tr>
                <tr>
                    <td class="form-floating">
                        <input type="text" class="form-control"  id="inputtotalcost" value="0.00" disabled>
                        <label for="inputtotalcost">Totalcost</label>
                    </td>
                </tr>
                <tr>
                    <td class="form-floating">
                        <input type="date" class="form-control" id="inputbbd">
                        <label for="inputbbd">BBD</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="img-reponsive img-rounded" id="imgupload" src="icon/icon.png" width="140" height="120">  <span class="alert alert-warning" id="uploadtextimg">(Upload Image)</span>
                        <input  accept="image/*" type="file" class="form-control" name="inputImage" id="inputimage" accept=".jpeg,.jpg, .png," >
                    </td>
                </tr>
                <tr>
                    <td class="form-floating">
                        <button type="button" id="btnClear">Clear</button>
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </form>
        <div class="modal-footer">
          <button type="button" id="btnsave" class="btn btn-primary btn-save"disabled >Save</button>
          <button type="button" id="btnupdate" class="btn btn-primary btn-save">update</button>
          <button type="button" id="btndelete" class="btn btn-danger btn-save">delete</button>
        </div>
      </div>
    </div>
  </div>
 </fieldset>
</div>

        <!-- Alert home -->
        <div class="div-alert" style="text-align:center">
		<div class="modal-dialog">
			<div  class="alert alert-success" id="alertmsg" style="display:none;">
				<strong class="alert-message"></strong>
        <span id="emailexist"></span>
			</div>
		</div>
	</div>
</body>

<script>
$(document).ready(function(){ 
OnInputNumberOnly();
ClearUser();
imagepreview();
displayData();
OnKeyUpCalculate();
Addbtn();
addrecordbtn();
loadRecord();
ClickToSelectUpload();
OnClickHighLight();
deleteRecord();
updateRec();
});
</script>
</html>