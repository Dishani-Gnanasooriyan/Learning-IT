<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>


<?php
    if(isset($_POST['submit']))
    {
        $apiToken = "5962472846:AAEIYUD0ML0VEu86iZSIqITkESoy694WITg";
        $data = [
            'chat_id' => '@litfriend', 
            'text' => $_POST['message']
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );    
    }
?>