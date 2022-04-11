<!DOCTYPE html>
<html lang="en">
  <?php include 'inc/header.php'; ?>

  <body>
    <main class="p-5 ">
        <h1>Contact us</h1>

      <hr />

        <form method='post' action="contact.php" id="contactForm" >
            <div class="form-group">
                <label class='mt-3' for="diceType">Name</label>
                <div class="input-group">
                    <input required id="name" name="name" placeholder="Firstname Lastname" class="form-control" aria-label="name" aria-describedby="basic-addon1" />
                </div>
            </div>

          <div class="form-group">
                <label class='mt-3' for="diceType">Email</label>
                <div class="input-group mb-3">
                    <input required id="email" name="email" placeholder="Email" class="form-control" type='email' aria-label="email" aria-describedby="basic-addon1" />
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <select  required name="subject" multiple class="form-control" id="subject">
                    <option>Query</option>
                    <option>Feedback</option>
                    <option>Complaint</option>
                    <option>Other</option>
                </select>
            </div>
          
          <div class="form-group mt-3">
            <label for="comment">Comment</label>
            <textarea required class="form-control" id="comment" placeholder="Tell us a bit more..." name="comment" rows="3"></textarea>
          </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>

    </main>
  </body>

  <?php include 'inc/footer.php'; ?>
</html>