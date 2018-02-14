<!DOCTYPE html>
<html>
<head>
    <title>WEBZION</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrapValidator.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Audiowide|Niconne|Fontdiner+Swanky' rel='stylesheet' type='text/css'>


    <style type="text/css">
    body{
        background-color:;
    }

    .page-header h2{
             
             text-transform:uppercase;
    text-align:center;
   font-family: 'Audiowide', cursive;
  letter-spacing:2px;
  color: #0A141F;
    }
        p,table th,td{
            text-align: center;
        }
        p{

        }
         table tr td:first-child{
        font-family:calibri;
        font-size: 19px;
        text-align: justify;

        }
        .panel .panel-heading{
            background-color:#0A141F;
            -webkit-filter: drop-shadow(0px 2px 3px rgba(0,0,0,0.8));
    -moz-filter: drop-shadow(0px 2px 3px rgba(0,0,0,0.8));
    -ms-filter: drop-shadow(0px 2px 3px rgba(0,0,0,0.8));
    -o-filter: drop-shadow(0px 2px 3px rgba(0,0,0,0.8));
        }
        .panel-title a{
            color: white;
            text-transform:uppercase;
    
   font-family: 'Audiowide', cursive;
  letter-spacing:2px;

        }

        .panel-body,.panel .panel-heading{
            border: 2px solid #60666D;

        }
        
    </style>

    <script type="text/javascript">





    </script>
    
</head>
<body>



    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="page-header">
                    <h2>Talent Transfomation</h2>
                </div>

                <form id="defaultForm" method="post" class="form-horizontal" action="target.php" name="formsed">
                    <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">Session</a></h4>
                            </div>
                            <div id="stepOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <!--<div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="username" />
                                        </div>
                                    </div>-->

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Select Your Domin</label>
                                        <div class="col-lg-5">
                                            <select name="domin" class="form-control">
                                                  <option value="web">Web Development</option>
                                                  <option value="android">Andriod</option>
                                                  <option value="UI">Design UI/UX</option>
                                                  <option value="dm">Digital Marketing</option>
                                                  <option value="cw">Content Writing& Managment</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--<div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="password" />
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepTwo">Please agree/disagree with the following statements </a></h4>
                            </div>
                            <div id="stepTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                   

   <table class="table table-hover table-bordered" style="">
    <thead>
      <tr>
        <th></th>
        <th style="vertical-align:middle;">Strongly Agree</th>
        <th style="vertical-align:middle;">Agree</th>
        <th style="vertical-align:middle;">Neither Agree nor Disagree</th>
        <th style="vertical-align:middle;">Disagree</th>
        <th style="vertical-align:middle;">Strongly Disagree</th>
      </tr>
    </thead>
    <tbody>


      <tr>
        <td>1. Rate overall Week experience in learning.</td>
        <td><input type="radio" name="q1" value="5" ></td>
         <td><input type="radio" name="q1" value="4" ></td>
          <td><input type="radio" name="q1" value="3" ></td>
           <td><input type="radio" name="q1" value="2" ></td>
            <td><input type="radio" name="q1" value="1" ></td>
      </tr>

      <tr>
        <td>2. How did you enjoyed learning in student to student mode.</td>
        <td><input type="radio" name="q2" value="5" ></td>
         <td><input type="radio" name="q2" value="4" ></td>
          <td><input type="radio" name="q2" value="3" ></td>
           <td><input type="radio" name="q2" value="2" ></td>
            <td><input type="radio" name="q2" value="1" ></td>
      </tr>

            <tr>
        <td>3. How did you rate overall facilitators teaching / clearing doubts.</td>
        <td><input type="radio" name="q3" value="5" ></td>
         <td><input type="radio" name="q3" value="4" ></td>
          <td><input type="radio" name="q3" value="3" ></td>
           <td><input type="radio" name="q3" value="2" ></td>
            <td><input type="radio" name="q3" value="1" ></td>
      </tr>

           
      

    </tbody>
  </table>

                                  
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepThree">Suggestions</a></h4>
                            </div>
                            <div id="stepThree" class="panel-collapse collapse">
                                <div class="panel-body" style="padding-left: 80px;">
                                   
                                    
                                     <div class="form-group">
      <label for="comment">1. What one thing that would you recommend be done to improve this training for future participants.</label>
      <textarea name="s1" class="form-control" style="height:4em; width:80%;" id="comment" required></textarea>
    </div>

                                  <div class="form-group">
      <label for="comment">2. What other training concepts would you like to see offered.</label>
      <textarea name="s2" class="form-control" style="height:4em; width:80%;" id="comment" required></textarea>
    </div>

    <div class="form-group">
      <label for="comment">3. Please Specify if any other comments.</label>
      <textarea name="s3" class="form-control" style="height:4em; width:80%;" id="comment" required></textarea>
    </div>
                                     


                                    <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-5">
                                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    },
                    stringCase: {
                        message: 'The first name must contain upper case characters only',
                        case: 'upper'
                    },
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'The first name can only consist of alphabetical characters and spaces'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    },
                    stringCase: {
                        message: 'The last name must contain upper case characters only',
                        case: 'upper'
                    },
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'The last name can only consist of alphabetical characters and spaces'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The name can only consist of alphabetical, number, dot and underscore'
                    },
                    different: {
                        field: 'password',
                        message: 'The name and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                     notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            s1: {
                validators: {
                     notEmpty: {
                        message: 'Please answer the question'
                    }
                }
            },
             s2: {
                validators: {
                     notEmpty: {
                        message: 'Please answer the question'
                    }
                }
            },
             s3: {
                validators: {
                     notEmpty: {
                        message: 'Please answer the question'
                    }
                }
            }
            
        }
    }).on('error.form.bv', function(e) {
        console.log('error');

        // Active the panel element containing the first invalid element
        var $form         = $(e.target),
            validator     = $form.data('bootstrapValidator'),
            $invalidField = validator.getInvalidFields().eq(0),
            $collapse     = $invalidField.parents('.collapse');

        $collapse.collapse('show');
    });
});
</script>
</body>
</html>