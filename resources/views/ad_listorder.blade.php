@extends('ad_layout')
@section('title', 'Quản lý sản phẩm')
@section('content')

<main>
    <div class="head-title">
        <div class="left">
            <h1>Danh sách đơn hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Đơn hàng</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Trang chủ</a>
                </li>
            </ul>
        </div>
        <!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bx-cart'></i>
            <span class="text">
                <h3>10</h3>
                <p>Chờ xác nhận</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-cylinder'></i>
            <span class="text">
                <h3>1020</h3>
                <p>Đã giao thành công</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>2.000.000 ₫</h3>
                <p>Tổng doanh thu</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh sách sản phẩm</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <style>
                    th,
                    td {
                        text-align: center !important;
                    }

                    tr td:first-child {
                        justify-content: center;
                    }
                </style>
                <thead>
                    <tr>
                        <th scope="col">Đơn hàng</th>
                        <th scope="col">Ngày đặt</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><a href="#">#1</a></td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                        <td>01-10-2021</td>
                        <td><span class="d-inline-block text-truncate" style="max-width: 250px;">
                                địa chỉ This text is quite long, and will be truncated once displayed.
                            </span></td>
                    </tr>
                    <tr>
                        <td scope="row"><a href="#">#1</a></td>

                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td scope="row"><a href="#">#1</a></td>

                        <td>01-10-2021</td>
                        <td><span class="status process">Process</span></td>
                    </tr>
                    <tr>
                        <td scope="row"><a href="#">#1</a></td>

                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td scope="row"><a href="#">#1</a></td>

                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
    </div>
</main>

@endsection