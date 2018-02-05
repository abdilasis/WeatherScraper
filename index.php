
<!doctype html>
<html>
<head>
    <title>Full Background</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src ="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style type="text/css">

    body, html {
    height: 100%;
    }
    .bg {
    /* The image used */
    background-image: url("img/background.jpeg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }

      .container{


        padding-top: 100px;



      }
      .center{
        text-align: center;
      }
      .white{
        color: white;
      }
     p{
       padding: 15px 0;
     }
     button{
       margin-top: 10px
     }
     .alert{
       margin-top: 20px;
       display: none;
      font-size: 12px;
     }


    </style>
</head>

<body>

  <div class="bg">

    <div class = "container center" >

     <div class = "row">
       <div class ="col-md-6 col-md-offset-3 center">
         <h1 class ="center ">Weather Predictor</h1>
         <p class ="lead center ">Enter your city below to get a forecast for the weather</p>

         <form>
           <div class ="form-group">
             <input type ="text" class ="form-control" name="city" id="city"  placeholder="eg. London, Paris, San Francesco... "/>

           </div>
           <button id="findMyWeather" class="btn btn-success btn-lg">Find my weather</button>
         </form>
         <div id ="success" class=" alert alert-success">Success</div>
         <div id ="fail" class=" alert alert-danger">Could not find the city.Please enter another city</div>
       </div>

     </div>




  </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>


    $("#findMyWeather").click(function(event){
        event.preventDefault();

    if($("#city").val()!=""){
      $.get( "scrapper.php?city="+$("#city").val(), function( data ) {

        if(data== " "){
         $("#success").hide();
         $("#fail").fadeIn();

        }else{
          $("#fail").hide();
          $("#success").html(data).fadeIn();

        }


      });



    }


    });

    function checkWarning(data){
      var str = data;
      var result = str.search(/Warning/i);
      return result;
    }


  </script>
</body>
</html>
