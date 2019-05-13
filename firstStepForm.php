<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" src="href/logo.ico">
    <title>First Steps in Melbourne - Cost Of Living Calculator</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/firstStepForm.css">
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <!--   <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- validation-->
    <!-- <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script> -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <style type="text/css">
    font {
        font-weight: bolder;
        font-size: 20px;
    }

    body {
        /*background-image: url(img/blue.jpg);*/
        /*       background-repeat: no-repeat;*/
        background-color: rgb(249,251,255);

        /*   background-size:cover;*/

    }

    .irs--flat .irs-bar {
        top: 25px;
        height: 12px;
        background-color: rgb(79, 147, 206);
        /*background-color: white;*/
    }

    #regForm label {
        color: black;
    }

    * {
        font-size: 16px;
    }

    #navbar ul>li a {
        color: black;
        font-family: 'Humanist521BT-Roman';
        margin-right: -20px;
    }

    #navbar ul>li a:hover {
        color: gray;
    }

    #btn{
    background-color: rgb(78,191,233);
    border-color: rgb(78,191,233);
    font-size: 16px;
    color: white; 
    border-radius: 5px; 
    margin: 0;
    width: 45px;
    height: 120px;
    font-weight: bolder;
    position: fixed;
    right: -10px;
    top: 40%;
    opacity: 0.5;
}
    </style>
</head>

