<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="nav">
        <h1>Portal dla wedkarzy</h1>


    </div>

    <div class="left">

        <div class="up">
            <h3>Ryby zamieszkujace rzeki</h3>
            <?php
            $servername ='localhost';
            $username = 'root';
            $password = '';
            $dbname = 'wedkowanie';

            $conn = new mysqli($servername,$username,$password,$dbname);
            $sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby. id=lowisko.Ryby_id and lowisko.rodzaj = 3;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>" . $row[0] . " lowisko.akwen " . $row[1] . ", " . $row[2] . "</li>"; 
                }
                echo "</ul>";
            } else {
                echo "0 results";
            }
           
            $conn->close();
            ?>
            <ul>
                <li></li>
            </ul>

        </div>

        <div class="down">
            <H3>Ryby drpiezne naszych wód</H3>

            <?php
            $servername ='localhost';
            $username = 'root';
            $password = '';
            $dbname = 'wedkowanie';

            $conn = new mysqli($servername,$username,$password,$dbname);
            $sql = "SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                echo "<table>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            
            $conn->close();
            ?>
            <table>
                <tr>
                    <td>L.p</td>
                    <td>Gatunek</td>
                    <td>Wystepowanie</td>
                  </tr>
                  <tr>
                    <td>cell1_2</td>
                    <td>cell2_2</td>
                    <td>cell3_2</td>
                  </tr>
                  <tr>
                    <td>cell1_3</td>
                    <td>cell2_3</td>
                    <td>cell3_3</td>
                  </tr>
            </table>

        </div>
    </div>

    <div class="right">
        <img src="ryba2.jpg" alt="Sum">
        

    <a href="kwarendy.txt">Pobierz kwerendy</a>


    </div>

    <div class="foter">
        <p>Strone wykonał: adam l</p>

    


    </div>
</body>

    
   