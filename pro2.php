<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./pro2.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <form action="in.php" method="POST">
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Username" name="Username">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Password" name="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" type="submit">Continue</button>
                <p class="form__text">
                    <a href="#" class="form__link">Forgot your password?</a>
                </p>
                <p class="form__text">
                    <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
                </p>
            </form>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Sign Up</h1>
            <form action="in.php" method="POST">
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="Username">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="EmailAddress" name="EmailAddress">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="Password" name="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" autofocus placeholder="ConfirmPassword" name="ConfirmPassword">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" type="submit">Continue</button>
                <p class="form__text">
                    <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
                </p>
            </form>
        </form>
    </div>
    <script src="./pro2.js"></script>
</body>
