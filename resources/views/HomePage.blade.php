@extends('Layouts.PageLayout')

@section('title', 'ระบบร้องเรียนปัญหาในชุมชน:บ้านเป็ด')

@section('CssPage')
    <link rel="stylesheet" href="{{ asset('Css_Layouts/Page.css') }}">
@endsection


@section('content')

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="container my-5">
        <br>
        <div class="container my-3">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <div class="carousel-picture">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 rounded"
                                                src="https://images.unsplash.com/photo-1726138087393-dd09fe4b60ce?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded"
                                                src="https://images.unsplash.com/photo-1726519160765-5c8f674eda1d?q=80&w=2023&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 rounded"
                                                src="https://images.unsplash.com/photo-1726519161022-61bbcce396ca?q=80&w=2023&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-3" style="max-width: 18rem">
                        <div class="card-header"> Header </div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">วันที่ 10/12/2567</h5>
                            <img src="https://images.unsplash.com/photo-1728388939226-3fc095526a91?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" width="250px">
                            <hr>
                            <p class="card-body-title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae inventore, dolorum
                                mollitia quisquam, cum repellendus delectus, quasi ex sapiente omnis veritatis autem eum?
                                Deleniti natus commodi neque. Illo, earum eaque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
