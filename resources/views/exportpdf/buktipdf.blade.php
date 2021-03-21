<html>
<head>
    <meta charset="utf-8">
    <title>KWITANSI TK PEMBINA 2</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        @foreach ($data as $dt)
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h5>Kwitansi Pembayaran</h5>
                            </td>

                            <td>
                                No #: {{$dt->user_id}}<br>
                                Dibayar: <?= Date('d-m-Y', strtotime ($dt->created_at ??'' ));?><br>
                                <?= Date('d-m-Y', strtotime ($dt->created_at ??'' ));?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Pembayar :<br>
                                {{$dt->nama}}<br>
                            </td>

                            <td>
                                <strong>{{$dt->sts->status}}</strong><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Jenis Pembayaran
                </td>
                <td>
                    Biaya
                </td>
            </tr>

            <tr class="item">
                <td>
                    Pakaian Seragam 4 Stel
                </td>

                <td>
                    Rp. 430.000
                </td>
            </tr>

            <tr class="item">
                <td>
                    Alat Tulis
                </td>

                <td>
                    Rp. 125.000
                </td>
            </tr>

            <tr class="item">
                <td>
                    LKS
                </td>

                <td>
                    Rp. 70.000
                </td>
            </tr>

            <tr class="item">
                <td>
                    SPP
                </td>

                <td>
                    Rp. 85.000
                </td>
            </tr>

            <tr class="item">
                <td>
                    Buku Raport
                </td>

                <td>
                    Rp. 65.000
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Pas Photo
                </td>

                <td>
                    Rp. 25.000
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: Rp. 800.000
                </td>
            </tr>
        </table>
        @endforeach

    </div>
</body>
</html>
