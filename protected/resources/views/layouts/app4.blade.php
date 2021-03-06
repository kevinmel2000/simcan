<?php
use App\CekAkses;
use hoaaah\LaravelMenu\Menu;

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}" />

        <meta name="description" content="Sistem Perencanaan yang dikembangkan oleh Tim Simda BPKP">
        <meta name="author" content="Tim Simda BPKP">
        <link rel="icon" href="{{asset('simda-favicon.ico')}}">

        <title>simd@Perencanaan</title>

        <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-2.css')}}" rel="stylesheet">
        <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dataTables.fontAwesome.css') }}" rel="stylesheet">

        @yield('css')

        <style>
            /* body {
                background-image: linear-gradient(to bottom, rgb(96,108,136) 0%,rgb(63,76,107) 100%);
                height: 100%; 
                margin: 0; 
                background-repeat: no-repeat; 
                background-attachment: fixed;
        } */
            h1.padding {
                padding-right: 1cm;
            }

            #radioBtn .notActive {
                color: #b5b6b7;
                background-color: #fff;
            }
        </style>
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation"
                style="margin-bottom: 0; background: #0E203A; border-color: #ccc; box-shadow: 0 0 2px 0 #E8FFFF;">
                {{-- <div class="container"> --}}
                <div class="navbar-header">
                    <a class="navbar-brand navbar-right" href="{{ url('/home') }}"
                        style="margin-top: -5px; margin-left: 10px; max-height: 40px;">
                        <span class="fa-stack">
                            <i class="fa fa-square-o fa-stack-2x text-info"></i>
                            <i class="fa fa-home fa-stack-1x" style="color:#fff"></i>
                        </span>
                        <span style="color:#fff"> simd@<strong>SAKIP</strong> :: {{Session::get('xPemda')}}</span>
                        @if ( Session::get('AppType') === 0 )
                        <span class="label" style="background-color: #3a87ad; color:#fff;"> {{Session::get('versiApp')}}
                            - Provinsi </span>
                        @else
                        <span class="label" style="background-color: #f89406; color:#fff;"> {{Session::get('versiApp')}}
                        </span>
                        @endif
                    </a>
                </div>

                <ul class="nav navbar-top-links pull-right">
                    @if (Auth::guest())
                    <li class="dropdown" style="color:#fff">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                            style="color:#fff">
                            User <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-user" role="menu">
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <span style="color:#fff">
                        <i class="fa fa-flag fa-fw"></i> Tahun Anggaran:
                        <?= Session::get('tahun') != NULL ? Session::get('tahun') : 'Pilih!' ?></i>
                    </span>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                            style="color:#fff">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-user" role="menu">
                            <li>
                                <a href="{{ url('/home') }}"><i class="fa fa-home fa-fw text-info"></i> Home</a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw text-info"></i> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <?php
                            $akses = new CekAkses();
                            $menu = new Menu();
                            $menu->render([
                                'options' => [
                                    'ulId' => 'side-menu'
                                ],
                                'items' => [
                                    // [   'label' => 'Parameter AKIP', 
                                    //     'visible' => $akses->getMulti([910,911]),
                                    //     'items' => [
                                    //         [
                                    //             'label' => 'Struktur Organisasi',
                                    //             'visible' => $akses->get(910),
                                    //             'url' => '/kinparam/sotk',
                                    //         ],
                                    //         [
                                    //             'label' => 'Daftar Pegawai',
                                    //             'visible' => $akses->get(911),
                                    //             'url' => '/kinparam/pegawai',
                                    //         ]
                                    //     ]
                                        
                                    // ],
                                    [
                                        'label' => 'Indikator Kinerja Utama',
                                        'visible' => $akses->getMulti([920,921]),
                                        'items' => [
                                            ['label' => 'IKU Pemerintah Daerah', 'visible' => $akses->get(920), 'url' => '/iku',],
                                            ['label' => 'IKU Perangkat Daerah', 'visible' => $akses->get(921), 'url' => '/iku/opd',],
                                        ]
                                    ],
                                    [
                                        'label' => 'Perencanaan Kinerja',
                                        'visible' => $akses->getMulti([930,931,935,932,933,934]),
                                        'items' => [
                                            [
                                                'label' => 'Cascading Hasil Program-Kegiatan',
                                                'visible' => $akses->get(930),
                                                'url' => '/cascading',
                                            ],
                                            [
                                                'label' => 'Pohon Kinerja RPJMD & Renstra',
                                                'visible' => $akses->get(931),
                                                'url' => '/pokin',
                                            ],                                    
                                            [
                                                'label' => 'Penetapan Kinerja',
                                                'visible' => $akses->getMulti([935,932,933,934]),
                                                'items' => [
                                                    [
                                                        'label' => 'Penetapan Kinerja Pemda',
                                                        'visible' => $akses->get(935),
                                                        'url' => '/perkin/pemda',
                                                    ],
                                                    [
                                                        'label' => 'Penetapan Kinerja Level 1',
                                                        'visible' => $akses->get(932),
                                                        'url' => '/perkin',
                                                    ],
                                                    [
                                                        'label' => 'Penetapan Kinerja Level 2',
                                                        'visible' => $akses->get(933),
                                                        'url' => '/perkin/es3',
                                                    ],
                                                    [
                                                        'label' => 'Penetapan Kinerja Level 3',
                                                        'visible' => $akses->get(934),
                                                        'url' => '/perkin/es4',
                                                    ]
                                                ]
                                            ], 
                                        ]
                                    ],                                                                       
                                    [
                                        'label' => 'Pengukuran Kinerja',
                                        'visible' => $akses->getMulti([942,941,940,943]),
                                        'items' => [
                                            [
                                                'label' => 'Realisasi Kinerja Level 3',
                                                'visible' => $akses->get(942),
                                                'url' => '/real/es4',
                                            ],
                                            [
                                                'label' => 'Realisasi Kinerja Level 2',
                                                'visible' => $akses->get(941),
                                                'url' => '/real/es3',
                                            ],
                                            [
                                                'label' => 'Realisasi Kinerja Level 1',
                                                'visible' => $akses->get(940),
                                                'url' => '/real',
                                            ],
                                            [
                                                'label' => 'Realisasi Kinerja Pemda',
                                                'visible' => $akses->get(943),
                                                'url' => '/real/pemda',
                                            ]
                                        ]
                                    ],                                                                        
                                    [
                                        'label' => 'Pelaporan Kinerja',
                                        'visible' => $akses->get(950),
                                        'url' => '/lapor',
                                        // 'items' => [
                                        //     [
                                        //         'label' => 'Penetapan Kinerja',
                                        //         'visible' => $akses->get(20),
                                        //         'url' => '/lapor',
                                        //     ],
                                        //     [
                                        //         'label' => 'Realisasi Kinerja',
                                        //         'visible' => $akses->get(20),
                                        //         'url' => '',
                                        //     ],
                                        // ]
                                    ],
                                    // [
                                    //     'label' => 'Evaluasi',
                                    //     'visible' => $akses->get(30),
                                    //     'items' => [
                                    //         [
                                    //             'label' => 'Pelaporan Kinerja Level 1',
                                    //             'visible' => $akses->get(20),
                                    //             'url' => '',
                                    //         ],
                                    //     ]
                                    // ],
                                  
                                   
                                ]
                            ]);
                        ?>

                </div>
            </nav>

            <div id="page-wrapper" style="background-image: linear-gradient(to bottom, rgb(96,108,136) 0%,rgb(63,76,107) 100%);
            background-repeat: no-repeat; background-attachment: fixed;">
                <br>
                @yield('content')
            </div>

        </div>

        <script src="{{ asset('/js/jquery.min.js')}}"></script>
        <script src="{{ asset('/js/jquery-ui.js')}}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/js/handlebars.js')}}"></script>
        <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.checkboxes.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/input.js')}}"></script>
        <script src="{{ asset('/js/jquery.number.js')}}"></script>
        <script src="{{ asset('vendor/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('/js/sb-admin-2.js')}}"></script>
        <script src="{{ asset('/js/datepicker-id.js')}}"></script>
        <script type="text/javascript">
            function formatTgl(val_tanggal){
                var formattedDate = new Date(val_tanggal);
                var d = formattedDate.getDate();
                var m = formattedDate.getMonth();
                var y = formattedDate.getFullYear();
                var m_names = new Array("Januari", "Februari", "Maret", 
                  "April", "Mei", "Juni", "Juli", "Agustus", "September", 
                  "Oktober", "November", "Desember")
    
                var tgl= d + " " + m_names[m] + " " + y;
                return tgl;
            };

            function hariIni(){
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();

                var hariIni = yyyy + '-' + mm + '-' + dd;
                return hariIni;
            };

            function buatNip(string){
              return string.replace(/(\d{8})(\d{6})(\d{1})(\d{3})/,"$1 $2 $3 $4");
            }

            function nilaiNip(string){
              return string.replace(/\D/g,'').substring(0, 20);
            }

            $('#radioBtn a').on('click', function(){
                var sel = $(this).data('title');
                var tog = $(this).data('toggle');
                $('#'+tog).prop('value', sel);
                
                $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
                $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
            });
        </script>

        @yield('scripts')


    </body>

</html>