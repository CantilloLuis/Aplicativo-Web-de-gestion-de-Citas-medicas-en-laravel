@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])

<br>
<div class="container-fluid py-4">
    <div class="row">
        <h4>Bienvenido {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}</h4>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0  font-weight-bold">Pacientes</p>
                                <h5 class="font-weight-bolder">
                                    32
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">9%</span> desde <br> ayer
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="">
                                <img width="45" height="45" src="https://img.icons8.com/officel/40/triangular-bandage.png" alt="triangular-bandage" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0  font-weight-bold"> Medicos</p>
                                <h5 class="font-weight-bolder">
                                    12
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">4%</span> semana pasada
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="">
                                <img width="48" height="48" src="https://img.icons8.com/color/48/doctor-male-skin-type-3.png" alt="doctor-male-skin-type-3" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0  font-weight-bold">Especialidades</p>
                                <h5 class="font-weight-bolder">
                                    31
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">10%</span> ultimo trimestre
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="">
                                <img width="52" height="52" src="https://img.icons8.com/dusk/64/list--v1.png" alt="list--v1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0  font-weight-bold">Citas</p>
                                <h5 class="font-weight-bolder">
                                    2400
                                </h5>
                                <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+5%</span> mes <br> pasado
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="">
                                <img width="68" height="68" src="https://img.icons8.com/external-flat-circular-vectorslab/68/external-Doctor-Appointment-medical-and-health-care-flat-circular-vectorslab.png" alt="external-Doctor-Appointment-medical-and-health-care-flat-circular-vectorslab" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="">Interaccion con el aplicativo</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">45%</span> in 2024
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
                <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner border-radius-lg h-100">
                        <div class="carousel-item h-100 active" style="background-image: url('https://cdn.lecturio.com/assets/Featured-image-Student-Blog-Hospital-Team.jpg');
            background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <h5 class="text-white mb-1">Somos lideres</h5>
                                <p>Visitanos</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100" style="background-image: url('https://veigler.com/wp-content/uploads/2020/01/centro-medico-e1620819797482.jpg');
            background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <h5 class="text-white mb-1">Creelo</h5>
                                <p>Estas en buenas manos.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100" style="background-image: url('https://noticias.upc.edu.pe/wp-content/uploads/2022/07/Medicos-1-1.jpg');
            background-size: cover;">
                            <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                <h5 class="text-white mb-1">Comparte tu experiencia</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Sedes</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <img width="32" height="32" src="https://img.icons8.com/external-others-iconmarket/32/external-colombia-flags-others-iconmarket.png" alt="external-colombia-flags-others-iconmarket" />
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-xs font-weight-bold mb-0">Ciudades:</p>
                                            <h6 class="text-sm mb-0">Cartagena</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Usuarios:</p>
                                        <h6 class="text-sm mb-0">2500</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Especialidades:</p>
                                        <h6 class="text-sm mb-0">7</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Incremento:</p>
                                        <h6 class="text-sm mb-0">29.9%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <img width="32" height="32" src="https://img.icons8.com/external-others-iconmarket/32/external-colombia-flags-others-iconmarket.png" alt="external-colombia-flags-others-iconmarket" />
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="text-sm mb-0">Bogota</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">1923</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">5</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">11.2%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <img width="32" height="32" src="https://img.icons8.com/external-others-iconmarket/32/external-colombia-flags-others-iconmarket.png" alt="external-colombia-flags-others-iconmarket" />
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="text-sm mb-0">Medellin</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">2942</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">7</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">26.2%</h6>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <img width="32" height="32" src="https://img.icons8.com/external-others-iconmarket/32/external-colombia-flags-others-iconmarket.png" alt="external-colombia-flags-others-iconmarket" />
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="text-sm mb-0">Cali</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">2546</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">6</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">34%</h6>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Especialidades</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">

                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="text-center">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/doctor-male-skin-type-3.png" alt="doctor-male-skin-type-3" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Odontologia</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>


                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="text-center">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/doctor-male-skin-type-3.png" alt="doctor-male-skin-type-3" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Cardiologo</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="text-center">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/doctor-male-skin-type-3.png" alt="doctor-male-skin-type-3" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Medicina interna</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="text-center">
                                    <img width="48" height="48" src="https://img.icons8.com/color/48/doctor-male-skin-type-3.png" alt="doctor-male-skin-type-3" />
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Pediatria</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection

@push('js')
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "visitas",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#fb6340",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
@endpush