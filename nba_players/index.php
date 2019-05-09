<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> NBA Player Comparison </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="jquery-ui.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand mb-0 h1">
                <img src="img/logo.png" width='60' height='50' class="d-inline-block align-top logo">
                <h1 style="display:inline; color:rgb(130,130,130)">|</h1>
                <h1 style="display:inline">NBA Player Comparison</h1>
            </a>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <form action="" name="searchForm" id="searchForm" method="POST">
                <div class="col-lg-8">
                <table class="table table-borderless" >
                    <thead>
                    <tr>
                        <th>Players</th>
                        <th>Year</th>
                    </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 1" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 2" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 3" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 4" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 5" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-group">
                                <input type="text" name="player[]" class="form-control playerTxt" placeholder="Player 6" />
                                <input type="hidden" name="playerId[]" class="form-control playerId" value="0" />
                             </div>
                            </td>

                            <td>
                            <div class="form-group">
                               <select name="year[]" class="form-control" >
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                </select>
                             </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <div class="row">
            <div class="col-lg-8 text-center">
                <button  type="button" class="btn btn-success btn-lg" name="result" id="resultButton" value="result">Compare</button>
                </div>
                </div>
                </form>

            </div>

            </div> <!-- row -->

<br/><br/>
            <div class="row">
              <div class="col-lg-12">
                <div id="result_container">

                </div>
              </div>
            </div>

       </div> <!-- container -->

    </body>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui.min.js"></script>


    <script>
        $(document).ready(function(){

            // Single Select
            $( ".playerTxt" ).autocomplete({

                    source: function( request, response ) {

                    // Fetch data
                    $.ajax({
                    url: "fetch.php",
                    type: 'post',
                    dataType: "json",
                    data: {
                    search: request.term
                    },
                    success: function( data ) {
                        console.log(data);
                        response(data);
                    }
                    });
                    },
                    select: function (event, ui) {
                    // Set selection
                    var txt = ui.item.label + "("+ui.item.value+")";
                    $(this).val(txt); // display the selected text

                    $(this).next(".playerId").val(ui.item.label);
                    return false;
                    }
            });


            $("#resultButton").on('click', function(){

                var playerTxt = $(".playerTxt");
                var playerId = $(".playerId");
                var validcount = 0;

                for(i=0; i< playerTxt.length; i++){

                    if($(playerTxt[i]).val() != "" && $(playerId[i]).val() != 0){
                        validcount++;
                    }else{
                        //
                    }

                }

                if(validcount >= 2){


                       // Fetch data
                    $.ajax({
                        url: "resultData.php",
                        type: 'post',
                        data:  $('#searchForm').serialize()+"&action=getResult",
                    success: function( data ) {
                        console.log(data);
                        $("#result_container").html(data);
                    }
                    });


                }else{
                    alert("Select atleast 2 players..");
                }

            });

        });
    </script>
</html>
