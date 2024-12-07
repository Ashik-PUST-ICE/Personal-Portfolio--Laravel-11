@include('admin.dashboard')


<div class="row">
    <div class="col-sm-9 col-xl-6">
      <div class="overflow-hidden card rounded-9">
        <div class="position-relative">



        <h1 style="color: white">Add Category</h1>

        <div class="div_deg">
          <form action="{{ url('add_category') }}" method="post">
            @csrf
            <div>
              <input type="text" name="category" required>
              <input type="submit" class="btn btn-primary" value="Add Category">
            </div>
          </form>
        </div>

        <div>
          <table class="table_deg">
            <tr>
              <th>Category Name</th>
              <th>Edit Category Name</th>
              <th>Delete</th>
            </tr>
            @foreach($data as $category)

            <tr>
              <td>{{ $category->category_name }}</td>
              <td>
                  <a class="btn btn-success" href="{{ url('edit_category',$category->id) }}">Edit</a>
              </td>
              <td>
                <a class="btn-danger" onclick="confirmation(event)" href="
                {{ url('delete_category', $category->id) }}">Delete</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>

      </div>
    </div>
</div>

  </div>


@include('admin.footer')







