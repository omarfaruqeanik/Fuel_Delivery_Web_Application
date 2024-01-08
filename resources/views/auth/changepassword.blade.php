<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Change Password</title>
    <link rel="icon" type="image/png" href="images/icons/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .separator {
    border-right: 1px solid #dfdfe0; 
}
.icon-btn-save {
    padding-top: 0;
    padding-bottom: 0;
}
.input-group {
    margin-bottom:10px; 
}
.btn-save-label {
    position: relative;
    left: -12px;
    display: inline-block;
    padding: 6px 12px;
    background: rgba(0,0,0,0.15);
    border-radius: 3px 0 0 3px;
}
    </style>
</head>
<body>

<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-th"></span>
                        Change password   
                    </h3>
                </div>
                
                <div class="panel-body">
                    @if(Auth::user()->role == 'admin')
         <h2><a href="http://swe.application.daffodilvarsity.edu.bd/final_project/public/admin"> Back To Dashboard</a></h2>
                @elseif(Auth::user()->role== 'faculty')
               <h3><a href="http://swe.application.daffodilvarsity.edu.bd/final_project/public/faculty">Back To Dashboard</a></h3>
                @elseif(Auth::user()->role== 'student')
               <h3><a href="http://swe.application.daffodilvarsity.edu.bd/final_project/public/student">Back To Dashboard</a></h3>
                @endif
                
                    <div class="row">
                        <div style="margin-top:80px;" class="col-xs-6 col-sm-6 col-md-6 login-box">
                            
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                            {{ csrf_field() }}
                         <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input class="form-control" type="password" placeholder="Current Password" id="current-password" name="current-password" required>
                         @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
     <input class="form-control" type="password" placeholder="New Password" id="new-password" name="new-password" required>
                              @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                              <span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Minimum 6 Characters Long<br>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                      <div class="input-group-addon"><span class="glyphicon glyphicon-log-in"></span></div>
     <input class="form-control" type="password" placeholder="Confirm New Password" id="new-password-confirm" type="password"name="new-password_confirmation" required>
                            </div>
                            <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
                          </div>


                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6"></div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button class="btn icon-btn-save btn-success" type="submit">
                            <span class="btn-save-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>save</button>
                        </div>
                    </div>
                </div>

          </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
    var lcase = new RegExp("[a-z]+");
    var num = new RegExp("[0-9]+");
    
    if($("#new-password").val().length >= 6){
        $("#8char").removeClass("glyphicon-remove");
        $("#8char").addClass("glyphicon-ok");
        $("#8char").css("color","#00A41E");
    }else{
        $("#8char").removeClass("glyphicon-ok");
        $("#8char").addClass("glyphicon-remove");
        $("#8char").css("color","#FF0004");
    }
    
    if($("#new-password").val() == $("#new-password-confirm").val()){
        $("#pwmatch").removeClass("glyphicon-remove");
        $("#pwmatch").addClass("glyphicon-ok");
        $("#pwmatch").css("color","#00A41E");
    }else{
        $("#pwmatch").removeClass("glyphicon-ok");
        $("#pwmatch").addClass("glyphicon-remove");
        $("#pwmatch").css("color","#FF0004");
    }
});
</script>
</body>
</html>