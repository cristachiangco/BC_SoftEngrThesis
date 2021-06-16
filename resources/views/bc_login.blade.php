<html>
    <head>
        @yield('meta')
        <link rel="stylesheet" type="text/css" href="/bc_css/bc_gendesign.css">
        <style>
            body {
                background-image: url('/img/hospital_bg1.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>

        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    </head>

    <body>
        <div id="log_container_1">
            <a href="/" id="title"><h1>Pasig City Online Teleconsultation</h1></a>
            <div id="log_cont">
            
                <!-- Log In Form to Verify the Database... -->
                <form id = "log_cont_inner" method = "POST" action = "/">

                    <h2> Sign In </h2>

                    <div id = "form">
                        <li><label> Username : </label><input name = "username_signin" maxlength="10"/></li>
                        <li><label> Password  :  </label><input name = "password_signin" type = "password" minlength = "8" maxlength = "20"/></li>
                    </div>

                    <div id = "log_btns_cont_1">
                        <a href = "/Chat" id = "btnsLOG"> Log In </a>
                        
                        <!-- Creating Button Input Type for LogIn Form Submission -->
                        <!-- <input type = "submit" name = "button_signin" id = "btnsLOG" value = "Log In"/> -->
                    </div>

                </form>
                <!-- Log In Form to Verify the Database... -->
                
                <div id="my-signin2"></div>
                    <script>
                        function onSuccess(googleUser) {
                        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                        }
                        function onFailure(error) {
                        console.log(error);
                        }
                        function renderButton() {
                        gapi.signin2.render('my-signin2', {
                            'scope': 'profile email',
                            'width': 240,
                            'height': 50,
                            'longtitle': false,
                            'theme': 'dark',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                        }
                    </script>
                    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
            </div>
        </div>
    </body>
</html>