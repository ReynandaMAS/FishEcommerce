@extends('layouts.admin')

@section('title')
    Product Gallery
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Product Gallery</h2>
      <p class="dashboard-subtitle">
        This is RYNStore Gallery Panel
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <a href="{{ route('product-gallery.create') }}" class="btn btn-primary mb-3">
                + Add New Product
              </a>
              <div class="table-responsive">
                <table class="table table-hover scroll-horizontal-vertical w-100 mt-3" id="crudTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script>
  // AJAX DataTable
  var datatable = $('#crudTable').DataTable({
    processing: true,
    serverSide: true,
    ordering: true,
    ajax: {
      url: '{!! url()->current() !!}'
    },
    columns: [
      {data: 'id', name: 'id'},
      {data: 'product.name', name: 'product.name'},
      {data: 'photos', name: 'photos'}, // relasi pake titik
      {
        data: 'action',
        name: 'action',
        orderable: false,
        searcable: false,
        width: '15%'
      },
    ]
  });
</script>
@endpush
