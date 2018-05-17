<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" >
    <title>Utilidad </title>
</head>
<body style="background: white">
    <header class="row">
        <div class="col-xs-4">
            <img src="img/logo-claro-rojo.svg" class="img-responsive">
        </div>
        <div class="col-xs-6 col-xs-offset-2">
            <h3>CLARO</h3>
            <div> Calle 14 con Avenida 15 </div>
            <div>Universidad de Cundinamarca - Ext. Facatativá </div>
            <div> (+57 1) 892 0706 | 892 0707 </div>
            <div>
                <a href="mailto:unicundi@ucundinamarca.edu.co ">unicundi@ucundinamarca.edu.co</a>
            </div>
        </div>       
    </header>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" style="margin-top: 5%">
                <thead>
                    <tr class="success">
                        <th colspan="2">Ingreso</th>
                        <th colspan="2">${{ number_format($ingreso) }}</th>
                    </tr>
                    <tr class="warning">
                        <th colspan="2">Egreso</th>
                        <th colspan="2">${{ number_format($egreso) }}</th>
                    </tr>
                    <tr class="info">
                        <th colspan="2">Utilidad</th>
                        <th colspan="2">${{ number_format($utilidad) }}</th>
                    </tr>
                    <tr class="active">
                        <th>
                            Servicio
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Ingreso
                        </th>
                        <th>
                            Gasto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($solicitudes as $solicitud)
                    <tr>
                        <td>
                            {{$solicitud->servicio->nombre}}
                        </td>
                        <td>
                            {{$solicitud->created_at}}
                        </td>
                        <td>
                            {{$solicitud->ingreso}}
                        </td>
                        <td>
                            {{$solicitud->servicio->gasto}}
                        </td>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>