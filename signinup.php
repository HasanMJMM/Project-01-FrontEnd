<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesigninup.css" />
    <title>signin-signup</title>
  </head>

  <body>
    <div class="container">
      <div class="signin-signup">
        <form action="" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <a href="userInterface.html">
            <input type="submit" value="Login" class="btn" />
          </a>

          <p class="account-text">
            Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a>
          </p>
        </form>
        <form action="" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="form">
            <div class="row g-3">
              <div class="col">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    class="form-control"
                    aria-label="First name"
                    placeholder="First name"
                  />
                </div>
              </div>
              <div class="col">
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    class="form-control"
                    aria-label="Last name"
                    placeholder="Last name"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Phone Number" required />
          </div>

          <div class="row g-3">
            <div class="col">
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required />
              </div>
            </div>
            <div class="col">
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input
                  type="password"
                  placeholder="Confirm Password"
                  required
                />
              </div>
            </div>
          </div>
          <input type="submit" value="Sign up" class="btn" />
          <p class="social-text">Or Sign in with Google</p>
          <div class="social-media">
            <a href="" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
          </div>
          <p class="account-text">
            Already have an account? <a href="#" id="sign-in-btn2">Sign in</a>
          </p>
        </form>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Already Sign up</h3>
            <p>Log into your account</p>
            <button class="btn" id="sign-in-btn">Sign in</button>
          </div>
          <img src="signin.svg" alt="" class="image" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Don't have any account?</h3>
            <p>Welcome to bus tickets booking system</p>
            <button class="btn" id="sign-up-btn">Sign up</button>
          </div>
          <img src="signup.svg" alt="" class="image" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
