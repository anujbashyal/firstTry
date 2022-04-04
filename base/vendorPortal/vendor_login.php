<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Account</title>
</head>
<body style="background-color: #07003A;">

    <div class="mainContainer">
        
        <div class="mC_right" style="width: 100%;">
            <div class="container cSignIn" style="width: 35%; padding: 5% 0%;">
                <div class="one">
                    <div class="one_1">
                        <h1>Vendor Login</h1>
                        <h4>Sign In to your Account.</h4>
                    </div>
                </div>
                <div class="three">
        
                    <div class="column">
        
                        <input type="text" placeholder="Enter Username">

                        <input type="password" name="password" autocomplete="current-password" required="" id="id_password3"
                            placeholder="Password">
                        <i class="far fa-eye lol" id="togglePassword3"></i>
                
                        <div class="termsCondition">
                            <input type="checkbox">
                            <label for="condition">Remember me</label>
                        </div>
                        <div class="tiptop">
                            <a href="tDeal.php"><button type="submit" class="signupbtn">Login</button></a>
                        </div>
                        <div class="forgetPass">
                            <a href="forgetPassword.php">Forget Password</a>
                        </div>
        
        
                    </div>
        
                </div>
            </div>
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