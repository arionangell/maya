
@include('estructura.header')
@include('estructura.nav')
@include('estructura.aside')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         

            <!-- Profile Image -->
           @include('ventas.modcompras')
          @include('ventas.banca')

          <!-- /.col -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



















@include('estructura.footer')