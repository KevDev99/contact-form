
<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comment']; ?>

<?php if(empty($name) || empty($email) || empty($subject)  || empty($comment)) : ?> 
 <span>Invalid input.</span>
<?php else : ?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'inc/header.php'; ?>
  <body>
    <main class="p-5">
      <h1  class="text-center">Thank's for contacting us !</h1>

    <h4 class="text-center text-xl" >We will get back to your ASAP!</h4>
      <hr />
<h5 class="mt-5">Your contact data:</h5>

      <div class="container form-control">
        
        <div class="row ">
          <div class="col-12">
            <label>Name: <span><?php echo $name?></span>              </label>
            
          </div>
          <div class="col-12">
            <label>Email: <span><?php echo $email?></span>              </label>
          </div>
          <div class="col-12">
            <label>Subject: <span><?php echo $subject?></span>              </label>
          </div>
          <div class="col-12 mt-2">
            <label>Comment: <span class="fw-light"><?php echo $comment?></span>              </label>
          </div>
        </div>
      </div>
    </main>
  </body>

  <?php include 'inc/footer.php'; ?>
</html>

<?php endif; ?>
