<?php require_once __DIR__ . '/includes/header.php' ?>

<div class="contact-form">
    <div class="flex-left">
        <form action="">

        <div class="form-group">
                <label for="email">Username</label>
                <input type="text" placeholder="Enter your Name" class="input-group">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" placeholder="Enter your Email Address" class="input-group">
            </div>

            <div class="form-group">
                <label for="comment">Enter your message</label><br>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message here">

                </textarea>
            
            </div>
            <div class="form-group">
                <btt class="btn-primary">Send Message</btt>
            </div>
        </form>
    </div>
    <div class="flex-right">
        <!-- Map and location -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15924.970888986369!2d37.6034918!3d-3.7572587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1838153fa0b4e491%3A0x9c779b9bf47a7d9f!2sClassNinjaTz!5e0!3m2!1sen!2stz!4v1701090793365!5m2!1sen!2stz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php' ?>