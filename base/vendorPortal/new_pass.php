<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <link rel="stylesheet" href="../../css/new_pass.css">
    <link rel="stylesheet" href="../../css/responsive.css">
</head>

<body>
    <div class="bb_newpass_container">
        <h1>Reset Password</h1>
        <input type="password" name="password" autocomplete="current-password" required="" id="id_password1"
            placeholder="New Password">
        <i class="far fa-eye lol" id="togglePassword1"></i>

        <input type="password" name="password" autocomplete="current-password" required="" id="id_password2"
            placeholder="Repeat Password">
        <i class="far fa-eye lol" id="togglePassword2"></i>
        <div class="button">
            <a href="vendor_login.php"><button type="submit" class="signupbtn">Reset Password</button></a>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword1');
        const password = document.querySelector('#id_password1');
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });


        const togglePassword2 = document.querySelector('#togglePassword2');
        const password2 = document.querySelector('#id_password2');
        togglePassword2.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
            password2.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        const togglePassword3 = document.querySelector('#togglePassword3');
        const password3 = document.querySelector('#id_password3');
        togglePassword3.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
            password3.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>