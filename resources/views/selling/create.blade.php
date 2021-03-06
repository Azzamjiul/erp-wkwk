{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tambah Selling</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                {{-- <h3 class="box-title">Tambah Selling</h3> --}}
                <div class="input-group-btn">
                    <button type="button" class="btn btn-warning">
                        <a href="{{route('selling.index')}}" style="color:azure">Kembali</a>
                    </button>
                </div>
            </div>

            <div class="box-body">
                <form action="">
                    @csrf

                    <div class="form-group">
                        <label for="">Product Code</label>
                        <input type="number" class="form-control" name="" id="" placeholder="Product Code">
                    </div>

                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Nama Barang">
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah Barang</label>
                        <input type="number" class="form-control" name="" id="" placeholder="Jumlah Barang">
                    </div>

                    <button class="btn btn-success">Add</button>

                </form>
            </div>


        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Barang</h3>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>Product Code</th>
                        <th>Nama Product</th>
                        <th>Harga Satuan</th>
                        <th>Quantity</th>
                        <th>Tax</th>
                        <th>Subtotal</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>89686041705-1</td>
                            <td>INDOMIE GORENG SPESIAL JUMBO</td>
                            <td>Rp 3.500</td>
                            <td>10</td>
                            <td>Rp 35.000</td>
                            <td>Rp 38.500</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th colspan="5"></th>
                        <th> <button class="btn btn-primary">Submit</button> </th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop