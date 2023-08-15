<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
                    body{
                margin-top:20px;
                background:#eee;
            }
            .gradient-brand-color {
                background-image: -webkit-linear-gradient(0deg, #67c52b 0%, #cbef64 100%);
                background-image: -ms-linear-gradient(0deg, #8dc52b 0%, #cbef64 100%);
                color: #fff;
            }
            .btn-felipe {
                background-color: #67c52b;
                color: #fff ;
            }
            
            .contact-info__wrapper {
                overflow: hidden;
                border-radius: .625rem .625rem 0 0
            }

            @media (min-width: 1024px) {
                .contact-info__wrapper {
                    border-radius: 0 .625rem .625rem 0;
                    padding: 5rem !important
                }
            }
            .contact-info__list span.position-absolute {
                left: 0
            }
            .z-index-101 {
                z-index: 101;
            }
            .list-style--none {
                list-style: none;
            }
            .contact__wrapper {
                background-color: #fff;
                border-radius: 0 0 .625rem .625rem
            }

            @media (min-width: 1024px) {
                .contact__wrapper {
                    border-radius: .625rem 0 .625rem .625rem
                }
            }
            @media (min-width: 1024px) {
                .contact-form__wrapper {
                    padding: 5rem !important
                }
            }
            .shadow-lg, .shadow-lg--on-hover:hover {
                box-shadow: 0 1rem 3rem rgba(132,10,163,0.1) !important;
            }
    </style>
    <title>Document</title>
</head>
<body>
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
    </div>
    @endif
    <form action="{{route('procesarFormulario')}}" method="post" accept="UTF-8" >
        @csrf
            <div class="container">
                <h1>Formulario para asistencia, con modificacion de fecha</h1>
                <div class="shadow-lg contact__wrapper mt-n9">
                    <div class="row no-gutters">
                        
                        <div class="p-5 col-lg-7 contact-form__wrapper order-lg-1">
                            <form action="#" class="contact-form form-validate" novalidate="novalidate">
                                <div class="row">
                                    <div class="mb-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="required-field" for="fecha">Fecha</label>
                                            <input type="datetime" class="form-control" id="fecha" name="fecha" value="{{$fechaHoraActual->format('Y-m-d H:i:s')}} " >
                                        </div>
                                    </div>
                
                                    <div class="mb-3 col-sm-6">
                                        <div class="form-group">
                                            <label for="lugar">Lugar de la reunion</label>
                                            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Sede o lugar de reunion" required>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 col-sm-12">
                                        <div class="form-group">
                                            <label  for="nombre">Nombre</label>
                                            <select class=" form-select select2-example" name="codigo_abogado" id="codigo_abogado" required>
                                                    <option value="0">Seleccione su nombre</option>
                                            
                                                @foreach ($abogados as $abogago)
                                                    <option value=" {{$abogago->id}} ">{{$abogago->nombre}}</option>
                                            
                                            @endforeach
                                            
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 col-sm-12">
                                        <div class="form-group">
                                            <label class="required-field" for="motivo">Nombre de la reunion</label>
                                            <textarea class="form-control" id="motivo" name="motivo" rows="4" placeholder="Describa el motivo de la reunion." required></textarea>
                                        </div>
                                    </div>
                                    
                
                                    <div class="mb-3 col-sm-12">
                                        <button type="submit" class="btn btn-felipe ">Reportar asistencia</button>
                                    </div>
                
                                </div>
                            </form>
                        </div>
                        <!-- End Contact Form Wrapper -->
                        <div class="p-5 col-lg-5 contact-info__wrapper gradient-brand-color order-lg-2">
                            <h3 class="mb-5 color--white">Reporte de Asistencia</h3>
                
                            <ul class="contact-info__list list-style--none position-relative z-index-101">
                                <li class="pl-4 mb-4">
                                    <span class="position-absolute"><i class="fas fa-vote-yea"></i></span> Equipo Juridico - Electoral Felipe Carreño Gobernador.
                                </li>
                                {{-- <li class="pl-4 mb-4">
                                    <span class="position-absolute"><i class="fas fa-phone"></i></span> (021)-241454-545
                                </li>
                                <li class="pl-4 mb-4">
                                    <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> 
                                    <br> 2694 Queen City Rainbow Drive
                                    <br> Florida 99161
                
                                    <div class="mt-3">
                                        <a href="https://www.google.com/maps" target="_blank" class="text-white text-link link--right-icon">Get directions <i class="link__icon fa fa-directions"></i></a>
                                    </div>
                                </li> --}}
                            </ul>
                
                           
                        </div>
                
                
                    </div>
                </div>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2-example').select2(); // Inicializa Select2 en elementos con la clase select2-example
        });
    </script>
</body>





