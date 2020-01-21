<div class="col-md-4">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Apertura</a></li>
                  <li class="nav-item"><a class="nav-link" href="#cambio" data-toggle="tab">Cambio</a></li>
                  <li class="nav-item"><a class="nav-link" href="#historial" data-toggle="tab">Histoial de ventas</a></li>
                </ul>
              </div><!-- /.card-header -->



              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                        @include('ventas.abrircaja')
                    </div>
                    <div class="active tab-pane" id="cambio">
                    
                        @include('ventas.cambio')
                    </div>
                    <div class="active tab-pane" id="historial">
                    
                        @include('ventas.historial')
                    </div>
                </div>
              </div>

               
                  