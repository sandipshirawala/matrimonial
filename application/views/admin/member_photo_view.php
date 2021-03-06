
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Member Photo</h4>
        </div>
        <div class="modal-body">
            <!-- Add Modal Form -->
                <div class="row">
                    <div class="col-lg-12">
<form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_member_photo/create" enctype="multipart/form-data">
    <div class="form-group">
                <label>Member Id</label>
                <select class="form-control"  id="cmb_member" name="cmb_member">
                <?php 
                $select_res    = $this->db->get("tbl_member");
                foreach($select_res->result() as $select_row)
                {
                    echo "<option value=".$select_row->member_id.">".$select_row->member_name."</option>";
                }
                ?>
                </select>
    </div>
    <div class="form-group">
                <label>Photo 1</label>
                <input type="file" id="img_photo1" name="img_photo1">
    </div>
    <div class="form-group">
                <label>Photo 1 Status</label>
                <?php 
                $radio_array=array("Approve","Decline");
                for($i=0;$i<count($radio_array);$i++)
                {
                    ?>
                    <input type="radio" id="rdo_photo1_status" name="rdo_photo1_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
                    <?php
                }
                ?>
    </div>
    <div class="form-group">
                <label>Photo 2</label>
                <input type="file" id="img_photo2" name="img_photo2">
    </div>
    <div class="form-group">
                <label>Photo 2 Status</label>
                <?php 
                $radio_array=array("Approve","Decline");
                for($i=0;$i<count($radio_array);$i++)
                {
                    ?>
                    <input type="radio" id="rdo_photo2_status" name="rdo_photo2_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
                    <?php
                }
                ?>
    </div>
    <div class="form-group">
                <label>Photo 3</label>
                <input type="file" id="img_photo3" name="img_photo3">
    </div>
    <div class="form-group">
                <label>Photo 3 Status</label>
                <?php 
                $radio_array=array("Approve","Decline");
                for($i=0;$i<count($radio_array);$i++)
                {
                    ?>
                    <input type="radio" id="rdo_photo3_status" name="rdo_photo3_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
                    <?php
                }
                ?>
    </div>
    <div class="form-group">
                <label>Scanned Horoscope</label>
                <input type="file" id="img_scanned_horroscope" name="img_scanned_horroscope">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form></div>
                    
                </div>
            <!-- Add Modal Form Ends -->
        </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

<div id="page-wrapper">
    <div class="container-fluid">
    <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Member Photo List
                    <label style="float:right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Member Photo</button>
                    </label>
                </h1>
                <!--<ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Forms
                </li>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Test</button>
                </ol>-->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                      <thead>
            <th>#</th>
            <th>Member Id</th>
            <th>Photo 1</th>
            <th>Photo 1 Status</th>
            <th>Photo 2</th>
            <th>Photo 2 Status</th>
            <th>Photo 3</th>
            <th>Photo 3 Status</th>
            <th>Scanned Horoscope</th>
          <th>Action</th></thead><tbody>
        <?php
        if(!isset($start_position))
        {
            $i=1;
        }
        else
        {
            $i=$start_position;
        }
        foreach($resultset->result() as $result_row)
        {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
                <td><?php echo $result_row->member_name; ?></td>
            <td><img src="<?php echo base_url(); ?>files/member/thumb/<?php echo $result_row->member_photo1; ?>" width="60px"></td>
            <td><?php echo $result_row->member_photo1_status; ?></td>
            <td><img src="<?php echo base_url(); ?>files/member/thumb/<?php echo $result_row->member_photo2; ?>" width="60px"></td>
            <td><?php echo $result_row->member_photo2_status; ?></td>
            <td><img src="<?php echo base_url(); ?>files/member/thumb/<?php echo $result_row->member_photo3; ?>" width="60px"></td>
            <td><?php echo $result_row->member_photo3_status; ?></td>
            <td><img src="<?php echo base_url(); ?>files/member/thumb/<?php echo $result_row->member_scanned_horroscope; ?>" width="60px"></td>
            <td>
                <a class="btn btn-success" class="btn btn-info" data-toggle="modal" data-target="#editModal" onclick="get_edit_data(<?php echo $result_row->member_photo_id; ?>);"><em class="fa fa-pencil"></em></a>
                <a class="btn btn-danger confirm-delete" data-id="<?php echo $result_row->member_photo_id; ?>"><em class="fa fa-trash-o"></em></a>
            </td>
        </tr>
        <?php
            $i++;
        } 
        ?>
        </tbody>
      </table>
      <ul class="pagination hidden-xs pull-right">
      <?php 
        if(isset($paging_string))
        {
            echo $paging_string; 
        }
       ?>
      </ul>
    </div>
    </div>
   </div>
</div>
<!-- /.container-fluid -->
</div>
<script type="text/javascript">
function confirmDelete()
{
  return confirm("Are you sure you want to delete this?");
}
</script>
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Member Photo</h4>
        </div>
        <div class="modal-body">
            <!-- Edit Modal Form -->
                <div class="row">
                    <div class="col-lg-12" id="edit_div">
                    </div>
                </div>
            <!-- Edit Modal Form Ends -->
        </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
<script type="text/javascript">
            var controller = "ajax/get_member_photo";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function get_edit_data(primary_id)
    {       
        var strURL=base_url+controller+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("edit_div").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>
<div id="deleteModal"  class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">X</a>
                 <h3>Delete Member Photo</h3>
            </div>
                <div class="modal-body">
                    <p>You are about to delete.</p>
                    <p>Do you want to proceed?</p>
                </div>
                <div class="modal-footer">
                        <a href="#" id="btnYes" class="btn btn-sm btn-danger">Yes</a>
                        <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-success">No</a>
                    
                </div>
            
        </div>
    </div>
</div>
<script>
$('#deleteModal').on('show', function() {
    var id = $(this).data('id'),
        removeBtn = $(this).find('.danger');
})

$('.confirm-delete').on('click', function(e) {
    e.preventDefault();

    var id = $(this).data('id');
    $('#deleteModal').data('id', id).modal('show');
});

$('#btnYes').click(function() {
    // handle deletion here
    var id = $('#deleteModal').data('id');
    //$('[data-id='+id+']').remove();
    window.location=base_url+'admin/manage_member_photo/delete/'+id;
    $('#deleteModal').modal('hide');
});
</script>


