
<!doctype html>
<html>
<head>
    
<title>NameSigni - What's In A Name?</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!--CSS File-->
<link rel="stylesheet" type="text/css" href="style.css">

<!--Custom Font-->
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Yanone+Kaffeesatz" rel="stylesheet"> 

</head>

<body data-spy="scroll">
    
    <div class="navbar navbar-default navbar-fixed-top">
        
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#topContainer">Home</a></li>
                    <li><a href="#first">First Names</a></li>
                    <li><a href="#last">Last Names</a></li>
                </ul>
            </div>
        </div>
        
    </div>
    
    <div class="container" id="topContainer">
        
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3 center">
                
                <h1 class="center white">NameSigni</h1>
                
                <p class="lead center white">Curious about the origin of your family name? <br />
                Looking for the perfect name for your baby? <br />
                NameSigni allows you to easily find out the story behind first and last names! <br />
                <b>What's in a name? Go find out!</b></p>
                                    
                    <a href="#first"><button class="btn btn-primary btn-lg">First Names</button></a>
                    
                    <a href="#last"><button class="btn btn-warning btn-lg">Last Names</button></a>
                                    
            </div>
            
        </div>
         
    </div>
    
    <div class="container" id="first">
        
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3 center">
                
                <h1 class="center white">FirstNames</h1>
                
                <form>
                    
                    <div class="form-group has-feedback">                       
                        <input type="text" value="" autocomplete='off'
                               class="form-control" name="name" id="name" placeholder="Please enter a first name.." />
                        <i class="glyphicon glyphicon-search form-control-feedback"></i>
                    </div>
                    
                    <button id="findFirstNameMeaning" class="btn btn-primary btn-md">
                        <span class="glyphicon glyphicon-search"></span> Go!
                    </button>
                    
                </form>
                
            </div>
            
            <div class="col-md-12 center">
            
                <div id="success" class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Success!</div>
               
                <div id="fail" class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Sorry, we could not find any info on that name. Please try again!</div>
               
                <div id="noName" class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please enter a first name</div>
               
            </div>         
            
        </div>
         
    </div>
    
    <div class="container" id="last">
        
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3 center">
                
                <h1 class="center white">LastNames</h1>
                
                <form>
                    
                    <div class="form-group has-feedback">                       
                        <input type="text" value="" autocomplete='off'
                               class="form-control" name="surname" id="surname" placeholder="Please enter a surname/last name.." />
                        <i class="glyphicon glyphicon-search form-control-feedback"></i>
                    </div>
                    
                    <button id="findLastNameMeaning" class="btn btn-primary btn-md">
                        <span class="glyphicon glyphicon-search"></span> Go!
                    </button>
                    
                </form>
                
            </div>
            
            <div class="col-md-12 center">
            
                <div id="successLN" class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Success!</div>
               
                <div id="failLN" class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Sorry, we could not find any info on that surname. Please try again!</div>
               
                <div id="noNameLN" class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please enter a last name</div>
               
            </div>         
            
        </div>
         
    </div>
    
    
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
    
    //First Name Search JS Function
    
    $("#findFirstNameMeaning").click(function(event) {
        
        event.preventDefault();
        
        $(".alert").hide();
        
        if ($("#name").val()!="") {
                
            $.get("namescraper.php?name="+$("#name").val(), function(data) {
                
                if (data=="") {
        
                    $("#fail").slideDown( "slow", function() {
                        
                    });
                    
                } else {
                    
                    $("#success").html(data).slideDown( 300, function() {
                        
                    });
                    
                }
                                
        });
    
        } else {
        
            $("#noName").slideDown( "slow", function() {
                        
                    });
    
        }
    });
    
    
    //Last Name Search JS Function
    
    $("#findLastNameMeaning").click(function(event) {
        
        event.preventDefault();
        
        $(".alert").hide();
        
        if ($("#surname").val()!="") {
                
            $.get("surnamescraper.php?surname="+$("#surname").val(), function(data) {
                
                if (data=="") {
        
                    $("#failLN").slideDown( "slow", function() {
                        
                    });
                    
                } else {
                    
                    $("#successLN").html(data).slideDown( 300, function() {
                        
                    });
                    
                }
                                
        });
    
        } else {
        
            $("#noNameLN").slideDown( "slow", function() {
                        
                    });
    
        }
    });

</script>

</body>
</html>