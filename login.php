<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <script src="citylist.js"></script>
  <script src="citylists.js"></script>
  <link rel="stylesheet" href="design.css">
  <title>Start CarPool</title>
</head>
<body>
<script src="jquery-2.1.1.min.js"></script>
<script>
$('.toggle').on('click', function() {
  $('.container').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.container').stop().removeClass('active');
});
</script>
<div class="card1">
<center><h1 class="title">TheCarPoolers</h1></center>
</div>
<br>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">REGISTER</h1>
    <form method="post" action="checkcode.php">
      <div class="input-container">
        <input type="text" id="#{label}" name="name" required="required"/>
        <label for="#{label}">Name</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
          <select id="cityselect" name="loc1" value="" placeholder="Location From(City)" onclick="select_district()" required>
            <option value="" disabled selected>Select city from</option>
          </select>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <select id="cityselect1" name="loc2" value="" placeholder="Location To(City)" onclick="select_district1()" required>
            <option value="" disabled selected>Select city to</option>
        </select>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="datetime-local" name="date" id="dt" oninput="check()" required="required"/>
        <label for="#{label}"></label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="email" id="#{label}" name="email" required="required"/>
        <label for="#{label}">E-mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <div class="button-container">
          <button><span><input type="submit" id="#{label}" name="find" value="Find"/></span></button>
        </div>
      </div>
    </form>
    <?php 
      $reasons1 = array("existing" => "Email already exists.","wrong"=>"E-mail address doesn't exist.", "blank" => "You have left one or more fields blank."); 
      if (isset($_GET["emailExists"]))
      {
        echo '<br>';
        echo '<center><label>'.$reasons1[$_GET["reason"]].'</label></center>';
      }
      if(isset($_GET["emailwrong"]))
      {
        echo '<br>';
        echo '<center><label>'.$reasons1[$_GET["reason"]].'</label></center>';
      } 
      ?>
  </div>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">CHECK RESULTS</h1>
    <form method="post" action="inter.php">
      <div class="input-container">
        <input type="text" id="#{label}" name="cid" required="required"/>
        <label for="#{label}">Code</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <div class="button-container">
          <button><span><input type="submit" id="#{label}" name="search" value="Search"/></span></button>
        </div>
      </div>
    </form>
    <?php 
    $reasons = array("password" => "Wrong Username or Password","doesntExist"=>"User doesn't exist.", "blank" => "You have left one or more fields blank."); 
    if (isset($_GET["loginFailed"]))
    {
      echo '<br>';
      echo '<center>'.$reasons[$_GET["reason"]].'</center>';
    }  
    ?>
  </div>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">WANT TO CHANGE DETAILS? DO IT HERE</h1>
    <form method="post" action="/cgi-bin/change.py">
      <div class="input-container">
        <div class="button-container">
          <button><span><input type="submit" id="#{label}" name="change" value="Change Details"/></span></button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
<script>
function check()
{
  var q=document.getElementById("dt").value;
  var l=q.split("-"); //yyyy,mm,ddThr:mm:ss
  var s=l[2].split("T"); //dd,Hr:mm:ss
  var ty=s[1].split(":"); //hr,mm,ss
  var df=new Date();
  var curr_yr=df.getFullYear();
  var curr_mt=df.getMonth()+1;
  var curr_dt=df.getDate();
  var curr_hr=df.getHours();
  var curr_min=df.getMinutes();
  var yr=l[0];
  var mt=l[1];
  var dt=s[0];
  var hr=ty[0];
  var min=ty[1];

  if(yr<curr_yr)
  {
    alert("Check the date. You can't live in the past.");
  }
  else
  {
    if(curr_yr==yr)
    {
      if(mt<curr_mt)
      {
        alert("Check the date. You can't live in the past.");
      }
      else
      {
        if(mt==curr_mt)
        {
          if(dt<curr_dt)
          {
            alert("Check the date. You can't live in the past.");
          }
          else
          {
            if(curr_dt==dt)
            {
              if(hr<curr_hr)
              {
                alert("Check the date. You can't live in the past.");
              }
              else
              {
                if(curr_hr==hr)
                {
                  if(min<curr_min)
                  {
                    alert("Check the date. You can't live in the past.");
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}
</script>
</html>
