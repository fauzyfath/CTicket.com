
function Total() {
    var harga = parseInt(document.getElementById('harga').value);
    var jumlah = parseInt(document.getElementById('inp_jumlah').value);
    var total = jumlah * harga;
    var total2 = document.getElementById('total2');
    total2.value = "Rp. " + total;
}

function Metode() {
    var metode = document.getElementById('inp_metode').value;
    var rekening = document.getElementById('rekening');

    if (metode == 'BRI') {
        rekening.value = "BRI 73712832 A/N CTIKET.COM";
    }
    else if (metode == 'JAGO') {
        rekening.value = "JAGO 50552321 A/N CTIKET.COM";
    }
    else if (metode == 'GOPAY') {
        rekening.value = "GOPAY 6285936107720 A/N CTIKET.COM";
    }
}

function Price() {
    var seat = document.getElementById('seat').value;
    var harga = document.getElementById('harga');

    if (seat == 'VVIP (NUMBERED SEATING)') {
        harga.value = "7000000";
    }
    else if (seat == 'VIP (SEATING)') {
        harga.value = "5000000";
    }
    else if (seat == 'FESTIVAL (STANDING)') {
        harga.value = "3500000";
    }
    else if (seat == 'ALWAYS (STANDING)') {
        harga.value = "1000000";
    }
}