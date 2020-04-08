<?php
    $con =mysql_connect('localhost','root','');
    $db = mysql_select_db('search_bar');
?>
<html lang=en>
    <head>
        <title>Professional Search Bar</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <script type="text/javascript">
            function active(){
                var searchBar = document.getElementById('searchBar');

                if(searchBar.value == 'Search...'){
                    searchBar.value = ''
                    searchBar.placeholder = 'Search...'
                }
            }
            function inactive(){
                var searchBar = document.getElementById('searchBar');
                
                if(searchBar.value == ''){
                    searchBar.value = 'Search...'
                    searchBar.placeholder = ''
                }
            }
        </script>
    </head>
    <body>
        <form method="post" action="search.php"> <!--action="search.php" is the search page-->
            <input type="text" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="on" onmousedown="active()" onblur="inactive()"/><input type="submit" id="searchBtn" value="Submit"/>
        </form>
    </body>
</html>

