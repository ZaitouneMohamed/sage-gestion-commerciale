<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Factutre N° {{ $order->id }} - {{ date('Y') }} </title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .color {
            background-color: red
        }

        .center {
            text-align: center;
            margin-top: 100px
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 2.4cm;
            background-color: #74c7e7;
            color: rgb(0, 0, 0);
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width:100%">
        <tr>
            <td style="width: 50%">
                {{-- <img style="margin-top: 50px" width="160px" height="75px" /><br> --}}
            </td>
            <td style="width: 50%">
                <b>Date</b> : {{ $order->order_date }} <br>
                <b>Facture N° : </b> {{ $order->id }} - {{ date('Y') }} <br>
            </td>
        </tr>
        <tr>
            <td style="width: 50%">
                <p>{{ $order->Company->company_name }} </p> <br>
                <p>{{ $order->Company->company_adresse }} </p> <br>
                <b>Telephone : </b> {{ $order->Company->company_phone }} <br>
                <b>email : </b> {{ $order->Company->company_email }} <br>
            </td>
            <td style="width: 50%">
                <b>Commande N° : </b> {{ $order->id }} - {{ date('Y') }} <br>
                <b>Date</b> : {{ $order->order_date }} <br>
                <b>Fournisseur : </b> null <br>
                <b>Email : </b> email@email.com <br>
                <b>Adresse : </b> adresse here <br>
                <b>Telephone : </b> 0600000000 <br>
            </td>
        </tr>
    </table>
    <br><br><br>
    <br><br><br>
    <table style="width:100%;border-collapse:collapse">
        <thead>
            <tr>
                <th style="border: 1px solid black">Description</th>
                <th style="border: 1px solid black">P.U</th>
                <th style="border: 1px solid black">QTé</th>
                <th style="border: 1px solid black">Prix Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderDetails as $item)
                @if ($loop->first)
                    @php
                        $fullprice = 0;
                    @endphp
                @endif
                @php
                    $fullprice += $item->quantity * $item->product_price;
                @endphp
                <tr>
                    <td style="border: 1px solid black">{{ $item->product_name }}</td>
                    <td style="border: 1px solid black">{{ $item->product_price }} </td>
                    <td style="border: 1px solid black">{{ $item->quantity }} </td>
                    <td style="border: 1px solid black">{{ $item->quantity * $item->product_price }} </td>
                </tr>
                @if ($loop->last)
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="border: 1px solid black">Prix HT</td>
                        <td style="border: 1px solid black">{{ $fullprice }} </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="border: 1px solid black">Prix Livraision</td>
                        <td style="border: 1px solid black">50</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="border: 1px solid black">Total</td>
                        <td style="border: 1px solid black">{{ $fullprice + 50 }} </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <footer>
        <span> ANGLE BD ABDELMOUMEN & RUE SOUMAYA RES SHEHRAZADE 3 ETG 4 N 20 Casablanca </span><br>
        0600038001 - RC: 543099 - Patente: 34778910 - Identifiant fiscal: 52459261 - ICE: 003068414000037 -
        CNSS:
        4537783 - EMAIL: <b>support@veryfrais.com</b>
    </footer>


</body>

</html>
