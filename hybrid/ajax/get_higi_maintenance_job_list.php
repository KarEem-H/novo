<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

function filter_by_value ($array, $index, $value){
  if(is_array($array) && count($array)>0) 
  {
    foreach(array_keys($array) as $key){
      $temp[$key] = $array[$key][$index];

      if ($temp[$key] == $value){
        $newarray[$key] = $array[$key];
      }
    }
  }
  return $newarray;
}

function cmp($a, $b){

    $ad = new DateTime($a['created_at']);
    $bd = new DateTime($b['created_at']);

      if ($ad == $bd) {
        return 0;
      }

      return $ad < $bd ? -1 : 1;
}

// function cmp($a, $b){

//     $ad = new DateTime($a['created_at']);
//     $bd = new DateTime($b['created_at']);

//       if ($ad == $bd) {
//         return 0;
//       }

//       return $ad > $bd ? -1 : 1;
// }

if($admin_role =='Administrator'){
 $sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.id,t1.quotation_id,t1.quotation_status,t1.tenant_full_name,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '') t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE admin_read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)");   
}

if($agent_name == 'Charmaine' || $agent_name == 'Ross'){
    
$sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.id,t1.quotation_id,t1.quotation_status,t1.tenant_full_name,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '') t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)");

}

if($admin_role =='Telesales' && $agent_name != 'Charmaine' && $agent_name != 'Gina' && $agent_name != 'Purple'){
    
$sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.tenant_full_name,t1.id,t1.quotation_id,t1.quotation_status,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '' AND (agent_name = '$agent_name' OR `source` = 'External Customer')) t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)"); 

}

if($agent_name == 'Purple'){

$sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.tenant_full_name,t1.id,t1.quotation_id,t1.quotation_status,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '' AND (`source`='Staycae' OR agent_name='Purple')) t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)"); 

}

if($agent_name =='Gina'){

$sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.tenant_full_name,t1.id,t1.quotation_id,t1.quotation_status,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '' AND (`source` = 'Damac Leasing' OR `source` = 'External Customer')) t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)");  

}

if($admin_role == 'Staycae'){

$sql = mysqli_query($conn,"SELECT t2.noti_count,t1.mid,t1.title,t1.status,t1.details,t1.tenant_full_name,t1.id,t1.quotation_id,t1.quotation_status,t1.available_date,t1.time_slot,t1.tenant_phone,t1.property_name,t1.property_address,t1.source,t1.created_at,t1.schedule_date,t1.schedule_time,t1.updated_at FROM ( SELECT id,quotation_id,mid,title,status,details,tenant_full_name,available_date,time_slot,tenant_phone,property_name,property_address,source,created_at,schedule_date,schedule_time,updated_at,quotation_status FROM `maintenance_jobs` WHERE `approved_by` = '' AND `source`='Staycae') t1 LEFT JOIN (SELECT COUNT(id) as noti_count,maintenance_id FROM `maintenance_notes` WHERE read_notification = '0' GROUP BY maintenance_id) t2 ON (t1.mid = t2.maintenance_id)"); 

}


while ($row = $sql->fetch_assoc()) {
  
$result[] = $row; 
    
}

$my_result = json_encode($result);
$json = json_decode($my_result, true);



// $my = array_values($json)[0];

// $keys = array_values($json[0]);

$get_new_jobs = filter_by_value($json, 'status', 'New');
$get_inprogress_jobs = filter_by_value($json, 'status', 'In Progress');
$get_onhold_jobs = filter_by_value($json, 'status', 'on Hold');
$get_completed_jobs = filter_by_value($json, 'status', 'Resolved');
$get_rejected_jobs = filter_by_value($json, 'status', 'Rejected');

$all_completed_jobs = array_merge((array)$get_completed_jobs,(array)$get_rejected_jobs);

$all_inprogress_jobs = array_merge((array)$get_inprogress_jobs,(array)$get_onhold_jobs);
usort($all_inprogress_jobs, 'cmp');
usort($all_completed_jobs, 'cmp');
usort($get_new_jobs, 'cmp');

