<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <center><h1>Paises de la region</h1></center>
    <table class="table table-bordered"> 
        <thead>
            <tr class="p-3 mb-2 bg-primary text-white">
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>

                <td class= "text-primary" rowspan='{{ count($infopais["ciudades"]) }}'>
                    {{$pais}}

                </td>

                <td  rowspan ='{{ count($infopais["ciudades"]) }}'>
                    {{$infopais["capital"]}}
                    
                </td>

                <td class= "text-warning" rowspan = '{{ count($infopais["ciudades"]) }}'>
                    {{$infopais["moneda"]}}
                    
                </td>

                <td class= "text-success" rowspan = '{{ count($infopais["ciudades"]) }}'>
                    {{$infopais["poblacion"]}} millones hab.
                    
                </td>
                
                @foreach($infopais["ciudades"] as $ciudad)

                <th class="bg-success p-2 text-white bg-opacity-75" >
                        {{  $ciudad  }}
                </th>

                </tr>

                @endforeach

            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    
</body>
</html>