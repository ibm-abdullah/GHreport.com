<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>GHreport</title>
<meta charset="UTF-8" />
<!-- provide the links to all static resources here : links to csss and javascript files-->
   <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/login.css" rel="stylesheet">
    <script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" />
    <script type="text/javascript">
      // FirebaseUI config.
      var uiConfig = {
        signInSuccessUrl: '<dashboard.html>',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          firebase.auth.FacebookAuthProvider.PROVIDER_ID,
          firebase.auth.TwitterAuthProvider.PROVIDER_ID,
          firebase.auth.GithubAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID,
          firebase.auth.PhoneAuthProvider.PROVIDER_ID
        ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
      };

      // Initialize the FirebaseUI Widget using Firebase.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);
    </script>
</head>
<body>
<!--    <div class="container">
        <div class="login-wrap">
            <img src="images/logo.jpg"">
            <form role="form" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email"
                            placeholder="example.gmail.com" required>
                    </div>
                    <div>
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-12">
                        <input type="password" name="password" id="password"
                            class="form-control" required>
                    </div>
                    <div>
                        <span></span>
                    </div>
                </div>
                <button onclick="signUp(document.getElementById('email').value,document.getElementById('password').value)" 
                class="btn btn-primary col-sm-3 col-sm-offset-5">Log in</button>
            </form>
        </div>
    </div>
<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyColmH6hzWTA4awgNmv1cVYEAfp3qswJYs",
    authDomain: "ghanareport-8f09e.firebaseapp.com",
    databaseURL: "https://ghanareport-8f09e.firebaseio.com",
    projectId: "ghanareport-8f09e",
    storageBucket: "ghanareport-8f09e.appspot.com",
    messagingSenderId: "629066523099"
  };
  firebase.initializeApp(config);
</script> -->
<h1>GHreport</h1>
</body>
</html>