<!DOCTYPE html>
<html>

<head>
    <title>Buku Besar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 10pt;
        }

    </style>
</head>

<body>
    <table class="table table-bordered" width="100%" align="center">
        <tr align="center">
            <td>
                <h2>Laporan Pendapatan<br>Klinik dr. Wahyudin</h2>
                <h3>Jl. Telagasari No.15 Karawang<h3>
                <hr>
            </td>
        </tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
            <tr>
                <th width="5%">Tanggal Transaksi</th>
                <th width="5%">ID Transaksi</th>
                <th width="10%">Akun perkiraan</th>
                <th width="5%">Debit</th>
                <th width="5%">Kredit</th>
            </tr>
        </thead>
        <tbody>
            @php
            $subtotal1 = 0;
            $subtotal2 = 0;
            @endphp
            @foreach ($transaksi as $trans)

            @foreach ($detail_trans as $detail)
            @if($loop->parent->first)
            <tr>
                <td>{{$trans->tgl_trans}}</td>
                <td>{{$detail->idTrans}}</td>
                <td>{{$detail->noAkun}} {{$detail->nmAkun}}</td>
                <td>{{number_format($detail->jmldb)}}</td>
                <td>{{number_format($detail->jmlcr)}}</td>
            </tr>
            <!-- hitung total debet dan kredit -->
            {{$subtotal1 += $detail->jmldb}};
            {{$subtotal2 += $detail->jmlcr}};
            @endif

            @endforeach
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>Rp. {{ number_format($subtotal1) }}</td>
                <td>Rp. {{ number_format($subtotal2) }}</td>
            </tr>
        </tbody>
    </table>
    <div align="right">
        <h6>Tanda Tangan</h6><br><br>
        <h6>{{ Auth::user()->username }}</h6>
    </div>
</body>

</html>
