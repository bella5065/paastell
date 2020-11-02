<?php
 include "db.php";
?>
<html>
    <style>
        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-style: italic;
            background-color: aliceblue;
            border : 2px;
            border-style: double;
            padding: 10px;
            margin-top: 50px;
            margin-left: 220px;
            margin-right: 220px;
            margin-bottom: 100px;
            text-align: center;
        }

        body {
            background-color: 4A5C7B;
        }

        #video_table     {
            border:4px;
            bordercolor:black;
            margin: auto;
            width:70%;
            height:300px;
            font-size:20px;
           }

        #video_tr {
            text-align: center;
            padding: 10px;
        }

        #video_td {
            border: 3px solid #4A5C7B;
            background-color: white;
        }

        #subt_table     {
            background-color:white;
            border:4px;
            bordercolor:black;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
            width:70%;
            height:80px;
            font-size:30px;
           }

        #subt_tr {
            text-align: center;
            padding: 10px;
        }

        footer {
            border: 2px;
            margin-top: 10px;
            margin-right: 220px;
            margin-left: 220px;
            height: 30px;
        }
    </style>
    <title>paas-tell</title>
    <h1>paas-tell</h1>
    <head>

    </head>
    <body>
        <table id="video_table"> 
            <tr id="video_tr">
                <td id="video_td">video1</td>
                <td id="video_td">video2</td>
                <td id="video_td">video3</td>
            </tr>
        </table>
        <?php
         $sql = mq("select * from minutes order by id desc limit 1");
         while($minutes = $sql->fetch_array()){
        ?>
        <table id="subt_table">
            <tr id="subt_tr">
         <td colspan="3"><?php echo $minutes['context'] } ?></td>
            </tr>
        </table>

    </body>
    
    <footer>
        <p style="text-align: center;">by paas-tell</p>
    </footer>
</html>
