<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>Faculties Information</title> 
  
    <!-- INCLUDING JQUERY-->
    <script src= 
"https://code.jquery.com/jquery-3.5.1.js"> 
    </script> 
  
    <!-- CSS FOR STYLING THE PAGE -->
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color:#1a1aff; 
            font-size: xx-large; 
            font-family: 'Gill Sans',  
                'Gill Sans MT', ' Calibri',  
                'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #b3b3ff; 
            border: 1px solid black; 
        } 
  
        th{
            
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
            background-color: #b3b3ff; 
            border: 1px solid black; 
        } 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1><u>Car info (AJAX part)</u></h1> 
  
        <!-- TABLE CONSTRUCTION-->
        <table id='table'> 
            <!-- HEADING FORMATION -->
            <tr> 
                <th>Name</th> 
                <th>Type</th> 
                <th>Description</th> 
                <th>Code</th>
                <th>Place of Origin</th>  
            </tr> 
  
            <script> 
                $(document).ready(function () { 
  
                    // FETCHING DATA FROM JSON FILE 
                    $.getJSON("faculties.json",  
                            function (data) { 
                        var teacher = ''; 
  
                        // ITERATING THROUGH OBJECTS 
                        $.each(data, function (key, value) { 
  
                            //CONSTRUCTION OF ROWS HAVING 
                            // DATA FROM JSON OBJECT 
                            teacher += '<tr>'; 
                            teacher += '<td>' +  
                                value.Name + '</td>'; 
  
                            teacher += '<td>' +  
                                value.Gender + '</td>'; 
  
                            teacher += '<td>' +  
                                value.Course + '</td>'; 
  
                            teacher += '<td>' +  
                                value.Code + '</td>';

                            teacher += '<td>' +  
                                value.School + '</td>';      
  
                            teacher += '</tr>'; 
                        }); 
                          
                        //INSERTING ROWS INTO TABLE  
                        $('#table').append(teacher); 
                    }); 
                }); 
            </script>
            </table> 
    </section> 
</body> 
  
</html> 