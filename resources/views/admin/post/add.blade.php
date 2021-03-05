 @extends('admin.layout.main')
 @section('nav-title', 'Post')
 @section('style', 'nav-post')
 @section('tabs')
 <ul class="nav nav-tabs" id="myTab" role="tablist">
 	<li class="nav-item">
 		<a class="nav-link active" href="{{url('/post')}}" style="border:1px solid #9A0007; border-bottom: none;">All Post</a>
 	</li>
 	<li class="nav-item">
 		<a class="nav-link" href="{{url('/add')}}" style="color: #fff;
 		background-color: #9A0007;">Add Post</a>
 	</li>
 </ul>
 @endsection

 @section('content')
 <form>
 	<div class="row">
 		<div class="col-md-9">
 			<a href="{{url('/post')}}" class="btn btn-danger btn-bck"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Kembali</a>
 			<div class="card card-outline card-info" style="margin-top: 18px;">
 				<div class="card-body">
 					<div class="form-group">
 						<label>Judul</label>
 						<input type="text" class="form-control" name="" placeholder="Masukkan Judul">
 					</div>
 					<div class="form-group">
 						<label>Deskripsi</label>
 						<textarea id="summernote" name="desc"></textarea>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="col-md-3">
 			
 			<aside class=" control-sidebar-light side-add">

 				<div class="row">
 					<div class="col-md-6 text-center">
            <a href="" class="pertinjau"><i class="fa fa-eye fa-lg"></i> Pertinjau</a>
          </div>
          <div class="col-md-6 text-center">
            <a href="" class="publikasi"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Publikasi</a>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <a href="{{url('/draft')}}" class="draft"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save Draft</a>
          </div>
        </div>

        <div class="sidebar-menu">
         <ul class="drops">
           <li class="sidebar-dropdown">
            <a href="#">
              <span>Kategori</span>
                <i class="right fas fa-angle-left"></i>
            </a>
            <div class="sidebar-submenu">
             <ul class="nav nav-tabs tab-kategori" id="myTab" role="tablist">

              <li class="nav-item">
                <a class="nav-link active" id="all-kategori" data-toggle="tab" href="#allkategori" role="tab" aria-controls="allkategori" aria-selected="true">All Categories</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="add-kategori" data-toggle="tab" href="#addkategori" role="tab" aria-controls="addkategori" aria-selected="false">Add New</a>
              </li>

            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active allkategori" id="allkategori" role="tabpanel" aria-labelledby="all-kategori">
               <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>
            </div>

            <div class="tab-pane fade addkategori" id="addkategori" role="tabpanel" aria-labelledby="add-kategori">
              <div class="form-group">
                <label>Kategori Baru</label>
                <input type="text" class="form-control" name="kategori">
              </div>

              <div class="form-group">
                <select class="form-control" name="parent">
                  <option value="">Parent Category</option>
                </select>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-danger">Add</button>
              </div>
            </div>

          </div>
        </div>
      </li>

      <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Kategori</span>
                <i class="right fas fa-angle-left"></i>
            </a>
            <div class="sidebar-submenu">
             <ul class="nav nav-tabs" id="myTab" role="tablist">

              <li class="nav-item">
                <a class="nav-link active" id="all-kategori" data-toggle="tab" href="#allkategori" role="tab" aria-controls="allkategori" aria-selected="true">All Categories</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="add-kategori" data-toggle="tab" href="#addkategori" role="tab" aria-controls="addkategori" aria-selected="false">Add New</a>
              </li>

            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active allkategori" id="allkategori" role="tabpanel" aria-labelledby="all-kategori">
               <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Berita</label>
              </div>
            </div>

            <div class="tab-pane fade addkategori" id="addkategori" role="tabpanel" aria-labelledby="add-kategori">
              <div class="form-group">
                <label>Kategori Baru</label>
                <input type="text" class="form-control" name="kategori">
              </div>

              <div class="form-group">
                <select class="form-control" name="parent">
                  <option value="">Parent Category</option>
                </select>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-danger">Add</button>
              </div>
            </div>

          </div>
        </div>
      </li>
    </ul>
  </div>

</aside>



</div>
</div>
</form>

<script type="text/javascript">
  $(function () {
    // Summernote
    $('#summernote').summernote()
    airMode: true
  });


  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
      .parent()
      .hasClass("active")
      ) {
      $(".sidebar-dropdown").removeClass("active");
    $(this)
    .parent()
    .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
    .next(".sidebar-submenu")
    .slideDown(200);
    $(this)
    .parent()
    .addClass("active");
  }
});

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });




</script>

@endsection
