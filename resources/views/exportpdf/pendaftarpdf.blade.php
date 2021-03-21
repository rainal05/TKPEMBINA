<html>
<head>
    <meta charset="utf-8">
    <title>FORMULIR TK PEMBINA 2</title>

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
    <div>
        <h3 align="center" style="mb=10px">DINAS PENDIDIKAN KOTA JAMBI</h3>
        <h3 align="center">TAMAN KANAK – KANAK NEGERI PEMBINA 2 KOTA JAMBI</h3>
        <hr><br>
    </div>
    <div class="invoice-box">
        @foreach ($pendaftar as $pd)
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h5>Formulir Pendaftaran</h5>
                            </td>

                            <td>
                                <br><br><br><br>
                                <?= Date('d-m-Y', strtotime ($pd->created_at ??'' ));?>
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
                                <strong>Nama</strong><br>
                            </td>
                            <td><strong>:</strong></td>
                            <td></td><td></td><td></td>
                            <td>{{$pd->nama}}</td>
                            <td></td><td></td><td></td>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Jenis Kelamin</strong><br>
                            </td>
                            <td><strong>:</strong></td>
                            <td></td><td></td><td></td>
                            <td>{{$pd->jk}}</td>
                            <td></td><td></td><td></td>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tempat, Tanggal Lahir</strong><br>
                            </td>
                            <td><strong>:</strong></td>
                            <td></td><td></td><td></td>
                            <td><?= Date('d-m-Y', strtotime ($pd->ttl ??'' ));?></td>
                            <td></td><td></td><td></td>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Orang Tua</strong><br>
                            </td>
                            <td><strong>:</strong></td>
                            <td></td><td></td><td></td>
                            <td>{{$pd->calon_id}}</td>
                            <td></td><td></td><td></td>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                            <td>
                                <em><mark>Note ;</mark></em><br>
                                <em>Lakukan Pembayaran di Menu Pembayaran.</em><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        @endforeach

    </div>
</body>
</html>