<body>
<div class="navbar-wrapper" style="position: relative;">
        <div>
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 1px solid rgb(224,227,230);box-shadow: 4px 4px 20px lightblue; width: 98%; margin:auto;">
                <div class="container col-md-12">
                    <div class="navbar-header col-md-5" style="height: 62px; margin-left: -10px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" value="click here to start" style="background-color: black; width: 40px;height: 40px; text-align: center;">
                        </button>
                        <!-- <a class="navbar-brand active" href="http://www.firststepsinmel.ml/" ><img src="img/logoBtn.png" style="width:50%;margin-top: -16px;"></a>
                        <span style="line-height: 52px;border:1px solid white; font-size: 20px;">First Steps in Melbourne</span> -->
                        <a class="navbar-brand" href="http://www.firststepsinmel.ml/" ><img src="img/webLogo3.png" style="display: inline; height: 43px; margin-top: -10px;">
                         <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; height: 20px; line-height: 20px;margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-7" style="margin-top: 3px; margin-left: -10px;">
                        <ul class="nav navbar-nav" >
                            <li><a href="http://www.firststepsinmel.ml/">Home</a></li>
                            <!-- <li><a href="introduction.php">Living Cost Calculator</a></li> -->
                            <li class="dropdown" id="costDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Calculator</a></li>
                                    <li><a href="Bills.html">Other expenses</a></li>
                                  </ul>
                                </li>

                            <!-- <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li> -->
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="TipsList.html">Guidance</a></li>
                                  </ul>
                                </li>
                           <!--  <li><a href="comparison.html">Compare with Shanghai</a></li> -->
                            <li><a href="prediction.php">Prediction</a></li>
                           <!--  <li class="dropdown" id="preDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="preSup"><span class="caret"></span>&nbsp;&nbsp;Prediction</a>
                                <ul class="dropdown-menu">
                                    <li><a href="prediction.php">Your future costs</a></li>
                                    <li><a href="#">article 1</a></li>
                                    <li><a href="#">article 2</a></li>
                                  </ul>
                                </li> -->
                         <!--    <li><a href="#about">About us</a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Compare with Shanghai</a></li>
                                    <li><a href="prediction.php">Prediction</a></li>
                                    <!--<li><a href="#">About us</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
        <!--SVG tag-->
        <div class="icon" style="position: absolute; right: 60px;background-color: white;opacity: 0.4; border-radius: 40px;">
            <img src="svg/dripicons-master/SVG/information.svg" width="32px" height="32px" class="svgIcon" title="click here for help" onclick="getHelp()" data-toggle="modal" data-target="#exampleModalCenter">
            <img src="svg/dripicons-master/SVG/cross.svg" width="32px" height="32px" class="svgIcon" title="close" onclick="getClose()">
        </div>
    </div>
    <!-- form -->
    <form id="regForm" name="submit" method="POST" action="firstStepResult.php" style=" position: absolute; left:0px;right: 0px; margin:50px auto; height: 400px; border-radius: 20px; box-shadow: 4px 4px 20px lightblue; background-color: white;">
        <div class="form-group form1 tab" style="height: 100px">
            <label for="" style="font-weight: bold;font-size: 35px;">1. In which university will you be studying in Melbourne?</label>
            <select class="form-control-lg universityList" id="university" name="university" style="border-radius: 3px; height: 35px; border:1px solid lightgray; margin-top: 5px;">
                <option checked="checked" value="default">Please select</option>
                <option value="0">Monash University</option>
                <option value="1">University of Melbourne</option>
                <option value="2">RMIT University</option>
                <option value="3">Swinburne University of Technology</option>
                <option value="4">University of Divinity</option>
                <option value="5">Victoria University</option>
                <option value="6">Deakin University</option>
            </select>
        </div>
        <br />
        <span class="spa spa1"></span>
        <!--验证学校-->
        <div class="form-group form2 tab">
            <label for="" style="font-weight: bold;font-size: 35px">2. Select you study campus</label>
            <select class="form-control custom-select" id="campus" name="campus" style="width: 200px">
            </select><span class="spa spa2"></span><br />
            <!--验证学院-->
        </div>
        <!-- One "tab" for each step in the form: -->
        <div class="form-group tab">
            <label for="" style="font-weight: bold;font-size: 35px">3. Where would you like to live?</label>
            <div class="form-check" style="margin-top: 10px;">
                <input class="form-check-input" type="radio" name="livingPlace" id="radio1" value="CityLiving" checked>
                <label class="form-check-label" for="exampleRadios1">
                    City
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="livingPlace" id="radios" value="campusSuburb">
                <label class="form-check-label" for="exampleRadios2">
                    The suburb of the campus
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="livingPlace" id="otherCheck" value="OtherSuburb">
                <label class="form-check-label" for="exampleRadios2">
                    Other suburbs
                </label>
                <br>
                <!--Other suburb form-->
                <div class="col-xs-8">
                    <div class="form-group" id="othersInput">
                        <label for="otherInput">Please enter the suburb name: </label>
                        <input type="text" class="form-control" name="otherInput" id="otherInput" list='suburb_list' onkeyup="getSuggestion(this.value)" onblur="getMatching(this.value)">
                        <datalist id="suburb_list">
                            <option></option>
                        </datalist>
                        <span class="spa spa4"></span>
                        <!--验证 other suburb-->
                        <p id="hint" style="font-weight: bolder;"></p>
                    </div>
                </div>
            </div>
        </div>
        <!--     <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >4. Select the type of accommodation you like.</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radio1" value="house" checked>
        <label class="form-check-label" for="exampleRadios1">
          House
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radios" value="apartment">
        <label class="form-check-label" for="exampleRadios2">
          Apartment
        </label>
      </div>    
    </div> -->
        <!--     <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >5. What's number of people you want to share?</label>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="number" value="0" class="custom-control-input" value="1"> 
        <label class="custom-control-label" for="customRadioInline1">None</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="1" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">One</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="two" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">two</label>
      </div>
    </div> -->
        <!--transportation-->
        <div class="form-group tab">
            <label for="" style="font-weight: bold;font-size: 30px">4. How often will you go to the university weekly?</label>
            <ul style="margin-top: 15px;">
                <li>
                    <input type="radio" name="transportTimes" value="01" checked />
                    <label for="transport_public_never" style="color: black;">one</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="02" />
                    <label for="transport_public_rarely" style="color: black;">two</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="03" />
                    <label for="transport_public_sometimes" style="color: black;">three</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="04" />
                    <label for="transport_public_often" style="color: black;">four</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="05" />
                    <label for="transport_public_often" style="color: black;">five</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="06" />
                    <label for="transport_public_often" style="color: black;">six</label>
                </li>
                <li>
                    <input type="radio" name="transportTimes" value="07" />
                    <label for="transport_public_often" style="color: black;">seven</label>
                </li>
            </ul>
            <span class="spa spa5"></span><br />
            <!--验证顿数-->
            <label for="" style="font-weight: bold;font-size: 30px">5. What kind of transportation do you choose?</label>
            <select class="form-control univetsityList" id="university" name="transSelect" style="width: 250px">
                <option value="onFoot/bicycle">walk/bicycle/free transportations</option>
                <option value="Public">Public transport</option>
                <option value="car">Car</option>
                <option value="taxi">Taxi</option>
            </select>
        </div>
        <span class="spa spa6"></span><br />
        <!--验证出行方式-->
        <!--Food-->
        <div class="form-group tab">
            <label for="" style="font-weight: bold;font-size: 30px">6. How many times are you prefer to eat out per week?</label>
            <!-- <label for="formControlRange" style="font-size: 18px">Drag this slider to get the exact day.</label> -->
            <output id="dayOutput" style="font-size: 15px; font-weight: bolder; text-align: right;">7 Times per week</output>
            <input type="range" class="custom-range slider" id="formControlRange" name="eatOutside" onmousemove="evalSlider()" onchange="changeSlide()">
            <br>
            <label class="form-check-label" for="exampleRadios1">
                Your diet preference:</label>
            <input style="margin-left: 30px" class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="mm" checked>Normal diet
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="vegan">Vegetarian
            <!-- <br> -->
        </div>
        <div class="col-md-12 col-xs-12" style="position: absolute; bottom: 20px; right: 1px;">
            <div style="float:right;" id="btnDiv">
                <button type="button" class="btn btn-primary btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" class="btn btn-primary btn" id="nextBtn" onclick="nextPrev(1)" style="width:80px; margin-left: 10px;">Next</button>
            </div>
        </div>
        <!-- Circles -->
        <div style="text-align:center; position: absolute;bottom: 0;" class="stepDiv">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <!--       <span class="step"></span>
      <span class="step"></span> -->
            <span class="step"></span>
        </div>
        <!--测试-->
    </form>
    <div class="container" style="width: 100px;">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">University in Melbourne</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left; font-size: 15px;">
                        In this calculator, the university dataset is only considered in Melbourne. This higher education is not considered with some higher education institutions, Tafe (Technical and Further Education) and colleges, because most of international student study in university. There are total six universities here which are Deakin University, Monash University, RMIT University, Swinburne University of Technology, University of Divinity, University of Melbourne and Victoria University (in alphabetical order).
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Model 2-->
    <div class="container" style="width: 100px;">
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">All done?</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: center; font-size: 15px;">
                        Closing the calculator of your Living Cost will lose your progress.<br> Are you sure to quit this function?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Not finish yet</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="backPage()">Back to homePage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--help 1-->
    <div class="container" style="width: 100px;" id="aaa">
        <div class="modal fade" id="help1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">University Campus</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left; font-size: 15px;">
                        &nbsp;&nbsp;<font>Deakin University</font>
                        <p></p>
                        &nbsp;&nbsp;Melboune (BURWOOD), Geelong (GEELONG), Warrnambool (WARRNAMBOOL).
                        <p></p> 
                        <font>Monash University</font>
                        <p></p>
                        &nbsp;&nbsp;Clayton (CLAYTON), Caulfield (CAULFIELD), Berwick (BERWICK), Parkville (PARKVILLE), Peninsula (FRANKSTON)
                        <p></p> 
                        <font>RMIT University</font>
                        <p></p>
                        &nbsp;&nbsp;City (CBD), Brunswick (BRUNSWICK), Bundoora (BUNDOORA)
                        <p></p> 
                        <font>Swinburne University of Technology</font>
                        <p></p>
                        &nbsp;&nbsp;Hawthorn (HAWTHORN), Croydon (CROYDON), Wantirna (WANTIRNA)
                        <p></p>
                        &nbsp;&nbsp;<font>University of Divinity</font>
                        <p></p>
                        &nbsp;&nbsp;Melboune (KEW)
                        <p></p>
                        &nbsp;&nbsp;<font>University of Melbourne</font>
                        <p></p>
                        &nbsp;&nbsp;Parkville (PARKVILLE), Burnley (BURNLEY), Southbank (SOUTHBANK), Werribee (WERRIBEE)
                        <p></p> 
                        <font>Victoria University</font>
                        <p></p>
                        &nbsp;&nbsp;Footscray (FOOTSCRAY), City (CBD), Sunshine (SUNSHINE), Werribee (WERRIBEE)
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--help2-->
    <div class="container" style="width: 100px;">
        <div class="modal fade" id="help2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">Location</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left; font-size: 15px;">
                        The location of international student living is a quite significant influence on their living cost and life style. There are a few things to weigh up when making your decision, including commuting time, cost of rent, study convenience, food service and the community surrounding you. The selection of living location will affect the cost of rent and transportation fee in the calculator.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--help3-->
    <div class="container" style="width: 100px;">
        <div class="modal fade" id="help3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">Transportation</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left; font-size: 15px;">
                        One of the main consider of international student study in Melbourne is commuting. Whether student is walking, taking bus or diving a car, student need to know the best way to be university. The return way to university is considered in this selection. The methods of commuting include Walking, Bicycle, Free transportation (free), Public transportation (fee is considered about distance), Car (average petrol price * kilometer, not consider purchase car and depreciation) and tax (starting fee plus cost per kilometer). All distances are according to pervious selection (university and living location).
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--help4-->
    <div class="container" style="width: 100px;">
        <div class="modal fade" id="help4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">Food cost</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left; font-size: 15px;">
                        This part will calculate the cost in three meals with eating home and out. We assume that the cost of sever day’s breakfasts will be spent in a low-costly average amount. Other two meals are considered with eating home and out, and there are total fourteen meals. The cost of food are different as different diet preference.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href='sendgrid-php/feedback.php'><button type="button" id="btn" class="" data-button-for="2a8f783514fa91e03666bbb8c444ac4a0b967074" title="Feedback" tabindex="0" style="opacity: 1; visibility: visible;" onmousemove="btnAction()" onmouseout="btnOut()"><i class="mopicon mopicon-commenting-o " icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span style="writing-mode: vertical-lr; transform: rotate(-180deg);">Feedback</span></button></a>
