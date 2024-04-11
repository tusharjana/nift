<?php
    if (isset($POST['submit'])) {
        $email = $_POST['email'];
    }

    $errorEmail = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "alert('Fill in valid email address')";
    } else {
        echo "alert('Success!')";
    }
?>


<script>
    if (errorEmail == false) {
        $('#con-email','#con-name','#con-sub','#con-msg').val("");
    }
</script>
