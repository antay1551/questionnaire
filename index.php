<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h1>Questionnaire for the student</h1>
<!--<form action="login.php" method="POST">
	<!--Логин: <input type="text" name="login" /><br><br>
	Пароль: <input type="text" name="password" /><br><br>
	<input type="submit" value="Войти">
	!-->
	
	<form action="login.php" method="POST">
	
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Mark">
  </div>
  
  
    <div class="form-group">
    <label for="exampleInputName2">Surname</label>
    <input type="text" class="form-control" name="Surname" placeholder="Zuckerberg">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="email@example.com">
  </div>
  
  
    <fieldset class="form-group">
    <legend>Your level of English</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Beginner(A1)" checked>
        Beginner(A1)
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Elementary(A2)">
        Elementary(A2)
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="Intermediate(B1)">
        Intermediate(B1)
    </label>
	</div>
	<div class="form-check">
    
	    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios4" value="Upper Intermediate(B2)">
        Upper Intermediate(B2)
    </label>
	</div>
	<div class="form-check">
	    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios5" value="Advanced(C1)">
        Advanced(C1)
    </label>
	</div>
	<div class="form-check">
	    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="Proficiency(C2)">
        Proficiency(C2)
    </label>
    </div>
  </fieldset>
  
  
  
  <div class="form-group">
    <label for="exampleSelect1">On what rate you now</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="exampleTextarea">Marks</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputFile">Summary</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
  
  
</form>
</form>
</body>
</html>