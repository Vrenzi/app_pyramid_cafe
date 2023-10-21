
<style>
    .container {
    width: 300px;
    margin: 0 auto; /* Mengatur margin otomatis ke kiri dan kanan untuk memusatkan elemen .container */
    text-align: center; /* Memusatkan teks dalam .container */
    }

    .header {
        margin: 0;
        text-align: center;
    }
    h2, p {
        margin: 0;
    }
    .flex-container-1 {
        display: flex;
        margin-top: 10px;
    }

    .flex-container-1 > div {
        text-align : left;
    }
    .flex-container-1 .right {
        text-align : right;
        width: 200px;
    }
    .flex-container-1 .left {
        width: 100px;
    }
    .flex-container {
        width: 300px;
        display: flex;
    }

    .flex-container > div {
        -ms-flex: 1;  /* IE 10 */
        flex: 1;
    }
    ul {
        display: contents;
    }
    ul li {
        display: block;
    }
    hr {
        border-style: dashed;
    }
    
</style>
<body>
<div class="container">
    <div class="header" style="margin-bottom: 30px;">
        <p class="my-5 mb-0 text-center" style="font-size: 30px;">Pyramid Coffee</p>
        <p class="mt-0 mb-1 text-center" style="font-size: 15px;">Ruko Nusaloka Blok RH no 1</p>
        <p class="mt-0 mb-4 text-center" style="font-size: 15px;">Jl Ciater Raya - 021123123</p>
    </div>
    <hr>
    <div class="flex-container-1">
        <div class="left">
            <ul>
                <li>No Order</li>
                <li>Kasir</li>
                <li>Tanggal</li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <li> {{ $order->id }} </li>
                <li> {{ $order->user_id }} </li>
                <li> {{ date('Y-m-d : H:i:s', strtotime($order->created_at)) }} </li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="flex-container" style="margin-bottom: 10px; text-align:right;">
        <div style="text-align: left;">Nama Product</div>
        <div>Harga/Qty</div>
        <div>Total</div>
    </div>
    @foreach ($order->transaction_details as $item)
        <div class="flex-container" style="text-align: right;">
            @php
                if(!empty($item->transaction_details->name)) {
                    $arr_name = explode(' ', $item->namaProduct->name);
                    $name = $arr_name[0];
                } elseif ($item->namaProduct->name != '') {
                        $name = $item->namaProduct->name;
                } else {
                    $name = 'there';
                }
            @endphp
            <div style="text-align: left;">{{ $item->qty }}x {{ $name }}</div>
            <div>Rp {{ number_format($item->namaProduct->price) }} </div>
            <div>Rp {{ number_format($item->price) }} </div>
        </div>
    @endforeach
    <hr>
    <div class="flex-container" style="text-align: right; margin-top: 10px;">
        <div></div>
        <div>
            <ul>
                <li>PPN</li>
                <li>Grand Total</li>
                <li>Pembayaran</li>
                <li>Kembalian</li>
            </ul>
        </div>
        <div style="text-align: right;">
            <ul>
                <li>10%</li>
                <li>Rp {{ number_format($order->total_transaction) }} </li>
                <li>Rp {{ number_format($order->total_payment) }}</li>
                <li>Rp {{ number_format($order->total_payment - $order->total_transaction) }}</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="header" style="margin-top: 50px;">
        <p class="my-5 mb-0 text-center" style="font-size: 30px;">Terima Kasih</p>
        <p>Silahkan berkunjung kembali</p>
    </div>
</div>

<script type="text/javascript">
window.print(); 
</script>

</body>
