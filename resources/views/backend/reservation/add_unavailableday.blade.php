unava

Adding reservation





@include('admin.main_master')


<div class="box_p" style="margin-left:450px" >
    <div class="box-header with-border">
      
    </div>
    <!-- /.box-header -->
    

    <div class="box-body">
      <div class="row">
        <div class="col-6">
      
          <form action="{{route('unavailable_day.store')}}" method="POST">
            
                @csrf
                <h2 class="box-title">Add Unavailable Day</h2>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="si" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">unavailable_date</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="unavailable_date" id="">
              </div>
            </div>

{{-- 
    
    
   
        //     $table->id();
        //     $table->string('si');
        //    $table->date('unavailable_date');
        //     $table->time('available_time');
        //     $table->timestamps();
    
    --}}


            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">available_time</label>
              <div class="col-sm-10">
                <input class="form-control" type="time" value="" name="available_time" id="">
              </div>
            </div>

            

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>



      
















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