// print_r($all_inprogress_jobs);
// ksort($all_inprogress_jobs);


// $result = json_encode($get_inprogress_jobs);
$new_jobs = array();
$inprogress_jobs = array();
$completed_jobs = array();
foreach($get_new_jobs as $nj){

  $quotation_id = $nj['quotation_id'];  
  $nj_noti_count = $nj['noti_count']; 

  $jobs = '<li class="task-default" id="'. $nj['mid'] .'">
        <p class="text-bold text-main text-sm task-footer">
        <span class="box-inline pad-rgt">
        <span>#'. $nj['mid'] .'</span>
        <span class="pad-lft">'. $nj['title'] .'</span>
        </span>
        <span class="box-inline" style="float:right">';
        if($quotation_id != ''){ 

            $jobs .= '<label class="label label-default" style="margin-right:3px;">Quotation Created</label>';

        }
      $jobs .= '<label class="label label-default">'. $nj['status'] .'</label>
        </span>
        </p>
        <p class="pad-btm bord-btm">'. $nj['details'] .'
        </span>
        </p>
        <a class="task-footer pad-btm bord-btm">
        <span class="box-inline">
        <i class="demo-pli-male icon-fw text-main"></i>
        '. $nj['tenant_full_name'] .'
        </span>
        <span class="box-inline"><i class="demo-pli-calendar-4 icon-fw text-main"></i>'. $nj['available_date'] .'</span>
        <span class="box-inline text-sm"><i class="demo-pli-clock icon-fw text-main"></i>'. $nj['time_slot'] .'</span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline"><i class="demo-pli-smartphone-3 icon-fw text-main"></i>
        '. $nj['tenant_phone'] .'
        </span>
        <span class="box-inline" style="float:right">
        <i class="demo-pli-building icon-fw text-main"></i>
        '. $nj['property_name'] .'
        </span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline">
        <i class="demo-pli-address-book icon-fw text-main"></i>
        '. $nj['property_address'] .'
        </span>
        <span class="box-inline">
        <label class="label label-primary">'. $nj['source'] .'</label>
        </span>
        </a>
        <div class="text-center pad-top">
        <div class="demo-nifty-btn">
        <a class="btn btn-sm btn-default view_notes" data-id="'. $nj['mid'] .'" data-value="'. $nj['title'] .'"><i class="demo-pli-add icon-lg icon-fw"></i> Notes';
        
        if($nj_noti_count > 0){
           $jobs .= ' <span class="pull-right badge badge-info" style="background-color:#03a9f4; margin-left:5px"> ' .$nj_noti_count. '</span>';
        }
        
        $jobs .= '</a>';

        if($admin_role != 'Staycae'){

        $jobs .= '<a class="btn btn-sm btn-default reject_job" data-id="'. $nj['mid'] .'" data-value="Rejected"><i class="demo-pli-remove icon-lg icon-fw"></i> Reject</a>';
        }
        
        $jobs .= '</div>
        </div>
        <p class="pad-top text-center"><span>Created at: '.  $nj['created_at']. '</span></p>
        </li>';

        $new_jobs[] = $jobs;

}

