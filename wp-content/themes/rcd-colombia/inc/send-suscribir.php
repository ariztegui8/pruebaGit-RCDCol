<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// if($_POST['action'] === 'sendform'){
if(1==1){
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];

	$arr = array(
        'properties' => array(
            array(
                'property' => 'firstname',
                'value' => $nombre
            ),
            array(
                'property' => 'email',
                'value' => $email
            ),
            array(
                'property' => 'email_blog',
                'value' => true
            ),
            array(
                'property' => 'hubspot_owner_id',
                'value' => 31876291
            )
        )
    );
    $post_json = json_encode($arr);
    $hapikey = "5607eec2-dc25-4399-9d19-e1f979d225c8";
    // $hapikey = "7b6e80e1-e7cb-4354-901c-e686bed8bc7b";
    $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = @curl_exec($ch);
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_errors = curl_error($ch);
    @curl_close($ch);
    /*echo "curl Errors: " . $curl_errors;
    echo "\nStatus code: " . $status_code;
    echo "\nResponse: " . $response;*/
    if($status_code == 200){
        echo 0;
    }elseif($status_code == 409){
        echo 1;
    }else{
        echo "\nStatus code: " . $status_code;
        echo "\nResponse: " . $response;
    }
}
?>

