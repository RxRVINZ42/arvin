<body style="background-color: antiquewhite;">

            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                       <form action="register_check.php" method="POST">
 <div class="mb-3">
    <label for="name" class="form-label">Name: </label>
    <input type="text" class="form-control" name="Fname" id="name" aria-describedby="Full Name" required>
  </div>
  <br>

   <div class="mb-3">
    <label for="nric" class="form-label">NRIC / Passport: </label>
    <input type="text" class="form-control" name="noIC" id="name" aria-describedby="NRIC / Passport" required>
  </div>
  <br>

  <div class="mb-3">
    <label for="email" class="form-label">Email address: </label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
  </div>
  <br>


  <?php
    $negeri = array('Please enter your state','Pulau Pinang','Kedah','Perak','Perlis','Selangor','Kelantan','Melaka','Terengganu','Negeri Sembilan','Pahang','Johor','Sabah','Sarawak');
    echo "<label>State: </label>";
    echo "<select name='negeri'>";
      for ($i = 0;$i < count($negeri);$i++)
      {
        echo "<option value='$negeri[$i]'>".$negeri[$i]."</option>";
      }
    echo "</select>";
  ?>

<br>
<br>
  <div class="mb-3">
    <label for="password" class="form-label">Password: </label>
    <input type="password" class="form-control" id="password">
  </div>
  <br>
  <div class="mb-3">
    <label for="vpassword" class="form-label">Verify Password: </label>
    <input type="password" class="form-control" id="vpassword">
  </div>
<br>
  
  <button type="submit" class="btn btn-primary" style="border-radius: 12px; padding: 12px 28px; font-size: 16px; background-color: lightskyblue; font-style: italic; font-weight: bold;">Submit</button>
</form>
                    </div>
                </div>
            </section>
         </body>

        <!-- Footer-->
     