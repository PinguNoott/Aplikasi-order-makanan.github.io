<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link CSS Bootstrap or other stylesheets here -->
    <link rel="stylesheet" href="<?= base_url('path/to/your/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('path/to/your/styles.css') ?>">
    <!-- Link to Google Fonts or other font sources -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap">
    <style>
        body {
            background-color: #e0f7fa; /* Light blue background */
            color: #2F4F2F; /* Teal color for text */
            font-family: 'Quicksand', sans-serif; /* Cute font for body text */
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background-color: #ffffff; /* White background for the form */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container img {
            max-width: 150px; /* Adjust the size of the logo */
            margin-bottom: 1rem;
        }
        .form-control {
            border-radius: 4px;
            box-shadow: none;
            font-size: 1rem; /* Increase font size of input fields */
        }
        .btn-primary {
            background-color: #C1E7E3; /* Light blue color for button */
            border-color: #C1BBDD;
            font-size: 1.1rem; /* Increase font size of button text */
        }
        .btn-primary:hover {
            background-color: #0277bd; /* Darker blue for button hover */
            border-color: #0277bd;
        }
        .text-center {
            color: #00796b;
            font-size: 1.2rem; /* Increase font size of text */
        }
        .text-center a {
            color: #0288d1;
            font-weight: bold;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
        .invalid-feedback {
            display: block;
            color: #d32f2f; /* Red color for error messages */
            font-size: 1rem; /* Increase font size of error messages */
            font-weight: 600; /* Make error messages bold */
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?= base_url('index.html') ?>" class="logo d-flex align-items-center w-auto">
                                    <img src="<?= base_url('images/hello.png') ?>" class="logo-img">
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3 login-container">
                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_signup')?>" method="POST">
                                        <h5 class="card-title text-center pb-0 fs-4">Sign Up</h5>
                                    </div>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                            </div>
                                        </div>

                                        
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label"> Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0 text-center">Already have an account? <a href="<?= base_url('home/login') ?>">Login here</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
