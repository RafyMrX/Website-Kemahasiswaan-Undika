 @extends('admin.layout.main')
 @section('nav-title', 'Post')
 @section('style', 'nav-post')
 @section('tabs')
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('/post')}}" style="color: #fff;
    background-color: #9A0007;">All Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/add')}}" style="border:1px solid #9A0007; border-bottom: none;">Add Post</a>
  </li>
</ul>
@endsection

@section('content')

<div class="row header-filter">
  <div class="col-md-4">
    <div class="shorts">
      <select class="form-control btn-filters">
        <option>Short By</option>
        <option value="">Paling Banyak Dilihat</option>
        <option value="">Paling Sedikit Dilihat</option>
        <option value="">Terbaru</option>
        <option value="">Terlama</option>
      </select>
    </div>

    <div class="filters">
      <button type="button" class="btn btn-danger btn-filters" data-toggle="modal" data-target="#exampleModalCenter">
        Filter
      </button>

      <!-- MODAL FILTER -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Filter</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="">
                <div class="row">
                  <div class="col-md-3">
                     <p class="text-center">Tanggal</p>
                    <div class="form-group">
                      <label>Dari</label>
                      <input type="date" name="tgl_awal" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Dari</label>
                      <input type="date" name="tgl_awal" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <p class="text-center">Kategori</p>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="">
                      <label class="form-check-label" for="defaultCheck1">
                        Berita
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="">
                      <label class="form-check-label" for="defaultCheck2">
                        Events
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" name="">
                      <label class="form-check-label" for="defaultCheck3">
                        Pedoman Mahasiswa
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" name="">
                      <label class="form-check-label" for="defaultCheck4">
                        Prestasi Mahasiswa
                      </label>
                    </div>




                  </div>
                  <div class="col-md-3">
                    <p class="text-center">Penulis</p>
                  </div>
                  <div class="col-md-2">
                    <p class="text-center">Status</p>

                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="publis" name="">
                      <label class="form-check-label" for="publis">
                        Published
                      </label>
                    </div>

                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Edit" name="">
                      <label class="form-check-label" for="Edit">
                        Edited
                      </label>
                    </div>

                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Edit" name="">
                      <label class="form-check-label" for="Edit">
                        Deleted
                      </label>
                    </div>

                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-filters">Filter</button>
            </div>
          </div>
        </div>
      </div>
      <!-- AKHIR MODAL FILTER -->
    </div>
    <div class="clear"></div>
  </div>
  <div class="col-md-5"></div>

  <div class="col-md-3">
    <a href="" class="btn drfts"><img src="{{url('assets/back/dist/icon/draft-white.png')}}" width="21">  Draft</a>
    <a href="{{url('/add')}}" class="btn btn-danger btn-add"> <img src="{{url('assets/back/dist/icon/add.png')}}" width="21">  Add Post</a>
  </div>
</div>

<div class="card" style="padding: 12px;">
  <div class="table-responsive">

    <table id="example1" class="table table-striped table-md">
      <thead class="th-color">
        <tr>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Penulis</th>
          <th>Status</th>
          <th>Terakhir Diedit</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>dfgdfg</td>
          <td>dddd<img src="" width="100"></td>
          <td>dgfdg</td>
          <td>dgfdgd</td>
          <td>dgdfg</td>
          <td class="text-center">
            <a href="" class="link-action" ><i class="fa fa-edit fa-lg"></i></a> 
            <a href="#" data-id="" class="link-action del" ><i class="fa fa-trash fa-lg"></i></a>

            <form action="" id="" method="post" class="d-inline">
              @method('delete')
              @csrf
            </form>
          </td>
        </tr>
      </tbody>

    </table>
  </div>
</div>

<script type="text/javascript">

    // DATA TABLES
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });

  </script>
  @endsection 