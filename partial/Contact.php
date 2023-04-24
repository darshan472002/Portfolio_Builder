<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/PHP/css/contact.css">
    <link rel="stylesheet" href="/PHP/css/nav.css">
</head>

<body class="p-0 m-0 border-0 bd-example">
    <!-- NavBar Section -->
    <?php include '_navbar.php'; ?>

    <!-- Contact Section -->
    <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
        </div>
        <div class="container">

            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4671 Sugar Camp Road, Owatonna, 55060</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>507-475-6094</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>wrub7d78i0e@temporary-mail.net</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form id="contactForm">
                    <h2>Send Message</h2>
                    <div class="alert">Your message sent</div>
                    <div class="inputBox">
                        <input type="text" id="name" name="Name" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="email" name="Email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="Message" id="message" required></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
<script src="..\css\mail.js"></script>

</html>