@extends('layouts.admin')
@section('content')
<div class="page-container">
    @include('layouts.header')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Category List</strong>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;?>
                            @foreach ($categories as $key)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $key->Category_name }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                            



                        </tbody>
                    </table>
                    
                    
                </div>
                            
            </div>
        </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
@endsection
