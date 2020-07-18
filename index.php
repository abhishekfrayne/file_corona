<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona_dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div style="background-image: url('https://www.osha.gov/SLTC/covid-19/istock-1208953647.jpg');">
   <div style="color:white;" class ="container">
       <h1 class=" text-center mt-5">Covid 19 Live Data</h1>
       <br><br>
       <table style="color:white;" class="table">
        <thead>
          <tr>
            <th>Total Cases</th>
            <th>Total Deaths</th>
            <th>Total Recovered</th>
          </tr>
        </thead>
        <tbody>
          <tr id ="data">
            
          </tr>
        </tbody>
      </table>
        <br>

      <button style="color:white;" onclick="refreshdata()" class ="btn btn-danger btn-block">
        Refresh data
        </button>    
    </div>
 

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


    init()


    function init(){
            var url ="https://api.covid19api.com/summary"

            $.get(url, function(data){

                console.log(data.Global)
                data= `
                <td>${data.Global.TotalConfirmed}</td>
                <td>${data.Global.TotalDeaths}</td>
                <td>${data.Global.TotalRecovered}</td>

                `
                $("#data").html(data)
            })

    }
 



function refreshdata()
    {
            clearData()
            init()
    }
    function clearData(){
        $("#data").empty
        

    }


</script>
</html>
