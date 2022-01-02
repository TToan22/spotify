<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <header>
    <img src = "https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Black.png"/>
  </header>    
    <div class = "container">
      <h2 class = "tit1" >Sign up for free to start listening.</h2>
    </div>
  <main>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">What's your email?</label>
        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter your email.">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm your email</label>
        <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter your email again.">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Create a password</label>
        <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Create a password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">What should we call you?</label>
        <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Enter a profile name.">
      </div>   
    </form>
      <div>
          <label for="exampleInputEmail1">What's your date of birth?</label>
      </div> 
   

      <div>
        <div class="row">
          <div class="col-xs-2 col-md-2">
            <label for="validationDefault01" class="form-label">Day</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="DD" >
          </div>
          <div class="col-xs-3 col-md-3">
                <label for="validationDefault04" class="form-label">Month</label>
        <select class="form-select" id="validationDefault04" required>
          <option selected disabled value="">Month</option>
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
              </select>
          </div>
          <div class="col-xs-2 col-md-2">
                <label for="validationDefault02" class="form-label">Year</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="YYYY" >      
          </div>
      </div>
      <div>
        <label for="exampleInputEmail1">What's your gender?</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
        <label class="form-check-label" for="inlineRadio3">Non-binary</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">I would prefer not to receive marketing messages from 
          Spotify</label>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck2">
        <label class="form-check-label" for="exampleCheck2">Share my registration data with Spotify's content providers for marketing purposes.</label>
      </div>
      <button type="submit" class="btn btn-primary" name="btnSignIn" id="submit">Sign up</button>
    </div>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
</html>