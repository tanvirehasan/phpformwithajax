<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>how to submit a form without refreshing the page using jquery ajax - Tutsmake.com</title>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-offset-2">
               <div class="page-header">
                  <h2>jQuery Ajax Form Submit Example In PHP</h2>
               </div>
               <p>Please fill all fields in the form</p>

               <img id="show_message" src="check.png" style="display: none; width:50px;">

               <span id="error"></span>
               <form action="javascript:void(0)" method="post" id="ajax-form">
                  <div class="form-group">
                     <label>Name</label>
                     <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
                  </div>
                  <div class="form-group ">
                     <label>Email</label>
                     <input type="email" name="email" id="email" class="form-control" value="" maxlength="30" >
                  </div>
                  <div class="form-group">
                     <label>Mobile</label>
                     <input type="text" name="mobile" id="mobile" class="form-control" value="" maxlength="12" >
                  </div>
                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
               </form>
            </div>
         </div>
      </div>


      <script type="text/javascript">
        $(document).ready(function($) {
            $('#ajax-form').submit(function(e) {
                e.preventDefault();
                var name = $("input#name").val();
                var email = $("input#email").val();
                var mobile = $("input#mobile").val();
                // ajax
                $.ajax({
                    type: "POST",
                    url: "upload2.php",
                    data: $(this).serialize(),
                    success: function() {
                        $("#show_message").fadeIn();
                        $("#ajax-form").hide();
                        $("#error").html(data);

                    }
                });
            });
            return false;
        });
      </script>

   </body>
</html>