<html>

<head>
        <link href="css/mycss.css" rel="stylesheet">
</head>

<body>

    <div id = "adminDiv">

    </div>    

    <!-- Table Creation -->
    <table id = "myTable" border = "1" align = "left">
            
        <caption>
    		<h2>Panther Judo Members </h2>
    	</caption>
    	
        <tr>
    		<th>Name</th>
    		<th>Rank</th>
    		<th>Year Joined</th>
    		<th>Position Held</th>
    	</tr>

            <!-- Database access -->
            <?php
                require_once('dbconnect.php');

                include('updateTable.php');
            ?>

        </table>

        <script type="text/javascript" src="js/jquery.js"></script>


        <!--Using a combination of php and javascript, we allow admin to add new members -->
        <?php
        if($_SESSION['permissions'] == 1){
                ?>
        <script type="text/javascript">
        
                $(document).on("ready", function(){
                        //console.log($('#myTable tr').length);
                        for(var i = 0; i < $('#myTable tr').length - 1; i++){
                                var row = ('#myTable tr#' + i.toString());
                                var checkBox = ('<input type = "checkbox" name = "name" value = ' + $(row + " td:first-child").text() + '/>');
                                //checkBox.attr({'type' : 'checkBox', 'value' : $(row + ' td:first-child').text()});
                                $(row).find('td:last').after('<td>' + checkBox + '</td>');
                                //console.log($('#myTable tr#' + i.toString() + ' td:first-child').text());
                        }

                        $('#adminDiv').html('<h2>Welcome Admin</h2><input type="text" name="name" placeholder="Full Name"/>' +
                            '<br/><input type="text" name="rank" placeholder = "Rank"/><br/>' +
                            '<input type="text" name="year" placeholder = "Year Joined"/><br/>' + 
                            '<input type="text" name="position" placeholder = "Position (Optional)"/><br/>' +
                            '<input id="submit" type="submit" name="submit" value="Submit"/><br/>');
                });

                $('#adminDiv').on('click', ':submit', function(){
                    var myDiv = $('#adminDiv');
                    var name = myDiv.find('input[name="name"]').val();
                    var rank = myDiv.find('input[name="rank"]').val();
                    var year = myDiv.find('input[name="year"]').val();
                    var position = myDiv.find('input[name="position"]').val();

                    if(name == ''){
                        myDiv.find('input[name="name"]').css("border-color", "red");
                    }
                    if(rank == ''){
                        myDiv.find('input[name="rank"]').css("border-color", "red");
                    }
                    if(year == ''){
                        myDiv.find('input[name="year"]').css("border-color", "red");
                    }
                    if(isNaN(year)){
                        alert("Year must be a number");
                    }

                    if(name != '' && rank != '' && year != ''){
                        $.post("addMemberProcess.php", {name: name, rank: rank, year: year, position: position}, function(data){
                        if(data == '1'){
                            $('#adminDiv').append('<p>Added member ' + name + ' successfully</p>');
                        }
                    });
                    }
                });

        </script>
        <?php
        }
        ?>

</body> 
</html>