foreach($all_inprogress_jobs as $ipj){

  $i_quotation_id = $ipj['quotation_id'];  
  $i_my_status = $ipj['status']; 
  $i_noti_count = $ipj['noti_count']; 
  $i_my_notes = $ipj['quotation_status'];  

  if($i_my_notes !=''){
    $quotation_status = 'Quotation Approved';
  }else{
    $quotation_status = 'Quotation Created';
  }

  $i_jobs = '<li class="task-info" id="'. $ipj['mid'] .'">
        <p class="text-bold text-main text-sm task-footer">
        <span class="box-inline pad-rgt">
        <span>#'. $ipj['mid'] .'</span>
        <span class="pad-lft">'. $ipj['title'] .'</span>
        </span>
        <span class="box-inline" style="float:right">';
        if($i_quotation_id != ''){ 

            $i_jobs .= '<label class="label label-default" style="margin-right:3px;">'. $quotation_status .'</label>';

        }

        $i_jobs .= '<label class="label label-default">'. $ipj['status'] .'</label>
        </span>
        </p>
        <p class="pad-btm bord-btm">'. $ipj['details'] .'
        </span>
        </p>
        <a class="task-footer pad-btm bord-btm">
        <span class="box-inline">
        <i class="demo-pli-male icon-fw text-main"></i>
        '. $ipj['tenant_full_name'] .'
        </span>
        <span class="box-inline"><i class="demo-pli-calendar-4 icon-fw text-main"></i>'. $ipj['available_date'] .'</span>
        <span class="box-inline text-sm"><i class="demo-pli-clock icon-fw text-main"></i>'. $ipj['time_slot'] .'</span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline"><i class="demo-pli-smartphone-3 icon-fw text-main"></i>
        '. $ipj['tenant_phone'] .'
        </span>
        <span class="box-inline" style="float:right">
        <i class="demo-pli-building icon-fw text-main"></i>
        '. $ipj['property_name'] .'
        </span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline">
        <i class="demo-pli-address-book icon-fw text-main"></i>
        '. $ipj['property_address'] .'
        </span>   
        <span class="box-inline">
        <label class="label label-primary">'. $ipj['source'] .'</label>
        </span>
        </a>
        <div class="text-center pad-top">
        <div class="demo-nifty-btn">
        <a class="btn btn-sm btn-default completion_gallery" data-id="'. $ipj['mid'] .'" data-value="'. $ipj['title'] .'"><i class="demo-pli-photo-2 icon-lg icon-fw"></i> Gallery</a>';


        if($i_quotation_id == '' AND $admin_role != 'Staycae'){

            $i_jobs .= '<a class="btn btn-sm btn-default create_quote" data-id="'. $ipj['mid'] .'" href="create_quotation.php?qid='. $ipj['id'] .'"><i class="demo-pli-receipt-4 icon-lg icon-fw"></i> Create Quotation</a>';
        }

        if($i_quotation_id != '' AND $i_my_notes == '' AND $admin_role != 'Staycae'){

            $i_jobs .= '<a class="btn btn-sm btn-default approve_quote" data-id="'. $ipj['id'] .'" data-value="'. $ipj['mid'] .'"><i class="demo-pli-yes icon-lg icon-fw"></i> Approve Quotation</a>';
        }

        $i_jobs .= '<a class="btn btn-sm btn-default view_notes" data-id="'. $ipj['mid'] .'" data-value="'. $ipj['title'] .'"><i class="demo-pli-add icon-lg icon-fw"></i> Notes';
        
        if($i_noti_count > 0){
           $i_jobs .= ' <span class="pull-right badge badge-info" style="background-color:#03a9f4; margin-left:5px"> ' . $i_noti_count . '</span>';
        }


        $i_jobs .= '</a>';

        if($i_my_status != 'on Hold' AND $admin_role != 'Staycae'){

            $i_jobs .= '<a class="btn btn-sm btn-default on_hold" data-id="'. $ipj['mid'] .'" data-value="on Hold"><i class="demo-pli-remove icon-lg icon-fw"></i> On Hold</a>';

        }

        if($admin_role != 'Staycae'){

        $i_jobs .= '<a class="btn btn-sm btn-default reject_job" data-id="'. $ipj['mid'] .'" data-value="Rejected"><i class="demo-pli-remove icon-lg icon-fw"></i> Reject</a>';

        }

        $i_jobs .= '<a class="btn btn-sm btn-default upload_photos" data-id="'. $ipj['mid'] .'" data-value="'. $ipj['status'] .'"><i class="demo-pli-photo-2 icon-lg icon-fw"></i> Upload</a></div>
        </div>
        <p class="pad-top text-center"><span>Created at: '.  $ipj['created_at']. '</span></p>';

        if($quotation_status == 'Quotation Approved'){

            $i_jobs .= '<p class="text-center"><span>Job Schedule : '.  $ipj['schedule_date']. ' '.  $ipj['schedule_time'].'</span></p>';

        }

        $i_jobs .= '</li>';

        $inprogress_jobs[] = $i_jobs;

}

