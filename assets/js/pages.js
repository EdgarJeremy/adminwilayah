// ============= Pages Script

/* Index Page */
if (current_page === "" || current_page === "index") {

    $(function () {
        //Widgets count
        $('.count-to').countTo();

        //Sales count to
        $('.sales-count-to').countTo({
            formatter: function (value, options) {
                return '$' + value.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, ' ').replace('.', ',');
            }
        });

        initRealTimeChart();
        initDonutChart();
        initSparkline();
    });

    var realtime = 'on';

    function initRealTimeChart() {
        //Real time ==========================================================================================
        var plot = $.plot('#real_time_chart', [getRandomData()], {
            series: {
                shadowSize: 0,
                color: 'rgb(0, 188, 212)'
            },
            grid: {
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            lines: {
                fill: true
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                min: 0,
                max: 100
            }
        });

        function updateRealTime() {
            plot.setData([getRandomData()]);
            plot.draw();

            var timeout;
            if (realtime === 'on') {
                timeout = setTimeout(updateRealTime, 100);
            } else {
                clearTimeout(timeout);
            }
        }

        updateRealTime();

        $('#realtime').on('change', function () {
            realtime = this.checked ? 'on' : 'off';
            updateRealTime();
        });
        //====================================================================================================
    }

    function initSparkline() {
        $(".sparkline").each(function () {
            var $this = $(this);
            $this.sparkline('html', $this.data());
        });
    }

    function initDonutChart() {
        Morris.Donut({
            element: 'donut_chart',
            data: [{
                label: 'Pegawai Swasta',
                value: 37
            }, {
                label: 'Wirausaha',
                value: 30
            }, {
                label: 'Guru',
                value: 18
            }, {
                label: 'Sopir',
                value: 12
            },
                {
                    label: 'Tidak Bekerja',
                    value: 3
                }],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)', 'rgb(96, 125, 139)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }

    var data = [], totalPoints = 110;

    function getRandomData() {
        if (data.length > 0) data = data.slice(1);

        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50, y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }

            data.push(y);
        }

        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]]);
        }

        return res;
    }
}

/* Input Penduduk Page */
if (current_page === "input_penduduk") {


    $(function () {
        $('.datepicker').bootstrapMaterialDatePicker({
            format: 'DD/MMMM/YYYY',
            clearButton: true,
            weekStart: 1,
            cancelText: "Batal",
            clearText: "Kosongkan",
            time: false
        }).on("change", function (event, date) {
            $(this).focus();
        });

        $("#sudah_bekerja").on("change", function () {
            $("#pekerjaan").prop("disabled", !this.checked).val("");
        });
    });

}

/* Daftar Penduduk Page */
if (current_page === "daftar_penduduk") {
    $("#enter_search_input").on("keyup", function (ev) {
        var $form = $("#search_value_form");
        var val = $form.find("input").val($(this).val()).val();
        if (ev.keyCode === 13) {
            console.log(val);
            $form.submit();
        }
    })
}

/* Profil Wilayah */
if(current_page === "profil_wilayah") {
    $edit_mode = $("#edit_mode");
    $edit_mode.on("change",function(ev){
        $("#edit_form input,#edit_form textarea,#edit_form button").prop("disabled",!this.checked);
    });
    $triwulan = $("#triwulan");
    $triwulan.on("change",function(){
        console.log(1);
        window.location.href = base_url("panel/profil_wilayah/" + $(this).val());
    });
}

/* Input Pengguna */
if(current_page === "input_pengguna") {
    $level = $("#level");
    $kecamatan_container = $("#kecamatan_container");
    $kelurahan_container = $("#kelurahan_container");
    $lingkungan_container = $("#lingkungan_container");
    $kecamatan = $("#kecamatan");
    $kelurahan = $("#kelurahan");
    $lingkungan = $("#lingkungan");

    $kecamatan_container.hide();
    $kelurahan_container.hide();
    $lingkungan_container.hide();

    $level.on("change",function(){
        var level = $(this).val();
        if(level === "Pala") {
            $kecamatan_container.show();
            $kelurahan_container.show();
            $lingkungan_container.show();
        } else if(level === "Lurah") {
            $kecamatan_container.show();
            $kelurahan_container.show();
            $lingkungan_container.hide();
        } else if(level === "Camat") {
            $kecamatan_container.show();
            $kelurahan_container.hide();
            $lingkungan_container.hide();
        } else {
            $kecamatan_container.hide();
            $kelurahan_container.hide();
            $lingkungan_container.hide();
        }
    });
}

/* ---- General for semua halaman ----*/

$.getJSON(base_url("/panel/ambil_flash_notif"),function(response){
    for(var item in response) {
        if(response.hasOwnProperty(item)) {
            var status = (item.split("_")[item.split("_").length - 1] === "error") ? "bg-red" : "bg-green";
            showNotification(status,response[item],"bottom","center");
        }
    }
});

$(function () {
    //Advanced Form Validation
    $('#form_advanced_validation').validate({
        rules: {
            'date': {
                customdate: true
            },
            'creditcard': {
                creditcard: true
            }
        },
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });

    //==================================================================================================
});