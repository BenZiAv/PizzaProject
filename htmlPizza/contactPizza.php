<?php include '../src/inc/header.php';?>
<body>
    <div class="container">
        <form action="index.php">
      
          <label for="fullname">Full Name</label>
          <input type="text" id="fullname" name="fullname" placeholder="Your full name..">
      
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your email..">

          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone" placeholder="Your phone number..">
      
          <label for="gender">Gender</label>
          <select id="text" name="gender">
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="other">Other</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>  
</body>
<?php include '..src/inc/footer.php'; ?>
