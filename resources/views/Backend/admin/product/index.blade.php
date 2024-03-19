@extends('Backend.components.layouts.master')
@section('title', 'Product Page')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Blog Page</h1> --}}
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3>List Product</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
                                <hr>
                                <table id="product" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ $product->name }}</td>
                                                <td><a href="{{ $product->image }}" data-fancybox="gallery">
                                                        <img src="{{ $product->image }}" alt="Image" width="90px"
                                                            height="90px">
                                                    </a></td>
                                                <td>{{ moneyFormat($product->price) }}</td>
                                                <td>{!! $product->description !!}</td>
                                                <td>
                                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> EDIT</a>
                                                    <button onClick="destroy(this.id)" id="{{ $product->id }}"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> HAPUS</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger" role="alert">
                                                data belum tersedia!
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main row -->

                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @section('custom-scripts')
        <!-- Page specific script -->
        <script>
            //ajax delete
            function destroy(id) {
                var id = id;
                var token = $("meta[name='csrf-token']").attr("content");

                Swal.fire({
                    title: 'APAKAH KAMU YAKIN ?',
                    text: "INGIN MENGHAPUS DATA INI!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'BATAL',
                    confirmButtonText: 'YA, HAPUS!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        //ajax delete
                        jQuery.ajax({
                            url: `/admin/product/${id}`,
                            data: {
                                "id": id,
                                "_token": token
                            },
                            type: 'DELETE',
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'BERHASIL!',
                                        text: 'DATA BERHASIL DIHAPUS!',
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then(function() {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'GAGAL!',
                                        text: 'DATA GAGAL DIHAPUS!',
                                        showConfirmButton: false,
                                        timer: 3000
                                    }).then(function() {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    }
                })
            }
            $(function() {
                $('#product').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endsection
@endsection