foreach($all_completed_jobs as $cj){

  $cj_my_status = $cj['status'];
  $cj_noti_count = $cj['noti_count'];

  $c_jobs = '<li class="task-success" id="'. $cj['mid'] .'">
        <p class="text-bold text-main text-sm task-footer">
        <span class="box-inline pad-rgt">
        <span>#'. $cj['mid'] .'</span>
        <span class="pad-lft">'. $cj['title'] .'</span>
        </span>
        <span class="box-inline" style="float:right">
        <label class="label label-default">'. $cj['status'] .'</label>
        </span>
        </p>
        <p class="pad-btm bord-btm">'. $cj['details'] .'
        </span>
        </p>
        <a class="task-footer pad-btm bord-btm">
        <span class="box-inline">
        <i class="demo-pli-male icon-fw text-main"></i>
        '. $cj['tenant_full_name'] .'
        </span>
        <span class="box-inline"><i class="demo-pli-calendar-4 icon-fw text-main"></i>'. $cj['available_date'] .'</span>
        <span class="box-inline text-sm"><i class="demo-pli-clock icon-fw text-main"></i>'. $cj['time_slot'] .'</span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline"><i class="demo-pli-smartphone-3 icon-fw text-main"></i>
        '. $cj['tenant_phone'] .'
        </span>
        <span class="box-inline" style="float:right">
        <i class="demo-pli-building icon-fw text-main"></i>
        '. $cj['property_name'] .'
        </span>
        </a>
        <a class="task-footer pad-top">
        <span class="box-inline">
        <i class="demo-pli-address-book icon-fw text-main"></i>
        '. $cj['property_address'] .'
        </span>   
        <span class="box-inline">
        <label class="label label-primary">'. $cj['source'] .'</label>
        </span>
        </a>
        <div class="text-center pad-top">
        <div class="demo-nifty-btn">
        <a class="btn btn-sm btn-default completion_gallery" data-id="'. $cj['mid'] .'" data-value="'. $cj['title'] .'"><i class="demo-pli-photo-2 icon-lg icon-fw"></i> Gallery</a>
        <a class="btn btn-sm btn-default view_notes" data-id="'. $cj['mid'] .'" data-value="'. $cj['title'] .'"><i class="demo-pli-add icon-lg icon-fw"></i> Notes';

        if($cj_noti_count > 0){
           $c_jobs .= ' <span class="pull-right badge badge-info" style="background-color:#03a9f4; margin-left:5px"> ' .$cj_noti_count. '</span>';
        }

        $c_jobs .= '</a>';
        
         if($cj_my_status != 'Rejected' AND $admin_role != 'Staycae'){

            $c_jobs .=  '<a class="btn btn-sm btn-default reject_job" data-id="'. $cj['mid'] .'" data-value="Rejected"><i class="demo-pli-remove icon-lg icon-fw"></i> Reject</a>';
         }
         
         if($admin_role =='Administrator' || $agent_name == 'Charmaine'){

            $c_jobs .=  '<a class="btn btn-sm btn-default approve_clear_maintenance_job" data-id="'. $cj['mid'] .'" data-value="Approve and Clear"><i class="demo-pli-yes icon-lg icon-fw"></i> Approve & Clear</a>';
         }
         
        $c_jobs .= '<a class="btn btn-sm btn-default upload_photos" data-id="'. $cj['mid'] .'" data-value="'. $cj['status'] .'"><i class="demo-pli-photo-2 icon-lg icon-fw"></i> Upload</a>
        </div>
        </div>
        <p class="pad-top text-center"><span>Created at: '.  $cj['created_at']. '</span></p>
        </li>';

        $completed_jobs[] = $c_jobs;

}


$all_filtered_data[]= array(

  'new_jobs'          => $new_jobs,
  'inprogress_jobs'   => $inprogress_jobs,
  'completed_jobs'    => $completed_jobs,

);

echo json_encode($all_filtered_data);

?>