@extends('layouts.nav')
@section('viteimports')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
@endsection
@section('content')
    <div id="calendar"></div>
    <div id="horasdisponibles"></div>
    <script>
        $('#calendar').fullCalendar({
            // configuraciones
            events: [
                @foreach ($reservas as $r)
                    {
                        title: 'Reservado',
                        start: '{{ $r->fecha_reserva }}',
                        allDay: true
                    },
                @endforeach
            ],
            select: function(startDate, endDate) {
                selectedDate = startDate;
                // Realizar petición AJAX para obtener las horas disponibles en esa fecha
                $.ajax({
                    url: '/horasdisponibles',
                    type: 'GET',
                    data: {
                        fecha: selectedDate.format()
                    },
                    success: function(horas) {
                        // Mostrar las horas disponibles en una caja de texto o en una lista
                        $('#horasdisponibles').html(horas);
                    }
                });
            },
            selectable: true,
            customButtons: {
                confirmReservation: {
                    text: 'Confirmar reserva',
                    click: function() {
                        var events = $('#calendar').fullCalendar('clientEvents', function(event) {
                            return event.start.format() == selectedDate.format();
                        });
                        if (events.length < 1) {
                            var title = "Reservado";
                            if (title) {
                                $('#calendar').fullCalendar('renderEvent', {
                                    title: title,
                                    start: selectedDate,
                                    allDay: true
                                });
                            }
                        } else {
                            alert("Ya hay una reserva en esta fecha.");
                        }
                    }
                }
            },
            header: {
                left: 'prev,next today',
                center: 'confirmReservation title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventRender: function(event, element) {
                if (event.title) {
                    element.css('background-color', 'green');
                } else {
                    element.css('background-color', 'white');
                }
            }
        });
    </script>
@endsection
