@extends('layout')
@section('title', 'Tin chi tiết')
@section('content')
 <!-- Breadcrumb START-->
 <div class="container py-3 fs-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-body text-decoration-none" href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a class="text-body text-decoration-none" href="#">Bài viết</a></li>
                <li class="breadcrumb-item active" aria-current="page">TP. Hồ Chí Minh</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb END-->

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <h1>{{$data->title}}</h1>
                    <p>{{$data->sub_title}}</p>
                    <hr class="border-3 rounded-pill border-success opacity-100" width="300px">
                    <p>{{$data->view}} lượt xem &bull; {{$data->date}} &bull; Tác giả ....</p>
                </div>
                <div>{{$data->content}}</div>

                <div class="mt-5">
                    <strong class="h3">Có thể bạn cũng thích</strong>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow">
                                <img src="public/img/app/c4.jpg
                                " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    <div class="mt-3">
                                        <img src="public/img/app/2d.jpg" height="50px" class="rounded-pill me-1" alt="">
                                        Tác giả
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5" id="comment">
                    <strong class="h3">Bình luận</strong>
                    <form class="card my-3 border-0 bg-light-subtle">
                        <div class="row g-0">
                            <div class="col-1">
                                <img src="public/img/app/ava1.jpg"class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-11">
                                <div class="card-body py-1 px-2">
                                    <h5 class="card-title">Tên người dùng</h5>
                                    <div class="d-flex gap-3">
                                        <textarea rows="2" class="w-100 bg-body rounded-1" placeholder="Bạn đang nghĩ gì?"></textarea>
                                        <button class="btn btn-success">Gửi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card my-3 border-0 bg-light-subtle">
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="public/img/app/ava1.jpg" width="60" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-10">
                                <div class="card-body py-1 px-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3 border-0 bg-light-subtle">
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="public/img/app/ava1.jpg" width="60" class="img-fluid rounded" alt="...">
                            </div>
                            <div class="col-10">
                                <div class="card-body py-1 px-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="position-sticky" style="top: 70px;">
                    <span class="d-block fs-5">
                        Cảm xúc của bạn
                    </span>
                    <button class="btn btn-outline-success"><i class="fa-regular fa-thumbs-up"></i></button>
                    <button class="btn btn-outline-warning"><i class="fa-solid fa-face-laugh-squint"></i></i></button>
                    <button class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></button>

                    <span class="d-block fs-5 mt-3">
                        Cảm nghĩ của bạn
                    </span>
                    <button class="btn btn-outline-primary"><i class="fa-regular fa-share-from-square"></i> Chia
                        sẻ</button>
                    <a href="#comment" class="btn btn-outline-primary"><i class="fa-regular fa-comment-dots"></i> Bình
                        luận</a>
                </div>
            </div>
        </div>
    </div>
@endsection
