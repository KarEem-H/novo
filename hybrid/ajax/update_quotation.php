<?php 

    include "../config/connection.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';

    error_reporting(1);

    $today_date = date("Y-m-d");
    date_default_timezone_set("Asia/Dubai");
    $current_time = date("h:i");    
    
    $quotation_id    = $_POST['quotation_id'];
    $client_name     = $_POST['client_name'];
    $client_mobile   = $_POST['client_mobile'];
    $client_email    = $_POST['client_email'];
    $client_address  = $_POST['client_address'];
    $subject         = mysqli_real_escape_string($conn,$_POST['subject']);
    // $scope_of_work   = $_POST['scope_of_work'];
    $scope             = $_POST['scope_of_work'];
    if($scope =='[object Object]'){
        $scope_of_work = '';
    }else{
        $scope_of_work = $_POST['scope_of_work'];
    }
    $service         = mysqli_real_escape_string($conn,$_POST['service']);
    $quantity        = $_POST['quantity'];
    $quotation_date  = $_POST['quotation_date'];
    $quotation_rate  = $_POST['quotation_rate'];
    $total_price     = $_POST['price'];
    $sub_total       = $_POST['sub_total'];
    $vat             = $_POST['vat'];
    $inspection_id   = $_POST['inspection_id'];
    $payment_terms   = mysqli_real_escape_string($conn,$_POST['payment_terms']);
    $agent_name      = $_SESSION['ADMIN_ID']['NAME'];

    $description     = explode(',',$service);
    $item_quantity   = explode(',',$quantity);
    $rate            = explode(',',$quotation_rate);

    $total_service_count = count($description);

    foreach($description as $i => $desc) {

        $des[$i] = $desc;  

    }

    foreach($item_quantity as $i => $qty) {

        $Quantity[$i] = $qty; 

    }

    foreach($rate as $i => $price) {

        $prc[$i] = $price; 

    }


    $sql = mysqli_query($conn,"UPDATE table_quotations SET `customer_name` = '$client_name',`customer_mobile` = '$client_mobile',`customer_email` = '$client_email',`customer_address` = '$client_address',`quotation_subject` = '$subject',`service` = '$service',`quantity` = '$quantity',`total` = '$quotation_rate',`vat` = '$vat',`sub_total` = '$sub_total',`scope_of_work` = '$scope_of_work',`quotation_date` = '$quotation_date',`quotation_rate` = '$total_price',`payment_terms` = '$payment_terms' WHERE quotation_id = '$quotation_id'");

    $html = 'Thank you for choosing Higi! Here is the Quotation.';

    $html1 = '
    <!DOCTYPE html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

        <link href="../css/nifty.min.css" rel="stylesheet">
        <style>
        #content-container:before{
            background-color: #ffffff;
        }
        
        #content-container{
            padding-top: 0px;
            padding-bottom: 0px;
        }
        
        #page-content{
            padding: 0px;
        }
        
        body{
            background-color: #ffffff;
            min-width: 290px;
        }
        
        .panel-body{
            padding: 0px;
        }
        .invoice-right {        
            float: right !important;
        }
        
        .invoice-left{
            float:left !important;
        }
        
        .invoice-total{
            max-width: 320px;
            float: right;
        }
        
        .invoice-total>tbody>tr td{
            border: 0 !important;
            text-align: right;
        }

        span,address,p,li{
            font-size:12px !important;
        }

        .invoice-summary{
            margin-left:0px !important;
            margin-right:0px !important;
        }
        </style>
    </head>
    <div class="container">
        <div id="page-content">
            <div class="panel">
                <div class="panel-body">
                    <div class="invoice-masthead col-sm-12" style="margin-bottom:5px;">  
                        <div class="invoice-text" style="text-align: left;float:left;vertical-align: middle;padding-top: 35px;">
                            <p text-uppercase text-thin mar-no">#'.$quotation_id.'</p>
                        </div>                 
                        <div class="invoice-brand" style="white-space:nowrap; text-align: right;padding-top:15px">
                            <div class="invoice-logo">
                                <img src="../img/higi-logo-header.png" width="150px">
                            </div>
                            
                        <div>
                            </div>
                        </div>
                    </div>

                    <hr class="new-section-sm">
                    
                    <div class="clearfix">  
                    <div class="invoice-bill row col-sm-12">
                        <div class="col-sm-6 text-left invoice-left" style="width:40%; float:left">
                            <p>To:</p>
                            <p>
                                <strong class="text-main" id="client_name">'.$client_name.'</strong><br>
                                <span id="client_mobile">'.$client_mobile.'</span><br>
                                <span id="client_address">
                                    '.$client_address.'
                                </span>
                            <p>                
                        </div>
                        <div class="col-sm-6 text-left invoice-right" style="width:30%; float:right">
                            <p>Date:</p>
                            <p><strong class="text-main" id="quotationDate">'.$quotation_date.'</strong></p>
                            <p>Subject:</p>
                            <p>
                                <strong class="text-main" id="client_subject">'.$subject.'</strong>  
                            <p>
                        </div>
                    </div>
                    </div>

                    <hr class="new-section-sm bord-no">
            
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered invoice-summary">
                                    <tr class="bg-trans-dark">
                                        <th class="text-uppercase text-main">ID</th>
                                        <th class="text-uppercase text-main">Service</th>
                                        <th class="min-col text-center text-uppercase text-main">Qty</th>
                                        <th class="min-col text-center text-uppercase text-main">Price</th>
                                        <th class="min-col text-right text-uppercase text-main">Total (AED)</th>
                                    </tr>

                                    ';

            $html2 ='';
            $serialno = 1;
            for($i = 0; $i < $total_service_count; $i++){
                    
                    $rate_p[$i] = $prc[$i]*$Quantity[$i];

            $html2 .= '<tr>
                        <td>'. $serialno++ .'</td>
                        <td>
                            <strong class="text-main">'.$des[$i].'</strong>                   
                        </td>
                        <td class="text-center">'.$Quantity[$i].'                  
                        </td>
                        <td class="text-center">'.$prc[$i].'</td>
                        <td class="text-right">'.$rate_p[$i].'</td>
                        </tr>';
                }

            

            $html3 = '</table>
                        </div>
                    </div>
                    <div class="clearfix">
                        <table class="table invoice-total">
                            <tbody>
                                <tr>
                                    <td class="text-center">SUB TOTAL :</td>
                                    <td class="h5 text-center">'.$sub_total.'</td>
                                </tr>
                                <tr>
                                    <td class="text-center">VAT(5%) :</td>
                                    <td class="h5  text-center">'.$vat.'</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><strong>GRAND TOTAL :</strong></td>
                                    <td class="text-bold h4 client_rate text-center">AED '.$total_price.'</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>';

                    

                $html4 ='<div class="col-sm-12 text-left">                               
                            <p class="text-bold text-main text-uppercase">SCOPE OF WORK</p>
                            <p>'.$scope_of_work.'</p>
                        </div>
                        <hr class="new-section-sm bord-no">';

                $html5 = '<div class="col-sm-12 text-left">                               
                        <p class="text-bold text-main text-uppercase">PAYMENT TERMS</p>
                        <ul>
                            <li id="client_payment">'.$payment_terms.'</li>
                            <li>Price quoted is inclusive of 5% VAT</li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <p class="text-bold text-main text-uppercase">Terms &amp; Conditions</p>
                        <ol>
                            <li>This offer is valid for 30 days from the date stated on the offer, unless otherwise agreed.</li>
                            <li>This proposal and costs are based upon a reasonable assumption that the plan and services for which we are responsible have been properly maintained and are in good condition upon the date we assume responsibility.</li>
                            <li>The amount quoted is inclusive of VAT.</li>
                            <li>Any additional special tasks outside the scope of the tender document will be considered extra as a variable item and will be quoted as requested.</li>
                            <li>This rate includes all required cleaning materials and equipment.</li>
                            <li>Any accidental damage to movable or immovable items within the premise, incurred during the normal course of our works, will be covered under the Clients insurance.</li>
                            <li>Late cancellation fee is 50% of the quoted rate (24hrs notice is required).</li>
                            <li>Any delay due to construction or snagging works will not be the responsibility of Whitespot Cleaning Services.</li>
                            <li>DEWA should be connected to execute the job without delay.</li>
                            </ol>
                        <p>If you have any questions concerning this invoice, please contact <strong class="text-main">info@higi.ae</strong> or Call 800 HME(463)</p>
                    </div>
                </div>
            </div>
        </div>
    <div>';

    if($scope_of_work == '' || $scope_of_work == '<p><br></p>'){

        $final_content = $html1 . $html2 . $html3 . $html5;

    }else{

        $final_content = $html1 . $html2 . $html3 . $html4 . $html5;

    }

    // include autoloader
    require_once '../dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    // $content = file_get_contents('view_invoice.php');

    $dompdf->loadHtml($final_content);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    $pdf_name = 'QUOTATION-'.$quotation_id;

    $file_name = $pdf_name.'.pdf';

    $output = $dompdf->output();
    file_put_contents("../uploads/".$file_name, $output);

    echo "Quotation Created Successfully!";
  
?>