<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurley Piano Website - Contact Us</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <?php include("header.html"); ?>
    <main>
        <div class="container">
            <div class="centered-tile-full-width">
                <h2>Book Your First Free Piano Lesson!</h2>
                <h4>Unlock Your Musical Potential Today with Expert Guidance!</h4>
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message">Form submitted successfully!</p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('bookyourfirstlesson').reset();
                        });
                    </script>
                <?php endif; ?>
                <form action="freelesson.php" method="post" id="bookyourfirstlesson" novalidate class="inquiry-form">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Piano" required>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                    
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
            
            <div class="contact-us">
                <h2>Contact Us</h2>
                <h4>We love to hear from you!</h4>
                <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                    <p class="success-message">Form submitted successfully!</p>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById('contactform').reset();
                        });
                    </script>
                <?php endif; ?>
                <form action="contact.php" method="post" id="contactform" novalidate class="inquiry-form">
                    <label for="first_name_contact">First Name</label>
                    <input type="text" id="first_name_contact" name="first_name" placeholder="Hurley" required>
                    
                    <label for="last_name_contact">Last Name</label>
                    <input type="text" id="last_name_contact" name="last_name" placeholder="Piano" required>
                    
                    <label for="email_contact">Email</label>
                    <input type="email" id="email_contact" name="email" placeholder="you@email.com" required>
                    
                    <label for="phone_contact">Phone</label>
                    <input type="tel" id="phone_contact" name="phone" placeholder="Phone" required>

                    <label for="comment_contact">Comment</label>
                    <input type="text" id="comment_contact" name="comment" placeholder="Enter your text here" required>

                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    
    <?php include("footer.html"); ?>

    <call-us-selector phonesystem-url="https://1861.3cx.cloud" party="thienkimle"></call-us-selector>

    <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

    <script src="https://cdn.userway.org/widget.js" data-account="g3JuQiTzQN"></script>
</body>
</html>
