@extends('layouts.master')
@section('title')
    Inicio
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">

    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
    <style>
    .botoncal{
        background: transparent;
        border: none;
        color: white;
    }
    .botoncal:hover{
         font-size: 13px;
    }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-xxl-12 col-lg-6 order-first">
            <div class="row row-cols-xxl-4 row-cols-1">
                <div class="col">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total ventas</p>
                                    <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value"
                                            data-target="{{$contado+$credito}}">0</span></h4>
                                    <div class="d-flex align-items-center gap-2" style="display: none !important">
                                        <h5 class="badge badge-soft-success mb-0">
                                            <i class="ri-arrow-right-up-line align-bottom"></i> +18.30 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-secondary-subtle text-secondary rounded fs-3">
                                        <i class="ph-wallet"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="vr rounded bg-primary opacity-50" style="width: 4px;"></div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Costo Inventario </p>
                                    <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value"
                                                                              data-target="{{$costoinven[0]->suma}}">0</span> </h4>
                                    <div class="d-flex align-items-center gap-2"  style="display: none !important">
                                        <h5 class="badge badge-soft-success mb-0">
                                            <i class="ri-arrow-right-up-line align-bottom"></i> +1.67 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                                        <i class="ph-sketch-logo"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="vr rounded bg-warning opacity-50" style="width: 4px;"></div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Clientes nuevos</p>
                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value"
                                                                             data-target="{{(isset($clienuevos))?count($clienuevos) : 0 }}">0</span> </h4>
                                    <div class="d-flex align-items-center gap-2"  style="display: none !important">
                                        <h5 class="badge badge-soft-success mb-0">
                                            <i class="ri-arrow-right-up-line align-bottom"></i> +29.08 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-warning-subtle text-warning rounded fs-3">
                                        <i class="ph-user-circle"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="vr rounded bg-info opacity-50" style="width: 4px;"></div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Unidades vendidas</p>
                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value"
                                            data-target="{{$unidadesvendidas}}">0</span> </h4>
                                    <div class="d-flex align-items-center gap-2"  style="display: none !important">
                                        <h5 class="badge badge-soft-danger mb-0">
                                            <i class="ri-arrow-right-down-line align-bottom"></i> -2.74 %
                                        </h5>
                                        <p class="text-muted mb-0">than last week</p>
                                    </div>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-info-subtle text-info rounded fs-3">
                                        <i class="ph-storefront"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--end col-->

        <div class="col-xxl-9 order-last">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Facturas/Devoluciones</h4>
                    <div style=" display:  none">
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1Y
                        </button>
                    </div>
                </div><!-- end card header -->
                <form  method="post" name="form1" id="form1">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xxl-8">
                            <div id="line_chart_datalabel" data-colors='["--tb-secondary", "--tb-danger", "--tb-success"]'
                                class="apex-charts" dir="ltr">

                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="d-flex align-items-center gap-3 mb-4 mt-3 mt-xxl-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" data-provider="flatpickr"
                                        data-range-date="true" data-date-format="d/m/Y"
                                        data-deafult-date="" name="fechasreport" readonly="readonly" value="{{$fechasreport}}"
                                     >
                                    <div class="input-group-text bg-primary border-primary text-white">
                                        <button type="submit" class="botoncal" >Consultar</button>
                                    </div>
                                </div>
                                <div class="dropdown flex-shrink-0" style="display: none">
                                    <a class="text-reset dropdown-btn d-inline-block" href="#"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Download Report</a>
                                        <a class="dropdown-item" href="#">Export</a>
                                        <a class="dropdown-item" href="#">Import</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-6">
                                    <div class="p-3 border border-dashed border-bottom-0">
                                        <h5 class="mb-1">$<span class="counter-value" data-target="{{$contado}}">0</span></h5>
                                        <p class="text-muted mb-0">Contado</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-6">
                                    <div class="p-3 border border-dashed border-start-0 border-bottom-0">
                                        <h5 class="mb-1">$<span class="counter-value" data-target="{{$credito}}">0</span>
                                        </h5>
                                        <p class="text-muted mb-0">Credito</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-6">
                                    <div class="p-3 border border-dashed">
                                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="{{$facturas}}">0</span></h5>
                                        <p class="text-muted mb-0">Facturas</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-6">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1 text-danger "><span class="counter-value"
                                                data-target="{{$devoluciones}}">0</span></h5>
                                        <p class="text-muted mb-0">Devoluciones</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="card mt-4 mb-0 bg-info-subtle border-0" style="display: none">
                                <div class="card-body">
                                    <h5 class="fs-16">Reached 5k Customers</h5>
                                    <p class="text-muted">Hey! Awesome products! Can you share the best product name ?</p>
                                    <a href="statistics" class="btn btn-info btn-sm">See Report <i
                                            class="bi bi-arrow-right ms-1 align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                </form>
            </div>
            <div class="card overflow-hidden">
                <div class="position-absolute opacity-50 start-0 end-0 top-0 bottom-0"
                    style="background-image: url('build/images/sidebar/body-light-1.png');"></div>
                <div class="card-body d-flex justify-content-between align-items-center z-1">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <i class="ph-storefront display-6"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="card-title fw-medium fs-17 mb-1"> Necesitas  crear o actualizar algun producto?</h5>
                            <p class="mb-0">visita el tablero de productos <a href="/productos">en este enlace</a> </p>
                        </div>
                    </div>
                    <div>
                        <a href="productos/create" class="btn btn-success btn-label btn-hover rounded-pill"><i
                                class="bi bi-box-seam label-icon align-middle rounded-pill fs-16 me-2"></i> O crea un producto nuevo</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xxl-3 col-lg-6 order-0 order-xxl-last">
            <div class="card card-height-100">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h6 class="card-title flex-grow-1 mb-0">Ventas Sucursales</h6>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">Reportes<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Ver detallado</a>
                                    <!--<a class="dropdown-item" href="#">Export</a>
                                    <a class="dropdown-item" href="#">Import</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 255px; display: none"></div>
                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 255px; display: none"></div>

                    <div class="">
                        <h4 class="mb-1">$ {{number_format($contado+$credito,2,',','.')}} <small class="fw-normal fs-14">Ventas totales</small></h4>
                        <p class="text-muted">{{$fechasreport}}</p>
                    </div>

                    @if(isset($sucursales))
                        <div class="table-responsive table-card mt-3">
                            <table class="table table-borderless table-striped align-middle table-sm fs-14 mb-0">
                                <tbody>
                                    @foreach($sucursales as $sucursal)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">

                                                    <h6 class="fw-medium fs-14 mb-0">{{$sucursal['descrip']}}</h6>
                                                </div>
                                            </td>
                                            <td align="right">
                                                {{number_format($sucursal['contado']+$sucursal['credito'],2,',','.')}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Ultimas Facturas</h4>

                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-centered align-middle table-nowrap mb-0" id="customerTable">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" data-sort="orderId">Documento</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Monto </th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Vendedor</th>
                                    <th scope="col">Estaci&oacute;n</th>
                                    <th style="display: none" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($documentosaux))
                                    @foreach($documentosaux as $documento)
                                        <tr>
                                            <td>
                                                <a href="orders-overview" class="fw-medium link-primary">{{$documento->numerod}}</a>
                                            </td>
                                            <td>
                                               <!-- <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Terry White</div>
                                                </div>-->
                                                {{$documento->descrip}}
                                            </td>
                                            <td align="right">
                                                ${{number_format($documento->totalventa,2,',','.')}}
                                            </td>
                                            <td>{{$documento->diames.' '.$documento->hora}} </td>
                                            <td>{{$documento->vendedor}}</td>
                                            <td>
                                                {{$documento->codesta}}
                                                <!--4.5 <i class="bi bi-star-half ms-1 text-warning fs-12"></i>--></td>
                                            <td style="display: none">
                                                <span class="badge badge-soft-info">New</span>
                                            </td>
                                        </tr><!-- end tr -->
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                        <div class="flex-shrink-0">
                            <div class="text-muted">
                                Listando <span class="fw-semibold"></span> de <span class="fw-semibold">{{$itemslist}}</span> Items
                            </div>
                        </div>
                        <ul class="pagination pagination-separated pagination-sm mb-0" style="display: none">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">←</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">→</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row widget-responsive-fullscreen">
        <div class="col-xxl-3">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Customer Satisfaction</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Download Report</a>
                                <a class="dropdown-item" href="#">Export</a>
                                <a class="dropdown-item" href="#">Import</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="area_chart_spline" data-colors='["--tb-primary", "--tb-success"]' class="apex-charts"
                        dir="ltr"></div>

                    <div class="mt-3 p-3 border rounded text-center">
                        <div class="row">
                            <div class="col-xl-6 border-end">
                                <h6 class="fs-17">$10,532</h6>
                                <p class="text-muted mb-0"><i
                                        class="bi bi-app-indicator text-primary align-middle me-1"></i> This Month</p>
                            </div>
                            <div class="col-xl-6">
                                <h6 class="fs-17">$9,532</h6>
                                <p class="text-muted mb-0"><i
                                        class="bi bi-app-indicator text-success align-middle me-1"></i> Last Month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Productos recien actualizados</h4>
                    <div class="flex-shrink-0">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#searchModal"  onclick="focusbusqueda(); $('#search-options').change(); $('#search-dropdown').fadeIn() " class="btn btn-soft-info btn-sm">
                            <i class="ri-file-list-3-line align-middle"></i> Ver todos
                        </a>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th width="5%" scope="col">Codigo</th>
                                    <th  width="70%"scope="col">Producto</th>

                                    <th  width="10%"scope="col">Costo</th>
                                    <th  width="10%"scope="col">Precio</th>

                                    <th  width="5%"scope="col">Fecha Actualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prdupdated as $producto)
                                    <tr>
                                        <td>
                                            <!--<a href="product-overview" class="fw-medium link-primary">#00541</a>-->
                                            <a href="{{route('productos.edit',$producto->id)}}" class="fw-medium link-primary">{{$producto->codprod}}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('productos.edit',$producto->id)}}" class="fw-medium link-primary">{{$producto->descrip}}</a>
                                        </td>
                                        <td align="right"> {{number_format($producto->preciod+$producto->preciod2,2,',','.')}}  </td>
                                        <td align="right"> {{number_format($producto->costod3,2,',','.')}}</td>
                                        <td>
                                            {{date("d/m/Y h:i a",strtotime($producto->updated_at))}}
                                        </td>
                                    </tr><!-- end tr -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6" style="display: none">
            <div class="card">
                <div class="card-header d-flex">
                    <h5 class="card-title flex-grow-1 mb-0">Product Delivery</h5>
                    <a href="#" class="flex-shrink-0">View All <i
                            class="ri-arrow-right-line align-bottom ms-1"></i></a>
                </div>
                <div class="card-body px-0">
                    <div data-simplebar style="max-height: 415px;">
                        <div class="vstack gap-3 px-3">
                            <div class="p-3 border border-dashed rounded-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt=""
                                            class="img-fluid d-block">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="product-overview">
                                            <h6>Men's Running Shoes Activ... </h6>
                                        </a>
                                        <p class="mb-0">by: <span class="text-info">Aisha Bradley</span></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-warning">Shipping</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border border-dashed rounded-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/products/img-4.png') }}" alt=""
                                            class="img-fluid d-block">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="product-overview">
                                            <h6>Striped Baseball Cap</h6>
                                        </a>
                                        <p class="mb-0">by: <span class="text-info">Edgar Bailey</span></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-success">Delivered</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border border-dashed rounded-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/products/img-3.png') }}" alt=""
                                            class="img-fluid d-block">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="product-overview">
                                            <h6>350 ml Glass Groce...</h6>
                                        </a>
                                        <p class="mb-0">by: <span class="text-info">Adam Small</span></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-danger">Out of Delivery</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border border-dashed rounded-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt=""
                                            class="img-fluid d-block">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="product-overview">
                                            <h6>Monte Carlo Sweaters</h6>
                                        </a>
                                        <p class="mb-0">by: <span class="text-info">Evie Merrill</span></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-success">Delivered</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border border-dashed rounded-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                        <img src="{{ URL::asset('build/images/products/img-9.png') }}" alt=""
                                            class="img-fluid d-block">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="product-overview">
                                            <h6>Ceramic Coffee Mug</h6>
                                        </a>
                                        <p class="mb-0">by: <span class="text-info">Keaton Larson</span></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-warning">Shipping</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6" style="display: none">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Categories</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Download Report</a>
                                <a class="dropdown-item" href="#">Export</a>
                                <a class="dropdown-item" href="#">Import</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multiple_radialbar"
                        data-colors='["--tb-primary", "--tb-danger", "--tb-success", "--tb-secondary"]'
                        class="apex-charts" dir="ltr"></div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card text-center border-dashed mb-0">
                                <div class="card-body">
                                    <h6 class="fs-16">986</h6>
                                    <i class="bi bi-square-fill text-primary me-1 fs-11"></i> Fashion
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center border-dashed mb-0">
                                <div class="card-body">
                                    <h6 class="fs-16">874</h6>
                                    <i class="bi bi-square-fill text-danger me-1 fs-11"></i> Electronics
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center border-dashed mb-0">
                                <div class="card-body">
                                    <h6 class="fs-16">321</h6>
                                    <i class="bi bi-square-fill text-success me-1 fs-11"></i> Groceries
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center border-dashed mb-0">
                                <div class="card-body">
                                    <h6 class="fs-16">741</h6>
                                    <i class="bi bi-square-fill text-secondary me-1 fs-11"></i> Others
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--<div class="col-xxl-3 col-lg-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Clientes nuevos </h4>
                    <a href="/clientes" class="flex-shrink-0">Todos<i
                            class="ri-arrow-right-line align-bottom ms-1"></i></a>
                </div>

                <div data-simplebar style="max-height: 445px;">
                    @if(isset($clienuevos))
                    @foreach($clienuevos as $cliente)
                    <div class="p-3 border-bottom border-bottom-dashed">
                        <div class="d-flex align-items-center gap-2">
                            <div class="flex-shrink-0" style="background-color: #88cde6">
                                <img src="{{ URL::asset('build/images/users/user-dummy-img.jpg') }}" alt=""
                                    class="rounded dash-avatar">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{$cliente->descrip}}</h6>
                                <p class="fs-13 text-muted mb-0">{{ date("d/m/Y h:i a",strtotime($cliente->created_at)) }}</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="btn btn-icon btn-sm btn-soft-danger"><i
                                        class="ph-phone"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="p-3 border-bottom border-bottom-dashed">
                            <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                         class="rounded dash-avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">No hay clientes nuevos</h6>
                                    <p class="fs-13 text-muted mb-0"></p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="mailto:careytommy@toner.com" class="btn btn-icon btn-sm btn-soft-danger">
                                        <i class="ph-phone text-light"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>-->
        <div class="col-xxl-3 col-lg-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Products</h4>
                    <div class="flex-shrink-0" style="display:none;">
                        <div class="dropdown card-header-dropdown" >
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Download Report</a>
                                <a class="dropdown-item" href="#">Export</a>
                                <a class="dropdown-item" href="#">Import</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body" data-simplebar style="max-height: 445px;">
                    @php
                        $porc      = 0;
                        $tantosprd = 0;
                        if(isset($topprod)){
                            foreach ($topprod as $top){
                                $tantosprd += $top->salidas;
                            }
                        }
                    @endphp
                    @if(isset($topprod))
                        @foreach($topprod as $top)
                            @php
                            if($tantosprd>0)
                             $porc = ($top->salidas / $tantosprd) *100;
                            @endphp

                            <div class="mb-4">
                                <span class="badge badge-soft-dark float-end">{{number_format($top->salidas,2,',','')}}</span>
                                <h6 class="mb-2">{{$top->producto->descrip}}</h6>
                                <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                                     aria-valuenow="{{$porc}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated"
                                         style="width: {{$porc}}%"></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!--
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">90%</span>
                        <h6 class="mb-2">Fashion & Clothing</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">64%</span>
                        <h6 class="mb-2">Lighting</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 64%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">77%</span>
                        <h6 class="mb-2">Footwear</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 77%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">53%</span>
                        <h6 class="mb-2">Electronics</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 53%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">81%</span>
                        <h6 class="mb-2">Beauty & Personal Care</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 81%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">96%</span>
                        <h6 class="mb-2">Books</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-secondary bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 96%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="badge badge-soft-dark float-end">69%</span>
                        <h6 class="mb-2">Furniture</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="69" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 69%"></div>
                        </div>
                    </div>
                    <div>
                        <span class="badge badge-soft-dark float-end">63%</span>
                        <h6 class="mb-2">Mobile Accessories</h6>
                        <div class="progress progress-sm" role="progressbar" aria-label="Success example"
                            aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-dark bg-opacity-50 progress-bar-striped progress-bar-animated"
                                style="width: 63%"></div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ URL::asset('build/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/world-merc.js') }}"></script>

    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>

    <script>
        //  Line chart datalabel
        var linechartDatalabelColors = getChartColorsArray("line_chart_datalabel");
        if (linechartDatalabelColors) {
            var options = {
                chart: {
                    height: 405,
                    zoom: {
                        enabled: true
                    },
                    toolbar: {
                        show: false
                    }
                },
                colors: linechartDatalabelColors,
                markers: {
                    size: 0,
                    colors: "#ffffff",
                    strokeColors: linechartDatalabelColors,
                    strokeWidth: 1,
                    strokeOpacity: 0.9,
                    fillOpacity: 1,
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: [2, 2, 2],
                    curve: 'smooth'
                },
                series: [{
                        name: "Ventas",
                        type: 'line',
                        data: [@foreach($intervalos as $index => $dato)
                                {{ number_format($dato,2,'.','').','}}
                            @endforeach ]
                    }/*,
                    {
                        name: "Refunds",
                        type: 'area',
                        data: [100, 154, 302, 411, 300, 284, 273, 232, 187, 174, 152, 122]
                    },
                    {
                        name: "Earnings",
                        type: 'line',
                        data: [260, 360, 320, 345, 436, 527, 641, 715, 832, 794, 865, 933]
                    }*/
                ],
                fill: {
                    type: ['solid', 'gradient', 'solid'],
                    gradient: {
                        shadeIntensity: 1,
                        type: "vertical",
                        inverseColors: false,
                        opacityFrom: 0.3,
                        opacityTo: 0.0,
                        stops: [20, 80, 100, 100]
                    },
                },
                grid: {
                    row: {
                        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.2
                    },
                    borderColor: '#f1f1f1'
                },
                xaxis: {
                    categories: [
                        @foreach($intervalos as $index => $intervalo)
                        "{{$index}}",
                        @endforeach
                    ],
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            toolbar: {
                                show: false
                            }
                        },
                        legend: {
                            show: false
                        },
                    }
                }]
            }

            var chart = new ApexCharts(
                document.querySelector("#line_chart_datalabel"),
                options
            );
            chart.render();
        }

        // world map with line & markers
        var vectorMapWorldLineColors = getChartColorsArray("world-map-line-markers");
        if (vectorMapWorldLineColors)
            var worldlinemap = new jsVectorMap({
                map: "world_merc",
                selector: "#world-map-line-markers",
                zoomOnScroll: false,
                zoomButtons: false,
                markers: [{
                        name: "Greenland",
                        coords: [71.7069, 42.6043],
                        style: {
                            image: "build/images/flags/gl.svg",
                        }
                    },
                    {
                        name: "Canada",
                        coords: [56.1304, -106.3468],
                        style: {
                            image: "build/images/flags/ca.svg",
                        }
                    },
                    {
                        name: "Brazil",
                        coords: [-14.2350, -51.9253],
                        style: {
                            image: "build/images/flags/br.svg",
                        }
                    },
                    {
                        name: "Serbia",
                        coords: [44.0165, 21.0059],
                        style: {
                            image: "build/images/flags/rs.svg",
                        }
                    },
                    {
                        name: "Russia",
                        coords: [61, 105],
                        style: {
                            image: "build/images/flags/ru.svg",
                        }
                    },
                    {
                        name: "US",
                        coords: [37.0902, -95.7129],
                        style: {
                            image: "build/images/flags/us.svg",
                        }
                    },
                    {
                        name: "Australia",
                        coords: [25.2744, 133.7751],
                        style: {
                            image: "build/images/flags/au.svg",
                        }
                    },
                ],
                lines: [{
                        from: "Canada",
                        to: "Serbia",
                    },
                    {
                        from: "Russia",
                        to: "Serbia"
                    },
                    {
                        from: "Greenland",
                        to: "Serbia"
                    },
                    {
                        from: "Brazil",
                        to: "Serbia"
                    },
                    {
                        from: "US",
                        to: "Serbia"
                    },
                    {
                        from: "Australia",
                        to: "Serbia"
                    },
                ],
                regionStyle: {
                    initial: {
                        stroke: "#9599ad",
                        strokeWidth: 0.25,
                        fill: vectorMapWorldLineColors,
                        fillOpacity: 1,
                    },
                },
                labels: {
                    markers: {
                        render(marker, index) {
                            return marker.name || marker.labelName || 'Not available'
                        }
                    }
                },
                lineStyle: {
                    animation: true,
                    strokeDasharray: "6 3 6",
                },
            });

        // Multi-Radial Bar
        var chartRadialbarMultipleColors = getChartColorsArray("multiple_radialbar");
        if (chartRadialbarMultipleColors) {
            var options = {
                series: [85, 69, 45, 78],
                chart: {
                    height: 300,
                    type: 'radialBar',
                },
                sparkline: {
                    enabled: true
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        dataLabels: {
                            name: {
                                fontSize: '22px',
                            },
                            value: {
                                fontSize: '16px',
                            },
                            total: {
                                show: true,
                                label: 'Sales',
                                formatter: function(w) {
                                    return 2922
                                }
                            }
                        }
                    }
                },
                labels: ['Fashion', 'Electronics', 'Groceries', 'Others'],
                colors: chartRadialbarMultipleColors,
                legend: {
                    show: false,
                    fontSize: '16px',
                    position: 'bottom',
                    labels: {
                        useSeriesColors: true,
                    },
                    markers: {
                        size: 0
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#multiple_radialbar"), options);
            chart.render();
        }

        //  Spline Area Charts
        var areachartSplineColors = getChartColorsArray("area_chart_spline");
        if (areachartSplineColors) {
            var options = {
                series: [{
                    name: 'This Month',
                    data: [49, 54, 48, 54, 67, 88, 96]
                }, {
                    name: 'Last Month',
                    data: [57, 66, 74, 63, 55, 70, 85]
                }],
                chart: {
                    height: 250,
                    type: 'area',
                    toolbar: {
                        show: false
                    }
                },
                fill: {
                    type: ['gradient', 'gradient'],
                    gradient: {
                        shadeIntensity: 1,
                        type: "vertical",
                        inverseColors: false,
                        opacityFrom: 0.3,
                        opacityTo: 0.0,
                        stops: [50, 70, 100, 100]
                    },
                },
                markers: {
                    size: 4,
                    colors: "#ffffff",
                    strokeColors: areachartSplineColors,
                    strokeWidth: 1,
                    strokeOpacity: 0.9,
                    fillOpacity: 1,
                    hover: {
                        size: 6,
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        top: -35,
                        right: 0,
                        bottom: 0,
                        left: -6,
                    },
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [2, 2],
                    curve: 'smooth'
                },
                colors: areachartSplineColors,
                xaxis: {
                    labels: {
                        show: false,
                    }
                },
                yaxis: {
                    labels: {
                        show: false,
                    }
                },
            };

            var chart = new ApexCharts(document.querySelector("#area_chart_spline"), options);
            chart.render();
        }
    </script>
@endsection
