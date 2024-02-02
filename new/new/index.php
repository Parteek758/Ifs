<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <?php
function personHeightOptions(){
  $itotal = 95; $r = '';
  for($foot=7;$foot>=3;$foot--){
      for($inches=11;$inches>=0;$inches--){
          if($inches==0){
             $r .= "<option value='$itotal'> $foot' 0\" </option>";
           }else{
             $r .= "<option value='$itotal'> $foot' $inches\" </option>";
           }
  $itotal--;
      }
  }
 return $r;
}
?>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        var el = document.querySelector(".button-bird");
        var text = document.querySelector(".button-bird__text");
            el.addEventListener('click', function() {
              el.classList.toggle('active');
  
              if(el.classList.contains('active')){
                  console.log('true');
                  text.innerHTML = 'DONE';
              }else{
                  text.innerHTML = 'SEND';
              }
          });
      });
</script>
    <h1>Contact Us</h1>
    <form action="send_email.php" method="post">
        <div class="name-section">
            <div class="uid-div">
                <label class="headdind" for="title">Title:</label>
                <select class="input-tag" name="title" required>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                </select>
            </div>
            <div class="uid-div">
                <label class="headdind" for="name">Name:</label>
                <input class="input-tag" type="text" name="name" required>
            </div>
            <div class="uid-div">
                <label class="headdind" for="Middle Name">Middle Name:</label>
                <input class="input-tag" type="text" name="middle_name"d>
            </div>
            <div class="uid-div">
                <label class="headdind" for="Last Name">Last Name:</label>
                <input class="input-tag" type="text" name="last_name" required>
            </div>     
        </div>
        <div class="Dob-uid">
            <div class="uid-div">
                <label for="dob">DOB:</label>
                <input type="date" name="dob" required>
            </div>
            <!-- <div class="uid-div">
                <label for="adharcard">Adharcard Photo:</label>
                <input type="file" name="adharcard" accept="image/*" required>
            </div> --> 
        </div>
        <div class="state-and-other-detailes">
            <div class="uid-div">
                <label for="adharcard">Current State:</label>
                <select name="state" id="state" class="form-control">
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
            </div>
            <div class="uid-div">
                <label for="adharcard">Residential Address:</label>
                <input type="text" name="residential_address">
            </div>
            <div class="uid-div">
                <label for="adharcard">Current Address:</label>
                <input type="text" name="current_address">
            </div>
            <div class="uid-div">
                <label for="adharcard">Height:</label>
                <select name="person_height" id="person_height">
                    <option disabled selected>Height</option>
                    <?php echo  personHeightOptions(); ?>
                </select>
            </div>
            <div class="uid-div">
                <label for="adharcard">Qualification:</label>
                <input type="text" name="qualification">
            </div>
         </div>
         <hr>
            <!-- contact Number Details  -->
           <div class="contact-no-info">
                <label for="Contact Details">Contact Details</label>
                <br>
                <div class="uid-div">
                    <label for="Mobile Number">Mobile Number:</label>
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="mobile_number"/>
                </div>
                <div class="uid-div">
                    <label for="Alternate Number">Alternate Number:</label>
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" name="alternate_number"/>
                </div>
           </div>
           <hr>
           <div class="uid-div">
            <label for="adharcard">Instagram:</label>
            <input type="text" name="instagram" id="">
           </div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
