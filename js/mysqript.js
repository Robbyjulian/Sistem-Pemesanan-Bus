$(document).ready(function() {
	
	$('#type_bus').click(function(){
		var paket_per=parseInt($('#paket_per').val());
        var type_bus=parseInt($('#type_bus').val());
                
            if (paket_per == "1") {
                if (type_bus == "1") {
                    harga = 1600000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1300000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "2") {
                if (type_bus == "1") {
                    harga = 1500000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1200000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "3") {
                if (type_bus == "1") {
                    harga = 1200000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1400000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "4") {
                if (type_bus == "1") {
                    harga = 1500000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1200000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "5") {
                if (type_bus == "1") {
                    harga = 1650000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 2000000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "6") {
                if (type_bus == "1") {
                    harga = 1500000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1200000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "7") {
                if (type_bus == "1") {
                    harga = 1250000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1500000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "8") {
                if (type_bus == "1") {
                    harga = 800000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1000000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "9") {
                if (type_bus == "1") {
                    harga = 1250000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1750000;
                    $('#harga').val(harga);
                }
            } else if (paket_per == "10") {
                if (type_bus == "1") {
                    harga = 1450000;
                    $('#harga').val(harga);
                } else if (type_bus == "2") {
                    harga = 1700000;
                    $('#harga').val(harga);
                }
            } 
        // var lama=parseInt($('#lama').val());
        // var total = 0;

        // total = lama * harga;
        // $('#tot_byr').val(total);
	});

	$('#lama').keyup(function(){
		var lama=parseInt($('#lama').val());
        var harga=parseInt($('#harga').val());
        var total = 0;

        total = lama * harga;
        $('#total').val(total);
	});
});