</body>
</body>
<script type="text/javascript" src="js/firstStepForm.js"></script>
<script type="text/javascript">
var matchingResult;
$(document).ready(function() {
    $(":radio[name='livingPlace']").click(function() {
        var index = $(":radio[name='livingPlace']").index($(this));
        if (index == 2) {
            $('#othersInput').show();
        } else {
            $('#othersInput').hide();
        }
    });
    $('#myModal').modal('handleUpdate');

});

$(document).ready(function() {
    $("#formControlRange").ionRangeSlider({
        grid: true,
        from: "7",
        values: [
            "0", "1", "2", "3", "4", "5", "6",
            "7", "8", "9", "10", "11", "12",
            "13", "14"
        ]
    });

})

// function getSuggestion(str){
//   if (str.length == 0) {
//       document.getElementById('hint').innerHTML = '';
//     } else {
//       var xmlhttp = new XMLHttpRequest();
//       xmlhttp.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status == 200){
//           $("#hint").css("color","black");
//           document.getElementById('hint').innerHTML = this.responseText;
//         }
//       }
//       xmlhttp.open("GET","suggestion.php?q="+str, true);
//       xmlhttp.send();
//     }
// }

function getSuggestion(str) {
    if (str.length == 0) {
        document.getElementById('suburb_list').innerHTML = '';
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#hint").css("color", "black");
                document.getElementById('suburb_list').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "suggestion.php?q=" + str, true);
        xmlhttp.send();
    }
}

