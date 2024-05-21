@extends('layout')
@section('title', 'Cửa hàng THC Batminton')
@section('content')


    <!-- cart star -->
    <section>
        <div class="container">
            
            <h1 class="mt-3"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</h1>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-9">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Thông tin sản phẩm</th>
                                <th class="text-center" scope="col">Đơn giá</th>
                                <th class="text-center" scope="col">Số lượng</th>
                                <th class="text-center" scope="col">Thành tiền</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ảnh</td>
                                <td>tên sp</td>
                                <td class="text-primary text-end">12k</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-primary text-end">@mdo</td>
                                <td class="text-center"><button class="btn btn-primary">Xóa</button></td>
                            </tr>
                            <tr>
                                <td>ảnh</td>
                                <td>tên sp</td>
                                <td class="text-primary text-end">12k</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-primary text-end">@mdo</td>
                                <td class="text-center"><button class="btn btn-primary">Xóa</button></td>
                            </tr>
                            <tr>
                                <td>ảnh</td>
                                <td>tên sp</td>
                                <td class="text-primary text-end">12k</td>
                                <td class="text-center">@mdo</td>
                                <td class="text-primary text-end">@mdo</td>
                                <td class="text-center"><button class="btn btn-primary">Xóa</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Đơn hàng</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">(3 sản phẩm)</h6>
                            <div class="d-flex justify-content-between">
                                <p class="card-text">Tổng đơn</p>
                                <p class="card-text">300k</p>
                            </div>
                            <a href="checkout.html" class="card-link btn btn-primary container-fluid">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart end -->
@endsection
