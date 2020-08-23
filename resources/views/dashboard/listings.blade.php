@include('includes.header');
<div class="content courses-div">
        <div class="content">
          <div class="container-fluid">
            <div class="row course-types">
                <div class="col-md-12 all-courses">
                 
                <h4>All Listings</h4>
             <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                    @if (session('success'))
                    <div class="alert alert-success">
            {{ session('success') }}
                    </div>
                    @endif
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover course-data" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                            <th>S.N</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Status</th>
                            <th class="disabled-sorting text-right">Action</th>

                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                             <th>S.N</th>
                          <th>Name</th>
                          <th>Slug</th>
                        <th>Status</th>
                        <th class="disabled-sorting text-right">Action</th>




                        </tr>
                      </tfoot>
                      <tbody>
                           <?php 
                           $count = 1;
                           foreach($listings as $listing){ ?>
                        <tr>
                             <td>{{$count}}</td>
                          <td>{{$listing->name}}
                           </td>
                          <td>{{$listing->slug}}</td>
                          <td><?php if($listing->status == 1){ echo "Publish";}else{echo "Draft";}?></td>
                        
                         <td class="disabled-sorting text-right"><a href="/edit-listing/{{$listing->id}}">EDIT</a>|<a href="/delete-listing/{{$listing->id}}">Delete</a></td>
                        
                        </tr>
                        <?php 
                        $count++;
                        } ?>
                        </tbody>
                        </table>
                        </div>
                
                
                </div></div>  
</div>
</div>
</div>
@include('includes.footer');
 <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>