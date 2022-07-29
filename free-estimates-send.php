<div class="content-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><a href=".">Home</a> <i class="fa fa-angle-double-right"></i> Free Estimates</h2>
            </div>
        </div>
    </div>
</div>

<?php
    $to ="mike@jasperit.net";
    $subject = "Free Estimates Email from Website || American Paving.";
    $headers = "From: " . strip_tags($_POST['firstName'])." <".strip_tags($_POST['email'])."> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    ob_start();
?>
<?php
    if(empty($_POST['firstName'])){
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You have not entered your Full Name.</p>";
    }
    elseif(empty($_POST['email'])){
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You have not entered your Email Address.</p>";
    }
    elseif(empty($_POST['cell'])){
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You have not entered your Phone Number.</p>";
    }
    elseif(empty($_POST['address'])){
        echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! You have not entered your Address.</p>";
    }
    else
    { ?>

    <table rules="all" style="border:1px solid  #666; font-size:16px;" cellpadding="10" width="100%">
        <tr style='background: #eee;'>
            <td colspan="4"><strong>PERSONAL INFORMATION</strong> </td>
        </tr>
        <tr>
            <td><strong>First Name:</strong> </td>
            <td><?=strip_tags($_POST["firstName"])?></td>
            <td><strong>Last Name:</strong> </td>
            <td><?=strip_tags($_POST["lastName"])?></td>
        </tr>
        <tr>
            <td><strong>Cell Phone:</strong> </td>
            <td><?=strip_tags($_POST["cell"])?></td>
            <td><strong>Alternate Phone:</strong> </td>
            <td><?=strip_tags($_POST["phone"])?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong> </td>
            <td><?=strip_tags($_POST["email"])?></td>
            <td><strong>Address:</strong> </td>
            <td><?=strip_tags($_POST["address"])?></td>
        </tr>
        <tr style='background: #eee;'>
            <td colspan="4"><strong>MESSAGE</strong></td>
        </tr>
        <tr>
            <td colspan="4"><?=strip_tags($_POST["message"])?></td>
        </tr>
    </table>

<?php 
$message = ob_get_clean();
if(!@mail($to, $subject, $message, $headers))
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;'>Sorry! sending mail failed. Try again.</p>";
 else
    echo "<p style='color: #fff; margin: 0; padding: 20px 0; background: #27ae60; font-size: 25px; text-align: center;'>Your Free Estimate form has been sent successfully, we will contact soon, thank you!</p>";
?>
<?php }
 ?>