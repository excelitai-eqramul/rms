

@include('admin.main_master')

            <div class="row form-gap" style="margin-top:100px">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">View Table</h4>
                         
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dt-buttons btn-group flex-wrap">
                                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                            <span>Copy</span></button>
                                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                                <span>Excel</span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                                <span>PDF</span></button>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button"
                                                    aria-haspopup="true" aria-expanded="false"><span>Column visibility</span>
                                                </button>
                                            </div>
                                         </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6"><div id="datatable-buttons_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons"></label>
                                            <a href="{{ route('table.add') }}" class="btn btn-success">Add Table</a> 

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                            <thead>
                                <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Outlet_Id</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                aria-label="Address: activate to sort column ascending">table_name</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                 aria-label="Contact_Person: activate to sort column ascending">seat_capacity</th>
                                 <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                  aria-label="Phone: activate to sort column ascending">description</th>

                                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                aria-label="Address: activate to sort column ascending">position</th>

                                
                                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                  aria-label="Action: activate to sort column ascending">Action</th>
                            </thead>
                            <tbody>

                                
                              @foreach ($table_view as $t_view )
                                        <tr>
                                          
                                          <td>{{$t_view->outlet_id}}</td>
                                          <td>{{$t_view->table_name}}</td>
                                          <td>{{$t_view->seat_capacity}}</td>
                                          <td>{{$t_view->description}}</td>
                                          <td>{{$t_view->position}}</td>
                                         
                                          
                                          
                                    
                                            <td style="display:flex"> 
                                             <a style="margin: 0px 6px" href="{{ route('table.edit', $t_view->id ) }}" class="btn btn-success">Edit</a> 

                                            <form action="{{ route('table.delete', $t_view->id ) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="p_id" id="p_id" value="{{$t_view->id}}">
                                                <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                                            </form>
                                        </td>     
                                    </tr>  
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                        <div class="col-sm-3"></div>
                    </div>
                        <!-- /.box-body -->
                      </div>
                    
                       @section('script')
                    
                      <script>
                          $('.deleteButton').on('click',function(e)
                          {
                    
                            event.preventDefault(); // prevent form submit
                            var form = event.target.form; // storing the form
                    
                            swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this imaginary file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                            })
                            .then((willDelete) => {
                            if (willDelete) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                                });
                                form.submit();
                    
                                
                            } else {
                                swal("Your imaginary file is safe!");
                            }
                            });
                    
                    
                    
                          });
                            
                      </script>
                          
                      @endsection  

                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="datatable-buttons_previous">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                        </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                            </li>
                                <li class="paginate_button page-item next" id="datatable-buttons_next">
                                    <a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
                </div>
                <!-- div colum end -->
                <div class="col-lg-2"></div>
                </div>
                <!-- main row end -->