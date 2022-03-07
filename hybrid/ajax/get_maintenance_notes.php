<?php 

include "../config/connection.php";

$job_ref=$_REQUEST['job_ref'];
$job_title=$_REQUEST['job_title'];

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$sql = mysqli_query($conn,"SELECT * FROM `maintenance_notes` WHERE maintenance_id = '$job_ref'"); 

if($admin_role = 'Administrator'){
  $update_notes = mysqli_query($conn,"UPDATE `maintenance_notes` SET admin_read_notification = '1' WHERE name != '$agent_name' AND maintenance_id = '$job_ref'"); 
}

if($agent_name == 'Charmaine' || $agent_name == 'Purple' || $agent_name == 'Gina'){
  $update_notes = mysqli_query($conn,"UPDATE `maintenance_notes` SET read_notification = '1' WHERE name != '$agent_name' AND maintenance_id = '$job_ref'");
}


while ($row = $sql->fetch_assoc()) {
  
$result[] = $row; 
    
}

$my_result = json_encode($result);
$json = json_decode($my_result, true);

echo '<div class="panel">
  <input type="hidden" value="'.$job_ref.'" id="job_ref">
  <input type="hidden" value="'.$job_title.'" id="job_title">            
  <input type="hidden" value="'.$agent_name.'" id="agent_name">   
    <div class="nano" style="height: 60vh" id="chat_body">
        <div class="nano-content">
            <div class="panel-body chat-body media-block">';

foreach ($json as $my_notes) {

  $notes_id = $my_notes['id'];
  $agent_name = $_SESSION['ADMIN_ID']['NAME'];
  $name = $my_notes['name'];
  // $note_type = $my_notes['note_type'];
  $note_text = $my_notes['note_text'];
  $vendor_id = $my_notes['vendor_id'];
  $note_time = $my_notes['note_time'];
  // $tenant_id = $my_notes['tenant_id'];

  if($name != $agent_name){


  echo '<div class="chat-user">
           
            <div class="media-body">
                <div>
                    <p>'.$note_text.'<small>'.$note_time.'</small><small>'.$name.'</small></p>
                </div>
            </div>
        </div>';
    }else{
      echo '<div class="chat-me">        
        <div class="media-body">
          <div>
            <p>'.$note_text.' <small>'.$note_time.'</small><small>You</small></p>
          </div>
      </div>
    </div>';
    }
    
    $sql = mysqli_query($conn,"INSERT IGNORE INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES ('$notes_id', '$job_ref', '$name', NULL, NULL, NULL, '$note_text', '$note_time', '0', '0')");
}

echo '</div></div></div><div class="pad-all">
<div class="input-group" style="border-bottom: 1px solid #cccccc5e;width:100%">
<input type="text" placeholder="Type your message and press enter button" class="form-control form-control-trans" id="whitespot_notes">
<span class="input-group-btn">
</div>
</div>
</div>';



?>

<script type="text/javascript">

  $('#whitespot_notes').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
          var my_text = $('#whitespot_notes').val();
          var job_ref = $('#job_ref').val();
          var job_title = $('#job_title').val();


            $.ajax({
                type:"post",
                url: 'ajax/update_maintenance_notes.php',   
                data:'job_ref='+ job_ref+ '&notes='+my_text,
                success: function(msg) { 

                    $.ajax({
                          type:"post",
                          url: 'ajax/get_maintenance_notes.php',   
                          data:'job_ref='+ job_ref + '&job_title=' + job_title,
                          success: function(msg) {                
                              $('#notes_div').html(msg);  
                              $('#whitespot_notes').val('');  
                              return false;                                  
                          }
                      });                
                }
            }); 
    }
});

</script>