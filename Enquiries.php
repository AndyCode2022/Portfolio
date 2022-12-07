<?php require 'header.php'; ?>

<h2 class="contact">Enquiries</h2>
<div class="Form">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">FullName</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name:">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email:">
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    First radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Second radio
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                <label class="form-check-label" for="gridRadios3">
                    Third disabled radio
                </label>
            </div>
        </div>
</div>
<div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Message</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<label for="terms">Agree with T&C:</label>
<input type="checkbox" name="terms" id="terms" required="true">
<br>
<input type="submit" value="Send">
</div>

<?php require 'footer.php'; ?>