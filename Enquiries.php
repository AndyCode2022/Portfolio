<?php require 'header.php'; ?>

<!-- Use this form to send me an email -->
<h1 class="display-1">Enquiries</h1>
<div class="container">
    <form action="includes/processContactForm.php" class="Form" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">FullName</label>
            <input type="text" class="form-control" id="name" placeholder="Full Name:" required="true">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email:" required="true">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" required="true" class="form-control">How can I help you?</textarea>
        </div>
        <br>
        <div class="mb-3">
            <input type="submit" name="submit" id="submit" value="submit">
        </div>
    </form>
</div>

<?php require 'footer.php'; ?>