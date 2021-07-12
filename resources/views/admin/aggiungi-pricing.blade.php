@extends('admin.frame-public')
@section('link')
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Aggiungi Offerta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Aggiungi Offerta</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content" style="width: 53%;margin-inline: auto;">
            @if(isset($error))
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-6" style="flex: none;max-width: none;">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Offerta</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" id="aggiungiOffertaForm" action="{{ route('admin.aggiungi-pricing') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="titolo">Titolo</label>
                                    <input type="text" id="titolo" name="titolo" class="form-control"
                                           placeholder="titolo" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="scadenza">Data di scadenza</label>
                                    <input type="date" id="scadenza" name="scadenza" class="form-control"
                                           placeholder="data scadenza" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="sconto">Sconto</label>
                                    <input type="number" id="sconto" name="sconto" min="1" max="100"
                                           class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                    <label>Lista Eventi</label>
                                    <select class="form-control" id="evento" name="evento" required="required">
                                        <option value="" disabled selected>-- Seleziona evento --</option>
                                        @foreach(\App\Models\Event::all() as $event)
                                            <option value="{{ $event->id }}">{{ $event->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12" style="padding: 0 30px 5px 30px;">
                                    <input type="reset" onclick="location.href='{{ route('admin.aggiungi-pricing') }}'"
                                           class="btn btn-secondary" form="aggiungiOffertaForm" value="Cancella">
                                    <input type="submit" value="Aggiungi Offerta"
                                           class="btn btn-success float-right">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <style>
        .alert {
            opacity: 1;
            transition: opacity 0.6s; /* 600ms to fade out */
        }
    </style>


@endsection
@section('scriptssrc')
    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>
@endsection
@section('scriptsJS')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
    </script>
@endsection
