<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <title>Questions Page</title>
  </head>
  

<body>

<?php	

require("connect.php");
echo <<<_END
<form action='adminfunctionalitiesv.php' method='POST'>

<div>
  <label for="topic" id="topicinserted">Please Enter a topic to be inserted: <br></label>
  <input type="text" name="topic" id="topicinserted" />
  <br>
  <input type="submit" name="Submit" value="Submit">
</div>

</form>

_END;

echo <<<_END
<form action='adminfunctionalitiesv.php' method='POST'>

<div>
  <label for="topicname" id="topicname">Please Enter a topic to which question has to be inserted: <br></label>
  <input type="text" name="topicname" id="topicname" />
  <br>
</div>

<div>
  <label for="question" id="question">Please Enter the question that has to be inserted: <br></label>
  <input type="text" name="question" id="question" />
  <br>
</div>

<div>
  <label for="option1" id="option1">Please Enter the: Option 1:   <br></label>
  <input type="text" name="option1" id="option1" />
  <br>
</div>

<div>
  <label for="option2" id="option2">Please Enter the: Option 2:   <br></label>
  <input type="text" name="option2" id="option2" />
  <br>
  
</div>

<div>
  <label for="option3" id="option3">Please Enter the: Option 3:   <br></label>
  <input type="text" name="option3" id="option3" />
  <br>
 
</div>

<div>
  <label for="option4" id="option4">Please Enter the: Option 4:   <br></label>
  <input type="text" name="option4" id="option4" />
  <br>
  
</div>

<div>
  <label for="option_correct" id="option_correct">Please Enter the correct option:   <br></label>
  <input type="text" name="option_correct" id="option_correct" />
  <br>
</div>

<input type="submit" name="Submit" value="Submit">
</form>
_END;

?>

</body>
</html>