@extends('layout')
@section('title', 'Tin tức')
@section('content')
<!-- Content star -->
<section>
    <div class="container">
        <h1 class="mt-3"><i class="fa-regular fa-newspaper text-primary"></i> Tin tức</h1>
        <hr>
        <div class="row">
            <div class="col-lg-9 py-3">
                <div class="row">
                    @foreach($data as $tin)
                        <div class="card border-0 col-md-6 col-lg-4" style="background: none;">
                        <!-- {{ asset('img/banners/') }} -->
                            <img src="{{$tin->img}}" alt=""
                                class="img-fluid rounded-3">
                            <div class="position-relative rounded p-2 mx-2 text-center bg-body shadow" style="top: -25px;">
                                <a href="{{url('news_detail',[$tin->id])}}">
                                    <strong>{{$tin->title}}</strong>
                                </a>
                                <hr class=" my-2 border-3 border-primary rounded">
                                <div class="overflow-hidden" style="height:3rem;">{{$tin->sub_title}}</div>
                            </div>
                        </div>
                    @endforeach

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 py-3">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        Tìm kiếm tin tức
                    </div>
                    <div class="card-body">
                        <form class="d-flex gap-1">
                            <input type="text" name="" id="" class="form-control" placeholder="Tìm gì đó...">
                            <button class="btn btn-outline-primary"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header">
                        DANH MỤC SẢN PHẨM
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="text-body text-decoration-none">Đèn trang trí</a>
                                <span class="badge text-bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="text-body text-decoration-none">Đồ trang trí</a>
                                <span class="badge text-bg-primary rounded-pill">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="text-body text-decoration-none">Đồ nội thất</a>
                                <span class="badge text-bg-primary rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <a href="" class="text-body text-decoration-none">Thiết bị vệ sinh</a>
                                <span class="badge text-bg-primary rounded-pill">22</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header">
                        TIN TỨC NỔI BẬT
                    </div>
                    <div class="card-body p-2 pb-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-0 pb-2 mb-2">
                                <div class="card border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/banners/ynx-eclp-banner_1695178004.webp') }}"
                                                class="img-fluid rounded-start mt-1" alt="IMG">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body p-0 ps-2">
                                                <a href="" class="text-body text-decoration-none">5 Mẫu ghế sofa giá
                                                    rẻ dưới 2 triệu nhỏ gọn bán chạy nhất 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item p-0 pb-2 mb-2">
                                <div class="card border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/banners/ynx-eclp-banner_1695178004.webp') }}"
                                                class="img-fluid rounded-start mt-1" alt="IMG">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body p-0 ps-2">
                                                <a href="" class="text-body text-decoration-none">5 Mẫu ghế sofa giá
                                                    rẻ dưới 2 triệu nhỏ gọn bán chạy nhất 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item p-0 pb-2 mb-2">
                                <div class="card border-0">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ asset('img/banners/ynx-eclp-banner_1695178004.webp') }}"
                                                class="img-fluid rounded-start mt-1" alt="IMG">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body p-0 ps-2">
                                                <a href="" class="text-body text-decoration-none">5 Mẫu ghế sofa giá
                                                    rẻ dưới 2 triệu nhỏ gọn bán chạy nhất 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content end -->
@endsection