/*matching from php test*/

function getMatching(str) {
    if (str.length == 0) {
        document.getElementById('hint').innerHTML = '';
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == 'nothing found please enter the right suburb name') {
                    document.getElementById('hint').innerHTML = this.responseText;
                    matchingResult = this.responseText;
                    $("#hint").css("color", "red");
                } else {
                    document.getElementById('hint').innerHTML = '';
                    matchingResult = this.responseText;
                }

            }
        }
        xmlhttp.open("GET", "matching.php?m=" + str, true);
        xmlhttp.send();
    }
}


function evalSlider() {
    var day = document.getElementById("formControlRange").value;
    document.getElementById("dayOutput").innerHTML = day + ' Times per week.';
}

function getHelp() {
    if (currentTab == 0) {
        $('#myModal').modal('show');
    } else if (currentTab == 1) {
        $('#help1').modal('show');
    } else if (currentTab == 2) {
        $('#help2').modal('show');
    } else if (currentTab == 3) {
        $('#help3').modal('show');
    } else if (currentTab == 4) {
        $('#help4').modal('show');
    }
}

function getClose() {
    $('#myModal2').modal('show');
}

function backPage() {
    window.open('http://www.firststepsinmel.ml/', "", "", false);
}


//验证othersuburb 失焦
$("#otherInput").blur(function() {
    //console.log(matchingResult);
    if ($(this).is("#otherInput")) { //check otherInput
        var na = /^[a-zA-Z ]{1,20}$/
        if ($(this).val() != "") {
            if (!(na.test($(this).val()))) {
                $(".spa4").text("Only accept letters between 1 and 30");
                $(this).css("border", "1px solid red");
                $("#hint").text("");
                return false;
            } else if (na) {
                $(".spa4").text("");
                return true;
            }
        } else {
            $(".spa4").text("");
        }
    }
});

//othersuburb 聚焦
$("#otherInput").focus(function() {
    $(".spa4").text("");
    if ($(this).is("#otherInput")) {
        $(this).css("border", "1px solid lightblue");
        $('#otherInput').attr('class', 'form-control');
        $('#hint').text('');
    }
});

function changeSlide() {
    //console.log(document.getElementById("formControlRange").value);
    evalSlider();
}

function calculatorDrag() {
    $("#costFont").css('background-color', "white");
}

function calculatorDrag() {
    $("#costFont").css('background-color', "white");
    $("#stuSup").css('background-color', "white");
    $("#preSup").css('background-color', "white");
}
function btnAction(){
  $("#btn").css('right','0px');
}
function btnOut(){
  $("#btn").css('right','-10px');
}
</script>

</html>