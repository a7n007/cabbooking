<!DOCTYPE html>
<head>
  <title>main</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <meta name="viewport" content="width=device-width">
  <script type="text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link href="main.css" rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="main.js"></script>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
      </ul>
      <form class="form-wrapper" action="details.php" method="post">
        <fieldset class="section is-active">
          <h3>Location Details</h3>
          <label>source </label>
          <input type="text" name="src" id="name" placeholder="Source" required>
          <label>destination </label>
          <input type="text"  name="dest" id="email" placeholder="Destination" required>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Travel Type</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" value="enterprise" checked>
              <label for="r1">
                <h4>Enterprise</h4>
              </label>  
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2" value="standard"><label for="r2">
                <h4>Standard</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r3" value="economy"><label for="r3">
                <h4>Economy</h4>
              </label>
            </div>
          </div>
          <div class="button">Next</div>
        </fieldset>
        <fieldset class="section">
          <h3>Recieved the details </h3>
          <img src="tick.svg" id="tick">
          <input class="submit button" type="submit" value=" Proceed Payment ">
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>
</body>
</html>