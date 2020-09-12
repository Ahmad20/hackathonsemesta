<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Pantauan Penyebaran COVID-19</title>
</head>
<body>
  <div class="jumbotron jumbotron-fluid bg-info text-dark">
    <div class="container" align="center">
      <h1 class="display-4">COVID 19</h1>
      <p class="lead">Pantau Virus Covid 19 Di Indonesia</p>
    </div>
  </div>
  <style type="text/css">
    .box{
      padding :30px 40px;
      border-radius: 6px; 
    }
  </style>
  <div class="container">
    <div class="row">
      
      <!--Positive-->
      <div class="col-md-4">
        <div class="bg-warning box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Positif</h5>
              <h2 id="kasus_posi">0</h2>
              <h5>Jiwa</h5>
            </div>
            <div class="col-md-4">
              <svg width="10em" height="7em" viewBox="0 0 16 16" class="bi bi-bookmark-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.5 4.5a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
              </svg>
            </div> 
          </div>
        </div>
      </div>

      <!--Death-->
      <div class="col-md-4">
        <div class="bg-danger box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Meninggal</h5>
              <h2 id="kasus_meni">0</h2>
              <h5>Jiwa</h5>
            </div>
            <div class="col-md-4">
              <svg width="10em" height="7em" viewBox="0 0 16 16" class="bi bi-bookmark-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm2.854 5.146a.5.5 0 1 0-.708.708L7.293 7 6.146 8.146a.5.5 0 1 0 .708.708L8 7.707l1.146 1.147a.5.5 0 1 0 .708-.708L8.707 7l1.147-1.146a.5.5 0 0 0-.708-.708L8 6.293 6.854 5.146z"/>
              </svg>
            </div> 
          </div>
        </div> 
      </div>

      <!--Recovered-->
      <div class="col-md-4">
        <div class="bg-success box text-white">
          <div class="row">
            <div class="col-md-6">
              <h5>Sembuh</h5>
              <h2 id="kasus_semb">0</h2>
              <h5>Jiwa</h5>
            </div>
            <div class="col-md-4">
              <svg width="10em" height="7em" viewBox="0 0 16 16" class="bi bi-bookmark-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
              </svg>
            </div> 
          </div>
        </div>
      </div>

      
    
    </div>
  </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="footer text-muted text-center">
  Ahmad Julius Tarigan - Beasiswa Semesta 2020
</div>
</body>
</html>

<script>
  $(document).ready(function(){

    dataIndo();
    function dataIndo(){
      $.ajax({
        url: 'https://coronavirus-19-api.herokuapp.com/all',
        success: function(data){
          try{
            var json = data;
            var positif = data.cases;
            var meninggal = data.deaths;
            var sembuh = data.recovered;
            
            $('#kasus_posi').html(positif);
            $('#kasus_meni').html(meninggal);
            $('#kasus_semb').html(sembuh);
            
          }catch{
            alert('Error');
          }
        }
      });
    }
  });
</script>