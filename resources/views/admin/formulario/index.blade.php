<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
                    body{
                margin-top:20px;
                background:#eee;
            }
            .gradient-brand-color {
                background-image: -webkit-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
                background-image: -ms-linear-gradient(0deg, #376be6 0%, #6470ef 100%);
                color: #fff;
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
                box-shadow: 0 1rem 3rem rgba(132,138,163,0.1) !important;
            }
    </style>
    <title>Document</title>
</head>
<body>
  
    
   
    <div class="container">
        <div class="contact__wrapper shadow-lg mt-n9">
            <div class="row no-gutters">
                
                <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                    <form action="#" class="contact-form form-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="fecha">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                            </div>
        
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="lugar">Lugar de la reunion</label>
                                    <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Sede o lugar de reunion">
                                </div>
                            </div>
        
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label  for="nombre">Nombre</label>
                                    <select class="form-control js-example-basic-single" name="nombre" id="nombre">
                                        <option value="1">Leonadr</option>
                                        <option value="2">Jonathan</option>
                                    </select>
                                </div>
                            </div>
        
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label class="required-field" for="motivo">Nombre de la reunion</label>
                                    <textarea class="form-control" id="motivo" name="motivo" rows="4" placeholder="Describa el motivo de la reunion."></textarea>
                                </div>
                            </div>
                            
        
                            <div class="col-sm-12 mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
        
                        </div>
                    </form>
                </div>
                <!-- End Contact Form Wrapper -->
                <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                    <h3 class="color--white mb-5">Get in Touch</h3>
        
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-envelope"></i></span> support@bootdey.com
                        </li>
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-phone"></i></span> (021)-241454-545
                        </li>
                        <li class="mb-4 pl-4">
                            <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> bootdey Technologies Inc.
                            <br> 2694 Queen City Rainbow Drive
                            <br> Florida 99161
        
                            <div class="mt-3">
                                <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon text-white">Get directions <i class="link__icon fa fa-directions"></i></a>
                            </div>
                        </li>
                    </ul>
        
                    <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                            <defs>
                                <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                    <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                                </linearGradient>
        
                            </defs>
                            <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                            <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                        </svg>
                    </figure>
                </div>
        
        
            </div>
        </div>
    </div>
    
</body>

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection




